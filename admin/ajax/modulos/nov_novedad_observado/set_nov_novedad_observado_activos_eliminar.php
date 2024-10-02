<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(NovNovedadObservado::SES_CRITERIOS);

if($c == 'nov_novedad_observado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('nov_novedad_observado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('nov_novedad_observado');	
	$criterio->delCriterio($c);
}
?>

