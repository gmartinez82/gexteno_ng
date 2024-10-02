<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(FndCajaMovimientoEstado::SES_CRITERIOS);

if($c == 'fnd_caja_movimiento_estado.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('fnd_caja_movimiento_estado');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('fnd_caja_movimiento_estado');	
	$criterio->delCriterio($c);
}
?>

