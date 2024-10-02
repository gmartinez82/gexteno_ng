<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('os_orden_servicio.id', Gral::getVars(1, 'buscador_os_orden_servicio_id'), Gral::getVars(1, 'buscador_os_orden_servicio_id_comparador'));
	$criterio->add('os_orden_servicio.os_tipo_id', Gral::getVars(1, 'buscador_os_orden_servicio_os_tipo_id'), Gral::getVars(1, 'buscador_os_orden_servicio_os_tipo_id_comparador'));
	$criterio->add('os_orden_servicio.per_persona_id', Gral::getVars(1, 'buscador_os_orden_servicio_per_persona_id'), Gral::getVars(1, 'buscador_os_orden_servicio_per_persona_id_comparador'));
	$criterio->add('os_orden_servicio.os_tipo_estado_id', Gral::getVars(1, 'buscador_os_orden_servicio_os_tipo_estado_id'), Gral::getVars(1, 'buscador_os_orden_servicio_os_tipo_estado_id_comparador'));
	$criterio->add('os_orden_servicio.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_os_orden_servicio_fecha')), Gral::getVars(1, 'buscador_os_orden_servicio_fecha_comparador'));
	$criterio->add('os_orden_servicio.notificacion', Gral::getVars(1, 'buscador_os_orden_servicio_notificacion'), Gral::getVars(1, 'buscador_os_orden_servicio_notificacion_comparador'));
	$criterio->add('os_orden_servicio.dias_para_descargo', Gral::getVars(1, 'buscador_os_orden_servicio_dias_para_descargo'), Gral::getVars(1, 'buscador_os_orden_servicio_dias_para_descargo_comparador'));
	$criterio->add('os_orden_servicio.descripcion', Gral::getVars(1, 'buscador_os_orden_servicio_descripcion'), Gral::getVars(1, 'buscador_os_orden_servicio_descripcion_comparador'));
	$criterio->add('os_orden_servicio.codigo', Gral::getVars(1, 'buscador_os_orden_servicio_codigo'), Gral::getVars(1, 'buscador_os_orden_servicio_codigo_comparador'));
	$criterio->add('os_orden_servicio.observacion', Gral::getVars(1, 'buscador_os_orden_servicio_observacion'), Gral::getVars(1, 'buscador_os_orden_servicio_observacion_comparador'));
	$criterio->add('os_orden_servicio.estado', Gral::getVars(1, 'buscador_os_orden_servicio_estado'), Gral::getVars(1, 'buscador_os_orden_servicio_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('os_estado', 'os_estado.os_orden_servicio_id', 'os_orden_servicio.id', 'LEFT JOIN');
	$criterio->addRealJoin('os_tipo_estado', 'os_tipo_estado.id', 'os_estado.os_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('os_resolucion', 'os_resolucion.os_orden_servicio_id', 'os_orden_servicio.id', 'LEFT JOIN');
	$criterio->addRealJoin('os_tipo_resolucion', 'os_tipo_resolucion.id', 'os_resolucion.os_tipo_resolucion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('os_orden_servicio');
		$criterio->setCriterios();		
}
?>

