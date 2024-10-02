<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AppMovDispositivo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('app_mov_dispositivo.id', Gral::getVars(1, 'buscador_app_mov_dispositivo_id'), Gral::getVars(1, 'buscador_app_mov_dispositivo_id_comparador'));
	$criterio->add('app_mov_dispositivo.descripcion', Gral::getVars(1, 'buscador_app_mov_dispositivo_descripcion'), Gral::getVars(1, 'buscador_app_mov_dispositivo_descripcion_comparador'));
	$criterio->add('app_mov_dispositivo.codigo', Gral::getVars(1, 'buscador_app_mov_dispositivo_codigo'), Gral::getVars(1, 'buscador_app_mov_dispositivo_codigo_comparador'));
	$criterio->add('app_mov_dispositivo.so_descripcion', Gral::getVars(1, 'buscador_app_mov_dispositivo_so_descripcion'), Gral::getVars(1, 'buscador_app_mov_dispositivo_so_descripcion_comparador'));
	$criterio->add('app_mov_dispositivo.so_version', Gral::getVars(1, 'buscador_app_mov_dispositivo_so_version'), Gral::getVars(1, 'buscador_app_mov_dispositivo_so_version_comparador'));
	$criterio->add('app_mov_dispositivo.marca', Gral::getVars(1, 'buscador_app_mov_dispositivo_marca'), Gral::getVars(1, 'buscador_app_mov_dispositivo_marca_comparador'));
	$criterio->add('app_mov_dispositivo.modelo', Gral::getVars(1, 'buscador_app_mov_dispositivo_modelo'), Gral::getVars(1, 'buscador_app_mov_dispositivo_modelo_comparador'));
	$criterio->add('app_mov_dispositivo.imei', Gral::getVars(1, 'buscador_app_mov_dispositivo_imei'), Gral::getVars(1, 'buscador_app_mov_dispositivo_imei_comparador'));
	$criterio->add('app_mov_dispositivo.telefono_nro', Gral::getVars(1, 'buscador_app_mov_dispositivo_telefono_nro'), Gral::getVars(1, 'buscador_app_mov_dispositivo_telefono_nro_comparador'));
	$criterio->add('app_mov_dispositivo.titular_apellido', Gral::getVars(1, 'buscador_app_mov_dispositivo_titular_apellido'), Gral::getVars(1, 'buscador_app_mov_dispositivo_titular_apellido_comparador'));
	$criterio->add('app_mov_dispositivo.titular_nombre', Gral::getVars(1, 'buscador_app_mov_dispositivo_titular_nombre'), Gral::getVars(1, 'buscador_app_mov_dispositivo_titular_nombre_comparador'));
	$criterio->add('app_mov_dispositivo.observacion', Gral::getVars(1, 'buscador_app_mov_dispositivo_observacion'), Gral::getVars(1, 'buscador_app_mov_dispositivo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('app_mov_instalacion', 'app_mov_instalacion.app_mov_dispositivo_id', 'app_mov_dispositivo.id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_modulo', 'app_mov_modulo.id', 'app_mov_instalacion.app_mov_modulo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_token', 'gen_api_token.id', 'app_mov_instalacion.gen_api_token_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_version', 'app_mov_version.id', 'app_mov_instalacion.app_mov_version_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'app_mov_instalacion.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_actividad', 'app_mov_actividad.app_mov_dispositivo_id', 'app_mov_dispositivo.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('app_mov_dispositivo');
		$criterio->setCriterios();		
}
?>

