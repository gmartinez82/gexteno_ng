<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdePedidoDestinatario::setSesPag($pag);

$criterio = new Criterio(PdePedidoDestinatario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdePedidoDestinatario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_pedido_destinatario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdePedidoDestinatario::getSesPagCantidad(), PdePedidoDestinatario::getSesPag());
$pde_pedido_destinatarios = PdePedidoDestinatario::getPdePedidoDestinatariosDesdeBackend($paginador, $criterio);

include 'pde_pedido_destinatario_datos.php';
?>

