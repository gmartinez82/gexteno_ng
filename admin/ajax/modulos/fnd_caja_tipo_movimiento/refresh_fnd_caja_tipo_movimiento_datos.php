<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaTipoMovimiento::setSesPag($pag);

$criterio = new Criterio(FndCajaTipoMovimiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaTipoMovimiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_tipo_movimiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaTipoMovimiento::getSesPagCantidad(), FndCajaTipoMovimiento::getSesPag());
$fnd_caja_tipo_movimientos = FndCajaTipoMovimiento::getFndCajaTipoMovimientosDesdeBackend($paginador, $criterio);

include 'fnd_caja_tipo_movimiento_datos.php';
?>

