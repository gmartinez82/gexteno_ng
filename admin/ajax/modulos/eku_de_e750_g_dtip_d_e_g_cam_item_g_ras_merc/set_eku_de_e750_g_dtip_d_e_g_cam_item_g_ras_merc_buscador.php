<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE750GDtipDEGCamItemGRasMerc::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.id', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.descripcion', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_descripcion'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_descripcion_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_de_id_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_de_e700_g_dtip_d_e_g_cam_item_id'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_de_e700_g_dtip_d_e_g_cam_item_id_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e751_dnumlote', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e751_dnumlote'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e751_dnumlote_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e752_dvencmerc', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e752_dvencmerc'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e752_dvencmerc_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e753_dnserie', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e753_dnserie'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e753_dnserie_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e754_dnumpedi', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e754_dnumpedi'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e754_dnumpedi_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e755_dnumsegui', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e755_dnumsegui'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e755_dnumsegui_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e756_dnomimp', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e756_dnomimp'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e756_dnomimp_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e757_ddirimp', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e757_ddirimp'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e757_ddirimp_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e758_dnumfir', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e758_dnumfir'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e758_dnumfir_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e759_dnumreg', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e759_dnumreg'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e759_dnumreg_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e760_dnumregentcom', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e760_dnumregentcom'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_eku_e760_dnumregentcom_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.codigo', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_codigo'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_codigo_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.observacion', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_observacion'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_observacion_comparador'));
	$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.estado', Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_estado'), Gral::getVars(1, 'buscador_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc');
		$criterio->setCriterios();		
}
?>

