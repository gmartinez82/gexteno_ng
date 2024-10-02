<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cntb_diario_asiento_pde_recibo = CntbDiarioAsientoPdeRecibo::getOxId($id);

$estado = ($cntb_diario_asiento_pde_recibo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_diario_asiento_pde_recibo_uno.php';
?>

