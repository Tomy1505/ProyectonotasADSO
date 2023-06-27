<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modulo materias</title>
	<style>
		.contenedor{
			width: 400px;
			background: radial-gradient(#336DFF,#33EEFF);
			padding: 40px;
			margin: auto;
			margin-top: 100px;
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
		<h1>Agregar materias</h1>
		<form action="../materias.php" method="POST">
			<div class="parte">
				<label>Nombre de la materia: </label><br>
				<input class="input" type="text" name="nommat"><p>
			</div>
			<input type="submit" class="btn btn-primary" name="agregar" value="Agregar">
		</form>		
	</div>
</body>
</html>