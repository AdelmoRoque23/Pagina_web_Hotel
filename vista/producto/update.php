<?php
    require_once("c://xampp/htdocs/casagrau/control/productocontrol.php");
    $obj = new productoControl();
    $obj->update($_POST['id_producto'],$_POST['nombre'],$_POST['precio']);
    
?>