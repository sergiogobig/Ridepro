<?php

$email_index= $_POST['email_index'];
$nombre_index= $_POST['nombre_index'];
$mensaje_index=  $_POST['mensaje_index'];
$to = 'micaelsosa@fernandosor.edu.co';

$subject = 'MotoFest | Solicitud de Información';

$headers = "From: " . $_POST['nombre_index'] . "\r\n";
$headers .= "Reply-to: no-rely@ridepro.co\r\n";;
$headers .= "CC: michael@msestudios.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// $message = "<p><strong>This is strong text</strong> while this is not.</p>NOMBRE:  " . $nombre_index . "\n" . "EMAIL:  " . $email_index . "\n\n" . "MENSAJE: " . "\n\n" . $_POST['mensaje_index'] . "\n\n" . "Mensaje enviado desde index 'www.gobig.com.co'.";
$message = '<html><body>';
$message .= '<img style="width: 8rem; margin-left: 10%;" src="www.kimed.com.co/kimed/images/logo/favicon.png" alt="Kimed Logo" />';
$message .= '<br><br>';
$message .= '<table rules="all" style="border-color: blue;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . $nombre_index . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email_index . "</td></tr>";
$message .= "<tr><td><strong>Mensaje:</strong> </td><td>" . $mensaje_index . "</td></tr>";
$message .= "</table>";
$message .= '<br><br>';
$message .= '<small><strong>Esta persona solicito infomación desde "ridepro.co/motofest"</strong></small>';
$message .= "</body></html>";


mail($to, $subject, $message, $headers);

?>
