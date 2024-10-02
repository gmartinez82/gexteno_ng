<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaMovimientoTipoEstado::setSesPag($pag);

$criterio = new Criterio(FndCajaMovimientoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaMovimientoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_movimiento_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaMovimientoTipoEstado::getSesPagCantidad(), FndCajaMovimientoTipoEstado::getSesPag());
$fnd_caja_movimiento_tipo_estados = FndCajaMovimientoTipoEstado::getFndCajaMovimientoTipoEstadosDesdeBackend($paginador, $criterio);

include 'fnd_caja_movimiento_tipo_estado_datos.php';
?>

