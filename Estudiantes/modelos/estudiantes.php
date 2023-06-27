<?php
include_once('../../conexion.php');
class Administrador extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}
	//inserta un usuario
	public function agregares($Nombrees,$Apellidoes,$Documentoes,$Correoes,$Promedioes,$Fecha_registroes)
	{
		$sql1 = "SELECT * FROM estudiantes WHERE Doumento ='$Documentoes'";
		$Resultado=$this->db->query($sql1);
		if($Resultado->rowCount()>0){

			echo "<script>
				alert('El estudiante ya esta registrado');
				window.location = '../pages/agregar.php';
			</script>";
		}
		else
		{
		//crear la sentencia sql
		if($statement->execute())
		{
			echo "usuario registrado";
			header('Location: ../pages/index.php');
		}
		else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	public function getes()
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes /*WHERE = 'Estudiantes'");
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row[]=$resul;
		}
		return $row;
	}
	public function getides($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes AND id_estudiantes=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row=$resul;
		}
		return $row;
	}
	public function updatead($Nombrees,$Apellidoes,$Documentoes,$Correoes,$Promedioes,$Fecha_registroes)
	{
		$statement=$this->db->prepare("UPDATE estudiantes SET Nombreest=:Nombrees, Apellidoest=:Apellidoes, Documentoest=:Documentoes, Correoest=:Correoes, Promedioest=:Promedioes, Fecha_registroest=:Fecha_registroes WHERE id_estudiantes=$Id");
	
	$statement->bindParam(':Id',$Id);
	$statement->bindParam('Nombrees');
	$statement->bindParam('Apellidoes');
	$statement->bindParam('Documentoes');
	$statement->bindParam('Correoes');
	$statement->bindParam('Promedioes');
	$statement->bindParam('Fecha_registroes');
	if($statement->execute())
	{
		header('Location: ../pages/index.php')
	}
	else
		{
			header('Location: ../pages/editar.php');
		}
	}
public function deletead($Id)
	{
		$statement=$this->db->prepare("DELETE * FROM estudiantes WHERE id_estudiantes=$Id");
		$statement->bindParam(':Id',$Id);
		if($statement->execute())
		{
			echo "estudiante eliminado";
			header('Location: ../pages/index.php');
		}
		else if
		{
			echo "El estudiante no se puede eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}
}
