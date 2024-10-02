<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE640GDtipDEGCamCondGPagCred::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.id', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_id'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_id_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.descripcion', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_descripcion'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_descripcion_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_de_id_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e641_icondcred', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e641_icondcred'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e641_icondcred_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e642_ddcondcred', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e642_ddcondcred'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e642_ddcondcred_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e643_dplazocre', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e643_dplazocre'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e643_dplazocre_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e644_dcuotas', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e644_dcuotas'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e644_dcuotas_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e645_dmonent', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e645_dmonent'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_eku_e645_dmonent_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.codigo', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_codigo'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_codigo_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.observacion', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_observacion'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_observacion_comparador'));
	$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.estado', Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_estado'), Gral::getVars(1, 'buscador_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred');
		$criterio->setCriterios();		
}
?>

