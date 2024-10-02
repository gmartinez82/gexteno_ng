<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdePedidoEnvioEmail::setSesPag($pag);

$criterio = new Criterio(PdePedidoEnvioEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdePedidoEnvioEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_pedido_envio_email');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdePedidoEnvioEmail::getSesPagCantidad(), PdePedidoEnvioEmail::getSesPag());
$pde_pedido_envio_emails = PdePedidoEnvioEmail::getPdePedidoEnvioEmailsDesdeBackend($paginador, $criterio);

include 'pde_pedido_envio_email_datos.php';
?>

