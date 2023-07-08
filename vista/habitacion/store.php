<?php
    require_once("c://xampp/htdocs/casagrau/control/habitacioncontrol.php");
    $obj = new habitacionControl();
    $obj->guardar($_POST['numero'],$_POST['categoria'],$_POST['precio'],$_POST['nivel'],$_POST['tipo'],$_POST['descripcion'],$_POST['imagen']);
?>