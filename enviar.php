<?php 
function form_mail($sPara, $sAsunto, $sTexto, $sDe) { 
  $bHayFicheros = 0; 
  $sCabeceraTexto = ""; 
  $sAdjuntos = "";

  if ($sDe)$sCabeceras = "From:".$sDe."\n"; 
  else $sCabeceras = ""; 
  $sCabeceras .= "MIME-version: 1.0\n"; 
//  foreach ($_POST as $sNombre => $sValor) 
//  $sTexto = $sTexto."\n".$sNombre." = ".$sValor;
    $sTexto = $sTexto;

foreach ($_FILES as $vAdjunto) { 
   if ($bHayFicheros == 0) { 
      $bHayFicheros = 1; 
      $sCabeceras .= "Content-type: multipart/mixed;"; 
      $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

      $sCabeceraTexto = "----_Separador-de-mensajes_--\n"; 
      $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n"; 
      $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

      $sTexto = $sCabeceraTexto.$sTexto; 
   } 
   if ($vAdjunto["size"] > 0) { 
      $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n"; 
      $sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";; 
      $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n"; 
      $sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";

      $oFichero = fopen($vAdjunto["tmp_name"], 'r'); 
      $sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"])); 
      $sAdjuntos .= chunk_split(base64_encode($sContenido)); 
      fclose($oFichero); 
   } 
}

  if ($bHayFicheros) 
     $sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n"; 
  return(mail($sPara, $sAsunto, $sTexto, $sCabeceras)); 
}

$_nombre = $_POST['_name'];
$_mail = $_POST['_email'];
$_carrera = $_POST['_carrera'];
$_telefono = $_POST['_telefono'];



$cuerpo ="Los datos enviados son los siguientes: \n

Nombre: $_nombre\n
Email: $_mail\n
Carrera: $_carrera\n
Telefono: $_telefono\n";
$dequien =  $_mail;


if (form_mail("recursoshunanos@vc-corporation.com","cristina.silva@vc-corporation.com","Mensaje remitido del formulario de tu sitio web de V&C Corporation.com",$cuerpo, $dequien )) { 
  header ("Location: trabajecn.php"); 
   exit; 
}else{ 
 /* header ("Location: contactoerror.html"); */
  exit; 
} 
echo "Se ha enviado el mensaje correctamente";
?>