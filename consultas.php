<?php
	include_once('conexion.php');
	
	Class Consulta extends conexion
	{
		public function __construct(){

		$this->db=parent::__construct();
	}
	public function getmaterias()
	{
		$row = null;
		$sta = $this->db->prepare("SELECT * FROM materias");
		$sta->execute();
		while($res = $sta->fetch())
		{
			$row[] = $res;
		}
		return $row;
	}
	public function getdocentes()
	{
		$row = null;
		$sta = $this->db->prepare("SELECT * FROM docentes");
		$sta->execute();
		while($res = $sta->fetch())
		{
			$row[] = $res;
		}
		return $row;
	}
?>