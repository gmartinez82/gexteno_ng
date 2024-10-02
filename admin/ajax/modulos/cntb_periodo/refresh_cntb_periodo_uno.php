<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cntb_periodo = CntbPeriodo::getOxId($id);

$estado = ($cntb_periodo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_periodo_uno.php';
?>

