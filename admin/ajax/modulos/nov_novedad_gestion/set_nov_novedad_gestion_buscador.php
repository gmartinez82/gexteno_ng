<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NovNovedad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('nov_novedad.id', Gral::getVars(1, 'buscador_nov_novedad_id'), Gral::getVars(1, 'buscador_nov_novedad_id_comparador'));
	$criterio->add('nov_novedad.descripcion', Gral::getVars(1, 'buscador_nov_novedad_descripcion'), Gral::getVars(1, 'buscador_nov_novedad_descripcion_comparador'));
	$criterio->add('nov_novedad.codigo', Gral::getVars(1, 'buscador_nov_novedad_codigo'), Gral::getVars(1, 'buscador_nov_novedad_codigo_comparador'));
	$criterio->add('nov_novedad.descripcion_breve', Gral::getVars(1, 'buscador_nov_novedad_descripcion_breve'), Gral::getVars(1, 'buscador_nov_novedad_descripcion_breve_comparador'));
	$criterio->add('nov_novedad.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_nov_novedad_fecha')), Gral::getVars(1, 'buscador_nov_novedad_fecha_comparador'));
	$criterio->add('nov_novedad.descripcion_extendida', Gral::getVars(1, 'buscador_nov_novedad_descripcion_extendida'), Gral::getVars(1, 'buscador_nov_novedad_descripcion_extendida_comparador'));
	$criterio->add('nov_novedad.observacion', Gral::getVars(1, 'buscador_nov_novedad_observacion'), Gral::getVars(1, 'buscador_nov_novedad_observacion_comparador'));
	$criterio->add('nov_novedad.estado', Gral::getVars(1, 'buscador_nov_novedad_estado'), Gral::getVars(1, 'buscador_nov_novedad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('nov_novedad_imagen', 'nov_novedad_imagen.nov_novedad_id', 'nov_novedad.id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad_archivo', 'nov_novedad_archivo.nov_novedad_id', 'nov_novedad.id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad_destinatario', 'nov_novedad_destinatario.nov_novedad_id', 'nov_novedad.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'nov_novedad_destinatario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad_observado', 'nov_novedad_observado.nov_novedad_id', 'nov_novedad.id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad_leido', 'nov_novedad_leido.nov_novedad_id', 'nov_novedad.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('nov_novedad');
		$criterio->setCriterios();		
}
?>

