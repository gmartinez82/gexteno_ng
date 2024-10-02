<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsVentaMlInfo::SES_CRITERIOS);

if($c == 'ins_venta_ml_info.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_venta_ml_info');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_venta_ml_info');	
	$criterio->delCriterio($c);
}
?>

