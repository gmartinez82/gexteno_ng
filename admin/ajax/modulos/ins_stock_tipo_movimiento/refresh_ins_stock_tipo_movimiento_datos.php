<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsStockTipoMovimiento::setSesPag($pag);

$criterio = new Criterio(InsStockTipoMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsStockTipoMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_stock_tipo_movimiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockTipoMovimiento::getSesPagCantidad(), InsStockTipoMovimiento::getSesPag());
$ins_stock_tipo_movimientos = InsStockTipoMovimiento::getInsStockTipoMovimientosDesdeBackend($paginador, $criterio);

include 'ins_stock_tipo_movimiento_datos.php';
?>

