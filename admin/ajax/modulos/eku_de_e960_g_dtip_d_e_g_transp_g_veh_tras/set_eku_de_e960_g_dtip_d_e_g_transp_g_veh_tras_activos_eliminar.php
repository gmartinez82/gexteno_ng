<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeE960GDtipDEGTranspGVehTras::SES_CRITERIOS);

if($c == 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras');	
	$criterio->delCriterio($c);
}
?>

