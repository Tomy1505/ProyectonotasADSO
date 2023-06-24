<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

$admin = new Administrador();
if($_POST)
{
$Id = $_POST['Id'];
$Nombreusu = $_POST['txtnombre'];
$Apellidousu = $_POST['txtapellido'];
$Usuariousu = $_POST['txtusu'];
$Passwordusu = $_POST['txtpass'];
$Perfil = $_POST['txtperfil'];
$Estado = $_POST['txtest'];

$admin->updatead($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estado);    
}

?>