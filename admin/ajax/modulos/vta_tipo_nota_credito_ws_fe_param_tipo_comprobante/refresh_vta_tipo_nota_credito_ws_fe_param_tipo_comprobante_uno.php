<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_tipo_nota_credito_ws_fe_param_tipo_comprobante = VtaTipoNotaCreditoWsFeParamTipoComprobante::getOxId($id);

$estado = ($vta_tipo_nota_credito_ws_fe_param_tipo_comprobante->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_uno.php';
?>

