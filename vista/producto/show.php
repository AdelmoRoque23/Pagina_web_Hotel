<?php
    require_once("c://xampp/htdocs/casagrau/vista/head/head.php");
    require_once("c://xampp/htdocs/casagrau/control/productocontrol.php");
    $obj = new productoControl();
    $date = $obj->show($_GET['id_producto']);
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
            <h2>DETALLES DE PRODUCTOS</h2>
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
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
            <a href="delete.php?id_producto=<?= $date[0]?>" class="btn btn-danger">Aceptar</a>
        </div>
        </div>
    </div>
    </div>

</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id_producto"]?></td>
            <td scope="col"><?= $date["nombre"]?></td>
            <td scope="col"><?= $date["precio"]?></td>
        </tr>
    </tbody>

    
</table>


<a href="producto.php" class="btn btn-primary"><i class="bi bi-skip-backward-circle-fill"></i>Regresar</a>
    <a href="edit.php?id_producto=<?= $date[0]?>" class="btn btn-success"><i class="bi bi-pencil-square"></i>Actualizar</a>    
    <a class="btn btn-danger" style="color:#fff;"><i class="bi bi-trash" style="color: #fff;"></i>Eliminar</a>


        </div>
</body>
    