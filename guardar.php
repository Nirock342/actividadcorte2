/* Este script PHP recibe datos de un formulario y los inserta en una base de datos MySQL.
incluye un archivo llamado "conexion.php" que contiene la información de conexión a la base de datos.eso
recupera los datos del formulario y lo asigna a las variables. Luego hace una consulta SQL para insertar los datos en la tabla "datos" en la
base de datos. despues, ejecuta la consulta y muestra un mensaje indicando si funciono o no, junto con un botón para volver a la página principal. */
<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$genero = $_POST['genero'];
	$autor = $_POST['autor'];
	$año = $_POST['año'];
	$remix = isset($_POST['remix']) ? $_POST['remix'] : 0;
	$para = isset($_POST['para']) ? $_POST['para'] : null;
	
	$arrayIntereses = null;
	
	$num_array = count($para);
	$contador = 0;
	
	if($num_array>0){
		foreach ($para as $key => $value) {
			if ($contador != $num_array-1)
			$arrayIntereses .= $value.' ';
			else
			$arrayIntereses .= $value;
			$contador++;
		}
	}
	
	$sql = "INSERT INTO datos (nombre, genero, autor, año, remix, para) VALUES ('$nombre', '$genero', '$autor', '$año', '$remix', '$arrayIntereses')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
