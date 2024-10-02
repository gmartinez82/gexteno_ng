<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaComisionista::SES_CRITERIOS);

if($c == 'vta_comisionista.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_comisionista');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_comisionista');	
	$criterio->delCriterio($c);
}
?>

