<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaFactura::SES_CRITERIOS);

if($c == 'vta_factura.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_factura');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_factura');	
	$criterio->delCriterio($c);
}
?>

