<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(MlAttribute::SES_CRITERIOS);

if($c == 'ml_attribute.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ml_attribute');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ml_attribute');	
	$criterio->delCriterio($c);
}
?>

