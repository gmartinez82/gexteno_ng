<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaReciboConcepto::SES_CRITERIOS);

if($c == 'vta_recibo_concepto.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_recibo_concepto');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_recibo_concepto');	
	$criterio->delCriterio($c);
}
?>

