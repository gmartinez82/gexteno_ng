<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrdParamTipoOperacion::SES_CRITERIOS);

if($c == 'prd_param_tipo_operacion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prd_param_tipo_operacion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prd_param_tipo_operacion');	
	$criterio->delCriterio($c);
}
?>

