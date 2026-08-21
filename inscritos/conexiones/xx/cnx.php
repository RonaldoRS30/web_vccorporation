<?php
 	//$server=".\SQL2000";
 	$server="localhost";
	$database="rural_agency";
	$username="rural_rural";
	$password="12345";
	$conexion = mysqli_connect($server,$username,$password);
	//$conexion = mssql_pconnect($server, $username, $password);
	mysqli_select_db($conexion,$database);
?>