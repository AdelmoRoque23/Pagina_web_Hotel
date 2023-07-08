<?php 
date_default_timezone_set('America/Bogota');
header("Content-Type: application/xls");  	
header("Content-Disposition: attachment; filename=ReportPedido_" . date('Y:m:d__h:i_A').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");

require_once("C://xampp/htdocs/casagrau/control/pedidocontrol.php");
$obj = new pedidoControl();
$rows = $obj->index();

?>


<table class="table">
    <thead>
        <tr  style="border: 50px;">
            <th scope="col">ID</th>
            <th scope="col">HABITACION</th>
            <th scope="col">TOTAL</th>
            <th scope="col">FECHA</th>
            <th scope="col">ID-USER</th>
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
                    <th><?= $row[4] ?></th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


