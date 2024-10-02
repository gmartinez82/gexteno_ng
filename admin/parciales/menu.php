<?php
$seleccionado = '';
$path = '/cn/ecomm/admin/'; /* Local */
//$path = '/intranet/admin/'; /* Online */

switch($_SERVER['PHP_SELF']){

	/* Inicio */
	case $path.'index.php':
		$seleccionado = 'inicio';
	break;
	
		/* UsGrupo */
		case $path.'us_grupo_adm.php':
		case $path.'us_grupo_alta.php':
			$seleccionado = 'us_grupos';
		break;
		
		/* UsAgrupador */
		case $path.'us_agrupador_adm.php':
		case $path.'us_agrupador_alta.php':
			$seleccionado = 'us_agrupadors';
		break;
		
		/* UsCredencial */
		case $path.'us_credencial_adm.php':
		case $path.'us_credencial_alta.php':
			$seleccionado = 'us_credencials';
		break;
		
		/* UsAgrupado */
		case $path.'us_agrupado_adm.php':
		case $path.'us_agrupado_alta.php':
			$seleccionado = 'us_agrupados';
		break;
		
		/* UsAcreditado */
		case $path.'us_acreditado_adm.php':
		case $path.'us_acreditado_alta.php':
			$seleccionado = 'us_acreditados';
		break;
		
		/* UsUsuario */
		case $path.'us_usuario_adm.php':
		case $path.'us_usuario_alta.php':
			$seleccionado = 'us_usuarios';
		break;
		
		/* UsUsuarioDato */
		case $path.'us_usuario_dato_adm.php':
		case $path.'us_usuario_dato_alta.php':
			$seleccionado = 'us_usuario_datos';
		break;
		
		/* UsMensaje */
		case $path.'us_mensaje_adm.php':
		case $path.'us_mensaje_alta.php':
			$seleccionado = 'us_mensajes';
		break;
		
		/* UsMemo */
		case $path.'us_memo_adm.php':
		case $path.'us_memo_alta.php':
			$seleccionado = 'us_memos';
		break;
		
		/* UsMemoTipoEstado */
		case $path.'us_memo_tipo_estado_adm.php':
		case $path.'us_memo_tipo_estado_alta.php':
			$seleccionado = 'us_memo_tipo_estados';
		break;
		
		/* UsMemoEstado */
		case $path.'us_memo_estado_adm.php':
		case $path.'us_memo_estado_alta.php':
			$seleccionado = 'us_memo_estados';
		break;
		
		/* UsMemoTipo */
		case $path.'us_memo_tipo_adm.php':
		case $path.'us_memo_tipo_alta.php':
			$seleccionado = 'us_memo_tipos';
		break;
		
		/* UsClave */
		case $path.'us_clave_adm.php':
		case $path.'us_clave_alta.php':
			$seleccionado = 'us_claves';
		break;
		
		/* UsLogin */
		case $path.'us_login_adm.php':
		case $path.'us_login_alta.php':
			$seleccionado = 'us_logins';
		break;
		
		/* UsNavegacion */
		case $path.'us_navegacion_adm.php':
		case $path.'us_navegacion_alta.php':
			$seleccionado = 'us_navegacions';
		break;
		
		/* XmlLenguajeCodigo */
		case $path.'xml_lenguaje_codigo_adm.php':
		case $path.'xml_lenguaje_codigo_alta.php':
			$seleccionado = 'xml_lenguaje_codigos';
		break;
		
		/* XmlLenguajeTraduccion */
		case $path.'xml_lenguaje_traduccion_adm.php':
		case $path.'xml_lenguaje_traduccion_alta.php':
			$seleccionado = 'xml_lenguaje_traduccions';
		break;
		
		/* GeoPais */
		case $path.'geo_pais_adm.php':
		case $path.'geo_pais_alta.php':
			$seleccionado = 'geo_paiss';
		break;
		
		/* GeoProvincia */
		case $path.'geo_provincia_adm.php':
		case $path.'geo_provincia_alta.php':
			$seleccionado = 'geo_provincias';
		break;
		
		/* GeoLocalidad */
		case $path.'geo_localidad_adm.php':
		case $path.'geo_localidad_alta.php':
			$seleccionado = 'geo_localidads';
		break;
		
		/* ConfVariable */
		case $path.'conf_variable_adm.php':
		case $path.'conf_variable_alta.php':
			$seleccionado = 'conf_variables';
		break;
		
		/* ConfCategoria */
		case $path.'conf_categoria_adm.php':
		case $path.'conf_categoria_alta.php':
			$seleccionado = 'conf_categorias';
		break;
		
		/* GenArbolTipo */
		case $path.'gen_arbol_tipo_adm.php':
		case $path.'gen_arbol_tipo_alta.php':
			$seleccionado = 'gen_arbol_tipos';
		break;
		
		/* GenArbol */
		case $path.'gen_arbol_adm.php':
		case $path.'gen_arbol_alta.php':
			$seleccionado = 'gen_arbols';
		break;
		
		/* GenMenuItem */
		case $path.'gen_menu_item_adm.php':
		case $path.'gen_menu_item_alta.php':
			$seleccionado = 'gen_menu_items';
		break;
		
		/* GenWidgetSector */
		case $path.'gen_widget_sector_adm.php':
		case $path.'gen_widget_sector_alta.php':
			$seleccionado = 'gen_widget_sectors';
		break;
		
		/* GenWidget */
		case $path.'gen_widget_adm.php':
		case $path.'gen_widget_alta.php':
			$seleccionado = 'gen_widgets';
		break;
		
		/* GralLenguaje */
		case $path.'gral_lenguaje_adm.php':
		case $path.'gral_lenguaje_alta.php':
			$seleccionado = 'gral_lenguajes';
		break;
		
		/* GralSiNo */
		case $path.'gral_si_no_adm.php':
		case $path.'gral_si_no_alta.php':
			$seleccionado = 'gral_si_nos';
		break;
		
		/* GralTipoIva */
		case $path.'gral_tipo_iva_adm.php':
		case $path.'gral_tipo_iva_alta.php':
			$seleccionado = 'gral_tipo_ivas';
		break;
		
		/* GralTipoIvaWsFeParamTipoIva */
		case $path.'gral_tipo_iva_ws_fe_param_tipo_iva_adm.php':
		case $path.'gral_tipo_iva_ws_fe_param_tipo_iva_alta.php':
			$seleccionado = 'gral_tipo_iva_ws_fe_param_tipo_ivas';
		break;
		
		/* GralTipoDocumento */
		case $path.'gral_tipo_documento_adm.php':
		case $path.'gral_tipo_documento_alta.php':
			$seleccionado = 'gral_tipo_documentos';
		break;
		
		/* GralTipoDocumentoWsFeParamTipoDocumento */
		case $path.'gral_tipo_documento_ws_fe_param_tipo_documento_adm.php':
		case $path.'gral_tipo_documento_ws_fe_param_tipo_documento_alta.php':
			$seleccionado = 'gral_tipo_documento_ws_fe_param_tipo_documentos';
		break;
		
		/* GralBanco */
		case $path.'gral_banco_adm.php':
		case $path.'gral_banco_alta.php':
			$seleccionado = 'gral_bancos';
		break;
		
		/* GralMes */
		case $path.'gral_mes_adm.php':
		case $path.'gral_mes_alta.php':
			$seleccionado = 'gral_mess';
		break;
		
		/* GralMedioPago */
		case $path.'gral_medio_pago_adm.php':
		case $path.'gral_medio_pago_alta.php':
			$seleccionado = 'gral_medio_pagos';
		break;
		
		/* GralCondicionIva */
		case $path.'gral_condicion_iva_adm.php':
		case $path.'gral_condicion_iva_alta.php':
			$seleccionado = 'gral_condicion_ivas';
		break;
		
		/* GralCondicionIvaVtaTipoFactura */
		case $path.'gral_condicion_iva_vta_tipo_factura_adm.php':
		case $path.'gral_condicion_iva_vta_tipo_factura_alta.php':
			$seleccionado = 'gral_condicion_iva_vta_tipo_facturas';
		break;
		
		/* GralCondicionIvaVtaTipoNotaCredito */
		case $path.'gral_condicion_iva_vta_tipo_nota_credito_adm.php':
		case $path.'gral_condicion_iva_vta_tipo_nota_credito_alta.php':
			$seleccionado = 'gral_condicion_iva_vta_tipo_nota_creditos';
		break;
		
		/* GralCondicionIvaVtaTipoNotaDebito */
		case $path.'gral_condicion_iva_vta_tipo_nota_debito_adm.php':
		case $path.'gral_condicion_iva_vta_tipo_nota_debito_alta.php':
			$seleccionado = 'gral_condicion_iva_vta_tipo_nota_debitos';
		break;
		
		/* GralCondicionIvaVtaTipoRecibo */
		case $path.'gral_condicion_iva_vta_tipo_recibo_adm.php':
		case $path.'gral_condicion_iva_vta_tipo_recibo_alta.php':
			$seleccionado = 'gral_condicion_iva_vta_tipo_recibos';
		break;
		
		/* GralCondicionIvaPdeTipoFactura */
		case $path.'gral_condicion_iva_pde_tipo_factura_adm.php':
		case $path.'gral_condicion_iva_pde_tipo_factura_alta.php':
			$seleccionado = 'gral_condicion_iva_pde_tipo_facturas';
		break;
		
		/* GralCondicionIvaPdeTipoNotaCredito */
		case $path.'gral_condicion_iva_pde_tipo_nota_credito_adm.php':
		case $path.'gral_condicion_iva_pde_tipo_nota_credito_alta.php':
			$seleccionado = 'gral_condicion_iva_pde_tipo_nota_creditos';
		break;
		
		/* GralCondicionIvaPdeTipoNotaDebito */
		case $path.'gral_condicion_iva_pde_tipo_nota_debito_adm.php':
		case $path.'gral_condicion_iva_pde_tipo_nota_debito_alta.php':
			$seleccionado = 'gral_condicion_iva_pde_tipo_nota_debitos';
		break;
		
		/* GralCondicionIvaPdeTipoRecibo */
		case $path.'gral_condicion_iva_pde_tipo_recibo_adm.php':
		case $path.'gral_condicion_iva_pde_tipo_recibo_alta.php':
			$seleccionado = 'gral_condicion_iva_pde_tipo_recibos';
		break;
		
		/* GralTipoPersoneria */
		case $path.'gral_tipo_personeria_adm.php':
		case $path.'gral_tipo_personeria_alta.php':
			$seleccionado = 'gral_tipo_personerias';
		break;
		
		/* GralEmpresa */
		case $path.'gral_empresa_adm.php':
		case $path.'gral_empresa_alta.php':
			$seleccionado = 'gral_empresas';
		break;
		
		/* GralEmpresaTransportadora */
		case $path.'gral_empresa_transportadora_adm.php':
		case $path.'gral_empresa_transportadora_alta.php':
			$seleccionado = 'gral_empresa_transportadoras';
		break;
		
		/* GralActividad */
		case $path.'gral_actividad_adm.php':
		case $path.'gral_actividad_alta.php':
			$seleccionado = 'gral_actividads';
		break;
		
		/* GralEscenario */
		case $path.'gral_escenario_adm.php':
		case $path.'gral_escenario_alta.php':
			$seleccionado = 'gral_escenarios';
		break;
		
		/* GralCajaTipo */
		case $path.'gral_caja_tipo_adm.php':
		case $path.'gral_caja_tipo_alta.php':
			$seleccionado = 'gral_caja_tipos';
		break;
		
		/* GralCaja */
		case $path.'gral_caja_adm.php':
		case $path.'gral_caja_alta.php':
			$seleccionado = 'gral_cajas';
		break;
		
		/* GralFpMedioPago */
		case $path.'gral_fp_medio_pago_adm.php':
		case $path.'gral_fp_medio_pago_alta.php':
			$seleccionado = 'gral_fp_medio_pagos';
		break;
		
		/* GralFpCuota */
		case $path.'gral_fp_cuota_adm.php':
		case $path.'gral_fp_cuota_alta.php':
			$seleccionado = 'gral_fp_cuotas';
		break;
		
		/* GralFpAgrupacion */
		case $path.'gral_fp_agrupacion_adm.php':
		case $path.'gral_fp_agrupacion_alta.php':
			$seleccionado = 'gral_fp_agrupacions';
		break;
		
		/* GralFpFormaPago */
		case $path.'gral_fp_forma_pago_adm.php':
		case $path.'gral_fp_forma_pago_alta.php':
			$seleccionado = 'gral_fp_forma_pagos';
		break;
		
		/* InsCategoria */
		case $path.'ins_categoria_adm.php':
		case $path.'ins_categoria_alta.php':
			$seleccionado = 'ins_categorias';
		break;
		
		/* InsInsumo */
		case $path.'ins_insumo_adm.php':
		case $path.'ins_insumo_alta.php':
			$seleccionado = 'ins_insumos';
		break;
		
		/* InsTipoInsumo */
		case $path.'ins_tipo_insumo_adm.php':
		case $path.'ins_tipo_insumo_alta.php':
			$seleccionado = 'ins_tipo_insumos';
		break;
		
		/* InsTipoFabricante */
		case $path.'ins_tipo_fabricante_adm.php':
		case $path.'ins_tipo_fabricante_alta.php':
			$seleccionado = 'ins_tipo_fabricantes';
		break;
		
		/* InsInsumoEnviado */
		case $path.'ins_insumo_enviado_adm.php':
		case $path.'ins_insumo_enviado_alta.php':
			$seleccionado = 'ins_insumo_enviados';
		break;
		
		/* InsInsumoImagen */
		case $path.'ins_insumo_imagen_adm.php':
		case $path.'ins_insumo_imagen_alta.php':
			$seleccionado = 'ins_insumo_imagens';
		break;
		
		/* InsTipoImagen */
		case $path.'ins_tipo_imagen_adm.php':
		case $path.'ins_tipo_imagen_alta.php':
			$seleccionado = 'ins_tipo_imagens';
		break;
		
		/* InsInsumoPrvProveedor */
		case $path.'ins_insumo_prv_proveedor_adm.php':
		case $path.'ins_insumo_prv_proveedor_alta.php':
			$seleccionado = 'ins_insumo_prv_proveedors';
		break;
		
		/* InsInsumoInsMarca */
		case $path.'ins_insumo_ins_marca_adm.php':
		case $path.'ins_insumo_ins_marca_alta.php':
			$seleccionado = 'ins_insumo_ins_marcas';
		break;
		
		/* InsInsumoInstancia */
		case $path.'ins_insumo_instancia_adm.php':
		case $path.'ins_insumo_instancia_alta.php':
			$seleccionado = 'ins_insumo_instancias';
		break;
		
		/* InsInsumoPanPanol */
		case $path.'ins_insumo_pan_panol_adm.php':
		case $path.'ins_insumo_pan_panol_alta.php':
			$seleccionado = 'ins_insumo_pan_panols';
		break;
		
		/* InsInsumoVehModelo */
		case $path.'ins_insumo_veh_modelo_adm.php':
		case $path.'ins_insumo_veh_modelo_alta.php':
			$seleccionado = 'ins_insumo_veh_modelos';
		break;
		
		/* InsInsumoVinculado */
		case $path.'ins_insumo_vinculado_adm.php':
		case $path.'ins_insumo_vinculado_alta.php':
			$seleccionado = 'ins_insumo_vinculados';
		break;
		
		/* InsInsumoSimilar */
		case $path.'ins_insumo_similar_adm.php':
		case $path.'ins_insumo_similar_alta.php':
			$seleccionado = 'ins_insumo_similars';
		break;
		
		/* InsVentaWebInfo */
		case $path.'ins_venta_web_info_adm.php':
		case $path.'ins_venta_web_info_alta.php':
			$seleccionado = 'ins_venta_web_infos';
		break;
		
		/* InsVentaMlInfo */
		case $path.'ins_venta_ml_info_adm.php':
		case $path.'ins_venta_ml_info_alta.php':
			$seleccionado = 'ins_venta_ml_infos';
		break;
		
		/* InsVentaMlInfoMlAttribute */
		case $path.'ins_venta_ml_info_ml_attribute_adm.php':
		case $path.'ins_venta_ml_info_ml_attribute_alta.php':
			$seleccionado = 'ins_venta_ml_info_ml_attributes';
		break;
		
		/* InsInsumoCosto */
		case $path.'ins_insumo_costo_adm.php':
		case $path.'ins_insumo_costo_alta.php':
			$seleccionado = 'ins_insumo_costos';
		break;
		
		/* InsTipoListaPrecio */
		case $path.'ins_tipo_lista_precio_adm.php':
		case $path.'ins_tipo_lista_precio_alta.php':
			$seleccionado = 'ins_tipo_lista_precios';
		break;
		
		/* InsListaPrecio */
		case $path.'ins_lista_precio_adm.php':
		case $path.'ins_lista_precio_alta.php':
			$seleccionado = 'ins_lista_precios';
		break;
		
		/* InsEtiqueta */
		case $path.'ins_etiqueta_adm.php':
		case $path.'ins_etiqueta_alta.php':
			$seleccionado = 'ins_etiquetas';
		break;
		
		/* InsInsumoInsEtiqueta */
		case $path.'ins_insumo_ins_etiqueta_adm.php':
		case $path.'ins_insumo_ins_etiqueta_alta.php':
			$seleccionado = 'ins_insumo_ins_etiquetas';
		break;
		
		/* InsInsumoDestinoTransformacion */
		case $path.'ins_insumo_destino_transformacion_adm.php':
		case $path.'ins_insumo_destino_transformacion_alta.php':
			$seleccionado = 'ins_insumo_destino_transformacions';
		break;
		
		/* InsClasificacion */
		case $path.'ins_clasificacion_adm.php':
		case $path.'ins_clasificacion_alta.php':
			$seleccionado = 'ins_clasificacions';
		break;
		
		/* InsMarca */
		case $path.'ins_marca_adm.php':
		case $path.'ins_marca_alta.php':
			$seleccionado = 'ins_marcas';
		break;
		
		/* InsCategoriaInsMarca */
		case $path.'ins_categoria_ins_marca_adm.php':
		case $path.'ins_categoria_ins_marca_alta.php':
			$seleccionado = 'ins_categoria_ins_marcas';
		break;
		
		/* InsAtributo */
		case $path.'ins_atributo_adm.php':
		case $path.'ins_atributo_alta.php':
			$seleccionado = 'ins_atributos';
		break;
		
		/* InsInsumoInsAtributo */
		case $path.'ins_insumo_ins_atributo_adm.php':
		case $path.'ins_insumo_ins_atributo_alta.php':
			$seleccionado = 'ins_insumo_ins_atributos';
		break;
		
		/* InsUnidadMedida */
		case $path.'ins_unidad_medida_adm.php':
		case $path.'ins_unidad_medida_alta.php':
			$seleccionado = 'ins_unidad_medidas';
		break;
		
		/* InsUnidadMedidaAtributo */
		case $path.'ins_unidad_medida_atributo_adm.php':
		case $path.'ins_unidad_medida_atributo_alta.php':
			$seleccionado = 'ins_unidad_medida_atributos';
		break;
		
		/* InsUnidadMedidaPedido */
		case $path.'ins_unidad_medida_pedido_adm.php':
		case $path.'ins_unidad_medida_pedido_alta.php':
			$seleccionado = 'ins_unidad_medida_pedidos';
		break;
		
		/* InsTipoNecesidad */
		case $path.'ins_tipo_necesidad_adm.php':
		case $path.'ins_tipo_necesidad_alta.php':
			$seleccionado = 'ins_tipo_necesidads';
		break;
		
		/* InsNivelAprovisionamiento */
		case $path.'ins_nivel_aprovisionamiento_adm.php':
		case $path.'ins_nivel_aprovisionamiento_alta.php':
			$seleccionado = 'ins_nivel_aprovisionamientos';
		break;
		
		/* InsTipoConsumo */
		case $path.'ins_tipo_consumo_adm.php':
		case $path.'ins_tipo_consumo_alta.php':
			$seleccionado = 'ins_tipo_consumos';
		break;
		
		/* InsMatriz */
		case $path.'ins_matriz_adm.php':
		case $path.'ins_matriz_alta.php':
			$seleccionado = 'ins_matrizs';
		break;
		
		/* InsStockTransformacion */
		case $path.'ins_stock_transformacion_adm.php':
		case $path.'ins_stock_transformacion_alta.php':
			$seleccionado = 'ins_stock_transformacions';
		break;
		
		/* InsStockTransformacionDestino */
		case $path.'ins_stock_transformacion_destino_adm.php':
		case $path.'ins_stock_transformacion_destino_alta.php':
			$seleccionado = 'ins_stock_transformacion_destinos';
		break;
		
		/* PrvGrupo */
		case $path.'prv_grupo_adm.php':
		case $path.'prv_grupo_alta.php':
			$seleccionado = 'prv_grupos';
		break;
		
		/* PrvCategoria */
		case $path.'prv_categoria_adm.php':
		case $path.'prv_categoria_alta.php':
			$seleccionado = 'prv_categorias';
		break;
		
		/* PrvProveedor */
		case $path.'prv_proveedor_adm.php':
		case $path.'prv_proveedor_alta.php':
			$seleccionado = 'prv_proveedors';
		break;
		
		/* PrvPreventista */
		case $path.'prv_preventista_adm.php':
		case $path.'prv_preventista_alta.php':
			$seleccionado = 'prv_preventistas';
		break;
		
		/* PrvConvenioDescuento */
		case $path.'prv_convenio_descuento_adm.php':
		case $path.'prv_convenio_descuento_alta.php':
			$seleccionado = 'prv_convenio_descuentos';
		break;
		
		/* PrvDescuentoFinanciero */
		case $path.'prv_descuento_financiero_adm.php':
		case $path.'prv_descuento_financiero_alta.php':
			$seleccionado = 'prv_descuento_financieros';
		break;
		
		/* PrvProveedorUsUsuario */
		case $path.'prv_proveedor_us_usuario_adm.php':
		case $path.'prv_proveedor_us_usuario_alta.php':
			$seleccionado = 'prv_proveedor_us_usuarios';
		break;
		
		/* PrvTelefono */
		case $path.'prv_telefono_adm.php':
		case $path.'prv_telefono_alta.php':
			$seleccionado = 'prv_telefonos';
		break;
		
		/* PrvTelefonoTipo */
		case $path.'prv_telefono_tipo_adm.php':
		case $path.'prv_telefono_tipo_alta.php':
			$seleccionado = 'prv_telefono_tipos';
		break;
		
		/* PrvEmail */
		case $path.'prv_email_adm.php':
		case $path.'prv_email_alta.php':
			$seleccionado = 'prv_emails';
		break;
		
		/* PrvDomicilio */
		case $path.'prv_domicilio_adm.php':
		case $path.'prv_domicilio_alta.php':
			$seleccionado = 'prv_domicilios';
		break;
		
		/* PrvRubro */
		case $path.'prv_rubro_adm.php':
		case $path.'prv_rubro_alta.php':
			$seleccionado = 'prv_rubros';
		break;
		
		/* PrvProveedorPrvRubro */
		case $path.'prv_proveedor_prv_rubro_adm.php':
		case $path.'prv_proveedor_prv_rubro_alta.php':
			$seleccionado = 'prv_proveedor_prv_rubros';
		break;
		
		/* PrvInsumo */
		case $path.'prv_insumo_adm.php':
		case $path.'prv_insumo_alta.php':
			$seleccionado = 'prv_insumos';
		break;
		
		/* PrvInsumoCosto */
		case $path.'prv_insumo_costo_adm.php':
		case $path.'prv_insumo_costo_alta.php':
			$seleccionado = 'prv_insumo_costos';
		break;
		
		/* PrvImportacion */
		case $path.'prv_importacion_adm.php':
		case $path.'prv_importacion_alta.php':
			$seleccionado = 'prv_importacions';
		break;
		
		/* PrvImportacionEstado */
		case $path.'prv_importacion_estado_adm.php':
		case $path.'prv_importacion_estado_alta.php':
			$seleccionado = 'prv_importacion_estados';
		break;
		
		/* PrvImportacionTipoEstado */
		case $path.'prv_importacion_tipo_estado_adm.php':
		case $path.'prv_importacion_tipo_estado_alta.php':
			$seleccionado = 'prv_importacion_tipo_estados';
		break;
		
		/* PrvImportacionResultado */
		case $path.'prv_importacion_resultado_adm.php':
		case $path.'prv_importacion_resultado_alta.php':
			$seleccionado = 'prv_importacion_resultados';
		break;
		
		/* VehMarca */
		case $path.'veh_marca_adm.php':
		case $path.'veh_marca_alta.php':
			$seleccionado = 'veh_marcas';
		break;
		
		/* VehModelo */
		case $path.'veh_modelo_adm.php':
		case $path.'veh_modelo_alta.php':
			$seleccionado = 'veh_modelos';
		break;
		
		/* VehCoche */
		case $path.'veh_coche_adm.php':
		case $path.'veh_coche_alta.php':
			$seleccionado = 'veh_coches';
		break;
		
		/* VehCocheImagen */
		case $path.'veh_coche_imagen_adm.php':
		case $path.'veh_coche_imagen_alta.php':
			$seleccionado = 'veh_coche_imagens';
		break;
		
		/* PanPanol */
		case $path.'pan_panol_adm.php':
		case $path.'pan_panol_alta.php':
			$seleccionado = 'pan_panols';
		break;
		
		/* PanPanolUsUsuario */
		case $path.'pan_panol_us_usuario_adm.php':
		case $path.'pan_panol_us_usuario_alta.php':
			$seleccionado = 'pan_panol_us_usuarios';
		break;
		
		/* PanTipoPanol */
		case $path.'pan_tipo_panol_adm.php':
		case $path.'pan_tipo_panol_alta.php':
			$seleccionado = 'pan_tipo_panols';
		break;
		
		/* PanUbiPiso */
		case $path.'pan_ubi_piso_adm.php':
		case $path.'pan_ubi_piso_alta.php':
			$seleccionado = 'pan_ubi_pisos';
		break;
		
		/* PanUbiPasillo */
		case $path.'pan_ubi_pasillo_adm.php':
		case $path.'pan_ubi_pasillo_alta.php':
			$seleccionado = 'pan_ubi_pasillos';
		break;
		
		/* PanUbiEstante */
		case $path.'pan_ubi_estante_adm.php':
		case $path.'pan_ubi_estante_alta.php':
			$seleccionado = 'pan_ubi_estantes';
		break;
		
		/* PanUbiAltura */
		case $path.'pan_ubi_altura_adm.php':
		case $path.'pan_ubi_altura_alta.php':
			$seleccionado = 'pan_ubi_alturas';
		break;
		
		/* PanUbiCasillero */
		case $path.'pan_ubi_casillero_adm.php':
		case $path.'pan_ubi_casillero_alta.php':
			$seleccionado = 'pan_ubi_casilleros';
		break;
		
		/* PanUbiCelda */
		case $path.'pan_ubi_celda_adm.php':
		case $path.'pan_ubi_celda_alta.php':
			$seleccionado = 'pan_ubi_celdas';
		break;
		
		/* CliCliente */
		case $path.'cli_cliente_adm.php':
		case $path.'cli_cliente_alta.php':
			$seleccionado = 'cli_clientes';
		break;
		
		/* CliTelefono */
		case $path.'cli_telefono_adm.php':
		case $path.'cli_telefono_alta.php':
			$seleccionado = 'cli_telefonos';
		break;
		
		/* CliTelefonoTipo */
		case $path.'cli_telefono_tipo_adm.php':
		case $path.'cli_telefono_tipo_alta.php':
			$seleccionado = 'cli_telefono_tipos';
		break;
		
		/* CliEmail */
		case $path.'cli_email_adm.php':
		case $path.'cli_email_alta.php':
			$seleccionado = 'cli_emails';
		break;
		
		/* CliDomicilio */
		case $path.'cli_domicilio_adm.php':
		case $path.'cli_domicilio_alta.php':
			$seleccionado = 'cli_domicilios';
		break;
		
		/* CliGrupo */
		case $path.'cli_grupo_adm.php':
		case $path.'cli_grupo_alta.php':
			$seleccionado = 'cli_grupos';
		break;
		
		/* CliCategoria */
		case $path.'cli_categoria_adm.php':
		case $path.'cli_categoria_alta.php':
			$seleccionado = 'cli_categorias';
		break;
		
		/* CliCentroRecepcion */
		case $path.'cli_centro_recepcion_adm.php':
		case $path.'cli_centro_recepcion_alta.php':
			$seleccionado = 'cli_centro_recepcions';
		break;
		
		/* CliCentroPedido */
		case $path.'cli_centro_pedido_adm.php':
		case $path.'cli_centro_pedido_alta.php':
			$seleccionado = 'cli_centro_pedidos';
		break;
		
		/* CliMedioDigital */
		case $path.'cli_medio_digital_adm.php':
		case $path.'cli_medio_digital_alta.php':
			$seleccionado = 'cli_medio_digitals';
		break;
		
		/* CliTipoMedioDigital */
		case $path.'cli_tipo_medio_digital_adm.php':
		case $path.'cli_tipo_medio_digital_alta.php':
			$seleccionado = 'cli_tipo_medio_digitals';
		break;
		
		/* CliClienteVtaVendedor */
		case $path.'cli_cliente_vta_vendedor_adm.php':
		case $path.'cli_cliente_vta_vendedor_alta.php':
			$seleccionado = 'cli_cliente_vta_vendedors';
		break;
		
		/* CliClienteInsTipoListaPrecio */
		case $path.'cli_cliente_ins_tipo_lista_precio_adm.php':
		case $path.'cli_cliente_ins_tipo_lista_precio_alta.php':
			$seleccionado = 'cli_cliente_ins_tipo_lista_precios';
		break;
		
		/* CliClienteVtaPreventista */
		case $path.'cli_cliente_vta_preventista_adm.php':
		case $path.'cli_cliente_vta_preventista_alta.php':
			$seleccionado = 'cli_cliente_vta_preventistas';
		break;
		
		/* CliClienteVtaComprador */
		case $path.'cli_cliente_vta_comprador_adm.php':
		case $path.'cli_cliente_vta_comprador_alta.php':
			$seleccionado = 'cli_cliente_vta_compradors';
		break;
		
		/* CliClienteGralFpAgrupacion */
		case $path.'cli_cliente_gral_fp_agrupacion_adm.php':
		case $path.'cli_cliente_gral_fp_agrupacion_alta.php':
			$seleccionado = 'cli_cliente_gral_fp_agrupacions';
		break;
		
		/* CliClienteGralFpCuota */
		case $path.'cli_cliente_gral_fp_cuota_adm.php':
		case $path.'cli_cliente_gral_fp_cuota_alta.php':
			$seleccionado = 'cli_cliente_gral_fp_cuotas';
		break;
		
		/* CliClienteGralActividad */
		case $path.'cli_cliente_gral_actividad_adm.php':
		case $path.'cli_cliente_gral_actividad_alta.php':
			$seleccionado = 'cli_cliente_gral_actividads';
		break;
		
		/* CliClienteVtaPuntoVenta */
		case $path.'cli_cliente_vta_punto_venta_adm.php':
		case $path.'cli_cliente_vta_punto_venta_alta.php':
			$seleccionado = 'cli_cliente_vta_punto_ventas';
		break;
		
		/* VtaVendedor */
		case $path.'vta_vendedor_adm.php':
		case $path.'vta_vendedor_alta.php':
			$seleccionado = 'vta_vendedors';
		break;
		
		/* VtaComprador */
		case $path.'vta_comprador_adm.php':
		case $path.'vta_comprador_alta.php':
			$seleccionado = 'vta_compradors';
		break;
		
		/* VtaPreventista */
		case $path.'vta_preventista_adm.php':
		case $path.'vta_preventista_alta.php':
			$seleccionado = 'vta_preventistas';
		break;
		
		/* VtaPresupuesto */
		case $path.'vta_presupuesto_adm.php':
		case $path.'vta_presupuesto_alta.php':
			$seleccionado = 'vta_presupuestos';
		break;
		
		/* VtaPresupuestoTipoEmision */
		case $path.'vta_presupuesto_tipo_emision_adm.php':
		case $path.'vta_presupuesto_tipo_emision_alta.php':
			$seleccionado = 'vta_presupuesto_tipo_emisions';
		break;
		
		/* VtaPresupuestoTipoEstado */
		case $path.'vta_presupuesto_tipo_estado_adm.php':
		case $path.'vta_presupuesto_tipo_estado_alta.php':
			$seleccionado = 'vta_presupuesto_tipo_estados';
		break;
		
		/* VtaPresupuestoEstado */
		case $path.'vta_presupuesto_estado_adm.php':
		case $path.'vta_presupuesto_estado_alta.php':
			$seleccionado = 'vta_presupuesto_estados';
		break;
		
		/* VtaPresupuestoInsInsumo */
		case $path.'vta_presupuesto_ins_insumo_adm.php':
		case $path.'vta_presupuesto_ins_insumo_alta.php':
			$seleccionado = 'vta_presupuesto_ins_insumos';
		break;
		
		/* VtaPresupuestoConflicto */
		case $path.'vta_presupuesto_conflicto_adm.php':
		case $path.'vta_presupuesto_conflicto_alta.php':
			$seleccionado = 'vta_presupuesto_conflictos';
		break;
		
		/* VtaPresupuestoCancelacion */
		case $path.'vta_presupuesto_cancelacion_adm.php':
		case $path.'vta_presupuesto_cancelacion_alta.php':
			$seleccionado = 'vta_presupuesto_cancelacions';
		break;
		
		/* VtaPresupuestoEnviado */
		case $path.'vta_presupuesto_enviado_adm.php':
		case $path.'vta_presupuesto_enviado_alta.php':
			$seleccionado = 'vta_presupuesto_enviados';
		break;
		
		/* VtaTipoFactura */
		case $path.'vta_tipo_factura_adm.php':
		case $path.'vta_tipo_factura_alta.php':
			$seleccionado = 'vta_tipo_facturas';
		break;
		
		/* VtaTipoOrigenFactura */
		case $path.'vta_tipo_origen_factura_adm.php':
		case $path.'vta_tipo_origen_factura_alta.php':
			$seleccionado = 'vta_tipo_origen_facturas';
		break;
		
		/* VtaTipoFacturaWsFeParamTipoComprobante */
		case $path.'vta_tipo_factura_ws_fe_param_tipo_comprobante_adm.php':
		case $path.'vta_tipo_factura_ws_fe_param_tipo_comprobante_alta.php':
			$seleccionado = 'vta_tipo_factura_ws_fe_param_tipo_comprobantes';
		break;
		
		/* VtaTributoWsFeParamTipoTributo */
		case $path.'vta_tributo_ws_fe_param_tipo_tributo_adm.php':
		case $path.'vta_tributo_ws_fe_param_tipo_tributo_alta.php':
			$seleccionado = 'vta_tributo_ws_fe_param_tipo_tributos';
		break;
		
		/* VtaTributoExencion */
		case $path.'vta_tributo_exencion_adm.php':
		case $path.'vta_tributo_exencion_alta.php':
			$seleccionado = 'vta_tributo_exencions';
		break;
		
		/* VtaTributo */
		case $path.'vta_tributo_adm.php':
		case $path.'vta_tributo_alta.php':
			$seleccionado = 'vta_tributos';
		break;
		
		/* VtaTipoNotaCredito */
		case $path.'vta_tipo_nota_credito_adm.php':
		case $path.'vta_tipo_nota_credito_alta.php':
			$seleccionado = 'vta_tipo_nota_creditos';
		break;
		
		/* VtaTipoNotaCreditoWsFeParamTipoComprobante */
		case $path.'vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_adm.php':
		case $path.'vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php':
			$seleccionado = 'vta_tipo_nota_credito_ws_fe_param_tipo_comprobantes';
		break;
		
		/* VtaTipoOrigenNotaCredito */
		case $path.'vta_tipo_origen_nota_credito_adm.php':
		case $path.'vta_tipo_origen_nota_credito_alta.php':
			$seleccionado = 'vta_tipo_origen_nota_creditos';
		break;
		
		/* VtaTipoNotaDebito */
		case $path.'vta_tipo_nota_debito_adm.php':
		case $path.'vta_tipo_nota_debito_alta.php':
			$seleccionado = 'vta_tipo_nota_debitos';
		break;
		
		/* VtaTipoOrigenNotaDebito */
		case $path.'vta_tipo_origen_nota_debito_adm.php':
		case $path.'vta_tipo_origen_nota_debito_alta.php':
			$seleccionado = 'vta_tipo_origen_nota_debitos';
		break;
		
		/* VtaTipoNotaDebitoWsFeParamTipoComprobante */
		case $path.'vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_adm.php':
		case $path.'vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php':
			$seleccionado = 'vta_tipo_nota_debito_ws_fe_param_tipo_comprobantes';
		break;
		
		/* VtaNotaCredito */
		case $path.'vta_nota_credito_adm.php':
		case $path.'vta_nota_credito_alta.php':
			$seleccionado = 'vta_nota_creditos';
		break;
		
		/* VtaNotaCreditoTipoEstado */
		case $path.'vta_nota_credito_tipo_estado_adm.php':
		case $path.'vta_nota_credito_tipo_estado_alta.php':
			$seleccionado = 'vta_nota_credito_tipo_estados';
		break;
		
		/* VtaNotaCreditoEstado */
		case $path.'vta_nota_credito_estado_adm.php':
		case $path.'vta_nota_credito_estado_alta.php':
			$seleccionado = 'vta_nota_credito_estados';
		break;
		
		/* VtaNotaCreditoConcepto */
		case $path.'vta_nota_credito_concepto_adm.php':
		case $path.'vta_nota_credito_concepto_alta.php':
			$seleccionado = 'vta_nota_credito_conceptos';
		break;
		
		/* VtaNotaCreditoWsFeOpeSolicitud */
		case $path.'vta_nota_credito_ws_fe_ope_solicitud_adm.php':
		case $path.'vta_nota_credito_ws_fe_ope_solicitud_alta.php':
			$seleccionado = 'vta_nota_credito_ws_fe_ope_solicituds';
		break;
		
		/* VtaNotaCreditoVtaFacturaVtaOrdenVenta */
		case $path.'vta_nota_credito_vta_factura_vta_orden_venta_adm.php':
		case $path.'vta_nota_credito_vta_factura_vta_orden_venta_alta.php':
			$seleccionado = 'vta_nota_credito_vta_factura_vta_orden_ventas';
		break;
		
		/* VtaNotaCreditoVtaFacturaVtaTributo */
		case $path.'vta_nota_credito_vta_factura_vta_tributo_adm.php':
		case $path.'vta_nota_credito_vta_factura_vta_tributo_alta.php':
			$seleccionado = 'vta_nota_credito_vta_factura_vta_tributos';
		break;
		
		/* VtaNotaCreditoItem */
		case $path.'vta_nota_credito_item_adm.php':
		case $path.'vta_nota_credito_item_alta.php':
			$seleccionado = 'vta_nota_credito_items';
		break;
		
		/* VtaNotaCreditoEnviado */
		case $path.'vta_nota_credito_enviado_adm.php':
		case $path.'vta_nota_credito_enviado_alta.php':
			$seleccionado = 'vta_nota_credito_enviados';
		break;
		
		/* VtaNotaCreditoVtaTributo */
		case $path.'vta_nota_credito_vta_tributo_adm.php':
		case $path.'vta_nota_credito_vta_tributo_alta.php':
			$seleccionado = 'vta_nota_credito_vta_tributos';
		break;
		
		/* VtaNotaDebito */
		case $path.'vta_nota_debito_adm.php':
		case $path.'vta_nota_debito_alta.php':
			$seleccionado = 'vta_nota_debitos';
		break;
		
		/* VtaNotaDebitoTipoEstado */
		case $path.'vta_nota_debito_tipo_estado_adm.php':
		case $path.'vta_nota_debito_tipo_estado_alta.php':
			$seleccionado = 'vta_nota_debito_tipo_estados';
		break;
		
		/* VtaNotaDebitoEstado */
		case $path.'vta_nota_debito_estado_adm.php':
		case $path.'vta_nota_debito_estado_alta.php':
			$seleccionado = 'vta_nota_debito_estados';
		break;
		
		/* VtaNotaDebitoConcepto */
		case $path.'vta_nota_debito_concepto_adm.php':
		case $path.'vta_nota_debito_concepto_alta.php':
			$seleccionado = 'vta_nota_debito_conceptos';
		break;
		
		/* VtaNotaDebitoWsFeOpeSolicitud */
		case $path.'vta_nota_debito_ws_fe_ope_solicitud_adm.php':
		case $path.'vta_nota_debito_ws_fe_ope_solicitud_alta.php':
			$seleccionado = 'vta_nota_debito_ws_fe_ope_solicituds';
		break;
		
		/* VtaNotaDebitoVtaTributo */
		case $path.'vta_nota_debito_vta_tributo_adm.php':
		case $path.'vta_nota_debito_vta_tributo_alta.php':
			$seleccionado = 'vta_nota_debito_vta_tributos';
		break;
		
		/* VtaNotaDebitoVtaNotaCredito */
		case $path.'vta_nota_debito_vta_nota_credito_adm.php':
		case $path.'vta_nota_debito_vta_nota_credito_alta.php':
			$seleccionado = 'vta_nota_debito_vta_nota_creditos';
		break;
		
		/* VtaNotaDebitoVtaRecibo */
		case $path.'vta_nota_debito_vta_recibo_adm.php':
		case $path.'vta_nota_debito_vta_recibo_alta.php':
			$seleccionado = 'vta_nota_debito_vta_recibos';
		break;
		
		/* VtaNotaDebitoEnviado */
		case $path.'vta_nota_debito_enviado_adm.php':
		case $path.'vta_nota_debito_enviado_alta.php':
			$seleccionado = 'vta_nota_debito_enviados';
		break;
		
		/* VtaNotaDebitoItem */
		case $path.'vta_nota_debito_item_adm.php':
		case $path.'vta_nota_debito_item_alta.php':
			$seleccionado = 'vta_nota_debito_items';
		break;
		
		/* VtaRecibo */
		case $path.'vta_recibo_adm.php':
		case $path.'vta_recibo_alta.php':
			$seleccionado = 'vta_recibos';
		break;
		
		/* VtaReciboTipoEstado */
		case $path.'vta_recibo_tipo_estado_adm.php':
		case $path.'vta_recibo_tipo_estado_alta.php':
			$seleccionado = 'vta_recibo_tipo_estados';
		break;
		
		/* VtaReciboEstado */
		case $path.'vta_recibo_estado_adm.php':
		case $path.'vta_recibo_estado_alta.php':
			$seleccionado = 'vta_recibo_estados';
		break;
		
		/* VtaReciboEnviado */
		case $path.'vta_recibo_enviado_adm.php':
		case $path.'vta_recibo_enviado_alta.php':
			$seleccionado = 'vta_recibo_enviados';
		break;
		
		/* VtaReciboItem */
		case $path.'vta_recibo_item_adm.php':
		case $path.'vta_recibo_item_alta.php':
			$seleccionado = 'vta_recibo_items';
		break;
		
		/* VtaReciboItemConciliado */
		case $path.'vta_recibo_item_conciliado_adm.php':
		case $path.'vta_recibo_item_conciliado_alta.php':
			$seleccionado = 'vta_recibo_item_conciliados';
		break;
		
		/* VtaReciboItemCheque */
		case $path.'vta_recibo_item_cheque_adm.php':
		case $path.'vta_recibo_item_cheque_alta.php':
			$seleccionado = 'vta_recibo_item_cheques';
		break;
		
		/* VtaReciboItemRetencion */
		case $path.'vta_recibo_item_retencion_adm.php':
		case $path.'vta_recibo_item_retencion_alta.php':
			$seleccionado = 'vta_recibo_item_retencions';
		break;
		
		/* VtaReciboConcepto */
		case $path.'vta_recibo_concepto_adm.php':
		case $path.'vta_recibo_concepto_alta.php':
			$seleccionado = 'vta_recibo_conceptos';
		break;
		
		/* VtaReciboWsFeOpeSolicitud */
		case $path.'vta_recibo_ws_fe_ope_solicitud_adm.php':
		case $path.'vta_recibo_ws_fe_ope_solicitud_alta.php':
			$seleccionado = 'vta_recibo_ws_fe_ope_solicituds';
		break;
		
		/* VtaTipoRecibo */
		case $path.'vta_tipo_recibo_adm.php':
		case $path.'vta_tipo_recibo_alta.php':
			$seleccionado = 'vta_tipo_recibos';
		break;
		
		/* VtaTipoOrigenRecibo */
		case $path.'vta_tipo_origen_recibo_adm.php':
		case $path.'vta_tipo_origen_recibo_alta.php':
			$seleccionado = 'vta_tipo_origen_recibos';
		break;
		
		/* VtaTipoReciboWsFeParamTipoComprobante */
		case $path.'vta_tipo_recibo_ws_fe_param_tipo_comprobante_adm.php':
		case $path.'vta_tipo_recibo_ws_fe_param_tipo_comprobante_alta.php':
			$seleccionado = 'vta_tipo_recibo_ws_fe_param_tipo_comprobantes';
		break;
		
		/* VtaPuntoVenta */
		case $path.'vta_punto_venta_adm.php':
		case $path.'vta_punto_venta_alta.php':
			$seleccionado = 'vta_punto_ventas';
		break;
		
		/* VtaPuntoVentaWsFeParamPuntoVenta */
		case $path.'vta_punto_venta_ws_fe_param_punto_venta_adm.php':
		case $path.'vta_punto_venta_ws_fe_param_punto_venta_alta.php':
			$seleccionado = 'vta_punto_venta_ws_fe_param_punto_ventas';
		break;
		
		/* VtaReciboVtaTributo */
		case $path.'vta_recibo_vta_tributo_adm.php':
		case $path.'vta_recibo_vta_tributo_alta.php':
			$seleccionado = 'vta_recibo_vta_tributos';
		break;
		
		/* VtaOrdenVenta */
		case $path.'vta_orden_venta_adm.php':
		case $path.'vta_orden_venta_alta.php':
			$seleccionado = 'vta_orden_ventas';
		break;
		
		/* VtaOrdenVentaTipoEstado */
		case $path.'vta_orden_venta_tipo_estado_adm.php':
		case $path.'vta_orden_venta_tipo_estado_alta.php':
			$seleccionado = 'vta_orden_venta_tipo_estados';
		break;
		
		/* VtaOrdenVentaEstado */
		case $path.'vta_orden_venta_estado_adm.php':
		case $path.'vta_orden_venta_estado_alta.php':
			$seleccionado = 'vta_orden_venta_estados';
		break;
		
		/* VtaOrdenVentaTipoEstadoFacturacion */
		case $path.'vta_orden_venta_tipo_estado_facturacion_adm.php':
		case $path.'vta_orden_venta_tipo_estado_facturacion_alta.php':
			$seleccionado = 'vta_orden_venta_tipo_estado_facturacions';
		break;
		
		/* VtaOrdenVentaEstadoFacturacion */
		case $path.'vta_orden_venta_estado_facturacion_adm.php':
		case $path.'vta_orden_venta_estado_facturacion_alta.php':
			$seleccionado = 'vta_orden_venta_estado_facturacions';
		break;
		
		/* VtaOrdenVentaTipoEstadoRemision */
		case $path.'vta_orden_venta_tipo_estado_remision_adm.php':
		case $path.'vta_orden_venta_tipo_estado_remision_alta.php':
			$seleccionado = 'vta_orden_venta_tipo_estado_remisions';
		break;
		
		/* VtaOrdenVentaEstadoRemision */
		case $path.'vta_orden_venta_estado_remision_adm.php':
		case $path.'vta_orden_venta_estado_remision_alta.php':
			$seleccionado = 'vta_orden_venta_estado_remisions';
		break;
		
		/* VtaRemitoVtaOrdenVenta */
		case $path.'vta_remito_vta_orden_venta_adm.php':
		case $path.'vta_remito_vta_orden_venta_alta.php':
			$seleccionado = 'vta_remito_vta_orden_ventas';
		break;
		
		/* VtaRemito */
		case $path.'vta_remito_adm.php':
		case $path.'vta_remito_alta.php':
			$seleccionado = 'vta_remitos';
		break;
		
		/* VtaRemitoTipoEstado */
		case $path.'vta_remito_tipo_estado_adm.php':
		case $path.'vta_remito_tipo_estado_alta.php':
			$seleccionado = 'vta_remito_tipo_estados';
		break;
		
		/* VtaRemitoEstado */
		case $path.'vta_remito_estado_adm.php':
		case $path.'vta_remito_estado_alta.php':
			$seleccionado = 'vta_remito_estados';
		break;
		
		/* VtaRemitoEnviado */
		case $path.'vta_remito_enviado_adm.php':
		case $path.'vta_remito_enviado_alta.php':
			$seleccionado = 'vta_remito_enviados';
		break;
		
		/* VtaVendedorUsUsuario */
		case $path.'vta_vendedor_us_usuario_adm.php':
		case $path.'vta_vendedor_us_usuario_alta.php':
			$seleccionado = 'vta_vendedor_us_usuarios';
		break;
		
		/* VtaVendedorInsTipoListaPrecio */
		case $path.'vta_vendedor_ins_tipo_lista_precio_adm.php':
		case $path.'vta_vendedor_ins_tipo_lista_precio_alta.php':
			$seleccionado = 'vta_vendedor_ins_tipo_lista_precios';
		break;
		
		/* VtaTipoComprador */
		case $path.'vta_tipo_comprador_adm.php':
		case $path.'vta_tipo_comprador_alta.php':
			$seleccionado = 'vta_tipo_compradors';
		break;
		
		/* VtaVendedorDescuento */
		case $path.'vta_vendedor_descuento_adm.php':
		case $path.'vta_vendedor_descuento_alta.php':
			$seleccionado = 'vta_vendedor_descuentos';
		break;
		
		/* VtaFactura */
		case $path.'vta_factura_adm.php':
		case $path.'vta_factura_alta.php':
			$seleccionado = 'vta_facturas';
		break;
		
		/* VtaFacturaTipoEstado */
		case $path.'vta_factura_tipo_estado_adm.php':
		case $path.'vta_factura_tipo_estado_alta.php':
			$seleccionado = 'vta_factura_tipo_estados';
		break;
		
		/* VtaFacturaEstado */
		case $path.'vta_factura_estado_adm.php':
		case $path.'vta_factura_estado_alta.php':
			$seleccionado = 'vta_factura_estados';
		break;
		
		/* VtaFacturaConcepto */
		case $path.'vta_factura_concepto_adm.php':
		case $path.'vta_factura_concepto_alta.php':
			$seleccionado = 'vta_factura_conceptos';
		break;
		
		/* VtaFacturaItem */
		case $path.'vta_factura_item_adm.php':
		case $path.'vta_factura_item_alta.php':
			$seleccionado = 'vta_factura_items';
		break;
		
		/* VtaFacturaVtaTributo */
		case $path.'vta_factura_vta_tributo_adm.php':
		case $path.'vta_factura_vta_tributo_alta.php':
			$seleccionado = 'vta_factura_vta_tributos';
		break;
		
		/* VtaFacturaVtaRecibo */
		case $path.'vta_factura_vta_recibo_adm.php':
		case $path.'vta_factura_vta_recibo_alta.php':
			$seleccionado = 'vta_factura_vta_recibos';
		break;
		
		/* VtaFacturaVtaNotaCredito */
		case $path.'vta_factura_vta_nota_credito_adm.php':
		case $path.'vta_factura_vta_nota_credito_alta.php':
			$seleccionado = 'vta_factura_vta_nota_creditos';
		break;
		
		/* VtaFacturaWsFeOpeSolicitud */
		case $path.'vta_factura_ws_fe_ope_solicitud_adm.php':
		case $path.'vta_factura_ws_fe_ope_solicitud_alta.php':
			$seleccionado = 'vta_factura_ws_fe_ope_solicituds';
		break;
		
		/* VtaFacturaEnviado */
		case $path.'vta_factura_enviado_adm.php':
		case $path.'vta_factura_enviado_alta.php':
			$seleccionado = 'vta_factura_enviados';
		break;
		
		/* VtaFacturaVtaOrdenVenta */
		case $path.'vta_factura_vta_orden_venta_adm.php':
		case $path.'vta_factura_vta_orden_venta_alta.php':
			$seleccionado = 'vta_factura_vta_orden_ventas';
		break;
		
		/* VtaComision */
		case $path.'vta_comision_adm.php':
		case $path.'vta_comision_alta.php':
			$seleccionado = 'vta_comisions';
		break;
		
		/* VtaComisionTipoEstado */
		case $path.'vta_comision_tipo_estado_adm.php':
		case $path.'vta_comision_tipo_estado_alta.php':
			$seleccionado = 'vta_comision_tipo_estados';
		break;
		
		/* VtaComisionEstado */
		case $path.'vta_comision_estado_adm.php':
		case $path.'vta_comision_estado_alta.php':
			$seleccionado = 'vta_comision_estados';
		break;
		
		/* VtaComisionEnviado */
		case $path.'vta_comision_enviado_adm.php':
		case $path.'vta_comision_enviado_alta.php':
			$seleccionado = 'vta_comision_enviados';
		break;
		
		/* VtaComisionVtaFactura */
		case $path.'vta_comision_vta_factura_adm.php':
		case $path.'vta_comision_vta_factura_alta.php':
			$seleccionado = 'vta_comision_vta_facturas';
		break;
		
		/* VtaComisionGralFpFormaPago */
		case $path.'vta_comision_gral_fp_forma_pago_adm.php':
		case $path.'vta_comision_gral_fp_forma_pago_alta.php':
			$seleccionado = 'vta_comision_gral_fp_forma_pagos';
		break;
		
		/* VtaComisionGralFpFormaPagoCheque */
		case $path.'vta_comision_gral_fp_forma_pago_cheque_adm.php':
		case $path.'vta_comision_gral_fp_forma_pago_cheque_alta.php':
			$seleccionado = 'vta_comision_gral_fp_forma_pago_cheques';
		break;
		
		/* WsFeParamTipoIva */
		case $path.'ws_fe_param_tipo_iva_adm.php':
		case $path.'ws_fe_param_tipo_iva_alta.php':
			$seleccionado = 'ws_fe_param_tipo_ivas';
		break;
		
		/* WsFeParamTipoTributo */
		case $path.'ws_fe_param_tipo_tributo_adm.php':
		case $path.'ws_fe_param_tipo_tributo_alta.php':
			$seleccionado = 'ws_fe_param_tipo_tributos';
		break;
		
		/* WsFeParamTipoOpcional */
		case $path.'ws_fe_param_tipo_opcional_adm.php':
		case $path.'ws_fe_param_tipo_opcional_alta.php':
			$seleccionado = 'ws_fe_param_tipo_opcionals';
		break;
		
		/* WsFeParamTipoPais */
		case $path.'ws_fe_param_tipo_pais_adm.php':
		case $path.'ws_fe_param_tipo_pais_alta.php':
			$seleccionado = 'ws_fe_param_tipo_paiss';
		break;
		
		/* WsFeParamTipoMoneda */
		case $path.'ws_fe_param_tipo_moneda_adm.php':
		case $path.'ws_fe_param_tipo_moneda_alta.php':
			$seleccionado = 'ws_fe_param_tipo_monedas';
		break;
		
		/* WsFeParamTipoComprobante */
		case $path.'ws_fe_param_tipo_comprobante_adm.php':
		case $path.'ws_fe_param_tipo_comprobante_alta.php':
			$seleccionado = 'ws_fe_param_tipo_comprobantes';
		break;
		
		/* WsFeParamTipoConcepto */
		case $path.'ws_fe_param_tipo_concepto_adm.php':
		case $path.'ws_fe_param_tipo_concepto_alta.php':
			$seleccionado = 'ws_fe_param_tipo_conceptos';
		break;
		
		/* WsFeParamTipoDocumento */
		case $path.'ws_fe_param_tipo_documento_adm.php':
		case $path.'ws_fe_param_tipo_documento_alta.php':
			$seleccionado = 'ws_fe_param_tipo_documentos';
		break;
		
		/* WsFeParamPuntoVenta */
		case $path.'ws_fe_param_punto_venta_adm.php':
		case $path.'ws_fe_param_punto_venta_alta.php':
			$seleccionado = 'ws_fe_param_punto_ventas';
		break;
		
		/* WsFeOpeSolicitudIva */
		case $path.'ws_fe_ope_solicitud_iva_adm.php':
		case $path.'ws_fe_ope_solicitud_iva_alta.php':
			$seleccionado = 'ws_fe_ope_solicitud_ivas';
		break;
		
		/* WsFeOpeSolicitudOpcional */
		case $path.'ws_fe_ope_solicitud_opcional_adm.php':
		case $path.'ws_fe_ope_solicitud_opcional_alta.php':
			$seleccionado = 'ws_fe_ope_solicitud_opcionals';
		break;
		
		/* WsFeOpeSolicitudRespuestaObservacion */
		case $path.'ws_fe_ope_solicitud_respuesta_observacion_adm.php':
		case $path.'ws_fe_ope_solicitud_respuesta_observacion_alta.php':
			$seleccionado = 'ws_fe_ope_solicitud_respuesta_observacions';
		break;
		
		/* WsFeOpeSolicitudComprobanteAsociado */
		case $path.'ws_fe_ope_solicitud_comprobante_asociado_adm.php':
		case $path.'ws_fe_ope_solicitud_comprobante_asociado_alta.php':
			$seleccionado = 'ws_fe_ope_solicitud_comprobante_asociados';
		break;
		
		/* WsFeOpeSolicitudTributo */
		case $path.'ws_fe_ope_solicitud_tributo_adm.php':
		case $path.'ws_fe_ope_solicitud_tributo_alta.php':
			$seleccionado = 'ws_fe_ope_solicitud_tributos';
		break;
		
		/* WsFeOpeSolicitud */
		case $path.'ws_fe_ope_solicitud_adm.php':
		case $path.'ws_fe_ope_solicitud_alta.php':
			$seleccionado = 'ws_fe_ope_solicituds';
		break;
		
		/* WsFeOpeSolicitudRespuesta */
		case $path.'ws_fe_ope_solicitud_respuesta_adm.php':
		case $path.'ws_fe_ope_solicitud_respuesta_alta.php':
			$seleccionado = 'ws_fe_ope_solicitud_respuestas';
		break;
		
		/* InsStockTipoMovimiento */
		case $path.'ins_stock_tipo_movimiento_adm.php':
		case $path.'ins_stock_tipo_movimiento_alta.php':
			$seleccionado = 'ins_stock_tipo_movimientos';
		break;
		
		/* InsStockMovimiento */
		case $path.'ins_stock_movimiento_adm.php':
		case $path.'ins_stock_movimiento_alta.php':
			$seleccionado = 'ins_stock_movimientos';
		break;
		
		/* InsStockResumen */
		case $path.'ins_stock_resumen_adm.php':
		case $path.'ins_stock_resumen_alta.php':
			$seleccionado = 'ins_stock_resumens';
		break;
		
		/* InsStockResumenEstado */
		case $path.'ins_stock_resumen_estado_adm.php':
		case $path.'ins_stock_resumen_estado_alta.php':
			$seleccionado = 'ins_stock_resumen_estados';
		break;
		
		/* InsStockResumenTipoEstado */
		case $path.'ins_stock_resumen_tipo_estado_adm.php':
		case $path.'ins_stock_resumen_tipo_estado_alta.php':
			$seleccionado = 'ins_stock_resumen_tipo_estados';
		break;
		
		/* PdiPedido */
		case $path.'pdi_pedido_adm.php':
		case $path.'pdi_pedido_alta.php':
			$seleccionado = 'pdi_pedidos';
		break;
		
		/* PdiEstado */
		case $path.'pdi_estado_adm.php':
		case $path.'pdi_estado_alta.php':
			$seleccionado = 'pdi_estados';
		break;
		
		/* PdiTipoEstado */
		case $path.'pdi_tipo_estado_adm.php':
		case $path.'pdi_tipo_estado_alta.php':
			$seleccionado = 'pdi_tipo_estados';
		break;
		
		/* PdiPedidoDestinatario */
		case $path.'pdi_pedido_destinatario_adm.php':
		case $path.'pdi_pedido_destinatario_alta.php':
			$seleccionado = 'pdi_pedido_destinatarios';
		break;
		
		/* PdiComentario */
		case $path.'pdi_comentario_adm.php':
		case $path.'pdi_comentario_alta.php':
			$seleccionado = 'pdi_comentarios';
		break;
		
		/* PdiTipoOrigen */
		case $path.'pdi_tipo_origen_adm.php':
		case $path.'pdi_tipo_origen_alta.php':
			$seleccionado = 'pdi_tipo_origens';
		break;
		
		/* PdiUrgencia */
		case $path.'pdi_urgencia_adm.php':
		case $path.'pdi_urgencia_alta.php':
			$seleccionado = 'pdi_urgencias';
		break;
		
		/* PdePedido */
		case $path.'pde_pedido_adm.php':
		case $path.'pde_pedido_alta.php':
			$seleccionado = 'pde_pedidos';
		break;
		
		/* PdeEstado */
		case $path.'pde_estado_adm.php':
		case $path.'pde_estado_alta.php':
			$seleccionado = 'pde_estados';
		break;
		
		/* PdeTipoEstado */
		case $path.'pde_tipo_estado_adm.php':
		case $path.'pde_tipo_estado_alta.php':
			$seleccionado = 'pde_tipo_estados';
		break;
		
		/* PdePedidoEnviado */
		case $path.'pde_pedido_enviado_adm.php':
		case $path.'pde_pedido_enviado_alta.php':
			$seleccionado = 'pde_pedido_enviados';
		break;
		
		/* PdePedidoDestinatario */
		case $path.'pde_pedido_destinatario_adm.php':
		case $path.'pde_pedido_destinatario_alta.php':
			$seleccionado = 'pde_pedido_destinatarios';
		break;
		
		/* PdePedidoEnvioEmail */
		case $path.'pde_pedido_envio_email_adm.php':
		case $path.'pde_pedido_envio_email_alta.php':
			$seleccionado = 'pde_pedido_envio_emails';
		break;
		
		/* PdeUrgencia */
		case $path.'pde_urgencia_adm.php':
		case $path.'pde_urgencia_alta.php':
			$seleccionado = 'pde_urgencias';
		break;
		
		/* PdePedidoPrvProveedor */
		case $path.'pde_pedido_prv_proveedor_adm.php':
		case $path.'pde_pedido_prv_proveedor_alta.php':
			$seleccionado = 'pde_pedido_prv_proveedors';
		break;
		
		/* PdePedidoPrvProveedorAvisado */
		case $path.'pde_pedido_prv_proveedor_avisado_adm.php':
		case $path.'pde_pedido_prv_proveedor_avisado_alta.php':
			$seleccionado = 'pde_pedido_prv_proveedor_avisados';
		break;
		
		/* PdeCotizacion */
		case $path.'pde_cotizacion_adm.php':
		case $path.'pde_cotizacion_alta.php':
			$seleccionado = 'pde_cotizacions';
		break;
		
		/* PdeCotizacionDestinatario */
		case $path.'pde_cotizacion_destinatario_adm.php':
		case $path.'pde_cotizacion_destinatario_alta.php':
			$seleccionado = 'pde_cotizacion_destinatarios';
		break;
		
		/* PdeCotizacionEnvioEmail */
		case $path.'pde_cotizacion_envio_email_adm.php':
		case $path.'pde_cotizacion_envio_email_alta.php':
			$seleccionado = 'pde_cotizacion_envio_emails';
		break;
		
		/* PdeOcAgrupacion */
		case $path.'pde_oc_agrupacion_adm.php':
		case $path.'pde_oc_agrupacion_alta.php':
			$seleccionado = 'pde_oc_agrupacions';
		break;
		
		/* PdeOcAgrupacionEstado */
		case $path.'pde_oc_agrupacion_estado_adm.php':
		case $path.'pde_oc_agrupacion_estado_alta.php':
			$seleccionado = 'pde_oc_agrupacion_estados';
		break;
		
		/* PdeOcAgrupacionTipoEstado */
		case $path.'pde_oc_agrupacion_tipo_estado_adm.php':
		case $path.'pde_oc_agrupacion_tipo_estado_alta.php':
			$seleccionado = 'pde_oc_agrupacion_tipo_estados';
		break;
		
		/* PdeOcAgrupacionEnviado */
		case $path.'pde_oc_agrupacion_enviado_adm.php':
		case $path.'pde_oc_agrupacion_enviado_alta.php':
			$seleccionado = 'pde_oc_agrupacion_enviados';
		break;
		
		/* PdeOcAgrupacionItem */
		case $path.'pde_oc_agrupacion_item_adm.php':
		case $path.'pde_oc_agrupacion_item_alta.php':
			$seleccionado = 'pde_oc_agrupacion_items';
		break;
		
		/* PdeOc */
		case $path.'pde_oc_adm.php':
		case $path.'pde_oc_alta.php':
			$seleccionado = 'pde_ocs';
		break;
		
		/* PdeOcEstado */
		case $path.'pde_oc_estado_adm.php':
		case $path.'pde_oc_estado_alta.php':
			$seleccionado = 'pde_oc_estados';
		break;
		
		/* PdeOcTipoEstado */
		case $path.'pde_oc_tipo_estado_adm.php':
		case $path.'pde_oc_tipo_estado_alta.php':
			$seleccionado = 'pde_oc_tipo_estados';
		break;
		
		/* PdeOcEstadoRecepcion */
		case $path.'pde_oc_estado_recepcion_adm.php':
		case $path.'pde_oc_estado_recepcion_alta.php':
			$seleccionado = 'pde_oc_estado_recepcions';
		break;
		
		/* PdeOcTipoEstadoRecepcion */
		case $path.'pde_oc_tipo_estado_recepcion_adm.php':
		case $path.'pde_oc_tipo_estado_recepcion_alta.php':
			$seleccionado = 'pde_oc_tipo_estado_recepcions';
		break;
		
		/* PdeOcEstadoFacturacion */
		case $path.'pde_oc_estado_facturacion_adm.php':
		case $path.'pde_oc_estado_facturacion_alta.php':
			$seleccionado = 'pde_oc_estado_facturacions';
		break;
		
		/* PdeOcTipoEstadoFacturacion */
		case $path.'pde_oc_tipo_estado_facturacion_adm.php':
		case $path.'pde_oc_tipo_estado_facturacion_alta.php':
			$seleccionado = 'pde_oc_tipo_estado_facturacions';
		break;
		
		/* PdeOcEnviado */
		case $path.'pde_oc_enviado_adm.php':
		case $path.'pde_oc_enviado_alta.php':
			$seleccionado = 'pde_oc_enviados';
		break;
		
		/* PdeOcTipoOrigen */
		case $path.'pde_oc_tipo_origen_adm.php':
		case $path.'pde_oc_tipo_origen_alta.php':
			$seleccionado = 'pde_oc_tipo_origens';
		break;
		
		/* PdeOcDestinatario */
		case $path.'pde_oc_destinatario_adm.php':
		case $path.'pde_oc_destinatario_alta.php':
			$seleccionado = 'pde_oc_destinatarios';
		break;
		
		/* PdeOcEnvioEmail */
		case $path.'pde_oc_envio_email_adm.php':
		case $path.'pde_oc_envio_email_alta.php':
			$seleccionado = 'pde_oc_envio_emails';
		break;
		
		/* PdeRecepcionAgrupacion */
		case $path.'pde_recepcion_agrupacion_adm.php':
		case $path.'pde_recepcion_agrupacion_alta.php':
			$seleccionado = 'pde_recepcion_agrupacions';
		break;
		
		/* PdeRecepcion */
		case $path.'pde_recepcion_adm.php':
		case $path.'pde_recepcion_alta.php':
			$seleccionado = 'pde_recepcions';
		break;
		
		/* PdeRecepcionEstado */
		case $path.'pde_recepcion_estado_adm.php':
		case $path.'pde_recepcion_estado_alta.php':
			$seleccionado = 'pde_recepcion_estados';
		break;
		
		/* PdeRecepcionTipoEstado */
		case $path.'pde_recepcion_tipo_estado_adm.php':
		case $path.'pde_recepcion_tipo_estado_alta.php':
			$seleccionado = 'pde_recepcion_tipo_estados';
		break;
		
		/* PdeRecepcionTipoEstadoFacturacion */
		case $path.'pde_recepcion_tipo_estado_facturacion_adm.php':
		case $path.'pde_recepcion_tipo_estado_facturacion_alta.php':
			$seleccionado = 'pde_recepcion_tipo_estado_facturacions';
		break;
		
		/* PdeRecepcionEstadoFacturacion */
		case $path.'pde_recepcion_estado_facturacion_adm.php':
		case $path.'pde_recepcion_estado_facturacion_alta.php':
			$seleccionado = 'pde_recepcion_estado_facturacions';
		break;
		
		/* PdeRecepcionDestinatario */
		case $path.'pde_recepcion_destinatario_adm.php':
		case $path.'pde_recepcion_destinatario_alta.php':
			$seleccionado = 'pde_recepcion_destinatarios';
		break;
		
		/* PdeTipoRecepcion */
		case $path.'pde_tipo_recepcion_adm.php':
		case $path.'pde_tipo_recepcion_alta.php':
			$seleccionado = 'pde_tipo_recepcions';
		break;
		
		/* PdeCentroRecepcion */
		case $path.'pde_centro_recepcion_adm.php':
		case $path.'pde_centro_recepcion_alta.php':
			$seleccionado = 'pde_centro_recepcions';
		break;
		
		/* PdeCentroRecepcionPanPanol */
		case $path.'pde_centro_recepcion_pan_panol_adm.php':
		case $path.'pde_centro_recepcion_pan_panol_alta.php':
			$seleccionado = 'pde_centro_recepcion_pan_panols';
		break;
		
		/* PdeCentroRecepcionUsUsuario */
		case $path.'pde_centro_recepcion_us_usuario_adm.php':
		case $path.'pde_centro_recepcion_us_usuario_alta.php':
			$seleccionado = 'pde_centro_recepcion_us_usuarios';
		break;
		
		/* PdeCentroPedido */
		case $path.'pde_centro_pedido_adm.php':
		case $path.'pde_centro_pedido_alta.php':
			$seleccionado = 'pde_centro_pedidos';
		break;
		
		/* PdeCentroPedidoUsUsuario */
		case $path.'pde_centro_pedido_us_usuario_adm.php':
		case $path.'pde_centro_pedido_us_usuario_alta.php':
			$seleccionado = 'pde_centro_pedido_us_usuarios';
		break;
		
		/* PdeCentroPedidoEmail */
		case $path.'pde_centro_pedido_email_adm.php':
		case $path.'pde_centro_pedido_email_alta.php':
			$seleccionado = 'pde_centro_pedido_emails';
		break;
		
		/* PdeCentroPedidoPrvProveedor */
		case $path.'pde_centro_pedido_prv_proveedor_adm.php':
		case $path.'pde_centro_pedido_prv_proveedor_alta.php':
			$seleccionado = 'pde_centro_pedido_prv_proveedors';
		break;
		
		/* PdeCentroPedidoPdeCentroRecepcion */
		case $path.'pde_centro_pedido_pde_centro_recepcion_adm.php':
		case $path.'pde_centro_pedido_pde_centro_recepcion_alta.php':
			$seleccionado = 'pde_centro_pedido_pde_centro_recepcions';
		break;
		
		/* PdeOcReclamo */
		case $path.'pde_oc_reclamo_adm.php':
		case $path.'pde_oc_reclamo_alta.php':
			$seleccionado = 'pde_oc_reclamos';
		break;
		
		/* PdeOcReclamoMotivo */
		case $path.'pde_oc_reclamo_motivo_adm.php':
		case $path.'pde_oc_reclamo_motivo_alta.php':
			$seleccionado = 'pde_oc_reclamo_motivos';
		break;
		
		/* PdeOcReclamoDestinatario */
		case $path.'pde_oc_reclamo_destinatario_adm.php':
		case $path.'pde_oc_reclamo_destinatario_alta.php':
			$seleccionado = 'pde_oc_reclamo_destinatarios';
		break;
		
		/* PdeOcReclamoEnvioEmail */
		case $path.'pde_oc_reclamo_envio_email_adm.php':
		case $path.'pde_oc_reclamo_envio_email_alta.php':
			$seleccionado = 'pde_oc_reclamo_envio_emails';
		break;
		
		/* PdeTributo */
		case $path.'pde_tributo_adm.php':
		case $path.'pde_tributo_alta.php':
			$seleccionado = 'pde_tributos';
		break;
		
		/* PdeTipoFactura */
		case $path.'pde_tipo_factura_adm.php':
		case $path.'pde_tipo_factura_alta.php':
			$seleccionado = 'pde_tipo_facturas';
		break;
		
		/* PdeTipoFacturaWsFeParamTipoComprobante */
		case $path.'pde_tipo_factura_ws_fe_param_tipo_comprobante_adm.php':
		case $path.'pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php':
			$seleccionado = 'pde_tipo_factura_ws_fe_param_tipo_comprobantes';
		break;
		
		/* PdeTipoOrigenFactura */
		case $path.'pde_tipo_origen_factura_adm.php':
		case $path.'pde_tipo_origen_factura_alta.php':
			$seleccionado = 'pde_tipo_origen_facturas';
		break;
		
		/* PdeFactura */
		case $path.'pde_factura_adm.php':
		case $path.'pde_factura_alta.php':
			$seleccionado = 'pde_facturas';
		break;
		
		/* PdeFacturaImagen */
		case $path.'pde_factura_imagen_adm.php':
		case $path.'pde_factura_imagen_alta.php':
			$seleccionado = 'pde_factura_imagens';
		break;
		
		/* PdeFacturaArchivo */
		case $path.'pde_factura_archivo_adm.php':
		case $path.'pde_factura_archivo_alta.php':
			$seleccionado = 'pde_factura_archivos';
		break;
		
		/* PdeFacturaTipoEstado */
		case $path.'pde_factura_tipo_estado_adm.php':
		case $path.'pde_factura_tipo_estado_alta.php':
			$seleccionado = 'pde_factura_tipo_estados';
		break;
		
		/* PdeFacturaEstado */
		case $path.'pde_factura_estado_adm.php':
		case $path.'pde_factura_estado_alta.php':
			$seleccionado = 'pde_factura_estados';
		break;
		
		/* PdeFacturaConcepto */
		case $path.'pde_factura_concepto_adm.php':
		case $path.'pde_factura_concepto_alta.php':
			$seleccionado = 'pde_factura_conceptos';
		break;
		
		/* PdeFacturaItem */
		case $path.'pde_factura_item_adm.php':
		case $path.'pde_factura_item_alta.php':
			$seleccionado = 'pde_factura_items';
		break;
		
		/* PdeFacturaPdeTributo */
		case $path.'pde_factura_pde_tributo_adm.php':
		case $path.'pde_factura_pde_tributo_alta.php':
			$seleccionado = 'pde_factura_pde_tributos';
		break;
		
		/* PdeFacturaPdeOc */
		case $path.'pde_factura_pde_oc_adm.php':
		case $path.'pde_factura_pde_oc_alta.php':
			$seleccionado = 'pde_factura_pde_ocs';
		break;
		
		/* PdeFacturaPdeRecepcion */
		case $path.'pde_factura_pde_recepcion_adm.php':
		case $path.'pde_factura_pde_recepcion_alta.php':
			$seleccionado = 'pde_factura_pde_recepcions';
		break;
		
		/* PdeFacturaPdeRecibo */
		case $path.'pde_factura_pde_recibo_adm.php':
		case $path.'pde_factura_pde_recibo_alta.php':
			$seleccionado = 'pde_factura_pde_recibos';
		break;
		
		/* PdeFacturaPdeNotaCredito */
		case $path.'pde_factura_pde_nota_credito_adm.php':
		case $path.'pde_factura_pde_nota_credito_alta.php':
			$seleccionado = 'pde_factura_pde_nota_creditos';
		break;
		
		/* PdeTipoNotaCredito */
		case $path.'pde_tipo_nota_credito_adm.php':
		case $path.'pde_tipo_nota_credito_alta.php':
			$seleccionado = 'pde_tipo_nota_creditos';
		break;
		
		/* PdeTipoNotaCreditoWsFeParamTipoComprobante */
		case $path.'pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_adm.php':
		case $path.'pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php':
			$seleccionado = 'pde_tipo_nota_credito_ws_fe_param_tipo_comprobantes';
		break;
		
		/* PdeTipoOrigenNotaCredito */
		case $path.'pde_tipo_origen_nota_credito_adm.php':
		case $path.'pde_tipo_origen_nota_credito_alta.php':
			$seleccionado = 'pde_tipo_origen_nota_creditos';
		break;
		
		/* PdeNotaCredito */
		case $path.'pde_nota_credito_adm.php':
		case $path.'pde_nota_credito_alta.php':
			$seleccionado = 'pde_nota_creditos';
		break;
		
		/* PdeNotaCreditoImagen */
		case $path.'pde_nota_credito_imagen_adm.php':
		case $path.'pde_nota_credito_imagen_alta.php':
			$seleccionado = 'pde_nota_credito_imagens';
		break;
		
		/* PdeNotaCreditoArchivo */
		case $path.'pde_nota_credito_archivo_adm.php':
		case $path.'pde_nota_credito_archivo_alta.php':
			$seleccionado = 'pde_nota_credito_archivos';
		break;
		
		/* PdeNotaCreditoTipoEstado */
		case $path.'pde_nota_credito_tipo_estado_adm.php':
		case $path.'pde_nota_credito_tipo_estado_alta.php':
			$seleccionado = 'pde_nota_credito_tipo_estados';
		break;
		
		/* PdeNotaCreditoEstado */
		case $path.'pde_nota_credito_estado_adm.php':
		case $path.'pde_nota_credito_estado_alta.php':
			$seleccionado = 'pde_nota_credito_estados';
		break;
		
		/* PdeNotaCreditoConcepto */
		case $path.'pde_nota_credito_concepto_adm.php':
		case $path.'pde_nota_credito_concepto_alta.php':
			$seleccionado = 'pde_nota_credito_conceptos';
		break;
		
		/* PdeNotaCreditoPdeFacturaPdeRecepcion */
		case $path.'pde_nota_credito_pde_factura_pde_recepcion_adm.php':
		case $path.'pde_nota_credito_pde_factura_pde_recepcion_alta.php':
			$seleccionado = 'pde_nota_credito_pde_factura_pde_recepcions';
		break;
		
		/* PdeNotaCreditoPdeFacturaPdeOc */
		case $path.'pde_nota_credito_pde_factura_pde_oc_adm.php':
		case $path.'pde_nota_credito_pde_factura_pde_oc_alta.php':
			$seleccionado = 'pde_nota_credito_pde_factura_pde_ocs';
		break;
		
		/* PdeNotaCreditoPdeFacturaPdeTributo */
		case $path.'pde_nota_credito_pde_factura_pde_tributo_adm.php':
		case $path.'pde_nota_credito_pde_factura_pde_tributo_alta.php':
			$seleccionado = 'pde_nota_credito_pde_factura_pde_tributos';
		break;
		
		/* PdeNotaCreditoItem */
		case $path.'pde_nota_credito_item_adm.php':
		case $path.'pde_nota_credito_item_alta.php':
			$seleccionado = 'pde_nota_credito_items';
		break;
		
		/* PdeNotaCreditoPdeTributo */
		case $path.'pde_nota_credito_pde_tributo_adm.php':
		case $path.'pde_nota_credito_pde_tributo_alta.php':
			$seleccionado = 'pde_nota_credito_pde_tributos';
		break;
		
		/* PdeTipoNotaDebito */
		case $path.'pde_tipo_nota_debito_adm.php':
		case $path.'pde_tipo_nota_debito_alta.php':
			$seleccionado = 'pde_tipo_nota_debitos';
		break;
		
		/* PdeTipoNotaDebitoWsFeParamTipoComprobante */
		case $path.'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_adm.php':
		case $path.'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php':
			$seleccionado = 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobantes';
		break;
		
		/* PdeTipoOrigenNotaDebito */
		case $path.'pde_tipo_origen_nota_debito_adm.php':
		case $path.'pde_tipo_origen_nota_debito_alta.php':
			$seleccionado = 'pde_tipo_origen_nota_debitos';
		break;
		
		/* PdeNotaDebito */
		case $path.'pde_nota_debito_adm.php':
		case $path.'pde_nota_debito_alta.php':
			$seleccionado = 'pde_nota_debitos';
		break;
		
		/* PdeNotaDebitoImagen */
		case $path.'pde_nota_debito_imagen_adm.php':
		case $path.'pde_nota_debito_imagen_alta.php':
			$seleccionado = 'pde_nota_debito_imagens';
		break;
		
		/* PdeNotaDebitoArchivo */
		case $path.'pde_nota_debito_archivo_adm.php':
		case $path.'pde_nota_debito_archivo_alta.php':
			$seleccionado = 'pde_nota_debito_archivos';
		break;
		
		/* PdeNotaDebitoTipoEstado */
		case $path.'pde_nota_debito_tipo_estado_adm.php':
		case $path.'pde_nota_debito_tipo_estado_alta.php':
			$seleccionado = 'pde_nota_debito_tipo_estados';
		break;
		
		/* PdeNotaDebitoEstado */
		case $path.'pde_nota_debito_estado_adm.php':
		case $path.'pde_nota_debito_estado_alta.php':
			$seleccionado = 'pde_nota_debito_estados';
		break;
		
		/* PdeNotaDebitoConcepto */
		case $path.'pde_nota_debito_concepto_adm.php':
		case $path.'pde_nota_debito_concepto_alta.php':
			$seleccionado = 'pde_nota_debito_conceptos';
		break;
		
		/* PdeNotaDebitoItem */
		case $path.'pde_nota_debito_item_adm.php':
		case $path.'pde_nota_debito_item_alta.php':
			$seleccionado = 'pde_nota_debito_items';
		break;
		
		/* PdeNotaDebitoPdeTributo */
		case $path.'pde_nota_debito_pde_tributo_adm.php':
		case $path.'pde_nota_debito_pde_tributo_alta.php':
			$seleccionado = 'pde_nota_debito_pde_tributos';
		break;
		
		/* PdeNotaDebitoPdeNotaCredito */
		case $path.'pde_nota_debito_pde_nota_credito_adm.php':
		case $path.'pde_nota_debito_pde_nota_credito_alta.php':
			$seleccionado = 'pde_nota_debito_pde_nota_creditos';
		break;
		
		/* PdeNotaDebitoPdeRecibo */
		case $path.'pde_nota_debito_pde_recibo_adm.php':
		case $path.'pde_nota_debito_pde_recibo_alta.php':
			$seleccionado = 'pde_nota_debito_pde_recibos';
		break;
		
		/* PdeTipoRecibo */
		case $path.'pde_tipo_recibo_adm.php':
		case $path.'pde_tipo_recibo_alta.php':
			$seleccionado = 'pde_tipo_recibos';
		break;
		
		/* PdeTipoOrigenRecibo */
		case $path.'pde_tipo_origen_recibo_adm.php':
		case $path.'pde_tipo_origen_recibo_alta.php':
			$seleccionado = 'pde_tipo_origen_recibos';
		break;
		
		/* PdeRecibo */
		case $path.'pde_recibo_adm.php':
		case $path.'pde_recibo_alta.php':
			$seleccionado = 'pde_recibos';
		break;
		
		/* PdeReciboImagen */
		case $path.'pde_recibo_imagen_adm.php':
		case $path.'pde_recibo_imagen_alta.php':
			$seleccionado = 'pde_recibo_imagens';
		break;
		
		/* PdeReciboArchivo */
		case $path.'pde_recibo_archivo_adm.php':
		case $path.'pde_recibo_archivo_alta.php':
			$seleccionado = 'pde_recibo_archivos';
		break;
		
		/* PdeReciboTipoEstado */
		case $path.'pde_recibo_tipo_estado_adm.php':
		case $path.'pde_recibo_tipo_estado_alta.php':
			$seleccionado = 'pde_recibo_tipo_estados';
		break;
		
		/* PdeReciboEstado */
		case $path.'pde_recibo_estado_adm.php':
		case $path.'pde_recibo_estado_alta.php':
			$seleccionado = 'pde_recibo_estados';
		break;
		
		/* PdeReciboConcepto */
		case $path.'pde_recibo_concepto_adm.php':
		case $path.'pde_recibo_concepto_alta.php':
			$seleccionado = 'pde_recibo_conceptos';
		break;
		
		/* PdeReciboItem */
		case $path.'pde_recibo_item_adm.php':
		case $path.'pde_recibo_item_alta.php':
			$seleccionado = 'pde_recibo_items';
		break;
		
		/* PdeReciboItemCheque */
		case $path.'pde_recibo_item_cheque_adm.php':
		case $path.'pde_recibo_item_cheque_alta.php':
			$seleccionado = 'pde_recibo_item_cheques';
		break;
		
		/* PdeReciboPdeTributo */
		case $path.'pde_recibo_pde_tributo_adm.php':
		case $path.'pde_recibo_pde_tributo_alta.php':
			$seleccionado = 'pde_recibo_pde_tributos';
		break;
		
		/* PdeOrdenPago */
		case $path.'pde_orden_pago_adm.php':
		case $path.'pde_orden_pago_alta.php':
			$seleccionado = 'pde_orden_pagos';
		break;
		
		/* PdeOrdenPagoTipoEstado */
		case $path.'pde_orden_pago_tipo_estado_adm.php':
		case $path.'pde_orden_pago_tipo_estado_alta.php':
			$seleccionado = 'pde_orden_pago_tipo_estados';
		break;
		
		/* PdeOrdenPagoEstado */
		case $path.'pde_orden_pago_estado_adm.php':
		case $path.'pde_orden_pago_estado_alta.php':
			$seleccionado = 'pde_orden_pago_estados';
		break;
		
		/* PdeOrdenPagoEnviado */
		case $path.'pde_orden_pago_enviado_adm.php':
		case $path.'pde_orden_pago_enviado_alta.php':
			$seleccionado = 'pde_orden_pago_enviados';
		break;
		
		/* PdeOrdenPagoPdeFactura */
		case $path.'pde_orden_pago_pde_factura_adm.php':
		case $path.'pde_orden_pago_pde_factura_alta.php':
			$seleccionado = 'pde_orden_pago_pde_facturas';
		break;
		
		/* PdeOrdenPagoPdeNotaDebito */
		case $path.'pde_orden_pago_pde_nota_debito_adm.php':
		case $path.'pde_orden_pago_pde_nota_debito_alta.php':
			$seleccionado = 'pde_orden_pago_pde_nota_debitos';
		break;
		
		/* PdeOrdenPagoGralFpFormaPago */
		case $path.'pde_orden_pago_gral_fp_forma_pago_adm.php':
		case $path.'pde_orden_pago_gral_fp_forma_pago_alta.php':
			$seleccionado = 'pde_orden_pago_gral_fp_forma_pagos';
		break;
		
		/* PdeOrdenPagoGralFpFormaPagoCheque */
		case $path.'pde_orden_pago_gral_fp_forma_pago_cheque_adm.php':
		case $path.'pde_orden_pago_gral_fp_forma_pago_cheque_alta.php':
			$seleccionado = 'pde_orden_pago_gral_fp_forma_pago_cheques';
		break;
		
		/* CntbTipoSaldo */
		case $path.'cntb_tipo_saldo_adm.php':
		case $path.'cntb_tipo_saldo_alta.php':
			$seleccionado = 'cntb_tipo_saldos';
		break;
		
		/* CntbTipoClasificacion */
		case $path.'cntb_tipo_clasificacion_adm.php':
		case $path.'cntb_tipo_clasificacion_alta.php':
			$seleccionado = 'cntb_tipo_clasificacions';
		break;
		
		/* CntbTipoCuenta */
		case $path.'cntb_tipo_cuenta_adm.php':
		case $path.'cntb_tipo_cuenta_alta.php':
			$seleccionado = 'cntb_tipo_cuentas';
		break;
		
		/* CntbTipoAsiento */
		case $path.'cntb_tipo_asiento_adm.php':
		case $path.'cntb_tipo_asiento_alta.php':
			$seleccionado = 'cntb_tipo_asientos';
		break;
		
		/* CntbTipoOrigen */
		case $path.'cntb_tipo_origen_adm.php':
		case $path.'cntb_tipo_origen_alta.php':
			$seleccionado = 'cntb_tipo_origens';
		break;
		
		/* CntbTipoMovimiento */
		case $path.'cntb_tipo_movimiento_adm.php':
		case $path.'cntb_tipo_movimiento_alta.php':
			$seleccionado = 'cntb_tipo_movimientos';
		break;
		
		/* CntbCuenta */
		case $path.'cntb_cuenta_adm.php':
		case $path.'cntb_cuenta_alta.php':
			$seleccionado = 'cntb_cuentas';
		break;
		
		/* CntbEjercicio */
		case $path.'cntb_ejercicio_adm.php':
		case $path.'cntb_ejercicio_alta.php':
			$seleccionado = 'cntb_ejercicios';
		break;
		
		/* CntbDiarioAsiento */
		case $path.'cntb_diario_asiento_adm.php':
		case $path.'cntb_diario_asiento_alta.php':
			$seleccionado = 'cntb_diario_asientos';
		break;
		
		/* CntbDiarioAsientoCuenta */
		case $path.'cntb_diario_asiento_cuenta_adm.php':
		case $path.'cntb_diario_asiento_cuenta_alta.php':
			$seleccionado = 'cntb_diario_asiento_cuentas';
		break;
		
		/* CntbDiarioAsientoVtaFactura */
		case $path.'cntb_diario_asiento_vta_factura_adm.php':
		case $path.'cntb_diario_asiento_vta_factura_alta.php':
			$seleccionado = 'cntb_diario_asiento_vta_facturas';
		break;
		
		/* CntbDiarioAsientoVtaNotaCredito */
		case $path.'cntb_diario_asiento_vta_nota_credito_adm.php':
		case $path.'cntb_diario_asiento_vta_nota_credito_alta.php':
			$seleccionado = 'cntb_diario_asiento_vta_nota_creditos';
		break;
		
		/* CntbDiarioAsientoVtaNotaDebito */
		case $path.'cntb_diario_asiento_vta_nota_debito_adm.php':
		case $path.'cntb_diario_asiento_vta_nota_debito_alta.php':
			$seleccionado = 'cntb_diario_asiento_vta_nota_debitos';
		break;
		
		/* CntbDiarioAsientoVtaRecibo */
		case $path.'cntb_diario_asiento_vta_recibo_adm.php':
		case $path.'cntb_diario_asiento_vta_recibo_alta.php':
			$seleccionado = 'cntb_diario_asiento_vta_recibos';
		break;
		
		/* CntbDiarioAsientoPdeFactura */
		case $path.'cntb_diario_asiento_pde_factura_adm.php':
		case $path.'cntb_diario_asiento_pde_factura_alta.php':
			$seleccionado = 'cntb_diario_asiento_pde_facturas';
		break;
		
		/* CntbDiarioAsientoPdeNotaCredito */
		case $path.'cntb_diario_asiento_pde_nota_credito_adm.php':
		case $path.'cntb_diario_asiento_pde_nota_credito_alta.php':
			$seleccionado = 'cntb_diario_asiento_pde_nota_creditos';
		break;
		
		/* CntbDiarioAsientoPdeNotaDebito */
		case $path.'cntb_diario_asiento_pde_nota_debito_adm.php':
		case $path.'cntb_diario_asiento_pde_nota_debito_alta.php':
			$seleccionado = 'cntb_diario_asiento_pde_nota_debitos';
		break;
		
		/* CntbDiarioAsientoPdeRecibo */
		case $path.'cntb_diario_asiento_pde_recibo_adm.php':
		case $path.'cntb_diario_asiento_pde_recibo_alta.php':
			$seleccionado = 'cntb_diario_asiento_pde_recibos';
		break;
		
		/* AfipCitiPrc */
		case $path.'afip_citi_prc_adm.php':
		case $path.'afip_citi_prc_alta.php':
			$seleccionado = 'afip_citi_prcs';
		break;
		
		/* AfipCitiCabecera */
		case $path.'afip_citi_cabecera_adm.php':
		case $path.'afip_citi_cabecera_alta.php':
			$seleccionado = 'afip_citi_cabeceras';
		break;
		
		/* AfipCitiVentasCbte */
		case $path.'afip_citi_ventas_cbte_adm.php':
		case $path.'afip_citi_ventas_cbte_alta.php':
			$seleccionado = 'afip_citi_ventas_cbtes';
		break;
		
		/* AfipCitiVentasAlicuotas */
		case $path.'afip_citi_ventas_alicuotas_adm.php':
		case $path.'afip_citi_ventas_alicuotas_alta.php':
			$seleccionado = 'afip_citi_ventas_alicuotass';
		break;
		
		/* AfipCitiComprasCbte */
		case $path.'afip_citi_compras_cbte_adm.php':
		case $path.'afip_citi_compras_cbte_alta.php':
			$seleccionado = 'afip_citi_compras_cbtes';
		break;
		
		/* AfipCitiComprasAlicuotas */
		case $path.'afip_citi_compras_alicuotas_adm.php':
		case $path.'afip_citi_compras_alicuotas_alta.php':
			$seleccionado = 'afip_citi_compras_alicuotass';
		break;
		
		/* AfipCitiComprasImportaciones */
		case $path.'afip_citi_compras_importaciones_adm.php':
		case $path.'afip_citi_compras_importaciones_alta.php':
			$seleccionado = 'afip_citi_compras_importacioness';
		break;
		
		/* NovNovedad */
		case $path.'nov_novedad_adm.php':
		case $path.'nov_novedad_alta.php':
			$seleccionado = 'nov_novedads';
		break;
		
		/* NovNovedadImagen */
		case $path.'nov_novedad_imagen_adm.php':
		case $path.'nov_novedad_imagen_alta.php':
			$seleccionado = 'nov_novedad_imagens';
		break;
		
		/* NovNovedadArchivo */
		case $path.'nov_novedad_archivo_adm.php':
		case $path.'nov_novedad_archivo_alta.php':
			$seleccionado = 'nov_novedad_archivos';
		break;
		
		/* NovNovedadDestinatario */
		case $path.'nov_novedad_destinatario_adm.php':
		case $path.'nov_novedad_destinatario_alta.php':
			$seleccionado = 'nov_novedad_destinatarios';
		break;
		
		/* NovNovedadObservado */
		case $path.'nov_novedad_observado_adm.php':
		case $path.'nov_novedad_observado_alta.php':
			$seleccionado = 'nov_novedad_observados';
		break;
		
		/* NovNovedadLeido */
		case $path.'nov_novedad_leido_adm.php':
		case $path.'nov_novedad_leido_alta.php':
			$seleccionado = 'nov_novedad_leidos';
		break;
		
		/* AltModulo */
		case $path.'alt_modulo_adm.php':
		case $path.'alt_modulo_alta.php':
			$seleccionado = 'alt_modulos';
		break;
		
		/* AltAlertaUsUsuario */
		case $path.'alt_alerta_us_usuario_adm.php':
		case $path.'alt_alerta_us_usuario_alta.php':
			$seleccionado = 'alt_alerta_us_usuarios';
		break;
		
		/* AltAlertaEnvioEmail */
		case $path.'alt_alerta_envio_email_adm.php':
		case $path.'alt_alerta_envio_email_alta.php':
			$seleccionado = 'alt_alerta_envio_emails';
		break;
		
		/* AltControl */
		case $path.'alt_control_adm.php':
		case $path.'alt_control_alta.php':
			$seleccionado = 'alt_controls';
		break;
		
		/* AltControlUsUsuario */
		case $path.'alt_control_us_usuario_adm.php':
		case $path.'alt_control_us_usuario_alta.php':
			$seleccionado = 'alt_control_us_usuarios';
		break;
		
		/* AltTipo */
		case $path.'alt_tipo_adm.php':
		case $path.'alt_tipo_alta.php':
			$seleccionado = 'alt_tipos';
		break;
		
		/* AltAlerta */
		case $path.'alt_alerta_adm.php':
		case $path.'alt_alerta_alta.php':
			$seleccionado = 'alt_alertas';
		break;
		
		/* AltOrigen */
		case $path.'alt_origen_adm.php':
		case $path.'alt_origen_alta.php':
			$seleccionado = 'alt_origens';
		break;
		
		/* AltControlUsGrupo */
		case $path.'alt_control_us_grupo_adm.php':
		case $path.'alt_control_us_grupo_alta.php':
			$seleccionado = 'alt_control_us_grupos';
		break;
		
		/* AltNivel */
		case $path.'alt_nivel_adm.php':
		case $path.'alt_nivel_alta.php':
			$seleccionado = 'alt_nivels';
		break;
		
		/* FndCaja */
		case $path.'fnd_caja_adm.php':
		case $path.'fnd_caja_alta.php':
			$seleccionado = 'fnd_cajas';
		break;
		
		/* FndCajaTipoEstado */
		case $path.'fnd_caja_tipo_estado_adm.php':
		case $path.'fnd_caja_tipo_estado_alta.php':
			$seleccionado = 'fnd_caja_tipo_estados';
		break;
		
		/* FndCajaEstado */
		case $path.'fnd_caja_estado_adm.php':
		case $path.'fnd_caja_estado_alta.php':
			$seleccionado = 'fnd_caja_estados';
		break;
		
		/* FndCajaIngreso */
		case $path.'fnd_caja_ingreso_adm.php':
		case $path.'fnd_caja_ingreso_alta.php':
			$seleccionado = 'fnd_caja_ingresos';
		break;
		
		/* FndCajaTipoIngreso */
		case $path.'fnd_caja_tipo_ingreso_adm.php':
		case $path.'fnd_caja_tipo_ingreso_alta.php':
			$seleccionado = 'fnd_caja_tipo_ingresos';
		break;
		
		/* FndCajaEgreso */
		case $path.'fnd_caja_egreso_adm.php':
		case $path.'fnd_caja_egreso_alta.php':
			$seleccionado = 'fnd_caja_egresos';
		break;
		
		/* FndCajaTipoEgreso */
		case $path.'fnd_caja_tipo_egreso_adm.php':
		case $path.'fnd_caja_tipo_egreso_alta.php':
			$seleccionado = 'fnd_caja_tipo_egresos';
		break;
		
		/* FndCajero */
		case $path.'fnd_cajero_adm.php':
		case $path.'fnd_cajero_alta.php':
			$seleccionado = 'fnd_cajeros';
		break;
		
		/* FndCajeroUsUsuario */
		case $path.'fnd_cajero_us_usuario_adm.php':
		case $path.'fnd_cajero_us_usuario_alta.php':
			$seleccionado = 'fnd_cajero_us_usuarios';
		break;
		
		/* FndCajeroGralCaja */
		case $path.'fnd_cajero_gral_caja_adm.php':
		case $path.'fnd_cajero_gral_caja_alta.php':
			$seleccionado = 'fnd_cajero_gral_cajas';
		break;
		
		/* FndCajaTipoMovimiento */
		case $path.'fnd_caja_tipo_movimiento_adm.php':
		case $path.'fnd_caja_tipo_movimiento_alta.php':
			$seleccionado = 'fnd_caja_tipo_movimientos';
		break;
		
		/* FndCajaMovimiento */
		case $path.'fnd_caja_movimiento_adm.php':
		case $path.'fnd_caja_movimiento_alta.php':
			$seleccionado = 'fnd_caja_movimientos';
		break;
		
		/* FndCajaMovimientoItem */
		case $path.'fnd_caja_movimiento_item_adm.php':
		case $path.'fnd_caja_movimiento_item_alta.php':
			$seleccionado = 'fnd_caja_movimiento_items';
		break;
		
		/* FndCajaMovimientoEstado */
		case $path.'fnd_caja_movimiento_estado_adm.php':
		case $path.'fnd_caja_movimiento_estado_alta.php':
			$seleccionado = 'fnd_caja_movimiento_estados';
		break;
		
		/* FndCajaMovimientoTipoEstado */
		case $path.'fnd_caja_movimiento_tipo_estado_adm.php':
		case $path.'fnd_caja_movimiento_tipo_estado_alta.php':
			$seleccionado = 'fnd_caja_movimiento_tipo_estados';
		break;
		
		/* FndChqChequera */
		case $path.'fnd_chq_chequera_adm.php':
		case $path.'fnd_chq_chequera_alta.php':
			$seleccionado = 'fnd_chq_chequeras';
		break;
		
		/* FndChqTipoEstado */
		case $path.'fnd_chq_tipo_estado_adm.php':
		case $path.'fnd_chq_tipo_estado_alta.php':
			$seleccionado = 'fnd_chq_tipo_estados';
		break;
		
		/* FndChqTipoEmisor */
		case $path.'fnd_chq_tipo_emisor_adm.php':
		case $path.'fnd_chq_tipo_emisor_alta.php':
			$seleccionado = 'fnd_chq_tipo_emisors';
		break;
		
		/* FndChqTipoEmision */
		case $path.'fnd_chq_tipo_emision_adm.php':
		case $path.'fnd_chq_tipo_emision_alta.php':
			$seleccionado = 'fnd_chq_tipo_emisions';
		break;
		
		/* FndChqTipoPago */
		case $path.'fnd_chq_tipo_pago_adm.php':
		case $path.'fnd_chq_tipo_pago_alta.php':
			$seleccionado = 'fnd_chq_tipo_pagos';
		break;
		
		/* FndChqEstado */
		case $path.'fnd_chq_estado_adm.php':
		case $path.'fnd_chq_estado_alta.php':
			$seleccionado = 'fnd_chq_estados';
		break;
		
		/* FndChqCheque */
		case $path.'fnd_chq_cheque_adm.php':
		case $path.'fnd_chq_cheque_alta.php':
			$seleccionado = 'fnd_chq_cheques';
		break;
		
		/* FndChqTipoEmisorFndChqTipoEstado */
		case $path.'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_adm.php':
		case $path.'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php':
			$seleccionado = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estados';
		break;
		
		/* MlAutorization */
		case $path.'ml_autorization_adm.php':
		case $path.'ml_autorization_alta.php':
			$seleccionado = 'ml_autorizations';
		break;
		
		/* MlListingType */
		case $path.'ml_listing_type_adm.php':
		case $path.'ml_listing_type_alta.php':
			$seleccionado = 'ml_listing_types';
		break;
		
		/* MlCondition */
		case $path.'ml_condition_adm.php':
		case $path.'ml_condition_alta.php':
			$seleccionado = 'ml_conditions';
		break;
		
		/* MlCategory */
		case $path.'ml_category_adm.php':
		case $path.'ml_category_alta.php':
			$seleccionado = 'ml_categorys';
		break;
		
		/* MlAttribute */
		case $path.'ml_attribute_adm.php':
		case $path.'ml_attribute_alta.php':
			$seleccionado = 'ml_attributes';
		break;
		
		/* MlAttributeType */
		case $path.'ml_attribute_type_adm.php':
		case $path.'ml_attribute_type_alta.php':
			$seleccionado = 'ml_attribute_types';
		break;
		
		/* MlAttributeInsAtributo */
		case $path.'ml_attribute_ins_atributo_adm.php':
		case $path.'ml_attribute_ins_atributo_alta.php':
			$seleccionado = 'ml_attribute_ins_atributos';
		break;
		
		/* MlAttributeMlValue */
		case $path.'ml_attribute_ml_value_adm.php':
		case $path.'ml_attribute_ml_value_alta.php':
			$seleccionado = 'ml_attribute_ml_values';
		break;
		
		/* MlValue */
		case $path.'ml_value_adm.php':
		case $path.'ml_value_alta.php':
			$seleccionado = 'ml_values';
		break;
		
		/* MlCategoryMlAttribute */
		case $path.'ml_category_ml_attribute_adm.php':
		case $path.'ml_category_ml_attribute_alta.php':
			$seleccionado = 'ml_category_ml_attributes';
		break;
		
		/* MlValueInsMarca */
		case $path.'ml_value_ins_marca_adm.php':
		case $path.'ml_value_ins_marca_alta.php':
			$seleccionado = 'ml_value_ins_marcas';
		break;
		
		/* MlItemStatus */
		case $path.'ml_item_status_adm.php':
		case $path.'ml_item_status_alta.php':
			$seleccionado = 'ml_item_statuss';
		break;
		
}

