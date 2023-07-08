<?php
    require_once("C://xampp/htdocs/casagrau/control/usuariocontrol.php");
    $obj = new userControl();
    $user = $obj->show($_GET['id_usuario']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit</title>

    <!-- style-->
    <?php    require_once("C://xampp/htdocs/casagrau/vista/head/head.php"); ?>

</head>


  <body style="background-color: #FFFBEB;">
    <div class="container">

    <div class="container-fluid" style="background-color: #FFE7CC;">
    <div style="text-align: center;">
    <hr style="height:10px;background:#F8CBA6">
    <h2>MODIFICAR USURIO</h2>
    <hr style="height:10px;background:#F8CBA6">
  </div></br>

  <form action="update.php" method="post" autocomplete="off">
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="label" name="id_usuario" class="form-control" id="id_usuario" value="<?= $user[0]?>" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="apellidos_nombre" class="form-control" id="apellidos_nombre" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Nueva Género</label>     
        <div class="col-sm-10">   
        <input type="text" name="genero_usuario" class="form-control" id="genero_usuario" data-toggle="tooltip" data-placement="bottom" title="MASCULINO / FEMENINO" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nuevo Usuario</label>
        <div class="col-sm-10">
            <input type="text" name="usuario" class="form-control" id="usuario" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nuevo Password</label>
        <div class="col-sm-10">
            <input type="text" name="password" class="form-control" id="password" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nuevo Localidad</label>
        <div class="col-sm-10">
            <input type="text" name="localidad_usuario" class="form-control" id="localidad_usuario" value="<?= $user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nuevo Fecha</label>
        <div class="col-sm-10">
            <input type="text" name="fecha_creausuario" class="form-control" id="fecha_creausuario" value="<?= $user[6]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Nuevo Estado</label>
        <div class="col-sm-10">
            <input type="text" name="estado_usuario" class="form-control" id="estado_usuario" data-toggle="tooltip" data-placement="bottom" title="ACTIVO / INACTIVO" value="<?= $user[7]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nuevo Rol</label>
        <div class="col-sm-10">
            <input type="text" name="rol_usuario" class="form-control" id="rol_usuario" data-toggle="tooltip" data-placement="bottom" title="ADMIN / INVITADO" value="<?= $user[8]?>">
        </div>
    </div>
    <div style="text-align: right;">
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>

  </div>
  </body>
