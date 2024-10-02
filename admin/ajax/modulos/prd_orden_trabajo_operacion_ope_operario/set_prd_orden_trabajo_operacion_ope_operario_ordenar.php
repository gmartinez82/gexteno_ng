<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PrdOrdenTrabajoOperacionOpeOperario::SES_CRITERIOS);
$criterio->addTabla('prd_orden_trabajo_operacion_ope_operario');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

