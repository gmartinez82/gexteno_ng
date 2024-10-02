<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VehModelo::SES_CRITERIOS);

if($c == 'veh_modelo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('veh_modelo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('veh_modelo');	
	$criterio->delCriterio($c);
}
?>

