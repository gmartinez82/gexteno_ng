<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeOpeSolicitudTributo::setSesPag($pag);

$criterio = new Criterio(WsFeOpeSolicitudTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_ope_solicitud_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeOpeSolicitudTributo::getSesPagCantidad(), WsFeOpeSolicitudTributo::getSesPag());
$ws_fe_ope_solicitud_tributos = WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributosDesdeBackend($paginador, $criterio);

include 'ws_fe_ope_solicitud_tributo_datos.php';
?>

