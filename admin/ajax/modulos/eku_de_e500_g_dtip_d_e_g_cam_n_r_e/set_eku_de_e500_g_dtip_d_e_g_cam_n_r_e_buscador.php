<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE500GDtipDEGCamNRE::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.id', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_id'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_id_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.descripcion', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_descripcion'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_descripcion_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_de_id_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.eku_e501_imoteminr', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e501_imoteminr'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e501_imoteminr_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.eku_e502_ddesmoteminr', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e502_ddesmoteminr'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e502_ddesmoteminr_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.eku_e503_irespeminr', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e503_irespeminr'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e503_irespeminr_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.eku_e504_ddesrespeminr', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e504_ddesrespeminr'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e504_ddesrespeminr_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.eku_e505_dkmr', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e505_dkmr'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e505_dkmr_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.eku_e506_dfecem', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e506_dfecem'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_eku_e506_dfecem_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.codigo', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_codigo'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_codigo_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.observacion', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_observacion'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_observacion_comparador'));
	$criterio->add('eku_de_e500_g_dtip_d_e_g_cam_n_r_e.estado', Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_estado'), Gral::getVars(1, 'buscador_eku_de_e500_g_dtip_d_e_g_cam_n_r_e_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e500_g_dtip_d_e_g_cam_n_r_e');
		$criterio->setCriterios();		
}
?>

