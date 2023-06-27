<?php
require_once('../../conexion.php');
require_once('../modelos/Materias.php');

if($_POST){
    $materia=new Materias();
    $nombremat=$_POST['matid'];

    $materia->agregarma($nombremat);
}
?>