<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_centro_costo_us_usuario = GralCentroCostoUsUsuario::getOxId($id);

$estado = ($gral_centro_costo_us_usuario->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_centro_costo_us_usuario_uno.php';
?>

