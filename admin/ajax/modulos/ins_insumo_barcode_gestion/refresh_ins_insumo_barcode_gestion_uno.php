<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$ins_insumo = InsInsumo::getOxId($id);

$estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_insumo_barcode_gestion_uno.php';
?>
<script>
setInitInsumosBarcodeGestion();
</script>