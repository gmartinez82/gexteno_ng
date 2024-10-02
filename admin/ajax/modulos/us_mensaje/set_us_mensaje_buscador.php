<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsMensaje::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_mensaje.id', Gral::getVars(1, 'buscador_us_mensaje_id'), Gral::getVars(1, 'buscador_us_mensaje_id_comparador'));
	$criterio->add('us_mensaje.descripcion', Gral::getVars(1, 'buscador_us_mensaje_descripcion'), Gral::getVars(1, 'buscador_us_mensaje_descripcion_comparador'));
	$criterio->add('us_mensaje.us_usuario_id', Gral::getVars(1, 'buscador_us_mensaje_us_usuario_id'), Gral::getVars(1, 'buscador_us_mensaje_us_usuario_id_comparador'));
	$criterio->add('us_mensaje.codigo', Gral::getVars(1, 'buscador_us_mensaje_codigo'), Gral::getVars(1, 'buscador_us_mensaje_codigo_comparador'));
	$criterio->add('us_mensaje.observacion', Gral::getVars(1, 'buscador_us_mensaje_observacion'), Gral::getVars(1, 'buscador_us_mensaje_observacion_comparador'));
	$criterio->add('us_mensaje.leido', Gral::getVars(1, 'buscador_us_mensaje_leido'), Gral::getVars(1, 'buscador_us_mensaje_leido_comparador'));
	$criterio->add('us_mensaje.estado', Gral::getVars(1, 'buscador_us_mensaje_estado'), Gral::getVars(1, 'buscador_us_mensaje_estado_comparador'));
	$criterio->add('us_mensaje.creado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_mensaje_creado')), Gral::getVars(1, 'buscador_us_mensaje_creado_comparador'));
	$criterio->add('us_mensaje.modificado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_mensaje_modificado')), Gral::getVars(1, 'buscador_us_mensaje_modificado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_mensaje');
		$criterio->setCriterios();		
}
?>

