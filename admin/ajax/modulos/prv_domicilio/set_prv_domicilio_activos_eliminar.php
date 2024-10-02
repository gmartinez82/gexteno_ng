<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrvDomicilio::SES_CRITERIOS);

if($c == 'prv_domicilio.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prv_domicilio');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prv_domicilio');	
	$criterio->delCriterio($c);
}
?>

