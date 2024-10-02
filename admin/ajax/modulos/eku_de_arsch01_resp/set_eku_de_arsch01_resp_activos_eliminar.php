<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeArsch01Resp::SES_CRITERIOS);

if($c == 'eku_de_arsch01_resp.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_arsch01_resp');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_arsch01_resp');	
	$criterio->delCriterio($c);
}
?>

