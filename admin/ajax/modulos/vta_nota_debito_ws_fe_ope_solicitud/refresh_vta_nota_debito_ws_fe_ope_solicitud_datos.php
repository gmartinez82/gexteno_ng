<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoWsFeOpeSolicitud::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoWsFeOpeSolicitud::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoWsFeOpeSolicitud::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_ws_fe_ope_solicitud');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoWsFeOpeSolicitud::getSesPagCantidad(), VtaNotaDebitoWsFeOpeSolicitud::getSesPag());
$vta_nota_debito_ws_fe_ope_solicituds = VtaNotaDebitoWsFeOpeSolicitud::getVtaNotaDebitoWsFeOpeSolicitudsDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_ws_fe_ope_solicitud_datos.php';
?>

