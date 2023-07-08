<?php
require_once("c://xampp/htdocs/casagrau/vista/head/head.php");
    require_once("C://xampp/htdocs/casagrau/control/usuariocontrol.php");
    $obj = new userControl();
    $date = $obj->show($_GET['id_usuario']);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show</title>
     <!-- style css de iconos -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
 </head>


<body style="background-color: #FFFBEB;">
    <div class="container">

    <div class="container-fluid" style="background-color: #FFE7CC;">
    <div style="text-align: center;">
        <hr style="height:10px;background:#F8CBA6">
            <h2>DETALLES DE REGISTRO</h2>
        <hr style="height:10px;background:#F8CBA6">
    </div></br>



<div class="pb-3">

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro error?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro pruebaaaaaa
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id_usuario=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>

</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">GENERO</th>
            <th scope="col">USUARIO</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">LOCALIDAD</th>
            <th scope="col">FECHA</th>
            <th scope="col">ESTADO</th>
            <th scope="col">ROL</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id_usuario"]?></td>
            <td scope="col"><?= $date["apellidos_nombre"]?></td>
            <td scope="col"><?= $date["genero_usuario"]?></td>
            <td scope="col"><?= $date["usuario"]?></td>
            <td scope="col" style="overflow: auto; font-size: 3px;"><?= $date["password"]?></td>
            <td scope="col"><?= $date["localidad_usuario"]?></td>
            <td scope="col"><?= $date["fecha_creausuario"]?></td>
            <td scope="col"><?= $date["estado_usuario"]?></td>
            <td scope="col"><?= $date["rol_usuario"]?></td>
        </tr>
    </tbody>

    
</table>


<a href="usuario.php" class="btn btn-primary"><i class="bi bi-skip-backward-circle-fill"></i>Regresar</a>
    <a href="edit.php?id_usuario=<?= $date[0]?>" class="btn btn-success"><i class="bi bi-pencil-square"></i>Actualizar</a>  
    <a class="btn btn-danger" style="color:#fff;"><i class="bi bi-trash" style="color: #fff;"></i>Eliminar</a>

    </div>
</body>