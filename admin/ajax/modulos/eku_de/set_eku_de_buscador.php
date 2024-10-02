<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDe::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de.id', Gral::getVars(1, 'buscador_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_id_comparador'));
	$criterio->add('eku_de.descripcion', Gral::getVars(1, 'buscador_eku_de_descripcion'), Gral::getVars(1, 'buscador_eku_de_descripcion_comparador'));
	$criterio->add('eku_de.eku_de_ope_tipo_estado_id', Gral::getVars(1, 'buscador_eku_de_eku_de_ope_tipo_estado_id'), Gral::getVars(1, 'buscador_eku_de_eku_de_ope_tipo_estado_id_comparador'));
	$criterio->add('eku_de.eku_dverfor', Gral::getVars(1, 'buscador_eku_de_eku_dverfor'), Gral::getVars(1, 'buscador_eku_de_eku_dverfor_comparador'));
	$criterio->add('eku_de.eku_a002_id_cdc', Gral::getVars(1, 'buscador_eku_de_eku_a002_id_cdc'), Gral::getVars(1, 'buscador_eku_de_eku_a002_id_cdc_comparador'));
	$criterio->add('eku_de.eku_a003_ddvid', Gral::getVars(1, 'buscador_eku_de_eku_a003_ddvid'), Gral::getVars(1, 'buscador_eku_de_eku_a003_ddvid_comparador'));
	$criterio->add('eku_de.eku_a004_dfecfirma', Gral::getVars(1, 'buscador_eku_de_eku_a004_dfecfirma'), Gral::getVars(1, 'buscador_eku_de_eku_a004_dfecfirma_comparador'));
	$criterio->add('eku_de.eku_a005_dsisfact', Gral::getVars(1, 'buscador_eku_de_eku_a005_dsisfact'), Gral::getVars(1, 'buscador_eku_de_eku_a005_dsisfact_comparador'));
	$criterio->add('eku_de.eku_de_xml', Gral::getVars(1, 'buscador_eku_de_eku_de_xml'), Gral::getVars(1, 'buscador_eku_de_eku_de_xml_comparador'));
	$criterio->add('eku_de.eku_pp02_id_cdc', Gral::getVars(1, 'buscador_eku_de_eku_pp02_id_cdc'), Gral::getVars(1, 'buscador_eku_de_eku_pp02_id_cdc_comparador'));
	$criterio->add('eku_de.eku_pp03_ddecproc', Gral::getVars(1, 'buscador_eku_de_eku_pp03_ddecproc'), Gral::getVars(1, 'buscador_eku_de_eku_pp03_ddecproc_comparador'));
	$criterio->add('eku_de.eku_pp04_ddigval', Gral::getVars(1, 'buscador_eku_de_eku_pp04_ddigval'), Gral::getVars(1, 'buscador_eku_de_eku_pp04_ddigval_comparador'));
	$criterio->add('eku_de.eku_pp050_destres', Gral::getVars(1, 'buscador_eku_de_eku_pp050_destres'), Gral::getVars(1, 'buscador_eku_de_eku_pp050_destres_comparador'));
	$criterio->add('eku_de.eku_pp051_dprotaut', Gral::getVars(1, 'buscador_eku_de_eku_pp051_dprotaut'), Gral::getVars(1, 'buscador_eku_de_eku_pp051_dprotaut_comparador'));
	$criterio->add('eku_de.codigo', Gral::getVars(1, 'buscador_eku_de_codigo'), Gral::getVars(1, 'buscador_eku_de_codigo_comparador'));
	$criterio->add('eku_de.observacion', Gral::getVars(1, 'buscador_eku_de_observacion'), Gral::getVars(1, 'buscador_eku_de_observacion_comparador'));
	$criterio->add('eku_de.estado', Gral::getVars(1, 'buscador_eku_de_estado'), Gral::getVars(1, 'buscador_eku_de_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_de_b001_g_ope_d_e', 'eku_de_b001_g_ope_d_e.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_c001_g_timb', 'eku_de_c001_g_timb.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_d001_g_dat_gral_ope', 'eku_de_d001_g_dat_gral_ope.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_d010_g_dat_gral_ope_g_ope_com', 'eku_de_d010_g_dat_gral_ope_g_ope_com.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_d100_g_dat_gral_ope_g_emis', 'eku_de_d100_g_dat_gral_ope_g_emis.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco', 'eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_d140_g_dat_gral_ope_g_resp_d_e', 'eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_d200_g_dat_gral_ope_g_dat_rec', 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e010_g_dtip_d_e_g_cam_f_e', 'eku_de_e010_g_dtip_d_e_g_cam_f_e.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e020_g_dtip_d_e_g_comp_pub', 'eku_de_e020_g_dtip_d_e_g_comp_pub.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e300_g_dtip_d_e_g_cam_a_e', 'eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e', 'eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e500_g_dtip_d_e_g_cam_n_r_e', 'eku_de_e500_g_dtip_d_e_g_cam_n_r_e.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e600_g_dtip_d_e_g_cam_cond', 'eku_de_e600_g_dtip_d_e_g_cam_cond.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini', 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d', 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq', 'eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred', 'eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas', 'eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e700_g_dtip_d_e_g_cam_item', 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item', 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a', 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc', 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo', 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e791_g_cam_esp_g_grup_ener', 'eku_de_e791_g_cam_esp_g_grup_ener.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e800_g_cam_esp_g_grup_seg', 'eku_de_e800_g_cam_esp_g_grup_seg.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg', 'eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e810_g_cam_esp_g_grup_sup', 'eku_de_e810_g_cam_esp_g_grup_sup.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e820_g_cam_esp_g_grup_adi', 'eku_de_e820_g_cam_esp_g_grup_adi.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e900_g_dtip_d_e_g_transp', 'eku_de_e900_g_dtip_d_e_g_transp.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal', 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent', 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras', 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans', 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_f001_g_tot_sub', 'eku_de_f001_g_tot_sub.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_g001_g_cam_gen', 'eku_de_g001_g_cam_gen.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_g050_g_cam_gen_g_cam_carg', 'eku_de_g050_g_cam_gen_g_cam_carg.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_h001_g_cam_d_e_asoc', 'eku_de_h001_g_cam_d_e_asoc.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_i001_signature', 'eku_de_i001_signature.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_j001_g_cam_fu_f_d', 'eku_de_j001_g_cam_fu_f_d.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_asch01_req', 'eku_de_asch01_req.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_arsch01_resp', 'eku_de_arsch01_resp.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_arsch01_resp_mensaje', 'eku_de_arsch01_resp_mensaje.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_ope_estado', 'eku_de_ope_estado.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_ope_tipo_estado', 'eku_de_ope_tipo_estado.id', 'eku_de_ope_estado.eku_de_ope_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_vta_factura', 'eku_de_vta_factura.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'eku_de_vta_factura.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_vta_nota_credito', 'eku_de_vta_nota_credito.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'eku_de_vta_nota_credito.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_vta_nota_debito', 'eku_de_vta_nota_debito.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'eku_de_vta_nota_debito.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_vta_remito', 'eku_de_vta_remito.eku_de_id', 'eku_de.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.id', 'eku_de_vta_remito.vta_remito_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de');
		$criterio->setCriterios();		
}
?>

