<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);

if($c == 'vta_ajuste_haber.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_ajuste_haber');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_ajuste_haber');	
	$criterio->delCriterio($c);
}
?>

