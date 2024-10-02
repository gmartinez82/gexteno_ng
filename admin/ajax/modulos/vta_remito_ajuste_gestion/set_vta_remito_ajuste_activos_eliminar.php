<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);

if($c == 'vta_remito_ajuste.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_remito_ajuste');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_remito_ajuste');	
	$criterio->delCriterio($c);
}
?>

