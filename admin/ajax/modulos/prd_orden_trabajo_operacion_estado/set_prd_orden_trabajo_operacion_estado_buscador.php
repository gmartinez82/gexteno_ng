<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdOrdenTrabajoOperacionEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_orden_trabajo_operacion_estado.id', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_id_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_estado.descripcion', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_descripcion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_descripcion_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_estado.prd_orden_trabajo_operacion_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_id_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_estado.prd_orden_trabajo_operacion_tipo_estado_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_tipo_estado_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_tipo_estado_id_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_estado.inicial', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_inicial'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_inicial_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_estado.actual', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_actual'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_actual_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_estado.codigo', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_codigo'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_codigo_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_estado.observacion', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_observacion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_observacion_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_estado.estado', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_estado'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_orden_trabajo_operacion_estado');
		$criterio->setCriterios();		
}
?>

