<?php
    require_once("C://xampp/htdocs/casagrau/vista/head/head.php");
    require_once("C://xampp/htdocs/casagrau/control/productocontrol.php");
    $obj = new productoControl();
    $rows = $obj->index();
?>


<!DOCTYPE html>
<html lang="es">
   <head>
   <!-- style css de iconos -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   
   <link href="css/style.css" rel="stylesheet">
   <link href="css/flexmovil.css" rel="stylesheet">

   <title>Lista de productos</title>
    
   </head>
      <!-- end header -->



      <body style="background-color: #FFFBEB;">
        <div class="container">

        <div class="container-fluid" style="background-color: #FFE7CC;">
            <div style="text-align: center;">
            <hr style="height:10px;background:#F8CBA6">
            <h4>LISTA DE PRODUCTOS</h4>
            <hr style="height:10px;background:#F8CBA6">
        </div></br>


    <div class="mb-3">
        <a href="/casagrau/admin.php" class="btn btn-danger"> <i class="bi bi-skip-backward-circle-fill"></i>Regresar</a>
        <a href="create.php" class="btn btn-primary"><i class="bi bi-file-earmark-plus-fill"></i>Nuevo</a> 
        <a href="excel.php" class="btn btn-success"><i class="bi bi-journal-arrow-down"></i>Excel</a>  
    </div>

<table class="table">
    <thead>
        <tr  style="border: 50px;">
            <th scope="col"><a>Id</a></th>
            <th scope="col"><a>Nombre</a></th>
            <th scope="col"><a>Precio</a></th>
            <th scope="col"><a>Opciones</a></th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><a><?= $row[0] ?></a></th>
                    <th><a><?= $row[1] ?></a></th>
                    <th><a><?= $row[2] ?></a></th>
                    <th>
                        <a href="show.php?id_producto=<?= $row[0]?>" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                        <a href="edit.php?id_producto=<?= $row[0]?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>"><i class="bi bi-trash" style="color: #fff;"></i></a>
                        <!-- Modal -->
                        <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <a>Una vez eliminado no se podra recuperar el registro</a>
                                </div>
                                <div    class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                    <a href="delete.php?id_producto=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    
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

<body>    
</body>


</html>




