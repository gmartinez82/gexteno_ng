<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cntb_diario_asiento_vta_recibo = CntbDiarioAsientoVtaRecibo::getOxId($id);

$estado = ($cntb_diario_asiento_vta_recibo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_diario_asiento_vta_recibo_uno.php';
?>

