<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_presupuesto_veh_coche = VtaPresupuestoVehCoche::getOxId($id);

$estado = ($vta_presupuesto_veh_coche->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_presupuesto_veh_coche_uno.php';
?>

