<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
InsStockResumen::setSesPag($pag);

$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
$criterio->addSelect(InsInsumo::GEN_ATTR_DESCRIPCION);
$criterio->addTabla('ins_stock_resumen');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_resumen.ins_insumo_id', 'LEFT JOIN');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockResumen::getSesPagCantidad(), InsStockResumen::getSesPag());
$ins_stock_resumens = InsStockResumen::getInsStockResumensDesdeBackend($paginador, $criterio);

include 'ins_stock_resumen_gestion_datos.php';
?>
<script>
setInitStockResumen();
setInit();
</script>