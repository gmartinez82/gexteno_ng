<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_novedad_motivo = GralNovedadMotivo::getOxId($id);

$estado = ($gral_novedad_motivo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_novedad_motivo_uno.php';
?>

