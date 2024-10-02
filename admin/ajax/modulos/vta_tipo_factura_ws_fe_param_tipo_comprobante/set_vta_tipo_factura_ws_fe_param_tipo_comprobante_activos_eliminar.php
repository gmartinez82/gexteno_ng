<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaTipoFacturaWsFeParamTipoComprobante::SES_CRITERIOS);

if($c == 'vta_tipo_factura_ws_fe_param_tipo_comprobante.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_tipo_factura_ws_fe_param_tipo_comprobante');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_tipo_factura_ws_fe_param_tipo_comprobante');	
	$criterio->delCriterio($c);
}
?>

