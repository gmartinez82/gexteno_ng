<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsInsumo::SES_CRITERIOS);

if($c == 'ins_insumo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_insumo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_insumo');	
	$criterio->delCriterio($c);
}
?>

