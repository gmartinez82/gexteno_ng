<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(NovNovedad::SES_CRITERIOS);

if($c == 'nov_novedad.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('nov_novedad');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('nov_novedad');	
	$criterio->delCriterio($c);
}
?>

