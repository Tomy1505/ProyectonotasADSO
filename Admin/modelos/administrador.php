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
		$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

		$statement->bindParam(":Nombread",$Nombreusu);
		$statement->bindParam(":Apellidoad",$Apellidousu);
		$statement->bindParam(":Usuarioad",$Usuario);
		$statement->bindParam(":Passwordad",$Passwordusu);
		$statement->bindParam(":Perfilad",$Perfil);
		$statement->bindParam(":Estadoad",$Estado);
		if($statement->execute())
		{
			echo "usuario registrado";
		}
		else
		{
			echo "No se puede realizar el registro";
		}
	}
}
?>