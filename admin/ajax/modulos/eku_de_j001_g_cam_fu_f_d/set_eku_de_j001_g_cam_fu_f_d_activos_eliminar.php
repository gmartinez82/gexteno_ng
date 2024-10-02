<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeJ001GCamFuFD::SES_CRITERIOS);

if($c == 'eku_de_j001_g_cam_fu_f_d.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_j001_g_cam_fu_f_d');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_j001_g_cam_fu_f_d');	
	$criterio->delCriterio($c);
}
?>

