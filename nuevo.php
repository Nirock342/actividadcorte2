/* Este HTML registra música. Incluye campos para el nombre, género, autor, año de
origen, si tiene un remix y casillas de verificación para qué es la música (cantar, bailar,
limpieza, etc). El formulario también incluye estilo Bootstrap y bibliotecas de JavaScript para volverlo mas
interactivo. Los datos del formulario se envían a un PHP para la base de datos. */
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
				<h3 style="text-align:center">NUEVO REGISTRO DE MUSICA</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Genero</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="genero" name="genero" placeholder="Genero" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Autor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
					</div>
				</div>
				
				<div class="form-group">
					<label for="año" class="col-sm-2 control-label">Año De Origen</label>
					<div class="col-sm-10">
						<select class="form-control" id="año" name="año">
							<option value="80">80's</option>
							<option value="90">90's</option>
							<option value="2000">2000's</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="remix" class="col-sm-2 control-label">¿Tiene Remix?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="remix" name="remix" value="1" checked> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="remix" name="remix" value="0"> NO
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">MUSICA PARA = </label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="para[]" name="para[]" value="Cantar"> Cantar
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="para[]" name="para[]" value="Bailar"> Bailar
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="para[]" name="para[]" value="Limpiar"> Limpiar
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="para[]" name="para[]" value="Otros"> Otros
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>