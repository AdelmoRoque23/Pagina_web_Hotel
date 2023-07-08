<?php
    require_once("C://xampp/htdocs/casagrau/control/usuariocontrol.php");
    $obj = new userControl();
    $obj->delete($_GET['id_usuario']);

?>


