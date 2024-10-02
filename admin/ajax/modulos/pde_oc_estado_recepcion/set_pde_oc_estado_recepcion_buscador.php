<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOcEstadoRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc_estado_recepcion.id', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_id'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_id_comparador'));
	$criterio->add('pde_oc_estado_recepcion.descripcion', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_descripcion'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_descripcion_comparador'));
	$criterio->add('pde_oc_estado_recepcion.pde_oc_id', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_pde_oc_id'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_pde_oc_id_comparador'));
	$criterio->add('pde_oc_estado_recepcion.pde_oc_tipo_estado_recepcion_id', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_pde_oc_tipo_estado_recepcion_id'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_pde_oc_tipo_estado_recepcion_id_comparador'));
	$criterio->add('pde_oc_estado_recepcion.inicial', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_inicial'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_inicial_comparador'));
	$criterio->add('pde_oc_estado_recepcion.actual', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_actual'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_actual_comparador'));
	$criterio->add('pde_oc_estado_recepcion.codigo', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_codigo'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_codigo_comparador'));
	$criterio->add('pde_oc_estado_recepcion.observacion', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_observacion'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_observacion_comparador'));
	$criterio->add('pde_oc_estado_recepcion.estado', Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_estado'), Gral::getVars(1, 'buscador_pde_oc_estado_recepcion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc_estado_recepcion');
		$criterio->setCriterios();		
}
?>

