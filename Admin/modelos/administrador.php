<?php
include_once('../../conexion.php');
class Administrador extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}
	//verificar que no exista un usuario en la bd
	public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad)
	{
		$sql1 = "SELECT * FROM usuarios WHERE Usuario ='$Usuarioad'";
		$Resultado=$this->db->query($sql1);
		if($Resultado->rowCount()>0){

			echo "<script>
				alert('El usuario ya esta registrado');
				window.location = '../pages/agregar.php';
			</script>";
		}
		else
		{
		//crear la sentencia sql
		$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

		$statement->bindParam(":Nombread",$Nombread);
		$statement->bindParam(":Apellidoad",$Apellidoad);
		$statement->bindParam(":Usuarioad",$Usuarioad);
		$statement->bindParam(":Passwordad",$Passwordad);
		$statement->bindParam(":Perfilad",$Perfilad);
		$statement->bindParam(":Estadoad",$Estadoad);
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
	}

	//función para seleccionar todos los usuarios con el rol administrador
	public function getad()
	{
		$sql = "SELECT * FROM usuarios WHERE Perfil='Administrador'";
		$result = $this->db->query($sql);
		if($result->rowCount()>0){
			while($row = $result->fetch()){
				$result[]=$row;
			}
		}return $result;
	}
	
	//función para seleccionar un usuario por su id
	public function getidad($Id)
	{
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();

		//Obtener los resultados utilizando fetch()
		$result = $statement->fetch(PDO::FETCH_ASSOC);
		
		//Devolver los resultados
		return $row;
	}

	//función para actualizar los datos de usuario
	public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfil,$Estadoad)
	{
		$statement=$this->db->prepare("UPDATE usuarios SET id_usuario=:Id,Nombreusu=:Nombread, Apellidousu=:Apellidoad,Usuario=:Usuarioad, Passwordusu=:Passwordad, Estado=:Estadoad WHERE id_usuario=$Id");
	
		$statement->bindParam(':Id',$Id);
		$statement->bindParam('Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Estadoad',$Estadoad);
		if($statement->execute())
		{
			header('Location: ../pages/index.php');
		}
		else
		{
			header('Location: ../pages/editar.php');
		}
	}
	//función para eliminar un usuario
	/*public function deletead($Id)
	{
		$statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_usuario=$Id");
		$statement->bindParam(':Id',$Id);
		if($statement->execute())
		{
			echo "usuario eliminado";
			header('Location: ../pages/index.php');
		}
		else if
		{
			echo "El usuario no se puede eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}*/
	}
?>