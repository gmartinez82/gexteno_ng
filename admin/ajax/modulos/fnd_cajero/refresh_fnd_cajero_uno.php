<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$fnd_cajero = FndCajero::getOxId($id);

$estado = ($fnd_cajero->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'fnd_cajero_uno.php';
?>

