<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaNotaDebito
{ 
	
	const SES_PAGINACION = 'adm_vtanotadebito_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtanotadebito_paginas_registros';
	const SES_CRITERIOS = 'adm_vtanotadebito_criterios';
	
	const GEN_CLASE = 'VtaNotaDebito';
	const GEN_TABLA = 'vta_nota_debito';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaNotaDebito */ 
	const GEN_ATTR_ID = 'vta_nota_debito.id';
	const GEN_ATTR_DESCRIPCION = 'vta_nota_debito.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'vta_nota_debito.cli_cliente_id';
	const GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID = 'vta_nota_debito.vta_tipo_nota_debito_id';
	const GEN_ATTR_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID = 'vta_nota_debito.vta_tipo_origen_nota_debito_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'vta_nota_debito.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'vta_nota_debito.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'vta_nota_debito.gral_empresa_id';
	const GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID = 'vta_nota_debito.vta_nota_debito_tipo_estado_id';
	const GEN_ATTR_VTA_PUNTO_VENTA_ID = 'vta_nota_debito.vta_punto_venta_id';
	const GEN_ATTR_GRAL_FP_FORMA_PAGO_ID = 'vta_nota_debito.gral_fp_forma_pago_id';
	const GEN_ATTR_VTA_PREVENTISTA_ID = 'vta_nota_debito.vta_preventista_id';
	const GEN_ATTR_GRAL_ACTIVIDAD_ID = 'vta_nota_debito.gral_actividad_id';
	const GEN_ATTR_GRAL_ESCENARIO_ID = 'vta_nota_debito.gral_escenario_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'vta_nota_debito.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'vta_nota_debito.numero_punto_venta';
	const GEN_ATTR_NUMERO_NOTA_DEBITO = 'vta_nota_debito.numero_nota_debito';
	const GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO = 'vta_nota_debito.numero_nota_debito_completo';
	const GEN_ATTR_CAE = 'vta_nota_debito.cae';
	const GEN_ATTR_FECHA_EMISION = 'vta_nota_debito.fecha_emision';
	const GEN_ATTR_FECHA_VENCIMIENTO = 'vta_nota_debito.fecha_vencimiento';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'vta_nota_debito.gral_tipo_documento_id';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'vta_nota_debito.persona_descripcion';
	const GEN_ATTR_PERSONA_DOCUMENTO = 'vta_nota_debito.persona_documento';
	const GEN_ATTR_PERSONA_EMAIL = 'vta_nota_debito.persona_email';
	const GEN_ATTR_RAZON_SOCIAL = 'vta_nota_debito.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'vta_nota_debito.domicilio_legal';
	const GEN_ATTR_CUIT = 'vta_nota_debito.cuit';
	const GEN_ATTR_CODIGO = 'vta_nota_debito.codigo';
	const GEN_ATTR_NOTA_PUBLICA = 'vta_nota_debito.nota_publica';
	const GEN_ATTR_ANIO = 'vta_nota_debito.anio';
	const GEN_ATTR_GRAL_MES_ID = 'vta_nota_debito.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'vta_nota_debito.cntb_diario_asiento_id';
	const GEN_ATTR_OBSERVACION = 'vta_nota_debito.observacion';
	const GEN_ATTR_NOTA_INTERNA = 'vta_nota_debito.nota_interna';
	const GEN_ATTR_NUMERO_TIMBRADO = 'vta_nota_debito.numero_timbrado';
	const GEN_ATTR_ORDEN = 'vta_nota_debito.orden';
	const GEN_ATTR_ESTADO = 'vta_nota_debito.estado';
	const GEN_ATTR_CREADO = 'vta_nota_debito.creado';
	const GEN_ATTR_CREADO_POR = 'vta_nota_debito.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_nota_debito.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_nota_debito.modificado_por';

	/* Constantes de Atributos Min de BVtaNotaDebito */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_VTA_TIPO_NOTA_DEBITO_ID = 'vta_tipo_nota_debito_id';
	const GEN_ATTR_MIN_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID = 'vta_tipo_origen_nota_debito_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_VTA_NOTA_DEBITO_TIPO_ESTADO_ID = 'vta_nota_debito_tipo_estado_id';
	const GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID = 'vta_punto_venta_id';
	const GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID = 'gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_VTA_PREVENTISTA_ID = 'vta_preventista_id';
	const GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID = 'gral_actividad_id';
	const GEN_ATTR_MIN_GRAL_ESCENARIO_ID = 'gral_escenario_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_NOTA_DEBITO = 'numero_nota_debito';
	const GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO = 'numero_nota_debito_completo';
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
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
	const GEN_ATTR_MIN_ANIO = 'anio';
	const GEN_ATTR_MIN_GRAL_MES_ID = 'gral_mes_id';
	const GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID = 'cntb_diario_asiento_id';
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
	

	/* Atributos de BVtaNotaDebito */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $vta_tipo_nota_debito_id;
	private $vta_tipo_origen_nota_debito_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $vta_nota_debito_tipo_estado_id;
	private $vta_punto_venta_id;
	private $gral_fp_forma_pago_id;
	private $vta_preventista_id;
	private $gral_actividad_id;
	private $gral_escenario_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_nota_debito;
	private $numero_nota_debito_completo;
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
	private $nota_publica;
	private $anio;
	private $gral_mes_id;
	private $cntb_diario_asiento_id;
	private $observacion;
	private $nota_interna;
	private $numero_timbrado;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaNotaDebito */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getVtaTipoNotaDebitoId(){ if(isset($this->vta_tipo_nota_debito_id)){ return $this->vta_tipo_nota_debito_id; }else{ return 'null'; } }
	public function getVtaTipoOrigenNotaDebitoId(){ if(isset($this->vta_tipo_origen_nota_debito_id)){ return $this->vta_tipo_origen_nota_debito_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getVtaNotaDebitoTipoEstadoId(){ if(isset($this->vta_nota_debito_tipo_estado_id)){ return $this->vta_nota_debito_tipo_estado_id; }else{ return 'null'; } }
	public function getVtaPuntoVentaId(){ if(isset($this->vta_punto_venta_id)){ return $this->vta_punto_venta_id; }else{ return 'null'; } }
	public function getGralFpFormaPagoId(){ if(isset($this->gral_fp_forma_pago_id)){ return $this->gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getVtaPreventistaId(){ if(isset($this->vta_preventista_id)){ return $this->vta_preventista_id; }else{ return 'null'; } }
	public function getGralActividadId(){ if(isset($this->gral_actividad_id)){ return $this->gral_actividad_id; }else{ return 'null'; } }
	public function getGralEscenarioId(){ if(isset($this->gral_escenario_id)){ return $this->gral_escenario_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroNotaDebito(){ if(isset($this->numero_nota_debito)){ return $this->numero_nota_debito; }else{ return ''; } }
	public function getNumeroNotaDebitoCompleto(){ if(isset($this->numero_nota_debito_completo)){ return $this->numero_nota_debito_completo; }else{ return ''; } }
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
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getAnio(){ if(isset($this->anio)){ return $this->anio; }else{ return 0; } }
	public function getGralMesId(){ if(isset($this->gral_mes_id)){ return $this->gral_mes_id; }else{ return 'null'; } }
	public function getCntbDiarioAsientoId(){ if(isset($this->cntb_diario_asiento_id)){ return $this->cntb_diario_asiento_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getNumeroTimbrado(){ if(isset($this->numero_timbrado)){ return $this->numero_timbrado; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaNotaDebito */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID."
				, ".self::GEN_ATTR_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_VTA_PUNTO_VENTA_ID."
				, ".self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_VTA_PREVENTISTA_ID."
				, ".self::GEN_ATTR_GRAL_ACTIVIDAD_ID."
				, ".self::GEN_ATTR_GRAL_ESCENARIO_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_NOTA_DEBITO."
				, ".self::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO."
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
				, ".self::GEN_ATTR_NOTA_PUBLICA."
				, ".self::GEN_ATTR_ANIO."
				, ".self::GEN_ATTR_GRAL_MES_ID."
				, ".self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID."
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
				$this->setVtaTipoNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_TIPO_NOTA_DEBITO_ID]);
				$this->setVtaTipoOrigenNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setVtaNotaDebitoTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_TIPO_ESTADO_ID]);
				$this->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
				$this->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
				$this->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
				$this->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
				$this->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroNotaDebito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO]);
				$this->setNumeroNotaDebitoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO]);
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
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
				$this->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
				$this->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
				$this->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
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
	public function setVtaTipoNotaDebitoId($v){ $this->vta_tipo_nota_debito_id = $v; }
	public function setVtaTipoOrigenNotaDebitoId($v){ $this->vta_tipo_origen_nota_debito_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setVtaNotaDebitoTipoEstadoId($v){ $this->vta_nota_debito_tipo_estado_id = $v; }
	public function setVtaPuntoVentaId($v){ $this->vta_punto_venta_id = $v; }
	public function setGralFpFormaPagoId($v){ $this->gral_fp_forma_pago_id = $v; }
	public function setVtaPreventistaId($v){ $this->vta_preventista_id = $v; }
	public function setGralActividadId($v){ $this->gral_actividad_id = $v; }
	public function setGralEscenarioId($v){ $this->gral_escenario_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroNotaDebito($v){ $this->numero_nota_debito = $v; }
	public function setNumeroNotaDebitoCompleto($v){ $this->numero_nota_debito_completo = $v; }
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
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setAnio($v){ $this->anio = $v; }
	public function setGralMesId($v){ $this->gral_mes_id = $v; }
	public function setCntbDiarioAsientoId($v){ $this->cntb_diario_asiento_id = $v; }
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
            $o = new VtaNotaDebito();
            $o->setId($fila[VtaNotaDebito::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setVtaTipoNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_TIPO_NOTA_DEBITO_ID]);
			$o->setVtaTipoOrigenNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setVtaNotaDebitoTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_TIPO_ESTADO_ID]);
			$o->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$o->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$o->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$o->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$o->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroNotaDebito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO]);
			$o->setNumeroNotaDebitoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO]);
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
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$o->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$o->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
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

	/* Control de BVtaNotaDebito */ 	
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

	/* Cambia el estado de BVtaNotaDebito */ 	
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

	/* Save de BVtaNotaDebito */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_TIPO_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_nota_debito_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaTipoNotaDebitoId()."
						, ".$this->getVtaTipoOrigenNotaDebitoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaNotaDebitoTipoEstadoId()."
						, ".$this->getVtaPuntoVentaId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroNotaDebito()."'
						, '".$this->getNumeroNotaDebitoCompleto()."'
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
						, '".$this->getNotaPublica()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNumeroTimbrado()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_nota_debito_seq')";
            
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
                 
				 ".VtaNotaDebito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_NOTA_DEBITO_ID." = ".$this->getVtaTipoNotaDebitoId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID." = ".$this->getVtaTipoOrigenNotaDebitoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_TIPO_ESTADO_ID." = ".$this->getVtaNotaDebitoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO." = '".$this->getNumeroNotaDebito()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO." = '".$this->getNumeroNotaDebitoCompleto()."'
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
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
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
						, ".self::GEN_ATTR_MIN_VTA_TIPO_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
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
						, ".$this->getVtaTipoNotaDebitoId()."
						, ".$this->getVtaTipoOrigenNotaDebitoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getVtaNotaDebitoTipoEstadoId()."
						, ".$this->getVtaPuntoVentaId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getVtaPreventistaId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroNotaDebito()."'
						, '".$this->getNumeroNotaDebitoCompleto()."'
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
						, '".$this->getNotaPublica()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
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
                     
				 ".VtaNotaDebito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_NOTA_DEBITO_ID." = ".$this->getVtaTipoNotaDebitoId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID." = ".$this->getVtaTipoOrigenNotaDebitoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_TIPO_ESTADO_ID." = ".$this->getVtaNotaDebitoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID." = ".$this->getVtaPuntoVentaId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID." = ".$this->getVtaPreventistaId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO." = '".$this->getNumeroNotaDebito()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO." = '".$this->getNumeroNotaDebitoCompleto()."'
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
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
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
            $o = new VtaNotaDebito();
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

	/* Delete de BVtaNotaDebito */ 	
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
	
            // se elimina la coleccion de VtaNotaDebitoImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoVtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaNotaDebitoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaNotaDebitos(null, $c) as $o){
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
            
            // se elimina la coleccion de VtaNotaDebitoVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaDebitoVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuDeVtaNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuDeVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuDeVtaNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaNotaDebito(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaNotaDebito::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtanotadebitos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtanotadebito = new VtaNotaDebito();
                    $vtanotadebito->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtanotadebito->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtanotadebito->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$vtanotadebito->setVtaTipoNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_TIPO_NOTA_DEBITO_ID]);
			$vtanotadebito->setVtaTipoOrigenNotaDebitoId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID]);
			$vtanotadebito->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$vtanotadebito->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$vtanotadebito->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$vtanotadebito->setVtaNotaDebitoTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_NOTA_DEBITO_TIPO_ESTADO_ID]);
			$vtanotadebito->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$vtanotadebito->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$vtanotadebito->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$vtanotadebito->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$vtanotadebito->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$vtanotadebito->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$vtanotadebito->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$vtanotadebito->setNumeroNotaDebito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO]);
			$vtanotadebito->setNumeroNotaDebitoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO]);
			$vtanotadebito->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$vtanotadebito->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$vtanotadebito->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$vtanotadebito->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$vtanotadebito->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$vtanotadebito->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$vtanotadebito->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$vtanotadebito->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$vtanotadebito->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$vtanotadebito->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$vtanotadebito->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtanotadebito->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$vtanotadebito->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$vtanotadebito->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$vtanotadebito->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$vtanotadebito->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtanotadebito->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$vtanotadebito->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$vtanotadebito->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtanotadebito->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtanotadebito->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtanotadebito->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtanotadebito->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtanotadebito->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtanotadebitos[] = $vtanotadebito;
		}
		
		return $vtanotadebitos;
	}	
	

	/* Método getVtaNotaDebitos Habilitados */ 	
	static function getVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaNotaDebito::getVtaNotaDebitos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaNotaDebitos para listado de Backend */ 	
	static function getVtaNotaDebitosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaNotaDebito::getVtaNotaDebitos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaNotaDebitosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaNotaDebito::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaNotaDebito::getVtaNotaDebitos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaNotaDebitos filtrado para select */ 	
	static function getVtaNotaDebitosCmbF($paginador = null, $criterio = null){
            $col = VtaNotaDebito::getVtaNotaDebitos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getVtaNotaDebitosXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de VtaTipoNotaDebito */ 	
	static function getVtaNotaDebitosXVtaTipoNotaDebitos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoNotaDebitoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de VtaTipoOrigenNotaDebito */ 	
	static function getVtaNotaDebitosXVtaTipoOrigenNotaDebitos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoOrigenNotaDebitoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getVtaNotaDebitosXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getVtaNotaDebitosXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getVtaNotaDebitosXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de VtaNotaDebitoTipoEstado */ 	
	static function getVtaNotaDebitosXVtaNotaDebitoTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaNotaDebitoTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de VtaPuntoVenta */ 	
	static function getVtaNotaDebitosXVtaPuntoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPuntoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de GralFpFormaPago */ 	
	static function getVtaNotaDebitosXGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de VtaPreventista */ 	
	static function getVtaNotaDebitosXVtaPreventistas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_VTA_PREVENTISTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPreventistaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de GralActividad */ 	
	static function getVtaNotaDebitosXGralActividads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_ACTIVIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralActividadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de GralEscenario */ 	
	static function getVtaNotaDebitosXGralEscenarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_ESCENARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEscenarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getVtaNotaDebitosXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getVtaNotaDebitosXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaNotaDebitos filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getVtaNotaDebitosXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaNotaDebito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaNotaDebito::GEN_TABLA);
            $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaNotaDebito::getVtaNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_nota_debito_adm.php';
            $url_gestion = 'vta_nota_debito_gestion.php';
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
	

	/* Metodo getVtaNotaDebitoImportes */ 	
	public function getVtaNotaDebitoImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoImporte::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitoimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitoimporte = VtaNotaDebitoImporte::hidratarObjeto($fila);			
                $vtanotadebitoimportes[] = $vtanotadebitoimporte;
            }

            return $vtanotadebitoimportes;
	}	
	

	/* Método getVtaNotaDebitoImportesBloque para MasInfo */ 	
	public function getVtaNotaDebitoImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoImportes Habilitados */ 	
	public function getVtaNotaDebitoImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoImporte */ 	
	public function getVtaNotaDebitoImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoImporte relacionadas */ 	
	public function deleteVtaNotaDebitoImportes(){
            $obs = $this->getVtaNotaDebitoImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoImportesCmb() VtaNotaDebitoImporte relacionadas */ 	
	public function getVtaNotaDebitoImportesCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoImporte::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoImporte::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoImporte::getVtaNotaDebitoImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaNotaDebitoEstados */ 	
	public function getVtaNotaDebitoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoEstado::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitoestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitoestado = VtaNotaDebitoEstado::hidratarObjeto($fila);			
                $vtanotadebitoestados[] = $vtanotadebitoestado;
            }

            return $vtanotadebitoestados;
	}	
	

	/* Método getVtaNotaDebitoEstadosBloque para MasInfo */ 	
	public function getVtaNotaDebitoEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoEstados Habilitados */ 	
	public function getVtaNotaDebitoEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoEstado */ 	
	public function getVtaNotaDebitoEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoEstado relacionadas */ 	
	public function deleteVtaNotaDebitoEstados(){
            $obs = $this->getVtaNotaDebitoEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoEstadosCmb() VtaNotaDebitoEstado relacionadas */ 	
	public function getVtaNotaDebitoEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoEstado::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoEstado::getVtaNotaDebitoEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaDebitoTipoEstados (Coleccion) relacionados a traves de VtaNotaDebitoEstado */ 	
	public function getVtaNotaDebitoTipoEstadosXVtaNotaDebitoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaDebitoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoEstado::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoEstado::GEN_TABLA, VtaNotaDebitoEstado::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID, VtaNotaDebitoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebitoTipoEstado::getVtaNotaDebitoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaDebitoTipoEstados relacionados a traves de VtaNotaDebitoEstado */ 	
	public function getCantidadVtaNotaDebitoTipoEstadosXVtaNotaDebitoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaDebitoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaDebitoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoEstado::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoEstado::GEN_TABLA, VtaNotaDebitoEstado::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID, VtaNotaDebitoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaDebitoTipoEstado::getVtaNotaDebitoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaDebitoTipoEstado (Objeto) relacionado a traves de VtaNotaDebitoEstado */ 	
	public function getVtaNotaDebitoTipoEstadoXVtaNotaDebitoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaDebitoTipoEstadosXVtaNotaDebitoEstado($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoWsFeOpeSolicitud::getVtaNotaDebitoWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeOpeSolicituds (Coleccion) relacionados a traves de VtaNotaDebitoWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudsXVtaNotaDebitoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA, VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeOpeSolicituds relacionados a traves de VtaNotaDebitoWsFeOpeSolicitud */ 	
	public function getCantidadWsFeOpeSolicitudsXVtaNotaDebitoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeOpeSolicitud::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoWsFeOpeSolicitud::GEN_TABLA, VtaNotaDebitoWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeOpeSolicitud (Objeto) relacionado a traves de VtaNotaDebitoWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudXVtaNotaDebitoWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeOpeSolicitudsXVtaNotaDebitoWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitoVtaTributos */ 	
	public function getVtaNotaDebitoVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitovtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitovtatributo = VtaNotaDebitoVtaTributo::hidratarObjeto($fila);			
                $vtanotadebitovtatributos[] = $vtanotadebitovtatributo;
            }

            return $vtanotadebitovtatributos;
	}	
	

	/* Método getVtaNotaDebitoVtaTributosBloque para MasInfo */ 	
	public function getVtaNotaDebitoVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaTributos Habilitados */ 	
	public function getVtaNotaDebitoVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaTributo */ 	
	public function getVtaNotaDebitoVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoVtaTributo relacionadas */ 	
	public function deleteVtaNotaDebitoVtaTributos(){
            $obs = $this->getVtaNotaDebitoVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoVtaTributosCmb() VtaNotaDebitoVtaTributo relacionadas */ 	
	public function getVtaNotaDebitoVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoVtaTributo::getVtaNotaDebitoVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTributos (Coleccion) relacionados a traves de VtaNotaDebitoVtaTributo */ 	
	public function getVtaTributosXVtaNotaDebitoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaTributo::GEN_TABLA, VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTributos relacionados a traves de VtaNotaDebitoVtaTributo */ 	
	public function getCantidadVtaTributosXVtaNotaDebitoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaTributo::GEN_TABLA, VtaNotaDebitoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTributo (Objeto) relacionado a traves de VtaNotaDebitoVtaTributo */ 	
	public function getVtaTributoXVtaNotaDebitoVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTributosXVtaNotaDebitoVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitoVtaNotaCreditos */ 	
	public function getVtaNotaDebitoVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoVtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoVtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoVtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoVtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitovtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitovtanotacredito = VtaNotaDebitoVtaNotaCredito::hidratarObjeto($fila);			
                $vtanotadebitovtanotacreditos[] = $vtanotadebitovtanotacredito;
            }

            return $vtanotadebitovtanotacreditos;
	}	
	

	/* Método getVtaNotaDebitoVtaNotaCreditosBloque para MasInfo */ 	
	public function getVtaNotaDebitoVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaNotaCreditos Habilitados */ 	
	public function getVtaNotaDebitoVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoVtaNotaCredito */ 	
	public function getVtaNotaDebitoVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoVtaNotaCredito relacionadas */ 	
	public function deleteVtaNotaDebitoVtaNotaCreditos(){
            $obs = $this->getVtaNotaDebitoVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoVtaNotaCreditosCmb() VtaNotaDebitoVtaNotaCredito relacionadas */ 	
	public function getVtaNotaDebitoVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoVtaNotaCredito::getVtaNotaDebitoVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaNotaDebitoVtaNotaCredito */ 	
	public function getVtaNotaCreditosXVtaNotaDebitoVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaNotaCredito::GEN_TABLA, VtaNotaDebitoVtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaNotaDebitoVtaNotaCredito */ 	
	public function getCantidadVtaNotaCreditosXVtaNotaDebitoVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaNotaCredito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaNotaCredito::GEN_TABLA, VtaNotaDebitoVtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaNotaDebitoVtaNotaCredito */ 	
	public function getVtaNotaCreditoXVtaNotaDebitoVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaNotaDebitoVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoVtaRecibo::getVtaNotaDebitoVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRecibos (Coleccion) relacionados a traves de VtaNotaDebitoVtaRecibo */ 	
	public function getVtaRecibosXVtaNotaDebitoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaRecibo::GEN_TABLA, VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRecibos relacionados a traves de VtaNotaDebitoVtaRecibo */ 	
	public function getCantidadVtaRecibosXVtaNotaDebitoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaRecibo::GEN_TABLA, VtaNotaDebitoVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRecibo (Objeto) relacionado a traves de VtaNotaDebitoVtaRecibo */ 	
	public function getVtaReciboXVtaNotaDebitoVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRecibosXVtaNotaDebitoVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaNotaDebitoEnviados */ 	
	public function getVtaNotaDebitoEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoEnviado::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitoenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitoenviado = VtaNotaDebitoEnviado::hidratarObjeto($fila);			
                $vtanotadebitoenviados[] = $vtanotadebitoenviado;
            }

            return $vtanotadebitoenviados;
	}	
	

	/* Método getVtaNotaDebitoEnviadosBloque para MasInfo */ 	
	public function getVtaNotaDebitoEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoEnviados Habilitados */ 	
	public function getVtaNotaDebitoEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoEnviado */ 	
	public function getVtaNotaDebitoEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoEnviado relacionadas */ 	
	public function deleteVtaNotaDebitoEnviados(){
            $obs = $this->getVtaNotaDebitoEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoEnviadosCmb() VtaNotaDebitoEnviado relacionadas */ 	
	public function getVtaNotaDebitoEnviadosCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoEnviado::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoEnviado::getVtaNotaDebitoEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaNotaDebitoItems */ 	
	public function getVtaNotaDebitoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaDebitoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaDebitoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaDebitoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaDebitoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaDebitoItem::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaDebitoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaDebitoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotadebitoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotadebitoitem = VtaNotaDebitoItem::hidratarObjeto($fila);			
                $vtanotadebitoitems[] = $vtanotadebitoitem;
            }

            return $vtanotadebitoitems;
	}	
	

	/* Método getVtaNotaDebitoItemsBloque para MasInfo */ 	
	public function getVtaNotaDebitoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaDebitoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaDebitoItems Habilitados */ 	
	public function getVtaNotaDebitoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaDebitoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaDebitoItem */ 	
	public function getVtaNotaDebitoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaDebitoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaDebitoItem relacionadas */ 	
	public function deleteVtaNotaDebitoItems(){
            $obs = $this->getVtaNotaDebitoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaDebitoItemsCmb() VtaNotaDebitoItem relacionadas */ 	
	public function getVtaNotaDebitoItemsCmb(){
            $c = new Criterio();
            $c->add(VtaNotaDebitoItem::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoItem::getVtaNotaDebitoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoIvas (Coleccion) relacionados a traves de VtaNotaDebitoItem */ 	
	public function getGralTipoIvasXVtaNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoItem::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoItem::GEN_TABLA, VtaNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoIvas relacionados a traves de VtaNotaDebitoItem */ 	
	public function getCantidadGralTipoIvasXVtaNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoIva::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoItem::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoItem::GEN_TABLA, VtaNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoIva (Objeto) relacionado a traves de VtaNotaDebitoItem */ 	
	public function getGralTipoIvaXVtaNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoIvasXVtaNotaDebitoItem($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaNotaDebito::getVtaFacturaVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaVtaNotaDebito */ 	
	public function getVtaFacturasXVtaFacturaVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaNotaDebito::GEN_TABLA, VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaVtaNotaDebito */ 	
	public function getCantidadVtaFacturasXVtaFacturaVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaNotaDebito::GEN_TABLA, VtaFacturaVtaNotaDebito::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaVtaNotaDebito */ 	
	public function getVtaFacturaXVtaFacturaVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaNotaDebitos */ 	
	public function getCntbDiarioAsientoVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtanotadebito = CntbDiarioAsientoVtaNotaDebito::hidratarObjeto($fila);			
                $cntbdiarioasientovtanotadebitos[] = $cntbdiarioasientovtanotadebito;
            }

            return $cntbdiarioasientovtanotadebitos;
	}	
	

	/* Método getCntbDiarioAsientoVtaNotaDebitosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaNotaDebitos Habilitados */ 	
	public function getCntbDiarioAsientoVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaNotaDebito */ 	
	public function getCntbDiarioAsientoVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaNotaDebito relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaNotaDebitos(){
            $obs = $this->getCntbDiarioAsientoVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaNotaDebitosCmb() CntbDiarioAsientoVtaNotaDebito relacionadas */ 	
	public function getCntbDiarioAsientoVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaNotaDebito::getCntbDiarioAsientoVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaNotaDebito */ 	
	public function getCntbPeriodosXCntbDiarioAsientoVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA, CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoVtaNotaDebito */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaNotaDebito::GEN_TABLA, CntbDiarioAsientoVtaNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoVtaNotaDebito */ 	
	public function getCntbPeriodoXCntbDiarioAsientoVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(AfipCitiVentasCbte::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiVentasCbte::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiVentasAlicuotas::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaDebitoVtaAjusteHaber::getVtaNotaDebitoVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaNotaDebitoVtaAjusteHaber */ 	
	public function getVtaAjusteHabersXVtaNotaDebitoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA, VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaNotaDebitoVtaAjusteHaber */ 	
	public function getCantidadVtaAjusteHabersXVtaNotaDebitoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaNotaDebitoVtaAjusteHaber::GEN_TABLA, VtaNotaDebitoVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaNotaDebitoVtaAjusteHaber */ 	
	public function getVtaAjusteHaberXVtaNotaDebitoVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaNotaDebitoVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuDeVtaNotaDebitos */ 	
	public function getEkuDeVtaNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuDeVtaNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuDeVtaNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuDeVtaNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(EkuDeVtaNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuDeVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuDeVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuDeVtaNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuDeVtaNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekudevtanotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekudevtanotadebito = EkuDeVtaNotaDebito::hidratarObjeto($fila);			
                $ekudevtanotadebitos[] = $ekudevtanotadebito;
            }

            return $ekudevtanotadebitos;
	}	
	

	/* Método getEkuDeVtaNotaDebitosBloque para MasInfo */ 	
	public function getEkuDeVtaNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuDeVtaNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuDeVtaNotaDebitos Habilitados */ 	
	public function getEkuDeVtaNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuDeVtaNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuDeVtaNotaDebito */ 	
	public function getEkuDeVtaNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuDeVtaNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuDeVtaNotaDebito relacionadas */ 	
	public function deleteEkuDeVtaNotaDebitos(){
            $obs = $this->getEkuDeVtaNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuDeVtaNotaDebitosCmb() EkuDeVtaNotaDebito relacionadas */ 	
	public function getEkuDeVtaNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(EkuDeVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDeVtaNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = EkuDeVtaNotaDebito::getEkuDeVtaNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuDes (Coleccion) relacionados a traves de EkuDeVtaNotaDebito */ 	
	public function getEkuDesXEkuDeVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaNotaDebito::GEN_TABLA, EkuDeVtaNotaDebito::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuDes relacionados a traves de EkuDeVtaNotaDebito */ 	
	public function getCantidadEkuDesXEkuDeVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuDe::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuDe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuDeVtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuDeVtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuDe::GEN_TABLA);
            $c->addRealJoin(EkuDeVtaNotaDebito::GEN_TABLA, EkuDeVtaNotaDebito::GEN_ATTR_EKU_DE_ID, EkuDe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuDe::getEkuDes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuDe (Objeto) relacionado a traves de EkuDeVtaNotaDebito */ 	
	public function getEkuDeXEkuDeVtaNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuDesXEkuDeVtaNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los WsFeOpeSolicituds asignados a VtaNotaDebito */ 	
	public function getVtaNotaDebitoWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaNotaDebitoWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getWsFeOpeSolicitudId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeOpeSolicituds asignados al VtaNotaDebito */ 	
	public function setVtaNotaDebitoWsFeOpeSolicituds($ids){
            $this->deleteVtaNotaDebitoWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaNotaDebitoWsFeOpeSolicitud();
                    $o->setWsFeOpeSolicitudId($id);
                    $o->setVtaNotaDebitoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeOpeSolicitud en el alta de VtaNotaDebito */ 	
	public function getAltaMostrarBloqueRelacionVtaNotaDebitoWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTributos asignados a VtaNotaDebito */ 	
	public function getVtaNotaDebitoVtaTributosId(){
            $ids = array();
            foreach($this->getVtaNotaDebitoVtaTributos() as $o){
            
                $ids[] = $o->getVtaTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTributos asignados al VtaNotaDebito */ 	
	public function setVtaNotaDebitoVtaTributos($ids){
            $this->deleteVtaNotaDebitoVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaNotaDebitoVtaTributo();
                    $o->setVtaTributoId($id);
                    $o->setVtaNotaDebitoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTributo en el alta de VtaNotaDebito */ 	
	public function getAltaMostrarBloqueRelacionVtaNotaDebitoVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los EkuDes asignados a VtaNotaDebito */ 	
	public function getEkuDeVtaNotaDebitosId(){
            $ids = array();
            foreach($this->getEkuDeVtaNotaDebitos() as $o){
            
                $ids[] = $o->getEkuDeId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuDes asignados al VtaNotaDebito */ 	
	public function setEkuDeVtaNotaDebitos($ids){
            $this->deleteEkuDeVtaNotaDebitos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuDeVtaNotaDebito();
                    $o->setEkuDeId($id);
                    $o->setVtaNotaDebitoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuDe en el alta de VtaNotaDebito */ 	
	public function getAltaMostrarBloqueRelacionEkuDeVtaNotaDebito(){
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

	/* Metodo que retorna el VtaTipoNotaDebito (Clave Foranea) */ 	
    public function getVtaTipoNotaDebito(){
        $o = new VtaTipoNotaDebito();
        $o->setId($this->getVtaTipoNotaDebitoId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoNotaDebito (Clave Foranea) en Array */ 	
    public function getVtaTipoNotaDebitoEnArray(&$arr_os){
        if($this->getVtaTipoNotaDebitoId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoNotaDebitoId()])){
                $o = $arr_os[$this->getVtaTipoNotaDebitoId()];
            }else{
                $o = VtaTipoNotaDebito::getOxId($this->getVtaTipoNotaDebitoId());
                if($o){
                    $arr_os[$this->getVtaTipoNotaDebitoId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoNotaDebito();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoOrigenNotaDebito (Clave Foranea) */ 	
    public function getVtaTipoOrigenNotaDebito(){
        $o = new VtaTipoOrigenNotaDebito();
        $o->setId($this->getVtaTipoOrigenNotaDebitoId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoOrigenNotaDebito (Clave Foranea) en Array */ 	
    public function getVtaTipoOrigenNotaDebitoEnArray(&$arr_os){
        if($this->getVtaTipoOrigenNotaDebitoId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoOrigenNotaDebitoId()])){
                $o = $arr_os[$this->getVtaTipoOrigenNotaDebitoId()];
            }else{
                $o = VtaTipoOrigenNotaDebito::getOxId($this->getVtaTipoOrigenNotaDebitoId());
                if($o){
                    $arr_os[$this->getVtaTipoOrigenNotaDebitoId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoOrigenNotaDebito();
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

	/* Metodo que retorna el VtaNotaDebitoTipoEstado (Clave Foranea) */ 	
    public function getVtaNotaDebitoTipoEstado(){
        $o = new VtaNotaDebitoTipoEstado();
        $o->setId($this->getVtaNotaDebitoTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaNotaDebitoTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaNotaDebitoTipoEstadoEnArray(&$arr_os){
        if($this->getVtaNotaDebitoTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaNotaDebitoTipoEstadoId()])){
                $o = $arr_os[$this->getVtaNotaDebitoTipoEstadoId()];
            }else{
                $o = VtaNotaDebitoTipoEstado::getOxId($this->getVtaNotaDebitoTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaNotaDebitoTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaNotaDebitoTipoEstado();
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
            		
        if($contexto_solicitante != VtaTipoNotaDebito::GEN_CLASE){
            if($this->getVtaTipoNotaDebito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoNotaDebito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoNotaDebito()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoOrigenNotaDebito::GEN_CLASE){
            if($this->getVtaTipoOrigenNotaDebito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoOrigenNotaDebito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoOrigenNotaDebito()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != VtaNotaDebitoTipoEstado::GEN_CLASE){
            if($this->getVtaNotaDebitoTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaNotaDebitoTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaNotaDebitoTipoEstado()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != GralTipoDocumento::GEN_CLASE){
            if($this->getGralTipoDocumento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoDocumento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoDocumento()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_nota_debito'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_nota_debito';");
            
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

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_nota_debito_id' */ 	
	static function getOxVtaTipoNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_nota_debito_id' */ 	
	static function getOsxVtaTipoNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_origen_nota_debito_id' */ 	
	static function getOxVtaTipoOrigenNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_origen_nota_debito_id' */ 	
	static function getOsxVtaTipoOrigenNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_nota_debito_tipo_estado_id' */ 	
	static function getOxVtaNotaDebitoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_nota_debito_tipo_estado_id' */ 	
	static function getOsxVtaNotaDebitoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_punto_venta_id' */ 	
	static function getOxVtaPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_preventista_id' */ 	
	static function getOxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_actividad_id' */ 	
	static function getOxGralActividadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ACTIVIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_escenario_id' */ 	
	static function getOxGralEscenarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ESCENARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_nota_debito' */ 	
	static function getOxNumeroNotaDebito($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_DEBITO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_nota_debito' */ 	
	static function getOsxNumeroNotaDebito($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_DEBITO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_nota_debito_completo' */ 	
	static function getOxNumeroNotaDebitoCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_nota_debito_completo' */ 	
	static function getOsxNumeroNotaDebitoCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_vencimiento' */ 	
	static function getOxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_documento' */ 	
	static function getOxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_email' */ 	
	static function getOxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_timbrado' */ 	
	static function getOxNumeroTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos(null, $criterio);
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

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
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

            $obs = self::getVtaNotaDebitos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_nota_debito_adm');
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
                $c->addTabla(VtaNotaDebito::GEN_TABLA);
                $c->addOrden(VtaNotaDebito::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos(null, $c);

                $arr = array();
                foreach($vta_nota_debitos as $vta_nota_debito){
                    $descripcion = $vta_nota_debito->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>