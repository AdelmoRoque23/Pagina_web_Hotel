<?php 
date_default_timezone_set('America/Bogota');
header("Content-Type: application/xls");   
	
header("Content-Disposition: attachment; filename=ReportUsuario_" . date('Y:m:d__h:i_A').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");
require_once("C://xampp/htdocs/casagrau/control/usuariocontrol.php");
$obj = new userControl();
$rows = $obj->index();

?>

<table class="table">   
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">GENERO</th>
                <th scope="col">USUARIO</th>
                <th scope="col">CONTRASEÑA</th>
                <th scope="col">LOCALIDAD</th>
                <th scope="col">FECHA</th>
                <th scope="col">ESTADO</th>
                <th scope="col">ROL</th>
            </tr>
        </thead>
        <tbody>
            <?php if($rows): ?>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <th><?= $row[0] ?></th>
                        <th><?= $row[1] ?></th>
                        <th><?= $row[2] ?></th>
                        <th><?= $row[3] ?></th>
                        <th style="overflow: auto;"><?= $row[4] ?></th>
                        <th><?= $row[5] ?></th>
                        <th><?= $row[6] ?></th>
                        <th><?= $row[7] ?></th>
                        <th><?= $row[8] ?></th>                       
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No hay registros actualmente</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>