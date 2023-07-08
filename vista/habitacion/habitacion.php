<?php
    require_once("C://xampp/htdocs/casagrau/vista/head/head.php");
    require_once("C://xampp/htdocs/casagrau/control/habitacioncontrol.php");
    $obj = new habitacionControl();
    $rows = $obj->index();
?>


<!DOCTYPE html>
<html lang="es">
   <head>
   <!-- style css de iconos -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

   <title>Habitaciones</title>
    
   </head>
      <!-- end header -->



      <body style="background-color: #FFFBEB;">
        <div class="container">

        <div class="container-fluid" style="background-color: #FFE7CC;">
            <div style="text-align: center;">
            <hr style="height:10px;background:#F8CBA6">
            <h2>LISTA DE HABITACIONES</h2>
            <hr style="height:10px;background:#F8CBA6">
        </div></br>


    <div class="mb-3">
        <a href="/casagrau/admin.php" class="btn btn-danger"> <i class="bi bi-skip-backward-circle-fill"></i> Regresar</a>
        <a href="create.php" class="btn btn-primary"><i class="bi bi-file-earmark-plus-fill"></i>Nuevo</a> 
        <a href="excel.php" class="btn btn-success"><i class="bi bi-journal-arrow-down"></i>Excel</a>  
    </div>

<table class="table">
    <thead>
        <tr  style="border: 50px;">
            <th scope="col">Id</th>
            <th scope="col">Número</th>
            <th scope="col">Categoría</th>
            <th scope="col">Precio</th>
            <th scope="col">Nivel</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col">Opciones</th>
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
                    <th><?= $row[4] ?></th>
                    <th><?= $row[5] ?></th>
                    <th><?= $row[6] ?></th>
                    <th><?= $row[7] ?></th>
                    <th>
                        <a href="show.php?numero=<?= $row[1]?>" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                        <a href="edit.php?numero=<?= $row[1]?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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
                                <div class="modal-footer">
                                <a href="delete.php?id_habitacion=<?= $row[0]?>" class="btn btn-danger">Aceptar</a>
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

<body>    
</body>


</html>




