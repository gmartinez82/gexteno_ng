<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiPedidoAgrupacionEnviado::setSesPag($pag);

$criterio = new Criterio(PdiPedidoAgrupacionEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedidoAgrupacionEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_pedido_agrupacion_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedidoAgrupacionEnviado::getSesPagCantidad(), PdiPedidoAgrupacionEnviado::getSesPag());
$pdi_pedido_agrupacion_enviados = PdiPedidoAgrupacionEnviado::getPdiPedidoAgrupacionEnviadosDesdeBackend($paginador, $criterio);

include 'pdi_pedido_agrupacion_enviado_datos.php';
?>

