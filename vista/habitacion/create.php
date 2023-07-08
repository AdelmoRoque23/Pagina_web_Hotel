<?php
    require_once("C://xampp/htdocs/casagrau/vista/head/head.php");
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>  </head>



<body style="background-color: #FFFBEB;">
        <div class="container">

        <div class="container-fluid" style="background-color: #FFE7CC;">
            <div style="text-align: center;">
            <hr style="height:10px;background:#F8CBA6">
            <h2>REGISTRAR NUEVA HABITACION</h2>
            <hr style="height:10px;background:#F8CBA6">
        </div></br>


  <div class="container">
    <div class="row">
    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="imputfor" class="form-label">Número</label>
        <input type="text" name="numero" required class="form-control" id="numero" aria-describedby="emailHelp">
        <label for="imputfor" class="form-label">Categoría</label>
        <input type="text" name="categoria" required class="form-control" id="categoria" aria-describedby="emailHelp">
        <label for="imputfor" class="form-label">Precio</label>
        <input type="text" name="precio" required class="form-control" id="precio" aria-describedby="emailHelp">
        <label for="imputfor" class="form-label">Nivel</label>
        <input type="text" name="nivel" required class="form-control" id="nivel" aria-describedby="emailHelp">       
        <label for="imputfor" class="form-label">Tipo</label>
        <input type="text" name="tipo" required class="form-control" id="tipo" aria-describedby="emailHelp">
        <label for="imputfor" class="form-label">Descripción</label>
        <input type="text" name="descripcion" required class="form-control" id="descripcion" aria-describedby="emailHelp">
        <label for="imputfor" class="form-label">Imagen</label>
        <input type="text" name="imagen" required class="form-control" id="imagen" aria-describedby="emailHelp">                
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="habitacion.php">Cancelar</a>
    </form>

    </div>
  </div>

</body>


</html>