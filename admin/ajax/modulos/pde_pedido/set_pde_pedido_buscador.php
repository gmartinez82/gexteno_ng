<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdePedido::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_pedido.id', Gral::getVars(1, 'buscador_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_pedido_id_comparador'));
	$criterio->add('pde_pedido.descripcion', Gral::getVars(1, 'buscador_pde_pedido_descripcion'), Gral::getVars(1, 'buscador_pde_pedido_descripcion_comparador'));
	$criterio->add('pde_pedido.pde_centro_pedido_id', Gral::getVars(1, 'buscador_pde_pedido_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pde_pedido_pde_centro_pedido_id_comparador'));
	$criterio->add('pde_pedido.ins_insumo_id', Gral::getVars(1, 'buscador_pde_pedido_ins_insumo_id'), Gral::getVars(1, 'buscador_pde_pedido_ins_insumo_id_comparador'));
	$criterio->add('pde_pedido.pde_urgencia_id', Gral::getVars(1, 'buscador_pde_pedido_pde_urgencia_id'), Gral::getVars(1, 'buscador_pde_pedido_pde_urgencia_id_comparador'));
	$criterio->add('pde_pedido.pde_tipo_estado_id', Gral::getVars(1, 'buscador_pde_pedido_pde_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_pedido_pde_tipo_estado_id_comparador'));
	$criterio->add('pde_pedido.cantidad', Gral::getVars(1, 'buscador_pde_pedido_cantidad'), Gral::getVars(1, 'buscador_pde_pedido_cantidad_comparador'));
	$criterio->add('pde_pedido.vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_pedido_vencimiento')), Gral::getVars(1, 'buscador_pde_pedido_vencimiento_comparador'));
	$criterio->add('pde_pedido.codigo', Gral::getVars(1, 'buscador_pde_pedido_codigo'), Gral::getVars(1, 'buscador_pde_pedido_codigo_comparador'));
	$criterio->add('pde_pedido.comentario_proveedor', Gral::getVars(1, 'buscador_pde_pedido_comentario_proveedor'), Gral::getVars(1, 'buscador_pde_pedido_comentario_proveedor_comparador'));
	$criterio->add('pde_pedido.nota_publica', Gral::getVars(1, 'buscador_pde_pedido_nota_publica'), Gral::getVars(1, 'buscador_pde_pedido_nota_publica_comparador'));
	$criterio->add('pde_pedido.nota_interna', Gral::getVars(1, 'buscador_pde_pedido_nota_interna'), Gral::getVars(1, 'buscador_pde_pedido_nota_interna_comparador'));
	$criterio->add('pde_pedido.observacion', Gral::getVars(1, 'buscador_pde_pedido_observacion'), Gral::getVars(1, 'buscador_pde_pedido_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_estado', 'pde_estado.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_estado', 'pde_tipo_estado.id', 'pde_estado.pde_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_enviado', 'pde_pedido_enviado.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_pedido_enviado.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_destinatario', 'pde_pedido_destinatario.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_pedido_destinatario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_envio_email', 'pde_pedido_envio_email.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_prv_proveedor', 'pde_pedido_prv_proveedor.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_prv_proveedor_avisado', 'pde_pedido_prv_proveedor_avisado.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_cotizacion.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc.pde_oc_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.id', 'pde_oc.prv_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.pde_pedido_id', 'pde_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.id', 'pde_recepcion.pde_recepcion_agrupacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_pedido');
		$criterio->setCriterios();		
}
?>

