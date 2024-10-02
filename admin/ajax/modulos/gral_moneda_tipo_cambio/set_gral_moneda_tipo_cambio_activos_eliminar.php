<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralMonedaTipoCambio::SES_CRITERIOS);

if($c == 'gral_moneda_tipo_cambio.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_moneda_tipo_cambio');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_moneda_tipo_cambio');	
	$criterio->delCriterio($c);
}
?>

