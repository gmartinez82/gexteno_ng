<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$ins_stock_resumen = InsStockResumen::getOxId($id);

$estado = ($ins_stock_resumen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_stock_resumen_gestion_uno.php';
?>
<script>
setInitStockResumen();
setInit();
</script>