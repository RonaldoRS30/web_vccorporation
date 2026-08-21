<?php
 	$server="localhost";
	$database="rural_ubigeo";
	$username="root";
	$password="";
	$conexion = mysql_connect($server, $username, $password);
	mysql_select_db($database, $conexion);
?>