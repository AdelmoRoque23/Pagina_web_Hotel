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
            <h2>REGISTRAR NUEVO PRODCUTO</h2>
            <hr style="height:10px;background:#F8CBA6">
        </div></br>


  <div class="container">
    <div class="row">
    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="imputfor" class="form-label">Nombre</label>
        <input type="text" name="nombre" required class="form-control" id="imputfor" aria-describedby="emailHelp">
        <label for="imputfor" class="form-label">Precio</label>
        <input type="text" name="precio" required class="form-control" id="imputfor" aria-describedby="emailHelp">       
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="producto.php">Cancelar</a>
    </form>



    </div>
  </div>

</body>


</html>