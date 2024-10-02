<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(InsInsumoVehModelo::SES_CRITERIOS);

if($c == 'ins_insumo_veh_modelo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('ins_insumo_veh_modelo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('ins_insumo_veh_modelo');	
	$criterio->delCriterio($c);
}
?>

