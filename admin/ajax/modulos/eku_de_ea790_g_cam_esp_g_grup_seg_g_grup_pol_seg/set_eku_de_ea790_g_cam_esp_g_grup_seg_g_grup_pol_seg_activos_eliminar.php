<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::SES_CRITERIOS);

if($c == 'eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.buscador_top'){
	$criterio->setCriterios(false);
	$criterio->addTabla('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg');
	$criterio->setCriterios();		
}else{
	$criterio->addTabla('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg');	
	$criterio->delCriterio($c);
}
?>

