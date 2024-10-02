<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaPresupuesto
{ 
	
	const SES_PAGINACION = 'adm_vtapresupuesto_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtapresupuesto_paginas_registros';
	const SES_CRITERIOS = 'adm_vtapresupuesto_criterios';
	
	const GEN_CLASE = 'VtaPresupuesto';
	const GEN_TABLA = 'vta_presupuesto';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaPresupuesto */ 
	const GEN_ATTR_ID = 'vta_presupuesto.id';
	const GEN_ATTR_DESCRIPCION = 'vta_presupuesto.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'vta_presupuesto.cli_cliente_id';
	const GEN_ATTR_VTA_VENDEDOR_ID = 'vta_presupuesto.vta_vendedor_id';
	const GEN_ATTR_VTA_COMPRADOR_ID = 'vta_presupuesto.vta_comprador_id';
	const GEN_ATTR_VTA_PREVENTISTA_ID = 'vta_presupuesto.vta_preventista_id';
	const GEN_ATTR_GRAL_ACTIVIDAD_ID = 'vta_presupuesto.gral_actividad_id';
	const GEN_ATTR_GRAL_ESCENARIO_ID = 'vta_presupuesto.gral_escenario_id';
	const GEN_ATTR_GRAL_FP_FORMA_PAGO_ID = 'vta_presupuesto.gral_fp_forma_pago_id';
	const GEN_ATTR_GRAL_FP_CUOTA_ID = 'vta_presupuesto.gral_fp_cuota_id';
	const GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID = 'vta_presupuesto.ins_tipo_lista_precio_id';
	const GEN_ATTR_VTA_PRESUPUESTO_TIPO_DESPACHO_ID = 'vta_presupuesto.vta_presupuesto_tipo_despacho_id';
	const GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID = 'vta_presupuesto.vta_presupuesto_tipo_estado_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'vta_presupuesto.gral_condicion_iva_id';
	const GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID = 'vta_presupuesto.vta_presupuesto_tipo_emision_id';
	const GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID = 'vta_presupuesto.vta_presupuesto_tipo_venta_id';
	const GEN_ATTR_VTA_PRESUPUESTO_TIPO_ORIGEN_ID = 'vta_presupuesto.vta_presupuesto_tipo_origen_id';
	const GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID = 'vta_presupuesto.gral_empresa_transportadora_id';
	const GEN_ATTR_VTA_DESCUENTO_FINANCIERO_ID = 'vta_presupuesto.vta_descuento_financiero_id';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'vta_presupuesto.gral_tipo_documento_id';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'vta_presupuesto.persona_descripcion';
	const GEN_ATTR_PERSONA_DOCUMENTO = 'vta_presupuesto.persona_documento';
	const GEN_ATTR_PERSONA_EMAIL = 'vta_presupuesto.persona_email';
	const GEN_ATTR_FECHA = 'vta_presupuesto.fecha';
	const GEN_ATTR_FECHA_VENCIMIENTO = 'vta_presupuesto.fecha_vencimiento';
	const GEN_ATTR_FECHA_ENTREGA = 'vta_presupuesto.fecha_entrega';
	const GEN_ATTR_FECHA_RECORDATORIO = 'vta_presupuesto.fecha_recordatorio';
	const GEN_ATTR_IMPORTE_SUBTOTAL = 'vta_presupuesto.importe_subtotal';
	const GEN_ATTR_IMPORTE_DESCUENTO = 'vta_presupuesto.importe_descuento';
	const GEN_ATTR_IMPORTE_POLITICA_DESCUENTO = 'vta_presupuesto.importe_politica_descuento';
	const GEN_ATTR_IMPORTE_RECARGO = 'vta_presupuesto.importe_recargo';
	const GEN_ATTR_IMPORTE_TOTAL = 'vta_presupuesto.importe_total';
	const GEN_ATTR_CANTIDAD_ITEMS = 'vta_presupuesto.cantidad_items';
	const GEN_ATTR_RECARGO = 'vta_presupuesto.recargo';
	const GEN_ATTR_CONFLICTO = 'vta_presupuesto.conflicto';
	const GEN_ATTR_PREAPROBADO = 'vta_presupuesto.preaprobado';
	const GEN_ATTR_NOTA_INTERNA = 'vta_presupuesto.nota_interna';
	const GEN_ATTR_NOTA_CLIENTE = 'vta_presupuesto.nota_cliente';
	const GEN_ATTR_NOTA_RECORDATORIO = 'vta_presupuesto.nota_recordatorio';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'vta_presupuesto.gral_sucursal_id';
	const GEN_ATTR_GRAL_SUCURSAL_RETIRO = 'vta_presupuesto.gral_sucursal_retiro';
	const GEN_ATTR_INCLUYE_LOGISTICA = 'vta_presupuesto.incluye_logistica';
	const GEN_ATTR_PORCENTAJE_LOGISTICA = 'vta_presupuesto.porcentaje_logistica';
	const GEN_ATTR_IMPORTE_LOGISTICA = 'vta_presupuesto.importe_logistica';
	const GEN_ATTR_DESTACADO = 'vta_presupuesto.destacado';
	const GEN_ATTR_CLI_CENTRO_RECEPCION_ID = 'vta_presupuesto.cli_centro_recepcion_id';
	const GEN_ATTR_VTA_HOJA_RUTA_ID = 'vta_presupuesto.vta_hoja_ruta_id';
	const GEN_ATTR_PORCENTAJE = 'vta_presupuesto.porcentaje';
	const GEN_ATTR_CODIGO = 'vta_presupuesto.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_presupuesto.observacion';
	const GEN_ATTR_ORDEN = 'vta_presupuesto.orden';
	const GEN_ATTR_ESTADO = 'vta_presupuesto.estado';
	const GEN_ATTR_CREADO = 'vta_presupuesto.creado';
	const GEN_ATTR_CREADO_POR = 'vta_presupuesto.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_presupuesto.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_presupuesto.modificado_por';

	/* Constantes de Atributos Min de BVtaPresupuesto */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_VTA_VENDEDOR_ID = 'vta_vendedor_id';
	const GEN_ATTR_MIN_VTA_COMPRADOR_ID = 'vta_comprador_id';
	const GEN_ATTR_MIN_VTA_PREVENTISTA_ID = 'vta_preventista_id';
	const GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID = 'gral_actividad_id';
	const GEN_ATTR_MIN_GRAL_ESCENARIO_ID = 'gral_escenario_id';
	const GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID = 'gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_GRAL_FP_CUOTA_ID = 'gral_fp_cuota_id';
	const GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID = 'ins_tipo_lista_precio_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_DESPACHO_ID = 'vta_presupuesto_tipo_despacho_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ESTADO_ID = 'vta_presupuesto_tipo_estado_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_EMISION_ID = 'vta_presupuesto_tipo_emision_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_VENTA_ID = 'vta_presupuesto_tipo_venta_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ORIGEN_ID = 'vta_presupuesto_tipo_origen_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID = 'gral_empresa_transportadora_id';
	const GEN_ATTR_MIN_VTA_DESCUENTO_FINANCIERO_ID = 'vta_descuento_financiero_id';
	const GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID = 'gral_tipo_documento_id';
	const GEN_ATTR_MIN_PERSONA_DESCRIPCION = 'persona_descripcion';
	const GEN_ATTR_MIN_PERSONA_DOCUMENTO = 'persona_documento';
	const GEN_ATTR_MIN_PERSONA_EMAIL = 'persona_email';
	const GEN_ATTR_MIN_FECHA = 'fecha';
	const GEN_ATTR_MIN_FECHA_VENCIMIENTO = 'fecha_vencimiento';
	const GEN_ATTR_MIN_FECHA_ENTREGA = 'fecha_entrega';
	const GEN_ATTR_MIN_FECHA_RECORDATORIO = 'fecha_recordatorio';
	const GEN_ATTR_MIN_IMPORTE_SUBTOTAL = 'importe_subtotal';
	const GEN_ATTR_MIN_IMPORTE_DESCUENTO = 'importe_descuento';
	const GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO = 'importe_politica_descuento';
	const GEN_ATTR_MIN_IMPORTE_RECARGO = 'importe_recargo';
	const GEN_ATTR_MIN_IMPORTE_TOTAL = 'importe_total';
	const GEN_ATTR_MIN_CANTIDAD_ITEMS = 'cantidad_items';
	const GEN_ATTR_MIN_RECARGO = 'recargo';
	const GEN_ATTR_MIN_CONFLICTO = 'conflicto';
	const GEN_ATTR_MIN_PREAPROBADO = 'preaprobado';
	const GEN_ATTR_MIN_NOTA_INTERNA = 'nota_interna';
	const GEN_ATTR_MIN_NOTA_CLIENTE = 'nota_cliente';
	const GEN_ATTR_MIN_NOTA_RECORDATORIO = 'nota_recordatorio';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO = 'gral_sucursal_retiro';
	const GEN_ATTR_MIN_INCLUYE_LOGISTICA = 'incluye_logistica';
	const GEN_ATTR_MIN_PORCENTAJE_LOGISTICA = 'porcentaje_logistica';
	const GEN_ATTR_MIN_IMPORTE_LOGISTICA = 'importe_logistica';
	const GEN_ATTR_MIN_DESTACADO = 'destacado';
	const GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID = 'cli_centro_recepcion_id';
	const GEN_ATTR_MIN_VTA_HOJA_RUTA_ID = 'vta_hoja_ruta_id';
	const GEN_ATTR_MIN_PORCENTAJE = 'porcentaje';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
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
	

	/* Atributos de BVtaPresupuesto */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $vta_vendedor_id;
	private $vta_comprador_id;
	private $vta_preventista_id;
	private $gral_actividad_id;
	private $gral_escenario_id;
	private $gral_fp_forma_pago_id;
	private $gral_fp_cuota_id;
	private $ins_tipo_lista_precio_id;
	private $vta_presupuesto_tipo_despacho_id;
	private $vta_presupuesto_tipo_estado_id;
	private $gral_condicion_iva_id;
	private $vta_presupuesto_tipo_emision_id;
	private $vta_presupuesto_tipo_venta_id;
	private $vta_presupuesto_tipo_origen_id;
	private $gral_empresa_transportadora_id;
	private $vta_descuento_financiero_id;
	private $gral_tipo_documento_id;
	private $persona_descripcion;
	private $persona_documento;
	private $persona_email;
	private $fecha;
	private $fecha_vencimiento;
	private $fecha_entrega;
	private $fecha_recordatorio;
	private $importe_subtotal;
	private $importe_descuento;
	private $importe_politica_descuento;
	private $importe_recargo;
	private $importe_total;
	private $cantidad_items;
	private $recargo;
	private $conflicto;
	private $preaprobado;
	private $nota_interna;
	private $nota_cliente;
	private $nota_recordatorio;
	private $gral_sucursal_id;
	private $gral_sucursal_retiro;
	private $incluye_logistica;
	private $porcentaje_logistica;
	private $importe_logistica;
	private $destacado;
	private $cli_centro_recepcion_id;
	private $vta_hoja_ruta_id;
	private $porcentaje;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaPresupuesto */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getVtaVendedorId(){ if(isset($this->vta_vendedor_id)){ return $this->vta_vendedor_id; }else{ return 'null'; } }
	public function getVtaCompradorId(){ if(isset($this->vta_comprador_id)){ return $this->vta_comprador_id; }else{ return 'null'; } }
	public function getVtaPreventistaId(){ if(isset($this->vta_preventista_id)){ return $this->vta_preventista_id; }else{ return 'null'; } }
	public function getGralActividadId(){ if(isset($this->gral_actividad_id)){ return $this->gral_actividad_id; }else{ return 'null'; } }
	public function getGralEscenarioId(){ if(isset($this->gral_escenario_id)){ return $this->gral_escenario_id; }else{ return 'null'; } }
	public function getGralFpFormaPagoId(){ if(isset($this->gral_fp_forma_pago_id)){ return $this->gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getGralFpCuotaId(){ if(isset($this->gral_fp_cuota_id)){ return $this->gral_fp_cuota_id; }else{ return 'null'; } }
	public function getInsTipoListaPrecioId(){ if(isset($this->ins_tipo_lista_precio_id)){ return $this->ins_tipo_lista_precio_id; }else{ return 'null'; } }
	public function getVtaPresupuestoTipoDespachoId(){ if(isset($this->vta_presupuesto_tipo_despacho_id)){ return $this->vta_presupuesto_tipo_despacho_id; }else{ return 'null'; } }
	public function getVtaPresupuestoTipoEstadoId(){ if(isset($this->vta_presupuesto_tipo_estado_id)){ return $this->vta_presupuesto_tipo_estado_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getVtaPresupuestoTipoEmisionId(){ if(isset($this->vta_presupuesto_tipo_emision_id)){ return $this->vta_presupuesto_tipo_emision_id; }else{ return 'null'; } }
	public function getVtaPresupuestoTipoVentaId(){ if(isset($this->vta_presupuesto_tipo_venta_id)){ return $this->vta_presupuesto_tipo_venta_id; }else{ return 'null'; } }
	public function getVtaPresupuestoTipoOrigenId(){ if(isset($this->vta_presupuesto_tipo_origen_id)){ return $this->vta_presupuesto_tipo_origen_id; }else{ return 'null'; } }
	public function getGralEmpresaTransportadoraId(){ if(isset($this->gral_empresa_transportadora_id)){ return $this->gral_empresa_transportadora_id; }else{ return 'null'; } }
	public function getVtaDescuentoFinancieroId(){ if(isset($this->vta_descuento_financiero_id)){ return $this->vta_descuento_financiero_id; }else{ return 'null'; } }
	public function getGralTipoDocumentoId(){ if(isset($this->gral_tipo_documento_id)){ return $this->gral_tipo_documento_id; }else{ return 'null'; } }
	public function getPersonaDescripcion(){ if(isset($this->persona_descripcion)){ return $this->persona_descripcion; }else{ return ''; } }
	public function getPersonaDocumento(){ if(isset($this->persona_documento)){ return $this->persona_documento; }else{ return ''; } }
	public function getPersonaEmail(){ if(isset($this->persona_email)){ return $this->persona_email; }else{ return ''; } }
	public function getFecha(){ if(isset($this->fecha)){ return $this->fecha; }else{ return ''; } }
	public function getFechaVencimiento(){ if(isset($this->fecha_vencimiento)){ return $this->fecha_vencimiento; }else{ return ''; } }
	public function getFechaEntrega(){ if(isset($this->fecha_entrega)){ return $this->fecha_entrega; }else{ return ''; } }
	public function getFechaRecordatorio(){ if(isset($this->fecha_recordatorio)){ return $this->fecha_recordatorio; }else{ return ''; } }
	public function getImporteSubtotal(){ if(isset($this->importe_subtotal)){ return $this->importe_subtotal; }else{ return 0; } }
	public function getImporteDescuento(){ if(isset($this->importe_descuento)){ return $this->importe_descuento; }else{ return 0; } }
	public function getImportePoliticaDescuento(){ if(isset($this->importe_politica_descuento)){ return $this->importe_politica_descuento; }else{ return 0; } }
	public function getImporteRecargo(){ if(isset($this->importe_recargo)){ return $this->importe_recargo; }else{ return 0; } }
	public function getImporteTotal(){ if(isset($this->importe_total)){ return $this->importe_total; }else{ return 0; } }
	public function getCantidadItems(){ if(isset($this->cantidad_items)){ return $this->cantidad_items; }else{ return 0; } }
	public function getRecargo(){ if(isset($this->recargo)){ return $this->recargo; }else{ return 0; } }
	public function getConflicto(){ if(isset($this->conflicto)){ return $this->conflicto; }else{ return 0; } }
	public function getPreaprobado(){ if(isset($this->preaprobado)){ return $this->preaprobado; }else{ return 0; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getNotaCliente(){ if(isset($this->nota_cliente)){ return $this->nota_cliente; }else{ return ''; } }
	public function getNotaRecordatorio(){ if(isset($this->nota_recordatorio)){ return $this->nota_recordatorio; }else{ return ''; } }
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getGralSucursalRetiro(){ if(isset($this->gral_sucursal_retiro)){ return $this->gral_sucursal_retiro; }else{ return 'null'; } }
	public function getGralSucursalRetiroObj(){ if(isset($this->gral_sucursal_retiro)){ return GralSucursal::getOxId($this->gral_sucursal_retiro); }else{ return new GralSucursal(); } }
	public function getIncluyeLogistica(){ if(isset($this->incluye_logistica)){ return $this->incluye_logistica; }else{ return 0; } }
	public function getPorcentajeLogistica(){ if(isset($this->porcentaje_logistica)){ return $this->porcentaje_logistica; }else{ return 0; } }
	public function getImporteLogistica(){ if(isset($this->importe_logistica)){ return $this->importe_logistica; }else{ return 0; } }
	public function getDestacado(){ if(isset($this->destacado)){ return $this->destacado; }else{ return 0; } }
	public function getCliCentroRecepcionId(){ if(isset($this->cli_centro_recepcion_id)){ return $this->cli_centro_recepcion_id; }else{ return 'null'; } }
	public function getVtaHojaRutaId(){ if(isset($this->vta_hoja_ruta_id)){ return $this->vta_hoja_ruta_id; }else{ return 'null'; } }
	public function getPorcentaje(){ if(isset($this->porcentaje)){ return $this->porcentaje; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaPresupuesto */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_VTA_VENDEDOR_ID."
				, ".self::GEN_ATTR_VTA_COMPRADOR_ID."
				, ".self::GEN_ATTR_VTA_PREVENTISTA_ID."
				, ".self::GEN_ATTR_GRAL_ACTIVIDAD_ID."
				, ".self::GEN_ATTR_GRAL_ESCENARIO_ID."
				, ".self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_GRAL_FP_CUOTA_ID."
				, ".self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_DESPACHO_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ORIGEN_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID."
				, ".self::GEN_ATTR_VTA_DESCUENTO_FINANCIERO_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID."
				, ".self::GEN_ATTR_PERSONA_DESCRIPCION."
				, ".self::GEN_ATTR_PERSONA_DOCUMENTO."
				, ".self::GEN_ATTR_PERSONA_EMAIL."
				, ".self::GEN_ATTR_FECHA."
				, ".self::GEN_ATTR_FECHA_VENCIMIENTO."
				, ".self::GEN_ATTR_FECHA_ENTREGA."
				, ".self::GEN_ATTR_FECHA_RECORDATORIO."
				, ".self::GEN_ATTR_IMPORTE_SUBTOTAL."
				, ".self::GEN_ATTR_IMPORTE_DESCUENTO."
				, ".self::GEN_ATTR_IMPORTE_POLITICA_DESCUENTO."
				, ".self::GEN_ATTR_IMPORTE_RECARGO."
				, ".self::GEN_ATTR_IMPORTE_TOTAL."
				, ".self::GEN_ATTR_CANTIDAD_ITEMS."
				, ".self::GEN_ATTR_RECARGO."
				, ".self::GEN_ATTR_CONFLICTO."
				, ".self::GEN_ATTR_PREAPROBADO."
				, ".self::GEN_ATTR_NOTA_INTERNA."
				, ".self::GEN_ATTR_NOTA_CLIENTE."
				, ".self::GEN_ATTR_NOTA_RECORDATORIO."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_RETIRO."
				, ".self::GEN_ATTR_INCLUYE_LOGISTICA."
				, ".self::GEN_ATTR_PORCENTAJE_LOGISTICA."
				, ".self::GEN_ATTR_IMPORTE_LOGISTICA."
				, ".self::GEN_ATTR_DESTACADO."
				, ".self::GEN_ATTR_CLI_CENTRO_RECEPCION_ID."
				, ".self::GEN_ATTR_VTA_HOJA_RUTA_ID."
				, ".self::GEN_ATTR_PORCENTAJE."
				, ".self::GEN_ATTR_CODIGO."
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
				$this->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
				$this->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
				$this->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
				$this->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
				$this->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
				$this->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
				$this->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
				$this->setGralFpCuotaId($fila[self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID]);
				$this->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
				$this->setVtaPresupuestoTipoDespachoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_DESPACHO_ID]);
				$this->setVtaPresupuestoTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ESTADO_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setVtaPresupuestoTipoEmisionId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_EMISION_ID]);
				$this->setVtaPresupuestoTipoVentaId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_VENTA_ID]);
				$this->setVtaPresupuestoTipoOrigenId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ORIGEN_ID]);
				$this->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
				$this->setVtaDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_VTA_DESCUENTO_FINANCIERO_ID]);
				$this->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
				$this->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
				$this->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
				$this->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
				$this->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
				$this->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
				$this->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
				$this->setFechaRecordatorio($fila[self::GEN_ATTR_MIN_FECHA_RECORDATORIO]);
				$this->setImporteSubtotal($fila[self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL]);
				$this->setImporteDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO]);
				$this->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
				$this->setImporteRecargo($fila[self::GEN_ATTR_MIN_IMPORTE_RECARGO]);
				$this->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
				$this->setCantidadItems($fila[self::GEN_ATTR_MIN_CANTIDAD_ITEMS]);
				$this->setRecargo($fila[self::GEN_ATTR_MIN_RECARGO]);
				$this->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
				$this->setPreaprobado($fila[self::GEN_ATTR_MIN_PREAPROBADO]);
				$this->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
				$this->setNotaCliente($fila[self::GEN_ATTR_MIN_NOTA_CLIENTE]);
				$this->setNotaRecordatorio($fila[self::GEN_ATTR_MIN_NOTA_RECORDATORIO]);
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setGralSucursalRetiro($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO]);
				$this->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
				$this->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
				$this->setImporteLogistica($fila[self::GEN_ATTR_MIN_IMPORTE_LOGISTICA]);
				$this->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
				$this->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
				$this->setVtaHojaRutaId($fila[self::GEN_ATTR_MIN_VTA_HOJA_RUTA_ID]);
				$this->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
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
	public function setCliClienteId($v){ $this->cli_cliente_id = $v; }
	public function setVtaVendedorId($v){ $this->vta_vendedor_id = $v; }
	public function setVtaCompradorId($v){ $this->vta_comprador_id = $v; }
	public function setVtaPreventistaId($v){ $this->vta_preventista_id = $v; }
	public function setGralActividadId($v){ $this->gral_actividad_id = $v; }
	public function setGralEscenarioId($v){ $this->gral_escenario_id = $v; }
	public function setGralFpFormaPagoId($v){ $this->gral_fp_forma_pago_id = $v; }
	public function setGralFpCuotaId($v){ $this->gral_fp_cuota_id = $v; }
	public function setInsTipoListaPrecioId($v){ $this->ins_tipo_lista_precio_id = $v; }
	public function setVtaPresupuestoTipoDespachoId($v){ $this->vta_presupuesto_tipo_despacho_id = $v; }
	public function setVtaPresupuestoTipoEstadoId($v){ $this->vta_presupuesto_tipo_estado_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setVtaPresupuestoTipoEmisionId($v){ $this->vta_presupuesto_tipo_emision_id = $v; }
	public function setVtaPresupuestoTipoVentaId($v){ $this->vta_presupuesto_tipo_venta_id = $v; }
	public function setVtaPresupuestoTipoOrigenId($v){ $this->vta_presupuesto_tipo_origen_id = $v; }
	public function setGralEmpresaTransportadoraId($v){ $this->gral_empresa_transportadora_id = $v; }
	public function setVtaDescuentoFinancieroId($v){ $this->vta_descuento_financiero_id = $v; }
	public function setGralTipoDocumentoId($v){ $this->gral_tipo_documento_id = $v; }
	public function setPersonaDescripcion($v){ $this->persona_descripcion = $v; }
	public function setPersonaDocumento($v){ $this->persona_documento = $v; }
	public function setPersonaEmail($v){ $this->persona_email = $v; }
	public function setFecha($v){ $this->fecha = $v; }
	public function setFechaVencimiento($v){ $this->fecha_vencimiento = $v; }
	public function setFechaEntrega($v){ $this->fecha_entrega = $v; }
	public function setFechaRecordatorio($v){ $this->fecha_recordatorio = $v; }
	public function setImporteSubtotal($v){ $this->importe_subtotal = $v; }
	public function setImporteDescuento($v){ $this->importe_descuento = $v; }
	public function setImportePoliticaDescuento($v){ $this->importe_politica_descuento = $v; }
	public function setImporteRecargo($v){ $this->importe_recargo = $v; }
	public function setImporteTotal($v){ $this->importe_total = $v; }
	public function setCantidadItems($v){ $this->cantidad_items = $v; }
	public function setRecargo($v){ $this->recargo = $v; }
	public function setConflicto($v){ $this->conflicto = $v; }
	public function setPreaprobado($v){ $this->preaprobado = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setNotaCliente($v){ $this->nota_cliente = $v; }
	public function setNotaRecordatorio($v){ $this->nota_recordatorio = $v; }
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setGralSucursalRetiro($v){ $this->gral_sucursal_retiro = $v; }
	public function setIncluyeLogistica($v){ $this->incluye_logistica = $v; }
	public function setPorcentajeLogistica($v){ $this->porcentaje_logistica = $v; }
	public function setImporteLogistica($v){ $this->importe_logistica = $v; }
	public function setDestacado($v){ $this->destacado = $v; }
	public function setCliCentroRecepcionId($v){ $this->cli_centro_recepcion_id = $v; }
	public function setVtaHojaRutaId($v){ $this->vta_hoja_ruta_id = $v; }
	public function setPorcentaje($v){ $this->porcentaje = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaPresupuesto();
            $o->setId($fila[VtaPresupuesto::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$o->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
			$o->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$o->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$o->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$o->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$o->setGralFpCuotaId($fila[self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID]);
			$o->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
			$o->setVtaPresupuestoTipoDespachoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_DESPACHO_ID]);
			$o->setVtaPresupuestoTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ESTADO_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setVtaPresupuestoTipoEmisionId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_EMISION_ID]);
			$o->setVtaPresupuestoTipoVentaId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_VENTA_ID]);
			$o->setVtaPresupuestoTipoOrigenId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ORIGEN_ID]);
			$o->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$o->setVtaDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_VTA_DESCUENTO_FINANCIERO_ID]);
			$o->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$o->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$o->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$o->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$o->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$o->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$o->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
			$o->setFechaRecordatorio($fila[self::GEN_ATTR_MIN_FECHA_RECORDATORIO]);
			$o->setImporteSubtotal($fila[self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL]);
			$o->setImporteDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO]);
			$o->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
			$o->setImporteRecargo($fila[self::GEN_ATTR_MIN_IMPORTE_RECARGO]);
			$o->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
			$o->setCantidadItems($fila[self::GEN_ATTR_MIN_CANTIDAD_ITEMS]);
			$o->setRecargo($fila[self::GEN_ATTR_MIN_RECARGO]);
			$o->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
			$o->setPreaprobado($fila[self::GEN_ATTR_MIN_PREAPROBADO]);
			$o->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$o->setNotaCliente($fila[self::GEN_ATTR_MIN_NOTA_CLIENTE]);
			$o->setNotaRecordatorio($fila[self::GEN_ATTR_MIN_NOTA_RECORDATORIO]);
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setGralSucursalRetiro($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO]);
			$o->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
			$o->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
			$o->setImporteLogistica($fila[self::GEN_ATTR_MIN_IMPORTE_LOGISTICA]);
			$o->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
			$o->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
			$o->setVtaHojaRutaId($fila[self::GEN_ATTR_MIN_VTA_HOJA_RUTA_ID]);
			$o->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaPresupuesto */ 	
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

	/* Cambia el estado de BVtaPresupuesto */ 	
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

	/* Save de BVtaPresupuesto */ 	
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_DESPACHO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_EMISION_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_VTA_DESCUENTO_FINANCIERO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA."
						, ".self::GEN_ATTR_MIN_FECHA_RECORDATORIO."
						, ".self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_RECARGO."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_CANTIDAD_ITEMS."
						, ".self::GEN_ATTR_MIN_RECARGO."
						, ".self::GEN_ATTR_MIN_CONFLICTO."
						, ".self::GEN_ATTR_MIN_PREAPROBADO."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NOTA_CLIENTE."
						, ".self::GEN_ATTR_MIN_NOTA_RECORDATORIO."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_IMPORTE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_DESTACADO."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_VTA_HOJA_RUTA_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_presupuesto_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaVendedorId()."
						, ".$this->getVtaCompradorId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralFpCuotaId()."
						, ".$this->getInsTipoListaPrecioId()."
						, ".$this->getVtaPresupuestoTipoDespachoId()."
						, ".$this->getVtaPresupuestoTipoEstadoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getVtaPresupuestoTipoEmisionId()."
						, ".$this->getVtaPresupuestoTipoVentaId()."
						, ".$this->getVtaPresupuestoTipoOrigenId()."
						, ".$this->getGralEmpresaTransportadoraId()."
						, ".$this->getVtaDescuentoFinancieroId()."
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getPersonaDocumento()."'
						, '".$this->getPersonaEmail()."'
						, '".$this->getFecha()."'
						, '".$this->getFechaVencimiento()."'
						, '".$this->getFechaEntrega()."'
						, '".$this->getFechaRecordatorio()."'
						, '".$this->getImporteSubtotal()."'
						, '".$this->getImporteDescuento()."'
						, '".$this->getImportePoliticaDescuento()."'
						, '".$this->getImporteRecargo()."'
						, '".$this->getImporteTotal()."'
						, ".$this->getCantidadItems()."
						, '".$this->getRecargo()."'
						, ".$this->getConflicto()."
						, ".$this->getPreaprobado()."
						, '".$this->getNotaInterna()."'
						, '".$this->getNotaCliente()."'
						, '".$this->getNotaRecordatorio()."'
						, ".$this->getGralSucursalId()."
						, ".$this->getGralSucursalRetiro()."
						, ".$this->getIncluyeLogistica()."
						, '".$this->getPorcentajeLogistica()."'
						, '".$this->getImporteLogistica()."'
						, ".$this->getDestacado()."
						, ".$this->getCliCentroRecepcionId()."
						, ".$this->getVtaHojaRutaId()."
						, ".$this->getPorcentaje()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_presupuesto_seq')";
            
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
                 
				 ".VtaPresupuesto::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID." = ".$this->getVtaVendedorId()."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID." = ".$this->getVtaCompradorId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID." = ".$this->getGralFpCuotaId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID." = ".$this->getInsTipoListaPrecioId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_DESPACHO_ID." = ".$this->getVtaPresupuestoTipoDespachoId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ESTADO_ID." = ".$this->getVtaPresupuestoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_EMISION_ID." = ".$this->getVtaPresupuestoTipoEmisionId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_VENTA_ID." = ".$this->getVtaPresupuestoTipoVentaId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ORIGEN_ID." = ".$this->getVtaPresupuestoTipoOrigenId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
						, ".self::GEN_ATTR_MIN_VTA_DESCUENTO_FINANCIERO_ID." = ".$this->getVtaDescuentoFinancieroId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO." = '".$this->getPersonaDocumento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL." = '".$this->getPersonaEmail()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO." = '".$this->getFechaVencimiento()."'
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA." = '".$this->getFechaEntrega()."'
						, ".self::GEN_ATTR_MIN_FECHA_RECORDATORIO." = '".$this->getFechaRecordatorio()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL." = '".$this->getImporteSubtotal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO." = '".$this->getImporteDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO." = '".$this->getImportePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_RECARGO." = '".$this->getImporteRecargo()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL." = '".$this->getImporteTotal()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_ITEMS." = ".$this->getCantidadItems()."
						, ".self::GEN_ATTR_MIN_RECARGO." = '".$this->getRecargo()."'
						, ".self::GEN_ATTR_MIN_CONFLICTO." = ".$this->getConflicto()."
						, ".self::GEN_ATTR_MIN_PREAPROBADO." = ".$this->getPreaprobado()."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NOTA_CLIENTE." = '".$this->getNotaCliente()."'
						, ".self::GEN_ATTR_MIN_NOTA_RECORDATORIO." = '".$this->getNotaRecordatorio()."'
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO." = ".$this->getGralSucursalRetiro()."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA." = ".$this->getIncluyeLogistica()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA." = '".$this->getPorcentajeLogistica()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_LOGISTICA." = '".$this->getImporteLogistica()."'
						, ".self::GEN_ATTR_MIN_DESTACADO." = ".$this->getDestacado()."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID." = ".$this->getCliCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_VTA_HOJA_RUTA_ID." = ".$this->getVtaHojaRutaId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE." = ".$this->getPorcentaje()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_DESPACHO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_EMISION_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID."
						, ".self::GEN_ATTR_MIN_VTA_DESCUENTO_FINANCIERO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA."
						, ".self::GEN_ATTR_MIN_FECHA_RECORDATORIO."
						, ".self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_RECARGO."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_CANTIDAD_ITEMS."
						, ".self::GEN_ATTR_MIN_RECARGO."
						, ".self::GEN_ATTR_MIN_CONFLICTO."
						, ".self::GEN_ATTR_MIN_PREAPROBADO."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NOTA_CLIENTE."
						, ".self::GEN_ATTR_MIN_NOTA_RECORDATORIO."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_IMPORTE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_DESTACADO."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_VTA_HOJA_RUTA_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaVendedorId()."
						, ".$this->getVtaCompradorId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralFpCuotaId()."
						, ".$this->getInsTipoListaPrecioId()."
						, ".$this->getVtaPresupuestoTipoDespachoId()."
						, ".$this->getVtaPresupuestoTipoEstadoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getVtaPresupuestoTipoEmisionId()."
						, ".$this->getVtaPresupuestoTipoVentaId()."
						, ".$this->getVtaPresupuestoTipoOrigenId()."
						, ".$this->getGralEmpresaTransportadoraId()."
						, ".$this->getVtaDescuentoFinancieroId()."
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getPersonaDocumento()."'
						, '".$this->getPersonaEmail()."'
						, '".$this->getFecha()."'
						, '".$this->getFechaVencimiento()."'
						, '".$this->getFechaEntrega()."'
						, '".$this->getFechaRecordatorio()."'
						, '".$this->getImporteSubtotal()."'
						, '".$this->getImporteDescuento()."'
						, '".$this->getImportePoliticaDescuento()."'
						, '".$this->getImporteRecargo()."'
						, '".$this->getImporteTotal()."'
						, ".$this->getCantidadItems()."
						, '".$this->getRecargo()."'
						, ".$this->getConflicto()."
						, ".$this->getPreaprobado()."
						, '".$this->getNotaInterna()."'
						, '".$this->getNotaCliente()."'
						, '".$this->getNotaRecordatorio()."'
						, ".$this->getGralSucursalId()."
						, ".$this->getGralSucursalRetiro()."
						, ".$this->getIncluyeLogistica()."
						, '".$this->getPorcentajeLogistica()."'
						, '".$this->getImporteLogistica()."'
						, ".$this->getDestacado()."
						, ".$this->getCliCentroRecepcionId()."
						, ".$this->getVtaHojaRutaId()."
						, ".$this->getPorcentaje()."
						, '".$this->getCodigo()."'
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
                     
				 ".VtaPresupuesto::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID." = ".$this->getVtaVendedorId()."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID." = ".$this->getVtaCompradorId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID." = ".$this->getGralFpCuotaId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID." = ".$this->getInsTipoListaPrecioId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_DESPACHO_ID." = ".$this->getVtaPresupuestoTipoDespachoId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ESTADO_ID." = ".$this->getVtaPresupuestoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_EMISION_ID." = ".$this->getVtaPresupuestoTipoEmisionId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_VENTA_ID." = ".$this->getVtaPresupuestoTipoVentaId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ORIGEN_ID." = ".$this->getVtaPresupuestoTipoOrigenId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID." = ".$this->getGralEmpresaTransportadoraId()."
						, ".self::GEN_ATTR_MIN_VTA_DESCUENTO_FINANCIERO_ID." = ".$this->getVtaDescuentoFinancieroId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO." = '".$this->getPersonaDocumento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL." = '".$this->getPersonaEmail()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO." = '".$this->getFechaVencimiento()."'
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA." = '".$this->getFechaEntrega()."'
						, ".self::GEN_ATTR_MIN_FECHA_RECORDATORIO." = '".$this->getFechaRecordatorio()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL." = '".$this->getImporteSubtotal()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO." = '".$this->getImporteDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO." = '".$this->getImportePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_RECARGO." = '".$this->getImporteRecargo()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL." = '".$this->getImporteTotal()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_ITEMS." = ".$this->getCantidadItems()."
						, ".self::GEN_ATTR_MIN_RECARGO." = '".$this->getRecargo()."'
						, ".self::GEN_ATTR_MIN_CONFLICTO." = ".$this->getConflicto()."
						, ".self::GEN_ATTR_MIN_PREAPROBADO." = ".$this->getPreaprobado()."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NOTA_CLIENTE." = '".$this->getNotaCliente()."'
						, ".self::GEN_ATTR_MIN_NOTA_RECORDATORIO." = '".$this->getNotaRecordatorio()."'
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO." = ".$this->getGralSucursalRetiro()."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA." = ".$this->getIncluyeLogistica()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA." = '".$this->getPorcentajeLogistica()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_LOGISTICA." = '".$this->getImporteLogistica()."'
						, ".self::GEN_ATTR_MIN_DESTACADO." = ".$this->getDestacado()."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID." = ".$this->getCliCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_VTA_HOJA_RUTA_ID." = ".$this->getVtaHojaRutaId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE." = ".$this->getPorcentaje()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
            $o = new VtaPresupuesto();
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

	/* Delete de BVtaPresupuesto */ 	
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
	
            // se elimina la coleccion de VtaPresupuestoEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoInsInsumos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoInsInsumos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoVehCoches relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoVehCoche::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoVehCoches(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjustes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjustes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoCliClienteTiendas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoCliClienteTienda::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoCliClienteTiendas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoMensajes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoMensaje::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoMensajes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoValoracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoValoracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoValoracions(null, $c) as $o){
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
	
	public function duplicarVtaPresupuesto(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaPresupuestos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaPresupuesto::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtapresupuestos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtapresupuesto = new VtaPresupuesto();
                    $vtapresupuesto->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtapresupuesto->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtapresupuesto->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$vtapresupuesto->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$vtapresupuesto->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
			$vtapresupuesto->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$vtapresupuesto->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$vtapresupuesto->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$vtapresupuesto->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$vtapresupuesto->setGralFpCuotaId($fila[self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID]);
			$vtapresupuesto->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
			$vtapresupuesto->setVtaPresupuestoTipoDespachoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_DESPACHO_ID]);
			$vtapresupuesto->setVtaPresupuestoTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ESTADO_ID]);
			$vtapresupuesto->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$vtapresupuesto->setVtaPresupuestoTipoEmisionId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_EMISION_ID]);
			$vtapresupuesto->setVtaPresupuestoTipoVentaId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_VENTA_ID]);
			$vtapresupuesto->setVtaPresupuestoTipoOrigenId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_TIPO_ORIGEN_ID]);
			$vtapresupuesto->setGralEmpresaTransportadoraId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_TRANSPORTADORA_ID]);
			$vtapresupuesto->setVtaDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_VTA_DESCUENTO_FINANCIERO_ID]);
			$vtapresupuesto->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$vtapresupuesto->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$vtapresupuesto->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$vtapresupuesto->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$vtapresupuesto->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$vtapresupuesto->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$vtapresupuesto->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
			$vtapresupuesto->setFechaRecordatorio($fila[self::GEN_ATTR_MIN_FECHA_RECORDATORIO]);
			$vtapresupuesto->setImporteSubtotal($fila[self::GEN_ATTR_MIN_IMPORTE_SUBTOTAL]);
			$vtapresupuesto->setImporteDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO]);
			$vtapresupuesto->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
			$vtapresupuesto->setImporteRecargo($fila[self::GEN_ATTR_MIN_IMPORTE_RECARGO]);
			$vtapresupuesto->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
			$vtapresupuesto->setCantidadItems($fila[self::GEN_ATTR_MIN_CANTIDAD_ITEMS]);
			$vtapresupuesto->setRecargo($fila[self::GEN_ATTR_MIN_RECARGO]);
			$vtapresupuesto->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
			$vtapresupuesto->setPreaprobado($fila[self::GEN_ATTR_MIN_PREAPROBADO]);
			$vtapresupuesto->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$vtapresupuesto->setNotaCliente($fila[self::GEN_ATTR_MIN_NOTA_CLIENTE]);
			$vtapresupuesto->setNotaRecordatorio($fila[self::GEN_ATTR_MIN_NOTA_RECORDATORIO]);
			$vtapresupuesto->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$vtapresupuesto->setGralSucursalRetiro($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_RETIRO]);
			$vtapresupuesto->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
			$vtapresupuesto->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
			$vtapresupuesto->setImporteLogistica($fila[self::GEN_ATTR_MIN_IMPORTE_LOGISTICA]);
			$vtapresupuesto->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
			$vtapresupuesto->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
			$vtapresupuesto->setVtaHojaRutaId($fila[self::GEN_ATTR_MIN_VTA_HOJA_RUTA_ID]);
			$vtapresupuesto->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
			$vtapresupuesto->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtapresupuesto->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtapresupuesto->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtapresupuesto->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtapresupuesto->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtapresupuesto->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtapresupuesto->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtapresupuesto->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtapresupuestos[] = $vtapresupuesto;
		}
		
		return $vtapresupuestos;
	}	
	

	/* Método getVtaPresupuestos Habilitados */ 	
	static function getVtaPresupuestosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaPresupuesto::getVtaPresupuestos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaPresupuestos para listado de Backend */ 	
	static function getVtaPresupuestosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaPresupuesto::getVtaPresupuestos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaPresupuestosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaPresupuesto::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaPresupuesto::getVtaPresupuestos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPresupuestos filtrado para select */ 	
	static function getVtaPresupuestosCmbF($paginador = null, $criterio = null){
            $col = VtaPresupuesto::getVtaPresupuestos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getVtaPresupuestosXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaVendedor */ 	
	static function getVtaPresupuestosXVtaVendedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaVendedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaComprador */ 	
	static function getVtaPresupuestosXVtaCompradors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_COMPRADOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaCompradorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaPreventista */ 	
	static function getVtaPresupuestosXVtaPreventistas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_PREVENTISTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPreventistaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de GralActividad */ 	
	static function getVtaPresupuestosXGralActividads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_ACTIVIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralActividadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de GralEscenario */ 	
	static function getVtaPresupuestosXGralEscenarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_ESCENARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEscenarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de GralFpFormaPago */ 	
	static function getVtaPresupuestosXGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de GralFpCuota */ 	
	static function getVtaPresupuestosXGralFpCuotas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_FP_CUOTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpCuotaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de InsTipoListaPrecio */ 	
	static function getVtaPresupuestosXInsTipoListaPrecios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsTipoListaPrecioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaPresupuestoTipoDespacho */ 	
	static function getVtaPresupuestosXVtaPresupuestoTipoDespachos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_DESPACHO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoTipoDespachoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaPresupuestoTipoEstado */ 	
	static function getVtaPresupuestosXVtaPresupuestoTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getVtaPresupuestosXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaPresupuestoTipoEmision */ 	
	static function getVtaPresupuestosXVtaPresupuestoTipoEmisions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoTipoEmisionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaPresupuestoTipoVenta */ 	
	static function getVtaPresupuestosXVtaPresupuestoTipoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoTipoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaPresupuestoTipoOrigen */ 	
	static function getVtaPresupuestosXVtaPresupuestoTipoOrigens($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ORIGEN_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoTipoOrigenId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de GralEmpresaTransportadora */ 	
	static function getVtaPresupuestosXGralEmpresaTransportadoras($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaTransportadoraId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaDescuentoFinanciero */ 	
	static function getVtaPresupuestosXVtaDescuentoFinancieros($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_DESCUENTO_FINANCIERO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaDescuentoFinancieroId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getVtaPresupuestosXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getVtaPresupuestosXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de CliCentroRecepcion */ 	
	static function getVtaPresupuestosXCliCentroRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliCentroRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestos filtrado por una coleccion de objetos foraneos de VtaHojaRuta */ 	
	static function getVtaPresupuestosXVtaHojaRutas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_HOJA_RUTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuesto::getVtaPresupuestos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaHojaRutaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_presupuesto_adm.php';
            $url_gestion = 'vta_presupuesto_gestion.php';
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
	

	/* Metodo getVtaPresupuestoEstados */ 	
	public function getVtaPresupuestoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestoestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestoestado = VtaPresupuestoEstado::hidratarObjeto($fila);			
                $vtapresupuestoestados[] = $vtapresupuestoestado;
            }

            return $vtapresupuestoestados;
	}	
	

	/* Método getVtaPresupuestoEstadosBloque para MasInfo */ 	
	public function getVtaPresupuestoEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoEstados Habilitados */ 	
	public function getVtaPresupuestoEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoEstado */ 	
	public function getVtaPresupuestoEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoEstado relacionadas */ 	
	public function deleteVtaPresupuestoEstados(){
            $obs = $this->getVtaPresupuestoEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoEstadosCmb() VtaPresupuestoEstado relacionadas */ 	
	public function getVtaPresupuestoEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoEstado::getVtaPresupuestoEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestoTipoEstados (Coleccion) relacionados a traves de VtaPresupuestoEstado */ 	
	public function getVtaPresupuestoTipoEstadosXVtaPresupuestoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoEstado::GEN_TABLA, VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID, VtaPresupuestoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuestoTipoEstado::getVtaPresupuestoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestoTipoEstados relacionados a traves de VtaPresupuestoEstado */ 	
	public function getCantidadVtaPresupuestoTipoEstadosXVtaPresupuestoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuestoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoEstado::GEN_TABLA, VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID, VtaPresupuestoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuestoTipoEstado::getVtaPresupuestoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuestoTipoEstado (Objeto) relacionado a traves de VtaPresupuestoEstado */ 	
	public function getVtaPresupuestoTipoEstadoXVtaPresupuestoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestoTipoEstadosXVtaPresupuestoEstado($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de VtaPresupuestoInsInsumo */ 	
	public function getInsInsumosXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de VtaPresupuestoInsInsumo */ 	
	public function getCantidadInsInsumosXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de VtaPresupuestoInsInsumo */ 	
	public function getInsInsumoXVtaPresupuestoInsInsumo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXVtaPresupuestoInsInsumo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoEnviados */ 	
	public function getVtaPresupuestoEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoEnviado::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestoenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestoenviado = VtaPresupuestoEnviado::hidratarObjeto($fila);			
                $vtapresupuestoenviados[] = $vtapresupuestoenviado;
            }

            return $vtapresupuestoenviados;
	}	
	

	/* Método getVtaPresupuestoEnviadosBloque para MasInfo */ 	
	public function getVtaPresupuestoEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoEnviados Habilitados */ 	
	public function getVtaPresupuestoEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoEnviado */ 	
	public function getVtaPresupuestoEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoEnviado relacionadas */ 	
	public function deleteVtaPresupuestoEnviados(){
            $obs = $this->getVtaPresupuestoEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoEnviadosCmb() VtaPresupuestoEnviado relacionadas */ 	
	public function getVtaPresupuestoEnviadosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoEnviado::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoEnviado::getVtaPresupuestoEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaPresupuestoVehCoches */ 	
	public function getVtaPresupuestoVehCoches($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoVehCoche::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoVehCoche::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoVehCoche::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoVehCoche::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoVehCoche::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoVehCoche::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoVehCoche::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoVehCoche::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestovehcoches = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestovehcoche = VtaPresupuestoVehCoche::hidratarObjeto($fila);			
                $vtapresupuestovehcoches[] = $vtapresupuestovehcoche;
            }

            return $vtapresupuestovehcoches;
	}	
	

	/* Método getVtaPresupuestoVehCochesBloque para MasInfo */ 	
	public function getVtaPresupuestoVehCochesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoVehCoches($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoVehCoches Habilitados */ 	
	public function getVtaPresupuestoVehCochesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoVehCoches($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoVehCoche */ 	
	public function getVtaPresupuestoVehCoche($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoVehCoches($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoVehCoche relacionadas */ 	
	public function deleteVtaPresupuestoVehCoches(){
            $obs = $this->getVtaPresupuestoVehCoches();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoVehCochesCmb() VtaPresupuestoVehCoche relacionadas */ 	
	public function getVtaPresupuestoVehCochesCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoVehCoche::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoVehCoche::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoVehCoche::getVtaPresupuestoVehCochesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VehCoches (Coleccion) relacionados a traves de VtaPresupuestoVehCoche */ 	
	public function getVehCochesXVtaPresupuestoVehCoche($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VehCoche::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoVehCoche::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoVehCoche::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VehCoche::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoVehCoche::GEN_TABLA, VtaPresupuestoVehCoche::GEN_ATTR_VEH_COCHE_ID, VehCoche::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VehCoche::getVehCoches($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VehCoches relacionados a traves de VtaPresupuestoVehCoche */ 	
	public function getCantidadVehCochesXVtaPresupuestoVehCoche($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VehCoche::GEN_ATTR_ID);
            if($estado){
                $c->add(VehCoche::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoVehCoche::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoVehCoche::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VehCoche::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoVehCoche::GEN_TABLA, VtaPresupuestoVehCoche::GEN_ATTR_VEH_COCHE_ID, VehCoche::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VehCoche::getVehCoches($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VehCoche (Objeto) relacionado a traves de VtaPresupuestoVehCoche */ 	
	public function getVehCocheXVtaPresupuestoVehCoche($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVehCochesXVtaPresupuestoVehCoche($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRecibos */ 	
	public function getVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRecibo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtarecibo = VtaRecibo::hidratarObjeto($fila);			
                $vtarecibos[] = $vtarecibo;
            }

            return $vtarecibos;
	}	
	

	/* Método getVtaRecibosBloque para MasInfo */ 	
	public function getVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRecibos Habilitados */ 	
	public function getVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRecibo */ 	
	public function getVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRecibo relacionadas */ 	
	public function deleteVtaRecibos(){
            $obs = $this->getVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRecibosCmb() VtaRecibo relacionadas */ 	
	public function getVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRecibo */ 	
	public function getCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRecibo */ 	
	public function getCantidadCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRecibo */ 	
	public function getCliClienteXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestoInsInsumos (Coleccion) relacionados a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestoInsInsumosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, VtaPresupuestoInsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestoInsInsumos relacionados a traves de VtaOrdenVenta */ 	
	public function getCantidadVtaPresupuestoInsInsumosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuestoInsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, VtaPresupuestoInsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuestoInsInsumo (Objeto) relacionado a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestoInsInsumoXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestoInsInsumosXVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitos */ 	
	public function getVtaRemitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemito::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremito = VtaRemito::hidratarObjeto($fila);			
                $vtaremitos[] = $vtaremito;
            }

            return $vtaremitos;
	}	
	

	/* Método getVtaRemitosBloque para MasInfo */ 	
	public function getVtaRemitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitos Habilitados */ 	
	public function getVtaRemitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemito */ 	
	public function getVtaRemito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemito relacionadas */ 	
	public function deleteVtaRemitos(){
            $obs = $this->getVtaRemitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitosCmb() VtaRemito relacionadas */ 	
	public function getVtaRemitosCmb(){
            $c = new Criterio();
            $c->add(VtaRemito::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRemito */ 	
	public function getCliClientesXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRemito */ 	
	public function getCantidadCliClientesXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRemito */ 	
	public function getCliClienteXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRemito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturas */ 	
	public function getVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFactura::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafactura = VtaFactura::hidratarObjeto($fila);			
                $vtafacturas[] = $vtafactura;
            }

            return $vtafacturas;
	}	
	

	/* Método getVtaFacturasBloque para MasInfo */ 	
	public function getVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturas Habilitados */ 	
	public function getVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFactura */ 	
	public function getVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFactura relacionadas */ 	
	public function deleteVtaFacturas(){
            $obs = $this->getVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturasCmb() VtaFactura relacionadas */ 	
	public function getVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaFactura */ 	
	public function getCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaFactura */ 	
	public function getCantidadCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaFactura */ 	
	public function getCliClienteXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebes */ 	
	public function getVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebe = VtaAjusteDebe::hidratarObjeto($fila);			
                $vtaajustedebes[] = $vtaajustedebe;
            }

            return $vtaajustedebes;
	}	
	

	/* Método getVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebes Habilitados */ 	
	public function getVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebe */ 	
	public function getVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebe relacionadas */ 	
	public function deleteVtaAjusteDebes(){
            $obs = $this->getVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebesCmb() VtaAjusteDebe relacionadas */ 	
	public function getVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteDebe */ 	
	public function getCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteDebe */ 	
	public function getCantidadCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteDebe */ 	
	public function getCliClienteXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHabers */ 	
	public function getVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaber::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaber = VtaAjusteHaber::hidratarObjeto($fila);			
                $vtaajustehabers[] = $vtaajustehaber;
            }

            return $vtaajustehabers;
	}	
	

	/* Método getVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHabers Habilitados */ 	
	public function getVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaber */ 	
	public function getVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaber relacionadas */ 	
	public function deleteVtaAjusteHabers(){
            $obs = $this->getVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHabersCmb() VtaAjusteHaber relacionadas */ 	
	public function getVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteHaber */ 	
	public function getCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteHaber */ 	
	public function getCantidadCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteHaber */ 	
	public function getCliClienteXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoAjustes */ 	
	public function getVtaRemitoAjustes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjuste::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjuste::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjuste::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjuste::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajustes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajuste = VtaRemitoAjuste::hidratarObjeto($fila);			
                $vtaremitoajustes[] = $vtaremitoajuste;
            }

            return $vtaremitoajustes;
	}	
	

	/* Método getVtaRemitoAjustesBloque para MasInfo */ 	
	public function getVtaRemitoAjustesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjustes Habilitados */ 	
	public function getVtaRemitoAjustesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjuste */ 	
	public function getVtaRemitoAjuste($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjustes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjuste relacionadas */ 	
	public function deleteVtaRemitoAjustes(){
            $obs = $this->getVtaRemitoAjustes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjustesCmb() VtaRemitoAjuste relacionadas */ 	
	public function getVtaRemitoAjustesCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRemitoAjuste */ 	
	public function getCliClientesXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRemitoAjuste */ 	
	public function getCantidadCliClientesXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRemitoAjuste */ 	
	public function getCliClienteXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRemitoAjuste($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoCliClienteTiendas */ 	
	public function getVtaPresupuestoCliClienteTiendas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoCliClienteTienda::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoCliClienteTienda::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoCliClienteTienda::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoCliClienteTienda::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoCliClienteTienda::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestocliclientetiendas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestocliclientetienda = VtaPresupuestoCliClienteTienda::hidratarObjeto($fila);			
                $vtapresupuestocliclientetiendas[] = $vtapresupuestocliclientetienda;
            }

            return $vtapresupuestocliclientetiendas;
	}	
	

	/* Método getVtaPresupuestoCliClienteTiendasBloque para MasInfo */ 	
	public function getVtaPresupuestoCliClienteTiendasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoCliClienteTiendas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoCliClienteTiendas Habilitados */ 	
	public function getVtaPresupuestoCliClienteTiendasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoCliClienteTiendas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoCliClienteTienda */ 	
	public function getVtaPresupuestoCliClienteTienda($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoCliClienteTiendas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoCliClienteTienda relacionadas */ 	
	public function deleteVtaPresupuestoCliClienteTiendas(){
            $obs = $this->getVtaPresupuestoCliClienteTiendas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoCliClienteTiendasCmb() VtaPresupuestoCliClienteTienda relacionadas */ 	
	public function getVtaPresupuestoCliClienteTiendasCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoCliClienteTienda::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoCliClienteTienda::getVtaPresupuestoCliClienteTiendasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTiendas (Coleccion) relacionados a traves de VtaPresupuestoCliClienteTienda */ 	
	public function getCliClienteTiendasXVtaPresupuestoCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoCliClienteTienda::GEN_TABLA, VtaPresupuestoCliClienteTienda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTiendas relacionados a traves de VtaPresupuestoCliClienteTienda */ 	
	public function getCantidadCliClienteTiendasXVtaPresupuestoCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTienda::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoCliClienteTienda::GEN_TABLA, VtaPresupuestoCliClienteTienda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTienda (Objeto) relacionado a traves de VtaPresupuestoCliClienteTienda */ 	
	public function getCliClienteTiendaXVtaPresupuestoCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTiendasXVtaPresupuestoCliClienteTienda($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoMensajes */ 	
	public function getVtaPresupuestoMensajes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoMensaje::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoMensaje::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoMensaje::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoMensaje::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoMensaje::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoMensaje::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoMensaje::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestomensajes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestomensaje = VtaPresupuestoMensaje::hidratarObjeto($fila);			
                $vtapresupuestomensajes[] = $vtapresupuestomensaje;
            }

            return $vtapresupuestomensajes;
	}	
	

	/* Método getVtaPresupuestoMensajesBloque para MasInfo */ 	
	public function getVtaPresupuestoMensajesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoMensajes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoMensajes Habilitados */ 	
	public function getVtaPresupuestoMensajesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoMensajes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoMensaje */ 	
	public function getVtaPresupuestoMensaje($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoMensajes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoMensaje relacionadas */ 	
	public function deleteVtaPresupuestoMensajes(){
            $obs = $this->getVtaPresupuestoMensajes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoMensajesCmb() VtaPresupuestoMensaje relacionadas */ 	
	public function getVtaPresupuestoMensajesCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoMensaje::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoMensaje::getVtaPresupuestoMensajesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTiendas (Coleccion) relacionados a traves de VtaPresupuestoMensaje */ 	
	public function getCliClienteTiendasXVtaPresupuestoMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoMensaje::GEN_TABLA, VtaPresupuestoMensaje::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTiendas relacionados a traves de VtaPresupuestoMensaje */ 	
	public function getCantidadCliClienteTiendasXVtaPresupuestoMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTienda::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoMensaje::GEN_TABLA, VtaPresupuestoMensaje::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTienda (Objeto) relacionado a traves de VtaPresupuestoMensaje */ 	
	public function getCliClienteTiendaXVtaPresupuestoMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTiendasXVtaPresupuestoMensaje($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoValoracions */ 	
	public function getVtaPresupuestoValoracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoValoracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoValoracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoValoracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoValoracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoValoracion::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoValoracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoValoracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestovaloracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestovaloracion = VtaPresupuestoValoracion::hidratarObjeto($fila);			
                $vtapresupuestovaloracions[] = $vtapresupuestovaloracion;
            }

            return $vtapresupuestovaloracions;
	}	
	

	/* Método getVtaPresupuestoValoracionsBloque para MasInfo */ 	
	public function getVtaPresupuestoValoracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoValoracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoValoracions Habilitados */ 	
	public function getVtaPresupuestoValoracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoValoracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoValoracion */ 	
	public function getVtaPresupuestoValoracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoValoracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoValoracion relacionadas */ 	
	public function deleteVtaPresupuestoValoracions(){
            $obs = $this->getVtaPresupuestoValoracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoValoracionsCmb() VtaPresupuestoValoracion relacionadas */ 	
	public function getVtaPresupuestoValoracionsCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoValoracion::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoValoracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoValoracion::getVtaPresupuestoValoracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClienteTiendas (Coleccion) relacionados a traves de VtaPresupuestoValoracion */ 	
	public function getCliClienteTiendasXVtaPresupuestoValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoValoracion::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoValoracion::GEN_TABLA, VtaPresupuestoValoracion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClienteTiendas relacionados a traves de VtaPresupuestoValoracion */ 	
	public function getCantidadCliClienteTiendasXVtaPresupuestoValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliClienteTienda::GEN_ATTR_ID);
            if($estado){
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoValoracion::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoValoracion::GEN_TABLA, VtaPresupuestoValoracion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, CliClienteTienda::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliClienteTienda (Objeto) relacionado a traves de VtaPresupuestoValoracion */ 	
	public function getCliClienteTiendaXVtaPresupuestoValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClienteTiendasXVtaPresupuestoValoracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestoInsInsumos (Coleccion) relacionados a traves de PrdOrdenTrabajo */ 	
	public function getVtaPresupuestoInsInsumosXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajo::GEN_TABLA, PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, VtaPresupuestoInsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestoInsInsumos relacionados a traves de PrdOrdenTrabajo */ 	
	public function getCantidadVtaPresupuestoInsInsumosXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuestoInsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajo::GEN_TABLA, PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, VtaPresupuestoInsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuestoInsInsumo (Objeto) relacionado a traves de PrdOrdenTrabajo */ 	
	public function getVtaPresupuestoInsInsumoXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestoInsInsumosXPrdOrdenTrabajo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VehCoches asignados a VtaPresupuesto */ 	
	public function getVtaPresupuestoVehCochesId(){
            $ids = array();
            foreach($this->getVtaPresupuestoVehCoches() as $o){
            
                $ids[] = $o->getVehCocheId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VehCoches asignados al VtaPresupuesto */ 	
	public function setVtaPresupuestoVehCoches($ids){
            $this->deleteVtaPresupuestoVehCoches();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPresupuestoVehCoche();
                    $o->setVehCocheId($id);
                    $o->setVtaPresupuestoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VehCoche en el alta de VtaPresupuesto */ 	
	public function getAltaMostrarBloqueRelacionVtaPresupuestoVehCoche(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliClienteTiendas asignados a VtaPresupuesto */ 	
	public function getVtaPresupuestoCliClienteTiendasId(){
            $ids = array();
            foreach($this->getVtaPresupuestoCliClienteTiendas() as $o){
            
                $ids[] = $o->getCliClienteTiendaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliClienteTiendas asignados al VtaPresupuesto */ 	
	public function setVtaPresupuestoCliClienteTiendas($ids){
            $this->deleteVtaPresupuestoCliClienteTiendas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPresupuestoCliClienteTienda();
                    $o->setCliClienteTiendaId($id);
                    $o->setVtaPresupuestoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliClienteTienda en el alta de VtaPresupuesto */ 	
	public function getAltaMostrarBloqueRelacionVtaPresupuestoCliClienteTienda(){
            return true;
	}
	

	/* Metodo que retorna el CliCliente (Clave Foranea) */ 	
    public function getCliCliente(){
        $o = new CliCliente();
        $o->setId($this->getCliClienteId());
        return $o;			
    }

	/* Metodo que retorna el CliCliente (Clave Foranea) en Array */ 	
    public function getCliClienteEnArray(&$arr_os){
        if($this->getCliClienteId() != 'null'){
            if(isset($arr_os[$this->getCliClienteId()])){
                $o = $arr_os[$this->getCliClienteId()];
            }else{
                $o = CliCliente::getOxId($this->getCliClienteId());
                if($o){
                    $arr_os[$this->getCliClienteId()] = $o;
                }
            }
        }else{
            $o = new CliCliente();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaVendedor (Clave Foranea) */ 	
    public function getVtaVendedor(){
        $o = new VtaVendedor();
        $o->setId($this->getVtaVendedorId());
        return $o;			
    }

	/* Metodo que retorna el VtaVendedor (Clave Foranea) en Array */ 	
    public function getVtaVendedorEnArray(&$arr_os){
        if($this->getVtaVendedorId() != 'null'){
            if(isset($arr_os[$this->getVtaVendedorId()])){
                $o = $arr_os[$this->getVtaVendedorId()];
            }else{
                $o = VtaVendedor::getOxId($this->getVtaVendedorId());
                if($o){
                    $arr_os[$this->getVtaVendedorId()] = $o;
                }
            }
        }else{
            $o = new VtaVendedor();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaComprador (Clave Foranea) */ 	
    public function getVtaComprador(){
        $o = new VtaComprador();
        $o->setId($this->getVtaCompradorId());
        return $o;			
    }

	/* Metodo que retorna el VtaComprador (Clave Foranea) en Array */ 	
    public function getVtaCompradorEnArray(&$arr_os){
        if($this->getVtaCompradorId() != 'null'){
            if(isset($arr_os[$this->getVtaCompradorId()])){
                $o = $arr_os[$this->getVtaCompradorId()];
            }else{
                $o = VtaComprador::getOxId($this->getVtaCompradorId());
                if($o){
                    $arr_os[$this->getVtaCompradorId()] = $o;
                }
            }
        }else{
            $o = new VtaComprador();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPreventista (Clave Foranea) */ 	
    public function getVtaPreventista(){
        $o = new VtaPreventista();
        $o->setId($this->getVtaPreventistaId());
        return $o;			
    }

	/* Metodo que retorna el VtaPreventista (Clave Foranea) en Array */ 	
    public function getVtaPreventistaEnArray(&$arr_os){
        if($this->getVtaPreventistaId() != 'null'){
            if(isset($arr_os[$this->getVtaPreventistaId()])){
                $o = $arr_os[$this->getVtaPreventistaId()];
            }else{
                $o = VtaPreventista::getOxId($this->getVtaPreventistaId());
                if($o){
                    $arr_os[$this->getVtaPreventistaId()] = $o;
                }
            }
        }else{
            $o = new VtaPreventista();
        }
        return $o;		
    }

	/* Metodo que retorna el GralActividad (Clave Foranea) */ 	
    public function getGralActividad(){
        $o = new GralActividad();
        $o->setId($this->getGralActividadId());
        return $o;			
    }

	/* Metodo que retorna el GralActividad (Clave Foranea) en Array */ 	
    public function getGralActividadEnArray(&$arr_os){
        if($this->getGralActividadId() != 'null'){
            if(isset($arr_os[$this->getGralActividadId()])){
                $o = $arr_os[$this->getGralActividadId()];
            }else{
                $o = GralActividad::getOxId($this->getGralActividadId());
                if($o){
                    $arr_os[$this->getGralActividadId()] = $o;
                }
            }
        }else{
            $o = new GralActividad();
        }
        return $o;		
    }

	/* Metodo que retorna el GralEscenario (Clave Foranea) */ 	
    public function getGralEscenario(){
        $o = new GralEscenario();
        $o->setId($this->getGralEscenarioId());
        return $o;			
    }

	/* Metodo que retorna el GralEscenario (Clave Foranea) en Array */ 	
    public function getGralEscenarioEnArray(&$arr_os){
        if($this->getGralEscenarioId() != 'null'){
            if(isset($arr_os[$this->getGralEscenarioId()])){
                $o = $arr_os[$this->getGralEscenarioId()];
            }else{
                $o = GralEscenario::getOxId($this->getGralEscenarioId());
                if($o){
                    $arr_os[$this->getGralEscenarioId()] = $o;
                }
            }
        }else{
            $o = new GralEscenario();
        }
        return $o;		
    }

	/* Metodo que retorna el GralFpFormaPago (Clave Foranea) */ 	
    public function getGralFpFormaPago(){
        $o = new GralFpFormaPago();
        $o->setId($this->getGralFpFormaPagoId());
        return $o;			
    }

	/* Metodo que retorna el GralFpFormaPago (Clave Foranea) en Array */ 	
    public function getGralFpFormaPagoEnArray(&$arr_os){
        if($this->getGralFpFormaPagoId() != 'null'){
            if(isset($arr_os[$this->getGralFpFormaPagoId()])){
                $o = $arr_os[$this->getGralFpFormaPagoId()];
            }else{
                $o = GralFpFormaPago::getOxId($this->getGralFpFormaPagoId());
                if($o){
                    $arr_os[$this->getGralFpFormaPagoId()] = $o;
                }
            }
        }else{
            $o = new GralFpFormaPago();
        }
        return $o;		
    }

	/* Metodo que retorna el GralFpCuota (Clave Foranea) */ 	
    public function getGralFpCuota(){
        $o = new GralFpCuota();
        $o->setId($this->getGralFpCuotaId());
        return $o;			
    }

	/* Metodo que retorna el GralFpCuota (Clave Foranea) en Array */ 	
    public function getGralFpCuotaEnArray(&$arr_os){
        if($this->getGralFpCuotaId() != 'null'){
            if(isset($arr_os[$this->getGralFpCuotaId()])){
                $o = $arr_os[$this->getGralFpCuotaId()];
            }else{
                $o = GralFpCuota::getOxId($this->getGralFpCuotaId());
                if($o){
                    $arr_os[$this->getGralFpCuotaId()] = $o;
                }
            }
        }else{
            $o = new GralFpCuota();
        }
        return $o;		
    }

	/* Metodo que retorna el InsTipoListaPrecio (Clave Foranea) */ 	
    public function getInsTipoListaPrecio(){
        $o = new InsTipoListaPrecio();
        $o->setId($this->getInsTipoListaPrecioId());
        return $o;			
    }

	/* Metodo que retorna el InsTipoListaPrecio (Clave Foranea) en Array */ 	
    public function getInsTipoListaPrecioEnArray(&$arr_os){
        if($this->getInsTipoListaPrecioId() != 'null'){
            if(isset($arr_os[$this->getInsTipoListaPrecioId()])){
                $o = $arr_os[$this->getInsTipoListaPrecioId()];
            }else{
                $o = InsTipoListaPrecio::getOxId($this->getInsTipoListaPrecioId());
                if($o){
                    $arr_os[$this->getInsTipoListaPrecioId()] = $o;
                }
            }
        }else{
            $o = new InsTipoListaPrecio();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPresupuestoTipoDespacho (Clave Foranea) */ 	
    public function getVtaPresupuestoTipoDespacho(){
        $o = new VtaPresupuestoTipoDespacho();
        $o->setId($this->getVtaPresupuestoTipoDespachoId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuestoTipoDespacho (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoTipoDespachoEnArray(&$arr_os){
        if($this->getVtaPresupuestoTipoDespachoId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoTipoDespachoId()])){
                $o = $arr_os[$this->getVtaPresupuestoTipoDespachoId()];
            }else{
                $o = VtaPresupuestoTipoDespacho::getOxId($this->getVtaPresupuestoTipoDespachoId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoTipoDespachoId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuestoTipoDespacho();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPresupuestoTipoEstado (Clave Foranea) */ 	
    public function getVtaPresupuestoTipoEstado(){
        $o = new VtaPresupuestoTipoEstado();
        $o->setId($this->getVtaPresupuestoTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuestoTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoTipoEstadoEnArray(&$arr_os){
        if($this->getVtaPresupuestoTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoTipoEstadoId()])){
                $o = $arr_os[$this->getVtaPresupuestoTipoEstadoId()];
            }else{
                $o = VtaPresupuestoTipoEstado::getOxId($this->getVtaPresupuestoTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuestoTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el GralCondicionIva (Clave Foranea) */ 	
    public function getGralCondicionIva(){
        $o = new GralCondicionIva();
        $o->setId($this->getGralCondicionIvaId());
        return $o;			
    }

	/* Metodo que retorna el GralCondicionIva (Clave Foranea) en Array */ 	
    public function getGralCondicionIvaEnArray(&$arr_os){
        if($this->getGralCondicionIvaId() != 'null'){
            if(isset($arr_os[$this->getGralCondicionIvaId()])){
                $o = $arr_os[$this->getGralCondicionIvaId()];
            }else{
                $o = GralCondicionIva::getOxId($this->getGralCondicionIvaId());
                if($o){
                    $arr_os[$this->getGralCondicionIvaId()] = $o;
                }
            }
        }else{
            $o = new GralCondicionIva();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPresupuestoTipoEmision (Clave Foranea) */ 	
    public function getVtaPresupuestoTipoEmision(){
        $o = new VtaPresupuestoTipoEmision();
        $o->setId($this->getVtaPresupuestoTipoEmisionId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuestoTipoEmision (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoTipoEmisionEnArray(&$arr_os){
        if($this->getVtaPresupuestoTipoEmisionId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoTipoEmisionId()])){
                $o = $arr_os[$this->getVtaPresupuestoTipoEmisionId()];
            }else{
                $o = VtaPresupuestoTipoEmision::getOxId($this->getVtaPresupuestoTipoEmisionId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoTipoEmisionId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuestoTipoEmision();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPresupuestoTipoVenta (Clave Foranea) */ 	
    public function getVtaPresupuestoTipoVenta(){
        $o = new VtaPresupuestoTipoVenta();
        $o->setId($this->getVtaPresupuestoTipoVentaId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuestoTipoVenta (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoTipoVentaEnArray(&$arr_os){
        if($this->getVtaPresupuestoTipoVentaId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoTipoVentaId()])){
                $o = $arr_os[$this->getVtaPresupuestoTipoVentaId()];
            }else{
                $o = VtaPresupuestoTipoVenta::getOxId($this->getVtaPresupuestoTipoVentaId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoTipoVentaId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuestoTipoVenta();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPresupuestoTipoOrigen (Clave Foranea) */ 	
    public function getVtaPresupuestoTipoOrigen(){
        $o = new VtaPresupuestoTipoOrigen();
        $o->setId($this->getVtaPresupuestoTipoOrigenId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuestoTipoOrigen (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoTipoOrigenEnArray(&$arr_os){
        if($this->getVtaPresupuestoTipoOrigenId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoTipoOrigenId()])){
                $o = $arr_os[$this->getVtaPresupuestoTipoOrigenId()];
            }else{
                $o = VtaPresupuestoTipoOrigen::getOxId($this->getVtaPresupuestoTipoOrigenId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoTipoOrigenId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuestoTipoOrigen();
        }
        return $o;		
    }

	/* Metodo que retorna el GralEmpresaTransportadora (Clave Foranea) */ 	
    public function getGralEmpresaTransportadora(){
        $o = new GralEmpresaTransportadora();
        $o->setId($this->getGralEmpresaTransportadoraId());
        return $o;			
    }

	/* Metodo que retorna el GralEmpresaTransportadora (Clave Foranea) en Array */ 	
    public function getGralEmpresaTransportadoraEnArray(&$arr_os){
        if($this->getGralEmpresaTransportadoraId() != 'null'){
            if(isset($arr_os[$this->getGralEmpresaTransportadoraId()])){
                $o = $arr_os[$this->getGralEmpresaTransportadoraId()];
            }else{
                $o = GralEmpresaTransportadora::getOxId($this->getGralEmpresaTransportadoraId());
                if($o){
                    $arr_os[$this->getGralEmpresaTransportadoraId()] = $o;
                }
            }
        }else{
            $o = new GralEmpresaTransportadora();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaDescuentoFinanciero (Clave Foranea) */ 	
    public function getVtaDescuentoFinanciero(){
        $o = new VtaDescuentoFinanciero();
        $o->setId($this->getVtaDescuentoFinancieroId());
        return $o;			
    }

	/* Metodo que retorna el VtaDescuentoFinanciero (Clave Foranea) en Array */ 	
    public function getVtaDescuentoFinancieroEnArray(&$arr_os){
        if($this->getVtaDescuentoFinancieroId() != 'null'){
            if(isset($arr_os[$this->getVtaDescuentoFinancieroId()])){
                $o = $arr_os[$this->getVtaDescuentoFinancieroId()];
            }else{
                $o = VtaDescuentoFinanciero::getOxId($this->getVtaDescuentoFinancieroId());
                if($o){
                    $arr_os[$this->getVtaDescuentoFinancieroId()] = $o;
                }
            }
        }else{
            $o = new VtaDescuentoFinanciero();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoDocumento (Clave Foranea) */ 	
    public function getGralTipoDocumento(){
        $o = new GralTipoDocumento();
        $o->setId($this->getGralTipoDocumentoId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoDocumento (Clave Foranea) en Array */ 	
    public function getGralTipoDocumentoEnArray(&$arr_os){
        if($this->getGralTipoDocumentoId() != 'null'){
            if(isset($arr_os[$this->getGralTipoDocumentoId()])){
                $o = $arr_os[$this->getGralTipoDocumentoId()];
            }else{
                $o = GralTipoDocumento::getOxId($this->getGralTipoDocumentoId());
                if($o){
                    $arr_os[$this->getGralTipoDocumentoId()] = $o;
                }
            }
        }else{
            $o = new GralTipoDocumento();
        }
        return $o;		
    }

	/* Metodo que retorna el GralSucursal (Clave Foranea) */ 	
    public function getGralSucursal(){
        $o = new GralSucursal();
        $o->setId($this->getGralSucursalId());
        return $o;			
    }

	/* Metodo que retorna el GralSucursal (Clave Foranea) en Array */ 	
    public function getGralSucursalEnArray(&$arr_os){
        if($this->getGralSucursalId() != 'null'){
            if(isset($arr_os[$this->getGralSucursalId()])){
                $o = $arr_os[$this->getGralSucursalId()];
            }else{
                $o = GralSucursal::getOxId($this->getGralSucursalId());
                if($o){
                    $arr_os[$this->getGralSucursalId()] = $o;
                }
            }
        }else{
            $o = new GralSucursal();
        }
        return $o;		
    }

	/* Metodo que retorna el CliCentroRecepcion (Clave Foranea) */ 	
    public function getCliCentroRecepcion(){
        $o = new CliCentroRecepcion();
        $o->setId($this->getCliCentroRecepcionId());
        return $o;			
    }

	/* Metodo que retorna el CliCentroRecepcion (Clave Foranea) en Array */ 	
    public function getCliCentroRecepcionEnArray(&$arr_os){
        if($this->getCliCentroRecepcionId() != 'null'){
            if(isset($arr_os[$this->getCliCentroRecepcionId()])){
                $o = $arr_os[$this->getCliCentroRecepcionId()];
            }else{
                $o = CliCentroRecepcion::getOxId($this->getCliCentroRecepcionId());
                if($o){
                    $arr_os[$this->getCliCentroRecepcionId()] = $o;
                }
            }
        }else{
            $o = new CliCentroRecepcion();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaHojaRuta (Clave Foranea) */ 	
    public function getVtaHojaRuta(){
        $o = new VtaHojaRuta();
        $o->setId($this->getVtaHojaRutaId());
        return $o;			
    }

	/* Metodo que retorna el VtaHojaRuta (Clave Foranea) en Array */ 	
    public function getVtaHojaRutaEnArray(&$arr_os){
        if($this->getVtaHojaRutaId() != 'null'){
            if(isset($arr_os[$this->getVtaHojaRutaId()])){
                $o = $arr_os[$this->getVtaHojaRutaId()];
            }else{
                $o = VtaHojaRuta::getOxId($this->getVtaHojaRutaId());
                if($o){
                    $arr_os[$this->getVtaHojaRutaId()] = $o;
                }
            }
        }else{
            $o = new VtaHojaRuta();
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
            		
        if($contexto_solicitante != CliCliente::GEN_CLASE){
            if($this->getCliCliente()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCliente::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCliente()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaVendedor::GEN_CLASE){
            if($this->getVtaVendedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaVendedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaVendedor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaComprador::GEN_CLASE){
            if($this->getVtaComprador()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaComprador::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaComprador()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPreventista::GEN_CLASE){
            if($this->getVtaPreventista()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPreventista::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPreventista()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralActividad::GEN_CLASE){
            if($this->getGralActividad()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralActividad::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralActividad()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralEscenario::GEN_CLASE){
            if($this->getGralEscenario()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEscenario::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEscenario()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralFpFormaPago::GEN_CLASE){
            if($this->getGralFpFormaPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralFpFormaPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralFpFormaPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralFpCuota::GEN_CLASE){
            if($this->getGralFpCuota()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralFpCuota::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralFpCuota()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsTipoListaPrecio::GEN_CLASE){
            if($this->getInsTipoListaPrecio()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsTipoListaPrecio::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsTipoListaPrecio()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPresupuestoTipoDespacho::GEN_CLASE){
            if($this->getVtaPresupuestoTipoDespacho()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuestoTipoDespacho::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuestoTipoDespacho()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPresupuestoTipoEstado::GEN_CLASE){
            if($this->getVtaPresupuestoTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuestoTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuestoTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralCondicionIva::GEN_CLASE){
            if($this->getGralCondicionIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralCondicionIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralCondicionIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPresupuestoTipoEmision::GEN_CLASE){
            if($this->getVtaPresupuestoTipoEmision()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuestoTipoEmision::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuestoTipoEmision()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPresupuestoTipoVenta::GEN_CLASE){
            if($this->getVtaPresupuestoTipoVenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuestoTipoVenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuestoTipoVenta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPresupuestoTipoOrigen::GEN_CLASE){
            if($this->getVtaPresupuestoTipoOrigen()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuestoTipoOrigen::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuestoTipoOrigen()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralEmpresaTransportadora::GEN_CLASE){
            if($this->getGralEmpresaTransportadora()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresaTransportadora::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresaTransportadora()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaDescuentoFinanciero::GEN_CLASE){
            if($this->getVtaDescuentoFinanciero()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaDescuentoFinanciero::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaDescuentoFinanciero()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoDocumento::GEN_CLASE){
            if($this->getGralTipoDocumento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoDocumento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoDocumento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralSucursal::GEN_CLASE){
            if($this->getGralSucursal()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralSucursal::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralSucursal()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralSucursal::GEN_CLASE){
            if($this->getGralSucursal()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralSucursal::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralSucursal()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliCentroRecepcion::GEN_CLASE){
            if($this->getCliCentroRecepcion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCentroRecepcion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCentroRecepcion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaHojaRuta::GEN_CLASE){
            if($this->getVtaHojaRuta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaHojaRuta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaHojaRuta()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_presupuesto'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_presupuesto';");
            
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

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_id' */ 	
	static function getOsxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_vendedor_id' */ 	
	static function getOxVtaVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_vendedor_id' */ 	
	static function getOsxVtaVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_comprador_id' */ 	
	static function getOxVtaCompradorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMPRADOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_comprador_id' */ 	
	static function getOsxVtaCompradorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMPRADOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_preventista_id' */ 	
	static function getOxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_preventista_id' */ 	
	static function getOsxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_actividad_id' */ 	
	static function getOxGralActividadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ACTIVIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_actividad_id' */ 	
	static function getOsxGralActividadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ACTIVIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_escenario_id' */ 	
	static function getOxGralEscenarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ESCENARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_escenario_id' */ 	
	static function getOsxGralEscenarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ESCENARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOsxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_cuota_id' */ 	
	static function getOxGralFpCuotaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_CUOTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_fp_cuota_id' */ 	
	static function getOsxGralFpCuotaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_CUOTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_tipo_lista_precio_id' */ 	
	static function getOxInsTipoListaPrecioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_tipo_lista_precio_id' */ 	
	static function getOsxInsTipoListaPrecioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_tipo_despacho_id' */ 	
	static function getOxVtaPresupuestoTipoDespachoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_DESPACHO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_tipo_despacho_id' */ 	
	static function getOsxVtaPresupuestoTipoDespachoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_DESPACHO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_tipo_estado_id' */ 	
	static function getOxVtaPresupuestoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_tipo_estado_id' */ 	
	static function getOsxVtaPresupuestoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOsxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_tipo_emision_id' */ 	
	static function getOxVtaPresupuestoTipoEmisionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_tipo_emision_id' */ 	
	static function getOsxVtaPresupuestoTipoEmisionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_tipo_venta_id' */ 	
	static function getOxVtaPresupuestoTipoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_tipo_venta_id' */ 	
	static function getOsxVtaPresupuestoTipoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_tipo_origen_id' */ 	
	static function getOxVtaPresupuestoTipoOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_tipo_origen_id' */ 	
	static function getOsxVtaPresupuestoTipoOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_empresa_transportadora_id' */ 	
	static function getOsxGralEmpresaTransportadoraId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_TRANSPORTADORA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_descuento_financiero_id' */ 	
	static function getOxVtaDescuentoFinancieroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_DESCUENTO_FINANCIERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_descuento_financiero_id' */ 	
	static function getOsxVtaDescuentoFinancieroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_DESCUENTO_FINANCIERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOsxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'persona_descripcion' */ 	
	static function getOsxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_documento' */ 	
	static function getOxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'persona_documento' */ 	
	static function getOsxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_email' */ 	
	static function getOxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'persona_email' */ 	
	static function getOsxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha' */ 	
	static function getOxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha' */ 	
	static function getOsxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_vencimiento' */ 	
	static function getOxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_vencimiento' */ 	
	static function getOsxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_entrega' */ 	
	static function getOxFechaEntrega($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ENTREGA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_entrega' */ 	
	static function getOsxFechaEntrega($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ENTREGA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_recordatorio' */ 	
	static function getOxFechaRecordatorio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_RECORDATORIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_recordatorio' */ 	
	static function getOsxFechaRecordatorio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_RECORDATORIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_subtotal' */ 	
	static function getOxImporteSubtotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SUBTOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_subtotal' */ 	
	static function getOsxImporteSubtotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_SUBTOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_descuento' */ 	
	static function getOxImporteDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_descuento' */ 	
	static function getOsxImporteDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_politica_descuento' */ 	
	static function getOxImportePoliticaDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_POLITICA_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_politica_descuento' */ 	
	static function getOsxImportePoliticaDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_POLITICA_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_recargo' */ 	
	static function getOxImporteRecargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_RECARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_recargo' */ 	
	static function getOsxImporteRecargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_RECARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_total' */ 	
	static function getOxImporteTotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_total' */ 	
	static function getOsxImporteTotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_items' */ 	
	static function getOxCantidadItems($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_ITEMS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_items' */ 	
	static function getOsxCantidadItems($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_ITEMS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'recargo' */ 	
	static function getOxRecargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RECARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'recargo' */ 	
	static function getOsxRecargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RECARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'conflicto' */ 	
	static function getOxConflicto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONFLICTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'conflicto' */ 	
	static function getOsxConflicto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONFLICTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'preaprobado' */ 	
	static function getOxPreaprobado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PREAPROBADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'preaprobado' */ 	
	static function getOsxPreaprobado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PREAPROBADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nota_interna' */ 	
	static function getOsxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_cliente' */ 	
	static function getOxNotaCliente($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_CLIENTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nota_cliente' */ 	
	static function getOsxNotaCliente($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_CLIENTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_recordatorio' */ 	
	static function getOxNotaRecordatorio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_RECORDATORIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nota_recordatorio' */ 	
	static function getOsxNotaRecordatorio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_RECORDATORIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_sucursal_id' */ 	
	static function getOsxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_retiro' */ 	
	static function getOxGralSucursalRetiro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_RETIRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_sucursal_retiro' */ 	
	static function getOsxGralSucursalRetiro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_RETIRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'incluye_logistica' */ 	
	static function getOxIncluyeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INCLUYE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'incluye_logistica' */ 	
	static function getOsxIncluyeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INCLUYE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_logistica' */ 	
	static function getOxPorcentajeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_logistica' */ 	
	static function getOsxPorcentajeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_logistica' */ 	
	static function getOxImporteLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_logistica' */ 	
	static function getOsxImporteLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'destacado' */ 	
	static function getOxDestacado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESTACADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'destacado' */ 	
	static function getOsxDestacado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESTACADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_centro_recepcion_id' */ 	
	static function getOxCliCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_centro_recepcion_id' */ 	
	static function getOsxCliCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_hoja_ruta_id' */ 	
	static function getOxVtaHojaRutaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_HOJA_RUTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_hoja_ruta_id' */ 	
	static function getOsxVtaHojaRutaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_HOJA_RUTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje' */ 	
	static function getOxPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje' */ 	
	static function getOsxPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos(null, $criterio);
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

            $obs = self::getVtaPresupuestos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_presupuesto_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha' */ 	
	public function getFechaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFecha(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_vencimiento' */ 	
	public function getFechaVencimientoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaVencimiento(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaVencimientoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaVencimientoDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_entrega' */ 	
	public function getFechaEntregaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaEntrega(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaEntregaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaEntregaDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_recordatorio' */ 	
	public function getFechaRecordatorioDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaRecordatorio(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaRecordatorioDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaRecordatorioDiferenciaDias();
        
            if ($fecha_hace > 0) {
                $fecha_hace = 'hace ' . abs($fecha_hace) . ' dias';
            } elseif ($fecha_hace < 0) {
                $fecha_hace = 'faltan ' . abs($fecha_hace) . ' dias';
            } else {
                $fecha_hace = 'hoy';
            }
            return $fecha_hace;
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
                $c->addTabla(VtaPresupuesto::GEN_TABLA);
                $c->addOrden(VtaPresupuesto::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_presupuestos = VtaPresupuesto::getVtaPresupuestos(null, $c);

                $arr = array();
                foreach($vta_presupuestos as $vta_presupuesto){
                    $descripcion = $vta_presupuesto->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>