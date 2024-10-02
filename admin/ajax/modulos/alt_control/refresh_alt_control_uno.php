<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$alt_control = AltControl::getOxId($id);

$estado = ($alt_control->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'alt_control_uno.php';
?>

