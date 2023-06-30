<?php
require_once('../../conexion.php');
require_once('../modelos/Docentes.php');

    
    if($_POST){
    
    $docente=new Docente();
    $Id = $_POST['Id'];
    $nombredoc=$_POST['nomdoc'];
    $apellidodoc=$_POST['apedoc'];
    $documentodoc=$_POST['docdoc'];
    $correodoc=$_POST['cordoc'];
    $materiadoc=$_POST['matdoc'];
    $usuariodoc=$_POST['usudoc'];
    $passworddoc=MD5($_POST['pasdoc']);
    $perfildoc=$_POST['perdoc'];
    $estadodoc=$_POST['estdoc'];
    $docente->updatedo($Id,$nombredoc,$apellidodoc,$documentodoc,$correodoc,$materiadoc,$usuariodoc,$passworddoc,$perfildoc,$estadodoc);
    }
?>