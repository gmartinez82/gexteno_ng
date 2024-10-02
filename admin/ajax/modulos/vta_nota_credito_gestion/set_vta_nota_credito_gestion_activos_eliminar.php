<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);

if($c == 'vta_nota_credito.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_nota_credito');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_nota_credito');	
	$criterio->delCriterio($c);
}
?>

