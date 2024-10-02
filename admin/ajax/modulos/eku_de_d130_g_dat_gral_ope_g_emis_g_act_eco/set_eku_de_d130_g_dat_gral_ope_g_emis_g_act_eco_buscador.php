<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeD130GDatGralOpeGEmisGActEco::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.id', Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_id'), Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_id_comparador'));
	$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.descripcion', Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_descripcion'), Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_descripcion_comparador'));
	$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.eku_de_id', Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_eku_de_id_comparador'));
	$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.eku_d131_cacteco', Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_eku_d131_cacteco'), Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_eku_d131_cacteco_comparador'));
	$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.eku_d132_ddesacteco', Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_eku_d132_ddesacteco'), Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_eku_d132_ddesacteco_comparador'));
	$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.codigo', Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_codigo'), Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_codigo_comparador'));
	$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.observacion', Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_observacion'), Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_observacion_comparador'));
	$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.estado', Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_estado'), Gral::getVars(1, 'buscador_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco');
		$criterio->setCriterios();		
}
?>

