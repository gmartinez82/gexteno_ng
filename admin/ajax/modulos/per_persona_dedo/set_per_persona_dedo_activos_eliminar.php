<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PerPersonaDedo::SES_CRITERIOS);

if($c == 'per_persona_dedo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('per_persona_dedo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('per_persona_dedo');	
	$criterio->delCriterio($c);
}
?>

