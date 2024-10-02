<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaNotaDebitoVtaRecibo::SES_CRITERIOS);

if($c == 'vta_nota_debito_vta_recibo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_nota_debito_vta_recibo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_nota_debito_vta_recibo');	
	$criterio->delCriterio($c);
}
?>

