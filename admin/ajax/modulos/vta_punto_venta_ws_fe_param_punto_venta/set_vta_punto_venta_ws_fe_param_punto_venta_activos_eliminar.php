<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaPuntoVentaWsFeParamPuntoVenta::SES_CRITERIOS);

if($c == 'vta_punto_venta_ws_fe_param_punto_venta.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_punto_venta_ws_fe_param_punto_venta');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_punto_venta_ws_fe_param_punto_venta');	
	$criterio->delCriterio($c);
}
?>

