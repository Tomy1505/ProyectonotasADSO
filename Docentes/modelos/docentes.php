<?php
	include_once('../../conexion.php');
	Class Docente extends Conexion
	{
		public function __construct()
		{
			$this->db = parent::__construct();
		}
		public function agregardo($nombredoc,$apellidodoc,$documentodoc,$correodoc,$materiadoc,$usuariodoc,$passworddoc,$perfildoc,$estadodoc)
		{
			$sql1 = "SELECT * FROM docentes WHERE Docente = '$usuariodoc'";
			$Resultado = $this->db->query($sql1);
			if($Resultado->rowCount()>0){}

			$statement = $this->db->prepare("INSERT INTO docentes(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Usuariodoc,Passworddoc,Perfil,Estadodoc)values(:nombredoc,:apellidodoc,:documentodoc,:correodoc,:materiadoc,:usuariodoc,:passworddoc,:perfildoc,:estadodoc)");
			
			$statement->bindParam(":nombredoc",$nombredoc);
			$statement->bindParam(":apellidodoc",$apellidodoc);
			$statement->bindParam(":documentodoc",$documentodoc);
			$statement->bindParam(":correodoc",$correodoc);
			$statement->bindParam(":materiadoc",$materiadoc);
			$statement->bindParam(":usuariodoc",$usuariodoc);
			$statement->bindParam(":passworddoc",$passworddoc);
			$statement->bindParam(":perfildoc",$perfildoc);
			$statement->bindParam(":estadodoc",$estadodoc);
			if($statement->execute())
			{
				echo "docente registrado";
				header('Location: ..pages/index.php');
			}
			else
			{
				echo "docente No registrado";
				header('Location: ../pages/agregar.php');
			}
		}
		public function getdo()
		{
			$sql = "SELECT * FROM docentes WHERE Perfil = 'Docente'";
			$result = $this->db->query($sql);

		}
		public function getiddo($Id)
		{
			$statement = $this->db->prepare("SELECT * FROM docentes WHERE id_docente = :Id");
			$statement->bindParam(':Id',$Id);
			$statement->execute();
			while ($result = $statement->fetch()) 
			{
				$row = $result;
			}
			return $row;
		}
		public function updatedo($Id,$Nombredo,$Apellidodo,$Documentodo,$Correodo,$Materiado,$Usuariodo,$Passworddo,$Perfildo,$Estadodo)
		{
			$statement = $this->db->prepare("UPDATE docentes SET Nombredoc = :Nombredo, Apellidodoc = :Apellidodo, Documentodoc = :Documentodo, Correodoc = :Correodo, Materiadoc = :Materiado, Usuariodoc = :Usuariodo, passworddoc = :Passworddo, Perfil = :Perfildo, Estadodoc = :Estadodo WHERE id_docente = $Id");

			$statement->bindParam(':Id',$Id);
			$statement->bindParam('Nombredo',$Nombredo);
			$statement->bindParam('Apellidodo',$Apellidodo);
			$statement->bindParam('Documentodo',$Documentodo);
			$statement->bindParam('Correodo',$Correodo);
			$statement->bindParam('Materiado',$Materiado);
			$statement->bindParam('Usuariodo',$Usuariodo);
			$statement->bindParam('Passworddo',$Passworddo);
			$statement->bindParam('Perfildo',$Perfildo);
			$statement->bindParam('Estadodo',$Estadodo);
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
				header ('Location: ../pages/index.php');
			}
			else
			{
				echo "docente NO eliminado";
				header ('Location: ../pages/eliminar.php');
			}
		}
	}
?>