<?php
    require_once("C://xampp/htdocs/casagrau/vista/head/head.php");
    require_once("C://xampp/htdocs/casagrau/control/pedidocontrol.php");
    $obj = new pedidoControl();
    $rows = $obj->index();
?>


<!DOCTYPE html>
<html lang="es">
   <head>
   <!-- style css -->
   <link rel="stylesheet" href="css/login.css">
    <!-- style css de iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

   <title>lista</title>

</head>
      <!-- end header -->


      <body style="background-color: #FFFBEB;">   

      <div class="container" style="background-color: #FFE7CC;">
    <div style="text-align: center;">
    <hr style="height:10px;background:#F8CBA6">
    <h2>LISTA DE PEDIDOS</h2>
    <hr style="height:10px;background:#F8CBA6">
  </div></br>

    <div class="mb-3">
        <a href="/CasaGrau/admin.php" class="btn btn-danger"><i class="bi bi-skip-backward-circle-fill"></i> Regresar</a>
        <a href="excel.php" class="btn btn-success"><i class="bi bi-journal-arrow-down"></i>Exportar Excel</a> 
    </div>

<table class="table">
    <thead>
        <tr  style="border: 50px;">
            <th scope="col">ID</th>
            <th scope="col">HABITACION</th>
            <th scope="col">TOTAL</th>
            <th scope="col">FECHA</th>
            <th scope="col">ID-USUARIO</th>
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
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
 
</body>

</html>





