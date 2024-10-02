<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsStockMovimiento::setSesPag($pag);

$criterio = new Criterio(InsStockMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsStockMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_stock_movimiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockMovimiento::getSesPagCantidad(), InsStockMovimiento::getSesPag());
$ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientosDesdeBackend($paginador, $criterio);

include 'ins_stock_movimiento_datos.php';
?>

