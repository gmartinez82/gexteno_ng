<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ctrl_equipo_ctrl_sector = CtrlEquipoCtrlSector::getOxId($id);

include 'ctrl_equipo_ctrl_sector_uno.php';
?>

