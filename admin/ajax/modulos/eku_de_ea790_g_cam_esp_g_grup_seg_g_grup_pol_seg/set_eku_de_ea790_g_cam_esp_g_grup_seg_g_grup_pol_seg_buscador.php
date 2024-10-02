<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.id', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_id'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_id_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.descripcion', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_descripcion'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_descripcion_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_de_id', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_de_id_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea791_dpoliza', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea791_dpoliza'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea791_dpoliza_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea792_dunidvig', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea792_dunidvig'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea792_dunidvig_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea793_dvigencia', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea793_dvigencia'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea793_dvigencia_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea794_dnumpoliza', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea794_dnumpoliza'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea794_dnumpoliza_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea795_dfecinivig', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea795_dfecinivig'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea795_dfecinivig_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea796_dfecfinvig', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea796_dfecfinvig'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea796_dfecfinvig_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea797_dcodint', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea797_dcodint'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_eku_ea797_dcodint_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.codigo', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_codigo'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_codigo_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.observacion', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_observacion'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_observacion_comparador'));
	$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.estado', Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_estado'), Gral::getVars(1, 'buscador_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg');
		$criterio->setCriterios();		
}
?>

