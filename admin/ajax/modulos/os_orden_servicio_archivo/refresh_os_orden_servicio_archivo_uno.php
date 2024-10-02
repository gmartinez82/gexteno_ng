<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$os_orden_servicio_archivo = OsOrdenServicioArchivo::getOxId($id);

$estado = ($os_orden_servicio_archivo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'os_orden_servicio_archivo_uno.php';
?>

