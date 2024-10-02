<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PrvEmail::SES_CRITERIOS);

if($c == 'prv_email.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('prv_email');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('prv_email');	
	$criterio->delCriterio($c);
}
?>

