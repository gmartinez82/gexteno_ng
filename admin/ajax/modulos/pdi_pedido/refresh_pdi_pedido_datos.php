<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiPedido::setSesPag($pag);

$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedido::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_pedido');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedido::getSesPagCantidad(), PdiPedido::getSesPag());
$pdi_pedidos = PdiPedido::getPdiPedidosDesdeBackend($paginador, $criterio);

include 'pdi_pedido_datos.php';
?>

