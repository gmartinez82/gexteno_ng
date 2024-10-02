<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiPedidoAgrupacionTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdiPedidoAgrupacionTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedidoAgrupacionTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_pedido_agrupacion_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedidoAgrupacionTipoEstado::getSesPagCantidad(), PdiPedidoAgrupacionTipoEstado::getSesPag());
$pdi_pedido_agrupacion_tipo_estados = PdiPedidoAgrupacionTipoEstado::getPdiPedidoAgrupacionTipoEstadosDesdeBackend($paginador, $criterio);

include 'pdi_pedido_agrupacion_tipo_estado_datos.php';
?>

