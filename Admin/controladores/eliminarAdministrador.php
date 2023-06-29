<?php
	require_once('../../conexion.php');
	require_once('../modelos/administrador.php');

	$ad = new Administrador();
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$Id = $_POST['Id'];
		$result=$ad->deletead($Id);
		if($result)
		{
			print "<script>alert('usuario eliminado');
			window.location='../pages/index.php';</script>";
		}
		else
		{
			print "<script>alert('este usuario no puede ser eliminado');
			window.location='../pages/eliminar.php';</script>";
		}

		

	}

?>