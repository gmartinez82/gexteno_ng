<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralMoneda::SES_CRITERIOS);

if($c == 'gral_moneda.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_moneda');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_moneda');	
	$criterio->delCriterio($c);
}
?>

