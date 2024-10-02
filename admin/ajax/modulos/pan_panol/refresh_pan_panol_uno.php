<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pan_panol = PanPanol::getOxId($id);

$estado = ($pan_panol->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pan_panol_uno.php';
?>

