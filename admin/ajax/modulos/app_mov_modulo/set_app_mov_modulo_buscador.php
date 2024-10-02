<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AppMovModulo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('app_mov_modulo.id', Gral::getVars(1, 'buscador_app_mov_modulo_id'), Gral::getVars(1, 'buscador_app_mov_modulo_id_comparador'));
	$criterio->add('app_mov_modulo.descripcion', Gral::getVars(1, 'buscador_app_mov_modulo_descripcion'), Gral::getVars(1, 'buscador_app_mov_modulo_descripcion_comparador'));
	$criterio->add('app_mov_modulo.codigo', Gral::getVars(1, 'buscador_app_mov_modulo_codigo'), Gral::getVars(1, 'buscador_app_mov_modulo_codigo_comparador'));
	$criterio->add('app_mov_modulo.observacion', Gral::getVars(1, 'buscador_app_mov_modulo_observacion'), Gral::getVars(1, 'buscador_app_mov_modulo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('app_mov_version', 'app_mov_version.app_mov_modulo_id', 'app_mov_modulo.id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_instalacion', 'app_mov_instalacion.app_mov_modulo_id', 'app_mov_modulo.id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_dispositivo', 'app_mov_dispositivo.id', 'app_mov_instalacion.app_mov_dispositivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_token', 'gen_api_token.id', 'app_mov_instalacion.gen_api_token_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'app_mov_instalacion.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_actividad', 'app_mov_actividad.app_mov_modulo_id', 'app_mov_modulo.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('app_mov_modulo');
		$criterio->setCriterios();		
}
?>

