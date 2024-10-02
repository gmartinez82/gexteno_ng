<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(AfipCitiComprasAlicuotas::SES_CRITERIOS);

if($c == 'afip_citi_compras_alicuotas.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('afip_citi_compras_alicuotas');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('afip_citi_compras_alicuotas');	
	$criterio->delCriterio($c);
}
?>

