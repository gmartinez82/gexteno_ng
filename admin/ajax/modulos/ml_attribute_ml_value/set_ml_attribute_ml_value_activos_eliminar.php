<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(MlAttributeMlValue::SES_CRITERIOS);

if($c == 'ml_attribute_ml_value.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ml_attribute_ml_value');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ml_attribute_ml_value');	
	$criterio->delCriterio($c);
}
?>

