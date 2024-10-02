<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaMovimientoItem::setSesPag($pag);

$criterio = new Criterio(FndCajaMovimientoItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaMovimientoItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_movimiento_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaMovimientoItem::getSesPagCantidad(), FndCajaMovimientoItem::getSesPag());
$fnd_caja_movimiento_items = FndCajaMovimientoItem::getFndCajaMovimientoItemsDesdeBackend($paginador, $criterio);

include 'fnd_caja_movimiento_item_datos.php';
?>

