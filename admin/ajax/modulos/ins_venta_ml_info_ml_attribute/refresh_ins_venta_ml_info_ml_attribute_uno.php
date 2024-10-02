<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_venta_ml_info_ml_attribute = InsVentaMlInfoMlAttribute::getOxId($id);

$estado = ($ins_venta_ml_info_ml_attribute->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_venta_ml_info_ml_attribute_uno.php';
?>

