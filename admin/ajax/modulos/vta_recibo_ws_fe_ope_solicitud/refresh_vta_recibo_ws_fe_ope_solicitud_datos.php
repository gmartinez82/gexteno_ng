<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboWsFeOpeSolicitud::setSesPag($pag);

$criterio = new Criterio(VtaReciboWsFeOpeSolicitud::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboWsFeOpeSolicitud::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_ws_fe_ope_solicitud');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboWsFeOpeSolicitud::getSesPagCantidad(), VtaReciboWsFeOpeSolicitud::getSesPag());
$vta_recibo_ws_fe_ope_solicituds = VtaReciboWsFeOpeSolicitud::getVtaReciboWsFeOpeSolicitudsDesdeBackend($paginador, $criterio);

include 'vta_recibo_ws_fe_ope_solicitud_datos.php';
?>

