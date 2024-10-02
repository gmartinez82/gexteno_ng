<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prd_param_tipo_operacion = PrdParamTipoOperacion::getOxId($id);

$estado = ($prd_param_tipo_operacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prd_param_tipo_operacion_uno.php';
?>

