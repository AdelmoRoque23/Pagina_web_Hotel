
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crear</title>   
    <?php
      require_once("C://xampp/htdocs/casagrau/vista/head/head.php");
      date_default_timezone_set('America/Bogota');
     ?>  
  </head>
  

  <body style="background-color: #FFFBEB;">
        <div class="container">
        <form action="store.php" method="POST" autocomplete="off">

        <div class="container-fluid" style="background-color: #FFE7CC;">
            <div style="text-align: center;">
            <hr style="height:10px;background:#F8CBA6">
            <h2>REGISTRAR USUARIO</h2>
            <hr style="height:10px;background:#F8CBA6">
        </div></br>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre completo</span>
        <input type="text" name="apellidos_nombre" required class="form-control" id="impuapellidos_nombretfor" aria-describedby="emailHelp">
      </div>

      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Genero</span>
        <select class="form-select" id="genero_usuario" name="genero_usuario">
          <option>MASCULINO</option>
          <option>FEMENINO</option>
          </select>
      </div>

      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Usuario</span>
        <input type="text" name="usuario" required class="form-control" id="usuario" aria-describedby="emailHelp">
      </div>

      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Contraseña</span>
        <input type="text" name="password" required class="form-control" id="password" aria-describedby="emailHelp">
      </div>

      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Localidad</span>
        <input type="text" name="localidad_usuario" required class="form-control" id="localidad_usuario" aria-describedby="emailHelp">
      </div>

      <div class="input-group mb-3">
        <input type="hidden" name="fecha_creausuario" required class="form-control" id="fecha_creausuario" value="<?php echo date("j/m/Y  h:i A"); ?>">
       </div>

       <div class="input-group mb-3">
       <span class="input-group-text" id="basic-addon1">Estado</span>
        <select class="form-select" id="estado_usuario" name="estado_usuario">
          <option>ACTIVO</option>
          <option>DESACTIVADO</option>
        </select>
       </div>

       <div class="input-group mb-3">
       <span class="input-group-text" id="basic-addon1">Rol</span>
        <select class="form-select" id="rol_usuario" name="rol_usuario">
          <option>ADMINISTRADOR</option>
          <option>INVITADO</option>
        </select>
       </div>
        
        
        
        




    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="usuario.php">Cancelar</a>
    </form>



    </div>
  </div>

</body>


</html>