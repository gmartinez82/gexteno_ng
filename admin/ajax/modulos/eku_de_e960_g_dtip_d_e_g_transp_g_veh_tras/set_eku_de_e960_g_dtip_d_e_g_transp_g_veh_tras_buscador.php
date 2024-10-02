<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE960GDtipDEGTranspGVehTras::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.id', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.descripcion', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_descripcion'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_descripcion_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_de_id_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e961_dtivehtras', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e961_dtivehtras'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e961_dtivehtras_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e962_dmarveh', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e962_dmarveh'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e962_dmarveh_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e967_dtipidenveh', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e967_dtipidenveh'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e967_dtipidenveh_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e963_dnroidveh', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e963_dnroidveh'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e963_dnroidveh_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e964_dadicveh', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e964_dadicveh'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e964_dadicveh_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e965_dnromatveh', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e965_dnromatveh'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e965_dnromatveh_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e966_dnrovuelo', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e966_dnrovuelo'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_eku_e966_dnrovuelo_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.codigo', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_codigo'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_codigo_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.observacion', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_observacion'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_observacion_comparador'));
	$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.estado', Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_estado'), Gral::getVars(1, 'buscador_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras');
		$criterio->setCriterios();		
}
?>

