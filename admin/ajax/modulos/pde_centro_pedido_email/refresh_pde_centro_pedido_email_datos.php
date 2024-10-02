<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCentroPedidoEmail::setSesPag($pag);

$criterio = new Criterio(PdeCentroPedidoEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroPedidoEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_centro_pedido_email');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCentroPedidoEmail::getSesPagCantidad(), PdeCentroPedidoEmail::getSesPag());
$pde_centro_pedido_emails = PdeCentroPedidoEmail::getPdeCentroPedidoEmailsDesdeBackend($paginador, $criterio);

include 'pde_centro_pedido_email_datos.php';
?>

