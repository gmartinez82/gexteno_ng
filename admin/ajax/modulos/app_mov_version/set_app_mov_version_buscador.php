<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AppMovVersion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('app_mov_version.id', Gral::getVars(1, 'buscador_app_mov_version_id'), Gral::getVars(1, 'buscador_app_mov_version_id_comparador'));
	$criterio->add('app_mov_version.descripcion', Gral::getVars(1, 'buscador_app_mov_version_descripcion'), Gral::getVars(1, 'buscador_app_mov_version_descripcion_comparador'));
	$criterio->add('app_mov_version.app_mov_modulo_id', Gral::getVars(1, 'buscador_app_mov_version_app_mov_modulo_id'), Gral::getVars(1, 'buscador_app_mov_version_app_mov_modulo_id_comparador'));
	$criterio->add('app_mov_version.codigo', Gral::getVars(1, 'buscador_app_mov_version_codigo'), Gral::getVars(1, 'buscador_app_mov_version_codigo_comparador'));
	$criterio->add('app_mov_version.version', Gral::getVars(1, 'buscador_app_mov_version_version'), Gral::getVars(1, 'buscador_app_mov_version_version_comparador'));
	$criterio->add('app_mov_version.version_minima', Gral::getVars(1, 'buscador_app_mov_version_version_minima'), Gral::getVars(1, 'buscador_app_mov_version_version_minima_comparador'));
	$criterio->add('app_mov_version.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_app_mov_version_fecha')), Gral::getVars(1, 'buscador_app_mov_version_fecha_comparador'));
	$criterio->add('app_mov_version.observacion', Gral::getVars(1, 'buscador_app_mov_version_observacion'), Gral::getVars(1, 'buscador_app_mov_version_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('app_mov_instalacion', 'app_mov_instalacion.app_mov_version_id', 'app_mov_version.id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_dispositivo', 'app_mov_dispositivo.id', 'app_mov_instalacion.app_mov_dispositivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_modulo', 'app_mov_modulo.id', 'app_mov_instalacion.app_mov_modulo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_token', 'gen_api_token.id', 'app_mov_instalacion.gen_api_token_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'app_mov_instalacion.us_usuario_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('app_mov_version');
		$criterio->setCriterios();		
}
?>

