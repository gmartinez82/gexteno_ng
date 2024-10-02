<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralCentroCostoVtaVendedor::SES_CRITERIOS);

if($c == 'gral_centro_costo_vta_vendedor.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_centro_costo_vta_vendedor');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_centro_costo_vta_vendedor');	
	$criterio->delCriterio($c);
}
?>

