<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PerPersona::SES_CRITERIOS);

if($c == 'per_persona.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('per_persona');
	$criterio->setCriteriosBuscador();
}else{
	$criterio->addTabla('per_persona');	
	$criterio->delCriterio($c);
}
?>

