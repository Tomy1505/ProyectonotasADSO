<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <title></title>

    </head>
    <body>
        <br>
        <div class="container">
            <h1 style="color:darkgray;text-align: center;">LISTADO DE DOCENTES</h1>
            <div col="col-auto-mt-50">
                <table class="table table-dark table-hover">
                    <tr>
                        <th>ID DOCENTE</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CORREO</th>
                        <th>MATERIA</th>
                        <th>USUARIO</th>
                        <th>CONTRASEÑA</th>
                        <th>PERFIL</th>
                        <th>ESTADO</th>
                        <th>ACTUALIZAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                    <tbody>
                        <?php
                        require_once('../../conexion.php');
                        require_once('../modelos/docentes.php');
                        //crear el objeto para acceder a las funciones de la clase administrador
                        $obj = new Docente();
                        $datos = $obj->getdo();
                        
                        foreach($datos as $datos){
                        ?>
                    <tr>
                        <td><?php echo $datos['id_docente']?></td>
                        <td><?php echo $datos['Nombredoc']?></td>
                        <td><?php echo $datos['Apellidodoc']?></td>
                        <td><?php echo $datos['Documentodoc']?></td>
                        <td><?php echo $datos['Correodoc']?></td>
                        <td><?php echo $datos['Materiadoc']?></td>
                        <td><?php echo $datos['Usuariodoc']?></td>
                        <td><?php echo $datos['Passworddoc']?></td>S
                        <td><?php echo $datos['Perfil']?></td>
                        <td><?php echo $datos['Estadodoc']?></td>
                        <td><a href="editar.php?Id=<?php echo $datos['id_docente']?>" class="btn btn-danger">ACTUALIZAR</a></td>
                        <td><a href="eliminar.php?Id=<?php echo $datos['id_docente']?>" class="btn btn-primary">ELIMINAR</a></td>
                    </tr>
                <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>