<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_presupuesto_cancelacion = VtaPresupuestoCancelacion::getOxId($id);

$estado = ($vta_presupuesto_cancelacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_presupuesto_cancelacion_uno.php';
?>

