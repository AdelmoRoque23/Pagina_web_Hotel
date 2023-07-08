<?php
    require_once("C://xampp/htdocs/casagrau/control/habitacioncontrol.php");
    $obj = new habitacionControl();
    $obj->delete($_GET['id_habitacion']);

?>


