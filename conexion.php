<?php
	
	$mysqli = new mysqli('localhost', 'id20518607_nirock', '(Upq7Sn1dE0YV6bJ', 'id20518607_metamusic');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>