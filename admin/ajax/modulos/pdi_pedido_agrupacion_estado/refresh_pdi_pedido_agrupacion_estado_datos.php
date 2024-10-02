<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiPedidoAgrupacionEstado::setSesPag($pag);

$criterio = new Criterio(PdiPedidoAgrupacionEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedidoAgrupacionEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_pedido_agrupacion_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedidoAgrupacionEstado::getSesPagCantidad(), PdiPedidoAgrupacionEstado::getSesPag());
$pdi_pedido_agrupacion_estados = PdiPedidoAgrupacionEstado::getPdiPedidoAgrupacionEstadosDesdeBackend($paginador, $criterio);

include 'pdi_pedido_agrupacion_estado_datos.php';
?>

