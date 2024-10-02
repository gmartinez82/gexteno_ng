<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliCentroPedido::setSesPag($pag);

$criterio = new Criterio(CliCentroPedido::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliCentroPedido::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_centro_pedido');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliCentroPedido::getSesPagCantidad(), CliCentroPedido::getSesPag());
$cli_centro_pedidos = CliCentroPedido::getCliCentroPedidosDesdeBackend($paginador, $criterio);

include 'cli_centro_pedido_datos.php';
?>

