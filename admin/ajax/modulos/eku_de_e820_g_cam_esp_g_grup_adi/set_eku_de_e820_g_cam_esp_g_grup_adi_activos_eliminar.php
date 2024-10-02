<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeE820GCamEspGGrupAdi::SES_CRITERIOS);

if($c == 'eku_de_e820_g_cam_esp_g_grup_adi.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_e820_g_cam_esp_g_grup_adi');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_e820_g_cam_esp_g_grup_adi');	
	$criterio->delCriterio($c);
}
?>

