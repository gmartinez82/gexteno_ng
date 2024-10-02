<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsUnidadMedidaPedido::setSesPag($pag);

$criterio = new Criterio(InsUnidadMedidaPedido::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsUnidadMedidaPedido::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_unidad_medida_pedido');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsUnidadMedidaPedido::getSesPagCantidad(), InsUnidadMedidaPedido::getSesPag());
$ins_unidad_medida_pedidos = InsUnidadMedidaPedido::getInsUnidadMedidaPedidosDesdeBackend($paginador, $criterio);

include 'ins_unidad_medida_pedido_datos.php';
?>

