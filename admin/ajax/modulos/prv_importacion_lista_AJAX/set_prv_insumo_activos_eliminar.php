<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);

if($c == 'prv_insumo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prv_insumo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prv_insumo');	
	$criterio->delCriterio($c);
}
?>

