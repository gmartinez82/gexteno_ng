<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_actividad = GralActividad::getOxId($id);

$estado = ($gral_actividad->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_actividad_uno.php';
?>

