<?php
    require_once("C://xampp/htdocs/casagrau/control/habitacioncontrol.php");
    $obj = new habitacionControl();
    $hab = $obj->show($_GET['numero']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mofificar_habitación</title> 
    <?php  require_once("C://xampp/htdocs/casagrau/vista/head/head.php"); ?>
  </head>




  <body style="background-color: #FFFBEB;">
        <div class="container">

        <div class="container-fluid" style="background-color: #FFE7CC;">
            <div style="text-align: center;">
            <hr style="height:10px;background:#F8CBA6">
            <h2>MODIFICAR HABITACION</h2>
            <hr style="height:10px;background:#F8CBA6">
        </div></br>




  <form action="update.php" method="post" autocomplete="off">
  <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id_habitacion"  class="form-control" id="id_habitacion" value="<?= $hab[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Número</label>
        <div class="col-sm-10">
        <input type="text" name="numero"  class="form-control" id="numero" value="<?= $hab[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Categoría</label>
        <div class="col-sm-10">
            <input type="text" name="categoria" class="form-control" id="categoria" value="<?= $hab[2]?>">
        </div>
    </div>   
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
            <input type="text" name="precio" class="form-control" id="precio" value="<?= $hab[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nivel</label>
        <div class="col-sm-10">
            <input type="text" name="nivel" class="form-control" id="nivel" value="<?= $hab[4]?>">
        </div>
    </div>    
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Tipo</label>
        <div class="col-sm-10">
            <input type="text" name="tipo" class="form-control" id="tipo" value="<?= $hab[5]?>">
        </div>
    </div> 
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?= $hab[6]?>">
        </div>
    </div>    
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Imagen</label>
        <div class="col-sm-10">
            <input type="text" name="imagen" class="form-control" id="imagen" value="<?= $hab[7]?>">
        </div>
    </div>        
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $hab[0]?>">Cancelar</a>
    </div>
  </form>


</div>
</body>
