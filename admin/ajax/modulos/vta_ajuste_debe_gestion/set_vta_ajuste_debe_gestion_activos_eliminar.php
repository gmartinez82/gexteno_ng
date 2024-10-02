<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);

if($c == 'vta_ajuste_debe.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_ajuste_debe');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_ajuste_debe');	
	$criterio->delCriterio($c);
}
?>

