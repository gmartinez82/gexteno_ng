<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaAjusteDebe
{ 
	
	const SES_PAGINACION = 'adm_vtaajustedebe_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtaajustedebe_paginas_registros';
	const SES_CRITERIOS = 'adm_vtaajustedebe_criterios';
	
	const GEN_CLASE = 'VtaAjusteDebe';
	const GEN_TABLA = 'vta_ajuste_debe';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaAjusteDebe */ 
	const GEN_ATTR_ID = 'vta_ajuste_debe.id';
	const GEN_ATTR_DESCRIPCION = 'vta_ajuste_debe.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'vta_ajuste_debe.cli_cliente_id';
	const GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID = 'vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id';
	const GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID = 'vta_ajuste_debe.vta_tipo_ajuste_debe_id';
	const GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID = 'vta_ajuste_debe.vta_tipo_origen_ajuste_debe_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'vta_ajuste_debe.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'vta_ajuste_debe.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'vta_ajuste_debe.gral_empresa_id';
	const GEN_ATTR_VTA_PUNTO_VENTA_ID = 'vta_ajuste_debe.vta_punto_venta_id';
	const GEN_ATTR_GRAL_FP_FORMA_PAGO_ID = 'vta_ajuste_debe.gral_fp_forma_pago_id';
	const GEN_ATTR_GRAL_FP_CUOTA_ID = 'vta_ajuste_debe.gral_fp_cuota_id';
	const GEN_ATTR_VTA_PREVENTISTA_ID = 'vta_ajuste_debe.vta_preventista_id';
	const GEN_ATTR_VTA_COMPRADOR_ID = 'vta_ajuste_debe.vta_comprador_id';
	const GEN_ATTR_VTA_VENDEDOR_ID = 'vta_ajuste_debe.vta_vendedor_id';
	const GEN_ATTR_GRAL_ACTIVIDAD_ID = 'vta_ajuste_debe.gral_actividad_id';
	const GEN_ATTR_GRAL_ESCENARIO_ID = 'vta_ajuste_debe.gral_escenario_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'vta_ajuste_debe.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'vta_ajuste_debe.numero_punto_venta';
	const GEN_ATTR_NUMERO_AJUSTE_DEBE = 'vta_ajuste_debe.numero_ajuste_debe';
	const GEN_ATTR_NUMERO_AJUSTE_DEBE_COMPLETO = 'vta_ajuste_debe.numero_ajuste_debe_completo';
	const GEN_ATTR_CAE = 'vta_ajuste_debe.cae';
	const GEN_ATTR_FECHA_EMISION = 'vta_ajuste_debe.fecha_emision';
	const GEN_ATTR_FECHA_VENCIMIENTO = 'vta_ajuste_debe.fecha_vencimiento';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'vta_ajuste_debe.gral_tipo_documento_id';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'vta_ajuste_debe.persona_descripcion';
	const GEN_ATTR_PERSONA_DOCUMENTO = 'vta_ajuste_debe.persona_documento';
	const GEN_ATTR_PERSONA_EMAIL = 'vta_ajuste_debe.persona_email';
	const GEN_ATTR_RAZON_SOCIAL = 'vta_ajuste_debe.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'vta_ajuste_debe.domicilio_legal';
	const GEN_ATTR_CUIT = 'vta_ajuste_debe.cuit';
	const GEN_ATTR_CODIGO = 'vta_ajuste_debe.codigo';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'vta_ajuste_debe.gral_sucursal_id';
	const GEN_ATTR_VTA_PRESUPUESTO_ID = 'vta_ajuste_debe.vta_presupuesto_id';
	const GEN_ATTR_NOTA_PUBLICA = 'vta_ajuste_debe.nota_publica';
	const GEN_ATTR_ANIO = 'vta_ajuste_debe.anio';
	const GEN_ATTR_GRAL_MES_ID = 'vta_ajuste_debe.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'vta_ajuste_debe.cntb_diario_asiento_id';
	const GEN_ATTR_PORCENTAJE = 'vta_ajuste_debe.porcentaje';
	const GEN_ATTR_OBSERVACION = 'vta_ajuste_debe.observacion';
	const GEN_ATTR_NOTA_INTERNA = 'vta_ajuste_debe.nota_interna';
	const GEN_ATTR_ORDEN = 'vta_ajuste_debe.orden';
	const GEN_ATTR_ESTADO = 'vta_ajuste_debe.estado';
	const GEN_ATTR_CREADO = 'vta_ajuste_debe.creado';
	const GEN_ATTR_CREADO_POR = 'vta_ajuste_debe.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_ajuste_debe.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_ajuste_debe.modificado_por';

	/* Constantes de Atributos Min de BVtaAjusteDebe */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID = 'vta_ajuste_debe_tipo_estado_id';
	const GEN_ATTR_MIN_VTA_TIPO_AJUSTE_DEBE_ID = 'vta_tipo_ajuste_debe_id';
	const GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID = 'vta_tipo_origen_ajuste_debe_id';
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
	const GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE = 'numero_ajuste_debe';
	const GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE_COMPLETO = 'numero_ajuste_debe_completo';
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
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_ID = 'vta_presupuesto_id';
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
	const GEN_ATTR_MIN_ANIO = 'anio';
	const GEN_ATTR_MIN_GRAL_MES_ID = 'gral_mes_id';
	const GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID = 'cntb_diario_asiento_id';
	const GEN_ATTR_MIN_PORCENTAJE = 'porcentaje';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_NOTA_INTERNA = 'nota_interna';
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
	

	/* Atributos de BVtaAjusteDebe */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $vta_ajuste_debe_tipo_estado_id;
	private $vta_tipo_ajuste_debe_id;
	private $vta_tipo_origen_ajuste_debe_id;
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
	private $numero_ajuste_debe;
	private $numero_ajuste_debe_completo;
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
	private $gral_sucursal_id;
	private $vta_presupuesto_id;
	private $nota_publica;
	private $anio;
	private $gral_mes_id;
	private $cntb_diario_asiento_id;
	private $porcentaje;
	private $observacion;
	private $nota_interna;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaAjusteDebe */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getVtaAjusteDebeTipoEstadoId(){ if(isset($this->vta_ajuste_debe_tipo_estado_id)){ return $this->vta_ajuste_debe_tipo_estado_id; }else{ return 'null'; } }
	public function getVtaTipoAjusteDebeId(){ if(isset($this->vta_tipo_ajuste_debe_id)){ return $this->vta_tipo_ajuste_debe_id; }else{ return 'null'; } }
	public function getVtaTipoOrigenAjusteDebeId(){ if(isset($this->vta_tipo_origen_ajuste_debe_id)){ return $this->vta_tipo_origen_ajuste_debe_id; }else{ return 'null'; } }
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
	public function getNumeroAjusteDebe(){ if(isset($this->numero_ajuste_debe)){ return $this->numero_ajuste_debe; }else{ return ''; } }
	public function getNumeroAjusteDebeCompleto(){ if(isset($this->numero_ajuste_debe_completo)){ return $this->numero_ajuste_debe_completo; }else{ return ''; } }
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
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getVtaPresupuestoId(){ if(isset($this->vta_presupuesto_id)){ return $this->vta_presupuesto_id; }else{ return 'null'; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getAnio(){ if(isset($this->anio)){ return $this->anio; }else{ return 0; } }
	public function getGralMesId(){ if(isset($this->gral_mes_id)){ return $this->gral_mes_id; }else{ return 'null'; } }
	public function getCntbDiarioAsientoId(){ if(isset($this->cntb_diario_asiento_id)){ return $this->cntb_diario_asiento_id; }else{ return 'null'; } }
	public function getPorcentaje(){ if(isset($this->porcentaje)){ return $this->porcentaje; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaAjusteDebe */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID."
				, ".self::GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID."
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
				, ".self::GEN_ATTR_NUMERO_AJUSTE_DEBE."
				, ".self::GEN_ATTR_NUMERO_AJUSTE_DEBE_COMPLETO."
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
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_ID."
				, ".self::GEN_ATTR_NOTA_PUBLICA."
				, ".self::GEN_ATTR_ANIO."
				, ".self::GEN_ATTR_GRAL_MES_ID."
				, ".self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID."
				, ".self::GEN_ATTR_PORCENTAJE."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_NOTA_INTERNA."
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
				$this->setVtaAjusteDebeTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID]);
				$this->setVtaTipoAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_DEBE_ID]);
				$this->setVtaTipoOrigenAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID]);
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
				$this->setNumeroAjusteDebe($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE]);
				$this->setNumeroAjusteDebeCompleto($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE_COMPLETO]);
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
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
				$this->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
				$this->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
				$this->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
				$this->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
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
	public function setVtaAjusteDebeTipoEstadoId($v){ $this->vta_ajuste_debe_tipo_estado_id = $v; }
	public function setVtaTipoAjusteDebeId($v){ $this->vta_tipo_ajuste_debe_id = $v; }
	public function setVtaTipoOrigenAjusteDebeId($v){ $this->vta_tipo_origen_ajuste_debe_id = $v; }
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
	public function setNumeroAjusteDebe($v){ $this->numero_ajuste_debe = $v; }
	public function setNumeroAjusteDebeCompleto($v){ $this->numero_ajuste_debe_completo = $v; }
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
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setVtaPresupuestoId($v){ $this->vta_presupuesto_id = $v; }
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setAnio($v){ $this->anio = $v; }
	public function setGralMesId($v){ $this->gral_mes_id = $v; }
	public function setCntbDiarioAsientoId($v){ $this->cntb_diario_asiento_id = $v; }
	public function setPorcentaje($v){ $this->porcentaje = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaAjusteDebe();
            $o->setId($fila[VtaAjusteDebe::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setVtaAjusteDebeTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID]);
			$o->setVtaTipoAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_DEBE_ID]);
			$o->setVtaTipoOrigenAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID]);
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
			$o->setNumeroAjusteDebe($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE]);
			$o->setNumeroAjusteDebeCompleto($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE_COMPLETO]);
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
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$o->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$o->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$o->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaAjusteDebe */ 	
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

	/* Cambia el estado de BVtaAjusteDebe */ 	
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

	/* Save de BVtaAjusteDebe */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_DEBE_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID."
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
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE."
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_ajuste_debe_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaAjusteDebeTipoEstadoId()."
						, ".$this->getVtaTipoAjusteDebeId()."
						, ".$this->getVtaTipoOrigenAjusteDebeId()."
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
						, '".$this->getNumeroAjusteDebe()."'
						, '".$this->getNumeroAjusteDebeCompleto()."'
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
						, ".$this->getGralSucursalId()."
						, ".$this->getVtaPresupuestoId()."
						, '".$this->getNotaPublica()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getPorcentaje()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_ajuste_debe_seq')";
            
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
                 
				 ".VtaAjusteDebe::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID." = ".$this->getVtaAjusteDebeTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_DEBE_ID." = ".$this->getVtaTipoAjusteDebeId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID." = ".$this->getVtaTipoOrigenAjusteDebeId()."
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
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE." = '".$this->getNumeroAjusteDebe()."'
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE_COMPLETO." = '".$this->getNumeroAjusteDebeCompleto()."'
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE." = ".$this->getPorcentaje()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
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
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_DEBE_ID."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID."
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
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE."
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getVtaAjusteDebeTipoEstadoId()."
						, ".$this->getVtaTipoAjusteDebeId()."
						, ".$this->getVtaTipoOrigenAjusteDebeId()."
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
						, '".$this->getNumeroAjusteDebe()."'
						, '".$this->getNumeroAjusteDebeCompleto()."'
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
						, ".$this->getGralSucursalId()."
						, ".$this->getVtaPresupuestoId()."
						, '".$this->getNotaPublica()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getPorcentaje()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
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
                     
				 ".VtaAjusteDebe::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID." = ".$this->getVtaAjusteDebeTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_DEBE_ID." = ".$this->getVtaTipoAjusteDebeId()."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID." = ".$this->getVtaTipoOrigenAjusteDebeId()."
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
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE." = '".$this->getNumeroAjusteDebe()."'
						, ".self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE_COMPLETO." = '".$this->getNumeroAjusteDebeCompleto()."'
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE." = ".$this->getPorcentaje()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
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
            $o = new VtaAjusteDebe();
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

	/* Delete de BVtaAjusteDebe */ 	
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
	
            // se elimina la coleccion de VtaComisionVtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionVtaAjusteDebeConfiguracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionVtaAjusteDebeConfiguracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndChqCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeItemCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeItemCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeItemCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeItemRetencions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeItemRetencion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeItemRetencions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeWsFeOpeSolicituds relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeWsFeOpeSolicituds(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaVtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoVtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaAjusteDebe(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaAjusteDebe::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtaajustedebes = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtaajustedebe = new VtaAjusteDebe();
                    $vtaajustedebe->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtaajustedebe->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtaajustedebe->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$vtaajustedebe->setVtaAjusteDebeTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID]);
			$vtaajustedebe->setVtaTipoAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_TIPO_AJUSTE_DEBE_ID]);
			$vtaajustedebe->setVtaTipoOrigenAjusteDebeId($fila[self::GEN_ATTR_MIN_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID]);
			$vtaajustedebe->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$vtaajustedebe->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$vtaajustedebe->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$vtaajustedebe->setVtaPuntoVentaId($fila[self::GEN_ATTR_MIN_VTA_PUNTO_VENTA_ID]);
			$vtaajustedebe->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$vtaajustedebe->setGralFpCuotaId($fila[self::GEN_ATTR_MIN_GRAL_FP_CUOTA_ID]);
			$vtaajustedebe->setVtaPreventistaId($fila[self::GEN_ATTR_MIN_VTA_PREVENTISTA_ID]);
			$vtaajustedebe->setVtaCompradorId($fila[self::GEN_ATTR_MIN_VTA_COMPRADOR_ID]);
			$vtaajustedebe->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$vtaajustedebe->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$vtaajustedebe->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$vtaajustedebe->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$vtaajustedebe->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$vtaajustedebe->setNumeroAjusteDebe($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE]);
			$vtaajustedebe->setNumeroAjusteDebeCompleto($fila[self::GEN_ATTR_MIN_NUMERO_AJUSTE_DEBE_COMPLETO]);
			$vtaajustedebe->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$vtaajustedebe->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$vtaajustedebe->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$vtaajustedebe->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$vtaajustedebe->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$vtaajustedebe->setPersonaDocumento($fila[self::GEN_ATTR_MIN_PERSONA_DOCUMENTO]);
			$vtaajustedebe->setPersonaEmail($fila[self::GEN_ATTR_MIN_PERSONA_EMAIL]);
			$vtaajustedebe->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$vtaajustedebe->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$vtaajustedebe->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$vtaajustedebe->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtaajustedebe->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$vtaajustedebe->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$vtaajustedebe->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$vtaajustedebe->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$vtaajustedebe->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$vtaajustedebe->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$vtaajustedebe->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
			$vtaajustedebe->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtaajustedebe->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$vtaajustedebe->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtaajustedebe->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtaajustedebe->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtaajustedebe->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtaajustedebe->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtaajustedebe->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtaajustedebes[] = $vtaajustedebe;
		}
		
		return $vtaajustedebes;
	}	
	

	/* Método getVtaAjusteDebes Habilitados */ 	
	static function getVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaAjusteDebe::getVtaAjusteDebes($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaAjusteDebes para listado de Backend */ 	
	static function getVtaAjusteDebesDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaAjusteDebe::getVtaAjusteDebes($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaAjusteDebesCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaAjusteDebe::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaAjusteDebe::getVtaAjusteDebes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteDebes filtrado para select */ 	
	static function getVtaAjusteDebesCmbF($paginador = null, $criterio = null){
            $col = VtaAjusteDebe::getVtaAjusteDebes($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getVtaAjusteDebesXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de VtaAjusteDebeTipoEstado */ 	
	static function getVtaAjusteDebesXVtaAjusteDebeTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaAjusteDebeTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de VtaTipoAjusteDebe */ 	
	static function getVtaAjusteDebesXVtaTipoAjusteDebes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoAjusteDebeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de VtaTipoOrigenAjusteDebe */ 	
	static function getVtaAjusteDebesXVtaTipoOrigenAjusteDebes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoOrigenAjusteDebeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getVtaAjusteDebesXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getVtaAjusteDebesXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getVtaAjusteDebesXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de VtaPuntoVenta */ 	
	static function getVtaAjusteDebesXVtaPuntoVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PUNTO_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPuntoVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralFpFormaPago */ 	
	static function getVtaAjusteDebesXGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralFpCuota */ 	
	static function getVtaAjusteDebesXGralFpCuotas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_FP_CUOTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpCuotaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de VtaPreventista */ 	
	static function getVtaAjusteDebesXVtaPreventistas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PREVENTISTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPreventistaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de VtaComprador */ 	
	static function getVtaAjusteDebesXVtaCompradors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_COMPRADOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaCompradorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de VtaVendedor */ 	
	static function getVtaAjusteDebesXVtaVendedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_VENDEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaVendedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralActividad */ 	
	static function getVtaAjusteDebesXGralActividads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_ACTIVIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralActividadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralEscenario */ 	
	static function getVtaAjusteDebesXGralEscenarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_ESCENARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEscenarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getVtaAjusteDebesXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getVtaAjusteDebesXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de VtaPresupuesto */ 	
	static function getVtaAjusteDebesXVtaPresupuestos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PRESUPUESTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getVtaAjusteDebesXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaAjusteDebes filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getVtaAjusteDebesXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaAjusteDebe::getVtaAjusteDebes($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_ajuste_debe_adm.php';
            $url_gestion = 'vta_ajuste_debe_gestion.php';
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
	

	/* Metodo getVtaComisionVtaAjusteDebes */ 	
	public function getVtaComisionVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionVtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionVtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionVtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionVtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionVtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionvtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionvtaajustedebe = VtaComisionVtaAjusteDebe::hidratarObjeto($fila);			
                $vtacomisionvtaajustedebes[] = $vtacomisionvtaajustedebe;
            }

            return $vtacomisionvtaajustedebes;
	}	
	

	/* Método getVtaComisionVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaComisionVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionVtaAjusteDebes Habilitados */ 	
	public function getVtaComisionVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionVtaAjusteDebe */ 	
	public function getVtaComisionVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionVtaAjusteDebe relacionadas */ 	
	public function deleteVtaComisionVtaAjusteDebes(){
            $obs = $this->getVtaComisionVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionVtaAjusteDebesCmb() VtaComisionVtaAjusteDebe relacionadas */ 	
	public function getVtaComisionVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionVtaAjusteDebe::getVtaComisionVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaComisions (Coleccion) relacionados a traves de VtaComisionVtaAjusteDebe */ 	
	public function getVtaComisionsXVtaComisionVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaAjusteDebe::GEN_TABLA, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, VtaComision::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComision::getVtaComisions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaComisions relacionados a traves de VtaComisionVtaAjusteDebe */ 	
	public function getCantidadVtaComisionsXVtaComisionVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaComision::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaAjusteDebe::GEN_TABLA, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, VtaComision::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaComision::getVtaComisions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaComision (Objeto) relacionado a traves de VtaComisionVtaAjusteDebe */ 	
	public function getVtaComisionXVtaComisionVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaComisionsXVtaComisionVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionVtaAjusteDebeConfiguracions */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionVtaAjusteDebeConfiguracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionVtaAjusteDebeConfiguracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionvtaajustedebeconfiguracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionvtaajustedebeconfiguracion = VtaComisionVtaAjusteDebeConfiguracion::hidratarObjeto($fila);			
                $vtacomisionvtaajustedebeconfiguracions[] = $vtacomisionvtaajustedebeconfiguracion;
            }

            return $vtacomisionvtaajustedebeconfiguracions;
	}	
	

	/* Método getVtaComisionVtaAjusteDebeConfiguracionsBloque para MasInfo */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionVtaAjusteDebeConfiguracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionVtaAjusteDebeConfiguracions Habilitados */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionVtaAjusteDebeConfiguracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionVtaAjusteDebeConfiguracion */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionVtaAjusteDebeConfiguracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionVtaAjusteDebeConfiguracion relacionadas */ 	
	public function deleteVtaComisionVtaAjusteDebeConfiguracions(){
            $obs = $this->getVtaComisionVtaAjusteDebeConfiguracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionVtaAjusteDebeConfiguracionsCmb() VtaComisionVtaAjusteDebeConfiguracion relacionadas */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracionsCmb(){
            $c = new Criterio();
            $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionVtaAjusteDebeConfiguracion::getVtaComisionVtaAjusteDebeConfiguracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPreventistas (Coleccion) relacionados a traves de VtaComisionVtaAjusteDebeConfiguracion */ 	
	public function getVtaPreventistasXVtaComisionVtaAjusteDebeConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPreventista::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA, VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_PREVENTISTA_ID, VtaPreventista::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPreventista::getVtaPreventistas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPreventistas relacionados a traves de VtaComisionVtaAjusteDebeConfiguracion */ 	
	public function getCantidadVtaPreventistasXVtaComisionVtaAjusteDebeConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPreventista::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPreventista::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA, VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_PREVENTISTA_ID, VtaPreventista::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPreventista::getVtaPreventistas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPreventista (Objeto) relacionado a traves de VtaComisionVtaAjusteDebeConfiguracion */ 	
	public function getVtaPreventistaXVtaComisionVtaAjusteDebeConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPreventistasXVtaComisionVtaAjusteDebeConfiguracion($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaAjusteDebeImportes */ 	
	public function getVtaAjusteDebeImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeImporte::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeimporte = VtaAjusteDebeImporte::hidratarObjeto($fila);			
                $vtaajustedebeimportes[] = $vtaajustedebeimporte;
            }

            return $vtaajustedebeimportes;
	}	
	

	/* Método getVtaAjusteDebeImportesBloque para MasInfo */ 	
	public function getVtaAjusteDebeImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeImportes Habilitados */ 	
	public function getVtaAjusteDebeImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeImporte */ 	
	public function getVtaAjusteDebeImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeImporte relacionadas */ 	
	public function deleteVtaAjusteDebeImportes(){
            $obs = $this->getVtaAjusteDebeImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeImportesCmb() VtaAjusteDebeImporte relacionadas */ 	
	public function getVtaAjusteDebeImportesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeImporte::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeImporte::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeImporte::getVtaAjusteDebeImportesCmbF(null, $c);
            return $os;
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
                
            $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaOrdenVenta::getVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentas (Coleccion) relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaOrdenVentasXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentas relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaOrdenVentasXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVenta (Objeto) relacionado a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaOrdenVentaXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentasXVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeEstados */ 	
	public function getVtaAjusteDebeEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeestado = VtaAjusteDebeEstado::hidratarObjeto($fila);			
                $vtaajustedebeestados[] = $vtaajustedebeestado;
            }

            return $vtaajustedebeestados;
	}	
	

	/* Método getVtaAjusteDebeEstadosBloque para MasInfo */ 	
	public function getVtaAjusteDebeEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeEstados Habilitados */ 	
	public function getVtaAjusteDebeEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeEstado */ 	
	public function getVtaAjusteDebeEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeEstado relacionadas */ 	
	public function deleteVtaAjusteDebeEstados(){
            $obs = $this->getVtaAjusteDebeEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeEstadosCmb() VtaAjusteDebeEstado relacionadas */ 	
	public function getVtaAjusteDebeEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeEstado::getVtaAjusteDebeEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebeTipoEstados (Coleccion) relacionados a traves de VtaAjusteDebeEstado */ 	
	public function getVtaAjusteDebeTipoEstadosXVtaAjusteDebeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeEstado::GEN_TABLA, VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, VtaAjusteDebeTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebeTipoEstados relacionados a traves de VtaAjusteDebeEstado */ 	
	public function getCantidadVtaAjusteDebeTipoEstadosXVtaAjusteDebeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebeTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeEstado::GEN_TABLA, VtaAjusteDebeEstado::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, VtaAjusteDebeTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebeTipoEstado (Objeto) relacionado a traves de VtaAjusteDebeEstado */ 	
	public function getVtaAjusteDebeTipoEstadoXVtaAjusteDebeEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebeTipoEstadosXVtaAjusteDebeEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeEnviados */ 	
	public function getVtaAjusteDebeEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeEnviado::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeenviado = VtaAjusteDebeEnviado::hidratarObjeto($fila);			
                $vtaajustedebeenviados[] = $vtaajustedebeenviado;
            }

            return $vtaajustedebeenviados;
	}	
	

	/* Método getVtaAjusteDebeEnviadosBloque para MasInfo */ 	
	public function getVtaAjusteDebeEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeEnviados Habilitados */ 	
	public function getVtaAjusteDebeEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeEnviado */ 	
	public function getVtaAjusteDebeEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeEnviado relacionadas */ 	
	public function deleteVtaAjusteDebeEnviados(){
            $obs = $this->getVtaAjusteDebeEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeEnviadosCmb() VtaAjusteDebeEnviado relacionadas */ 	
	public function getVtaAjusteDebeEnviadosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeEnviado::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeEnviado::getVtaAjusteDebeEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaAjusteDebeItems */ 	
	public function getVtaAjusteDebeItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeitem = VtaAjusteDebeItem::hidratarObjeto($fila);			
                $vtaajustedebeitems[] = $vtaajustedebeitem;
            }

            return $vtaajustedebeitems;
	}	
	

	/* Método getVtaAjusteDebeItemsBloque para MasInfo */ 	
	public function getVtaAjusteDebeItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItems Habilitados */ 	
	public function getVtaAjusteDebeItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItem */ 	
	public function getVtaAjusteDebeItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeItem relacionadas */ 	
	public function deleteVtaAjusteDebeItems(){
            $obs = $this->getVtaAjusteDebeItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeItemsCmb() VtaAjusteDebeItem relacionadas */ 	
	public function getVtaAjusteDebeItemsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeItem::getVtaAjusteDebeItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpFormaPagos (Coleccion) relacionados a traves de VtaAjusteDebeItem */ 	
	public function getGralFpFormaPagosXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItem::GEN_TABLA, VtaAjusteDebeItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpFormaPagos relacionados a traves de VtaAjusteDebeItem */ 	
	public function getCantidadGralFpFormaPagosXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItem::GEN_TABLA, VtaAjusteDebeItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpFormaPago (Objeto) relacionado a traves de VtaAjusteDebeItem */ 	
	public function getGralFpFormaPagoXVtaAjusteDebeItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpFormaPagosXVtaAjusteDebeItem($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaRecibo::getVtaAjusteDebeVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRecibos (Coleccion) relacionados a traves de VtaAjusteDebeVtaRecibo */ 	
	public function getVtaRecibosXVtaAjusteDebeVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaRecibo::GEN_TABLA, VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRecibos relacionados a traves de VtaAjusteDebeVtaRecibo */ 	
	public function getCantidadVtaRecibosXVtaAjusteDebeVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaRecibo::GEN_TABLA, VtaAjusteDebeVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRecibo (Objeto) relacionado a traves de VtaAjusteDebeVtaRecibo */ 	
	public function getVtaReciboXVtaAjusteDebeVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRecibosXVtaAjusteDebeVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeVtaNotaCreditos */ 	
	public function getVtaAjusteDebeVtaNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeVtaNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeVtaNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeVtaNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeVtaNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebevtanotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebevtanotacredito = VtaAjusteDebeVtaNotaCredito::hidratarObjeto($fila);			
                $vtaajustedebevtanotacreditos[] = $vtaajustedebevtanotacredito;
            }

            return $vtaajustedebevtanotacreditos;
	}	
	

	/* Método getVtaAjusteDebeVtaNotaCreditosBloque para MasInfo */ 	
	public function getVtaAjusteDebeVtaNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeVtaNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaNotaCreditos Habilitados */ 	
	public function getVtaAjusteDebeVtaNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeVtaNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaNotaCredito */ 	
	public function getVtaAjusteDebeVtaNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeVtaNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeVtaNotaCredito relacionadas */ 	
	public function deleteVtaAjusteDebeVtaNotaCreditos(){
            $obs = $this->getVtaAjusteDebeVtaNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeVtaNotaCreditosCmb() VtaAjusteDebeVtaNotaCredito relacionadas */ 	
	public function getVtaAjusteDebeVtaNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaNotaCredito::getVtaAjusteDebeVtaNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaAjusteDebeVtaNotaCredito */ 	
	public function getVtaNotaCreditosXVtaAjusteDebeVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaNotaCredito::GEN_TABLA, VtaAjusteDebeVtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaAjusteDebeVtaNotaCredito */ 	
	public function getCantidadVtaNotaCreditosXVtaAjusteDebeVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaNotaCredito::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaNotaCredito::GEN_TABLA, VtaAjusteDebeVtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaAjusteDebeVtaNotaCredito */ 	
	public function getVtaNotaCreditoXVtaAjusteDebeVtaNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaAjusteDebeVtaNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeItemCheques */ 	
	public function getVtaAjusteDebeItemCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeItemCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeItemCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeItemCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeItemCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeItemCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeItemCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeItemCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeitemcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeitemcheque = VtaAjusteDebeItemCheque::hidratarObjeto($fila);			
                $vtaajustedebeitemcheques[] = $vtaajustedebeitemcheque;
            }

            return $vtaajustedebeitemcheques;
	}	
	

	/* Método getVtaAjusteDebeItemChequesBloque para MasInfo */ 	
	public function getVtaAjusteDebeItemChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeItemCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItemCheques Habilitados */ 	
	public function getVtaAjusteDebeItemChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeItemCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItemCheque */ 	
	public function getVtaAjusteDebeItemCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeItemCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeItemCheque relacionadas */ 	
	public function deleteVtaAjusteDebeItemCheques(){
            $obs = $this->getVtaAjusteDebeItemCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeItemChequesCmb() VtaAjusteDebeItemCheque relacionadas */ 	
	public function getVtaAjusteDebeItemChequesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeItemCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItemCheque::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeItemCheque::getVtaAjusteDebeItemChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebeItems (Coleccion) relacionados a traves de VtaAjusteDebeItemCheque */ 	
	public function getVtaAjusteDebeItemsXVtaAjusteDebeItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItemCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItemCheque::GEN_TABLA, VtaAjusteDebeItemCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID, VtaAjusteDebeItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeItem::getVtaAjusteDebeItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebeItems relacionados a traves de VtaAjusteDebeItemCheque */ 	
	public function getCantidadVtaAjusteDebeItemsXVtaAjusteDebeItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebeItem::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItemCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItemCheque::GEN_TABLA, VtaAjusteDebeItemCheque::GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID, VtaAjusteDebeItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeItem::getVtaAjusteDebeItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebeItem (Objeto) relacionado a traves de VtaAjusteDebeItemCheque */ 	
	public function getVtaAjusteDebeItemXVtaAjusteDebeItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebeItemsXVtaAjusteDebeItemCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeItemRetencions */ 	
	public function getVtaAjusteDebeItemRetencions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeItemRetencion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeItemRetencion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeItemRetencion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeItemRetencion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeItemRetencion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeItemRetencion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeItemRetencion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebeitemretencions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebeitemretencion = VtaAjusteDebeItemRetencion::hidratarObjeto($fila);			
                $vtaajustedebeitemretencions[] = $vtaajustedebeitemretencion;
            }

            return $vtaajustedebeitemretencions;
	}	
	

	/* Método getVtaAjusteDebeItemRetencionsBloque para MasInfo */ 	
	public function getVtaAjusteDebeItemRetencionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeItemRetencions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItemRetencions Habilitados */ 	
	public function getVtaAjusteDebeItemRetencionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeItemRetencions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeItemRetencion */ 	
	public function getVtaAjusteDebeItemRetencion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeItemRetencions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeItemRetencion relacionadas */ 	
	public function deleteVtaAjusteDebeItemRetencions(){
            $obs = $this->getVtaAjusteDebeItemRetencions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeItemRetencionsCmb() VtaAjusteDebeItemRetencion relacionadas */ 	
	public function getVtaAjusteDebeItemRetencionsCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeItemRetencion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItemRetencion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeItemRetencion::getVtaAjusteDebeItemRetencionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebeItems (Coleccion) relacionados a traves de VtaAjusteDebeItemRetencion */ 	
	public function getVtaAjusteDebeItemsXVtaAjusteDebeItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItemRetencion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItemRetencion::GEN_TABLA, VtaAjusteDebeItemRetencion::GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID, VtaAjusteDebeItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeItem::getVtaAjusteDebeItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebeItems relacionados a traves de VtaAjusteDebeItemRetencion */ 	
	public function getCantidadVtaAjusteDebeItemsXVtaAjusteDebeItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebeItem::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebeItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeItemRetencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeItemRetencion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeItemRetencion::GEN_TABLA, VtaAjusteDebeItemRetencion::GEN_ATTR_VTA_AJUSTE_DEBE_ITEM_ID, VtaAjusteDebeItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebeItem::getVtaAjusteDebeItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebeItem (Objeto) relacionado a traves de VtaAjusteDebeItemRetencion */ 	
	public function getVtaAjusteDebeItemXVtaAjusteDebeItemRetencion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebeItemsXVtaAjusteDebeItemRetencion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeWsFeOpeSolicitud::getVtaAjusteDebeWsFeOpeSolicitudsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener WsFeOpeSolicituds (Coleccion) relacionados a traves de VtaAjusteDebeWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudsXVtaAjusteDebeWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA, VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de WsFeOpeSolicituds relacionados a traves de VtaAjusteDebeWsFeOpeSolicitud */ 	
	public function getCantidadWsFeOpeSolicitudsXVtaAjusteDebeWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(WsFeOpeSolicitud::GEN_ATTR_ID);
            if($estado){
                $c->add(WsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(WsFeOpeSolicitud::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeWsFeOpeSolicitud::GEN_TABLA, VtaAjusteDebeWsFeOpeSolicitud::GEN_ATTR_WS_FE_OPE_SOLICITUD_ID, WsFeOpeSolicitud::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener WsFeOpeSolicitud (Objeto) relacionado a traves de VtaAjusteDebeWsFeOpeSolicitud */ 	
	public function getWsFeOpeSolicitudXVtaAjusteDebeWsFeOpeSolicitud($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getWsFeOpeSolicitudsXVtaAjusteDebeWsFeOpeSolicitud($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebeVtaTributos */ 	
	public function getVtaAjusteDebeVtaTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebeVtaTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebeVtaTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebeVtaTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebeVtaTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebeVtaTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebevtatributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebevtatributo = VtaAjusteDebeVtaTributo::hidratarObjeto($fila);			
                $vtaajustedebevtatributos[] = $vtaajustedebevtatributo;
            }

            return $vtaajustedebevtatributos;
	}	
	

	/* Método getVtaAjusteDebeVtaTributosBloque para MasInfo */ 	
	public function getVtaAjusteDebeVtaTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebeVtaTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaTributos Habilitados */ 	
	public function getVtaAjusteDebeVtaTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebeVtaTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebeVtaTributo */ 	
	public function getVtaAjusteDebeVtaTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebeVtaTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebeVtaTributo relacionadas */ 	
	public function deleteVtaAjusteDebeVtaTributos(){
            $obs = $this->getVtaAjusteDebeVtaTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebeVtaTributosCmb() VtaAjusteDebeVtaTributo relacionadas */ 	
	public function getVtaAjusteDebeVtaTributosCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaTributo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaTributo::getVtaAjusteDebeVtaTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTributos (Coleccion) relacionados a traves de VtaAjusteDebeVtaTributo */ 	
	public function getVtaTributosXVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaTributo::GEN_TABLA, VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTributos relacionados a traves de VtaAjusteDebeVtaTributo */ 	
	public function getCantidadVtaTributosXVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTributo::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaTributo::GEN_TABLA, VtaAjusteDebeVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID, VtaTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTributo::getVtaTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTributo (Objeto) relacionado a traves de VtaAjusteDebeVtaTributo */ 	
	public function getVtaTributoXVtaAjusteDebeVtaTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTributosXVtaAjusteDebeVtaTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentaVtaAjusteDebes */ 	
	public function getVtaOrdenVentaVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaVtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaVtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaVtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventavtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventavtaajustedebe = VtaOrdenVentaVtaAjusteDebe::hidratarObjeto($fila);			
                $vtaordenventavtaajustedebes[] = $vtaordenventavtaajustedebe;
            }

            return $vtaordenventavtaajustedebes;
	}	
	

	/* Método getVtaOrdenVentaVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaOrdenVentaVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaVtaAjusteDebes Habilitados */ 	
	public function getVtaOrdenVentaVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaVtaAjusteDebe */ 	
	public function getVtaOrdenVentaVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaVtaAjusteDebe relacionadas */ 	
	public function deleteVtaOrdenVentaVtaAjusteDebes(){
            $obs = $this->getVtaOrdenVentaVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaVtaAjusteDebesCmb() VtaOrdenVentaVtaAjusteDebe relacionadas */ 	
	public function getVtaOrdenVentaVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaVtaAjusteDebe::getVtaOrdenVentaVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentas (Coleccion) relacionados a traves de VtaOrdenVentaVtaAjusteDebe */ 	
	public function getVtaOrdenVentasXVtaOrdenVentaVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA, VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentas relacionados a traves de VtaOrdenVentaVtaAjusteDebe */ 	
	public function getCantidadVtaOrdenVentasXVtaOrdenVentaVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA, VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVenta (Objeto) relacionado a traves de VtaOrdenVentaVtaAjusteDebe */ 	
	public function getVtaOrdenVentaXVtaOrdenVentaVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentasXVtaOrdenVentaVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoVtaAjusteDebes */ 	
	public function getCntbDiarioAsientoVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoVtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoVtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientovtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientovtaajustedebe = CntbDiarioAsientoVtaAjusteDebe::hidratarObjeto($fila);			
                $cntbdiarioasientovtaajustedebes[] = $cntbdiarioasientovtaajustedebe;
            }

            return $cntbdiarioasientovtaajustedebes;
	}	
	

	/* Método getCntbDiarioAsientoVtaAjusteDebesBloque para MasInfo */ 	
	public function getCntbDiarioAsientoVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaAjusteDebes Habilitados */ 	
	public function getCntbDiarioAsientoVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoVtaAjusteDebe */ 	
	public function getCntbDiarioAsientoVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoVtaAjusteDebe relacionadas */ 	
	public function deleteCntbDiarioAsientoVtaAjusteDebes(){
            $obs = $this->getCntbDiarioAsientoVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoVtaAjusteDebesCmb() CntbDiarioAsientoVtaAjusteDebe relacionadas */ 	
	public function getCntbDiarioAsientoVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoVtaAjusteDebe::getCntbDiarioAsientoVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoVtaAjusteDebe */ 	
	public function getCntbPeriodosXCntbDiarioAsientoVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA, CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoVtaAjusteDebe */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoVtaAjusteDebe::GEN_TABLA, CntbDiarioAsientoVtaAjusteDebe::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoVtaAjusteDebe */ 	
	public function getCntbPeriodoXCntbDiarioAsientoVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaAjusteHaber::getVtaAjusteDebeVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaAjusteDebeVtaAjusteHaber */ 	
	public function getVtaAjusteHabersXVtaAjusteDebeVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA, VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaAjusteDebeVtaAjusteHaber */ 	
	public function getCantidadVtaAjusteHabersXVtaAjusteDebeVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_DEBE_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaAjusteHaber::GEN_TABLA, VtaAjusteDebeVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaAjusteDebeVtaAjusteHaber */ 	
	public function getVtaAjusteHaberXVtaAjusteDebeVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaAjusteDebeVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los WsFeOpeSolicituds asignados a VtaAjusteDebe */ 	
	public function getVtaAjusteDebeWsFeOpeSolicitudsId(){
            $ids = array();
            foreach($this->getVtaAjusteDebeWsFeOpeSolicituds() as $o){
            
                $ids[] = $o->getWsFeOpeSolicitudId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos WsFeOpeSolicituds asignados al VtaAjusteDebe */ 	
	public function setVtaAjusteDebeWsFeOpeSolicituds($ids){
            $this->deleteVtaAjusteDebeWsFeOpeSolicituds();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteDebeWsFeOpeSolicitud();
                    $o->setWsFeOpeSolicitudId($id);
                    $o->setVtaAjusteDebeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion WsFeOpeSolicitud en el alta de VtaAjusteDebe */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteDebeWsFeOpeSolicitud(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaTributos asignados a VtaAjusteDebe */ 	
	public function getVtaAjusteDebeVtaTributosId(){
            $ids = array();
            foreach($this->getVtaAjusteDebeVtaTributos() as $o){
            
                $ids[] = $o->getVtaTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaTributos asignados al VtaAjusteDebe */ 	
	public function setVtaAjusteDebeVtaTributos($ids){
            $this->deleteVtaAjusteDebeVtaTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteDebeVtaTributo();
                    $o->setVtaTributoId($id);
                    $o->setVtaAjusteDebeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaTributo en el alta de VtaAjusteDebe */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteDebeVtaTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaAjusteHabers asignados a VtaAjusteDebe */ 	
	public function getVtaAjusteDebeVtaAjusteHabersId(){
            $ids = array();
            foreach($this->getVtaAjusteDebeVtaAjusteHabers() as $o){
            
                $ids[] = $o->getVtaAjusteHaberId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaAjusteHabers asignados al VtaAjusteDebe */ 	
	public function setVtaAjusteDebeVtaAjusteHabers($ids){
            $this->deleteVtaAjusteDebeVtaAjusteHabers();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaAjusteDebeVtaAjusteHaber();
                    $o->setVtaAjusteHaberId($id);
                    $o->setVtaAjusteDebeId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaAjusteHaber en el alta de VtaAjusteDebe */ 	
	public function getAltaMostrarBloqueRelacionVtaAjusteDebeVtaAjusteHaber(){
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

	/* Metodo que retorna el VtaAjusteDebeTipoEstado (Clave Foranea) */ 	
    public function getVtaAjusteDebeTipoEstado(){
        $o = new VtaAjusteDebeTipoEstado();
        $o->setId($this->getVtaAjusteDebeTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaAjusteDebeTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaAjusteDebeTipoEstadoEnArray(&$arr_os){
        if($this->getVtaAjusteDebeTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaAjusteDebeTipoEstadoId()])){
                $o = $arr_os[$this->getVtaAjusteDebeTipoEstadoId()];
            }else{
                $o = VtaAjusteDebeTipoEstado::getOxId($this->getVtaAjusteDebeTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaAjusteDebeTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaAjusteDebeTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoAjusteDebe (Clave Foranea) */ 	
    public function getVtaTipoAjusteDebe(){
        $o = new VtaTipoAjusteDebe();
        $o->setId($this->getVtaTipoAjusteDebeId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoAjusteDebe (Clave Foranea) en Array */ 	
    public function getVtaTipoAjusteDebeEnArray(&$arr_os){
        if($this->getVtaTipoAjusteDebeId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoAjusteDebeId()])){
                $o = $arr_os[$this->getVtaTipoAjusteDebeId()];
            }else{
                $o = VtaTipoAjusteDebe::getOxId($this->getVtaTipoAjusteDebeId());
                if($o){
                    $arr_os[$this->getVtaTipoAjusteDebeId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoAjusteDebe();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoOrigenAjusteDebe (Clave Foranea) */ 	
    public function getVtaTipoOrigenAjusteDebe(){
        $o = new VtaTipoOrigenAjusteDebe();
        $o->setId($this->getVtaTipoOrigenAjusteDebeId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoOrigenAjusteDebe (Clave Foranea) en Array */ 	
    public function getVtaTipoOrigenAjusteDebeEnArray(&$arr_os){
        if($this->getVtaTipoOrigenAjusteDebeId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoOrigenAjusteDebeId()])){
                $o = $arr_os[$this->getVtaTipoOrigenAjusteDebeId()];
            }else{
                $o = VtaTipoOrigenAjusteDebe::getOxId($this->getVtaTipoOrigenAjusteDebeId());
                if($o){
                    $arr_os[$this->getVtaTipoOrigenAjusteDebeId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoOrigenAjusteDebe();
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
            		
        if($contexto_solicitante != VtaAjusteDebeTipoEstado::GEN_CLASE){
            if($this->getVtaAjusteDebeTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaAjusteDebeTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaAjusteDebeTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoAjusteDebe::GEN_CLASE){
            if($this->getVtaTipoAjusteDebe()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoAjusteDebe::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoAjusteDebe()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoOrigenAjusteDebe::GEN_CLASE){
            if($this->getVtaTipoOrigenAjusteDebe()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoOrigenAjusteDebe::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoOrigenAjusteDebe()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_ajuste_debe'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_ajuste_debe';");
            
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

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_ajuste_debe_tipo_estado_id' */ 	
	static function getOxVtaAjusteDebeTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_ajuste_debe_tipo_estado_id' */ 	
	static function getOsxVtaAjusteDebeTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_ajuste_debe_id' */ 	
	static function getOxVtaTipoAjusteDebeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_ajuste_debe_id' */ 	
	static function getOsxVtaTipoAjusteDebeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_origen_ajuste_debe_id' */ 	
	static function getOxVtaTipoOrigenAjusteDebeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_origen_ajuste_debe_id' */ 	
	static function getOsxVtaTipoOrigenAjusteDebeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_ORIGEN_AJUSTE_DEBE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_punto_venta_id' */ 	
	static function getOxVtaPuntoVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_cuota_id' */ 	
	static function getOxGralFpCuotaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_CUOTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_preventista_id' */ 	
	static function getOxVtaPreventistaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PREVENTISTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_comprador_id' */ 	
	static function getOxVtaCompradorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_COMPRADOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_vendedor_id' */ 	
	static function getOxVtaVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_actividad_id' */ 	
	static function getOxGralActividadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ACTIVIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_escenario_id' */ 	
	static function getOxGralEscenarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ESCENARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_ajuste_debe' */ 	
	static function getOxNumeroAjusteDebe($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_AJUSTE_DEBE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_ajuste_debe' */ 	
	static function getOsxNumeroAjusteDebe($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_AJUSTE_DEBE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_ajuste_debe_completo' */ 	
	static function getOxNumeroAjusteDebeCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_AJUSTE_DEBE_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_ajuste_debe_completo' */ 	
	static function getOsxNumeroAjusteDebeCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_AJUSTE_DEBE_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_vencimiento' */ 	
	static function getOxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_documento' */ 	
	static function getOxPersonaDocumento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DOCUMENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_email' */ 	
	static function getOxPersonaEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje' */ 	
	static function getOxPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes(null, $criterio);
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

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
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

            $obs = self::getVtaAjusteDebes($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_ajuste_debe_adm');
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
                $c->addTabla(VtaAjusteDebe::GEN_TABLA);
                $c->addOrden(VtaAjusteDebe::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes(null, $c);

                $arr = array();
                foreach($vta_ajuste_debes as $vta_ajuste_debe){
                    $descripcion = $vta_ajuste_debe->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>