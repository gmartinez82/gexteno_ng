<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_venta_ml_info = InsVentaMlInfo::getOxId($id);

$estado = ($ins_venta_ml_info->getEstado()) ? 'habilitado' : 'deshabilitado';
$publicado = ($ins_venta_ml_info->getPublicado()) ? 'publicado' : 'despublicado';
include 'ins_venta_ml_info_uno.php';
?>

