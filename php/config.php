<?php

return array(
    'email' => array(
        'send' => true,
        'subject' => 'Contacto desde geneos.com.ar',
        'from' => null, // De donde debe figurar enviado el mail. En caso de ser null figurara enviado desde la cuenta origen. En caso de no utilizar cuenta SMTP debe ingresar un valor.
        'fromName' => 'geneos.com.ar',
        'to' => 'pablocho88@gmail.com', //Soporta valores separados por coma
        'fromAccount' => true, // Se utiliza una cuenta SMTP
        'host' =>  'mail.geneos.com.ar', //HOST SMTP. Solo si  fromAccount es true
        'username' => 'no-reply@geneos.com.ar',  //User SMTP. Solo si fromAccount es true
        'password' => '8dI?CT{E#pzy', //Password SMTP. Solo si fromAccount es true
        'debug' => false // Solo para debug, en produccion deberia ser false siempre.
    ),
    'csv' => array(
      'generate' => true, // Si se debe generar o no el archivo csv
      'password' => 'GeneosCoop2015', // Password que se solicitara al momento de descargar el archivo csv
      'filename' => 'submits.csv', // Nombre de el archivo csv, no hace falta cambiarlo a no ser que sea criticamente necesario
    )
    
);
?>
