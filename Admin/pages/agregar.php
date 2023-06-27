<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<div class="content">
		<form action="../controladores/agregarAdministrador.php" method="POST">
		<h1>FORMULARIO ADMINISTRADOR</h1>
			<div class="form-group">
				<label>Nombre:</label>
				<input type="text" name="txtnombre">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="text" name="txtapellido">
			</div>
			<div class="form-group">
				<label>Usuario:</label>
				<input type="text" name="txtusu">
			</div>
			<div class="form-group">
				<label>Contraseña:</label>
			<input type="text" name="txtpass">
			</div>
			<br>
				<label for="Perfil">Perfil</label>
                	<select name="txtperfil" id="perfil">
                	<option selected>Elegir opcion</option>
                	<option value="Administrador">Administrador</option>
                	<option value="Docente">Docente</option>
            </select>
			<br>
			<br>
				<label for="Estado">Estado</label>
                	<select name="txtest" id="estado">
                	<option selected>Elegir opcion</option>
                	<option value="Activo">Activo</option>
                	<option value="Inactivo">Inactivo</option>
            </select>
			<br>
			<br>
			<input type="submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>