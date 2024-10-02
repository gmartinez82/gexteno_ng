<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoWsFeOpeSolicitud::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoWsFeOpeSolicitud::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoWsFeOpeSolicitud::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_ws_fe_ope_solicitud');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoWsFeOpeSolicitud::getSesPagCantidad(), VtaNotaCreditoWsFeOpeSolicitud::getSesPag());
$vta_nota_credito_ws_fe_ope_solicituds = VtaNotaCreditoWsFeOpeSolicitud::getVtaNotaCreditoWsFeOpeSolicitudsDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_ws_fe_ope_solicitud_datos.php';
?>

