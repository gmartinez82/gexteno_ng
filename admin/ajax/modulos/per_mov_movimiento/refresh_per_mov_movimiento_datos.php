<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerMovMovimiento::setSesPag($pag);

$criterio = new Criterio(PerMovMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerMovMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_mov_movimiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerMovMovimiento::getSesPagCantidad(), PerMovMovimiento::getSesPag());
$per_mov_movimientos = PerMovMovimiento::getPerMovMovimientosDesdeBackend($paginador, $criterio);

include 'per_mov_movimiento_datos.php';
?>

