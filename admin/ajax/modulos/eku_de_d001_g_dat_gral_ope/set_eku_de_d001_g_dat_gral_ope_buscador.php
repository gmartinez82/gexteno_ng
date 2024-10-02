<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeD001GDatGralOpe::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_d001_g_dat_gral_ope.id', Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_id'), Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_id_comparador'));
	$criterio->add('eku_de_d001_g_dat_gral_ope.descripcion', Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_descripcion'), Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_descripcion_comparador'));
	$criterio->add('eku_de_d001_g_dat_gral_ope.eku_de_id', Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_eku_de_id_comparador'));
	$criterio->add('eku_de_d001_g_dat_gral_ope.eku_d002_dfeemide', Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_eku_d002_dfeemide'), Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_eku_d002_dfeemide_comparador'));
	$criterio->add('eku_de_d001_g_dat_gral_ope.codigo', Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_codigo'), Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_codigo_comparador'));
	$criterio->add('eku_de_d001_g_dat_gral_ope.observacion', Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_observacion'), Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_observacion_comparador'));
	$criterio->add('eku_de_d001_g_dat_gral_ope.estado', Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_estado'), Gral::getVars(1, 'buscador_eku_de_d001_g_dat_gral_ope_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_d001_g_dat_gral_ope');
		$criterio->setCriterios();		
}
?>

