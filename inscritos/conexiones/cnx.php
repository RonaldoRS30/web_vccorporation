<?php
 	//$server=".\SQL2000";
 	$server="vc-corporation.com"; 
	$database="vccorporation_db";
	$username="vccorporation_db";
	$password="Derek$2023";
	$conexion = mysqli_connect($server,$username,$password);
	//$conexion = mssql_pconnect($server, $username, $password);
	mysqli_select_db($conexion,$database);
?>