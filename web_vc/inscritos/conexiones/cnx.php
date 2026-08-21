<?php
 	//$server=".\SQL2000";
 	$server="vc-corporation.com"; 
	$database="vccorpor_db";
	$username="vccorpor_db";
	$password="c0rp0r4710n";
	$conexion = mysqli_connect($server,$username,$password);
	//$conexion = mssql_pconnect($server, $username, $password);
	mysqli_select_db($conexion,$database);
?>