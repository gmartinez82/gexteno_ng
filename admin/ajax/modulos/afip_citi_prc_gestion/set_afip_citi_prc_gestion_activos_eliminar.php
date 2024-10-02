<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(AfipCitiPrc::SES_CRITERIOS);

if($c == 'afip_citi_prc.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('afip_citi_prc');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('afip_citi_prc');	
	$criterio->delCriterio($c);
}
?>

