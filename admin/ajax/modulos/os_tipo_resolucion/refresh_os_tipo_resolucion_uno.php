<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$os_tipo_resolucion = OsTipoResolucion::getOxId($id);

$estado = ($os_tipo_resolucion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'os_tipo_resolucion_uno.php';
?>

