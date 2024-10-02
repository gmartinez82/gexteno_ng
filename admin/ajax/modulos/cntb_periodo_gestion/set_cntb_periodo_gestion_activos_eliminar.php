<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CntbPeriodo::SES_CRITERIOS);

if($c == 'cntb_periodo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cntb_periodo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cntb_periodo');	
	$criterio->delCriterio($c);
}
?>

