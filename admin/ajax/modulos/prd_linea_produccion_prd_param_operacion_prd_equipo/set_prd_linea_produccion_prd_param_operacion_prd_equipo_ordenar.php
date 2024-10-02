<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PrdLineaProduccionPrdParamOperacionPrdEquipo::SES_CRITERIOS);
$criterio->addTabla('prd_linea_produccion_prd_param_operacion_prd_equipo');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

