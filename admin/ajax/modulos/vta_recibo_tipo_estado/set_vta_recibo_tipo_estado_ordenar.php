<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaReciboTipoEstado::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_tipo_estado');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

