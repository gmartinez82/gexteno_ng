<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE900GDtipDEGTransp::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.id', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_id'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_id_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.descripcion', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_descripcion'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_descripcion_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_de_id_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e901_itiptrans', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e901_itiptrans'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e901_itiptrans_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e902_ddestiptrans', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e902_ddestiptrans'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e902_ddestiptrans_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e903_imodtrans', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e903_imodtrans'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e903_imodtrans_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e904_ddesmodtrans', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e904_ddesmodtrans'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e904_ddesmodtrans_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e905_irespflete', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e905_irespflete'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e905_irespflete_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e906_ccondneg', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e906_ccondneg'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e906_ccondneg_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e907_dnumanif', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e907_dnumanif'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e907_dnumanif_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e908_dnudespimp', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e908_dnudespimp'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e908_dnudespimp_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e909_dinitras', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e909_dinitras'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e909_dinitras_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e910_dfintras', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e910_dfintras'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e910_dfintras_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e911_cpaisdest', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e911_cpaisdest'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e911_cpaisdest_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e912_ddespaisdest', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e912_ddespaisdest'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_eku_e912_ddespaisdest_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.codigo', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_codigo'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_codigo_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.observacion', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_observacion'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_observacion_comparador'));
	$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.estado', Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_estado'), Gral::getVars(1, 'buscador_eku_de_e900_g_dtip_d_e_g_transp_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e900_g_dtip_d_e_g_transp');
		$criterio->setCriterios();		
}
?>

