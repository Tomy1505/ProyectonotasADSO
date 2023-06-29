<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title></title>
</head>
<body>
	<div class="content">
		<form action="agregarEstudiante.php" method="POST">
		<h1>Formulario Estudiante</h1>
			<div class="form-group">
				<label>Nombre:</label>
				<input type="text" name="txtnombre">
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="text" name="txtapellido">
			</div>
			<div class="form-group">
				<label>Documento:</label>
				<input type="text" name="txtdoc">
			</div>
			<div class="form-group">
				<label>Correo:</label>
			<input type="text" name="txtcorreo">
			</div>
			<div class="form-group">
				<label name="">Materia:</label>
				<input type="text" name="txtmateria">
			</div>
			<div class="form-group">
				<label>Notas de materia:</label>
				<input type="text" name="txtxnota">
			</div>
			<br>
			<input type="submit" class="btn btn-primary" name="calcular">
		</form>
	</div>
</body>
</html>