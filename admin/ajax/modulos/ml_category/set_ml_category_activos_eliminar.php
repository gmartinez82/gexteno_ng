<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(MlCategory::SES_CRITERIOS);

if($c == 'ml_category.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ml_category');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ml_category');	
	$criterio->delCriterio($c);
}
?>

