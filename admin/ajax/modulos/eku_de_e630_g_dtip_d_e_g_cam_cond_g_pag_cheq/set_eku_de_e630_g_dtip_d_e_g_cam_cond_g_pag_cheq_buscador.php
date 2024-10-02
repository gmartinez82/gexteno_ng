<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE630GDtipDEGCamCondGPagCheq::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.id', Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_id'), Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_id_comparador'));
	$criterio->add('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.descripcion', Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_descripcion'), Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_descripcion_comparador'));
	$criterio->add('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_eku_de_id_comparador'));
	$criterio->add('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.eku_e631_dnumcheq', Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_eku_e631_dnumcheq'), Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_eku_e631_dnumcheq_comparador'));
	$criterio->add('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.eku_e632_dbcoemi', Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_eku_e632_dbcoemi'), Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_eku_e632_dbcoemi_comparador'));
	$criterio->add('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.codigo', Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_codigo'), Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_codigo_comparador'));
	$criterio->add('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.observacion', Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_observacion'), Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_observacion_comparador'));
	$criterio->add('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq.estado', Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_estado'), Gral::getVars(1, 'buscador_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq');
		$criterio->setCriterios();		
}
?>

