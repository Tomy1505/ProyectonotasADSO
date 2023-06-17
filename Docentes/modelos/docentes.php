<?php
	include_once('../../conexion.php');
	Class Docente extends Conexion
	{
		public function __construct()
		{
			$this->db = parent::__construct();
		}
		public function agregardo($Nombredo,$Apellidodo,$Documentodo,$Correodo,$Materiado,$Notasdo)
		{
			$statement = $this->db->prepare("INSERT INTO docentes(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Notasmate)values(:Nombredo,:Apellidodo,:Documentodo,:Correodo,:Materiado,:Notasdo,'Docente',:'Activo')");
			$statement->bindParam(":Nombredo",$Nombredo);
			$statement->bindParam(":Apellidodo",$Apellidodo);
			$statement->bindParam(":Documentodo",$Documentodo);
			$statement->bindParam(":Correodo",$Correodo);
			$statement->bindParam("Materiado",$Materiado);
			$statement->bindParam("Notasdo",$Notasdo);
			if($statement->execute())
			{
				echo "docente registrado";
				header('Location: ..pages/index.php')
			}
			else
			{
				echo "docente No registrado";
				header('Location: ../pages/agregar.php');
			}
		}
		public function getdo()
		{
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM docentes WHERE id_docente = :Id");
			$statement->execute();
			while ($result = $statement->fetch()) 
			{
				$row[] = $result;	
			}
		}
		public function getiddo($Id)
		{
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM docentes WHERE id_docente = :Id");
			$statement->bindParam(':Id',$Id);
			$statement->execute();
			while ($result = $statement->fetch()) 
			{
				$row = $result;
			}
			return $row;
		}
		public function updatedo($Id,$Nombredo,$Apellidodo,$Documentodo,$Correodo,$Materiado,$Notasdo)
		{
			$statement = $this->db->prepare("UPDATE docentes SET Nombredoc = :Nombredo, Apellidodoc = :Apellidodo, Documentodoc = :Documentodo, Materiadoc = :Materiado, Notasmate = :Notasdo WHERE id_docente = $Id");

			$statement->bindParam(':Id',$Id);
			$statement->bindParam('Nombredo',$Nombredo);
			$statement->bindParam('Apellidodo',$Apellidodo);
			$statement->bindParam('Documentodo',$Documentodo);
			$statement->bindParam('Materiado',$Materiado);
			$statement->bindParam('Notasdo',$Notasdo);
			if($statement->execute())
			{
				header('Location: ../pages/index.php');
			}
			else
			{
				header('Location: ../pages/editar.php');
			}

		}
		public function deletedo($Id)
		{
			$statement = $this->db->prepare("DELETE * FROM docentes WHERE id_docente = :Id");
			$statement->bindParam(':Id',$Id);
			if ($statement->execute()) 
			{
				echo "docente eliminado";
				header ('Location: ../pages/index.php')
			}
			else
			{
				echo "docente NO eliminado";
				header ('Location: ../pages/eliminar.php')
			}
		}
	}
?>