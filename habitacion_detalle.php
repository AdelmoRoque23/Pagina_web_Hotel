<?php  require_once("vista/head/head.php"); 
    require_once("c://xampp/htdocs/casagrau/control/habitacioncontrol.php");
    $obj = new habitacionControl();
    $date = $obj->show($_GET['numero']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Casa Grau</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

   
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <a href="index.html"><img src="images/icon/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php #hero">INCIO</a></li>
          <li><a class="nav-link scrollto" href="index.php #about">NOSOTROS</a></li>
          <li><a class="nav-link scrollto" href="index.php #services">SERVICIOS</a></li>
          <li><a class="nav-link scrollto " href="index.php #habitaciones">HABITACIONES</a></li>
          <li><a class="nav-link scrollto" href="index.php #contact">CONTACTO</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" name="nav_usuario" id="nav_usuario" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="login.php"><i class="bi bi-person-circle" style="color:#000;"></i>
              <?php session_start(); 
                if (!isset($_SESSION['usuario'])) {
                  echo '_',"Invitado";
              ?> <ul> <a  href="login.php">Iniciar sesión</a></ul>
                  <?php }else{
                    echo '_',$_SESSION['usuario'];
                  ?>
                    <ul>
                      <a  href="admin.php">Lista / Reportes</a>
                      <a href="loginRegistro/servidor/login/logout.php">Cerrar sesión</a>
                    </ul>                          
              <?php } ?>              
            </a>
          </li>         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detalles</h2>
          <ol>
            <li><a href="index.php #habitaciones">Inicio</a></li>
            <li>Detalles</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="images/habitacion/<?= $date["numero"]?>_1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="images/habitacion/<?= $date["numero"]?>_2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="images/habitacion/<?= $date["numero"]?>_3.jpg" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>INFORMACION</h3>
              <ul>
                <li><strong>NUMERO</strong>: <?= $date["numero"]?></li>
                <li><strong>CATEGORIA</strong>: <?= $date["categoria"]?></li>
                <li><strong>PRECIO</strong>: <?= $date["precio"]?></li>
                <li><strong>NIVEL</strong>: <?= $date["nivel"]?></li>
                <li><strong>TIPO</strong>: <?= $date["tipo"]?></li>              
                <li><strong>DESCRIPCION</strong>: <?= $date["descripcion"]?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Características</h2>
              <p>
                ◘ TV 42' <br>
                ◘ Toalla <br>
                ◘ jabon <br>
                ◘ papel <br>
                ◘ desayuno gratis <br>
                ◘ baño propio <br>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Casa Grau</h3>
      <p>En desarrollo...</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Casagrau</span></strong>. Todos los derechos reservados.
      </div>
      <div class="credits">
        Diseñado por <a href="#">Casagrau</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files -->
  <script src="css/aos/aos.js"></script>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/glightbox/js/glightbox.min.js"></script>
  <script src="css/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="css/swiper/swiper-bundle.min.js"></script>
  <script src="css/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  <!-- script de funciones PROPIAS DE CASA GRAU -->
  <script src="js/funciones.js"></script>

</body>

</html>