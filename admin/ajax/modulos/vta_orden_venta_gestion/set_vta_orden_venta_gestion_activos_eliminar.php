<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);

if($c == 'vta_orden_venta.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_orden_venta');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_orden_venta');	
	$criterio->delCriterio($c);
}
?>

