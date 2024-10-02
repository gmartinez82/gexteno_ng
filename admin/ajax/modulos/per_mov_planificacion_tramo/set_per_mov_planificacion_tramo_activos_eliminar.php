<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PerMovPlanificacionTramo::SES_CRITERIOS);

if($c == 'per_mov_planificacion_tramo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('per_mov_planificacion_tramo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('per_mov_planificacion_tramo');	
	$criterio->delCriterio($c);
}
?>

