<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$fnd_caja_tipo_ingreso = FndCajaTipoIngreso::getOxId($id);

$estado = ($fnd_caja_tipo_ingreso->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'fnd_caja_tipo_ingreso_uno.php';
?>

