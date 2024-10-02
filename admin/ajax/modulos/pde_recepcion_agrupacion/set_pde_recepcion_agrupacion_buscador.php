<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeRecepcionAgrupacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recepcion_agrupacion.id', Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_id'), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_id_comparador'));
	$criterio->add('pde_recepcion_agrupacion.descripcion', Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_descripcion'), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_descripcion_comparador'));
	$criterio->add('pde_recepcion_agrupacion.codigo', Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_codigo'), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_codigo_comparador'));
	$criterio->add('pde_recepcion_agrupacion.nro_comprobante', Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_nro_comprobante'), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_nro_comprobante_comparador'));
	$criterio->add('pde_recepcion_agrupacion.pde_tipo_recepcion_id', Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_pde_tipo_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_pde_tipo_recepcion_id_comparador'));
	$criterio->add('pde_recepcion_agrupacion.pde_centro_recepcion_id', Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_pde_centro_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_pde_centro_recepcion_id_comparador'));
	$criterio->add('pde_recepcion_agrupacion.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_prv_proveedor_id_comparador'));
	$criterio->add('pde_recepcion_agrupacion.fecha_entrega', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_fecha_entrega')), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_fecha_entrega_comparador'));
	$criterio->add('pde_recepcion_agrupacion.observacion', Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_observacion'), Gral::getVars(1, 'buscador_pde_recepcion_agrupacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.pde_recepcion_agrupacion_id', 'pde_recepcion_agrupacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recepcion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_recepcion.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_recepcion.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_recepcion.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recepcion_agrupacion');
		$criterio->setCriterios();		
}
?>

