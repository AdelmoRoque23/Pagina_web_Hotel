<?php
    require_once("C://xampp/htdocs/casagrau/vista/head/head.php");
    require_once("C://xampp/htdocs/casagrau/control/detallepecontrol.php");
    $obj = new detallepeControl();
    $rows = $obj->index();
?>


<!DOCTYPE html>
<html lang="es">
   <head>
   <!-- style css -->
   <link rel="stylesheet" href="css/login.css">
   <!-- style css de iconos -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

   <title>lista-detalles</title>
   </head>
      <!-- end header -->



      <body>

      <div class="container-fluid" style="background-color: #FFE7CC;">
    <div style="text-align: center;">
    <hr style="height:10px;background:#F8CBA6">
    <h2>LISTA DE DETALLE PEDIDOS</h2>
    <hr style="height:10px;background:#F8CBA6">
  </div></br>


  <div class="mb-3">
<a href="/casagrau/admin.php" class="btn btn-danger"> <i class="bi bi-skip-backward-circle-fill"></i> Regresar</a>
    <a href="pedidos.php" class="btn btn-primary"><i class="bi bi-file-earmark-plus-fill"></i>Nuevo pedido</a> 
    <a href="excel.php" class="btn btn-success"><i class="bi bi-journal-arrow-down"></i>Exportar Excel</a>
</div>

<table class="table">

    <thead>
        <tr  style="border: 50px;">
            <th scope="col">ID</th>
            <th scope="col">CANT.</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">PRECIO</th>
            <th scope="col">SUB-TOTAL</th>
            <th scope="col">ID-PEDIDO</th>
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
</body>

</html>
