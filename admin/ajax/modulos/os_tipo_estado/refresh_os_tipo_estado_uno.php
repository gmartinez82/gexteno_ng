<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$os_tipo_estado = OsTipoEstado::getOxId($id);

$estado = ($os_tipo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'os_tipo_estado_uno.php';
?>

