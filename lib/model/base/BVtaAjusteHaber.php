<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaAjusteHaber
{ 
	
	const SES_PAGINACION = 'adm_vtaajustehaber_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtaajustehaber_paginas_registros';
	const SES_CRITERIOS = 'adm_vtaajustehaber_criterios';
	
	const GEN_CLASE = 'VtaAjusteHaber';
	const GEN_TABLA = 'vta_ajuste_haber';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaAjusteHaber */ 
	const GEN_ATTR_ID = 'vta_ajuste_haber.id';
	const GEN_ATTR_DESCRIPCION = 'vta_ajuste_haber.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'vta_ajuste_haber.cli_cliente_id';
	const GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID = 'vta_ajuste_haber.vta_tipo_ajuste_haber_id';
	const GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID = 'vta_ajuste_haber.vta_tipo_origen_ajuste_haber_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'vta_ajuste_haber.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'vta_ajuste_haber.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'vta_ajuste_haber.gral_empresa_id';
	const GEN_ATTR_VTA_PUNTO_VENTA_ID = 'vta_ajuste_haber.vta_punto_venta_id';
	const GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID = 'vta_ajuste_haber.vta_ajuste_haber_tipo_estado_id';
	const GEN_ATTR_VTA_AJUSTE_HABER_CONDICION_PAGO_ID = 'vta_ajuste_haber.vta_ajuste_haber_condicion_pago_id';
	const GEN_ATTR_VTA_AJUSTE_HABER_TIPO_PAGO_ID = 'vta_ajuste_haber.vta_ajuste_haber_tipo_pago_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'vta_ajuste_haber.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'vta_ajuste_haber.numero_punto_venta';
	const GEN_ATTR_NUMERO_AJUSTE_HABER = 'vta_ajuste_haber.numero_ajuste_haber';
	const GEN_ATTR_NUMERO_AJUSTE_HABER_COMPLETO = 'vta_ajuste_haber.numero_ajuste_haber_completo';
	const GEN_ATTR_CAE = 'vta_ajuste_haber.cae';
	const GEN_ATTR_FECHA_EMISION = 'vta_ajuste_haber.fecha_emision';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'vta_ajuste_haber.gral_tipo_documento_id';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'vta_ajuste_haber.persona_descripcion';
	const GEN_ATTR_PERSONA_DOCUMENTO = 'vta_ajuste_haber.persona_documento';
	const GEN_ATTR_PERSONA_EMAIL = 'vta_ajuste_haber.persona_email';
	const GEN_ATTR_RAZON_SOCIAL = 'vta_ajuste_haber.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'vta_ajuste_haber.domicilio_legal';
	const GEN_ATTR_CUIT = 'vta_ajuste_haber.cuit';
	const GEN_ATTR_CODIGO = 'vta_ajuste_haber.codigo';
	const GEN_ATTR_CODIGO_OP_CLIENTE = 'vta_ajuste_haber.codigo_op_cliente';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'vta_ajuste_haber.gral_sucursal_id';
	const GEN_ATTR_VTA_PRESUPUESTO_ID = 'vta_ajuste_haber.vta_presupuesto_id';
	const GEN_ATTR_VTA_PREVENTISTA_ID = 'vta_ajuste_haber.vta_preventista_id';
	const GEN_ATTR_ANIO = 'vta_ajuste_haber.anio';
	const GEN_ATTR_GRAL_MES_ID = 'vta_ajuste_haber.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'vta_ajuste_haber.cntb_diario_asiento_id';
	const GEN_ATTR_FND_CAJA_ID = 'vta_ajuste_haber.fnd_caja_id';
	const GEN_ATTR_OBSERVACION = 'vta_ajuste_haber.observacion';
	const GEN_ATTR_NOTA_INTERNA = 'vta_ajuste_haber.nota_interna';
	const GEN_ATTR_NOTA_PUBLICA = 'vta_ajuste_haber.nota_publica';
	const GEN_ATTR_ORDEN = 'vta_ajuste_haber.orden';
	const GEN_ATTR_ESTADO = 'vta_ajuste_haber.estado';
	const GEN_ATTR_CREADO = 'vta_ajuste_haber.creado';
	const GEN_ATTR_CREADO_POR = 'vta_ajuste_haber.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_ajuste_haber.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_ajuste_haber.modificado_por';

	/* Constantes de Atributos Min de BVtaAjusteHaber */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_VTA_TIPO_AJUSTE_HABER_ID = 'vta_tipo_ajuste_haber_id';
	const GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID = 'vta_tipo_origen_ajuste_haber_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID = 'vta_punto_venta_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_ESTADO_ID = 'vta_ajuste_haber_tipo_estado_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONDICION_PAGO_ID = 'vta_ajuste_haber_condicion_pago_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_PAGO_ID = 'vta_ajuste_haber_tipo_pago_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_AJUSTE_HABER = 'numero_ajuste_haber';
	const GEN_ATTR_MIN_NUMERO_AJUSTE_HABER_COMPLETO = 'numero_ajuste_haber_completo';
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
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_ID = 'vta_presupuesto_id';
	const GEN_ATTR_MIN_VTA_PREVENTISTA_ID = 'vta_preventista_id';
	const GEN_ATTR_MIN_ANIO = 'anio';
	const GEN_ATTR_MIN_GRAL_MES_ID = 'gral_mes_id';
	const GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID = 'cntb_diario_asiento_id';
	const GEN_ATTR_MIN_FND_CAJA_ID = 'fnd_caja_id';
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
	

	/* Atributos de BVtaAjusteHaber */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $vta_tipo_ajuste_haber_id;
	private $vta_tipo_origen_ajuste_haber_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $vta_punto_venta_id;
	private $vta_ajuste_haber_tipo_estado_id;
	private $vta_ajuste_haber_condicion_pago_id;
	private $vta_ajuste_haber_tipo_pago_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_ajuste_haber;
	private $numero_ajuste_haber_completo;
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
	private $gral_sucursal_id;
	private $vta_presupuesto_id;
	private $vta_preventista_id;
	private $anio;
	private $gral_mes_id;
	private $cntb_diario_asiento_id;
	private $fnd_caja_id;
	private $observacion;
	private $nota_interna;
	private $nota_publica;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaAjusteHaber */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getVtaTipoAjusteHaberId(){ if(isset($this->vta_tipo_ajuste_haber_id)){ return $this->vta_tipo_ajuste_haber_id; }else{ return 'null'; } }
	public function getVtaTipoOrigenAjusteHaberId(){ if(isset($this->vta_tipo_origen_ajuste_haber_id)){ return $this->vta_tipo_origen_ajuste_haber_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getVtaPuntoVentaId(){ if(isset($this->vta_punto_venta_id)){ return $this->vta_punto_venta_id; }else{ return 'null'; } }
	public function getVtaAjusteHaberTipoEstadoId(){ if(isset($this->vta_ajuste_haber_tipo_estado_id)){ return $this->vta_ajuste_haber_tipo_estado_id; }else{ return 'null'; } }
	public function getVtaAjusteHaberCondicionPagoId(){ if(isset($this->vta_ajuste_haber_condicion_pago_id)){ return $this->vta_ajuste_haber_condicion_pago_id; }else{ return 'null'; } }
	public function getVtaAjusteHaberTipoPagoId(){ if(isset($this->vta_ajuste_haber_tipo_pago_id)){ return $this->vta_ajuste_haber_tipo_pago_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroAjusteHaber(){ if(isset($this->numero_ajuste_haber)){ return $this->numero_ajuste_haber; }else{ return ''; } }
	public function getNumeroAjusteHaberCompleto(){ if(isset($this->numero_ajuste_haber_completo)){ return $this->numero_ajuste_haber_completo; }else{ return ''; } }
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
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getVtaPresupuestoId(){ if(isset($this->vta_presupuesto_id)){ return $this->vta_presupuesto_id; }else{ return 'null'; } }
	public function getVtaPreventistaId(){ if(isset($this->vta_preventista_id)){ return $this->vta_preventista_id; }else{ return 'null'; } }
	public function getAnio(){ if(isset($this->anio)){ return $this->anio; }else{ return 0; } }
	public function getGralMesId(){ if(isset($this->gral_mes_id)){ return $this->gral_mes_id; }else{ return 'null'; } }
	public function getCntbDiarioAsientoId(){ if(isset($this->cntb_diario_asiento_id)){ return $this->cntb_diario_asiento_id; }else{ return 'null'; } }
	public function getFndCajaId(){ if(isset($this->fnd_caja_id)){ return $this->fnd_caja_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaAjusteHaber */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID."
				, ".self::GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_VTA_PUNTO_VENTA_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_HABER_CONDICION_PAGO_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_PAGO_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_AJUSTE_HABER."
				, ".self::GEN_ATTR_NUMERO_AJUSTE_HABER_COMPLETO."
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
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_ID."
				, ".self::GEN_ATTR_VTA_PREVENTISTA_ID."
				, ".self::GEN_ATTR_ANIO."
				, ".self::GEN_ATTR_GRAL_MES_ID."
				, ".self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID."
				, ".self::GEN_ATTR_FND_CAJA_ID."
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
				$this->setVtaTipoAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_HABER_ID]);
				$this->setVtaTipoOrigenAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
				$this->setVtaAjusteHaberTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_ESTADO_ID]);
				$this->setVtaAjusteHaberCondicionPagoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONDICION_PAGO_ID]);
				$this->setVtaAjusteHaberTipoPagoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_PAGO_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroAjusteHaber($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER]);
				$this->setNumeroAjusteHaberCompleto($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER_COMPLETO]);
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
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
				$this->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
				$this->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
				$this->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
				$this->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
				$this->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
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
	public function setVtaTipoAjusteHaberId($v){ $this->vta_tipo_ajuste_haber_id = $v; }
	public function setVtaTipoOrigenAjusteHaberId($v){ $this->vta_tipo_origen_ajuste_haber_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setVtaPuntoVentaId($v){ $this->vta_punto_venta_id = $v; }
	public function setVtaAjusteHaberTipoEstadoId($v){ $this->vta_ajuste_haber_tipo_estado_id = $v; }
	public function setVtaAjusteHaberCondicionPagoId($v){ $this->vta_ajuste_haber_condicion_pago_id = $v; }
	public function setVtaAjusteHaberTipoPagoId($v){ $this->vta_ajuste_haber_tipo_pago_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroAjusteHaber($v){ $this->numero_ajuste_haber = $v; }
	public function setNumeroAjusteHaberCompleto($v){ $this->numero_ajuste_haber_completo = $v; }
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
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setVtaPresupuestoId($v){ $this->vta_presupuesto_id = $v; }
	public function setVtaPreventistaId($v){ $this->vta_preventista_id = $v; }
	public function setAnio($v){ $this->anio = $v; }
	public function setGralMesId($v){ $this->gral_mes_id = $v; }
	public function setCntbDiarioAsientoId($v){ $this->cntb_diario_asiento_id = $v; }
	public function setFndCajaId($v){ $this->fnd_caja_id = $v; }
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
            $o = new VtaAjusteHaber();
            $o->setId($fila[VtaAjusteHaber::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setVtaTipoAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_HABER_ID]);
			$o->setVtaTipoOrigenAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$o->setVtaAjusteHaberTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_ESTADO_ID]);
			$o->setVtaAjusteHaberCondicionPagoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONDICION_PAGO_ID]);
			$o->setVtaAjusteHaberTipoPagoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_PAGO_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroAjusteHaber($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER]);
			$o->setNumeroAjusteHaberCompleto($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER_COMPLETO]);
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
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$o->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$o->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$o->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$o->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$o->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
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

	/* Control de BVtaAjusteHaber */ 	
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

	/* Cambia el estado de BVtaAjusteHaber */ 	
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

	/* Save de BVtaAjusteHaber */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONDICION_PAGO_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_PAGO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER."
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_ajuste_haber_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaTipoAjusteHaberId()."
						, ".$this->getVtaTipoOrigenAjusteHaberId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaPuntoVentaId()."
						, ".$this->getVtaAjusteHaberTipoEstadoId()."
						, ".$this->getVtaAjusteHaberCondicionPagoId()."
						, ".$this->getVtaAjusteHaberTipoPagoId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroAjusteHaber()."'
						, '".$this->getNumeroAjusteHaberCompleto()."'
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
						, ".$this->getGralSucursalId()."
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getFndCajaId()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNotaPublica()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_ajuste_haber_seq')";
            
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
                 
				 ".VtaAjusteHaber::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_HABER_ID." = ".$this->getVtaTipoAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID." = ".$this->getVtaTipoOrigenAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_ESTADO_ID." = ".$this->getVtaAjusteHaberTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONDICION_PAGO_ID." = ".$this->getVtaAjusteHaberCondicionPagoId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_PAGO_ID." = ".$this->getVtaAjusteHaberTipoPagoId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER." = '".$this->getNumeroAjusteHaber()."'
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER_COMPLETO." = '".$this->getNumeroAjusteHaberCompleto()."'
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
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
						, ".self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONDICION_PAGO_ID."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_PAGO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER."
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
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
						, ".$this->getVtaTipoAjusteHaberId()."
						, ".$this->getVtaTipoOrigenAjusteHaberId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaPuntoVentaId()."
						, ".$this->getVtaAjusteHaberTipoEstadoId()."
						, ".$this->getVtaAjusteHaberCondicionPagoId()."
						, ".$this->getVtaAjusteHaberTipoPagoId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroAjusteHaber()."'
						, '".$this->getNumeroAjusteHaberCompleto()."'
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
						, ".$this->getGralSucursalId()."
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getFndCajaId()."
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
                     
				 ".VtaAjusteHaber::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_HABER_ID." = ".$this->getVtaTipoAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID." = ".$this->getVtaTipoOrigenAjusteHaberId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_ESTADO_ID." = ".$this->getVtaAjusteHaberTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONDICION_PAGO_ID." = ".$this->getVtaAjusteHaberCondicionPagoId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_PAGO_ID." = ".$this->getVtaAjusteHaberTipoPagoId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER." = '".$this->getNumeroAjusteHaber()."'
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER_COMPLETO." = '".$this->getNumeroAjusteHaberCompleto()."'
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
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
            $o = new VtaAjusteHaber();
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

	/* Delete de BVtaAjusteHaber */ 	
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
	
            // se elimina la coleccion de FndChqCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberItemCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberItemCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberItemCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberItemRetencions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberItemRetencion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberItemRetencions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberVtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHaberVtaAjusteDebeVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHaberVtaAjusteDebeVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaAjusteHaber(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaAjusteHaber::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtaajustehabers = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtaajustehaber = new VtaAjusteHaber();
                    $vtaajustehaber->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtaajustehaber->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtaajustehaber->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$vtaajustehaber->setVtaTipoAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_HABER_ID]);
			$vtaajustehaber->setVtaTipoOrigenAjusteHaberId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID]);
			$vtaajustehaber->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$vtaajustehaber->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$vtaajustehaber->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$vtaajustehaber->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$vtaajustehaber->setVtaAjusteHaberTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_ESTADO_ID]);
			$vtaajustehaber->setVtaAjusteHaberCondicionPagoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_CONDICION_PAGO_ID]);
			$vtaajustehaber->setVtaAjusteHaberTipoPagoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_HABER_TIPO_PAGO_ID]);
			$vtaajustehaber->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$vtaajustehaber->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$vtaajustehaber->setNumeroAjusteHaber($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER]);
			$vtaajustehaber->setNumeroAjusteHaberCompleto($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_HABER_COMPLETO]);
			$vtaajustehaber->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$vtaajustehaber->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$vtaajustehaber->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$vtaajustehaber->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$vtaajustehaber->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$vtaajustehaber->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$vtaajustehaber->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$vtaajustehaber->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$vtaajustehaber->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$vtaajustehaber->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtaajustehaber->setCodigoOpCliente($fila[self::GEN_ATTR_MIN_CODIGO_OP_CLIENTE]);
			$vtaajustehaber->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$vtaajustehaber->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$vtaajustehaber->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$vtaajustehaber->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$vtaajustehaber->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$vtaajustehaber->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$vtaajustehaber->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
			$vtaajustehaber->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtaajustehaber->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$vtaajustehaber->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$vtaajustehaber->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtaajustehaber->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtaajustehaber->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtaajustehaber->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtaajustehaber->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtaajustehaber->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtaajustehabers[] = $vtaajustehaber;
		}
		
		return $vtaajustehabers;
	}	
	

	/* Método getVtaAjusteHabers Habilitados */ 	
	static function getVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaAjusteHaber::getVtaAjusteHabers($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaAjusteHabers para listado de Backend */ 	
	static function getVtaAjusteHabersDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaAjusteHaber::getVtaAjusteHabers($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaAjusteHabersCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaAjusteHaber::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaAjusteHaber::getVtaAjusteHabers($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteHabers filtrado para select */ 	
	static function getVtaAjusteHabersCmbF($paginador = null, $criterio = null){
            $col = VtaAjusteHaber::getVtaAjusteHabers($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getVtaAjusteHabersXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de VtaTipoAjusteHaber */ 	
	static function getVtaAjusteHabersXVtaTipoAjusteHabers($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoAjusteHaberId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de VtaTipoOrigenAjusteHaber */ 	
	static function getVtaAjusteHabersXVtaTipoOrigenAjusteHabers($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoOrigenAjusteHaberId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getVtaAjusteHabersXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getVtaAjusteHabersXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getVtaAjusteHabersXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de VtaPuntoVenta */ 	
	static function getVtaAjusteHabersXVtaPuntoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PUNTO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPuntoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de VtaAjusteHaberTipoEstado */ 	
	static function getVtaAjusteHabersXVtaAjusteHaberTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteHaberTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de VtaAjusteHaberCondicionPago */ 	
	static function getVtaAjusteHabersXVtaAjusteHaberCondicionPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_CONDICION_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteHaberCondicionPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de VtaAjusteHaberTipoPago */ 	
	static function getVtaAjusteHabersXVtaAjusteHaberTipoPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteHaberTipoPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getVtaAjusteHabersXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getVtaAjusteHabersXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de VtaPresupuesto */ 	
	static function getVtaAjusteHabersXVtaPresupuestos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PRESUPUESTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de VtaPreventista */ 	
	static function getVtaAjusteHabersXVtaPreventistas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_VTA_PREVENTISTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPreventistaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getVtaAjusteHabersXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getVtaAjusteHabersXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteHabers filtrado por una coleccion de objetos foraneos de FndCaja */ 	
	static function getVtaAjusteHabersXFndCajas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_FND_CAJA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteHaber::getVtaAjusteHabers($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_ajuste_haber_adm.php';
            $url_gestion = 'vta_ajuste_haber_gestion.php';
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
                
            $criterio->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaAjusteDebeVtaAjusteHabers */ 	
	public function getVtaAjusteDebeVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeVtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeVtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeVtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebevtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebevtaajustehaber = VtaAjusteDebeVtaAjusteHaber::hidratarObjeto($fila);			
                $vtaajustedebevtaajustehabers[] = $vtaajustedebevtaajustehaber;
            }

            return $vtaajustedebevtaajustehabers;
	}	
	

	/* Método getVtaAjusteDebeVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaAjusteDebeVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaAjusteHabers Habilitados */ 	
	public function getVtaAjusteDebeVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaAjusteHaber */ 	
	public function getVtaAjusteDebeVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeVtaAjusteHaber relacionadas */ 	
	public function deleteVtaAjusteDebeVtaAjusteHabers(){
            $obs = $this->getVtaAjusteDebeVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeVtaAjusteHabersCmb() VtaAjusteDebeVtaAjusteHaber relacionadas */ 	
	public function getVtaAjusteDebeVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaAjusteHaber::getVtaAjusteDebeVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeVtaAjusteHaber */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA, VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeVtaAjusteHaber */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA, VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeVtaAjusteHaber */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberImportes */ 	
	public function getVtaAjusteHaberImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberImporte::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberimporte = VtaAjusteHaberImporte::hidratarObjeto($fila);			
                $vtaajustehaberimportes[] = $vtaajustehaberimporte;
            }

            return $vtaajustehaberimportes;
	}	
	

	/* Método getVtaAjusteHaberImportesBloque para MasInfo */ 	
	public function getVtaAjusteHaberImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberImportes Habilitados */ 	
	public function getVtaAjusteHaberImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberImporte */ 	
	public function getVtaAjusteHaberImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberImporte relacionadas */ 	
	public function deleteVtaAjusteHaberImportes(){
            $obs = $this->getVtaAjusteHaberImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberImportesCmb() VtaAjusteHaberImporte relacionadas */ 	
	public function getVtaAjusteHaberImportesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberImporte::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberImporte::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberImporte::getVtaAjusteHaberImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaAjusteHaberEstados */ 	
	public function getVtaAjusteHaberEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberEstado::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberestado = VtaAjusteHaberEstado::hidratarObjeto($fila);			
                $vtaajustehaberestados[] = $vtaajustehaberestado;
            }

            return $vtaajustehaberestados;
	}	
	

	/* Método getVtaAjusteHaberEstadosBloque para MasInfo */ 	
	public function getVtaAjusteHaberEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberEstados Habilitados */ 	
	public function getVtaAjusteHaberEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberEstado */ 	
	public function getVtaAjusteHaberEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberEstado relacionadas */ 	
	public function deleteVtaAjusteHaberEstados(){
            $obs = $this->getVtaAjusteHaberEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberEstadosCmb() VtaAjusteHaberEstado relacionadas */ 	
	public function getVtaAjusteHaberEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberEstado::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberEstado::getVtaAjusteHaberEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHaberTipoEstados (Coleccion) relacionados a traves de VtaAjusteHaberEstado */ 	
	public function getVtaAjusteHaberTipoEstadosXVtaAjusteHaberEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaberTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberEstado::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberEstado::GEN_TABLA, VtaAjusteHaberEstado::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, VtaAjusteHaberTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaberTipoEstado::getVtaAjusteHaberTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHaberTipoEstados relacionados a traves de VtaAjusteHaberEstado */ 	
	public function getCantidadVtaAjusteHaberTipoEstadosXVtaAjusteHaberEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaberTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaberTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberEstado::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberEstado::GEN_TABLA, VtaAjusteHaberEstado::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, VtaAjusteHaberTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaberTipoEstado::getVtaAjusteHaberTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaberTipoEstado (Objeto) relacionado a traves de VtaAjusteHaberEstado */ 	
	public function getVtaAjusteHaberTipoEstadoXVtaAjusteHaberEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHaberTipoEstadosXVtaAjusteHaberEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberEnviados */ 	
	public function getVtaAjusteHaberEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberEnviado::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberenviado = VtaAjusteHaberEnviado::hidratarObjeto($fila);			
                $vtaajustehaberenviados[] = $vtaajustehaberenviado;
            }

            return $vtaajustehaberenviados;
	}	
	

	/* Método getVtaAjusteHaberEnviadosBloque para MasInfo */ 	
	public function getVtaAjusteHaberEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberEnviados Habilitados */ 	
	public function getVtaAjusteHaberEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberEnviado */ 	
	public function getVtaAjusteHaberEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberEnviado relacionadas */ 	
	public function deleteVtaAjusteHaberEnviados(){
            $obs = $this->getVtaAjusteHaberEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberEnviadosCmb() VtaAjusteHaberEnviado relacionadas */ 	
	public function getVtaAjusteHaberEnviadosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberEnviado::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberEnviado::getVtaAjusteHaberEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaAjusteHaberItems */ 	
	public function getVtaAjusteHaberItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberitem = VtaAjusteHaberItem::hidratarObjeto($fila);			
                $vtaajustehaberitems[] = $vtaajustehaberitem;
            }

            return $vtaajustehaberitems;
	}	
	

	/* Método getVtaAjusteHaberItemsBloque para MasInfo */ 	
	public function getVtaAjusteHaberItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItems Habilitados */ 	
	public function getVtaAjusteHaberItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItem */ 	
	public function getVtaAjusteHaberItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberItem relacionadas */ 	
	public function deleteVtaAjusteHaberItems(){
            $obs = $this->getVtaAjusteHaberItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberItemsCmb() VtaAjusteHaberItem relacionadas */ 	
	public function getVtaAjusteHaberItemsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpFormaPagos (Coleccion) relacionados a traves de VtaAjusteHaberItem */ 	
	public function getGralFpFormaPagosXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItem::GEN_TABLA, VtaAjusteHaberItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpFormaPagos relacionados a traves de VtaAjusteHaberItem */ 	
	public function getCantidadGralFpFormaPagosXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItem::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItem::GEN_TABLA, VtaAjusteHaberItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpFormaPago (Objeto) relacionado a traves de VtaAjusteHaberItem */ 	
	public function getGralFpFormaPagoXVtaAjusteHaberItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpFormaPagosXVtaAjusteHaberItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberItemCheques */ 	
	public function getVtaAjusteHaberItemCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberItemCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberItemCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberItemCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberItemCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberItemCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberItemCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberitemcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberitemcheque = VtaAjusteHaberItemCheque::hidratarObjeto($fila);			
                $vtaajustehaberitemcheques[] = $vtaajustehaberitemcheque;
            }

            return $vtaajustehaberitemcheques;
	}	
	

	/* Método getVtaAjusteHaberItemChequesBloque para MasInfo */ 	
	public function getVtaAjusteHaberItemChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberItemCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemCheques Habilitados */ 	
	public function getVtaAjusteHaberItemChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberItemCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemCheque */ 	
	public function getVtaAjusteHaberItemCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberItemCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberItemCheque relacionadas */ 	
	public function deleteVtaAjusteHaberItemCheques(){
            $obs = $this->getVtaAjusteHaberItemCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberItemChequesCmb() VtaAjusteHaberItemCheque relacionadas */ 	
	public function getVtaAjusteHaberItemChequesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItemCheque::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberItemCheque::getVtaAjusteHaberItemChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHaberItems (Coleccion) relacionados a traves de VtaAjusteHaberItemCheque */ 	
	public function getVtaAjusteHaberItemsXVtaAjusteHaberItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItemCheque::GEN_TABLA, VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, VtaAjusteHaberItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHaberItems relacionados a traves de VtaAjusteHaberItemCheque */ 	
	public function getCantidadVtaAjusteHaberItemsXVtaAjusteHaberItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaberItem::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItemCheque::GEN_TABLA, VtaAjusteHaberItemCheque::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, VtaAjusteHaberItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaberItem (Objeto) relacionado a traves de VtaAjusteHaberItemCheque */ 	
	public function getVtaAjusteHaberItemXVtaAjusteHaberItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHaberItemsXVtaAjusteHaberItemCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberItemRetencions */ 	
	public function getVtaAjusteHaberItemRetencions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberItemRetencion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberItemRetencion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberItemRetencion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberItemRetencion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberItemRetencion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberItemRetencion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehaberitemretencions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaberitemretencion = VtaAjusteHaberItemRetencion::hidratarObjeto($fila);			
                $vtaajustehaberitemretencions[] = $vtaajustehaberitemretencion;
            }

            return $vtaajustehaberitemretencions;
	}	
	

	/* Método getVtaAjusteHaberItemRetencionsBloque para MasInfo */ 	
	public function getVtaAjusteHaberItemRetencionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberItemRetencions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemRetencions Habilitados */ 	
	public function getVtaAjusteHaberItemRetencionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberItemRetencions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberItemRetencion */ 	
	public function getVtaAjusteHaberItemRetencion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberItemRetencions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberItemRetencion relacionadas */ 	
	public function deleteVtaAjusteHaberItemRetencions(){
            $obs = $this->getVtaAjusteHaberItemRetencions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberItemRetencionsCmb() VtaAjusteHaberItemRetencion relacionadas */ 	
	public function getVtaAjusteHaberItemRetencionsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItemRetencion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberItemRetencion::getVtaAjusteHaberItemRetencionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHaberItems (Coleccion) relacionados a traves de VtaAjusteHaberItemRetencion */ 	
	public function getVtaAjusteHaberItemsXVtaAjusteHaberItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItemRetencion::GEN_TABLA, VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, VtaAjusteHaberItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHaberItems relacionados a traves de VtaAjusteHaberItemRetencion */ 	
	public function getCantidadVtaAjusteHaberItemsXVtaAjusteHaberItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaberItem::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaberItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberItem::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberItemRetencion::GEN_TABLA, VtaAjusteHaberItemRetencion::GEN_ATTR_VTA_AJUSTE_HABER_ITEM_ID, VtaAjusteHaberItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaberItem::getVtaAjusteHaberItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaberItem (Objeto) relacionado a traves de VtaAjusteHaberItemRetencion */ 	
	public function getVtaAjusteHaberItemXVtaAjusteHaberItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHaberItemsXVtaAjusteHaberItemRetencion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberVtaTributos */ 	
	public function getVtaAjusteHaberVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabervtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehabervtatributo = VtaAjusteHaberVtaTributo::hidratarObjeto($fila);			
                $vtaajustehabervtatributos[] = $vtaajustehabervtatributo;
            }

            return $vtaajustehabervtatributos;
	}	
	

	/* Método getVtaAjusteHaberVtaTributosBloque para MasInfo */ 	
	public function getVtaAjusteHaberVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaTributos Habilitados */ 	
	public function getVtaAjusteHaberVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaTributo */ 	
	public function getVtaAjusteHaberVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberVtaTributo relacionadas */ 	
	public function deleteVtaAjusteHaberVtaTributos(){
            $obs = $this->getVtaAjusteHaberVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberVtaTributosCmb() VtaAjusteHaberVtaTributo relacionadas */ 	
	public function getVtaAjusteHaberVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberVtaTributo::getVtaAjusteHaberVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTributos (Coleccion) relacionados a traves de VtaAjusteHaberVtaTributo */ 	
	public function getVtaTributosXVtaAjusteHaberVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaTributo::GEN_TABLA, VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTributos relacionados a traves de VtaAjusteHaberVtaTributo */ 	
	public function getCantidadVtaTributosXVtaAjusteHaberVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaTributo::GEN_TABLA, VtaAjusteHaberVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTributo (Objeto) relacionado a traves de VtaAjusteHaberVtaTributo */ 	
	public function getVtaTributoXVtaAjusteHaberVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTributosXVtaAjusteHaberVtaTributo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberWsFeOpeSolicitud::getVtaAjusteHaberWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeOpeSolicituds (Coleccion) relacionados a traves de VtaAjusteHaberWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudsXVtaAjusteHaberWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA, VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeOpeSolicituds relacionados a traves de VtaAjusteHaberWsFeOpeSolicitud */ 	
	public function getCantidadWsFeOpeSolicitudsXVtaAjusteHaberWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeOpeSolicitud::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberWsFeOpeSolicitud::GEN_TABLA, VtaAjusteHaberWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeOpeSolicitud (Objeto) relacionado a traves de VtaAjusteHaberWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudXVtaAjusteHaberWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeOpeSolicitudsXVtaAjusteHaberWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebeVtaOrdenVentas (Coleccion) relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeVtaOrdenVentasXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaOrdenVenta::getVtaAjusteDebeVtaOrdenVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebeVtaOrdenVentas relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaAjusteDebeVtaOrdenVentasXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_VTA_ORDEN_VENTA_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaOrdenVenta::getVtaAjusteDebeVtaOrdenVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebeVtaOrdenVenta (Objeto) relacionado a traves de VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeVtaOrdenVentaXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebeVtaOrdenVentasXVtaAjusteHaberVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHaberVtaAjusteDebeVtaTributos */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaberVtaAjusteDebeVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaberVtaAjusteDebeVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabervtaajustedebevtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehabervtaajustedebevtatributo = VtaAjusteHaberVtaAjusteDebeVtaTributo::hidratarObjeto($fila);			
                $vtaajustehabervtaajustedebevtatributos[] = $vtaajustehabervtaajustedebevtatributo;
            }

            return $vtaajustehabervtaajustedebevtatributos;
	}	
	

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaTributosBloque para MasInfo */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaTributos Habilitados */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHaberVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaberVtaAjusteDebeVtaTributo relacionadas */ 	
	public function deleteVtaAjusteHaberVtaAjusteDebeVtaTributos(){
            $obs = $this->getVtaAjusteHaberVtaAjusteDebeVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHaberVtaAjusteDebeVtaTributosCmb() VtaAjusteHaberVtaAjusteDebeVtaTributo relacionadas */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaberVtaAjusteDebeVtaTributo::getVtaAjusteHaberVtaAjusteDebeVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebeVtaTributos (Coleccion) relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
	public function getVtaAjusteDebeVtaTributosXVtaAjusteHaberVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID, VtaAjusteDebeVtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaTributo::getVtaAjusteDebeVtaTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebeVtaTributos relacionados a traves de VtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
	public function getCantidadVtaAjusteDebeVtaTributosXVtaAjusteHaberVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebeVtaTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_TABLA, VtaAjusteHaberVtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_VTA_TRIBUTO_ID, VtaAjusteDebeVtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaTributo::getVtaAjusteDebeVtaTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebeVtaTributo (Objeto) relacionado a traves de VtaAjusteHaberVtaAjusteDebeVtaTributo */ 	
	public function getVtaAjusteDebeVtaTributoXVtaAjusteHaberVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebeVtaTributosXVtaAjusteHaberVtaAjusteDebeVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentaVtaAjusteHabers */ 	
	public function getVtaOrdenVentaVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaVtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaVtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaVtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventavtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventavtaajustehaber = VtaOrdenVentaVtaAjusteHaber::hidratarObjeto($fila);			
                $vtaordenventavtaajustehabers[] = $vtaordenventavtaajustehaber;
            }

            return $vtaordenventavtaajustehabers;
	}	
	

	/* Método getVtaOrdenVentaVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaOrdenVentaVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaVtaAjusteHabers Habilitados */ 	
	public function getVtaOrdenVentaVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaVtaAjusteHaber */ 	
	public function getVtaOrdenVentaVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaVtaAjusteHaber relacionadas */ 	
	public function deleteVtaOrdenVentaVtaAjusteHabers(){
            $obs = $this->getVtaOrdenVentaVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaVtaAjusteHabersCmb() VtaOrdenVentaVtaAjusteHaber relacionadas */ 	
	public function getVtaOrdenVentaVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaVtaAjusteHaber::getVtaOrdenVentaVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentas (Coleccion) relacionados a traves de VtaOrdenVentaVtaAjusteHaber */ 	
	public function getVtaOrdenVentasXVtaOrdenVentaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA, VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentas relacionados a traves de VtaOrdenVentaVtaAjusteHaber */ 	
	public function getCantidadVtaOrdenVentasXVtaOrdenVentaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA, VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVenta (Objeto) relacionado a traves de VtaOrdenVentaVtaAjusteHaber */ 	
	public function getVtaOrdenVentaXVtaOrdenVentaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentasXVtaOrdenVentaVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaAjusteHaber::getVtaFacturaVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaVtaAjusteHaber */ 	
	public function getVtaFacturasXVtaFacturaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaAjusteHaber::GEN_TABLA, VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaVtaAjusteHaber */ 	
	public function getCantidadVtaFacturasXVtaFacturaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaAjusteHaber::GEN_TABLA, VtaFacturaVtaAjusteHaber::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaVtaAjusteHaber */ 	
	public function getVtaFacturaXVtaFacturaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitoVtaAjusteHabers */ 	
	public function getVtaNotaDebitoVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoVtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoVtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoVtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitovtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitovtaajustehaber = VtaNotaDebitoVtaAjusteHaber::hidratarObjeto($fila);			
                $vtanotadebitovtaajustehabers[] = $vtanotadebitovtaajustehaber;
            }

            return $vtanotadebitovtaajustehabers;
	}	
	

	/* Método getVtaNotaDebitoVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaNotaDebitoVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaAjusteHabers Habilitados */ 	
	public function getVtaNotaDebitoVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaAjusteHaber */ 	
	public function getVtaNotaDebitoVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoVtaAjusteHaber relacionadas */ 	
	public function deleteVtaNotaDebitoVtaAjusteHabers(){
            $obs = $this->getVtaNotaDebitoVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoVtaAjusteHabersCmb() VtaNotaDebitoVtaAjusteHaber relacionadas */ 	
	public function getVtaNotaDebitoVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoVtaAjusteHaber::getVtaNotaDebitoVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaDebitos (Coleccion) relacionados a traves de VtaNotaDebitoVtaAjusteHaber */ 	
	public function getVtaNotaDebitosXVtaNotaDebitoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA, VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaDebitos relacionados a traves de VtaNotaDebitoVtaAjusteHaber */ 	
	public function getCantidadVtaNotaDebitosXVtaNotaDebitoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA, VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_NOTA_DEBITO_ID, VtaNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaDebito (Objeto) relacionado a traves de VtaNotaDebitoVtaAjusteHaber */ 	
	public function getVtaNotaDebitoXVtaNotaDebitoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaDebitosXVtaNotaDebitoVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaAjusteHabers */ 	
	public function getCntbDiarioAsientoVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtaajustehaber = CntbDiarioAsientoVtaAjusteHaber::hidratarObjeto($fila);			
                $cntbdiarioasientovtaajustehabers[] = $cntbdiarioasientovtaajustehaber;
            }

            return $cntbdiarioasientovtaajustehabers;
	}	
	

	/* Método getCntbDiarioAsientoVtaAjusteHabersBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaAjusteHabers Habilitados */ 	
	public function getCntbDiarioAsientoVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaAjusteHaber */ 	
	public function getCntbDiarioAsientoVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaAjusteHaber relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaAjusteHabers(){
            $obs = $this->getCntbDiarioAsientoVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaAjusteHabersCmb() CntbDiarioAsientoVtaAjusteHaber relacionadas */ 	
	public function getCntbDiarioAsientoVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaAjusteHaber::getCntbDiarioAsientoVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaAjusteHaber */ 	
	public function getCntbPeriodosXCntbDiarioAsientoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA, CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoVtaAjusteHaber */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaAjusteHaber::GEN_TABLA, CntbDiarioAsientoVtaAjusteHaber::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoVtaAjusteHaber */ 	
	public function getCntbPeriodoXCntbDiarioAsientoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaAjusteDebes asignados a VtaAjusteHaber */ 	
	public function getVtaAjusteDebeVtaAjusteHabersId(){
            $ids = array();
            foreach($this->getVtaAjusteDebeVtaAjusteHabers() as $o){
            
                $ids[] = $o->getVtaAjusteDebeId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaAjusteDebes asignados al VtaAjusteHaber */ 	
	public function setVtaAjusteDebeVtaAjusteHabers($ids){
            $this->deleteVtaAjusteDebeVtaAjusteHabers();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteDebeVtaAjusteHaber();
                    $o->setVtaAjusteDebeId($id);
                    $o->setVtaAjusteHaberId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaAjusteDebe en el alta de VtaAjusteHaber */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteDebeVtaAjusteHaber(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTributos asignados a VtaAjusteHaber */ 	
	public function getVtaAjusteHaberVtaTributosId(){
            $ids = array();
            foreach($this->getVtaAjusteHaberVtaTributos() as $o){
            
                $ids[] = $o->getVtaTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTributos asignados al VtaAjusteHaber */ 	
	public function setVtaAjusteHaberVtaTributos($ids){
            $this->deleteVtaAjusteHaberVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteHaberVtaTributo();
                    $o->setVtaTributoId($id);
                    $o->setVtaAjusteHaberId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTributo en el alta de VtaAjusteHaber */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteHaberVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los WsFeOpeSolicituds asignados a VtaAjusteHaber */ 	
	public function getVtaAjusteHaberWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaAjusteHaberWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getWsFeOpeSolicitudId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeOpeSolicituds asignados al VtaAjusteHaber */ 	
	public function setVtaAjusteHaberWsFeOpeSolicituds($ids){
            $this->deleteVtaAjusteHaberWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteHaberWsFeOpeSolicitud();
                    $o->setWsFeOpeSolicitudId($id);
                    $o->setVtaAjusteHaberId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeOpeSolicitud en el alta de VtaAjusteHaber */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteHaberWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaAjusteDebeVtaTributos asignados a VtaAjusteHaber */ 	
	public function getVtaAjusteHaberVtaAjusteDebeVtaTributosId(){
            $ids = array();
            foreach($this->getVtaAjusteHaberVtaAjusteDebeVtaTributos() as $o){
            
                $ids[] = $o->getVtaAjusteDebeVtaTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaAjusteDebeVtaTributos asignados al VtaAjusteHaber */ 	
	public function setVtaAjusteHaberVtaAjusteDebeVtaTributos($ids){
            $this->deleteVtaAjusteHaberVtaAjusteDebeVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteHaberVtaAjusteDebeVtaTributo();
                    $o->setVtaAjusteDebeVtaTributoId($id);
                    $o->setVtaAjusteHaberId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaAjusteDebeVtaTributo en el alta de VtaAjusteHaber */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteHaberVtaAjusteDebeVtaTributo(){
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

	/* Metodo que retorna el VtaTipoAjusteHaber (Clave Foranea) */ 	
    public function getVtaTipoAjusteHaber(){
        $o = new VtaTipoAjusteHaber();
        $o->setId($this->getVtaTipoAjusteHaberId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoAjusteHaber (Clave Foranea) en Array */ 	
    public function getVtaTipoAjusteHaberEnArray(&$arr_os){
        if($this->getVtaTipoAjusteHaberId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoAjusteHaberId()])){
                $o = $arr_os[$this->getVtaTipoAjusteHaberId()];
            }else{
                $o = VtaTipoAjusteHaber::getOxId($this->getVtaTipoAjusteHaberId());
                if($o){
                    $arr_os[$this->getVtaTipoAjusteHaberId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoAjusteHaber();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoOrigenAjusteHaber (Clave Foranea) */ 	
    public function getVtaTipoOrigenAjusteHaber(){
        $o = new VtaTipoOrigenAjusteHaber();
        $o->setId($this->getVtaTipoOrigenAjusteHaberId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoOrigenAjusteHaber (Clave Foranea) en Array */ 	
    public function getVtaTipoOrigenAjusteHaberEnArray(&$arr_os){
        if($this->getVtaTipoOrigenAjusteHaberId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoOrigenAjusteHaberId()])){
                $o = $arr_os[$this->getVtaTipoOrigenAjusteHaberId()];
            }else{
                $o = VtaTipoOrigenAjusteHaber::getOxId($this->getVtaTipoOrigenAjusteHaberId());
                if($o){
                    $arr_os[$this->getVtaTipoOrigenAjusteHaberId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoOrigenAjusteHaber();
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

	/* Metodo que retorna el VtaAjusteHaberTipoEstado (Clave Foranea) */ 	
    public function getVtaAjusteHaberTipoEstado(){
        $o = new VtaAjusteHaberTipoEstado();
        $o->setId($this->getVtaAjusteHaberTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteHaberTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaAjusteHaberTipoEstadoEnArray(&$arr_os){
        if($this->getVtaAjusteHaberTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteHaberTipoEstadoId()])){
                $o = $arr_os[$this->getVtaAjusteHaberTipoEstadoId()];
            }else{
                $o = VtaAjusteHaberTipoEstado::getOxId($this->getVtaAjusteHaberTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaAjusteHaberTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteHaberTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaAjusteHaberCondicionPago (Clave Foranea) */ 	
    public function getVtaAjusteHaberCondicionPago(){
        $o = new VtaAjusteHaberCondicionPago();
        $o->setId($this->getVtaAjusteHaberCondicionPagoId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteHaberCondicionPago (Clave Foranea) en Array */ 	
    public function getVtaAjusteHaberCondicionPagoEnArray(&$arr_os){
        if($this->getVtaAjusteHaberCondicionPagoId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteHaberCondicionPagoId()])){
                $o = $arr_os[$this->getVtaAjusteHaberCondicionPagoId()];
            }else{
                $o = VtaAjusteHaberCondicionPago::getOxId($this->getVtaAjusteHaberCondicionPagoId());
                if($o){
                    $arr_os[$this->getVtaAjusteHaberCondicionPagoId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteHaberCondicionPago();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaAjusteHaberTipoPago (Clave Foranea) */ 	
    public function getVtaAjusteHaberTipoPago(){
        $o = new VtaAjusteHaberTipoPago();
        $o->setId($this->getVtaAjusteHaberTipoPagoId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteHaberTipoPago (Clave Foranea) en Array */ 	
    public function getVtaAjusteHaberTipoPagoEnArray(&$arr_os){
        if($this->getVtaAjusteHaberTipoPagoId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteHaberTipoPagoId()])){
                $o = $arr_os[$this->getVtaAjusteHaberTipoPagoId()];
            }else{
                $o = VtaAjusteHaberTipoPago::getOxId($this->getVtaAjusteHaberTipoPagoId());
                if($o){
                    $arr_os[$this->getVtaAjusteHaberTipoPagoId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteHaberTipoPago();
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
            		
        if($contexto_solicitante != VtaTipoAjusteHaber::GEN_CLASE){
            if($this->getVtaTipoAjusteHaber()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoAjusteHaber::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoAjusteHaber()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoOrigenAjusteHaber::GEN_CLASE){
            if($this->getVtaTipoOrigenAjusteHaber()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoOrigenAjusteHaber::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoOrigenAjusteHaber()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaAjusteHaberTipoEstado::GEN_CLASE){
            if($this->getVtaAjusteHaberTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteHaberTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteHaberTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaAjusteHaberCondicionPago::GEN_CLASE){
            if($this->getVtaAjusteHaberCondicionPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteHaberCondicionPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteHaberCondicionPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaAjusteHaberTipoPago::GEN_CLASE){
            if($this->getVtaAjusteHaberTipoPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteHaberTipoPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteHaberTipoPago()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_ajuste_haber'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_ajuste_haber';");
            
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

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_ajuste_haber_id' */ 	
	static function getOxVtaTipoAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_ajuste_haber_id' */ 	
	static function getOsxVtaTipoAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_origen_ajuste_haber_id' */ 	
	static function getOxVtaTipoOrigenAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_origen_ajuste_haber_id' */ 	
	static function getOsxVtaTipoOrigenAjusteHaberId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_HABER_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_punto_venta_id' */ 	
	static function getOxVtaPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_haber_tipo_estado_id' */ 	
	static function getOxVtaAjusteHaberTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_haber_tipo_estado_id' */ 	
	static function getOsxVtaAjusteHaberTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_haber_condicion_pago_id' */ 	
	static function getOxVtaAjusteHaberCondicionPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_CONDICION_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_haber_condicion_pago_id' */ 	
	static function getOsxVtaAjusteHaberCondicionPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_CONDICION_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_haber_tipo_pago_id' */ 	
	static function getOxVtaAjusteHaberTipoPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_haber_tipo_pago_id' */ 	
	static function getOsxVtaAjusteHaberTipoPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_ajuste_haber' */ 	
	static function getOxNumeroAjusteHaber($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_AJUSTE_HABER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_ajuste_haber' */ 	
	static function getOsxNumeroAjusteHaber($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_AJUSTE_HABER, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_ajuste_haber_completo' */ 	
	static function getOxNumeroAjusteHaberCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_AJUSTE_HABER_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_ajuste_haber_completo' */ 	
	static function getOsxNumeroAjusteHaberCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_AJUSTE_HABER_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_documento' */ 	
	static function getOxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_email' */ 	
	static function getOxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_op_cliente' */ 	
	static function getOxCodigoOpCliente($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_OP_CLIENTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_preventista_id' */ 	
	static function getOxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_id' */ 	
	static function getOxFndCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers(null, $criterio);
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

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
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

            $obs = self::getVtaAjusteHabers($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_ajuste_haber_adm');
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
                $c->addTabla(VtaAjusteHaber::GEN_TABLA);
                $c->addOrden(VtaAjusteHaber::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_ajuste_habers = VtaAjusteHaber::getVtaAjusteHabers(null, $c);

                $arr = array();
                foreach($vta_ajuste_habers as $vta_ajuste_haber){
                    $descripcion = $vta_ajuste_haber->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>