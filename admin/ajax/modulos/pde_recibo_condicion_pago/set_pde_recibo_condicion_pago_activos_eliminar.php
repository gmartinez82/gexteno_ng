<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeReciboCondicionPago::SES_CRITERIOS);

if($c == 'pde_recibo_condicion_pago.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_recibo_condicion_pago');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_recibo_condicion_pago');	
	$criterio->delCriterio($c);
}
?>

