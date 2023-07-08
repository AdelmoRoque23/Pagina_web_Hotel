<?php 
date_default_timezone_set('America/Bogota');
header("Content-Type: application/xls");  	
header("Content-Disposition: attachment; filename=ReportProduct_" .        date('Y:m:d__h:i_A').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");

require_once("C://xampp/htdocs/casagrau/control/productocontrol.php");
    $obj = new productoControl();
    $rows = $obj->index();

?>


<table class="table">
    <thead>
        <tr  style="border: 50px;">
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">PRECIO</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>                    
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


