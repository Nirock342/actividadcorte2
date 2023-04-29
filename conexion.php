/* Este código PHP crea una nueva instancia de la clase mysqli y conecta a una base de datos MySQL
con las credenciales dadas por mí. el if indica que si hay un error en la conexión, mostrará un error
y termina el script usando la función `die()`. */
<?php
	
	$mysqli = new mysqli('localhost', 'id20518607_nirock', '(Upq7Sn1dE0YV6bJ', 'id20518607_metamusic');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>