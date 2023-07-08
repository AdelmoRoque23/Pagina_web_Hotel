<?php
    require_once("C://xampp/htdocs/casagrau/control/detallepecontrol.php");
    $obj = new detallepeControl();
    $obj->guardar($_POST['cant'],$_POST['producto'],$_POST['precio'],$_POST['subtotal'],$_POST['id_pedido']);
?>


<?php
header("Status: 301 Moved Permanently");
header("Location:/casagrau/pedidos.php");
exit;
?>
