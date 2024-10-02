<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeC001GTimb::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_c001_g_timb.id', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_id'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_id_comparador'));
	$criterio->add('eku_de_c001_g_timb.descripcion', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_descripcion'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_descripcion_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_de_id', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_de_id_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c002_itide', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c002_itide'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c002_itide_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c003_ddestide', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c003_ddestide'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c003_ddestide_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c004_dnumtim', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c004_dnumtim'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c004_dnumtim_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c005_dest', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c005_dest'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c005_dest_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c006_dpunexp', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c006_dpunexp'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c006_dpunexp_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c007_dnumdoc', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c007_dnumdoc'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c007_dnumdoc_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c010_dserienum', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c010_dserienum'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c010_dserienum_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c008_dfeinit', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c008_dfeinit'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c008_dfeinit_comparador'));
	$criterio->add('eku_de_c001_g_timb.eku_c009_dfefint', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c009_dfefint'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_eku_c009_dfefint_comparador'));
	$criterio->add('eku_de_c001_g_timb.codigo', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_codigo'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_codigo_comparador'));
	$criterio->add('eku_de_c001_g_timb.observacion', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_observacion'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_observacion_comparador'));
	$criterio->add('eku_de_c001_g_timb.estado', Gral::getVars(1, 'buscador_eku_de_c001_g_timb_estado'), Gral::getVars(1, 'buscador_eku_de_c001_g_timb_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_c001_g_timb');
		$criterio->setCriterios();		
}
?>

