<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdePedido::setSesPag($pag);

$criterio = new Criterio(PdePedido::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdePedido::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_pedido');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdePedido::getSesPagCantidad(), PdePedido::getSesPag());
$pde_pedidos = PdePedido::getPdePedidosDesdeBackend($paginador, $criterio);

include 'pde_pedido_datos.php';
?>

