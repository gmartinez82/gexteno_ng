<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pan_tipo_panol = PanTipoPanol::getOxId($id);

$estado = ($pan_tipo_panol->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pan_tipo_panol_uno.php';
?>

