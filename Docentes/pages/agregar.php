<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>Modulo docentes</title>
	<style>
		.contenedor{
			width: 450px;
			background: radial-gradient(#336DFF,#33EEFF);
			padding: 40px;
			margin: auto;
			margin-top: 100px;
			margin-bottom: 100px;
		}
		.contenedor h1{
			font-size: 40px;
			justify-content: ;
		}
		.input{
			width: 100%;
		}
		.btn{
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="contenedor">
		<h1>Agregar docentes</h1>
		<form action="../controladores/agregarDocentes.php" method="POST">
			<div class="parte">
				<label>Nombre: </label><br>
				<input class="input" type="text" name="nomdoc"><p>
			</div>
			<div class="parte">
				<label>Apellido: </label><br>
				<input class="input" type="text" name="apedoc"><p>
			</div>
			<div class="parte">
				<label>Documento: </label><br>
				<input class="input" type="text" name="docdoc"><p>
			</div>
			<div class="parte">
				<label>Correo: </label><br>
				<input class="input" type="text" name="cordoc"><p>
			</div>
			<div class="parte">
				<label>Materia: </label><br>
				<input class="input" type="text" name="matdoc"><p>
			</div>
			<div class="parte">
				<label>Usuario: </label><br>
				<input class="input" type="text" name="usudoc"><p>
			</div>
			<div class="parte">
				<label>Contraseña: </label><br>
				<input class="input" type="text" name="pasdoc"><p>
			</div>
			<div class="parte">
				<label for="Perfil">Perfil: </label><br>
				<select name="perdoc" id="perfil">
				<option selected>Elegir perfil</option>
				<option value="Administrador">Administrador</option>
				<option value="Docente">Docente</option><br>
				</select><br><br>
			</div>
			<div class="parte">
				<label>Estado: </label><br>
				<select name="estdoc" id="estado">
				<option selected>Elegir estado</option>
				<option value="Activo">Activo</option>
				<option value="Inactivo">Inactivo</option><br>
				</select><br><br>
			</div>
			<input type="submit" class="btn btn-primary" name="agregar" value="Agregar">
		</form>		
	</div>
</body>
</html>