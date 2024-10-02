<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_clave = UsClave::getOxId($id);

$estado = ($us_clave->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_clave_uno.php';
?>

