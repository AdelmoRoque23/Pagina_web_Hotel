<?php
     
    try{
        require_once("C://xampp/htdocs/casagrau/control/pedidocontrol.php");
        $obj = new pedidoControl();
        $obj->guardar($_POST['id_habitacion'],$_POST['total'],$_POST['fecha_ingreso'],$_POST['id_usuario']);
        
    }catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
?>

<?php
header("Status: 301 Moved Permanently");
header("Location:/casagrau/pedidos.php");
exit;
?>