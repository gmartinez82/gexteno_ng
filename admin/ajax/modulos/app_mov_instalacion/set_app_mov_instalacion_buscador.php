<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AppMovInstalacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('app_mov_instalacion.id', Gral::getVars(1, 'buscador_app_mov_instalacion_id'), Gral::getVars(1, 'buscador_app_mov_instalacion_id_comparador'));
	$criterio->add('app_mov_instalacion.descripcion', Gral::getVars(1, 'buscador_app_mov_instalacion_descripcion'), Gral::getVars(1, 'buscador_app_mov_instalacion_descripcion_comparador'));
	$criterio->add('app_mov_instalacion.app_mov_dispositivo_id', Gral::getVars(1, 'buscador_app_mov_instalacion_app_mov_dispositivo_id'), Gral::getVars(1, 'buscador_app_mov_instalacion_app_mov_dispositivo_id_comparador'));
	$criterio->add('app_mov_instalacion.app_mov_modulo_id', Gral::getVars(1, 'buscador_app_mov_instalacion_app_mov_modulo_id'), Gral::getVars(1, 'buscador_app_mov_instalacion_app_mov_modulo_id_comparador'));
	$criterio->add('app_mov_instalacion.gen_api_token_id', Gral::getVars(1, 'buscador_app_mov_instalacion_gen_api_token_id'), Gral::getVars(1, 'buscador_app_mov_instalacion_gen_api_token_id_comparador'));
	$criterio->add('app_mov_instalacion.app_mov_version_id', Gral::getVars(1, 'buscador_app_mov_instalacion_app_mov_version_id'), Gral::getVars(1, 'buscador_app_mov_instalacion_app_mov_version_id_comparador'));
	$criterio->add('app_mov_instalacion.codigo', Gral::getVars(1, 'buscador_app_mov_instalacion_codigo'), Gral::getVars(1, 'buscador_app_mov_instalacion_codigo_comparador'));
	$criterio->add('app_mov_instalacion.app_version', Gral::getVars(1, 'buscador_app_mov_instalacion_app_version'), Gral::getVars(1, 'buscador_app_mov_instalacion_app_version_comparador'));
	$criterio->add('app_mov_instalacion.app_version_activa', Gral::getVars(1, 'buscador_app_mov_instalacion_app_version_activa'), Gral::getVars(1, 'buscador_app_mov_instalacion_app_version_activa_comparador'));
	$criterio->add('app_mov_instalacion.fecha_ultima_actividad', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_app_mov_instalacion_fecha_ultima_actividad')), Gral::getVars(1, 'buscador_app_mov_instalacion_fecha_ultima_actividad_comparador'));
	$criterio->add('app_mov_instalacion.us_usuario_id', Gral::getVars(1, 'buscador_app_mov_instalacion_us_usuario_id'), Gral::getVars(1, 'buscador_app_mov_instalacion_us_usuario_id_comparador'));
	$criterio->add('app_mov_instalacion.observacion', Gral::getVars(1, 'buscador_app_mov_instalacion_observacion'), Gral::getVars(1, 'buscador_app_mov_instalacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('app_mov_actividad', 'app_mov_actividad.app_mov_instalacion_id', 'app_mov_instalacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_dispositivo', 'app_mov_dispositivo.id', 'app_mov_actividad.app_mov_dispositivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_modulo', 'app_mov_modulo.id', 'app_mov_actividad.app_mov_modulo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_token', 'gen_api_token.id', 'app_mov_actividad.gen_api_token_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('app_mov_instalacion');
		$criterio->setCriterios();		
}
?>

