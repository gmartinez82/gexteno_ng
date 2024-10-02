<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GeoZona::SES_CRITERIOS);

if($c == 'geo_zona.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('geo_zona');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('geo_zona');	
	$criterio->delCriterio($c);
}
?>

