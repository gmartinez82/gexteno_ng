<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$fnd_caja_tipo_egreso = FndCajaTipoEgreso::getOxId($id);

$estado = ($fnd_caja_tipo_egreso->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'fnd_caja_tipo_egreso_uno.php';
?>

