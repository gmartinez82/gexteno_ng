<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$veh_marca = VehMarca::getOxId($id);

$estado = ($veh_marca->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'veh_marca_uno.php';
?>

