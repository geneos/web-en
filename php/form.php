<?php
//Prevent Spam validation
if (!(isset($_POST["website"]) 
      && $_POST["website"] == "")
      && isset($_POST["url"])
      && $_POST["url"] == "" ) {
  exit;
}

require_once('lib/class.phpmailer.php');
require_once('lib/class.smtp.php');
require_once('lib/LogData.php');

$config = include('config.php');


/**
* Send mail method
*/
function sendMail($emailFrom,$emailTo,$subject,$message,$emailReply) {
  global $config;
  if ($config['email']['fromAccount'])
    return sendMailFromAccount($emailFrom,$emailTo,$subject,$message,$emailReply);
  else
    return sendMailFromServer($emailFrom,$emailTo,$subject,$message,$emailReply);
  
  }


/**
* Send mail method (From Server)
*/
function sendMailFromServer($emailFrom,$emailTo,$subject,$message,$emailReply) {
  global $config;
  $mailLogger = new LogData(['categoriaLog' => 'mail']);
  $smtpUsuario = $config['email']['username'];  // Mi cuenta de correo
  $smtpName = $config['email']['name']; 

  if ($emailFrom == null)
    $emailFrom = $smtpUsuario;

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $cabeceras .= 'From: '. $smtpName . '<' . $emailFrom . "> \r\n";
  $cabeceras .= 'Reply-To: '. $emailReply . "\r\n";
  $cabeceras .= 'X-Mailer: PHP/' . phpversion();
    
  try {
    $estadoEnvio = mail($emailTo, $subject, $message, $cabeceras);
  } catch (Exception $e) {
    $mailLogger->log($e->getTraceAsString());
    return false;
  }
  
  return $estadoEnvio;
}

/**
* Send mail method (From Account)
*/
function sendMailFromAccount($emailFrom,$emailTo,$subject,$message,$emailReply) {
  global $config;
  $mailLogger = new LogData(['categoriaLog' => 'mail']);
  $cleanMessage = false;
  

  // Datos de la cuenta de correo utilizada para enviar vía SMTP
  $smtpHost = $config['email']['host'];  // Dominio alternativo brindado en el email de alta 
  $smtpUsuario = $config['email']['username'];  // Mi cuenta de correo
  $smtpClave = $config['email']['password']; ;  // Mi contraseña
  $smtpName = $config['email']['name']; 
  
  if ($emailFrom == null)
    $emailFrom = $smtpUsuario;

  $mail = new PHPMailer(true); // Passing `true` enables exceptions
  try {
    $mail->SMTPDebug = $config['email']['debug']; 
    $mail->IsSMTP();

    if ($smtpClave != null) {
      $mail->SMTPAuth = true;
      $mail->Port = 587; 
      $mail->Username = $smtpUsuario; 
      $mail->Password = $smtpClave;
    }
    else{
      $mail->SMTPAuth = false;
      $mail->Port = 25; 
    }

    $mail->IsHTML(true); 
    $mail->CharSet = "utf-8";
    $mail->Host = $smtpHost; 


    $mail->From = $smtpUsuario; // Email desde donde envío el correo.
    $mail->FromName = $smtpName;
    
    $mail->AddReplyTo($emailFrom); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
    $emailTo = explode(',',$emailTo); // Multiples mail destino separados por coma
    foreach ($emailTo as  $email) {
      $mail->AddAddress( trim($email) ); 
    }

    $mail->Subject = $subject; // Este es el titulo del email.
  
    if ($cleanMessage)
      $mensajeHtml = nl2br($message);
    else
      $mensajeHtml = $message;
    $mail->Body = "{$mensajeHtml}"; // Texto del email en formato HTML
    $mail->AltBody = "{$message} \n\n "; // Texto sin formato HTML

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $estadoEnvio = $mail->Send(); 
  } catch (Exception $e) {
    $mailLogger->tolog('Error al enviar mail: '. $mail->ErrorInfo);
    $mailLogger->log($e->getTraceAsString());
    return false;
  }
  return $estadoEnvio;
}

/**
 * Writes submits to csv file
 */
function writeToCsv($nya,$tel,$email,$message){

  global $config;
  $csvLogger = new LogData(['categoriaLog' => 'csv']);

  $file_open = fopen('../csv/'.$config['csv']['filename'], "a");
  if (!$file_open)
    $file_open = fopen('../csv/'.$config['csv']['filename'], "w");

  $no_rows = count(file('../csv/'.$config['csv']['filename']));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'nya'  => $nya,
   'tel'  => $tel,
   'email' => $email,
   'message' => $message
  );
  if ( fputcsv($file_open, $form_data, ";") == null)
    $csvLogger->log('Hubo un error al escribir el archivo csv');

  fclose($file_open);
}



$subject =  $config['email']['subject'];
$emailTo = $config['email']['to'];
$emailReply = $_POST['email'];

// mensaje
$mensaje = '
<html>
<head>
  <title>' . $subject . '</title>
</head>
<body>
  <h2>' . $subject . '</h2>
  <br/>
  <table style="border: 1px solid black;">
    <tr>
      <td><b>Email</b></td><td>' . $_POST['email']. '</td>
    </tr>
    <tr>
      <td><b>Topic</b><td>' . $_POST['topic']. '</td>
    </tr>
    <tr>
      <td><b>Needs</b><td>' . $_POST['needs']. '</td>
    </tr>
  </table>
</body>
</html>
';

  //Process Form submission
  $message = $mensaje;

  if ($config['csv']['generate'])
    writeToCsv($_POST['nya'],$_POST['email'],$_POST['tel'],$_POST['mensaje']);

  $success = true;
  if ($config['email']['send']){
    if (! sendMail(null,$emailTo,$subject,$message,$emailReply) ){
      $success = false;
    }
  }

  header('Content-type: application/json');
  echo json_encode(['success' => $success]);
  exit;

?>