<?php   
   require_once("vista/head/head.php"); 
   date_default_timezone_set('America/Bogota');
?>

<!DOCTYPE html>
<html lang="es">

              <?php session_start();
              $user_nom= "";
              $id_user="";
              $admin="";
              $salir=""; 
              $iniciarsesion=""; 
                if (!isset($_SESSION['usuario'])) {
                  $user_nom="Invitado";
                  $id_user="1";
                  $iniciarsesion='<a  href="login.php">Iniciar sesión</a>';
                  }else{
                    $user_nom= $_SESSION['usuario'];
                    $id_user="2";
                    $admin='<a  href="admin.php">Lista / Reportes</a>';
                    $salir='<a  href="loginRegistro/servidor/login/logout.php">Cerrar sesión</a>';                    
                    } 
                    ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pedidos</title>
     <!-- style css de iconos -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">   

  <!--  CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pedidos.css" rel="stylesheet">

</head>

   <?php
      //REQUIERO SOLO DATOS DE DETALLE PEDIDO
       require_once("control/detallepecontrol.php");
         $obj = new detallepeControl();
         $rows = $obj->index();

      //REQUIERE DATOS SOLO DE productos
      require_once("control/productocontrol.php");
         $obj_pod = new productoControl();
         $rows_prod = $obj_pod->index();

      //REQUIERO SOLO DATOS DE DETALLE PEDIDO
      require_once("control/pedidocontrol.php");
         $obj_pe = new pedidoControl();
         $rows_pe = $obj_pe->index();
   ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
   <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
      <a href="index.php"><img src="images/icon/logo.png" alt="" class="img-fluid"></a>
      </div>    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">INICIO</a></li>
          <li><a class="nav-link scrollto" href="index.php #about">NOSOTROS</a></li>
          <li><a class="nav-link scrollto" href="index.php #services">SERVICIOS</a></li>
          <li><a class="nav-link scrollto" href="index.php #habitaciones">HABITACIONES</a></li>
          <li><a class="nav-link scrollto" href="index.php #contact">CONTACTO</a></li>
          <li><a class="nav-link scrollto active" href="#">PEDIDOS</a></li>
          <li class="nav-item dropdown">
            <a style="color:dimgray" class="nav-link dropdown-toggle" name="nav_usuario" id="nav_usuario" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle" style="color:#000;"></i>
              <?php echo '_', $user_nom;  ?>
                    <ul>
                        <?php 
                           echo $iniciarsesion; 
                           echo $admin;  
                           echo $salir;  
                        ?>
                    </ul>
              
            </a> 
          </li>  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
   </div><!-- .div container -->

   

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
   <section class="d-flex flex-column justify-content-end align-items-center"  style="background-color: #FFFBEB;">
      <div class="container" style="margin-top: 20px;" >
         <div class="row">
            <body>   
               <div class="container-fluid form-control"> <!-- inicio div1 -->
              
                  <div class="mb-3">
                     <label class="form-label"><strong>BAR - RESTAURANTE Y SERVICIOS</strong></label>
                     <label class="form-label">Desayuno: L-V:(7:30-9:30 am) y S-D-Fer:(8:00 - 10:00 am)</label>               
                        <div class="group">
                           <form action="vista/detallepedido/store.php" method="POST" autocomplete="off">
                              <div class="input-group mb-3">
                                 <label class="input-group-text">PRODUCTOS: </label>
                                    <select name="productos" id="productos" class="form-control mov">
                                    <option disabled="true" selected>SELECCIONAR PORDUCTOS</option>                                    
                                       <?php  //carga la lista de productos  
                                          foreach ($rows_prod as [$ap,$bp,$cp]) {  
                                       ?><option value="<?php echo $cp?>"><?php echo $bp ?></option> 
                                       <?php } // fin carga p?>                                                  
                                    </select>
                                 <label class="btn btn-primary flex-btn" ><a href="/casagrau/vista/producto/producto.php"><i class="bi bi-eye-fill"></i></a></label> 
                              </div>
                                       <!-- captura el producto seleccionado -->
                                       <input type="hidden" id="producto" class="form-control" required name="producto">
                              
                              <div class="input-group mb-3">
                                 <label class="input-group-text" >CANTIDAD: </label>
                                 <input type="text" id="cant" class="form-control flex-btn" name="cant" onkeypress="return event.charCode>=46 && event.charCode<=57" oninput="calcular()" value="1">
                              </div>

                              <div class="input-group mb-3">                         
                                 <label class="input-group-text">PRECIO: </label>
                                 <label class="input-group-text">S/.</label>
                                 <input type="text" id="precio"  name="precio" class="form-control flex-btn" required  placeholder="0.00" readonly>
                              </div>

                              <div class="input-group mb-3">
                                 <label  class="input-group-text">SUB-T:</label>
                                    <label class="input-group-text">S/.</label>
                                    <input type="text" id="subtotal" class="form-control flex-btn" required name="subtotal" placeholder="0.00" readonly>
                                    <input type="submit" class="btn btn-primary flex-btn" id="btn_agregarpedido" value="Agregar" disabled onclick="agregar_pedido()">                                  
                              </div>
                              <!-- busca el ultimo id de pedido-->
                              <?php 
                              foreach ((array) $rows_pe as [$a]) {
                                 $bult_id_pe = $a + 1;
                                 }                                
                              ?>
                              <input type="hidden" id="id_pedido" name="id_pedido" value="<?php echo $bult_id_pe ?>"> 
                           </form>
                        </div>   
                  </div><!-- fin class="mb-3"-->


                     <!-- inicio de mostrar tabla de productos -->
                  <div class="card" style="min-height: 150px;"><!-- inicio DIV CARD -->
                     <table class="table">
                        <thead>
                           <tr  style="border: 50px;">
                              <th scope="col"><a>CANT</a></th>
                              <th scope="col"><a>DESCRIPCIÓN</a></th>            
                              <th scope="col"><a>PRECIO</a></th>
                              <th scope="col"><a>SUB-T.</a></th>
                              <th scope="col"><a>ANULAR</a></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if($rows): ?>
                              <?php foreach($rows as $row):  if($row[5]==$bult_id_pe){?>
                                 <tr class="table">
                                    <th><a><?= $row[1] ?></a></th>
                                    <th><a><?= $row[2] ?></a></th>
                                    <th><a><?= $row[3] ?></a></th>
                                    <th><a><?= $row[4] ?></a></th>
                                    <th>
                                       <!-- Button trigger modal -->
                                       <a data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>"><i class="bi bi-trash-fill flex-btnanular" style="color: #D21312;"></i></a>
                                       <!-- Modal -->
                                       <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <p class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</p>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   <a>Una vez eliminado no se pude recuperar el registro</a>
                                                </div>
                                                <div class="modal-footer">
                                                   <button  class="btn btn-danger "><a href="vista/detallepedido/delete.php?id_detallepedido=<?= $row[0]?>">Aceptar</a></button>
                                                   <button type="button" class="btn btn-success" data-bs-dismiss="modal"><a>Cancelar</a></button>                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </th>
                                 </tr>
                              <?php } endforeach; ?>
                           <?php else: ?>                        
                                 <tr>
                                    <td colspan="3" class="text-center">Sin pedidos actualmente.... Realice su primer pedido.</td>
                                 </tr>
                           <?php endif; ?>
                        </tbody>
                     </table>
                  </div><!-- FIN DIV CARD -->               

                        <?php  // suma el total de cada pedido                               
                           $num=0.00;
                           foreach ((array) $rows as [$a,$b,$c,$d,$e,$f]) {
                              if($f==$bult_id_pe){
                                 $num+= $e;
                              } 
                           }                                     
                        ?>   

                  <form action="vista/pedido/store.php" method="POST" autocomplete="off">
                     <div class="input-group mb-3 mov">
                        <label class="input-group-text mov">TOTAL:</label>
                           <label class="input-group-text mov" style="background-color: rgb(255, 251, 235);">S/.</label>
                              <input type="text" class="form-control mov2" name="total"  value="<?php  echo $num; ?>" readonly>
                                 <span class="input-group-text mov"><input type="checkbox" name="checkbox">
                                    <select name="id_habitacion" id="id_habitacion" class="form-control mov" disabled="true" onclick="act_btn_enviarpedido()"> 
                                       <option disabled="true" selected>HABITACION</option>
                                       <option value="HAB-101">HAB-101</option>
                                       <option value="HAB-102">HAB-102</option>   
                                       <option value="HAB-103">HAB-103</option>   
                                       <option value="HAB-104">HAB-104</option>   
                                       <option value="HAB-105">HAB-105</option>  
                                       <option value="HAB-106">HAB-106</option>
                                       <option value="HAB-107">HAB-107</option>   
                                       <option value="HAB-108">HAB-108</option>   
                                       <option value="HAB-109">HAB-109</option> 
                                       <option value="HAB-110">HAB-110</option>
                                       <option value="HAB-111">HAB-111</option>   
                                       <option value="HAB-112">HAB-112</option>   
                                       <option value="HAB-113">HAB-113</option>   
                                       <option value="HAB-114">HAB-114</option>  
                                       <option value="HAB-115">HAB-115</option>
                                       <option value="HAB-116">HAB-116</option>   
                                       <option value="HAB-117">HAB-117</option>   
                                       <option value="HAB-118">HAB-118</option>
                                       <option value="HAB-119">HAB-119</option>
                                       <option value="HAB-201">HAB-201</option>
                                       <option value="HAB-202">HAB-202</option>                                                                          
                                    </select>  
                                 </span> 
                                    <input type="hidden" name="fecha_ingreso" value="<?php echo date("j/m/Y  h:i A"); ?>" >
                                    <input type="hidden" name="id_usuario" value="<?php echo $id_user; ?>">                                           
                                                                   
                     </div>  <!-- fin div mb-3--> 
                     <button id="bt_enviarpedido" class="btn btn-primary flex-btnp" type="submit" disabled onclick="realizar_pedido()">Realizar Pedido</button>               
                  </form>               
               </div><!-- fin class="container"-->
            </body> 

            <!-- Javascript files MENU MOVIL-->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery-3.0.0.min.js"></script>
            <script src="js/plugin.js"></script>
               <!-- script de funciones PROPIAS DE CASA GRAU -->
                  <script src="js/funciones.js"></script>
               <!-- Template Main JS File -->
                  <script src="js/main.js"></script>  

         </div> <!-- fin div row -->
      </div><!-- fin class="container"-->
   </section><!-- End Hero -->

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
            &copy; Copyright <strong><span>CasaGrau</span></strong>. Todos los derechs reservados
            </div>
         <div class="credits">
            Diseñado por <a href="#">CasaGrau</a>
            </div>
      </div>
   </footer><!-- End Footer -->


  

</html>