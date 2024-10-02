<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(VtaHojaRuta::SES_CRITERIOS);

if($c == 'vta_hoja_ruta.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('vta_hoja_ruta');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('vta_hoja_ruta');	
	$criterio->delCriterio($c);
}
?>

