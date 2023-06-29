<?php
require_once('../../conexion.php');
require_once('../modelos/Docentes.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $docente=new Docente();
    if($_POST){
    
    $nombredoc=$_POST['nomdoc'];
    $apellidodoc=$_POST['apedoc'];
    $documentodoc=$_POST['docdoc'];
    $correodoc=$_POST['cordoc'];
    $materiadoc=$_POST['matdoc'];
    $usuariodoc=$_POST['usudoc'];
    $passworddoc=$_POST['pasdoc'];
    $perfildoc=$_POST['perdoc'];
    $estadodoc=$_POST['estdoc'];
    $docente->agregardo($nombredoc,$apellidodoc,$documentodoc,$correodoc,$materiadoc,$usuariodoc,$passworddoc,$perfildoc,$estadodoc);
    }
?>