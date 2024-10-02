<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ws_fe_param_tipo_moneda = WsFeParamTipoMoneda::getOxId($id);

$estado = ($ws_fe_param_tipo_moneda->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ws_fe_param_tipo_moneda_uno.php';
?>

