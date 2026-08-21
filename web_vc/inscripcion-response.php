<?php
 	//$server=".\SQL2000";
 	$server="vc-corporation.com"; 
	$database="vccorpor_db";
	$username="vccorpor_db";
	$password="c0rp0r4710n";
	$conexion = mysqli_connect($server,$username,$password);
	//$conexion = mssql_pconnect($server, $username, $password);
	mysqli_select_db($conexion,$database);

	
$nom = trim($_POST['nom']);
$car = trim($_POST['car']);
$emp = trim($_POST['emp']);
$cel = trim($_POST['cel']);
$ema = trim($_POST['ema']);

$sql = "insert into inscritos (email,nombre,cargo,empresa,celular) values ('$ema','$nom','$car','$emp','$cel');";

$res=mysqli_query($conexion,$sql);  

mysqli_close($conexion);

 header ("Location: inscripcion.php?_=Contacto&_email=1"); 

//echo "Se ha enviado el mensaje correctamente";
?>