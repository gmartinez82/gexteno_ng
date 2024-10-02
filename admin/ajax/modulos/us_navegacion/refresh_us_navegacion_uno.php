<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_navegacion = UsNavegacion::getOxId($id);

$estado = ($us_navegacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_navegacion_uno.php';
?>

