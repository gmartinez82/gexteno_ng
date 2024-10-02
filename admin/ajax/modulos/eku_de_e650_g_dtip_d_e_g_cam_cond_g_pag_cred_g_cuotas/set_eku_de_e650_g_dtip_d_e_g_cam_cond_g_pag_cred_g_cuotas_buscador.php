<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.id', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_id'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_id_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.descripcion', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_descripcion'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_descripcion_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_de_id_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_e653_cmonecuo', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_e653_cmonecuo'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_e653_cmonecuo_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_e654_ddmonecuo', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_e654_ddmonecuo'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_e654_ddmonecuo_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_e651_dmoncuota', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_e651_dmoncuota'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_e651_dmoncuota_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_e652_dvenccuo', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_e652_dvenccuo'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_eku_e652_dvenccuo_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.codigo', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_codigo'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_codigo_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.observacion', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_observacion'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_observacion_comparador'));
	$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.estado', Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_estado'), Gral::getVars(1, 'buscador_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas');
		$criterio->setCriterios();		
}
?>

