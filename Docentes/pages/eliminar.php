<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Modulo docentes</title>
    <style>
        .contenedor{
            width: 450px;
            background: radial-gradient(#336DFF,#33EEFF);
            padding: 40px;
            margin: auto;
            margin-top: 100px;
            margin-bottom: 100px;
        }
        .contenedor h1{
            font-size: 40px;
            justify-content: ;
        }
        .input{
            width: 100%;
        }
        .btn{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Eliminar docentes</h1>
        <?php
            require_once('../../conexion.php');
            require_once('../modelos/docentes.php');

            $docente = new Docente();
            $Id = $_GET['Id'];
        ?>
        <form action="../controladores/eliminarDocentes.php" method="POST">
            <div class="form-group">
                <label>ID: </label><br>
                <input class="input" type="text" name="Id"><p>
            </div>
            <input type="submit" class="btn btn-primary" value="eliminar">
        </form>     
    </div>
</body>
</html>