<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$veh_coche = VehCoche::getOxId($id);

$estado = ($veh_coche->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'veh_coche_uno.php';
?>

