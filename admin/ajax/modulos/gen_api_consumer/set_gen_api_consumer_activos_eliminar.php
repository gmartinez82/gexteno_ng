<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GenApiConsumer::SES_CRITERIOS);

if($c == 'gen_api_consumer.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gen_api_consumer');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gen_api_consumer');	
	$criterio->delCriterio($c);
}
?>

