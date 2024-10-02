<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaNotaCreditoVtaTributo::SES_CRITERIOS);

if($c == 'vta_nota_credito_vta_tributo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_nota_credito_vta_tributo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_nota_credito_vta_tributo');	
	$criterio->delCriterio($c);
}
?>

