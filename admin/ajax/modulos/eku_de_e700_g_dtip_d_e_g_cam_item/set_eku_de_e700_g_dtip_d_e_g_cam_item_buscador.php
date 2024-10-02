<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE700GDtipDEGCamItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.id', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_id'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_id_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.descripcion', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_descripcion'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_descripcion_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_de_id_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e701_dcodint', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e701_dcodint'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e701_dcodint_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e702_dpararanc', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e702_dpararanc'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e702_dpararanc_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e703_dncm', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e703_dncm'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e703_dncm_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e704_ddncpg', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e704_ddncpg'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e704_ddncpg_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e705_ddncpe', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e705_ddncpe'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e705_ddncpe_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e706_dgtin', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e706_dgtin'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e706_dgtin_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e707_dgtinpq', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e707_dgtinpq'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e707_dgtinpq_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e708_ddesproser', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e708_ddesproser'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e708_ddesproser_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e709_cunimed', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e709_cunimed'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e709_cunimed_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e710_ddesunimed', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e710_ddesunimed'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e710_ddesunimed_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e711_dcantproser', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e711_dcantproser'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e711_dcantproser_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e712_cpaisorig', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e712_cpaisorig'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e712_cpaisorig_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e713_ddespaisorig', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e713_ddespaisorig'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e713_ddespaisorig_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e714_dinfitem', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e714_dinfitem'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e714_dinfitem_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e715_crelmerc', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e715_crelmerc'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e715_crelmerc_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e716_ddesrelmerc', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e716_ddesrelmerc'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e716_ddesrelmerc_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e717_dcanquimer', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e717_dcanquimer'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e717_dcanquimer_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e718_dporquimer', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e718_dporquimer'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e718_dporquimer_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e719_dcdcanticipo', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e719_dcdcanticipo'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_eku_e719_dcdcanticipo_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.codigo', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_codigo'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_codigo_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.observacion', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_observacion'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_observacion_comparador'));
	$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.estado', Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_estado'), Gral::getVars(1, 'buscador_eku_de_e700_g_dtip_d_e_g_cam_item_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item', 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_de_e700_g_dtip_d_e_g_cam_item_id', 'eku_de_e700_g_dtip_d_e_g_cam_item.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_de_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a', 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_de_e700_g_dtip_d_e_g_cam_item_id', 'eku_de_e700_g_dtip_d_e_g_cam_item.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc', 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_de_e700_g_dtip_d_e_g_cam_item_id', 'eku_de_e700_g_dtip_d_e_g_cam_item.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo', 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_de_e700_g_dtip_d_e_g_cam_item_id', 'eku_de_e700_g_dtip_d_e_g_cam_item.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e700_g_dtip_d_e_g_cam_item');
		$criterio->setCriterios();		
}
?>

