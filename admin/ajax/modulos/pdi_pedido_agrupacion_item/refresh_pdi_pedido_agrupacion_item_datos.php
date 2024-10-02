<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiPedidoAgrupacionItem::setSesPag($pag);

$criterio = new Criterio(PdiPedidoAgrupacionItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedidoAgrupacionItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_pedido_agrupacion_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedidoAgrupacionItem::getSesPagCantidad(), PdiPedidoAgrupacionItem::getSesPag());
$pdi_pedido_agrupacion_items = PdiPedidoAgrupacionItem::getPdiPedidoAgrupacionItemsDesdeBackend($paginador, $criterio);

include 'pdi_pedido_agrupacion_item_datos.php';
?>

