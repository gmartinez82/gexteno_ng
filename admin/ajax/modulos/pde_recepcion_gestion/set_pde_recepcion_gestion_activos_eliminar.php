<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);

if($c == 'pde_recepcion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_recepcion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_recepcion');	
	$criterio->delCriterio($c);
}
?>

