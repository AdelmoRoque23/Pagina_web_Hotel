<?php
    require_once("C://xampp/htdocs/casagrau/control/productocontrol.php");
    $obj = new productoControl();
    $user = $obj->show($_GET['id_producto']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title> 
    <?php    require_once("C://xampp/htdocs/casagrau/vista/head/head.php"); ?>
  </head>




  <body style="background-color: #FFFBEB;">
        <div class="container">

        <div class="container-fluid" style="background-color: #FFE7CC;">
            <div style="text-align: center;">
            <hr style="height:10px;background:#F8CBA6">
            <h2>MODIFICAR PRODUCTOS</h2>
            <hr style="height:10px;background:#F8CBA6">
        </div></br>




  <form action="update.php" method="post" autocomplete="off">
    <div class="mb-3 row">
        <label for="inputid" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id_producto" readonly class="form-control-plaintext" id="id_producto" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="imputNameCompleto" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $user[1]?>">
        </div>
    </div>   
    <div class="mb-3 row">
        <label for="inputUsuario" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
            <input type="text" name="precio" class="form-control" id="precio" value="<?= $user[2]?>">
        </div>
    </div>    
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>


</div>
</body>
