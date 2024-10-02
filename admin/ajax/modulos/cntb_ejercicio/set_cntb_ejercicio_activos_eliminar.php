<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(CntbEjercicio::SES_CRITERIOS);

if($c == 'cntb_ejercicio.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('cntb_ejercicio');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('cntb_ejercicio');	
	$criterio->delCriterio($c);
}
?>

