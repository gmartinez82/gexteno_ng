<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE620GDtipDEGCamCondGPagTarCD::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.id', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.descripcion', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_descripcion'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_descripcion_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_de_id_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e621_identarj', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e621_identarj'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e621_identarj_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e622_ddesdentarj', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e622_ddesdentarj'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e622_ddesdentarj_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e623_drsprotar', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e623_drsprotar'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e623_drsprotar_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e624_drucprotar', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e624_drucprotar'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e624_drucprotar_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e625_ddvprotar', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e625_ddvprotar'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e625_ddvprotar_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e626_iforpropa', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e626_iforpropa'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e626_iforpropa_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e627_dcodauope', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e627_dcodauope'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e627_dcodauope_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e628_dnomtit', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e628_dnomtit'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e628_dnomtit_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e629_dnumtarj', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e629_dnumtarj'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_eku_e629_dnumtarj_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.codigo', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_codigo'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_codigo_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.observacion', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_observacion'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_observacion_comparador'));
	$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.estado', Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_estado'), Gral::getVars(1, 'buscador_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d');
		$criterio->setCriterios();		
}
?>

