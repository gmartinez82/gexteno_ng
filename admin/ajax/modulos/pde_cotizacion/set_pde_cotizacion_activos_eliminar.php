<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdeCotizacion::SES_CRITERIOS);

if($c == 'pde_cotizacion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pde_cotizacion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pde_cotizacion');	
	$criterio->delCriterio($c);
}
?>

