<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralBillete::SES_CRITERIOS);

if($c == 'gral_billete.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_billete');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_billete');	
	$criterio->delCriterio($c);
}
?>

