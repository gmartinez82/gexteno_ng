<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$veh_modelo = VehModelo::getOxId($id);

$estado = ($veh_modelo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'veh_modelo_uno.php';
?>

