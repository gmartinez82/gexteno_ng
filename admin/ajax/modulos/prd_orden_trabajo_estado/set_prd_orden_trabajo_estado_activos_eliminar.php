<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrdOrdenTrabajoEstado::SES_CRITERIOS);

if($c == 'prd_orden_trabajo_estado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prd_orden_trabajo_estado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prd_orden_trabajo_estado');	
	$criterio->delCriterio($c);
}
?>

