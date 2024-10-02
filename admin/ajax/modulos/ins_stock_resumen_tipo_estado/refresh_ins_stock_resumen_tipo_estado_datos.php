<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsStockResumenTipoEstado::setSesPag($pag);

$criterio = new Criterio(InsStockResumenTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsStockResumenTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_stock_resumen_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockResumenTipoEstado::getSesPagCantidad(), InsStockResumenTipoEstado::getSesPag());
$ins_stock_resumen_tipo_estados = InsStockResumenTipoEstado::getInsStockResumenTipoEstadosDesdeBackend($paginador, $criterio);

include 'ins_stock_resumen_tipo_estado_datos.php';
?>

