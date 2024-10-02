<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaRecibo
{ 
	
	const SES_PAGINACION = 'adm_vtarecibo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtarecibo_paginas_registros';
	const SES_CRITERIOS = 'adm_vtarecibo_criterios';
	
	const GEN_CLASE = 'VtaRecibo';
	const GEN_TABLA = 'vta_recibo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaRecibo */ 
	const GEN_ATTR_ID = 'vta_recibo.id';
	const GEN_ATTR_DESCRIPCION = 'vta_recibo.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'vta_recibo.cli_cliente_id';
	const GEN_ATTR_VTA_TIPO_RECIBO_ID = 'vta_recibo.vta_tipo_recibo_id';
	const GEN_ATTR_VTA_TIPO_ORIGEN_RECIBO_ID = 'vta_recibo.vta_tipo_origen_recibo_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'vta_recibo.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'vta_recibo.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'vta_recibo.gral_empresa_id';
	const GEN_ATTR_VTA_PUNTO_VENTA_ID = 'vta_recibo.vta_punto_venta_id';
	const GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID = 'vta_recibo.vta_recibo_tipo_estado_id';
	const GEN_ATTR_VTA_RECIBO_CONDICION_PAGO_ID = 'vta_recibo.vta_recibo_condicion_pago_id';
	const GEN_ATTR_VTA_RECIBO_TIPO_PAGO_ID = 'vta_recibo.vta_recibo_tipo_pago_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'vta_recibo.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'vta_recibo.numero_punto_venta';
	const GEN_ATTR_NUMERO_RECIBO = 'vta_recibo.numero_recibo';
	const GEN_ATTR_NUMERO_RECIBO_COMPLETO = 'vta_recibo.numero_recibo_completo';
	const GEN_ATTR_CAE = 'vta_recibo.cae';
	const GEN_ATTR_FECHA_EMISION = 'vta_recibo.fecha_emision';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'vta_recibo.gral_tipo_documento_id';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'vta_recibo.persona_descripcion';
	const GEN_ATTR_PERSONA_DOCUMENTO = 'vta_recibo.persona_documento';
	const GEN_ATTR_PERSONA_EMAIL = 'vta_recibo.persona_email';
	const GEN_ATTR_RAZON_SOCIAL = 'vta_recibo.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'vta_recibo.domicilio_legal';
	const GEN_ATTR_CUIT = 'vta_recibo.cuit';
	const GEN_ATTR_CODIGO = 'vta_recibo.codigo';
	const GEN_ATTR_CODIGO_OP_CLIENTE = 'vta_recibo.codigo_op_cliente';
	const GEN_ATTR_VTA_PRESUPUESTO_ID = 'vta_recibo.vta_presupuesto_id';
	const GEN_ATTR_VTA_PREVENTISTA_ID = 'vta_recibo.vta_preventista_id';
	const GEN_ATTR_ANIO = 'vta_recibo.anio';
	const GEN_ATTR_GRAL_MES_ID = 'vta_recibo.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'vta_recibo.cntb_diario_asiento_id';
	const GEN_ATTR_FND_CAJA_ID = 'vta_recibo.fnd_caja_id';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'vta_recibo.gral_sucursal_id';
	const GEN_ATTR_OBSERVACION = 'vta_recibo.observacion';
	const GEN_ATTR_NOTA_INTERNA = 'vta_recibo.nota_interna';
	const GEN_ATTR_NOTA_PUBLICA = 'vta_recibo.nota_publica';
	const GEN_ATTR_ORDEN = 'vta_recibo.orden';
	const GEN_ATTR_ESTADO = 'vta_recibo.estado';
	const GEN_ATTR_CREADO = 'vta_recibo.creado';
	const GEN_ATTR_CREADO_POR = 'vta_recibo.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_recibo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_recibo.modificado_por';

	/* Constantes de Atributos Min de BVtaRecibo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_VTA_TIPO_RECIBO_ID = 'vta_tipo_recibo_id';
	const GEN_ATTR_MIN_VTA_TIPO_ORIGEN_RECIBO_ID = 'vta_tipo_origen_recibo_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID = 'vta_punto_venta_id';
	const GEN_ATTR_MIN_VTA_RECIBO_TIPO_ESTADO_ID = 'vta_recibo_tipo_estado_id';
	const GEN_ATTR_MIN_VTA_RECIBO_CONDICION_PAGO_ID = 'vta_recibo_condicion_pago_id';
	const GEN_ATTR_MIN_VTA_RECIBO_TIPO_PAGO_ID = 'vta_recibo_tipo_pago_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_RECIBO = 'numero_recibo';
	const GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO = 'numero_recibo_completo';
	const GEN_ATTR_MIN_CAE = 'cae';
	const GEN_ATTR_MIN_FECHA_EMISION = 'fecha_emision';
	const GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID = 'gral_tipo_documento_id';
	const GEN_ATTR_MIN_PERSONA_DESCRIPCION = 'persona_descripcion';
	const GEN_ATTR_MIN_PERSONA_DOCUMENTO = 'persona_documento';
	const GEN_ATTR_MIN_PERSONA_EMAIL = 'persona_email';
	const GEN_ATTR_MIN_RAZON_SOCIAL = 'razon_social';
	const GEN_ATTR_MIN_DOMICILIO_LEGAL = 'domicilio_legal';
	const GEN_ATTR_MIN_CUIT = 'cuit';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_OP_CLIENTE = 'codigo_op_cliente';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_ID = 'vta_presupuesto_id';
	const GEN_ATTR_MIN_VTA_PREVENTISTA_ID = 'vta_preventista_id';
	const GEN_ATTR_MIN_ANIO = 'anio';
	const GEN_ATTR_MIN_GRAL_MES_ID = 'gral_mes_id';
	const GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID = 'cntb_diario_asiento_id';
	const GEN_ATTR_MIN_FND_CAJA_ID = 'fnd_caja_id';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_NOTA_INTERNA = 'nota_interna';
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
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
	

	/* Atributos de BVtaRecibo */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $vta_tipo_recibo_id;
	private $vta_tipo_origen_recibo_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $vta_punto_venta_id;
	private $vta_recibo_tipo_estado_id;
	private $vta_recibo_condicion_pago_id;
	private $vta_recibo_tipo_pago_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_recibo;
	private $numero_recibo_completo;
	private $cae;
	private $fecha_emision;
	private $gral_tipo_documento_id;
	private $persona_descripcion;
	private $persona_documento;
	private $persona_email;
	private $razon_social;
	private $domicilio_legal;
	private $cuit;
	private $codigo;
	private $codigo_op_cliente;
	private $vta_presupuesto_id;
	private $vta_preventista_id;
	private $anio;
	private $gral_mes_id;
	private $cntb_diario_asiento_id;
	private $fnd_caja_id;
	private $gral_sucursal_id;
	private $observacion;
	private $nota_interna;
	private $nota_publica;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaRecibo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getVtaTipoReciboId(){ if(isset($this->vta_tipo_recibo_id)){ return $this->vta_tipo_recibo_id; }else{ return 'null'; } }
	public function getVtaTipoOrigenReciboId(){ if(isset($this->vta_tipo_origen_recibo_id)){ return $this->vta_tipo_origen_recibo_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getVtaPuntoVentaId(){ if(isset($this->vta_punto_venta_id)){ return $this->vta_punto_venta_id; }else{ return 'null'; } }
	public function getVtaReciboTipoEstadoId(){ if(isset($this->vta_recibo_tipo_estado_id)){ return $this->vta_recibo_tipo_estado_id; }else{ return 'null'; } }
	public function getVtaReciboCondicionPagoId(){ if(isset($this->vta_recibo_condicion_pago_id)){ return $this->vta_recibo_condicion_pago_id; }else{ return 'null'; } }
	public function getVtaReciboTipoPagoId(){ if(isset($this->vta_recibo_tipo_pago_id)){ return $this->vta_recibo_tipo_pago_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroRecibo(){ if(isset($this->numero_recibo)){ return $this->numero_recibo; }else{ return ''; } }
	public function getNumeroReciboCompleto(){ if(isset($this->numero_recibo_completo)){ return $this->numero_recibo_completo; }else{ return ''; } }
	public function getCae(){ if(isset($this->cae)){ return $this->cae; }else{ return ''; } }
	public function getFechaEmision(){ if(isset($this->fecha_emision)){ return $this->fecha_emision; }else{ return ''; } }
	public function getGralTipoDocumentoId(){ if(isset($this->gral_tipo_documento_id)){ return $this->gral_tipo_documento_id; }else{ return 'null'; } }
	public function getPersonaDescripcion(){ if(isset($this->persona_descripcion)){ return $this->persona_descripcion; }else{ return ''; } }
	public function getPersonaDocumento(){ if(isset($this->persona_documento)){ return $this->persona_documento; }else{ return ''; } }
	public function getPersonaEmail(){ if(isset($this->persona_email)){ return $this->persona_email; }else{ return ''; } }
	public function getRazonSocial(){ if(isset($this->razon_social)){ return $this->razon_social; }else{ return ''; } }
	public function getDomicilioLegal(){ if(isset($this->domicilio_legal)){ return $this->domicilio_legal; }else{ return ''; } }
	public function getCuit(){ if(isset($this->cuit)){ return $this->cuit; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoOpCliente(){ if(isset($this->codigo_op_cliente)){ return $this->codigo_op_cliente; }else{ return ''; } }
	public function getVtaPresupuestoId(){ if(isset($this->vta_presupuesto_id)){ return $this->vta_presupuesto_id; }else{ return 'null'; } }
	public function getVtaPreventistaId(){ if(isset($this->vta_preventista_id)){ return $this->vta_preventista_id; }else{ return 'null'; } }
	public function getAnio(){ if(isset($this->anio)){ return $this->anio; }else{ return 0; } }
	public function getGralMesId(){ if(isset($this->gral_mes_id)){ return $this->gral_mes_id; }else{ return 'null'; } }
	public function getCntbDiarioAsientoId(){ if(isset($this->cntb_diario_asiento_id)){ return $this->cntb_diario_asiento_id; }else{ return 'null'; } }
	public function getFndCajaId(){ if(isset($this->fnd_caja_id)){ return $this->fnd_caja_id; }else{ return 'null'; } }
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaRecibo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_VTA_TIPO_RECIBO_ID."
				, ".self::GEN_ATTR_VTA_TIPO_ORIGEN_RECIBO_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_VTA_PUNTO_VENTA_ID."
				, ".self::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_VTA_RECIBO_CONDICION_PAGO_ID."
				, ".self::GEN_ATTR_VTA_RECIBO_TIPO_PAGO_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_RECIBO."
				, ".self::GEN_ATTR_NUMERO_RECIBO_COMPLETO."
				, ".self::GEN_ATTR_CAE."
				, ".self::GEN_ATTR_FECHA_EMISION."
				, ".self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID."
				, ".self::GEN_ATTR_PERSONA_DESCRIPCION."
				, ".self::GEN_ATTR_PERSONA_DOCUMENTO."
				, ".self::GEN_ATTR_PERSONA_EMAIL."
				, ".self::GEN_ATTR_RAZON_SOCIAL."
				, ".self::GEN_ATTR_DOMICILIO_LEGAL."
				, ".self::GEN_ATTR_CUIT."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_OP_CLIENTE."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_ID."
				, ".self::GEN_ATTR_VTA_PREVENTISTA_ID."
				, ".self::GEN_ATTR_ANIO."
				, ".self::GEN_ATTR_GRAL_MES_ID."
				, ".self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID."
				, ".self::GEN_ATTR_FND_CAJA_ID."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_NOTA_INTERNA."
				, ".self::GEN_ATTR_NOTA_PUBLICA."
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
				$this->setVtaTipoReciboId($fila[self::GEN_ATTR_MIN_VTA_TIPO_RECIBO_ID]);
				$this->setVtaTipoOrigenReciboId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_RECIBO_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
				$this->setVtaReciboTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_ESTADO_ID]);
				$this->setVtaReciboCondicionPagoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_CONDICION_PAGO_ID]);
				$this->setVtaReciboTipoPagoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_PAGO_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroRecibo($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO]);
				$this->setNumeroReciboCompleto($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO]);
				$this->setCae($fila[self::GEN_ATTR_MIN_CAE]);
				$this->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
				$this->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
				$this->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
				$this->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
				$this->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
				$this->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
				$this->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
				$this->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoOpCliente($fila[self::GEN_ATTR_MIN_CODIGO_OP_CLIENTE]);
				$this->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
				$this->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
				$this->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
				$this->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
				$this->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
				$this->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
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
	public function setVtaTipoReciboId($v){ $this->vta_tipo_recibo_id = $v; }
	public function setVtaTipoOrigenReciboId($v){ $this->vta_tipo_origen_recibo_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setVtaPuntoVentaId($v){ $this->vta_punto_venta_id = $v; }
	public function setVtaReciboTipoEstadoId($v){ $this->vta_recibo_tipo_estado_id = $v; }
	public function setVtaReciboCondicionPagoId($v){ $this->vta_recibo_condicion_pago_id = $v; }
	public function setVtaReciboTipoPagoId($v){ $this->vta_recibo_tipo_pago_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroRecibo($v){ $this->numero_recibo = $v; }
	public function setNumeroReciboCompleto($v){ $this->numero_recibo_completo = $v; }
	public function setCae($v){ $this->cae = $v; }
	public function setFechaEmision($v){ $this->fecha_emision = $v; }
	public function setGralTipoDocumentoId($v){ $this->gral_tipo_documento_id = $v; }
	public function setPersonaDescripcion($v){ $this->persona_descripcion = $v; }
	public function setPersonaDocumento($v){ $this->persona_documento = $v; }
	public function setPersonaEmail($v){ $this->persona_email = $v; }
	public function setRazonSocial($v){ $this->razon_social = $v; }
	public function setDomicilioLegal($v){ $this->domicilio_legal = $v; }
	public function setCuit($v){ $this->cuit = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoOpCliente($v){ $this->codigo_op_cliente = $v; }
	public function setVtaPresupuestoId($v){ $this->vta_presupuesto_id = $v; }
	public function setVtaPreventistaId($v){ $this->vta_preventista_id = $v; }
	public function setAnio($v){ $this->anio = $v; }
	public function setGralMesId($v){ $this->gral_mes_id = $v; }
	public function setCntbDiarioAsientoId($v){ $this->cntb_diario_asiento_id = $v; }
	public function setFndCajaId($v){ $this->fnd_caja_id = $v; }
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaRecibo();
            $o->setId($fila[VtaRecibo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setVtaTipoReciboId($fila[self::GEN_ATTR_MIN_VTA_TIPO_RECIBO_ID]);
			$o->setVtaTipoOrigenReciboId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_RECIBO_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$o->setVtaReciboTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_ESTADO_ID]);
			$o->setVtaReciboCondicionPagoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_CONDICION_PAGO_ID]);
			$o->setVtaReciboTipoPagoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_PAGO_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroRecibo($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO]);
			$o->setNumeroReciboCompleto($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO]);
			$o->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$o->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$o->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$o->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$o->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$o->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$o->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$o->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$o->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoOpCliente($fila[self::GEN_ATTR_MIN_CODIGO_OP_CLIENTE]);
			$o->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$o->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$o->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$o->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$o->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$o->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaRecibo */ 	
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

	/* Cambia el estado de BVtaRecibo */ 	
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

	/* Save de BVtaRecibo */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_TIPO_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_CONDICION_PAGO_ID."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_PAGO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO."
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO."
						, ".self::GEN_ATTR_MIN_CAE."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_OP_CLIENTE."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_recibo_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaTipoReciboId()."
						, ".$this->getVtaTipoOrigenReciboId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaPuntoVentaId()."
						, ".$this->getVtaReciboTipoEstadoId()."
						, ".$this->getVtaReciboCondicionPagoId()."
						, ".$this->getVtaReciboTipoPagoId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroRecibo()."'
						, '".$this->getNumeroReciboCompleto()."'
						, '".$this->getCae()."'
						, '".$this->getFechaEmision()."'
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getPersonaDocumento()."'
						, '".$this->getPersonaEmail()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoOpCliente()."'
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getFndCajaId()."
						, ".$this->getGralSucursalId()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNotaPublica()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_recibo_seq')";
            
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
                 
				 ".VtaRecibo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_RECIBO_ID." = ".$this->getVtaTipoReciboId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_RECIBO_ID." = ".$this->getVtaTipoOrigenReciboId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_ESTADO_ID." = ".$this->getVtaReciboTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_CONDICION_PAGO_ID." = ".$this->getVtaReciboCondicionPagoId()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_PAGO_ID." = ".$this->getVtaReciboTipoPagoId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO." = '".$this->getNumeroRecibo()."'
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO." = '".$this->getNumeroReciboCompleto()."'
						, ".self::GEN_ATTR_MIN_CAE." = '".$this->getCae()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO." = '".$this->getPersonaDocumento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL." = '".$this->getPersonaEmail()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_OP_CLIENTE." = '".$this->getCodigoOpCliente()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
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
						, ".self::GEN_ATTR_MIN_VTA_TIPO_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_CONDICION_PAGO_ID."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_PAGO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO."
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO."
						, ".self::GEN_ATTR_MIN_CAE."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_OP_CLIENTE."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaTipoReciboId()."
						, ".$this->getVtaTipoOrigenReciboId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaPuntoVentaId()."
						, ".$this->getVtaReciboTipoEstadoId()."
						, ".$this->getVtaReciboCondicionPagoId()."
						, ".$this->getVtaReciboTipoPagoId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroRecibo()."'
						, '".$this->getNumeroReciboCompleto()."'
						, '".$this->getCae()."'
						, '".$this->getFechaEmision()."'
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getPersonaDocumento()."'
						, '".$this->getPersonaEmail()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoOpCliente()."'
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getFndCajaId()."
						, ".$this->getGralSucursalId()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNotaPublica()."'
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
                     
				 ".VtaRecibo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_RECIBO_ID." = ".$this->getVtaTipoReciboId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_RECIBO_ID." = ".$this->getVtaTipoOrigenReciboId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_ESTADO_ID." = ".$this->getVtaReciboTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_CONDICION_PAGO_ID." = ".$this->getVtaReciboCondicionPagoId()."
						, ".self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_PAGO_ID." = ".$this->getVtaReciboTipoPagoId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO." = '".$this->getNumeroRecibo()."'
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO." = '".$this->getNumeroReciboCompleto()."'
						, ".self::GEN_ATTR_MIN_CAE." = '".$this->getCae()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DOCUMENTO." = '".$this->getPersonaDocumento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_EMAIL." = '".$this->getPersonaEmail()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_OP_CLIENTE." = '".$this->getCodigoOpCliente()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
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
            $o = new VtaRecibo();
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

	/* Delete de BVtaRecibo */ 	
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
	
            // se elimina la coleccion de VtaNotaDebitoVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboArchivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboArchivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboArchivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboItemCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboItemCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboItemCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboItemRetencions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboItemRetencion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboItemRetencions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaReciboVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaReciboVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaReciboVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndChqCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaRecibo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaRecibo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtarecibos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtarecibo = new VtaRecibo();
                    $vtarecibo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtarecibo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtarecibo->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$vtarecibo->setVtaTipoReciboId($fila[self::GEN_ATTR_MIN_VTA_TIPO_RECIBO_ID]);
			$vtarecibo->setVtaTipoOrigenReciboId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_RECIBO_ID]);
			$vtarecibo->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$vtarecibo->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$vtarecibo->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$vtarecibo->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$vtarecibo->setVtaReciboTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_ESTADO_ID]);
			$vtarecibo->setVtaReciboCondicionPagoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_CONDICION_PAGO_ID]);
			$vtarecibo->setVtaReciboTipoPagoId($fila[self::GEN_ATTR_MIN_VTA_RECIBO_TIPO_PAGO_ID]);
			$vtarecibo->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$vtarecibo->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$vtarecibo->setNumeroRecibo($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO]);
			$vtarecibo->setNumeroReciboCompleto($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO]);
			$vtarecibo->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$vtarecibo->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$vtarecibo->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$vtarecibo->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$vtarecibo->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$vtarecibo->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$vtarecibo->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$vtarecibo->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$vtarecibo->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$vtarecibo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtarecibo->setCodigoOpCliente($fila[self::GEN_ATTR_MIN_CODIGO_OP_CLIENTE]);
			$vtarecibo->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$vtarecibo->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$vtarecibo->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$vtarecibo->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$vtarecibo->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$vtarecibo->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
			$vtarecibo->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$vtarecibo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtarecibo->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$vtarecibo->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$vtarecibo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtarecibo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtarecibo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtarecibo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtarecibo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtarecibo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtarecibos[] = $vtarecibo;
		}
		
		return $vtarecibos;
	}	
	

	/* Método getVtaRecibos Habilitados */ 	
	static function getVtaRecibosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaRecibo::getVtaRecibos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaRecibos para listado de Backend */ 	
	static function getVtaRecibosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaRecibo::getVtaRecibos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaRecibosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaRecibo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaRecibo::getVtaRecibos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaRecibos filtrado para select */ 	
	static function getVtaRecibosCmbF($paginador = null, $criterio = null){
            $col = VtaRecibo::getVtaRecibos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getVtaRecibosXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de VtaTipoRecibo */ 	
	static function getVtaRecibosXVtaTipoRecibos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_TIPO_RECIBO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoReciboId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de VtaTipoOrigenRecibo */ 	
	static function getVtaRecibosXVtaTipoOrigenRecibos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_TIPO_ORIGEN_RECIBO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoOrigenReciboId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getVtaRecibosXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getVtaRecibosXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getVtaRecibosXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de VtaPuntoVenta */ 	
	static function getVtaRecibosXVtaPuntoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_PUNTO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPuntoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de VtaReciboTipoEstado */ 	
	static function getVtaRecibosXVtaReciboTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaReciboTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de VtaReciboCondicionPago */ 	
	static function getVtaRecibosXVtaReciboCondicionPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_RECIBO_CONDICION_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaReciboCondicionPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de VtaReciboTipoPago */ 	
	static function getVtaRecibosXVtaReciboTipoPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaReciboTipoPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getVtaRecibosXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de VtaPresupuesto */ 	
	static function getVtaRecibosXVtaPresupuestos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_PRESUPUESTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de VtaPreventista */ 	
	static function getVtaRecibosXVtaPreventistas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_VTA_PREVENTISTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPreventistaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getVtaRecibosXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getVtaRecibosXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de FndCaja */ 	
	static function getVtaRecibosXFndCajas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_FND_CAJA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaRecibos filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getVtaRecibosXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaRecibo::getVtaRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_recibo_adm.php';
            $url_gestion = 'vta_recibo_gestion.php';
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
	

	/* Metodo getVtaNotaDebitoVtaRecibos */ 	
	public function getVtaNotaDebitoVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoVtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoVtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoVtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoVtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoVtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitovtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitovtarecibo = VtaNotaDebitoVtaRecibo::hidratarObjeto($fila);			
                $vtanotadebitovtarecibos[] = $vtanotadebitovtarecibo;
            }

            return $vtanotadebitovtarecibos;
	}	
	

	/* Método getVtaNotaDebitoVtaRecibosBloque para MasInfo */ 	
	public function getVtaNotaDebitoVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaRecibos Habilitados */ 	
	public function getVtaNotaDebitoVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaRecibo */ 	
	public function getVtaNotaDebitoVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoVtaRecibo relacionadas */ 	
	public function deleteVtaNotaDebitoVtaRecibos(){
            $obs = $this->getVtaNotaDebitoVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoVtaRecibosCmb() VtaNotaDebitoVtaRecibo relacionadas */ 	
	public function getVtaNotaDebitoVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoVtaRecibo::getVtaNotaDebitoVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaDebitos (Coleccion) relacionados a traves de VtaNotaDebitoVtaRecibo */ 	
	public function getVtaNotaDebitosXVtaNotaDebitoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaRecibo::GEN_TABLA, VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaDebitos relacionados a traves de VtaNotaDebitoVtaRecibo */ 	
	public function getCantidadVtaNotaDebitosXVtaNotaDebitoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaRecibo::GEN_TABLA, VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaDebito (Objeto) relacionado a traves de VtaNotaDebitoVtaRecibo */ 	
	public function getVtaNotaDebitoXVtaNotaDebitoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaDebitosXVtaNotaDebitoVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboImportes */ 	
	public function getVtaReciboImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboImporte::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboimporte = VtaReciboImporte::hidratarObjeto($fila);			
                $vtareciboimportes[] = $vtareciboimporte;
            }

            return $vtareciboimportes;
	}	
	

	/* Método getVtaReciboImportesBloque para MasInfo */ 	
	public function getVtaReciboImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboImportes Habilitados */ 	
	public function getVtaReciboImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboImporte */ 	
	public function getVtaReciboImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboImporte relacionadas */ 	
	public function deleteVtaReciboImportes(){
            $obs = $this->getVtaReciboImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboImportesCmb() VtaReciboImporte relacionadas */ 	
	public function getVtaReciboImportesCmb(){
            $c = new Criterio();
            $c->add(VtaReciboImporte::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboImporte::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboImporte::getVtaReciboImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaReciboImagens */ 	
	public function getVtaReciboImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboImagen::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboimagen = VtaReciboImagen::hidratarObjeto($fila);			
                $vtareciboimagens[] = $vtareciboimagen;
            }

            return $vtareciboimagens;
	}	
	

	/* Método getVtaReciboImagensBloque para MasInfo */ 	
	public function getVtaReciboImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboImagens Habilitados */ 	
	public function getVtaReciboImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboImagen */ 	
	public function getVtaReciboImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboImagen relacionadas */ 	
	public function deleteVtaReciboImagens(){
            $obs = $this->getVtaReciboImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboImagensCmb() VtaReciboImagen relacionadas */ 	
	public function getVtaReciboImagensCmb(){
            $c = new Criterio();
            $c->add(VtaReciboImagen::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboImagen::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboImagen::getVtaReciboImagensCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaReciboArchivos */ 	
	public function getVtaReciboArchivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboArchivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboArchivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboArchivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboArchivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboArchivo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboArchivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboArchivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboarchivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboarchivo = VtaReciboArchivo::hidratarObjeto($fila);			
                $vtareciboarchivos[] = $vtareciboarchivo;
            }

            return $vtareciboarchivos;
	}	
	

	/* Método getVtaReciboArchivosBloque para MasInfo */ 	
	public function getVtaReciboArchivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboArchivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboArchivos Habilitados */ 	
	public function getVtaReciboArchivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboArchivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboArchivo */ 	
	public function getVtaReciboArchivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboArchivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboArchivo relacionadas */ 	
	public function deleteVtaReciboArchivos(){
            $obs = $this->getVtaReciboArchivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboArchivosCmb() VtaReciboArchivo relacionadas */ 	
	public function getVtaReciboArchivosCmb(){
            $c = new Criterio();
            $c->add(VtaReciboArchivo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboArchivo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboArchivo::getVtaReciboArchivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaReciboEstados */ 	
	public function getVtaReciboEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboEstado::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboestado = VtaReciboEstado::hidratarObjeto($fila);			
                $vtareciboestados[] = $vtareciboestado;
            }

            return $vtareciboestados;
	}	
	

	/* Método getVtaReciboEstadosBloque para MasInfo */ 	
	public function getVtaReciboEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboEstados Habilitados */ 	
	public function getVtaReciboEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboEstado */ 	
	public function getVtaReciboEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboEstado relacionadas */ 	
	public function deleteVtaReciboEstados(){
            $obs = $this->getVtaReciboEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboEstadosCmb() VtaReciboEstado relacionadas */ 	
	public function getVtaReciboEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaReciboEstado::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboEstado::getVtaReciboEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaReciboTipoEstados (Coleccion) relacionados a traves de VtaReciboEstado */ 	
	public function getVtaReciboTipoEstadosXVtaReciboEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaReciboTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboEstado::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaReciboEstado::GEN_TABLA, VtaReciboEstado::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, VtaReciboTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaReciboTipoEstado::getVtaReciboTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaReciboTipoEstados relacionados a traves de VtaReciboEstado */ 	
	public function getCantidadVtaReciboTipoEstadosXVtaReciboEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaReciboTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaReciboTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboEstado::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaReciboEstado::GEN_TABLA, VtaReciboEstado::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, VtaReciboTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaReciboTipoEstado::getVtaReciboTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaReciboTipoEstado (Objeto) relacionado a traves de VtaReciboEstado */ 	
	public function getVtaReciboTipoEstadoXVtaReciboEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaReciboTipoEstadosXVtaReciboEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboEnviados */ 	
	public function getVtaReciboEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboEnviado::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboenviado = VtaReciboEnviado::hidratarObjeto($fila);			
                $vtareciboenviados[] = $vtareciboenviado;
            }

            return $vtareciboenviados;
	}	
	

	/* Método getVtaReciboEnviadosBloque para MasInfo */ 	
	public function getVtaReciboEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboEnviados Habilitados */ 	
	public function getVtaReciboEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboEnviado */ 	
	public function getVtaReciboEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboEnviado relacionadas */ 	
	public function deleteVtaReciboEnviados(){
            $obs = $this->getVtaReciboEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboEnviadosCmb() VtaReciboEnviado relacionadas */ 	
	public function getVtaReciboEnviadosCmb(){
            $c = new Criterio();
            $c->add(VtaReciboEnviado::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboEnviado::getVtaReciboEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaReciboItems */ 	
	public function getVtaReciboItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboitem = VtaReciboItem::hidratarObjeto($fila);			
                $vtareciboitems[] = $vtareciboitem;
            }

            return $vtareciboitems;
	}	
	

	/* Método getVtaReciboItemsBloque para MasInfo */ 	
	public function getVtaReciboItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboItems Habilitados */ 	
	public function getVtaReciboItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboItem */ 	
	public function getVtaReciboItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboItem relacionadas */ 	
	public function deleteVtaReciboItems(){
            $obs = $this->getVtaReciboItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboItemsCmb() VtaReciboItem relacionadas */ 	
	public function getVtaReciboItemsCmb(){
            $c = new Criterio();
            $c->add(VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboItem::getVtaReciboItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpFormaPagos (Coleccion) relacionados a traves de VtaReciboItem */ 	
	public function getGralFpFormaPagosXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaReciboItem::GEN_TABLA, VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpFormaPagos relacionados a traves de VtaReciboItem */ 	
	public function getCantidadGralFpFormaPagosXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaReciboItem::GEN_TABLA, VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpFormaPago (Objeto) relacionado a traves de VtaReciboItem */ 	
	public function getGralFpFormaPagoXVtaReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpFormaPagosXVtaReciboItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboItemCheques */ 	
	public function getVtaReciboItemCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboItemCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboItemCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboItemCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboItemCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboItemCheque::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboItemCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboItemCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboitemcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboitemcheque = VtaReciboItemCheque::hidratarObjeto($fila);			
                $vtareciboitemcheques[] = $vtareciboitemcheque;
            }

            return $vtareciboitemcheques;
	}	
	

	/* Método getVtaReciboItemChequesBloque para MasInfo */ 	
	public function getVtaReciboItemChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboItemCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboItemCheques Habilitados */ 	
	public function getVtaReciboItemChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboItemCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboItemCheque */ 	
	public function getVtaReciboItemCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboItemCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboItemCheque relacionadas */ 	
	public function deleteVtaReciboItemCheques(){
            $obs = $this->getVtaReciboItemCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboItemChequesCmb() VtaReciboItemCheque relacionadas */ 	
	public function getVtaReciboItemChequesCmb(){
            $c = new Criterio();
            $c->add(VtaReciboItemCheque::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItemCheque::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboItemCheque::getVtaReciboItemChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaReciboItems (Coleccion) relacionados a traves de VtaReciboItemCheque */ 	
	public function getVtaReciboItemsXVtaReciboItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItemCheque::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->addRealJoin(VtaReciboItemCheque::GEN_TABLA, VtaReciboItemCheque::GEN_ATTR_VTA_RECIBO_ITEM_ID, VtaReciboItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaReciboItem::getVtaReciboItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaReciboItems relacionados a traves de VtaReciboItemCheque */ 	
	public function getCantidadVtaReciboItemsXVtaReciboItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaReciboItem::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItemCheque::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->addRealJoin(VtaReciboItemCheque::GEN_TABLA, VtaReciboItemCheque::GEN_ATTR_VTA_RECIBO_ITEM_ID, VtaReciboItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaReciboItem::getVtaReciboItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaReciboItem (Objeto) relacionado a traves de VtaReciboItemCheque */ 	
	public function getVtaReciboItemXVtaReciboItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaReciboItemsXVtaReciboItemCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboItemRetencions */ 	
	public function getVtaReciboItemRetencions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboItemRetencion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboItemRetencion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboItemRetencion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboItemRetencion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboItemRetencion::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboItemRetencion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboItemRetencion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtareciboitemretencions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtareciboitemretencion = VtaReciboItemRetencion::hidratarObjeto($fila);			
                $vtareciboitemretencions[] = $vtareciboitemretencion;
            }

            return $vtareciboitemretencions;
	}	
	

	/* Método getVtaReciboItemRetencionsBloque para MasInfo */ 	
	public function getVtaReciboItemRetencionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboItemRetencions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboItemRetencions Habilitados */ 	
	public function getVtaReciboItemRetencionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboItemRetencions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboItemRetencion */ 	
	public function getVtaReciboItemRetencion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboItemRetencions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboItemRetencion relacionadas */ 	
	public function deleteVtaReciboItemRetencions(){
            $obs = $this->getVtaReciboItemRetencions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboItemRetencionsCmb() VtaReciboItemRetencion relacionadas */ 	
	public function getVtaReciboItemRetencionsCmb(){
            $c = new Criterio();
            $c->add(VtaReciboItemRetencion::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItemRetencion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboItemRetencion::getVtaReciboItemRetencionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaReciboItems (Coleccion) relacionados a traves de VtaReciboItemRetencion */ 	
	public function getVtaReciboItemsXVtaReciboItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItemRetencion::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->addRealJoin(VtaReciboItemRetencion::GEN_TABLA, VtaReciboItemRetencion::GEN_ATTR_VTA_RECIBO_ITEM_ID, VtaReciboItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaReciboItem::getVtaReciboItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaReciboItems relacionados a traves de VtaReciboItemRetencion */ 	
	public function getCantidadVtaReciboItemsXVtaReciboItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaReciboItem::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboItemRetencion::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboItem::GEN_TABLA);
            $c->addRealJoin(VtaReciboItemRetencion::GEN_TABLA, VtaReciboItemRetencion::GEN_ATTR_VTA_RECIBO_ITEM_ID, VtaReciboItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaReciboItem::getVtaReciboItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaReciboItem (Objeto) relacionado a traves de VtaReciboItemRetencion */ 	
	public function getVtaReciboItemXVtaReciboItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaReciboItemsXVtaReciboItemRetencion($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboWsFeOpeSolicitud::getVtaReciboWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeOpeSolicituds (Coleccion) relacionados a traves de VtaReciboWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudsXVtaReciboWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaReciboWsFeOpeSolicitud::GEN_TABLA, VtaReciboWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeOpeSolicituds relacionados a traves de VtaReciboWsFeOpeSolicitud */ 	
	public function getCantidadWsFeOpeSolicitudsXVtaReciboWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeOpeSolicitud::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboWsFeOpeSolicitud::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaReciboWsFeOpeSolicitud::GEN_TABLA, VtaReciboWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeOpeSolicitud (Objeto) relacionado a traves de VtaReciboWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudXVtaReciboWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeOpeSolicitudsXVtaReciboWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaReciboVtaTributos */ 	
	public function getVtaReciboVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaReciboVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaReciboVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaReciboVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaReciboVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaReciboVtaTributo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaReciboVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaReciboVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaReciboVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtarecibovtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtarecibovtatributo = VtaReciboVtaTributo::hidratarObjeto($fila);			
                $vtarecibovtatributos[] = $vtarecibovtatributo;
            }

            return $vtarecibovtatributos;
	}	
	

	/* Método getVtaReciboVtaTributosBloque para MasInfo */ 	
	public function getVtaReciboVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaReciboVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaReciboVtaTributos Habilitados */ 	
	public function getVtaReciboVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaReciboVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaReciboVtaTributo */ 	
	public function getVtaReciboVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaReciboVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaReciboVtaTributo relacionadas */ 	
	public function deleteVtaReciboVtaTributos(){
            $obs = $this->getVtaReciboVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaReciboVtaTributosCmb() VtaReciboVtaTributo relacionadas */ 	
	public function getVtaReciboVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaReciboVtaTributo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaReciboVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaReciboVtaTributo::getVtaReciboVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTributos (Coleccion) relacionados a traves de VtaReciboVtaTributo */ 	
	public function getVtaTributosXVtaReciboVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboVtaTributo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaReciboVtaTributo::GEN_TABLA, VtaReciboVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTributos relacionados a traves de VtaReciboVtaTributo */ 	
	public function getCantidadVtaTributosXVtaReciboVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaReciboVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaReciboVtaTributo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaReciboVtaTributo::GEN_TABLA, VtaReciboVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTributo (Objeto) relacionado a traves de VtaReciboVtaTributo */ 	
	public function getVtaTributoXVtaReciboVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTributosXVtaReciboVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentaVtaRecibos */ 	
	public function getVtaOrdenVentaVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaVtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaVtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaVtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaVtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaVtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventavtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventavtarecibo = VtaOrdenVentaVtaRecibo::hidratarObjeto($fila);			
                $vtaordenventavtarecibos[] = $vtaordenventavtarecibo;
            }

            return $vtaordenventavtarecibos;
	}	
	

	/* Método getVtaOrdenVentaVtaRecibosBloque para MasInfo */ 	
	public function getVtaOrdenVentaVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaVtaRecibos Habilitados */ 	
	public function getVtaOrdenVentaVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaVtaRecibo */ 	
	public function getVtaOrdenVentaVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaVtaRecibo relacionadas */ 	
	public function deleteVtaOrdenVentaVtaRecibos(){
            $obs = $this->getVtaOrdenVentaVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaVtaRecibosCmb() VtaOrdenVentaVtaRecibo relacionadas */ 	
	public function getVtaOrdenVentaVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaVtaRecibo::getVtaOrdenVentaVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentas (Coleccion) relacionados a traves de VtaOrdenVentaVtaRecibo */ 	
	public function getVtaOrdenVentasXVtaOrdenVentaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaRecibo::GEN_TABLA, VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentas relacionados a traves de VtaOrdenVentaVtaRecibo */ 	
	public function getCantidadVtaOrdenVentasXVtaOrdenVentaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaRecibo::GEN_TABLA, VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVenta (Objeto) relacionado a traves de VtaOrdenVentaVtaRecibo */ 	
	public function getVtaOrdenVentaXVtaOrdenVentaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentasXVtaOrdenVentaVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaFacturaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFacturaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaRecibo::getVtaFacturaVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaVtaRecibo */ 	
	public function getVtaFacturasXVtaFacturaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaRecibo::GEN_TABLA, VtaFacturaVtaRecibo::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaVtaRecibo */ 	
	public function getCantidadVtaFacturasXVtaFacturaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaRecibo::GEN_TABLA, VtaFacturaVtaRecibo::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaVtaRecibo */ 	
	public function getVtaFacturaXVtaFacturaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaRecibos */ 	
	public function getCntbDiarioAsientoVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtarecibo = CntbDiarioAsientoVtaRecibo::hidratarObjeto($fila);			
                $cntbdiarioasientovtarecibos[] = $cntbdiarioasientovtarecibo;
            }

            return $cntbdiarioasientovtarecibos;
	}	
	

	/* Método getCntbDiarioAsientoVtaRecibosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaRecibos Habilitados */ 	
	public function getCntbDiarioAsientoVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaRecibo */ 	
	public function getCntbDiarioAsientoVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaRecibo relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaRecibos(){
            $obs = $this->getCntbDiarioAsientoVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaRecibosCmb() CntbDiarioAsientoVtaRecibo relacionadas */ 	
	public function getCntbDiarioAsientoVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaRecibo::getCntbDiarioAsientoVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaRecibo */ 	
	public function getCntbPeriodosXCntbDiarioAsientoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaRecibo::GEN_TABLA, CntbDiarioAsientoVtaRecibo::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoVtaRecibo */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaRecibo::GEN_TABLA, CntbDiarioAsientoVtaRecibo::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoVtaRecibo */ 	
	public function getCntbPeriodoXCntbDiarioAsientoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndChqCheques */ 	
	public function getFndChqCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndChqCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndChqCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(FndChqCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndChqCheque::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndChqCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndChqCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndchqcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndchqcheque = FndChqCheque::hidratarObjeto($fila);			
                $fndchqcheques[] = $fndchqcheque;
            }

            return $fndchqcheques;
	}	
	

	/* Método getFndChqChequesBloque para MasInfo */ 	
	public function getFndChqChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndChqCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndChqCheques Habilitados */ 	
	public function getFndChqChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndChqCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndChqCheque */ 	
	public function getFndChqCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndChqCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndChqCheque relacionadas */ 	
	public function deleteFndChqCheques(){
            $obs = $this->getFndChqCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndChqChequesCmb() FndChqCheque relacionadas */ 	
	public function getFndChqChequesCmb(){
            $c = new Criterio();
            $c->add(FndChqCheque::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();

            $os = FndChqCheque::getFndChqChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndChqChequeras (Coleccion) relacionados a traves de FndChqCheque */ 	
	public function getFndChqChequerasXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndChqChequera::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqCheque::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqChequera::GEN_TABLA);
            $c->addRealJoin(FndChqCheque::GEN_TABLA, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, FndChqChequera::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqChequera::getFndChqChequeras($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndChqChequeras relacionados a traves de FndChqCheque */ 	
	public function getCantidadFndChqChequerasXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndChqChequera::GEN_ATTR_ID);
            if($estado){
                $c->add(FndChqChequera::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndChqCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndChqCheque::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndChqChequera::GEN_TABLA);
            $c->addRealJoin(FndChqCheque::GEN_TABLA, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, FndChqChequera::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndChqChequera::getFndChqChequeras($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndChqChequera (Objeto) relacionado a traves de FndChqCheque */ 	
	public function getFndChqChequeraXFndChqCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndChqChequerasXFndChqCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeVtaRecibos */ 	
	public function getVtaAjusteDebeVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeVtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeVtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeVtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeVtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeVtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebevtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebevtarecibo = VtaAjusteDebeVtaRecibo::hidratarObjeto($fila);			
                $vtaajustedebevtarecibos[] = $vtaajustedebevtarecibo;
            }

            return $vtaajustedebevtarecibos;
	}	
	

	/* Método getVtaAjusteDebeVtaRecibosBloque para MasInfo */ 	
	public function getVtaAjusteDebeVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaRecibos Habilitados */ 	
	public function getVtaAjusteDebeVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaRecibo */ 	
	public function getVtaAjusteDebeVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeVtaRecibo relacionadas */ 	
	public function deleteVtaAjusteDebeVtaRecibos(){
            $obs = $this->getVtaAjusteDebeVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeVtaRecibosCmb() VtaAjusteDebeVtaRecibo relacionadas */ 	
	public function getVtaAjusteDebeVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaRecibo::getVtaAjusteDebeVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeVtaRecibo */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaRecibo::GEN_TABLA, VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeVtaRecibo */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaRecibo::GEN_TABLA, VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeVtaRecibo */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los WsFeOpeSolicituds asignados a VtaRecibo */ 	
	public function getVtaReciboWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaReciboWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getWsFeOpeSolicitudId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeOpeSolicituds asignados al VtaRecibo */ 	
	public function setVtaReciboWsFeOpeSolicituds($ids){
            $this->deleteVtaReciboWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaReciboWsFeOpeSolicitud();
                    $o->setWsFeOpeSolicitudId($id);
                    $o->setVtaReciboId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeOpeSolicitud en el alta de VtaRecibo */ 	
	public function getAltaMostrarBloqueRelacionVtaReciboWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTributos asignados a VtaRecibo */ 	
	public function getVtaReciboVtaTributosId(){
            $ids = array();
            foreach($this->getVtaReciboVtaTributos() as $o){
            
                $ids[] = $o->getVtaTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTributos asignados al VtaRecibo */ 	
	public function setVtaReciboVtaTributos($ids){
            $this->deleteVtaReciboVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaReciboVtaTributo();
                    $o->setVtaTributoId($id);
                    $o->setVtaReciboId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTributo en el alta de VtaRecibo */ 	
	public function getAltaMostrarBloqueRelacionVtaReciboVtaTributo(){
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

	/* Metodo que retorna el VtaTipoRecibo (Clave Foranea) */ 	
    public function getVtaTipoRecibo(){
        $o = new VtaTipoRecibo();
        $o->setId($this->getVtaTipoReciboId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoRecibo (Clave Foranea) en Array */ 	
    public function getVtaTipoReciboEnArray(&$arr_os){
        if($this->getVtaTipoReciboId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoReciboId()])){
                $o = $arr_os[$this->getVtaTipoReciboId()];
            }else{
                $o = VtaTipoRecibo::getOxId($this->getVtaTipoReciboId());
                if($o){
                    $arr_os[$this->getVtaTipoReciboId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoRecibo();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoOrigenRecibo (Clave Foranea) */ 	
    public function getVtaTipoOrigenRecibo(){
        $o = new VtaTipoOrigenRecibo();
        $o->setId($this->getVtaTipoOrigenReciboId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoOrigenRecibo (Clave Foranea) en Array */ 	
    public function getVtaTipoOrigenReciboEnArray(&$arr_os){
        if($this->getVtaTipoOrigenReciboId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoOrigenReciboId()])){
                $o = $arr_os[$this->getVtaTipoOrigenReciboId()];
            }else{
                $o = VtaTipoOrigenRecibo::getOxId($this->getVtaTipoOrigenReciboId());
                if($o){
                    $arr_os[$this->getVtaTipoOrigenReciboId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoOrigenRecibo();
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

	/* Metodo que retorna el VtaReciboTipoEstado (Clave Foranea) */ 	
    public function getVtaReciboTipoEstado(){
        $o = new VtaReciboTipoEstado();
        $o->setId($this->getVtaReciboTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaReciboTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaReciboTipoEstadoEnArray(&$arr_os){
        if($this->getVtaReciboTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaReciboTipoEstadoId()])){
                $o = $arr_os[$this->getVtaReciboTipoEstadoId()];
            }else{
                $o = VtaReciboTipoEstado::getOxId($this->getVtaReciboTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaReciboTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaReciboTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaReciboCondicionPago (Clave Foranea) */ 	
    public function getVtaReciboCondicionPago(){
        $o = new VtaReciboCondicionPago();
        $o->setId($this->getVtaReciboCondicionPagoId());
        return $o;			
    }

	/* Metodo que retorna el VtaReciboCondicionPago (Clave Foranea) en Array */ 	
    public function getVtaReciboCondicionPagoEnArray(&$arr_os){
        if($this->getVtaReciboCondicionPagoId() != 'null'){
            if(isset($arr_os[$this->getVtaReciboCondicionPagoId()])){
                $o = $arr_os[$this->getVtaReciboCondicionPagoId()];
            }else{
                $o = VtaReciboCondicionPago::getOxId($this->getVtaReciboCondicionPagoId());
                if($o){
                    $arr_os[$this->getVtaReciboCondicionPagoId()] = $o;
                }
            }
        }else{
            $o = new VtaReciboCondicionPago();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaReciboTipoPago (Clave Foranea) */ 	
    public function getVtaReciboTipoPago(){
        $o = new VtaReciboTipoPago();
        $o->setId($this->getVtaReciboTipoPagoId());
        return $o;			
    }

	/* Metodo que retorna el VtaReciboTipoPago (Clave Foranea) en Array */ 	
    public function getVtaReciboTipoPagoEnArray(&$arr_os){
        if($this->getVtaReciboTipoPagoId() != 'null'){
            if(isset($arr_os[$this->getVtaReciboTipoPagoId()])){
                $o = $arr_os[$this->getVtaReciboTipoPagoId()];
            }else{
                $o = VtaReciboTipoPago::getOxId($this->getVtaReciboTipoPagoId());
                if($o){
                    $arr_os[$this->getVtaReciboTipoPagoId()] = $o;
                }
            }
        }else{
            $o = new VtaReciboTipoPago();
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

	/* Metodo que retorna el FndCaja (Clave Foranea) */ 	
    public function getFndCaja(){
        $o = new FndCaja();
        $o->setId($this->getFndCajaId());
        return $o;			
    }

	/* Metodo que retorna el FndCaja (Clave Foranea) en Array */ 	
    public function getFndCajaEnArray(&$arr_os){
        if($this->getFndCajaId() != 'null'){
            if(isset($arr_os[$this->getFndCajaId()])){
                $o = $arr_os[$this->getFndCajaId()];
            }else{
                $o = FndCaja::getOxId($this->getFndCajaId());
                if($o){
                    $arr_os[$this->getFndCajaId()] = $o;
                }
            }
        }else{
            $o = new FndCaja();
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
            		
        if($contexto_solicitante != VtaTipoRecibo::GEN_CLASE){
            if($this->getVtaTipoRecibo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoRecibo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoRecibo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoOrigenRecibo::GEN_CLASE){
            if($this->getVtaTipoOrigenRecibo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoOrigenRecibo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoOrigenRecibo()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaReciboTipoEstado::GEN_CLASE){
            if($this->getVtaReciboTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaReciboTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaReciboTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaReciboCondicionPago::GEN_CLASE){
            if($this->getVtaReciboCondicionPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaReciboCondicionPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaReciboCondicionPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaReciboTipoPago::GEN_CLASE){
            if($this->getVtaReciboTipoPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaReciboTipoPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaReciboTipoPago()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaPreventista::GEN_CLASE){
            if($this->getVtaPreventista()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPreventista::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPreventista()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != FndCaja::GEN_CLASE){
            if($this->getFndCaja()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(FndCaja::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getFndCaja()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_recibo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_recibo';");
            
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

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_recibo_id' */ 	
	static function getOxVtaTipoReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_recibo_id' */ 	
	static function getOsxVtaTipoReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_origen_recibo_id' */ 	
	static function getOxVtaTipoOrigenReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_origen_recibo_id' */ 	
	static function getOsxVtaTipoOrigenReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_punto_venta_id' */ 	
	static function getOxVtaPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_recibo_tipo_estado_id' */ 	
	static function getOxVtaReciboTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_recibo_tipo_estado_id' */ 	
	static function getOsxVtaReciboTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_recibo_condicion_pago_id' */ 	
	static function getOxVtaReciboCondicionPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_CONDICION_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_recibo_condicion_pago_id' */ 	
	static function getOsxVtaReciboCondicionPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_CONDICION_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_recibo_tipo_pago_id' */ 	
	static function getOxVtaReciboTipoPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_TIPO_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_recibo_tipo_pago_id' */ 	
	static function getOsxVtaReciboTipoPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_RECIBO_TIPO_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_recibo' */ 	
	static function getOxNumeroRecibo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_RECIBO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_recibo' */ 	
	static function getOsxNumeroRecibo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_RECIBO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_recibo_completo' */ 	
	static function getOxNumeroReciboCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_RECIBO_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_recibo_completo' */ 	
	static function getOsxNumeroReciboCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_RECIBO_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_documento' */ 	
	static function getOxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_email' */ 	
	static function getOxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_op_cliente' */ 	
	static function getOxCodigoOpCliente($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_OP_CLIENTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_op_cliente' */ 	
	static function getOsxCodigoOpCliente($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_OP_CLIENTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_preventista_id' */ 	
	static function getOxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_id' */ 	
	static function getOxFndCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fnd_caja_id' */ 	
	static function getOsxFndCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos(null, $criterio);
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

            $obs = self::getVtaRecibos($paginador, $criterio);
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

            $obs = self::getVtaRecibos($paginador, $criterio);
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
            $c->addTabla(VtaReciboImagen::GEN_TABLA);
            $c->addOrden(VtaReciboImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getVtaReciboImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getVtaReciboImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(VtaReciboImagen::GEN_TABLA);
            $c->addOrden(VtaReciboImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getVtaReciboImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getVtaReciboImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getVtaReciboImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(VtaReciboImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(VtaReciboImagen::GEN_TABLA);
            $c->addOrden(VtaReciboImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getVtaReciboImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_recibo_adm');
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
                $c->addTabla(VtaRecibo::GEN_TABLA);
                $c->addOrden(VtaRecibo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_recibos = VtaRecibo::getVtaRecibos(null, $c);

                $arr = array();
                foreach($vta_recibos as $vta_recibo){
                    $descripcion = $vta_recibo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>