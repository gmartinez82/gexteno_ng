<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeNotaCredito
{ 
	
	const SES_PAGINACION = 'adm_pdenotacredito_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdenotacredito_paginas_registros';
	const SES_CRITERIOS = 'adm_pdenotacredito_criterios';
	
	const GEN_CLASE = 'PdeNotaCredito';
	const GEN_TABLA = 'pde_nota_credito';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeNotaCredito */ 
	const GEN_ATTR_ID = 'pde_nota_credito.id';
	const GEN_ATTR_DESCRIPCION = 'pde_nota_credito.descripcion';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'pde_nota_credito.prv_proveedor_id';
	const GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID = 'pde_nota_credito.pde_tipo_nota_credito_id';
	const GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID = 'pde_nota_credito.pde_tipo_origen_nota_credito_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'pde_nota_credito.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'pde_nota_credito.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'pde_nota_credito.gral_empresa_id';
	const GEN_ATTR_PDE_CENTRO_PEDIDO_ID = 'pde_nota_credito.pde_centro_pedido_id';
	const GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID = 'pde_nota_credito.pde_nota_credito_tipo_estado_id';
	const GEN_ATTR_GRAL_FP_FORMA_PAGO_ID = 'pde_nota_credito.gral_fp_forma_pago_id';
	const GEN_ATTR_GRAL_ACTIVIDAD_ID = 'pde_nota_credito.gral_actividad_id';
	const GEN_ATTR_GRAL_ESCENARIO_ID = 'pde_nota_credito.gral_escenario_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'pde_nota_credito.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'pde_nota_credito.numero_punto_venta';
	const GEN_ATTR_NUMERO_NOTA_CREDITO = 'pde_nota_credito.numero_nota_credito';
	const GEN_ATTR_NUMERO_NOTA_CREDITO_COMPLETO = 'pde_nota_credito.numero_nota_credito_completo';
	const GEN_ATTR_CAE = 'pde_nota_credito.cae';
	const GEN_ATTR_NUMERO_DESPACHO = 'pde_nota_credito.numero_despacho';
	const GEN_ATTR_FECHA_EMISION = 'pde_nota_credito.fecha_emision';
	const GEN_ATTR_FECHA_VENCIMIENTO = 'pde_nota_credito.fecha_vencimiento';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'pde_nota_credito.persona_descripcion';
	const GEN_ATTR_RAZON_SOCIAL = 'pde_nota_credito.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'pde_nota_credito.domicilio_legal';
	const GEN_ATTR_CUIT = 'pde_nota_credito.cuit';
	const GEN_ATTR_CODIGO = 'pde_nota_credito.codigo';
	const GEN_ATTR_ANIO = 'pde_nota_credito.anio';
	const GEN_ATTR_GRAL_MES_ID = 'pde_nota_credito.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'pde_nota_credito.cntb_diario_asiento_id';
	const GEN_ATTR_OBSERVACION = 'pde_nota_credito.observacion';
	const GEN_ATTR_NOTA_INTERNA = 'pde_nota_credito.nota_interna';
	const GEN_ATTR_NUMERO_TIMBRADO = 'pde_nota_credito.numero_timbrado';
	const GEN_ATTR_ORDEN = 'pde_nota_credito.orden';
	const GEN_ATTR_ESTADO = 'pde_nota_credito.estado';
	const GEN_ATTR_CREADO = 'pde_nota_credito.creado';
	const GEN_ATTR_CREADO_POR = 'pde_nota_credito.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_nota_credito.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_nota_credito.modificado_por';

	/* Constantes de Atributos Min de BPdeNotaCredito */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_PDE_TIPO_NOTA_CREDITO_ID = 'pde_tipo_nota_credito_id';
	const GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID = 'pde_tipo_origen_nota_credito_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID = 'pde_centro_pedido_id';
	const GEN_ATTR_MIN_PDE_NOTA_CREDITO_TIPO_ESTADO_ID = 'pde_nota_credito_tipo_estado_id';
	const GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID = 'gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID = 'gral_actividad_id';
	const GEN_ATTR_MIN_GRAL_ESCENARIO_ID = 'gral_escenario_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_NOTA_CREDITO = 'numero_nota_credito';
	const GEN_ATTR_MIN_NUMERO_NOTA_CREDITO_COMPLETO = 'numero_nota_credito_completo';
	const GEN_ATTR_MIN_CAE = 'cae';
	const GEN_ATTR_MIN_NUMERO_DESPACHO = 'numero_despacho';
	const GEN_ATTR_MIN_FECHA_EMISION = 'fecha_emision';
	const GEN_ATTR_MIN_FECHA_VENCIMIENTO = 'fecha_vencimiento';
	const GEN_ATTR_MIN_PERSONA_DESCRIPCION = 'persona_descripcion';
	const GEN_ATTR_MIN_RAZON_SOCIAL = 'razon_social';
	const GEN_ATTR_MIN_DOMICILIO_LEGAL = 'domicilio_legal';
	const GEN_ATTR_MIN_CUIT = 'cuit';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
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
	

	/* Atributos de BPdeNotaCredito */ 
	private $id;
	private $descripcion;
	private $prv_proveedor_id;
	private $pde_tipo_nota_credito_id;
	private $pde_tipo_origen_nota_credito_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $pde_centro_pedido_id;
	private $pde_nota_credito_tipo_estado_id;
	private $gral_fp_forma_pago_id;
	private $gral_actividad_id;
	private $gral_escenario_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_nota_credito;
	private $numero_nota_credito_completo;
	private $cae;
	private $numero_despacho;
	private $fecha_emision;
	private $fecha_vencimiento;
	private $persona_descripcion;
	private $razon_social;
	private $domicilio_legal;
	private $cuit;
	private $codigo;
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

	/* Getters de BPdeNotaCredito */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getPdeTipoNotaCreditoId(){ if(isset($this->pde_tipo_nota_credito_id)){ return $this->pde_tipo_nota_credito_id; }else{ return 'null'; } }
	public function getPdeTipoOrigenNotaCreditoId(){ if(isset($this->pde_tipo_origen_nota_credito_id)){ return $this->pde_tipo_origen_nota_credito_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getPdeCentroPedidoId(){ if(isset($this->pde_centro_pedido_id)){ return $this->pde_centro_pedido_id; }else{ return 'null'; } }
	public function getPdeNotaCreditoTipoEstadoId(){ if(isset($this->pde_nota_credito_tipo_estado_id)){ return $this->pde_nota_credito_tipo_estado_id; }else{ return 'null'; } }
	public function getGralFpFormaPagoId(){ if(isset($this->gral_fp_forma_pago_id)){ return $this->gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getGralActividadId(){ if(isset($this->gral_actividad_id)){ return $this->gral_actividad_id; }else{ return 'null'; } }
	public function getGralEscenarioId(){ if(isset($this->gral_escenario_id)){ return $this->gral_escenario_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroNotaCredito(){ if(isset($this->numero_nota_credito)){ return $this->numero_nota_credito; }else{ return ''; } }
	public function getNumeroNotaCreditoCompleto(){ if(isset($this->numero_nota_credito_completo)){ return $this->numero_nota_credito_completo; }else{ return ''; } }
	public function getCae(){ if(isset($this->cae)){ return $this->cae; }else{ return ''; } }
	public function getNumeroDespacho(){ if(isset($this->numero_despacho)){ return $this->numero_despacho; }else{ return ''; } }
	public function getFechaEmision(){ if(isset($this->fecha_emision)){ return $this->fecha_emision; }else{ return ''; } }
	public function getFechaVencimiento(){ if(isset($this->fecha_vencimiento)){ return $this->fecha_vencimiento; }else{ return ''; } }
	public function getPersonaDescripcion(){ if(isset($this->persona_descripcion)){ return $this->persona_descripcion; }else{ return ''; } }
	public function getRazonSocial(){ if(isset($this->razon_social)){ return $this->razon_social; }else{ return ''; } }
	public function getDomicilioLegal(){ if(isset($this->domicilio_legal)){ return $this->domicilio_legal; }else{ return ''; } }
	public function getCuit(){ if(isset($this->cuit)){ return $this->cuit; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
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

	/* Setters de BPdeNotaCredito */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID."
				, ".self::GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_GRAL_ACTIVIDAD_ID."
				, ".self::GEN_ATTR_GRAL_ESCENARIO_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_NOTA_CREDITO."
				, ".self::GEN_ATTR_NUMERO_NOTA_CREDITO_COMPLETO."
				, ".self::GEN_ATTR_CAE."
				, ".self::GEN_ATTR_NUMERO_DESPACHO."
				, ".self::GEN_ATTR_FECHA_EMISION."
				, ".self::GEN_ATTR_FECHA_VENCIMIENTO."
				, ".self::GEN_ATTR_PERSONA_DESCRIPCION."
				, ".self::GEN_ATTR_RAZON_SOCIAL."
				, ".self::GEN_ATTR_DOMICILIO_LEGAL."
				, ".self::GEN_ATTR_CUIT."
				, ".self::GEN_ATTR_CODIGO."
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
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setPdeTipoNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_NOTA_CREDITO_ID]);
				$this->setPdeTipoOrigenNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
				$this->setPdeNotaCreditoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_TIPO_ESTADO_ID]);
				$this->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
				$this->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
				$this->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroNotaCredito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO]);
				$this->setNumeroNotaCreditoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO_COMPLETO]);
				$this->setCae($fila[self::GEN_ATTR_MIN_CAE]);
				$this->setNumeroDespacho($fila[self::GEN_ATTR_MIN_NUMERO_DESPACHO]);
				$this->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
				$this->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
				$this->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
				$this->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
				$this->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
				$this->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
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
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setPdeTipoNotaCreditoId($v){ $this->pde_tipo_nota_credito_id = $v; }
	public function setPdeTipoOrigenNotaCreditoId($v){ $this->pde_tipo_origen_nota_credito_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setPdeCentroPedidoId($v){ $this->pde_centro_pedido_id = $v; }
	public function setPdeNotaCreditoTipoEstadoId($v){ $this->pde_nota_credito_tipo_estado_id = $v; }
	public function setGralFpFormaPagoId($v){ $this->gral_fp_forma_pago_id = $v; }
	public function setGralActividadId($v){ $this->gral_actividad_id = $v; }
	public function setGralEscenarioId($v){ $this->gral_escenario_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroNotaCredito($v){ $this->numero_nota_credito = $v; }
	public function setNumeroNotaCreditoCompleto($v){ $this->numero_nota_credito_completo = $v; }
	public function setCae($v){ $this->cae = $v; }
	public function setNumeroDespacho($v){ $this->numero_despacho = $v; }
	public function setFechaEmision($v){ $this->fecha_emision = $v; }
	public function setFechaVencimiento($v){ $this->fecha_vencimiento = $v; }
	public function setPersonaDescripcion($v){ $this->persona_descripcion = $v; }
	public function setRazonSocial($v){ $this->razon_social = $v; }
	public function setDomicilioLegal($v){ $this->domicilio_legal = $v; }
	public function setCuit($v){ $this->cuit = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
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
            $o = new PdeNotaCredito();
            $o->setId($fila[PdeNotaCredito::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setPdeTipoNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_NOTA_CREDITO_ID]);
			$o->setPdeTipoOrigenNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$o->setPdeNotaCreditoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_TIPO_ESTADO_ID]);
			$o->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$o->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$o->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroNotaCredito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO]);
			$o->setNumeroNotaCreditoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO_COMPLETO]);
			$o->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$o->setNumeroDespacho($fila[self::GEN_ATTR_MIN_NUMERO_DESPACHO]);
			$o->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$o->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$o->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$o->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$o->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$o->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
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

	/* Control de BPdeNotaCredito */ 	
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

	/* Cambia el estado de BPdeNotaCredito */ 	
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

	/* Save de BPdeNotaCredito */ 	
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
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_NOTA_CREDITO_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO_COMPLETO."
						, ".self::GEN_ATTR_MIN_CAE."
						, ".self::GEN_ATTR_MIN_NUMERO_DESPACHO."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
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
                nextval('pde_nota_credito_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeTipoNotaCreditoId()."
						, ".$this->getPdeTipoOrigenNotaCreditoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getPdeNotaCreditoTipoEstadoId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroNotaCredito()."'
						, '".$this->getNumeroNotaCreditoCompleto()."'
						, '".$this->getCae()."'
						, '".$this->getNumeroDespacho()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getFechaVencimiento()."'
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
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
                    ) RETURNING currval('pde_nota_credito_seq')";
            
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
                 
				 ".PdeNotaCredito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_NOTA_CREDITO_ID." = ".$this->getPdeTipoNotaCreditoId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID." = ".$this->getPdeTipoOrigenNotaCreditoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_TIPO_ESTADO_ID." = ".$this->getPdeNotaCreditoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO." = '".$this->getNumeroNotaCredito()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO_COMPLETO." = '".$this->getNumeroNotaCreditoCompleto()."'
						, ".self::GEN_ATTR_MIN_CAE." = '".$this->getCae()."'
						, ".self::GEN_ATTR_MIN_NUMERO_DESPACHO." = '".$this->getNumeroDespacho()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO." = '".$this->getFechaVencimiento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_NOTA_CREDITO_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO_COMPLETO."
						, ".self::GEN_ATTR_MIN_CAE."
						, ".self::GEN_ATTR_MIN_NUMERO_DESPACHO."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
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
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeTipoNotaCreditoId()."
						, ".$this->getPdeTipoOrigenNotaCreditoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getPdeNotaCreditoTipoEstadoId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroNotaCredito()."'
						, '".$this->getNumeroNotaCreditoCompleto()."'
						, '".$this->getCae()."'
						, '".$this->getNumeroDespacho()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getFechaVencimiento()."'
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
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
                     
				 ".PdeNotaCredito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_NOTA_CREDITO_ID." = ".$this->getPdeTipoNotaCreditoId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID." = ".$this->getPdeTipoOrigenNotaCreditoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_TIPO_ESTADO_ID." = ".$this->getPdeNotaCreditoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO." = '".$this->getNumeroNotaCredito()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO_COMPLETO." = '".$this->getNumeroNotaCreditoCompleto()."'
						, ".self::GEN_ATTR_MIN_CAE." = '".$this->getCae()."'
						, ".self::GEN_ATTR_MIN_NUMERO_DESPACHO." = '".$this->getNumeroDespacho()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_FECHA_VENCIMIENTO." = '".$this->getFechaVencimiento()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
            $o = new PdeNotaCredito();
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

	/* Delete de BPdeNotaCredito */ 	
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
	
            // se elimina la coleccion de PdeFacturaPdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoArchivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoArchivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoArchivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoEstados(null, $c) as $o){
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
            
            // se elimina la coleccion de PdeNotaCreditoPdeFacturaPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeFacturaPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditoPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCreditoPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditoPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoPdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoPdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiComprasCbtes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiComprasCbtes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiComprasAlicuotass relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiComprasAlicuotas::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiComprasAlicuotass(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AfipCitiComprasImportacioness relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AfipCitiComprasImportaciones::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAfipCitiComprasImportacioness(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdeNotaCredito(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeNotaCredito::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdenotacreditos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdenotacredito = new PdeNotaCredito();
                    $pdenotacredito->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdenotacredito->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdenotacredito->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$pdenotacredito->setPdeTipoNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_NOTA_CREDITO_ID]);
			$pdenotacredito->setPdeTipoOrigenNotaCreditoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID]);
			$pdenotacredito->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$pdenotacredito->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$pdenotacredito->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$pdenotacredito->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$pdenotacredito->setPdeNotaCreditoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_CREDITO_TIPO_ESTADO_ID]);
			$pdenotacredito->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$pdenotacredito->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$pdenotacredito->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$pdenotacredito->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$pdenotacredito->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$pdenotacredito->setNumeroNotaCredito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO]);
			$pdenotacredito->setNumeroNotaCreditoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_CREDITO_COMPLETO]);
			$pdenotacredito->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$pdenotacredito->setNumeroDespacho($fila[self::GEN_ATTR_MIN_NUMERO_DESPACHO]);
			$pdenotacredito->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$pdenotacredito->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$pdenotacredito->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$pdenotacredito->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$pdenotacredito->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$pdenotacredito->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$pdenotacredito->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdenotacredito->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$pdenotacredito->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$pdenotacredito->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$pdenotacredito->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdenotacredito->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$pdenotacredito->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$pdenotacredito->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdenotacredito->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdenotacredito->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdenotacredito->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdenotacredito->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdenotacredito->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdenotacreditos[] = $pdenotacredito;
		}
		
		return $pdenotacreditos;
	}	
	

	/* Método getPdeNotaCreditos Habilitados */ 	
	static function getPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeNotaCredito::getPdeNotaCreditos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeNotaCreditos para listado de Backend */ 	
	static function getPdeNotaCreditosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeNotaCredito::getPdeNotaCreditos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeNotaCreditosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeNotaCredito::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeNotaCredito::getPdeNotaCreditos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeNotaCreditos filtrado para select */ 	
	static function getPdeNotaCreditosCmbF($paginador = null, $criterio = null){
            $col = PdeNotaCredito::getPdeNotaCreditos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPdeNotaCreditosXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de PdeTipoNotaCredito */ 	
	static function getPdeNotaCreditosXPdeTipoNotaCreditos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoNotaCreditoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de PdeTipoOrigenNotaCredito */ 	
	static function getPdeNotaCreditosXPdeTipoOrigenNotaCreditos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoOrigenNotaCreditoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getPdeNotaCreditosXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getPdeNotaCreditosXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getPdeNotaCreditosXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de PdeCentroPedido */ 	
	static function getPdeNotaCreditosXPdeCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de PdeNotaCreditoTipoEstado */ 	
	static function getPdeNotaCreditosXPdeNotaCreditoTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeNotaCreditoTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de GralFpFormaPago */ 	
	static function getPdeNotaCreditosXGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de GralActividad */ 	
	static function getPdeNotaCreditosXGralActividads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_ACTIVIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralActividadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de GralEscenario */ 	
	static function getPdeNotaCreditosXGralEscenarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_ESCENARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEscenarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getPdeNotaCreditosXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaCreditos filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getPdeNotaCreditosXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaCredito::getPdeNotaCreditos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_nota_credito_adm.php';
            $url_gestion = 'pde_nota_credito_gestion.php';
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
	

	/* Metodo getPdeFacturaPdeNotaCreditos */ 	
	public function getPdeFacturaPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapdenotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapdenotacredito = PdeFacturaPdeNotaCredito::hidratarObjeto($fila);			
                $pdefacturapdenotacreditos[] = $pdefacturapdenotacredito;
            }

            return $pdefacturapdenotacreditos;
	}	
	

	/* Método getPdeFacturaPdeNotaCreditosBloque para MasInfo */ 	
	public function getPdeFacturaPdeNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeNotaCreditos Habilitados */ 	
	public function getPdeFacturaPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeNotaCredito */ 	
	public function getPdeFacturaPdeNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeNotaCredito relacionadas */ 	
	public function deletePdeFacturaPdeNotaCreditos(){
            $obs = $this->getPdeFacturaPdeNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeNotaCreditosCmb() PdeFacturaPdeNotaCredito relacionadas */ 	
	public function getPdeFacturaPdeNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeNotaCredito::getPdeFacturaPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeNotaCredito */ 	
	public function getPdeFacturasXPdeFacturaPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeNotaCredito::GEN_TABLA, PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeNotaCredito */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeNotaCredito::GEN_TABLA, PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeNotaCredito */ 	
	public function getPdeFacturaXPdeFacturaPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoImportes */ 	
	public function getPdeNotaCreditoImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoImporte::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditoimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditoimporte = PdeNotaCreditoImporte::hidratarObjeto($fila);			
                $pdenotacreditoimportes[] = $pdenotacreditoimporte;
            }

            return $pdenotacreditoimportes;
	}	
	

	/* Método getPdeNotaCreditoImportesBloque para MasInfo */ 	
	public function getPdeNotaCreditoImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoImportes Habilitados */ 	
	public function getPdeNotaCreditoImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoImporte */ 	
	public function getPdeNotaCreditoImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoImporte relacionadas */ 	
	public function deletePdeNotaCreditoImportes(){
            $obs = $this->getPdeNotaCreditoImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoImportesCmb() PdeNotaCreditoImporte relacionadas */ 	
	public function getPdeNotaCreditoImportesCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoImporte::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoImporte::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoImporte::getPdeNotaCreditoImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeNotaCreditoImagens */ 	
	public function getPdeNotaCreditoImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoImagen::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditoimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditoimagen = PdeNotaCreditoImagen::hidratarObjeto($fila);			
                $pdenotacreditoimagens[] = $pdenotacreditoimagen;
            }

            return $pdenotacreditoimagens;
	}	
	

	/* Método getPdeNotaCreditoImagensBloque para MasInfo */ 	
	public function getPdeNotaCreditoImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoImagens Habilitados */ 	
	public function getPdeNotaCreditoImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoImagen */ 	
	public function getPdeNotaCreditoImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoImagen relacionadas */ 	
	public function deletePdeNotaCreditoImagens(){
            $obs = $this->getPdeNotaCreditoImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoImagensCmb() PdeNotaCreditoImagen relacionadas */ 	
	public function getPdeNotaCreditoImagensCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoImagen::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoImagen::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoImagen::getPdeNotaCreditoImagensCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeNotaCreditoArchivos */ 	
	public function getPdeNotaCreditoArchivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoArchivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoArchivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoArchivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoArchivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoArchivo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoArchivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoArchivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditoarchivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditoarchivo = PdeNotaCreditoArchivo::hidratarObjeto($fila);			
                $pdenotacreditoarchivos[] = $pdenotacreditoarchivo;
            }

            return $pdenotacreditoarchivos;
	}	
	

	/* Método getPdeNotaCreditoArchivosBloque para MasInfo */ 	
	public function getPdeNotaCreditoArchivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoArchivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoArchivos Habilitados */ 	
	public function getPdeNotaCreditoArchivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoArchivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoArchivo */ 	
	public function getPdeNotaCreditoArchivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoArchivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoArchivo relacionadas */ 	
	public function deletePdeNotaCreditoArchivos(){
            $obs = $this->getPdeNotaCreditoArchivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoArchivosCmb() PdeNotaCreditoArchivo relacionadas */ 	
	public function getPdeNotaCreditoArchivosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoArchivo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoArchivo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoArchivo::getPdeNotaCreditoArchivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeNotaCreditoEstados */ 	
	public function getPdeNotaCreditoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoEstado::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditoestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditoestado = PdeNotaCreditoEstado::hidratarObjeto($fila);			
                $pdenotacreditoestados[] = $pdenotacreditoestado;
            }

            return $pdenotacreditoestados;
	}	
	

	/* Método getPdeNotaCreditoEstadosBloque para MasInfo */ 	
	public function getPdeNotaCreditoEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoEstados Habilitados */ 	
	public function getPdeNotaCreditoEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoEstado */ 	
	public function getPdeNotaCreditoEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoEstado relacionadas */ 	
	public function deletePdeNotaCreditoEstados(){
            $obs = $this->getPdeNotaCreditoEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoEstadosCmb() PdeNotaCreditoEstado relacionadas */ 	
	public function getPdeNotaCreditoEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoEstado::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoEstado::getPdeNotaCreditoEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditoTipoEstados (Coleccion) relacionados a traves de PdeNotaCreditoEstado */ 	
	public function getPdeNotaCreditoTipoEstadosXPdeNotaCreditoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCreditoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoEstado::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoEstado::GEN_TABLA, PdeNotaCreditoEstado::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID, PdeNotaCreditoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCreditoTipoEstado::getPdeNotaCreditoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditoTipoEstados relacionados a traves de PdeNotaCreditoEstado */ 	
	public function getCantidadPdeNotaCreditoTipoEstadosXPdeNotaCreditoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCreditoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCreditoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoEstado::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoEstado::GEN_TABLA, PdeNotaCreditoEstado::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID, PdeNotaCreditoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCreditoTipoEstado::getPdeNotaCreditoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCreditoTipoEstado (Objeto) relacionado a traves de PdeNotaCreditoEstado */ 	
	public function getPdeNotaCreditoTipoEstadoXPdeNotaCreditoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditoTipoEstadosXPdeNotaCreditoEstado($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeRecepcion::getPdeNotaCreditoPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturaPdeRecepcions (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaPdeRecepcionsXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_PDE_RECEPCION_ID, PdeFacturaPdeRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaPdeRecepcion::getPdeFacturaPdeRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturaPdeRecepcions relacionados a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeFacturaPdeRecepcionsXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFacturaPdeRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_PDE_RECEPCION_ID, PdeFacturaPdeRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaPdeRecepcion::getPdeFacturaPdeRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFacturaPdeRecepcion (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaPdeRecepcionXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturaPdeRecepcionsXPdeNotaCreditoPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeOc::getPdeNotaCreditoPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturaPdeOcs (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeFacturaPdeOcsXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_PDE_OC_ID, PdeFacturaPdeOc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaPdeOc::getPdeFacturaPdeOcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturaPdeOcs relacionados a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getCantidadPdeFacturaPdeOcsXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFacturaPdeOc::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeOc::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_PDE_OC_ID, PdeFacturaPdeOc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaPdeOc::getPdeFacturaPdeOcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFacturaPdeOc (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeOc */ 	
	public function getPdeFacturaPdeOcXPdeNotaCreditoPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturaPdeOcsXPdeNotaCreditoPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeFacturaPdeTributos */ 	
	public function getPdeNotaCreditoPdeFacturaPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeFacturaPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeFacturaPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdefacturapdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdefacturapdetributo = PdeNotaCreditoPdeFacturaPdeTributo::hidratarObjeto($fila);			
                $pdenotacreditopdefacturapdetributos[] = $pdenotacreditopdefacturapdetributo;
            }

            return $pdenotacreditopdefacturapdetributos;
	}	
	

	/* Método getPdeNotaCreditoPdeFacturaPdeTributosBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeFacturaPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeFacturaPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeTributos Habilitados */ 	
	public function getPdeNotaCreditoPdeFacturaPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeFacturaPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeFacturaPdeTributo */ 	
	public function getPdeNotaCreditoPdeFacturaPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeFacturaPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeFacturaPdeTributo relacionadas */ 	
	public function deletePdeNotaCreditoPdeFacturaPdeTributos(){
            $obs = $this->getPdeNotaCreditoPdeFacturaPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeFacturaPdeTributosCmb() PdeNotaCreditoPdeFacturaPdeTributo relacionadas */ 	
	public function getPdeNotaCreditoPdeFacturaPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeFacturaPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeFacturaPdeTributo::getPdeNotaCreditoPdeFacturaPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturaPdeTributos (Coleccion) relacionados a traves de PdeNotaCreditoPdeFacturaPdeTributo */ 	
	public function getPdeFacturaPdeTributosXPdeNotaCreditoPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeTributo::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_PDE_FACTURA_PDE_TRIBUTO_ID, PdeFacturaPdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaPdeTributo::getPdeFacturaPdeTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturaPdeTributos relacionados a traves de PdeNotaCreditoPdeFacturaPdeTributo */ 	
	public function getCantidadPdeFacturaPdeTributosXPdeNotaCreditoPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFacturaPdeTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeFacturaPdeTributo::GEN_TABLA, PdeNotaCreditoPdeFacturaPdeTributo::GEN_ATTR_PDE_FACTURA_PDE_TRIBUTO_ID, PdeFacturaPdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaPdeTributo::getPdeFacturaPdeTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFacturaPdeTributo (Objeto) relacionado a traves de PdeNotaCreditoPdeFacturaPdeTributo */ 	
	public function getPdeFacturaPdeTributoXPdeNotaCreditoPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturaPdeTributosXPdeNotaCreditoPdeFacturaPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoItems */ 	
	public function getPdeNotaCreditoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoItem::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditoitem = PdeNotaCreditoItem::hidratarObjeto($fila);			
                $pdenotacreditoitems[] = $pdenotacreditoitem;
            }

            return $pdenotacreditoitems;
	}	
	

	/* Método getPdeNotaCreditoItemsBloque para MasInfo */ 	
	public function getPdeNotaCreditoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoItems Habilitados */ 	
	public function getPdeNotaCreditoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoItem */ 	
	public function getPdeNotaCreditoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoItem relacionadas */ 	
	public function deletePdeNotaCreditoItems(){
            $obs = $this->getPdeNotaCreditoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoItemsCmb() PdeNotaCreditoItem relacionadas */ 	
	public function getPdeNotaCreditoItemsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoItem::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoItem::getPdeNotaCreditoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoIvas (Coleccion) relacionados a traves de PdeNotaCreditoItem */ 	
	public function getGralTipoIvasXPdeNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoItem::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoItem::GEN_TABLA, PdeNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoIvas relacionados a traves de PdeNotaCreditoItem */ 	
	public function getCantidadGralTipoIvasXPdeNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoIva::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoItem::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoItem::GEN_TABLA, PdeNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoIva (Objeto) relacionado a traves de PdeNotaCreditoItem */ 	
	public function getGralTipoIvaXPdeNotaCreditoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoIvasXPdeNotaCreditoItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditoPdeTributos */ 	
	public function getPdeNotaCreditoPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCreditoPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCreditoPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCreditoPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCreditoPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCreditoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCreditoPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCreditoPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditopdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacreditopdetributo = PdeNotaCreditoPdeTributo::hidratarObjeto($fila);			
                $pdenotacreditopdetributos[] = $pdenotacreditopdetributo;
            }

            return $pdenotacreditopdetributos;
	}	
	

	/* Método getPdeNotaCreditoPdeTributosBloque para MasInfo */ 	
	public function getPdeNotaCreditoPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditoPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeTributos Habilitados */ 	
	public function getPdeNotaCreditoPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditoPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCreditoPdeTributo */ 	
	public function getPdeNotaCreditoPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditoPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCreditoPdeTributo relacionadas */ 	
	public function deletePdeNotaCreditoPdeTributos(){
            $obs = $this->getPdeNotaCreditoPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditoPdeTributosCmb() PdeNotaCreditoPdeTributo relacionadas */ 	
	public function getPdeNotaCreditoPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCreditoPdeTributo::getPdeNotaCreditoPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTributos (Coleccion) relacionados a traves de PdeNotaCreditoPdeTributo */ 	
	public function getPdeTributosXPdeNotaCreditoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeTributo::GEN_TABLA, PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTributos relacionados a traves de PdeNotaCreditoPdeTributo */ 	
	public function getCantidadPdeTributosXPdeNotaCreditoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeNotaCreditoPdeTributo::GEN_TABLA, PdeNotaCreditoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTributo (Objeto) relacionado a traves de PdeNotaCreditoPdeTributo */ 	
	public function getPdeTributoXPdeNotaCreditoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTributosXPdeNotaCreditoPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitoPdeNotaCreditos */ 	
	public function getPdeNotaDebitoPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoPdeNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoPdeNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoPdeNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoPdeNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitopdenotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitopdenotacredito = PdeNotaDebitoPdeNotaCredito::hidratarObjeto($fila);			
                $pdenotadebitopdenotacreditos[] = $pdenotadebitopdenotacredito;
            }

            return $pdenotadebitopdenotacreditos;
	}	
	

	/* Método getPdeNotaDebitoPdeNotaCreditosBloque para MasInfo */ 	
	public function getPdeNotaDebitoPdeNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoPdeNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoPdeNotaCreditos Habilitados */ 	
	public function getPdeNotaDebitoPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoPdeNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoPdeNotaCredito */ 	
	public function getPdeNotaDebitoPdeNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoPdeNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoPdeNotaCredito relacionadas */ 	
	public function deletePdeNotaDebitoPdeNotaCreditos(){
            $obs = $this->getPdeNotaDebitoPdeNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoPdeNotaCreditosCmb() PdeNotaDebitoPdeNotaCredito relacionadas */ 	
	public function getPdeNotaDebitoPdeNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoPdeNotaCredito::getPdeNotaDebitoPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaDebitos (Coleccion) relacionados a traves de PdeNotaDebitoPdeNotaCredito */ 	
	public function getPdeNotaDebitosXPdeNotaDebitoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeNotaCredito::GEN_TABLA, PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaDebitos relacionados a traves de PdeNotaDebitoPdeNotaCredito */ 	
	public function getCantidadPdeNotaDebitosXPdeNotaDebitoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeNotaCredito::GEN_TABLA, PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaDebito (Objeto) relacionado a traves de PdeNotaDebitoPdeNotaCredito */ 	
	public function getPdeNotaDebitoXPdeNotaDebitoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaDebitosXPdeNotaDebitoPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoPdeNotaCreditos */ 	
	public function getCntbDiarioAsientoPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoPdeNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoPdeNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoPdeNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientopdenotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientopdenotacredito = CntbDiarioAsientoPdeNotaCredito::hidratarObjeto($fila);			
                $cntbdiarioasientopdenotacreditos[] = $cntbdiarioasientopdenotacredito;
            }

            return $cntbdiarioasientopdenotacreditos;
	}	
	

	/* Método getCntbDiarioAsientoPdeNotaCreditosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoPdeNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoPdeNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeNotaCreditos Habilitados */ 	
	public function getCntbDiarioAsientoPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoPdeNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeNotaCredito */ 	
	public function getCntbDiarioAsientoPdeNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoPdeNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoPdeNotaCredito relacionadas */ 	
	public function deleteCntbDiarioAsientoPdeNotaCreditos(){
            $obs = $this->getCntbDiarioAsientoPdeNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoPdeNotaCreditosCmb() CntbDiarioAsientoPdeNotaCredito relacionadas */ 	
	public function getCntbDiarioAsientoPdeNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoPdeNotaCredito::getCntbDiarioAsientoPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoPdeNotaCredito */ 	
	public function getCntbPeriodosXCntbDiarioAsientoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA, CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoPdeNotaCredito */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA, CntbDiarioAsientoPdeNotaCredito::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoPdeNotaCredito */ 	
	public function getCntbPeriodoXCntbDiarioAsientoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiComprasCbtes */ 	
	public function getAfipCitiComprasCbtes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiComprasCbte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiComprasCbte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiComprasCbte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiComprasCbte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiComprasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiComprasCbte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiComprasCbte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipciticomprascbtes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipciticomprascbte = AfipCitiComprasCbte::hidratarObjeto($fila);			
                $afipciticomprascbtes[] = $afipciticomprascbte;
            }

            return $afipciticomprascbtes;
	}	
	

	/* Método getAfipCitiComprasCbtesBloque para MasInfo */ 	
	public function getAfipCitiComprasCbtesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiComprasCbtes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiComprasCbtes Habilitados */ 	
	public function getAfipCitiComprasCbtesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiComprasCbtes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiComprasCbte */ 	
	public function getAfipCitiComprasCbte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiComprasCbtes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiComprasCbte relacionadas */ 	
	public function deleteAfipCitiComprasCbtes(){
            $obs = $this->getAfipCitiComprasCbtes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiComprasCbtesCmb() AfipCitiComprasCbte relacionadas */ 	
	public function getAfipCitiComprasCbtesCmb(){
            $c = new Criterio();
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiComprasCbte::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiComprasCbte::getAfipCitiComprasCbtesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiComprasCbte */ 	
	public function getAfipCitiPrcsXAfipCitiComprasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasCbte::GEN_TABLA, AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiComprasCbte */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiComprasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasCbte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasCbte::GEN_TABLA, AfipCitiComprasCbte::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiComprasCbte */ 	
	public function getAfipCitiPrcXAfipCitiComprasCbte($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiComprasCbte($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiComprasAlicuotass */ 	
	public function getAfipCitiComprasAlicuotass($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiComprasAlicuotas::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiComprasAlicuotas::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiComprasAlicuotas::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiComprasAlicuotas::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiComprasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiComprasAlicuotas::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiComprasAlicuotas::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipciticomprasalicuotass = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipciticomprasalicuotas = AfipCitiComprasAlicuotas::hidratarObjeto($fila);			
                $afipciticomprasalicuotass[] = $afipciticomprasalicuotas;
            }

            return $afipciticomprasalicuotass;
	}	
	

	/* Método getAfipCitiComprasAlicuotassBloque para MasInfo */ 	
	public function getAfipCitiComprasAlicuotassParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiComprasAlicuotass($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiComprasAlicuotass Habilitados */ 	
	public function getAfipCitiComprasAlicuotassHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiComprasAlicuotass($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiComprasAlicuotas */ 	
	public function getAfipCitiComprasAlicuotas($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiComprasAlicuotass($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiComprasAlicuotas relacionadas */ 	
	public function deleteAfipCitiComprasAlicuotass(){
            $obs = $this->getAfipCitiComprasAlicuotass();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiComprasAlicuotassCmb() AfipCitiComprasAlicuotas relacionadas */ 	
	public function getAfipCitiComprasAlicuotassCmb(){
            $c = new Criterio();
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiComprasAlicuotas::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiComprasAlicuotas::getAfipCitiComprasAlicuotassCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiComprasAlicuotas */ 	
	public function getAfipCitiPrcsXAfipCitiComprasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasAlicuotas::GEN_TABLA, AfipCitiComprasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiComprasAlicuotas */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiComprasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasAlicuotas::GEN_TABLA, AfipCitiComprasAlicuotas::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiComprasAlicuotas */ 	
	public function getAfipCitiPrcXAfipCitiComprasAlicuotas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiComprasAlicuotas($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAfipCitiComprasImportacioness */ 	
	public function getAfipCitiComprasImportacioness($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AfipCitiComprasImportaciones::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AfipCitiComprasImportaciones::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AfipCitiComprasImportaciones::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AfipCitiComprasImportaciones::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AfipCitiComprasImportaciones::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AfipCitiComprasImportaciones::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AfipCitiComprasImportaciones::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $afipciticomprasimportacioness = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $afipciticomprasimportaciones = AfipCitiComprasImportaciones::hidratarObjeto($fila);			
                $afipciticomprasimportacioness[] = $afipciticomprasimportaciones;
            }

            return $afipciticomprasimportacioness;
	}	
	

	/* Método getAfipCitiComprasImportacionessBloque para MasInfo */ 	
	public function getAfipCitiComprasImportacionessParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAfipCitiComprasImportacioness($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAfipCitiComprasImportacioness Habilitados */ 	
	public function getAfipCitiComprasImportacionessHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAfipCitiComprasImportacioness($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAfipCitiComprasImportaciones */ 	
	public function getAfipCitiComprasImportaciones($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAfipCitiComprasImportacioness($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AfipCitiComprasImportaciones relacionadas */ 	
	public function deleteAfipCitiComprasImportacioness(){
            $obs = $this->getAfipCitiComprasImportacioness();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAfipCitiComprasImportacionessCmb() AfipCitiComprasImportaciones relacionadas */ 	
	public function getAfipCitiComprasImportacionessCmb(){
            $c = new Criterio();
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiComprasImportaciones::GEN_TABLA);
            $c->setCriterios();

            $os = AfipCitiComprasImportaciones::getAfipCitiComprasImportacionessCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AfipCitiPrcs (Coleccion) relacionados a traves de AfipCitiComprasImportaciones */ 	
	public function getAfipCitiPrcsXAfipCitiComprasImportaciones($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasImportaciones::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasImportaciones::GEN_TABLA, AfipCitiComprasImportaciones::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AfipCitiPrcs relacionados a traves de AfipCitiComprasImportaciones */ 	
	public function getCantidadAfipCitiPrcsXAfipCitiComprasImportaciones($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AfipCitiPrc::GEN_ATTR_ID);
            if($estado){
                $c->add(AfipCitiPrc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AfipCitiComprasImportaciones::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_NOTA_CREDITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AfipCitiPrc::GEN_TABLA);
            $c->addRealJoin(AfipCitiComprasImportaciones::GEN_TABLA, AfipCitiComprasImportaciones::GEN_ATTR_AFIP_CITI_PRC_ID, AfipCitiPrc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AfipCitiPrc::getAfipCitiPrcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AfipCitiPrc (Objeto) relacionado a traves de AfipCitiComprasImportaciones */ 	
	public function getAfipCitiPrcXAfipCitiComprasImportaciones($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAfipCitiPrcsXAfipCitiComprasImportaciones($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los PdeFacturaPdeTributos asignados a PdeNotaCredito */ 	
	public function getPdeNotaCreditoPdeFacturaPdeTributosId(){
            $ids = array();
            foreach($this->getPdeNotaCreditoPdeFacturaPdeTributos() as $o){
            
                $ids[] = $o->getPdeFacturaPdeTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeFacturaPdeTributos asignados al PdeNotaCredito */ 	
	public function setPdeNotaCreditoPdeFacturaPdeTributos($ids){
            $this->deletePdeNotaCreditoPdeFacturaPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeNotaCreditoPdeFacturaPdeTributo();
                    $o->setPdeFacturaPdeTributoId($id);
                    $o->setPdeNotaCreditoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeFacturaPdeTributo en el alta de PdeNotaCredito */ 	
	public function getAltaMostrarBloqueRelacionPdeNotaCreditoPdeFacturaPdeTributo(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeTributos asignados a PdeNotaCredito */ 	
	public function getPdeNotaCreditoPdeTributosId(){
            $ids = array();
            foreach($this->getPdeNotaCreditoPdeTributos() as $o){
            
                $ids[] = $o->getPdeTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTributos asignados al PdeNotaCredito */ 	
	public function setPdeNotaCreditoPdeTributos($ids){
            $this->deletePdeNotaCreditoPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeNotaCreditoPdeTributo();
                    $o->setPdeTributoId($id);
                    $o->setPdeNotaCreditoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTributo en el alta de PdeNotaCredito */ 	
	public function getAltaMostrarBloqueRelacionPdeNotaCreditoPdeTributo(){
            return true;
	}
	

	/* Metodo que retorna el PrvProveedor (Clave Foranea) */ 	
    public function getPrvProveedor(){
        $o = new PrvProveedor();
        $o->setId($this->getPrvProveedorId());
        return $o;			
    }

	/* Metodo que retorna el PrvProveedor (Clave Foranea) en Array */ 	
    public function getPrvProveedorEnArray(&$arr_os){
        if($this->getPrvProveedorId() != 'null'){
            if(isset($arr_os[$this->getPrvProveedorId()])){
                $o = $arr_os[$this->getPrvProveedorId()];
            }else{
                $o = PrvProveedor::getOxId($this->getPrvProveedorId());
                if($o){
                    $arr_os[$this->getPrvProveedorId()] = $o;
                }
            }
        }else{
            $o = new PrvProveedor();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeTipoNotaCredito (Clave Foranea) */ 	
    public function getPdeTipoNotaCredito(){
        $o = new PdeTipoNotaCredito();
        $o->setId($this->getPdeTipoNotaCreditoId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoNotaCredito (Clave Foranea) en Array */ 	
    public function getPdeTipoNotaCreditoEnArray(&$arr_os){
        if($this->getPdeTipoNotaCreditoId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoNotaCreditoId()])){
                $o = $arr_os[$this->getPdeTipoNotaCreditoId()];
            }else{
                $o = PdeTipoNotaCredito::getOxId($this->getPdeTipoNotaCreditoId());
                if($o){
                    $arr_os[$this->getPdeTipoNotaCreditoId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoNotaCredito();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeTipoOrigenNotaCredito (Clave Foranea) */ 	
    public function getPdeTipoOrigenNotaCredito(){
        $o = new PdeTipoOrigenNotaCredito();
        $o->setId($this->getPdeTipoOrigenNotaCreditoId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoOrigenNotaCredito (Clave Foranea) en Array */ 	
    public function getPdeTipoOrigenNotaCreditoEnArray(&$arr_os){
        if($this->getPdeTipoOrigenNotaCreditoId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoOrigenNotaCreditoId()])){
                $o = $arr_os[$this->getPdeTipoOrigenNotaCreditoId()];
            }else{
                $o = PdeTipoOrigenNotaCredito::getOxId($this->getPdeTipoOrigenNotaCreditoId());
                if($o){
                    $arr_os[$this->getPdeTipoOrigenNotaCreditoId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoOrigenNotaCredito();
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

	/* Metodo que retorna el PdeCentroPedido (Clave Foranea) */ 	
    public function getPdeCentroPedido(){
        $o = new PdeCentroPedido();
        $o->setId($this->getPdeCentroPedidoId());
        return $o;			
    }

	/* Metodo que retorna el PdeCentroPedido (Clave Foranea) en Array */ 	
    public function getPdeCentroPedidoEnArray(&$arr_os){
        if($this->getPdeCentroPedidoId() != 'null'){
            if(isset($arr_os[$this->getPdeCentroPedidoId()])){
                $o = $arr_os[$this->getPdeCentroPedidoId()];
            }else{
                $o = PdeCentroPedido::getOxId($this->getPdeCentroPedidoId());
                if($o){
                    $arr_os[$this->getPdeCentroPedidoId()] = $o;
                }
            }
        }else{
            $o = new PdeCentroPedido();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeNotaCreditoTipoEstado (Clave Foranea) */ 	
    public function getPdeNotaCreditoTipoEstado(){
        $o = new PdeNotaCreditoTipoEstado();
        $o->setId($this->getPdeNotaCreditoTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeNotaCreditoTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeNotaCreditoTipoEstadoEnArray(&$arr_os){
        if($this->getPdeNotaCreditoTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeNotaCreditoTipoEstadoId()])){
                $o = $arr_os[$this->getPdeNotaCreditoTipoEstadoId()];
            }else{
                $o = PdeNotaCreditoTipoEstado::getOxId($this->getPdeNotaCreditoTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeNotaCreditoTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeNotaCreditoTipoEstado();
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
            		
        if($contexto_solicitante != PrvProveedor::GEN_CLASE){
            if($this->getPrvProveedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvProveedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvProveedor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeTipoNotaCredito::GEN_CLASE){
            if($this->getPdeTipoNotaCredito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoNotaCredito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoNotaCredito()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeTipoOrigenNotaCredito::GEN_CLASE){
            if($this->getPdeTipoOrigenNotaCredito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoOrigenNotaCredito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoOrigenNotaCredito()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PdeCentroPedido::GEN_CLASE){
            if($this->getPdeCentroPedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeCentroPedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeCentroPedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeNotaCreditoTipoEstado::GEN_CLASE){
            if($this->getPdeNotaCreditoTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeNotaCreditoTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeNotaCreditoTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_nota_credito'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_nota_credito';");
            
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

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_proveedor_id' */ 	
	static function getOsxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_nota_credito_id' */ 	
	static function getOxPdeTipoNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_nota_credito_id' */ 	
	static function getOsxPdeTipoNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_origen_nota_credito_id' */ 	
	static function getOxPdeTipoOrigenNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_origen_nota_credito_id' */ 	
	static function getOsxPdeTipoOrigenNotaCreditoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_CREDITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOsxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_nota_credito_tipo_estado_id' */ 	
	static function getOxPdeNotaCreditoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_nota_credito_tipo_estado_id' */ 	
	static function getOsxPdeNotaCreditoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_actividad_id' */ 	
	static function getOxGralActividadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ACTIVIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_escenario_id' */ 	
	static function getOxGralEscenarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ESCENARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_nota_credito' */ 	
	static function getOxNumeroNotaCredito($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_CREDITO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_nota_credito' */ 	
	static function getOsxNumeroNotaCredito($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_CREDITO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_nota_credito_completo' */ 	
	static function getOxNumeroNotaCreditoCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_CREDITO_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_nota_credito_completo' */ 	
	static function getOsxNumeroNotaCreditoCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_CREDITO_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_despacho' */ 	
	static function getOxNumeroDespacho($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_DESPACHO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero_despacho' */ 	
	static function getOsxNumeroDespacho($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_DESPACHO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_vencimiento' */ 	
	static function getOxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_timbrado' */ 	
	static function getOxNumeroTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos(null, $criterio);
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

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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

            $obs = self::getPdeNotaCreditos($paginador, $criterio);
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
            $c->addTabla(PdeNotaCreditoImagen::GEN_TABLA);
            $c->addOrden(PdeNotaCreditoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getPdeNotaCreditoImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getPdeNotaCreditoImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoImagen::GEN_TABLA);
            $c->addOrden(PdeNotaCreditoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPdeNotaCreditoImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getPdeNotaCreditoImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getPdeNotaCreditoImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(PdeNotaCreditoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(PdeNotaCreditoImagen::GEN_TABLA);
            $c->addOrden(PdeNotaCreditoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPdeNotaCreditoImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_nota_credito_adm');
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
                $c->addTabla(PdeNotaCredito::GEN_TABLA);
                $c->addOrden(PdeNotaCredito::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_nota_creditos = PdeNotaCredito::getPdeNotaCreditos(null, $c);

                $arr = array();
                foreach($pde_nota_creditos as $pde_nota_credito){
                    $descripcion = $pde_nota_credito->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>