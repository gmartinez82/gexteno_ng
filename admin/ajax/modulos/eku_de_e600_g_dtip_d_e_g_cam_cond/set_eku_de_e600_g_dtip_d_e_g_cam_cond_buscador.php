<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE600GDtipDEGCamCond::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.id', Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_id'), Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_id_comparador'));
	$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.descripcion', Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_descripcion'), Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_descripcion_comparador'));
	$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_eku_de_id_comparador'));
	$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.eku_e601_icondope', Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_eku_e601_icondope'), Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_eku_e601_icondope_comparador'));
	$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.eku_e602_ddcondope', Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_eku_e602_ddcondope'), Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_eku_e602_ddcondope_comparador'));
	$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.codigo', Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_codigo'), Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_codigo_comparador'));
	$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.observacion', Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_observacion'), Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_observacion_comparador'));
	$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.estado', Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_estado'), Gral::getVars(1, 'buscador_eku_de_e600_g_dtip_d_e_g_cam_cond_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e600_g_dtip_d_e_g_cam_cond');
		$criterio->setCriterios();		
}
?>

