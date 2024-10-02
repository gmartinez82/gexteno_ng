<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE940GDtipDEGTranspGCamEnt::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.id', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.descripcion', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_descripcion'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_descripcion_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_de_id_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e941_ddirlocent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e941_ddirlocent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e941_ddirlocent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e942_dnumcasent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e942_dnumcasent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e942_dnumcasent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e943_dcomp1ent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e943_dcomp1ent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e943_dcomp1ent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e944_dcomp2ent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e944_dcomp2ent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e944_dcomp2ent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e945_cdepent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e945_cdepent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e945_cdepent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e946_ddesdepent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e946_ddesdepent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e946_ddesdepent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e947_cdisent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e947_cdisent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e947_cdisent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e948_ddesdisent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e948_ddesdisent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e948_ddesdisent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e949_cciuent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e949_cciuent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e949_cciuent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e950_ddesciuent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e950_ddesciuent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e950_ddesciuent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e951_dtelent', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e951_dtelent'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_eku_e951_dtelent_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.codigo', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_codigo'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_codigo_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.observacion', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_observacion'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_observacion_comparador'));
	$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.estado', Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_estado'), Gral::getVars(1, 'buscador_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent');
		$criterio->setCriterios();		
}
?>

