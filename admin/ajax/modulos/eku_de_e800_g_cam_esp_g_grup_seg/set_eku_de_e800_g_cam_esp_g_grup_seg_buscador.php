<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE800GCamEspGGrupSeg::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e800_g_cam_esp_g_grup_seg.id', Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_id'), Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_id_comparador'));
	$criterio->add('eku_de_e800_g_cam_esp_g_grup_seg.descripcion', Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_descripcion'), Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_descripcion_comparador'));
	$criterio->add('eku_de_e800_g_cam_esp_g_grup_seg.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_eku_de_id_comparador'));
	$criterio->add('eku_de_e800_g_cam_esp_g_grup_seg.eku_e801_dcodempseg', Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_eku_e801_dcodempseg'), Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_eku_e801_dcodempseg_comparador'));
	$criterio->add('eku_de_e800_g_cam_esp_g_grup_seg.codigo', Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_codigo'), Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_codigo_comparador'));
	$criterio->add('eku_de_e800_g_cam_esp_g_grup_seg.observacion', Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_observacion'), Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_observacion_comparador'));
	$criterio->add('eku_de_e800_g_cam_esp_g_grup_seg.estado', Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_estado'), Gral::getVars(1, 'buscador_eku_de_e800_g_cam_esp_g_grup_seg_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e800_g_cam_esp_g_grup_seg');
		$criterio->setCriterios();		
}
?>

