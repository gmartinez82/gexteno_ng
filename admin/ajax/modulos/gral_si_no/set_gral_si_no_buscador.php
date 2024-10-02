<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralSiNo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_si_no.id', Gral::getVars(1, 'buscador_gral_si_no_id'), Gral::getVars(1, 'buscador_gral_si_no_id_comparador'));
	$criterio->add('gral_si_no.descripcion', Gral::getVars(1, 'buscador_gral_si_no_descripcion'), Gral::getVars(1, 'buscador_gral_si_no_descripcion_comparador'));
	$criterio->add('gral_si_no.codigo', Gral::getVars(1, 'buscador_gral_si_no_codigo'), Gral::getVars(1, 'buscador_gral_si_no_codigo_comparador'));
	$criterio->add('gral_si_no.observacion', Gral::getVars(1, 'buscador_gral_si_no_observacion'), Gral::getVars(1, 'buscador_gral_si_no_observacion_comparador'));
	$criterio->add('gral_si_no.estado', Gral::getVars(1, 'buscador_gral_si_no_estado'), Gral::getVars(1, 'buscador_gral_si_no_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_si_no');
		$criterio->setCriterios();		
}
?>

