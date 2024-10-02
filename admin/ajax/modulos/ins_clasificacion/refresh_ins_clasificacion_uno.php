<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_clasificacion = InsClasificacion::getOxId($id);

$estado = ($ins_clasificacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_clasificacion_uno.php';
?>

