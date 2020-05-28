<?php
$config = include('config.php');

$pass = $_POST['pass'];

if ( $pass == $config['csv']['password'] )
{
  $fichero = '../csv/'.$config['csv']['filename'];

  if (file_exists($fichero)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename="'.basename($fichero).'"');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($fichero));
      readfile($fichero);
      exit;
  }
  else {
    die('el fichero no existe');
  }
}
else
{
    {?>
      <form method="POST">
      Ingrese password <input type="password" name="pass"></input><br/>
      <input type="submit" name="submit" value="Download"></input>
      </form>
    <?}
}
?>