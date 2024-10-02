<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE605GDtipDEGCamCondGPaConEIni::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.id', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_id'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_id_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.descripcion', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_descripcion'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_descripcion_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_de_id_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e606_itipago', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e606_itipago'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e606_itipago_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e607_ddestipag', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e607_ddestipag'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e607_ddestipag_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e608_dmontipag', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e608_dmontipag'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e608_dmontipag_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e609_cmonetipag', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e609_cmonetipag'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e609_cmonetipag_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e610_ddmonetipag', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e610_ddmonetipag'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e610_ddmonetipag_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e611_dticamtipa', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e611_dticamtipa'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_eku_e611_dticamtipa_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.codigo', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_codigo'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_codigo_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.observacion', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_observacion'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_observacion_comparador'));
	$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.estado', Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_estado'), Gral::getVars(1, 'buscador_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini');
		$criterio->setCriterios();		
}
?>

