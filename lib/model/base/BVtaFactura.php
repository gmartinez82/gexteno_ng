<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaFactura
{ 
	
	const SES_PAGINACION = 'adm_vtafactura_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtafactura_paginas_registros';
	const SES_CRITERIOS = 'adm_vtafactura_criterios';
	
	const GEN_CLASE = 'VtaFactura';
	const GEN_TABLA = 'vta_factura';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaFactura */ 
	const GEN_ATTR_ID = 'vta_factura.id';
	const GEN_ATTR_DESCRIPCION = 'vta_factura.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'vta_factura.cli_cliente_id';
	const GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID = 'vta_factura.vta_factura_tipo_estado_id';
	const GEN_ATTR_VTA_TIPO_FACTURA_ID = 'vta_factura.vta_tipo_factura_id';
	const GEN_ATTR_VTA_TIPO_ORIGEN_FACTURA_ID = 'vta_factura.vta_tipo_origen_factura_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'vta_factura.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'vta_factura.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'vta_factura.gral_empresa_id';
	const GEN_ATTR_VTA_PUNTO_VENTA_ID = 'vta_factura.vta_punto_venta_id';
	const GEN_ATTR_GRAL_FP_FORMA_PAGO_ID = 'vta_factura.gral_fp_forma_pago_id';
	const GEN_ATTR_GRAL_FP_CUOTA_ID = 'vta_factura.gral_fp_cuota_id';
	const GEN_ATTR_VTA_PREVENTISTA_ID = 'vta_factura.vta_preventista_id';
	const GEN_ATTR_VTA_COMPRADOR_ID = 'vta_factura.vta_comprador_id';
	const GEN_ATTR_VTA_VENDEDOR_ID = 'vta_factura.vta_vendedor_id';
	const GEN_ATTR_GRAL_ACTIVIDAD_ID = 'vta_factura.gral_actividad_id';
	const GEN_ATTR_GRAL_ESCENARIO_ID = 'vta_factura.gral_escenario_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'vta_factura.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'vta_factura.numero_punto_venta';
	const GEN_ATTR_NUMERO_FACTURA = 'vta_factura.numero_factura';
	const GEN_ATTR_NUMERO_FACTURA_COMPLETO = 'vta_factura.numero_factura_completo';
	const GEN_ATTR_CAE = 'vta_factura.cae';
	const GEN_ATTR_FECHA_EMISION = 'vta_factura.fecha_emision';
	const GEN_ATTR_FECHA_VENCIMIENTO = 'vta_factura.fecha_vencimiento';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'vta_factura.gral_tipo_documento_id';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'vta_factura.persona_descripcion';
	const GEN_ATTR_PERSONA_DOCUMENTO = 'vta_factura.persona_documento';
	const GEN_ATTR_PERSONA_EMAIL = 'vta_factura.persona_email';
	const GEN_ATTR_RAZON_SOCIAL = 'vta_factura.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'vta_factura.domicilio_legal';
	const GEN_ATTR_CUIT = 'vta_factura.cuit';
	const GEN_ATTR_CODIGO = 'vta_factura.codigo';
	const GEN_ATTR_VTA_PRESUPUESTO_ID = 'vta_factura.vta_presupuesto_id';
	const GEN_ATTR_NOTA_PUBLICA = 'vta_factura.nota_publica';
	const GEN_ATTR_ANIO = 'vta_factura.anio';
	const GEN_ATTR_GRAL_MES_ID = 'vta_factura.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'vta_factura.cntb_diario_asiento_id';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'vta_factura.gral_sucursal_id';
	const GEN_ATTR_CLI_CENTRO_RECEPCION_ID = 'vta_factura.cli_centro_recepcion_id';
	const GEN_ATTR_PORCENTAJE = 'vta_factura.porcentaje';
	const GEN_ATTR_OBSERVACION = 'vta_factura.observacion';
	const GEN_ATTR_NOTA_INTERNA = 'vta_factura.nota_interna';
	const GEN_ATTR_NUMERO_TIMBRADO = 'vta_factura.numero_timbrado';
	const GEN_ATTR_ORDEN = 'vta_factura.orden';
	const GEN_ATTR_ESTADO = 'vta_factura.estado';
	const GEN_ATTR_CREADO = 'vta_factura.creado';
	const GEN_ATTR_CREADO_POR = 'vta_factura.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_factura.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_factura.modificado_por';

	/* Constantes de Atributos Min de BVtaFactura */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_VTA_FACTURA_TIPO_ESTADO_ID = 'vta_factura_tipo_estado_id';
	const GEN_ATTR_MIN_VTA_TIPO_FACTURA_ID = 'vta_tipo_factura_id';
	const GEN_ATTR_MIN_VTA_TIPO_ORIGEN_FACTURA_ID = 'vta_tipo_origen_factura_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID = 'vta_punto_venta_id';
	const GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID = 'gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_GRAL_FP_CUOTA_ID = 'gral_fp_cuota_id';
	const GEN_ATTR_MIN_VTA_PREVENTISTA_ID = 'vta_preventista_id';
	const GEN_ATTR_MIN_VTA_COMPRADOR_ID = 'vta_comprador_id';
	const GEN_ATTR_MIN_VTA_VENDEDOR_ID = 'vta_vendedor_id';
	const GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID = 'gral_actividad_id';
	const GEN_ATTR_MIN_GRAL_ESCENARIO_ID = 'gral_escenario_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_FACTURA = 'numero_factura';
	const GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO = 'numero_factura_completo';
	const GEN_ATTR_MIN_CAE = 'cae';
	const GEN_ATTR_MIN_FECHA_EMISION = 'fecha_emision';
	const GEN_ATTR_MIN_FECHA_VENCIMIENTO = 'fecha_vencimiento';
	const GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID = 'gral_tipo_documento_id';
	const GEN_ATTR_MIN_PERSONA_DESCRIPCION = 'persona_descripcion';
	const GEN_ATTR_MIN_PERSONA_DOCUMENTO = 'persona_documento';
	const GEN_ATTR_MIN_PERSONA_EMAIL = 'persona_email';
	const GEN_ATTR_MIN_RAZON_SOCIAL = 'razon_social';
	const GEN_ATTR_MIN_DOMICILIO_LEGAL = 'domicilio_legal';
	const GEN_ATTR_MIN_CUIT = 'cuit';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_ID = 'vta_presupuesto_id';
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
	const GEN_ATTR_MIN_ANIO = 'anio';
	const GEN_ATTR_MIN_GRAL_MES_ID = 'gral_mes_id';
	const GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID = 'cntb_diario_asiento_id';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID = 'cli_centro_recepcion_id';
	const GEN_ATTR_MIN_PORCENTAJE = 'porcentaje';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_NOTA_INTERNA = 'nota_interna';
	const GEN_ATTR_MIN_NUMERO_TIMBRADO = 'numero_timbrado';
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
	

	/* Atributos de BVtaFactura */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $vta_factura_tipo_estado_id;
	private $vta_tipo_factura_id;
	private $vta_tipo_origen_factura_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $vta_punto_venta_id;
	private $gral_fp_forma_pago_id;
	private $gral_fp_cuota_id;
	private $vta_preventista_id;
	private $vta_comprador_id;
	private $vta_vendedor_id;
	private $gral_actividad_id;
	private $gral_escenario_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_factura;
	private $numero_factura_completo;
	private $cae;
	private $fecha_emision;
	private $fecha_vencimiento;
	private $gral_tipo_documento_id;
	private $persona_descripcion;
	private $persona_documento;
	private $persona_email;
	private $razon_social;
	private $domicilio_legal;
	private $cuit;
	private $codigo;
	private $vta_presupuesto_id;
	private $nota_publica;
	private $anio;
	private $gral_mes_id;
	private $cntb_diario_asiento_id;
	private $gral_sucursal_id;
	private $cli_centro_recepcion_id;
	private $porcentaje;
	private $observacion;
	private $nota_interna;
	private $numero_timbrado;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaFactura */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getVtaFacturaTipoEstadoId(){ if(isset($this->vta_factura_tipo_estado_id)){ return $this->vta_factura_tipo_estado_id; }else{ return 'null'; } }
	public function getVtaTipoFacturaId(){ if(isset($this->vta_tipo_factura_id)){ return $this->vta_tipo_factura_id; }else{ return 'null'; } }
	public function getVtaTipoOrigenFacturaId(){ if(isset($this->vta_tipo_origen_factura_id)){ return $this->vta_tipo_origen_factura_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getVtaPuntoVentaId(){ if(isset($this->vta_punto_venta_id)){ return $this->vta_punto_venta_id; }else{ return 'null'; } }
	public function getGralFpFormaPagoId(){ if(isset($this->gral_fp_forma_pago_id)){ return $this->gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getGralFpCuotaId(){ if(isset($this->gral_fp_cuota_id)){ return $this->gral_fp_cuota_id; }else{ return 'null'; } }
	public function getVtaPreventistaId(){ if(isset($this->vta_preventista_id)){ return $this->vta_preventista_id; }else{ return 'null'; } }
	public function getVtaCompradorId(){ if(isset($this->vta_comprador_id)){ return $this->vta_comprador_id; }else{ return 'null'; } }
	public function getVtaVendedorId(){ if(isset($this->vta_vendedor_id)){ return $this->vta_vendedor_id; }else{ return 'null'; } }
	public function getGralActividadId(){ if(isset($this->gral_actividad_id)){ return $this->gral_actividad_id; }else{ return 'null'; } }
	public function getGralEscenarioId(){ if(isset($this->gral_escenario_id)){ return $this->gral_escenario_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroFactura(){ if(isset($this->numero_factura)){ return $this->numero_factura; }else{ return ''; } }
	public function getNumeroFacturaCompleto(){ if(isset($this->numero_factura_completo)){ return $this->numero_factura_completo; }else{ return ''; } }
	public function getCae(){ if(isset($this->cae)){ return $this->cae; }else{ return ''; } }
	public function getFechaEmision(){ if(isset($this->fecha_emision)){ return $this->fecha_emision; }else{ return ''; } }
	public function getFechaVencimiento(){ if(isset($this->fecha_vencimiento)){ return $this->fecha_vencimiento; }else{ return ''; } }
	public function getGralTipoDocumentoId(){ if(isset($this->gral_tipo_documento_id)){ return $this->gral_tipo_documento_id; }else{ return 'null'; } }
	public function getPersonaDescripcion(){ if(isset($this->persona_descripcion)){ return $this->persona_descripcion; }else{ return ''; } }
	public function getPersonaDocumento(){ if(isset($this->persona_documento)){ return $this->persona_documento; }else{ return ''; } }
	public function getPersonaEmail(){ if(isset($this->persona_email)){ return $this->persona_email; }else{ return ''; } }
	public function getRazonSocial(){ if(isset($this->razon_social)){ return $this->razon_social; }else{ return ''; } }
	public function getDomicilioLegal(){ if(isset($this->domicilio_legal)){ return $this->domicilio_legal; }else{ return ''; } }
	public function getCuit(){ if(isset($this->cuit)){ return $this->cuit; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getVtaPresupuestoId(){ if(isset($this->vta_presupuesto_id)){ return $this->vta_presupuesto_id; }else{ return 'null'; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getAnio(){ if(isset($this->anio)){ return $this->anio; }else{ return 0; } }
	public function getGralMesId(){ if(isset($this->gral_mes_id)){ return $this->gral_mes_id; }else{ return 'null'; } }
	public function getCntbDiarioAsientoId(){ if(isset($this->cntb_diario_asiento_id)){ return $this->cntb_diario_asiento_id; }else{ return 'null'; } }
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getCliCentroRecepcionId(){ if(isset($this->cli_centro_recepcion_id)){ return $this->cli_centro_recepcion_id; }else{ return 'null'; } }
	public function getPorcentaje(){ if(isset($this->porcentaje)){ return $this->porcentaje; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getNumeroTimbrado(){ if(isset($this->numero_timbrado)){ return $this->numero_timbrado; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaFactura */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_VTA_TIPO_FACTURA_ID."
				, ".self::GEN_ATTR_VTA_TIPO_ORIGEN_FACTURA_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_VTA_PUNTO_VENTA_ID."
				, ".self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_GRAL_FP_CUOTA_ID."
				, ".self::GEN_ATTR_VTA_PREVENTISTA_ID."
				, ".self::GEN_ATTR_VTA_COMPRADOR_ID."
				, ".self::GEN_ATTR_VTA_VENDEDOR_ID."
				, ".self::GEN_ATTR_GRAL_ACTIVIDAD_ID."
				, ".self::GEN_ATTR_GRAL_ESCENARIO_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_FACTURA."
				, ".self::GEN_ATTR_NUMERO_FACTURA_COMPLETO."
				, ".self::GEN_ATTR_CAE."
				, ".self::GEN_ATTR_FECHA_EMISION."
				, ".self::GEN_ATTR_FECHA_VENCIMIENTO."
				, ".self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID."
				, ".self::GEN_ATTR_PERSONA_DESCRIPCION."
				, ".self::GEN_ATTR_PERSONA_DOCUMENTO."
				, ".self::GEN_ATTR_PERSONA_EMAIL."
				, ".self::GEN_ATTR_RAZON_SOCIAL."
				, ".self::GEN_ATTR_DOMICILIO_LEGAL."
				, ".self::GEN_ATTR_CUIT."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_ID."
				, ".self::GEN_ATTR_NOTA_PUBLICA."
				, ".self::GEN_ATTR_ANIO."
				, ".self::GEN_ATTR_GRAL_MES_ID."
				, ".self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_CLI_CENTRO_RECEPCION_ID."
				, ".self::GEN_ATTR_PORCENTAJE."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_NOTA_INTERNA."
				, ".self::GEN_ATTR_NUMERO_TIMBRADO."
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
				$this->setVtaFacturaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_TIPO_ESTADO_ID]);
				$this->setVtaTipoFacturaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_FACTURA_ID]);
				$this->setVtaTipoOrigenFacturaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_FACTURA_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
				$this->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
				$this->setGralFpCuotaId($fila[self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID]);
				$this->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
				$this->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
				$this->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
				$this->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
				$this->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroFactura($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA]);
				$this->setNumeroFacturaCompleto($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO]);
				$this->setCae($fila[self::GEN_ATTR_MIN_CAE]);
				$this->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
				$this->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
				$this->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
				$this->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
				$this->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
				$this->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
				$this->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
				$this->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
				$this->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
				$this->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
				$this->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
				$this->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
				$this->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
				$this->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
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
	public function setVtaFacturaTipoEstadoId($v){ $this->vta_factura_tipo_estado_id = $v; }
	public function setVtaTipoFacturaId($v){ $this->vta_tipo_factura_id = $v; }
	public function setVtaTipoOrigenFacturaId($v){ $this->vta_tipo_origen_factura_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setVtaPuntoVentaId($v){ $this->vta_punto_venta_id = $v; }
	public function setGralFpFormaPagoId($v){ $this->gral_fp_forma_pago_id = $v; }
	public function setGralFpCuotaId($v){ $this->gral_fp_cuota_id = $v; }
	public function setVtaPreventistaId($v){ $this->vta_preventista_id = $v; }
	public function setVtaCompradorId($v){ $this->vta_comprador_id = $v; }
	public function setVtaVendedorId($v){ $this->vta_vendedor_id = $v; }
	public function setGralActividadId($v){ $this->gral_actividad_id = $v; }
	public function setGralEscenarioId($v){ $this->gral_escenario_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroFactura($v){ $this->numero_factura = $v; }
	public function setNumeroFacturaCompleto($v){ $this->numero_factura_completo = $v; }
	public function setCae($v){ $this->cae = $v; }
	public function setFechaEmision($v){ $this->fecha_emision = $v; }
	public function setFechaVencimiento($v){ $this->fecha_vencimiento = $v; }
	public function setGralTipoDocumentoId($v){ $this->gral_tipo_documento_id = $v; }
	public function setPersonaDescripcion($v){ $this->persona_descripcion = $v; }
	public function setPersonaDocumento($v){ $this->persona_documento = $v; }
	public function setPersonaEmail($v){ $this->persona_email = $v; }
	public function setRazonSocial($v){ $this->razon_social = $v; }
	public function setDomicilioLegal($v){ $this->domicilio_legal = $v; }
	public function setCuit($v){ $this->cuit = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setVtaPresupuestoId($v){ $this->vta_presupuesto_id = $v; }
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setAnio($v){ $this->anio = $v; }
	public function setGralMesId($v){ $this->gral_mes_id = $v; }
	public function setCntbDiarioAsientoId($v){ $this->cntb_diario_asiento_id = $v; }
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setCliCentroRecepcionId($v){ $this->cli_centro_recepcion_id = $v; }
	public function setPorcentaje($v){ $this->porcentaje = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setNumeroTimbrado($v){ $this->numero_timbrado = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaFactura();
            $o->setId($fila[VtaFactura::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setVtaFacturaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_TIPO_ESTADO_ID]);
			$o->setVtaTipoFacturaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_FACTURA_ID]);
			$o->setVtaTipoOrigenFacturaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_FACTURA_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$o->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$o->setGralFpCuotaId($fila[self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID]);
			$o->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$o->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
			$o->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$o->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$o->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroFactura($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA]);
			$o->setNumeroFacturaCompleto($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO]);
			$o->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$o->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$o->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$o->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$o->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$o->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$o->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$o->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$o->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$o->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$o->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$o->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
			$o->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$o->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaFactura */ 	
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

	/* Cambia el estado de BVtaFactura */ 	
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

	/* Save de BVtaFactura */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA."
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO."
						, ".self::GEN_ATTR_MIN_CAE."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_factura_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaFacturaTipoEstadoId()."
						, ".$this->getVtaTipoFacturaId()."
						, ".$this->getVtaTipoOrigenFacturaId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaPuntoVentaId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralFpCuotaId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getVtaCompradorId()."
						, ".$this->getVtaVendedorId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroFactura()."'
						, '".$this->getNumeroFacturaCompleto()."'
						, '".$this->getCae()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getFechaVencimiento()."'
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getPersonaDocumento()."'
						, '".$this->getPersonaEmail()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
						, ".$this->getVtaPresupuestoId()."
						, '".$this->getNotaPublica()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getGralSucursalId()."
						, ".$this->getCliCentroRecepcionId()."
						, ".$this->getPorcentaje()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNumeroTimbrado()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_factura_seq')";
            
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
                 
				 ".VtaFactura::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_TIPO_ESTADO_ID." = ".$this->getVtaFacturaTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_FACTURA_ID." = ".$this->getVtaTipoFacturaId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_FACTURA_ID." = ".$this->getVtaTipoOrigenFacturaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID." = ".$this->getGralFpCuotaId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID." = ".$this->getVtaCompradorId()."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID." = ".$this->getVtaVendedorId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA." = '".$this->getNumeroFactura()."'
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO." = '".$this->getNumeroFacturaCompleto()."'
						, ".self::GEN_ATTR_MIN_CAE." = '".$this->getCae()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO." = '".$this->getFechaVencimiento()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO." = '".$this->getPersonaDocumento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL." = '".$this->getPersonaEmail()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID." = ".$this->getCliCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE." = ".$this->getPorcentaje()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO." = '".$this->getNumeroTimbrado()."'
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
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA."
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO."
						, ".self::GEN_ATTR_MIN_CAE."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaFacturaTipoEstadoId()."
						, ".$this->getVtaTipoFacturaId()."
						, ".$this->getVtaTipoOrigenFacturaId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaPuntoVentaId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralFpCuotaId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getVtaCompradorId()."
						, ".$this->getVtaVendedorId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroFactura()."'
						, '".$this->getNumeroFacturaCompleto()."'
						, '".$this->getCae()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getFechaVencimiento()."'
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getPersonaDocumento()."'
						, '".$this->getPersonaEmail()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
						, ".$this->getVtaPresupuestoId()."
						, '".$this->getNotaPublica()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getGralSucursalId()."
						, ".$this->getCliCentroRecepcionId()."
						, ".$this->getPorcentaje()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNumeroTimbrado()."'
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
                     
				 ".VtaFactura::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_TIPO_ESTADO_ID." = ".$this->getVtaFacturaTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_FACTURA_ID." = ".$this->getVtaTipoFacturaId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_FACTURA_ID." = ".$this->getVtaTipoOrigenFacturaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID." = ".$this->getGralFpCuotaId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_VTA_COMPRADOR_ID." = ".$this->getVtaCompradorId()."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID." = ".$this->getVtaVendedorId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA." = '".$this->getNumeroFactura()."'
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO." = '".$this->getNumeroFacturaCompleto()."'
						, ".self::GEN_ATTR_MIN_CAE." = '".$this->getCae()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO." = '".$this->getFechaVencimiento()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO." = '".$this->getPersonaDocumento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL." = '".$this->getPersonaEmail()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID." = ".$this->getCliCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE." = ".$this->getPorcentaje()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO." = '".$this->getNumeroTimbrado()."'
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
            $o = new VtaFactura();
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

	/* Delete de BVtaFactura */ 	
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
	
            // se elimina la coleccion de VtaFacturaImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionVtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionVtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionVtaFacturaConfiguracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionVtaFacturaConfiguracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionVtaFacturaConfiguracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiVentasCbtes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiVentasCbtes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiVentasAlicuotass relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiVentasAlicuotass(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeVtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeVtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaFactura(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaFactura::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtafacturas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtafactura = new VtaFactura();
                    $vtafactura->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtafactura->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtafactura->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$vtafactura->setVtaFacturaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_TIPO_ESTADO_ID]);
			$vtafactura->setVtaTipoFacturaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_FACTURA_ID]);
			$vtafactura->setVtaTipoOrigenFacturaId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_FACTURA_ID]);
			$vtafactura->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$vtafactura->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$vtafactura->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$vtafactura->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$vtafactura->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$vtafactura->setGralFpCuotaId($fila[self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID]);
			$vtafactura->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$vtafactura->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
			$vtafactura->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$vtafactura->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$vtafactura->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$vtafactura->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$vtafactura->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$vtafactura->setNumeroFactura($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA]);
			$vtafactura->setNumeroFacturaCompleto($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO]);
			$vtafactura->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$vtafactura->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$vtafactura->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$vtafactura->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$vtafactura->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$vtafactura->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$vtafactura->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$vtafactura->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$vtafactura->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$vtafactura->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$vtafactura->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtafactura->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$vtafactura->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$vtafactura->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$vtafactura->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$vtafactura->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$vtafactura->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$vtafactura->setCliCentroRecepcionId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_RECEPCION_ID]);
			$vtafactura->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
			$vtafactura->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtafactura->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$vtafactura->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$vtafactura->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtafactura->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtafactura->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtafactura->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtafactura->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtafactura->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtafacturas[] = $vtafactura;
		}
		
		return $vtafacturas;
	}	
	

	/* Método getVtaFacturas Habilitados */ 	
	static function getVtaFacturasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaFactura::getVtaFacturas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaFacturas para listado de Backend */ 	
	static function getVtaFacturasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaFactura::getVtaFacturas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaFacturasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaFactura::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaFactura::getVtaFacturas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaFacturas filtrado para select */ 	
	static function getVtaFacturasCmbF($paginador = null, $criterio = null){
            $col = VtaFactura::getVtaFacturas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getVtaFacturasXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de VtaFacturaTipoEstado */ 	
	static function getVtaFacturasXVtaFacturaTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaFacturaTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de VtaTipoFactura */ 	
	static function getVtaFacturasXVtaTipoFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_TIPO_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de VtaTipoOrigenFactura */ 	
	static function getVtaFacturasXVtaTipoOrigenFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_TIPO_ORIGEN_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoOrigenFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getVtaFacturasXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getVtaFacturasXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getVtaFacturasXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de VtaPuntoVenta */ 	
	static function getVtaFacturasXVtaPuntoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_PUNTO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPuntoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralFpFormaPago */ 	
	static function getVtaFacturasXGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralFpCuota */ 	
	static function getVtaFacturasXGralFpCuotas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_FP_CUOTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpCuotaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de VtaPreventista */ 	
	static function getVtaFacturasXVtaPreventistas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_PREVENTISTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPreventistaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de VtaComprador */ 	
	static function getVtaFacturasXVtaCompradors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_COMPRADOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaCompradorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de VtaVendedor */ 	
	static function getVtaFacturasXVtaVendedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaVendedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralActividad */ 	
	static function getVtaFacturasXGralActividads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_ACTIVIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralActividadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralEscenario */ 	
	static function getVtaFacturasXGralEscenarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_ESCENARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEscenarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getVtaFacturasXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de VtaPresupuesto */ 	
	static function getVtaFacturasXVtaPresupuestos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_VTA_PRESUPUESTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getVtaFacturasXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getVtaFacturasXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getVtaFacturasXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturas filtrado por una coleccion de objetos foraneos de CliCentroRecepcion */ 	
	static function getVtaFacturasXCliCentroRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFactura::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFactura::getVtaFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliCentroRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_factura_adm.php';
            $url_gestion = 'vta_factura_gestion.php';
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
	

	/* Metodo getVtaFacturaImportes */ 	
	public function getVtaFacturaImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaImporte::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturaimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturaimporte = VtaFacturaImporte::hidratarObjeto($fila);			
                $vtafacturaimportes[] = $vtafacturaimporte;
            }

            return $vtafacturaimportes;
	}	
	

	/* Método getVtaFacturaImportesBloque para MasInfo */ 	
	public function getVtaFacturaImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaImportes Habilitados */ 	
	public function getVtaFacturaImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaImporte */ 	
	public function getVtaFacturaImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaImporte relacionadas */ 	
	public function deleteVtaFacturaImportes(){
            $obs = $this->getVtaFacturaImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaImportesCmb() VtaFacturaImporte relacionadas */ 	
	public function getVtaFacturaImportesCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaImporte::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaImporte::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaImporte::getVtaFacturaImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaFacturaEstados */ 	
	public function getVtaFacturaEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaEstado::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturaestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturaestado = VtaFacturaEstado::hidratarObjeto($fila);			
                $vtafacturaestados[] = $vtafacturaestado;
            }

            return $vtafacturaestados;
	}	
	

	/* Método getVtaFacturaEstadosBloque para MasInfo */ 	
	public function getVtaFacturaEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaEstados Habilitados */ 	
	public function getVtaFacturaEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaEstado */ 	
	public function getVtaFacturaEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaEstado relacionadas */ 	
	public function deleteVtaFacturaEstados(){
            $obs = $this->getVtaFacturaEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaEstadosCmb() VtaFacturaEstado relacionadas */ 	
	public function getVtaFacturaEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaEstado::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaEstado::getVtaFacturaEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturaTipoEstados (Coleccion) relacionados a traves de VtaFacturaEstado */ 	
	public function getVtaFacturaTipoEstadosXVtaFacturaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFacturaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaEstado::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaFacturaEstado::GEN_TABLA, VtaFacturaEstado::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, VtaFacturaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFacturaTipoEstado::getVtaFacturaTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturaTipoEstados relacionados a traves de VtaFacturaEstado */ 	
	public function getCantidadVtaFacturaTipoEstadosXVtaFacturaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFacturaTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFacturaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaEstado::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaFacturaEstado::GEN_TABLA, VtaFacturaEstado::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, VtaFacturaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFacturaTipoEstado::getVtaFacturaTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFacturaTipoEstado (Objeto) relacionado a traves de VtaFacturaEstado */ 	
	public function getVtaFacturaTipoEstadoXVtaFacturaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturaTipoEstadosXVtaFacturaEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaItems */ 	
	public function getVtaFacturaItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaItem::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturaitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturaitem = VtaFacturaItem::hidratarObjeto($fila);			
                $vtafacturaitems[] = $vtafacturaitem;
            }

            return $vtafacturaitems;
	}	
	

	/* Método getVtaFacturaItemsBloque para MasInfo */ 	
	public function getVtaFacturaItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaItems Habilitados */ 	
	public function getVtaFacturaItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaItem */ 	
	public function getVtaFacturaItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaItem relacionadas */ 	
	public function deleteVtaFacturaItems(){
            $obs = $this->getVtaFacturaItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaItemsCmb() VtaFacturaItem relacionadas */ 	
	public function getVtaFacturaItemsCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaItem::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaItem::getVtaFacturaItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoIvas (Coleccion) relacionados a traves de VtaFacturaItem */ 	
	public function getGralTipoIvasXVtaFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaItem::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(VtaFacturaItem::GEN_TABLA, VtaFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoIvas relacionados a traves de VtaFacturaItem */ 	
	public function getCantidadGralTipoIvasXVtaFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoIva::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaItem::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(VtaFacturaItem::GEN_TABLA, VtaFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoIva (Objeto) relacionado a traves de VtaFacturaItem */ 	
	public function getGralTipoIvaXVtaFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoIvasXVtaFacturaItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaTributos */ 	
	public function getVtaFacturaVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaTributo::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtatributo = VtaFacturaVtaTributo::hidratarObjeto($fila);			
                $vtafacturavtatributos[] = $vtafacturavtatributo;
            }

            return $vtafacturavtatributos;
	}	
	

	/* Método getVtaFacturaVtaTributosBloque para MasInfo */ 	
	public function getVtaFacturaVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaTributos Habilitados */ 	
	public function getVtaFacturaVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaTributo */ 	
	public function getVtaFacturaVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaTributo relacionadas */ 	
	public function deleteVtaFacturaVtaTributos(){
            $obs = $this->getVtaFacturaVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaTributosCmb() VtaFacturaVtaTributo relacionadas */ 	
	public function getVtaFacturaVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaTributo::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaTributo::getVtaFacturaVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTributos (Coleccion) relacionados a traves de VtaFacturaVtaTributo */ 	
	public function getVtaTributosXVtaFacturaVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaTributo::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaTributo::GEN_TABLA, VtaFacturaVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTributos relacionados a traves de VtaFacturaVtaTributo */ 	
	public function getCantidadVtaTributosXVtaFacturaVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaTributo::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaTributo::GEN_TABLA, VtaFacturaVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTributo (Objeto) relacionado a traves de VtaFacturaVtaTributo */ 	
	public function getVtaTributoXVtaFacturaVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTributosXVtaFacturaVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaRecibos */ 	
	public function getVtaFacturaVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaRecibo::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtarecibo = VtaFacturaVtaRecibo::hidratarObjeto($fila);			
                $vtafacturavtarecibos[] = $vtafacturavtarecibo;
            }

            return $vtafacturavtarecibos;
	}	
	

	/* Método getVtaFacturaVtaRecibosBloque para MasInfo */ 	
	public function getVtaFacturaVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaRecibos Habilitados */ 	
	public function getVtaFacturaVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaRecibo */ 	
	public function getVtaFacturaVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaRecibo relacionadas */ 	
	public function deleteVtaFacturaVtaRecibos(){
            $obs = $this->getVtaFacturaVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaRecibosCmb() VtaFacturaVtaRecibo relacionadas */ 	
	public function getVtaFacturaVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaRecibo::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaRecibo::getVtaFacturaVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRecibos (Coleccion) relacionados a traves de VtaFacturaVtaRecibo */ 	
	public function getVtaRecibosXVtaFacturaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaRecibo::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaRecibo::GEN_TABLA, VtaFacturaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRecibos relacionados a traves de VtaFacturaVtaRecibo */ 	
	public function getCantidadVtaRecibosXVtaFacturaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaRecibo::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaRecibo::GEN_TABLA, VtaFacturaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRecibo (Objeto) relacionado a traves de VtaFacturaVtaRecibo */ 	
	public function getVtaReciboXVtaFacturaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRecibosXVtaFacturaVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaNotaCreditos */ 	
	public function getVtaFacturaVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaNotaCredito::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtanotacredito = VtaFacturaVtaNotaCredito::hidratarObjeto($fila);			
                $vtafacturavtanotacreditos[] = $vtafacturavtanotacredito;
            }

            return $vtafacturavtanotacreditos;
	}	
	

	/* Método getVtaFacturaVtaNotaCreditosBloque para MasInfo */ 	
	public function getVtaFacturaVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaNotaCreditos Habilitados */ 	
	public function getVtaFacturaVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaNotaCredito */ 	
	public function getVtaFacturaVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaNotaCredito relacionadas */ 	
	public function deleteVtaFacturaVtaNotaCreditos(){
            $obs = $this->getVtaFacturaVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaNotaCreditosCmb() VtaFacturaVtaNotaCredito relacionadas */ 	
	public function getVtaFacturaVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaNotaCredito::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaNotaCredito::getVtaFacturaVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaFacturaVtaNotaCredito */ 	
	public function getVtaNotaCreditosXVtaFacturaVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaNotaCredito::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaNotaCredito::GEN_TABLA, VtaFacturaVtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaFacturaVtaNotaCredito */ 	
	public function getCantidadVtaNotaCreditosXVtaFacturaVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaNotaCredito::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaNotaCredito::GEN_TABLA, VtaFacturaVtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaFacturaVtaNotaCredito */ 	
	public function getVtaNotaCreditoXVtaFacturaVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaFacturaVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaNotaDebitos */ 	
	public function getVtaFacturaVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtanotadebito = VtaFacturaVtaNotaDebito::hidratarObjeto($fila);			
                $vtafacturavtanotadebitos[] = $vtafacturavtanotadebito;
            }

            return $vtafacturavtanotadebitos;
	}	
	

	/* Método getVtaFacturaVtaNotaDebitosBloque para MasInfo */ 	
	public function getVtaFacturaVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaNotaDebitos Habilitados */ 	
	public function getVtaFacturaVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaNotaDebito */ 	
	public function getVtaFacturaVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaNotaDebito relacionadas */ 	
	public function deleteVtaFacturaVtaNotaDebitos(){
            $obs = $this->getVtaFacturaVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaNotaDebitosCmb() VtaFacturaVtaNotaDebito relacionadas */ 	
	public function getVtaFacturaVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaNotaDebito::getVtaFacturaVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaDebitos (Coleccion) relacionados a traves de VtaFacturaVtaNotaDebito */ 	
	public function getVtaNotaDebitosXVtaFacturaVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaNotaDebito::GEN_TABLA, VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaDebitos relacionados a traves de VtaFacturaVtaNotaDebito */ 	
	public function getCantidadVtaNotaDebitosXVtaFacturaVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaNotaDebito::GEN_TABLA, VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaDebito (Objeto) relacionado a traves de VtaFacturaVtaNotaDebito */ 	
	public function getVtaNotaDebitoXVtaFacturaVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaDebitosXVtaFacturaVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaWsFeOpeSolicitud::getVtaFacturaWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeOpeSolicituds (Coleccion) relacionados a traves de VtaFacturaWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudsXVtaFacturaWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaFacturaWsFeOpeSolicitud::GEN_TABLA, VtaFacturaWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeOpeSolicituds relacionados a traves de VtaFacturaWsFeOpeSolicitud */ 	
	public function getCantidadWsFeOpeSolicitudsXVtaFacturaWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeOpeSolicitud::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaWsFeOpeSolicitud::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaFacturaWsFeOpeSolicitud::GEN_TABLA, VtaFacturaWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeOpeSolicitud (Objeto) relacionado a traves de VtaFacturaWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudXVtaFacturaWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeOpeSolicitudsXVtaFacturaWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaEnviados */ 	
	public function getVtaFacturaEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaEnviado::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturaenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturaenviado = VtaFacturaEnviado::hidratarObjeto($fila);			
                $vtafacturaenviados[] = $vtafacturaenviado;
            }

            return $vtafacturaenviados;
	}	
	

	/* Método getVtaFacturaEnviadosBloque para MasInfo */ 	
	public function getVtaFacturaEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaEnviados Habilitados */ 	
	public function getVtaFacturaEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaEnviado */ 	
	public function getVtaFacturaEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaEnviado relacionadas */ 	
	public function deleteVtaFacturaEnviados(){
            $obs = $this->getVtaFacturaEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaEnviadosCmb() VtaFacturaEnviado relacionadas */ 	
	public function getVtaFacturaEnviadosCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaEnviado::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaEnviado::getVtaFacturaEnviadosCmbF(null, $c);
            return $os;
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
                
            $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentas (Coleccion) relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaOrdenVentasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentas relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaOrdenVentasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVenta (Objeto) relacionado a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaOrdenVentaXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentasXVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionVtaFacturas */ 	
	public function getVtaComisionVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionVtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionVtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionVtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionVtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionVtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionvtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionvtafactura = VtaComisionVtaFactura::hidratarObjeto($fila);			
                $vtacomisionvtafacturas[] = $vtacomisionvtafactura;
            }

            return $vtacomisionvtafacturas;
	}	
	

	/* Método getVtaComisionVtaFacturasBloque para MasInfo */ 	
	public function getVtaComisionVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionVtaFacturas Habilitados */ 	
	public function getVtaComisionVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionVtaFactura */ 	
	public function getVtaComisionVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionVtaFactura relacionadas */ 	
	public function deleteVtaComisionVtaFacturas(){
            $obs = $this->getVtaComisionVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionVtaFacturasCmb() VtaComisionVtaFactura relacionadas */ 	
	public function getVtaComisionVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionVtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionVtaFactura::getVtaComisionVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaComisions (Coleccion) relacionados a traves de VtaComisionVtaFactura */ 	
	public function getVtaComisionsXVtaComisionVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaFactura::GEN_TABLA, VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, VtaComision::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComision::getVtaComisions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaComisions relacionados a traves de VtaComisionVtaFactura */ 	
	public function getCantidadVtaComisionsXVtaComisionVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaComision::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaFactura::GEN_TABLA, VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, VtaComision::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComision::getVtaComisions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaComision (Objeto) relacionado a traves de VtaComisionVtaFactura */ 	
	public function getVtaComisionXVtaComisionVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaComisionsXVtaComisionVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionVtaFacturaConfiguracions */ 	
	public function getVtaComisionVtaFacturaConfiguracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionVtaFacturaConfiguracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionVtaFacturaConfiguracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionVtaFacturaConfiguracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionVtaFacturaConfiguracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionvtafacturaconfiguracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionvtafacturaconfiguracion = VtaComisionVtaFacturaConfiguracion::hidratarObjeto($fila);			
                $vtacomisionvtafacturaconfiguracions[] = $vtacomisionvtafacturaconfiguracion;
            }

            return $vtacomisionvtafacturaconfiguracions;
	}	
	

	/* Método getVtaComisionVtaFacturaConfiguracionsBloque para MasInfo */ 	
	public function getVtaComisionVtaFacturaConfiguracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionVtaFacturaConfiguracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionVtaFacturaConfiguracions Habilitados */ 	
	public function getVtaComisionVtaFacturaConfiguracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionVtaFacturaConfiguracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionVtaFacturaConfiguracion */ 	
	public function getVtaComisionVtaFacturaConfiguracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionVtaFacturaConfiguracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionVtaFacturaConfiguracion relacionadas */ 	
	public function deleteVtaComisionVtaFacturaConfiguracions(){
            $obs = $this->getVtaComisionVtaFacturaConfiguracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionVtaFacturaConfiguracionsCmb() VtaComisionVtaFacturaConfiguracion relacionadas */ 	
	public function getVtaComisionVtaFacturaConfiguracionsCmb(){
            $c = new Criterio();
            $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionVtaFacturaConfiguracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionVtaFacturaConfiguracion::getVtaComisionVtaFacturaConfiguracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPreventistas (Coleccion) relacionados a traves de VtaComisionVtaFacturaConfiguracion */ 	
	public function getVtaPreventistasXVtaComisionVtaFacturaConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPreventista::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaFacturaConfiguracion::GEN_TABLA, VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_PREVENTISTA_ID, VtaPreventista::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPreventista::getVtaPreventistas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPreventistas relacionados a traves de VtaComisionVtaFacturaConfiguracion */ 	
	public function getCantidadVtaPreventistasXVtaComisionVtaFacturaConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPreventista::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPreventista::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaFacturaConfiguracion::GEN_TABLA, VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_PREVENTISTA_ID, VtaPreventista::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPreventista::getVtaPreventistas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPreventista (Objeto) relacionado a traves de VtaComisionVtaFacturaConfiguracion */ 	
	public function getVtaPreventistaXVtaComisionVtaFacturaConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPreventistasXVtaComisionVtaFacturaConfiguracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaFacturas */ 	
	public function getCntbDiarioAsientoVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtafactura = CntbDiarioAsientoVtaFactura::hidratarObjeto($fila);			
                $cntbdiarioasientovtafacturas[] = $cntbdiarioasientovtafactura;
            }

            return $cntbdiarioasientovtafacturas;
	}	
	

	/* Método getCntbDiarioAsientoVtaFacturasBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaFacturas Habilitados */ 	
	public function getCntbDiarioAsientoVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaFactura */ 	
	public function getCntbDiarioAsientoVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaFactura relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaFacturas(){
            $obs = $this->getCntbDiarioAsientoVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaFacturasCmb() CntbDiarioAsientoVtaFactura relacionadas */ 	
	public function getCntbDiarioAsientoVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaFactura::getCntbDiarioAsientoVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaFactura */ 	
	public function getCntbPeriodosXCntbDiarioAsientoVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaFactura::GEN_TABLA, CntbDiarioAsientoVtaFactura::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoVtaFactura */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaFactura::GEN_TABLA, CntbDiarioAsientoVtaFactura::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoVtaFactura */ 	
	public function getCntbPeriodoXCntbDiarioAsientoVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiVentasCbtes */ 	
	public function getAfipCitiVentasCbtes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiVentasCbte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiVentasCbte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiVentasCbte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiVentasCbte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiVentasCbte::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiVentasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiVentasCbte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiVentasCbte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipcitiventascbtes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipcitiventascbte = AfipCitiVentasCbte::hidratarObjeto($fila);			
                $afipcitiventascbtes[] = $afipcitiventascbte;
            }

            return $afipcitiventascbtes;
	}	
	

	/* Método getAfipCitiVentasCbtesBloque para MasInfo */ 	
	public function getAfipCitiVentasCbtesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiVentasCbtes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiVentasCbtes Habilitados */ 	
	public function getAfipCitiVentasCbtesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiVentasCbtes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiVentasCbte */ 	
	public function getAfipCitiVentasCbte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiVentasCbtes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiVentasCbte relacionadas */ 	
	public function deleteAfipCitiVentasCbtes(){
            $obs = $this->getAfipCitiVentasCbtes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiVentasCbtesCmb() AfipCitiVentasCbte relacionadas */ 	
	public function getAfipCitiVentasCbtesCmb(){
            $c = new Criterio();
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiVentasCbte::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiVentasCbte::getAfipCitiVentasCbtesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiVentasCbte */ 	
	public function getAfipCitiPrcsXAfipCitiVentasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiVentasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiVentasCbte::GEN_TABLA, AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiVentasCbte */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiVentasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiVentasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiVentasCbte::GEN_TABLA, AfipCitiVentasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiVentasCbte */ 	
	public function getAfipCitiPrcXAfipCitiVentasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiVentasCbte($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiVentasAlicuotass */ 	
	public function getAfipCitiVentasAlicuotass($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiVentasAlicuotas::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiVentasAlicuotas::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiVentasAlicuotas::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiVentasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiVentasAlicuotas::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiVentasAlicuotas::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipcitiventasalicuotass = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipcitiventasalicuotas = AfipCitiVentasAlicuotas::hidratarObjeto($fila);			
                $afipcitiventasalicuotass[] = $afipcitiventasalicuotas;
            }

            return $afipcitiventasalicuotass;
	}	
	

	/* Método getAfipCitiVentasAlicuotassBloque para MasInfo */ 	
	public function getAfipCitiVentasAlicuotassParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiVentasAlicuotass($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiVentasAlicuotass Habilitados */ 	
	public function getAfipCitiVentasAlicuotassHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiVentasAlicuotass($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiVentasAlicuotas */ 	
	public function getAfipCitiVentasAlicuotas($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiVentasAlicuotass($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiVentasAlicuotas relacionadas */ 	
	public function deleteAfipCitiVentasAlicuotass(){
            $obs = $this->getAfipCitiVentasAlicuotass();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiVentasAlicuotassCmb() AfipCitiVentasAlicuotas relacionadas */ 	
	public function getAfipCitiVentasAlicuotassCmb(){
            $c = new Criterio();
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiVentasAlicuotas::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotassCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiVentasAlicuotas */ 	
	public function getAfipCitiPrcsXAfipCitiVentasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiVentasAlicuotas::GEN_TABLA, AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiVentasAlicuotas */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiVentasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiVentasAlicuotas::GEN_TABLA, AfipCitiVentasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiVentasAlicuotas */ 	
	public function getAfipCitiPrcXAfipCitiVentasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiVentasAlicuotas($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturaVtaAjusteHabers */ 	
	public function getVtaFacturaVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFacturaVtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFacturaVtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFacturaVtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFacturaVtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFacturaVtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturavtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafacturavtaajustehaber = VtaFacturaVtaAjusteHaber::hidratarObjeto($fila);			
                $vtafacturavtaajustehabers[] = $vtafacturavtaajustehaber;
            }

            return $vtafacturavtaajustehabers;
	}	
	

	/* Método getVtaFacturaVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaFacturaVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturaVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturaVtaAjusteHabers Habilitados */ 	
	public function getVtaFacturaVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturaVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFacturaVtaAjusteHaber */ 	
	public function getVtaFacturaVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturaVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFacturaVtaAjusteHaber relacionadas */ 	
	public function deleteVtaFacturaVtaAjusteHabers(){
            $obs = $this->getVtaFacturaVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturaVtaAjusteHabersCmb() VtaFacturaVtaAjusteHaber relacionadas */ 	
	public function getVtaFacturaVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaAjusteHaber::getVtaFacturaVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaFacturaVtaAjusteHaber */ 	
	public function getVtaAjusteHabersXVtaFacturaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaAjusteHaber::GEN_TABLA, VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaFacturaVtaAjusteHaber */ 	
	public function getCantidadVtaAjusteHabersXVtaFacturaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaAjusteHaber::GEN_TABLA, VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaFacturaVtaAjusteHaber */ 	
	public function getVtaAjusteHaberXVtaFacturaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaFacturaVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeVtaFacturas */ 	
	public function getEkuDeVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeVtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeVtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeVtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeVtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeVtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeVtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudevtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudevtafactura = EkuDeVtaFactura::hidratarObjeto($fila);			
                $ekudevtafacturas[] = $ekudevtafactura;
            }

            return $ekudevtafacturas;
	}	
	

	/* Método getEkuDeVtaFacturasBloque para MasInfo */ 	
	public function getEkuDeVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeVtaFacturas Habilitados */ 	
	public function getEkuDeVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeVtaFactura */ 	
	public function getEkuDeVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeVtaFactura relacionadas */ 	
	public function deleteEkuDeVtaFacturas(){
            $obs = $this->getEkuDeVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeVtaFacturasCmb() EkuDeVtaFactura relacionadas */ 	
	public function getEkuDeVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(EkuDeVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeVtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeVtaFactura::getEkuDeVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDes (Coleccion) relacionados a traves de EkuDeVtaFactura */ 	
	public function getEkuDesXEkuDeVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaFactura::GEN_TABLA, EkuDeVtaFactura::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDes relacionados a traves de EkuDeVtaFactura */ 	
	public function getCantidadEkuDesXEkuDeVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDe::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaFactura::GEN_ATTR_VTA_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaFactura::GEN_TABLA, EkuDeVtaFactura::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDe (Objeto) relacionado a traves de EkuDeVtaFactura */ 	
	public function getEkuDeXEkuDeVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDesXEkuDeVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaTributos asignados a VtaFactura */ 	
	public function getVtaFacturaVtaTributosId(){
            $ids = array();
            foreach($this->getVtaFacturaVtaTributos() as $o){
            
                $ids[] = $o->getVtaTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTributos asignados al VtaFactura */ 	
	public function setVtaFacturaVtaTributos($ids){
            $this->deleteVtaFacturaVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaFacturaVtaTributo();
                    $o->setVtaTributoId($id);
                    $o->setVtaFacturaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTributo en el alta de VtaFactura */ 	
	public function getAltaMostrarBloqueRelacionVtaFacturaVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los WsFeOpeSolicituds asignados a VtaFactura */ 	
	public function getVtaFacturaWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaFacturaWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getWsFeOpeSolicitudId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeOpeSolicituds asignados al VtaFactura */ 	
	public function setVtaFacturaWsFeOpeSolicituds($ids){
            $this->deleteVtaFacturaWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaFacturaWsFeOpeSolicitud();
                    $o->setWsFeOpeSolicitudId($id);
                    $o->setVtaFacturaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeOpeSolicitud en el alta de VtaFactura */ 	
	public function getAltaMostrarBloqueRelacionVtaFacturaWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los EkuDes asignados a VtaFactura */ 	
	public function getEkuDeVtaFacturasId(){
            $ids = array();
            foreach($this->getEkuDeVtaFacturas() as $o){
            
                $ids[] = $o->getEkuDeId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuDes asignados al VtaFactura */ 	
	public function setEkuDeVtaFacturas($ids){
            $this->deleteEkuDeVtaFacturas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuDeVtaFactura();
                    $o->setEkuDeId($id);
                    $o->setVtaFacturaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuDe en el alta de VtaFactura */ 	
	public function getAltaMostrarBloqueRelacionEkuDeVtaFactura(){
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

	/* Metodo que retorna el VtaFacturaTipoEstado (Clave Foranea) */ 	
    public function getVtaFacturaTipoEstado(){
        $o = new VtaFacturaTipoEstado();
        $o->setId($this->getVtaFacturaTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaFacturaTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaFacturaTipoEstadoEnArray(&$arr_os){
        if($this->getVtaFacturaTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaFacturaTipoEstadoId()])){
                $o = $arr_os[$this->getVtaFacturaTipoEstadoId()];
            }else{
                $o = VtaFacturaTipoEstado::getOxId($this->getVtaFacturaTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaFacturaTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaFacturaTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoFactura (Clave Foranea) */ 	
    public function getVtaTipoFactura(){
        $o = new VtaTipoFactura();
        $o->setId($this->getVtaTipoFacturaId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoFactura (Clave Foranea) en Array */ 	
    public function getVtaTipoFacturaEnArray(&$arr_os){
        if($this->getVtaTipoFacturaId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoFacturaId()])){
                $o = $arr_os[$this->getVtaTipoFacturaId()];
            }else{
                $o = VtaTipoFactura::getOxId($this->getVtaTipoFacturaId());
                if($o){
                    $arr_os[$this->getVtaTipoFacturaId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoFactura();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoOrigenFactura (Clave Foranea) */ 	
    public function getVtaTipoOrigenFactura(){
        $o = new VtaTipoOrigenFactura();
        $o->setId($this->getVtaTipoOrigenFacturaId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoOrigenFactura (Clave Foranea) en Array */ 	
    public function getVtaTipoOrigenFacturaEnArray(&$arr_os){
        if($this->getVtaTipoOrigenFacturaId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoOrigenFacturaId()])){
                $o = $arr_os[$this->getVtaTipoOrigenFacturaId()];
            }else{
                $o = VtaTipoOrigenFactura::getOxId($this->getVtaTipoOrigenFacturaId());
                if($o){
                    $arr_os[$this->getVtaTipoOrigenFacturaId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoOrigenFactura();
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

	/* Metodo que retorna el GralTipoPersoneria (Clave Foranea) */ 	
    public function getGralTipoPersoneria(){
        $o = new GralTipoPersoneria();
        $o->setId($this->getGralTipoPersoneriaId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoPersoneria (Clave Foranea) en Array */ 	
    public function getGralTipoPersoneriaEnArray(&$arr_os){
        if($this->getGralTipoPersoneriaId() != 'null'){
            if(isset($arr_os[$this->getGralTipoPersoneriaId()])){
                $o = $arr_os[$this->getGralTipoPersoneriaId()];
            }else{
                $o = GralTipoPersoneria::getOxId($this->getGralTipoPersoneriaId());
                if($o){
                    $arr_os[$this->getGralTipoPersoneriaId()] = $o;
                }
            }
        }else{
            $o = new GralTipoPersoneria();
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

	/* Metodo que retorna el VtaPuntoVenta (Clave Foranea) */ 	
    public function getVtaPuntoVenta(){
        $o = new VtaPuntoVenta();
        $o->setId($this->getVtaPuntoVentaId());
        return $o;			
    }

	/* Metodo que retorna el VtaPuntoVenta (Clave Foranea) en Array */ 	
    public function getVtaPuntoVentaEnArray(&$arr_os){
        if($this->getVtaPuntoVentaId() != 'null'){
            if(isset($arr_os[$this->getVtaPuntoVentaId()])){
                $o = $arr_os[$this->getVtaPuntoVentaId()];
            }else{
                $o = VtaPuntoVenta::getOxId($this->getVtaPuntoVentaId());
                if($o){
                    $arr_os[$this->getVtaPuntoVentaId()] = $o;
                }
            }
        }else{
            $o = new VtaPuntoVenta();
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

	/* Metodo que retorna el VtaPresupuesto (Clave Foranea) */ 	
    public function getVtaPresupuesto(){
        $o = new VtaPresupuesto();
        $o->setId($this->getVtaPresupuestoId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuesto (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoEnArray(&$arr_os){
        if($this->getVtaPresupuestoId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoId()])){
                $o = $arr_os[$this->getVtaPresupuestoId()];
            }else{
                $o = VtaPresupuesto::getOxId($this->getVtaPresupuestoId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuesto();
        }
        return $o;		
    }

	/* Metodo que retorna el GralMes (Clave Foranea) */ 	
    public function getGralMes(){
        $o = new GralMes();
        $o->setId($this->getGralMesId());
        return $o;			
    }

	/* Metodo que retorna el GralMes (Clave Foranea) en Array */ 	
    public function getGralMesEnArray(&$arr_os){
        if($this->getGralMesId() != 'null'){
            if(isset($arr_os[$this->getGralMesId()])){
                $o = $arr_os[$this->getGralMesId()];
            }else{
                $o = GralMes::getOxId($this->getGralMesId());
                if($o){
                    $arr_os[$this->getGralMesId()] = $o;
                }
            }
        }else{
            $o = new GralMes();
        }
        return $o;		
    }

	/* Metodo que retorna el CntbDiarioAsiento (Clave Foranea) */ 	
    public function getCntbDiarioAsiento(){
        $o = new CntbDiarioAsiento();
        $o->setId($this->getCntbDiarioAsientoId());
        return $o;			
    }

	/* Metodo que retorna el CntbDiarioAsiento (Clave Foranea) en Array */ 	
    public function getCntbDiarioAsientoEnArray(&$arr_os){
        if($this->getCntbDiarioAsientoId() != 'null'){
            if(isset($arr_os[$this->getCntbDiarioAsientoId()])){
                $o = $arr_os[$this->getCntbDiarioAsientoId()];
            }else{
                $o = CntbDiarioAsiento::getOxId($this->getCntbDiarioAsientoId());
                if($o){
                    $arr_os[$this->getCntbDiarioAsientoId()] = $o;
                }
            }
        }else{
            $o = new CntbDiarioAsiento();
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
            		
        if($contexto_solicitante != VtaFacturaTipoEstado::GEN_CLASE){
            if($this->getVtaFacturaTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaFacturaTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaFacturaTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoFactura::GEN_CLASE){
            if($this->getVtaTipoFactura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoFactura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoFactura()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoOrigenFactura::GEN_CLASE){
            if($this->getVtaTipoOrigenFactura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoOrigenFactura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoOrigenFactura()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != GralTipoPersoneria::GEN_CLASE){
            if($this->getGralTipoPersoneria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoPersoneria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoPersoneria()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaPuntoVenta::GEN_CLASE){
            if($this->getVtaPuntoVenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPuntoVenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPuntoVenta()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaPreventista::GEN_CLASE){
            if($this->getVtaPreventista()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPreventista::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPreventista()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaVendedor::GEN_CLASE){
            if($this->getVtaVendedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaVendedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaVendedor()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != GralTipoDocumento::GEN_CLASE){
            if($this->getGralTipoDocumento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoDocumento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoDocumento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPresupuesto::GEN_CLASE){
            if($this->getVtaPresupuesto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuesto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuesto()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralMes::GEN_CLASE){
            if($this->getGralMes()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralMes::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralMes()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CntbDiarioAsiento::GEN_CLASE){
            if($this->getCntbDiarioAsiento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CntbDiarioAsiento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCntbDiarioAsiento()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_factura'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_factura';");
            
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

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_factura_tipo_estado_id' */ 	
	static function getOxVtaFacturaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_factura_tipo_estado_id' */ 	
	static function getOsxVtaFacturaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_factura_id' */ 	
	static function getOxVtaTipoFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_factura_id' */ 	
	static function getOsxVtaTipoFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_origen_factura_id' */ 	
	static function getOxVtaTipoOrigenFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_origen_factura_id' */ 	
	static function getOsxVtaTipoOrigenFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOsxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_punto_venta_id' */ 	
	static function getOxVtaPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_punto_venta_id' */ 	
	static function getOsxVtaPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_cuota_id' */ 	
	static function getOxGralFpCuotaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_CUOTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_preventista_id' */ 	
	static function getOxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_comprador_id' */ 	
	static function getOxVtaCompradorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMPRADOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_vendedor_id' */ 	
	static function getOxVtaVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_actividad_id' */ 	
	static function getOxGralActividadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ACTIVIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_escenario_id' */ 	
	static function getOxGralEscenarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ESCENARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_sucursal' */ 	
	static function getOsxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_punto_venta' */ 	
	static function getOsxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_factura' */ 	
	static function getOxNumeroFactura($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_FACTURA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_factura' */ 	
	static function getOsxNumeroFactura($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_FACTURA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_factura_completo' */ 	
	static function getOxNumeroFacturaCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_FACTURA_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_factura_completo' */ 	
	static function getOsxNumeroFacturaCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_FACTURA_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cae' */ 	
	static function getOsxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_emision' */ 	
	static function getOsxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_vencimiento' */ 	
	static function getOxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_documento' */ 	
	static function getOxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_email' */ 	
	static function getOxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'razon_social' */ 	
	static function getOsxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'domicilio_legal' */ 	
	static function getOsxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuit' */ 	
	static function getOsxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOsxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nota_publica' */ 	
	static function getOsxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'anio' */ 	
	static function getOsxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_mes_id' */ 	
	static function getOsxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOsxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_centro_recepcion_id' */ 	
	static function getOxCliCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje' */ 	
	static function getOxPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_timbrado' */ 	
	static function getOxNumeroTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_timbrado' */ 	
	static function getOsxNumeroTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas(null, $criterio);
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

            $obs = self::getVtaFacturas($paginador, $criterio);
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

            $obs = self::getVtaFacturas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_factura_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_emision' */ 	
	public function getFechaEmisionDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaEmision(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaEmisionDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaEmisionDiferenciaDias();
        
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
                $c->addTabla(VtaFactura::GEN_TABLA);
                $c->addOrden(VtaFactura::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_facturas = VtaFactura::getVtaFacturas(null, $c);

                $arr = array();
                foreach($vta_facturas as $vta_factura){
                    $descripcion = $vta_factura->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>