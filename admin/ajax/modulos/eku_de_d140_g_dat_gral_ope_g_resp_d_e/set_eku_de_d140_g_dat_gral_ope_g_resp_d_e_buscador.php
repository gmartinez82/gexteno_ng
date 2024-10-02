<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeD140GDatGralOpeGRespDE::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.id', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_id'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_id_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.descripcion', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_descripcion'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_descripcion_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_de_id', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_de_id_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d141_itipidrespde', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d141_itipidrespde'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d141_itipidrespde_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d142_ddtipidrespde', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d142_ddtipidrespde'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d142_ddtipidrespde_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d143_dnumidrespde', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d143_dnumidrespde'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d143_dnumidrespde_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d144_dnomrespde', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d144_dnomrespde'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d144_dnomrespde_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d145_dcarrespde', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d145_dcarrespde'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_eku_d145_dcarrespde_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.codigo', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_codigo'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_codigo_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.observacion', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_observacion'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_observacion_comparador'));
	$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.estado', Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_estado'), Gral::getVars(1, 'buscador_eku_de_d140_g_dat_gral_ope_g_resp_d_e_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_d140_g_dat_gral_ope_g_resp_d_e');
		$criterio->setCriterios();		
}
?>

