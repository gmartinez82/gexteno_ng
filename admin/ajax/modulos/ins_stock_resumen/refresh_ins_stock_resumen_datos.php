<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsStockResumen::setSesPag($pag);

$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsStockResumen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_stock_resumen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockResumen::getSesPagCantidad(), InsStockResumen::getSesPag());
$ins_stock_resumens = InsStockResumen::getInsStockResumensDesdeBackend($paginador, $criterio);

include 'ins_stock_resumen_datos.php';
?>

