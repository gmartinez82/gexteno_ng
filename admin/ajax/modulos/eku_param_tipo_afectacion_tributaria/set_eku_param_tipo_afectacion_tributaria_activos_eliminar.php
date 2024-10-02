<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuParamTipoAfectacionTributaria::SES_CRITERIOS);

if($c == 'eku_param_tipo_afectacion_tributaria.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_param_tipo_afectacion_tributaria');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_param_tipo_afectacion_tributaria');	
	$criterio->delCriterio($c);
}
?>

