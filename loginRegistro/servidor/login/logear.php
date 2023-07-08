<?php session_start();
    include "../../clases/Auth.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if ($Auth->logear($usuario, $password)) {
        header("location:/casagrau/admin.php");
    }else {
        header("location:/casagrau/login.php");
        echo "<div class='alert alert-danger'>Acceso denegado</div>";
    }




?>