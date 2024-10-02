<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$not_tipo_archivo = NotTipoArchivo::getOxId($id);

$estado = ($not_tipo_archivo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'not_tipo_archivo_uno.php';
?>

