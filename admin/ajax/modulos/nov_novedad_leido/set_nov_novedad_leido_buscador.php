<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NovNovedadLeido::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('nov_novedad_leido.id', Gral::getVars(1, 'buscador_nov_novedad_leido_id'), Gral::getVars(1, 'buscador_nov_novedad_leido_id_comparador'));
	$criterio->add('nov_novedad_leido.nov_novedad_id', Gral::getVars(1, 'buscador_nov_novedad_leido_nov_novedad_id'), Gral::getVars(1, 'buscador_nov_novedad_leido_nov_novedad_id_comparador'));
	$criterio->add('nov_novedad_leido.us_usuario_id', Gral::getVars(1, 'buscador_nov_novedad_leido_us_usuario_id'), Gral::getVars(1, 'buscador_nov_novedad_leido_us_usuario_id_comparador'));
	$criterio->add('nov_novedad_leido.descripcion', Gral::getVars(1, 'buscador_nov_novedad_leido_descripcion'), Gral::getVars(1, 'buscador_nov_novedad_leido_descripcion_comparador'));
	$criterio->add('nov_novedad_leido.codigo', Gral::getVars(1, 'buscador_nov_novedad_leido_codigo'), Gral::getVars(1, 'buscador_nov_novedad_leido_codigo_comparador'));
	$criterio->add('nov_novedad_leido.observacion', Gral::getVars(1, 'buscador_nov_novedad_leido_observacion'), Gral::getVars(1, 'buscador_nov_novedad_leido_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('nov_novedad_leido');
		$criterio->setCriterios();		
}
?>

