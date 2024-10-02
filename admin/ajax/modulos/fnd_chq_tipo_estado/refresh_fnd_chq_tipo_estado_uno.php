<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$fnd_chq_tipo_estado = FndChqTipoEstado::getOxId($id);

$estado = ($fnd_chq_tipo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'fnd_chq_tipo_estado_uno.php';
?>

