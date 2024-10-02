<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(WsFeParamTipoIva::SES_CRITERIOS);

if($c == 'ws_fe_param_tipo_iva.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ws_fe_param_tipo_iva');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ws_fe_param_tipo_iva');	
	$criterio->delCriterio($c);
}
?>

