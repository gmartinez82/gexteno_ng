<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeJ001GCamFuFD::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_j001_g_cam_fu_f_d.id', Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_id'), Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_id_comparador'));
	$criterio->add('eku_de_j001_g_cam_fu_f_d.descripcion', Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_descripcion'), Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_descripcion_comparador'));
	$criterio->add('eku_de_j001_g_cam_fu_f_d.eku_de_id', Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_eku_de_id_comparador'));
	$criterio->add('eku_de_j001_g_cam_fu_f_d.eku_j002_dcarqr', Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_eku_j002_dcarqr'), Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_eku_j002_dcarqr_comparador'));
	$criterio->add('eku_de_j001_g_cam_fu_f_d.eku_j003_dinfadic', Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_eku_j003_dinfadic'), Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_eku_j003_dinfadic_comparador'));
	$criterio->add('eku_de_j001_g_cam_fu_f_d.codigo', Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_codigo'), Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_codigo_comparador'));
	$criterio->add('eku_de_j001_g_cam_fu_f_d.observacion', Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_observacion'), Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_observacion_comparador'));
	$criterio->add('eku_de_j001_g_cam_fu_f_d.estado', Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_estado'), Gral::getVars(1, 'buscador_eku_de_j001_g_cam_fu_f_d_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_j001_g_cam_fu_f_d');
		$criterio->setCriterios();		
}
?>

