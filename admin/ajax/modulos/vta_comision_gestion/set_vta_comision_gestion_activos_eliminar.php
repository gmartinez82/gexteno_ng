<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaComision::SES_CRITERIOS);

if($c == 'vta_comision.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_comision');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_comision');	
	$criterio->delCriterio($c);
}
?>

