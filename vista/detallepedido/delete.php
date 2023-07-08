<?php
    require_once("C://xampp/htdocs/casagrau/control/detallepecontrol.php");
    $obj = new detallepeControl();
    $obj->delete($_GET['id_detallepedido']);

?>


<?php
header("Status: 301 Moved Permanently");
header("Location:/casagrau/pedidos.php");
exit;
?>
