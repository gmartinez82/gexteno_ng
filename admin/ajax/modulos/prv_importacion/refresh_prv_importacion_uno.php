<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_importacion = PrvImportacion::getOxId($id);

$estado = ($prv_importacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_importacion_uno.php';
?>

