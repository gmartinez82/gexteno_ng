<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuParamCondicionAnticipo::SES_CRITERIOS);

if($c == 'eku_param_condicion_anticipo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_param_condicion_anticipo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_param_condicion_anticipo');	
	$criterio->delCriterio($c);
}
?>

