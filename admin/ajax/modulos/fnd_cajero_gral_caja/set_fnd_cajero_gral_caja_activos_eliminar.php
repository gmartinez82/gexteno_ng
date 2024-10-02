<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(FndCajeroGralCaja::SES_CRITERIOS);

if($c == 'fnd_cajero_gral_caja.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('fnd_cajero_gral_caja');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('fnd_cajero_gral_caja');	
	$criterio->delCriterio($c);
}
?>

