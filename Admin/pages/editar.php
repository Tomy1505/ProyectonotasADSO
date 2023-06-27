<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<?php

	require_once('../../conexion.php');
	require_once('../modelos/administrador.php');

	$Id = $_GET['Id'];
	$admin = new Administrador();
	$row=$admin->getidad($Id);

	if($row){

	?>
		<h1>ACTUALIZAR FORMULARIO</h1>
		<form action="../controladores/editarAdministrador.php" method="POST">
		<input type="hidden" name="Id" value="<?php echo $Id ?>">
			<div class="form-group">
				<label>Nombre:</label>
				<input type="text" name="txtnombre" value="<?php echo $row['Nombreusu']?>">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="text" name="txtapellido" value="<?php echo $row['Apellidousu']?>">
			</div>
			<div class="form-group">
				<label>Usuario:</label>
				<input type="text" name="txtusu" value="<?php echo $row['Usuario']?>">
			</div>
			<div class="form-group">
				<label>Contraseña:</label>
			<input type="password" name="txtpass" value="<?php echo $row['Passwordusu']?>">
			</div>
			<div class="form-group">
				<label>Perfil:</label>
				<select name="txtperfil">
		        <option value="Administrador">Administrador</option>
		        <option value="Docente">Docente</option>
		   </select>
			</div>
			
			<div class="form-group">
				<label>Estado:</label>
				<select name="txtestado">
		        <option value="Activo">Activo</option>
		        <option value="No activo">No activo</option>
		   </select>
			</div>
			<br>
			<input type="submit" class="btn btn-primary">
		</form>
	<?php } ?>
	</div>


</body>
</html>