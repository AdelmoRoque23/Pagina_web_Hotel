<?php   
  require_once("vista/head/head.php"); 
  date_default_timezone_set('America/Bogota');
  require_once("C://xampp/htdocs/casagrau/control/habitacioncontrol.php");
  $obj = new habitacionControl();
  $rows = $obj->index();
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>index</title>

  <!-- Favicons -->
  <link href="images/img/favicon.png" rel="icon">
  <link href="images/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
 
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="index.php"><img src="images/icon/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">INICIO</a></li>
          <li><a class="nav-link scrollto" href="#about">NOSOTROS</a></li>
          <li><a class="nav-link scrollto" href="#services">SERVICIOS</a></li>
          <li><a class="nav-link scrollto" href="#habitaciones">HABITACIONES</a></li>
          <li><a class="nav-link scrollto" href="#contact">CONTACTO</a></li>
          <li><a class="nav-link scrollto" href="pedidos.php">PEDIDOS</a></li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" name="nav_usuario" id="nav_usuario" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="login.php"><i class="bi bi-person-circle" style="color:#000;"></i>
              <?php session_start(); 
              $id_user="";
                if (!isset($_SESSION['usuario'])) {
                  echo '_',"Invitado";
                  $id_user="1";
              ?> <ul> <a  href="login.php">Iniciar sesión</a></ul>
                  <?php }else{
                    echo '_',$_SESSION['usuario'];
                    $id_user="2";
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <img src="images/slide1.jpg">
          <h2 class="animate__animated animate__fadeInDown">BIENVENIDOS A <span>CASA GRAU</span></h2>
          <p class="animate__animated fanimate__adeInUp">Check In: <span>02:00 pm __</span> Check Out: <span>12:00 pm</span></p>
          <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">LEER MAS</a> -->
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
        <img src="images/slide2.jpg">
          <h2 class="animate__animated animate__fadeInDown">TU LUGAR <span> FAVORITO </span></h2>
          <p class="animate__animated fanimate__adeInUp">Check In: <span>02:00 pm __</span> Check Out: <span>12:00 pm</span></p>
          
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
        <img src="images/slide3.jpg">
          <h2 class="animate__animated animate__fadeInDown">BIENVENIDOS A <span>CASA GRAU</span></h2>
          <p class="animate__animated fanimate__adeInUp">Check In: <span>02:00 pm __</span> Check Out: <span>12:00 pm</span></p>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="#" xmlns:xlink="#" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Nosotros  ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>NOSOTROS</h2>
          <p>¿QUIENES SOMOS?</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
            Te invita a poder disfrutar y pasar un lindo momento en compañía de tus amigos o familiares disfruta ,degusta de lo mejor de nuestro Cafetería , tomate un refrescante baño en nuestra piscina y por la noche tomate un descanso en nuestro Hotel.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Servicio de cochera</li>
              <li><i class="ri-check-double-line"></i>Piscina</li>
              <li><i class="ri-check-double-line"></i>Restaurante</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            frece una variedad de servicios especialmente pensados para el descanso y la diversión. Nuestro compromiso es brindarle un servicio de calidad, por lo cual nos hemos ganado reconocimiento de nuestros huéspedes. ven y disfruta de todo lo que Casa Grau tiene preparado para ti.
            </p>
            <a href="#" class="btn-learn-more">lEER MÁS</a>
          </div>
        </div>

      </div>
    </section><!-- Fin Nosotros  -->

    <!-- ======= Fact  ======= -->
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">NOSOTROS</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">MISION</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">VISION</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">VALORES</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>CASA GRAU</h3>
                <p class="fst-italic">
                Hotel Casa Grau ofrece una variedad de servicios especialmente pensados para el descanso y la diversión. Ubicado en un lugar privilegiado cerca a la Plaza de Armas de Chincha. Nuestro compromiso es brindarle un servicio de calidad, por lo cual nos hemos ganado reconocimiento de nuestros huéspedes. En familia, pareja o con amigos, ven y disfruta de todo lo que Casa Grau tiene preparado para ti.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Innovación y calidad al servicio del cliente</li>
                  <li><i class="ri-check-double-line"></i> Sin perder nuestra esencia</li>
                  <li><i class="ri-check-double-line"></i> Los empleados como valor añadido</li>
                </ul>
                <p>  </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/img/features-1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>NUESTRO PRESENTE</h3>
                <p>
                Desde nuestros orígenes, la búsqueda de la calidad y la excelencia constituyen nuestro principal objetivo, lo que se traduce en la oportunidad de ofrecer a cada cliente una experiencia inolvidable. Asimismo, plenamente conscientes de que lo que hagamos hoy tendrá su consecuencia el día de mañana, mantenemos un firme compromiso medioambiental, con el deseo de preservar nuestro entorno para las nuevas generaciones.
                </p>
                <p class="fst-italic">           </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Compromiso social y medioambiental</li>
                  <li><i class="ri-check-double-line"></i> Conservación del Patrimonio</li>
                  <li><i class="ri-check-double-line"></i> Pensando en el futuro</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/img/features-2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>NUESTRO FUTURO</h3>
                <p>
                Afrontamos nuestro futuro con ilusión y la confianza que da el trabajo bien hecho. Nuestra intención es mantenernos como empresa de referencia en el sector turístico, superando las expectativas de cada cliente y satisfaciendo todas sus necesidades. Aspectos como la calidad, la creatividad, la transparencia y el compromiso social y medioambiental son los que marcan y continuarán definiendo nuestra trayectoria.
                </p>
                <ul>
                  <!--<li><i class="ri-check-double-line"></i> </li> -->
                </ul>
                <p class="fst-italic">             </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/img/features-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>NUESTRO COMPROMISO</h3>
                <p>
          
                </p>
                <p class="fst-italic">
                Ser un referente de excelencia en nuestro sector a nivel internacional gracias a nuestra calidad de servicio, equipo humano, tecnología y resultados, que nos permita mantener un crecimiento sostenible, ordenado y controlado e incorporar nuevas líneas de negocio y facilite conseguir una transición generacional con el adecuado balance entre tradición y cambio, respetando los valores de la compañía.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Compromiso</li>
                  <li><i class="ri-check-double-line"></i>Trabajo en equipo</li>
                  <li><i class="ri-check-double-line"></i>Sostenibilidad</li>
                  <li><i class="ri-check-double-line"></i> Superación</li>
                  <li><i class="ri-check-double-line"></i>Pasión y entusiasmo</li>
                  <li><i class="ri-check-double-line"></i>Excelencia</li>
                  <li><i class="ri-check-double-line"></i>Responsabilidad social y desarrollo local</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/img/features-4.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Fin Fact -->

    

    <!-- ======= Servicios ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>SERVICIOS</h2>
          <p>OFRECEMOS</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">HOSPEDAJE</a></h4>
              <p class="description">-</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">RESTAURANTE</a></h4>
              <p class="description">-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">PISCINA</a></h4>
              <p class="description">-</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">ESTACIONAMIENTO</a></h4>
              <p class="description">-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">EVENTOS</a></h4>
              <p class="description">-</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">OTROS SERVICIOS</a></h4>
              <p class="description">-</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fin Servicios -->



    <!-- ======= Habitaciones ======= -->
    <section id="habitaciones" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>HABITACIONES</h2>
          <p>ver</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">Todas</li>
          <li data-filter=".filter-app">HAB-SIMPLE</li>
          <li data-filter=".filter-card">HAB-MATRIMONIAL</li>
          <li data-filter=".filter-web">HAB-DOBLE CAMA</li>
        </ul>
       

        <div class="row portfolio-container" data-aos="fade-up">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="images/habitacion/Hab_101.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Habitación simple 1 cama</h4>              
              <p>HAB-SIMPLE</p>              
              <a href="images/habitacion/Hab_101.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_101" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_102.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_102.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_102" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="images/habitacion/Hab_103.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Habitación matrimonial</h4>
              <p>HAB-MATRIMONIAL</p>
              <a href="images/habitacion/Hab_103.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_103" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="images/habitacion/Hab_104.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Habitación matrimonial</h4>
              <p>HAB-MATRIMONIAL</p>
              <a href="images/habitacion/Hab_104.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_104" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_105.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_105.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_105" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="images/habitacion/Hab_106.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación simple 1 cama</h4>
              <p>HAB-SIMPLE</p>
              <a href="images/habitacion/Hab_106.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_106" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="images/habitacion/Hab_107.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Habitación matrimonial</h4>
              <p>HAB-MATRIMONIAL</p>
              <a href="images/habitacion/Hab_107.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_107" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="images/habitacion/Hab_108.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Habitación matrimonial</h4>
              <p>HAB-MATRIMONIAL</p>
              <a href="images/habitacion/Hab_108.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_108" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_109.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_109.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_109" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_110.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_110.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_110" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_111.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_111.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_111" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_112.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_112.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_112" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_113.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_113.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_113" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_114.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_114.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_114" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_115.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_115.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_115" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_116.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_116.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_116" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_117.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_117.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_117" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_118.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_118.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_118" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_119jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_119.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_119" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_201.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_201.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_201" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/habitacion/Hab_202.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Habitación doble 2 camas</h4>
              <p>HAB-DOBLE CAMA</p>
              <a href="images/habitacion/Hab_202.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ampliar imagen"><i class="bx bx-plus"></i></a>
              <a href="habitacion_detalle.php?numero=Hab_202" class="details-link" title="Más detalles"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Fin Habitaciones  -->


  

    

    <!-- ======= Contacto ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contacto</h2>
          <p>Contáctanos</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>Calle Grau N° 541, Chincha Alta, Ica</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>reservas@casagrauperu.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Cel:</h4>
                <p>056282509</p>
                <p>+51 993554396</p>
                <p>+51 991696050</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="vista/contacto/store.php" method="POST" role="form" class="form-control">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo/E-mail" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <input type="hidden" class="form-control" name="fecha" id="fecha" value="<?php echo date("j/m/Y  h:i:s A"); ?>" > 
              <input type="hidden" name="id_usuario" value="<?php echo $id_user; ?>">        
              <div class="text-center"><button type="submit" name="btn_enviarcontacto" style="background-color: #F6BA6F;">Enviar mensaje</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- Fin Contacto -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>CASA GRAU</h3>
      <p>Te invita a poder disfrutar y pasar un lindo momento en compañía de tus amigos o familiares disfruta ,degusta de lo mejor de nuestro Cafetería , tomate un refrescante baño en nuestra piscina y por la noche tomate un descanso en nuestro Hotel.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>CasaGrau</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        Diseñado por <a href="#">CasaGrau</a>
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