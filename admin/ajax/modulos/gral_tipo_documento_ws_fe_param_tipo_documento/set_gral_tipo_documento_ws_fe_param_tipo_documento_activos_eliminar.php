<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralTipoDocumentoWsFeParamTipoDocumento::SES_CRITERIOS);

if($c == 'gral_tipo_documento_ws_fe_param_tipo_documento.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_tipo_documento_ws_fe_param_tipo_documento');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_tipo_documento_ws_fe_param_tipo_documento');	
	$criterio->delCriterio($c);
}
?>

