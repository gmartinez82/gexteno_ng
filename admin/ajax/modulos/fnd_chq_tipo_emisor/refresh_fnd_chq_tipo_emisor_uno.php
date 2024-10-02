<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($id);

$estado = ($fnd_chq_tipo_emisor->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'fnd_chq_tipo_emisor_uno.php';
?>

