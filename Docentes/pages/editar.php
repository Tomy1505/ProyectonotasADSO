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
	<?php 
		require_once('../../conexion.php');
		require_once('../modelos/Docentes.php');

		$Id = $_GET['Id'];
		$docente = new Docente();
		$row= $docente->getiddo($Id);

		if ($row) {
			

	?>
	<div class="contenedor">
		<h1>Editar docentes</h1>
		<form action="../controladores/editarDocentes.php" method="POST">
			<div class="parte">
				<label>Nombre: </label><br>
				<input type="text" name="nomdoc" value="<?php echo $row['Nombredoc']?>"><p>
			</div>
			<div class="parte">
				<label>Apellido: </label><br>
				<input type="text" name="apedoc" value="<?php echo $row['Apellidodoc']?>"><p>
			</div>
			<div class="parte">
				<label>Documento: </label><br>
				<input type="text" name="docdoc" value="<?php echo $row['Documentodoc']?>"><p>
			</div>
			<div class="parte">
				<label>Correo: </label><br>
				<input type="text" name="cordoc" value="<?php echo $row['Correodoc']?>"><p>
			</div>
			<div class="parte">
				<label>Materia: </label><br>
				<input type="text" name="matdoc" value="<?php echo $row['Materiadoc']?>"><p>
			</div>
			<div class="parte">
				<label>Usuario: </label><br>
				<input type="text" name="usudoc" value="<?php echo $row['Usuariodoc']?>"><p>
			</div>
			<div class="parte">
				<label>Contraseña: </label><br>
				<input type="text" name="pasdoc" value="<?php echo $row['Passworddoc']?>"><p>
			</div>
			<div class="parte">
				<label>Perfil: </label><br>
				<select name="perdoc">
				<option selected>Elegir perfil</option>
				<option value="Administrador">Administrador</option>
				<option value="Docente">Docente</option><br>
				</select><br><br>
			</div>
			<div class="parte">
				<label>Estado: </label><br>
				<select name="estdoc">
				<option value="Activo">Activo</option>
				<option value="Inactivo">Inactivo</option><br>
				</select><br><br>
			</div>
			<input type="submit" class="btn btn-primary">
		</form>
		<?php } ?>		
	</div>
</body>
</html>