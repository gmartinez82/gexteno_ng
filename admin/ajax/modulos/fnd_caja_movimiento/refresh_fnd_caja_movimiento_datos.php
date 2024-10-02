<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaMovimiento::setSesPag($pag);

$criterio = new Criterio(FndCajaMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_movimiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaMovimiento::getSesPagCantidad(), FndCajaMovimiento::getSesPag());
$fnd_caja_movimientos = FndCajaMovimiento::getFndCajaMovimientosDesdeBackend($paginador, $criterio);

include 'fnd_caja_movimiento_datos.php';
?>

