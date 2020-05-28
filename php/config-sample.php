<?php

return array(
    'email' => array(
        'send' => true,
        'subject' => 'Contacto desde geneos.com.ar',
        'from' => null, // De donde debe figurar enviado el mail. En caso de ser null figurara enviado desde la cuenta origen. En caso de no utilizar cuenta SMTP debe ingresar un valor.
        'fromName' => 'Landing Bagovit Covid-19',
        'to' => 'example@example.com', //Soporta valores separados por coma
        'fromAccount' => true, // Se utiliza una cuenta SMTP
        'host' =>  'smtp.example.com', //HOST SMTP. Solo si  fromAccount es true
        'username' => 'username@example.com.ar',  //User SMTP. Solo si fromAccount es true
        'password' => 'secret', //Password SMTP. Solo si fromAccount es true
        'debug' => false // Solo para debug, en produccion deberia ser false siempre.
    ),
    'csv' => array(
      'generate' => true, // Si se debe generar o no el archivo csv
      'password' => 's3cr3tp4ssw0rd', // Password que se solicitara al momento de descargar el archivo csv
      'filename' => 'submits.csv', // Nombre de el archivo csv, no hace falta cambiarlo a no ser que sea criticamente necesario
    )
    
);
?>
