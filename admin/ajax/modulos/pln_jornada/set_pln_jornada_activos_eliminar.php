<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PlnJornada::SES_CRITERIOS);

if($c == 'pln_jornada.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('pln_jornada');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('pln_jornada');	
	$criterio->delCriterio($c);
}
?>

