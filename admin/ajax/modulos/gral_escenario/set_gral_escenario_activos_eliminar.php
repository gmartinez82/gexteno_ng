<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralEscenario::SES_CRITERIOS);

if($c == 'gral_escenario.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_escenario');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_escenario');	
	$criterio->delCriterio($c);
}
?>

