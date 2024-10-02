<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeNotaCreditoConcepto::SES_CRITERIOS);

if($c == 'pde_nota_credito_concepto.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_nota_credito_concepto');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_nota_credito_concepto');	
	$criterio->delCriterio($c);
}
?>

