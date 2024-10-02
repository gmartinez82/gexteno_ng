<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cntb_cuenta_plan = CntbCuentaPlan::getOxId($id);

$estado = ($cntb_cuenta_plan->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_cuenta_plan_uno.php';
?>

