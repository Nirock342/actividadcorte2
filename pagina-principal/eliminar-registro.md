---
description: elimina el registro escogido mediante el ID
---

# Eliminar registro

#### REGISTRO ELIMINADO

Regresar

```php
/* Este PHP elimina un registro de la base de datos basado en la ID. Luego muestra un mensaje que indica si la eliminación fue exitosa o no, y
proporciona un botón para volver a la página de index. El código HTML en el script se utiliza para que borre y muestre el mensaje y el botón. */
<?php

	require 'conexion.php';
	$id = $_GET['id'];	
	$sql = "DELETE FROM datos WHERE id = '$id'";
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
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>

```

[![www.000webhost.com](https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png)](https://www.000webhost.com/?utm\_source=000webhostapp\&utm\_campaign=000\_logo\&utm\_medium=website\&utm\_content=footer\_img)
