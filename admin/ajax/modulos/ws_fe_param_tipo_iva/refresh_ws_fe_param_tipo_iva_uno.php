<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ws_fe_param_tipo_iva = WsFeParamTipoIva::getOxId($id);

$estado = ($ws_fe_param_tipo_iva->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ws_fe_param_tipo_iva_uno.php';
?>

