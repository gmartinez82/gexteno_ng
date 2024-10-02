<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE300GDtipDEGCamAE::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.id', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_id'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_id_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.descripcion', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_descripcion'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_descripcion_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_de_id_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e301_inatven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e301_inatven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e301_inatven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e302_ddesnatven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e302_ddesnatven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e302_ddesnatven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e304_itipidven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e304_itipidven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e304_itipidven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e305_ddtipidven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e305_ddtipidven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e305_ddtipidven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e306_dnumidven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e306_dnumidven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e306_dnumidven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e307_dnomven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e307_dnomven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e307_dnomven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e308_ddirven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e308_ddirven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e308_ddirven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e309_dnumcasven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e309_dnumcasven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e309_dnumcasven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e310_cdepven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e310_cdepven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e310_cdepven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e311_ddesdepven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e311_ddesdepven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e311_ddesdepven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e312_cdisven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e312_cdisven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e312_cdisven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e313_ddesdisven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e313_ddesdisven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e313_ddesdisven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e314_cciuven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e314_cciuven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e314_cciuven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e315_ddesciuven', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e315_ddesciuven'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e315_ddesciuven_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e316_ddirprov', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e316_ddirprov'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e316_ddirprov_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e317_cdepprov', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e317_cdepprov'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e317_cdepprov_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e318_ddesdepprov', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e318_ddesdepprov'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e318_ddesdepprov_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e319_cdisprov', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e319_cdisprov'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e319_cdisprov_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e320_ddesdisprov', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e320_ddesdisprov'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e320_ddesdisprov_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e321_cciuprov', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e321_cciuprov'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e321_cciuprov_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e322_ddesciuprov', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e322_ddesciuprov'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_eku_e322_ddesciuprov_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.codigo', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_codigo'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_codigo_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.observacion', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_observacion'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_observacion_comparador'));
	$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.estado', Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_estado'), Gral::getVars(1, 'buscador_eku_de_e300_g_dtip_d_e_g_cam_a_e_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e300_g_dtip_d_e_g_cam_a_e');
		$criterio->setCriterios();		
}
?>

