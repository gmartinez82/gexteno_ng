<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeD130GDatGralOpeGEmisGActEco::SES_CRITERIOS);

if($c == 'eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco');	
	$criterio->delCriterio($c);
}
?>

