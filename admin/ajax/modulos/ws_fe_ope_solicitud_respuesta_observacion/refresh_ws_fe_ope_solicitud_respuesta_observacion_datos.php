<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeOpeSolicitudRespuestaObservacion::setSesPag($pag);

$criterio = new Criterio(WsFeOpeSolicitudRespuestaObservacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudRespuestaObservacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_ope_solicitud_respuesta_observacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeOpeSolicitudRespuestaObservacion::getSesPagCantidad(), WsFeOpeSolicitudRespuestaObservacion::getSesPag());
$ws_fe_ope_solicitud_respuesta_observacions = WsFeOpeSolicitudRespuestaObservacion::getWsFeOpeSolicitudRespuestaObservacionsDesdeBackend($paginador, $criterio);

include 'ws_fe_ope_solicitud_respuesta_observacion_datos.php';
?>

