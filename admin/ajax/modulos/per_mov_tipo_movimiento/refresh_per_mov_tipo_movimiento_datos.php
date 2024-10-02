<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerMovTipoMovimiento::setSesPag($pag);

$criterio = new Criterio(PerMovTipoMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerMovTipoMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_mov_tipo_movimiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerMovTipoMovimiento::getSesPagCantidad(), PerMovTipoMovimiento::getSesPag());
$per_mov_tipo_movimientos = PerMovTipoMovimiento::getPerMovTipoMovimientosDesdeBackend($paginador, $criterio);

include 'per_mov_tipo_movimiento_datos.php';
?>

