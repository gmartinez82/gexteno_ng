<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(WsFeOpeSolicitud::SES_CRITERIOS);

if($c == 'ws_fe_ope_solicitud.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ws_fe_ope_solicitud');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ws_fe_ope_solicitud');	
	$criterio->delCriterio($c);
}
?>

