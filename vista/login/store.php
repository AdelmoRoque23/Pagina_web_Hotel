<?php
    include("C://xampp/htdocs/casagrau/control/logincontrol.php");
    $obj = new loginControl();
    $obj->guardar($_POST['apellidos_nombre'],$_POST['genero_usuario'],$_POST['usuario'],password_hash($_POST['password'], PASSWORD_DEFAULT),$_POST['localidad_usuario'],$_POST['fecha_creausuario'],$_POST['estado_usuario'],$_POST['rol_usuario']);
?>


<?php
header("Status: 301 Moved Permanently");
header("Location:/casagrau/login.php");
exit;
?>