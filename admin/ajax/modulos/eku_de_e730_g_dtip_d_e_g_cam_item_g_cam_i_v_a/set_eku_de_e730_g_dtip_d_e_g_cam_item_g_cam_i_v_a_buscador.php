<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE730GDtipDEGCamItemGCamIVA::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.id', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.descripcion', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_descripcion'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_descripcion_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_de_id_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_de_e700_g_dtip_d_e_g_cam_item_id'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_de_e700_g_dtip_d_e_g_cam_item_id_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e731_iafeciva', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e731_iafeciva'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e731_iafeciva_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e732_ddesafeciva', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e732_ddesafeciva'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e732_ddesafeciva_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e733_dpropiva', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e733_dpropiva'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e733_dpropiva_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e734_dtasaiva', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e734_dtasaiva'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e734_dtasaiva_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e735_dbasgraviva', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e735_dbasgraviva'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e735_dbasgraviva_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e736_dliqivaitem', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e736_dliqivaitem'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_eku_e736_dliqivaitem_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.codigo', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_codigo'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_codigo_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.observacion', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_observacion'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_observacion_comparador'));
	$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.estado', Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_estado'), Gral::getVars(1, 'buscador_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a');
		$criterio->setCriterios();		
}
?>

