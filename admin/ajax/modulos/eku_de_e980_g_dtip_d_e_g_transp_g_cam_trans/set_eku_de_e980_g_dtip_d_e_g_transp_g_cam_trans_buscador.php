<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE980GDtipDEGTranspGCamTrans::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.id', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_id'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_id_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.descripcion', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_descripcion'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_descripcion_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_de_id_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e981_inattrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e981_inattrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e981_inattrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e982_dnomtrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e982_dnomtrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e982_dnomtrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e983_dructrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e983_dructrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e983_dructrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e984_ddvtrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e984_ddvtrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e984_ddvtrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e985_itipidtrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e985_itipidtrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e985_itipidtrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e986_ddtipidtrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e986_ddtipidtrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e986_ddtipidtrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e987_dnumidtrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e987_dnumidtrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e987_dnumidtrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e988_cnactrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e988_cnactrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e988_cnactrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e989_ddesnactrans', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e989_ddesnactrans'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e989_ddesnactrans_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e990_dnumidchof', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e990_dnumidchof'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e990_dnumidchof_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e991_dnomchof', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e991_dnomchof'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e991_dnomchof_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e992_ddomfisc', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e992_ddomfisc'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e992_ddomfisc_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e993_ddirchof', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e993_ddirchof'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e993_ddirchof_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e994_dnombag', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e994_dnombag'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e994_dnombag_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e995_drucag', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e995_drucag'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e995_drucag_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e996_ddvag', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e996_ddvag'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e996_ddvag_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e997_ddirage', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e997_ddirage'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_eku_e997_ddirage_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.codigo', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_codigo'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_codigo_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.observacion', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_observacion'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_observacion_comparador'));
	$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.estado', Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_estado'), Gral::getVars(1, 'buscador_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans');
		$criterio->setCriterios();		
}
?>

