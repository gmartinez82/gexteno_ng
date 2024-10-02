<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(GralCajaTipo::SES_CRITERIOS);

if($c == 'gral_caja_tipo.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('gral_caja_tipo');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('gral_caja_tipo');	
	$criterio->delCriterio($c);
}
?>

