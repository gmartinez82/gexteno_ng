<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE820GCamEspGGrupAdi::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.id', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_id'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_id_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.descripcion', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_descripcion'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_descripcion_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_de_id_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e821_dciclo', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e821_dciclo'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e821_dciclo_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e822_dfecinic', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e822_dfecinic'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e822_dfecinic_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e823_dfecfinc', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e823_dfecfinc'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e823_dfecfinc_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e824_dvencpag', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e824_dvencpag'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e824_dvencpag_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e825_dcontrato', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e825_dcontrato'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e825_dcontrato_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e826_dsalant', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e826_dsalant'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_eku_e826_dsalant_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.codigo', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_codigo'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_codigo_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.observacion', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_observacion'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_observacion_comparador'));
	$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.estado', Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_estado'), Gral::getVars(1, 'buscador_eku_de_e820_g_cam_esp_g_grup_adi_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e820_g_cam_esp_g_grup_adi');
		$criterio->setCriterios();		
}
?>

