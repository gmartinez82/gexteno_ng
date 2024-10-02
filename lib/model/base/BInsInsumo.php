<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BInsInsumo
{ 
	
	const SES_PAGINACION = 'adm_insinsumo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_insinsumo_paginas_registros';
	const SES_CRITERIOS = 'adm_insinsumo_criterios';
	
	const GEN_CLASE = 'InsInsumo';
	const GEN_TABLA = 'ins_insumo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BInsInsumo */ 
	const GEN_ATTR_ID = 'ins_insumo.id';
	const GEN_ATTR_INS_CATEGORIA_ID = 'ins_insumo.ins_categoria_id';
	const GEN_ATTR_INS_MATRIZ_ID = 'ins_insumo.ins_matriz_id';
	const GEN_ATTR_DESCRIPCION = 'ins_insumo.descripcion';
	const GEN_ATTR_INS_MARCA_ID = 'ins_insumo.ins_marca_id';
	const GEN_ATTR_DESCRIPCION_CORTA = 'ins_insumo.descripcion_corta';
	const GEN_ATTR_DESCRIPCION_WEB = 'ins_insumo.descripcion_web';
	const GEN_ATTR_CODIGO = 'ins_insumo.codigo';
	const GEN_ATTR_CODIGO_MARCA = 'ins_insumo.codigo_marca';
	const GEN_ATTR_CODIGO_INTERNO = 'ins_insumo.codigo_interno';
	const GEN_ATTR_CODIGO_IMPORTACION = 'ins_insumo.codigo_importacion';
	const GEN_ATTR_CODIGO_BARRA = 'ins_insumo.codigo_barra';
	const GEN_ATTR_CODIGO_BARRA_INTERNO = 'ins_insumo.codigo_barra_interno';
	const GEN_ATTR_URL_TIENDA = 'ins_insumo.url_tienda';
	const GEN_ATTR_INS_UNIDAD_MEDIDA_ID = 'ins_insumo.ins_unidad_medida_id';
	const GEN_ATTR_ES_COMPRABLE = 'ins_insumo.es_comprable';
	const GEN_ATTR_ES_CONSUMIBLE = 'ins_insumo.es_consumible';
	const GEN_ATTR_ES_VENDIBLE = 'ins_insumo.es_vendible';
	const GEN_ATTR_ES_FABRICABLE = 'ins_insumo.es_fabricable';
	const GEN_ATTR_ES_TRANSFORMABLE_ORIGEN = 'ins_insumo.es_transformable_origen';
	const GEN_ATTR_ES_TRANSFORMABLE_DESTINO = 'ins_insumo.es_transformable_destino';
	const GEN_ATTR_INS_UNIDAD_MEDIDA_PEDIDO_ID = 'ins_insumo.ins_unidad_medida_pedido_id';
	const GEN_ATTR_INS_TIPO_CONSUMO_ID = 'ins_insumo.ins_tipo_consumo_id';
	const GEN_ATTR_RETORNABLE = 'ins_insumo.retornable';
	const GEN_ATTR_IDENTIFICABLE = 'ins_insumo.identificable';
	const GEN_ATTR_CONTROL_STOCK = 'ins_insumo.control_stock';
	const GEN_ATTR_PUNTO_MINIMO = 'ins_insumo.punto_minimo';
	const GEN_ATTR_PUNTO_PEDIDO = 'ins_insumo.punto_pedido';
	const GEN_ATTR_PUNTO_MAXIMO = 'ins_insumo.punto_maximo';
	const GEN_ATTR_CANTIDAD_MAXIMA_PEDIDO = 'ins_insumo.cantidad_maxima_pedido';
	const GEN_ATTR_INS_TIPO_NECESIDAD_ID = 'ins_insumo.ins_tipo_necesidad_id';
	const GEN_ATTR_INS_NIVEL_APROVISIONAMIENTO_ID = 'ins_insumo.ins_nivel_aprovisionamiento_id';
	const GEN_ATTR_HEREDA_MARCAS = 'ins_insumo.hereda_marcas';
	const GEN_ATTR_VENTA_WEB = 'ins_insumo.venta_web';
	const GEN_ATTR_VENTA_MERCADOLIBRE = 'ins_insumo.venta_mercadolibre';
	const GEN_ATTR_VENTA_MAYORISTA = 'ins_insumo.venta_mayorista';
	const GEN_ATTR_GRAL_TIPO_IVA_VENTA = 'ins_insumo.gral_tipo_iva_venta';
	const GEN_ATTR_GRAL_TIPO_IVA_VENTA_Z = 'ins_insumo.gral_tipo_iva_venta_z';
	const GEN_ATTR_GRAL_TIPO_IVA_COMPRA = 'ins_insumo.gral_tipo_iva_compra';
	const GEN_ATTR_GRAL_TIPO_IVA_COMPRA_Z = 'ins_insumo.gral_tipo_iva_compra_z';
	const GEN_ATTR_PROPORCION_IVA = 'ins_insumo.proporcion_iva';
	const GEN_ATTR_INS_TIPO_INSUMO_ID = 'ins_insumo.ins_tipo_insumo_id';
	const GEN_ATTR_INS_TIPO_FABRICANTE_ID = 'ins_insumo.ins_tipo_fabricante_id';
	const GEN_ATTR_NOTAS_INTERNAS = 'ins_insumo.notas_internas';
	const GEN_ATTR_OBSERVACION = 'ins_insumo.observacion';
	const GEN_ATTR_DATOS_MIGRACION = 'ins_insumo.datos_migracion';
	const GEN_ATTR_CLAVES = 'ins_insumo.claves';
	const GEN_ATTR_CLAVES_ATRIBUTOS = 'ins_insumo.claves_atributos';
	const GEN_ATTR_CLAVES_TIENDA = 'ins_insumo.claves_tienda';
	const GEN_ATTR_ORDEN = 'ins_insumo.orden';
	const GEN_ATTR_ESTADO = 'ins_insumo.estado';
	const GEN_ATTR_CREADO = 'ins_insumo.creado';
	const GEN_ATTR_CREADO_POR = 'ins_insumo.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_insumo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_insumo.modificado_por';

	/* Constantes de Atributos Min de BInsInsumo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_INS_CATEGORIA_ID = 'ins_categoria_id';
	const GEN_ATTR_MIN_INS_MATRIZ_ID = 'ins_matriz_id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_INS_MARCA_ID = 'ins_marca_id';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_DESCRIPCION_WEB = 'descripcion_web';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_MARCA = 'codigo_marca';
	const GEN_ATTR_MIN_CODIGO_INTERNO = 'codigo_interno';
	const GEN_ATTR_MIN_CODIGO_IMPORTACION = 'codigo_importacion';
	const GEN_ATTR_MIN_CODIGO_BARRA = 'codigo_barra';
	const GEN_ATTR_MIN_CODIGO_BARRA_INTERNO = 'codigo_barra_interno';
	const GEN_ATTR_MIN_URL_TIENDA = 'url_tienda';
	const GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID = 'ins_unidad_medida_id';
	const GEN_ATTR_MIN_ES_COMPRABLE = 'es_comprable';
	const GEN_ATTR_MIN_ES_CONSUMIBLE = 'es_consumible';
	const GEN_ATTR_MIN_ES_VENDIBLE = 'es_vendible';
	const GEN_ATTR_MIN_ES_FABRICABLE = 'es_fabricable';
	const GEN_ATTR_MIN_ES_TRANSFORMABLE_ORIGEN = 'es_transformable_origen';
	const GEN_ATTR_MIN_ES_TRANSFORMABLE_DESTINO = 'es_transformable_destino';
	const GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_PEDIDO_ID = 'ins_unidad_medida_pedido_id';
	const GEN_ATTR_MIN_INS_TIPO_CONSUMO_ID = 'ins_tipo_consumo_id';
	const GEN_ATTR_MIN_RETORNABLE = 'retornable';
	const GEN_ATTR_MIN_IDENTIFICABLE = 'identificable';
	const GEN_ATTR_MIN_CONTROL_STOCK = 'control_stock';
	const GEN_ATTR_MIN_PUNTO_MINIMO = 'punto_minimo';
	const GEN_ATTR_MIN_PUNTO_PEDIDO = 'punto_pedido';
	const GEN_ATTR_MIN_PUNTO_MAXIMO = 'punto_maximo';
	const GEN_ATTR_MIN_CANTIDAD_MAXIMA_PEDIDO = 'cantidad_maxima_pedido';
	const GEN_ATTR_MIN_INS_TIPO_NECESIDAD_ID = 'ins_tipo_necesidad_id';
	const GEN_ATTR_MIN_INS_NIVEL_APROVISIONAMIENTO_ID = 'ins_nivel_aprovisionamiento_id';
	const GEN_ATTR_MIN_HEREDA_MARCAS = 'hereda_marcas';
	const GEN_ATTR_MIN_VENTA_WEB = 'venta_web';
	const GEN_ATTR_MIN_VENTA_MERCADOLIBRE = 'venta_mercadolibre';
	const GEN_ATTR_MIN_VENTA_MAYORISTA = 'venta_mayorista';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA = 'gral_tipo_iva_venta';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA_Z = 'gral_tipo_iva_venta_z';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA = 'gral_tipo_iva_compra';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA_Z = 'gral_tipo_iva_compra_z';
	const GEN_ATTR_MIN_PROPORCION_IVA = 'proporcion_iva';
	const GEN_ATTR_MIN_INS_TIPO_INSUMO_ID = 'ins_tipo_insumo_id';
	const GEN_ATTR_MIN_INS_TIPO_FABRICANTE_ID = 'ins_tipo_fabricante_id';
	const GEN_ATTR_MIN_NOTAS_INTERNAS = 'notas_internas';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_DATOS_MIGRACION = 'datos_migracion';
	const GEN_ATTR_MIN_CLAVES = 'claves';
	const GEN_ATTR_MIN_CLAVES_ATRIBUTOS = 'claves_atributos';
	const GEN_ATTR_MIN_CLAVES_TIENDA = 'claves_tienda';
	const GEN_ATTR_MIN_ORDEN = 'orden';
	const GEN_ATTR_MIN_ESTADO = 'estado';
	const GEN_ATTR_MIN_CREADO = 'creado';
	const GEN_ATTR_MIN_CREADO_POR = 'creado_por';
	const GEN_ATTR_MIN_MODIFICADO = 'modificado';
	const GEN_ATTR_MIN_MODIFICADO_POR = 'modificado_por';
	
		
	private $error;
	
	/* Seteo y Geteo de Pagina Actual */
	static function getSesPag(){
            if(trim(Gral::getSes(self::SES_PAGINACION)) == '') return 1;
            return Gral::getSes(self::SES_PAGINACION);
	}
	static function setSesPag($v){ Gral::setSes(self::SES_PAGINACION, $v); }

	/* Seteo y Geteo de Cantidad de Registros por Pagina */
	static function getSesPagCantidad(){
            if(trim(Gral::getSes(self::SES_PAGINACION_REGISTROS)) == '') return 10;
            return Gral::getSes(self::SES_PAGINACION_REGISTROS);
	}
	static function setSesPagCantidad($v){ Gral::setSes(self::SES_PAGINACION_REGISTROS, $v); }
		
	public function getError(){ return $this->error; }
	

	/* Atributos de BInsInsumo */ 
	private $id;
	private $ins_categoria_id;
	private $ins_matriz_id;
	private $descripcion;
	private $ins_marca_id;
	private $descripcion_corta;
	private $descripcion_web;
	private $codigo;
	private $codigo_marca;
	private $codigo_interno;
	private $codigo_importacion;
	private $codigo_barra;
	private $codigo_barra_interno;
	private $url_tienda;
	private $ins_unidad_medida_id;
	private $es_comprable;
	private $es_consumible;
	private $es_vendible;
	private $es_fabricable;
	private $es_transformable_origen;
	private $es_transformable_destino;
	private $ins_unidad_medida_pedido_id;
	private $ins_tipo_consumo_id;
	private $retornable;
	private $identificable;
	private $control_stock;
	private $punto_minimo;
	private $punto_pedido;
	private $punto_maximo;
	private $cantidad_maxima_pedido;
	private $ins_tipo_necesidad_id;
	private $ins_nivel_aprovisionamiento_id;
	private $hereda_marcas;
	private $venta_web;
	private $venta_mercadolibre;
	private $venta_mayorista;
	private $gral_tipo_iva_venta;
	private $gral_tipo_iva_venta_z;
	private $gral_tipo_iva_compra;
	private $gral_tipo_iva_compra_z;
	private $proporcion_iva;
	private $ins_tipo_insumo_id;
	private $ins_tipo_fabricante_id;
	private $notas_internas;
	private $observacion;
	private $datos_migracion;
	private $claves;
	private $claves_atributos;
	private $claves_tienda;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsInsumo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getInsCategoriaId(){ if(isset($this->ins_categoria_id)){ return $this->ins_categoria_id; }else{ return 'null'; } }
	public function getInsMatrizId(){ if(isset($this->ins_matriz_id)){ return $this->ins_matriz_id; }else{ return 'null'; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getInsMarcaId(){ if(isset($this->ins_marca_id)){ return $this->ins_marca_id; }else{ return 'null'; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getDescripcionWeb(){ if(isset($this->descripcion_web)){ return $this->descripcion_web; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoMarca(){ if(isset($this->codigo_marca)){ return $this->codigo_marca; }else{ return ''; } }
	public function getCodigoInterno(){ if(isset($this->codigo_interno)){ return $this->codigo_interno; }else{ return ''; } }
	public function getCodigoImportacion(){ if(isset($this->codigo_importacion)){ return $this->codigo_importacion; }else{ return ''; } }
	public function getCodigoBarra(){ if(isset($this->codigo_barra)){ return $this->codigo_barra; }else{ return ''; } }
	public function getCodigoBarraInterno(){ if(isset($this->codigo_barra_interno)){ return $this->codigo_barra_interno; }else{ return ''; } }
	public function getUrlTienda(){ if(isset($this->url_tienda)){ return $this->url_tienda; }else{ return ''; } }
	public function getInsUnidadMedidaId(){ if(isset($this->ins_unidad_medida_id)){ return $this->ins_unidad_medida_id; }else{ return 'null'; } }
	public function getEsComprable(){ if(isset($this->es_comprable)){ return $this->es_comprable; }else{ return 0; } }
	public function getEsConsumible(){ if(isset($this->es_consumible)){ return $this->es_consumible; }else{ return 0; } }
	public function getEsVendible(){ if(isset($this->es_vendible)){ return $this->es_vendible; }else{ return 0; } }
	public function getEsFabricable(){ if(isset($this->es_fabricable)){ return $this->es_fabricable; }else{ return 0; } }
	public function getEsTransformableOrigen(){ if(isset($this->es_transformable_origen)){ return $this->es_transformable_origen; }else{ return 0; } }
	public function getEsTransformableDestino(){ if(isset($this->es_transformable_destino)){ return $this->es_transformable_destino; }else{ return 0; } }
	public function getInsUnidadMedidaPedidoId(){ if(isset($this->ins_unidad_medida_pedido_id)){ return $this->ins_unidad_medida_pedido_id; }else{ return 'null'; } }
	public function getInsTipoConsumoId(){ if(isset($this->ins_tipo_consumo_id)){ return $this->ins_tipo_consumo_id; }else{ return 'null'; } }
	public function getRetornable(){ if(isset($this->retornable)){ return $this->retornable; }else{ return 0; } }
	public function getIdentificable(){ if(isset($this->identificable)){ return $this->identificable; }else{ return 0; } }
	public function getControlStock(){ if(isset($this->control_stock)){ return $this->control_stock; }else{ return 0; } }
	public function getPuntoMinimo(){ if(isset($this->punto_minimo)){ return $this->punto_minimo; }else{ return 0; } }
	public function getPuntoPedido(){ if(isset($this->punto_pedido)){ return $this->punto_pedido; }else{ return 0; } }
	public function getPuntoMaximo(){ if(isset($this->punto_maximo)){ return $this->punto_maximo; }else{ return 0; } }
	public function getCantidadMaximaPedido(){ if(isset($this->cantidad_maxima_pedido)){ return $this->cantidad_maxima_pedido; }else{ return 0; } }
	public function getInsTipoNecesidadId(){ if(isset($this->ins_tipo_necesidad_id)){ return $this->ins_tipo_necesidad_id; }else{ return 'null'; } }
	public function getInsNivelAprovisionamientoId(){ if(isset($this->ins_nivel_aprovisionamiento_id)){ return $this->ins_nivel_aprovisionamiento_id; }else{ return 'null'; } }
	public function getHeredaMarcas(){ if(isset($this->hereda_marcas)){ return $this->hereda_marcas; }else{ return 0; } }
	public function getVentaWeb(){ if(isset($this->venta_web)){ return $this->venta_web; }else{ return 0; } }
	public function getVentaMercadolibre(){ if(isset($this->venta_mercadolibre)){ return $this->venta_mercadolibre; }else{ return 0; } }
	public function getVentaMayorista(){ if(isset($this->venta_mayorista)){ return $this->venta_mayorista; }else{ return 0; } }
	public function getGralTipoIvaVenta(){ if(isset($this->gral_tipo_iva_venta)){ return $this->gral_tipo_iva_venta; }else{ return 'null'; } }
	public function getGralTipoIvaVentaObj(){ if(isset($this->gral_tipo_iva_venta)){ return GralTipoIva::getOxId($this->gral_tipo_iva_venta); }else{ return new GralTipoIva(); } }
	public function getGralTipoIvaVentaZ(){ if(isset($this->gral_tipo_iva_venta_z)){ return $this->gral_tipo_iva_venta_z; }else{ return 'null'; } }
	public function getGralTipoIvaVentaZObj(){ if(isset($this->gral_tipo_iva_venta_z)){ return GralTipoIva::getOxId($this->gral_tipo_iva_venta_z); }else{ return new GralTipoIva(); } }
	public function getGralTipoIvaCompra(){ if(isset($this->gral_tipo_iva_compra)){ return $this->gral_tipo_iva_compra; }else{ return 'null'; } }
	public function getGralTipoIvaCompraObj(){ if(isset($this->gral_tipo_iva_compra)){ return GralTipoIva::getOxId($this->gral_tipo_iva_compra); }else{ return new GralTipoIva(); } }
	public function getGralTipoIvaCompraZ(){ if(isset($this->gral_tipo_iva_compra_z)){ return $this->gral_tipo_iva_compra_z; }else{ return 'null'; } }
	public function getGralTipoIvaCompraZObj(){ if(isset($this->gral_tipo_iva_compra_z)){ return GralTipoIva::getOxId($this->gral_tipo_iva_compra_z); }else{ return new GralTipoIva(); } }
	public function getProporcionIva(){ if(isset($this->proporcion_iva)){ return $this->proporcion_iva; }else{ return 100; } }
	public function getInsTipoInsumoId(){ if(isset($this->ins_tipo_insumo_id)){ return $this->ins_tipo_insumo_id; }else{ return 'null'; } }
	public function getInsTipoFabricanteId(){ if(isset($this->ins_tipo_fabricante_id)){ return $this->ins_tipo_fabricante_id; }else{ return 'null'; } }
	public function getNotasInternas(){ if(isset($this->notas_internas)){ return $this->notas_internas; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getDatosMigracion(){ if(isset($this->datos_migracion)){ return $this->datos_migracion; }else{ return ''; } }
	public function getClaves(){ if(isset($this->claves)){ return $this->claves; }else{ return ''; } }
	public function getClavesAtributos(){ if(isset($this->claves_atributos)){ return $this->claves_atributos; }else{ return ''; } }
	public function getClavesTienda(){ if(isset($this->claves_tienda)){ return $this->claves_tienda; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BInsInsumo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_INS_CATEGORIA_ID."
				, ".self::GEN_ATTR_INS_MATRIZ_ID."
				, ".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_INS_MARCA_ID."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_DESCRIPCION_WEB."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_MARCA."
				, ".self::GEN_ATTR_CODIGO_INTERNO."
				, ".self::GEN_ATTR_CODIGO_IMPORTACION."
				, ".self::GEN_ATTR_CODIGO_BARRA."
				, ".self::GEN_ATTR_CODIGO_BARRA_INTERNO."
				, ".self::GEN_ATTR_URL_TIENDA."
				, ".self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID."
				, ".self::GEN_ATTR_ES_COMPRABLE."
				, ".self::GEN_ATTR_ES_CONSUMIBLE."
				, ".self::GEN_ATTR_ES_VENDIBLE."
				, ".self::GEN_ATTR_ES_FABRICABLE."
				, ".self::GEN_ATTR_ES_TRANSFORMABLE_ORIGEN."
				, ".self::GEN_ATTR_ES_TRANSFORMABLE_DESTINO."
				, ".self::GEN_ATTR_INS_UNIDAD_MEDIDA_PEDIDO_ID."
				, ".self::GEN_ATTR_INS_TIPO_CONSUMO_ID."
				, ".self::GEN_ATTR_RETORNABLE."
				, ".self::GEN_ATTR_IDENTIFICABLE."
				, ".self::GEN_ATTR_CONTROL_STOCK."
				, ".self::GEN_ATTR_PUNTO_MINIMO."
				, ".self::GEN_ATTR_PUNTO_PEDIDO."
				, ".self::GEN_ATTR_PUNTO_MAXIMO."
				, ".self::GEN_ATTR_CANTIDAD_MAXIMA_PEDIDO."
				, ".self::GEN_ATTR_INS_TIPO_NECESIDAD_ID."
				, ".self::GEN_ATTR_INS_NIVEL_APROVISIONAMIENTO_ID."
				, ".self::GEN_ATTR_HEREDA_MARCAS."
				, ".self::GEN_ATTR_VENTA_WEB."
				, ".self::GEN_ATTR_VENTA_MERCADOLIBRE."
				, ".self::GEN_ATTR_VENTA_MAYORISTA."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_VENTA."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_VENTA_Z."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_COMPRA."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_COMPRA_Z."
				, ".self::GEN_ATTR_PROPORCION_IVA."
				, ".self::GEN_ATTR_INS_TIPO_INSUMO_ID."
				, ".self::GEN_ATTR_INS_TIPO_FABRICANTE_ID."
				, ".self::GEN_ATTR_NOTAS_INTERNAS."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_DATOS_MIGRACION."
				, ".self::GEN_ATTR_CLAVES."
				, ".self::GEN_ATTR_CLAVES_ATRIBUTOS."
				, ".self::GEN_ATTR_CLAVES_TIENDA."
				, ".self::GEN_ATTR_ORDEN."
				, ".self::GEN_ATTR_ESTADO."
				, ".self::GEN_ATTR_CREADO."
				, ".self::GEN_ATTR_CREADO_POR."
				, ".self::GEN_ATTR_MODIFICADO."
				, ".self::GEN_ATTR_MODIFICADO_POR."
			 FROM ".self::GEN_TABLA."
			 WHERE ". self::GEN_ATTR_ID." = ".$this->getId();

                $cons = new Consulta();
                $cons->setSQL($sql);
                $cons->execute();

                while($fila = pg_fetch_array($cons->getResultado())){
                    				$this->setInsCategoriaId($fila[self::GEN_ATTR_MIN_INS_CATEGORIA_ID]);
				$this->setInsMatrizId($fila[self::GEN_ATTR_MIN_INS_MATRIZ_ID]);
				$this->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
				$this->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
				$this->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
				$this->setDescripcionWeb($fila[self::GEN_ATTR_MIN_DESCRIPCION_WEB]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoMarca($fila[self::GEN_ATTR_MIN_CODIGO_MARCA]);
				$this->setCodigoInterno($fila[self::GEN_ATTR_MIN_CODIGO_INTERNO]);
				$this->setCodigoImportacion($fila[self::GEN_ATTR_MIN_CODIGO_IMPORTACION]);
				$this->setCodigoBarra($fila[self::GEN_ATTR_MIN_CODIGO_BARRA]);
				$this->setCodigoBarraInterno($fila[self::GEN_ATTR_MIN_CODIGO_BARRA_INTERNO]);
				$this->setUrlTienda($fila[self::GEN_ATTR_MIN_URL_TIENDA]);
				$this->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
				$this->setEsComprable($fila[self::GEN_ATTR_MIN_ES_COMPRABLE]);
				$this->setEsConsumible($fila[self::GEN_ATTR_MIN_ES_CONSUMIBLE]);
				$this->setEsVendible($fila[self::GEN_ATTR_MIN_ES_VENDIBLE]);
				$this->setEsFabricable($fila[self::GEN_ATTR_MIN_ES_FABRICABLE]);
				$this->setEsTransformableOrigen($fila[self::GEN_ATTR_MIN_ES_TRANSFORMABLE_ORIGEN]);
				$this->setEsTransformableDestino($fila[self::GEN_ATTR_MIN_ES_TRANSFORMABLE_DESTINO]);
				$this->setInsUnidadMedidaPedidoId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_PEDIDO_ID]);
				$this->setInsTipoConsumoId($fila[self::GEN_ATTR_MIN_INS_TIPO_CONSUMO_ID]);
				$this->setRetornable($fila[self::GEN_ATTR_MIN_RETORNABLE]);
				$this->setIdentificable($fila[self::GEN_ATTR_MIN_IDENTIFICABLE]);
				$this->setControlStock($fila[self::GEN_ATTR_MIN_CONTROL_STOCK]);
				$this->setPuntoMinimo($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO]);
				$this->setPuntoPedido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO]);
				$this->setPuntoMaximo($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO]);
				$this->setCantidadMaximaPedido($fila[self::GEN_ATTR_MIN_CANTIDAD_MAXIMA_PEDIDO]);
				$this->setInsTipoNecesidadId($fila[self::GEN_ATTR_MIN_INS_TIPO_NECESIDAD_ID]);
				$this->setInsNivelAprovisionamientoId($fila[self::GEN_ATTR_MIN_INS_NIVEL_APROVISIONAMIENTO_ID]);
				$this->setHeredaMarcas($fila[self::GEN_ATTR_MIN_HEREDA_MARCAS]);
				$this->setVentaWeb($fila[self::GEN_ATTR_MIN_VENTA_WEB]);
				$this->setVentaMercadolibre($fila[self::GEN_ATTR_MIN_VENTA_MERCADOLIBRE]);
				$this->setVentaMayorista($fila[self::GEN_ATTR_MIN_VENTA_MAYORISTA]);
				$this->setGralTipoIvaVenta($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA]);
				$this->setGralTipoIvaVentaZ($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA_Z]);
				$this->setGralTipoIvaCompra($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA]);
				$this->setGralTipoIvaCompraZ($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA_Z]);
				$this->setProporcionIva($fila[self::GEN_ATTR_MIN_PROPORCION_IVA]);
				$this->setInsTipoInsumoId($fila[self::GEN_ATTR_MIN_INS_TIPO_INSUMO_ID]);
				$this->setInsTipoFabricanteId($fila[self::GEN_ATTR_MIN_INS_TIPO_FABRICANTE_ID]);
				$this->setNotasInternas($fila[self::GEN_ATTR_MIN_NOTAS_INTERNAS]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setDatosMigracion($fila[self::GEN_ATTR_MIN_DATOS_MIGRACION]);
				$this->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
				$this->setClavesAtributos($fila[self::GEN_ATTR_MIN_CLAVES_ATRIBUTOS]);
				$this->setClavesTienda($fila[self::GEN_ATTR_MIN_CLAVES_TIENDA]);
				$this->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
				$this->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setInsCategoriaId($v){ $this->ins_categoria_id = $v; }
	public function setInsMatrizId($v){ $this->ins_matriz_id = $v; }
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setInsMarcaId($v){ $this->ins_marca_id = $v; }
	public function setDescripcionCorta($v){ $this->descripcion_corta = $v; }
	public function setDescripcionWeb($v){ $this->descripcion_web = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoMarca($v){ $this->codigo_marca = $v; }
	public function setCodigoInterno($v){ $this->codigo_interno = $v; }
	public function setCodigoImportacion($v){ $this->codigo_importacion = $v; }
	public function setCodigoBarra($v){ $this->codigo_barra = $v; }
	public function setCodigoBarraInterno($v){ $this->codigo_barra_interno = $v; }
	public function setUrlTienda($v){ $this->url_tienda = $v; }
	public function setInsUnidadMedidaId($v){ $this->ins_unidad_medida_id = $v; }
	public function setEsComprable($v){ $this->es_comprable = $v; }
	public function setEsConsumible($v){ $this->es_consumible = $v; }
	public function setEsVendible($v){ $this->es_vendible = $v; }
	public function setEsFabricable($v){ $this->es_fabricable = $v; }
	public function setEsTransformableOrigen($v){ $this->es_transformable_origen = $v; }
	public function setEsTransformableDestino($v){ $this->es_transformable_destino = $v; }
	public function setInsUnidadMedidaPedidoId($v){ $this->ins_unidad_medida_pedido_id = $v; }
	public function setInsTipoConsumoId($v){ $this->ins_tipo_consumo_id = $v; }
	public function setRetornable($v){ $this->retornable = $v; }
	public function setIdentificable($v){ $this->identificable = $v; }
	public function setControlStock($v){ $this->control_stock = $v; }
	public function setPuntoMinimo($v){ $this->punto_minimo = $v; }
	public function setPuntoPedido($v){ $this->punto_pedido = $v; }
	public function setPuntoMaximo($v){ $this->punto_maximo = $v; }
	public function setCantidadMaximaPedido($v){ $this->cantidad_maxima_pedido = $v; }
	public function setInsTipoNecesidadId($v){ $this->ins_tipo_necesidad_id = $v; }
	public function setInsNivelAprovisionamientoId($v){ $this->ins_nivel_aprovisionamiento_id = $v; }
	public function setHeredaMarcas($v){ $this->hereda_marcas = $v; }
	public function setVentaWeb($v){ $this->venta_web = $v; }
	public function setVentaMercadolibre($v){ $this->venta_mercadolibre = $v; }
	public function setVentaMayorista($v){ $this->venta_mayorista = $v; }
	public function setGralTipoIvaVenta($v){ $this->gral_tipo_iva_venta = $v; }
	public function setGralTipoIvaVentaZ($v){ $this->gral_tipo_iva_venta_z = $v; }
	public function setGralTipoIvaCompra($v){ $this->gral_tipo_iva_compra = $v; }
	public function setGralTipoIvaCompraZ($v){ $this->gral_tipo_iva_compra_z = $v; }
	public function setProporcionIva($v){ $this->proporcion_iva = $v; }
	public function setInsTipoInsumoId($v){ $this->ins_tipo_insumo_id = $v; }
	public function setInsTipoFabricanteId($v){ $this->ins_tipo_fabricante_id = $v; }
	public function setNotasInternas($v){ $this->notas_internas = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setDatosMigracion($v){ $this->datos_migracion = $v; }
	public function setClaves($v){ $this->claves = $v; }
	public function setClavesAtributos($v){ $this->claves_atributos = $v; }
	public function setClavesTienda($v){ $this->claves_tienda = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsInsumo();
            $o->setId($fila[InsInsumo::GEN_ATTR_MIN_ID], false);
            
			$o->setInsCategoriaId($fila[self::GEN_ATTR_MIN_INS_CATEGORIA_ID]);
			$o->setInsMatrizId($fila[self::GEN_ATTR_MIN_INS_MATRIZ_ID]);
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setDescripcionWeb($fila[self::GEN_ATTR_MIN_DESCRIPCION_WEB]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoMarca($fila[self::GEN_ATTR_MIN_CODIGO_MARCA]);
			$o->setCodigoInterno($fila[self::GEN_ATTR_MIN_CODIGO_INTERNO]);
			$o->setCodigoImportacion($fila[self::GEN_ATTR_MIN_CODIGO_IMPORTACION]);
			$o->setCodigoBarra($fila[self::GEN_ATTR_MIN_CODIGO_BARRA]);
			$o->setCodigoBarraInterno($fila[self::GEN_ATTR_MIN_CODIGO_BARRA_INTERNO]);
			$o->setUrlTienda($fila[self::GEN_ATTR_MIN_URL_TIENDA]);
			$o->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
			$o->setEsComprable($fila[self::GEN_ATTR_MIN_ES_COMPRABLE]);
			$o->setEsConsumible($fila[self::GEN_ATTR_MIN_ES_CONSUMIBLE]);
			$o->setEsVendible($fila[self::GEN_ATTR_MIN_ES_VENDIBLE]);
			$o->setEsFabricable($fila[self::GEN_ATTR_MIN_ES_FABRICABLE]);
			$o->setEsTransformableOrigen($fila[self::GEN_ATTR_MIN_ES_TRANSFORMABLE_ORIGEN]);
			$o->setEsTransformableDestino($fila[self::GEN_ATTR_MIN_ES_TRANSFORMABLE_DESTINO]);
			$o->setInsUnidadMedidaPedidoId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_PEDIDO_ID]);
			$o->setInsTipoConsumoId($fila[self::GEN_ATTR_MIN_INS_TIPO_CONSUMO_ID]);
			$o->setRetornable($fila[self::GEN_ATTR_MIN_RETORNABLE]);
			$o->setIdentificable($fila[self::GEN_ATTR_MIN_IDENTIFICABLE]);
			$o->setControlStock($fila[self::GEN_ATTR_MIN_CONTROL_STOCK]);
			$o->setPuntoMinimo($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO]);
			$o->setPuntoPedido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO]);
			$o->setPuntoMaximo($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO]);
			$o->setCantidadMaximaPedido($fila[self::GEN_ATTR_MIN_CANTIDAD_MAXIMA_PEDIDO]);
			$o->setInsTipoNecesidadId($fila[self::GEN_ATTR_MIN_INS_TIPO_NECESIDAD_ID]);
			$o->setInsNivelAprovisionamientoId($fila[self::GEN_ATTR_MIN_INS_NIVEL_APROVISIONAMIENTO_ID]);
			$o->setHeredaMarcas($fila[self::GEN_ATTR_MIN_HEREDA_MARCAS]);
			$o->setVentaWeb($fila[self::GEN_ATTR_MIN_VENTA_WEB]);
			$o->setVentaMercadolibre($fila[self::GEN_ATTR_MIN_VENTA_MERCADOLIBRE]);
			$o->setVentaMayorista($fila[self::GEN_ATTR_MIN_VENTA_MAYORISTA]);
			$o->setGralTipoIvaVenta($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA]);
			$o->setGralTipoIvaVentaZ($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA_Z]);
			$o->setGralTipoIvaCompra($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA]);
			$o->setGralTipoIvaCompraZ($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA_Z]);
			$o->setProporcionIva($fila[self::GEN_ATTR_MIN_PROPORCION_IVA]);
			$o->setInsTipoInsumoId($fila[self::GEN_ATTR_MIN_INS_TIPO_INSUMO_ID]);
			$o->setInsTipoFabricanteId($fila[self::GEN_ATTR_MIN_INS_TIPO_FABRICANTE_ID]);
			$o->setNotasInternas($fila[self::GEN_ATTR_MIN_NOTAS_INTERNAS]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setDatosMigracion($fila[self::GEN_ATTR_MIN_DATOS_MIGRACION]);
			$o->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
			$o->setClavesAtributos($fila[self::GEN_ATTR_MIN_CLAVES_ATRIBUTOS]);
			$o->setClavesTienda($fila[self::GEN_ATTR_MIN_CLAVES_TIENDA]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BInsInsumo */ 	
	public function control(){
            $error = new DbError();
        
                // ---------------------------------------------------------------------
                // descripcion
                // ---------------------------------------------------------------------
                if (!Ctrl::esVacio(trim($this->getDescripcion()))) {
                    if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                        $error->addError(505, 'Descripcion', 'descripcion');
                    }else{
                        $o = self::getOxDescripcion(trim($this->getDescripcion()));
                        if ($o && $o->getId() != $this->getId()) {
                            $error->addError(140, 'Descripcion', 'descripcion');
                        }                
                    }
                } else {
                    $error->addError(100, 'Descripcion', 'descripcion');
                }
            
                // ---------------------------------------------------------------------
                // codigo
                // ---------------------------------------------------------------------
                if (!Ctrl::esVacio(trim($this->getCodigo()))) {
                    if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                        $error->addError(505, 'Codigo', 'codigo');
                    }else{
                        $o = self::getOxCodigo(trim($this->getCodigo()));
                        if ($o && $o->getId() != $this->getId()) {
                            $error->addError(140, 'Codigo', 'codigo');
                        }                
                    }
                } else {
                    //$error->addError(100, 'Codigo', 'codigo');
                }
            
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BInsInsumo */ 	
	public function cambiarEstado(){
            $sql = "UPDATE ".self::GEN_TABLA." SET ".self::GEN_ATTR_MIN_ESTADO." = ".$this->getEstado()." WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
            
            // -----------------------------------------------------------------
            // inicializa registro de auditoria
            // -----------------------------------------------------------------
            $us_usuario_auditoria = UsUsuarioAuditoria::setRegistrarAuditoria($tabla = self::GEN_TABLA, $clase = self::GEN_CLASE, $o = $this, $accion = UsUsuarioAuditoria::ACCION_UPDATE_ESTADO, $comando = $sql);
            // -----------------------------------------------------------------
        
            $ejec = new Ejecucion();
            $ejec->setSql($sql);
            $ejec->execute();
            
            // -----------------------------------------------------------------
            // confirma registro de auditoria
            // -----------------------------------------------------------------
            if($us_usuario_auditoria){
                $us_usuario_auditoria->setConfirmarAuditoria($clase = self::GEN_CLASE, $o = $this);
            }
            // -----------------------------------------------------------------
	}

	/* Save de BInsInsumo */ 	
	public function save($array_datos_auditoria = false){
            $ejec = new Ejecucion();
            if(!isset($this->id)){
            
                if($array_datos_auditoria){
                    // ---------------------------------------------------------
                    // se toman datos desde el array de auditoria
                    // ---------------------------------------------------------
                    $this->creado = $array_datos_auditoria['creado'];
                    $this->modificado = $array_datos_auditoria['modificado'];				
                    $this->creado_por = $array_datos_auditoria['creado_por'];
                    $this->modificado_por = $array_datos_auditoria['modificado_por'];                    
                }else{
                    // ---------------------------------------------------------
                    // se deducen datos de acuerdo al contexto
                    // ---------------------------------------------------------
                    $this->creado = Gral::getFechaHoraActual();
                    $this->modificado = Gral::getFechaHoraActual();				
                    if(UsUsuario::autenticado()) $this->creado_por = UsUsuario::autenticado()->getId(); else $this->creado_por = 'null';
                    if(UsUsuario::autenticado()) $this->modificado_por = UsUsuario::autenticado()->getId(); else $this->modificado_por = 'null';	
                }            
                    
                $sql = "
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_INS_CATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_INS_MATRIZ_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_WEB."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_MARCA."
						, ".self::GEN_ATTR_MIN_CODIGO_INTERNO."
						, ".self::GEN_ATTR_MIN_CODIGO_IMPORTACION."
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA."
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA_INTERNO."
						, ".self::GEN_ATTR_MIN_URL_TIENDA."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID."
						, ".self::GEN_ATTR_MIN_ES_COMPRABLE."
						, ".self::GEN_ATTR_MIN_ES_CONSUMIBLE."
						, ".self::GEN_ATTR_MIN_ES_VENDIBLE."
						, ".self::GEN_ATTR_MIN_ES_FABRICABLE."
						, ".self::GEN_ATTR_MIN_ES_TRANSFORMABLE_ORIGEN."
						, ".self::GEN_ATTR_MIN_ES_TRANSFORMABLE_DESTINO."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_INS_TIPO_CONSUMO_ID."
						, ".self::GEN_ATTR_MIN_RETORNABLE."
						, ".self::GEN_ATTR_MIN_IDENTIFICABLE."
						, ".self::GEN_ATTR_MIN_CONTROL_STOCK."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO."
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO."
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO."
						, ".self::GEN_ATTR_MIN_CANTIDAD_MAXIMA_PEDIDO."
						, ".self::GEN_ATTR_MIN_INS_TIPO_NECESIDAD_ID."
						, ".self::GEN_ATTR_MIN_INS_NIVEL_APROVISIONAMIENTO_ID."
						, ".self::GEN_ATTR_MIN_HEREDA_MARCAS."
						, ".self::GEN_ATTR_MIN_VENTA_WEB."
						, ".self::GEN_ATTR_MIN_VENTA_MERCADOLIBRE."
						, ".self::GEN_ATTR_MIN_VENTA_MAYORISTA."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA_Z."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA_Z."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA."
						, ".self::GEN_ATTR_MIN_INS_TIPO_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_INS_TIPO_FABRICANTE_ID."
						, ".self::GEN_ATTR_MIN_NOTAS_INTERNAS."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION."
						, ".self::GEN_ATTR_MIN_CLAVES."
						, ".self::GEN_ATTR_MIN_CLAVES_ATRIBUTOS."
						, ".self::GEN_ATTR_MIN_CLAVES_TIENDA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_insumo_seq'), 
                ".$this->getInsCategoriaId()."
						, ".$this->getInsMatrizId()."
						, '".$this->getDescripcion()."'
						, ".$this->getInsMarcaId()."
						, '".$this->getDescripcionCorta()."'
						, '".$this->getDescripcionWeb()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoMarca()."'
						, '".$this->getCodigoInterno()."'
						, '".$this->getCodigoImportacion()."'
						, '".$this->getCodigoBarra()."'
						, '".$this->getCodigoBarraInterno()."'
						, '".$this->getUrlTienda()."'
						, ".$this->getInsUnidadMedidaId()."
						, ".$this->getEsComprable()."
						, ".$this->getEsConsumible()."
						, ".$this->getEsVendible()."
						, ".$this->getEsFabricable()."
						, ".$this->getEsTransformableOrigen()."
						, ".$this->getEsTransformableDestino()."
						, ".$this->getInsUnidadMedidaPedidoId()."
						, ".$this->getInsTipoConsumoId()."
						, ".$this->getRetornable()."
						, ".$this->getIdentificable()."
						, ".$this->getControlStock()."
						, '".$this->getPuntoMinimo()."'
						, '".$this->getPuntoPedido()."'
						, '".$this->getPuntoMaximo()."'
						, '".$this->getCantidadMaximaPedido()."'
						, ".$this->getInsTipoNecesidadId()."
						, ".$this->getInsNivelAprovisionamientoId()."
						, ".$this->getHeredaMarcas()."
						, ".$this->getVentaWeb()."
						, ".$this->getVentaMercadolibre()."
						, ".$this->getVentaMayorista()."
						, ".$this->getGralTipoIvaVenta()."
						, ".$this->getGralTipoIvaVentaZ()."
						, ".$this->getGralTipoIvaCompra()."
						, ".$this->getGralTipoIvaCompraZ()."
						, ".$this->getProporcionIva()."
						, ".$this->getInsTipoInsumoId()."
						, ".$this->getInsTipoFabricanteId()."
						, '".$this->getNotasInternas()."'
						, '".$this->getObservacion()."'
						, '".$this->getDatosMigracion()."'
						, '".$this->getClaves()."'
						, '".$this->getClavesAtributos()."'
						, '".$this->getClavesTienda()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_insumo_seq')";
            
                // -----------------------------------------------------------------
                // inicializa registro de auditoria
                // -----------------------------------------------------------------
                $us_usuario_auditoria = UsUsuarioAuditoria::setRegistrarAuditoria($tabla = self::GEN_TABLA, $clase = self::GEN_CLASE, $o = $this, $accion = UsUsuarioAuditoria::ACCION_INSERT, $comando = $sql, $o_before = false);
                // -----------------------------------------------------------------

            }else{
                
                if($array_datos_auditoria){
                    // ---------------------------------------------------------
                    // se toman datos desde el array de auditoria
                    // ---------------------------------------------------------
                    $this->modificado = $array_datos_auditoria['modificado'];				
                    $this->modificado_por = $array_datos_auditoria['modificado_por'];                    
                }else{
                    // ---------------------------------------------------------
                    // se deducen datos de acuerdo al contexto
                    // ---------------------------------------------------------
                    $this->modificado = Gral::getFechaHoraActual();				
                    if(UsUsuario::autenticado()) $this->modificado_por = UsUsuario::autenticado()->getId(); else $this->modificado_por = 'null';	
                }            

                $sql = "
				 UPDATE 
                 
				 ".InsInsumo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_INS_CATEGORIA_ID." = ".$this->getInsCategoriaId()."
						, ".self::GEN_ATTR_MIN_INS_MATRIZ_ID." = ".$this->getInsMatrizId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID." = ".$this->getInsMarcaId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_WEB." = '".$this->getDescripcionWeb()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_MARCA." = '".$this->getCodigoMarca()."'
						, ".self::GEN_ATTR_MIN_CODIGO_INTERNO." = '".$this->getCodigoInterno()."'
						, ".self::GEN_ATTR_MIN_CODIGO_IMPORTACION." = '".$this->getCodigoImportacion()."'
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA." = '".$this->getCodigoBarra()."'
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA_INTERNO." = '".$this->getCodigoBarraInterno()."'
						, ".self::GEN_ATTR_MIN_URL_TIENDA." = '".$this->getUrlTienda()."'
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID." = ".$this->getInsUnidadMedidaId()."
						, ".self::GEN_ATTR_MIN_ES_COMPRABLE." = ".$this->getEsComprable()."
						, ".self::GEN_ATTR_MIN_ES_CONSUMIBLE." = ".$this->getEsConsumible()."
						, ".self::GEN_ATTR_MIN_ES_VENDIBLE." = ".$this->getEsVendible()."
						, ".self::GEN_ATTR_MIN_ES_FABRICABLE." = ".$this->getEsFabricable()."
						, ".self::GEN_ATTR_MIN_ES_TRANSFORMABLE_ORIGEN." = ".$this->getEsTransformableOrigen()."
						, ".self::GEN_ATTR_MIN_ES_TRANSFORMABLE_DESTINO." = ".$this->getEsTransformableDestino()."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_PEDIDO_ID." = ".$this->getInsUnidadMedidaPedidoId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_CONSUMO_ID." = ".$this->getInsTipoConsumoId()."
						, ".self::GEN_ATTR_MIN_RETORNABLE." = ".$this->getRetornable()."
						, ".self::GEN_ATTR_MIN_IDENTIFICABLE." = ".$this->getIdentificable()."
						, ".self::GEN_ATTR_MIN_CONTROL_STOCK." = ".$this->getControlStock()."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO." = '".$this->getPuntoMinimo()."'
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO." = '".$this->getPuntoPedido()."'
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO." = '".$this->getPuntoMaximo()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_MAXIMA_PEDIDO." = '".$this->getCantidadMaximaPedido()."'
						, ".self::GEN_ATTR_MIN_INS_TIPO_NECESIDAD_ID." = ".$this->getInsTipoNecesidadId()."
						, ".self::GEN_ATTR_MIN_INS_NIVEL_APROVISIONAMIENTO_ID." = ".$this->getInsNivelAprovisionamientoId()."
						, ".self::GEN_ATTR_MIN_HEREDA_MARCAS." = ".$this->getHeredaMarcas()."
						, ".self::GEN_ATTR_MIN_VENTA_WEB." = ".$this->getVentaWeb()."
						, ".self::GEN_ATTR_MIN_VENTA_MERCADOLIBRE." = ".$this->getVentaMercadolibre()."
						, ".self::GEN_ATTR_MIN_VENTA_MAYORISTA." = ".$this->getVentaMayorista()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA." = ".$this->getGralTipoIvaVenta()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA_Z." = ".$this->getGralTipoIvaVentaZ()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA." = ".$this->getGralTipoIvaCompra()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA_Z." = ".$this->getGralTipoIvaCompraZ()."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA." = ".$this->getProporcionIva()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_INSUMO_ID." = ".$this->getInsTipoInsumoId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_FABRICANTE_ID." = ".$this->getInsTipoFabricanteId()."
						, ".self::GEN_ATTR_MIN_NOTAS_INTERNAS." = '".$this->getNotasInternas()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION." = '".$this->getDatosMigracion()."'
						, ".self::GEN_ATTR_MIN_CLAVES." = '".$this->getClaves()."'
						, ".self::GEN_ATTR_MIN_CLAVES_ATRIBUTOS." = '".$this->getClavesAtributos()."'
						, ".self::GEN_ATTR_MIN_CLAVES_TIENDA." = '".$this->getClavesTienda()."'
						, ".self::GEN_ATTR_MIN_ORDEN." = ".$this->getOrden()."
						, ".self::GEN_ATTR_MIN_ESTADO." = ".$this->getEstado()."
						, ".self::GEN_ATTR_MIN_MODIFICADO." = '".$this->getModificado()."'
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR." = ".$this->getModificadoPor()."
				 WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
                    
                // -----------------------------------------------------------------
                // inicializa registro de auditoria
                // -----------------------------------------------------------------
                $us_usuario_auditoria = UsUsuarioAuditoria::setRegistrarAuditoria($tabla = self::GEN_TABLA, $clase = self::GEN_CLASE, $o = $this, $accion = UsUsuarioAuditoria::ACCION_UPDATE, $comando = $sql, $o_before);
                // -----------------------------------------------------------------
            }
            //Gral::echoSqlSentence($sql);
            
            $ejec->setSql($sql);
            $ejec->execute();

            if(!isset($this->id)){ $this->setId($ejec->getUltimoId(), false); }

            // -----------------------------------------------------------------
            // confirma registro de auditoria
            // -----------------------------------------------------------------
            if($us_usuario_auditoria){
                $us_usuario_auditoria->setConfirmarAuditoria($clase = self::GEN_CLASE, $o = $this);
            }
            // -----------------------------------------------------------------

            return true;

	}
	
	public function saveMigracion($mantener_datos_creado = false){
            $ejec = new Ejecucion();

            $o = self::getOxId($this->id);

            if(!$o){
                if(!$mantener_datos_creado){
                    $this->creado = Gral::getFechaHoraActual();
                    $this->modificado = Gral::getFechaHoraActual();				
                    if(UsUsuario::autenticado()) $this->creado_por = UsUsuario::autenticado()->getId(); else $this->creado_por = 'null';
                    if(UsUsuario::autenticado()) $this->modificado_por = UsUsuario::autenticado()->getId(); else $this->modificado_por = 'null';	
                }
                $sql = "
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_INS_CATEGORIA_ID."
						, ".self::GEN_ATTR_MIN_INS_MATRIZ_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_WEB."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_MARCA."
						, ".self::GEN_ATTR_MIN_CODIGO_INTERNO."
						, ".self::GEN_ATTR_MIN_CODIGO_IMPORTACION."
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA."
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA_INTERNO."
						, ".self::GEN_ATTR_MIN_URL_TIENDA."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID."
						, ".self::GEN_ATTR_MIN_ES_COMPRABLE."
						, ".self::GEN_ATTR_MIN_ES_CONSUMIBLE."
						, ".self::GEN_ATTR_MIN_ES_VENDIBLE."
						, ".self::GEN_ATTR_MIN_ES_FABRICABLE."
						, ".self::GEN_ATTR_MIN_ES_TRANSFORMABLE_ORIGEN."
						, ".self::GEN_ATTR_MIN_ES_TRANSFORMABLE_DESTINO."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_INS_TIPO_CONSUMO_ID."
						, ".self::GEN_ATTR_MIN_RETORNABLE."
						, ".self::GEN_ATTR_MIN_IDENTIFICABLE."
						, ".self::GEN_ATTR_MIN_CONTROL_STOCK."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO."
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO."
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO."
						, ".self::GEN_ATTR_MIN_CANTIDAD_MAXIMA_PEDIDO."
						, ".self::GEN_ATTR_MIN_INS_TIPO_NECESIDAD_ID."
						, ".self::GEN_ATTR_MIN_INS_NIVEL_APROVISIONAMIENTO_ID."
						, ".self::GEN_ATTR_MIN_HEREDA_MARCAS."
						, ".self::GEN_ATTR_MIN_VENTA_WEB."
						, ".self::GEN_ATTR_MIN_VENTA_MERCADOLIBRE."
						, ".self::GEN_ATTR_MIN_VENTA_MAYORISTA."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA_Z."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA_Z."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA."
						, ".self::GEN_ATTR_MIN_INS_TIPO_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_INS_TIPO_FABRICANTE_ID."
						, ".self::GEN_ATTR_MIN_NOTAS_INTERNAS."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION."
						, ".self::GEN_ATTR_MIN_CLAVES."
						, ".self::GEN_ATTR_MIN_CLAVES_ATRIBUTOS."
						, ".self::GEN_ATTR_MIN_CLAVES_TIENDA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getInsCategoriaId()."
						, ".$this->getInsMatrizId()."
						, '".$this->getDescripcion()."'
						, ".$this->getInsMarcaId()."
						, '".$this->getDescripcionCorta()."'
						, '".$this->getDescripcionWeb()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoMarca()."'
						, '".$this->getCodigoInterno()."'
						, '".$this->getCodigoImportacion()."'
						, '".$this->getCodigoBarra()."'
						, '".$this->getCodigoBarraInterno()."'
						, '".$this->getUrlTienda()."'
						, ".$this->getInsUnidadMedidaId()."
						, ".$this->getEsComprable()."
						, ".$this->getEsConsumible()."
						, ".$this->getEsVendible()."
						, ".$this->getEsFabricable()."
						, ".$this->getEsTransformableOrigen()."
						, ".$this->getEsTransformableDestino()."
						, ".$this->getInsUnidadMedidaPedidoId()."
						, ".$this->getInsTipoConsumoId()."
						, ".$this->getRetornable()."
						, ".$this->getIdentificable()."
						, ".$this->getControlStock()."
						, '".$this->getPuntoMinimo()."'
						, '".$this->getPuntoPedido()."'
						, '".$this->getPuntoMaximo()."'
						, '".$this->getCantidadMaximaPedido()."'
						, ".$this->getInsTipoNecesidadId()."
						, ".$this->getInsNivelAprovisionamientoId()."
						, ".$this->getHeredaMarcas()."
						, ".$this->getVentaWeb()."
						, ".$this->getVentaMercadolibre()."
						, ".$this->getVentaMayorista()."
						, ".$this->getGralTipoIvaVenta()."
						, ".$this->getGralTipoIvaVentaZ()."
						, ".$this->getGralTipoIvaCompra()."
						, ".$this->getGralTipoIvaCompraZ()."
						, ".$this->getProporcionIva()."
						, ".$this->getInsTipoInsumoId()."
						, ".$this->getInsTipoFabricanteId()."
						, '".$this->getNotasInternas()."'
						, '".$this->getObservacion()."'
						, '".$this->getDatosMigracion()."'
						, '".$this->getClaves()."'
						, '".$this->getClavesAtributos()."'
						, '".$this->getClavesTienda()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    )";
		}else{
                    if(!$mantener_datos_creado){                
                        $this->modificado = Gral::getFechaHoraActual();
                        if(UsUsuario::autenticado()) $this->modificado_por = UsUsuario::autenticado()->getId(); else $this->modificado_por = 'null';
                    }
                    
                    $sql = "
				 UPDATE 
                     
				 ".InsInsumo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_INS_CATEGORIA_ID." = ".$this->getInsCategoriaId()."
						, ".self::GEN_ATTR_MIN_INS_MATRIZ_ID." = ".$this->getInsMatrizId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_INS_MARCA_ID." = ".$this->getInsMarcaId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_WEB." = '".$this->getDescripcionWeb()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_MARCA." = '".$this->getCodigoMarca()."'
						, ".self::GEN_ATTR_MIN_CODIGO_INTERNO." = '".$this->getCodigoInterno()."'
						, ".self::GEN_ATTR_MIN_CODIGO_IMPORTACION." = '".$this->getCodigoImportacion()."'
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA." = '".$this->getCodigoBarra()."'
						, ".self::GEN_ATTR_MIN_CODIGO_BARRA_INTERNO." = '".$this->getCodigoBarraInterno()."'
						, ".self::GEN_ATTR_MIN_URL_TIENDA." = '".$this->getUrlTienda()."'
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID." = ".$this->getInsUnidadMedidaId()."
						, ".self::GEN_ATTR_MIN_ES_COMPRABLE." = ".$this->getEsComprable()."
						, ".self::GEN_ATTR_MIN_ES_CONSUMIBLE." = ".$this->getEsConsumible()."
						, ".self::GEN_ATTR_MIN_ES_VENDIBLE." = ".$this->getEsVendible()."
						, ".self::GEN_ATTR_MIN_ES_FABRICABLE." = ".$this->getEsFabricable()."
						, ".self::GEN_ATTR_MIN_ES_TRANSFORMABLE_ORIGEN." = ".$this->getEsTransformableOrigen()."
						, ".self::GEN_ATTR_MIN_ES_TRANSFORMABLE_DESTINO." = ".$this->getEsTransformableDestino()."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_PEDIDO_ID." = ".$this->getInsUnidadMedidaPedidoId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_CONSUMO_ID." = ".$this->getInsTipoConsumoId()."
						, ".self::GEN_ATTR_MIN_RETORNABLE." = ".$this->getRetornable()."
						, ".self::GEN_ATTR_MIN_IDENTIFICABLE." = ".$this->getIdentificable()."
						, ".self::GEN_ATTR_MIN_CONTROL_STOCK." = ".$this->getControlStock()."
						, ".self::GEN_ATTR_MIN_PUNTO_MINIMO." = '".$this->getPuntoMinimo()."'
						, ".self::GEN_ATTR_MIN_PUNTO_PEDIDO." = '".$this->getPuntoPedido()."'
						, ".self::GEN_ATTR_MIN_PUNTO_MAXIMO." = '".$this->getPuntoMaximo()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_MAXIMA_PEDIDO." = '".$this->getCantidadMaximaPedido()."'
						, ".self::GEN_ATTR_MIN_INS_TIPO_NECESIDAD_ID." = ".$this->getInsTipoNecesidadId()."
						, ".self::GEN_ATTR_MIN_INS_NIVEL_APROVISIONAMIENTO_ID." = ".$this->getInsNivelAprovisionamientoId()."
						, ".self::GEN_ATTR_MIN_HEREDA_MARCAS." = ".$this->getHeredaMarcas()."
						, ".self::GEN_ATTR_MIN_VENTA_WEB." = ".$this->getVentaWeb()."
						, ".self::GEN_ATTR_MIN_VENTA_MERCADOLIBRE." = ".$this->getVentaMercadolibre()."
						, ".self::GEN_ATTR_MIN_VENTA_MAYORISTA." = ".$this->getVentaMayorista()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA." = ".$this->getGralTipoIvaVenta()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA_Z." = ".$this->getGralTipoIvaVentaZ()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA." = ".$this->getGralTipoIvaCompra()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA_Z." = ".$this->getGralTipoIvaCompraZ()."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA." = ".$this->getProporcionIva()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_INSUMO_ID." = ".$this->getInsTipoInsumoId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_FABRICANTE_ID." = ".$this->getInsTipoFabricanteId()."
						, ".self::GEN_ATTR_MIN_NOTAS_INTERNAS." = '".$this->getNotasInternas()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_DATOS_MIGRACION." = '".$this->getDatosMigracion()."'
						, ".self::GEN_ATTR_MIN_CLAVES." = '".$this->getClaves()."'
						, ".self::GEN_ATTR_MIN_CLAVES_ATRIBUTOS." = '".$this->getClavesAtributos()."'
						, ".self::GEN_ATTR_MIN_CLAVES_TIENDA." = '".$this->getClavesTienda()."'
						, ".self::GEN_ATTR_MIN_ORDEN." = ".$this->getOrden()."
						, ".self::GEN_ATTR_MIN_ESTADO." = ".$this->getEstado()."
						, ".self::GEN_ATTR_MIN_MODIFICADO." = '".$this->getModificado()."'
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR." = ".$this->getModificadoPor()."
				 WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
		}
		$ejec->setSql($sql);
		$ejec->execute();
                
		if(!isset($this->id)){ $this->setId($ejec->getUltimoId(), false); }		

                // -------------------------------------------------------------
                // se actualiza la secuencia con el valor del id mas alto
                // -------------------------------------------------------------
                $sql_alter_sequence = "SELECT setval('".self::GEN_TABLA."_seq', (SELECT max(id) FROM ".self::GEN_TABLA."));";
                $ejec->setSql($sql_alter_sequence);
		$ejec->execute();
                // -------------------------------------------------------------                

		return true;

	}
	
        /**
        * 
        */
	public function saveDesdeBackend(){
            $this->save();
            $this->execBDOtimization();
	}
	
        /**
        * 
        */
	public function saveDesdeRelacion(){
            $this->save();
            $this->execBDOtimization();
	}
	
        /**
        * 
        */
	public function saveDesdeVinculo(){
            $this->save();
            $this->execBDOtimization();
	}
	
        /**
        * Metodo que guarda el objeto sin afectar datos de auditoria.
        * Generalmente usado para procesos internos que modifican algun campo.
        */
	public function saveDesdeProceso(){
        
            // -----------------------------------------------------------------
            // se mantentienen los datos de auditoria
            // -----------------------------------------------------------------
            $creado_por = $this->getCreadoPor();
            $creado = $this->getCreado();
            $modificado_por = $this->getModificadoPor();
            $modificado = $this->getModificado();
            
            $array = array(
                'creado_por' => $creado_por,
                'creado' => $creado,
                'modificado_por' => $modificado_por,
                'modificado' => $modificado,
            );
            $this->save($array);
            //$this->execBDOtimization();

	}
	
        /**
        * Metodo que guarda el objeto afectando datos de auditoria con datos informados.
        * Generalmente utilizados en aplicaciones externas que podrian operar sin internet.
        */
	public function saveDesdeSincronizacion($creado_por, $creado, $modificado_por, $modificado){
            
            // -----------------------------------------------------------------
            // Se utilizan los datos de auditoria recibidos por parametro
            // -----------------------------------------------------------------
            $array = array(
                'creado_por' => $creado_por,
                'creado' => $creado,
                'modificado_por' => $modificado_por,
                'modificado' => $modificado,
            );
            $this->save($array);
            //$this->execBDOtimization();
	}
	
	public function execBDOtimization(){

            // -------------------------------------------------------------
            // se fuerza el vacuum de la tabla (solo para PostgreSQL)
            // -------------------------------------------------------------
            $ejec = new Ejecucion();
            $sql_vacuum = "VACUUM (ANALYZE) ".self::GEN_TABLA.";";
            $ejec->setSql($sql_vacuum);
            $ejec->execute();
            // -------------------------------------------------------------                
                
	}
	
        /**
        * 
        */
	public function saveDesdeListado($campo, $valor){
            $this->saveCampoValor($campo, $valor);
	}
	
        /**
        * 
        */
	public function saveCampoValor($campo, $valor){
            $us_usuario = UsUsuario::autenticado();

            // ---------------------------------------------------------
            // se deducen datos de acuerdo al contexto
            // ---------------------------------------------------------
            $modificado = Gral::getFechaHoraActual();	
            $modificado_por = 'null';
            if($us_usuario){ 
                $modificado_por = $us_usuario->getId();
            }

            $sql = "UPDATE ".self::GEN_TABLA." SET "
                    .$campo." = '".$valor."', "
                    .self::GEN_ATTR_MIN_MODIFICADO." = '".$modificado."', "
                    .self::GEN_ATTR_MIN_MODIFICADO_POR." = ".$modificado_por." "
                    . "WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
            //Gral::echoSqlSentence($sql);

            $ejec = new Ejecucion();
            $ejec->setSql($sql);
            $ejec->execute();
	}
	
        /**
        * 
        */
	static function setInicializarRegistroSimple(){
            $o = new InsInsumo();
            $o->saveDesdeBackend();

            return $o;
	}
	
        /**
        * 
        */
	static function getSaneamientoParaRegistroSimple($campo, $valor, $type = '', $mascara = ''){
        
            // -----------------------------------------------------------------
            // se sanean espacios laterales en el valor
            // -----------------------------------------------------------------            
            $valor = trim($valor);
        
            // agregar codigo aqui ...
            
            return $valor;
	}

	/* Delete de BInsInsumo */ 	
	public function delete(){
            $sql = "DELETE FROM ".self::GEN_TABLA." WHERE ".self::GEN_ATTR_MIN_ID." = ".$this->getId();
        
            // -----------------------------------------------------------------
            // inicializa registro de auditoria
            // -----------------------------------------------------------------
            $us_usuario_auditoria = UsUsuarioAuditoria::setRegistrarAuditoria($tabla = self::GEN_TABLA, $clase = self::GEN_CLASE, $o = $this, $accion = UsUsuarioAuditoria::ACCION_DELETE, $comando = $sql, $o_before);
            // -----------------------------------------------------------------

            $ejec = new Ejecucion();
            $ejec->setSql($sql);
            $ejec->execute();
            
            // -----------------------------------------------------------------
            // confirma registro de auditoria
            // -----------------------------------------------------------------
            if($us_usuario_auditoria){
                $us_usuario_auditoria->setConfirmarAuditoria($clase = self::GEN_CLASE, $o = $this);
            }
            // -----------------------------------------------------------------            
	}
	
	public function deleteDesdeRelacion(){
            $this->delete();
	}
	
	public function deleteDesdeVinculo(){
            $this->delete();
	}

	/* Delete de todas las clases relacionadas */ 	
	public function deleteAll(){
	
            // se elimina la coleccion de InsInsumoEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoPrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoPrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoInsMarcas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoInsMarca::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoInsMarcas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoInstancias relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoInstancia::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoInstancias(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoBultos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoBulto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoBultos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoPanPanols relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoPanPanols(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoVehModelos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoVehModelo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoVehModelos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoComposicions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoComposicion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoComposicions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoVinculados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoVinculado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoVinculados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoSimilars relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoSimilar::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoSimilars(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsVentaWebInfos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsVentaWebInfo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsVentaWebInfos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsVentaMlInfos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsVentaMlInfos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoCostos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoCosto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoCostos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoInsEtiquetas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoInsEtiqueta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoInsEtiquetas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoDestinoTransformacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoDestinoTransformacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoDestinoTransformacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoInsAtributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoInsAtributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoInsAtributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsStockTransformacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockTransformacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockTransformacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsStockTransformacionDestinos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockTransformacionDestino::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockTransformacionDestinos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoInsInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoInsInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaCreditoVtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPoliticaDescuentoInsInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPoliticaDescuentoInsInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPoliticaDescuentoInsInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsStockMovimientos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockMovimientos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsStockResumens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockResumen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockResumens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdiPedidos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdiPedido::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdiPedidos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdiPedidoAgrupacionItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdiPedidoAgrupacionItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdiPedidoAgrupacionItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCotizacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCotizacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcAgrupacionItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcAgrupacionItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoPdeFacturaPdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeFacturaPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoPdeFacturaPdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeFacturaPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberVtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjusteVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjusteVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de SldSliders relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(SldSlider::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getSldSliders(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdProcesoProductivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdProcesoProductivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdProcesoProductivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdOrdenTrabajos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarInsInsumo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
		// inicializacion de variables
		if(is_null($paginador)){
                    $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
		}
		if(is_null($criterio)){
                    $criterio = new Criterio(self::SES_CRITERIOS);
                    if(!is_null($estado)){
                        if($estado){
                            $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                        }else{
                            $criterio->add(self::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                        }
                    }
                    $criterio->addTabla(self::GEN_TABLA);
                    $criterio = InsInsumo::setAplicarFiltrosDeAlcance($criterio);

                    if(is_array($arr_ordens)){
                        foreach($arr_ordens as $arr_orden){
                            $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                        }
                    }

	
                    $criterio->addOrden(self::GEN_ATTR_ORDEN, 'asc');                            
                    $criterio->addOrden('2', 'asc');			
                    $criterio->setCriterios();
		}

		$cons = new Consulta();
		$sql = "SELECT ".$criterio->getDistinct()." ".self::GEN_TABLA.".* ".$criterio->getSelects()." FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

		$cons->setSql($sql);
		$cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
		$cons->execute();
                
                //Gral::echoSqlSentence($cons->getSql());

		$paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */
	
		$insinsumos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $insinsumo = new InsInsumo();
                    $insinsumo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $insinsumo->setInsCategoriaId($fila[self::GEN_ATTR_MIN_INS_CATEGORIA_ID]);
			$insinsumo->setInsMatrizId($fila[self::GEN_ATTR_MIN_INS_MATRIZ_ID]);
			$insinsumo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$insinsumo->setInsMarcaId($fila[self::GEN_ATTR_MIN_INS_MARCA_ID]);
			$insinsumo->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$insinsumo->setDescripcionWeb($fila[self::GEN_ATTR_MIN_DESCRIPCION_WEB]);
			$insinsumo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$insinsumo->setCodigoMarca($fila[self::GEN_ATTR_MIN_CODIGO_MARCA]);
			$insinsumo->setCodigoInterno($fila[self::GEN_ATTR_MIN_CODIGO_INTERNO]);
			$insinsumo->setCodigoImportacion($fila[self::GEN_ATTR_MIN_CODIGO_IMPORTACION]);
			$insinsumo->setCodigoBarra($fila[self::GEN_ATTR_MIN_CODIGO_BARRA]);
			$insinsumo->setCodigoBarraInterno($fila[self::GEN_ATTR_MIN_CODIGO_BARRA_INTERNO]);
			$insinsumo->setUrlTienda($fila[self::GEN_ATTR_MIN_URL_TIENDA]);
			$insinsumo->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
			$insinsumo->setEsComprable($fila[self::GEN_ATTR_MIN_ES_COMPRABLE]);
			$insinsumo->setEsConsumible($fila[self::GEN_ATTR_MIN_ES_CONSUMIBLE]);
			$insinsumo->setEsVendible($fila[self::GEN_ATTR_MIN_ES_VENDIBLE]);
			$insinsumo->setEsFabricable($fila[self::GEN_ATTR_MIN_ES_FABRICABLE]);
			$insinsumo->setEsTransformableOrigen($fila[self::GEN_ATTR_MIN_ES_TRANSFORMABLE_ORIGEN]);
			$insinsumo->setEsTransformableDestino($fila[self::GEN_ATTR_MIN_ES_TRANSFORMABLE_DESTINO]);
			$insinsumo->setInsUnidadMedidaPedidoId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_PEDIDO_ID]);
			$insinsumo->setInsTipoConsumoId($fila[self::GEN_ATTR_MIN_INS_TIPO_CONSUMO_ID]);
			$insinsumo->setRetornable($fila[self::GEN_ATTR_MIN_RETORNABLE]);
			$insinsumo->setIdentificable($fila[self::GEN_ATTR_MIN_IDENTIFICABLE]);
			$insinsumo->setControlStock($fila[self::GEN_ATTR_MIN_CONTROL_STOCK]);
			$insinsumo->setPuntoMinimo($fila[self::GEN_ATTR_MIN_PUNTO_MINIMO]);
			$insinsumo->setPuntoPedido($fila[self::GEN_ATTR_MIN_PUNTO_PEDIDO]);
			$insinsumo->setPuntoMaximo($fila[self::GEN_ATTR_MIN_PUNTO_MAXIMO]);
			$insinsumo->setCantidadMaximaPedido($fila[self::GEN_ATTR_MIN_CANTIDAD_MAXIMA_PEDIDO]);
			$insinsumo->setInsTipoNecesidadId($fila[self::GEN_ATTR_MIN_INS_TIPO_NECESIDAD_ID]);
			$insinsumo->setInsNivelAprovisionamientoId($fila[self::GEN_ATTR_MIN_INS_NIVEL_APROVISIONAMIENTO_ID]);
			$insinsumo->setHeredaMarcas($fila[self::GEN_ATTR_MIN_HEREDA_MARCAS]);
			$insinsumo->setVentaWeb($fila[self::GEN_ATTR_MIN_VENTA_WEB]);
			$insinsumo->setVentaMercadolibre($fila[self::GEN_ATTR_MIN_VENTA_MERCADOLIBRE]);
			$insinsumo->setVentaMayorista($fila[self::GEN_ATTR_MIN_VENTA_MAYORISTA]);
			$insinsumo->setGralTipoIvaVenta($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA]);
			$insinsumo->setGralTipoIvaVentaZ($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_VENTA_Z]);
			$insinsumo->setGralTipoIvaCompra($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA]);
			$insinsumo->setGralTipoIvaCompraZ($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_COMPRA_Z]);
			$insinsumo->setProporcionIva($fila[self::GEN_ATTR_MIN_PROPORCION_IVA]);
			$insinsumo->setInsTipoInsumoId($fila[self::GEN_ATTR_MIN_INS_TIPO_INSUMO_ID]);
			$insinsumo->setInsTipoFabricanteId($fila[self::GEN_ATTR_MIN_INS_TIPO_FABRICANTE_ID]);
			$insinsumo->setNotasInternas($fila[self::GEN_ATTR_MIN_NOTAS_INTERNAS]);
			$insinsumo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$insinsumo->setDatosMigracion($fila[self::GEN_ATTR_MIN_DATOS_MIGRACION]);
			$insinsumo->setClaves($fila[self::GEN_ATTR_MIN_CLAVES]);
			$insinsumo->setClavesAtributos($fila[self::GEN_ATTR_MIN_CLAVES_ATRIBUTOS]);
			$insinsumo->setClavesTienda($fila[self::GEN_ATTR_MIN_CLAVES_TIENDA]);
			$insinsumo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$insinsumo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$insinsumo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$insinsumo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$insinsumo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$insinsumo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $insinsumos[] = $insinsumo;
		}
		
		return $insinsumos;
	}	
	

	/* Método getInsInsumos Habilitados */ 	
	static function getInsInsumosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsInsumo::getInsInsumos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsInsumos para listado de Backend */ 	
	static function getInsInsumosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsInsumo::getInsInsumos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsInsumosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsInsumo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsInsumo::getInsInsumos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsInsumos filtrado para select */ 	
	static function getInsInsumosCmbF($paginador = null, $criterio = null){
            $col = InsInsumo::getInsInsumos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsCategoria */ 	
	static function getInsInsumosXInsCategorias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsCategoriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsMatriz */ 	
	static function getInsInsumosXInsMatrizs($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_MATRIZ_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsMatrizId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsMarca */ 	
	static function getInsInsumosXInsMarcas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_MARCA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsMarcaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsUnidadMedida */ 	
	static function getInsInsumosXInsUnidadMedidas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsUnidadMedidaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsUnidadMedidaPedido */ 	
	static function getInsInsumosXInsUnidadMedidaPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_UNIDAD_MEDIDA_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsUnidadMedidaPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsTipoConsumo */ 	
	static function getInsInsumosXInsTipoConsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_TIPO_CONSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsTipoConsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsTipoNecesidad */ 	
	static function getInsInsumosXInsTipoNecesidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_TIPO_NECESIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsTipoNecesidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsNivelAprovisionamiento */ 	
	static function getInsInsumosXInsNivelAprovisionamientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_NIVEL_APROVISIONAMIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsNivelAprovisionamientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsTipoInsumo */ 	
	static function getInsInsumosXInsTipoInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_TIPO_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsTipoInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsInsumos filtrado por una coleccion de objetos foraneos de InsTipoFabricante */ 	
	static function getInsInsumosXInsTipoFabricantes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsInsumo::GEN_ATTR_INS_TIPO_FABRICANTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsInsumo::getInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsTipoFabricanteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ins_insumo_adm.php';
            $url_gestion = 'ins_insumo_gestion.php';
            if(file_exists($url_gestion)){
                $url = $url_gestion;
            }
            $array = array(
                'url' => $url,
                'label' => 'Volver al Listado',
            );

            return ($indice) ? $array[$indice] : $array;		
	}	
	

	/* Metodo que permite configurar el alcance a nivel de registros de los usuarios */ 	
	static function setAplicarFiltrosDeAlcance($criterio){

            // personalizar codigo para determinar el alcance 
            // de un usuario a nivel de registros

            return $criterio;	
	}	
	

	/* Metodo getInsInsumoEnviados */ 	
	public function getInsInsumoEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoEnviado::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoenviado = InsInsumoEnviado::hidratarObjeto($fila);			
                $insinsumoenviados[] = $insinsumoenviado;
            }

            return $insinsumoenviados;
	}	
	

	/* Método getInsInsumoEnviadosBloque para MasInfo */ 	
	public function getInsInsumoEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoEnviados Habilitados */ 	
	public function getInsInsumoEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoEnviado */ 	
	public function getInsInsumoEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoEnviado relacionadas */ 	
	public function deleteInsInsumoEnviados(){
            $obs = $this->getInsInsumoEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoEnviadosCmb() InsInsumoEnviado relacionadas */ 	
	public function getInsInsumoEnviadosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoEnviado::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoEnviado::getInsInsumoEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getInsInsumoImagens */ 	
	public function getInsInsumoImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoImagen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoimagen = InsInsumoImagen::hidratarObjeto($fila);			
                $insinsumoimagens[] = $insinsumoimagen;
            }

            return $insinsumoimagens;
	}	
	

	/* Método getInsInsumoImagensBloque para MasInfo */ 	
	public function getInsInsumoImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoImagens Habilitados */ 	
	public function getInsInsumoImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoImagen */ 	
	public function getInsInsumoImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoImagen relacionadas */ 	
	public function deleteInsInsumoImagens(){
            $obs = $this->getInsInsumoImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoImagensCmb() InsInsumoImagen relacionadas */ 	
	public function getInsInsumoImagensCmb(){
            $c = new Criterio();
            $c->add(InsInsumoImagen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoImagen::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoImagen::getInsInsumoImagensCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsTipoImagens (Coleccion) relacionados a traves de InsInsumoImagen */ 	
	public function getInsTipoImagensXInsInsumoImagen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsTipoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoImagen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoImagen::GEN_TABLA);
            $c->addRealJoin(InsInsumoImagen::GEN_TABLA, InsInsumoImagen::GEN_ATTR_INS_TIPO_IMAGEN_ID, InsTipoImagen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoImagen::getInsTipoImagens($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsTipoImagens relacionados a traves de InsInsumoImagen */ 	
	public function getCantidadInsTipoImagensXInsInsumoImagen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsTipoImagen::GEN_ATTR_ID);
            if($estado){
                $c->add(InsTipoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoImagen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoImagen::GEN_TABLA);
            $c->addRealJoin(InsInsumoImagen::GEN_TABLA, InsInsumoImagen::GEN_ATTR_INS_TIPO_IMAGEN_ID, InsTipoImagen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoImagen::getInsTipoImagens($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsTipoImagen (Objeto) relacionado a traves de InsInsumoImagen */ 	
	public function getInsTipoImagenXInsInsumoImagen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsTipoImagensXInsInsumoImagen($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoPrvProveedors */ 	
	public function getInsInsumoPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoPrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoPrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoPrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoPrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoPrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoprvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoprvproveedor = InsInsumoPrvProveedor::hidratarObjeto($fila);			
                $insinsumoprvproveedors[] = $insinsumoprvproveedor;
            }

            return $insinsumoprvproveedors;
	}	
	

	/* Método getInsInsumoPrvProveedorsBloque para MasInfo */ 	
	public function getInsInsumoPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoPrvProveedors Habilitados */ 	
	public function getInsInsumoPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoPrvProveedor */ 	
	public function getInsInsumoPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoPrvProveedor relacionadas */ 	
	public function deleteInsInsumoPrvProveedors(){
            $obs = $this->getInsInsumoPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoPrvProveedorsCmb() InsInsumoPrvProveedor relacionadas */ 	
	public function getInsInsumoPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoPrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoPrvProveedor::getInsInsumoPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de InsInsumoPrvProveedor */ 	
	public function getPrvProveedorsXInsInsumoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de InsInsumoPrvProveedor */ 	
	public function getCantidadPrvProveedorsXInsInsumoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de InsInsumoPrvProveedor */ 	
	public function getPrvProveedorXInsInsumoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXInsInsumoPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoInsMarcas */ 	
	public function getInsInsumoInsMarcas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoInsMarca::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoInsMarca::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoInsMarca::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoInsMarca::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoInsMarca::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoInsMarca::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoinsmarcas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoinsmarca = InsInsumoInsMarca::hidratarObjeto($fila);			
                $insinsumoinsmarcas[] = $insinsumoinsmarca;
            }

            return $insinsumoinsmarcas;
	}	
	

	/* Método getInsInsumoInsMarcasBloque para MasInfo */ 	
	public function getInsInsumoInsMarcasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoInsMarcas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoInsMarcas Habilitados */ 	
	public function getInsInsumoInsMarcasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoInsMarcas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoInsMarca */ 	
	public function getInsInsumoInsMarca($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoInsMarcas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoInsMarca relacionadas */ 	
	public function deleteInsInsumoInsMarcas(){
            $obs = $this->getInsInsumoInsMarcas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoInsMarcasCmb() InsInsumoInsMarca relacionadas */ 	
	public function getInsInsumoInsMarcasCmb(){
            $c = new Criterio();
            $c->add(InsInsumoInsMarca::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoInsMarca::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoInsMarca::getInsInsumoInsMarcasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsMarcas (Coleccion) relacionados a traves de InsInsumoInsMarca */ 	
	public function getInsMarcasXInsInsumoInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoInsMarca::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMarca::GEN_TABLA);
            $c->addRealJoin(InsInsumoInsMarca::GEN_TABLA, InsInsumoInsMarca::GEN_ATTR_INS_MARCA_ID, InsMarca::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsMarca::getInsMarcas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsMarcas relacionados a traves de InsInsumoInsMarca */ 	
	public function getCantidadInsMarcasXInsInsumoInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsMarca::GEN_ATTR_ID);
            if($estado){
                $c->add(InsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoInsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoInsMarca::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsMarca::GEN_TABLA);
            $c->addRealJoin(InsInsumoInsMarca::GEN_TABLA, InsInsumoInsMarca::GEN_ATTR_INS_MARCA_ID, InsMarca::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsMarca::getInsMarcas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsMarca (Objeto) relacionado a traves de InsInsumoInsMarca */ 	
	public function getInsMarcaXInsInsumoInsMarca($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsMarcasXInsInsumoInsMarca($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoInstancias */ 	
	public function getInsInsumoInstancias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoInstancia::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoInstancia::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoInstancia::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoInstancia::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoInstancia::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoInstancia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoInstancia::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoInstancia::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoinstancias = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoinstancia = InsInsumoInstancia::hidratarObjeto($fila);			
                $insinsumoinstancias[] = $insinsumoinstancia;
            }

            return $insinsumoinstancias;
	}	
	

	/* Método getInsInsumoInstanciasBloque para MasInfo */ 	
	public function getInsInsumoInstanciasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoInstancias($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoInstancias Habilitados */ 	
	public function getInsInsumoInstanciasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoInstancias($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoInstancia */ 	
	public function getInsInsumoInstancia($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoInstancias($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoInstancia relacionadas */ 	
	public function deleteInsInsumoInstancias(){
            $obs = $this->getInsInsumoInstancias();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoInstanciasCmb() InsInsumoInstancia relacionadas */ 	
	public function getInsInsumoInstanciasCmb(){
            $c = new Criterio();
            $c->add(InsInsumoInstancia::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoInstancia::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoInstancia::getInsInsumoInstanciasCmbF(null, $c);
            return $os;
	}

	/* Metodo getInsInsumoBultos */ 	
	public function getInsInsumoBultos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoBulto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoBulto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoBulto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoBulto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoBulto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoBulto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoBulto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumobultos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumobulto = InsInsumoBulto::hidratarObjeto($fila);			
                $insinsumobultos[] = $insinsumobulto;
            }

            return $insinsumobultos;
	}	
	

	/* Método getInsInsumoBultosBloque para MasInfo */ 	
	public function getInsInsumoBultosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoBultos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoBultos Habilitados */ 	
	public function getInsInsumoBultosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoBultos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoBulto */ 	
	public function getInsInsumoBulto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoBultos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoBulto relacionadas */ 	
	public function deleteInsInsumoBultos(){
            $obs = $this->getInsInsumoBultos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoBultosCmb() InsInsumoBulto relacionadas */ 	
	public function getInsInsumoBultosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoBulto::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoBulto::getInsInsumoBultosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsUnidadMedidas (Coleccion) relacionados a traves de InsInsumoBulto */ 	
	public function getInsUnidadMedidasXInsInsumoBulto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsUnidadMedida::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoBulto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsUnidadMedida::GEN_TABLA);
            $c->addRealJoin(InsInsumoBulto::GEN_TABLA, InsInsumoBulto::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, InsUnidadMedida::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsUnidadMedida::getInsUnidadMedidas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsUnidadMedidas relacionados a traves de InsInsumoBulto */ 	
	public function getCantidadInsUnidadMedidasXInsInsumoBulto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsUnidadMedida::GEN_ATTR_ID);
            if($estado){
                $c->add(InsUnidadMedida::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoBulto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsUnidadMedida::GEN_TABLA);
            $c->addRealJoin(InsInsumoBulto::GEN_TABLA, InsInsumoBulto::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, InsUnidadMedida::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsUnidadMedida::getInsUnidadMedidas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsUnidadMedida (Objeto) relacionado a traves de InsInsumoBulto */ 	
	public function getInsUnidadMedidaXInsInsumoBulto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsUnidadMedidasXInsInsumoBulto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoPanPanols */ 	
	public function getInsInsumoPanPanols($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoPanPanol::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoPanPanol::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoPanPanol::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoPanPanol::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoPanPanol::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumopanpanols = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumopanpanol = InsInsumoPanPanol::hidratarObjeto($fila);			
                $insinsumopanpanols[] = $insinsumopanpanol;
            }

            return $insinsumopanpanols;
	}	
	

	/* Método getInsInsumoPanPanolsBloque para MasInfo */ 	
	public function getInsInsumoPanPanolsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoPanPanols($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoPanPanols Habilitados */ 	
	public function getInsInsumoPanPanolsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoPanPanols($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoPanPanol */ 	
	public function getInsInsumoPanPanol($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoPanPanols($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoPanPanol relacionadas */ 	
	public function deleteInsInsumoPanPanols(){
            $obs = $this->getInsInsumoPanPanols();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoPanPanolsCmb() InsInsumoPanPanol relacionadas */ 	
	public function getInsInsumoPanPanolsCmb(){
            $c = new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoPanPanol::getInsInsumoPanPanolsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PanPanols (Coleccion) relacionados a traves de InsInsumoPanPanol */ 	
	public function getPanPanolsXInsInsumoPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addRealJoin(InsInsumoPanPanol::GEN_TABLA, InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanPanol::getPanPanols($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PanPanols relacionados a traves de InsInsumoPanPanol */ 	
	public function getCantidadPanPanolsXInsInsumoPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PanPanol::GEN_ATTR_ID);
            if($estado){
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addRealJoin(InsInsumoPanPanol::GEN_TABLA, InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanPanol::getPanPanols($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PanPanol (Objeto) relacionado a traves de InsInsumoPanPanol */ 	
	public function getPanPanolXInsInsumoPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPanPanolsXInsInsumoPanPanol($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoVehModelos */ 	
	public function getInsInsumoVehModelos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoVehModelo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoVehModelo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoVehModelo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoVehModelo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoVehModelo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoVehModelo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoVehModelo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumovehmodelos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumovehmodelo = InsInsumoVehModelo::hidratarObjeto($fila);			
                $insinsumovehmodelos[] = $insinsumovehmodelo;
            }

            return $insinsumovehmodelos;
	}	
	

	/* Método getInsInsumoVehModelosBloque para MasInfo */ 	
	public function getInsInsumoVehModelosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoVehModelos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoVehModelos Habilitados */ 	
	public function getInsInsumoVehModelosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoVehModelos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoVehModelo */ 	
	public function getInsInsumoVehModelo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoVehModelos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoVehModelo relacionadas */ 	
	public function deleteInsInsumoVehModelos(){
            $obs = $this->getInsInsumoVehModelos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoVehModelosCmb() InsInsumoVehModelo relacionadas */ 	
	public function getInsInsumoVehModelosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoVehModelo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoVehModelo::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoVehModelo::getInsInsumoVehModelosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VehModelos (Coleccion) relacionados a traves de InsInsumoVehModelo */ 	
	public function getVehModelosXInsInsumoVehModelo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VehModelo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoVehModelo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoVehModelo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VehModelo::GEN_TABLA);
            $c->addRealJoin(InsInsumoVehModelo::GEN_TABLA, InsInsumoVehModelo::GEN_ATTR_VEH_MODELO_ID, VehModelo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VehModelo::getVehModelos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VehModelos relacionados a traves de InsInsumoVehModelo */ 	
	public function getCantidadVehModelosXInsInsumoVehModelo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VehModelo::GEN_ATTR_ID);
            if($estado){
                $c->add(VehModelo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoVehModelo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoVehModelo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VehModelo::GEN_TABLA);
            $c->addRealJoin(InsInsumoVehModelo::GEN_TABLA, InsInsumoVehModelo::GEN_ATTR_VEH_MODELO_ID, VehModelo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VehModelo::getVehModelos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VehModelo (Objeto) relacionado a traves de InsInsumoVehModelo */ 	
	public function getVehModeloXInsInsumoVehModelo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVehModelosXInsInsumoVehModelo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoComposicions */ 	
	public function getInsInsumoComposicions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoComposicion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoComposicion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoComposicion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoComposicion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoComposicion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoComposicion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoComposicion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoComposicion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumocomposicions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumocomposicion = InsInsumoComposicion::hidratarObjeto($fila);			
                $insinsumocomposicions[] = $insinsumocomposicion;
            }

            return $insinsumocomposicions;
	}	
	

	/* Método getInsInsumoComposicionsBloque para MasInfo */ 	
	public function getInsInsumoComposicionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoComposicions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoComposicions Habilitados */ 	
	public function getInsInsumoComposicionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoComposicions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoComposicion */ 	
	public function getInsInsumoComposicion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoComposicions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoComposicion relacionadas */ 	
	public function deleteInsInsumoComposicions(){
            $obs = $this->getInsInsumoComposicions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoComposicionsCmb() InsInsumoComposicion relacionadas */ 	
	public function getInsInsumoComposicionsCmb(){
            $c = new Criterio();
            $c->add(InsInsumoComposicion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoComposicion::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoComposicion::getInsInsumoComposicionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoComposicion */ 	
	public function getInsInsumosXInsInsumoComposicion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoComposicion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoComposicion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoComposicion::GEN_TABLA, InsInsumoComposicion::GEN_ATTR_INS_INSUMO_COMPOSICION, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoComposicion */ 	
	public function getCantidadInsInsumosXInsInsumoComposicion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoComposicion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoComposicion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoComposicion::GEN_TABLA, InsInsumoComposicion::GEN_ATTR_INS_INSUMO_COMPOSICION, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoComposicion */ 	
	public function getInsInsumoXInsInsumoComposicion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoComposicion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoVinculados */ 	
	public function getInsInsumoVinculados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoVinculado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoVinculado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoVinculado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoVinculado::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoVinculado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoVinculado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoVinculado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumovinculados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumovinculado = InsInsumoVinculado::hidratarObjeto($fila);			
                $insinsumovinculados[] = $insinsumovinculado;
            }

            return $insinsumovinculados;
	}	
	

	/* Método getInsInsumoVinculadosBloque para MasInfo */ 	
	public function getInsInsumoVinculadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoVinculados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoVinculados Habilitados */ 	
	public function getInsInsumoVinculadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoVinculados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoVinculado */ 	
	public function getInsInsumoVinculado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoVinculados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoVinculado relacionadas */ 	
	public function deleteInsInsumoVinculados(){
            $obs = $this->getInsInsumoVinculados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoVinculadosCmb() InsInsumoVinculado relacionadas */ 	
	public function getInsInsumoVinculadosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoVinculado::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoVinculado::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoVinculado::getInsInsumoVinculadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoVinculado */ 	
	public function getInsInsumosXInsInsumoVinculado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoVinculado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoVinculado::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoVinculado::GEN_TABLA, InsInsumoVinculado::GEN_ATTR_INS_INSUMO_VINCULADO, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoVinculado */ 	
	public function getCantidadInsInsumosXInsInsumoVinculado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoVinculado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoVinculado::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoVinculado::GEN_TABLA, InsInsumoVinculado::GEN_ATTR_INS_INSUMO_VINCULADO, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoVinculado */ 	
	public function getInsInsumoXInsInsumoVinculado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoVinculado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoSimilars */ 	
	public function getInsInsumoSimilars($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoSimilar::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoSimilar::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoSimilar::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoSimilar::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoSimilar::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoSimilar::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoSimilar::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumosimilars = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumosimilar = InsInsumoSimilar::hidratarObjeto($fila);			
                $insinsumosimilars[] = $insinsumosimilar;
            }

            return $insinsumosimilars;
	}	
	

	/* Método getInsInsumoSimilarsBloque para MasInfo */ 	
	public function getInsInsumoSimilarsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoSimilars($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoSimilars Habilitados */ 	
	public function getInsInsumoSimilarsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoSimilars($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoSimilar */ 	
	public function getInsInsumoSimilar($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoSimilars($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoSimilar relacionadas */ 	
	public function deleteInsInsumoSimilars(){
            $obs = $this->getInsInsumoSimilars();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoSimilarsCmb() InsInsumoSimilar relacionadas */ 	
	public function getInsInsumoSimilarsCmb(){
            $c = new Criterio();
            $c->add(InsInsumoSimilar::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoSimilar::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoSimilar::getInsInsumoSimilarsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoSimilar */ 	
	public function getInsInsumosXInsInsumoSimilar($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoSimilar::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoSimilar::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoSimilar::GEN_TABLA, InsInsumoSimilar::GEN_ATTR_INS_INSUMO_SIMILAR, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoSimilar */ 	
	public function getCantidadInsInsumosXInsInsumoSimilar($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoSimilar::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoSimilar::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoSimilar::GEN_TABLA, InsInsumoSimilar::GEN_ATTR_INS_INSUMO_SIMILAR, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoSimilar */ 	
	public function getInsInsumoXInsInsumoSimilar($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoSimilar($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsVentaWebInfos */ 	
	public function getInsVentaWebInfos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsVentaWebInfo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsVentaWebInfo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsVentaWebInfo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsVentaWebInfo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsVentaWebInfo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsVentaWebInfo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsVentaWebInfo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsVentaWebInfo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insventawebinfos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insventawebinfo = InsVentaWebInfo::hidratarObjeto($fila);			
                $insventawebinfos[] = $insventawebinfo;
            }

            return $insventawebinfos;
	}	
	

	/* Método getInsVentaWebInfosBloque para MasInfo */ 	
	public function getInsVentaWebInfosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsVentaWebInfos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsVentaWebInfos Habilitados */ 	
	public function getInsVentaWebInfosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsVentaWebInfos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsVentaWebInfo */ 	
	public function getInsVentaWebInfo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsVentaWebInfos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsVentaWebInfo relacionadas */ 	
	public function deleteInsVentaWebInfos(){
            $obs = $this->getInsVentaWebInfos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsVentaWebInfosCmb() InsVentaWebInfo relacionadas */ 	
	public function getInsVentaWebInfosCmb(){
            $c = new Criterio();
            $c->add(InsVentaWebInfo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsVentaWebInfo::GEN_TABLA);
            $c->setCriterios();

            $os = InsVentaWebInfo::getInsVentaWebInfosCmbF(null, $c);
            return $os;
	}

	/* Metodo getInsVentaMlInfos */ 	
	public function getInsVentaMlInfos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsVentaMlInfo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsVentaMlInfo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsVentaMlInfo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsVentaMlInfo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsVentaMlInfo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsVentaMlInfo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsVentaMlInfo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsVentaMlInfo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insventamlinfos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insventamlinfo = InsVentaMlInfo::hidratarObjeto($fila);			
                $insventamlinfos[] = $insventamlinfo;
            }

            return $insventamlinfos;
	}	
	

	/* Método getInsVentaMlInfosBloque para MasInfo */ 	
	public function getInsVentaMlInfosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsVentaMlInfos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsVentaMlInfos Habilitados */ 	
	public function getInsVentaMlInfosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsVentaMlInfos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsVentaMlInfo */ 	
	public function getInsVentaMlInfo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsVentaMlInfos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsVentaMlInfo relacionadas */ 	
	public function deleteInsVentaMlInfos(){
            $obs = $this->getInsVentaMlInfos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsVentaMlInfosCmb() InsVentaMlInfo relacionadas */ 	
	public function getInsVentaMlInfosCmb(){
            $c = new Criterio();
            $c->add(InsVentaMlInfo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsVentaMlInfo::GEN_TABLA);
            $c->setCriterios();

            $os = InsVentaMlInfo::getInsVentaMlInfosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener MlCategorys (Coleccion) relacionados a traves de InsVentaMlInfo */ 	
	public function getMlCategorysXInsVentaMlInfo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(MlCategory::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsVentaMlInfo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsVentaMlInfo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlCategory::GEN_TABLA);
            $c->addRealJoin(InsVentaMlInfo::GEN_TABLA, InsVentaMlInfo::GEN_ATTR_ML_CATEGORY_ID, MlCategory::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlCategory::getMlCategorys($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de MlCategorys relacionados a traves de InsVentaMlInfo */ 	
	public function getCantidadMlCategorysXInsVentaMlInfo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(MlCategory::GEN_ATTR_ID);
            if($estado){
                $c->add(MlCategory::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsVentaMlInfo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsVentaMlInfo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(MlCategory::GEN_TABLA);
            $c->addRealJoin(InsVentaMlInfo::GEN_TABLA, InsVentaMlInfo::GEN_ATTR_ML_CATEGORY_ID, MlCategory::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = MlCategory::getMlCategorys($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener MlCategory (Objeto) relacionado a traves de InsVentaMlInfo */ 	
	public function getMlCategoryXInsVentaMlInfo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getMlCategorysXInsVentaMlInfo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoCostos */ 	
	public function getInsInsumoCostos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoCosto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoCosto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoCosto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoCosto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoCosto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoCosto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumocostos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumocosto = InsInsumoCosto::hidratarObjeto($fila);			
                $insinsumocostos[] = $insinsumocosto;
            }

            return $insinsumocostos;
	}	
	

	/* Método getInsInsumoCostosBloque para MasInfo */ 	
	public function getInsInsumoCostosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoCostos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoCostos Habilitados */ 	
	public function getInsInsumoCostosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoCostos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoCosto */ 	
	public function getInsInsumoCosto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoCostos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoCosto relacionadas */ 	
	public function deleteInsInsumoCostos(){
            $obs = $this->getInsInsumoCostos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoCostosCmb() InsInsumoCosto relacionadas */ 	
	public function getInsInsumoCostosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoCosto::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoCosto::getInsInsumoCostosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de InsInsumoCosto */ 	
	public function getPrvProveedorsXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(InsInsumoCosto::GEN_TABLA, InsInsumoCosto::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de InsInsumoCosto */ 	
	public function getCantidadPrvProveedorsXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(InsInsumoCosto::GEN_TABLA, InsInsumoCosto::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de InsInsumoCosto */ 	
	public function getPrvProveedorXInsInsumoCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXInsInsumoCosto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsListaPrecios */ 	
	public function getInsListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $inslistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $inslistaprecio = InsListaPrecio::hidratarObjeto($fila);			
                $inslistaprecios[] = $inslistaprecio;
            }

            return $inslistaprecios;
	}	
	

	/* Método getInsListaPreciosBloque para MasInfo */ 	
	public function getInsListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsListaPrecios Habilitados */ 	
	public function getInsListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsListaPrecio */ 	
	public function getInsListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsListaPrecio relacionadas */ 	
	public function deleteInsListaPrecios(){
            $obs = $this->getInsListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsListaPreciosCmb() InsListaPrecio relacionadas */ 	
	public function getInsListaPreciosCmb(){
            $c = new Criterio();
            $c->add(InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = InsListaPrecio::getInsListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsTipoListaPrecios (Coleccion) relacionados a traves de InsListaPrecio */ 	
	public function getInsTipoListaPreciosXInsListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(InsListaPrecio::GEN_TABLA, InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsTipoListaPrecios relacionados a traves de InsListaPrecio */ 	
	public function getCantidadInsTipoListaPreciosXInsListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsTipoListaPrecio::GEN_ATTR_ID);
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(InsListaPrecio::GEN_TABLA, InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsTipoListaPrecio (Objeto) relacionado a traves de InsListaPrecio */ 	
	public function getInsTipoListaPrecioXInsListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsTipoListaPreciosXInsListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoInsEtiquetas */ 	
	public function getInsInsumoInsEtiquetas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoInsEtiqueta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoInsEtiqueta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoInsEtiqueta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoInsEtiqueta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoInsEtiqueta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoInsEtiqueta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoinsetiquetas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoinsetiqueta = InsInsumoInsEtiqueta::hidratarObjeto($fila);			
                $insinsumoinsetiquetas[] = $insinsumoinsetiqueta;
            }

            return $insinsumoinsetiquetas;
	}	
	

	/* Método getInsInsumoInsEtiquetasBloque para MasInfo */ 	
	public function getInsInsumoInsEtiquetasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoInsEtiquetas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoInsEtiquetas Habilitados */ 	
	public function getInsInsumoInsEtiquetasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoInsEtiquetas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoInsEtiqueta */ 	
	public function getInsInsumoInsEtiqueta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoInsEtiquetas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoInsEtiqueta relacionadas */ 	
	public function deleteInsInsumoInsEtiquetas(){
            $obs = $this->getInsInsumoInsEtiquetas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoInsEtiquetasCmb() InsInsumoInsEtiqueta relacionadas */ 	
	public function getInsInsumoInsEtiquetasCmb(){
            $c = new Criterio();
            $c->add(InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoInsEtiqueta::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoInsEtiqueta::getInsInsumoInsEtiquetasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsEtiquetas (Coleccion) relacionados a traves de InsInsumoInsEtiqueta */ 	
	public function getInsEtiquetasXInsInsumoInsEtiqueta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsEtiqueta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoInsEtiqueta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsEtiqueta::GEN_TABLA);
            $c->addRealJoin(InsInsumoInsEtiqueta::GEN_TABLA, InsInsumoInsEtiqueta::GEN_ATTR_INS_ETIQUETA_ID, InsEtiqueta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsEtiqueta::getInsEtiquetas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsEtiquetas relacionados a traves de InsInsumoInsEtiqueta */ 	
	public function getCantidadInsEtiquetasXInsInsumoInsEtiqueta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsEtiqueta::GEN_ATTR_ID);
            if($estado){
                $c->add(InsEtiqueta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoInsEtiqueta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsEtiqueta::GEN_TABLA);
            $c->addRealJoin(InsInsumoInsEtiqueta::GEN_TABLA, InsInsumoInsEtiqueta::GEN_ATTR_INS_ETIQUETA_ID, InsEtiqueta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsEtiqueta::getInsEtiquetas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsEtiqueta (Objeto) relacionado a traves de InsInsumoInsEtiqueta */ 	
	public function getInsEtiquetaXInsInsumoInsEtiqueta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsEtiquetasXInsInsumoInsEtiqueta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoDestinoTransformacions */ 	
	public function getInsInsumoDestinoTransformacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoDestinoTransformacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoDestinoTransformacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoDestinoTransformacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsInsumoDestinoTransformacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoDestinoTransformacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoDestinoTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoDestinoTransformacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoDestinoTransformacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumodestinotransformacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumodestinotransformacion = InsInsumoDestinoTransformacion::hidratarObjeto($fila);			
                $insinsumodestinotransformacions[] = $insinsumodestinotransformacion;
            }

            return $insinsumodestinotransformacions;
	}	
	

	/* Método getInsInsumoDestinoTransformacionsBloque para MasInfo */ 	
	public function getInsInsumoDestinoTransformacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoDestinoTransformacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoDestinoTransformacions Habilitados */ 	
	public function getInsInsumoDestinoTransformacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoDestinoTransformacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoDestinoTransformacion */ 	
	public function getInsInsumoDestinoTransformacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoDestinoTransformacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoDestinoTransformacion relacionadas */ 	
	public function deleteInsInsumoDestinoTransformacions(){
            $obs = $this->getInsInsumoDestinoTransformacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoDestinoTransformacionsCmb() InsInsumoDestinoTransformacion relacionadas */ 	
	public function getInsInsumoDestinoTransformacionsCmb(){
            $c = new Criterio();
            $c->add(InsInsumoDestinoTransformacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoDestinoTransformacion::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoDestinoTransformacion::getInsInsumoDestinoTransformacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoDestinoTransformacion */ 	
	public function getInsInsumosXInsInsumoDestinoTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoDestinoTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoDestinoTransformacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoDestinoTransformacion::GEN_TABLA, InsInsumoDestinoTransformacion::GEN_ATTR_INS_INSUMO_DESTINO, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoDestinoTransformacion */ 	
	public function getCantidadInsInsumosXInsInsumoDestinoTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoDestinoTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoDestinoTransformacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoDestinoTransformacion::GEN_TABLA, InsInsumoDestinoTransformacion::GEN_ATTR_INS_INSUMO_DESTINO, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoDestinoTransformacion */ 	
	public function getInsInsumoXInsInsumoDestinoTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoDestinoTransformacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoInsAtributos */ 	
	public function getInsInsumoInsAtributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoInsAtributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoInsAtributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoInsAtributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoInsAtributo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoInsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoInsAtributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoInsAtributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumoinsatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumoinsatributo = InsInsumoInsAtributo::hidratarObjeto($fila);			
                $insinsumoinsatributos[] = $insinsumoinsatributo;
            }

            return $insinsumoinsatributos;
	}	
	

	/* Método getInsInsumoInsAtributosBloque para MasInfo */ 	
	public function getInsInsumoInsAtributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoInsAtributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoInsAtributos Habilitados */ 	
	public function getInsInsumoInsAtributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoInsAtributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoInsAtributo */ 	
	public function getInsInsumoInsAtributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoInsAtributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoInsAtributo relacionadas */ 	
	public function deleteInsInsumoInsAtributos(){
            $obs = $this->getInsInsumoInsAtributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoInsAtributosCmb() InsInsumoInsAtributo relacionadas */ 	
	public function getInsInsumoInsAtributosCmb(){
            $c = new Criterio();
            $c->add(InsInsumoInsAtributo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoInsAtributo::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoInsAtributo::getInsInsumoInsAtributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsAtributos (Coleccion) relacionados a traves de InsInsumoInsAtributo */ 	
	public function getInsAtributosXInsInsumoInsAtributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoInsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoInsAtributo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsAtributo::GEN_TABLA);
            $c->addRealJoin(InsInsumoInsAtributo::GEN_TABLA, InsInsumoInsAtributo::GEN_ATTR_INS_ATRIBUTO_ID, InsAtributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsAtributo::getInsAtributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsAtributos relacionados a traves de InsInsumoInsAtributo */ 	
	public function getCantidadInsAtributosXInsInsumoInsAtributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsAtributo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoInsAtributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoInsAtributo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsAtributo::GEN_TABLA);
            $c->addRealJoin(InsInsumoInsAtributo::GEN_TABLA, InsInsumoInsAtributo::GEN_ATTR_INS_ATRIBUTO_ID, InsAtributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsAtributo::getInsAtributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsAtributo (Objeto) relacionado a traves de InsInsumoInsAtributo */ 	
	public function getInsAtributoXInsInsumoInsAtributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsAtributosXInsInsumoInsAtributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsStockTransformacions */ 	
	public function getInsStockTransformacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockTransformacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockTransformacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockTransformacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockTransformacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockTransformacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockTransformacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockTransformacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstocktransformacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstocktransformacion = InsStockTransformacion::hidratarObjeto($fila);			
                $insstocktransformacions[] = $insstocktransformacion;
            }

            return $insstocktransformacions;
	}	
	

	/* Método getInsStockTransformacionsBloque para MasInfo */ 	
	public function getInsStockTransformacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockTransformacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockTransformacions Habilitados */ 	
	public function getInsStockTransformacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockTransformacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockTransformacion */ 	
	public function getInsStockTransformacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockTransformacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockTransformacion relacionadas */ 	
	public function deleteInsStockTransformacions(){
            $obs = $this->getInsStockTransformacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockTransformacionsCmb() InsStockTransformacion relacionadas */ 	
	public function getInsStockTransformacionsCmb(){
            $c = new Criterio();
            $c->add(InsStockTransformacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTransformacion::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockTransformacion::getInsStockTransformacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PanPanols (Coleccion) relacionados a traves de InsStockTransformacion */ 	
	public function getPanPanolsXInsStockTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockTransformacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addRealJoin(InsStockTransformacion::GEN_TABLA, InsStockTransformacion::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanPanol::getPanPanols($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PanPanols relacionados a traves de InsStockTransformacion */ 	
	public function getCantidadPanPanolsXInsStockTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PanPanol::GEN_ATTR_ID);
            if($estado){
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockTransformacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addRealJoin(InsStockTransformacion::GEN_TABLA, InsStockTransformacion::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanPanol::getPanPanols($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PanPanol (Objeto) relacionado a traves de InsStockTransformacion */ 	
	public function getPanPanolXInsStockTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPanPanolsXInsStockTransformacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsStockTransformacionDestinos */ 	
	public function getInsStockTransformacionDestinos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockTransformacionDestino::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockTransformacionDestino::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockTransformacionDestino::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockTransformacionDestino::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockTransformacionDestino::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockTransformacionDestino::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockTransformacionDestino::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockTransformacionDestino::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstocktransformaciondestinos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstocktransformaciondestino = InsStockTransformacionDestino::hidratarObjeto($fila);			
                $insstocktransformaciondestinos[] = $insstocktransformaciondestino;
            }

            return $insstocktransformaciondestinos;
	}	
	

	/* Método getInsStockTransformacionDestinosBloque para MasInfo */ 	
	public function getInsStockTransformacionDestinosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockTransformacionDestinos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockTransformacionDestinos Habilitados */ 	
	public function getInsStockTransformacionDestinosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockTransformacionDestinos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockTransformacionDestino */ 	
	public function getInsStockTransformacionDestino($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockTransformacionDestinos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockTransformacionDestino relacionadas */ 	
	public function deleteInsStockTransformacionDestinos(){
            $obs = $this->getInsStockTransformacionDestinos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockTransformacionDestinosCmb() InsStockTransformacionDestino relacionadas */ 	
	public function getInsStockTransformacionDestinosCmb(){
            $c = new Criterio();
            $c->add(InsStockTransformacionDestino::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTransformacionDestino::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockTransformacionDestino::getInsStockTransformacionDestinosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsStockTransformacions (Coleccion) relacionados a traves de InsStockTransformacionDestino */ 	
	public function getInsStockTransformacionsXInsStockTransformacionDestino($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockTransformacionDestino::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockTransformacionDestino::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTransformacion::GEN_TABLA);
            $c->addRealJoin(InsStockTransformacionDestino::GEN_TABLA, InsStockTransformacionDestino::GEN_ATTR_INS_STOCK_TRANSFORMACION_ID, InsStockTransformacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTransformacion::getInsStockTransformacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsStockTransformacions relacionados a traves de InsStockTransformacionDestino */ 	
	public function getCantidadInsStockTransformacionsXInsStockTransformacionDestino($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsStockTransformacion::GEN_ATTR_ID);
            if($estado){
                $c->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockTransformacionDestino::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockTransformacionDestino::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTransformacion::GEN_TABLA);
            $c->addRealJoin(InsStockTransformacionDestino::GEN_TABLA, InsStockTransformacionDestino::GEN_ATTR_INS_STOCK_TRANSFORMACION_ID, InsStockTransformacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTransformacion::getInsStockTransformacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsStockTransformacion (Objeto) relacionado a traves de InsStockTransformacionDestino */ 	
	public function getInsStockTransformacionXInsStockTransformacionDestino($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsStockTransformacionsXInsStockTransformacionDestino($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvInsumos */ 	
	public function getPrvInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvInsumo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvinsumo = PrvInsumo::hidratarObjeto($fila);			
                $prvinsumos[] = $prvinsumo;
            }

            return $prvinsumos;
	}	
	

	/* Método getPrvInsumosBloque para MasInfo */ 	
	public function getPrvInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvInsumos Habilitados */ 	
	public function getPrvInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvInsumo */ 	
	public function getPrvInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvInsumo relacionadas */ 	
	public function deletePrvInsumos(){
            $obs = $this->getPrvInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvInsumosCmb() PrvInsumo relacionadas */ 	
	public function getPrvInsumosCmb(){
            $c = new Criterio();
            $c->add(PrvInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = PrvInsumo::getPrvInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PrvInsumo */ 	
	public function getPrvProveedorsXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PrvInsumo */ 	
	public function getCantidadPrvProveedorsXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PrvInsumo */ 	
	public function getPrvProveedorXPrvInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPrvInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoInsInsumos */ 	
	public function getVtaPresupuestoInsInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoInsInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoInsInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoInsInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestoinsinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestoinsinsumo = VtaPresupuestoInsInsumo::hidratarObjeto($fila);			
                $vtapresupuestoinsinsumos[] = $vtapresupuestoinsinsumo;
            }

            return $vtapresupuestoinsinsumos;
	}	
	

	/* Método getVtaPresupuestoInsInsumosBloque para MasInfo */ 	
	public function getVtaPresupuestoInsInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoInsInsumos Habilitados */ 	
	public function getVtaPresupuestoInsInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestoInsInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoInsInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoInsInsumo relacionadas */ 	
	public function deleteVtaPresupuestoInsInsumos(){
            $obs = $this->getVtaPresupuestoInsInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoInsInsumosCmb() VtaPresupuestoInsInsumo relacionadas */ 	
	public function getVtaPresupuestoInsInsumosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestosXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaPresupuestoInsInsumo */ 	
	public function getCantidadVtaPresupuestosXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaPresupuestoInsInsumo */ 	
	public function getVtaPresupuestoXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaPresupuestoInsInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaCreditoVtaFacturaVtaOrdenVentas */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCreditoVtaFacturaVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCreditoVtaFacturaVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditovtafacturavtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacreditovtafacturavtaordenventa = VtaNotaCreditoVtaFacturaVtaOrdenVenta::hidratarObjeto($fila);			
                $vtanotacreditovtafacturavtaordenventas[] = $vtanotacreditovtafacturavtaordenventa;
            }

            return $vtanotacreditovtafacturavtaordenventas;
	}	
	

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVentas Habilitados */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCreditoVtaFacturaVtaOrdenVenta relacionadas */ 	
	public function deleteVtaNotaCreditoVtaFacturaVtaOrdenVentas(){
            $obs = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb() VtaNotaCreditoVtaFacturaVtaOrdenVenta relacionadas */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditoXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentas */ 	
	public function getVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventa = VtaOrdenVenta::hidratarObjeto($fila);			
                $vtaordenventas[] = $vtaordenventa;
            }

            return $vtaordenventas;
	}	
	

	/* Método getVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentas Habilitados */ 	
	public function getVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVenta */ 	
	public function getVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVenta relacionadas */ 	
	public function deleteVtaOrdenVentas(){
            $obs = $this->getVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentasCmb() VtaOrdenVenta relacionadas */ 	
	public function getVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaOrdenVenta */ 	
	public function getCantidadVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestoXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoVtaOrdenVentas */ 	
	public function getVtaRemitoVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitovtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitovtaordenventa = VtaRemitoVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaremitovtaordenventas[] = $vtaremitovtaordenventa;
            }

            return $vtaremitovtaordenventas;
	}	
	

	/* Método getVtaRemitoVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaRemitoVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoVtaOrdenVentas Habilitados */ 	
	public function getVtaRemitoVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoVtaOrdenVenta */ 	
	public function getVtaRemitoVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoVtaOrdenVenta relacionadas */ 	
	public function deleteVtaRemitoVtaOrdenVentas(){
            $obs = $this->getVtaRemitoVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoVtaOrdenVentasCmb() VtaRemitoVtaOrdenVenta relacionadas */ 	
	public function getVtaRemitoVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoVtaOrdenVenta::getVtaRemitoVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitos (Coleccion) relacionados a traves de VtaRemitoVtaOrdenVenta */ 	
	public function getVtaRemitosXVtaRemitoVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(VtaRemitoVtaOrdenVenta::GEN_TABLA, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitos relacionados a traves de VtaRemitoVtaOrdenVenta */ 	
	public function getCantidadVtaRemitosXVtaRemitoVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(VtaRemitoVtaOrdenVenta::GEN_TABLA, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemito (Objeto) relacionado a traves de VtaRemitoVtaOrdenVenta */ 	
	public function getVtaRemitoXVtaRemitoVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitosXVtaRemitoVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaOrdenVentas */ 	
	public function getVtaFacturaVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtaordenventa = VtaFacturaVtaOrdenVenta::hidratarObjeto($fila);			
                $vtafacturavtaordenventas[] = $vtafacturavtaordenventa;
            }

            return $vtafacturavtaordenventas;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaFacturaVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaOrdenVentas Habilitados */ 	
	public function getVtaFacturaVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturaVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaOrdenVenta relacionadas */ 	
	public function deleteVtaFacturaVtaOrdenVentas(){
            $obs = $this->getVtaFacturaVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaOrdenVentasCmb() VtaFacturaVtaOrdenVenta relacionadas */ 	
	public function getVtaFacturaVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaFacturasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturaXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPoliticaDescuentoInsInsumos */ 	
	public function getVtaPoliticaDescuentoInsInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPoliticaDescuentoInsInsumo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPoliticaDescuentoInsInsumo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPoliticaDescuentoInsInsumo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPoliticaDescuentoInsInsumo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapoliticadescuentoinsinsumos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapoliticadescuentoinsinsumo = VtaPoliticaDescuentoInsInsumo::hidratarObjeto($fila);			
                $vtapoliticadescuentoinsinsumos[] = $vtapoliticadescuentoinsinsumo;
            }

            return $vtapoliticadescuentoinsinsumos;
	}	
	

	/* Método getVtaPoliticaDescuentoInsInsumosBloque para MasInfo */ 	
	public function getVtaPoliticaDescuentoInsInsumosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPoliticaDescuentoInsInsumos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsInsumos Habilitados */ 	
	public function getVtaPoliticaDescuentoInsInsumosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPoliticaDescuentoInsInsumos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPoliticaDescuentoInsInsumo */ 	
	public function getVtaPoliticaDescuentoInsInsumo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPoliticaDescuentoInsInsumos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPoliticaDescuentoInsInsumo relacionadas */ 	
	public function deleteVtaPoliticaDescuentoInsInsumos(){
            $obs = $this->getVtaPoliticaDescuentoInsInsumos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPoliticaDescuentoInsInsumosCmb() VtaPoliticaDescuentoInsInsumo relacionadas */ 	
	public function getVtaPoliticaDescuentoInsInsumosCmb(){
            $c = new Criterio();
            $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuentoInsInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPoliticaDescuentoInsInsumo::getVtaPoliticaDescuentoInsInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPoliticaDescuentos (Coleccion) relacionados a traves de VtaPoliticaDescuentoInsInsumo */ 	
	public function getVtaPoliticaDescuentosXVtaPoliticaDescuentoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsInsumo::GEN_TABLA, VtaPoliticaDescuentoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPoliticaDescuentos relacionados a traves de VtaPoliticaDescuentoInsInsumo */ 	
	public function getCantidadVtaPoliticaDescuentosXVtaPoliticaDescuentoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPoliticaDescuento::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPoliticaDescuentoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsInsumo::GEN_TABLA, VtaPoliticaDescuentoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPoliticaDescuento (Objeto) relacionado a traves de VtaPoliticaDescuentoInsInsumo */ 	
	public function getVtaPoliticaDescuentoXVtaPoliticaDescuentoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPoliticaDescuentosXVtaPoliticaDescuentoInsInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsStockMovimientos */ 	
	public function getInsStockMovimientos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockMovimiento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockMovimiento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockMovimiento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockMovimiento::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockMovimiento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockMovimiento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstockmovimientos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstockmovimiento = InsStockMovimiento::hidratarObjeto($fila);			
                $insstockmovimientos[] = $insstockmovimiento;
            }

            return $insstockmovimientos;
	}	
	

	/* Método getInsStockMovimientosBloque para MasInfo */ 	
	public function getInsStockMovimientosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockMovimientos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockMovimientos Habilitados */ 	
	public function getInsStockMovimientosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockMovimientos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockMovimiento */ 	
	public function getInsStockMovimiento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockMovimientos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockMovimiento relacionadas */ 	
	public function deleteInsStockMovimientos(){
            $obs = $this->getInsStockMovimientos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockMovimientosCmb() InsStockMovimiento relacionadas */ 	
	public function getInsStockMovimientosCmb(){
            $c = new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockMovimiento::getInsStockMovimientosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsStockTipoMovimientos (Coleccion) relacionados a traves de InsStockMovimiento */ 	
	public function getInsStockTipoMovimientosXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
            $c->addRealJoin(InsStockMovimiento::GEN_TABLA, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, InsStockTipoMovimiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTipoMovimiento::getInsStockTipoMovimientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsStockTipoMovimientos relacionados a traves de InsStockMovimiento */ 	
	public function getCantidadInsStockTipoMovimientosXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsStockTipoMovimiento::GEN_ATTR_ID);
            if($estado){
                $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
            $c->addRealJoin(InsStockMovimiento::GEN_TABLA, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, InsStockTipoMovimiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTipoMovimiento::getInsStockTipoMovimientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsStockTipoMovimiento (Objeto) relacionado a traves de InsStockMovimiento */ 	
	public function getInsStockTipoMovimientoXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsStockTipoMovimientosXInsStockMovimiento($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsStockResumens */ 	
	public function getInsStockResumens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockResumen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockResumen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockResumen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockResumen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockResumen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockResumen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockResumen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstockresumens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstockresumen = InsStockResumen::hidratarObjeto($fila);			
                $insstockresumens[] = $insstockresumen;
            }

            return $insstockresumens;
	}	
	

	/* Método getInsStockResumensBloque para MasInfo */ 	
	public function getInsStockResumensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockResumens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockResumens Habilitados */ 	
	public function getInsStockResumensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockResumens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockResumen */ 	
	public function getInsStockResumen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockResumens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockResumen relacionadas */ 	
	public function deleteInsStockResumens(){
            $obs = $this->getInsStockResumens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockResumensCmb() InsStockResumen relacionadas */ 	
	public function getInsStockResumensCmb(){
            $c = new Criterio();
            $c->add(InsStockResumen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockResumen::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockResumen::getInsStockResumensCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsStockResumenTipoEstados (Coleccion) relacionados a traves de InsStockResumen */ 	
	public function getInsStockResumenTipoEstadosXInsStockResumen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsStockResumenTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockResumen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockResumen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockResumenTipoEstado::GEN_TABLA);
            $c->addRealJoin(InsStockResumen::GEN_TABLA, InsStockResumen::GEN_ATTR_INS_STOCK_RESUMEN_TIPO_ESTADO_ID, InsStockResumenTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockResumenTipoEstado::getInsStockResumenTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsStockResumenTipoEstados relacionados a traves de InsStockResumen */ 	
	public function getCantidadInsStockResumenTipoEstadosXInsStockResumen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsStockResumenTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(InsStockResumenTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockResumen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockResumen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockResumenTipoEstado::GEN_TABLA);
            $c->addRealJoin(InsStockResumen::GEN_TABLA, InsStockResumen::GEN_ATTR_INS_STOCK_RESUMEN_TIPO_ESTADO_ID, InsStockResumenTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockResumenTipoEstado::getInsStockResumenTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsStockResumenTipoEstado (Objeto) relacionado a traves de InsStockResumen */ 	
	public function getInsStockResumenTipoEstadoXInsStockResumen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsStockResumenTipoEstadosXInsStockResumen($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdiPedidos */ 	
	public function getPdiPedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdiPedido::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdiPedido::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdiPedido::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdiPedido::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdiPedido::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdiPedido::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdipedidos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdipedido = PdiPedido::hidratarObjeto($fila);			
                $pdipedidos[] = $pdipedido;
            }

            return $pdipedidos;
	}	
	

	/* Método getPdiPedidosBloque para MasInfo */ 	
	public function getPdiPedidosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdiPedidos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdiPedidos Habilitados */ 	
	public function getPdiPedidosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdiPedidos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdiPedido */ 	
	public function getPdiPedido($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdiPedidos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdiPedido relacionadas */ 	
	public function deletePdiPedidos(){
            $obs = $this->getPdiPedidos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdiPedidosCmb() PdiPedido relacionadas */ 	
	public function getPdiPedidosCmb(){
            $c = new Criterio();
            $c->add(PdiPedido::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedido::GEN_TABLA);
            $c->setCriterios();

            $os = PdiPedido::getPdiPedidosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdiTipoOrigens (Coleccion) relacionados a traves de PdiPedido */ 	
	public function getPdiTipoOrigensXPdiPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdiTipoOrigen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedido::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiTipoOrigen::GEN_TABLA);
            $c->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_PDI_TIPO_ORIGEN_ID, PdiTipoOrigen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdiTipoOrigen::getPdiTipoOrigens($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdiTipoOrigens relacionados a traves de PdiPedido */ 	
	public function getCantidadPdiTipoOrigensXPdiPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdiTipoOrigen::GEN_ATTR_ID);
            if($estado){
                $c->add(PdiTipoOrigen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedido::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiTipoOrigen::GEN_TABLA);
            $c->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_PDI_TIPO_ORIGEN_ID, PdiTipoOrigen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdiTipoOrigen::getPdiTipoOrigens($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdiTipoOrigen (Objeto) relacionado a traves de PdiPedido */ 	
	public function getPdiTipoOrigenXPdiPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdiTipoOrigensXPdiPedido($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdiPedidoAgrupacionItems */ 	
	public function getPdiPedidoAgrupacionItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdiPedidoAgrupacionItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdiPedidoAgrupacionItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdiPedidoAgrupacionItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdiPedidoAgrupacionItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdiPedidoAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdiPedidoAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdiPedidoAgrupacionItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdiPedidoAgrupacionItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdipedidoagrupacionitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdipedidoagrupacionitem = PdiPedidoAgrupacionItem::hidratarObjeto($fila);			
                $pdipedidoagrupacionitems[] = $pdipedidoagrupacionitem;
            }

            return $pdipedidoagrupacionitems;
	}	
	

	/* Método getPdiPedidoAgrupacionItemsBloque para MasInfo */ 	
	public function getPdiPedidoAgrupacionItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdiPedidoAgrupacionItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdiPedidoAgrupacionItems Habilitados */ 	
	public function getPdiPedidoAgrupacionItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdiPedidoAgrupacionItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdiPedidoAgrupacionItem */ 	
	public function getPdiPedidoAgrupacionItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdiPedidoAgrupacionItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdiPedidoAgrupacionItem relacionadas */ 	
	public function deletePdiPedidoAgrupacionItems(){
            $obs = $this->getPdiPedidoAgrupacionItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdiPedidoAgrupacionItemsCmb() PdiPedidoAgrupacionItem relacionadas */ 	
	public function getPdiPedidoAgrupacionItemsCmb(){
            $c = new Criterio();
            $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoAgrupacionItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdiPedidoAgrupacionItem::getPdiPedidoAgrupacionItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdiPedidoAgrupacions (Coleccion) relacionados a traves de PdiPedidoAgrupacionItem */ 	
	public function getPdiPedidoAgrupacionsXPdiPedidoAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdiPedidoAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdiPedidoAgrupacionItem::GEN_TABLA, PdiPedidoAgrupacionItem::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, PdiPedidoAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdiPedidoAgrupacions relacionados a traves de PdiPedidoAgrupacionItem */ 	
	public function getCantidadPdiPedidoAgrupacionsXPdiPedidoAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdiPedidoAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdiPedidoAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedidoAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdiPedidoAgrupacionItem::GEN_TABLA, PdiPedidoAgrupacionItem::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, PdiPedidoAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdiPedidoAgrupacion (Objeto) relacionado a traves de PdiPedidoAgrupacionItem */ 	
	public function getPdiPedidoAgrupacionXPdiPedidoAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdiPedidoAgrupacionsXPdiPedidoAgrupacionItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidos */ 	
	public function getPdePedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedido::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedido::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedido::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdePedido::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedido::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedido::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedido::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedido = PdePedido::hidratarObjeto($fila);			
                $pdepedidos[] = $pdepedido;
            }

            return $pdepedidos;
	}	
	

	/* Método getPdePedidosBloque para MasInfo */ 	
	public function getPdePedidosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidos Habilitados */ 	
	public function getPdePedidosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedido */ 	
	public function getPdePedido($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedido relacionadas */ 	
	public function deletePdePedidos(){
            $obs = $this->getPdePedidos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidosCmb() PdePedido relacionadas */ 	
	public function getPdePedidosCmb(){
            $c = new Criterio();
            $c->add(PdePedido::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedido::getPdePedidosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeCentroPedidos (Coleccion) relacionados a traves de PdePedido */ 	
	public function getPdeCentroPedidosXPdePedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedido::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->addRealJoin(PdePedido::GEN_TABLA, PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, PdeCentroPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroPedido::getPdeCentroPedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeCentroPedidos relacionados a traves de PdePedido */ 	
	public function getCantidadPdeCentroPedidosXPdePedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeCentroPedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedido::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->addRealJoin(PdePedido::GEN_TABLA, PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, PdeCentroPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroPedido::getPdeCentroPedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeCentroPedido (Objeto) relacionado a traves de PdePedido */ 	
	public function getPdeCentroPedidoXPdePedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeCentroPedidosXPdePedido($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCotizacions */ 	
	public function getPdeCotizacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCotizacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCotizacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCotizacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeCotizacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCotizacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCotizacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCotizacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecotizacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecotizacion = PdeCotizacion::hidratarObjeto($fila);			
                $pdecotizacions[] = $pdecotizacion;
            }

            return $pdecotizacions;
	}	
	

	/* Método getPdeCotizacionsBloque para MasInfo */ 	
	public function getPdeCotizacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCotizacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCotizacions Habilitados */ 	
	public function getPdeCotizacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCotizacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCotizacion */ 	
	public function getPdeCotizacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCotizacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCotizacion relacionadas */ 	
	public function deletePdeCotizacions(){
            $obs = $this->getPdeCotizacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCotizacionsCmb() PdeCotizacion relacionadas */ 	
	public function getPdeCotizacionsCmb(){
            $c = new Criterio();
            $c->add(PdeCotizacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCotizacion::getPdeCotizacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdeCotizacion */ 	
	public function getPdePedidosXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCotizacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeCotizacion::GEN_TABLA, PdeCotizacion::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdeCotizacion */ 	
	public function getCantidadPdePedidosXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCotizacion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeCotizacion::GEN_TABLA, PdeCotizacion::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdeCotizacion */ 	
	public function getPdePedidoXPdeCotizacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdeCotizacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcAgrupacionItems */ 	
	public function getPdeOcAgrupacionItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcAgrupacionItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcAgrupacionItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcAgrupacionItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcAgrupacionItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcAgrupacionItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocagrupacionitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocagrupacionitem = PdeOcAgrupacionItem::hidratarObjeto($fila);			
                $pdeocagrupacionitems[] = $pdeocagrupacionitem;
            }

            return $pdeocagrupacionitems;
	}	
	

	/* Método getPdeOcAgrupacionItemsBloque para MasInfo */ 	
	public function getPdeOcAgrupacionItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcAgrupacionItems Habilitados */ 	
	public function getPdeOcAgrupacionItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcAgrupacionItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcAgrupacionItem relacionadas */ 	
	public function deletePdeOcAgrupacionItems(){
            $obs = $this->getPdeOcAgrupacionItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcAgrupacionItemsCmb() PdeOcAgrupacionItem relacionadas */ 	
	public function getPdeOcAgrupacionItemsCmb(){
            $c = new Criterio();
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcAgrupacionItem::getPdeOcAgrupacionItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcAgrupacions (Coleccion) relacionados a traves de PdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacionItem::GEN_TABLA, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, PdeOcAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcAgrupacions relacionados a traves de PdeOcAgrupacionItem */ 	
	public function getCantidadPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacionItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacionItem::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacionItem::GEN_TABLA, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID, PdeOcAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcAgrupacion (Objeto) relacionado a traves de PdeOcAgrupacionItem */ 	
	public function getPdeOcAgrupacionXPdeOcAgrupacionItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcAgrupacionsXPdeOcAgrupacionItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcs */ 	
	public function getPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeoc = PdeOc::hidratarObjeto($fila);			
                $pdeocs[] = $pdeoc;
            }

            return $pdeocs;
	}	
	

	/* Método getPdeOcsBloque para MasInfo */ 	
	public function getPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcs Habilitados */ 	
	public function getPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOc */ 	
	public function getPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOc relacionadas */ 	
	public function deletePdeOcs(){
            $obs = $this->getPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcsCmb() PdeOc relacionadas */ 	
	public function getPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOc::getPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdeOc */ 	
	public function getPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdeOc */ 	
	public function getCantidadPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdeOc */ 	
	public function getPdePedidoXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcions */ 	
	public function getPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepcion = PdeRecepcion::hidratarObjeto($fila);			
                $pderecepcions[] = $pderecepcion;
            }

            return $pderecepcions;
	}	
	

	/* Método getPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcions Habilitados */ 	
	public function getPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcion */ 	
	public function getPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcion relacionadas */ 	
	public function deletePdeRecepcions(){
            $obs = $this->getPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionsCmb() PdeRecepcion relacionadas */ 	
	public function getPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoRecepcions (Coleccion) relacionados a traves de PdeRecepcion */ 	
	public function getPdeTipoRecepcionsXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcion::GEN_TABLA, PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoRecepcions relacionados a traves de PdeRecepcion */ 	
	public function getCantidadPdeTipoRecepcionsXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcion::GEN_TABLA, PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoRecepcion (Objeto) relacionado a traves de PdeRecepcion */ 	
	public function getPdeTipoRecepcionXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoRecepcionsXPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeOcs */ 	
	public function getPdeFacturaPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapdeoc = PdeFacturaPdeOc::hidratarObjeto($fila);			
                $pdefacturapdeocs[] = $pdefacturapdeoc;
            }

            return $pdefacturapdeocs;
	}	
	

	/* Método getPdeFacturaPdeOcsBloque para MasInfo */ 	
	public function getPdeFacturaPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeOcs Habilitados */ 	
	public function getPdeFacturaPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeOc */ 	
	public function getPdeFacturaPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeOc relacionadas */ 	
	public function deletePdeFacturaPdeOcs(){
            $obs = $this->getPdeFacturaPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeOcsCmb() PdeFacturaPdeOc relacionadas */ 	
	public function getPdeFacturaPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeOc::getPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeOc */ 	
	public function getPdeFacturasXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeOc */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeOc */ 	
	public function getPdeFacturaXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeRecepcions */ 	
	public function getPdeFacturaPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapderecepcion = PdeFacturaPdeRecepcion::hidratarObjeto($fila);			
                $pdefacturapderecepcions[] = $pdefacturapderecepcion;
            }

            return $pdefacturapderecepcions;
	}	
	

	/* Método getPdeFacturaPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeFacturaPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecepcions Habilitados */ 	
	public function getPdeFacturaPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeRecepcion relacionadas */ 	
	public function deletePdeFacturaPdeRecepcions(){
            $obs = $this->getPdeFacturaPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeRecepcionsCmb() PdeFacturaPdeRecepcion relacionadas */ 	
	public function getPdeFacturaPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeRecepcion::getPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeFacturasXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeFacturaPdeRecepcions */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdefacturapderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdefacturapderecepcion = PdeNotaCreditoPdeFacturaPdeRecepcion::hidratarObjeto($fila);			
                $pdenotacreditopdefacturapderecepcions[] = $pdenotacreditopdefacturapderecepcion;
            }

            return $pdenotacreditopdefacturapderecepcions;
	}	
	

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcions Habilitados */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeFacturaPdeRecepcion relacionadas */ 	
	public function deletePdeNotaCreditoPdeFacturaPdeRecepcions(){
            $obs = $this->getPdeNotaCreditoPdeFacturaPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeFacturaPdeRecepcionsCmb() PdeNotaCreditoPdeFacturaPdeRecepcion relacionadas */ 	
	public function getPdeNotaCreditoPdeFacturaPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeRecepcion::getPdeNotaCreditoPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeNotaCreditoXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeFacturaPdeOcs */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdefacturapdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdefacturapdeoc = PdeNotaCreditoPdeFacturaPdeOc::hidratarObjeto($fila);			
                $pdenotacreditopdefacturapdeocs[] = $pdenotacreditopdefacturapdeoc;
            }

            return $pdenotacreditopdefacturapdeocs;
	}	
	

	/* Método getPdeNotaCreditoPdeFacturaPdeOcsBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeOcs Habilitados */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeFacturaPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeFacturaPdeOc relacionadas */ 	
	public function deletePdeNotaCreditoPdeFacturaPdeOcs(){
            $obs = $this->getPdeNotaCreditoPdeFacturaPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeFacturaPdeOcsCmb() PdeNotaCreditoPdeFacturaPdeOc relacionadas */ 	
	public function getPdeNotaCreditoPdeFacturaPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeOc::getPdeNotaCreditoPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeNotaCreditoXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaCreditoPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeVtaOrdenVentas */ 	
	public function getVtaAjusteDebeVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebevtaordenventa = VtaAjusteDebeVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaajustedebevtaordenventas[] = $vtaajustedebevtaordenventa;
            }

            return $vtaajustedebevtaordenventas;
	}	
	

	/* Método getVtaAjusteDebeVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaOrdenVentas Habilitados */ 	
	public function getVtaAjusteDebeVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function deleteVtaAjusteDebeVtaOrdenVentas(){
            $obs = $this->getVtaAjusteDebeVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeVtaOrdenVentasCmb() VtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function getVtaAjusteDebeVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaOrdenVenta::getVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabervtaajustedebevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehabervtaajustedebevtaordenventa = VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaajustehabervtaajustedebevtaordenventas[] = $vtaajustehabervtaajustedebevtaordenventa;
            }

            return $vtaajustehabervtaajustedebevtaordenventas;
	}	
	

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas Habilitados */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function deleteVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(){
            $obs = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmb() VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta relacionadas */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoAjusteVtaOrdenVentas */ 	
	public function getVtaRemitoAjusteVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjusteVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjusteVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajustevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajustevtaordenventa = VtaRemitoAjusteVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaremitoajustevtaordenventas[] = $vtaremitoajustevtaordenventa;
            }

            return $vtaremitoajustevtaordenventas;
	}	
	

	/* Método getVtaRemitoAjusteVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteVtaOrdenVentas Habilitados */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaRemitoAjusteVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjusteVtaOrdenVenta relacionadas */ 	
	public function deleteVtaRemitoAjusteVtaOrdenVentas(){
            $obs = $this->getVtaRemitoAjusteVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjusteVtaOrdenVentasCmb() VtaRemitoAjusteVtaOrdenVenta relacionadas */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjusteVtaOrdenVenta::getVtaRemitoAjusteVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitoAjustes (Coleccion) relacionados a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaRemitoAjustesXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA, VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, VtaRemitoAjuste::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitoAjustes relacionados a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getCantidadVtaRemitoAjustesXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemitoAjuste::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA, VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, VtaRemitoAjuste::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemitoAjuste (Objeto) relacionado a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaRemitoAjusteXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitoAjustesXVtaRemitoAjusteVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getSldSliders */ 	
	public function getSldSliders($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(SldSlider::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(SldSlider::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(SldSlider::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(SldSlider::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(SldSlider::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(SldSlider::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(SldSlider::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".SldSlider::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $sldsliders = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $sldslider = SldSlider::hidratarObjeto($fila);			
                $sldsliders[] = $sldslider;
            }

            return $sldsliders;
	}	
	

	/* Método getSldSlidersBloque para MasInfo */ 	
	public function getSldSlidersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getSldSliders($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getSldSliders Habilitados */ 	
	public function getSldSlidersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getSldSliders($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getSldSlider */ 	
	public function getSldSlider($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getSldSliders($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de SldSlider relacionadas */ 	
	public function deleteSldSliders(){
            $obs = $this->getSldSliders();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getSldSlidersCmb() SldSlider relacionadas */ 	
	public function getSldSlidersCmb(){
            $c = new Criterio();
            $c->add(SldSlider::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(SldSlider::GEN_TABLA);
            $c->setCriterios();

            $os = SldSlider::getSldSlidersCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrdProcesoProductivos */ 	
	public function getPrdProcesoProductivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdProcesoProductivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdProcesoProductivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdProcesoProductivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdProcesoProductivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdProcesoProductivo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdProcesoProductivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdProcesoProductivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdProcesoProductivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdprocesoproductivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdprocesoproductivo = PrdProcesoProductivo::hidratarObjeto($fila);			
                $prdprocesoproductivos[] = $prdprocesoproductivo;
            }

            return $prdprocesoproductivos;
	}	
	

	/* Método getPrdProcesoProductivosBloque para MasInfo */ 	
	public function getPrdProcesoProductivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdProcesoProductivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdProcesoProductivos Habilitados */ 	
	public function getPrdProcesoProductivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdProcesoProductivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdProcesoProductivo */ 	
	public function getPrdProcesoProductivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdProcesoProductivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdProcesoProductivo relacionadas */ 	
	public function deletePrdProcesoProductivos(){
            $obs = $this->getPrdProcesoProductivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdProcesoProductivosCmb() PrdProcesoProductivo relacionadas */ 	
	public function getPrdProcesoProductivosCmb(){
            $c = new Criterio();
            $c->add(PrdProcesoProductivo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdProcesoProductivo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdProcesoProductivo::getPrdProcesoProductivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrdOrdenTrabajos */ 	
	public function getPrdOrdenTrabajos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajo = PrdOrdenTrabajo::hidratarObjeto($fila);			
                $prdordentrabajos[] = $prdordentrabajo;
            }

            return $prdordentrabajos;
	}	
	

	/* Método getPrdOrdenTrabajosBloque para MasInfo */ 	
	public function getPrdOrdenTrabajosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajos Habilitados */ 	
	public function getPrdOrdenTrabajosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajo */ 	
	public function getPrdOrdenTrabajo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajo relacionadas */ 	
	public function deletePrdOrdenTrabajos(){
            $obs = $this->getPrdOrdenTrabajos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajosCmb() PrdOrdenTrabajo relacionadas */ 	
	public function getPrdOrdenTrabajosCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de PrdOrdenTrabajo */ 	
	public function getVtaPresupuestosXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajo::GEN_TABLA, PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de PrdOrdenTrabajo */ 	
	public function getCantidadVtaPresupuestosXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajo::GEN_TABLA, PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de PrdOrdenTrabajo */ 	
	public function getVtaPresupuestoXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXPrdOrdenTrabajo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los PrvProveedors asignados a InsInsumo */ 	
	public function getInsInsumoPrvProveedorsId(){
            $ids = array();
            foreach($this->getInsInsumoPrvProveedors() as $o){
            
                $ids[] = $o->getPrvProveedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PrvProveedors asignados al InsInsumo */ 	
	public function setInsInsumoPrvProveedors($ids){
            $this->deleteInsInsumoPrvProveedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsInsumoPrvProveedor();
                    $o->setPrvProveedorId($id);
                    $o->setInsInsumoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PrvProveedor en el alta de InsInsumo */ 	
	public function getAltaMostrarBloqueRelacionInsInsumoPrvProveedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsInsumos asignados a InsInsumo */ 	
	public function getInsInsumoComposicionsId(){
            $ids = array();
            foreach($this->getInsInsumoComposicions() as $o){
            
                $ids[] = $o->getInsInsumoComposicion();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsInsumos asignados al InsInsumo */ 	
	public function setInsInsumoComposicions($ids){
            $this->deleteInsInsumoComposicions();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsInsumoComposicion();
                    $o->setInsInsumoId($id);
                    $o->setInsInsumoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsInsumo en el alta de InsInsumo */ 	
	public function getAltaMostrarBloqueRelacionInsInsumoComposicion(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsTipoListaPrecios asignados a InsInsumo */ 	
	public function getInsListaPreciosId(){
            $ids = array();
            foreach($this->getInsListaPrecios() as $o){
            
                $ids[] = $o->getInsTipoListaPrecioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsTipoListaPrecios asignados al InsInsumo */ 	
	public function setInsListaPrecios($ids){
            $this->deleteInsListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsListaPrecio();
                    $o->setInsTipoListaPrecioId($id);
                    $o->setInsInsumoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsTipoListaPrecio en el alta de InsInsumo */ 	
	public function getAltaMostrarBloqueRelacionInsListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsEtiquetas asignados a InsInsumo */ 	
	public function getInsInsumoInsEtiquetasId(){
            $ids = array();
            foreach($this->getInsInsumoInsEtiquetas() as $o){
            
                $ids[] = $o->getInsEtiquetaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsEtiquetas asignados al InsInsumo */ 	
	public function setInsInsumoInsEtiquetas($ids){
            $this->deleteInsInsumoInsEtiquetas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsInsumoInsEtiqueta();
                    $o->setInsEtiquetaId($id);
                    $o->setInsInsumoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsEtiqueta en el alta de InsInsumo */ 	
	public function getAltaMostrarBloqueRelacionInsInsumoInsEtiqueta(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsAtributos asignados a InsInsumo */ 	
	public function getInsInsumoInsAtributosId(){
            $ids = array();
            foreach($this->getInsInsumoInsAtributos() as $o){
            
                $ids[] = $o->getInsAtributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsAtributos asignados al InsInsumo */ 	
	public function setInsInsumoInsAtributos($ids){
            $this->deleteInsInsumoInsAtributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new InsInsumoInsAtributo();
                    $o->setInsAtributoId($id);
                    $o->setInsInsumoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsAtributo en el alta de InsInsumo */ 	
	public function getAltaMostrarBloqueRelacionInsInsumoInsAtributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaPoliticaDescuentos asignados a InsInsumo */ 	
	public function getVtaPoliticaDescuentoInsInsumosId(){
            $ids = array();
            foreach($this->getVtaPoliticaDescuentoInsInsumos() as $o){
            
                $ids[] = $o->getVtaPoliticaDescuentoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaPoliticaDescuentos asignados al InsInsumo */ 	
	public function setVtaPoliticaDescuentoInsInsumos($ids){
            $this->deleteVtaPoliticaDescuentoInsInsumos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPoliticaDescuentoInsInsumo();
                    $o->setVtaPoliticaDescuentoId($id);
                    $o->setInsInsumoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaPoliticaDescuento en el alta de InsInsumo */ 	
	public function getAltaMostrarBloqueRelacionVtaPoliticaDescuentoInsInsumo(){
            return true;
	}
	

	/* Metodo que retorna el InsCategoria (Clave Foranea) */ 	
    public function getInsCategoria(){
        $o = new InsCategoria();
        $o->setId($this->getInsCategoriaId());
        return $o;			
    }

	/* Metodo que retorna el InsCategoria (Clave Foranea) en Array */ 	
    public function getInsCategoriaEnArray(&$arr_os){
        if($this->getInsCategoriaId() != 'null'){
            if(isset($arr_os[$this->getInsCategoriaId()])){
                $o = $arr_os[$this->getInsCategoriaId()];
            }else{
                $o = InsCategoria::getOxId($this->getInsCategoriaId());
                if($o){
                    $arr_os[$this->getInsCategoriaId()] = $o;
                }
            }
        }else{
            $o = new InsCategoria();
        }
        return $o;		
    }

	/* Metodo que retorna el InsMatriz (Clave Foranea) */ 	
    public function getInsMatriz(){
        $o = new InsMatriz();
        $o->setId($this->getInsMatrizId());
        return $o;			
    }

	/* Metodo que retorna el InsMatriz (Clave Foranea) en Array */ 	
    public function getInsMatrizEnArray(&$arr_os){
        if($this->getInsMatrizId() != 'null'){
            if(isset($arr_os[$this->getInsMatrizId()])){
                $o = $arr_os[$this->getInsMatrizId()];
            }else{
                $o = InsMatriz::getOxId($this->getInsMatrizId());
                if($o){
                    $arr_os[$this->getInsMatrizId()] = $o;
                }
            }
        }else{
            $o = new InsMatriz();
        }
        return $o;		
    }

	/* Metodo que retorna el InsMarca (Clave Foranea) */ 	
    public function getInsMarca(){
        $o = new InsMarca();
        $o->setId($this->getInsMarcaId());
        return $o;			
    }

	/* Metodo que retorna el InsMarca (Clave Foranea) en Array */ 	
    public function getInsMarcaEnArray(&$arr_os){
        if($this->getInsMarcaId() != 'null'){
            if(isset($arr_os[$this->getInsMarcaId()])){
                $o = $arr_os[$this->getInsMarcaId()];
            }else{
                $o = InsMarca::getOxId($this->getInsMarcaId());
                if($o){
                    $arr_os[$this->getInsMarcaId()] = $o;
                }
            }
        }else{
            $o = new InsMarca();
        }
        return $o;		
    }

	/* Metodo que retorna el InsUnidadMedida (Clave Foranea) */ 	
    public function getInsUnidadMedida(){
        $o = new InsUnidadMedida();
        $o->setId($this->getInsUnidadMedidaId());
        return $o;			
    }

	/* Metodo que retorna el InsUnidadMedida (Clave Foranea) en Array */ 	
    public function getInsUnidadMedidaEnArray(&$arr_os){
        if($this->getInsUnidadMedidaId() != 'null'){
            if(isset($arr_os[$this->getInsUnidadMedidaId()])){
                $o = $arr_os[$this->getInsUnidadMedidaId()];
            }else{
                $o = InsUnidadMedida::getOxId($this->getInsUnidadMedidaId());
                if($o){
                    $arr_os[$this->getInsUnidadMedidaId()] = $o;
                }
            }
        }else{
            $o = new InsUnidadMedida();
        }
        return $o;		
    }

	/* Metodo que retorna el InsUnidadMedidaPedido (Clave Foranea) */ 	
    public function getInsUnidadMedidaPedido(){
        $o = new InsUnidadMedidaPedido();
        $o->setId($this->getInsUnidadMedidaPedidoId());
        return $o;			
    }

	/* Metodo que retorna el InsUnidadMedidaPedido (Clave Foranea) en Array */ 	
    public function getInsUnidadMedidaPedidoEnArray(&$arr_os){
        if($this->getInsUnidadMedidaPedidoId() != 'null'){
            if(isset($arr_os[$this->getInsUnidadMedidaPedidoId()])){
                $o = $arr_os[$this->getInsUnidadMedidaPedidoId()];
            }else{
                $o = InsUnidadMedidaPedido::getOxId($this->getInsUnidadMedidaPedidoId());
                if($o){
                    $arr_os[$this->getInsUnidadMedidaPedidoId()] = $o;
                }
            }
        }else{
            $o = new InsUnidadMedidaPedido();
        }
        return $o;		
    }

	/* Metodo que retorna el InsTipoConsumo (Clave Foranea) */ 	
    public function getInsTipoConsumo(){
        $o = new InsTipoConsumo();
        $o->setId($this->getInsTipoConsumoId());
        return $o;			
    }

	/* Metodo que retorna el InsTipoConsumo (Clave Foranea) en Array */ 	
    public function getInsTipoConsumoEnArray(&$arr_os){
        if($this->getInsTipoConsumoId() != 'null'){
            if(isset($arr_os[$this->getInsTipoConsumoId()])){
                $o = $arr_os[$this->getInsTipoConsumoId()];
            }else{
                $o = InsTipoConsumo::getOxId($this->getInsTipoConsumoId());
                if($o){
                    $arr_os[$this->getInsTipoConsumoId()] = $o;
                }
            }
        }else{
            $o = new InsTipoConsumo();
        }
        return $o;		
    }

	/* Metodo que retorna el InsTipoNecesidad (Clave Foranea) */ 	
    public function getInsTipoNecesidad(){
        $o = new InsTipoNecesidad();
        $o->setId($this->getInsTipoNecesidadId());
        return $o;			
    }

	/* Metodo que retorna el InsTipoNecesidad (Clave Foranea) en Array */ 	
    public function getInsTipoNecesidadEnArray(&$arr_os){
        if($this->getInsTipoNecesidadId() != 'null'){
            if(isset($arr_os[$this->getInsTipoNecesidadId()])){
                $o = $arr_os[$this->getInsTipoNecesidadId()];
            }else{
                $o = InsTipoNecesidad::getOxId($this->getInsTipoNecesidadId());
                if($o){
                    $arr_os[$this->getInsTipoNecesidadId()] = $o;
                }
            }
        }else{
            $o = new InsTipoNecesidad();
        }
        return $o;		
    }

	/* Metodo que retorna el InsNivelAprovisionamiento (Clave Foranea) */ 	
    public function getInsNivelAprovisionamiento(){
        $o = new InsNivelAprovisionamiento();
        $o->setId($this->getInsNivelAprovisionamientoId());
        return $o;			
    }

	/* Metodo que retorna el InsNivelAprovisionamiento (Clave Foranea) en Array */ 	
    public function getInsNivelAprovisionamientoEnArray(&$arr_os){
        if($this->getInsNivelAprovisionamientoId() != 'null'){
            if(isset($arr_os[$this->getInsNivelAprovisionamientoId()])){
                $o = $arr_os[$this->getInsNivelAprovisionamientoId()];
            }else{
                $o = InsNivelAprovisionamiento::getOxId($this->getInsNivelAprovisionamientoId());
                if($o){
                    $arr_os[$this->getInsNivelAprovisionamientoId()] = $o;
                }
            }
        }else{
            $o = new InsNivelAprovisionamiento();
        }
        return $o;		
    }

	/* Metodo que retorna el InsTipoInsumo (Clave Foranea) */ 	
    public function getInsTipoInsumo(){
        $o = new InsTipoInsumo();
        $o->setId($this->getInsTipoInsumoId());
        return $o;			
    }

	/* Metodo que retorna el InsTipoInsumo (Clave Foranea) en Array */ 	
    public function getInsTipoInsumoEnArray(&$arr_os){
        if($this->getInsTipoInsumoId() != 'null'){
            if(isset($arr_os[$this->getInsTipoInsumoId()])){
                $o = $arr_os[$this->getInsTipoInsumoId()];
            }else{
                $o = InsTipoInsumo::getOxId($this->getInsTipoInsumoId());
                if($o){
                    $arr_os[$this->getInsTipoInsumoId()] = $o;
                }
            }
        }else{
            $o = new InsTipoInsumo();
        }
        return $o;		
    }

	/* Metodo que retorna el InsTipoFabricante (Clave Foranea) */ 	
    public function getInsTipoFabricante(){
        $o = new InsTipoFabricante();
        $o->setId($this->getInsTipoFabricanteId());
        return $o;			
    }

	/* Metodo que retorna el InsTipoFabricante (Clave Foranea) en Array */ 	
    public function getInsTipoFabricanteEnArray(&$arr_os){
        if($this->getInsTipoFabricanteId() != 'null'){
            if(isset($arr_os[$this->getInsTipoFabricanteId()])){
                $o = $arr_os[$this->getInsTipoFabricanteId()];
            }else{
                $o = InsTipoFabricante::getOxId($this->getInsTipoFabricanteId());
                if($o){
                    $arr_os[$this->getInsTipoFabricanteId()] = $o;
                }
            }
        }else{
            $o = new InsTipoFabricante();
        }
        return $o;		
    }

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
    }

	/* Metodo que retorna un array con la descripcion extendida del objeto */ 	
    public function getArrDescripcionExtendidaParaBackend(){
        $array = array();            
        
        $array = array(
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
                ),
        );            
        
        return $array;
    }

	/* Metodo que retorna la descripcion para el bloque de mas info */ 	
    public function getDescripcionBloqueMasInfo(){
        return $this->getDescripcion();			
    }

	/* Metodo que retorna la descripcion usada en los SELECT OPTION */ 	
    public function getDescripcionParaSelect(){
        return $this->getDescripcion();			
    }

	/* Metodo que retorna la descripcion usada en bloque relaciones */ 	
    public function getDescripcionParaRelacion(){
        return $this->getDescripcion();			
    }

	/* Metodo que retorna la descripcion vinculante del objeto */ 	
    public function getDescripcionVinculante($contexto_solicitante = ''){
        $descripcion = '';
            		
        if($contexto_solicitante != InsCategoria::GEN_CLASE){
            if($this->getInsCategoria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsCategoria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsCategoria()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsMatriz::GEN_CLASE){
            if($this->getInsMatriz()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsMatriz::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsMatriz()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsMarca::GEN_CLASE){
            if($this->getInsMarca()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsMarca::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsMarca()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsUnidadMedida::GEN_CLASE){
            if($this->getInsUnidadMedida()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsUnidadMedida::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsUnidadMedida()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsUnidadMedidaPedido::GEN_CLASE){
            if($this->getInsUnidadMedidaPedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsUnidadMedidaPedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsUnidadMedidaPedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsTipoConsumo::GEN_CLASE){
            if($this->getInsTipoConsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsTipoConsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsTipoConsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsTipoNecesidad::GEN_CLASE){
            if($this->getInsTipoNecesidad()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsTipoNecesidad::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsTipoNecesidad()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsNivelAprovisionamiento::GEN_CLASE){
            if($this->getInsNivelAprovisionamiento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsNivelAprovisionamiento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsNivelAprovisionamiento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoIva::GEN_CLASE){
            if($this->getGralTipoIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoIva::GEN_CLASE){
            if($this->getGralTipoIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoIva::GEN_CLASE){
            if($this->getGralTipoIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoIva::GEN_CLASE){
            if($this->getGralTipoIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsTipoInsumo::GEN_CLASE){
            if($this->getInsTipoInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsTipoInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsTipoInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsTipoFabricante::GEN_CLASE){
            if($this->getInsTipoFabricante()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsTipoFabricante::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsTipoFabricante()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        return $descripcion;

    }

	/* Metodo que retorna la descripcion del usuario creador del registro */ 	
    public function getCreadoPorDescripcion(){
        $o = UsUsuario::getOxId($this->getCreadoPor());
        if($o) return $o->getDescripcion();

        return '-';
    }

	/* Metodo que retorna la descripcion del usuario ultimo modificador del registro */ 	
    public function getModificadoPorDescripcion(){
        $o = UsUsuario::getOxId($this->getModificadoPor());
        if($o) return $o->getDescripcion();

        return '-';
    }

	/* Metodo que retorna la cantidad total de registros */ 	
    static function getCantidadTotalDeRegistros(){
            $cons = new Consulta();
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_insumo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_insumo';");
            
            $cons->execute();

            $fila = pg_fetch_array($cons->getResultado());
            $cantidad = $fila['cantidad'];

            // -------------------------------------------------------------
            // excepcion para controlar bug de pocos registros por falta 
            // de vacuum al utilizar reltuples
            // reltuples hace muchisimo mas eficiente la ejecucion
            // -------------------------------------------------------------
            if($cantidad < 100){
                return 100;
            }

            return $cantidad;
    }

	/* retorna un objeto de acuerdo al 'id' */ 	
	static function getOxId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'id' */ 	
	static function getOsxId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_categoria_id' */ 	
	static function getOxInsCategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_CATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_categoria_id' */ 	
	static function getOsxInsCategoriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_CATEGORIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_matriz_id' */ 	
	static function getOxInsMatrizId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MATRIZ_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_matriz_id' */ 	
	static function getOsxInsMatrizId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MATRIZ_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion' */ 	
	static function getOsxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_marca_id' */ 	
	static function getOxInsMarcaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MARCA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_marca_id' */ 	
	static function getOsxInsMarcaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_MARCA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_corta' */ 	
	static function getOsxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_web' */ 	
	static function getOxDescripcionWeb($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_WEB, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_web' */ 	
	static function getOsxDescripcionWeb($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_WEB, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo' */ 	
	static function getOsxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_marca' */ 	
	static function getOxCodigoMarca($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MARCA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_marca' */ 	
	static function getOsxCodigoMarca($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_MARCA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_interno' */ 	
	static function getOxCodigoInterno($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_INTERNO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_interno' */ 	
	static function getOsxCodigoInterno($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_INTERNO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_importacion' */ 	
	static function getOxCodigoImportacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_IMPORTACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_importacion' */ 	
	static function getOsxCodigoImportacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_IMPORTACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_barra' */ 	
	static function getOxCodigoBarra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_BARRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_barra' */ 	
	static function getOsxCodigoBarra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_BARRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_barra_interno' */ 	
	static function getOxCodigoBarraInterno($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_BARRA_INTERNO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_barra_interno' */ 	
	static function getOsxCodigoBarraInterno($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_BARRA_INTERNO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'url_tienda' */ 	
	static function getOxUrlTienda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_URL_TIENDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'url_tienda' */ 	
	static function getOsxUrlTienda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_URL_TIENDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_unidad_medida_id' */ 	
	static function getOxInsUnidadMedidaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_unidad_medida_id' */ 	
	static function getOsxInsUnidadMedidaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'es_comprable' */ 	
	static function getOxEsComprable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_COMPRABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'es_comprable' */ 	
	static function getOsxEsComprable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_COMPRABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'es_consumible' */ 	
	static function getOxEsConsumible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_CONSUMIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'es_consumible' */ 	
	static function getOsxEsConsumible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_CONSUMIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'es_vendible' */ 	
	static function getOxEsVendible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_VENDIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'es_vendible' */ 	
	static function getOsxEsVendible($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_VENDIBLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'es_fabricable' */ 	
	static function getOxEsFabricable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_FABRICABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'es_fabricable' */ 	
	static function getOsxEsFabricable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_FABRICABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'es_transformable_origen' */ 	
	static function getOxEsTransformableOrigen($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_TRANSFORMABLE_ORIGEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'es_transformable_origen' */ 	
	static function getOsxEsTransformableOrigen($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_TRANSFORMABLE_ORIGEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'es_transformable_destino' */ 	
	static function getOxEsTransformableDestino($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_TRANSFORMABLE_DESTINO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'es_transformable_destino' */ 	
	static function getOsxEsTransformableDestino($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ES_TRANSFORMABLE_DESTINO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_unidad_medida_pedido_id' */ 	
	static function getOxInsUnidadMedidaPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_UNIDAD_MEDIDA_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_unidad_medida_pedido_id' */ 	
	static function getOsxInsUnidadMedidaPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_UNIDAD_MEDIDA_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_tipo_consumo_id' */ 	
	static function getOxInsTipoConsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_CONSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_tipo_consumo_id' */ 	
	static function getOsxInsTipoConsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_CONSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'retornable' */ 	
	static function getOxRetornable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RETORNABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'retornable' */ 	
	static function getOsxRetornable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RETORNABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'identificable' */ 	
	static function getOxIdentificable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IDENTIFICABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'identificable' */ 	
	static function getOsxIdentificable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IDENTIFICABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'control_stock' */ 	
	static function getOxControlStock($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONTROL_STOCK, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'control_stock' */ 	
	static function getOsxControlStock($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONTROL_STOCK, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_minimo' */ 	
	static function getOxPuntoMinimo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MINIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_minimo' */ 	
	static function getOsxPuntoMinimo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MINIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_pedido' */ 	
	static function getOxPuntoPedido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_PEDIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_pedido' */ 	
	static function getOsxPuntoPedido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_PEDIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'punto_maximo' */ 	
	static function getOxPuntoMaximo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MAXIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'punto_maximo' */ 	
	static function getOsxPuntoMaximo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PUNTO_MAXIMO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_maxima_pedido' */ 	
	static function getOxCantidadMaximaPedido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_MAXIMA_PEDIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_maxima_pedido' */ 	
	static function getOsxCantidadMaximaPedido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_MAXIMA_PEDIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_tipo_necesidad_id' */ 	
	static function getOxInsTipoNecesidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_NECESIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_tipo_necesidad_id' */ 	
	static function getOsxInsTipoNecesidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_NECESIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_nivel_aprovisionamiento_id' */ 	
	static function getOxInsNivelAprovisionamientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_NIVEL_APROVISIONAMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_nivel_aprovisionamiento_id' */ 	
	static function getOsxInsNivelAprovisionamientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_NIVEL_APROVISIONAMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'hereda_marcas' */ 	
	static function getOxHeredaMarcas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HEREDA_MARCAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'hereda_marcas' */ 	
	static function getOsxHeredaMarcas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HEREDA_MARCAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'venta_web' */ 	
	static function getOxVentaWeb($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENTA_WEB, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'venta_web' */ 	
	static function getOsxVentaWeb($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENTA_WEB, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'venta_mercadolibre' */ 	
	static function getOxVentaMercadolibre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENTA_MERCADOLIBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'venta_mercadolibre' */ 	
	static function getOsxVentaMercadolibre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENTA_MERCADOLIBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'venta_mayorista' */ 	
	static function getOxVentaMayorista($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENTA_MAYORISTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'venta_mayorista' */ 	
	static function getOsxVentaMayorista($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENTA_MAYORISTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_venta' */ 	
	static function getOxGralTipoIvaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_iva_venta' */ 	
	static function getOsxGralTipoIvaVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_venta_z' */ 	
	static function getOxGralTipoIvaVentaZ($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_VENTA_Z, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_iva_venta_z' */ 	
	static function getOsxGralTipoIvaVentaZ($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_VENTA_Z, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_compra' */ 	
	static function getOxGralTipoIvaCompra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_COMPRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_iva_compra' */ 	
	static function getOsxGralTipoIvaCompra($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_COMPRA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_compra_z' */ 	
	static function getOxGralTipoIvaCompraZ($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_COMPRA_Z, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_iva_compra_z' */ 	
	static function getOsxGralTipoIvaCompraZ($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_COMPRA_Z, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'proporcion_iva' */ 	
	static function getOxProporcionIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PROPORCION_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'proporcion_iva' */ 	
	static function getOsxProporcionIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PROPORCION_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_tipo_insumo_id' */ 	
	static function getOxInsTipoInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_tipo_insumo_id' */ 	
	static function getOsxInsTipoInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_tipo_fabricante_id' */ 	
	static function getOxInsTipoFabricanteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_FABRICANTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_tipo_fabricante_id' */ 	
	static function getOsxInsTipoFabricanteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_FABRICANTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'notas_internas' */ 	
	static function getOxNotasInternas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTAS_INTERNAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'notas_internas' */ 	
	static function getOsxNotasInternas($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTAS_INTERNAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'observacion' */ 	
	static function getOsxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'datos_migracion' */ 	
	static function getOxDatosMigracion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DATOS_MIGRACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'datos_migracion' */ 	
	static function getOsxDatosMigracion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DATOS_MIGRACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'claves' */ 	
	static function getOxClaves($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'claves' */ 	
	static function getOsxClaves($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'claves_atributos' */ 	
	static function getOxClavesAtributos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES_ATRIBUTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'claves_atributos' */ 	
	static function getOsxClavesAtributos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES_ATRIBUTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'claves_tienda' */ 	
	static function getOxClavesTienda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES_TIENDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'claves_tienda' */ 	
	static function getOsxClavesTienda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLAVES_TIENDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'orden' */ 	
	static function getOsxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'estado' */ 	
	static function getOsxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'creado' */ 	
	static function getOsxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'creado_por' */ 	
	static function getOsxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'modificado' */ 	
	static function getOsxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'modificado_por' */ 	
	static function getOsxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo un array asociativo indicado */ 	
        /*
	Ejemplo de Array que debe recibir:
	 = array(
            array('campo' => 'id', 'valor' => '6'),
            array('campo' => 'gen_clase_id', 'valor' => '6')
	);	
	*/
	static function getOxArray($array){
            $criterio = new Criterio();
            foreach($array as $dato){
                $criterio->add($dato['campo'], $dato['valor'], Criterio::IGUAL);
            }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo un array asociativo indicado */ 	
	/*
	Ejemplo de Array que debe recibir:
	 = array(
            array('campo' => 'id', 'valor' => '6'),
            array('campo' => 'gen_clase_id', 'valor' => '6')
	);	
	*/
	static function getOsxArray($array){
            $criterio = new Criterio();
            foreach($array as $dato){
                $criterio->add($dato['campo'], $dato['valor'], Criterio::IGUAL);
            }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsInsumos($paginador, $criterio);
            return $obs;
	}

	/* retorna el nombre de archivo de la imagen cuando no hay imagen */ 	
	public function getPathImagenNoImagen(){
            return Gral::getPath('path_http').'imgs/no-imagen.jpg';
	}

	/* retorna el nombre de archivo de la imagen */ 	
	public function getPathImagenPrincipal($thumb = false){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(InsInsumoImagen::GEN_TABLA);
            $c->addOrden(InsInsumoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getInsInsumoImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getInsInsumoImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(InsInsumoImagen::GEN_TABLA);
            $c->addOrden(InsInsumoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getInsInsumoImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getInsInsumoImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getInsInsumoImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(InsInsumoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(InsInsumoImagen::GEN_TABLA);
            $c->addOrden(InsInsumoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getInsInsumoImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_insumo_adm');
            }else{
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => $archivo);
            }
            $arr = serialize($arr);
            $arr = urlencode($arr);
            return $arr;
	}

	/* metodos static general para atributos para el menu contextual */ 	
	public function getFiltrosArrXCampo($clase_relacion, $campo){
            eval("
            \$arr = 
            array(
                array('campo' => \$campo, 'valor' => \$this->get".$clase_relacion."()->getId()),
            );
            ");
            $arr = serialize($arr);
            $arr = urlencode($arr);
            return $arr;		
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'creado' */ 	
	public function getCreadoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getCreado(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getCreadoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getCreadoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'modificado' */ 	
	public function getModificadoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getModificado(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getModificadoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getModificadoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getInsInsumoBultosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(InsInsumoBulto::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(InsInsumoBulto::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(InsInsumoBulto::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(InsInsumoBulto::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(InsInsumoBulto::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $ins_insumo_bultos = InsInsumoBulto::getInsInsumoBultos($paginador, $c);

            $arr['COLECCION'] = $ins_insumo_bultos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(InsInsumo::GEN_TABLA);
                $c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ins_insumos = InsInsumo::getInsInsumos(null, $c);

                $arr = array();
                foreach($ins_insumos as $ins_insumo){
                    $descripcion = $ins_insumo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>