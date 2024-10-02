<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_importacion_tipo_estado = PrvImportacionTipoEstado::getOxId($id);

$estado = ($prv_importacion_tipo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_importacion_tipo_estado_uno.php';
?>

