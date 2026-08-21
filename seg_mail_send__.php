<?php
$_mailo  = $_POST['_mailo'];
$_maild  = $_POST['_maild'];
$_asun   = $_POST['_asun'];
$_msje   = $_POST['_msje'];

$destino   =  $_maild;
$asunto    =  $_asun;
$cabeceras = "Content-type: text/html";
$cuerpo    =  $_msje."\r\n\r\n";
$dequien   = "From: $_mailo\r\n";

$_emails = explode(",",$_maild);
foreach($_emails as $val) {
  if ($val!=""){  
      if (mail($val,$asunto,$cuerpo,$dequien)){ 
        $_img = "i_con.gif";
     //header ("Location: contactoenviado.html"); 
    // exit; 
      } else { 
        $_img = "i_err.gif";
     //header ("Location: contactoerror.html"); 
   // exit; 
     } 
  } 
}
header ("Location: seg_mail_send_est.php?_img=".$_img);
?>
