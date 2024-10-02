<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralFpCuota::SES_CRITERIOS);

if($c == 'gral_fp_cuota.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_fp_cuota');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_fp_cuota');	
	$criterio->delCriterio($c);
}
?>

