<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(WsFeOpeSolicitudRespuestaObservacion::SES_CRITERIOS);
$criterio->addTabla('ws_fe_ope_solicitud_respuesta_observacion');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

