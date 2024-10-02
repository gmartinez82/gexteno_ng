<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeB001GOpeDE::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_b001_g_ope_d_e.id', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_id'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_id_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.descripcion', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_descripcion'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_descripcion_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.eku_de_id', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_de_id_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.eku_b002_itipemi', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b002_itipemi'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b002_itipemi_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.eku_b003_ddestipemi', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b003_ddestipemi'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b003_ddestipemi_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.eku_b004_dcodseg', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b004_dcodseg'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b004_dcodseg_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.eku_b005_dinfoemi', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b005_dinfoemi'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b005_dinfoemi_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.eku_b006_dinfofisc', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b006_dinfofisc'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_eku_b006_dinfofisc_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.codigo', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_codigo'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_codigo_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.observacion', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_observacion'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_observacion_comparador'));
	$criterio->add('eku_de_b001_g_ope_d_e.estado', Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_estado'), Gral::getVars(1, 'buscador_eku_de_b001_g_ope_d_e_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_b001_g_ope_d_e');
		$criterio->setCriterios();		
}
?>

