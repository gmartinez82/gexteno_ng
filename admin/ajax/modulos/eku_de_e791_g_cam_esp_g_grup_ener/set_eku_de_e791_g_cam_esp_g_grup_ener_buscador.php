<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE791GCamEspGGrupEner::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.id', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_id'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_id_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.descripcion', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_descripcion'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_descripcion_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_de_id_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e792_dnromed', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e792_dnromed'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e792_dnromed_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e793_dactiv', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e793_dactiv'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e793_dactiv_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e794_dcateg', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e794_dcateg'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e794_dcateg_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e795_dlecant', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e795_dlecant'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e795_dlecant_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e796_dlecact', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e796_dlecact'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e796_dlecact_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e797_dconkwh', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e797_dconkwh'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_eku_e797_dconkwh_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.codigo', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_codigo'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_codigo_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.observacion', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_observacion'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_observacion_comparador'));
	$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.estado', Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_estado'), Gral::getVars(1, 'buscador_eku_de_e791_g_cam_esp_g_grup_ener_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e791_g_cam_esp_g_grup_ener');
		$criterio->setCriterios();		
}
?>

