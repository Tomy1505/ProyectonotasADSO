<?php
	require_once('../../conexion.php');
	require_once('../modelos/Docentes.php');

	$ad = new Docente();
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$Id = $_POST['Id'];
		$result = $ad->deletedo();

		if ($result) 
		{
			print "<script>alert('usuario eliminado')
			window.location='../pages/index.php'</script>";	
		}
		else
		{
			print "<script>alert('usuario no eliminado')
			window.location='../pages/eliminar.php'</script>";
		} 
	}
?>