<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrdLineaProduccion::SES_CRITERIOS);

if($c == 'prd_linea_produccion.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prd_linea_produccion');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prd_linea_produccion');	
	$criterio->delCriterio($c);
}
?>

