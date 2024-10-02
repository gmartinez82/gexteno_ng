<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE920GDtipDEGTranspGCamSal::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.id', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_id'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_id_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.descripcion', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_descripcion'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_descripcion_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_de_id_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e921_ddirlocsal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e921_ddirlocsal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e921_ddirlocsal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e922_dnumcassal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e922_dnumcassal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e922_dnumcassal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e923_dcomp1sal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e923_dcomp1sal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e923_dcomp1sal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e924_dcomp2sal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e924_dcomp2sal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e924_dcomp2sal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e925_cdepsal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e925_cdepsal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e925_cdepsal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e926_ddesdepsal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e926_ddesdepsal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e926_ddesdepsal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e927_cdissal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e927_cdissal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e927_cdissal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e928_ddesdissal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e928_ddesdissal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e928_ddesdissal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e929_cciusal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e929_cciusal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e929_cciusal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e930_ddesciusal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e930_ddesciusal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e930_ddesciusal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e931_dtelsal', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e931_dtelsal'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_eku_e931_dtelsal_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.codigo', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_codigo'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_codigo_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.observacion', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_observacion'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_observacion_comparador'));
	$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.estado', Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_estado'), Gral::getVars(1, 'buscador_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal');
		$criterio->setCriterios();		
}
?>

