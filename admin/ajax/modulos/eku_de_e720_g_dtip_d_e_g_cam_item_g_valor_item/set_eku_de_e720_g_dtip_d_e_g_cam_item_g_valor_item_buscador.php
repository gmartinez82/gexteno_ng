<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE720GDtipDEGCamItemGValorItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.id', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.descripcion', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_descripcion'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_descripcion_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_de_id_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_de_e700_g_dtip_d_e_g_cam_item_id'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_de_e700_g_dtip_d_e_g_cam_item_id_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_e721_dpuniproser', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_e721_dpuniproser'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_e721_dpuniproser_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_e725_dticamit', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_e725_dticamit'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_e725_dticamit_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_e727_dtotbruopeitem', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_e727_dtotbruopeitem'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_e727_dtotbruopeitem_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea002_ddescitem', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea002_ddescitem'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea002_ddescitem_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea003_dporcdesit', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea003_dporcdesit'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea003_dporcdesit_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea004_ddescgloitem', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea004_ddescgloitem'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea004_ddescgloitem_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea006_dantpreuniit', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea006_dantpreuniit'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea006_dantpreuniit_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea007_dantglopreuniit', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea007_dantglopreuniit'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea007_dantglopreuniit_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea008_dtotopeitem', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea008_dtotopeitem'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea008_dtotopeitem_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea009_dtotopegs', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea009_dtotopegs'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_eku_ea009_dtotopegs_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.codigo', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_codigo'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_codigo_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.observacion', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_observacion'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_observacion_comparador'));
	$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.estado', Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_estado'), Gral::getVars(1, 'buscador_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item');
		$criterio->setCriterios();		
}
?>

