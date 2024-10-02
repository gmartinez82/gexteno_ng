<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ws_fe_ope_solicitud_opcional = WsFeOpeSolicitudOpcional::getOxId($id);

$estado = ($ws_fe_ope_solicitud_opcional->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ws_fe_ope_solicitud_opcional_uno.php';
?>

