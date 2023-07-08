<?php
    require_once("control/contactocontrol.php");
    $obj = new contactoControl();
    $obj->guardar($_POST['nombre'],$_POST['correo'],$_POST['asunto'],$_POST['mensaje'],$_POST['fecha'],$_POST['id_usuario']);
?>


<?php
header("Status: 301 Moved Permanently");
header("Location:/casagrau/index.php");
exit;
?>