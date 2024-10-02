<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_caja_tipo = GralCajaTipo::getOxId($id);

$estado = ($gral_caja_tipo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_caja_tipo_uno.php';
?>

