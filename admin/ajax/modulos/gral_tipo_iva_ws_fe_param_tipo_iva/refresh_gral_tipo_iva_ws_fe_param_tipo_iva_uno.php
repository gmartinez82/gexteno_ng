<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_tipo_iva_ws_fe_param_tipo_iva = GralTipoIvaWsFeParamTipoIva::getOxId($id);

$estado = ($gral_tipo_iva_ws_fe_param_tipo_iva->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_tipo_iva_ws_fe_param_tipo_iva_uno.php';
?>

