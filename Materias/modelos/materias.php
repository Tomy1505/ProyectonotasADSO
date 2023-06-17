<?php
	include_once('../../conexion.php');
	Class Materia extends Conexion
	{
		public function __construct()
		{
			$this->db = parent::__construct();
		}
		public function agregarma($Nombrema)
		{
			$statement = $this->db->prepare("INSERT INTO materias(Nombremat)values(:Nombrema,:'Materia',:'Activo')");

			$statement->bindParam(":Nombrema",$Nombrema);
			if ($statement->execute()) 
			{
				echo "materia registrada";
				header('Location: ..pages/index.php');
			}
			else
			{
				echo "materia NO registrada";
				header('Location: ../pages/agregar.php');
			}
		}
		public function getma()
		{
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM materias WHERE id_materia = 'Materia'");
			$statement->execute();
			while ($result = $statement->fetch()) 
			{
				$row[] = $result;	
			}
		}
		public function getidma($Id)
		{
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM  WHERE id_materia = :Id");
			$statement->bindParam(':Id',$Id);
			$statement->execute();
			while ($result = $statement->fetch()) 
			{
				$row = $result;
			}
			return $row;
		}
		public function updatema($Id,$Nombrema)
		{
			$statement = $this->db->prepare("UPDATE materias SET Nombremat = :Nombrema");

			$statement->bindParam(':Id',$Id);
			$statement->bindParam('Nombrema',$Nombrema);
			if($statement->execute())
			{
				header('Location: ../pages/index.php');
			}
			else
			{
				header('Location: ../pages/editar.php');
			}

		}
		public function deletema($Id)
		{
			$statement = $this->db->prepare("DELETE * FROM materias WHERE id_materia = :Id");
			$statement->bindParam(':Id',$Id);
			if ($statement->execute()) 
			{
				echo "materia eliminada";
				header ('Location: ../pages/index.php')
			}
			else
			{
				echo "materia NO eliminada";
				header ('Location: ../pages/eliminar.php')
			}
		}
	}
?>