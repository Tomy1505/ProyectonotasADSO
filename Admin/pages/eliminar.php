<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>ELIMINAR USUARIO</h2>
    <?php
    require_once('../../Conexion.php');
    require_once('../modelos/administrador.php');

    $admin = new Administrador();
    $Id= $_GET['Id'];
    ?>
    <form action="../controladores/eliminarAdministrador.php" method="POST">
        <div class="form-group">
        <label>ID Usuario </label>
        <input type="number" name="Id" placeholder="Ingrese el ID">
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="eliminar">

        </div>
 
    </form>
</body>
</html>