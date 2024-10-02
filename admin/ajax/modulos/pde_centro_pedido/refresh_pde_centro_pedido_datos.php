<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCentroPedido::setSesPag($pag);

$criterio = new Criterio(PdeCentroPedido::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroPedido::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_centro_pedido');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCentroPedido::getSesPagCantidad(), PdeCentroPedido::getSesPag());
$pde_centro_pedidos = PdeCentroPedido::getPdeCentroPedidosDesdeBackend($paginador, $criterio);

include 'pde_centro_pedido_datos.php';
?>

