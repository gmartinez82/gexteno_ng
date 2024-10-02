<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(FndCaja::SES_CRITERIOS);

if($c == 'fnd_caja.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('fnd_caja');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('fnd_caja');	
	$criterio->delCriterio($c);
}
?>

