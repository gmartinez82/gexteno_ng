<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante = PdeTipoNotaDebitoWsFeParamTipoComprobante::getOxId($id);

$estado = ($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_uno.php';
?>

