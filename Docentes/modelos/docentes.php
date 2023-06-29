<?php
	include_once('../../conexion.php');
	Class Docente extends Conexion
	{
		public function __construct()
		{
			$this->db = parent::__construct();
		}
		public function agregardo($Nombredo, $Apellidodo, $Documentodo, $Correodo, $Materiado,$Usuariodo,$Passworddo,$Perfildo,$Estadodo){
        $sql1= "SELECT * FROM docentes WHERE Usuariodoc = '$Usuariodo'";
        $resultado=$this->db->query($sql1);
        if($resultado->rowCount() >0){
            echo "<script>
            alert('El Docente ya está registrado');
            window.location= '../pages/agregar.php';
            </script>";
        }
        else{
        $statement = $this->db->prepare("INSERT INTO docentes(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Usuariodoc,Passworddoc,Perfil,Estadodoc)VALUES(:Nombredo,:Apellidodo,:Documentodo,:Correodo,:Materiado,:Usuariodo,:Passworddo,:Perfildo,:Estadodo)");

        $statement->bindParam(":Nombredo", $Nombredo);
        $statement->bindParam(":Apellidodo", $Apellidodo);
        $statement->bindParam(":Documentodo", $Documentodo);
        $statement->bindParam(":Correodo", $Correodo);
        $statement->bindParam(":Materiado", $Materiado);
        $statement->bindParam(":Usuariodo", $Usuariodo);
        $statement->bindParam(":Passworddo", $Passworddo);
        $statement->bindParam(":Perfildo", $Perfildo);
        $statement->bindParam(":Estadodo", $Estadodo);

        if($statement->execute()){
            echo"Docente registrado";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar el docente";
            header('Location: ../Pages/agregar.php');
        }
    }
    }
		public function getdo()
		{
			$row =null;
        $statement=$this->db->prepare("SELECT * FROM docentes");
        $statement->execute();
        while($result=$statement->fetch()){
            $row[]=$result;
        }
        return $row;

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
				print "<script>alert('usuario eliminado')
				window.location='../pages/index.php'</script>";
			}
			else
			{
				print "<script>alert('usuario no eliminado')
				window.location='../pages/eliminar.php'</script>";
			}
		}
	}
?>