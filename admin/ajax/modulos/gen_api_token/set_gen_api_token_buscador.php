<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenApiToken::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_api_token.id', Gral::getVars(1, 'buscador_gen_api_token_id'), Gral::getVars(1, 'buscador_gen_api_token_id_comparador'));
	$criterio->add('gen_api_token.descripcion', Gral::getVars(1, 'buscador_gen_api_token_descripcion'), Gral::getVars(1, 'buscador_gen_api_token_descripcion_comparador'));
	$criterio->add('gen_api_token.gen_api_consumer_id', Gral::getVars(1, 'buscador_gen_api_token_gen_api_consumer_id'), Gral::getVars(1, 'buscador_gen_api_token_gen_api_consumer_id_comparador'));
	$criterio->add('gen_api_token.gen_api_proyecto_id', Gral::getVars(1, 'buscador_gen_api_token_gen_api_proyecto_id'), Gral::getVars(1, 'buscador_gen_api_token_gen_api_proyecto_id_comparador'));
	$criterio->add('gen_api_token.vencimiento', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_gen_api_token_vencimiento')), Gral::getVars(1, 'buscador_gen_api_token_vencimiento_comparador'));
	$criterio->add('gen_api_token.codigo', Gral::getVars(1, 'buscador_gen_api_token_codigo'), Gral::getVars(1, 'buscador_gen_api_token_codigo_comparador'));
	$criterio->add('gen_api_token.observacion', Gral::getVars(1, 'buscador_gen_api_token_observacion'), Gral::getVars(1, 'buscador_gen_api_token_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('app_mov_instalacion', 'app_mov_instalacion.gen_api_token_id', 'gen_api_token.id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_dispositivo', 'app_mov_dispositivo.id', 'app_mov_instalacion.app_mov_dispositivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_modulo', 'app_mov_modulo.id', 'app_mov_instalacion.app_mov_modulo_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_version', 'app_mov_version.id', 'app_mov_instalacion.app_mov_version_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'app_mov_instalacion.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_actividad', 'app_mov_actividad.gen_api_token_id', 'gen_api_token.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_api_token');
		$criterio->setCriterios();		
}
?>

