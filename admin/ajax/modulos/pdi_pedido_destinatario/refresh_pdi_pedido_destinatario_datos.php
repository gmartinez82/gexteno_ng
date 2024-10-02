<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiPedidoDestinatario::setSesPag($pag);

$criterio = new Criterio(PdiPedidoDestinatario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedidoDestinatario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_pedido_destinatario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedidoDestinatario::getSesPagCantidad(), PdiPedidoDestinatario::getSesPag());
$pdi_pedido_destinatarios = PdiPedidoDestinatario::getPdiPedidoDestinatariosDesdeBackend($paginador, $criterio);

include 'pdi_pedido_destinatario_datos.php';
?>

