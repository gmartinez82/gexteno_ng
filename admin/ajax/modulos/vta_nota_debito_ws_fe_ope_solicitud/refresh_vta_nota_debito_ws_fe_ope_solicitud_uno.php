<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_nota_debito_ws_fe_ope_solicitud = VtaNotaDebitoWsFeOpeSolicitud::getOxId($id);

$estado = ($vta_nota_debito_ws_fe_ope_solicitud->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_nota_debito_ws_fe_ope_solicitud_uno.php';
?>

