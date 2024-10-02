<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(FndCajaTipoMovimiento::SES_CRITERIOS);

if($c == 'fnd_caja_tipo_movimiento.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('fnd_caja_tipo_movimiento');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('fnd_caja_tipo_movimiento');	
	$criterio->delCriterio($c);
}
?>

