<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(MlCategoryMlShippingMode::SES_CRITERIOS);

if($c == 'ml_category_ml_shipping_mode.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ml_category_ml_shipping_mode');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ml_category_ml_shipping_mode');	
	$criterio->delCriterio($c);
}
?>

