<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_tipo_personeria = GralTipoPersoneria::getOxId($id);

$estado = ($gral_tipo_personeria->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_tipo_personeria_uno.php';
?>

