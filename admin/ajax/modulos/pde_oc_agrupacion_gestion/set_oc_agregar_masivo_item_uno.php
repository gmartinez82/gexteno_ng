<?php
include "_autoload.php";

$key = Gral::getVars(Gral::VARS_POST, 'key', 0);
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);
$iva_incluido = Gral::getVars(Gral::VARS_POST, 'cmb_iva_incluido', 0);

$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

$txt_cantidad = 1;

$key++;
?>
<tr class="tr-item" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>">
    <?php include "modal_oc_agregar_masivo_item_uno.php"; ?>
</tr>
