<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GeoPais::SES_CRITERIOS);

if($c == 'geo_pais.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('geo_pais');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('geo_pais');	
	$criterio->delCriterio($c);
}
?>

