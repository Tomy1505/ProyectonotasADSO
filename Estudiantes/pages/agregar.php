<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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