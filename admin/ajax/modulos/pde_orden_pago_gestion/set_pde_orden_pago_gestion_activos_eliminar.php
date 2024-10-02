<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);

if($c == 'pde_orden_pago.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_orden_pago');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_orden_pago');	
	$criterio->delCriterio($c);
}
?>

