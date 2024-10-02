<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(OsPrioridad::SES_CRITERIOS);

if($c == 'os_prioridad.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('os_prioridad');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('os_prioridad');	
	$criterio->delCriterio($c);
}
?>

