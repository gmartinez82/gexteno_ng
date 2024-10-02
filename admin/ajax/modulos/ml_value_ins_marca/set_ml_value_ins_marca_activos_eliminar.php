<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(MlValueInsMarca::SES_CRITERIOS);

if($c == 'ml_value_ins_marca.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ml_value_ins_marca');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ml_value_ins_marca');	
	$criterio->delCriterio($c);
}
?>

