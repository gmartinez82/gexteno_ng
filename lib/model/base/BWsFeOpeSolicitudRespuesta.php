<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BWsFeOpeSolicitudRespuesta
{ 
	
	const SES_PAGINACION = 'adm_wsfeopesolicitudrespuesta_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_wsfeopesolicitudrespuesta_paginas_registros';
	const SES_CRITERIOS = 'adm_wsfeopesolicitudrespuesta_criterios';
	
	const GEN_CLASE = 'WsFeOpeSolicitudRespuesta';
	const GEN_TABLA = 'ws_fe_ope_solicitud_respuesta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BWsFeOpeSolicitudRespuesta */ 
	const GEN_ATTR_ID = 'ws_fe_ope_solicitud_respuesta.id';
	const GEN_ATTR_DESCRIPCION = 'ws_fe_ope_solicitud_respuesta.descripcion';
	const GEN_ATTR_WS_FE_OPE_SOLICITUD_ID = 'ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id';
	const GEN_ATTR_WS_FE_AFIP_CUIT = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_cuit';
	const GEN_ATTR_WS_FE_AFIP_PUNTO_VENTA = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_punto_venta';
	const GEN_ATTR_WS_FE_AFIP_TIPO_COMPROBANTE = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_comprobante';
	const GEN_ATTR_WS_FE_AFIP_FECHA_PROCESO = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_fecha_proceso';
	const GEN_ATTR_WS_FE_AFIP_CANTIDAD_REGISTRO = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_cantidad_registro';
	const GEN_ATTR_WS_FE_AFIP_RESULTADO_CABECERA = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_cabecera';
	const GEN_ATTR_WS_FE_AFIP_REPROCESO = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_reproceso';
	const GEN_ATTR_WS_FE_AFIP_TIPO_CONCEPTO = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_concepto';
	const GEN_ATTR_WS_FE_AFIP_TIPO_DOCUMENTO = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_documento';
	const GEN_ATTR_WS_FE_AFIP_NUMERO_DOCUMENTO = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_numero_documento';
	const GEN_ATTR_WS_FE_AFIP_COMPROBANTE_DESDE = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_desde';
	const GEN_ATTR_WS_FE_AFIP_COMPROBANTE_HASTA = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_hasta';
	const GEN_ATTR_WS_FE_AFIP_COMPROBANTE_FECHA = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_fecha';
	const GEN_ATTR_WS_FE_AFIP_RESULTADO_DETALLE = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_detalle';
	const GEN_ATTR_WS_FE_AFIP_CAE = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae';
	const GEN_ATTR_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO = 'ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae_fecha_vencimiento';
	const GEN_ATTR_OBSERVACION = 'ws_fe_ope_solicitud_respuesta.observacion';
	const GEN_ATTR_ORDEN = 'ws_fe_ope_solicitud_respuesta.orden';
	const GEN_ATTR_ESTADO = 'ws_fe_ope_solicitud_respuesta.estado';
	const GEN_ATTR_CREADO = 'ws_fe_ope_solicitud_respuesta.creado';
	const GEN_ATTR_CREADO_POR = 'ws_fe_ope_solicitud_respuesta.creado_por';
	const GEN_ATTR_MODIFICADO = 'ws_fe_ope_solicitud_respuesta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ws_fe_ope_solicitud_respuesta.modificado_por';

	/* Constantes de Atributos Min de BWsFeOpeSolicitudRespuesta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID = 'ws_fe_ope_solicitud_id';
	const GEN_ATTR_MIN_WS_FE_AFIP_CUIT = 'ws_fe_afip_cuit';
	const GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA = 'ws_fe_afip_punto_venta';
	const GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE = 'ws_fe_afip_tipo_comprobante';
	const GEN_ATTR_MIN_WS_FE_AFIP_FECHA_PROCESO = 'ws_fe_afip_fecha_proceso';
	const GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO = 'ws_fe_afip_cantidad_registro';
	const GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_CABECERA = 'ws_fe_afip_resultado_cabecera';
	const GEN_ATTR_MIN_WS_FE_AFIP_REPROCESO = 'ws_fe_afip_reproceso';
	const GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO = 'ws_fe_afip_tipo_concepto';
	const GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO = 'ws_fe_afip_tipo_documento';
	const GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO = 'ws_fe_afip_numero_documento';
	const GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE = 'ws_fe_afip_comprobante_desde';
	const GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA = 'ws_fe_afip_comprobante_hasta';
	const GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA = 'ws_fe_afip_comprobante_fecha';
	const GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_DETALLE = 'ws_fe_afip_resultado_detalle';
	const GEN_ATTR_MIN_WS_FE_AFIP_CAE = 'ws_fe_afip_cae';
	const GEN_ATTR_MIN_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO = 'ws_fe_afip_cae_fecha_vencimiento';
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
	

	/* Atributos de BWsFeOpeSolicitudRespuesta */ 
	private $id;
	private $descripcion;
	private $ws_fe_ope_solicitud_id;
	private $ws_fe_afip_cuit;
	private $ws_fe_afip_punto_venta;
	private $ws_fe_afip_tipo_comprobante;
	private $ws_fe_afip_fecha_proceso;
	private $ws_fe_afip_cantidad_registro;
	private $ws_fe_afip_resultado_cabecera;
	private $ws_fe_afip_reproceso;
	private $ws_fe_afip_tipo_concepto;
	private $ws_fe_afip_tipo_documento;
	private $ws_fe_afip_numero_documento;
	private $ws_fe_afip_comprobante_desde;
	private $ws_fe_afip_comprobante_hasta;
	private $ws_fe_afip_comprobante_fecha;
	private $ws_fe_afip_resultado_detalle;
	private $ws_fe_afip_cae;
	private $ws_fe_afip_cae_fecha_vencimiento;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BWsFeOpeSolicitudRespuesta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getWsFeOpeSolicitudId(){ if(isset($this->ws_fe_ope_solicitud_id)){ return $this->ws_fe_ope_solicitud_id; }else{ return 'null'; } }
	public function getWsFeAfipCuit(){ if(isset($this->ws_fe_afip_cuit)){ return $this->ws_fe_afip_cuit; }else{ return ''; } }
	public function getWsFeAfipPuntoVenta(){ if(isset($this->ws_fe_afip_punto_venta)){ return $this->ws_fe_afip_punto_venta; }else{ return ''; } }
	public function getWsFeAfipTipoComprobante(){ if(isset($this->ws_fe_afip_tipo_comprobante)){ return $this->ws_fe_afip_tipo_comprobante; }else{ return ''; } }
	public function getWsFeAfipFechaProceso(){ if(isset($this->ws_fe_afip_fecha_proceso)){ return $this->ws_fe_afip_fecha_proceso; }else{ return ''; } }
	public function getWsFeAfipCantidadRegistro(){ if(isset($this->ws_fe_afip_cantidad_registro)){ return $this->ws_fe_afip_cantidad_registro; }else{ return ''; } }
	public function getWsFeAfipResultadoCabecera(){ if(isset($this->ws_fe_afip_resultado_cabecera)){ return $this->ws_fe_afip_resultado_cabecera; }else{ return ''; } }
	public function getWsFeAfipReproceso(){ if(isset($this->ws_fe_afip_reproceso)){ return $this->ws_fe_afip_reproceso; }else{ return ''; } }
	public function getWsFeAfipTipoConcepto(){ if(isset($this->ws_fe_afip_tipo_concepto)){ return $this->ws_fe_afip_tipo_concepto; }else{ return ''; } }
	public function getWsFeAfipTipoDocumento(){ if(isset($this->ws_fe_afip_tipo_documento)){ return $this->ws_fe_afip_tipo_documento; }else{ return ''; } }
	public function getWsFeAfipNumeroDocumento(){ if(isset($this->ws_fe_afip_numero_documento)){ return $this->ws_fe_afip_numero_documento; }else{ return ''; } }
	public function getWsFeAfipComprobanteDesde(){ if(isset($this->ws_fe_afip_comprobante_desde)){ return $this->ws_fe_afip_comprobante_desde; }else{ return ''; } }
	public function getWsFeAfipComprobanteHasta(){ if(isset($this->ws_fe_afip_comprobante_hasta)){ return $this->ws_fe_afip_comprobante_hasta; }else{ return ''; } }
	public function getWsFeAfipComprobanteFecha(){ if(isset($this->ws_fe_afip_comprobante_fecha)){ return $this->ws_fe_afip_comprobante_fecha; }else{ return ''; } }
	public function getWsFeAfipResultadoDetalle(){ if(isset($this->ws_fe_afip_resultado_detalle)){ return $this->ws_fe_afip_resultado_detalle; }else{ return ''; } }
	public function getWsFeAfipCae(){ if(isset($this->ws_fe_afip_cae)){ return $this->ws_fe_afip_cae; }else{ return ''; } }
	public function getWsFeAfipCaeFechaVencimiento(){ if(isset($this->ws_fe_afip_cae_fecha_vencimiento)){ return $this->ws_fe_afip_cae_fecha_vencimiento; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BWsFeOpeSolicitudRespuesta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID."
				, ".self::GEN_ATTR_WS_FE_AFIP_CUIT."
				, ".self::GEN_ATTR_WS_FE_AFIP_PUNTO_VENTA."
				, ".self::GEN_ATTR_WS_FE_AFIP_TIPO_COMPROBANTE."
				, ".self::GEN_ATTR_WS_FE_AFIP_FECHA_PROCESO."
				, ".self::GEN_ATTR_WS_FE_AFIP_CANTIDAD_REGISTRO."
				, ".self::GEN_ATTR_WS_FE_AFIP_RESULTADO_CABECERA."
				, ".self::GEN_ATTR_WS_FE_AFIP_REPROCESO."
				, ".self::GEN_ATTR_WS_FE_AFIP_TIPO_CONCEPTO."
				, ".self::GEN_ATTR_WS_FE_AFIP_TIPO_DOCUMENTO."
				, ".self::GEN_ATTR_WS_FE_AFIP_NUMERO_DOCUMENTO."
				, ".self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_DESDE."
				, ".self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_HASTA."
				, ".self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_FECHA."
				, ".self::GEN_ATTR_WS_FE_AFIP_RESULTADO_DETALLE."
				, ".self::GEN_ATTR_WS_FE_AFIP_CAE."
				, ".self::GEN_ATTR_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO."
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
				$this->setWsFeOpeSolicitudId($fila[self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID]);
				$this->setWsFeAfipCuit($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CUIT]);
				$this->setWsFeAfipPuntoVenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA]);
				$this->setWsFeAfipTipoComprobante($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE]);
				$this->setWsFeAfipFechaProceso($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_PROCESO]);
				$this->setWsFeAfipCantidadRegistro($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO]);
				$this->setWsFeAfipResultadoCabecera($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_CABECERA]);
				$this->setWsFeAfipReproceso($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_REPROCESO]);
				$this->setWsFeAfipTipoConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO]);
				$this->setWsFeAfipTipoDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO]);
				$this->setWsFeAfipNumeroDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO]);
				$this->setWsFeAfipComprobanteDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE]);
				$this->setWsFeAfipComprobanteHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA]);
				$this->setWsFeAfipComprobanteFecha($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA]);
				$this->setWsFeAfipResultadoDetalle($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_DETALLE]);
				$this->setWsFeAfipCae($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CAE]);
				$this->setWsFeAfipCaeFechaVencimiento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO]);
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
	public function setWsFeOpeSolicitudId($v){ $this->ws_fe_ope_solicitud_id = $v; }
	public function setWsFeAfipCuit($v){ $this->ws_fe_afip_cuit = $v; }
	public function setWsFeAfipPuntoVenta($v){ $this->ws_fe_afip_punto_venta = $v; }
	public function setWsFeAfipTipoComprobante($v){ $this->ws_fe_afip_tipo_comprobante = $v; }
	public function setWsFeAfipFechaProceso($v){ $this->ws_fe_afip_fecha_proceso = $v; }
	public function setWsFeAfipCantidadRegistro($v){ $this->ws_fe_afip_cantidad_registro = $v; }
	public function setWsFeAfipResultadoCabecera($v){ $this->ws_fe_afip_resultado_cabecera = $v; }
	public function setWsFeAfipReproceso($v){ $this->ws_fe_afip_reproceso = $v; }
	public function setWsFeAfipTipoConcepto($v){ $this->ws_fe_afip_tipo_concepto = $v; }
	public function setWsFeAfipTipoDocumento($v){ $this->ws_fe_afip_tipo_documento = $v; }
	public function setWsFeAfipNumeroDocumento($v){ $this->ws_fe_afip_numero_documento = $v; }
	public function setWsFeAfipComprobanteDesde($v){ $this->ws_fe_afip_comprobante_desde = $v; }
	public function setWsFeAfipComprobanteHasta($v){ $this->ws_fe_afip_comprobante_hasta = $v; }
	public function setWsFeAfipComprobanteFecha($v){ $this->ws_fe_afip_comprobante_fecha = $v; }
	public function setWsFeAfipResultadoDetalle($v){ $this->ws_fe_afip_resultado_detalle = $v; }
	public function setWsFeAfipCae($v){ $this->ws_fe_afip_cae = $v; }
	public function setWsFeAfipCaeFechaVencimiento($v){ $this->ws_fe_afip_cae_fecha_vencimiento = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new WsFeOpeSolicitudRespuesta();
            $o->setId($fila[WsFeOpeSolicitudRespuesta::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setWsFeOpeSolicitudId($fila[self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID]);
			$o->setWsFeAfipCuit($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CUIT]);
			$o->setWsFeAfipPuntoVenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA]);
			$o->setWsFeAfipTipoComprobante($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE]);
			$o->setWsFeAfipFechaProceso($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_PROCESO]);
			$o->setWsFeAfipCantidadRegistro($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO]);
			$o->setWsFeAfipResultadoCabecera($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_CABECERA]);
			$o->setWsFeAfipReproceso($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_REPROCESO]);
			$o->setWsFeAfipTipoConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO]);
			$o->setWsFeAfipTipoDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO]);
			$o->setWsFeAfipNumeroDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO]);
			$o->setWsFeAfipComprobanteDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE]);
			$o->setWsFeAfipComprobanteHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA]);
			$o->setWsFeAfipComprobanteFecha($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA]);
			$o->setWsFeAfipResultadoDetalle($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_DETALLE]);
			$o->setWsFeAfipCae($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CAE]);
			$o->setWsFeAfipCaeFechaVencimiento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BWsFeOpeSolicitudRespuesta */ 	
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

	/* Cambia el estado de BWsFeOpeSolicitudRespuesta */ 	
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

	/* Save de BWsFeOpeSolicitudRespuesta */ 	
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
						, ".self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CUIT."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_PROCESO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_CABECERA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_REPROCESO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_DETALLE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CAE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ws_fe_ope_solicitud_respuesta_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getWsFeOpeSolicitudId()."
						, '".$this->getWsFeAfipCuit()."'
						, '".$this->getWsFeAfipPuntoVenta()."'
						, '".$this->getWsFeAfipTipoComprobante()."'
						, '".$this->getWsFeAfipFechaProceso()."'
						, '".$this->getWsFeAfipCantidadRegistro()."'
						, '".$this->getWsFeAfipResultadoCabecera()."'
						, '".$this->getWsFeAfipReproceso()."'
						, '".$this->getWsFeAfipTipoConcepto()."'
						, '".$this->getWsFeAfipTipoDocumento()."'
						, '".$this->getWsFeAfipNumeroDocumento()."'
						, '".$this->getWsFeAfipComprobanteDesde()."'
						, '".$this->getWsFeAfipComprobanteHasta()."'
						, '".$this->getWsFeAfipComprobanteFecha()."'
						, '".$this->getWsFeAfipResultadoDetalle()."'
						, '".$this->getWsFeAfipCae()."'
						, '".$this->getWsFeAfipCaeFechaVencimiento()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ws_fe_ope_solicitud_respuesta_seq')";
            
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
                 
				 ".WsFeOpeSolicitudRespuesta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID." = ".$this->getWsFeOpeSolicitudId()."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CUIT." = '".$this->getWsFeAfipCuit()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA." = '".$this->getWsFeAfipPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE." = '".$this->getWsFeAfipTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_PROCESO." = '".$this->getWsFeAfipFechaProceso()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO." = '".$this->getWsFeAfipCantidadRegistro()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_CABECERA." = '".$this->getWsFeAfipResultadoCabecera()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_REPROCESO." = '".$this->getWsFeAfipReproceso()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO." = '".$this->getWsFeAfipTipoConcepto()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO." = '".$this->getWsFeAfipTipoDocumento()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO." = '".$this->getWsFeAfipNumeroDocumento()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE." = '".$this->getWsFeAfipComprobanteDesde()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA." = '".$this->getWsFeAfipComprobanteHasta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA." = '".$this->getWsFeAfipComprobanteFecha()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_DETALLE." = '".$this->getWsFeAfipResultadoDetalle()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CAE." = '".$this->getWsFeAfipCae()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO." = '".$this->getWsFeAfipCaeFechaVencimiento()."'
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
						, ".self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CUIT."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_PROCESO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_CABECERA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_REPROCESO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_DETALLE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CAE."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getWsFeOpeSolicitudId()."
						, '".$this->getWsFeAfipCuit()."'
						, '".$this->getWsFeAfipPuntoVenta()."'
						, '".$this->getWsFeAfipTipoComprobante()."'
						, '".$this->getWsFeAfipFechaProceso()."'
						, '".$this->getWsFeAfipCantidadRegistro()."'
						, '".$this->getWsFeAfipResultadoCabecera()."'
						, '".$this->getWsFeAfipReproceso()."'
						, '".$this->getWsFeAfipTipoConcepto()."'
						, '".$this->getWsFeAfipTipoDocumento()."'
						, '".$this->getWsFeAfipNumeroDocumento()."'
						, '".$this->getWsFeAfipComprobanteDesde()."'
						, '".$this->getWsFeAfipComprobanteHasta()."'
						, '".$this->getWsFeAfipComprobanteFecha()."'
						, '".$this->getWsFeAfipResultadoDetalle()."'
						, '".$this->getWsFeAfipCae()."'
						, '".$this->getWsFeAfipCaeFechaVencimiento()."'
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
                     
				 ".WsFeOpeSolicitudRespuesta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID." = ".$this->getWsFeOpeSolicitudId()."
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CUIT." = '".$this->getWsFeAfipCuit()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA." = '".$this->getWsFeAfipPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE." = '".$this->getWsFeAfipTipoComprobante()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_PROCESO." = '".$this->getWsFeAfipFechaProceso()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO." = '".$this->getWsFeAfipCantidadRegistro()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_CABECERA." = '".$this->getWsFeAfipResultadoCabecera()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_REPROCESO." = '".$this->getWsFeAfipReproceso()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO." = '".$this->getWsFeAfipTipoConcepto()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO." = '".$this->getWsFeAfipTipoDocumento()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO." = '".$this->getWsFeAfipNumeroDocumento()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE." = '".$this->getWsFeAfipComprobanteDesde()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA." = '".$this->getWsFeAfipComprobanteHasta()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA." = '".$this->getWsFeAfipComprobanteFecha()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_DETALLE." = '".$this->getWsFeAfipResultadoDetalle()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CAE." = '".$this->getWsFeAfipCae()."'
						, ".self::GEN_ATTR_MIN_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO." = '".$this->getWsFeAfipCaeFechaVencimiento()."'
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
            $o = new WsFeOpeSolicitudRespuesta();
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

	/* Delete de BWsFeOpeSolicitudRespuesta */ 	
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
	
            // se elimina la coleccion de WsFeOpeSolicitudRespuestaObservacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(WsFeOpeSolicitudRespuestaObservacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getWsFeOpeSolicitudRespuestaObservacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarWsFeOpeSolicitudRespuesta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getWsFeOpeSolicitudRespuestas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = WsFeOpeSolicitudRespuesta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$wsfeopesolicitudrespuestas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $wsfeopesolicitudrespuesta = new WsFeOpeSolicitudRespuesta();
                    $wsfeopesolicitudrespuesta->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $wsfeopesolicitudrespuesta->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$wsfeopesolicitudrespuesta->setWsFeOpeSolicitudId($fila[self::GEN_ATTR_MIN_WS_FE_OPE_SOLICITUD_ID]);
			$wsfeopesolicitudrespuesta->setWsFeAfipCuit($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CUIT]);
			$wsfeopesolicitudrespuesta->setWsFeAfipPuntoVenta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_PUNTO_VENTA]);
			$wsfeopesolicitudrespuesta->setWsFeAfipTipoComprobante($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_COMPROBANTE]);
			$wsfeopesolicitudrespuesta->setWsFeAfipFechaProceso($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_FECHA_PROCESO]);
			$wsfeopesolicitudrespuesta->setWsFeAfipCantidadRegistro($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CANTIDAD_REGISTRO]);
			$wsfeopesolicitudrespuesta->setWsFeAfipResultadoCabecera($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_CABECERA]);
			$wsfeopesolicitudrespuesta->setWsFeAfipReproceso($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_REPROCESO]);
			$wsfeopesolicitudrespuesta->setWsFeAfipTipoConcepto($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_CONCEPTO]);
			$wsfeopesolicitudrespuesta->setWsFeAfipTipoDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_TIPO_DOCUMENTO]);
			$wsfeopesolicitudrespuesta->setWsFeAfipNumeroDocumento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_NUMERO_DOCUMENTO]);
			$wsfeopesolicitudrespuesta->setWsFeAfipComprobanteDesde($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_DESDE]);
			$wsfeopesolicitudrespuesta->setWsFeAfipComprobanteHasta($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_HASTA]);
			$wsfeopesolicitudrespuesta->setWsFeAfipComprobanteFecha($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_COMPROBANTE_FECHA]);
			$wsfeopesolicitudrespuesta->setWsFeAfipResultadoDetalle($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_RESULTADO_DETALLE]);
			$wsfeopesolicitudrespuesta->setWsFeAfipCae($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CAE]);
			$wsfeopesolicitudrespuesta->setWsFeAfipCaeFechaVencimiento($fila[self::GEN_ATTR_MIN_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO]);
			$wsfeopesolicitudrespuesta->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$wsfeopesolicitudrespuesta->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$wsfeopesolicitudrespuesta->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$wsfeopesolicitudrespuesta->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$wsfeopesolicitudrespuesta->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$wsfeopesolicitudrespuesta->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$wsfeopesolicitudrespuesta->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $wsfeopesolicitudrespuestas[] = $wsfeopesolicitudrespuesta;
		}
		
		return $wsfeopesolicitudrespuestas;
	}	
	

	/* Método getWsFeOpeSolicitudRespuestas Habilitados */ 	
	static function getWsFeOpeSolicitudRespuestasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getWsFeOpeSolicitudRespuestas para listado de Backend */ 	
	static function getWsFeOpeSolicitudRespuestasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getWsFeOpeSolicitudRespuestasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = WsFeOpeSolicitudRespuesta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getWsFeOpeSolicitudRespuestas filtrado para select */ 	
	static function getWsFeOpeSolicitudRespuestasCmbF($paginador = null, $criterio = null){
            $col = WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getWsFeOpeSolicitudRespuestas filtrado por una coleccion de objetos foraneos de WsFeOpeSolicitud */ 	
	static function getWsFeOpeSolicitudRespuestasXWsFeOpeSolicituds($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(WsFeOpeSolicitudRespuesta::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(WsFeOpeSolicitudRespuesta::GEN_TABLA);
            $c->addOrden(WsFeOpeSolicitudRespuesta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getWsFeOpeSolicitudId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ws_fe_ope_solicitud_respuesta_adm.php';
            $url_gestion = 'ws_fe_ope_solicitud_respuesta_gestion.php';
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
	

	/* Metodo getWsFeOpeSolicitudRespuestaObservacions */ 	
	public function getWsFeOpeSolicitudRespuestaObservacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(WsFeOpeSolicitudRespuestaObservacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(WsFeOpeSolicitudRespuestaObservacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(WsFeOpeSolicitudRespuestaObservacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(WsFeOpeSolicitudRespuestaObservacion::GEN_ATTR_WS_FE_OPE_SOLICITUD_RESPUESTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(WsFeOpeSolicitudRespuestaObservacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(WsFeOpeSolicitudRespuestaObservacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".WsFeOpeSolicitudRespuestaObservacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $wsfeopesolicitudrespuestaobservacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $wsfeopesolicitudrespuestaobservacion = WsFeOpeSolicitudRespuestaObservacion::hidratarObjeto($fila);			
                $wsfeopesolicitudrespuestaobservacions[] = $wsfeopesolicitudrespuestaobservacion;
            }

            return $wsfeopesolicitudrespuestaobservacions;
	}	
	

	/* Método getWsFeOpeSolicitudRespuestaObservacionsBloque para MasInfo */ 	
	public function getWsFeOpeSolicitudRespuestaObservacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getWsFeOpeSolicitudRespuestaObservacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudRespuestaObservacions Habilitados */ 	
	public function getWsFeOpeSolicitudRespuestaObservacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getWsFeOpeSolicitudRespuestaObservacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getWsFeOpeSolicitudRespuestaObservacion */ 	
	public function getWsFeOpeSolicitudRespuestaObservacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getWsFeOpeSolicitudRespuestaObservacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de WsFeOpeSolicitudRespuestaObservacion relacionadas */ 	
	public function deleteWsFeOpeSolicitudRespuestaObservacions(){
            $obs = $this->getWsFeOpeSolicitudRespuestaObservacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getWsFeOpeSolicitudRespuestaObservacionsCmb() WsFeOpeSolicitudRespuestaObservacion relacionadas */ 	
	public function getWsFeOpeSolicitudRespuestaObservacionsCmb(){
            $c = new Criterio();
            $c->add(WsFeOpeSolicitudRespuestaObservacion::GEN_ATTR_WS_FE_OPE_SOLICITUD_RESPUESTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitudRespuestaObservacion::GEN_TABLA);
            $c->setCriterios();

            $os = WsFeOpeSolicitudRespuestaObservacion::getWsFeOpeSolicitudRespuestaObservacionsCmbF(null, $c);
            return $os;
	}

	/* Metodo que retorna el WsFeOpeSolicitud (Clave Foranea) */ 	
    public function getWsFeOpeSolicitud(){
        $o = new WsFeOpeSolicitud();
        $o->setId($this->getWsFeOpeSolicitudId());
        return $o;			
    }

	/* Metodo que retorna el WsFeOpeSolicitud (Clave Foranea) en Array */ 	
    public function getWsFeOpeSolicitudEnArray(&$arr_os){
        if($this->getWsFeOpeSolicitudId() != 'null'){
            if(isset($arr_os[$this->getWsFeOpeSolicitudId()])){
                $o = $arr_os[$this->getWsFeOpeSolicitudId()];
            }else{
                $o = WsFeOpeSolicitud::getOxId($this->getWsFeOpeSolicitudId());
                if($o){
                    $arr_os[$this->getWsFeOpeSolicitudId()] = $o;
                }
            }
        }else{
            $o = new WsFeOpeSolicitud();
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
            		
        if($contexto_solicitante != WsFeOpeSolicitud::GEN_CLASE){
            if($this->getWsFeOpeSolicitud()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(WsFeOpeSolicitud::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getWsFeOpeSolicitud()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ws_fe_ope_solicitud_respuesta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ws_fe_ope_solicitud_respuesta';");
            
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

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_ope_solicitud_id' */ 	
	static function getOxWsFeOpeSolicitudId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_ope_solicitud_id' */ 	
	static function getOsxWsFeOpeSolicitudId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_cuit' */ 	
	static function getOxWsFeAfipCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_cuit' */ 	
	static function getOsxWsFeAfipCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_punto_venta' */ 	
	static function getOxWsFeAfipPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_tipo_comprobante' */ 	
	static function getOxWsFeAfipTipoComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_fecha_proceso' */ 	
	static function getOxWsFeAfipFechaProceso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_FECHA_PROCESO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_fecha_proceso' */ 	
	static function getOsxWsFeAfipFechaProceso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_FECHA_PROCESO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_cantidad_registro' */ 	
	static function getOxWsFeAfipCantidadRegistro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CANTIDAD_REGISTRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_resultado_cabecera' */ 	
	static function getOxWsFeAfipResultadoCabecera($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_RESULTADO_CABECERA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_resultado_cabecera' */ 	
	static function getOsxWsFeAfipResultadoCabecera($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_RESULTADO_CABECERA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_reproceso' */ 	
	static function getOxWsFeAfipReproceso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_REPROCESO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_reproceso' */ 	
	static function getOsxWsFeAfipReproceso($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_REPROCESO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_tipo_concepto' */ 	
	static function getOxWsFeAfipTipoConcepto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_CONCEPTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_tipo_documento' */ 	
	static function getOxWsFeAfipTipoDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_TIPO_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_numero_documento' */ 	
	static function getOxWsFeAfipNumeroDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_NUMERO_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_comprobante_desde' */ 	
	static function getOxWsFeAfipComprobanteDesde($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_DESDE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_comprobante_hasta' */ 	
	static function getOxWsFeAfipComprobanteHasta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_HASTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_comprobante_fecha' */ 	
	static function getOxWsFeAfipComprobanteFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_COMPROBANTE_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_resultado_detalle' */ 	
	static function getOxWsFeAfipResultadoDetalle($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_RESULTADO_DETALLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_resultado_detalle' */ 	
	static function getOsxWsFeAfipResultadoDetalle($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_RESULTADO_DETALLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_cae' */ 	
	static function getOxWsFeAfipCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_cae' */ 	
	static function getOsxWsFeAfipCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ws_fe_afip_cae_fecha_vencimiento' */ 	
	static function getOxWsFeAfipCaeFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ws_fe_afip_cae_fecha_vencimiento' */ 	
	static function getOsxWsFeAfipCaeFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_WS_FE_AFIP_CAE_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas(null, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
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

            $obs = self::getWsFeOpeSolicitudRespuestas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ws_fe_ope_solicitud_respuesta_adm');
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
                $c->addTabla(WsFeOpeSolicitudRespuesta::GEN_TABLA);
                $c->addOrden(WsFeOpeSolicitudRespuesta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ws_fe_ope_solicitud_respuestas = WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestas(null, $c);

                $arr = array();
                foreach($ws_fe_ope_solicitud_respuestas as $ws_fe_ope_solicitud_respuesta){
                    $descripcion = $ws_fe_ope_solicitud_respuesta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>