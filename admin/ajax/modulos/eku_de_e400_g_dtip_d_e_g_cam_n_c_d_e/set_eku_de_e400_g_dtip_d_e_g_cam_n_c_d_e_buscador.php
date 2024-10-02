<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE400GDtipDEGCamNCDE::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.id', Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_id'), Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_id_comparador'));
	$criterio->add('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.descripcion', Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_descripcion'), Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_descripcion_comparador'));
	$criterio->add('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_eku_de_id_comparador'));
	$criterio->add('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.eku_e401_imotemi', Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_eku_e401_imotemi'), Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_eku_e401_imotemi_comparador'));
	$criterio->add('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.eku_e402_ddesmotemi', Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_eku_e402_ddesmotemi'), Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_eku_e402_ddesmotemi_comparador'));
	$criterio->add('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.codigo', Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_codigo'), Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_codigo_comparador'));
	$criterio->add('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.observacion', Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_observacion'), Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_observacion_comparador'));
	$criterio->add('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e.estado', Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_estado'), Gral::getVars(1, 'buscador_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e');
		$criterio->setCriterios();		
}
?>

