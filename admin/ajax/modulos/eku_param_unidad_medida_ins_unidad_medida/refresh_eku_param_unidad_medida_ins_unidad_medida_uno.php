<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_param_unidad_medida_ins_unidad_medida = EkuParamUnidadMedidaInsUnidadMedida::getOxId($id);

include 'eku_param_unidad_medida_ins_unidad_medida_uno.php';
?>

