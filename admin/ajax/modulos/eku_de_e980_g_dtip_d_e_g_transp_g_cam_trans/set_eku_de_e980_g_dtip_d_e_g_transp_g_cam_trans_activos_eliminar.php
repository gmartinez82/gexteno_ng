<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeE980GDtipDEGTranspGCamTrans::SES_CRITERIOS);

if($c == 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans');	
	$criterio->delCriterio($c);
}
?>

