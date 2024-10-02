<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ctrl_sector = CtrlSector::getOxId($id);

$estado = ($ctrl_sector->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ctrl_sector_uno.php';
?>

