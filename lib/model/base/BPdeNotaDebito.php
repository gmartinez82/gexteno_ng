<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeNotaDebito
{ 
	
	const SES_PAGINACION = 'adm_pdenotadebito_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdenotadebito_paginas_registros';
	const SES_CRITERIOS = 'adm_pdenotadebito_criterios';
	
	const GEN_CLASE = 'PdeNotaDebito';
	const GEN_TABLA = 'pde_nota_debito';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeNotaDebito */ 
	const GEN_ATTR_ID = 'pde_nota_debito.id';
	const GEN_ATTR_DESCRIPCION = 'pde_nota_debito.descripcion';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'pde_nota_debito.prv_proveedor_id';
	const GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID = 'pde_nota_debito.pde_tipo_nota_debito_id';
	const GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID = 'pde_nota_debito.pde_tipo_origen_nota_debito_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'pde_nota_debito.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'pde_nota_debito.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'pde_nota_debito.gral_empresa_id';
	const GEN_ATTR_PDE_CENTRO_PEDIDO_ID = 'pde_nota_debito.pde_centro_pedido_id';
	const GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID = 'pde_nota_debito.pde_nota_debito_tipo_estado_id';
	const GEN_ATTR_GRAL_FP_FORMA_PAGO_ID = 'pde_nota_debito.gral_fp_forma_pago_id';
	const GEN_ATTR_GRAL_ACTIVIDAD_ID = 'pde_nota_debito.gral_actividad_id';
	const GEN_ATTR_GRAL_ESCENARIO_ID = 'pde_nota_debito.gral_escenario_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'pde_nota_debito.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'pde_nota_debito.numero_punto_venta';
	const GEN_ATTR_NUMERO_NOTA_DEBITO = 'pde_nota_debito.numero_nota_debito';
	const GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO = 'pde_nota_debito.numero_nota_debito_completo';
	const GEN_ATTR_CAE = 'pde_nota_debito.cae';
	const GEN_ATTR_NUMERO_DESPACHO = 'pde_nota_debito.numero_despacho';
	const GEN_ATTR_FECHA_EMISION = 'pde_nota_debito.fecha_emision';
	const GEN_ATTR_FECHA_VENCIMIENTO = 'pde_nota_debito.fecha_vencimiento';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'pde_nota_debito.persona_descripcion';
	const GEN_ATTR_RAZON_SOCIAL = 'pde_nota_debito.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'pde_nota_debito.domicilio_legal';
	const GEN_ATTR_CUIT = 'pde_nota_debito.cuit';
	const GEN_ATTR_CODIGO = 'pde_nota_debito.codigo';
	const GEN_ATTR_ANIO = 'pde_nota_debito.anio';
	const GEN_ATTR_GRAL_MES_ID = 'pde_nota_debito.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'pde_nota_debito.cntb_diario_asiento_id';
	const GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID = 'pde_nota_debito.prv_descuento_financiero_id';
	const GEN_ATTR_OBSERVACION = 'pde_nota_debito.observacion';
	const GEN_ATTR_NOTA_INTERNA = 'pde_nota_debito.nota_interna';
	const GEN_ATTR_NUMERO_TIMBRADO = 'pde_nota_debito.numero_timbrado';
	const GEN_ATTR_ORDEN = 'pde_nota_debito.orden';
	const GEN_ATTR_ESTADO = 'pde_nota_debito.estado';
	const GEN_ATTR_CREADO = 'pde_nota_debito.creado';
	const GEN_ATTR_CREADO_POR = 'pde_nota_debito.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_nota_debito.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_nota_debito.modificado_por';

	/* Constantes de Atributos Min de BPdeNotaDebito */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_PDE_TIPO_NOTA_DEBITO_ID = 'pde_tipo_nota_debito_id';
	const GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID = 'pde_tipo_origen_nota_debito_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID = 'pde_centro_pedido_id';
	const GEN_ATTR_MIN_PDE_NOTA_DEBITO_TIPO_ESTADO_ID = 'pde_nota_debito_tipo_estado_id';
	const GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID = 'gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID = 'gral_actividad_id';
	const GEN_ATTR_MIN_GRAL_ESCENARIO_ID = 'gral_escenario_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_NOTA_DEBITO = 'numero_nota_debito';
	const GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO = 'numero_nota_debito_completo';
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
	const GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID = 'prv_descuento_financiero_id';
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
	

	/* Atributos de BPdeNotaDebito */ 
	private $id;
	private $descripcion;
	private $prv_proveedor_id;
	private $pde_tipo_nota_debito_id;
	private $pde_tipo_origen_nota_debito_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $pde_centro_pedido_id;
	private $pde_nota_debito_tipo_estado_id;
	private $gral_fp_forma_pago_id;
	private $gral_actividad_id;
	private $gral_escenario_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_nota_debito;
	private $numero_nota_debito_completo;
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
	private $prv_descuento_financiero_id;
	private $observacion;
	private $nota_interna;
	private $numero_timbrado;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeNotaDebito */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getPdeTipoNotaDebitoId(){ if(isset($this->pde_tipo_nota_debito_id)){ return $this->pde_tipo_nota_debito_id; }else{ return 'null'; } }
	public function getPdeTipoOrigenNotaDebitoId(){ if(isset($this->pde_tipo_origen_nota_debito_id)){ return $this->pde_tipo_origen_nota_debito_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getPdeCentroPedidoId(){ if(isset($this->pde_centro_pedido_id)){ return $this->pde_centro_pedido_id; }else{ return 'null'; } }
	public function getPdeNotaDebitoTipoEstadoId(){ if(isset($this->pde_nota_debito_tipo_estado_id)){ return $this->pde_nota_debito_tipo_estado_id; }else{ return 'null'; } }
	public function getGralFpFormaPagoId(){ if(isset($this->gral_fp_forma_pago_id)){ return $this->gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getGralActividadId(){ if(isset($this->gral_actividad_id)){ return $this->gral_actividad_id; }else{ return 'null'; } }
	public function getGralEscenarioId(){ if(isset($this->gral_escenario_id)){ return $this->gral_escenario_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroNotaDebito(){ if(isset($this->numero_nota_debito)){ return $this->numero_nota_debito; }else{ return ''; } }
	public function getNumeroNotaDebitoCompleto(){ if(isset($this->numero_nota_debito_completo)){ return $this->numero_nota_debito_completo; }else{ return ''; } }
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
	public function getPrvDescuentoFinancieroId(){ if(isset($this->prv_descuento_financiero_id)){ return $this->prv_descuento_financiero_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getNumeroTimbrado(){ if(isset($this->numero_timbrado)){ return $this->numero_timbrado; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdeNotaDebito */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID."
				, ".self::GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_GRAL_ACTIVIDAD_ID."
				, ".self::GEN_ATTR_GRAL_ESCENARIO_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_NOTA_DEBITO."
				, ".self::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO."
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
				, ".self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID."
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
				$this->setPdeTipoNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_NOTA_DEBITO_ID]);
				$this->setPdeTipoOrigenNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
				$this->setPdeNotaDebitoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_TIPO_ESTADO_ID]);
				$this->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
				$this->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
				$this->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroNotaDebito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO]);
				$this->setNumeroNotaDebitoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO]);
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
				$this->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
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
	public function setPdeTipoNotaDebitoId($v){ $this->pde_tipo_nota_debito_id = $v; }
	public function setPdeTipoOrigenNotaDebitoId($v){ $this->pde_tipo_origen_nota_debito_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setPdeCentroPedidoId($v){ $this->pde_centro_pedido_id = $v; }
	public function setPdeNotaDebitoTipoEstadoId($v){ $this->pde_nota_debito_tipo_estado_id = $v; }
	public function setGralFpFormaPagoId($v){ $this->gral_fp_forma_pago_id = $v; }
	public function setGralActividadId($v){ $this->gral_actividad_id = $v; }
	public function setGralEscenarioId($v){ $this->gral_escenario_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroNotaDebito($v){ $this->numero_nota_debito = $v; }
	public function setNumeroNotaDebitoCompleto($v){ $this->numero_nota_debito_completo = $v; }
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
	public function setPrvDescuentoFinancieroId($v){ $this->prv_descuento_financiero_id = $v; }
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
            $o = new PdeNotaDebito();
            $o->setId($fila[PdeNotaDebito::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setPdeTipoNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_NOTA_DEBITO_ID]);
			$o->setPdeTipoOrigenNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$o->setPdeNotaDebitoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_TIPO_ESTADO_ID]);
			$o->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$o->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$o->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroNotaDebito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO]);
			$o->setNumeroNotaDebitoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO]);
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
			$o->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
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

	/* Control de BPdeNotaDebito */ 	
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

	/* Cambia el estado de BPdeNotaDebito */ 	
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

	/* Save de BPdeNotaDebito */ 	
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
						, ".self::GEN_ATTR_MIN_PDE_TIPO_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_nota_debito_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeTipoNotaDebitoId()."
						, ".$this->getPdeTipoOrigenNotaDebitoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getPdeNotaDebitoTipoEstadoId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroNotaDebito()."'
						, '".$this->getNumeroNotaDebitoCompleto()."'
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
						, ".$this->getPrvDescuentoFinancieroId()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, '".$this->getNumeroTimbrado()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_nota_debito_seq')";
            
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
                 
				 ".PdeNotaDebito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_NOTA_DEBITO_ID." = ".$this->getPdeTipoNotaDebitoId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID." = ".$this->getPdeTipoOrigenNotaDebitoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_TIPO_ESTADO_ID." = ".$this->getPdeNotaDebitoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO." = '".$this->getNumeroNotaDebito()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO." = '".$this->getNumeroNotaDebitoCompleto()."'
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
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID." = ".$this->getPrvDescuentoFinancieroId()."
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
						, ".self::GEN_ATTR_MIN_PDE_TIPO_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO."
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID."
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
						, ".$this->getPdeTipoNotaDebitoId()."
						, ".$this->getPdeTipoOrigenNotaDebitoId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getPdeNotaDebitoTipoEstadoId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroNotaDebito()."'
						, '".$this->getNumeroNotaDebitoCompleto()."'
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
						, ".$this->getPrvDescuentoFinancieroId()."
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
                     
				 ".PdeNotaDebito::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_NOTA_DEBITO_ID." = ".$this->getPdeTipoNotaDebitoId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID." = ".$this->getPdeTipoOrigenNotaDebitoId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_TIPO_ESTADO_ID." = ".$this->getPdeNotaDebitoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO." = '".$this->getNumeroNotaDebito()."'
						, ".self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO." = '".$this->getNumeroNotaDebitoCompleto()."'
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
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID." = ".$this->getPrvDescuentoFinancieroId()."
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
            $o = new PdeNotaDebito();
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

	/* Delete de BPdeNotaDebito */ 	
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
	
            // se elimina la coleccion de PdeNotaDebitoImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoArchivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoArchivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoArchivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoPdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoPdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoPdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoPdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoPdeNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoPdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoPdeNotaDebitos(null, $c) as $o){
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
	
	public function duplicarPdeNotaDebito(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeNotaDebito::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdenotadebitos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdenotadebito = new PdeNotaDebito();
                    $pdenotadebito->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdenotadebito->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdenotadebito->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$pdenotadebito->setPdeTipoNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_NOTA_DEBITO_ID]);
			$pdenotadebito->setPdeTipoOrigenNotaDebitoId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID]);
			$pdenotadebito->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$pdenotadebito->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$pdenotadebito->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$pdenotadebito->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$pdenotadebito->setPdeNotaDebitoTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_NOTA_DEBITO_TIPO_ESTADO_ID]);
			$pdenotadebito->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$pdenotadebito->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$pdenotadebito->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$pdenotadebito->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$pdenotadebito->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$pdenotadebito->setNumeroNotaDebito($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO]);
			$pdenotadebito->setNumeroNotaDebitoCompleto($fila[self::GEN_ATTR_MIN_NUMERO_NOTA_DEBITO_COMPLETO]);
			$pdenotadebito->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$pdenotadebito->setNumeroDespacho($fila[self::GEN_ATTR_MIN_NUMERO_DESPACHO]);
			$pdenotadebito->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$pdenotadebito->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$pdenotadebito->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$pdenotadebito->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$pdenotadebito->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$pdenotadebito->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$pdenotadebito->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdenotadebito->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$pdenotadebito->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$pdenotadebito->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$pdenotadebito->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
			$pdenotadebito->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdenotadebito->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$pdenotadebito->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$pdenotadebito->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdenotadebito->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdenotadebito->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdenotadebito->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdenotadebito->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdenotadebito->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdenotadebitos[] = $pdenotadebito;
		}
		
		return $pdenotadebitos;
	}	
	

	/* Método getPdeNotaDebitos Habilitados */ 	
	static function getPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeNotaDebito::getPdeNotaDebitos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeNotaDebitos para listado de Backend */ 	
	static function getPdeNotaDebitosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeNotaDebito::getPdeNotaDebitos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeNotaDebitosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeNotaDebito::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeNotaDebito::getPdeNotaDebitos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeNotaDebitos filtrado para select */ 	
	static function getPdeNotaDebitosCmbF($paginador = null, $criterio = null){
            $col = PdeNotaDebito::getPdeNotaDebitos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPdeNotaDebitosXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de PdeTipoNotaDebito */ 	
	static function getPdeNotaDebitosXPdeTipoNotaDebitos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoNotaDebitoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de PdeTipoOrigenNotaDebito */ 	
	static function getPdeNotaDebitosXPdeTipoOrigenNotaDebitos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoOrigenNotaDebitoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getPdeNotaDebitosXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getPdeNotaDebitosXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getPdeNotaDebitosXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de PdeCentroPedido */ 	
	static function getPdeNotaDebitosXPdeCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de PdeNotaDebitoTipoEstado */ 	
	static function getPdeNotaDebitosXPdeNotaDebitoTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeNotaDebitoTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de GralFpFormaPago */ 	
	static function getPdeNotaDebitosXGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de GralActividad */ 	
	static function getPdeNotaDebitosXGralActividads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_ACTIVIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralActividadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de GralEscenario */ 	
	static function getPdeNotaDebitosXGralEscenarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_ESCENARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEscenarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getPdeNotaDebitosXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getPdeNotaDebitosXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeNotaDebitos filtrado por una coleccion de objetos foraneos de PrvDescuentoFinanciero */ 	
	static function getPdeNotaDebitosXPrvDescuentoFinancieros($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeNotaDebito::getPdeNotaDebitos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvDescuentoFinancieroId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_nota_debito_adm.php';
            $url_gestion = 'pde_nota_debito_gestion.php';
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
	

	/* Metodo getPdeNotaDebitoImportes */ 	
	public function getPdeNotaDebitoImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoImporte::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitoimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitoimporte = PdeNotaDebitoImporte::hidratarObjeto($fila);			
                $pdenotadebitoimportes[] = $pdenotadebitoimporte;
            }

            return $pdenotadebitoimportes;
	}	
	

	/* Método getPdeNotaDebitoImportesBloque para MasInfo */ 	
	public function getPdeNotaDebitoImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoImportes Habilitados */ 	
	public function getPdeNotaDebitoImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoImporte */ 	
	public function getPdeNotaDebitoImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoImporte relacionadas */ 	
	public function deletePdeNotaDebitoImportes(){
            $obs = $this->getPdeNotaDebitoImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoImportesCmb() PdeNotaDebitoImporte relacionadas */ 	
	public function getPdeNotaDebitoImportesCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoImporte::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoImporte::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoImporte::getPdeNotaDebitoImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeNotaDebitoImagens */ 	
	public function getPdeNotaDebitoImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoImagen::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitoimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitoimagen = PdeNotaDebitoImagen::hidratarObjeto($fila);			
                $pdenotadebitoimagens[] = $pdenotadebitoimagen;
            }

            return $pdenotadebitoimagens;
	}	
	

	/* Método getPdeNotaDebitoImagensBloque para MasInfo */ 	
	public function getPdeNotaDebitoImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoImagens Habilitados */ 	
	public function getPdeNotaDebitoImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoImagen */ 	
	public function getPdeNotaDebitoImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoImagen relacionadas */ 	
	public function deletePdeNotaDebitoImagens(){
            $obs = $this->getPdeNotaDebitoImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoImagensCmb() PdeNotaDebitoImagen relacionadas */ 	
	public function getPdeNotaDebitoImagensCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoImagen::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoImagen::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoImagen::getPdeNotaDebitoImagensCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeNotaDebitoArchivos */ 	
	public function getPdeNotaDebitoArchivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoArchivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoArchivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoArchivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoArchivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoArchivo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoArchivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoArchivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitoarchivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitoarchivo = PdeNotaDebitoArchivo::hidratarObjeto($fila);			
                $pdenotadebitoarchivos[] = $pdenotadebitoarchivo;
            }

            return $pdenotadebitoarchivos;
	}	
	

	/* Método getPdeNotaDebitoArchivosBloque para MasInfo */ 	
	public function getPdeNotaDebitoArchivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoArchivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoArchivos Habilitados */ 	
	public function getPdeNotaDebitoArchivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoArchivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoArchivo */ 	
	public function getPdeNotaDebitoArchivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoArchivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoArchivo relacionadas */ 	
	public function deletePdeNotaDebitoArchivos(){
            $obs = $this->getPdeNotaDebitoArchivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoArchivosCmb() PdeNotaDebitoArchivo relacionadas */ 	
	public function getPdeNotaDebitoArchivosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoArchivo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoArchivo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoArchivo::getPdeNotaDebitoArchivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeNotaDebitoEstados */ 	
	public function getPdeNotaDebitoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoEstado::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitoestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitoestado = PdeNotaDebitoEstado::hidratarObjeto($fila);			
                $pdenotadebitoestados[] = $pdenotadebitoestado;
            }

            return $pdenotadebitoestados;
	}	
	

	/* Método getPdeNotaDebitoEstadosBloque para MasInfo */ 	
	public function getPdeNotaDebitoEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoEstados Habilitados */ 	
	public function getPdeNotaDebitoEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoEstado */ 	
	public function getPdeNotaDebitoEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoEstado relacionadas */ 	
	public function deletePdeNotaDebitoEstados(){
            $obs = $this->getPdeNotaDebitoEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoEstadosCmb() PdeNotaDebitoEstado relacionadas */ 	
	public function getPdeNotaDebitoEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoEstado::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoEstado::getPdeNotaDebitoEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaDebitoTipoEstados (Coleccion) relacionados a traves de PdeNotaDebitoEstado */ 	
	public function getPdeNotaDebitoTipoEstadosXPdeNotaDebitoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaDebitoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoEstado::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoEstado::GEN_TABLA, PdeNotaDebitoEstado::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, PdeNotaDebitoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebitoTipoEstado::getPdeNotaDebitoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaDebitoTipoEstados relacionados a traves de PdeNotaDebitoEstado */ 	
	public function getCantidadPdeNotaDebitoTipoEstadosXPdeNotaDebitoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaDebitoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaDebitoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoEstado::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoEstado::GEN_TABLA, PdeNotaDebitoEstado::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, PdeNotaDebitoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebitoTipoEstado::getPdeNotaDebitoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaDebitoTipoEstado (Objeto) relacionado a traves de PdeNotaDebitoEstado */ 	
	public function getPdeNotaDebitoTipoEstadoXPdeNotaDebitoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaDebitoTipoEstadosXPdeNotaDebitoEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitoItems */ 	
	public function getPdeNotaDebitoItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoItem::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitoitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitoitem = PdeNotaDebitoItem::hidratarObjeto($fila);			
                $pdenotadebitoitems[] = $pdenotadebitoitem;
            }

            return $pdenotadebitoitems;
	}	
	

	/* Método getPdeNotaDebitoItemsBloque para MasInfo */ 	
	public function getPdeNotaDebitoItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoItems Habilitados */ 	
	public function getPdeNotaDebitoItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoItem */ 	
	public function getPdeNotaDebitoItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoItem relacionadas */ 	
	public function deletePdeNotaDebitoItems(){
            $obs = $this->getPdeNotaDebitoItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoItemsCmb() PdeNotaDebitoItem relacionadas */ 	
	public function getPdeNotaDebitoItemsCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoItem::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoItem::getPdeNotaDebitoItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoIvas (Coleccion) relacionados a traves de PdeNotaDebitoItem */ 	
	public function getGralTipoIvasXPdeNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoItem::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoItem::GEN_TABLA, PdeNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoIvas relacionados a traves de PdeNotaDebitoItem */ 	
	public function getCantidadGralTipoIvasXPdeNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoIva::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoItem::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoItem::GEN_TABLA, PdeNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoIva (Objeto) relacionado a traves de PdeNotaDebitoItem */ 	
	public function getGralTipoIvaXPdeNotaDebitoItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoIvasXPdeNotaDebitoItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitoPdeTributos */ 	
	public function getPdeNotaDebitoPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitopdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitopdetributo = PdeNotaDebitoPdeTributo::hidratarObjeto($fila);			
                $pdenotadebitopdetributos[] = $pdenotadebitopdetributo;
            }

            return $pdenotadebitopdetributos;
	}	
	

	/* Método getPdeNotaDebitoPdeTributosBloque para MasInfo */ 	
	public function getPdeNotaDebitoPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoPdeTributos Habilitados */ 	
	public function getPdeNotaDebitoPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoPdeTributo */ 	
	public function getPdeNotaDebitoPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoPdeTributo relacionadas */ 	
	public function deletePdeNotaDebitoPdeTributos(){
            $obs = $this->getPdeNotaDebitoPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoPdeTributosCmb() PdeNotaDebitoPdeTributo relacionadas */ 	
	public function getPdeNotaDebitoPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoPdeTributo::getPdeNotaDebitoPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTributos (Coleccion) relacionados a traves de PdeNotaDebitoPdeTributo */ 	
	public function getPdeTributosXPdeNotaDebitoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeTributo::GEN_TABLA, PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTributos relacionados a traves de PdeNotaDebitoPdeTributo */ 	
	public function getCantidadPdeTributosXPdeNotaDebitoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeTributo::GEN_TABLA, PdeNotaDebitoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTributo (Objeto) relacionado a traves de PdeNotaDebitoPdeTributo */ 	
	public function getPdeTributoXPdeNotaDebitoPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTributosXPdeNotaDebitoPdeTributo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoPdeNotaCredito::getPdeNotaDebitoPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeNotaDebitoPdeNotaCredito */ 	
	public function getPdeNotaCreditosXPdeNotaDebitoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeNotaCredito::GEN_TABLA, PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeNotaDebitoPdeNotaCredito */ 	
	public function getCantidadPdeNotaCreditosXPdeNotaDebitoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeNotaCredito::GEN_TABLA, PdeNotaDebitoPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeNotaDebitoPdeNotaCredito */ 	
	public function getPdeNotaCreditoXPdeNotaDebitoPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeNotaDebitoPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitoPdeRecibos */ 	
	public function getPdeNotaDebitoPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebitoPdeRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebitoPdeRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebitoPdeRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebitoPdeRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebitoPdeRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitopderecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebitopderecibo = PdeNotaDebitoPdeRecibo::hidratarObjeto($fila);			
                $pdenotadebitopderecibos[] = $pdenotadebitopderecibo;
            }

            return $pdenotadebitopderecibos;
	}	
	

	/* Método getPdeNotaDebitoPdeRecibosBloque para MasInfo */ 	
	public function getPdeNotaDebitoPdeRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitoPdeRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitoPdeRecibos Habilitados */ 	
	public function getPdeNotaDebitoPdeRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitoPdeRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebitoPdeRecibo */ 	
	public function getPdeNotaDebitoPdeRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitoPdeRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebitoPdeRecibo relacionadas */ 	
	public function deletePdeNotaDebitoPdeRecibos(){
            $obs = $this->getPdeNotaDebitoPdeRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitoPdeRecibosCmb() PdeNotaDebitoPdeRecibo relacionadas */ 	
	public function getPdeNotaDebitoPdeRecibosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoPdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoPdeRecibo::getPdeNotaDebitoPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecibos (Coleccion) relacionados a traves de PdeNotaDebitoPdeRecibo */ 	
	public function getPdeRecibosXPdeNotaDebitoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeRecibo::GEN_TABLA, PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecibos relacionados a traves de PdeNotaDebitoPdeRecibo */ 	
	public function getCantidadPdeRecibosXPdeNotaDebitoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeRecibo::GEN_TABLA, PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecibo (Objeto) relacionado a traves de PdeNotaDebitoPdeRecibo */ 	
	public function getPdeReciboXPdeNotaDebitoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecibosXPdeNotaDebitoPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoPdeNotaDebitos */ 	
	public function getPdeOrdenPagoPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoPdeNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoPdeNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoPdeNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagopdenotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagopdenotadebito = PdeOrdenPagoPdeNotaDebito::hidratarObjeto($fila);			
                $pdeordenpagopdenotadebitos[] = $pdeordenpagopdenotadebito;
            }

            return $pdeordenpagopdenotadebitos;
	}	
	

	/* Método getPdeOrdenPagoPdeNotaDebitosBloque para MasInfo */ 	
	public function getPdeOrdenPagoPdeNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoPdeNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeNotaDebitos Habilitados */ 	
	public function getPdeOrdenPagoPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoPdeNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeNotaDebito */ 	
	public function getPdeOrdenPagoPdeNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoPdeNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoPdeNotaDebito relacionadas */ 	
	public function deletePdeOrdenPagoPdeNotaDebitos(){
            $obs = $this->getPdeOrdenPagoPdeNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoPdeNotaDebitosCmb() PdeOrdenPagoPdeNotaDebito relacionadas */ 	
	public function getPdeOrdenPagoPdeNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoPdeNotaDebito::getPdeOrdenPagoPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOrdenPagos (Coleccion) relacionados a traves de PdeOrdenPagoPdeNotaDebito */ 	
	public function getPdeOrdenPagosXPdeOrdenPagoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeNotaDebito::GEN_TABLA, PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_ORDEN_PAGO_ID, PdeOrdenPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOrdenPagos relacionados a traves de PdeOrdenPagoPdeNotaDebito */ 	
	public function getCantidadPdeOrdenPagosXPdeOrdenPagoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOrdenPago::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeNotaDebito::GEN_TABLA, PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_ORDEN_PAGO_ID, PdeOrdenPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOrdenPago (Objeto) relacionado a traves de PdeOrdenPagoPdeNotaDebito */ 	
	public function getPdeOrdenPagoXPdeOrdenPagoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOrdenPagosXPdeOrdenPagoPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoPdeNotaDebitos */ 	
	public function getCntbDiarioAsientoPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoPdeNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoPdeNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoPdeNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientopdenotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientopdenotadebito = CntbDiarioAsientoPdeNotaDebito::hidratarObjeto($fila);			
                $cntbdiarioasientopdenotadebitos[] = $cntbdiarioasientopdenotadebito;
            }

            return $cntbdiarioasientopdenotadebitos;
	}	
	

	/* Método getCntbDiarioAsientoPdeNotaDebitosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoPdeNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoPdeNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeNotaDebitos Habilitados */ 	
	public function getCntbDiarioAsientoPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoPdeNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeNotaDebito */ 	
	public function getCntbDiarioAsientoPdeNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoPdeNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoPdeNotaDebito relacionadas */ 	
	public function deleteCntbDiarioAsientoPdeNotaDebitos(){
            $obs = $this->getCntbDiarioAsientoPdeNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoPdeNotaDebitosCmb() CntbDiarioAsientoPdeNotaDebito relacionadas */ 	
	public function getCntbDiarioAsientoPdeNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoPdeNotaDebito::getCntbDiarioAsientoPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoPdeNotaDebito */ 	
	public function getCntbPeriodosXCntbDiarioAsientoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA, CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoPdeNotaDebito */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeNotaDebito::GEN_TABLA, CntbDiarioAsientoPdeNotaDebito::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoPdeNotaDebito */ 	
	public function getCntbPeriodoXCntbDiarioAsientoPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_NOTA_DEBITO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna una coleccion de IDs de los PdeTributos asignados a PdeNotaDebito */ 	
	public function getPdeNotaDebitoPdeTributosId(){
            $ids = array();
            foreach($this->getPdeNotaDebitoPdeTributos() as $o){
            
                $ids[] = $o->getPdeTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTributos asignados al PdeNotaDebito */ 	
	public function setPdeNotaDebitoPdeTributos($ids){
            $this->deletePdeNotaDebitoPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeNotaDebitoPdeTributo();
                    $o->setPdeTributoId($id);
                    $o->setPdeNotaDebitoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTributo en el alta de PdeNotaDebito */ 	
	public function getAltaMostrarBloqueRelacionPdeNotaDebitoPdeTributo(){
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

	/* Metodo que retorna el PdeTipoNotaDebito (Clave Foranea) */ 	
    public function getPdeTipoNotaDebito(){
        $o = new PdeTipoNotaDebito();
        $o->setId($this->getPdeTipoNotaDebitoId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoNotaDebito (Clave Foranea) en Array */ 	
    public function getPdeTipoNotaDebitoEnArray(&$arr_os){
        if($this->getPdeTipoNotaDebitoId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoNotaDebitoId()])){
                $o = $arr_os[$this->getPdeTipoNotaDebitoId()];
            }else{
                $o = PdeTipoNotaDebito::getOxId($this->getPdeTipoNotaDebitoId());
                if($o){
                    $arr_os[$this->getPdeTipoNotaDebitoId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoNotaDebito();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeTipoOrigenNotaDebito (Clave Foranea) */ 	
    public function getPdeTipoOrigenNotaDebito(){
        $o = new PdeTipoOrigenNotaDebito();
        $o->setId($this->getPdeTipoOrigenNotaDebitoId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoOrigenNotaDebito (Clave Foranea) en Array */ 	
    public function getPdeTipoOrigenNotaDebitoEnArray(&$arr_os){
        if($this->getPdeTipoOrigenNotaDebitoId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoOrigenNotaDebitoId()])){
                $o = $arr_os[$this->getPdeTipoOrigenNotaDebitoId()];
            }else{
                $o = PdeTipoOrigenNotaDebito::getOxId($this->getPdeTipoOrigenNotaDebitoId());
                if($o){
                    $arr_os[$this->getPdeTipoOrigenNotaDebitoId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoOrigenNotaDebito();
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

	/* Metodo que retorna el PdeNotaDebitoTipoEstado (Clave Foranea) */ 	
    public function getPdeNotaDebitoTipoEstado(){
        $o = new PdeNotaDebitoTipoEstado();
        $o->setId($this->getPdeNotaDebitoTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeNotaDebitoTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeNotaDebitoTipoEstadoEnArray(&$arr_os){
        if($this->getPdeNotaDebitoTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeNotaDebitoTipoEstadoId()])){
                $o = $arr_os[$this->getPdeNotaDebitoTipoEstadoId()];
            }else{
                $o = PdeNotaDebitoTipoEstado::getOxId($this->getPdeNotaDebitoTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeNotaDebitoTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeNotaDebitoTipoEstado();
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

	/* Metodo que retorna el PrvDescuentoFinanciero (Clave Foranea) */ 	
    public function getPrvDescuentoFinanciero(){
        $o = new PrvDescuentoFinanciero();
        $o->setId($this->getPrvDescuentoFinancieroId());
        return $o;			
    }

	/* Metodo que retorna el PrvDescuentoFinanciero (Clave Foranea) en Array */ 	
    public function getPrvDescuentoFinancieroEnArray(&$arr_os){
        if($this->getPrvDescuentoFinancieroId() != 'null'){
            if(isset($arr_os[$this->getPrvDescuentoFinancieroId()])){
                $o = $arr_os[$this->getPrvDescuentoFinancieroId()];
            }else{
                $o = PrvDescuentoFinanciero::getOxId($this->getPrvDescuentoFinancieroId());
                if($o){
                    $arr_os[$this->getPrvDescuentoFinancieroId()] = $o;
                }
            }
        }else{
            $o = new PrvDescuentoFinanciero();
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
            		
        if($contexto_solicitante != PdeTipoNotaDebito::GEN_CLASE){
            if($this->getPdeTipoNotaDebito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoNotaDebito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoNotaDebito()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeTipoOrigenNotaDebito::GEN_CLASE){
            if($this->getPdeTipoOrigenNotaDebito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoOrigenNotaDebito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoOrigenNotaDebito()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PdeNotaDebitoTipoEstado::GEN_CLASE){
            if($this->getPdeNotaDebitoTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeNotaDebitoTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeNotaDebitoTipoEstado()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PrvDescuentoFinanciero::GEN_CLASE){
            if($this->getPrvDescuentoFinanciero()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvDescuentoFinanciero::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvDescuentoFinanciero()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_nota_debito'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_nota_debito';");
            
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

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_nota_debito_id' */ 	
	static function getOxPdeTipoNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_nota_debito_id' */ 	
	static function getOsxPdeTipoNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_origen_nota_debito_id' */ 	
	static function getOxPdeTipoOrigenNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_origen_nota_debito_id' */ 	
	static function getOsxPdeTipoOrigenNotaDebitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ORIGEN_NOTA_DEBITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_nota_debito_tipo_estado_id' */ 	
	static function getOxPdeNotaDebitoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_nota_debito_tipo_estado_id' */ 	
	static function getOsxPdeNotaDebitoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_actividad_id' */ 	
	static function getOxGralActividadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ACTIVIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_escenario_id' */ 	
	static function getOxGralEscenarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ESCENARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_nota_debito' */ 	
	static function getOxNumeroNotaDebito($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_DEBITO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_nota_debito_completo' */ 	
	static function getOxNumeroNotaDebitoCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_despacho' */ 	
	static function getOxNumeroDespacho($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_DESPACHO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_vencimiento' */ 	
	static function getOxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_descuento_financiero_id' */ 	
	static function getOxPrvDescuentoFinancieroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_descuento_financiero_id' */ 	
	static function getOsxPrvDescuentoFinancieroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_timbrado' */ 	
	static function getOxNumeroTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos(null, $criterio);
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

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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

            $obs = self::getPdeNotaDebitos($paginador, $criterio);
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
            $c->addTabla(PdeNotaDebitoImagen::GEN_TABLA);
            $c->addOrden(PdeNotaDebitoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getPdeNotaDebitoImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getPdeNotaDebitoImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoImagen::GEN_TABLA);
            $c->addOrden(PdeNotaDebitoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPdeNotaDebitoImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getPdeNotaDebitoImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getPdeNotaDebitoImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(PdeNotaDebitoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoImagen::GEN_TABLA);
            $c->addOrden(PdeNotaDebitoImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPdeNotaDebitoImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_nota_debito_adm');
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
                $c->addTabla(PdeNotaDebito::GEN_TABLA);
                $c->addOrden(PdeNotaDebito::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos(null, $c);

                $arr = array();
                foreach($pde_nota_debitos as $pde_nota_debito){
                    $descripcion = $pde_nota_debito->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>