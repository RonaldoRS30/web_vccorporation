<?php
 	//$server=".\SQL2000";
 	$server="localhost";
	$database="rural_agency";
	$username="rural_rural";
	$password="12345";
	$conexion = mysql_connect($server, $username, $password);
	mysql_select_db($database, $conexion);

?>