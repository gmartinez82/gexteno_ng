<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo.id', Gral::getVars(1, 'buscador_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo.ins_categoria_id', Gral::getVars(1, 'buscador_ins_insumo_ins_categoria_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_categoria_id_comparador'));
	$criterio->add('ins_insumo.ins_matriz_id', Gral::getVars(1, 'buscador_ins_insumo_ins_matriz_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_matriz_id_comparador'));
	$criterio->add('ins_insumo.descripcion', Gral::getVars(1, 'buscador_ins_insumo_descripcion'), Gral::getVars(1, 'buscador_ins_insumo_descripcion_comparador'));
	$criterio->add('ins_insumo.ins_marca_id', Gral::getVars(1, 'buscador_ins_insumo_ins_marca_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_marca_id_comparador'));
	$criterio->add('ins_insumo.descripcion_corta', Gral::getVars(1, 'buscador_ins_insumo_descripcion_corta'), Gral::getVars(1, 'buscador_ins_insumo_descripcion_corta_comparador'));
	$criterio->add('ins_insumo.descripcion_web', Gral::getVars(1, 'buscador_ins_insumo_descripcion_web'), Gral::getVars(1, 'buscador_ins_insumo_descripcion_web_comparador'));
	$criterio->add('ins_insumo.codigo', Gral::getVars(1, 'buscador_ins_insumo_codigo'), Gral::getVars(1, 'buscador_ins_insumo_codigo_comparador'));
	$criterio->add('ins_insumo.codigo_marca', Gral::getVars(1, 'buscador_ins_insumo_codigo_marca'), Gral::getVars(1, 'buscador_ins_insumo_codigo_marca_comparador'));
	$criterio->add('ins_insumo.codigo_interno', Gral::getVars(1, 'buscador_ins_insumo_codigo_interno'), Gral::getVars(1, 'buscador_ins_insumo_codigo_interno_comparador'));
	$criterio->add('ins_insumo.codigo_importacion', Gral::getVars(1, 'buscador_ins_insumo_codigo_importacion'), Gral::getVars(1, 'buscador_ins_insumo_codigo_importacion_comparador'));
	$criterio->add('ins_insumo.codigo_barra', Gral::getVars(1, 'buscador_ins_insumo_codigo_barra'), Gral::getVars(1, 'buscador_ins_insumo_codigo_barra_comparador'));
	$criterio->add('ins_insumo.codigo_barra_interno', Gral::getVars(1, 'buscador_ins_insumo_codigo_barra_interno'), Gral::getVars(1, 'buscador_ins_insumo_codigo_barra_interno_comparador'));
	$criterio->add('ins_insumo.url_tienda', Gral::getVars(1, 'buscador_ins_insumo_url_tienda'), Gral::getVars(1, 'buscador_ins_insumo_url_tienda_comparador'));
	$criterio->add('ins_insumo.ins_unidad_medida_id', Gral::getVars(1, 'buscador_ins_insumo_ins_unidad_medida_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_unidad_medida_id_comparador'));
	$criterio->add('ins_insumo.es_comprable', Gral::getVars(1, 'buscador_ins_insumo_es_comprable'), Gral::getVars(1, 'buscador_ins_insumo_es_comprable_comparador'));
	$criterio->add('ins_insumo.es_consumible', Gral::getVars(1, 'buscador_ins_insumo_es_consumible'), Gral::getVars(1, 'buscador_ins_insumo_es_consumible_comparador'));
	$criterio->add('ins_insumo.es_vendible', Gral::getVars(1, 'buscador_ins_insumo_es_vendible'), Gral::getVars(1, 'buscador_ins_insumo_es_vendible_comparador'));
	$criterio->add('ins_insumo.es_fabricable', Gral::getVars(1, 'buscador_ins_insumo_es_fabricable'), Gral::getVars(1, 'buscador_ins_insumo_es_fabricable_comparador'));
	$criterio->add('ins_insumo.es_transformable_origen', Gral::getVars(1, 'buscador_ins_insumo_es_transformable_origen'), Gral::getVars(1, 'buscador_ins_insumo_es_transformable_origen_comparador'));
	$criterio->add('ins_insumo.es_transformable_destino', Gral::getVars(1, 'buscador_ins_insumo_es_transformable_destino'), Gral::getVars(1, 'buscador_ins_insumo_es_transformable_destino_comparador'));
	$criterio->add('ins_insumo.ins_unidad_medida_pedido_id', Gral::getVars(1, 'buscador_ins_insumo_ins_unidad_medida_pedido_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_unidad_medida_pedido_id_comparador'));
	$criterio->add('ins_insumo.ins_tipo_consumo_id', Gral::getVars(1, 'buscador_ins_insumo_ins_tipo_consumo_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_tipo_consumo_id_comparador'));
	$criterio->add('ins_insumo.retornable', Gral::getVars(1, 'buscador_ins_insumo_retornable'), Gral::getVars(1, 'buscador_ins_insumo_retornable_comparador'));
	$criterio->add('ins_insumo.identificable', Gral::getVars(1, 'buscador_ins_insumo_identificable'), Gral::getVars(1, 'buscador_ins_insumo_identificable_comparador'));
	$criterio->add('ins_insumo.control_stock', Gral::getVars(1, 'buscador_ins_insumo_control_stock'), Gral::getVars(1, 'buscador_ins_insumo_control_stock_comparador'));
	$criterio->add('ins_insumo.punto_minimo', Gral::getVars(1, 'buscador_ins_insumo_punto_minimo'), Gral::getVars(1, 'buscador_ins_insumo_punto_minimo_comparador'));
	$criterio->add('ins_insumo.punto_pedido', Gral::getVars(1, 'buscador_ins_insumo_punto_pedido'), Gral::getVars(1, 'buscador_ins_insumo_punto_pedido_comparador'));
	$criterio->add('ins_insumo.punto_maximo', Gral::getVars(1, 'buscador_ins_insumo_punto_maximo'), Gral::getVars(1, 'buscador_ins_insumo_punto_maximo_comparador'));
	$criterio->add('ins_insumo.cantidad_maxima_pedido', Gral::getVars(1, 'buscador_ins_insumo_cantidad_maxima_pedido'), Gral::getVars(1, 'buscador_ins_insumo_cantidad_maxima_pedido_comparador'));
	$criterio->add('ins_insumo.ins_tipo_necesidad_id', Gral::getVars(1, 'buscador_ins_insumo_ins_tipo_necesidad_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_tipo_necesidad_id_comparador'));
	$criterio->add('ins_insumo.ins_nivel_aprovisionamiento_id', Gral::getVars(1, 'buscador_ins_insumo_ins_nivel_aprovisionamiento_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_nivel_aprovisionamiento_id_comparador'));
	$criterio->add('ins_insumo.hereda_marcas', Gral::getVars(1, 'buscador_ins_insumo_hereda_marcas'), Gral::getVars(1, 'buscador_ins_insumo_hereda_marcas_comparador'));
	$criterio->add('ins_insumo.venta_web', Gral::getVars(1, 'buscador_ins_insumo_venta_web'), Gral::getVars(1, 'buscador_ins_insumo_venta_web_comparador'));
	$criterio->add('ins_insumo.venta_mercadolibre', Gral::getVars(1, 'buscador_ins_insumo_venta_mercadolibre'), Gral::getVars(1, 'buscador_ins_insumo_venta_mercadolibre_comparador'));
	$criterio->add('ins_insumo.venta_mayorista', Gral::getVars(1, 'buscador_ins_insumo_venta_mayorista'), Gral::getVars(1, 'buscador_ins_insumo_venta_mayorista_comparador'));
	$criterio->add('ins_insumo.gral_tipo_iva_venta', Gral::getVars(1, 'buscador_ins_insumo_gral_tipo_iva_venta'), Gral::getVars(1, 'buscador_ins_insumo_gral_tipo_iva_venta_comparador'));
	$criterio->add('ins_insumo.gral_tipo_iva_venta_z', Gral::getVars(1, 'buscador_ins_insumo_gral_tipo_iva_venta_z'), Gral::getVars(1, 'buscador_ins_insumo_gral_tipo_iva_venta_z_comparador'));
	$criterio->add('ins_insumo.gral_tipo_iva_compra', Gral::getVars(1, 'buscador_ins_insumo_gral_tipo_iva_compra'), Gral::getVars(1, 'buscador_ins_insumo_gral_tipo_iva_compra_comparador'));
	$criterio->add('ins_insumo.gral_tipo_iva_compra_z', Gral::getVars(1, 'buscador_ins_insumo_gral_tipo_iva_compra_z'), Gral::getVars(1, 'buscador_ins_insumo_gral_tipo_iva_compra_z_comparador'));
	$criterio->add('ins_insumo.proporcion_iva', Gral::getVars(1, 'buscador_ins_insumo_proporcion_iva'), Gral::getVars(1, 'buscador_ins_insumo_proporcion_iva_comparador'));
	$criterio->add('ins_insumo.ins_tipo_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_ins_tipo_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_tipo_insumo_id_comparador'));
	$criterio->add('ins_insumo.ins_tipo_fabricante_id', Gral::getVars(1, 'buscador_ins_insumo_ins_tipo_fabricante_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_tipo_fabricante_id_comparador'));
	$criterio->add('ins_insumo.notas_internas', Gral::getVars(1, 'buscador_ins_insumo_notas_internas'), Gral::getVars(1, 'buscador_ins_insumo_notas_internas_comparador'));
	$criterio->add('ins_insumo.observacion', Gral::getVars(1, 'buscador_ins_insumo_observacion'), Gral::getVars(1, 'buscador_ins_insumo_observacion_comparador'));
	$criterio->add('ins_insumo.datos_migracion', Gral::getVars(1, 'buscador_ins_insumo_datos_migracion'), Gral::getVars(1, 'buscador_ins_insumo_datos_migracion_comparador'));
	$criterio->add('ins_insumo.claves', Gral::getVars(1, 'buscador_ins_insumo_claves'), Gral::getVars(1, 'buscador_ins_insumo_claves_comparador'));
	$criterio->add('ins_insumo.claves_atributos', Gral::getVars(1, 'buscador_ins_insumo_claves_atributos'), Gral::getVars(1, 'buscador_ins_insumo_claves_atributos_comparador'));
	$criterio->add('ins_insumo.claves_tienda', Gral::getVars(1, 'buscador_ins_insumo_claves_tienda'), Gral::getVars(1, 'buscador_ins_insumo_claves_tienda_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_enviado', 'ins_insumo_enviado.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_imagen', 'ins_insumo_imagen.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_imagen', 'ins_tipo_imagen.id', 'ins_insumo_imagen.ins_tipo_imagen_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_prv_proveedor', 'ins_insumo_prv_proveedor.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_prv_proveedor.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_ins_marca', 'ins_insumo_ins_marca.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'ins_insumo_ins_marca.ins_marca_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_instancia', 'ins_insumo_instancia.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'ins_insumo_bulto.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_pan_panol', 'ins_insumo_pan_panol.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_insumo_pan_panol.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_piso', 'pan_ubi_piso.id', 'ins_insumo_pan_panol.pan_ubi_piso_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_pasillo', 'pan_ubi_pasillo.id', 'ins_insumo_pan_panol.pan_ubi_pasillo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_estante', 'pan_ubi_estante.id', 'ins_insumo_pan_panol.pan_ubi_estante_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_altura', 'pan_ubi_altura.id', 'ins_insumo_pan_panol.pan_ubi_altura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_casillero', 'pan_ubi_casillero.id', 'ins_insumo_pan_panol.pan_ubi_casillero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_celda', 'pan_ubi_celda.id', 'ins_insumo_pan_panol.pan_ubi_celda_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_clasificacion', 'ins_clasificacion.id', 'ins_insumo_pan_panol.ins_clasificacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_tipo_configuracion', 'ins_stock_tipo_configuracion.id', 'ins_insumo_pan_panol.ins_stock_tipo_configuracion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_veh_modelo', 'ins_insumo_veh_modelo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('veh_modelo', 'veh_modelo.id', 'ins_insumo_veh_modelo.veh_modelo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_composicion', 'ins_insumo_composicion.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_vinculado', 'ins_insumo_vinculado.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_similar', 'ins_insumo_similar.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_venta_web_info', 'ins_venta_web_info.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_venta_ml_info', 'ins_venta_ml_info.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_category', 'ml_category.id', 'ins_venta_ml_info.ml_category_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_listing_type', 'ml_listing_type.id', 'ins_venta_ml_info.ml_listing_type_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_condition', 'ml_condition.id', 'ins_venta_ml_info.ml_condition_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_shipping_mode', 'ml_shipping_mode.id', 'ins_venta_ml_info.ml_shipping_mode_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_item_status', 'ml_item_status.id', 'ins_venta_ml_info.ml_item_status_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion', 'prv_importacion.id', 'ins_insumo_costo.prv_importacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion', 'ins_stock_transformacion.id', 'ins_insumo_costo.ins_stock_transformacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'ins_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_destino_transformacion', 'ins_insumo_destino_transformacion.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_ins_atributo', 'ins_insumo_ins_atributo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_atributo', 'ins_atributo.id', 'ins_insumo_ins_atributo.ins_atributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida_atributo', 'ins_unidad_medida_atributo.id', 'ins_insumo_ins_atributo.ins_unidad_medida_atributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion_destino', 'ins_stock_transformacion_destino.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'prv_insumo.ins_matriz_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'prv_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_vta_factura_vta_orden_venta', 'vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_orden_venta', 'vta_factura_vta_orden_venta.id', 'vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_orden_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_vta_orden_venta', 'vta_remito_vta_orden_venta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.id', 'vta_remito_vta_orden_venta.vta_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_vta_orden_venta.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_ins_insumo', 'vta_politica_descuento_ins_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_movimiento', 'ins_stock_movimiento.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.id', 'ins_stock_movimiento.pdi_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'ins_stock_movimiento.pde_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_resumen', 'ins_stock_resumen.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_resumen_tipo_estado', 'ins_stock_resumen_tipo_estado.id', 'ins_stock_resumen.ins_stock_resumen_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_urgencia', 'pdi_urgencia.id', 'pdi_pedido.pdi_urgencia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_pedido.pdi_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion', 'pdi_pedido_agrupacion.id', 'pdi_pedido.pdi_pedido_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion_item', 'pdi_pedido_agrupacion_item.id', 'pdi_pedido.pdi_pedido_agrupacion_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_pedido.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_urgencia', 'pde_urgencia.id', 'pde_pedido.pde_urgencia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_estado', 'pde_tipo_estado.id', 'pde_pedido.pde_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_item', 'pde_oc_agrupacion_item.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc_agrupacion_item.pde_oc_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc_agrupacion_item.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc_agrupacion_item.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc_agrupacion_item.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.id', 'pde_recepcion.pde_recepcion_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_oc', 'pde_factura_pde_oc.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_pde_oc.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_recepcion', 'pde_factura_pde_recepcion.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_recepcion', 'pde_nota_credito_pde_factura_pde_recepcion.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_pde_factura_pde_recepcion.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_oc', 'pde_nota_credito_pde_factura_pde_oc.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_vta_orden_venta', 'vta_ajuste_debe_vta_orden_venta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.id', 'vta_ajuste_debe_vta_orden_venta.vta_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta', 'vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber', 'vta_ajuste_haber.id', 'vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta.vta_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_vta_orden_venta', 'vta_remito_ajuste_vta_orden_venta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste', 'vta_remito_ajuste.id', 'vta_remito_ajuste_vta_orden_venta.vta_remito_ajuste_id', 'LEFT JOIN');
	$criterio->addRealJoin('sld_slider', 'sld_slider.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo', 'prd_orden_trabajo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'prd_orden_trabajo.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_tipo_origen', 'prd_tipo_origen.id', 'prd_orden_trabajo.prd_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_prioridad', 'prd_prioridad.id', 'prd_orden_trabajo.prd_prioridad_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_tipo_estado', 'prd_orden_trabajo_tipo_estado.id', 'prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo');
		$criterio->setCriterios();		
}
?>

