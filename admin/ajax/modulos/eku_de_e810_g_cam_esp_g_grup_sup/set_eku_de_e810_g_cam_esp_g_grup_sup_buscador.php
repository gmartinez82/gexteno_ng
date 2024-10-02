<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE810GCamEspGGrupSup::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.id', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_id'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_id_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.descripcion', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_descripcion'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_descripcion_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_de_id_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e811_dnomcaj', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e811_dnomcaj'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e811_dnomcaj_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e812_defectivo', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e812_defectivo'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e812_defectivo_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e813_dvuelto', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e813_dvuelto'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e813_dvuelto_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e814_ddonac', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e814_ddonac'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e814_ddonac_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e815_ddesdonac', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e815_ddesdonac'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_eku_e815_ddesdonac_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.codigo', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_codigo'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_codigo_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.observacion', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_observacion'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_observacion_comparador'));
	$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.estado', Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_estado'), Gral::getVars(1, 'buscador_eku_de_e810_g_cam_esp_g_grup_sup_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e810_g_cam_esp_g_grup_sup');
		$criterio->setCriterios();		
}
?>

