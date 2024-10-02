<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_presupuesto_tipo_emision = VtaPresupuestoTipoEmision::getOxId($id);

$estado = ($vta_presupuesto_tipo_emision->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_presupuesto_tipo_emision_uno.php';
?>

