<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeRecepcionTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recepcion_tipo_estado.id', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_id_comparador'));
	$criterio->add('pde_recepcion_tipo_estado.descripcion', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_descripcion_comparador'));
	$criterio->add('pde_recepcion_tipo_estado.codigo', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_codigo'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_codigo_comparador'));
	$criterio->add('pde_recepcion_tipo_estado.activo', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_activo'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_activo_comparador'));
	$criterio->add('pde_recepcion_tipo_estado.terminal', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_terminal'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_terminal_comparador'));
	$criterio->add('pde_recepcion_tipo_estado.afecta_stock', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_afecta_stock'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_afecta_stock_comparador'));
	$criterio->add('pde_recepcion_tipo_estado.observacion', Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_observacion'), Gral::getVars(1, 'buscador_pde_recepcion_tipo_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'pde_recepcion_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recepcion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_recepcion.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_recepcion.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_recepcion.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.id', 'pde_recepcion.pde_recepcion_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_estado', 'pde_recepcion_estado.pde_recepcion_tipo_estado_id', 'pde_recepcion_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pde_recepcion_estado.pan_panol_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recepcion_tipo_estado');
		$criterio->setCriterios();		
}
?>

