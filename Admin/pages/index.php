<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<title></title>
	</head>
	<body>
		<br>
		<div class="container">
			<h1 style="color:darkgray;text-align: center;">LISTADO DE USUARIOS</h1>
			<div col="col-auto-mt-50">
				<table class="table table-dark table-hover">
					<tr>
						<th>ID USUARIO</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>USUARIO</th>
						<th>PERFIL</th>
						<th>ESTADO</th>
						<th>ACTUALIZAR</th>
						<th>ELIMINAR</th>
					</tr>
					<tbody>
						<?php
						require_once('../../conexion.php');
						require_once('../modelos/administrador.php');
						//crear el objeto para acceder a las funciones de la clase administrador
						$obj = new Administrador();
						$datos = $obj->getad();
						
						foreach($datos as $datos){
						?>
					<tr>
						<td><?php echo $datos['id_usuario']?></td>
						<td><?php echo $datos['Nombreusu']?></td>
						<td><?php echo $datos['Apellidousu']?></td>
						<td><?php echo $datos['Usuario']?></td>
						<td><?php echo $datos['Perfil']?></td>
						<td><?php echo $datos['Estado']?></td>
						<td><a href="editar.php?Id=<?php echo $datos['id_usuario']?>" class="btn btn-danger">ACTUALIZAR</a></td>
						<td><a href="../controladores/eliminarAdministrador.php?Id=<?php echo $datos['id_usuario']?>" class="btn btn-primary">ELIMINAR</a></td>
					</tr>
				<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>