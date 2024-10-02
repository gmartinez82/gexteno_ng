<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeE700GDtipDEGCamItem::SES_CRITERIOS);

if($c == 'eku_de_e700_g_dtip_d_e_g_cam_item.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_e700_g_dtip_d_e_g_cam_item');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_e700_g_dtip_d_e_g_cam_item');	
	$criterio->delCriterio($c);
}
?>

