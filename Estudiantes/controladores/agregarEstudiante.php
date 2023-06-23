<?php
require_once('../../conexion.php');
require_once('../models/estudiantes.php');

if($_POST){
    $Est = new Estudiantes();
    $Nombreest=$_POST['txtnombre'];
    $Apellidoest=$_POST['txtapellido'];
    $Documentoest=$_POST['txtdoc'];
    $Correoest=MD5($_POST['txtcorreo']);
    $Promedioest=$_POST['txtmateria'];
    $Fecha_registroest=$_POST['txtnota'];
    $Est->agregarest($Nombreest,$Apellidoest,$Documentoest,$Correoest,$Promedioest,$Fecha_registroest);
}
?>