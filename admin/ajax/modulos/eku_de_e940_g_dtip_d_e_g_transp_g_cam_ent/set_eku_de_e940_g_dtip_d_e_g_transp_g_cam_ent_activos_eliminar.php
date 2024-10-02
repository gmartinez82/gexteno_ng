<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeE940GDtipDEGTranspGCamEnt::SES_CRITERIOS);

if($c == 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent');	
	$criterio->delCriterio($c);
}
?>

