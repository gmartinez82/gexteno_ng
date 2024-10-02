<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BWsFeOpeSolicitud
{ 
	
	const SES_PAGINACION = 'adm_wsfeopesolicitud_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_wsfeopesolicitud_paginas_registros';
	const SES_CRITERIOS = 'adm_wsfeopesolicitud_criterios';
	
	const GEN_CLASE = 'WsFeOpeSolicitud';
	const GEN_TABLA = 'ws_fe_ope_solicitud';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BWsFeOpeSolicitud */ 
	const GEN_ATTR_ID = 'ws_fe_ope_solicitud.id';
	const GEN_ATTR_DESCRIPCION = 'ws_fe_ope_solicitud.descripcion';
	const GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID = 'ws_fe_ope_solicitud.ws_fe_param_punto_venta_id';
	const GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID = 'ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id';
	const GEN_ATTR_WS_FE_PARAM_TIPO_CONCEPTO_ID = 'ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id';
	const GEN_ATTR_WS_FE_PARAM_TIPO_DOCUMENTO_ID = 'ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id';
	const GEN_ATTR_WS_FE_PARAM_TIPO_MONEDA_ID = 'ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'ws_fe_ope_solicitud.gral_empresa_id';
	const GEN_ATTR_WS_FE_AFIP_CANTIDAD_REGISTRO = 'ws_fe_ope_solicitud.ws_fe_afip_cantidad_registro';
	const GEN_ATTR_WS_FE_AFIP_PUNTO_VENTA = 'ws_fe_ope_solicitud.ws_fe_afip_punto_venta';
	const GEN_ATTR_WS_FE_AFIP_TIPO_COMPROBANTE = 'ws_fe_ope_solicitud.ws_fe_afip_tipo_comprobante';
	const GEN_ATTR_WS_FE_AFIP_TIPO_CONCEPTO = 'ws_fe_ope_solicitud.ws_fe_afip_tipo_concepto';
	const GEN_ATTR_WS_FE_AFIP_TIPO_DOCUMENTO = 'ws_fe_ope_solicitud.ws_fe_afip_tipo_documento';
	const GEN_ATTR_WS_FE_AFIP_NUMERO_DOCUMENTO = 'ws_fe_ope_solicitud.ws_fe_afip_numero_documento';
	const GEN_ATTR_WS_FE_AFIP_COMPROBANTE_DESDE = 'ws_fe_ope_solicitud.ws_fe_afip_comprobante_desde';
	const GEN_ATTR_WS_FE_AFIP_COMPROBANTE_HASTA = 'ws_fe_ope_solicitud.ws_fe_afip_comprobante_hasta';
	const GEN_ATTR_WS_FE_AFIP_COMPROBANTE_FECHA = 'ws_fe_ope_solicitud.ws_fe_afip_comprobante_fecha';
	const GEN_ATTR_WS_FE_AFIP_IMPORTE_TOTAL = 'ws_fe_ope_solicitud.ws_fe_afip_importe_total';
	const GEN_ATTR_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO = 'ws_fe_ope_solicitud.ws_fe_afip_importe_total_concepto';
	const GEN_ATTR_WS_FE_AFIP_IMPORTE_NETO = 'ws_fe_ope_solicitud.ws_fe_afip_importe_neto';
	const GEN_ATTR_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA = 'ws_fe_ope_solicitud.ws_fe_afip_importe_operacion_exenta';
	const GEN_ATTR_WS_FE_AFIP_IMPORTE_TRIBUTO = 'ws_fe_ope_solicitud.ws_fe_afip_importe_tributo';
	const GEN_ATTR_WS_FE_AFIP_IMPORTE_IVA = 'ws_fe_ope_solicitud.ws_fe_afip_importe_iva';
	const GEN_ATTR_WS_FE_AFIP_FECHA_SERVICIO_DESDE = 'ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_desde';
	const GEN_ATTR_WS_FE_AFIP_FECHA_SERVICIO_HASTA = 'ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_hasta';
	const GEN_ATTR_WS_FE_AFIP_VENCIMIENTO_PAGO = 'ws_fe_ope_solicitud.ws_fe_afip_vencimiento_pago';
	const GEN_ATTR_WS_FE_AFIP_TIPO_MONEDA = 'ws_fe_ope_solicitud.ws_fe_afip_tipo_moneda';
	const GEN_ATTR_WS_FE_AFIP_COTIZACION_MONEDA = 'ws_fe_ope_solicitud.ws_fe_afip_cotizacion_moneda';
	const GEN_ATTR_OBSERVACION = 'ws_fe_ope_solicitud.observacion';
	const GEN_ATTR_ORDEN = 'ws_fe_ope_solicitud.orden';
	const GEN_ATTR_ESTADO = 'ws_fe_ope_solicitud.estado';
	const GEN_ATTR_CREADO = 'ws_fe_ope_solicitud.creado';
	const GEN_ATTR_CREADO_POR = 'ws_fe_ope_solicitud.creado_por';
	const GEN_ATTR_MODIFICADO = 'ws_fe_ope_solicitud.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ws_fe_ope_solicitud.modificado_por';

	/* Constantes de Atributos Min de BWsFeOpeSolicitud */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_WS_FE_PARAM_PUNTO_VENTA_ID = 'ws_fe_param_punto_venta_id';
	const GEN_ATTR_MIN_WS_FE_PARAM_TIPO_COMPROBANTE_ID = 'ws_fe_param_tipo_comprobante_id';
	const GEN_ATTR_MIN_WS_FE_PARAM_TIPO_CONCEPTO_ID = 'ws_fe_param_tipo_concepto_id';
	const GEN_ATTR_MIN_WS_FE_PARAM_TIPO_DOCUMENTO_ID = 'ws_fe_param_tipo_documento_id';
	const GEN_ATTR_MIN_WS_FE_PARAM_TIPO_MONEDA_ID = 'ws_fe_param_tipo_moneda_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO = 'ws_fe_afip_cantidad_registro';
	const GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA = 'ws_fe_afip_punto_venta';
	const GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE = 'ws_fe_afip_tipo_comprobante';
	const GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO = 'ws_fe_afip_tipo_concepto';
	const GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO = 'ws_fe_afip_tipo_documento';
	const GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO = 'ws_fe_afip_numero_documento';
	const GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE = 'ws_fe_afip_comprobante_desde';
	const GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA = 'ws_fe_afip_comprobante_hasta';
	const GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA = 'ws_fe_afip_comprobante_fecha';
	const GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL = 'ws_fe_afip_importe_total';
	const GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO = 'ws_fe_afip_importe_total_concepto';
	const GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_NETO = 'ws_fe_afip_importe_neto';
	const GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA = 'ws_fe_afip_importe_operacion_exenta';
	const GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TRIBUTO = 'ws_fe_afip_importe_tributo';
	const GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_IVA = 'ws_fe_afip_importe_iva';
	const GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_DESDE = 'ws_fe_afip_fecha_servicio_desde';
	const GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_HASTA = 'ws_fe_afip_fecha_servicio_hasta';
	const GEN_ATTR_MIN_WS_FE_AFIP_VENCIMIENTO_PAGO = 'ws_fe_afip_vencimiento_pago';
	const GEN_ATTR_MIN_WS_FE_AFIP_TIPO_MONEDA = 'ws_fe_afip_tipo_moneda';
	const GEN_ATTR_MIN_WS_FE_AFIP_COTIZACION_MONEDA = 'ws_fe_afip_cotizacion_moneda';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
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
	

	/* Atributos de BWsFeOpeSolicitud */ 
	private $id;
	private $descripcion;
	private $ws_fe_param_punto_venta_id;
	private $ws_fe_param_tipo_comprobante_id;
	private $ws_fe_param_tipo_concepto_id;
	private $ws_fe_param_tipo_documento_id;
	private $ws_fe_param_tipo_moneda_id;
	private $gral_empresa_id;
	private $ws_fe_afip_cantidad_registro;
	private $ws_fe_afip_punto_venta;
	private $ws_fe_afip_tipo_comprobante;
	private $ws_fe_afip_tipo_concepto;
	private $ws_fe_afip_tipo_documento;
	private $ws_fe_afip_numero_documento;
	private $ws_fe_afip_comprobante_desde;
	private $ws_fe_afip_comprobante_hasta;
	private $ws_fe_afip_comprobante_fecha;
	private $ws_fe_afip_importe_total;
	private $ws_fe_afip_importe_total_concepto;
	private $ws_fe_afip_importe_neto;
	private $ws_fe_afip_importe_operacion_exenta;
	private $ws_fe_afip_importe_tributo;
	private $ws_fe_afip_importe_iva;
	private $ws_fe_afip_fecha_servicio_desde;
	private $ws_fe_afip_fecha_servicio_hasta;
	private $ws_fe_afip_vencimiento_pago;
	private $ws_fe_afip_tipo_moneda;
	private $ws_fe_afip_cotizacion_moneda;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BWsFeOpeSolicitud */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getWsFeParamPuntoVentaId(){ if(isset($this->ws_fe_param_punto_venta_id)){ return $this->ws_fe_param_punto_venta_id; }else{ return 'null'; } }
	public function getWsFeParamTipoComprobanteId(){ if(isset($this->ws_fe_param_tipo_comprobante_id)){ return $this->ws_fe_param_tipo_comprobante_id; }else{ return 'null'; } }
	public function getWsFeParamTipoConceptoId(){ if(isset($this->ws_fe_param_tipo_concepto_id)){ return $this->ws_fe_param_tipo_concepto_id; }else{ return 'null'; } }
	public function getWsFeParamTipoDocumentoId(){ if(isset($this->ws_fe_param_tipo_documento_id)){ return $this->ws_fe_param_tipo_documento_id; }else{ return 'null'; } }
	public function getWsFeParamTipoMonedaId(){ if(isset($this->ws_fe_param_tipo_moneda_id)){ return $this->ws_fe_param_tipo_moneda_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getWsFeAfipCantidadRegistro(){ if(isset($this->ws_fe_afip_cantidad_registro)){ return $this->ws_fe_afip_cantidad_registro; }else{ return ''; } }
	public function getWsFeAfipPuntoVenta(){ if(isset($this->ws_fe_afip_punto_venta)){ return $this->ws_fe_afip_punto_venta; }else{ return ''; } }
	public function getWsFeAfipTipoComprobante(){ if(isset($this->ws_fe_afip_tipo_comprobante)){ return $this->ws_fe_afip_tipo_comprobante; }else{ return ''; } }
	public function getWsFeAfipTipoConcepto(){ if(isset($this->ws_fe_afip_tipo_concepto)){ return $this->ws_fe_afip_tipo_concepto; }else{ return ''; } }
	public function getWsFeAfipTipoDocumento(){ if(isset($this->ws_fe_afip_tipo_documento)){ return $this->ws_fe_afip_tipo_documento; }else{ return ''; } }
	public function getWsFeAfipNumeroDocumento(){ if(isset($this->ws_fe_afip_numero_documento)){ return $this->ws_fe_afip_numero_documento; }else{ return ''; } }
	public function getWsFeAfipComprobanteDesde(){ if(isset($this->ws_fe_afip_comprobante_desde)){ return $this->ws_fe_afip_comprobante_desde; }else{ return ''; } }
	public function getWsFeAfipComprobanteHasta(){ if(isset($this->ws_fe_afip_comprobante_hasta)){ return $this->ws_fe_afip_comprobante_hasta; }else{ return ''; } }
	public function getWsFeAfipComprobanteFecha(){ if(isset($this->ws_fe_afip_comprobante_fecha)){ return $this->ws_fe_afip_comprobante_fecha; }else{ return ''; } }
	public function getWsFeAfipImporteTotal(){ if(isset($this->ws_fe_afip_importe_total)){ return $this->ws_fe_afip_importe_total; }else{ return ''; } }
	public function getWsFeAfipImporteTotalConcepto(){ if(isset($this->ws_fe_afip_importe_total_concepto)){ return $this->ws_fe_afip_importe_total_concepto; }else{ return ''; } }
	public function getWsFeAfipImporteNeto(){ if(isset($this->ws_fe_afip_importe_neto)){ return $this->ws_fe_afip_importe_neto; }else{ return ''; } }
	public function getWsFeAfipImporteOperacionExenta(){ if(isset($this->ws_fe_afip_importe_operacion_exenta)){ return $this->ws_fe_afip_importe_operacion_exenta; }else{ return ''; } }
	public function getWsFeAfipImporteTributo(){ if(isset($this->ws_fe_afip_importe_tributo)){ return $this->ws_fe_afip_importe_tributo; }else{ return ''; } }
	public function getWsFeAfipImporteIva(){ if(isset($this->ws_fe_afip_importe_iva)){ return $this->ws_fe_afip_importe_iva; }else{ return ''; } }
	public function getWsFeAfipFechaServicioDesde(){ if(isset($this->ws_fe_afip_fecha_servicio_desde)){ return $this->ws_fe_afip_fecha_servicio_desde; }else{ return ''; } }
	public function getWsFeAfipFechaServicioHasta(){ if(isset($this->ws_fe_afip_fecha_servicio_hasta)){ return $this->ws_fe_afip_fecha_servicio_hasta; }else{ return ''; } }
	public function getWsFeAfipVencimientoPago(){ if(isset($this->ws_fe_afip_vencimiento_pago)){ return $this->ws_fe_afip_vencimiento_pago; }else{ return ''; } }
	public function getWsFeAfipTipoMoneda(){ if(isset($this->ws_fe_afip_tipo_moneda)){ return $this->ws_fe_afip_tipo_moneda; }else{ return ''; } }
	public function getWsFeAfipCotizacionMoneda(){ if(isset($this->ws_fe_afip_cotizacion_moneda)){ return $this->ws_fe_afip_cotizacion_moneda; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BWsFeOpeSolicitud */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID."
				, ".self::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID."
				, ".self::GEN_ATTR_WS_FE_PARAM_TIPO_CONCEPTO_ID."
				, ".self::GEN_ATTR_WS_FE_PARAM_TIPO_DOCUMENTO_ID."
				, ".self::GEN_ATTR_WS_FE_PARAM_TIPO_MONEDA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_WS_FE_AFIP_CANTIDAD_REGISTRO."
				, ".self::GEN_ATTR_WS_FE_AFIP_PUNTO_VENTA."
				, ".self::GEN_ATTR_WS_FE_AFIP_TIPO_COMPROBANTE."
				, ".self::GEN_ATTR_WS_FE_AFIP_TIPO_CONCEPTO."
				, ".self::GEN_ATTR_WS_FE_AFIP_TIPO_DOCUMENTO."
				, ".self::GEN_ATTR_WS_FE_AFIP_NUMERO_DOCUMENTO."
				, ".self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_DESDE."
				, ".self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_HASTA."
				, ".self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_FECHA."
				, ".self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TOTAL."
				, ".self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO."
				, ".self::GEN_ATTR_WS_FE_AFIP_IMPORTE_NETO."
				, ".self::GEN_ATTR_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA."
				, ".self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TRIBUTO."
				, ".self::GEN_ATTR_WS_FE_AFIP_IMPORTE_IVA."
				, ".self::GEN_ATTR_WS_FE_AFIP_FECHA_SERVICIO_DESDE."
				, ".self::GEN_ATTR_WS_FE_AFIP_FECHA_SERVICIO_HASTA."
				, ".self::GEN_ATTR_WS_FE_AFIP_VENCIMIENTO_PAGO."
				, ".self::GEN_ATTR_WS_FE_AFIP_TIPO_MONEDA."
				, ".self::GEN_ATTR_WS_FE_AFIP_COTIZACION_MONEDA."
				, ".self::GEN_ATTR_OBSERVACION."
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
                    				$this->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
				$this->setWsFeParamPuntoVentaId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_PUNTO_VENTA_ID]);
				$this->setWsFeParamTipoComprobanteId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_COMPROBANTE_ID]);
				$this->setWsFeParamTipoConceptoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_CONCEPTO_ID]);
				$this->setWsFeParamTipoDocumentoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_DOCUMENTO_ID]);
				$this->setWsFeParamTipoMonedaId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_MONEDA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setWsFeAfipCantidadRegistro($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO]);
				$this->setWsFeAfipPuntoVenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA]);
				$this->setWsFeAfipTipoComprobante($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE]);
				$this->setWsFeAfipTipoConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO]);
				$this->setWsFeAfipTipoDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO]);
				$this->setWsFeAfipNumeroDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO]);
				$this->setWsFeAfipComprobanteDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE]);
				$this->setWsFeAfipComprobanteHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA]);
				$this->setWsFeAfipComprobanteFecha($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA]);
				$this->setWsFeAfipImporteTotal($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL]);
				$this->setWsFeAfipImporteTotalConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO]);
				$this->setWsFeAfipImporteNeto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_NETO]);
				$this->setWsFeAfipImporteOperacionExenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA]);
				$this->setWsFeAfipImporteTributo($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TRIBUTO]);
				$this->setWsFeAfipImporteIva($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_IVA]);
				$this->setWsFeAfipFechaServicioDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_DESDE]);
				$this->setWsFeAfipFechaServicioHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_HASTA]);
				$this->setWsFeAfipVencimientoPago($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_VENCIMIENTO_PAGO]);
				$this->setWsFeAfipTipoMoneda($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_MONEDA]);
				$this->setWsFeAfipCotizacionMoneda($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COTIZACION_MONEDA]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
				$this->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setWsFeParamPuntoVentaId($v){ $this->ws_fe_param_punto_venta_id = $v; }
	public function setWsFeParamTipoComprobanteId($v){ $this->ws_fe_param_tipo_comprobante_id = $v; }
	public function setWsFeParamTipoConceptoId($v){ $this->ws_fe_param_tipo_concepto_id = $v; }
	public function setWsFeParamTipoDocumentoId($v){ $this->ws_fe_param_tipo_documento_id = $v; }
	public function setWsFeParamTipoMonedaId($v){ $this->ws_fe_param_tipo_moneda_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setWsFeAfipCantidadRegistro($v){ $this->ws_fe_afip_cantidad_registro = $v; }
	public function setWsFeAfipPuntoVenta($v){ $this->ws_fe_afip_punto_venta = $v; }
	public function setWsFeAfipTipoComprobante($v){ $this->ws_fe_afip_tipo_comprobante = $v; }
	public function setWsFeAfipTipoConcepto($v){ $this->ws_fe_afip_tipo_concepto = $v; }
	public function setWsFeAfipTipoDocumento($v){ $this->ws_fe_afip_tipo_documento = $v; }
	public function setWsFeAfipNumeroDocumento($v){ $this->ws_fe_afip_numero_documento = $v; }
	public function setWsFeAfipComprobanteDesde($v){ $this->ws_fe_afip_comprobante_desde = $v; }
	public function setWsFeAfipComprobanteHasta($v){ $this->ws_fe_afip_comprobante_hasta = $v; }
	public function setWsFeAfipComprobanteFecha($v){ $this->ws_fe_afip_comprobante_fecha = $v; }
	public function setWsFeAfipImporteTotal($v){ $this->ws_fe_afip_importe_total = $v; }
	public function setWsFeAfipImporteTotalConcepto($v){ $this->ws_fe_afip_importe_total_concepto = $v; }
	public function setWsFeAfipImporteNeto($v){ $this->ws_fe_afip_importe_neto = $v; }
	public function setWsFeAfipImporteOperacionExenta($v){ $this->ws_fe_afip_importe_operacion_exenta = $v; }
	public function setWsFeAfipImporteTributo($v){ $this->ws_fe_afip_importe_tributo = $v; }
	public function setWsFeAfipImporteIva($v){ $this->ws_fe_afip_importe_iva = $v; }
	public function setWsFeAfipFechaServicioDesde($v){ $this->ws_fe_afip_fecha_servicio_desde = $v; }
	public function setWsFeAfipFechaServicioHasta($v){ $this->ws_fe_afip_fecha_servicio_hasta = $v; }
	public function setWsFeAfipVencimientoPago($v){ $this->ws_fe_afip_vencimiento_pago = $v; }
	public function setWsFeAfipTipoMoneda($v){ $this->ws_fe_afip_tipo_moneda = $v; }
	public function setWsFeAfipCotizacionMoneda($v){ $this->ws_fe_afip_cotizacion_moneda = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new WsFeOpeSolicitud();
            $o->setId($fila[WsFeOpeSolicitud::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setWsFeParamPuntoVentaId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_PUNTO_VENTA_ID]);
			$o->setWsFeParamTipoComprobanteId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_COMPROBANTE_ID]);
			$o->setWsFeParamTipoConceptoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_CONCEPTO_ID]);
			$o->setWsFeParamTipoDocumentoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_DOCUMENTO_ID]);
			$o->setWsFeParamTipoMonedaId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_MONEDA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setWsFeAfipCantidadRegistro($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO]);
			$o->setWsFeAfipPuntoVenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA]);
			$o->setWsFeAfipTipoComprobante($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE]);
			$o->setWsFeAfipTipoConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO]);
			$o->setWsFeAfipTipoDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO]);
			$o->setWsFeAfipNumeroDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO]);
			$o->setWsFeAfipComprobanteDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE]);
			$o->setWsFeAfipComprobanteHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA]);
			$o->setWsFeAfipComprobanteFecha($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA]);
			$o->setWsFeAfipImporteTotal($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL]);
			$o->setWsFeAfipImporteTotalConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO]);
			$o->setWsFeAfipImporteNeto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_NETO]);
			$o->setWsFeAfipImporteOperacionExenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA]);
			$o->setWsFeAfipImporteTributo($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TRIBUTO]);
			$o->setWsFeAfipImporteIva($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_IVA]);
			$o->setWsFeAfipFechaServicioDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_DESDE]);
			$o->setWsFeAfipFechaServicioHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_HASTA]);
			$o->setWsFeAfipVencimientoPago($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_VENCIMIENTO_PAGO]);
			$o->setWsFeAfipTipoMoneda($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_MONEDA]);
			$o->setWsFeAfipCotizacionMoneda($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COTIZACION_MONEDA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BWsFeOpeSolicitud */ 	
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
            
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BWsFeOpeSolicitud */ 	
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

	/* Save de BWsFeOpeSolicitud */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_COMPROBANTE_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_CONCEPTO_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_MONEDA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_NETO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TRIBUTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_IVA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_DESDE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_HASTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_VENCIMIENTO_PAGO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_MONEDA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COTIZACION_MONEDA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ws_fe_ope_solicitud_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getWsFeParamPuntoVentaId()."
						, ".$this->getWsFeParamTipoComprobanteId()."
						, ".$this->getWsFeParamTipoConceptoId()."
						, ".$this->getWsFeParamTipoDocumentoId()."
						, ".$this->getWsFeParamTipoMonedaId()."
						, ".$this->getGralEmpresaId()."
						, '".$this->getWsFeAfipCantidadRegistro()."'
						, '".$this->getWsFeAfipPuntoVenta()."'
						, '".$this->getWsFeAfipTipoComprobante()."'
						, '".$this->getWsFeAfipTipoConcepto()."'
						, '".$this->getWsFeAfipTipoDocumento()."'
						, '".$this->getWsFeAfipNumeroDocumento()."'
						, '".$this->getWsFeAfipComprobanteDesde()."'
						, '".$this->getWsFeAfipComprobanteHasta()."'
						, '".$this->getWsFeAfipComprobanteFecha()."'
						, '".$this->getWsFeAfipImporteTotal()."'
						, '".$this->getWsFeAfipImporteTotalConcepto()."'
						, '".$this->getWsFeAfipImporteNeto()."'
						, '".$this->getWsFeAfipImporteOperacionExenta()."'
						, '".$this->getWsFeAfipImporteTributo()."'
						, '".$this->getWsFeAfipImporteIva()."'
						, '".$this->getWsFeAfipFechaServicioDesde()."'
						, '".$this->getWsFeAfipFechaServicioHasta()."'
						, '".$this->getWsFeAfipVencimientoPago()."'
						, '".$this->getWsFeAfipTipoMoneda()."'
						, '".$this->getWsFeAfipCotizacionMoneda()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ws_fe_ope_solicitud_seq')";
            
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
                 
				 ".WsFeOpeSolicitud::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_PUNTO_VENTA_ID." = ".$this->getWsFeParamPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_COMPROBANTE_ID." = ".$this->getWsFeParamTipoComprobanteId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_CONCEPTO_ID." = ".$this->getWsFeParamTipoConceptoId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_DOCUMENTO_ID." = ".$this->getWsFeParamTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_MONEDA_ID." = ".$this->getWsFeParamTipoMonedaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO." = '".$this->getWsFeAfipCantidadRegistro()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA." = '".$this->getWsFeAfipPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE." = '".$this->getWsFeAfipTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO." = '".$this->getWsFeAfipTipoConcepto()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO." = '".$this->getWsFeAfipTipoDocumento()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO." = '".$this->getWsFeAfipNumeroDocumento()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE." = '".$this->getWsFeAfipComprobanteDesde()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA." = '".$this->getWsFeAfipComprobanteHasta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA." = '".$this->getWsFeAfipComprobanteFecha()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL." = '".$this->getWsFeAfipImporteTotal()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO." = '".$this->getWsFeAfipImporteTotalConcepto()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_NETO." = '".$this->getWsFeAfipImporteNeto()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA." = '".$this->getWsFeAfipImporteOperacionExenta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TRIBUTO." = '".$this->getWsFeAfipImporteTributo()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_IVA." = '".$this->getWsFeAfipImporteIva()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_DESDE." = '".$this->getWsFeAfipFechaServicioDesde()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_HASTA." = '".$this->getWsFeAfipFechaServicioHasta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_VENCIMIENTO_PAGO." = '".$this->getWsFeAfipVencimientoPago()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_MONEDA." = '".$this->getWsFeAfipTipoMoneda()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COTIZACION_MONEDA." = '".$this->getWsFeAfipCotizacionMoneda()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_COMPROBANTE_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_CONCEPTO_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_MONEDA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_NETO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TRIBUTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_IVA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_DESDE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_HASTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_VENCIMIENTO_PAGO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_MONEDA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COTIZACION_MONEDA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getWsFeParamPuntoVentaId()."
						, ".$this->getWsFeParamTipoComprobanteId()."
						, ".$this->getWsFeParamTipoConceptoId()."
						, ".$this->getWsFeParamTipoDocumentoId()."
						, ".$this->getWsFeParamTipoMonedaId()."
						, ".$this->getGralEmpresaId()."
						, '".$this->getWsFeAfipCantidadRegistro()."'
						, '".$this->getWsFeAfipPuntoVenta()."'
						, '".$this->getWsFeAfipTipoComprobante()."'
						, '".$this->getWsFeAfipTipoConcepto()."'
						, '".$this->getWsFeAfipTipoDocumento()."'
						, '".$this->getWsFeAfipNumeroDocumento()."'
						, '".$this->getWsFeAfipComprobanteDesde()."'
						, '".$this->getWsFeAfipComprobanteHasta()."'
						, '".$this->getWsFeAfipComprobanteFecha()."'
						, '".$this->getWsFeAfipImporteTotal()."'
						, '".$this->getWsFeAfipImporteTotalConcepto()."'
						, '".$this->getWsFeAfipImporteNeto()."'
						, '".$this->getWsFeAfipImporteOperacionExenta()."'
						, '".$this->getWsFeAfipImporteTributo()."'
						, '".$this->getWsFeAfipImporteIva()."'
						, '".$this->getWsFeAfipFechaServicioDesde()."'
						, '".$this->getWsFeAfipFechaServicioHasta()."'
						, '".$this->getWsFeAfipVencimientoPago()."'
						, '".$this->getWsFeAfipTipoMoneda()."'
						, '".$this->getWsFeAfipCotizacionMoneda()."'
						, '".$this->getObservacion()."'
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
                     
				 ".WsFeOpeSolicitud::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_PUNTO_VENTA_ID." = ".$this->getWsFeParamPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_COMPROBANTE_ID." = ".$this->getWsFeParamTipoComprobanteId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_CONCEPTO_ID." = ".$this->getWsFeParamTipoConceptoId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_DOCUMENTO_ID." = ".$this->getWsFeParamTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_MONEDA_ID." = ".$this->getWsFeParamTipoMonedaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO." = '".$this->getWsFeAfipCantidadRegistro()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA." = '".$this->getWsFeAfipPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE." = '".$this->getWsFeAfipTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO." = '".$this->getWsFeAfipTipoConcepto()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO." = '".$this->getWsFeAfipTipoDocumento()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO." = '".$this->getWsFeAfipNumeroDocumento()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE." = '".$this->getWsFeAfipComprobanteDesde()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA." = '".$this->getWsFeAfipComprobanteHasta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA." = '".$this->getWsFeAfipComprobanteFecha()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL." = '".$this->getWsFeAfipImporteTotal()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO." = '".$this->getWsFeAfipImporteTotalConcepto()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_NETO." = '".$this->getWsFeAfipImporteNeto()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA." = '".$this->getWsFeAfipImporteOperacionExenta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TRIBUTO." = '".$this->getWsFeAfipImporteTributo()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_IVA." = '".$this->getWsFeAfipImporteIva()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_DESDE." = '".$this->getWsFeAfipFechaServicioDesde()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_HASTA." = '".$this->getWsFeAfipFechaServicioHasta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_VENCIMIENTO_PAGO." = '".$this->getWsFeAfipVencimientoPago()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_MONEDA." = '".$this->getWsFeAfipTipoMoneda()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COTIZACION_MONEDA." = '".$this->getWsFeAfipCotizacionMoneda()."'
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
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
            $o = new WsFeOpeSolicitud();
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

	/* Delete de BWsFeOpeSolicitud */ 	
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
	
            // se elimina la coleccion de VtaNotaCreditoWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCreditoWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditoWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de WsFeOpeSolicitudIvas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(WsFeOpeSolicitudIva::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getWsFeOpeSolicitudIvas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de WsFeOpeSolicitudOpcionals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(WsFeOpeSolicitudOpcional::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getWsFeOpeSolicitudOpcionals(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de WsFeOpeSolicitudComprobanteAsociados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(WsFeOpeSolicitudComprobanteAsociado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getWsFeOpeSolicitudComprobanteAsociados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de WsFeOpeSolicitudTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getWsFeOpeSolicitudTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de WsFeOpeSolicitudRespuestas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(WsFeOpeSolicitudRespuesta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getWsFeOpeSolicitudRespuestas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarWsFeOpeSolicitud(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getWsFeOpeSolicituds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = WsFeOpeSolicitud::setAplicarFiltrosDeAlcance($criterio);

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
	
		$wsfeopesolicituds = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $wsfeopesolicitud = new WsFeOpeSolicitud();
                    $wsfeopesolicitud->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $wsfeopesolicitud->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$wsfeopesolicitud->setWsFeParamPuntoVentaId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_PUNTO_VENTA_ID]);
			$wsfeopesolicitud->setWsFeParamTipoComprobanteId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_COMPROBANTE_ID]);
			$wsfeopesolicitud->setWsFeParamTipoConceptoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_CONCEPTO_ID]);
			$wsfeopesolicitud->setWsFeParamTipoDocumentoId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_DOCUMENTO_ID]);
			$wsfeopesolicitud->setWsFeParamTipoMonedaId($fila[self::GEN_ATTR_MIN_WS_FE_PARAM_TIPO_MONEDA_ID]);
			$wsfeopesolicitud->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$wsfeopesolicitud->setWsFeAfipCantidadRegistro($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO]);
			$wsfeopesolicitud->setWsFeAfipPuntoVenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA]);
			$wsfeopesolicitud->setWsFeAfipTipoComprobante($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE]);
			$wsfeopesolicitud->setWsFeAfipTipoConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO]);
			$wsfeopesolicitud->setWsFeAfipTipoDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO]);
			$wsfeopesolicitud->setWsFeAfipNumeroDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO]);
			$wsfeopesolicitud->setWsFeAfipComprobanteDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE]);
			$wsfeopesolicitud->setWsFeAfipComprobanteHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA]);
			$wsfeopesolicitud->setWsFeAfipComprobanteFecha($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA]);
			$wsfeopesolicitud->setWsFeAfipImporteTotal($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL]);
			$wsfeopesolicitud->setWsFeAfipImporteTotalConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO]);
			$wsfeopesolicitud->setWsFeAfipImporteNeto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_NETO]);
			$wsfeopesolicitud->setWsFeAfipImporteOperacionExenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA]);
			$wsfeopesolicitud->setWsFeAfipImporteTributo($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_TRIBUTO]);
			$wsfeopesolicitud->setWsFeAfipImporteIva($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_IMPORTE_IVA]);
			$wsfeopesolicitud->setWsFeAfipFechaServicioDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_DESDE]);
			$wsfeopesolicitud->setWsFeAfipFechaServicioHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_SERVICIO_HASTA]);
			$wsfeopesolicitud->setWsFeAfipVencimientoPago($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_VENCIMIENTO_PAGO]);
			$wsfeopesolicitud->setWsFeAfipTipoMoneda($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_MONEDA]);
			$wsfeopesolicitud->setWsFeAfipCotizacionMoneda($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COTIZACION_MONEDA]);
			$wsfeopesolicitud->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$wsfeopesolicitud->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$wsfeopesolicitud->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$wsfeopesolicitud->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$wsfeopesolicitud->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$wsfeopesolicitud->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$wsfeopesolicitud->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $wsfeopesolicituds[] = $wsfeopesolicitud;
		}
		
		return $wsfeopesolicituds;
	}	
	

	/* Método getWsFeOpeSolicituds Habilitados */ 	
	static function getWsFeOpeSolicitudsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getWsFeOpeSolicituds para listado de Backend */ 	
	static function getWsFeOpeSolicitudsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getWsFeOpeSolicitudsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = WsFeOpeSolicitud::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getWsFeOpeSolicituds filtrado para select */ 	
	static function getWsFeOpeSolicitudsCmbF($paginador = null, $criterio = null){
            $col = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getWsFeOpeSolicituds filtrado por una coleccion de objetos foraneos de WsFeParamPuntoVenta */ 	
	static function getWsFeOpeSolicitudsXWsFeParamPuntoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitud::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getWsFeParamPuntoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getWsFeOpeSolicituds filtrado por una coleccion de objetos foraneos de WsFeParamTipoComprobante */ 	
	static function getWsFeOpeSolicitudsXWsFeParamTipoComprobantes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitud::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getWsFeParamTipoComprobanteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getWsFeOpeSolicituds filtrado por una coleccion de objetos foraneos de WsFeParamTipoConcepto */ 	
	static function getWsFeOpeSolicitudsXWsFeParamTipoConceptos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_TIPO_CONCEPTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitud::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getWsFeParamTipoConceptoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getWsFeOpeSolicituds filtrado por una coleccion de objetos foraneos de WsFeParamTipoDocumento */ 	
	static function getWsFeOpeSolicitudsXWsFeParamTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitud::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getWsFeParamTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getWsFeOpeSolicituds filtrado por una coleccion de objetos foraneos de WsFeParamTipoMoneda */ 	
	static function getWsFeOpeSolicitudsXWsFeParamTipoMonedas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitud::GEN_ATTR_WS_FE_PARAM_TIPO_MONEDA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitud::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getWsFeParamTipoMonedaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getWsFeOpeSolicituds filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getWsFeOpeSolicitudsXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitud::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitud::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ws_fe_ope_solicitud_adm.php';
            $url_gestion = 'ws_fe_ope_solicitud_gestion.php';
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
	

	/* Metodo getVtaNotaCreditoWsFeOpeSolicituds */ 	
	public function getVtaNotaCreditoWsFeOpeSolicituds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCreditoWsFeOpeSolicitud::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCreditoWsFeOpeSolicitud::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCreditoWsFeOpeSolicitud::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCreditoWsFeOpeSolicitud::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditowsfeopesolicituds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacreditowsfeopesolicitud = VtaNotaCreditoWsFeOpeSolicitud::hidratarObjeto($fila);			
                $vtanotacreditowsfeopesolicituds[] = $vtanotacreditowsfeopesolicitud;
            }

            return $vtanotacreditowsfeopesolicituds;
	}	
	

	/* Método getVtaNotaCreditoWsFeOpeSolicitudsBloque para MasInfo */ 	
	public function getVtaNotaCreditoWsFeOpeSolicitudsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditoWsFeOpeSolicituds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditoWsFeOpeSolicituds Habilitados */ 	
	public function getVtaNotaCreditoWsFeOpeSolicitudsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditoWsFeOpeSolicituds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCreditoWsFeOpeSolicitud */ 	
	public function getVtaNotaCreditoWsFeOpeSolicitud($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditoWsFeOpeSolicituds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCreditoWsFeOpeSolicitud relacionadas */ 	
	public function deleteVtaNotaCreditoWsFeOpeSolicituds(){
            $obs = $this->getVtaNotaCreditoWsFeOpeSolicituds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditoWsFeOpeSolicitudsCmb() VtaNotaCreditoWsFeOpeSolicitud relacionadas */ 	
	public function getVtaNotaCreditoWsFeOpeSolicitudsCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCreditoWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCreditoWsFeOpeSolicitud::getVtaNotaCreditoWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaNotaCreditoWsFeOpeSolicitud */ 	
	public function getVtaNotaCreditosXVtaNotaCreditoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoWsFeOpeSolicitud::GEN_TABLA, VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaNotaCreditoWsFeOpeSolicitud */ 	
	public function getCantidadVtaNotaCreditosXVtaNotaCreditoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoWsFeOpeSolicitud::GEN_TABLA, VtaNotaCreditoWsFeOpeSolicitud::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaNotaCreditoWsFeOpeSolicitud */ 	
	public function getVtaNotaCreditoXVtaNotaCreditoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaNotaCreditoWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitoWsFeOpeSolicituds */ 	
	public function getVtaNotaDebitoWsFeOpeSolicituds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoWsFeOpeSolicitud::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoWsFeOpeSolicitud::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitowsfeopesolicituds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitowsfeopesolicitud = VtaNotaDebitoWsFeOpeSolicitud::hidratarObjeto($fila);			
                $vtanotadebitowsfeopesolicituds[] = $vtanotadebitowsfeopesolicitud;
            }

            return $vtanotadebitowsfeopesolicituds;
	}	
	

	/* Método getVtaNotaDebitoWsFeOpeSolicitudsBloque para MasInfo */ 	
	public function getVtaNotaDebitoWsFeOpeSolicitudsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoWsFeOpeSolicituds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoWsFeOpeSolicituds Habilitados */ 	
	public function getVtaNotaDebitoWsFeOpeSolicitudsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoWsFeOpeSolicituds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoWsFeOpeSolicitud */ 	
	public function getVtaNotaDebitoWsFeOpeSolicitud($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoWsFeOpeSolicituds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoWsFeOpeSolicitud relacionadas */ 	
	public function deleteVtaNotaDebitoWsFeOpeSolicituds(){
            $obs = $this->getVtaNotaDebitoWsFeOpeSolicituds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoWsFeOpeSolicitudsCmb() VtaNotaDebitoWsFeOpeSolicitud relacionadas */ 	
	public function getVtaNotaDebitoWsFeOpeSolicitudsCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoWsFeOpeSolicitud::getVtaNotaDebitoWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaDebitos (Coleccion) relacionados a traves de VtaNotaDebitoWsFeOpeSolicitud */ 	
	public function getVtaNotaDebitosXVtaNotaDebitoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA, VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaDebitos relacionados a traves de VtaNotaDebitoWsFeOpeSolicitud */ 	
	public function getCantidadVtaNotaDebitosXVtaNotaDebitoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA, VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaDebito (Objeto) relacionado a traves de VtaNotaDebitoWsFeOpeSolicitud */ 	
	public function getVtaNotaDebitoXVtaNotaDebitoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaDebitosXVtaNotaDebitoWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboWsFeOpeSolicituds */ 	
	public function getVtaReciboWsFeOpeSolicituds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboWsFeOpeSolicitud::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboWsFeOpeSolicitud::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboWsFeOpeSolicitud::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboWsFeOpeSolicitud::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboWsFeOpeSolicitud::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtarecibowsfeopesolicituds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtarecibowsfeopesolicitud = VtaReciboWsFeOpeSolicitud::hidratarObjeto($fila);			
                $vtarecibowsfeopesolicituds[] = $vtarecibowsfeopesolicitud;
            }

            return $vtarecibowsfeopesolicituds;
	}	
	

	/* Método getVtaReciboWsFeOpeSolicitudsBloque para MasInfo */ 	
	public function getVtaReciboWsFeOpeSolicitudsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboWsFeOpeSolicituds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboWsFeOpeSolicituds Habilitados */ 	
	public function getVtaReciboWsFeOpeSolicitudsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboWsFeOpeSolicituds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboWsFeOpeSolicitud */ 	
	public function getVtaReciboWsFeOpeSolicitud($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboWsFeOpeSolicituds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboWsFeOpeSolicitud relacionadas */ 	
	public function deleteVtaReciboWsFeOpeSolicituds(){
            $obs = $this->getVtaReciboWsFeOpeSolicituds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboWsFeOpeSolicitudsCmb() VtaReciboWsFeOpeSolicitud relacionadas */ 	
	public function getVtaReciboWsFeOpeSolicitudsCmb(){
            $c = new Criterio();
            $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboWsFeOpeSolicitud::getVtaReciboWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRecibos (Coleccion) relacionados a traves de VtaReciboWsFeOpeSolicitud */ 	
	public function getVtaRecibosXVtaReciboWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaReciboWsFeOpeSolicitud::GEN_TABLA, VtaReciboWsFeOpeSolicitud::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRecibos relacionados a traves de VtaReciboWsFeOpeSolicitud */ 	
	public function getCantidadVtaRecibosXVtaReciboWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaReciboWsFeOpeSolicitud::GEN_TABLA, VtaReciboWsFeOpeSolicitud::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRecibo (Objeto) relacionado a traves de VtaReciboWsFeOpeSolicitud */ 	
	public function getVtaReciboXVtaReciboWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRecibosXVtaReciboWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaWsFeOpeSolicituds */ 	
	public function getVtaFacturaWsFeOpeSolicituds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaWsFeOpeSolicitud::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaWsFeOpeSolicitud::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaWsFeOpeSolicitud::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaWsFeOpeSolicitud::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturawsfeopesolicituds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturawsfeopesolicitud = VtaFacturaWsFeOpeSolicitud::hidratarObjeto($fila);			
                $vtafacturawsfeopesolicituds[] = $vtafacturawsfeopesolicitud;
            }

            return $vtafacturawsfeopesolicituds;
	}	
	

	/* Método getVtaFacturaWsFeOpeSolicitudsBloque para MasInfo */ 	
	public function getVtaFacturaWsFeOpeSolicitudsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaWsFeOpeSolicituds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaWsFeOpeSolicituds Habilitados */ 	
	public function getVtaFacturaWsFeOpeSolicitudsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaWsFeOpeSolicituds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaWsFeOpeSolicitud */ 	
	public function getVtaFacturaWsFeOpeSolicitud($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaWsFeOpeSolicituds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaWsFeOpeSolicitud relacionadas */ 	
	public function deleteVtaFacturaWsFeOpeSolicituds(){
            $obs = $this->getVtaFacturaWsFeOpeSolicituds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaWsFeOpeSolicitudsCmb() VtaFacturaWsFeOpeSolicitud relacionadas */ 	
	public function getVtaFacturaWsFeOpeSolicitudsCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaWsFeOpeSolicitud::getVtaFacturaWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaWsFeOpeSolicitud */ 	
	public function getVtaFacturasXVtaFacturaWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaWsFeOpeSolicitud::GEN_TABLA, VtaFacturaWsFeOpeSolicitud::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaWsFeOpeSolicitud */ 	
	public function getCantidadVtaFacturasXVtaFacturaWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaWsFeOpeSolicitud::GEN_TABLA, VtaFacturaWsFeOpeSolicitud::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaWsFeOpeSolicitud */ 	
	public function getVtaFacturaXVtaFacturaWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getWsFeOpeSolicitudIvas */ 	
	public function getWsFeOpeSolicitudIvas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(WsFeOpeSolicitudIva::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(WsFeOpeSolicitudIva::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(WsFeOpeSolicitudIva::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(WsFeOpeSolicitudIva::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(WsFeOpeSolicitudIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(WsFeOpeSolicitudIva::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".WsFeOpeSolicitudIva::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $wsfeopesolicitudivas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $wsfeopesolicitudiva = WsFeOpeSolicitudIva::hidratarObjeto($fila);			
                $wsfeopesolicitudivas[] = $wsfeopesolicitudiva;
            }

            return $wsfeopesolicitudivas;
	}	
	

	/* Método getWsFeOpeSolicitudIvasBloque para MasInfo */ 	
	public function getWsFeOpeSolicitudIvasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getWsFeOpeSolicitudIvas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudIvas Habilitados */ 	
	public function getWsFeOpeSolicitudIvasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getWsFeOpeSolicitudIvas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudIva */ 	
	public function getWsFeOpeSolicitudIva($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getWsFeOpeSolicitudIvas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de WsFeOpeSolicitudIva relacionadas */ 	
	public function deleteWsFeOpeSolicitudIvas(){
            $obs = $this->getWsFeOpeSolicitudIvas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getWsFeOpeSolicitudIvasCmb() WsFeOpeSolicitudIva relacionadas */ 	
	public function getWsFeOpeSolicitudIvasCmb(){
            $c = new Criterio();
            $c->add(WsFeOpeSolicitudIva::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitudIva::GEN_TABLA);
            $c->setCriterios();

            $os = WsFeOpeSolicitudIva::getWsFeOpeSolicitudIvasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamTipoIvas (Coleccion) relacionados a traves de WsFeOpeSolicitudIva */ 	
	public function getWsFeParamTipoIvasXWsFeOpeSolicitudIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(WsFeOpeSolicitudIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(WsFeOpeSolicitudIva::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoIva::GEN_TABLA);
            $c->addRealJoin(WsFeOpeSolicitudIva::GEN_TABLA, WsFeOpeSolicitudIva::GEN_ATTR_WS_FE_PARAM_TIPO_IVA_ID, WsFeParamTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoIva::getWsFeParamTipoIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamTipoIvas relacionados a traves de WsFeOpeSolicitudIva */ 	
	public function getCantidadWsFeParamTipoIvasXWsFeOpeSolicitudIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamTipoIva::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(WsFeOpeSolicitudIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(WsFeOpeSolicitudIva::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoIva::GEN_TABLA);
            $c->addRealJoin(WsFeOpeSolicitudIva::GEN_TABLA, WsFeOpeSolicitudIva::GEN_ATTR_WS_FE_PARAM_TIPO_IVA_ID, WsFeParamTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoIva::getWsFeParamTipoIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamTipoIva (Objeto) relacionado a traves de WsFeOpeSolicitudIva */ 	
	public function getWsFeParamTipoIvaXWsFeOpeSolicitudIva($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamTipoIvasXWsFeOpeSolicitudIva($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getWsFeOpeSolicitudOpcionals */ 	
	public function getWsFeOpeSolicitudOpcionals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(WsFeOpeSolicitudOpcional::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(WsFeOpeSolicitudOpcional::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(WsFeOpeSolicitudOpcional::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(WsFeOpeSolicitudOpcional::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(WsFeOpeSolicitudOpcional::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(WsFeOpeSolicitudOpcional::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".WsFeOpeSolicitudOpcional::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $wsfeopesolicitudopcionals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $wsfeopesolicitudopcional = WsFeOpeSolicitudOpcional::hidratarObjeto($fila);			
                $wsfeopesolicitudopcionals[] = $wsfeopesolicitudopcional;
            }

            return $wsfeopesolicitudopcionals;
	}	
	

	/* Método getWsFeOpeSolicitudOpcionalsBloque para MasInfo */ 	
	public function getWsFeOpeSolicitudOpcionalsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getWsFeOpeSolicitudOpcionals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudOpcionals Habilitados */ 	
	public function getWsFeOpeSolicitudOpcionalsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getWsFeOpeSolicitudOpcionals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudOpcional */ 	
	public function getWsFeOpeSolicitudOpcional($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getWsFeOpeSolicitudOpcionals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de WsFeOpeSolicitudOpcional relacionadas */ 	
	public function deleteWsFeOpeSolicitudOpcionals(){
            $obs = $this->getWsFeOpeSolicitudOpcionals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getWsFeOpeSolicitudOpcionalsCmb() WsFeOpeSolicitudOpcional relacionadas */ 	
	public function getWsFeOpeSolicitudOpcionalsCmb(){
            $c = new Criterio();
            $c->add(WsFeOpeSolicitudOpcional::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitudOpcional::GEN_TABLA);
            $c->setCriterios();

            $os = WsFeOpeSolicitudOpcional::getWsFeOpeSolicitudOpcionalsCmbF(null, $c);
            return $os;
	}

	/* Metodo getWsFeOpeSolicitudComprobanteAsociados */ 	
	public function getWsFeOpeSolicitudComprobanteAsociados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(WsFeOpeSolicitudComprobanteAsociado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(WsFeOpeSolicitudComprobanteAsociado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(WsFeOpeSolicitudComprobanteAsociado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(WsFeOpeSolicitudComprobanteAsociado::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(WsFeOpeSolicitudComprobanteAsociado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(WsFeOpeSolicitudComprobanteAsociado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".WsFeOpeSolicitudComprobanteAsociado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $wsfeopesolicitudcomprobanteasociados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $wsfeopesolicitudcomprobanteasociado = WsFeOpeSolicitudComprobanteAsociado::hidratarObjeto($fila);			
                $wsfeopesolicitudcomprobanteasociados[] = $wsfeopesolicitudcomprobanteasociado;
            }

            return $wsfeopesolicitudcomprobanteasociados;
	}	
	

	/* Método getWsFeOpeSolicitudComprobanteAsociadosBloque para MasInfo */ 	
	public function getWsFeOpeSolicitudComprobanteAsociadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getWsFeOpeSolicitudComprobanteAsociados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudComprobanteAsociados Habilitados */ 	
	public function getWsFeOpeSolicitudComprobanteAsociadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getWsFeOpeSolicitudComprobanteAsociados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudComprobanteAsociado */ 	
	public function getWsFeOpeSolicitudComprobanteAsociado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getWsFeOpeSolicitudComprobanteAsociados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de WsFeOpeSolicitudComprobanteAsociado relacionadas */ 	
	public function deleteWsFeOpeSolicitudComprobanteAsociados(){
            $obs = $this->getWsFeOpeSolicitudComprobanteAsociados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getWsFeOpeSolicitudComprobanteAsociadosCmb() WsFeOpeSolicitudComprobanteAsociado relacionadas */ 	
	public function getWsFeOpeSolicitudComprobanteAsociadosCmb(){
            $c = new Criterio();
            $c->add(WsFeOpeSolicitudComprobanteAsociado::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitudComprobanteAsociado::GEN_TABLA);
            $c->setCriterios();

            $os = WsFeOpeSolicitudComprobanteAsociado::getWsFeOpeSolicitudComprobanteAsociadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getWsFeOpeSolicitudTributos */ 	
	public function getWsFeOpeSolicitudTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(WsFeOpeSolicitudTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(WsFeOpeSolicitudTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(WsFeOpeSolicitudTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(WsFeOpeSolicitudTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".WsFeOpeSolicitudTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $wsfeopesolicitudtributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $wsfeopesolicitudtributo = WsFeOpeSolicitudTributo::hidratarObjeto($fila);			
                $wsfeopesolicitudtributos[] = $wsfeopesolicitudtributo;
            }

            return $wsfeopesolicitudtributos;
	}	
	

	/* Método getWsFeOpeSolicitudTributosBloque para MasInfo */ 	
	public function getWsFeOpeSolicitudTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getWsFeOpeSolicitudTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudTributos Habilitados */ 	
	public function getWsFeOpeSolicitudTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getWsFeOpeSolicitudTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudTributo */ 	
	public function getWsFeOpeSolicitudTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getWsFeOpeSolicitudTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de WsFeOpeSolicitudTributo relacionadas */ 	
	public function deleteWsFeOpeSolicitudTributos(){
            $obs = $this->getWsFeOpeSolicitudTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getWsFeOpeSolicitudTributosCmb() WsFeOpeSolicitudTributo relacionadas */ 	
	public function getWsFeOpeSolicitudTributosCmb(){
            $c = new Criterio();
            $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitudTributo::GEN_TABLA);
            $c->setCriterios();

            $os = WsFeOpeSolicitudTributo::getWsFeOpeSolicitudTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeParamTipoTributos (Coleccion) relacionados a traves de WsFeOpeSolicitudTributo */ 	
	public function getWsFeParamTipoTributosXWsFeOpeSolicitudTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoTributo::GEN_TABLA);
            $c->addRealJoin(WsFeOpeSolicitudTributo::GEN_TABLA, WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, WsFeParamTipoTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoTributo::getWsFeParamTipoTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeParamTipoTributos relacionados a traves de WsFeOpeSolicitudTributo */ 	
	public function getCantidadWsFeParamTipoTributosXWsFeOpeSolicitudTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeParamTipoTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeParamTipoTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeParamTipoTributo::GEN_TABLA);
            $c->addRealJoin(WsFeOpeSolicitudTributo::GEN_TABLA, WsFeOpeSolicitudTributo::GEN_ATTR_WS_FE_PARAM_TIPO_TRIBUTO_ID, WsFeParamTipoTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeParamTipoTributo::getWsFeParamTipoTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeParamTipoTributo (Objeto) relacionado a traves de WsFeOpeSolicitudTributo */ 	
	public function getWsFeParamTipoTributoXWsFeOpeSolicitudTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeParamTipoTributosXWsFeOpeSolicitudTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getWsFeOpeSolicitudRespuestas */ 	
	public function getWsFeOpeSolicitudRespuestas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(WsFeOpeSolicitudRespuesta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(WsFeOpeSolicitudRespuesta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(WsFeOpeSolicitudRespuesta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(WsFeOpeSolicitudRespuesta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(WsFeOpeSolicitudRespuesta::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(WsFeOpeSolicitudRespuesta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(WsFeOpeSolicitudRespuesta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".WsFeOpeSolicitudRespuesta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $wsfeopesolicitudrespuestas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $wsfeopesolicitudrespuesta = WsFeOpeSolicitudRespuesta::hidratarObjeto($fila);			
                $wsfeopesolicitudrespuestas[] = $wsfeopesolicitudrespuesta;
            }

            return $wsfeopesolicitudrespuestas;
	}	
	

	/* Método getWsFeOpeSolicitudRespuestasBloque para MasInfo */ 	
	public function getWsFeOpeSolicitudRespuestasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getWsFeOpeSolicitudRespuestas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudRespuestas Habilitados */ 	
	public function getWsFeOpeSolicitudRespuestasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getWsFeOpeSolicitudRespuestas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudRespuesta */ 	
	public function getWsFeOpeSolicitudRespuesta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de WsFeOpeSolicitudRespuesta relacionadas */ 	
	public function deleteWsFeOpeSolicitudRespuestas(){
            $obs = $this->getWsFeOpeSolicitudRespuestas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getWsFeOpeSolicitudRespuestasCmb() WsFeOpeSolicitudRespuesta relacionadas */ 	
	public function getWsFeOpeSolicitudRespuestasCmb(){
            $c = new Criterio();
            $c->add(WsFeOpeSolicitudRespuesta::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitudRespuesta::GEN_TABLA);
            $c->setCriterios();

            $os = WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestasCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaAjusteDebeWsFeOpeSolicituds */ 	
	public function getVtaAjusteDebeWsFeOpeSolicituds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeWsFeOpeSolicitud::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeWsFeOpeSolicitud::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebewsfeopesolicituds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebewsfeopesolicitud = VtaAjusteDebeWsFeOpeSolicitud::hidratarObjeto($fila);			
                $vtaajustedebewsfeopesolicituds[] = $vtaajustedebewsfeopesolicitud;
            }

            return $vtaajustedebewsfeopesolicituds;
	}	
	

	/* Método getVtaAjusteDebeWsFeOpeSolicitudsBloque para MasInfo */ 	
	public function getVtaAjusteDebeWsFeOpeSolicitudsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeWsFeOpeSolicituds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeWsFeOpeSolicituds Habilitados */ 	
	public function getVtaAjusteDebeWsFeOpeSolicitudsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeWsFeOpeSolicituds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeWsFeOpeSolicitud */ 	
	public function getVtaAjusteDebeWsFeOpeSolicitud($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeWsFeOpeSolicituds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeWsFeOpeSolicitud relacionadas */ 	
	public function deleteVtaAjusteDebeWsFeOpeSolicituds(){
            $obs = $this->getVtaAjusteDebeWsFeOpeSolicituds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeWsFeOpeSolicitudsCmb() VtaAjusteDebeWsFeOpeSolicitud relacionadas */ 	
	public function getVtaAjusteDebeWsFeOpeSolicitudsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeWsFeOpeSolicitud::getVtaAjusteDebeWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeWsFeOpeSolicitud */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA, VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeWsFeOpeSolicitud */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA, VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeWsFeOpeSolicitud */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberWsFeOpeSolicituds */ 	
	public function getVtaAjusteHaberWsFeOpeSolicituds($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberWsFeOpeSolicitud::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberWsFeOpeSolicitud::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberwsfeopesolicituds = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberwsfeopesolicitud = VtaAjusteHaberWsFeOpeSolicitud::hidratarObjeto($fila);			
                $vtaajustehaberwsfeopesolicituds[] = $vtaajustehaberwsfeopesolicitud;
            }

            return $vtaajustehaberwsfeopesolicituds;
	}	
	

	/* Método getVtaAjusteHaberWsFeOpeSolicitudsBloque para MasInfo */ 	
	public function getVtaAjusteHaberWsFeOpeSolicitudsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberWsFeOpeSolicituds($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberWsFeOpeSolicituds Habilitados */ 	
	public function getVtaAjusteHaberWsFeOpeSolicitudsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberWsFeOpeSolicituds($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberWsFeOpeSolicitud */ 	
	public function getVtaAjusteHaberWsFeOpeSolicitud($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberWsFeOpeSolicituds($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberWsFeOpeSolicitud relacionadas */ 	
	public function deleteVtaAjusteHaberWsFeOpeSolicituds(){
            $obs = $this->getVtaAjusteHaberWsFeOpeSolicituds();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberWsFeOpeSolicitudsCmb() VtaAjusteHaberWsFeOpeSolicitud relacionadas */ 	
	public function getVtaAjusteHaberWsFeOpeSolicitudsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberWsFeOpeSolicitud::getVtaAjusteHaberWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteHaberWsFeOpeSolicitud */ 	
	public function getVtaAjusteHabersXVtaAjusteHaberWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA, VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteHaberWsFeOpeSolicitud */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteHaberWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA, VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteHaberWsFeOpeSolicitud */ 	
	public function getVtaAjusteHaberXVtaAjusteHaberWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteHaberWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaNotaCreditos asignados a WsFeOpeSolicitud */ 	
	public function getVtaNotaCreditoWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaNotaCreditoWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getVtaNotaCreditoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaNotaCreditos asignados al WsFeOpeSolicitud */ 	
	public function setVtaNotaCreditoWsFeOpeSolicituds($ids){
            $this->deleteVtaNotaCreditoWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaNotaCreditoWsFeOpeSolicitud();
                    $o->setVtaNotaCreditoId($id);
                    $o->setWsFeOpeSolicitudId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaNotaCredito en el alta de WsFeOpeSolicitud */ 	
	public function getAltaMostrarBloqueRelacionVtaNotaCreditoWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaNotaDebitos asignados a WsFeOpeSolicitud */ 	
	public function getVtaNotaDebitoWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaNotaDebitoWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getVtaNotaDebitoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaNotaDebitos asignados al WsFeOpeSolicitud */ 	
	public function setVtaNotaDebitoWsFeOpeSolicituds($ids){
            $this->deleteVtaNotaDebitoWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaNotaDebitoWsFeOpeSolicitud();
                    $o->setVtaNotaDebitoId($id);
                    $o->setWsFeOpeSolicitudId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaNotaDebito en el alta de WsFeOpeSolicitud */ 	
	public function getAltaMostrarBloqueRelacionVtaNotaDebitoWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaRecibos asignados a WsFeOpeSolicitud */ 	
	public function getVtaReciboWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaReciboWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getVtaReciboId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaRecibos asignados al WsFeOpeSolicitud */ 	
	public function setVtaReciboWsFeOpeSolicituds($ids){
            $this->deleteVtaReciboWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaReciboWsFeOpeSolicitud();
                    $o->setVtaReciboId($id);
                    $o->setWsFeOpeSolicitudId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaRecibo en el alta de WsFeOpeSolicitud */ 	
	public function getAltaMostrarBloqueRelacionVtaReciboWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaFacturas asignados a WsFeOpeSolicitud */ 	
	public function getVtaFacturaWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaFacturaWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getVtaFacturaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaFacturas asignados al WsFeOpeSolicitud */ 	
	public function setVtaFacturaWsFeOpeSolicituds($ids){
            $this->deleteVtaFacturaWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaFacturaWsFeOpeSolicitud();
                    $o->setVtaFacturaId($id);
                    $o->setWsFeOpeSolicitudId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaFactura en el alta de WsFeOpeSolicitud */ 	
	public function getAltaMostrarBloqueRelacionVtaFacturaWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaAjusteDebes asignados a WsFeOpeSolicitud */ 	
	public function getVtaAjusteDebeWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaAjusteDebeWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getVtaAjusteDebeId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaAjusteDebes asignados al WsFeOpeSolicitud */ 	
	public function setVtaAjusteDebeWsFeOpeSolicituds($ids){
            $this->deleteVtaAjusteDebeWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteDebeWsFeOpeSolicitud();
                    $o->setVtaAjusteDebeId($id);
                    $o->setWsFeOpeSolicitudId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaAjusteDebe en el alta de WsFeOpeSolicitud */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteDebeWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaAjusteHabers asignados a WsFeOpeSolicitud */ 	
	public function getVtaAjusteHaberWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaAjusteHaberWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getVtaAjusteHaberId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaAjusteHabers asignados al WsFeOpeSolicitud */ 	
	public function setVtaAjusteHaberWsFeOpeSolicituds($ids){
            $this->deleteVtaAjusteHaberWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteHaberWsFeOpeSolicitud();
                    $o->setVtaAjusteHaberId($id);
                    $o->setWsFeOpeSolicitudId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaAjusteHaber en el alta de WsFeOpeSolicitud */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteHaberWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna el WsFeParamPuntoVenta (Clave Foranea) */ 	
    public function getWsFeParamPuntoVenta(){
        $o = new WsFeParamPuntoVenta();
        $o->setId($this->getWsFeParamPuntoVentaId());
        return $o;			
    }

	/* Metodo que retorna el WsFeParamPuntoVenta (Clave Foranea) en Array */ 	
    public function getWsFeParamPuntoVentaEnArray(&$arr_os){
        if($this->getWsFeParamPuntoVentaId() != 'null'){
            if(isset($arr_os[$this->getWsFeParamPuntoVentaId()])){
                $o = $arr_os[$this->getWsFeParamPuntoVentaId()];
            }else{
                $o = WsFeParamPuntoVenta::getOxId($this->getWsFeParamPuntoVentaId());
                if($o){
                    $arr_os[$this->getWsFeParamPuntoVentaId()] = $o;
                }
            }
        }else{
            $o = new WsFeParamPuntoVenta();
        }
        return $o;		
    }

	/* Metodo que retorna el WsFeParamTipoComprobante (Clave Foranea) */ 	
    public function getWsFeParamTipoComprobante(){
        $o = new WsFeParamTipoComprobante();
        $o->setId($this->getWsFeParamTipoComprobanteId());
        return $o;			
    }

	/* Metodo que retorna el WsFeParamTipoComprobante (Clave Foranea) en Array */ 	
    public function getWsFeParamTipoComprobanteEnArray(&$arr_os){
        if($this->getWsFeParamTipoComprobanteId() != 'null'){
            if(isset($arr_os[$this->getWsFeParamTipoComprobanteId()])){
                $o = $arr_os[$this->getWsFeParamTipoComprobanteId()];
            }else{
                $o = WsFeParamTipoComprobante::getOxId($this->getWsFeParamTipoComprobanteId());
                if($o){
                    $arr_os[$this->getWsFeParamTipoComprobanteId()] = $o;
                }
            }
        }else{
            $o = new WsFeParamTipoComprobante();
        }
        return $o;		
    }

	/* Metodo que retorna el WsFeParamTipoConcepto (Clave Foranea) */ 	
    public function getWsFeParamTipoConcepto(){
        $o = new WsFeParamTipoConcepto();
        $o->setId($this->getWsFeParamTipoConceptoId());
        return $o;			
    }

	/* Metodo que retorna el WsFeParamTipoConcepto (Clave Foranea) en Array */ 	
    public function getWsFeParamTipoConceptoEnArray(&$arr_os){
        if($this->getWsFeParamTipoConceptoId() != 'null'){
            if(isset($arr_os[$this->getWsFeParamTipoConceptoId()])){
                $o = $arr_os[$this->getWsFeParamTipoConceptoId()];
            }else{
                $o = WsFeParamTipoConcepto::getOxId($this->getWsFeParamTipoConceptoId());
                if($o){
                    $arr_os[$this->getWsFeParamTipoConceptoId()] = $o;
                }
            }
        }else{
            $o = new WsFeParamTipoConcepto();
        }
        return $o;		
    }

	/* Metodo que retorna el WsFeParamTipoDocumento (Clave Foranea) */ 	
    public function getWsFeParamTipoDocumento(){
        $o = new WsFeParamTipoDocumento();
        $o->setId($this->getWsFeParamTipoDocumentoId());
        return $o;			
    }

	/* Metodo que retorna el WsFeParamTipoDocumento (Clave Foranea) en Array */ 	
    public function getWsFeParamTipoDocumentoEnArray(&$arr_os){
        if($this->getWsFeParamTipoDocumentoId() != 'null'){
            if(isset($arr_os[$this->getWsFeParamTipoDocumentoId()])){
                $o = $arr_os[$this->getWsFeParamTipoDocumentoId()];
            }else{
                $o = WsFeParamTipoDocumento::getOxId($this->getWsFeParamTipoDocumentoId());
                if($o){
                    $arr_os[$this->getWsFeParamTipoDocumentoId()] = $o;
                }
            }
        }else{
            $o = new WsFeParamTipoDocumento();
        }
        return $o;		
    }

	/* Metodo que retorna el WsFeParamTipoMoneda (Clave Foranea) */ 	
    public function getWsFeParamTipoMoneda(){
        $o = new WsFeParamTipoMoneda();
        $o->setId($this->getWsFeParamTipoMonedaId());
        return $o;			
    }

	/* Metodo que retorna el WsFeParamTipoMoneda (Clave Foranea) en Array */ 	
    public function getWsFeParamTipoMonedaEnArray(&$arr_os){
        if($this->getWsFeParamTipoMonedaId() != 'null'){
            if(isset($arr_os[$this->getWsFeParamTipoMonedaId()])){
                $o = $arr_os[$this->getWsFeParamTipoMonedaId()];
            }else{
                $o = WsFeParamTipoMoneda::getOxId($this->getWsFeParamTipoMonedaId());
                if($o){
                    $arr_os[$this->getWsFeParamTipoMonedaId()] = $o;
                }
            }
        }else{
            $o = new WsFeParamTipoMoneda();
        }
        return $o;		
    }

	/* Metodo que retorna el GralEmpresa (Clave Foranea) */ 	
    public function getGralEmpresa(){
        $o = new GralEmpresa();
        $o->setId($this->getGralEmpresaId());
        return $o;			
    }

	/* Metodo que retorna el GralEmpresa (Clave Foranea) en Array */ 	
    public function getGralEmpresaEnArray(&$arr_os){
        if($this->getGralEmpresaId() != 'null'){
            if(isset($arr_os[$this->getGralEmpresaId()])){
                $o = $arr_os[$this->getGralEmpresaId()];
            }else{
                $o = GralEmpresa::getOxId($this->getGralEmpresaId());
                if($o){
                    $arr_os[$this->getGralEmpresaId()] = $o;
                }
            }
        }else{
            $o = new GralEmpresa();
        }
        return $o;		
    }

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
    }

	/* Metodo que retorna la descripcion corta del objeto */ 	
    public function getDescripcionCorta($cantidad = 2){
        $descripcion_corta = '';
        $matches = array();

        preg_match_all('/(?<=\s|^)[a-z]/i', $this->getDescripcion(), $matches);
        if(count($matches[0]) > 1){
            $descripcion_corta = implode('', $matches[0]);
        }else{
            $descripcion_corta = strtoupper(substr($this->getDescripcion(), 0, $cantidad));
        }

        return $descripcion_corta;
    }

	/* Metodo que retorna la codigo del objeto */ 	
    public function getCodigo(){
        return $this->getId();			
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
            		
        if($contexto_solicitante != WsFeParamPuntoVenta::GEN_CLASE){
            if($this->getWsFeParamPuntoVenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(WsFeParamPuntoVenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getWsFeParamPuntoVenta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != WsFeParamTipoComprobante::GEN_CLASE){
            if($this->getWsFeParamTipoComprobante()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(WsFeParamTipoComprobante::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getWsFeParamTipoComprobante()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != WsFeParamTipoConcepto::GEN_CLASE){
            if($this->getWsFeParamTipoConcepto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(WsFeParamTipoConcepto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getWsFeParamTipoConcepto()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != WsFeParamTipoDocumento::GEN_CLASE){
            if($this->getWsFeParamTipoDocumento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(WsFeParamTipoDocumento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getWsFeParamTipoDocumento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != WsFeParamTipoMoneda::GEN_CLASE){
            if($this->getWsFeParamTipoMoneda()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(WsFeParamTipoMoneda::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getWsFeParamTipoMoneda()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralEmpresa::GEN_CLASE){
            if($this->getGralEmpresa()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresa::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresa()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ws_fe_ope_solicitud'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ws_fe_ope_solicitud';");
            
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

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_param_punto_venta_id' */ 	
	static function getOxWsFeParamPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_param_punto_venta_id' */ 	
	static function getOsxWsFeParamPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_param_tipo_comprobante_id' */ 	
	static function getOxWsFeParamTipoComprobanteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_param_tipo_comprobante_id' */ 	
	static function getOsxWsFeParamTipoComprobanteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_COMPROBANTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_param_tipo_concepto_id' */ 	
	static function getOxWsFeParamTipoConceptoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_CONCEPTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_param_tipo_concepto_id' */ 	
	static function getOsxWsFeParamTipoConceptoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_CONCEPTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_param_tipo_documento_id' */ 	
	static function getOxWsFeParamTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_param_tipo_documento_id' */ 	
	static function getOsxWsFeParamTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_param_tipo_moneda_id' */ 	
	static function getOxWsFeParamTipoMonedaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_MONEDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_param_tipo_moneda_id' */ 	
	static function getOsxWsFeParamTipoMonedaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_PARAM_TIPO_MONEDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_empresa_id' */ 	
	static function getOsxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_cantidad_registro' */ 	
	static function getOxWsFeAfipCantidadRegistro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CANTIDAD_REGISTRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_cantidad_registro' */ 	
	static function getOsxWsFeAfipCantidadRegistro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CANTIDAD_REGISTRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_punto_venta' */ 	
	static function getOxWsFeAfipPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_punto_venta' */ 	
	static function getOsxWsFeAfipPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_tipo_comprobante' */ 	
	static function getOxWsFeAfipTipoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_tipo_comprobante' */ 	
	static function getOsxWsFeAfipTipoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_tipo_concepto' */ 	
	static function getOxWsFeAfipTipoConcepto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_CONCEPTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_tipo_concepto' */ 	
	static function getOsxWsFeAfipTipoConcepto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_CONCEPTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_tipo_documento' */ 	
	static function getOxWsFeAfipTipoDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_tipo_documento' */ 	
	static function getOsxWsFeAfipTipoDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_numero_documento' */ 	
	static function getOxWsFeAfipNumeroDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_NUMERO_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_numero_documento' */ 	
	static function getOsxWsFeAfipNumeroDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_NUMERO_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_comprobante_desde' */ 	
	static function getOxWsFeAfipComprobanteDesde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_DESDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_comprobante_desde' */ 	
	static function getOsxWsFeAfipComprobanteDesde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_DESDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_comprobante_hasta' */ 	
	static function getOxWsFeAfipComprobanteHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_comprobante_hasta' */ 	
	static function getOsxWsFeAfipComprobanteHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_comprobante_fecha' */ 	
	static function getOxWsFeAfipComprobanteFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_comprobante_fecha' */ 	
	static function getOsxWsFeAfipComprobanteFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_importe_total' */ 	
	static function getOxWsFeAfipImporteTotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_importe_total' */ 	
	static function getOsxWsFeAfipImporteTotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_importe_total_concepto' */ 	
	static function getOxWsFeAfipImporteTotalConcepto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_importe_total_concepto' */ 	
	static function getOsxWsFeAfipImporteTotalConcepto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TOTAL_CONCEPTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_importe_neto' */ 	
	static function getOxWsFeAfipImporteNeto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_NETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_importe_neto' */ 	
	static function getOsxWsFeAfipImporteNeto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_NETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_importe_operacion_exenta' */ 	
	static function getOxWsFeAfipImporteOperacionExenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_importe_operacion_exenta' */ 	
	static function getOsxWsFeAfipImporteOperacionExenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_OPERACION_EXENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_importe_tributo' */ 	
	static function getOxWsFeAfipImporteTributo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TRIBUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_importe_tributo' */ 	
	static function getOsxWsFeAfipImporteTributo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_TRIBUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_importe_iva' */ 	
	static function getOxWsFeAfipImporteIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_importe_iva' */ 	
	static function getOsxWsFeAfipImporteIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_IMPORTE_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_fecha_servicio_desde' */ 	
	static function getOxWsFeAfipFechaServicioDesde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_FECHA_SERVICIO_DESDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_fecha_servicio_desde' */ 	
	static function getOsxWsFeAfipFechaServicioDesde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_FECHA_SERVICIO_DESDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_fecha_servicio_hasta' */ 	
	static function getOxWsFeAfipFechaServicioHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_FECHA_SERVICIO_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_fecha_servicio_hasta' */ 	
	static function getOsxWsFeAfipFechaServicioHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_FECHA_SERVICIO_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_vencimiento_pago' */ 	
	static function getOxWsFeAfipVencimientoPago($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_VENCIMIENTO_PAGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_vencimiento_pago' */ 	
	static function getOsxWsFeAfipVencimientoPago($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_VENCIMIENTO_PAGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_tipo_moneda' */ 	
	static function getOxWsFeAfipTipoMoneda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_MONEDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_tipo_moneda' */ 	
	static function getOsxWsFeAfipTipoMoneda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_MONEDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_cotizacion_moneda' */ 	
	static function getOxWsFeAfipCotizacionMoneda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COTIZACION_MONEDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_cotizacion_moneda' */ 	
	static function getOsxWsFeAfipCotizacionMoneda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COTIZACION_MONEDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds(null, $criterio);
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

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicituds($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ws_fe_ope_solicitud_adm');
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
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
                $c->addOrden(WsFeOpeSolicitud::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ws_fe_ope_solicituds = WsFeOpeSolicitud::getWsFeOpeSolicituds(null, $c);

                $arr = array();
                foreach($ws_fe_ope_solicituds as $ws_fe_ope_solicitud){
                    $descripcion = $ws_fe_ope_solicitud->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>