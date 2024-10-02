<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeB001GOpeDE::SES_CRITERIOS);

if($c == 'eku_de_b001_g_ope_d_e.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_b001_g_ope_d_e');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_b001_g_ope_d_e');	
	$criterio->delCriterio($c);
}
?>

