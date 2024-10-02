<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuParamCondicionCredito::SES_CRITERIOS);

if($c == 'eku_param_condicion_credito.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_param_condicion_credito');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_param_condicion_credito');	
	$criterio->delCriterio($c);
}
?>

