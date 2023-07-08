<?php
    require_once("c://xampp/htdocs/casagrau/vista/head/head.php");
    require_once("c://xampp/htdocs/casagrau/control/contactocontrol.php");
    $obj = new contactoControl();
    $rows = $obj->index();
?>


<!DOCTYPE html>
<html lang="es">
   <head>
   <!-- style css -->
   <link rel="stylesheet" href="css/login.css">
   <!-- style css de iconos -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

   <title>lista-contacto</title>
   </head>
      <!-- FIN header -->
<body>
      <div class="container-fluid" style="background-color: #FFE7CC;">
    <div style="text-align: center;">
    <hr style="height:10px;background:#F8CBA6">
    <h2>LISTA DE CONTACTO</h2>
    <hr style="height:10px;background:#F8CBA6">
  </div></br>
<table class="table">
<div class="mb-3">
<a href="/casagrau/admin.php" class="btn btn-danger"> <i class="bi bi-skip-backward-circle-fill"></i> Regresar</a>
</div>
    <thead>
        <tr  style="border: 50px;">
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CORREO</th>
            <th scope="col">ASUNTO</th>
            <th scope="col">MENAJE</th>
            <th scope="col">FECHA</th>
            <th scope="col">USUARIO</th>
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
