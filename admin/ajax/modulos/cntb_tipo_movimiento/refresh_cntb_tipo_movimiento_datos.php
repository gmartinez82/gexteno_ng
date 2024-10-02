<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbTipoMovimiento::setSesPag($pag);

$criterio = new Criterio(CntbTipoMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbTipoMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_tipo_movimiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbTipoMovimiento::getSesPagCantidad(), CntbTipoMovimiento::getSesPag());
$cntb_tipo_movimientos = CntbTipoMovimiento::getCntbTipoMovimientosDesdeBackend($paginador, $criterio);

include 'cntb_tipo_movimiento_datos.php';
?>

