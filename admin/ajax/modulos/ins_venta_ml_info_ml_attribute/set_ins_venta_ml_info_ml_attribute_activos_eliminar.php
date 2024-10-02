<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsVentaMlInfoMlAttribute::SES_CRITERIOS);

if($c == 'ins_venta_ml_info_ml_attribute.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_venta_ml_info_ml_attribute');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_venta_ml_info_ml_attribute');	
	$criterio->delCriterio($c);
}
?>

