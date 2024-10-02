<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeH001GCamDEAsoc::SES_CRITERIOS);

if($c == 'eku_de_h001_g_cam_d_e_asoc.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_h001_g_cam_d_e_asoc');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_h001_g_cam_d_e_asoc');	
	$criterio->delCriterio($c);
}
?>

