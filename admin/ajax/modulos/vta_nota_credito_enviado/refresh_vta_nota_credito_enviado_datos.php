<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoEnviado::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoEnviado::getSesPagCantidad(), VtaNotaCreditoEnviado::getSesPag());
$vta_nota_credito_enviados = VtaNotaCreditoEnviado::getVtaNotaCreditoEnviadosDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_enviado_datos.php';
?>