?>
<link href='../css/admin/menu.css' rel='stylesheet' type='text/css' />

<div class='menu_titulo'><?php Lang::_lang('Menu') ?></div>

<ul id='adm_menu'>
  <li>
	<h3 class='head inicio'><a href='javascript:;' onclick='menu_grupo("inicio")'><?php Lang::_lang('Inicio') ?></a></h3>
	<ul>
	  <li><a href='index.php'><?php Lang::_lang('Inicio') ?></a></li>
    </ul>
  </li>
	
		  <li>
			<h3 class='head us_grupos'><a href='javascript:;' onclick='menu_grupo("us_grupos")'><?php Lang::_lang('UsGrupo') ?></a></h3>
			<ul>
			  <li><a href='us_grupo_alta.php'><?php Lang::_lang('Alta de UsGrupo') ?> </a></li>
			  <li><a href='us_grupo_adm.php'><?php Lang::_lang('Listado de UsGrupo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_agrupadors'><a href='javascript:;' onclick='menu_grupo("us_agrupadors")'><?php Lang::_lang('UsAgrupador') ?></a></h3>
			<ul>
			  <li><a href='us_agrupador_alta.php'><?php Lang::_lang('Alta de UsAgrupador') ?> </a></li>
			  <li><a href='us_agrupador_adm.php'><?php Lang::_lang('Listado de UsAgrupador') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_credencials'><a href='javascript:;' onclick='menu_grupo("us_credencials")'><?php Lang::_lang('UsCredencial') ?></a></h3>
			<ul>
			  <li><a href='us_credencial_alta.php'><?php Lang::_lang('Alta de UsCredencial') ?> </a></li>
			  <li><a href='us_credencial_adm.php'><?php Lang::_lang('Listado de UsCredencial') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_agrupados'><a href='javascript:;' onclick='menu_grupo("us_agrupados")'><?php Lang::_lang('UsAgrupado') ?></a></h3>
			<ul>
			  <li><a href='us_agrupado_alta.php'><?php Lang::_lang('Alta de UsAgrupado') ?> </a></li>
			  <li><a href='us_agrupado_adm.php'><?php Lang::_lang('Listado de UsAgrupado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_acreditados'><a href='javascript:;' onclick='menu_grupo("us_acreditados")'><?php Lang::_lang('UsAcreditado') ?></a></h3>
			<ul>
			  <li><a href='us_acreditado_alta.php'><?php Lang::_lang('Alta de UsAcreditado') ?> </a></li>
			  <li><a href='us_acreditado_adm.php'><?php Lang::_lang('Listado de UsAcreditado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_usuarios'><a href='javascript:;' onclick='menu_grupo("us_usuarios")'><?php Lang::_lang('UsUsuario') ?></a></h3>
			<ul>
			  <li><a href='us_usuario_alta.php'><?php Lang::_lang('Alta de UsUsuario') ?> </a></li>
			  <li><a href='us_usuario_adm.php'><?php Lang::_lang('Listado de UsUsuario') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_usuario_datos'><a href='javascript:;' onclick='menu_grupo("us_usuario_datos")'><?php Lang::_lang('UsUsuarioDato') ?></a></h3>
			<ul>
			  <li><a href='us_usuario_dato_alta.php'><?php Lang::_lang('Alta de UsUsuarioDato') ?> </a></li>
			  <li><a href='us_usuario_dato_adm.php'><?php Lang::_lang('Listado de UsUsuarioDato') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_mensajes'><a href='javascript:;' onclick='menu_grupo("us_mensajes")'><?php Lang::_lang('UsMensaje') ?></a></h3>
			<ul>
			  <li><a href='us_mensaje_alta.php'><?php Lang::_lang('Alta de UsMensaje') ?> </a></li>
			  <li><a href='us_mensaje_adm.php'><?php Lang::_lang('Listado de UsMensaje') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_memos'><a href='javascript:;' onclick='menu_grupo("us_memos")'><?php Lang::_lang('UsMemo') ?></a></h3>
			<ul>
			  <li><a href='us_memo_alta.php'><?php Lang::_lang('Alta de UsMemo') ?> </a></li>
			  <li><a href='us_memo_adm.php'><?php Lang::_lang('Listado de UsMemo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_memo_tipo_estados'><a href='javascript:;' onclick='menu_grupo("us_memo_tipo_estados")'><?php Lang::_lang('UsMemoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='us_memo_tipo_estado_alta.php'><?php Lang::_lang('Alta de UsMemoTipoEstado') ?> </a></li>
			  <li><a href='us_memo_tipo_estado_adm.php'><?php Lang::_lang('Listado de UsMemoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_memo_estados'><a href='javascript:;' onclick='menu_grupo("us_memo_estados")'><?php Lang::_lang('UsMemoEstado') ?></a></h3>
			<ul>
			  <li><a href='us_memo_estado_alta.php'><?php Lang::_lang('Alta de UsMemoEstado') ?> </a></li>
			  <li><a href='us_memo_estado_adm.php'><?php Lang::_lang('Listado de UsMemoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_memo_tipos'><a href='javascript:;' onclick='menu_grupo("us_memo_tipos")'><?php Lang::_lang('UsMemoTipos') ?></a></h3>
			<ul>
			  <li><a href='us_memo_tipo_alta.php'><?php Lang::_lang('Alta de UsMemoTipos') ?> </a></li>
			  <li><a href='us_memo_tipo_adm.php'><?php Lang::_lang('Listado de UsMemoTipos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_claves'><a href='javascript:;' onclick='menu_grupo("us_claves")'><?php Lang::_lang('UsClave') ?></a></h3>
			<ul>
			  <li><a href='us_clave_alta.php'><?php Lang::_lang('Alta de UsClave') ?> </a></li>
			  <li><a href='us_clave_adm.php'><?php Lang::_lang('Listado de UsClave') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_logins'><a href='javascript:;' onclick='menu_grupo("us_logins")'><?php Lang::_lang('UsLogins') ?></a></h3>
			<ul>
			  <li><a href='us_login_alta.php'><?php Lang::_lang('Alta de UsLogins') ?> </a></li>
			  <li><a href='us_login_adm.php'><?php Lang::_lang('Listado de UsLogins') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head us_navegacions'><a href='javascript:;' onclick='menu_grupo("us_navegacions")'><?php Lang::_lang('UsNavegacions') ?></a></h3>
			<ul>
			  <li><a href='us_navegacion_alta.php'><?php Lang::_lang('Alta de UsNavegacions') ?> </a></li>
			  <li><a href='us_navegacion_adm.php'><?php Lang::_lang('Listado de UsNavegacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head xml_lenguaje_codigos'><a href='javascript:;' onclick='menu_grupo("xml_lenguaje_codigos")'><?php Lang::_lang('XmlLenguajeCodigo') ?></a></h3>
			<ul>
			  <li><a href='xml_lenguaje_codigo_alta.php'><?php Lang::_lang('Alta de XmlLenguajeCodigo') ?> </a></li>
			  <li><a href='xml_lenguaje_codigo_adm.php'><?php Lang::_lang('Listado de XmlLenguajeCodigo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head xml_lenguaje_traduccions'><a href='javascript:;' onclick='menu_grupo("xml_lenguaje_traduccions")'><?php Lang::_lang('XmlLenguajeTraduccion') ?></a></h3>
			<ul>
			  <li><a href='xml_lenguaje_traduccion_alta.php'><?php Lang::_lang('Alta de XmlLenguajeTraduccion') ?> </a></li>
			  <li><a href='xml_lenguaje_traduccion_adm.php'><?php Lang::_lang('Listado de XmlLenguajeTraduccion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head geo_paiss'><a href='javascript:;' onclick='menu_grupo("geo_paiss")'><?php Lang::_lang('GeoPais') ?></a></h3>
			<ul>
			  <li><a href='geo_pais_alta.php'><?php Lang::_lang('Alta de GeoPais') ?> </a></li>
			  <li><a href='geo_pais_adm.php'><?php Lang::_lang('Listado de GeoPais') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head geo_provincias'><a href='javascript:;' onclick='menu_grupo("geo_provincias")'><?php Lang::_lang('GeoProvincia') ?></a></h3>
			<ul>
			  <li><a href='geo_provincia_alta.php'><?php Lang::_lang('Alta de GeoProvincia') ?> </a></li>
			  <li><a href='geo_provincia_adm.php'><?php Lang::_lang('Listado de GeoProvincia') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head geo_localidads'><a href='javascript:;' onclick='menu_grupo("geo_localidads")'><?php Lang::_lang('GeoLocalidad') ?></a></h3>
			<ul>
			  <li><a href='geo_localidad_alta.php'><?php Lang::_lang('Alta de GeoLocalidad') ?> </a></li>
			  <li><a href='geo_localidad_adm.php'><?php Lang::_lang('Listado de GeoLocalidad') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head conf_variables'><a href='javascript:;' onclick='menu_grupo("conf_variables")'><?php Lang::_lang('ConVariable') ?></a></h3>
			<ul>
			  <li><a href='conf_variable_alta.php'><?php Lang::_lang('Alta de ConVariable') ?> </a></li>
			  <li><a href='conf_variable_adm.php'><?php Lang::_lang('Listado de ConVariable') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head conf_categorias'><a href='javascript:;' onclick='menu_grupo("conf_categorias")'><?php Lang::_lang('ConfCategoria') ?></a></h3>
			<ul>
			  <li><a href='conf_categoria_alta.php'><?php Lang::_lang('Alta de ConfCategoria') ?> </a></li>
			  <li><a href='conf_categoria_adm.php'><?php Lang::_lang('Listado de ConfCategoria') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gen_arbol_tipos'><a href='javascript:;' onclick='menu_grupo("gen_arbol_tipos")'><?php Lang::_lang('GenArbolTipo') ?></a></h3>
			<ul>
			  <li><a href='gen_arbol_tipo_alta.php'><?php Lang::_lang('Alta de GenArbolTipo') ?> </a></li>
			  <li><a href='gen_arbol_tipo_adm.php'><?php Lang::_lang('Listado de GenArbolTipo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gen_arbols'><a href='javascript:;' onclick='menu_grupo("gen_arbols")'><?php Lang::_lang('GenArbol') ?></a></h3>
			<ul>
			  <li><a href='gen_arbol_alta.php'><?php Lang::_lang('Alta de GenArbol') ?> </a></li>
			  <li><a href='gen_arbol_adm.php'><?php Lang::_lang('Listado de GenArbol') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gen_menu_items'><a href='javascript:;' onclick='menu_grupo("gen_menu_items")'><?php Lang::_lang('GenMenuItem') ?></a></h3>
			<ul>
			  <li><a href='gen_menu_item_alta.php'><?php Lang::_lang('Alta de GenMenuItem') ?> </a></li>
			  <li><a href='gen_menu_item_adm.php'><?php Lang::_lang('Listado de GenMenuItem') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gen_widget_sectors'><a href='javascript:;' onclick='menu_grupo("gen_widget_sectors")'><?php Lang::_lang('GenWidgetSector') ?></a></h3>
			<ul>
			  <li><a href='gen_widget_sector_alta.php'><?php Lang::_lang('Alta de GenWidgetSector') ?> </a></li>
			  <li><a href='gen_widget_sector_adm.php'><?php Lang::_lang('Listado de GenWidgetSector') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gen_widgets'><a href='javascript:;' onclick='menu_grupo("gen_widgets")'><?php Lang::_lang('GenWidget') ?></a></h3>
			<ul>
			  <li><a href='gen_widget_alta.php'><?php Lang::_lang('Alta de GenWidget') ?> </a></li>
			  <li><a href='gen_widget_adm.php'><?php Lang::_lang('Listado de GenWidget') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_lenguajes'><a href='javascript:;' onclick='menu_grupo("gral_lenguajes")'><?php Lang::_lang('GralLenguaje') ?></a></h3>
			<ul>
			  <li><a href='gral_lenguaje_alta.php'><?php Lang::_lang('Alta de GralLenguaje') ?> </a></li>
			  <li><a href='gral_lenguaje_adm.php'><?php Lang::_lang('Listado de GralLenguaje') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_si_nos'><a href='javascript:;' onclick='menu_grupo("gral_si_nos")'><?php Lang::_lang('GralSiNo') ?></a></h3>
			<ul>
			  <li><a href='gral_si_no_alta.php'><?php Lang::_lang('Alta de GralSiNo') ?> </a></li>
			  <li><a href='gral_si_no_adm.php'><?php Lang::_lang('Listado de GralSiNo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_tipo_ivas'><a href='javascript:;' onclick='menu_grupo("gral_tipo_ivas")'><?php Lang::_lang('GralTipoIvas') ?></a></h3>
			<ul>
			  <li><a href='gral_tipo_iva_alta.php'><?php Lang::_lang('Alta de GralTipoIvas') ?> </a></li>
			  <li><a href='gral_tipo_iva_adm.php'><?php Lang::_lang('Listado de GralTipoIvas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_tipo_iva_ws_fe_param_tipo_ivas'><a href='javascript:;' onclick='menu_grupo("gral_tipo_iva_ws_fe_param_tipo_ivas")'><?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?></a></h3>
			<ul>
			  <li><a href='gral_tipo_iva_ws_fe_param_tipo_iva_alta.php'><?php Lang::_lang('Alta de GralTipoIvaWsFeParamTipoIva') ?> </a></li>
			  <li><a href='gral_tipo_iva_ws_fe_param_tipo_iva_adm.php'><?php Lang::_lang('Listado de GralTipoIvaWsFeParamTipoIva') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_tipo_documentos'><a href='javascript:;' onclick='menu_grupo("gral_tipo_documentos")'><?php Lang::_lang('GralTipoDocumentos') ?></a></h3>
			<ul>
			  <li><a href='gral_tipo_documento_alta.php'><?php Lang::_lang('Alta de GralTipoDocumentos') ?> </a></li>
			  <li><a href='gral_tipo_documento_adm.php'><?php Lang::_lang('Listado de GralTipoDocumentos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_tipo_documento_ws_fe_param_tipo_documentos'><a href='javascript:;' onclick='menu_grupo("gral_tipo_documento_ws_fe_param_tipo_documentos")'><?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumentos') ?></a></h3>
			<ul>
			  <li><a href='gral_tipo_documento_ws_fe_param_tipo_documento_alta.php'><?php Lang::_lang('Alta de GralTipoDocumentoWsFeParamTipoDocumentos') ?> </a></li>
			  <li><a href='gral_tipo_documento_ws_fe_param_tipo_documento_adm.php'><?php Lang::_lang('Listado de GralTipoDocumentoWsFeParamTipoDocumentos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_bancos'><a href='javascript:;' onclick='menu_grupo("gral_bancos")'><?php Lang::_lang('GralBanco') ?></a></h3>
			<ul>
			  <li><a href='gral_banco_alta.php'><?php Lang::_lang('Alta de GralBanco') ?> </a></li>
			  <li><a href='gral_banco_adm.php'><?php Lang::_lang('Listado de GralBanco') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_mess'><a href='javascript:;' onclick='menu_grupo("gral_mess")'><?php Lang::_lang('GralMess') ?></a></h3>
			<ul>
			  <li><a href='gral_mes_alta.php'><?php Lang::_lang('Alta de GralMess') ?> </a></li>
			  <li><a href='gral_mes_adm.php'><?php Lang::_lang('Listado de GralMess') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_medio_pagos'><a href='javascript:;' onclick='menu_grupo("gral_medio_pagos")'><?php Lang::_lang('GralMedioPagos') ?></a></h3>
			<ul>
			  <li><a href='gral_medio_pago_alta.php'><?php Lang::_lang('Alta de GralMedioPagos') ?> </a></li>
			  <li><a href='gral_medio_pago_adm.php'><?php Lang::_lang('Listado de GralMedioPagos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_ivas'><a href='javascript:;' onclick='menu_grupo("gral_condicion_ivas")'><?php Lang::_lang('GralCondicionIva') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_alta.php'><?php Lang::_lang('Alta de GralCondicionIva') ?> </a></li>
			  <li><a href='gral_condicion_iva_adm.php'><?php Lang::_lang('Listado de GralCondicionIva') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_iva_vta_tipo_facturas'><a href='javascript:;' onclick='menu_grupo("gral_condicion_iva_vta_tipo_facturas")'><?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_vta_tipo_factura_alta.php'><?php Lang::_lang('Alta de GralCondicionIvaVtaTipoFactura') ?> </a></li>
			  <li><a href='gral_condicion_iva_vta_tipo_factura_adm.php'><?php Lang::_lang('Listado de GralCondicionIvaVtaTipoFactura') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_iva_vta_tipo_nota_creditos'><a href='javascript:;' onclick='menu_grupo("gral_condicion_iva_vta_tipo_nota_creditos")'><?php Lang::_lang('GralCondicionIvaVtaTipoNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_vta_tipo_nota_credito_alta.php'><?php Lang::_lang('Alta de GralCondicionIvaVtaTipoNotaCredito') ?> </a></li>
			  <li><a href='gral_condicion_iva_vta_tipo_nota_credito_adm.php'><?php Lang::_lang('Listado de GralCondicionIvaVtaTipoNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_iva_vta_tipo_nota_debitos'><a href='javascript:;' onclick='menu_grupo("gral_condicion_iva_vta_tipo_nota_debitos")'><?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_vta_tipo_nota_debito_alta.php'><?php Lang::_lang('Alta de GralCondicionIvaVtaTipoNotaDebito') ?> </a></li>
			  <li><a href='gral_condicion_iva_vta_tipo_nota_debito_adm.php'><?php Lang::_lang('Listado de GralCondicionIvaVtaTipoNotaDebito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_iva_vta_tipo_recibos'><a href='javascript:;' onclick='menu_grupo("gral_condicion_iva_vta_tipo_recibos")'><?php Lang::_lang('GralCondicionIvaVtaTipoRecibo') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_vta_tipo_recibo_alta.php'><?php Lang::_lang('Alta de GralCondicionIvaVtaTipoRecibo') ?> </a></li>
			  <li><a href='gral_condicion_iva_vta_tipo_recibo_adm.php'><?php Lang::_lang('Listado de GralCondicionIvaVtaTipoRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_iva_pde_tipo_facturas'><a href='javascript:;' onclick='menu_grupo("gral_condicion_iva_pde_tipo_facturas")'><?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_pde_tipo_factura_alta.php'><?php Lang::_lang('Alta de GralCondicionIvaPdeTipoFactura') ?> </a></li>
			  <li><a href='gral_condicion_iva_pde_tipo_factura_adm.php'><?php Lang::_lang('Listado de GralCondicionIvaPdeTipoFactura') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_iva_pde_tipo_nota_creditos'><a href='javascript:;' onclick='menu_grupo("gral_condicion_iva_pde_tipo_nota_creditos")'><?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_pde_tipo_nota_credito_alta.php'><?php Lang::_lang('Alta de GralCondicionIvaPdeTipoNotaCredito') ?> </a></li>
			  <li><a href='gral_condicion_iva_pde_tipo_nota_credito_adm.php'><?php Lang::_lang('Listado de GralCondicionIvaPdeTipoNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_iva_pde_tipo_nota_debitos'><a href='javascript:;' onclick='menu_grupo("gral_condicion_iva_pde_tipo_nota_debitos")'><?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_pde_tipo_nota_debito_alta.php'><?php Lang::_lang('Alta de GralCondicionIvaPdeTipoNotaDebito') ?> </a></li>
			  <li><a href='gral_condicion_iva_pde_tipo_nota_debito_adm.php'><?php Lang::_lang('Listado de GralCondicionIvaPdeTipoNotaDebito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_condicion_iva_pde_tipo_recibos'><a href='javascript:;' onclick='menu_grupo("gral_condicion_iva_pde_tipo_recibos")'><?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?></a></h3>
			<ul>
			  <li><a href='gral_condicion_iva_pde_tipo_recibo_alta.php'><?php Lang::_lang('Alta de GralCondicionIvaPdeTipoRecibo') ?> </a></li>
			  <li><a href='gral_condicion_iva_pde_tipo_recibo_adm.php'><?php Lang::_lang('Listado de GralCondicionIvaPdeTipoRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_tipo_personerias'><a href='javascript:;' onclick='menu_grupo("gral_tipo_personerias")'><?php Lang::_lang('GralTipoPersoneria') ?></a></h3>
			<ul>
			  <li><a href='gral_tipo_personeria_alta.php'><?php Lang::_lang('Alta de GralTipoPersoneria') ?> </a></li>
			  <li><a href='gral_tipo_personeria_adm.php'><?php Lang::_lang('Listado de GralTipoPersoneria') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_empresas'><a href='javascript:;' onclick='menu_grupo("gral_empresas")'><?php Lang::_lang('GralEmpresas') ?></a></h3>
			<ul>
			  <li><a href='gral_empresa_alta.php'><?php Lang::_lang('Alta de GralEmpresas') ?> </a></li>
			  <li><a href='gral_empresa_adm.php'><?php Lang::_lang('Listado de GralEmpresas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_empresa_transportadoras'><a href='javascript:;' onclick='menu_grupo("gral_empresa_transportadoras")'><?php Lang::_lang('GralEmpresaTransportadoras') ?></a></h3>
			<ul>
			  <li><a href='gral_empresa_transportadora_alta.php'><?php Lang::_lang('Alta de GralEmpresaTransportadoras') ?> </a></li>
			  <li><a href='gral_empresa_transportadora_adm.php'><?php Lang::_lang('Listado de GralEmpresaTransportadoras') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_actividads'><a href='javascript:;' onclick='menu_grupo("gral_actividads")'><?php Lang::_lang('GralActividads') ?></a></h3>
			<ul>
			  <li><a href='gral_actividad_alta.php'><?php Lang::_lang('Alta de GralActividads') ?> </a></li>
			  <li><a href='gral_actividad_adm.php'><?php Lang::_lang('Listado de GralActividads') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_escenarios'><a href='javascript:;' onclick='menu_grupo("gral_escenarios")'><?php Lang::_lang('GralEscenarios') ?></a></h3>
			<ul>
			  <li><a href='gral_escenario_alta.php'><?php Lang::_lang('Alta de GralEscenarios') ?> </a></li>
			  <li><a href='gral_escenario_adm.php'><?php Lang::_lang('Listado de GralEscenarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_caja_tipos'><a href='javascript:;' onclick='menu_grupo("gral_caja_tipos")'><?php Lang::_lang('GralCajaTipos') ?></a></h3>
			<ul>
			  <li><a href='gral_caja_tipo_alta.php'><?php Lang::_lang('Alta de GralCajaTipos') ?> </a></li>
			  <li><a href='gral_caja_tipo_adm.php'><?php Lang::_lang('Listado de GralCajaTipos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_cajas'><a href='javascript:;' onclick='menu_grupo("gral_cajas")'><?php Lang::_lang('GralCajas') ?></a></h3>
			<ul>
			  <li><a href='gral_caja_alta.php'><?php Lang::_lang('Alta de GralCajas') ?> </a></li>
			  <li><a href='gral_caja_adm.php'><?php Lang::_lang('Listado de GralCajas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_fp_medio_pagos'><a href='javascript:;' onclick='menu_grupo("gral_fp_medio_pagos")'><?php Lang::_lang('GralFpMedioPagos') ?></a></h3>
			<ul>
			  <li><a href='gral_fp_medio_pago_alta.php'><?php Lang::_lang('Alta de GralFpMedioPagos') ?> </a></li>
			  <li><a href='gral_fp_medio_pago_adm.php'><?php Lang::_lang('Listado de GralFpMedioPagos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_fp_cuotas'><a href='javascript:;' onclick='menu_grupo("gral_fp_cuotas")'><?php Lang::_lang('GralFpCuota') ?></a></h3>
			<ul>
			  <li><a href='gral_fp_cuota_alta.php'><?php Lang::_lang('Alta de GralFpCuota') ?> </a></li>
			  <li><a href='gral_fp_cuota_adm.php'><?php Lang::_lang('Listado de GralFpCuota') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_fp_agrupacions'><a href='javascript:;' onclick='menu_grupo("gral_fp_agrupacions")'><?php Lang::_lang('GralFpAgrupacion') ?></a></h3>
			<ul>
			  <li><a href='gral_fp_agrupacion_alta.php'><?php Lang::_lang('Alta de GralFpAgrupacion') ?> </a></li>
			  <li><a href='gral_fp_agrupacion_adm.php'><?php Lang::_lang('Listado de GralFpAgrupacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head gral_fp_forma_pagos'><a href='javascript:;' onclick='menu_grupo("gral_fp_forma_pagos")'><?php Lang::_lang('GralFpFormaPago') ?></a></h3>
			<ul>
			  <li><a href='gral_fp_forma_pago_alta.php'><?php Lang::_lang('Alta de GralFpFormaPago') ?> </a></li>
			  <li><a href='gral_fp_forma_pago_adm.php'><?php Lang::_lang('Listado de GralFpFormaPago') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_categorias'><a href='javascript:;' onclick='menu_grupo("ins_categorias")'><?php Lang::_lang('InsCategorias') ?></a></h3>
			<ul>
			  <li><a href='ins_categoria_alta.php'><?php Lang::_lang('Alta de InsCategorias') ?> </a></li>
			  <li><a href='ins_categoria_adm.php'><?php Lang::_lang('Listado de InsCategorias') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumos'><a href='javascript:;' onclick='menu_grupo("ins_insumos")'><?php Lang::_lang('InsInsumos') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_alta.php'><?php Lang::_lang('Alta de InsInsumos') ?> </a></li>
			  <li><a href='ins_insumo_adm.php'><?php Lang::_lang('Listado de InsInsumos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_tipo_insumos'><a href='javascript:;' onclick='menu_grupo("ins_tipo_insumos")'><?php Lang::_lang('InsTipoInsumos') ?></a></h3>
			<ul>
			  <li><a href='ins_tipo_insumo_alta.php'><?php Lang::_lang('Alta de InsTipoInsumos') ?> </a></li>
			  <li><a href='ins_tipo_insumo_adm.php'><?php Lang::_lang('Listado de InsTipoInsumos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_tipo_fabricantes'><a href='javascript:;' onclick='menu_grupo("ins_tipo_fabricantes")'><?php Lang::_lang('InsTipoFabricantes') ?></a></h3>
			<ul>
			  <li><a href='ins_tipo_fabricante_alta.php'><?php Lang::_lang('Alta de InsTipoFabricantes') ?> </a></li>
			  <li><a href='ins_tipo_fabricante_adm.php'><?php Lang::_lang('Listado de InsTipoFabricantes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_enviados'><a href='javascript:;' onclick='menu_grupo("ins_insumo_enviados")'><?php Lang::_lang('InsInsumoEnviados') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_enviado_alta.php'><?php Lang::_lang('Alta de InsInsumoEnviados') ?> </a></li>
			  <li><a href='ins_insumo_enviado_adm.php'><?php Lang::_lang('Listado de InsInsumoEnviados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_imagens'><a href='javascript:;' onclick='menu_grupo("ins_insumo_imagens")'><?php Lang::_lang('InsInsumoImagens') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_imagen_alta.php'><?php Lang::_lang('Alta de InsInsumoImagens') ?> </a></li>
			  <li><a href='ins_insumo_imagen_adm.php'><?php Lang::_lang('Listado de InsInsumoImagens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_tipo_imagens'><a href='javascript:;' onclick='menu_grupo("ins_tipo_imagens")'><?php Lang::_lang('InsTipoImagens') ?></a></h3>
			<ul>
			  <li><a href='ins_tipo_imagen_alta.php'><?php Lang::_lang('Alta de InsTipoImagens') ?> </a></li>
			  <li><a href='ins_tipo_imagen_adm.php'><?php Lang::_lang('Listado de InsTipoImagens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_prv_proveedors'><a href='javascript:;' onclick='menu_grupo("ins_insumo_prv_proveedors")'><?php Lang::_lang('InsInsumoPrvProveedors') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_prv_proveedor_alta.php'><?php Lang::_lang('Alta de InsInsumoPrvProveedors') ?> </a></li>
			  <li><a href='ins_insumo_prv_proveedor_adm.php'><?php Lang::_lang('Listado de InsInsumoPrvProveedors') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_ins_marcas'><a href='javascript:;' onclick='menu_grupo("ins_insumo_ins_marcas")'><?php Lang::_lang('InsInsumoInsMarcas') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_ins_marca_alta.php'><?php Lang::_lang('Alta de InsInsumoInsMarcas') ?> </a></li>
			  <li><a href='ins_insumo_ins_marca_adm.php'><?php Lang::_lang('Listado de InsInsumoInsMarcas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_instancias'><a href='javascript:;' onclick='menu_grupo("ins_insumo_instancias")'><?php Lang::_lang('InsInsumoInstancias') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_instancia_alta.php'><?php Lang::_lang('Alta de InsInsumoInstancias') ?> </a></li>
			  <li><a href='ins_insumo_instancia_adm.php'><?php Lang::_lang('Listado de InsInsumoInstancias') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_pan_panols'><a href='javascript:;' onclick='menu_grupo("ins_insumo_pan_panols")'><?php Lang::_lang('InsInsumoPanPanols') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_pan_panol_alta.php'><?php Lang::_lang('Alta de InsInsumoPanPanols') ?> </a></li>
			  <li><a href='ins_insumo_pan_panol_adm.php'><?php Lang::_lang('Listado de InsInsumoPanPanols') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_veh_modelos'><a href='javascript:;' onclick='menu_grupo("ins_insumo_veh_modelos")'><?php Lang::_lang('InsInsumoVehModelos') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_veh_modelo_alta.php'><?php Lang::_lang('Alta de InsInsumoVehModelos') ?> </a></li>
			  <li><a href='ins_insumo_veh_modelo_adm.php'><?php Lang::_lang('Listado de InsInsumoVehModelos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_vinculados'><a href='javascript:;' onclick='menu_grupo("ins_insumo_vinculados")'><?php Lang::_lang('InsInsumoVinculados') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_vinculado_alta.php'><?php Lang::_lang('Alta de InsInsumoVinculados') ?> </a></li>
			  <li><a href='ins_insumo_vinculado_adm.php'><?php Lang::_lang('Listado de InsInsumoVinculados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_similars'><a href='javascript:;' onclick='menu_grupo("ins_insumo_similars")'><?php Lang::_lang('InsInsumoSimilars') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_similar_alta.php'><?php Lang::_lang('Alta de InsInsumoSimilars') ?> </a></li>
			  <li><a href='ins_insumo_similar_adm.php'><?php Lang::_lang('Listado de InsInsumoSimilars') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_venta_web_infos'><a href='javascript:;' onclick='menu_grupo("ins_venta_web_infos")'><?php Lang::_lang('InsVentaWebInfos') ?></a></h3>
			<ul>
			  <li><a href='ins_venta_web_info_alta.php'><?php Lang::_lang('Alta de InsVentaWebInfos') ?> </a></li>
			  <li><a href='ins_venta_web_info_adm.php'><?php Lang::_lang('Listado de InsVentaWebInfos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_venta_ml_infos'><a href='javascript:;' onclick='menu_grupo("ins_venta_ml_infos")'><?php Lang::_lang('InsVentaMlInfos') ?></a></h3>
			<ul>
			  <li><a href='ins_venta_ml_info_alta.php'><?php Lang::_lang('Alta de InsVentaMlInfos') ?> </a></li>
			  <li><a href='ins_venta_ml_info_adm.php'><?php Lang::_lang('Listado de InsVentaMlInfos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_venta_ml_info_ml_attributes'><a href='javascript:;' onclick='menu_grupo("ins_venta_ml_info_ml_attributes")'><?php Lang::_lang('InsVentaMlInfoMlAttributes') ?></a></h3>
			<ul>
			  <li><a href='ins_venta_ml_info_ml_attribute_alta.php'><?php Lang::_lang('Alta de InsVentaMlInfoMlAttributes') ?> </a></li>
			  <li><a href='ins_venta_ml_info_ml_attribute_adm.php'><?php Lang::_lang('Listado de InsVentaMlInfoMlAttributes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_costos'><a href='javascript:;' onclick='menu_grupo("ins_insumo_costos")'><?php Lang::_lang('InsInsumoCostos') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_costo_alta.php'><?php Lang::_lang('Alta de InsInsumoCostos') ?> </a></li>
			  <li><a href='ins_insumo_costo_adm.php'><?php Lang::_lang('Listado de InsInsumoCostos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_tipo_lista_precios'><a href='javascript:;' onclick='menu_grupo("ins_tipo_lista_precios")'><?php Lang::_lang('InsTipoListaPrecios') ?></a></h3>
			<ul>
			  <li><a href='ins_tipo_lista_precio_alta.php'><?php Lang::_lang('Alta de InsTipoListaPrecios') ?> </a></li>
			  <li><a href='ins_tipo_lista_precio_adm.php'><?php Lang::_lang('Listado de InsTipoListaPrecios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_lista_precios'><a href='javascript:;' onclick='menu_grupo("ins_lista_precios")'><?php Lang::_lang('InsListaPrecios') ?></a></h3>
			<ul>
			  <li><a href='ins_lista_precio_alta.php'><?php Lang::_lang('Alta de InsListaPrecios') ?> </a></li>
			  <li><a href='ins_lista_precio_adm.php'><?php Lang::_lang('Listado de InsListaPrecios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_etiquetas'><a href='javascript:;' onclick='menu_grupo("ins_etiquetas")'><?php Lang::_lang('InsEtiquetas') ?></a></h3>
			<ul>
			  <li><a href='ins_etiqueta_alta.php'><?php Lang::_lang('Alta de InsEtiquetas') ?> </a></li>
			  <li><a href='ins_etiqueta_adm.php'><?php Lang::_lang('Listado de InsEtiquetas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_ins_etiquetas'><a href='javascript:;' onclick='menu_grupo("ins_insumo_ins_etiquetas")'><?php Lang::_lang('InsInsumoInsEtiquetas') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_ins_etiqueta_alta.php'><?php Lang::_lang('Alta de InsInsumoInsEtiquetas') ?> </a></li>
			  <li><a href='ins_insumo_ins_etiqueta_adm.php'><?php Lang::_lang('Listado de InsInsumoInsEtiquetas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_destino_transformacions'><a href='javascript:;' onclick='menu_grupo("ins_insumo_destino_transformacions")'><?php Lang::_lang('InsInsumoDestinoTransformacions') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_destino_transformacion_alta.php'><?php Lang::_lang('Alta de InsInsumoDestinoTransformacions') ?> </a></li>
			  <li><a href='ins_insumo_destino_transformacion_adm.php'><?php Lang::_lang('Listado de InsInsumoDestinoTransformacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_clasificacions'><a href='javascript:;' onclick='menu_grupo("ins_clasificacions")'><?php Lang::_lang('InsClasificacions') ?></a></h3>
			<ul>
			  <li><a href='ins_clasificacion_alta.php'><?php Lang::_lang('Alta de InsClasificacions') ?> </a></li>
			  <li><a href='ins_clasificacion_adm.php'><?php Lang::_lang('Listado de InsClasificacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_marcas'><a href='javascript:;' onclick='menu_grupo("ins_marcas")'><?php Lang::_lang('InsMarcas') ?></a></h3>
			<ul>
			  <li><a href='ins_marca_alta.php'><?php Lang::_lang('Alta de InsMarcas') ?> </a></li>
			  <li><a href='ins_marca_adm.php'><?php Lang::_lang('Listado de InsMarcas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_categoria_ins_marcas'><a href='javascript:;' onclick='menu_grupo("ins_categoria_ins_marcas")'><?php Lang::_lang('InsCategoriaInsMarcas') ?></a></h3>
			<ul>
			  <li><a href='ins_categoria_ins_marca_alta.php'><?php Lang::_lang('Alta de InsCategoriaInsMarcas') ?> </a></li>
			  <li><a href='ins_categoria_ins_marca_adm.php'><?php Lang::_lang('Listado de InsCategoriaInsMarcas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_atributos'><a href='javascript:;' onclick='menu_grupo("ins_atributos")'><?php Lang::_lang('InsAtributos') ?></a></h3>
			<ul>
			  <li><a href='ins_atributo_alta.php'><?php Lang::_lang('Alta de InsAtributos') ?> </a></li>
			  <li><a href='ins_atributo_adm.php'><?php Lang::_lang('Listado de InsAtributos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_insumo_ins_atributos'><a href='javascript:;' onclick='menu_grupo("ins_insumo_ins_atributos")'><?php Lang::_lang('InsInsumoInsAtributos') ?></a></h3>
			<ul>
			  <li><a href='ins_insumo_ins_atributo_alta.php'><?php Lang::_lang('Alta de InsInsumoInsAtributos') ?> </a></li>
			  <li><a href='ins_insumo_ins_atributo_adm.php'><?php Lang::_lang('Listado de InsInsumoInsAtributos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_unidad_medidas'><a href='javascript:;' onclick='menu_grupo("ins_unidad_medidas")'><?php Lang::_lang('InsUnidadMedidas') ?></a></h3>
			<ul>
			  <li><a href='ins_unidad_medida_alta.php'><?php Lang::_lang('Alta de InsUnidadMedidas') ?> </a></li>
			  <li><a href='ins_unidad_medida_adm.php'><?php Lang::_lang('Listado de InsUnidadMedidas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_unidad_medida_atributos'><a href='javascript:;' onclick='menu_grupo("ins_unidad_medida_atributos")'><?php Lang::_lang('InsUnidadMedidaAtributos') ?></a></h3>
			<ul>
			  <li><a href='ins_unidad_medida_atributo_alta.php'><?php Lang::_lang('Alta de InsUnidadMedidaAtributos') ?> </a></li>
			  <li><a href='ins_unidad_medida_atributo_adm.php'><?php Lang::_lang('Listado de InsUnidadMedidaAtributos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_unidad_medida_pedidos'><a href='javascript:;' onclick='menu_grupo("ins_unidad_medida_pedidos")'><?php Lang::_lang('InsUnidadMedidaPedidos') ?></a></h3>
			<ul>
			  <li><a href='ins_unidad_medida_pedido_alta.php'><?php Lang::_lang('Alta de InsUnidadMedidaPedidos') ?> </a></li>
			  <li><a href='ins_unidad_medida_pedido_adm.php'><?php Lang::_lang('Listado de InsUnidadMedidaPedidos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_tipo_necesidads'><a href='javascript:;' onclick='menu_grupo("ins_tipo_necesidads")'><?php Lang::_lang('InsTipoNecesidads') ?></a></h3>
			<ul>
			  <li><a href='ins_tipo_necesidad_alta.php'><?php Lang::_lang('Alta de InsTipoNecesidads') ?> </a></li>
			  <li><a href='ins_tipo_necesidad_adm.php'><?php Lang::_lang('Listado de InsTipoNecesidads') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_nivel_aprovisionamientos'><a href='javascript:;' onclick='menu_grupo("ins_nivel_aprovisionamientos")'><?php Lang::_lang('InsNivelAprovisionamientos') ?></a></h3>
			<ul>
			  <li><a href='ins_nivel_aprovisionamiento_alta.php'><?php Lang::_lang('Alta de InsNivelAprovisionamientos') ?> </a></li>
			  <li><a href='ins_nivel_aprovisionamiento_adm.php'><?php Lang::_lang('Listado de InsNivelAprovisionamientos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_tipo_consumos'><a href='javascript:;' onclick='menu_grupo("ins_tipo_consumos")'><?php Lang::_lang('InsTipoConsumos') ?></a></h3>
			<ul>
			  <li><a href='ins_tipo_consumo_alta.php'><?php Lang::_lang('Alta de InsTipoConsumos') ?> </a></li>
			  <li><a href='ins_tipo_consumo_adm.php'><?php Lang::_lang('Listado de InsTipoConsumos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_matrizs'><a href='javascript:;' onclick='menu_grupo("ins_matrizs")'><?php Lang::_lang('InsMatriz') ?></a></h3>
			<ul>
			  <li><a href='ins_matriz_alta.php'><?php Lang::_lang('Alta de InsMatriz') ?> </a></li>
			  <li><a href='ins_matriz_adm.php'><?php Lang::_lang('Listado de InsMatriz') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_stock_transformacions'><a href='javascript:;' onclick='menu_grupo("ins_stock_transformacions")'><?php Lang::_lang('InsStockTransformacions') ?></a></h3>
			<ul>
			  <li><a href='ins_stock_transformacion_alta.php'><?php Lang::_lang('Alta de InsStockTransformacions') ?> </a></li>
			  <li><a href='ins_stock_transformacion_adm.php'><?php Lang::_lang('Listado de InsStockTransformacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_stock_transformacion_destinos'><a href='javascript:;' onclick='menu_grupo("ins_stock_transformacion_destinos")'><?php Lang::_lang('InsStockTransformacionDestinos') ?></a></h3>
			<ul>
			  <li><a href='ins_stock_transformacion_destino_alta.php'><?php Lang::_lang('Alta de InsStockTransformacionDestinos') ?> </a></li>
			  <li><a href='ins_stock_transformacion_destino_adm.php'><?php Lang::_lang('Listado de InsStockTransformacionDestinos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_grupos'><a href='javascript:;' onclick='menu_grupo("prv_grupos")'><?php Lang::_lang('PrvGrupo') ?></a></h3>
			<ul>
			  <li><a href='prv_grupo_alta.php'><?php Lang::_lang('Alta de PrvGrupo') ?> </a></li>
			  <li><a href='prv_grupo_adm.php'><?php Lang::_lang('Listado de PrvGrupo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_categorias'><a href='javascript:;' onclick='menu_grupo("prv_categorias")'><?php Lang::_lang('PrvCategoria') ?></a></h3>
			<ul>
			  <li><a href='prv_categoria_alta.php'><?php Lang::_lang('Alta de PrvCategoria') ?> </a></li>
			  <li><a href='prv_categoria_adm.php'><?php Lang::_lang('Listado de PrvCategoria') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_proveedors'><a href='javascript:;' onclick='menu_grupo("prv_proveedors")'><?php Lang::_lang('PrvProveedor') ?></a></h3>
			<ul>
			  <li><a href='prv_proveedor_alta.php'><?php Lang::_lang('Alta de PrvProveedor') ?> </a></li>
			  <li><a href='prv_proveedor_adm.php'><?php Lang::_lang('Listado de PrvProveedor') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_preventistas'><a href='javascript:;' onclick='menu_grupo("prv_preventistas")'><?php Lang::_lang('PrvPreventistas') ?></a></h3>
			<ul>
			  <li><a href='prv_preventista_alta.php'><?php Lang::_lang('Alta de PrvPreventistas') ?> </a></li>
			  <li><a href='prv_preventista_adm.php'><?php Lang::_lang('Listado de PrvPreventistas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_convenio_descuentos'><a href='javascript:;' onclick='menu_grupo("prv_convenio_descuentos")'><?php Lang::_lang('PrvConvenioDescuentos') ?></a></h3>
			<ul>
			  <li><a href='prv_convenio_descuento_alta.php'><?php Lang::_lang('Alta de PrvConvenioDescuentos') ?> </a></li>
			  <li><a href='prv_convenio_descuento_adm.php'><?php Lang::_lang('Listado de PrvConvenioDescuentos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_descuento_financieros'><a href='javascript:;' onclick='menu_grupo("prv_descuento_financieros")'><?php Lang::_lang('PrvDescuentoFinancieros') ?></a></h3>
			<ul>
			  <li><a href='prv_descuento_financiero_alta.php'><?php Lang::_lang('Alta de PrvDescuentoFinancieros') ?> </a></li>
			  <li><a href='prv_descuento_financiero_adm.php'><?php Lang::_lang('Listado de PrvDescuentoFinancieros') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_proveedor_us_usuarios'><a href='javascript:;' onclick='menu_grupo("prv_proveedor_us_usuarios")'><?php Lang::_lang('PrvProveedorUsUsuarios') ?></a></h3>
			<ul>
			  <li><a href='prv_proveedor_us_usuario_alta.php'><?php Lang::_lang('Alta de PrvProveedorUsUsuarios') ?> </a></li>
			  <li><a href='prv_proveedor_us_usuario_adm.php'><?php Lang::_lang('Listado de PrvProveedorUsUsuarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_telefonos'><a href='javascript:;' onclick='menu_grupo("prv_telefonos")'><?php Lang::_lang('PrvTelefono') ?></a></h3>
			<ul>
			  <li><a href='prv_telefono_alta.php'><?php Lang::_lang('Alta de PrvTelefono') ?> </a></li>
			  <li><a href='prv_telefono_adm.php'><?php Lang::_lang('Listado de PrvTelefono') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_telefono_tipos'><a href='javascript:;' onclick='menu_grupo("prv_telefono_tipos")'><?php Lang::_lang('PrvTelefonoTipos') ?></a></h3>
			<ul>
			  <li><a href='prv_telefono_tipo_alta.php'><?php Lang::_lang('Alta de PrvTelefonoTipos') ?> </a></li>
			  <li><a href='prv_telefono_tipo_adm.php'><?php Lang::_lang('Listado de PrvTelefonoTipos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_emails'><a href='javascript:;' onclick='menu_grupo("prv_emails")'><?php Lang::_lang('PrvEmail') ?></a></h3>
			<ul>
			  <li><a href='prv_email_alta.php'><?php Lang::_lang('Alta de PrvEmail') ?> </a></li>
			  <li><a href='prv_email_adm.php'><?php Lang::_lang('Listado de PrvEmail') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_domicilios'><a href='javascript:;' onclick='menu_grupo("prv_domicilios")'><?php Lang::_lang('PrvDomicilio') ?></a></h3>
			<ul>
			  <li><a href='prv_domicilio_alta.php'><?php Lang::_lang('Alta de PrvDomicilio') ?> </a></li>
			  <li><a href='prv_domicilio_adm.php'><?php Lang::_lang('Listado de PrvDomicilio') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_rubros'><a href='javascript:;' onclick='menu_grupo("prv_rubros")'><?php Lang::_lang('PrvRubro') ?></a></h3>
			<ul>
			  <li><a href='prv_rubro_alta.php'><?php Lang::_lang('Alta de PrvRubro') ?> </a></li>
			  <li><a href='prv_rubro_adm.php'><?php Lang::_lang('Listado de PrvRubro') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_proveedor_prv_rubros'><a href='javascript:;' onclick='menu_grupo("prv_proveedor_prv_rubros")'><?php Lang::_lang('PrvProveedorPrvRubro') ?></a></h3>
			<ul>
			  <li><a href='prv_proveedor_prv_rubro_alta.php'><?php Lang::_lang('Alta de PrvProveedorPrvRubro') ?> </a></li>
			  <li><a href='prv_proveedor_prv_rubro_adm.php'><?php Lang::_lang('Listado de PrvProveedorPrvRubro') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_insumos'><a href='javascript:;' onclick='menu_grupo("prv_insumos")'><?php Lang::_lang('PrvInsumo') ?></a></h3>
			<ul>
			  <li><a href='prv_insumo_alta.php'><?php Lang::_lang('Alta de PrvInsumo') ?> </a></li>
			  <li><a href='prv_insumo_adm.php'><?php Lang::_lang('Listado de PrvInsumo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_insumo_costos'><a href='javascript:;' onclick='menu_grupo("prv_insumo_costos")'><?php Lang::_lang('PrvInsumoCosto') ?></a></h3>
			<ul>
			  <li><a href='prv_insumo_costo_alta.php'><?php Lang::_lang('Alta de PrvInsumoCosto') ?> </a></li>
			  <li><a href='prv_insumo_costo_adm.php'><?php Lang::_lang('Listado de PrvInsumoCosto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_importacions'><a href='javascript:;' onclick='menu_grupo("prv_importacions")'><?php Lang::_lang('PrvImportacions') ?></a></h3>
			<ul>
			  <li><a href='prv_importacion_alta.php'><?php Lang::_lang('Alta de PrvImportacions') ?> </a></li>
			  <li><a href='prv_importacion_adm.php'><?php Lang::_lang('Listado de PrvImportacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_importacion_estados'><a href='javascript:;' onclick='menu_grupo("prv_importacion_estados")'><?php Lang::_lang('PrvImportacionEstados') ?></a></h3>
			<ul>
			  <li><a href='prv_importacion_estado_alta.php'><?php Lang::_lang('Alta de PrvImportacionEstados') ?> </a></li>
			  <li><a href='prv_importacion_estado_adm.php'><?php Lang::_lang('Listado de PrvImportacionEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_importacion_tipo_estados'><a href='javascript:;' onclick='menu_grupo("prv_importacion_tipo_estados")'><?php Lang::_lang('PrvImportacionTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='prv_importacion_tipo_estado_alta.php'><?php Lang::_lang('Alta de PrvImportacionTipoEstado') ?> </a></li>
			  <li><a href='prv_importacion_tipo_estado_adm.php'><?php Lang::_lang('Listado de PrvImportacionTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head prv_importacion_resultados'><a href='javascript:;' onclick='menu_grupo("prv_importacion_resultados")'><?php Lang::_lang('PrvImportacionResultados') ?></a></h3>
			<ul>
			  <li><a href='prv_importacion_resultado_alta.php'><?php Lang::_lang('Alta de PrvImportacionResultados') ?> </a></li>
			  <li><a href='prv_importacion_resultado_adm.php'><?php Lang::_lang('Listado de PrvImportacionResultados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head veh_marcas'><a href='javascript:;' onclick='menu_grupo("veh_marcas")'><?php Lang::_lang('VehMarcas') ?></a></h3>
			<ul>
			  <li><a href='veh_marca_alta.php'><?php Lang::_lang('Alta de VehMarcas') ?> </a></li>
			  <li><a href='veh_marca_adm.php'><?php Lang::_lang('Listado de VehMarcas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head veh_modelos'><a href='javascript:;' onclick='menu_grupo("veh_modelos")'><?php Lang::_lang('VehModelos') ?></a></h3>
			<ul>
			  <li><a href='veh_modelo_alta.php'><?php Lang::_lang('Alta de VehModelos') ?> </a></li>
			  <li><a href='veh_modelo_adm.php'><?php Lang::_lang('Listado de VehModelos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head veh_coches'><a href='javascript:;' onclick='menu_grupo("veh_coches")'><?php Lang::_lang('VehCoches') ?></a></h3>
			<ul>
			  <li><a href='veh_coche_alta.php'><?php Lang::_lang('Alta de VehCoches') ?> </a></li>
			  <li><a href='veh_coche_adm.php'><?php Lang::_lang('Listado de VehCoches') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head veh_coche_imagens'><a href='javascript:;' onclick='menu_grupo("veh_coche_imagens")'><?php Lang::_lang('VehCocheImagens') ?></a></h3>
			<ul>
			  <li><a href='veh_coche_imagen_alta.php'><?php Lang::_lang('Alta de VehCocheImagens') ?> </a></li>
			  <li><a href='veh_coche_imagen_adm.php'><?php Lang::_lang('Listado de VehCocheImagens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_panols'><a href='javascript:;' onclick='menu_grupo("pan_panols")'><?php Lang::_lang('PanPanol') ?></a></h3>
			<ul>
			  <li><a href='pan_panol_alta.php'><?php Lang::_lang('Alta de PanPanol') ?> </a></li>
			  <li><a href='pan_panol_adm.php'><?php Lang::_lang('Listado de PanPanol') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_panol_us_usuarios'><a href='javascript:;' onclick='menu_grupo("pan_panol_us_usuarios")'><?php Lang::_lang('PanPanolUsUsuarios') ?></a></h3>
			<ul>
			  <li><a href='pan_panol_us_usuario_alta.php'><?php Lang::_lang('Alta de PanPanolUsUsuarios') ?> </a></li>
			  <li><a href='pan_panol_us_usuario_adm.php'><?php Lang::_lang('Listado de PanPanolUsUsuarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_tipo_panols'><a href='javascript:;' onclick='menu_grupo("pan_tipo_panols")'><?php Lang::_lang('PanTipoPanols') ?></a></h3>
			<ul>
			  <li><a href='pan_tipo_panol_alta.php'><?php Lang::_lang('Alta de PanTipoPanols') ?> </a></li>
			  <li><a href='pan_tipo_panol_adm.php'><?php Lang::_lang('Listado de PanTipoPanols') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_ubi_pisos'><a href='javascript:;' onclick='menu_grupo("pan_ubi_pisos")'><?php Lang::_lang('PanUbiPisos') ?></a></h3>
			<ul>
			  <li><a href='pan_ubi_piso_alta.php'><?php Lang::_lang('Alta de PanUbiPisos') ?> </a></li>
			  <li><a href='pan_ubi_piso_adm.php'><?php Lang::_lang('Listado de PanUbiPisos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_ubi_pasillos'><a href='javascript:;' onclick='menu_grupo("pan_ubi_pasillos")'><?php Lang::_lang('PanUbiPasillos') ?></a></h3>
			<ul>
			  <li><a href='pan_ubi_pasillo_alta.php'><?php Lang::_lang('Alta de PanUbiPasillos') ?> </a></li>
			  <li><a href='pan_ubi_pasillo_adm.php'><?php Lang::_lang('Listado de PanUbiPasillos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_ubi_estantes'><a href='javascript:;' onclick='menu_grupo("pan_ubi_estantes")'><?php Lang::_lang('PanUbiEstantes') ?></a></h3>
			<ul>
			  <li><a href='pan_ubi_estante_alta.php'><?php Lang::_lang('Alta de PanUbiEstantes') ?> </a></li>
			  <li><a href='pan_ubi_estante_adm.php'><?php Lang::_lang('Listado de PanUbiEstantes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_ubi_alturas'><a href='javascript:;' onclick='menu_grupo("pan_ubi_alturas")'><?php Lang::_lang('PanUbiAlturas') ?></a></h3>
			<ul>
			  <li><a href='pan_ubi_altura_alta.php'><?php Lang::_lang('Alta de PanUbiAlturas') ?> </a></li>
			  <li><a href='pan_ubi_altura_adm.php'><?php Lang::_lang('Listado de PanUbiAlturas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_ubi_casilleros'><a href='javascript:;' onclick='menu_grupo("pan_ubi_casilleros")'><?php Lang::_lang('PanUbiCasilleros') ?></a></h3>
			<ul>
			  <li><a href='pan_ubi_casillero_alta.php'><?php Lang::_lang('Alta de PanUbiCasilleros') ?> </a></li>
			  <li><a href='pan_ubi_casillero_adm.php'><?php Lang::_lang('Listado de PanUbiCasilleros') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pan_ubi_celdas'><a href='javascript:;' onclick='menu_grupo("pan_ubi_celdas")'><?php Lang::_lang('PanUbiCeldas') ?></a></h3>
			<ul>
			  <li><a href='pan_ubi_celda_alta.php'><?php Lang::_lang('Alta de PanUbiCeldas') ?> </a></li>
			  <li><a href='pan_ubi_celda_adm.php'><?php Lang::_lang('Listado de PanUbiCeldas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_clientes'><a href='javascript:;' onclick='menu_grupo("cli_clientes")'><?php Lang::_lang('CliCliente') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_alta.php'><?php Lang::_lang('Alta de CliCliente') ?> </a></li>
			  <li><a href='cli_cliente_adm.php'><?php Lang::_lang('Listado de CliCliente') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_telefonos'><a href='javascript:;' onclick='menu_grupo("cli_telefonos")'><?php Lang::_lang('CliTelefono') ?></a></h3>
			<ul>
			  <li><a href='cli_telefono_alta.php'><?php Lang::_lang('Alta de CliTelefono') ?> </a></li>
			  <li><a href='cli_telefono_adm.php'><?php Lang::_lang('Listado de CliTelefono') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_telefono_tipos'><a href='javascript:;' onclick='menu_grupo("cli_telefono_tipos")'><?php Lang::_lang('CliTelefonoTipos') ?></a></h3>
			<ul>
			  <li><a href='cli_telefono_tipo_alta.php'><?php Lang::_lang('Alta de CliTelefonoTipos') ?> </a></li>
			  <li><a href='cli_telefono_tipo_adm.php'><?php Lang::_lang('Listado de CliTelefonoTipos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_emails'><a href='javascript:;' onclick='menu_grupo("cli_emails")'><?php Lang::_lang('CliEmail') ?></a></h3>
			<ul>
			  <li><a href='cli_email_alta.php'><?php Lang::_lang('Alta de CliEmail') ?> </a></li>
			  <li><a href='cli_email_adm.php'><?php Lang::_lang('Listado de CliEmail') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_domicilios'><a href='javascript:;' onclick='menu_grupo("cli_domicilios")'><?php Lang::_lang('CliDomicilio') ?></a></h3>
			<ul>
			  <li><a href='cli_domicilio_alta.php'><?php Lang::_lang('Alta de CliDomicilio') ?> </a></li>
			  <li><a href='cli_domicilio_adm.php'><?php Lang::_lang('Listado de CliDomicilio') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_grupos'><a href='javascript:;' onclick='menu_grupo("cli_grupos")'><?php Lang::_lang('CliGrupo') ?></a></h3>
			<ul>
			  <li><a href='cli_grupo_alta.php'><?php Lang::_lang('Alta de CliGrupo') ?> </a></li>
			  <li><a href='cli_grupo_adm.php'><?php Lang::_lang('Listado de CliGrupo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_categorias'><a href='javascript:;' onclick='menu_grupo("cli_categorias")'><?php Lang::_lang('CliCategoria') ?></a></h3>
			<ul>
			  <li><a href='cli_categoria_alta.php'><?php Lang::_lang('Alta de CliCategoria') ?> </a></li>
			  <li><a href='cli_categoria_adm.php'><?php Lang::_lang('Listado de CliCategoria') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_centro_recepcions'><a href='javascript:;' onclick='menu_grupo("cli_centro_recepcions")'><?php Lang::_lang('CliCentroRecepcion') ?></a></h3>
			<ul>
			  <li><a href='cli_centro_recepcion_alta.php'><?php Lang::_lang('Alta de CliCentroRecepcion') ?> </a></li>
			  <li><a href='cli_centro_recepcion_adm.php'><?php Lang::_lang('Listado de CliCentroRecepcion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_centro_pedidos'><a href='javascript:;' onclick='menu_grupo("cli_centro_pedidos")'><?php Lang::_lang('CliCentroPedido') ?></a></h3>
			<ul>
			  <li><a href='cli_centro_pedido_alta.php'><?php Lang::_lang('Alta de CliCentroPedido') ?> </a></li>
			  <li><a href='cli_centro_pedido_adm.php'><?php Lang::_lang('Listado de CliCentroPedido') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_medio_digitals'><a href='javascript:;' onclick='menu_grupo("cli_medio_digitals")'><?php Lang::_lang('CliMedioDigital') ?></a></h3>
			<ul>
			  <li><a href='cli_medio_digital_alta.php'><?php Lang::_lang('Alta de CliMedioDigital') ?> </a></li>
			  <li><a href='cli_medio_digital_adm.php'><?php Lang::_lang('Listado de CliMedioDigital') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_tipo_medio_digitals'><a href='javascript:;' onclick='menu_grupo("cli_tipo_medio_digitals")'><?php Lang::_lang('CliTipoMedioDigital') ?></a></h3>
			<ul>
			  <li><a href='cli_tipo_medio_digital_alta.php'><?php Lang::_lang('Alta de CliTipoMedioDigital') ?> </a></li>
			  <li><a href='cli_tipo_medio_digital_adm.php'><?php Lang::_lang('Listado de CliTipoMedioDigital') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_cliente_vta_vendedors'><a href='javascript:;' onclick='menu_grupo("cli_cliente_vta_vendedors")'><?php Lang::_lang('CliClienteVtaVendedor') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_vta_vendedor_alta.php'><?php Lang::_lang('Alta de CliClienteVtaVendedor') ?> </a></li>
			  <li><a href='cli_cliente_vta_vendedor_adm.php'><?php Lang::_lang('Listado de CliClienteVtaVendedor') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_cliente_ins_tipo_lista_precios'><a href='javascript:;' onclick='menu_grupo("cli_cliente_ins_tipo_lista_precios")'><?php Lang::_lang('CliClienteInsTipoListaPrecio') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_ins_tipo_lista_precio_alta.php'><?php Lang::_lang('Alta de CliClienteInsTipoListaPrecio') ?> </a></li>
			  <li><a href='cli_cliente_ins_tipo_lista_precio_adm.php'><?php Lang::_lang('Listado de CliClienteInsTipoListaPrecio') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_cliente_vta_preventistas'><a href='javascript:;' onclick='menu_grupo("cli_cliente_vta_preventistas")'><?php Lang::_lang('CliClienteVtaPreventista') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_vta_preventista_alta.php'><?php Lang::_lang('Alta de CliClienteVtaPreventista') ?> </a></li>
			  <li><a href='cli_cliente_vta_preventista_adm.php'><?php Lang::_lang('Listado de CliClienteVtaPreventista') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_cliente_vta_compradors'><a href='javascript:;' onclick='menu_grupo("cli_cliente_vta_compradors")'><?php Lang::_lang('CliClienteVtaComprador') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_vta_comprador_alta.php'><?php Lang::_lang('Alta de CliClienteVtaComprador') ?> </a></li>
			  <li><a href='cli_cliente_vta_comprador_adm.php'><?php Lang::_lang('Listado de CliClienteVtaComprador') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_cliente_gral_fp_agrupacions'><a href='javascript:;' onclick='menu_grupo("cli_cliente_gral_fp_agrupacions")'><?php Lang::_lang('CliClienteGralFpAgrupacion') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_gral_fp_agrupacion_alta.php'><?php Lang::_lang('Alta de CliClienteGralFpAgrupacion') ?> </a></li>
			  <li><a href='cli_cliente_gral_fp_agrupacion_adm.php'><?php Lang::_lang('Listado de CliClienteGralFpAgrupacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_cliente_gral_fp_cuotas'><a href='javascript:;' onclick='menu_grupo("cli_cliente_gral_fp_cuotas")'><?php Lang::_lang('CliClienteGralFpCuota') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_gral_fp_cuota_alta.php'><?php Lang::_lang('Alta de CliClienteGralFpCuota') ?> </a></li>
			  <li><a href='cli_cliente_gral_fp_cuota_adm.php'><?php Lang::_lang('Listado de CliClienteGralFpCuota') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_cliente_gral_actividads'><a href='javascript:;' onclick='menu_grupo("cli_cliente_gral_actividads")'><?php Lang::_lang('CliClienteGralActividads') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_gral_actividad_alta.php'><?php Lang::_lang('Alta de CliClienteGralActividads') ?> </a></li>
			  <li><a href='cli_cliente_gral_actividad_adm.php'><?php Lang::_lang('Listado de CliClienteGralActividads') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cli_cliente_vta_punto_ventas'><a href='javascript:;' onclick='menu_grupo("cli_cliente_vta_punto_ventas")'><?php Lang::_lang('CliClienteVtaPuntoVentas') ?></a></h3>
			<ul>
			  <li><a href='cli_cliente_vta_punto_venta_alta.php'><?php Lang::_lang('Alta de CliClienteVtaPuntoVentas') ?> </a></li>
			  <li><a href='cli_cliente_vta_punto_venta_adm.php'><?php Lang::_lang('Listado de CliClienteVtaPuntoVentas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_vendedors'><a href='javascript:;' onclick='menu_grupo("vta_vendedors")'><?php Lang::_lang('VtaVendedor') ?></a></h3>
			<ul>
			  <li><a href='vta_vendedor_alta.php'><?php Lang::_lang('Alta de VtaVendedor') ?> </a></li>
			  <li><a href='vta_vendedor_adm.php'><?php Lang::_lang('Listado de VtaVendedor') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_compradors'><a href='javascript:;' onclick='menu_grupo("vta_compradors")'><?php Lang::_lang('VtaComprador') ?></a></h3>
			<ul>
			  <li><a href='vta_comprador_alta.php'><?php Lang::_lang('Alta de VtaComprador') ?> </a></li>
			  <li><a href='vta_comprador_adm.php'><?php Lang::_lang('Listado de VtaComprador') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_preventistas'><a href='javascript:;' onclick='menu_grupo("vta_preventistas")'><?php Lang::_lang('VtaPreventista') ?></a></h3>
			<ul>
			  <li><a href='vta_preventista_alta.php'><?php Lang::_lang('Alta de VtaPreventista') ?> </a></li>
			  <li><a href='vta_preventista_adm.php'><?php Lang::_lang('Listado de VtaPreventista') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_presupuestos'><a href='javascript:;' onclick='menu_grupo("vta_presupuestos")'><?php Lang::_lang('VtaPresupuesto') ?></a></h3>
			<ul>
			  <li><a href='vta_presupuesto_alta.php'><?php Lang::_lang('Alta de VtaPresupuesto') ?> </a></li>
			  <li><a href='vta_presupuesto_adm.php'><?php Lang::_lang('Listado de VtaPresupuesto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_presupuesto_tipo_emisions'><a href='javascript:;' onclick='menu_grupo("vta_presupuesto_tipo_emisions")'><?php Lang::_lang('VtaPresupuestoTipoEmision') ?></a></h3>
			<ul>
			  <li><a href='vta_presupuesto_tipo_emision_alta.php'><?php Lang::_lang('Alta de VtaPresupuestoTipoEmision') ?> </a></li>
			  <li><a href='vta_presupuesto_tipo_emision_adm.php'><?php Lang::_lang('Listado de VtaPresupuestoTipoEmision') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_presupuesto_tipo_estados'><a href='javascript:;' onclick='menu_grupo("vta_presupuesto_tipo_estados")'><?php Lang::_lang('VtaPresupuestoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_presupuesto_tipo_estado_alta.php'><?php Lang::_lang('Alta de VtaPresupuestoTipoEstado') ?> </a></li>
			  <li><a href='vta_presupuesto_tipo_estado_adm.php'><?php Lang::_lang('Listado de VtaPresupuestoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_presupuesto_estados'><a href='javascript:;' onclick='menu_grupo("vta_presupuesto_estados")'><?php Lang::_lang('VtaPresupuestoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_presupuesto_estado_alta.php'><?php Lang::_lang('Alta de VtaPresupuestoEstado') ?> </a></li>
			  <li><a href='vta_presupuesto_estado_adm.php'><?php Lang::_lang('Listado de VtaPresupuestoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_presupuesto_ins_insumos'><a href='javascript:;' onclick='menu_grupo("vta_presupuesto_ins_insumos")'><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></a></h3>
			<ul>
			  <li><a href='vta_presupuesto_ins_insumo_alta.php'><?php Lang::_lang('Alta de VtaPresupuestoInsInsumo') ?> </a></li>
			  <li><a href='vta_presupuesto_ins_insumo_adm.php'><?php Lang::_lang('Listado de VtaPresupuestoInsInsumo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_presupuesto_conflictos'><a href='javascript:;' onclick='menu_grupo("vta_presupuesto_conflictos")'><?php Lang::_lang('VtaPresupuestoConflicto') ?></a></h3>
			<ul>
			  <li><a href='vta_presupuesto_conflicto_alta.php'><?php Lang::_lang('Alta de VtaPresupuestoConflicto') ?> </a></li>
			  <li><a href='vta_presupuesto_conflicto_adm.php'><?php Lang::_lang('Listado de VtaPresupuestoConflicto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_presupuesto_cancelacions'><a href='javascript:;' onclick='menu_grupo("vta_presupuesto_cancelacions")'><?php Lang::_lang('VtaPresupuestoCancelacion') ?></a></h3>
			<ul>
			  <li><a href='vta_presupuesto_cancelacion_alta.php'><?php Lang::_lang('Alta de VtaPresupuestoCancelacion') ?> </a></li>
			  <li><a href='vta_presupuesto_cancelacion_adm.php'><?php Lang::_lang('Listado de VtaPresupuestoCancelacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_presupuesto_enviados'><a href='javascript:;' onclick='menu_grupo("vta_presupuesto_enviados")'><?php Lang::_lang('VtaPresupuestoEnviado') ?></a></h3>
			<ul>
			  <li><a href='vta_presupuesto_enviado_alta.php'><?php Lang::_lang('Alta de VtaPresupuestoEnviado') ?> </a></li>
			  <li><a href='vta_presupuesto_enviado_adm.php'><?php Lang::_lang('Listado de VtaPresupuestoEnviado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_facturas'><a href='javascript:;' onclick='menu_grupo("vta_tipo_facturas")'><?php Lang::_lang('VtaTipoFactura') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_factura_alta.php'><?php Lang::_lang('Alta de VtaTipoFactura') ?> </a></li>
			  <li><a href='vta_tipo_factura_adm.php'><?php Lang::_lang('Listado de VtaTipoFactura') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_origen_facturas'><a href='javascript:;' onclick='menu_grupo("vta_tipo_origen_facturas")'><?php Lang::_lang('VtaTipoOrigenFacturas') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_origen_factura_alta.php'><?php Lang::_lang('Alta de VtaTipoOrigenFacturas') ?> </a></li>
			  <li><a href='vta_tipo_origen_factura_adm.php'><?php Lang::_lang('Listado de VtaTipoOrigenFacturas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_factura_ws_fe_param_tipo_comprobantes'><a href='javascript:;' onclick='menu_grupo("vta_tipo_factura_ws_fe_param_tipo_comprobantes")'><?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_factura_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de VtaTipoFacturaWsFeParamTipoComprobante') ?> </a></li>
			  <li><a href='vta_tipo_factura_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de VtaTipoFacturaWsFeParamTipoComprobante') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tributo_ws_fe_param_tipo_tributos'><a href='javascript:;' onclick='menu_grupo("vta_tributo_ws_fe_param_tipo_tributos")'><?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?></a></h3>
			<ul>
			  <li><a href='vta_tributo_ws_fe_param_tipo_tributo_alta.php'><?php Lang::_lang('Alta de VtaTributoWsFeParamTipoTributo') ?> </a></li>
			  <li><a href='vta_tributo_ws_fe_param_tipo_tributo_adm.php'><?php Lang::_lang('Listado de VtaTributoWsFeParamTipoTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tributo_exencions'><a href='javascript:;' onclick='menu_grupo("vta_tributo_exencions")'><?php Lang::_lang('VtaTributoExencions') ?></a></h3>
			<ul>
			  <li><a href='vta_tributo_exencion_alta.php'><?php Lang::_lang('Alta de VtaTributoExencions') ?> </a></li>
			  <li><a href='vta_tributo_exencion_adm.php'><?php Lang::_lang('Listado de VtaTributoExencions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tributos'><a href='javascript:;' onclick='menu_grupo("vta_tributos")'><?php Lang::_lang('VtaTributo') ?></a></h3>
			<ul>
			  <li><a href='vta_tributo_alta.php'><?php Lang::_lang('Alta de VtaTributo') ?> </a></li>
			  <li><a href='vta_tributo_adm.php'><?php Lang::_lang('Listado de VtaTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_nota_creditos'><a href='javascript:;' onclick='menu_grupo("vta_tipo_nota_creditos")'><?php Lang::_lang('VtaTipoNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_nota_credito_alta.php'><?php Lang::_lang('Alta de VtaTipoNotaCredito') ?> </a></li>
			  <li><a href='vta_tipo_nota_credito_adm.php'><?php Lang::_lang('Listado de VtaTipoNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_nota_credito_ws_fe_param_tipo_comprobantes'><a href='javascript:;' onclick='menu_grupo("vta_tipo_nota_credito_ws_fe_param_tipo_comprobantes")'><?php Lang::_lang('VtaTipoNotaCreditoWsFeParamTipoComprobante') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de VtaTipoNotaCreditoWsFeParamTipoComprobante') ?> </a></li>
			  <li><a href='vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de VtaTipoNotaCreditoWsFeParamTipoComprobante') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_origen_nota_creditos'><a href='javascript:;' onclick='menu_grupo("vta_tipo_origen_nota_creditos")'><?php Lang::_lang('VtaTipoOrigenNotaCreditos') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_origen_nota_credito_alta.php'><?php Lang::_lang('Alta de VtaTipoOrigenNotaCreditos') ?> </a></li>
			  <li><a href='vta_tipo_origen_nota_credito_adm.php'><?php Lang::_lang('Listado de VtaTipoOrigenNotaCreditos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_nota_debitos'><a href='javascript:;' onclick='menu_grupo("vta_tipo_nota_debitos")'><?php Lang::_lang('VtaTipoNotaDebito') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_nota_debito_alta.php'><?php Lang::_lang('Alta de VtaTipoNotaDebito') ?> </a></li>
			  <li><a href='vta_tipo_nota_debito_adm.php'><?php Lang::_lang('Listado de VtaTipoNotaDebito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_origen_nota_debitos'><a href='javascript:;' onclick='menu_grupo("vta_tipo_origen_nota_debitos")'><?php Lang::_lang('VtaTipoOrigenNotaDebitos') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_origen_nota_debito_alta.php'><?php Lang::_lang('Alta de VtaTipoOrigenNotaDebitos') ?> </a></li>
			  <li><a href='vta_tipo_origen_nota_debito_adm.php'><?php Lang::_lang('Listado de VtaTipoOrigenNotaDebitos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_nota_debito_ws_fe_param_tipo_comprobantes'><a href='javascript:;' onclick='menu_grupo("vta_tipo_nota_debito_ws_fe_param_tipo_comprobantes")'><?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de VtaTipoNotaDebitoWsFeParamTipoComprobante') ?> </a></li>
			  <li><a href='vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de VtaTipoNotaDebitoWsFeParamTipoComprobante') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_creditos'><a href='javascript:;' onclick='menu_grupo("vta_nota_creditos")'><?php Lang::_lang('VtaNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_alta.php'><?php Lang::_lang('Alta de VtaNotaCredito') ?> </a></li>
			  <li><a href='vta_nota_credito_adm.php'><?php Lang::_lang('Listado de VtaNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_tipo_estados'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_tipo_estados")'><?php Lang::_lang('VtaNotaCreditoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_tipo_estado_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoTipoEstado') ?> </a></li>
			  <li><a href='vta_nota_credito_tipo_estado_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_estados'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_estados")'><?php Lang::_lang('VtaNotaCreditoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_estado_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoEstado') ?> </a></li>
			  <li><a href='vta_nota_credito_estado_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_conceptos'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_conceptos")'><?php Lang::_lang('VtaNotaCreditoConcepto') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_concepto_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoConcepto') ?> </a></li>
			  <li><a href='vta_nota_credito_concepto_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoConcepto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_ws_fe_ope_solicituds'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_ws_fe_ope_solicituds")'><?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoWsFeOpeSolicitud') ?> </a></li>
			  <li><a href='vta_nota_credito_ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoWsFeOpeSolicitud') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_vta_factura_vta_orden_ventas'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_vta_factura_vta_orden_ventas")'><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_vta_factura_vta_orden_venta_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> </a></li>
			  <li><a href='vta_nota_credito_vta_factura_vta_orden_venta_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_vta_factura_vta_tributos'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_vta_factura_vta_tributos")'><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_vta_factura_vta_tributo_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoVtaFacturaVtaTributo') ?> </a></li>
			  <li><a href='vta_nota_credito_vta_factura_vta_tributo_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoVtaFacturaVtaTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_items'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_items")'><?php Lang::_lang('VtaNotaCreditoItem') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_item_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoItem') ?> </a></li>
			  <li><a href='vta_nota_credito_item_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoItem') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_enviados'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_enviados")'><?php Lang::_lang('VtaNotaCreditoEnviado') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_enviado_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoEnviado') ?> </a></li>
			  <li><a href='vta_nota_credito_enviado_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoEnviado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_credito_vta_tributos'><a href='javascript:;' onclick='menu_grupo("vta_nota_credito_vta_tributos")'><?php Lang::_lang('VtaNotaCreditoVtaTributo') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_credito_vta_tributo_alta.php'><?php Lang::_lang('Alta de VtaNotaCreditoVtaTributo') ?> </a></li>
			  <li><a href='vta_nota_credito_vta_tributo_adm.php'><?php Lang::_lang('Listado de VtaNotaCreditoVtaTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debitos'><a href='javascript:;' onclick='menu_grupo("vta_nota_debitos")'><?php Lang::_lang('VtaNotaDebito') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_alta.php'><?php Lang::_lang('Alta de VtaNotaDebito') ?> </a></li>
			  <li><a href='vta_nota_debito_adm.php'><?php Lang::_lang('Listado de VtaNotaDebito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_tipo_estados'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_tipo_estados")'><?php Lang::_lang('VtaNotaDebitoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_tipo_estado_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoTipoEstado') ?> </a></li>
			  <li><a href='vta_nota_debito_tipo_estado_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_estados'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_estados")'><?php Lang::_lang('VtaNotaDebitoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_estado_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoEstado') ?> </a></li>
			  <li><a href='vta_nota_debito_estado_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_conceptos'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_conceptos")'><?php Lang::_lang('VtaNotaDebitoConcepto') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_concepto_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoConcepto') ?> </a></li>
			  <li><a href='vta_nota_debito_concepto_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoConcepto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_ws_fe_ope_solicituds'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_ws_fe_ope_solicituds")'><?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoWsFeOpeSolicitud') ?> </a></li>
			  <li><a href='vta_nota_debito_ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoWsFeOpeSolicitud') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_vta_tributos'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_vta_tributos")'><?php Lang::_lang('VtaNotaDebitoVtaTributo') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_vta_tributo_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoVtaTributo') ?> </a></li>
			  <li><a href='vta_nota_debito_vta_tributo_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoVtaTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_vta_nota_creditos'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_vta_nota_creditos")'><?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_vta_nota_credito_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoVtaNotaCredito') ?> </a></li>
			  <li><a href='vta_nota_debito_vta_nota_credito_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoVtaNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_vta_recibos'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_vta_recibos")'><?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_vta_recibo_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoVtaRecibo') ?> </a></li>
			  <li><a href='vta_nota_debito_vta_recibo_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoVtaRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_enviados'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_enviados")'><?php Lang::_lang('VtaNotaDebitoEnviado') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_enviado_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoEnviado') ?> </a></li>
			  <li><a href='vta_nota_debito_enviado_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoEnviado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_nota_debito_items'><a href='javascript:;' onclick='menu_grupo("vta_nota_debito_items")'><?php Lang::_lang('VtaNotaDebitoItem') ?></a></h3>
			<ul>
			  <li><a href='vta_nota_debito_item_alta.php'><?php Lang::_lang('Alta de VtaNotaDebitoItem') ?> </a></li>
			  <li><a href='vta_nota_debito_item_adm.php'><?php Lang::_lang('Listado de VtaNotaDebitoItem') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibos'><a href='javascript:;' onclick='menu_grupo("vta_recibos")'><?php Lang::_lang('VtaRecibo') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_alta.php'><?php Lang::_lang('Alta de VtaRecibo') ?> </a></li>
			  <li><a href='vta_recibo_adm.php'><?php Lang::_lang('Listado de VtaRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_tipo_estados'><a href='javascript:;' onclick='menu_grupo("vta_recibo_tipo_estados")'><?php Lang::_lang('VtaReciboTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_tipo_estado_alta.php'><?php Lang::_lang('Alta de VtaReciboTipoEstado') ?> </a></li>
			  <li><a href='vta_recibo_tipo_estado_adm.php'><?php Lang::_lang('Listado de VtaReciboTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_estados'><a href='javascript:;' onclick='menu_grupo("vta_recibo_estados")'><?php Lang::_lang('VtaReciboEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_estado_alta.php'><?php Lang::_lang('Alta de VtaReciboEstado') ?> </a></li>
			  <li><a href='vta_recibo_estado_adm.php'><?php Lang::_lang('Listado de VtaReciboEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_enviados'><a href='javascript:;' onclick='menu_grupo("vta_recibo_enviados")'><?php Lang::_lang('VtaReciboEnviado') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_enviado_alta.php'><?php Lang::_lang('Alta de VtaReciboEnviado') ?> </a></li>
			  <li><a href='vta_recibo_enviado_adm.php'><?php Lang::_lang('Listado de VtaReciboEnviado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_items'><a href='javascript:;' onclick='menu_grupo("vta_recibo_items")'><?php Lang::_lang('VtaReciboItem') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_item_alta.php'><?php Lang::_lang('Alta de VtaReciboItem') ?> </a></li>
			  <li><a href='vta_recibo_item_adm.php'><?php Lang::_lang('Listado de VtaReciboItem') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_item_conciliados'><a href='javascript:;' onclick='menu_grupo("vta_recibo_item_conciliados")'><?php Lang::_lang('VtaReciboItemConciliado') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_item_conciliado_alta.php'><?php Lang::_lang('Alta de VtaReciboItemConciliado') ?> </a></li>
			  <li><a href='vta_recibo_item_conciliado_adm.php'><?php Lang::_lang('Listado de VtaReciboItemConciliado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_item_cheques'><a href='javascript:;' onclick='menu_grupo("vta_recibo_item_cheques")'><?php Lang::_lang('VtaReciboItemCheque') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_item_cheque_alta.php'><?php Lang::_lang('Alta de VtaReciboItemCheque') ?> </a></li>
			  <li><a href='vta_recibo_item_cheque_adm.php'><?php Lang::_lang('Listado de VtaReciboItemCheque') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_item_retencions'><a href='javascript:;' onclick='menu_grupo("vta_recibo_item_retencions")'><?php Lang::_lang('VtaReciboItemRetencions') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_item_retencion_alta.php'><?php Lang::_lang('Alta de VtaReciboItemRetencions') ?> </a></li>
			  <li><a href='vta_recibo_item_retencion_adm.php'><?php Lang::_lang('Listado de VtaReciboItemRetencions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_conceptos'><a href='javascript:;' onclick='menu_grupo("vta_recibo_conceptos")'><?php Lang::_lang('VtaReciboConcepto') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_concepto_alta.php'><?php Lang::_lang('Alta de VtaReciboConcepto') ?> </a></li>
			  <li><a href='vta_recibo_concepto_adm.php'><?php Lang::_lang('Listado de VtaReciboConcepto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_ws_fe_ope_solicituds'><a href='javascript:;' onclick='menu_grupo("vta_recibo_ws_fe_ope_solicituds")'><?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de VtaReciboWsFeOpeSolicitud') ?> </a></li>
			  <li><a href='vta_recibo_ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de VtaReciboWsFeOpeSolicitud') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_recibos'><a href='javascript:;' onclick='menu_grupo("vta_tipo_recibos")'><?php Lang::_lang('VtaTipoRecibo') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_recibo_alta.php'><?php Lang::_lang('Alta de VtaTipoRecibo') ?> </a></li>
			  <li><a href='vta_tipo_recibo_adm.php'><?php Lang::_lang('Listado de VtaTipoRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_origen_recibos'><a href='javascript:;' onclick='menu_grupo("vta_tipo_origen_recibos")'><?php Lang::_lang('VtaTipoOrigenRecibos') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_origen_recibo_alta.php'><?php Lang::_lang('Alta de VtaTipoOrigenRecibos') ?> </a></li>
			  <li><a href='vta_tipo_origen_recibo_adm.php'><?php Lang::_lang('Listado de VtaTipoOrigenRecibos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_recibo_ws_fe_param_tipo_comprobantes'><a href='javascript:;' onclick='menu_grupo("vta_tipo_recibo_ws_fe_param_tipo_comprobantes")'><?php Lang::_lang('VtaTipoReciboWsFeParamTipoComprobante') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_recibo_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de VtaTipoReciboWsFeParamTipoComprobante') ?> </a></li>
			  <li><a href='vta_tipo_recibo_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de VtaTipoReciboWsFeParamTipoComprobante') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_punto_ventas'><a href='javascript:;' onclick='menu_grupo("vta_punto_ventas")'><?php Lang::_lang('VtaPuntoVenta') ?></a></h3>
			<ul>
			  <li><a href='vta_punto_venta_alta.php'><?php Lang::_lang('Alta de VtaPuntoVenta') ?> </a></li>
			  <li><a href='vta_punto_venta_adm.php'><?php Lang::_lang('Listado de VtaPuntoVenta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_punto_venta_ws_fe_param_punto_ventas'><a href='javascript:;' onclick='menu_grupo("vta_punto_venta_ws_fe_param_punto_ventas")'><?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?></a></h3>
			<ul>
			  <li><a href='vta_punto_venta_ws_fe_param_punto_venta_alta.php'><?php Lang::_lang('Alta de VtaPuntoVentaWsFeParamPuntoVenta') ?> </a></li>
			  <li><a href='vta_punto_venta_ws_fe_param_punto_venta_adm.php'><?php Lang::_lang('Listado de VtaPuntoVentaWsFeParamPuntoVenta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_recibo_vta_tributos'><a href='javascript:;' onclick='menu_grupo("vta_recibo_vta_tributos")'><?php Lang::_lang('VtaReciboVtaTributo') ?></a></h3>
			<ul>
			  <li><a href='vta_recibo_vta_tributo_alta.php'><?php Lang::_lang('Alta de VtaReciboVtaTributo') ?> </a></li>
			  <li><a href='vta_recibo_vta_tributo_adm.php'><?php Lang::_lang('Listado de VtaReciboVtaTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_orden_ventas'><a href='javascript:;' onclick='menu_grupo("vta_orden_ventas")'><?php Lang::_lang('VtaOrdenVenta') ?></a></h3>
			<ul>
			  <li><a href='vta_orden_venta_alta.php'><?php Lang::_lang('Alta de VtaOrdenVenta') ?> </a></li>
			  <li><a href='vta_orden_venta_adm.php'><?php Lang::_lang('Listado de VtaOrdenVenta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_orden_venta_tipo_estados'><a href='javascript:;' onclick='menu_grupo("vta_orden_venta_tipo_estados")'><?php Lang::_lang('VtaOrdenVentaTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_orden_venta_tipo_estado_alta.php'><?php Lang::_lang('Alta de VtaOrdenVentaTipoEstado') ?> </a></li>
			  <li><a href='vta_orden_venta_tipo_estado_adm.php'><?php Lang::_lang('Listado de VtaOrdenVentaTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_orden_venta_estados'><a href='javascript:;' onclick='menu_grupo("vta_orden_venta_estados")'><?php Lang::_lang('VtaOrdenVentaEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_orden_venta_estado_alta.php'><?php Lang::_lang('Alta de VtaOrdenVentaEstado') ?> </a></li>
			  <li><a href='vta_orden_venta_estado_adm.php'><?php Lang::_lang('Listado de VtaOrdenVentaEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_orden_venta_tipo_estado_facturacions'><a href='javascript:;' onclick='menu_grupo("vta_orden_venta_tipo_estado_facturacions")'><?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?></a></h3>
			<ul>
			  <li><a href='vta_orden_venta_tipo_estado_facturacion_alta.php'><?php Lang::_lang('Alta de VtaOrdenVentaTipoEstadoFacturacion') ?> </a></li>
			  <li><a href='vta_orden_venta_tipo_estado_facturacion_adm.php'><?php Lang::_lang('Listado de VtaOrdenVentaTipoEstadoFacturacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_orden_venta_estado_facturacions'><a href='javascript:;' onclick='menu_grupo("vta_orden_venta_estado_facturacions")'><?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?></a></h3>
			<ul>
			  <li><a href='vta_orden_venta_estado_facturacion_alta.php'><?php Lang::_lang('Alta de VtaOrdenVentaEstadoFacturacion') ?> </a></li>
			  <li><a href='vta_orden_venta_estado_facturacion_adm.php'><?php Lang::_lang('Listado de VtaOrdenVentaEstadoFacturacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_orden_venta_tipo_estado_remisions'><a href='javascript:;' onclick='menu_grupo("vta_orden_venta_tipo_estado_remisions")'><?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?></a></h3>
			<ul>
			  <li><a href='vta_orden_venta_tipo_estado_remision_alta.php'><?php Lang::_lang('Alta de VtaOrdenVentaTipoEstadoRemision') ?> </a></li>
			  <li><a href='vta_orden_venta_tipo_estado_remision_adm.php'><?php Lang::_lang('Listado de VtaOrdenVentaTipoEstadoRemision') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_orden_venta_estado_remisions'><a href='javascript:;' onclick='menu_grupo("vta_orden_venta_estado_remisions")'><?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?></a></h3>
			<ul>
			  <li><a href='vta_orden_venta_estado_remision_alta.php'><?php Lang::_lang('Alta de VtaOrdenVentaEstadoRemision') ?> </a></li>
			  <li><a href='vta_orden_venta_estado_remision_adm.php'><?php Lang::_lang('Listado de VtaOrdenVentaEstadoRemision') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_remito_vta_orden_ventas'><a href='javascript:;' onclick='menu_grupo("vta_remito_vta_orden_ventas")'><?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?></a></h3>
			<ul>
			  <li><a href='vta_remito_vta_orden_venta_alta.php'><?php Lang::_lang('Alta de VtaRemitoVtaOrdenVenta') ?> </a></li>
			  <li><a href='vta_remito_vta_orden_venta_adm.php'><?php Lang::_lang('Listado de VtaRemitoVtaOrdenVenta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_remitos'><a href='javascript:;' onclick='menu_grupo("vta_remitos")'><?php Lang::_lang('VtaRemito') ?></a></h3>
			<ul>
			  <li><a href='vta_remito_alta.php'><?php Lang::_lang('Alta de VtaRemito') ?> </a></li>
			  <li><a href='vta_remito_adm.php'><?php Lang::_lang('Listado de VtaRemito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_remito_tipo_estados'><a href='javascript:;' onclick='menu_grupo("vta_remito_tipo_estados")'><?php Lang::_lang('VtaRemitoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_remito_tipo_estado_alta.php'><?php Lang::_lang('Alta de VtaRemitoTipoEstado') ?> </a></li>
			  <li><a href='vta_remito_tipo_estado_adm.php'><?php Lang::_lang('Listado de VtaRemitoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_remito_estados'><a href='javascript:;' onclick='menu_grupo("vta_remito_estados")'><?php Lang::_lang('VtaRemitoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_remito_estado_alta.php'><?php Lang::_lang('Alta de VtaRemitoEstado') ?> </a></li>
			  <li><a href='vta_remito_estado_adm.php'><?php Lang::_lang('Listado de VtaRemitoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_remito_enviados'><a href='javascript:;' onclick='menu_grupo("vta_remito_enviados")'><?php Lang::_lang('VtaRemitoEnviado') ?></a></h3>
			<ul>
			  <li><a href='vta_remito_enviado_alta.php'><?php Lang::_lang('Alta de VtaRemitoEnviado') ?> </a></li>
			  <li><a href='vta_remito_enviado_adm.php'><?php Lang::_lang('Listado de VtaRemitoEnviado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_vendedor_us_usuarios'><a href='javascript:;' onclick='menu_grupo("vta_vendedor_us_usuarios")'><?php Lang::_lang('VtaVendedorUsUsuario') ?></a></h3>
			<ul>
			  <li><a href='vta_vendedor_us_usuario_alta.php'><?php Lang::_lang('Alta de VtaVendedorUsUsuario') ?> </a></li>
			  <li><a href='vta_vendedor_us_usuario_adm.php'><?php Lang::_lang('Listado de VtaVendedorUsUsuario') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_vendedor_ins_tipo_lista_precios'><a href='javascript:;' onclick='menu_grupo("vta_vendedor_ins_tipo_lista_precios")'><?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?></a></h3>
			<ul>
			  <li><a href='vta_vendedor_ins_tipo_lista_precio_alta.php'><?php Lang::_lang('Alta de VtaVendedorInsTipoListaPrecio') ?> </a></li>
			  <li><a href='vta_vendedor_ins_tipo_lista_precio_adm.php'><?php Lang::_lang('Listado de VtaVendedorInsTipoListaPrecio') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_tipo_compradors'><a href='javascript:;' onclick='menu_grupo("vta_tipo_compradors")'><?php Lang::_lang('VtaTipoComprador') ?></a></h3>
			<ul>
			  <li><a href='vta_tipo_comprador_alta.php'><?php Lang::_lang('Alta de VtaTipoComprador') ?> </a></li>
			  <li><a href='vta_tipo_comprador_adm.php'><?php Lang::_lang('Listado de VtaTipoComprador') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_vendedor_descuentos'><a href='javascript:;' onclick='menu_grupo("vta_vendedor_descuentos")'><?php Lang::_lang('VtaVendedorDescuento') ?></a></h3>
			<ul>
			  <li><a href='vta_vendedor_descuento_alta.php'><?php Lang::_lang('Alta de VtaVendedorDescuento') ?> </a></li>
			  <li><a href='vta_vendedor_descuento_adm.php'><?php Lang::_lang('Listado de VtaVendedorDescuento') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_facturas'><a href='javascript:;' onclick='menu_grupo("vta_facturas")'><?php Lang::_lang('VtaFactura') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_alta.php'><?php Lang::_lang('Alta de VtaFactura') ?> </a></li>
			  <li><a href='vta_factura_adm.php'><?php Lang::_lang('Listado de VtaFactura') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_tipo_estados'><a href='javascript:;' onclick='menu_grupo("vta_factura_tipo_estados")'><?php Lang::_lang('VtaFacturaTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_tipo_estado_alta.php'><?php Lang::_lang('Alta de VtaFacturaTipoEstado') ?> </a></li>
			  <li><a href='vta_factura_tipo_estado_adm.php'><?php Lang::_lang('Listado de VtaFacturaTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_estados'><a href='javascript:;' onclick='menu_grupo("vta_factura_estados")'><?php Lang::_lang('VtaFacturaEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_estado_alta.php'><?php Lang::_lang('Alta de VtaFacturaEstado') ?> </a></li>
			  <li><a href='vta_factura_estado_adm.php'><?php Lang::_lang('Listado de VtaFacturaEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_conceptos'><a href='javascript:;' onclick='menu_grupo("vta_factura_conceptos")'><?php Lang::_lang('VtaFacturaConceptos') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_concepto_alta.php'><?php Lang::_lang('Alta de VtaFacturaConceptos') ?> </a></li>
			  <li><a href='vta_factura_concepto_adm.php'><?php Lang::_lang('Listado de VtaFacturaConceptos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_items'><a href='javascript:;' onclick='menu_grupo("vta_factura_items")'><?php Lang::_lang('VtaFacturaItems') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_item_alta.php'><?php Lang::_lang('Alta de VtaFacturaItems') ?> </a></li>
			  <li><a href='vta_factura_item_adm.php'><?php Lang::_lang('Listado de VtaFacturaItems') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_vta_tributos'><a href='javascript:;' onclick='menu_grupo("vta_factura_vta_tributos")'><?php Lang::_lang('VtaFacturaVtaTributo') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_vta_tributo_alta.php'><?php Lang::_lang('Alta de VtaFacturaVtaTributo') ?> </a></li>
			  <li><a href='vta_factura_vta_tributo_adm.php'><?php Lang::_lang('Listado de VtaFacturaVtaTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_vta_recibos'><a href='javascript:;' onclick='menu_grupo("vta_factura_vta_recibos")'><?php Lang::_lang('VtaFacturaVtaRecibo') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_vta_recibo_alta.php'><?php Lang::_lang('Alta de VtaFacturaVtaRecibo') ?> </a></li>
			  <li><a href='vta_factura_vta_recibo_adm.php'><?php Lang::_lang('Listado de VtaFacturaVtaRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_vta_nota_creditos'><a href='javascript:;' onclick='menu_grupo("vta_factura_vta_nota_creditos")'><?php Lang::_lang('VtaFacturaVtaNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_vta_nota_credito_alta.php'><?php Lang::_lang('Alta de VtaFacturaVtaNotaCredito') ?> </a></li>
			  <li><a href='vta_factura_vta_nota_credito_adm.php'><?php Lang::_lang('Listado de VtaFacturaVtaNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_ws_fe_ope_solicituds'><a href='javascript:;' onclick='menu_grupo("vta_factura_ws_fe_ope_solicituds")'><?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de VtaFacturaWsFeOpeSolicitud') ?> </a></li>
			  <li><a href='vta_factura_ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de VtaFacturaWsFeOpeSolicitud') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_enviados'><a href='javascript:;' onclick='menu_grupo("vta_factura_enviados")'><?php Lang::_lang('VtaFacturaEnviado') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_enviado_alta.php'><?php Lang::_lang('Alta de VtaFacturaEnviado') ?> </a></li>
			  <li><a href='vta_factura_enviado_adm.php'><?php Lang::_lang('Listado de VtaFacturaEnviado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_factura_vta_orden_ventas'><a href='javascript:;' onclick='menu_grupo("vta_factura_vta_orden_ventas")'><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></a></h3>
			<ul>
			  <li><a href='vta_factura_vta_orden_venta_alta.php'><?php Lang::_lang('Alta de VtaFacturaVtaOrdenVenta') ?> </a></li>
			  <li><a href='vta_factura_vta_orden_venta_adm.php'><?php Lang::_lang('Listado de VtaFacturaVtaOrdenVenta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_comisions'><a href='javascript:;' onclick='menu_grupo("vta_comisions")'><?php Lang::_lang('VtaComisions') ?></a></h3>
			<ul>
			  <li><a href='vta_comision_alta.php'><?php Lang::_lang('Alta de VtaComisions') ?> </a></li>
			  <li><a href='vta_comision_adm.php'><?php Lang::_lang('Listado de VtaComisions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_comision_tipo_estados'><a href='javascript:;' onclick='menu_grupo("vta_comision_tipo_estados")'><?php Lang::_lang('VtaComisionTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_comision_tipo_estado_alta.php'><?php Lang::_lang('Alta de VtaComisionTipoEstado') ?> </a></li>
			  <li><a href='vta_comision_tipo_estado_adm.php'><?php Lang::_lang('Listado de VtaComisionTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_comision_estados'><a href='javascript:;' onclick='menu_grupo("vta_comision_estados")'><?php Lang::_lang('VtaComisionEstado') ?></a></h3>
			<ul>
			  <li><a href='vta_comision_estado_alta.php'><?php Lang::_lang('Alta de VtaComisionEstado') ?> </a></li>
			  <li><a href='vta_comision_estado_adm.php'><?php Lang::_lang('Listado de VtaComisionEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_comision_enviados'><a href='javascript:;' onclick='menu_grupo("vta_comision_enviados")'><?php Lang::_lang('VtaComisionEnviados') ?></a></h3>
			<ul>
			  <li><a href='vta_comision_enviado_alta.php'><?php Lang::_lang('Alta de VtaComisionEnviados') ?> </a></li>
			  <li><a href='vta_comision_enviado_adm.php'><?php Lang::_lang('Listado de VtaComisionEnviados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_comision_vta_facturas'><a href='javascript:;' onclick='menu_grupo("vta_comision_vta_facturas")'><?php Lang::_lang('VtaComisionVtaFactura') ?></a></h3>
			<ul>
			  <li><a href='vta_comision_vta_factura_alta.php'><?php Lang::_lang('Alta de VtaComisionVtaFactura') ?> </a></li>
			  <li><a href='vta_comision_vta_factura_adm.php'><?php Lang::_lang('Listado de VtaComisionVtaFactura') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_comision_gral_fp_forma_pagos'><a href='javascript:;' onclick='menu_grupo("vta_comision_gral_fp_forma_pagos")'><?php Lang::_lang('VtaComisionGralFpFormaPago') ?></a></h3>
			<ul>
			  <li><a href='vta_comision_gral_fp_forma_pago_alta.php'><?php Lang::_lang('Alta de VtaComisionGralFpFormaPago') ?> </a></li>
			  <li><a href='vta_comision_gral_fp_forma_pago_adm.php'><?php Lang::_lang('Listado de VtaComisionGralFpFormaPago') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head vta_comision_gral_fp_forma_pago_cheques'><a href='javascript:;' onclick='menu_grupo("vta_comision_gral_fp_forma_pago_cheques")'><?php Lang::_lang('VtaComisionGralFpFormaPagoCheques') ?></a></h3>
			<ul>
			  <li><a href='vta_comision_gral_fp_forma_pago_cheque_alta.php'><?php Lang::_lang('Alta de VtaComisionGralFpFormaPagoCheques') ?> </a></li>
			  <li><a href='vta_comision_gral_fp_forma_pago_cheque_adm.php'><?php Lang::_lang('Listado de VtaComisionGralFpFormaPagoCheques') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_tipo_ivas'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_tipo_ivas")'><?php Lang::_lang('WsFeParamTipoIva') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_tipo_iva_alta.php'><?php Lang::_lang('Alta de WsFeParamTipoIva') ?> </a></li>
			  <li><a href='ws_fe_param_tipo_iva_adm.php'><?php Lang::_lang('Listado de WsFeParamTipoIva') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_tipo_tributos'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_tipo_tributos")'><?php Lang::_lang('WsFeParamTipoTributo') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_tipo_tributo_alta.php'><?php Lang::_lang('Alta de WsFeParamTipoTributo') ?> </a></li>
			  <li><a href='ws_fe_param_tipo_tributo_adm.php'><?php Lang::_lang('Listado de WsFeParamTipoTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_tipo_opcionals'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_tipo_opcionals")'><?php Lang::_lang('WsFeParamTipoOpcional') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_tipo_opcional_alta.php'><?php Lang::_lang('Alta de WsFeParamTipoOpcional') ?> </a></li>
			  <li><a href='ws_fe_param_tipo_opcional_adm.php'><?php Lang::_lang('Listado de WsFeParamTipoOpcional') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_tipo_paiss'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_tipo_paiss")'><?php Lang::_lang('WsFeParamTipoPais') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_tipo_pais_alta.php'><?php Lang::_lang('Alta de WsFeParamTipoPais') ?> </a></li>
			  <li><a href='ws_fe_param_tipo_pais_adm.php'><?php Lang::_lang('Listado de WsFeParamTipoPais') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_tipo_monedas'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_tipo_monedas")'><?php Lang::_lang('WsFeParamTipoMoneda') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_tipo_moneda_alta.php'><?php Lang::_lang('Alta de WsFeParamTipoMoneda') ?> </a></li>
			  <li><a href='ws_fe_param_tipo_moneda_adm.php'><?php Lang::_lang('Listado de WsFeParamTipoMoneda') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_tipo_comprobantes'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_tipo_comprobantes")'><?php Lang::_lang('WsFeParamTipoComprobante') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de WsFeParamTipoComprobante') ?> </a></li>
			  <li><a href='ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de WsFeParamTipoComprobante') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_tipo_conceptos'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_tipo_conceptos")'><?php Lang::_lang('WsFeParamTipoConcepto') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_tipo_concepto_alta.php'><?php Lang::_lang('Alta de WsFeParamTipoConcepto') ?> </a></li>
			  <li><a href='ws_fe_param_tipo_concepto_adm.php'><?php Lang::_lang('Listado de WsFeParamTipoConcepto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_tipo_documentos'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_tipo_documentos")'><?php Lang::_lang('WsFeParamTipoDocumento') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_tipo_documento_alta.php'><?php Lang::_lang('Alta de WsFeParamTipoDocumento') ?> </a></li>
			  <li><a href='ws_fe_param_tipo_documento_adm.php'><?php Lang::_lang('Listado de WsFeParamTipoDocumento') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_param_punto_ventas'><a href='javascript:;' onclick='menu_grupo("ws_fe_param_punto_ventas")'><?php Lang::_lang('WsFeParamPuntoVenta') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_param_punto_venta_alta.php'><?php Lang::_lang('Alta de WsFeParamPuntoVenta') ?> </a></li>
			  <li><a href='ws_fe_param_punto_venta_adm.php'><?php Lang::_lang('Listado de WsFeParamPuntoVenta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_ope_solicitud_ivas'><a href='javascript:;' onclick='menu_grupo("ws_fe_ope_solicitud_ivas")'><?php Lang::_lang('WsFeOpeSolicitudIva') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_ope_solicitud_iva_alta.php'><?php Lang::_lang('Alta de WsFeOpeSolicitudIva') ?> </a></li>
			  <li><a href='ws_fe_ope_solicitud_iva_adm.php'><?php Lang::_lang('Listado de WsFeOpeSolicitudIva') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_ope_solicitud_opcionals'><a href='javascript:;' onclick='menu_grupo("ws_fe_ope_solicitud_opcionals")'><?php Lang::_lang('WsFeOpeSolicitudOpcional') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_ope_solicitud_opcional_alta.php'><?php Lang::_lang('Alta de WsFeOpeSolicitudOpcional') ?> </a></li>
			  <li><a href='ws_fe_ope_solicitud_opcional_adm.php'><?php Lang::_lang('Listado de WsFeOpeSolicitudOpcional') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_ope_solicitud_respuesta_observacions'><a href='javascript:;' onclick='menu_grupo("ws_fe_ope_solicitud_respuesta_observacions")'><?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_ope_solicitud_respuesta_observacion_alta.php'><?php Lang::_lang('Alta de WsFeOpeSolicitudRespuestaObservacion') ?> </a></li>
			  <li><a href='ws_fe_ope_solicitud_respuesta_observacion_adm.php'><?php Lang::_lang('Listado de WsFeOpeSolicitudRespuestaObservacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_ope_solicitud_comprobante_asociados'><a href='javascript:;' onclick='menu_grupo("ws_fe_ope_solicitud_comprobante_asociados")'><?php Lang::_lang('WsFeOpeSolicitudComprobanteAsociado') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_ope_solicitud_comprobante_asociado_alta.php'><?php Lang::_lang('Alta de WsFeOpeSolicitudComprobanteAsociado') ?> </a></li>
			  <li><a href='ws_fe_ope_solicitud_comprobante_asociado_adm.php'><?php Lang::_lang('Listado de WsFeOpeSolicitudComprobanteAsociado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_ope_solicitud_tributos'><a href='javascript:;' onclick='menu_grupo("ws_fe_ope_solicitud_tributos")'><?php Lang::_lang('WsFeOpeSolicitudTributo') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_ope_solicitud_tributo_alta.php'><?php Lang::_lang('Alta de WsFeOpeSolicitudTributo') ?> </a></li>
			  <li><a href='ws_fe_ope_solicitud_tributo_adm.php'><?php Lang::_lang('Listado de WsFeOpeSolicitudTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_ope_solicituds'><a href='javascript:;' onclick='menu_grupo("ws_fe_ope_solicituds")'><?php Lang::_lang('WsFeOpeSolicitud') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de WsFeOpeSolicitud') ?> </a></li>
			  <li><a href='ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de WsFeOpeSolicitud') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ws_fe_ope_solicitud_respuestas'><a href='javascript:;' onclick='menu_grupo("ws_fe_ope_solicitud_respuestas")'><?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?></a></h3>
			<ul>
			  <li><a href='ws_fe_ope_solicitud_respuesta_alta.php'><?php Lang::_lang('Alta de WsFeOpeSolicitudRespuesta') ?> </a></li>
			  <li><a href='ws_fe_ope_solicitud_respuesta_adm.php'><?php Lang::_lang('Listado de WsFeOpeSolicitudRespuesta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_stock_tipo_movimientos'><a href='javascript:;' onclick='menu_grupo("ins_stock_tipo_movimientos")'><?php Lang::_lang('InsStockTipoMovimientos') ?></a></h3>
			<ul>
			  <li><a href='ins_stock_tipo_movimiento_alta.php'><?php Lang::_lang('Alta de InsStockTipoMovimientos') ?> </a></li>
			  <li><a href='ins_stock_tipo_movimiento_adm.php'><?php Lang::_lang('Listado de InsStockTipoMovimientos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_stock_movimientos'><a href='javascript:;' onclick='menu_grupo("ins_stock_movimientos")'><?php Lang::_lang('InsStockMovimientos') ?></a></h3>
			<ul>
			  <li><a href='ins_stock_movimiento_alta.php'><?php Lang::_lang('Alta de InsStockMovimientos') ?> </a></li>
			  <li><a href='ins_stock_movimiento_adm.php'><?php Lang::_lang('Listado de InsStockMovimientos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_stock_resumens'><a href='javascript:;' onclick='menu_grupo("ins_stock_resumens")'><?php Lang::_lang('InsStockResumens') ?></a></h3>
			<ul>
			  <li><a href='ins_stock_resumen_alta.php'><?php Lang::_lang('Alta de InsStockResumens') ?> </a></li>
			  <li><a href='ins_stock_resumen_adm.php'><?php Lang::_lang('Listado de InsStockResumens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_stock_resumen_estados'><a href='javascript:;' onclick='menu_grupo("ins_stock_resumen_estados")'><?php Lang::_lang('InsStockResumenEstados') ?></a></h3>
			<ul>
			  <li><a href='ins_stock_resumen_estado_alta.php'><?php Lang::_lang('Alta de InsStockResumenEstados') ?> </a></li>
			  <li><a href='ins_stock_resumen_estado_adm.php'><?php Lang::_lang('Listado de InsStockResumenEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ins_stock_resumen_tipo_estados'><a href='javascript:;' onclick='menu_grupo("ins_stock_resumen_tipo_estados")'><?php Lang::_lang('InsStockResumenTipoEstados') ?></a></h3>
			<ul>
			  <li><a href='ins_stock_resumen_tipo_estado_alta.php'><?php Lang::_lang('Alta de InsStockResumenTipoEstados') ?> </a></li>
			  <li><a href='ins_stock_resumen_tipo_estado_adm.php'><?php Lang::_lang('Listado de InsStockResumenTipoEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pdi_pedidos'><a href='javascript:;' onclick='menu_grupo("pdi_pedidos")'><?php Lang::_lang('PdiPedidos') ?></a></h3>
			<ul>
			  <li><a href='pdi_pedido_alta.php'><?php Lang::_lang('Alta de PdiPedidos') ?> </a></li>
			  <li><a href='pdi_pedido_adm.php'><?php Lang::_lang('Listado de PdiPedidos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pdi_estados'><a href='javascript:;' onclick='menu_grupo("pdi_estados")'><?php Lang::_lang('PdiEstados') ?></a></h3>
			<ul>
			  <li><a href='pdi_estado_alta.php'><?php Lang::_lang('Alta de PdiEstados') ?> </a></li>
			  <li><a href='pdi_estado_adm.php'><?php Lang::_lang('Listado de PdiEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pdi_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pdi_tipo_estados")'><?php Lang::_lang('PdiTipoEstados') ?></a></h3>
			<ul>
			  <li><a href='pdi_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdiTipoEstados') ?> </a></li>
			  <li><a href='pdi_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdiTipoEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pdi_pedido_destinatarios'><a href='javascript:;' onclick='menu_grupo("pdi_pedido_destinatarios")'><?php Lang::_lang('PdiPedidoDestinatarios') ?></a></h3>
			<ul>
			  <li><a href='pdi_pedido_destinatario_alta.php'><?php Lang::_lang('Alta de PdiPedidoDestinatarios') ?> </a></li>
			  <li><a href='pdi_pedido_destinatario_adm.php'><?php Lang::_lang('Listado de PdiPedidoDestinatarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pdi_comentarios'><a href='javascript:;' onclick='menu_grupo("pdi_comentarios")'><?php Lang::_lang('PdiComentarios') ?></a></h3>
			<ul>
			  <li><a href='pdi_comentario_alta.php'><?php Lang::_lang('Alta de PdiComentarios') ?> </a></li>
			  <li><a href='pdi_comentario_adm.php'><?php Lang::_lang('Listado de PdiComentarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pdi_tipo_origens'><a href='javascript:;' onclick='menu_grupo("pdi_tipo_origens")'><?php Lang::_lang('PdiTipoOrigens') ?></a></h3>
			<ul>
			  <li><a href='pdi_tipo_origen_alta.php'><?php Lang::_lang('Alta de PdiTipoOrigens') ?> </a></li>
			  <li><a href='pdi_tipo_origen_adm.php'><?php Lang::_lang('Listado de PdiTipoOrigens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pdi_urgencias'><a href='javascript:;' onclick='menu_grupo("pdi_urgencias")'><?php Lang::_lang('PdiUrgencias') ?></a></h3>
			<ul>
			  <li><a href='pdi_urgencia_alta.php'><?php Lang::_lang('Alta de PdiUrgencias') ?> </a></li>
			  <li><a href='pdi_urgencia_adm.php'><?php Lang::_lang('Listado de PdiUrgencias') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_pedidos'><a href='javascript:;' onclick='menu_grupo("pde_pedidos")'><?php Lang::_lang('PdePedidos') ?></a></h3>
			<ul>
			  <li><a href='pde_pedido_alta.php'><?php Lang::_lang('Alta de PdePedidos') ?> </a></li>
			  <li><a href='pde_pedido_adm.php'><?php Lang::_lang('Listado de PdePedidos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_estados'><a href='javascript:;' onclick='menu_grupo("pde_estados")'><?php Lang::_lang('PdeEstados') ?></a></h3>
			<ul>
			  <li><a href='pde_estado_alta.php'><?php Lang::_lang('Alta de PdeEstados') ?> </a></li>
			  <li><a href='pde_estado_adm.php'><?php Lang::_lang('Listado de PdeEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_tipo_estados")'><?php Lang::_lang('PdeTipoEstados') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeTipoEstados') ?> </a></li>
			  <li><a href='pde_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeTipoEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_pedido_enviados'><a href='javascript:;' onclick='menu_grupo("pde_pedido_enviados")'><?php Lang::_lang('PdePedidoEnviados') ?></a></h3>
			<ul>
			  <li><a href='pde_pedido_enviado_alta.php'><?php Lang::_lang('Alta de PdePedidoEnviados') ?> </a></li>
			  <li><a href='pde_pedido_enviado_adm.php'><?php Lang::_lang('Listado de PdePedidoEnviados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_pedido_destinatarios'><a href='javascript:;' onclick='menu_grupo("pde_pedido_destinatarios")'><?php Lang::_lang('PdePedidoDestinatarios') ?></a></h3>
			<ul>
			  <li><a href='pde_pedido_destinatario_alta.php'><?php Lang::_lang('Alta de PdePedidoDestinatarios') ?> </a></li>
			  <li><a href='pde_pedido_destinatario_adm.php'><?php Lang::_lang('Listado de PdePedidoDestinatarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_pedido_envio_emails'><a href='javascript:;' onclick='menu_grupo("pde_pedido_envio_emails")'><?php Lang::_lang('PdePedidoEnvioEmails') ?></a></h3>
			<ul>
			  <li><a href='pde_pedido_envio_email_alta.php'><?php Lang::_lang('Alta de PdePedidoEnvioEmails') ?> </a></li>
			  <li><a href='pde_pedido_envio_email_adm.php'><?php Lang::_lang('Listado de PdePedidoEnvioEmails') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_urgencias'><a href='javascript:;' onclick='menu_grupo("pde_urgencias")'><?php Lang::_lang('PdeUrgencias') ?></a></h3>
			<ul>
			  <li><a href='pde_urgencia_alta.php'><?php Lang::_lang('Alta de PdeUrgencias') ?> </a></li>
			  <li><a href='pde_urgencia_adm.php'><?php Lang::_lang('Listado de PdeUrgencias') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_pedido_prv_proveedors'><a href='javascript:;' onclick='menu_grupo("pde_pedido_prv_proveedors")'><?php Lang::_lang('PdePedidoPrvProveedors') ?></a></h3>
			<ul>
			  <li><a href='pde_pedido_prv_proveedor_alta.php'><?php Lang::_lang('Alta de PdePedidoPrvProveedors') ?> </a></li>
			  <li><a href='pde_pedido_prv_proveedor_adm.php'><?php Lang::_lang('Listado de PdePedidoPrvProveedors') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_pedido_prv_proveedor_avisados'><a href='javascript:;' onclick='menu_grupo("pde_pedido_prv_proveedor_avisados")'><?php Lang::_lang('PdePedidoPrvProveedorAvisados') ?></a></h3>
			<ul>
			  <li><a href='pde_pedido_prv_proveedor_avisado_alta.php'><?php Lang::_lang('Alta de PdePedidoPrvProveedorAvisados') ?> </a></li>
			  <li><a href='pde_pedido_prv_proveedor_avisado_adm.php'><?php Lang::_lang('Listado de PdePedidoPrvProveedorAvisados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_cotizacions'><a href='javascript:;' onclick='menu_grupo("pde_cotizacions")'><?php Lang::_lang('PdeCotizacions') ?></a></h3>
			<ul>
			  <li><a href='pde_cotizacion_alta.php'><?php Lang::_lang('Alta de PdeCotizacions') ?> </a></li>
			  <li><a href='pde_cotizacion_adm.php'><?php Lang::_lang('Listado de PdeCotizacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_cotizacion_destinatarios'><a href='javascript:;' onclick='menu_grupo("pde_cotizacion_destinatarios")'><?php Lang::_lang('PdeCotizacionDestinatarios') ?></a></h3>
			<ul>
			  <li><a href='pde_cotizacion_destinatario_alta.php'><?php Lang::_lang('Alta de PdeCotizacionDestinatarios') ?> </a></li>
			  <li><a href='pde_cotizacion_destinatario_adm.php'><?php Lang::_lang('Listado de PdeCotizacionDestinatarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_cotizacion_envio_emails'><a href='javascript:;' onclick='menu_grupo("pde_cotizacion_envio_emails")'><?php Lang::_lang('PdeCotizacionEnvioEmails') ?></a></h3>
			<ul>
			  <li><a href='pde_cotizacion_envio_email_alta.php'><?php Lang::_lang('Alta de PdeCotizacionEnvioEmails') ?> </a></li>
			  <li><a href='pde_cotizacion_envio_email_adm.php'><?php Lang::_lang('Listado de PdeCotizacionEnvioEmails') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_agrupacions'><a href='javascript:;' onclick='menu_grupo("pde_oc_agrupacions")'><?php Lang::_lang('PdeOcAgrupacions') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_agrupacion_alta.php'><?php Lang::_lang('Alta de PdeOcAgrupacions') ?> </a></li>
			  <li><a href='pde_oc_agrupacion_adm.php'><?php Lang::_lang('Listado de PdeOcAgrupacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_agrupacion_estados'><a href='javascript:;' onclick='menu_grupo("pde_oc_agrupacion_estados")'><?php Lang::_lang('PdeOcAgrupacionEstados') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_agrupacion_estado_alta.php'><?php Lang::_lang('Alta de PdeOcAgrupacionEstados') ?> </a></li>
			  <li><a href='pde_oc_agrupacion_estado_adm.php'><?php Lang::_lang('Listado de PdeOcAgrupacionEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_agrupacion_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_oc_agrupacion_tipo_estados")'><?php Lang::_lang('PdeOcAgrupacionTipoEstados') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_agrupacion_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeOcAgrupacionTipoEstados') ?> </a></li>
			  <li><a href='pde_oc_agrupacion_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeOcAgrupacionTipoEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_agrupacion_enviados'><a href='javascript:;' onclick='menu_grupo("pde_oc_agrupacion_enviados")'><?php Lang::_lang('PdeOcAgrupacionEnviado') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_agrupacion_enviado_alta.php'><?php Lang::_lang('Alta de PdeOcAgrupacionEnviado') ?> </a></li>
			  <li><a href='pde_oc_agrupacion_enviado_adm.php'><?php Lang::_lang('Listado de PdeOcAgrupacionEnviado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_agrupacion_items'><a href='javascript:;' onclick='menu_grupo("pde_oc_agrupacion_items")'><?php Lang::_lang('PdeOcAgrupacionItems') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_agrupacion_item_alta.php'><?php Lang::_lang('Alta de PdeOcAgrupacionItems') ?> </a></li>
			  <li><a href='pde_oc_agrupacion_item_adm.php'><?php Lang::_lang('Listado de PdeOcAgrupacionItems') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_ocs'><a href='javascript:;' onclick='menu_grupo("pde_ocs")'><?php Lang::_lang('PdeOcs') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_alta.php'><?php Lang::_lang('Alta de PdeOcs') ?> </a></li>
			  <li><a href='pde_oc_adm.php'><?php Lang::_lang('Listado de PdeOcs') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_estados'><a href='javascript:;' onclick='menu_grupo("pde_oc_estados")'><?php Lang::_lang('PdeOcEstados') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_estado_alta.php'><?php Lang::_lang('Alta de PdeOcEstados') ?> </a></li>
			  <li><a href='pde_oc_estado_adm.php'><?php Lang::_lang('Listado de PdeOcEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_oc_tipo_estados")'><?php Lang::_lang('PdeOcTipoEstados') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeOcTipoEstados') ?> </a></li>
			  <li><a href='pde_oc_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeOcTipoEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_estado_recepcions'><a href='javascript:;' onclick='menu_grupo("pde_oc_estado_recepcions")'><?php Lang::_lang('PdeOcEstadoRecepcion') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_estado_recepcion_alta.php'><?php Lang::_lang('Alta de PdeOcEstadoRecepcion') ?> </a></li>
			  <li><a href='pde_oc_estado_recepcion_adm.php'><?php Lang::_lang('Listado de PdeOcEstadoRecepcion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_tipo_estado_recepcions'><a href='javascript:;' onclick='menu_grupo("pde_oc_tipo_estado_recepcions")'><?php Lang::_lang('PdeOcTipoEstadoRecepcion') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_tipo_estado_recepcion_alta.php'><?php Lang::_lang('Alta de PdeOcTipoEstadoRecepcion') ?> </a></li>
			  <li><a href='pde_oc_tipo_estado_recepcion_adm.php'><?php Lang::_lang('Listado de PdeOcTipoEstadoRecepcion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_estado_facturacions'><a href='javascript:;' onclick='menu_grupo("pde_oc_estado_facturacions")'><?php Lang::_lang('PdeOcEstadoFacturacion') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_estado_facturacion_alta.php'><?php Lang::_lang('Alta de PdeOcEstadoFacturacion') ?> </a></li>
			  <li><a href='pde_oc_estado_facturacion_adm.php'><?php Lang::_lang('Listado de PdeOcEstadoFacturacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_tipo_estado_facturacions'><a href='javascript:;' onclick='menu_grupo("pde_oc_tipo_estado_facturacions")'><?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_tipo_estado_facturacion_alta.php'><?php Lang::_lang('Alta de PdeOcTipoEstadoFacturacion') ?> </a></li>
			  <li><a href='pde_oc_tipo_estado_facturacion_adm.php'><?php Lang::_lang('Listado de PdeOcTipoEstadoFacturacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_enviados'><a href='javascript:;' onclick='menu_grupo("pde_oc_enviados")'><?php Lang::_lang('PdeOcEnviados') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_enviado_alta.php'><?php Lang::_lang('Alta de PdeOcEnviados') ?> </a></li>
			  <li><a href='pde_oc_enviado_adm.php'><?php Lang::_lang('Listado de PdeOcEnviados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_tipo_origens'><a href='javascript:;' onclick='menu_grupo("pde_oc_tipo_origens")'><?php Lang::_lang('PdeOcTipoOrigens') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_tipo_origen_alta.php'><?php Lang::_lang('Alta de PdeOcTipoOrigens') ?> </a></li>
			  <li><a href='pde_oc_tipo_origen_adm.php'><?php Lang::_lang('Listado de PdeOcTipoOrigens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_destinatarios'><a href='javascript:;' onclick='menu_grupo("pde_oc_destinatarios")'><?php Lang::_lang('PdeOcDestinatario') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_destinatario_alta.php'><?php Lang::_lang('Alta de PdeOcDestinatario') ?> </a></li>
			  <li><a href='pde_oc_destinatario_adm.php'><?php Lang::_lang('Listado de PdeOcDestinatario') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_envio_emails'><a href='javascript:;' onclick='menu_grupo("pde_oc_envio_emails")'><?php Lang::_lang('PdeOcEnvioEmails') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_envio_email_alta.php'><?php Lang::_lang('Alta de PdeOcEnvioEmails') ?> </a></li>
			  <li><a href='pde_oc_envio_email_adm.php'><?php Lang::_lang('Listado de PdeOcEnvioEmails') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recepcion_agrupacions'><a href='javascript:;' onclick='menu_grupo("pde_recepcion_agrupacions")'><?php Lang::_lang('PdeRecepcionAgrupacions') ?></a></h3>
			<ul>
			  <li><a href='pde_recepcion_agrupacion_alta.php'><?php Lang::_lang('Alta de PdeRecepcionAgrupacions') ?> </a></li>
			  <li><a href='pde_recepcion_agrupacion_adm.php'><?php Lang::_lang('Listado de PdeRecepcionAgrupacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recepcions'><a href='javascript:;' onclick='menu_grupo("pde_recepcions")'><?php Lang::_lang('PdeRecepcions') ?></a></h3>
			<ul>
			  <li><a href='pde_recepcion_alta.php'><?php Lang::_lang('Alta de PdeRecepcions') ?> </a></li>
			  <li><a href='pde_recepcion_adm.php'><?php Lang::_lang('Listado de PdeRecepcions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recepcion_estados'><a href='javascript:;' onclick='menu_grupo("pde_recepcion_estados")'><?php Lang::_lang('PdeRecepcionEstados') ?></a></h3>
			<ul>
			  <li><a href='pde_recepcion_estado_alta.php'><?php Lang::_lang('Alta de PdeRecepcionEstados') ?> </a></li>
			  <li><a href='pde_recepcion_estado_adm.php'><?php Lang::_lang('Listado de PdeRecepcionEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recepcion_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_recepcion_tipo_estados")'><?php Lang::_lang('PdeRecepcionTipoEstados') ?></a></h3>
			<ul>
			  <li><a href='pde_recepcion_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeRecepcionTipoEstados') ?> </a></li>
			  <li><a href='pde_recepcion_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeRecepcionTipoEstados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recepcion_tipo_estado_facturacions'><a href='javascript:;' onclick='menu_grupo("pde_recepcion_tipo_estado_facturacions")'><?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?></a></h3>
			<ul>
			  <li><a href='pde_recepcion_tipo_estado_facturacion_alta.php'><?php Lang::_lang('Alta de PdeRecepcionTipoEstadoFacturacion') ?> </a></li>
			  <li><a href='pde_recepcion_tipo_estado_facturacion_adm.php'><?php Lang::_lang('Listado de PdeRecepcionTipoEstadoFacturacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recepcion_estado_facturacions'><a href='javascript:;' onclick='menu_grupo("pde_recepcion_estado_facturacions")'><?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?></a></h3>
			<ul>
			  <li><a href='pde_recepcion_estado_facturacion_alta.php'><?php Lang::_lang('Alta de PdeRecepcionEstadoFacturacion') ?> </a></li>
			  <li><a href='pde_recepcion_estado_facturacion_adm.php'><?php Lang::_lang('Listado de PdeRecepcionEstadoFacturacion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recepcion_destinatarios'><a href='javascript:;' onclick='menu_grupo("pde_recepcion_destinatarios")'><?php Lang::_lang('PdeRecepcionDestinatarios') ?></a></h3>
			<ul>
			  <li><a href='pde_recepcion_destinatario_alta.php'><?php Lang::_lang('Alta de PdeRecepcionDestinatarios') ?> </a></li>
			  <li><a href='pde_recepcion_destinatario_adm.php'><?php Lang::_lang('Listado de PdeRecepcionDestinatarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_recepcions'><a href='javascript:;' onclick='menu_grupo("pde_tipo_recepcions")'><?php Lang::_lang('PdeTipoRecepcions') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_recepcion_alta.php'><?php Lang::_lang('Alta de PdeTipoRecepcions') ?> </a></li>
			  <li><a href='pde_tipo_recepcion_adm.php'><?php Lang::_lang('Listado de PdeTipoRecepcions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_centro_recepcions'><a href='javascript:;' onclick='menu_grupo("pde_centro_recepcions")'><?php Lang::_lang('PdeCentroRecepcions') ?></a></h3>
			<ul>
			  <li><a href='pde_centro_recepcion_alta.php'><?php Lang::_lang('Alta de PdeCentroRecepcions') ?> </a></li>
			  <li><a href='pde_centro_recepcion_adm.php'><?php Lang::_lang('Listado de PdeCentroRecepcions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_centro_recepcion_pan_panols'><a href='javascript:;' onclick='menu_grupo("pde_centro_recepcion_pan_panols")'><?php Lang::_lang('PdeCentroRecepcionPanPanols') ?></a></h3>
			<ul>
			  <li><a href='pde_centro_recepcion_pan_panol_alta.php'><?php Lang::_lang('Alta de PdeCentroRecepcionPanPanols') ?> </a></li>
			  <li><a href='pde_centro_recepcion_pan_panol_adm.php'><?php Lang::_lang('Listado de PdeCentroRecepcionPanPanols') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_centro_recepcion_us_usuarios'><a href='javascript:;' onclick='menu_grupo("pde_centro_recepcion_us_usuarios")'><?php Lang::_lang('PdeCentroRecepcionUsUsuarios') ?></a></h3>
			<ul>
			  <li><a href='pde_centro_recepcion_us_usuario_alta.php'><?php Lang::_lang('Alta de PdeCentroRecepcionUsUsuarios') ?> </a></li>
			  <li><a href='pde_centro_recepcion_us_usuario_adm.php'><?php Lang::_lang('Listado de PdeCentroRecepcionUsUsuarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_centro_pedidos'><a href='javascript:;' onclick='menu_grupo("pde_centro_pedidos")'><?php Lang::_lang('PdeCentroPedidos') ?></a></h3>
			<ul>
			  <li><a href='pde_centro_pedido_alta.php'><?php Lang::_lang('Alta de PdeCentroPedidos') ?> </a></li>
			  <li><a href='pde_centro_pedido_adm.php'><?php Lang::_lang('Listado de PdeCentroPedidos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_centro_pedido_us_usuarios'><a href='javascript:;' onclick='menu_grupo("pde_centro_pedido_us_usuarios")'><?php Lang::_lang('PdeCentroPedidoUsUsuarios') ?></a></h3>
			<ul>
			  <li><a href='pde_centro_pedido_us_usuario_alta.php'><?php Lang::_lang('Alta de PdeCentroPedidoUsUsuarios') ?> </a></li>
			  <li><a href='pde_centro_pedido_us_usuario_adm.php'><?php Lang::_lang('Listado de PdeCentroPedidoUsUsuarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_centro_pedido_emails'><a href='javascript:;' onclick='menu_grupo("pde_centro_pedido_emails")'><?php Lang::_lang('PdeCentroPedidoEmail') ?></a></h3>
			<ul>
			  <li><a href='pde_centro_pedido_email_alta.php'><?php Lang::_lang('Alta de PdeCentroPedidoEmail') ?> </a></li>
			  <li><a href='pde_centro_pedido_email_adm.php'><?php Lang::_lang('Listado de PdeCentroPedidoEmail') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_centro_pedido_prv_proveedors'><a href='javascript:;' onclick='menu_grupo("pde_centro_pedido_prv_proveedors")'><?php Lang::_lang('PdeCentroPedidoPrvProveedors') ?></a></h3>
			<ul>
			  <li><a href='pde_centro_pedido_prv_proveedor_alta.php'><?php Lang::_lang('Alta de PdeCentroPedidoPrvProveedors') ?> </a></li>
			  <li><a href='pde_centro_pedido_prv_proveedor_adm.php'><?php Lang::_lang('Listado de PdeCentroPedidoPrvProveedors') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_centro_pedido_pde_centro_recepcions'><a href='javascript:;' onclick='menu_grupo("pde_centro_pedido_pde_centro_recepcions")'><?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcions') ?></a></h3>
			<ul>
			  <li><a href='pde_centro_pedido_pde_centro_recepcion_alta.php'><?php Lang::_lang('Alta de PdeCentroPedidoPdeCentroRecepcions') ?> </a></li>
			  <li><a href='pde_centro_pedido_pde_centro_recepcion_adm.php'><?php Lang::_lang('Listado de PdeCentroPedidoPdeCentroRecepcions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_reclamos'><a href='javascript:;' onclick='menu_grupo("pde_oc_reclamos")'><?php Lang::_lang('PdeOcReclamos') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_reclamo_alta.php'><?php Lang::_lang('Alta de PdeOcReclamos') ?> </a></li>
			  <li><a href='pde_oc_reclamo_adm.php'><?php Lang::_lang('Listado de PdeOcReclamos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_reclamo_motivos'><a href='javascript:;' onclick='menu_grupo("pde_oc_reclamo_motivos")'><?php Lang::_lang('PdeOcReclamoMotivos') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_reclamo_motivo_alta.php'><?php Lang::_lang('Alta de PdeOcReclamoMotivos') ?> </a></li>
			  <li><a href='pde_oc_reclamo_motivo_adm.php'><?php Lang::_lang('Listado de PdeOcReclamoMotivos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_reclamo_destinatarios'><a href='javascript:;' onclick='menu_grupo("pde_oc_reclamo_destinatarios")'><?php Lang::_lang('PdeOcReclamoDestinatarios') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_reclamo_destinatario_alta.php'><?php Lang::_lang('Alta de PdeOcReclamoDestinatarios') ?> </a></li>
			  <li><a href='pde_oc_reclamo_destinatario_adm.php'><?php Lang::_lang('Listado de PdeOcReclamoDestinatarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_oc_reclamo_envio_emails'><a href='javascript:;' onclick='menu_grupo("pde_oc_reclamo_envio_emails")'><?php Lang::_lang('PdeOcReclamoEnvioEmails') ?></a></h3>
			<ul>
			  <li><a href='pde_oc_reclamo_envio_email_alta.php'><?php Lang::_lang('Alta de PdeOcReclamoEnvioEmails') ?> </a></li>
			  <li><a href='pde_oc_reclamo_envio_email_adm.php'><?php Lang::_lang('Listado de PdeOcReclamoEnvioEmails') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tributos'><a href='javascript:;' onclick='menu_grupo("pde_tributos")'><?php Lang::_lang('PdeTributo') ?></a></h3>
			<ul>
			  <li><a href='pde_tributo_alta.php'><?php Lang::_lang('Alta de PdeTributo') ?> </a></li>
			  <li><a href='pde_tributo_adm.php'><?php Lang::_lang('Listado de PdeTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_facturas'><a href='javascript:;' onclick='menu_grupo("pde_tipo_facturas")'><?php Lang::_lang('PdeTipoFactura') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_factura_alta.php'><?php Lang::_lang('Alta de PdeTipoFactura') ?> </a></li>
			  <li><a href='pde_tipo_factura_adm.php'><?php Lang::_lang('Listado de PdeTipoFactura') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_factura_ws_fe_param_tipo_comprobantes'><a href='javascript:;' onclick='menu_grupo("pde_tipo_factura_ws_fe_param_tipo_comprobantes")'><?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de PdeTipoFacturaWsFeParamTipoComprobante') ?> </a></li>
			  <li><a href='pde_tipo_factura_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de PdeTipoFacturaWsFeParamTipoComprobante') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_origen_facturas'><a href='javascript:;' onclick='menu_grupo("pde_tipo_origen_facturas")'><?php Lang::_lang('PdeTipoOrigenFacturas') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_origen_factura_alta.php'><?php Lang::_lang('Alta de PdeTipoOrigenFacturas') ?> </a></li>
			  <li><a href='pde_tipo_origen_factura_adm.php'><?php Lang::_lang('Listado de PdeTipoOrigenFacturas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_facturas'><a href='javascript:;' onclick='menu_grupo("pde_facturas")'><?php Lang::_lang('PdeFactura') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_alta.php'><?php Lang::_lang('Alta de PdeFactura') ?> </a></li>
			  <li><a href='pde_factura_adm.php'><?php Lang::_lang('Listado de PdeFactura') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_imagens'><a href='javascript:;' onclick='menu_grupo("pde_factura_imagens")'><?php Lang::_lang('PdeFacturaImagens') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_imagen_alta.php'><?php Lang::_lang('Alta de PdeFacturaImagens') ?> </a></li>
			  <li><a href='pde_factura_imagen_adm.php'><?php Lang::_lang('Listado de PdeFacturaImagens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_archivos'><a href='javascript:;' onclick='menu_grupo("pde_factura_archivos")'><?php Lang::_lang('PdeFacturaArchivos') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_archivo_alta.php'><?php Lang::_lang('Alta de PdeFacturaArchivos') ?> </a></li>
			  <li><a href='pde_factura_archivo_adm.php'><?php Lang::_lang('Listado de PdeFacturaArchivos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_factura_tipo_estados")'><?php Lang::_lang('PdeFacturaTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeFacturaTipoEstado') ?> </a></li>
			  <li><a href='pde_factura_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeFacturaTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_estados'><a href='javascript:;' onclick='menu_grupo("pde_factura_estados")'><?php Lang::_lang('PdeFacturaEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_estado_alta.php'><?php Lang::_lang('Alta de PdeFacturaEstado') ?> </a></li>
			  <li><a href='pde_factura_estado_adm.php'><?php Lang::_lang('Listado de PdeFacturaEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_conceptos'><a href='javascript:;' onclick='menu_grupo("pde_factura_conceptos")'><?php Lang::_lang('PdeFacturaConceptos') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_concepto_alta.php'><?php Lang::_lang('Alta de PdeFacturaConceptos') ?> </a></li>
			  <li><a href='pde_factura_concepto_adm.php'><?php Lang::_lang('Listado de PdeFacturaConceptos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_items'><a href='javascript:;' onclick='menu_grupo("pde_factura_items")'><?php Lang::_lang('PdeFacturaItems') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_item_alta.php'><?php Lang::_lang('Alta de PdeFacturaItems') ?> </a></li>
			  <li><a href='pde_factura_item_adm.php'><?php Lang::_lang('Listado de PdeFacturaItems') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_pde_tributos'><a href='javascript:;' onclick='menu_grupo("pde_factura_pde_tributos")'><?php Lang::_lang('PdeFacturaPdeTributo') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_pde_tributo_alta.php'><?php Lang::_lang('Alta de PdeFacturaPdeTributo') ?> </a></li>
			  <li><a href='pde_factura_pde_tributo_adm.php'><?php Lang::_lang('Listado de PdeFacturaPdeTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_pde_ocs'><a href='javascript:;' onclick='menu_grupo("pde_factura_pde_ocs")'><?php Lang::_lang('PdeFacturaPdeOcs') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_pde_oc_alta.php'><?php Lang::_lang('Alta de PdeFacturaPdeOcs') ?> </a></li>
			  <li><a href='pde_factura_pde_oc_adm.php'><?php Lang::_lang('Listado de PdeFacturaPdeOcs') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_pde_recepcions'><a href='javascript:;' onclick='menu_grupo("pde_factura_pde_recepcions")'><?php Lang::_lang('PdeFacturaPdeRecepcions') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_pde_recepcion_alta.php'><?php Lang::_lang('Alta de PdeFacturaPdeRecepcions') ?> </a></li>
			  <li><a href='pde_factura_pde_recepcion_adm.php'><?php Lang::_lang('Listado de PdeFacturaPdeRecepcions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_pde_recibos'><a href='javascript:;' onclick='menu_grupo("pde_factura_pde_recibos")'><?php Lang::_lang('PdeFacturaPdeRecibo') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_pde_recibo_alta.php'><?php Lang::_lang('Alta de PdeFacturaPdeRecibo') ?> </a></li>
			  <li><a href='pde_factura_pde_recibo_adm.php'><?php Lang::_lang('Listado de PdeFacturaPdeRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_factura_pde_nota_creditos'><a href='javascript:;' onclick='menu_grupo("pde_factura_pde_nota_creditos")'><?php Lang::_lang('PdeFacturaPdeNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='pde_factura_pde_nota_credito_alta.php'><?php Lang::_lang('Alta de PdeFacturaPdeNotaCredito') ?> </a></li>
			  <li><a href='pde_factura_pde_nota_credito_adm.php'><?php Lang::_lang('Listado de PdeFacturaPdeNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_nota_creditos'><a href='javascript:;' onclick='menu_grupo("pde_tipo_nota_creditos")'><?php Lang::_lang('PdeTipoNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_nota_credito_alta.php'><?php Lang::_lang('Alta de PdeTipoNotaCredito') ?> </a></li>
			  <li><a href='pde_tipo_nota_credito_adm.php'><?php Lang::_lang('Listado de PdeTipoNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_nota_credito_ws_fe_param_tipo_comprobantes'><a href='javascript:;' onclick='menu_grupo("pde_tipo_nota_credito_ws_fe_param_tipo_comprobantes")'><?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de PdeTipoNotaCreditoWsFeParamTipoComprobante') ?> </a></li>
			  <li><a href='pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de PdeTipoNotaCreditoWsFeParamTipoComprobante') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_origen_nota_creditos'><a href='javascript:;' onclick='menu_grupo("pde_tipo_origen_nota_creditos")'><?php Lang::_lang('PdeTipoOrigenNotaCreditos') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_origen_nota_credito_alta.php'><?php Lang::_lang('Alta de PdeTipoOrigenNotaCreditos') ?> </a></li>
			  <li><a href='pde_tipo_origen_nota_credito_adm.php'><?php Lang::_lang('Listado de PdeTipoOrigenNotaCreditos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_creditos'><a href='javascript:;' onclick='menu_grupo("pde_nota_creditos")'><?php Lang::_lang('PdeNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_alta.php'><?php Lang::_lang('Alta de PdeNotaCredito') ?> </a></li>
			  <li><a href='pde_nota_credito_adm.php'><?php Lang::_lang('Listado de PdeNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_imagens'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_imagens")'><?php Lang::_lang('PdeNotaCreditoImagens') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_imagen_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoImagens') ?> </a></li>
			  <li><a href='pde_nota_credito_imagen_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoImagens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_archivos'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_archivos")'><?php Lang::_lang('PdeNotaCreditoArchivos') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_archivo_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoArchivos') ?> </a></li>
			  <li><a href='pde_nota_credito_archivo_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoArchivos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_tipo_estados")'><?php Lang::_lang('PdeNotaCreditoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoTipoEstado') ?> </a></li>
			  <li><a href='pde_nota_credito_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_estados'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_estados")'><?php Lang::_lang('PdeNotaCreditoEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_estado_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoEstado') ?> </a></li>
			  <li><a href='pde_nota_credito_estado_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_conceptos'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_conceptos")'><?php Lang::_lang('PdeNotaCreditoConcepto') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_concepto_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoConcepto') ?> </a></li>
			  <li><a href='pde_nota_credito_concepto_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoConcepto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_pde_factura_pde_recepcions'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_pde_factura_pde_recepcions")'><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_pde_factura_pde_recepcion_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoPdeFacturaPdeRecepcion') ?> </a></li>
			  <li><a href='pde_nota_credito_pde_factura_pde_recepcion_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoPdeFacturaPdeRecepcion') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_pde_factura_pde_ocs'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_pde_factura_pde_ocs")'><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_pde_factura_pde_oc_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoPdeFacturaPdeOc') ?> </a></li>
			  <li><a href='pde_nota_credito_pde_factura_pde_oc_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoPdeFacturaPdeOc') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_pde_factura_pde_tributos'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_pde_factura_pde_tributos")'><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_pde_factura_pde_tributo_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoPdeFacturaPdeTributo') ?> </a></li>
			  <li><a href='pde_nota_credito_pde_factura_pde_tributo_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoPdeFacturaPdeTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_items'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_items")'><?php Lang::_lang('PdeNotaCreditoItem') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_item_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoItem') ?> </a></li>
			  <li><a href='pde_nota_credito_item_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoItem') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_credito_pde_tributos'><a href='javascript:;' onclick='menu_grupo("pde_nota_credito_pde_tributos")'><?php Lang::_lang('PdeNotaCreditoPdeTributo') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_credito_pde_tributo_alta.php'><?php Lang::_lang('Alta de PdeNotaCreditoPdeTributo') ?> </a></li>
			  <li><a href='pde_nota_credito_pde_tributo_adm.php'><?php Lang::_lang('Listado de PdeNotaCreditoPdeTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_nota_debitos'><a href='javascript:;' onclick='menu_grupo("pde_tipo_nota_debitos")'><?php Lang::_lang('PdeTipoNotaDebito') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_nota_debito_alta.php'><?php Lang::_lang('Alta de PdeTipoNotaDebito') ?> </a></li>
			  <li><a href='pde_tipo_nota_debito_adm.php'><?php Lang::_lang('Listado de PdeTipoNotaDebito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_nota_debito_ws_fe_param_tipo_comprobantes'><a href='javascript:;' onclick='menu_grupo("pde_tipo_nota_debito_ws_fe_param_tipo_comprobantes")'><?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de PdeTipoNotaDebitoWsFeParamTipoComprobante') ?> </a></li>
			  <li><a href='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de PdeTipoNotaDebitoWsFeParamTipoComprobante') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_origen_nota_debitos'><a href='javascript:;' onclick='menu_grupo("pde_tipo_origen_nota_debitos")'><?php Lang::_lang('PdeTipoOrigenNotaDebitos') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_origen_nota_debito_alta.php'><?php Lang::_lang('Alta de PdeTipoOrigenNotaDebitos') ?> </a></li>
			  <li><a href='pde_tipo_origen_nota_debito_adm.php'><?php Lang::_lang('Listado de PdeTipoOrigenNotaDebitos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debitos'><a href='javascript:;' onclick='menu_grupo("pde_nota_debitos")'><?php Lang::_lang('PdeNotaDebito') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_alta.php'><?php Lang::_lang('Alta de PdeNotaDebito') ?> </a></li>
			  <li><a href='pde_nota_debito_adm.php'><?php Lang::_lang('Listado de PdeNotaDebito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_imagens'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_imagens")'><?php Lang::_lang('PdeNotaDebitoImagens') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_imagen_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoImagens') ?> </a></li>
			  <li><a href='pde_nota_debito_imagen_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoImagens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_archivos'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_archivos")'><?php Lang::_lang('PdeNotaDebitoArchivos') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_archivo_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoArchivos') ?> </a></li>
			  <li><a href='pde_nota_debito_archivo_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoArchivos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_tipo_estados")'><?php Lang::_lang('PdeNotaDebitoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoTipoEstado') ?> </a></li>
			  <li><a href='pde_nota_debito_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_estados'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_estados")'><?php Lang::_lang('PdeNotaDebitoEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_estado_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoEstado') ?> </a></li>
			  <li><a href='pde_nota_debito_estado_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_conceptos'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_conceptos")'><?php Lang::_lang('PdeNotaDebitoConcepto') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_concepto_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoConcepto') ?> </a></li>
			  <li><a href='pde_nota_debito_concepto_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoConcepto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_items'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_items")'><?php Lang::_lang('PdeNotaDebitoItem') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_item_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoItem') ?> </a></li>
			  <li><a href='pde_nota_debito_item_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoItem') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_pde_tributos'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_pde_tributos")'><?php Lang::_lang('PdeNotaDebitoPdeTributo') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_pde_tributo_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoPdeTributo') ?> </a></li>
			  <li><a href='pde_nota_debito_pde_tributo_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoPdeTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_pde_nota_creditos'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_pde_nota_creditos")'><?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_pde_nota_credito_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoPdeNotaCredito') ?> </a></li>
			  <li><a href='pde_nota_debito_pde_nota_credito_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoPdeNotaCredito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_nota_debito_pde_recibos'><a href='javascript:;' onclick='menu_grupo("pde_nota_debito_pde_recibos")'><?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?></a></h3>
			<ul>
			  <li><a href='pde_nota_debito_pde_recibo_alta.php'><?php Lang::_lang('Alta de PdeNotaDebitoPdeRecibo') ?> </a></li>
			  <li><a href='pde_nota_debito_pde_recibo_adm.php'><?php Lang::_lang('Listado de PdeNotaDebitoPdeRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_recibos'><a href='javascript:;' onclick='menu_grupo("pde_tipo_recibos")'><?php Lang::_lang('PdeTipoRecibo') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_recibo_alta.php'><?php Lang::_lang('Alta de PdeTipoRecibo') ?> </a></li>
			  <li><a href='pde_tipo_recibo_adm.php'><?php Lang::_lang('Listado de PdeTipoRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_tipo_origen_recibos'><a href='javascript:;' onclick='menu_grupo("pde_tipo_origen_recibos")'><?php Lang::_lang('PdeTipoOrigenRecibos') ?></a></h3>
			<ul>
			  <li><a href='pde_tipo_origen_recibo_alta.php'><?php Lang::_lang('Alta de PdeTipoOrigenRecibos') ?> </a></li>
			  <li><a href='pde_tipo_origen_recibo_adm.php'><?php Lang::_lang('Listado de PdeTipoOrigenRecibos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibos'><a href='javascript:;' onclick='menu_grupo("pde_recibos")'><?php Lang::_lang('PdeRecibo') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_alta.php'><?php Lang::_lang('Alta de PdeRecibo') ?> </a></li>
			  <li><a href='pde_recibo_adm.php'><?php Lang::_lang('Listado de PdeRecibo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibo_imagens'><a href='javascript:;' onclick='menu_grupo("pde_recibo_imagens")'><?php Lang::_lang('PdeReciboImagens') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_imagen_alta.php'><?php Lang::_lang('Alta de PdeReciboImagens') ?> </a></li>
			  <li><a href='pde_recibo_imagen_adm.php'><?php Lang::_lang('Listado de PdeReciboImagens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibo_archivos'><a href='javascript:;' onclick='menu_grupo("pde_recibo_archivos")'><?php Lang::_lang('PdeReciboArchivos') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_archivo_alta.php'><?php Lang::_lang('Alta de PdeReciboArchivos') ?> </a></li>
			  <li><a href='pde_recibo_archivo_adm.php'><?php Lang::_lang('Listado de PdeReciboArchivos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibo_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_recibo_tipo_estados")'><?php Lang::_lang('PdeReciboTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeReciboTipoEstado') ?> </a></li>
			  <li><a href='pde_recibo_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeReciboTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibo_estados'><a href='javascript:;' onclick='menu_grupo("pde_recibo_estados")'><?php Lang::_lang('PdeReciboEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_estado_alta.php'><?php Lang::_lang('Alta de PdeReciboEstado') ?> </a></li>
			  <li><a href='pde_recibo_estado_adm.php'><?php Lang::_lang('Listado de PdeReciboEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibo_conceptos'><a href='javascript:;' onclick='menu_grupo("pde_recibo_conceptos")'><?php Lang::_lang('PdeReciboConcepto') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_concepto_alta.php'><?php Lang::_lang('Alta de PdeReciboConcepto') ?> </a></li>
			  <li><a href='pde_recibo_concepto_adm.php'><?php Lang::_lang('Listado de PdeReciboConcepto') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibo_items'><a href='javascript:;' onclick='menu_grupo("pde_recibo_items")'><?php Lang::_lang('PdeReciboItem') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_item_alta.php'><?php Lang::_lang('Alta de PdeReciboItem') ?> </a></li>
			  <li><a href='pde_recibo_item_adm.php'><?php Lang::_lang('Listado de PdeReciboItem') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibo_item_cheques'><a href='javascript:;' onclick='menu_grupo("pde_recibo_item_cheques")'><?php Lang::_lang('PdeReciboItemCheque') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_item_cheque_alta.php'><?php Lang::_lang('Alta de PdeReciboItemCheque') ?> </a></li>
			  <li><a href='pde_recibo_item_cheque_adm.php'><?php Lang::_lang('Listado de PdeReciboItemCheque') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_recibo_pde_tributos'><a href='javascript:;' onclick='menu_grupo("pde_recibo_pde_tributos")'><?php Lang::_lang('PdeReciboPdeTributo') ?></a></h3>
			<ul>
			  <li><a href='pde_recibo_pde_tributo_alta.php'><?php Lang::_lang('Alta de PdeReciboPdeTributo') ?> </a></li>
			  <li><a href='pde_recibo_pde_tributo_adm.php'><?php Lang::_lang('Listado de PdeReciboPdeTributo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_orden_pagos'><a href='javascript:;' onclick='menu_grupo("pde_orden_pagos")'><?php Lang::_lang('PdeOrdenPagos') ?></a></h3>
			<ul>
			  <li><a href='pde_orden_pago_alta.php'><?php Lang::_lang('Alta de PdeOrdenPagos') ?> </a></li>
			  <li><a href='pde_orden_pago_adm.php'><?php Lang::_lang('Listado de PdeOrdenPagos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_orden_pago_tipo_estados'><a href='javascript:;' onclick='menu_grupo("pde_orden_pago_tipo_estados")'><?php Lang::_lang('PdeOrdenPagoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_orden_pago_tipo_estado_alta.php'><?php Lang::_lang('Alta de PdeOrdenPagoTipoEstado') ?> </a></li>
			  <li><a href='pde_orden_pago_tipo_estado_adm.php'><?php Lang::_lang('Listado de PdeOrdenPagoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_orden_pago_estados'><a href='javascript:;' onclick='menu_grupo("pde_orden_pago_estados")'><?php Lang::_lang('PdeOrdenPagoEstado') ?></a></h3>
			<ul>
			  <li><a href='pde_orden_pago_estado_alta.php'><?php Lang::_lang('Alta de PdeOrdenPagoEstado') ?> </a></li>
			  <li><a href='pde_orden_pago_estado_adm.php'><?php Lang::_lang('Listado de PdeOrdenPagoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_orden_pago_enviados'><a href='javascript:;' onclick='menu_grupo("pde_orden_pago_enviados")'><?php Lang::_lang('PdeOrdenPagoEnviados') ?></a></h3>
			<ul>
			  <li><a href='pde_orden_pago_enviado_alta.php'><?php Lang::_lang('Alta de PdeOrdenPagoEnviados') ?> </a></li>
			  <li><a href='pde_orden_pago_enviado_adm.php'><?php Lang::_lang('Listado de PdeOrdenPagoEnviados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_orden_pago_pde_facturas'><a href='javascript:;' onclick='menu_grupo("pde_orden_pago_pde_facturas")'><?php Lang::_lang('PdeOrdenPagoPdeFactura') ?></a></h3>
			<ul>
			  <li><a href='pde_orden_pago_pde_factura_alta.php'><?php Lang::_lang('Alta de PdeOrdenPagoPdeFactura') ?> </a></li>
			  <li><a href='pde_orden_pago_pde_factura_adm.php'><?php Lang::_lang('Listado de PdeOrdenPagoPdeFactura') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_orden_pago_pde_nota_debitos'><a href='javascript:;' onclick='menu_grupo("pde_orden_pago_pde_nota_debitos")'><?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?></a></h3>
			<ul>
			  <li><a href='pde_orden_pago_pde_nota_debito_alta.php'><?php Lang::_lang('Alta de PdeOrdenPagoPdeNotaDebito') ?> </a></li>
			  <li><a href='pde_orden_pago_pde_nota_debito_adm.php'><?php Lang::_lang('Listado de PdeOrdenPagoPdeNotaDebito') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_orden_pago_gral_fp_forma_pagos'><a href='javascript:;' onclick='menu_grupo("pde_orden_pago_gral_fp_forma_pagos")'><?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?></a></h3>
			<ul>
			  <li><a href='pde_orden_pago_gral_fp_forma_pago_alta.php'><?php Lang::_lang('Alta de PdeOrdenPagoGralFpFormaPago') ?> </a></li>
			  <li><a href='pde_orden_pago_gral_fp_forma_pago_adm.php'><?php Lang::_lang('Listado de PdeOrdenPagoGralFpFormaPago') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head pde_orden_pago_gral_fp_forma_pago_cheques'><a href='javascript:;' onclick='menu_grupo("pde_orden_pago_gral_fp_forma_pago_cheques")'><?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheques') ?></a></h3>
			<ul>
			  <li><a href='pde_orden_pago_gral_fp_forma_pago_cheque_alta.php'><?php Lang::_lang('Alta de PdeOrdenPagoGralFpFormaPagoCheques') ?> </a></li>
			  <li><a href='pde_orden_pago_gral_fp_forma_pago_cheque_adm.php'><?php Lang::_lang('Listado de PdeOrdenPagoGralFpFormaPagoCheques') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_tipo_saldos'><a href='javascript:;' onclick='menu_grupo("cntb_tipo_saldos")'><?php Lang::_lang('CntbTipoSaldos') ?></a></h3>
			<ul>
			  <li><a href='cntb_tipo_saldo_alta.php'><?php Lang::_lang('Alta de CntbTipoSaldos') ?> </a></li>
			  <li><a href='cntb_tipo_saldo_adm.php'><?php Lang::_lang('Listado de CntbTipoSaldos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_tipo_clasificacions'><a href='javascript:;' onclick='menu_grupo("cntb_tipo_clasificacions")'><?php Lang::_lang('CntbTipoClasificacions') ?></a></h3>
			<ul>
			  <li><a href='cntb_tipo_clasificacion_alta.php'><?php Lang::_lang('Alta de CntbTipoClasificacions') ?> </a></li>
			  <li><a href='cntb_tipo_clasificacion_adm.php'><?php Lang::_lang('Listado de CntbTipoClasificacions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_tipo_cuentas'><a href='javascript:;' onclick='menu_grupo("cntb_tipo_cuentas")'><?php Lang::_lang('CntbTipoCuentas') ?></a></h3>
			<ul>
			  <li><a href='cntb_tipo_cuenta_alta.php'><?php Lang::_lang('Alta de CntbTipoCuentas') ?> </a></li>
			  <li><a href='cntb_tipo_cuenta_adm.php'><?php Lang::_lang('Listado de CntbTipoCuentas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_tipo_asientos'><a href='javascript:;' onclick='menu_grupo("cntb_tipo_asientos")'><?php Lang::_lang('CntbTipoAsientos') ?></a></h3>
			<ul>
			  <li><a href='cntb_tipo_asiento_alta.php'><?php Lang::_lang('Alta de CntbTipoAsientos') ?> </a></li>
			  <li><a href='cntb_tipo_asiento_adm.php'><?php Lang::_lang('Listado de CntbTipoAsientos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_tipo_origens'><a href='javascript:;' onclick='menu_grupo("cntb_tipo_origens")'><?php Lang::_lang('CntbTipoOrigens') ?></a></h3>
			<ul>
			  <li><a href='cntb_tipo_origen_alta.php'><?php Lang::_lang('Alta de CntbTipoOrigens') ?> </a></li>
			  <li><a href='cntb_tipo_origen_adm.php'><?php Lang::_lang('Listado de CntbTipoOrigens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_tipo_movimientos'><a href='javascript:;' onclick='menu_grupo("cntb_tipo_movimientos")'><?php Lang::_lang('CntbTipoMovimientos') ?></a></h3>
			<ul>
			  <li><a href='cntb_tipo_movimiento_alta.php'><?php Lang::_lang('Alta de CntbTipoMovimientos') ?> </a></li>
			  <li><a href='cntb_tipo_movimiento_adm.php'><?php Lang::_lang('Listado de CntbTipoMovimientos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_cuentas'><a href='javascript:;' onclick='menu_grupo("cntb_cuentas")'><?php Lang::_lang('CntbCuentas') ?></a></h3>
			<ul>
			  <li><a href='cntb_cuenta_alta.php'><?php Lang::_lang('Alta de CntbCuentas') ?> </a></li>
			  <li><a href='cntb_cuenta_adm.php'><?php Lang::_lang('Listado de CntbCuentas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_ejercicios'><a href='javascript:;' onclick='menu_grupo("cntb_ejercicios")'><?php Lang::_lang('CntbEjercicios') ?></a></h3>
			<ul>
			  <li><a href='cntb_ejercicio_alta.php'><?php Lang::_lang('Alta de CntbEjercicios') ?> </a></li>
			  <li><a href='cntb_ejercicio_adm.php'><?php Lang::_lang('Listado de CntbEjercicios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asientos'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asientos")'><?php Lang::_lang('CntbDiarioAsientos') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientos') ?> </a></li>
			  <li><a href='cntb_diario_asiento_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_cuentas'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_cuentas")'><?php Lang::_lang('CntbDiarioAsientoCuentas') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_cuenta_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoCuentas') ?> </a></li>
			  <li><a href='cntb_diario_asiento_cuenta_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoCuentas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_vta_facturas'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_vta_facturas")'><?php Lang::_lang('CntbDiarioAsientoVtaFacturas') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_vta_factura_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoVtaFacturas') ?> </a></li>
			  <li><a href='cntb_diario_asiento_vta_factura_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoVtaFacturas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_vta_nota_creditos'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_vta_nota_creditos")'><?php Lang::_lang('CntbDiarioAsientoVtaNotaCreditos') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_vta_nota_credito_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoVtaNotaCreditos') ?> </a></li>
			  <li><a href='cntb_diario_asiento_vta_nota_credito_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoVtaNotaCreditos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_vta_nota_debitos'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_vta_nota_debitos")'><?php Lang::_lang('CntbDiarioAsientoVtaNotaDebitos') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_vta_nota_debito_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoVtaNotaDebitos') ?> </a></li>
			  <li><a href='cntb_diario_asiento_vta_nota_debito_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoVtaNotaDebitos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_vta_recibos'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_vta_recibos")'><?php Lang::_lang('CntbDiarioAsientoVtaRecibos') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_vta_recibo_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoVtaRecibos') ?> </a></li>
			  <li><a href='cntb_diario_asiento_vta_recibo_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoVtaRecibos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_pde_facturas'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_pde_facturas")'><?php Lang::_lang('CntbDiarioAsientoPdeFacturas') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_pde_factura_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoPdeFacturas') ?> </a></li>
			  <li><a href='cntb_diario_asiento_pde_factura_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoPdeFacturas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_pde_nota_creditos'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_pde_nota_creditos")'><?php Lang::_lang('CntbDiarioAsientoPdeNotaCreditos') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_pde_nota_credito_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoPdeNotaCreditos') ?> </a></li>
			  <li><a href='cntb_diario_asiento_pde_nota_credito_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoPdeNotaCreditos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_pde_nota_debitos'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_pde_nota_debitos")'><?php Lang::_lang('CntbDiarioAsientoPdeNotaDebitos') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_pde_nota_debito_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoPdeNotaDebitos') ?> </a></li>
			  <li><a href='cntb_diario_asiento_pde_nota_debito_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoPdeNotaDebitos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head cntb_diario_asiento_pde_recibos'><a href='javascript:;' onclick='menu_grupo("cntb_diario_asiento_pde_recibos")'><?php Lang::_lang('CntbDiarioAsientoPdeRecibos') ?></a></h3>
			<ul>
			  <li><a href='cntb_diario_asiento_pde_recibo_alta.php'><?php Lang::_lang('Alta de CntbDiarioAsientoPdeRecibos') ?> </a></li>
			  <li><a href='cntb_diario_asiento_pde_recibo_adm.php'><?php Lang::_lang('Listado de CntbDiarioAsientoPdeRecibos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head afip_citi_prcs'><a href='javascript:;' onclick='menu_grupo("afip_citi_prcs")'><?php Lang::_lang('AfipCitiPrcs') ?></a></h3>
			<ul>
			  <li><a href='afip_citi_prc_alta.php'><?php Lang::_lang('Alta de AfipCitiPrcs') ?> </a></li>
			  <li><a href='afip_citi_prc_adm.php'><?php Lang::_lang('Listado de AfipCitiPrcs') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head afip_citi_cabeceras'><a href='javascript:;' onclick='menu_grupo("afip_citi_cabeceras")'><?php Lang::_lang('AfipCitiCabeceras') ?></a></h3>
			<ul>
			  <li><a href='afip_citi_cabecera_alta.php'><?php Lang::_lang('Alta de AfipCitiCabeceras') ?> </a></li>
			  <li><a href='afip_citi_cabecera_adm.php'><?php Lang::_lang('Listado de AfipCitiCabeceras') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head afip_citi_ventas_cbtes'><a href='javascript:;' onclick='menu_grupo("afip_citi_ventas_cbtes")'><?php Lang::_lang('AfipCitiVentasCbtes') ?></a></h3>
			<ul>
			  <li><a href='afip_citi_ventas_cbte_alta.php'><?php Lang::_lang('Alta de AfipCitiVentasCbtes') ?> </a></li>
			  <li><a href='afip_citi_ventas_cbte_adm.php'><?php Lang::_lang('Listado de AfipCitiVentasCbtes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head afip_citi_ventas_alicuotass'><a href='javascript:;' onclick='menu_grupo("afip_citi_ventas_alicuotass")'><?php Lang::_lang('AfipCitiVentasAlicuotass') ?></a></h3>
			<ul>
			  <li><a href='afip_citi_ventas_alicuotas_alta.php'><?php Lang::_lang('Alta de AfipCitiVentasAlicuotass') ?> </a></li>
			  <li><a href='afip_citi_ventas_alicuotas_adm.php'><?php Lang::_lang('Listado de AfipCitiVentasAlicuotass') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head afip_citi_compras_cbtes'><a href='javascript:;' onclick='menu_grupo("afip_citi_compras_cbtes")'><?php Lang::_lang('AfipCitiComprasCbtes') ?></a></h3>
			<ul>
			  <li><a href='afip_citi_compras_cbte_alta.php'><?php Lang::_lang('Alta de AfipCitiComprasCbtes') ?> </a></li>
			  <li><a href='afip_citi_compras_cbte_adm.php'><?php Lang::_lang('Listado de AfipCitiComprasCbtes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head afip_citi_compras_alicuotass'><a href='javascript:;' onclick='menu_grupo("afip_citi_compras_alicuotass")'><?php Lang::_lang('AfipCitiComprasAlicuotass') ?></a></h3>
			<ul>
			  <li><a href='afip_citi_compras_alicuotas_alta.php'><?php Lang::_lang('Alta de AfipCitiComprasAlicuotass') ?> </a></li>
			  <li><a href='afip_citi_compras_alicuotas_adm.php'><?php Lang::_lang('Listado de AfipCitiComprasAlicuotass') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head afip_citi_compras_importacioness'><a href='javascript:;' onclick='menu_grupo("afip_citi_compras_importacioness")'><?php Lang::_lang('AfipCitiComprasImportacioness') ?></a></h3>
			<ul>
			  <li><a href='afip_citi_compras_importaciones_alta.php'><?php Lang::_lang('Alta de AfipCitiComprasImportacioness') ?> </a></li>
			  <li><a href='afip_citi_compras_importaciones_adm.php'><?php Lang::_lang('Listado de AfipCitiComprasImportacioness') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head nov_novedads'><a href='javascript:;' onclick='menu_grupo("nov_novedads")'><?php Lang::_lang('NovNovedads') ?></a></h3>
			<ul>
			  <li><a href='nov_novedad_alta.php'><?php Lang::_lang('Alta de NovNovedads') ?> </a></li>
			  <li><a href='nov_novedad_adm.php'><?php Lang::_lang('Listado de NovNovedads') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head nov_novedad_imagens'><a href='javascript:;' onclick='menu_grupo("nov_novedad_imagens")'><?php Lang::_lang('NovNovedadImagens') ?></a></h3>
			<ul>
			  <li><a href='nov_novedad_imagen_alta.php'><?php Lang::_lang('Alta de NovNovedadImagens') ?> </a></li>
			  <li><a href='nov_novedad_imagen_adm.php'><?php Lang::_lang('Listado de NovNovedadImagens') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head nov_novedad_archivos'><a href='javascript:;' onclick='menu_grupo("nov_novedad_archivos")'><?php Lang::_lang('NovNovedadArchivos') ?></a></h3>
			<ul>
			  <li><a href='nov_novedad_archivo_alta.php'><?php Lang::_lang('Alta de NovNovedadArchivos') ?> </a></li>
			  <li><a href='nov_novedad_archivo_adm.php'><?php Lang::_lang('Listado de NovNovedadArchivos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head nov_novedad_destinatarios'><a href='javascript:;' onclick='menu_grupo("nov_novedad_destinatarios")'><?php Lang::_lang('NovNovedadDestinatarios') ?></a></h3>
			<ul>
			  <li><a href='nov_novedad_destinatario_alta.php'><?php Lang::_lang('Alta de NovNovedadDestinatarios') ?> </a></li>
			  <li><a href='nov_novedad_destinatario_adm.php'><?php Lang::_lang('Listado de NovNovedadDestinatarios') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head nov_novedad_observados'><a href='javascript:;' onclick='menu_grupo("nov_novedad_observados")'><?php Lang::_lang('NovNovedadObservados') ?></a></h3>
			<ul>
			  <li><a href='nov_novedad_observado_alta.php'><?php Lang::_lang('Alta de NovNovedadObservados') ?> </a></li>
			  <li><a href='nov_novedad_observado_adm.php'><?php Lang::_lang('Listado de NovNovedadObservados') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head nov_novedad_leidos'><a href='javascript:;' onclick='menu_grupo("nov_novedad_leidos")'><?php Lang::_lang('NovNovedadLeidos') ?></a></h3>
			<ul>
			  <li><a href='nov_novedad_leido_alta.php'><?php Lang::_lang('Alta de NovNovedadLeidos') ?> </a></li>
			  <li><a href='nov_novedad_leido_adm.php'><?php Lang::_lang('Listado de NovNovedadLeidos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_modulos'><a href='javascript:;' onclick='menu_grupo("alt_modulos")'><?php Lang::_lang('AltModulo') ?></a></h3>
			<ul>
			  <li><a href='alt_modulo_alta.php'><?php Lang::_lang('Alta de AltModulo') ?> </a></li>
			  <li><a href='alt_modulo_adm.php'><?php Lang::_lang('Listado de AltModulo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_alerta_us_usuarios'><a href='javascript:;' onclick='menu_grupo("alt_alerta_us_usuarios")'><?php Lang::_lang('AltAlertaUsUsuario') ?></a></h3>
			<ul>
			  <li><a href='alt_alerta_us_usuario_alta.php'><?php Lang::_lang('Alta de AltAlertaUsUsuario') ?> </a></li>
			  <li><a href='alt_alerta_us_usuario_adm.php'><?php Lang::_lang('Listado de AltAlertaUsUsuario') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_alerta_envio_emails'><a href='javascript:;' onclick='menu_grupo("alt_alerta_envio_emails")'><?php Lang::_lang('AltAlertaEnvioEmails') ?></a></h3>
			<ul>
			  <li><a href='alt_alerta_envio_email_alta.php'><?php Lang::_lang('Alta de AltAlertaEnvioEmails') ?> </a></li>
			  <li><a href='alt_alerta_envio_email_adm.php'><?php Lang::_lang('Listado de AltAlertaEnvioEmails') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_controls'><a href='javascript:;' onclick='menu_grupo("alt_controls")'><?php Lang::_lang('AltControl') ?></a></h3>
			<ul>
			  <li><a href='alt_control_alta.php'><?php Lang::_lang('Alta de AltControl') ?> </a></li>
			  <li><a href='alt_control_adm.php'><?php Lang::_lang('Listado de AltControl') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_control_us_usuarios'><a href='javascript:;' onclick='menu_grupo("alt_control_us_usuarios")'><?php Lang::_lang('AltControlUsUsuario') ?></a></h3>
			<ul>
			  <li><a href='alt_control_us_usuario_alta.php'><?php Lang::_lang('Alta de AltControlUsUsuario') ?> </a></li>
			  <li><a href='alt_control_us_usuario_adm.php'><?php Lang::_lang('Listado de AltControlUsUsuario') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_tipos'><a href='javascript:;' onclick='menu_grupo("alt_tipos")'><?php Lang::_lang('AltTipo') ?></a></h3>
			<ul>
			  <li><a href='alt_tipo_alta.php'><?php Lang::_lang('Alta de AltTipo') ?> </a></li>
			  <li><a href='alt_tipo_adm.php'><?php Lang::_lang('Listado de AltTipo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_alertas'><a href='javascript:;' onclick='menu_grupo("alt_alertas")'><?php Lang::_lang('AltAlerta') ?></a></h3>
			<ul>
			  <li><a href='alt_alerta_alta.php'><?php Lang::_lang('Alta de AltAlerta') ?> </a></li>
			  <li><a href='alt_alerta_adm.php'><?php Lang::_lang('Listado de AltAlerta') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_origens'><a href='javascript:;' onclick='menu_grupo("alt_origens")'><?php Lang::_lang('AltOrigen') ?></a></h3>
			<ul>
			  <li><a href='alt_origen_alta.php'><?php Lang::_lang('Alta de AltOrigen') ?> </a></li>
			  <li><a href='alt_origen_adm.php'><?php Lang::_lang('Listado de AltOrigen') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_control_us_grupos'><a href='javascript:;' onclick='menu_grupo("alt_control_us_grupos")'><?php Lang::_lang('AltControlUsGrupo') ?></a></h3>
			<ul>
			  <li><a href='alt_control_us_grupo_alta.php'><?php Lang::_lang('Alta de AltControlUsGrupo') ?> </a></li>
			  <li><a href='alt_control_us_grupo_adm.php'><?php Lang::_lang('Listado de AltControlUsGrupo') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head alt_nivels'><a href='javascript:;' onclick='menu_grupo("alt_nivels")'><?php Lang::_lang('AltNivel') ?></a></h3>
			<ul>
			  <li><a href='alt_nivel_alta.php'><?php Lang::_lang('Alta de AltNivel') ?> </a></li>
			  <li><a href='alt_nivel_adm.php'><?php Lang::_lang('Listado de AltNivel') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_cajas'><a href='javascript:;' onclick='menu_grupo("fnd_cajas")'><?php Lang::_lang('FndCajas') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_alta.php'><?php Lang::_lang('Alta de FndCajas') ?> </a></li>
			  <li><a href='fnd_caja_adm.php'><?php Lang::_lang('Listado de FndCajas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_tipo_estados'><a href='javascript:;' onclick='menu_grupo("fnd_caja_tipo_estados")'><?php Lang::_lang('FndCajaTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_tipo_estado_alta.php'><?php Lang::_lang('Alta de FndCajaTipoEstado') ?> </a></li>
			  <li><a href='fnd_caja_tipo_estado_adm.php'><?php Lang::_lang('Listado de FndCajaTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_estados'><a href='javascript:;' onclick='menu_grupo("fnd_caja_estados")'><?php Lang::_lang('FndCajaEstado') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_estado_alta.php'><?php Lang::_lang('Alta de FndCajaEstado') ?> </a></li>
			  <li><a href='fnd_caja_estado_adm.php'><?php Lang::_lang('Listado de FndCajaEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_ingresos'><a href='javascript:;' onclick='menu_grupo("fnd_caja_ingresos")'><?php Lang::_lang('FndCajaIngreso') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_ingreso_alta.php'><?php Lang::_lang('Alta de FndCajaIngreso') ?> </a></li>
			  <li><a href='fnd_caja_ingreso_adm.php'><?php Lang::_lang('Listado de FndCajaIngreso') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_tipo_ingresos'><a href='javascript:;' onclick='menu_grupo("fnd_caja_tipo_ingresos")'><?php Lang::_lang('FndCajaTipoIngreso') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_tipo_ingreso_alta.php'><?php Lang::_lang('Alta de FndCajaTipoIngreso') ?> </a></li>
			  <li><a href='fnd_caja_tipo_ingreso_adm.php'><?php Lang::_lang('Listado de FndCajaTipoIngreso') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_egresos'><a href='javascript:;' onclick='menu_grupo("fnd_caja_egresos")'><?php Lang::_lang('FndCajaEgreso') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_egreso_alta.php'><?php Lang::_lang('Alta de FndCajaEgreso') ?> </a></li>
			  <li><a href='fnd_caja_egreso_adm.php'><?php Lang::_lang('Listado de FndCajaEgreso') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_tipo_egresos'><a href='javascript:;' onclick='menu_grupo("fnd_caja_tipo_egresos")'><?php Lang::_lang('FndCajaTipoEgreso') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_tipo_egreso_alta.php'><?php Lang::_lang('Alta de FndCajaTipoEgreso') ?> </a></li>
			  <li><a href='fnd_caja_tipo_egreso_adm.php'><?php Lang::_lang('Listado de FndCajaTipoEgreso') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_cajeros'><a href='javascript:;' onclick='menu_grupo("fnd_cajeros")'><?php Lang::_lang('FndCajeros') ?></a></h3>
			<ul>
			  <li><a href='fnd_cajero_alta.php'><?php Lang::_lang('Alta de FndCajeros') ?> </a></li>
			  <li><a href='fnd_cajero_adm.php'><?php Lang::_lang('Listado de FndCajeros') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_cajero_us_usuarios'><a href='javascript:;' onclick='menu_grupo("fnd_cajero_us_usuarios")'><?php Lang::_lang('FndCajeroUsUsuario') ?></a></h3>
			<ul>
			  <li><a href='fnd_cajero_us_usuario_alta.php'><?php Lang::_lang('Alta de FndCajeroUsUsuario') ?> </a></li>
			  <li><a href='fnd_cajero_us_usuario_adm.php'><?php Lang::_lang('Listado de FndCajeroUsUsuario') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_cajero_gral_cajas'><a href='javascript:;' onclick='menu_grupo("fnd_cajero_gral_cajas")'><?php Lang::_lang('FndCajeroGralCaja') ?></a></h3>
			<ul>
			  <li><a href='fnd_cajero_gral_caja_alta.php'><?php Lang::_lang('Alta de FndCajeroGralCaja') ?> </a></li>
			  <li><a href='fnd_cajero_gral_caja_adm.php'><?php Lang::_lang('Listado de FndCajeroGralCaja') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_tipo_movimientos'><a href='javascript:;' onclick='menu_grupo("fnd_caja_tipo_movimientos")'><?php Lang::_lang('FndCajaTipoMovimientos') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_tipo_movimiento_alta.php'><?php Lang::_lang('Alta de FndCajaTipoMovimientos') ?> </a></li>
			  <li><a href='fnd_caja_tipo_movimiento_adm.php'><?php Lang::_lang('Listado de FndCajaTipoMovimientos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_movimientos'><a href='javascript:;' onclick='menu_grupo("fnd_caja_movimientos")'><?php Lang::_lang('FndCajaMovimientos') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_movimiento_alta.php'><?php Lang::_lang('Alta de FndCajaMovimientos') ?> </a></li>
			  <li><a href='fnd_caja_movimiento_adm.php'><?php Lang::_lang('Listado de FndCajaMovimientos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_movimiento_items'><a href='javascript:;' onclick='menu_grupo("fnd_caja_movimiento_items")'><?php Lang::_lang('FndCajaMovimientoItems') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_movimiento_item_alta.php'><?php Lang::_lang('Alta de FndCajaMovimientoItems') ?> </a></li>
			  <li><a href='fnd_caja_movimiento_item_adm.php'><?php Lang::_lang('Listado de FndCajaMovimientoItems') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_movimiento_estados'><a href='javascript:;' onclick='menu_grupo("fnd_caja_movimiento_estados")'><?php Lang::_lang('FndCajaMovimientoEstado') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_movimiento_estado_alta.php'><?php Lang::_lang('Alta de FndCajaMovimientoEstado') ?> </a></li>
			  <li><a href='fnd_caja_movimiento_estado_adm.php'><?php Lang::_lang('Listado de FndCajaMovimientoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_caja_movimiento_tipo_estados'><a href='javascript:;' onclick='menu_grupo("fnd_caja_movimiento_tipo_estados")'><?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='fnd_caja_movimiento_tipo_estado_alta.php'><?php Lang::_lang('Alta de FndCajaMovimientoTipoEstado') ?> </a></li>
			  <li><a href='fnd_caja_movimiento_tipo_estado_adm.php'><?php Lang::_lang('Listado de FndCajaMovimientoTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_chq_chequeras'><a href='javascript:;' onclick='menu_grupo("fnd_chq_chequeras")'><?php Lang::_lang('FndChqChequera') ?></a></h3>
			<ul>
			  <li><a href='fnd_chq_chequera_alta.php'><?php Lang::_lang('Alta de FndChqChequera') ?> </a></li>
			  <li><a href='fnd_chq_chequera_adm.php'><?php Lang::_lang('Listado de FndChqChequera') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_chq_tipo_estados'><a href='javascript:;' onclick='menu_grupo("fnd_chq_tipo_estados")'><?php Lang::_lang('FndChqTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='fnd_chq_tipo_estado_alta.php'><?php Lang::_lang('Alta de FndChqTipoEstado') ?> </a></li>
			  <li><a href='fnd_chq_tipo_estado_adm.php'><?php Lang::_lang('Listado de FndChqTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_chq_tipo_emisors'><a href='javascript:;' onclick='menu_grupo("fnd_chq_tipo_emisors")'><?php Lang::_lang('FndChqTipoEmisor') ?></a></h3>
			<ul>
			  <li><a href='fnd_chq_tipo_emisor_alta.php'><?php Lang::_lang('Alta de FndChqTipoEmisor') ?> </a></li>
			  <li><a href='fnd_chq_tipo_emisor_adm.php'><?php Lang::_lang('Listado de FndChqTipoEmisor') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_chq_tipo_emisions'><a href='javascript:;' onclick='menu_grupo("fnd_chq_tipo_emisions")'><?php Lang::_lang('FndChqTipoEmision') ?></a></h3>
			<ul>
			  <li><a href='fnd_chq_tipo_emision_alta.php'><?php Lang::_lang('Alta de FndChqTipoEmision') ?> </a></li>
			  <li><a href='fnd_chq_tipo_emision_adm.php'><?php Lang::_lang('Listado de FndChqTipoEmision') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_chq_tipo_pagos'><a href='javascript:;' onclick='menu_grupo("fnd_chq_tipo_pagos")'><?php Lang::_lang('FndChqTipoPago') ?></a></h3>
			<ul>
			  <li><a href='fnd_chq_tipo_pago_alta.php'><?php Lang::_lang('Alta de FndChqTipoPago') ?> </a></li>
			  <li><a href='fnd_chq_tipo_pago_adm.php'><?php Lang::_lang('Listado de FndChqTipoPago') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_chq_estados'><a href='javascript:;' onclick='menu_grupo("fnd_chq_estados")'><?php Lang::_lang('FndChqEstado') ?></a></h3>
			<ul>
			  <li><a href='fnd_chq_estado_alta.php'><?php Lang::_lang('Alta de FndChqEstado') ?> </a></li>
			  <li><a href='fnd_chq_estado_adm.php'><?php Lang::_lang('Listado de FndChqEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_chq_cheques'><a href='javascript:;' onclick='menu_grupo("fnd_chq_cheques")'><?php Lang::_lang('FndChqCheque') ?></a></h3>
			<ul>
			  <li><a href='fnd_chq_cheque_alta.php'><?php Lang::_lang('Alta de FndChqCheque') ?> </a></li>
			  <li><a href='fnd_chq_cheque_adm.php'><?php Lang::_lang('Listado de FndChqCheque') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head fnd_chq_tipo_emisor_fnd_chq_tipo_estados'><a href='javascript:;' onclick='menu_grupo("fnd_chq_tipo_emisor_fnd_chq_tipo_estados")'><?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?></a></h3>
			<ul>
			  <li><a href='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php'><?php Lang::_lang('Alta de FndChqTipoEmisorFndChqTipoEstado') ?> </a></li>
			  <li><a href='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_adm.php'><?php Lang::_lang('Listado de FndChqTipoEmisorFndChqTipoEstado') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_autorizations'><a href='javascript:;' onclick='menu_grupo("ml_autorizations")'><?php Lang::_lang('MlAutorizations') ?></a></h3>
			<ul>
			  <li><a href='ml_autorization_alta.php'><?php Lang::_lang('Alta de MlAutorizations') ?> </a></li>
			  <li><a href='ml_autorization_adm.php'><?php Lang::_lang('Listado de MlAutorizations') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_listing_types'><a href='javascript:;' onclick='menu_grupo("ml_listing_types")'><?php Lang::_lang('MlListingTypes') ?></a></h3>
			<ul>
			  <li><a href='ml_listing_type_alta.php'><?php Lang::_lang('Alta de MlListingTypes') ?> </a></li>
			  <li><a href='ml_listing_type_adm.php'><?php Lang::_lang('Listado de MlListingTypes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_conditions'><a href='javascript:;' onclick='menu_grupo("ml_conditions")'><?php Lang::_lang('MlConditions') ?></a></h3>
			<ul>
			  <li><a href='ml_condition_alta.php'><?php Lang::_lang('Alta de MlConditions') ?> </a></li>
			  <li><a href='ml_condition_adm.php'><?php Lang::_lang('Listado de MlConditions') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_categorys'><a href='javascript:;' onclick='menu_grupo("ml_categorys")'><?php Lang::_lang('MlCategorys') ?></a></h3>
			<ul>
			  <li><a href='ml_category_alta.php'><?php Lang::_lang('Alta de MlCategorys') ?> </a></li>
			  <li><a href='ml_category_adm.php'><?php Lang::_lang('Listado de MlCategorys') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_attributes'><a href='javascript:;' onclick='menu_grupo("ml_attributes")'><?php Lang::_lang('MlAttributes') ?></a></h3>
			<ul>
			  <li><a href='ml_attribute_alta.php'><?php Lang::_lang('Alta de MlAttributes') ?> </a></li>
			  <li><a href='ml_attribute_adm.php'><?php Lang::_lang('Listado de MlAttributes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_attribute_types'><a href='javascript:;' onclick='menu_grupo("ml_attribute_types")'><?php Lang::_lang('MlAttributeTypes') ?></a></h3>
			<ul>
			  <li><a href='ml_attribute_type_alta.php'><?php Lang::_lang('Alta de MlAttributeTypes') ?> </a></li>
			  <li><a href='ml_attribute_type_adm.php'><?php Lang::_lang('Listado de MlAttributeTypes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_attribute_ins_atributos'><a href='javascript:;' onclick='menu_grupo("ml_attribute_ins_atributos")'><?php Lang::_lang('MlAttributeInsAtributos') ?></a></h3>
			<ul>
			  <li><a href='ml_attribute_ins_atributo_alta.php'><?php Lang::_lang('Alta de MlAttributeInsAtributos') ?> </a></li>
			  <li><a href='ml_attribute_ins_atributo_adm.php'><?php Lang::_lang('Listado de MlAttributeInsAtributos') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_attribute_ml_values'><a href='javascript:;' onclick='menu_grupo("ml_attribute_ml_values")'><?php Lang::_lang('MlAttributeMlValues') ?></a></h3>
			<ul>
			  <li><a href='ml_attribute_ml_value_alta.php'><?php Lang::_lang('Alta de MlAttributeMlValues') ?> </a></li>
			  <li><a href='ml_attribute_ml_value_adm.php'><?php Lang::_lang('Listado de MlAttributeMlValues') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_values'><a href='javascript:;' onclick='menu_grupo("ml_values")'><?php Lang::_lang('MlValues') ?></a></h3>
			<ul>
			  <li><a href='ml_value_alta.php'><?php Lang::_lang('Alta de MlValues') ?> </a></li>
			  <li><a href='ml_value_adm.php'><?php Lang::_lang('Listado de MlValues') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_category_ml_attributes'><a href='javascript:;' onclick='menu_grupo("ml_category_ml_attributes")'><?php Lang::_lang('MlCategoryMlAttributes') ?></a></h3>
			<ul>
			  <li><a href='ml_category_ml_attribute_alta.php'><?php Lang::_lang('Alta de MlCategoryMlAttributes') ?> </a></li>
			  <li><a href='ml_category_ml_attribute_adm.php'><?php Lang::_lang('Listado de MlCategoryMlAttributes') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_value_ins_marcas'><a href='javascript:;' onclick='menu_grupo("ml_value_ins_marcas")'><?php Lang::_lang('MlValueInsMarcas') ?></a></h3>
			<ul>
			  <li><a href='ml_value_ins_marca_alta.php'><?php Lang::_lang('Alta de MlValueInsMarcas') ?> </a></li>
			  <li><a href='ml_value_ins_marca_adm.php'><?php Lang::_lang('Listado de MlValueInsMarcas') ?> </a></li>
			</ul>
		  </li>
			
		  <li>
			<h3 class='head ml_item_statuss'><a href='javascript:;' onclick='menu_grupo("ml_item_statuss")'><?php Lang::_lang('MlItemStatuss') ?></a></h3>
			<ul>
			  <li><a href='ml_item_status_alta.php'><?php Lang::_lang('Alta de MlItemStatuss') ?> </a></li>
			  <li><a href='ml_item_status_adm.php'><?php Lang::_lang('Listado de MlItemStatuss') ?> </a></li>
			</ul>
		  </li>
			
</ul>
<div id='div_menu_cargando'><img src='../imgs/cargando.gif' width='16' height='16' /><br />
  <br />
Cargando Men&uacute; </div>
<input name='hdn_menu_sel' type='hidden' id='hdn_menu_sel' value='<?php echo $seleccionado ?>' size='5' />

