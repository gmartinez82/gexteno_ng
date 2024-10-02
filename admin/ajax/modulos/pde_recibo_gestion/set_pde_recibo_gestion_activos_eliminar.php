<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);

if($c == 'pde_recibo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_recibo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_recibo');	
	$criterio->delCriterio($c);
}
?>

