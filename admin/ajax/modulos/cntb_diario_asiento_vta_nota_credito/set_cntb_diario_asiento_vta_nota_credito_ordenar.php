<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(CntbDiarioAsientoVtaNotaCredito::SES_CRITERIOS);
$criterio->addTabla('cntb_diario_asiento_vta_nota_credito');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

