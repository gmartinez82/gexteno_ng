<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($id);

$estado = ($vta_presupuesto_conflicto->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_presupuesto_conflicto_uno.php';
?>

