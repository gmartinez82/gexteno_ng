<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralSucursalValoracionAgrupacion::SES_CRITERIOS);

if($c == 'gral_sucursal_valoracion_agrupacion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_sucursal_valoracion_agrupacion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_sucursal_valoracion_agrupacion');	
	$criterio->delCriterio($c);
}
?>

