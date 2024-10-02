<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recepcion.id', Gral::getVars(1, 'buscador_pde_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_id_comparador'));
	$criterio->add('pde_recepcion.descripcion', Gral::getVars(1, 'buscador_pde_recepcion_descripcion'), Gral::getVars(1, 'buscador_pde_recepcion_descripcion_comparador'));
	$criterio->add('pde_recepcion.codigo', Gral::getVars(1, 'buscador_pde_recepcion_codigo'), Gral::getVars(1, 'buscador_pde_recepcion_codigo_comparador'));
	$criterio->add('pde_recepcion.nro_comprobante', Gral::getVars(1, 'buscador_pde_recepcion_nro_comprobante'), Gral::getVars(1, 'buscador_pde_recepcion_nro_comprobante_comparador'));
	$criterio->add('pde_recepcion.pde_tipo_recepcion_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_tipo_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_tipo_recepcion_id_comparador'));
	$criterio->add('pde_recepcion.pde_centro_recepcion_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_centro_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_centro_recepcion_id_comparador'));
	$criterio->add('pde_recepcion.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_recepcion_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_recepcion_prv_proveedor_id_comparador'));
	$criterio->add('pde_recepcion.pde_pedido_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_pedido_id_comparador'));
	$criterio->add('pde_recepcion.pde_oc_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_oc_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_oc_id_comparador'));
	$criterio->add('pde_recepcion.ins_marca_id', Gral::getVars(1, 'buscador_pde_recepcion_ins_marca_id'), Gral::getVars(1, 'buscador_pde_recepcion_ins_marca_id_comparador'));
	$criterio->add('pde_recepcion.ins_insumo_id', Gral::getVars(1, 'buscador_pde_recepcion_ins_insumo_id'), Gral::getVars(1, 'buscador_pde_recepcion_ins_insumo_id_comparador'));
	$criterio->add('pde_recepcion.cantidad', Gral::getVars(1, 'buscador_pde_recepcion_cantidad'), Gral::getVars(1, 'buscador_pde_recepcion_cantidad_comparador'));
	$criterio->add('pde_recepcion.fecha_entrega', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_recepcion_fecha_entrega')), Gral::getVars(1, 'buscador_pde_recepcion_fecha_entrega_comparador'));
	$criterio->add('pde_recepcion.vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_recepcion_vencimiento')), Gral::getVars(1, 'buscador_pde_recepcion_vencimiento_comparador'));
	$criterio->add('pde_recepcion.observacion', Gral::getVars(1, 'buscador_pde_recepcion_observacion'), Gral::getVars(1, 'buscador_pde_recepcion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_recepcion_destinatario', 'pde_recepcion_destinatario.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_recepcion_destinatario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_estado', 'pde_recepcion_estado.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion_estado.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion_estado.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pde_recepcion_estado.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('veh_coche', 'veh_coche.id', 'pde_recepcion_estado.veh_coche_id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_chofer', 'ope_chofer.id', 'pde_recepcion_estado.ope_chofer_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recepcion');
		$criterio->setCriterios();		
}
?>

