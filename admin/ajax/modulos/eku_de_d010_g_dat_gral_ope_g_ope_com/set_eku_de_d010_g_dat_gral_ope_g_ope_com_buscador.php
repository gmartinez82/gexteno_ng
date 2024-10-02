<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeD010GDatGralOpeGOpeCom::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.id', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_id'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_id_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.descripcion', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_descripcion'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_descripcion_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_de_id', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_de_id_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d011_itiptra', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d011_itiptra'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d011_itiptra_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d012_ddestiptra', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d012_ddestiptra'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d012_ddestiptra_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d013_itimp', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d013_itimp'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d013_itimp_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d014_ddestimp', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d014_ddestimp'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d014_ddestimp_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d015_cmoneope', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d015_cmoneope'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d015_cmoneope_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d016_ddesmoneope', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d016_ddesmoneope'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d016_ddesmoneope_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d017_dcondticam', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d017_dcondticam'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d017_dcondticam_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d018_dticam', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d018_dticam'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d018_dticam_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d019_icondant', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d019_icondant'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d019_icondant_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d020_ddescondant', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d020_ddescondant'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_eku_d020_ddescondant_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.codigo', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_codigo'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_codigo_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.observacion', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_observacion'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_observacion_comparador'));
	$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.estado', Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_estado'), Gral::getVars(1, 'buscador_eku_de_d010_g_dat_gral_ope_g_ope_com_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_d010_g_dat_gral_ope_g_ope_com');
		$criterio->setCriterios();		
}
?>

