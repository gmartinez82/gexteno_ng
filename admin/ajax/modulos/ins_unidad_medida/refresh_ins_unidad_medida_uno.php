<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_unidad_medida = InsUnidadMedida::getOxId($id);

$estado = ($ins_unidad_medida->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_unidad_medida_uno.php';
?>

