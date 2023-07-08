<?php
    require_once("C://xampp/htdocs/casagrau/control/productocontrol.php");
    $obj = new productoControl();
    $obj->delete($_GET['id_producto']);

?>


