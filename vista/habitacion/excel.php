<?php 
date_default_timezone_set('America/Bogota');
header("Content-Type: application/xls");  	
header("Content-Disposition: attachment; filename=ReportProduct_" .        date('Y:m:d__h:i_A').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");

require_once("C://xampp/htdocs/casagrau/control/habitacioncontrol.php");
    $obj = new habitacionControl();
    $rows = $obj->index();

?>


<table class="table">
    <thead>
        <tr  style="border: 50px;">
            <th scope="col">ID</th>
            <th scope="col">NUMERO</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">PRECIO</th>
            <th scope="col">NIVEL</th>
            <th scope="col">TIPO</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">IMAGEN</th>
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
                    <th><?= $row[6] ?></th>
                    <th><?= $row[7] ?></th>                     
                </tr>                    
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


