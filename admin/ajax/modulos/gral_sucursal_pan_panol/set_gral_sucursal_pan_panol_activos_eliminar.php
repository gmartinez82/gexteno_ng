<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralSucursalPanPanol::SES_CRITERIOS);

if($c == 'gral_sucursal_pan_panol.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_sucursal_pan_panol');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_sucursal_pan_panol');	
	$criterio->delCriterio($c);
}
?>

