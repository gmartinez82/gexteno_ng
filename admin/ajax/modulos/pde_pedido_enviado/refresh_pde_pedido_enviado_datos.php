<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdePedidoEnviado::setSesPag($pag);

$criterio = new Criterio(PdePedidoEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdePedidoEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_pedido_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdePedidoEnviado::getSesPagCantidad(), PdePedidoEnviado::getSesPag());
$pde_pedido_enviados = PdePedidoEnviado::getPdePedidoEnviadosDesdeBackend($paginador, $criterio);

include 'pde_pedido_enviado_datos.php';
?>

