<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrdOrdenTrabajoOperacionOpeOperario::SES_CRITERIOS);

if($c == 'prd_orden_trabajo_operacion_ope_operario.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prd_orden_trabajo_operacion_ope_operario');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prd_orden_trabajo_operacion_ope_operario');	
	$criterio->delCriterio($c);
}
?>

