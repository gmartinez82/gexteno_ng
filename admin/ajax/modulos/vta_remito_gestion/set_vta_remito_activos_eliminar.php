<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaRemito::SES_CRITERIOS);

if($c == 'vta_remito.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_remito');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_remito');	
	$criterio->delCriterio($c);
}
?>

