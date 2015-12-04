<?php

$name = $_POST['name'];
$latitude = $_POST['input_latitude'];
$longitude = $_POST['input_longitude'];

require 'class.phpmailer.php';
require 'class.smtp.php';

$mail = new PHPMailer();
  
$mail->IsSMTP();  // telling the class to use SMTP
  
$mail->SMTPDebug  = 0;     
  
$mail->Host     = "smtp.gmail.com"; // SMTP server
$mail->Port     = 587;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth   = true;
  
$mail->Username   = "ejercicio.asore@gmail.com";  // GMAIL username
$mail->Password   = "EjercicioAsore.1029";            // GMAIL password
  
$mail->SetFrom('ejercicio.asore@gmail.com', 'Ejercicio Asore');
  
$mail->Subject  = "Mis coordenadas!";
$mail->Body     = "Hola! Mi nombre es $name y me encuentro en las siguientes coordenadas:\nLatitud: $latitude\nLongitud: $longitude";
$mail->WordWrap = 100;

$mail->AddAddress("ojeda.javier94@gmail.com", "Javier Ojeda");
$status = $mail->Send();
if(!$status) {
	echo 'Algo ha pasado y no se pudo enviar el correo';
} else {
	echo 'El correo ha sido enviado.';
}
?>