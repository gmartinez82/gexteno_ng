<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiPedidoAgrupacion::setSesPag($pag);

$criterio = new Criterio(PdiPedidoAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedidoAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_pedido_agrupacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedidoAgrupacion::getSesPagCantidad(), PdiPedidoAgrupacion::getSesPag());
$pdi_pedido_agrupacions = PdiPedidoAgrupacion::getPdiPedidoAgrupacionsDesdeBackend($paginador, $criterio);

include 'pdi_pedido_agrupacion_datos.php';
?>

