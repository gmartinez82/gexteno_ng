<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_recibo_item = VtaReciboItem::getOxId($id);

$estado = ($vta_recibo_item->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_recibo_item_gestion_uno.php';
?>
<script>
    setInit();
    setInitVtaReciboItemGestion();
</script>