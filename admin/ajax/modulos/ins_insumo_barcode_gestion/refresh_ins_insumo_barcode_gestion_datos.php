<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
InsInsumo::setSesPag($pag);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumo::getSesPagCantidad(), InsInsumo::getSesPag());
$ins_insumos = InsInsumo::getInsInsumos($paginador, $criterio);

include 'ins_insumo_barcode_gestion_datos.php';
?>
<script>
setInitInsumosBarcodeGestion();
</script>