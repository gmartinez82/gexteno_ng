<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ml_value_ins_marca = MlValueInsMarca::getOxId($id);

$estado = ($ml_value_ins_marca->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ml_value_ins_marca_uno.php';
?>

