<?php
	include_once('../../conexion.php');
	class Administrador extends Conexion
	{
		public function __construct()
		{
			$this->db = parent::__construct();
		}
		public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad)
		{
			$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:'Administrador',:'Activo')");

			$statement->bindParam(":Nombread",$Nombread);
			$statement->bindParam(":Apellidoad",$Apellidoad);
			$statement->bindParam(":Usuarioad",$Usuarioad);
			$statement->bindParam("Passwordad",$Passwordad);
			$statement->bindParam("Perfilad",$Perfilad);
			$statement->bindParam("Estadoad",$Estadoad);
			if($statement->execute())
			{
				echo "usuario registrado";
				header('Location: ..pages/index.php');
			}
			else
			{
				echo "usuario NO registrado";
				header('Location: ../pages/agregar.php');
			}
		}
		public function getad()
		{
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador'");
			$statement->execute();
			while ($result = $statement->fetch()) 
			{
				$row[] = $result;	
			}
		}
		public function getidad($Id)
		{
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador' AND id_usuario = :Id");
			$statement->bindParam(':Id',$Id);
			$statement->execute();
			while ($result = $statement->fetch()) 
			{
				$row = $result;
			}
			return $row;
		}
		public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Estadoad)
		{
			$statement = $this->db->prepare("UPDATE usuarios SET Nombreusu = :Nombread, Apellidousu = :Apellidoad, Usuario = :Usuarioad, Passwordusu = :Passwordad, Estado = :Estadoad WHERE id_usuario = $Id");

			$statement->bindParam(':Id',$Id);
			$statement->bindParam('Nombread',$Nombread);
			$statement->bindParam('Apellidoad',$Apellidoad);
			$statement->bindParam('Usuarioad',$Usuarioad);
			$statement->bindParam('Passwordad',$Passwordad);
			$statement->bindParam('Estadoad',$Estadoad);
			if($statement->execute())
			{
				header('Location: ../pages/index.php');
			}
			else
			{
				header('Location: ../pages/editar.php');
			}

		}
		public function deletead($Id)
		{
			$statement = $this->db->prepare("DELETE * FROM usuarios WHERE id_usuario = :Id");
			$statement->bindParam(':Id',$Id);
			if ($statement->execute()) 
			{
				echo "usuario eliminado";
				header ('Location: ../pages/index.php')
			}
			else
			{
				echo "usuario NO eliminado";
				header ('Location: ../pages/eliminar.php')
			}
		}
	}
?>