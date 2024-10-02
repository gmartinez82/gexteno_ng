<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gen_widget_sector = GenWidgetSector::getOxId($id);

$estado = ($gen_widget_sector->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gen_widget_sector_uno.php';
?>

