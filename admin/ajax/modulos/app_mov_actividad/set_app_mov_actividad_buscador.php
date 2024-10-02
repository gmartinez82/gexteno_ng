<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AppMovActividad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('app_mov_actividad.id', Gral::getVars(1, 'buscador_app_mov_actividad_id'), Gral::getVars(1, 'buscador_app_mov_actividad_id_comparador'));
	$criterio->add('app_mov_actividad.descripcion', Gral::getVars(1, 'buscador_app_mov_actividad_descripcion'), Gral::getVars(1, 'buscador_app_mov_actividad_descripcion_comparador'));
	$criterio->add('app_mov_actividad.app_mov_instalacion_id', Gral::getVars(1, 'buscador_app_mov_actividad_app_mov_instalacion_id'), Gral::getVars(1, 'buscador_app_mov_actividad_app_mov_instalacion_id_comparador'));
	$criterio->add('app_mov_actividad.app_mov_dispositivo_id', Gral::getVars(1, 'buscador_app_mov_actividad_app_mov_dispositivo_id'), Gral::getVars(1, 'buscador_app_mov_actividad_app_mov_dispositivo_id_comparador'));
	$criterio->add('app_mov_actividad.app_mov_modulo_id', Gral::getVars(1, 'buscador_app_mov_actividad_app_mov_modulo_id'), Gral::getVars(1, 'buscador_app_mov_actividad_app_mov_modulo_id_comparador'));
	$criterio->add('app_mov_actividad.gen_api_token_id', Gral::getVars(1, 'buscador_app_mov_actividad_gen_api_token_id'), Gral::getVars(1, 'buscador_app_mov_actividad_gen_api_token_id_comparador'));
	$criterio->add('app_mov_actividad.metodo', Gral::getVars(1, 'buscador_app_mov_actividad_metodo'), Gral::getVars(1, 'buscador_app_mov_actividad_metodo_comparador'));
	$criterio->add('app_mov_actividad.registros', Gral::getVars(1, 'buscador_app_mov_actividad_registros'), Gral::getVars(1, 'buscador_app_mov_actividad_registros_comparador'));
	$criterio->add('app_mov_actividad.codigo', Gral::getVars(1, 'buscador_app_mov_actividad_codigo'), Gral::getVars(1, 'buscador_app_mov_actividad_codigo_comparador'));
	$criterio->add('app_mov_actividad.fecha_actividad', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_app_mov_actividad_fecha_actividad')), Gral::getVars(1, 'buscador_app_mov_actividad_fecha_actividad_comparador'));
	$criterio->add('app_mov_actividad.token', Gral::getVars(1, 'buscador_app_mov_actividad_token'), Gral::getVars(1, 'buscador_app_mov_actividad_token_comparador'));
	$criterio->add('app_mov_actividad.respuesta', Gral::getVars(1, 'buscador_app_mov_actividad_respuesta'), Gral::getVars(1, 'buscador_app_mov_actividad_respuesta_comparador'));
	$criterio->add('app_mov_actividad.observacion', Gral::getVars(1, 'buscador_app_mov_actividad_observacion'), Gral::getVars(1, 'buscador_app_mov_actividad_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('app_mov_actividad');
		$criterio->setCriterios();		
}
?>

