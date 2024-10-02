<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_login = UsLogin::getOxId($id);

$estado = ($us_login->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_login_uno.php';
?>

