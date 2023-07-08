<?php   require_once("vista/head/head.php"); ?>



<?php session_start(); 
  if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
  }
?>

<head>

  <link href="css/admin.css" rel="stylesheet">
  <!-- style css de iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"> 

</head>





<body class="container"> 


<!--- #fc8129 -->

<nav class="navbar navbar-expand-lg  static-top" >
  <div class="container" style="background-color: #F8CBA6;">
    <a class="navbar-brand" href="index.php">
      <img src="images/icon/logo_CASA-GRAU.png" alt="100" height="100">
    </a>
    
    <i class="bi bi-house-door-fill"></i>
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        
    
      <ul class="navbar-nav ms-auto">
      
        <li class="nav-item dropdown">
          <a style="color:#000" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle" style="color:#000"></i> 
            <?php echo $_SESSION['usuario']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="loginRegistro/servidor/login/logout.php">Salir del sistema</a></li>
          </ul>
        </li>
      </ul>
   
  </div>
</nav>

    <div style="background-color: #FFE7CC">

    <div style="text-align: center;">
    <hr style="height:10px;background:#F8CBA6">
    <h2>MENU DE OPCIONES</h2>

    <hr style="height:10px;background:#F8CBA6">
  </div></br>


    <div class="menu-item">
      <div class="container">
      
        
        <a href="vista/producto/producto.php"><div class="title"><i class="bi bi-shop"></i>   PRODUCTO</div></a>
        <div class="arrow"><span class="ion-chevron-right"></span></div>
        <div class="rating -r5">
          <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
          <div class="text">Mantenimiento</div>
        </div>
      </div>
    </div>
    <div class="amazing-menu">    
    <div class="menu-item">
      <div class="container">
        <a href="vista/usuario/usuario.php"><div class="title"><i class="bi bi-people-fill"></i>   USUARIOS</div></a>
        <div class="arrow"><span class="ion-chevron-right"></span></div>
        <div class="rating -r2">
          <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
          <div class="text">Mantenimiento</div>
        </div>
      </div>
    </div>
    <div class="menu-item">
      <div class="container">
        <a href="vista/habitacion/habitacion.php"><div class="title"><i class="bi bi-cart-fill"></i>   HABITACION</div></a>
        <div class="arrow"><span class="ion-chevron-right"></span></div>
        <div class="rating -r4">
          <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
          <div class="text">Mantenimiento</div>
        </div>
      </div>
    </div>
    <div class="menu-item">
      <div class="container">
        <a href="vista/pedido/listapedido.php"><div class="title"><i class="bi bi-cart-fill"></i>   PEDIDOS</div></a>
        <div class="arrow"><span class="ion-chevron-right"></span></div>
        <div class="rating -r4">
          <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
          <div class="text">Mantenimiento</div>
        </div>
      </div>
    </div>
    <div class="menu-item">
      <div class="container">
        <a href="vista/detallepedido/lista_detpedido.php"><div class="title"> <i class="bi bi-cart-dash"></i>    DETALLES</div></a>
        <div class="arrow"><span class="ion-chevron-right"></span></div>
        <div class="rating -r4">
          <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
          <div class="text">Mantenimiento</div>
        </div>
      </div>
    </div>


    <div class="menu-item">
    <div class="container">
      <a href="vista/contacto/listacontacto.php"><div class="title"><i class="bi bi-person-lines-fill"></i>  CONTACTO</div></a>
      <div class="arrow"><span class="ion-chevron-right"></span></div>
      <div class="rating -r2">
        <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
        <div class="text">Mantenimiento</div>
      </div>
    </div>
  </div>



</div>
</body>
  
  <!-- Template Main JS File -->
  <script src="js/admin.js"></script>

