<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);

if($c == 'vta_nota_debito.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_nota_debito');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_nota_debito');	
	$criterio->delCriterio($c);
}
?>

