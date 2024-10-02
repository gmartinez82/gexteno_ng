<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);

if($c == 'vta_recibo_item.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_recibo_item');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_recibo_item');	
	$criterio->delCriterio($c);
}
?>

