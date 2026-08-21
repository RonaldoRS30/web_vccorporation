<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$empresa = trim($_POST['url']);
$mensaje = trim($_POST['message']);
/*$destino ="david.veliz@vc-corporation.com";  */
 $destino ="comercial@vc-corporation.com";
$asunto = "Contacto VC-Corporation";
$cabeceras = "Content-type: text/html";
$cuerpo ="Hola, alguien te ha contactado por el formulario Web de tu sitio
Los datos enviados son los siguientes:
Nombre: $name
Email: $email
Empresa: $empresa
Y envio el siguiente comentario:
$mensaje";
$dequien = "From: $email\r\n";

if (mail($destino,$asunto,$cuerpo,$dequien)){ 
/* header ("Location: contact.html"); */
  // echo "Se ha enviado el mensaje correctamente";
exit; 
} else { 
  //echo "Error en el envio Intente otra vez...";
  /* header ("Location: contact.html"); */
exit; 
} 
//echo "Se ha enviado el mensaje correctamente";
?>