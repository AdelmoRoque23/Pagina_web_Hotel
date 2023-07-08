<?php 
date_default_timezone_set('America/Bogota');
header("Content-Type: application/xls");  	
header("Content-Disposition: attachment; filename=ReportDetalleP_" . date('Y:m:d__h:i_A').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");

require_once("C://xampp/htdocs/casagrau/control/detallepecontrol.php");
$obj = new detallepeControl();
$rows = $obj->index();

?>


<table class="table">

    <thead>
        <tr  style="border: 50px;">
            <th scope="col">ID</th>
            <th scope="col">CANT.</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">PRECIO</th>
            <th scope="col">SUB-TOTAL</th>
            <th scope="col">ID-PEDIDO</th>
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
                    <th><?= $row[5] ?></th>                   
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>



