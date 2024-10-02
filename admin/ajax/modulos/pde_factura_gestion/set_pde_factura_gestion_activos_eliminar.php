<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeFactura::SES_CRITERIOS);

if($c == 'pde_factura.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_factura');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_factura');	
	$criterio->delCriterio($c);
}
?>

