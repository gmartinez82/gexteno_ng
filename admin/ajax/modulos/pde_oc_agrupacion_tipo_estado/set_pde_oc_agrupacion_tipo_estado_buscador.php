<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOcAgrupacionTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc_agrupacion_tipo_estado.id', Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_id_comparador'));
	$criterio->add('pde_oc_agrupacion_tipo_estado.descripcion', Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_descripcion_comparador'));
	$criterio->add('pde_oc_agrupacion_tipo_estado.codigo', Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_codigo'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_codigo_comparador'));
	$criterio->add('pde_oc_agrupacion_tipo_estado.activo', Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_activo'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_activo_comparador'));
	$criterio->add('pde_oc_agrupacion_tipo_estado.terminal', Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_terminal'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_terminal_comparador'));
	$criterio->add('pde_oc_agrupacion_tipo_estado.observacion', Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_observacion'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_tipo_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id', 'pde_oc_agrupacion_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc_agrupacion.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc_agrupacion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc_agrupacion.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc_agrupacion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc_agrupacion.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_estado', 'pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id', 'pde_oc_agrupacion_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc_agrupacion_tipo_estado');
		$criterio->setCriterios();		
}
?>

