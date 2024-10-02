<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeOpeSolicitudRespuesta::setSesPag($pag);

$criterio = new Criterio(WsFeOpeSolicitudRespuesta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudRespuesta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_ope_solicitud_respuesta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeOpeSolicitudRespuesta::getSesPagCantidad(), WsFeOpeSolicitudRespuesta::getSesPag());
$ws_fe_ope_solicitud_respuestas = WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestasDesdeBackend($paginador, $criterio);

include 'ws_fe_ope_solicitud_respuesta_datos.php';
?>

