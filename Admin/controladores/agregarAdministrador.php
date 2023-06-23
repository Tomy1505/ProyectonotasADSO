<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

if($_POST){
    $admin=new Administrador();
    $Nombreusu=$_POST['txtnombre'];
    $Apellidousu=$_POST['txtapellido'];
    $Usuario=$_POST['txtusu'];
    $Passwordusu=MD5($_POST['txtpass']);
    $Perfil=$_POST['txtperfil'];
    $Estado=$_POST['txtest'];
    $admin->agregarad($Nombreusu,$Apellidousu,$Usuario,$Passwordusu,$Perfil,$Estado);
}
?>