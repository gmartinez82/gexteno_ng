<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOcEstadoFacturacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc_estado_facturacion.id', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_id'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_id_comparador'));
	$criterio->add('pde_oc_estado_facturacion.descripcion', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_descripcion'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_descripcion_comparador'));
	$criterio->add('pde_oc_estado_facturacion.pde_oc_id', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_pde_oc_id'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_pde_oc_id_comparador'));
	$criterio->add('pde_oc_estado_facturacion.pde_oc_tipo_estado_facturacion_id', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_pde_oc_tipo_estado_facturacion_id'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_pde_oc_tipo_estado_facturacion_id_comparador'));
	$criterio->add('pde_oc_estado_facturacion.inicial', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_inicial'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_inicial_comparador'));
	$criterio->add('pde_oc_estado_facturacion.actual', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_actual'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_actual_comparador'));
	$criterio->add('pde_oc_estado_facturacion.codigo', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_codigo'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_codigo_comparador'));
	$criterio->add('pde_oc_estado_facturacion.observacion', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_observacion'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_observacion_comparador'));
	$criterio->add('pde_oc_estado_facturacion.estado', Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_estado'), Gral::getVars(1, 'buscador_pde_oc_estado_facturacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc_estado_facturacion');
		$criterio->setCriterios();		
}
?>

