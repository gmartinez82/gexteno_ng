<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoEstado::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoEstado::getSesPagCantidad(), VtaNotaCreditoEstado::getSesPag());
$vta_nota_credito_estados = VtaNotaCreditoEstado::getVtaNotaCreditoEstadosDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_estado_datos.php';
?>

