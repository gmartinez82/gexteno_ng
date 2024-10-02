
<?php

?>

<table align='center' class='listado-comprobante'>
    <tr>
        <th width='20' align='center' class='adm_tbl_encabezado'>
            <input id='chk_comprobante_id_all' name='chk_comprobante_id_all' value='1' type='checkbox'>
        </th>
        <th width='100' align='center' class='adm_tbl_encabezado'>Codigo</th>
        <th width='250' align='center' class='adm_tbl_encabezado'>Cliente</th>
        <th width='270' align='center' class='adm_tbl_encabezado'>Centro Recepcion</th>
        <th width='70' align='center' class='adm_tbl_encabezado'>Items</th>
        <th width='220' align='center' class='adm_tbl_encabezado'>HDR Vinculada</th>
    </tr>
    
    <?php
    foreach($vta_comprobantes as $vta_comprobante):
        $obj_vta_comprobante = $vta_comprobante;
    ?>
    <tr id='div_remito_<?php Gral::_echo($obj_vta_comprobante->getId()); ?>' class='uno div_comprobante_<?php Gral::_echo($obj_vta_comprobante->getId()); ?>' identificador_comprobante='<?php Gral::_echo($obj_vta_comprobante->getId()); ?>'>
        <?php include 'bloque_modal_agregar_comprobante_uno.php'; ?>
    </tr>
    <?php endforeach; ?>
</table>