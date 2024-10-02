<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OsPrioridad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('os_prioridad.id', Gral::getVars(1, 'buscador_os_prioridad_id'), Gral::getVars(1, 'buscador_os_prioridad_id_comparador'));
	$criterio->add('os_prioridad.descripcion', Gral::getVars(1, 'buscador_os_prioridad_descripcion'), Gral::getVars(1, 'buscador_os_prioridad_descripcion_comparador'));
	$criterio->add('os_prioridad.codigo', Gral::getVars(1, 'buscador_os_prioridad_codigo'), Gral::getVars(1, 'buscador_os_prioridad_codigo_comparador'));
	$criterio->add('os_prioridad.observacion', Gral::getVars(1, 'buscador_os_prioridad_observacion'), Gral::getVars(1, 'buscador_os_prioridad_observacion_comparador'));
	$criterio->add('os_prioridad.estado', Gral::getVars(1, 'buscador_os_prioridad_estado'), Gral::getVars(1, 'buscador_os_prioridad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('os_orden_servicio', 'os_orden_servicio.os_prioridad_id', 'os_prioridad.id', 'LEFT JOIN');
	$criterio->addRealJoin('os_tipo', 'os_tipo.id', 'os_orden_servicio.os_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'os_orden_servicio.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('os_tipo_estado', 'os_tipo_estado.id', 'os_orden_servicio.os_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('os_prioridad');
		$criterio->setCriterios();		
}
?>

