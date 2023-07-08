<?php
    require_once("C://xampp/htdocs/casagrau/control/usuariocontrol.php");
    require_once("C://xampp/htdocs/casagrau/vista/head/head.php");
    $obj = new userControl();
    $rows = $obj->index();
    date_default_timezone_set('America/Bogota');
?>


<!DOCTYPE html>
<html lang="es">

   <head>
        <title>Usuario</title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- style css -->
        <link rel="stylesheet" href="css/login.css">
        <!-- style css de iconos -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   </head>
      <!-- end header -->

<div class="container-fluid" style="background-color: #FFE7CC;">
    <div style="text-align: center;">
        <hr style="height:10px;background:#F8CBA6">
        <h2>LISTA DE USUARIOS</h2>
        <hr style="height:10px;background:#F8CBA6">
    </div></br>


    <div class="mb-3">
            <a href="/casagrau/admin.php" class="btn btn-danger"><i class="bi bi-skip-backward-circle-fill"></i> Regresar</a>
            <a href="create.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>Nuevo usuario</a> 
            <a href="excel.php" class="btn btn-success"><i class="bi bi-journal-arrow-down"></i>Exportar Excel</a> 
        </div>

    <table class="table">   
        <thead>
            <tr>
                <th scope="col"><a>ID</a></th>
                <th scope="col"><a>NOMBRE</a></th>
                <th scope="col"><a>GENERO</a></th>
                <th scope="col"><a>USUARIO</a></th>
                <th scope="col"><a>CONTRASEÑA</a></th>
                <th scope="col"><a>LOCALIDAD</a></th>
                <th scope="col"><a>FECHA</a></th>
                <th scope="col"><a>ESTADO</a></th>
                <th scope="col"><a>ROL</a></th>
                <th scope="col"><a>OPCIONES</a></th>
            </tr>
        </thead>
        <tbody>
            <?php if($rows): ?>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <th><?= $row[0] ?></th>
                        <th><?= $row[1] ?></th>
                        <th><?= $row[2] ?></th>
                        <th><?= $row[3] ?></th>
                        <th style="overflow: auto; font-size: 3px;"><?= $row[4] ?></th>
                        <th><?= $row[5] ?></th>
                        <th><?= $row[6] ?></th>
                        <th><?= $row[7] ?></th>
                        <th><?= $row[8] ?></th>
                        <th>
                            <a href="show.php?id_usuario=<?= $row[0]?>" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                            <a href="edit.php?id_usuario=<?= $row[0]?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <!-- Button trigger modal -->
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>"><i class="bi bi-trash" style="color: #fff;"></i></a>
                            <!-- Modal -->
                            <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado no se podra recuperar el registro
                                    </div>
                                    <div    class="modal-footer">                                        
                                        <a href="delete.php?id_usuario=<?= $row[0]?>" class="btn btn-danger">Aceptar</a>
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No hay registros actualmente</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>

</html>





