<?php
  

      ini_set( 'display_errors', 1 );

        error_reporting( E_ALL );
        $from = $_POST["Correo"];
        $to = "mgsolucionesintegrales7@gmail.com ";
        $subject = "Landing Contacto" .$_POST["Nombre"].$_POST["Apellido"].$_POST["Celular"];
        $message =  $_POST["Mensaje"];
        $headers = "From:" . $from;
      
        mail($to,$subject,$message, $headers);
        echo "The email message was sent.";
    

?>