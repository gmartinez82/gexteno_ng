<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NovNovedadUsGrupo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('nov_novedad_us_grupo.id', Gral::getVars(1, 'buscador_nov_novedad_us_grupo_id'), Gral::getVars(1, 'buscador_nov_novedad_us_grupo_id_comparador'));
	$criterio->add('nov_novedad_us_grupo.nov_novedad_id', Gral::getVars(1, 'buscador_nov_novedad_us_grupo_nov_novedad_id'), Gral::getVars(1, 'buscador_nov_novedad_us_grupo_nov_novedad_id_comparador'));
	$criterio->add('nov_novedad_us_grupo.us_grupo_id', Gral::getVars(1, 'buscador_nov_novedad_us_grupo_us_grupo_id'), Gral::getVars(1, 'buscador_nov_novedad_us_grupo_us_grupo_id_comparador'));
	$criterio->add('nov_novedad_us_grupo.descripcion', Gral::getVars(1, 'buscador_nov_novedad_us_grupo_descripcion'), Gral::getVars(1, 'buscador_nov_novedad_us_grupo_descripcion_comparador'));
	$criterio->add('nov_novedad_us_grupo.codigo', Gral::getVars(1, 'buscador_nov_novedad_us_grupo_codigo'), Gral::getVars(1, 'buscador_nov_novedad_us_grupo_codigo_comparador'));
	$criterio->add('nov_novedad_us_grupo.observacion', Gral::getVars(1, 'buscador_nov_novedad_us_grupo_observacion'), Gral::getVars(1, 'buscador_nov_novedad_us_grupo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('nov_novedad_us_grupo');
		$criterio->setCriterios();		
}
?>

