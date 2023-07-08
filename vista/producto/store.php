<?php
    require_once("c://xampp/htdocs/casagrau/control/productocontrol.php");
    $obj = new productoControl();
    $obj->guardar($_POST['nombre'],$_POST['precio']);
?>