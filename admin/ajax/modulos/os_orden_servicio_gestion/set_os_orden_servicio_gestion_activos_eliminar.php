<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);

if($c == 'os_orden_servicio.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('os_orden_servicio');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('os_orden_servicio');	
	$criterio->delCriterio($c);
}
?>

