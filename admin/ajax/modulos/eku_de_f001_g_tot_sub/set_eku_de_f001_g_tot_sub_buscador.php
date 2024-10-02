<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeF001GTotSub::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_f001_g_tot_sub.id', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_id'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_id_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.descripcion', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_descripcion'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_descripcion_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_de_id', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_de_id_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f002_dsubexe', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f002_dsubexe'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f002_dsubexe_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f003_dsubexo', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f003_dsubexo'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f003_dsubexo_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f004_dsub5', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f004_dsub5'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f004_dsub5_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f005_dsub10', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f005_dsub10'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f005_dsub10_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f008_dtotope', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f008_dtotope'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f008_dtotope_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f009_dtotdesc', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f009_dtotdesc'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f009_dtotdesc_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f033_dtotdescglotem', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f033_dtotdescglotem'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f033_dtotdescglotem_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f034_dtotantitem', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f034_dtotantitem'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f034_dtotantitem_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f035_dtotant', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f035_dtotant'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f035_dtotant_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f010_dporcdesctotal', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f010_dporcdesctotal'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f010_dporcdesctotal_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f011_ddesctotal', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f011_ddesctotal'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f011_ddesctotal_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f012_danticipo', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f012_danticipo'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f012_danticipo_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f013_dredon', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f013_dredon'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f013_dredon_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f025_dcomi', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f025_dcomi'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f025_dcomi_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f014_dtotgralope', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f014_dtotgralope'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f014_dtotgralope_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f015_diva5', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f015_diva5'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f015_diva5_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f016_diva10', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f016_diva10'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f016_diva10_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f036_dliqtotiva5', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f036_dliqtotiva5'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f036_dliqtotiva5_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f037_dliqtotiva10', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f037_dliqtotiva10'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f037_dliqtotiva10_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f026_divacomi', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f026_divacomi'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f026_divacomi_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f017_dtotiva', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f017_dtotiva'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f017_dtotiva_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f018_dbasegrav5', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f018_dbasegrav5'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f018_dbasegrav5_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f019_dbasegrav10', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f019_dbasegrav10'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f019_dbasegrav10_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f020_dtbasgraiva', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f020_dtbasgraiva'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f020_dtbasgraiva_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f023_dtotalgs', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f023_dtotalgs'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f023_dtotalgs_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.eku_f024_dtotcom', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f024_dtotcom'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_eku_f024_dtotcom_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.codigo', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_codigo'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_codigo_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.observacion', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_observacion'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_observacion_comparador'));
	$criterio->add('eku_de_f001_g_tot_sub.estado', Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_estado'), Gral::getVars(1, 'buscador_eku_de_f001_g_tot_sub_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_f001_g_tot_sub');
		$criterio->setCriterios();		
}
?>

