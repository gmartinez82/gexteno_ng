<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeFactura
{ 
	
	const SES_PAGINACION = 'adm_pdefactura_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdefactura_paginas_registros';
	const SES_CRITERIOS = 'adm_pdefactura_criterios';
	
	const GEN_CLASE = 'PdeFactura';
	const GEN_TABLA = 'pde_factura';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeFactura */ 
	const GEN_ATTR_ID = 'pde_factura.id';
	const GEN_ATTR_DESCRIPCION = 'pde_factura.descripcion';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'pde_factura.prv_proveedor_id';
	const GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID = 'pde_factura.pde_factura_tipo_estado_id';
	const GEN_ATTR_PDE_TIPO_FACTURA_ID = 'pde_factura.pde_tipo_factura_id';
	const GEN_ATTR_PDE_TIPO_ORIGEN_FACTURA_ID = 'pde_factura.pde_tipo_origen_factura_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'pde_factura.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'pde_factura.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'pde_factura.gral_empresa_id';
	const GEN_ATTR_PDE_CENTRO_PEDIDO_ID = 'pde_factura.pde_centro_pedido_id';
	const GEN_ATTR_GRAL_FP_FORMA_PAGO_ID = 'pde_factura.gral_fp_forma_pago_id';
	const GEN_ATTR_GRAL_ACTIVIDAD_ID = 'pde_factura.gral_actividad_id';
	const GEN_ATTR_GRAL_ESCENARIO_ID = 'pde_factura.gral_escenario_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'pde_factura.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'pde_factura.numero_punto_venta';
	const GEN_ATTR_NUMERO_FACTURA = 'pde_factura.numero_factura';
	const GEN_ATTR_NUMERO_FACTURA_COMPLETO = 'pde_factura.numero_factura_completo';
	const GEN_ATTR_CAE = 'pde_factura.cae';
	const GEN_ATTR_NUMERO_DESPACHO = 'pde_factura.numero_despacho';
	const GEN_ATTR_FECHA_EMISION = 'pde_factura.fecha_emision';
	const GEN_ATTR_FECHA_VENCIMIENTO = 'pde_factura.fecha_vencimiento';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'pde_factura.persona_descripcion';
	const GEN_ATTR_RAZON_SOCIAL = 'pde_factura.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'pde_factura.domicilio_legal';
	const GEN_ATTR_CUIT = 'pde_factura.cuit';
	const GEN_ATTR_CODIGO = 'pde_factura.codigo';
	const GEN_ATTR_ANIO = 'pde_factura.anio';
	const GEN_ATTR_GRAL_MES_ID = 'pde_factura.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'pde_factura.cntb_diario_asiento_id';
	const GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID = 'pde_factura.prv_descuento_financiero_id';
	const GEN_ATTR_NOTA_INTERNA = 'pde_factura.nota_interna';
	const GEN_ATTR_NUMERO_TIMBRADO = 'pde_factura.numero_timbrado';
	const GEN_ATTR_OBSERVACION = 'pde_factura.observacion';
	const GEN_ATTR_ORDEN = 'pde_factura.orden';
	const GEN_ATTR_ESTADO = 'pde_factura.estado';
	const GEN_ATTR_CREADO = 'pde_factura.creado';
	const GEN_ATTR_CREADO_POR = 'pde_factura.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_factura.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_factura.modificado_por';

	/* Constantes de Atributos Min de BPdeFactura */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_PDE_FACTURA_TIPO_ESTADO_ID = 'pde_factura_tipo_estado_id';
	const GEN_ATTR_MIN_PDE_TIPO_FACTURA_ID = 'pde_tipo_factura_id';
	const GEN_ATTR_MIN_PDE_TIPO_ORIGEN_FACTURA_ID = 'pde_tipo_origen_factura_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID = 'pde_centro_pedido_id';
	const GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID = 'gral_fp_forma_pago_id';
	const GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID = 'gral_actividad_id';
	const GEN_ATTR_MIN_GRAL_ESCENARIO_ID = 'gral_escenario_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_FACTURA = 'numero_factura';
	const GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO = 'numero_factura_completo';
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
	const GEN_ATTR_MIN_NOTA_INTERNA = 'nota_interna';
	const GEN_ATTR_MIN_NUMERO_TIMBRADO = 'numero_timbrado';
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
	

	/* Atributos de BPdeFactura */ 
	private $id;
	private $descripcion;
	private $prv_proveedor_id;
	private $pde_factura_tipo_estado_id;
	private $pde_tipo_factura_id;
	private $pde_tipo_origen_factura_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $pde_centro_pedido_id;
	private $gral_fp_forma_pago_id;
	private $gral_actividad_id;
	private $gral_escenario_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_factura;
	private $numero_factura_completo;
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
	private $nota_interna;
	private $numero_timbrado;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeFactura */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getPdeFacturaTipoEstadoId(){ if(isset($this->pde_factura_tipo_estado_id)){ return $this->pde_factura_tipo_estado_id; }else{ return 'null'; } }
	public function getPdeTipoFacturaId(){ if(isset($this->pde_tipo_factura_id)){ return $this->pde_tipo_factura_id; }else{ return 'null'; } }
	public function getPdeTipoOrigenFacturaId(){ if(isset($this->pde_tipo_origen_factura_id)){ return $this->pde_tipo_origen_factura_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getPdeCentroPedidoId(){ if(isset($this->pde_centro_pedido_id)){ return $this->pde_centro_pedido_id; }else{ return 'null'; } }
	public function getGralFpFormaPagoId(){ if(isset($this->gral_fp_forma_pago_id)){ return $this->gral_fp_forma_pago_id; }else{ return 'null'; } }
	public function getGralActividadId(){ if(isset($this->gral_actividad_id)){ return $this->gral_actividad_id; }else{ return 'null'; } }
	public function getGralEscenarioId(){ if(isset($this->gral_escenario_id)){ return $this->gral_escenario_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroFactura(){ if(isset($this->numero_factura)){ return $this->numero_factura; }else{ return ''; } }
	public function getNumeroFacturaCompleto(){ if(isset($this->numero_factura_completo)){ return $this->numero_factura_completo; }else{ return ''; } }
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
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getNumeroTimbrado(){ if(isset($this->numero_timbrado)){ return $this->numero_timbrado; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdeFactura */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_PDE_TIPO_FACTURA_ID."
				, ".self::GEN_ATTR_PDE_TIPO_ORIGEN_FACTURA_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID."
				, ".self::GEN_ATTR_GRAL_ACTIVIDAD_ID."
				, ".self::GEN_ATTR_GRAL_ESCENARIO_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_FACTURA."
				, ".self::GEN_ATTR_NUMERO_FACTURA_COMPLETO."
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
				, ".self::GEN_ATTR_NOTA_INTERNA."
				, ".self::GEN_ATTR_NUMERO_TIMBRADO."
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
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setPdeFacturaTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_FACTURA_TIPO_ESTADO_ID]);
				$this->setPdeTipoFacturaId($fila[self::GEN_ATTR_MIN_PDE_TIPO_FACTURA_ID]);
				$this->setPdeTipoOrigenFacturaId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_FACTURA_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
				$this->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
				$this->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
				$this->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroFactura($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA]);
				$this->setNumeroFacturaCompleto($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO]);
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
				$this->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
				$this->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
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
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setPdeFacturaTipoEstadoId($v){ $this->pde_factura_tipo_estado_id = $v; }
	public function setPdeTipoFacturaId($v){ $this->pde_tipo_factura_id = $v; }
	public function setPdeTipoOrigenFacturaId($v){ $this->pde_tipo_origen_factura_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setPdeCentroPedidoId($v){ $this->pde_centro_pedido_id = $v; }
	public function setGralFpFormaPagoId($v){ $this->gral_fp_forma_pago_id = $v; }
	public function setGralActividadId($v){ $this->gral_actividad_id = $v; }
	public function setGralEscenarioId($v){ $this->gral_escenario_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroFactura($v){ $this->numero_factura = $v; }
	public function setNumeroFacturaCompleto($v){ $this->numero_factura_completo = $v; }
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
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setNumeroTimbrado($v){ $this->numero_timbrado = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeFactura();
            $o->setId($fila[PdeFactura::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setPdeFacturaTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_FACTURA_TIPO_ESTADO_ID]);
			$o->setPdeTipoFacturaId($fila[self::GEN_ATTR_MIN_PDE_TIPO_FACTURA_ID]);
			$o->setPdeTipoOrigenFacturaId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_FACTURA_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$o->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$o->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$o->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroFactura($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA]);
			$o->setNumeroFacturaCompleto($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO]);
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
			$o->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$o->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdeFactura */ 	
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

	/* Cambia el estado de BPdeFactura */ 	
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

	/* Save de BPdeFactura */ 	
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
						, ".self::GEN_ATTR_MIN_PDE_FACTURA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA."
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_factura_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeFacturaTipoEstadoId()."
						, ".$this->getPdeTipoFacturaId()."
						, ".$this->getPdeTipoOrigenFacturaId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroFactura()."'
						, '".$this->getNumeroFacturaCompleto()."'
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
						, '".$this->getNotaInterna()."'
						, '".$this->getNumeroTimbrado()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_factura_seq')";
            
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
                 
				 ".PdeFactura::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_FACTURA_TIPO_ESTADO_ID." = ".$this->getPdeFacturaTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_FACTURA_ID." = ".$this->getPdeTipoFacturaId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_FACTURA_ID." = ".$this->getPdeTipoOrigenFacturaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA." = '".$this->getNumeroFactura()."'
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO." = '".$this->getNumeroFacturaCompleto()."'
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
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO." = '".$this->getNumeroTimbrado()."'
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
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_PDE_FACTURA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA."
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO."
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
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeFacturaTipoEstadoId()."
						, ".$this->getPdeTipoFacturaId()."
						, ".$this->getPdeTipoOrigenFacturaId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getGralFpFormaPagoId()."
						, ".$this->getGralActividadId()."
						, ".$this->getGralEscenarioId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroFactura()."'
						, '".$this->getNumeroFacturaCompleto()."'
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
						, '".$this->getNotaInterna()."'
						, '".$this->getNumeroTimbrado()."'
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
                     
				 ".PdeFactura::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_FACTURA_TIPO_ESTADO_ID." = ".$this->getPdeFacturaTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_FACTURA_ID." = ".$this->getPdeTipoFacturaId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_FACTURA_ID." = ".$this->getPdeTipoOrigenFacturaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID." = ".$this->getGralFpFormaPagoId()."
						, ".self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID." = ".$this->getGralActividadId()."
						, ".self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID." = ".$this->getGralEscenarioId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA." = '".$this->getNumeroFactura()."'
						, ".self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO." = '".$this->getNumeroFacturaCompleto()."'
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
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_NUMERO_TIMBRADO." = '".$this->getNumeroTimbrado()."'
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
            $o = new PdeFactura();
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

	/* Delete de BPdeFactura */ 	
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
	
            // se elimina la coleccion de PdeFacturaImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaArchivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaArchivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaArchivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaGralCentroCostos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaGralCentroCosto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaGralCentroCostos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagoPdeFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPagoPdeFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagoPdeFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoPdeFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoPdeFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoPdeFacturas(null, $c) as $o){
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
	
	public function duplicarPdeFactura(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeFactura::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdefacturas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdefactura = new PdeFactura();
                    $pdefactura->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdefactura->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdefactura->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$pdefactura->setPdeFacturaTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_FACTURA_TIPO_ESTADO_ID]);
			$pdefactura->setPdeTipoFacturaId($fila[self::GEN_ATTR_MIN_PDE_TIPO_FACTURA_ID]);
			$pdefactura->setPdeTipoOrigenFacturaId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_FACTURA_ID]);
			$pdefactura->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$pdefactura->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$pdefactura->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$pdefactura->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$pdefactura->setGralFpFormaPagoId($fila[self::GEN_ATTR_MIN_GRAL_FP_FORMA_PAGO_ID]);
			$pdefactura->setGralActividadId($fila[self::GEN_ATTR_MIN_GRAL_ACTIVIDAD_ID]);
			$pdefactura->setGralEscenarioId($fila[self::GEN_ATTR_MIN_GRAL_ESCENARIO_ID]);
			$pdefactura->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$pdefactura->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$pdefactura->setNumeroFactura($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA]);
			$pdefactura->setNumeroFacturaCompleto($fila[self::GEN_ATTR_MIN_NUMERO_FACTURA_COMPLETO]);
			$pdefactura->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$pdefactura->setNumeroDespacho($fila[self::GEN_ATTR_MIN_NUMERO_DESPACHO]);
			$pdefactura->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$pdefactura->setFechaVencimiento($fila[self::GEN_ATTR_MIN_FECHA_VENCIMIENTO]);
			$pdefactura->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$pdefactura->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$pdefactura->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$pdefactura->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$pdefactura->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdefactura->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$pdefactura->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$pdefactura->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$pdefactura->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
			$pdefactura->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$pdefactura->setNumeroTimbrado($fila[self::GEN_ATTR_MIN_NUMERO_TIMBRADO]);
			$pdefactura->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdefactura->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdefactura->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdefactura->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdefactura->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdefactura->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdefactura->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdefacturas[] = $pdefactura;
		}
		
		return $pdefacturas;
	}	
	

	/* Método getPdeFacturas Habilitados */ 	
	static function getPdeFacturasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeFactura::getPdeFacturas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeFacturas para listado de Backend */ 	
	static function getPdeFacturasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeFactura::getPdeFacturas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeFacturasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeFactura::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeFactura::getPdeFacturas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeFacturas filtrado para select */ 	
	static function getPdeFacturasCmbF($paginador = null, $criterio = null){
            $col = PdeFactura::getPdeFacturas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPdeFacturasXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de PdeFacturaTipoEstado */ 	
	static function getPdeFacturasXPdeFacturaTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeFacturaTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de PdeTipoFactura */ 	
	static function getPdeFacturasXPdeTipoFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_PDE_TIPO_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de PdeTipoOrigenFactura */ 	
	static function getPdeFacturasXPdeTipoOrigenFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_PDE_TIPO_ORIGEN_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoOrigenFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getPdeFacturasXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getPdeFacturasXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getPdeFacturasXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de PdeCentroPedido */ 	
	static function getPdeFacturasXPdeCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de GralFpFormaPago */ 	
	static function getPdeFacturasXGralFpFormaPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralFpFormaPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de GralActividad */ 	
	static function getPdeFacturasXGralActividads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_ACTIVIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralActividadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de GralEscenario */ 	
	static function getPdeFacturasXGralEscenarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_ESCENARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEscenarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getPdeFacturasXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getPdeFacturasXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeFacturas filtrado por una coleccion de objetos foraneos de PrvDescuentoFinanciero */ 	
	static function getPdeFacturasXPrvDescuentoFinancieros($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeFactura::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeFactura::getPdeFacturas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvDescuentoFinancieroId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_factura_adm.php';
            $url_gestion = 'pde_factura_gestion.php';
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
	

	/* Metodo getPdeFacturaImportes */ 	
	public function getPdeFacturaImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaImporte::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturaimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturaimporte = PdeFacturaImporte::hidratarObjeto($fila);			
                $pdefacturaimportes[] = $pdefacturaimporte;
            }

            return $pdefacturaimportes;
	}	
	

	/* Método getPdeFacturaImportesBloque para MasInfo */ 	
	public function getPdeFacturaImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaImportes Habilitados */ 	
	public function getPdeFacturaImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaImporte */ 	
	public function getPdeFacturaImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaImporte relacionadas */ 	
	public function deletePdeFacturaImportes(){
            $obs = $this->getPdeFacturaImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaImportesCmb() PdeFacturaImporte relacionadas */ 	
	public function getPdeFacturaImportesCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaImporte::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaImporte::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaImporte::getPdeFacturaImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeFacturaImagens */ 	
	public function getPdeFacturaImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaImagen::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturaimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturaimagen = PdeFacturaImagen::hidratarObjeto($fila);			
                $pdefacturaimagens[] = $pdefacturaimagen;
            }

            return $pdefacturaimagens;
	}	
	

	/* Método getPdeFacturaImagensBloque para MasInfo */ 	
	public function getPdeFacturaImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaImagens Habilitados */ 	
	public function getPdeFacturaImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaImagen */ 	
	public function getPdeFacturaImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaImagen relacionadas */ 	
	public function deletePdeFacturaImagens(){
            $obs = $this->getPdeFacturaImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaImagensCmb() PdeFacturaImagen relacionadas */ 	
	public function getPdeFacturaImagensCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaImagen::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaImagen::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaImagen::getPdeFacturaImagensCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeFacturaArchivos */ 	
	public function getPdeFacturaArchivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaArchivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaArchivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaArchivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaArchivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaArchivo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaArchivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaArchivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturaarchivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturaarchivo = PdeFacturaArchivo::hidratarObjeto($fila);			
                $pdefacturaarchivos[] = $pdefacturaarchivo;
            }

            return $pdefacturaarchivos;
	}	
	

	/* Método getPdeFacturaArchivosBloque para MasInfo */ 	
	public function getPdeFacturaArchivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaArchivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaArchivos Habilitados */ 	
	public function getPdeFacturaArchivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaArchivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaArchivo */ 	
	public function getPdeFacturaArchivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaArchivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaArchivo relacionadas */ 	
	public function deletePdeFacturaArchivos(){
            $obs = $this->getPdeFacturaArchivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaArchivosCmb() PdeFacturaArchivo relacionadas */ 	
	public function getPdeFacturaArchivosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaArchivo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaArchivo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaArchivo::getPdeFacturaArchivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeFacturaEstados */ 	
	public function getPdeFacturaEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaEstado::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturaestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturaestado = PdeFacturaEstado::hidratarObjeto($fila);			
                $pdefacturaestados[] = $pdefacturaestado;
            }

            return $pdefacturaestados;
	}	
	

	/* Método getPdeFacturaEstadosBloque para MasInfo */ 	
	public function getPdeFacturaEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaEstados Habilitados */ 	
	public function getPdeFacturaEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaEstado */ 	
	public function getPdeFacturaEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaEstado relacionadas */ 	
	public function deletePdeFacturaEstados(){
            $obs = $this->getPdeFacturaEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaEstadosCmb() PdeFacturaEstado relacionadas */ 	
	public function getPdeFacturaEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaEstado::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaEstado::getPdeFacturaEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturaTipoEstados (Coleccion) relacionados a traves de PdeFacturaEstado */ 	
	public function getPdeFacturaTipoEstadosXPdeFacturaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFacturaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaEstado::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeFacturaEstado::GEN_TABLA, PdeFacturaEstado::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, PdeFacturaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaTipoEstado::getPdeFacturaTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturaTipoEstados relacionados a traves de PdeFacturaEstado */ 	
	public function getCantidadPdeFacturaTipoEstadosXPdeFacturaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFacturaTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFacturaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaEstado::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeFacturaEstado::GEN_TABLA, PdeFacturaEstado::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, PdeFacturaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFacturaTipoEstado::getPdeFacturaTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFacturaTipoEstado (Objeto) relacionado a traves de PdeFacturaEstado */ 	
	public function getPdeFacturaTipoEstadoXPdeFacturaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturaTipoEstadosXPdeFacturaEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaItems */ 	
	public function getPdeFacturaItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturaitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturaitem = PdeFacturaItem::hidratarObjeto($fila);			
                $pdefacturaitems[] = $pdefacturaitem;
            }

            return $pdefacturaitems;
	}	
	

	/* Método getPdeFacturaItemsBloque para MasInfo */ 	
	public function getPdeFacturaItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaItems Habilitados */ 	
	public function getPdeFacturaItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaItem */ 	
	public function getPdeFacturaItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaItem relacionadas */ 	
	public function deletePdeFacturaItems(){
            $obs = $this->getPdeFacturaItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaItemsCmb() PdeFacturaItem relacionadas */ 	
	public function getPdeFacturaItemsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaItem::getPdeFacturaItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoIvas (Coleccion) relacionados a traves de PdeFacturaItem */ 	
	public function getGralTipoIvasXPdeFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(PdeFacturaItem::GEN_TABLA, PdeFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoIvas relacionados a traves de PdeFacturaItem */ 	
	public function getCantidadGralTipoIvasXPdeFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoIva::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoIva::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoIva::GEN_TABLA);
            $c->addRealJoin(PdeFacturaItem::GEN_TABLA, PdeFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, GralTipoIva::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoIva::getGralTipoIvas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoIva (Objeto) relacionado a traves de PdeFacturaItem */ 	
	public function getGralTipoIvaXPdeFacturaItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoIvasXPdeFacturaItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeTributos */ 	
	public function getPdeFacturaPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeTributo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapdetributo = PdeFacturaPdeTributo::hidratarObjeto($fila);			
                $pdefacturapdetributos[] = $pdefacturapdetributo;
            }

            return $pdefacturapdetributos;
	}	
	

	/* Método getPdeFacturaPdeTributosBloque para MasInfo */ 	
	public function getPdeFacturaPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeTributos Habilitados */ 	
	public function getPdeFacturaPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeTributo */ 	
	public function getPdeFacturaPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeTributo relacionadas */ 	
	public function deletePdeFacturaPdeTributos(){
            $obs = $this->getPdeFacturaPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeTributosCmb() PdeFacturaPdeTributo relacionadas */ 	
	public function getPdeFacturaPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeTributo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeTributo::getPdeFacturaPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTributos (Coleccion) relacionados a traves de PdeFacturaPdeTributo */ 	
	public function getPdeTributosXPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeTributo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeTributo::GEN_TABLA, PdeFacturaPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTributos relacionados a traves de PdeFacturaPdeTributo */ 	
	public function getCantidadPdeTributosXPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeTributo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeTributo::GEN_TABLA, PdeFacturaPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTributo (Objeto) relacionado a traves de PdeFacturaPdeTributo */ 	
	public function getPdeTributoXPdeFacturaPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTributosXPdeFacturaPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeOcs */ 	
	public function getPdeFacturaPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapdeoc = PdeFacturaPdeOc::hidratarObjeto($fila);			
                $pdefacturapdeocs[] = $pdefacturapdeoc;
            }

            return $pdefacturapdeocs;
	}	
	

	/* Método getPdeFacturaPdeOcsBloque para MasInfo */ 	
	public function getPdeFacturaPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeOcs Habilitados */ 	
	public function getPdeFacturaPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeOc */ 	
	public function getPdeFacturaPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeOc relacionadas */ 	
	public function deletePdeFacturaPdeOcs(){
            $obs = $this->getPdeFacturaPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeOcsCmb() PdeFacturaPdeOc relacionadas */ 	
	public function getPdeFacturaPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeOc::getPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcs (Coleccion) relacionados a traves de PdeFacturaPdeOc */ 	
	public function getPdeOcsXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOc::getPdeOcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcs relacionados a traves de PdeFacturaPdeOc */ 	
	public function getCantidadPdeOcsXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOc::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOc::getPdeOcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOc (Objeto) relacionado a traves de PdeFacturaPdeOc */ 	
	public function getPdeOcXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcsXPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeRecepcions */ 	
	public function getPdeFacturaPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapderecepcion = PdeFacturaPdeRecepcion::hidratarObjeto($fila);			
                $pdefacturapderecepcions[] = $pdefacturapderecepcion;
            }

            return $pdefacturapderecepcions;
	}	
	

	/* Método getPdeFacturaPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeFacturaPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecepcions Habilitados */ 	
	public function getPdeFacturaPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeRecepcion relacionadas */ 	
	public function deletePdeFacturaPdeRecepcions(){
            $obs = $this->getPdeFacturaPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeRecepcionsCmb() PdeFacturaPdeRecepcion relacionadas */ 	
	public function getPdeFacturaPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeRecepcion::getPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecepcions (Coleccion) relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeRecepcionsXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_RECEPCION_ID, PdeRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecepcions relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeRecepcionsXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_RECEPCION_ID, PdeRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecepcion (Objeto) relacionado a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeRecepcionXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecepcionsXPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaPdeRecibos */ 	
	public function getPdeFacturaPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaPdeRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaPdeRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaPdeRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaPdeRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaPdeRecibo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaPdeRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaPdeRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturapderecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturapderecibo = PdeFacturaPdeRecibo::hidratarObjeto($fila);			
                $pdefacturapderecibos[] = $pdefacturapderecibo;
            }

            return $pdefacturapderecibos;
	}	
	

	/* Método getPdeFacturaPdeRecibosBloque para MasInfo */ 	
	public function getPdeFacturaPdeRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaPdeRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecibos Habilitados */ 	
	public function getPdeFacturaPdeRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaPdeRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaPdeRecibo */ 	
	public function getPdeFacturaPdeRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaPdeRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaPdeRecibo relacionadas */ 	
	public function deletePdeFacturaPdeRecibos(){
            $obs = $this->getPdeFacturaPdeRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaPdeRecibosCmb() PdeFacturaPdeRecibo relacionadas */ 	
	public function getPdeFacturaPdeRecibosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaPdeRecibo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeRecibo::getPdeFacturaPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecibos (Coleccion) relacionados a traves de PdeFacturaPdeRecibo */ 	
	public function getPdeRecibosXPdeFacturaPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecibo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecibo::GEN_TABLA, PdeFacturaPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecibos relacionados a traves de PdeFacturaPdeRecibo */ 	
	public function getCantidadPdeRecibosXPdeFacturaPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecibo::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecibo::GEN_TABLA, PdeFacturaPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, PdeRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecibo (Objeto) relacionado a traves de PdeFacturaPdeRecibo */ 	
	public function getPdeReciboXPdeFacturaPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecibosXPdeFacturaPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeNotaCredito::getPdeFacturaPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaCreditos (Coleccion) relacionados a traves de PdeFacturaPdeNotaCredito */ 	
	public function getPdeNotaCreditosXPdeFacturaPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeNotaCredito::GEN_TABLA, PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaCreditos relacionados a traves de PdeFacturaPdeNotaCredito */ 	
	public function getCantidadPdeNotaCreditosXPdeFacturaPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeNotaCredito::GEN_TABLA, PdeFacturaPdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_ID, PdeNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaCredito (Objeto) relacionado a traves de PdeFacturaPdeNotaCredito */ 	
	public function getPdeNotaCreditoXPdeFacturaPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaCreditosXPdeFacturaPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturaGralCentroCostos */ 	
	public function getPdeFacturaGralCentroCostos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFacturaGralCentroCosto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFacturaGralCentroCosto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFacturaGralCentroCosto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFacturaGralCentroCosto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFacturaGralCentroCosto::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFacturaGralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFacturaGralCentroCosto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFacturaGralCentroCosto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturagralcentrocostos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefacturagralcentrocosto = PdeFacturaGralCentroCosto::hidratarObjeto($fila);			
                $pdefacturagralcentrocostos[] = $pdefacturagralcentrocosto;
            }

            return $pdefacturagralcentrocostos;
	}	
	

	/* Método getPdeFacturaGralCentroCostosBloque para MasInfo */ 	
	public function getPdeFacturaGralCentroCostosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturaGralCentroCostos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturaGralCentroCostos Habilitados */ 	
	public function getPdeFacturaGralCentroCostosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturaGralCentroCostos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFacturaGralCentroCosto */ 	
	public function getPdeFacturaGralCentroCosto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturaGralCentroCostos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFacturaGralCentroCosto relacionadas */ 	
	public function deletePdeFacturaGralCentroCostos(){
            $obs = $this->getPdeFacturaGralCentroCostos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturaGralCentroCostosCmb() PdeFacturaGralCentroCosto relacionadas */ 	
	public function getPdeFacturaGralCentroCostosCmb(){
            $c = new Criterio();
            $c->add(PdeFacturaGralCentroCosto::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaGralCentroCosto::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaGralCentroCosto::getPdeFacturaGralCentroCostosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralCentroCostos (Coleccion) relacionados a traves de PdeFacturaGralCentroCosto */ 	
	public function getGralCentroCostosXPdeFacturaGralCentroCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaGralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaGralCentroCosto::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(PdeFacturaGralCentroCosto::GEN_TABLA, PdeFacturaGralCentroCosto::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralCentroCostos relacionados a traves de PdeFacturaGralCentroCosto */ 	
	public function getCantidadGralCentroCostosXPdeFacturaGralCentroCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralCentroCosto::GEN_ATTR_ID);
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaGralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaGralCentroCosto::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(PdeFacturaGralCentroCosto::GEN_TABLA, PdeFacturaGralCentroCosto::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralCentroCosto (Objeto) relacionado a traves de PdeFacturaGralCentroCosto */ 	
	public function getGralCentroCostoXPdeFacturaGralCentroCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralCentroCostosXPdeFacturaGralCentroCosto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagoPdeFacturas */ 	
	public function getPdeOrdenPagoPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPagoPdeFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPagoPdeFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPagoPdeFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPagoPdeFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPagoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPagoPdeFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPagoPdeFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagopdefacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpagopdefactura = PdeOrdenPagoPdeFactura::hidratarObjeto($fila);			
                $pdeordenpagopdefacturas[] = $pdeordenpagopdefactura;
            }

            return $pdeordenpagopdefacturas;
	}	
	

	/* Método getPdeOrdenPagoPdeFacturasBloque para MasInfo */ 	
	public function getPdeOrdenPagoPdeFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagoPdeFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeFacturas Habilitados */ 	
	public function getPdeOrdenPagoPdeFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagoPdeFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPagoPdeFactura */ 	
	public function getPdeOrdenPagoPdeFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagoPdeFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPagoPdeFactura relacionadas */ 	
	public function deletePdeOrdenPagoPdeFacturas(){
            $obs = $this->getPdeOrdenPagoPdeFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagoPdeFacturasCmb() PdeOrdenPagoPdeFactura relacionadas */ 	
	public function getPdeOrdenPagoPdeFacturasCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPagoPdeFactura::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPagoPdeFactura::getPdeOrdenPagoPdeFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOrdenPagos (Coleccion) relacionados a traves de PdeOrdenPagoPdeFactura */ 	
	public function getPdeOrdenPagosXPdeOrdenPagoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeFactura::GEN_TABLA, PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_ORDEN_PAGO_ID, PdeOrdenPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOrdenPagos relacionados a traves de PdeOrdenPagoPdeFactura */ 	
	public function getCantidadPdeOrdenPagosXPdeOrdenPagoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOrdenPago::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPagoPdeFactura::GEN_TABLA, PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_ORDEN_PAGO_ID, PdeOrdenPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOrdenPago (Objeto) relacionado a traves de PdeOrdenPagoPdeFactura */ 	
	public function getPdeOrdenPagoXPdeOrdenPagoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOrdenPagosXPdeOrdenPagoPdeFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoPdeFacturas */ 	
	public function getCntbDiarioAsientoPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoPdeFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoPdeFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoPdeFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoPdeFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientopdefacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientopdefactura = CntbDiarioAsientoPdeFactura::hidratarObjeto($fila);			
                $cntbdiarioasientopdefacturas[] = $cntbdiarioasientopdefactura;
            }

            return $cntbdiarioasientopdefacturas;
	}	
	

	/* Método getCntbDiarioAsientoPdeFacturasBloque para MasInfo */ 	
	public function getCntbDiarioAsientoPdeFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoPdeFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeFacturas Habilitados */ 	
	public function getCntbDiarioAsientoPdeFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoPdeFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeFactura */ 	
	public function getCntbDiarioAsientoPdeFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoPdeFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoPdeFactura relacionadas */ 	
	public function deleteCntbDiarioAsientoPdeFacturas(){
            $obs = $this->getCntbDiarioAsientoPdeFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoPdeFacturasCmb() CntbDiarioAsientoPdeFactura relacionadas */ 	
	public function getCntbDiarioAsientoPdeFacturasCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoPdeFactura::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoPdeFactura::getCntbDiarioAsientoPdeFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoPdeFactura */ 	
	public function getCntbPeriodosXCntbDiarioAsientoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeFactura::GEN_TABLA, CntbDiarioAsientoPdeFactura::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoPdeFactura */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeFactura::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeFactura::GEN_TABLA, CntbDiarioAsientoPdeFactura::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoPdeFactura */ 	
	public function getCntbPeriodoXCntbDiarioAsientoPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoPdeFactura($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(AfipCitiComprasCbte::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasCbte::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasAlicuotas::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AfipCitiComprasImportaciones::GEN_ATTR_PDE_FACTURA_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna una coleccion de IDs de los PdeTributos asignados a PdeFactura */ 	
	public function getPdeFacturaPdeTributosId(){
            $ids = array();
            foreach($this->getPdeFacturaPdeTributos() as $o){
            
                $ids[] = $o->getPdeTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTributos asignados al PdeFactura */ 	
	public function setPdeFacturaPdeTributos($ids){
            $this->deletePdeFacturaPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeFacturaPdeTributo();
                    $o->setPdeTributoId($id);
                    $o->setPdeFacturaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTributo en el alta de PdeFactura */ 	
	public function getAltaMostrarBloqueRelacionPdeFacturaPdeTributo(){
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

	/* Metodo que retorna el PdeFacturaTipoEstado (Clave Foranea) */ 	
    public function getPdeFacturaTipoEstado(){
        $o = new PdeFacturaTipoEstado();
        $o->setId($this->getPdeFacturaTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeFacturaTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeFacturaTipoEstadoEnArray(&$arr_os){
        if($this->getPdeFacturaTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeFacturaTipoEstadoId()])){
                $o = $arr_os[$this->getPdeFacturaTipoEstadoId()];
            }else{
                $o = PdeFacturaTipoEstado::getOxId($this->getPdeFacturaTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeFacturaTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeFacturaTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeTipoFactura (Clave Foranea) */ 	
    public function getPdeTipoFactura(){
        $o = new PdeTipoFactura();
        $o->setId($this->getPdeTipoFacturaId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoFactura (Clave Foranea) en Array */ 	
    public function getPdeTipoFacturaEnArray(&$arr_os){
        if($this->getPdeTipoFacturaId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoFacturaId()])){
                $o = $arr_os[$this->getPdeTipoFacturaId()];
            }else{
                $o = PdeTipoFactura::getOxId($this->getPdeTipoFacturaId());
                if($o){
                    $arr_os[$this->getPdeTipoFacturaId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoFactura();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeTipoOrigenFactura (Clave Foranea) */ 	
    public function getPdeTipoOrigenFactura(){
        $o = new PdeTipoOrigenFactura();
        $o->setId($this->getPdeTipoOrigenFacturaId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoOrigenFactura (Clave Foranea) en Array */ 	
    public function getPdeTipoOrigenFacturaEnArray(&$arr_os){
        if($this->getPdeTipoOrigenFacturaId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoOrigenFacturaId()])){
                $o = $arr_os[$this->getPdeTipoOrigenFacturaId()];
            }else{
                $o = PdeTipoOrigenFactura::getOxId($this->getPdeTipoOrigenFacturaId());
                if($o){
                    $arr_os[$this->getPdeTipoOrigenFacturaId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoOrigenFactura();
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
            		
        if($contexto_solicitante != PdeFacturaTipoEstado::GEN_CLASE){
            if($this->getPdeFacturaTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeFacturaTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeFacturaTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeTipoFactura::GEN_CLASE){
            if($this->getPdeTipoFactura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoFactura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoFactura()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeTipoOrigenFactura::GEN_CLASE){
            if($this->getPdeTipoOrigenFactura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoOrigenFactura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoOrigenFactura()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_factura'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_factura';");
            
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

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_factura_tipo_estado_id' */ 	
	static function getOxPdeFacturaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_factura_tipo_estado_id' */ 	
	static function getOsxPdeFacturaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_factura_id' */ 	
	static function getOxPdeTipoFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_factura_id' */ 	
	static function getOsxPdeTipoFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_origen_factura_id' */ 	
	static function getOxPdeTipoOrigenFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ORIGEN_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_origen_factura_id' */ 	
	static function getOsxPdeTipoOrigenFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ORIGEN_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_fp_forma_pago_id' */ 	
	static function getOxGralFpFormaPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_actividad_id' */ 	
	static function getOxGralActividadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ACTIVIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_escenario_id' */ 	
	static function getOxGralEscenarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_ESCENARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_factura' */ 	
	static function getOxNumeroFactura($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_FACTURA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_factura_completo' */ 	
	static function getOxNumeroFacturaCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_FACTURA_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_despacho' */ 	
	static function getOxNumeroDespacho($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_DESPACHO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_vencimiento' */ 	
	static function getOxFechaVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_descuento_financiero_id' */ 	
	static function getOxPrvDescuentoFinancieroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_timbrado' */ 	
	static function getOxNumeroTimbrado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_TIMBRADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas(null, $criterio);
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

            $obs = self::getPdeFacturas($paginador, $criterio);
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

            $obs = self::getPdeFacturas($paginador, $criterio);
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
            $c->addTabla(PdeFacturaImagen::GEN_TABLA);
            $c->addOrden(PdeFacturaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getPdeFacturaImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getPdeFacturaImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(PdeFacturaImagen::GEN_TABLA);
            $c->addOrden(PdeFacturaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPdeFacturaImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getPdeFacturaImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getPdeFacturaImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(PdeFacturaImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(PdeFacturaImagen::GEN_TABLA);
            $c->addOrden(PdeFacturaImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPdeFacturaImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_factura_adm');
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
                $c->addTabla(PdeFactura::GEN_TABLA);
                $c->addOrden(PdeFactura::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_facturas = PdeFactura::getPdeFacturas(null, $c);

                $arr = array();
                foreach($pde_facturas as $pde_factura){
                    $descripcion = $pde_factura->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>