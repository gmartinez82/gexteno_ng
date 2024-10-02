<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeG001GCamGen::SES_CRITERIOS);

if($c == 'eku_de_g001_g_cam_gen.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_g001_g_cam_gen');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_g001_g_cam_gen');	
	$criterio->delCriterio($c);
}
?>

