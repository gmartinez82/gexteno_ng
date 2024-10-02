<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_param_unidad_medida = EkuParamUnidadMedida::getOxId($id);

$estado = ($eku_param_unidad_medida->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_param_unidad_medida_uno.php';
?>

