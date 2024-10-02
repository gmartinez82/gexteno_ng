<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsStockResumenEstado::setSesPag($pag);

$criterio = new Criterio(InsStockResumenEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsStockResumenEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_stock_resumen_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockResumenEstado::getSesPagCantidad(), InsStockResumenEstado::getSesPag());
$ins_stock_resumen_estados = InsStockResumenEstado::getInsStockResumenEstadosDesdeBackend($paginador, $criterio);

include 'ins_stock_resumen_estado_datos.php';
?>

