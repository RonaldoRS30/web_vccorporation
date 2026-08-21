<?php
$name = trim($_POST['name']);
if (empty($name)){
	return true;
}else{
	return false;
}
$email = trim($_POST['email']);
if (empty($email)){
	return true;
}else{
	return false;
}
$empresa = trim($_POST['url']);
if (empty($empresa)){
	return true;
}else{
	return false;
}
$mensaje = trim($_POST['message']);
if (empty($mensaje)){
	return true;
}else{
	return false;
}

 $destino ="ventas@vc-corporation.com";
/*$destino ="david.veliz@vc-corporation.com"; */
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
exit; 
} else { 
  /* header ("Location: contact.html"); */
exit; 
} 
echo "Se ha enviado el mensaje correctamente";
?>