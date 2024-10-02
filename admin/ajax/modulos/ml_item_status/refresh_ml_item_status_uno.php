<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ml_item_status = MlItemStatus::getOxId($id);

$estado = ($ml_item_status->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ml_item_status_uno.php';
?>

