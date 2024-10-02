<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeRecepcionTipoEstadoFacturacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recepcion_tipo_estado_facturacion.id', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_id'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_id_comparador'));
	$criterio->add('pde_recepcion_tipo_estado_facturacion.descripcion', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_descripcion'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_descripcion_comparador'));
	$criterio->add('pde_recepcion_tipo_estado_facturacion.codigo', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_codigo'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_codigo_comparador'));
	$criterio->add('pde_recepcion_tipo_estado_facturacion.activo', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_activo'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_activo_comparador'));
	$criterio->add('pde_recepcion_tipo_estado_facturacion.terminal', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_terminal'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_terminal_comparador'));
	$criterio->add('pde_recepcion_tipo_estado_facturacion.observacion', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_observacion'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_observacion_comparador'));
	$criterio->add('pde_recepcion_tipo_estado_facturacion.estado', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_estado'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_facturacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'pde_recepcion_tipo_estado_facturacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recepcion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_recepcion.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_recepcion.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_recepcion.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.id', 'pde_recepcion.pde_recepcion_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_estado_facturacion', 'pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id', 'pde_recepcion_tipo_estado_facturacion.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recepcion_tipo_estado_facturacion');
		$criterio->setCriterios();		
}
?>

