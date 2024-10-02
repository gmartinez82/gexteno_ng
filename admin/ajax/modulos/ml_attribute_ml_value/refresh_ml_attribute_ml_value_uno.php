<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ml_attribute_ml_value = MlAttributeMlValue::getOxId($id);

$estado = ($ml_attribute_ml_value->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ml_attribute_ml_value_uno.php';
?>

