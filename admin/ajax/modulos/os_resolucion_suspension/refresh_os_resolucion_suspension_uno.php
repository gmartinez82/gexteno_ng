<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$os_resolucion_suspension = OsResolucionSuspension::getOxId($id);

$estado = ($os_resolucion_suspension->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'os_resolucion_suspension_uno.php';
?>

