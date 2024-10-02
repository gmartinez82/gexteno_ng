<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prd_param_operacion = PrdParamOperacion::getOxId($id);

$estado = ($prd_param_operacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prd_param_operacion_uno.php';
?>

