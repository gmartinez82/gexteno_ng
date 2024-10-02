<?php
include "_autoload.php";

$key = Gral::getVars(Gral::VARS_POST, 'key', 0);
$pan_panol_origen_id = Gral::getVars(Gral::VARS_POST, 'pan_panol_origen', 0);
$pan_panol_origen = PanPanol::getOxId($pan_panol_origen_id);

$txt_cantidad = 1;

$key++;
?>
<tr class="tr-item" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>">
    <?php include "modal_pdi_pedido_agrupacion_agregar_item_uno.php"; ?>
</tr>
