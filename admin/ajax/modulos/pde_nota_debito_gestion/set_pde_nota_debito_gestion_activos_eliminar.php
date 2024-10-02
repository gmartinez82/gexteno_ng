<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);

if($c == 'pde_nota_debito.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_nota_debito');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_nota_debito');	
	$criterio->delCriterio($c);
}
?>

