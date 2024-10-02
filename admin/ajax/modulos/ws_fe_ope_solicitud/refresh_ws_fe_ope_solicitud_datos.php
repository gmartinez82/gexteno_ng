<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeOpeSolicitud::setSesPag($pag);

$criterio = new Criterio(WsFeOpeSolicitud::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitud::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_ope_solicitud');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeOpeSolicitud::getSesPagCantidad(), WsFeOpeSolicitud::getSesPag());
$ws_fe_ope_solicituds = WsFeOpeSolicitud::getWsFeOpeSolicitudsDesdeBackend($paginador, $criterio);

include 'ws_fe_ope_solicitud_datos.php';
?>

