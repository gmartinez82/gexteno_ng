<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaMovimientoEstado::setSesPag($pag);

$criterio = new Criterio(FndCajaMovimientoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaMovimientoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_movimiento_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaMovimientoEstado::getSesPagCantidad(), FndCajaMovimientoEstado::getSesPag());
$fnd_caja_movimiento_estados = FndCajaMovimientoEstado::getFndCajaMovimientoEstadosDesdeBackend($paginador, $criterio);

include 'fnd_caja_movimiento_estado_datos.php';
?>

