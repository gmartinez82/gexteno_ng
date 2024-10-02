<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeRecibo
{ 
	
	const SES_PAGINACION = 'adm_pderecibo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pderecibo_paginas_registros';
	const SES_CRITERIOS = 'adm_pderecibo_criterios';
	
	const GEN_CLASE = 'PdeRecibo';
	const GEN_TABLA = 'pde_recibo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeRecibo */ 
	const GEN_ATTR_ID = 'pde_recibo.id';
	const GEN_ATTR_DESCRIPCION = 'pde_recibo.descripcion';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'pde_recibo.prv_proveedor_id';
	const GEN_ATTR_PDE_TIPO_RECIBO_ID = 'pde_recibo.pde_tipo_recibo_id';
	const GEN_ATTR_PDE_TIPO_ORIGEN_RECIBO_ID = 'pde_recibo.pde_tipo_origen_recibo_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'pde_recibo.gral_condicion_iva_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'pde_recibo.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'pde_recibo.gral_empresa_id';
	const GEN_ATTR_PDE_CENTRO_PEDIDO_ID = 'pde_recibo.pde_centro_pedido_id';
	const GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID = 'pde_recibo.pde_recibo_tipo_estado_id';
	const GEN_ATTR_PDE_RECIBO_CONDICION_PAGO_ID = 'pde_recibo.pde_recibo_condicion_pago_id';
	const GEN_ATTR_PDE_RECIBO_TIPO_PAGO_ID = 'pde_recibo.pde_recibo_tipo_pago_id';
	const GEN_ATTR_NUMERO_SUCURSAL = 'pde_recibo.numero_sucursal';
	const GEN_ATTR_NUMERO_PUNTO_VENTA = 'pde_recibo.numero_punto_venta';
	const GEN_ATTR_NUMERO_RECIBO = 'pde_recibo.numero_recibo';
	const GEN_ATTR_NUMERO_RECIBO_COMPLETO = 'pde_recibo.numero_recibo_completo';
	const GEN_ATTR_CAE = 'pde_recibo.cae';
	const GEN_ATTR_FECHA_EMISION = 'pde_recibo.fecha_emision';
	const GEN_ATTR_PERSONA_DESCRIPCION = 'pde_recibo.persona_descripcion';
	const GEN_ATTR_RAZON_SOCIAL = 'pde_recibo.razon_social';
	const GEN_ATTR_DOMICILIO_LEGAL = 'pde_recibo.domicilio_legal';
	const GEN_ATTR_CUIT = 'pde_recibo.cuit';
	const GEN_ATTR_CODIGO = 'pde_recibo.codigo';
	const GEN_ATTR_ANIO = 'pde_recibo.anio';
	const GEN_ATTR_GRAL_MES_ID = 'pde_recibo.gral_mes_id';
	const GEN_ATTR_CNTB_DIARIO_ASIENTO_ID = 'pde_recibo.cntb_diario_asiento_id';
	const GEN_ATTR_PDE_ORDEN_PAGO_ID = 'pde_recibo.pde_orden_pago_id';
	const GEN_ATTR_FND_CAJA_ID = 'pde_recibo.fnd_caja_id';
	const GEN_ATTR_OBSERVACION = 'pde_recibo.observacion';
	const GEN_ATTR_NOTA_INTERNA = 'pde_recibo.nota_interna';
	const GEN_ATTR_ORDEN = 'pde_recibo.orden';
	const GEN_ATTR_ESTADO = 'pde_recibo.estado';
	const GEN_ATTR_CREADO = 'pde_recibo.creado';
	const GEN_ATTR_CREADO_POR = 'pde_recibo.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_recibo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_recibo.modificado_por';

	/* Constantes de Atributos Min de BPdeRecibo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_PDE_TIPO_RECIBO_ID = 'pde_tipo_recibo_id';
	const GEN_ATTR_MIN_PDE_TIPO_ORIGEN_RECIBO_ID = 'pde_tipo_origen_recibo_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID = 'pde_centro_pedido_id';
	const GEN_ATTR_MIN_PDE_RECIBO_TIPO_ESTADO_ID = 'pde_recibo_tipo_estado_id';
	const GEN_ATTR_MIN_PDE_RECIBO_CONDICION_PAGO_ID = 'pde_recibo_condicion_pago_id';
	const GEN_ATTR_MIN_PDE_RECIBO_TIPO_PAGO_ID = 'pde_recibo_tipo_pago_id';
	const GEN_ATTR_MIN_NUMERO_SUCURSAL = 'numero_sucursal';
	const GEN_ATTR_MIN_NUMERO_PUNTO_VENTA = 'numero_punto_venta';
	const GEN_ATTR_MIN_NUMERO_RECIBO = 'numero_recibo';
	const GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO = 'numero_recibo_completo';
	const GEN_ATTR_MIN_CAE = 'cae';
	const GEN_ATTR_MIN_FECHA_EMISION = 'fecha_emision';
	const GEN_ATTR_MIN_PERSONA_DESCRIPCION = 'persona_descripcion';
	const GEN_ATTR_MIN_RAZON_SOCIAL = 'razon_social';
	const GEN_ATTR_MIN_DOMICILIO_LEGAL = 'domicilio_legal';
	const GEN_ATTR_MIN_CUIT = 'cuit';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_ANIO = 'anio';
	const GEN_ATTR_MIN_GRAL_MES_ID = 'gral_mes_id';
	const GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID = 'cntb_diario_asiento_id';
	const GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID = 'pde_orden_pago_id';
	const GEN_ATTR_MIN_FND_CAJA_ID = 'fnd_caja_id';
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
	

	/* Atributos de BPdeRecibo */ 
	private $id;
	private $descripcion;
	private $prv_proveedor_id;
	private $pde_tipo_recibo_id;
	private $pde_tipo_origen_recibo_id;
	private $gral_condicion_iva_id;
	private $gral_tipo_personeria_id;
	private $gral_empresa_id;
	private $pde_centro_pedido_id;
	private $pde_recibo_tipo_estado_id;
	private $pde_recibo_condicion_pago_id;
	private $pde_recibo_tipo_pago_id;
	private $numero_sucursal;
	private $numero_punto_venta;
	private $numero_recibo;
	private $numero_recibo_completo;
	private $cae;
	private $fecha_emision;
	private $persona_descripcion;
	private $razon_social;
	private $domicilio_legal;
	private $cuit;
	private $codigo;
	private $anio;
	private $gral_mes_id;
	private $cntb_diario_asiento_id;
	private $pde_orden_pago_id;
	private $fnd_caja_id;
	private $observacion;
	private $nota_interna;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeRecibo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getPdeTipoReciboId(){ if(isset($this->pde_tipo_recibo_id)){ return $this->pde_tipo_recibo_id; }else{ return 'null'; } }
	public function getPdeTipoOrigenReciboId(){ if(isset($this->pde_tipo_origen_recibo_id)){ return $this->pde_tipo_origen_recibo_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getPdeCentroPedidoId(){ if(isset($this->pde_centro_pedido_id)){ return $this->pde_centro_pedido_id; }else{ return 'null'; } }
	public function getPdeReciboTipoEstadoId(){ if(isset($this->pde_recibo_tipo_estado_id)){ return $this->pde_recibo_tipo_estado_id; }else{ return 'null'; } }
	public function getPdeReciboCondicionPagoId(){ if(isset($this->pde_recibo_condicion_pago_id)){ return $this->pde_recibo_condicion_pago_id; }else{ return 'null'; } }
	public function getPdeReciboTipoPagoId(){ if(isset($this->pde_recibo_tipo_pago_id)){ return $this->pde_recibo_tipo_pago_id; }else{ return 'null'; } }
	public function getNumeroSucursal(){ if(isset($this->numero_sucursal)){ return $this->numero_sucursal; }else{ return ''; } }
	public function getNumeroPuntoVenta(){ if(isset($this->numero_punto_venta)){ return $this->numero_punto_venta; }else{ return ''; } }
	public function getNumeroRecibo(){ if(isset($this->numero_recibo)){ return $this->numero_recibo; }else{ return ''; } }
	public function getNumeroReciboCompleto(){ if(isset($this->numero_recibo_completo)){ return $this->numero_recibo_completo; }else{ return ''; } }
	public function getCae(){ if(isset($this->cae)){ return $this->cae; }else{ return ''; } }
	public function getFechaEmision(){ if(isset($this->fecha_emision)){ return $this->fecha_emision; }else{ return ''; } }
	public function getPersonaDescripcion(){ if(isset($this->persona_descripcion)){ return $this->persona_descripcion; }else{ return ''; } }
	public function getRazonSocial(){ if(isset($this->razon_social)){ return $this->razon_social; }else{ return ''; } }
	public function getDomicilioLegal(){ if(isset($this->domicilio_legal)){ return $this->domicilio_legal; }else{ return ''; } }
	public function getCuit(){ if(isset($this->cuit)){ return $this->cuit; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getAnio(){ if(isset($this->anio)){ return $this->anio; }else{ return 0; } }
	public function getGralMesId(){ if(isset($this->gral_mes_id)){ return $this->gral_mes_id; }else{ return 'null'; } }
	public function getCntbDiarioAsientoId(){ if(isset($this->cntb_diario_asiento_id)){ return $this->cntb_diario_asiento_id; }else{ return 'null'; } }
	public function getPdeOrdenPagoId(){ if(isset($this->pde_orden_pago_id)){ return $this->pde_orden_pago_id; }else{ return 'null'; } }
	public function getFndCajaId(){ if(isset($this->fnd_caja_id)){ return $this->fnd_caja_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPdeRecibo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_PDE_TIPO_RECIBO_ID."
				, ".self::GEN_ATTR_PDE_TIPO_ORIGEN_RECIBO_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_PDE_RECIBO_CONDICION_PAGO_ID."
				, ".self::GEN_ATTR_PDE_RECIBO_TIPO_PAGO_ID."
				, ".self::GEN_ATTR_NUMERO_SUCURSAL."
				, ".self::GEN_ATTR_NUMERO_PUNTO_VENTA."
				, ".self::GEN_ATTR_NUMERO_RECIBO."
				, ".self::GEN_ATTR_NUMERO_RECIBO_COMPLETO."
				, ".self::GEN_ATTR_CAE."
				, ".self::GEN_ATTR_FECHA_EMISION."
				, ".self::GEN_ATTR_PERSONA_DESCRIPCION."
				, ".self::GEN_ATTR_RAZON_SOCIAL."
				, ".self::GEN_ATTR_DOMICILIO_LEGAL."
				, ".self::GEN_ATTR_CUIT."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_ANIO."
				, ".self::GEN_ATTR_GRAL_MES_ID."
				, ".self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID."
				, ".self::GEN_ATTR_PDE_ORDEN_PAGO_ID."
				, ".self::GEN_ATTR_FND_CAJA_ID."
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
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setPdeTipoReciboId($fila[self::GEN_ATTR_MIN_PDE_TIPO_RECIBO_ID]);
				$this->setPdeTipoOrigenReciboId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_RECIBO_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
				$this->setPdeReciboTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_ESTADO_ID]);
				$this->setPdeReciboCondicionPagoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_CONDICION_PAGO_ID]);
				$this->setPdeReciboTipoPagoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_PAGO_ID]);
				$this->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
				$this->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
				$this->setNumeroRecibo($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO]);
				$this->setNumeroReciboCompleto($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO]);
				$this->setCae($fila[self::GEN_ATTR_MIN_CAE]);
				$this->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
				$this->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
				$this->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
				$this->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
				$this->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
				$this->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
				$this->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
				$this->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
				$this->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
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
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setPdeTipoReciboId($v){ $this->pde_tipo_recibo_id = $v; }
	public function setPdeTipoOrigenReciboId($v){ $this->pde_tipo_origen_recibo_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setPdeCentroPedidoId($v){ $this->pde_centro_pedido_id = $v; }
	public function setPdeReciboTipoEstadoId($v){ $this->pde_recibo_tipo_estado_id = $v; }
	public function setPdeReciboCondicionPagoId($v){ $this->pde_recibo_condicion_pago_id = $v; }
	public function setPdeReciboTipoPagoId($v){ $this->pde_recibo_tipo_pago_id = $v; }
	public function setNumeroSucursal($v){ $this->numero_sucursal = $v; }
	public function setNumeroPuntoVenta($v){ $this->numero_punto_venta = $v; }
	public function setNumeroRecibo($v){ $this->numero_recibo = $v; }
	public function setNumeroReciboCompleto($v){ $this->numero_recibo_completo = $v; }
	public function setCae($v){ $this->cae = $v; }
	public function setFechaEmision($v){ $this->fecha_emision = $v; }
	public function setPersonaDescripcion($v){ $this->persona_descripcion = $v; }
	public function setRazonSocial($v){ $this->razon_social = $v; }
	public function setDomicilioLegal($v){ $this->domicilio_legal = $v; }
	public function setCuit($v){ $this->cuit = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setAnio($v){ $this->anio = $v; }
	public function setGralMesId($v){ $this->gral_mes_id = $v; }
	public function setCntbDiarioAsientoId($v){ $this->cntb_diario_asiento_id = $v; }
	public function setPdeOrdenPagoId($v){ $this->pde_orden_pago_id = $v; }
	public function setFndCajaId($v){ $this->fnd_caja_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeRecibo();
            $o->setId($fila[PdeRecibo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setPdeTipoReciboId($fila[self::GEN_ATTR_MIN_PDE_TIPO_RECIBO_ID]);
			$o->setPdeTipoOrigenReciboId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_RECIBO_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$o->setPdeReciboTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_ESTADO_ID]);
			$o->setPdeReciboCondicionPagoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_CONDICION_PAGO_ID]);
			$o->setPdeReciboTipoPagoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_PAGO_ID]);
			$o->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$o->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$o->setNumeroRecibo($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO]);
			$o->setNumeroReciboCompleto($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO]);
			$o->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$o->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$o->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$o->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$o->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$o->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$o->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$o->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$o->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
			$o->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
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

	/* Control de BPdeRecibo */ 	
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

	/* Cambia el estado de BPdeRecibo */ 	
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

	/* Save de BPdeRecibo */ 	
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
						, ".self::GEN_ATTR_MIN_PDE_TIPO_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_CONDICION_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_PAGO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO."
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO."
						, ".self::GEN_ATTR_MIN_CAE."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_recibo_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeTipoReciboId()."
						, ".$this->getPdeTipoOrigenReciboId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getPdeReciboTipoEstadoId()."
						, ".$this->getPdeReciboCondicionPagoId()."
						, ".$this->getPdeReciboTipoPagoId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroRecibo()."'
						, '".$this->getNumeroReciboCompleto()."'
						, '".$this->getCae()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getPdeOrdenPagoId()."
						, ".$this->getFndCajaId()."
						, '".$this->getObservacion()."'
						, '".$this->getNotaInterna()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_recibo_seq')";
            
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
                 
				 ".PdeRecibo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_RECIBO_ID." = ".$this->getPdeTipoReciboId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_RECIBO_ID." = ".$this->getPdeTipoOrigenReciboId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_ESTADO_ID." = ".$this->getPdeReciboTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_CONDICION_PAGO_ID." = ".$this->getPdeReciboCondicionPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_PAGO_ID." = ".$this->getPdeReciboTipoPagoId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO." = '".$this->getNumeroRecibo()."'
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO." = '".$this->getNumeroReciboCompleto()."'
						, ".self::GEN_ATTR_MIN_CAE." = '".$this->getCae()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID." = ".$this->getPdeOrdenPagoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
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
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_RECIBO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_CONDICION_PAGO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_PAGO_ID."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL."
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA."
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO."
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO."
						, ".self::GEN_ATTR_MIN_CAE."
						, ".self::GEN_ATTR_MIN_FECHA_EMISION."
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_ANIO."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID."
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
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdeTipoReciboId()."
						, ".$this->getPdeTipoOrigenReciboId()."
						, ".$this->getGralCondicionIvaId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralEmpresaId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getPdeReciboTipoEstadoId()."
						, ".$this->getPdeReciboCondicionPagoId()."
						, ".$this->getPdeReciboTipoPagoId()."
						, '".$this->getNumeroSucursal()."'
						, '".$this->getNumeroPuntoVenta()."'
						, '".$this->getNumeroRecibo()."'
						, '".$this->getNumeroReciboCompleto()."'
						, '".$this->getCae()."'
						, '".$this->getFechaEmision()."'
						, '".$this->getPersonaDescripcion()."'
						, '".$this->getRazonSocial()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getCuit()."'
						, '".$this->getCodigo()."'
						, ".$this->getAnio()."
						, ".$this->getGralMesId()."
						, ".$this->getCntbDiarioAsientoId()."
						, ".$this->getPdeOrdenPagoId()."
						, ".$this->getFndCajaId()."
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
                     
				 ".PdeRecibo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_RECIBO_ID." = ".$this->getPdeTipoReciboId()."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_RECIBO_ID." = ".$this->getPdeTipoOrigenReciboId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_ESTADO_ID." = ".$this->getPdeReciboTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_CONDICION_PAGO_ID." = ".$this->getPdeReciboCondicionPagoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_PAGO_ID." = ".$this->getPdeReciboTipoPagoId()."
						, ".self::GEN_ATTR_MIN_NUMERO_SUCURSAL." = '".$this->getNumeroSucursal()."'
						, ".self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA." = '".$this->getNumeroPuntoVenta()."'
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO." = '".$this->getNumeroRecibo()."'
						, ".self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO." = '".$this->getNumeroReciboCompleto()."'
						, ".self::GEN_ATTR_MIN_CAE." = '".$this->getCae()."'
						, ".self::GEN_ATTR_MIN_FECHA_EMISION." = '".$this->getFechaEmision()."'
						, ".self::GEN_ATTR_MIN_PERSONA_DESCRIPCION." = '".$this->getPersonaDescripcion()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_ANIO." = ".$this->getAnio()."
						, ".self::GEN_ATTR_MIN_GRAL_MES_ID." = ".$this->getGralMesId()."
						, ".self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID." = ".$this->getCntbDiarioAsientoId()."
						, ".self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID." = ".$this->getPdeOrdenPagoId()."
						, ".self::GEN_ATTR_MIN_FND_CAJA_ID." = ".$this->getFndCajaId()."
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
            $o = new PdeRecibo();
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

	/* Delete de BPdeRecibo */ 	
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
	
            // se elimina la coleccion de PdeFacturaPdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitoPdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebitoPdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitoPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboImagens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboImagen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboImagens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboArchivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboArchivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboArchivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboItems relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboItem::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboItems(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboItemCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboItemCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboItemCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeReciboPdeTributos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeReciboPdeTributo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeReciboPdeTributos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CntbDiarioAsientoPdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CntbDiarioAsientoPdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCntbDiarioAsientoPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndChqCheques relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndChqCheque::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndChqCheques(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdeRecibo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeRecibo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pderecibos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pderecibo = new PdeRecibo();
                    $pderecibo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pderecibo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pderecibo->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$pderecibo->setPdeTipoReciboId($fila[self::GEN_ATTR_MIN_PDE_TIPO_RECIBO_ID]);
			$pderecibo->setPdeTipoOrigenReciboId($fila[self::GEN_ATTR_MIN_PDE_TIPO_ORIGEN_RECIBO_ID]);
			$pderecibo->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$pderecibo->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$pderecibo->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$pderecibo->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$pderecibo->setPdeReciboTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_ESTADO_ID]);
			$pderecibo->setPdeReciboCondicionPagoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_CONDICION_PAGO_ID]);
			$pderecibo->setPdeReciboTipoPagoId($fila[self::GEN_ATTR_MIN_PDE_RECIBO_TIPO_PAGO_ID]);
			$pderecibo->setNumeroSucursal($fila[self::GEN_ATTR_MIN_NUMERO_SUCURSAL]);
			$pderecibo->setNumeroPuntoVenta($fila[self::GEN_ATTR_MIN_NUMERO_PUNTO_VENTA]);
			$pderecibo->setNumeroRecibo($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO]);
			$pderecibo->setNumeroReciboCompleto($fila[self::GEN_ATTR_MIN_NUMERO_RECIBO_COMPLETO]);
			$pderecibo->setCae($fila[self::GEN_ATTR_MIN_CAE]);
			$pderecibo->setFechaEmision($fila[self::GEN_ATTR_MIN_FECHA_EMISION]);
			$pderecibo->setPersonaDescripcion($fila[self::GEN_ATTR_MIN_PERSONA_DESCRIPCION]);
			$pderecibo->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$pderecibo->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$pderecibo->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$pderecibo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pderecibo->setAnio($fila[self::GEN_ATTR_MIN_ANIO]);
			$pderecibo->setGralMesId($fila[self::GEN_ATTR_MIN_GRAL_MES_ID]);
			$pderecibo->setCntbDiarioAsientoId($fila[self::GEN_ATTR_MIN_CNTB_DIARIO_ASIENTO_ID]);
			$pderecibo->setPdeOrdenPagoId($fila[self::GEN_ATTR_MIN_PDE_ORDEN_PAGO_ID]);
			$pderecibo->setFndCajaId($fila[self::GEN_ATTR_MIN_FND_CAJA_ID]);
			$pderecibo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pderecibo->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$pderecibo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pderecibo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pderecibo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pderecibo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pderecibo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pderecibo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pderecibos[] = $pderecibo;
		}
		
		return $pderecibos;
	}	
	

	/* Método getPdeRecibos Habilitados */ 	
	static function getPdeRecibosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeRecibo::getPdeRecibos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeRecibos para listado de Backend */ 	
	static function getPdeRecibosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeRecibo::getPdeRecibos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeRecibosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeRecibo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeRecibo::getPdeRecibos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeRecibos filtrado para select */ 	
	static function getPdeRecibosCmbF($paginador = null, $criterio = null){
            $col = PdeRecibo::getPdeRecibos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPdeRecibosXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de PdeTipoRecibo */ 	
	static function getPdeRecibosXPdeTipoRecibos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_TIPO_RECIBO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoReciboId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de PdeTipoOrigenRecibo */ 	
	static function getPdeRecibosXPdeTipoOrigenRecibos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_TIPO_ORIGEN_RECIBO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoOrigenReciboId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getPdeRecibosXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getPdeRecibosXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getPdeRecibosXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de PdeCentroPedido */ 	
	static function getPdeRecibosXPdeCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de PdeReciboTipoEstado */ 	
	static function getPdeRecibosXPdeReciboTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeReciboTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de PdeReciboCondicionPago */ 	
	static function getPdeRecibosXPdeReciboCondicionPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_RECIBO_CONDICION_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeReciboCondicionPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de PdeReciboTipoPago */ 	
	static function getPdeRecibosXPdeReciboTipoPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeReciboTipoPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de GralMes */ 	
	static function getPdeRecibosXGralMess($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_GRAL_MES_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralMesId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de CntbDiarioAsiento */ 	
	static function getPdeRecibosXCntbDiarioAsientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCntbDiarioAsientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de PdeOrdenPago */ 	
	static function getPdeRecibosXPdeOrdenPagos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_ORDEN_PAGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOrdenPagoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecibos filtrado por una coleccion de objetos foraneos de FndCaja */ 	
	static function getPdeRecibosXFndCajas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_FND_CAJA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecibo::getPdeRecibos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getFndCajaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_recibo_adm.php';
            $url_gestion = 'pde_recibo_gestion.php';
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
                
            $criterio->add(PdeFacturaPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeFacturaPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeRecibo::getPdeFacturaPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeRecibo */ 	
	public function getPdeFacturasXPdeFacturaPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecibo::GEN_TABLA, PdeFacturaPdeRecibo::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeRecibo */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecibo::GEN_TABLA, PdeFacturaPdeRecibo::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeRecibo */ 	
	public function getPdeFacturaXPdeFacturaPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebitoPdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebitoPdeRecibo::getPdeNotaDebitoPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeNotaDebitos (Coleccion) relacionados a traves de PdeNotaDebitoPdeRecibo */ 	
	public function getPdeNotaDebitosXPdeNotaDebitoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeRecibo::GEN_TABLA, PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeNotaDebitos relacionados a traves de PdeNotaDebitoPdeRecibo */ 	
	public function getCantidadPdeNotaDebitosXPdeNotaDebitoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeNotaDebito::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebitoPdeRecibo::GEN_TABLA, PdeNotaDebitoPdeRecibo::GEN_ATTR_PDE_NOTA_DEBITO_ID, PdeNotaDebito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeNotaDebito (Objeto) relacionado a traves de PdeNotaDebitoPdeRecibo */ 	
	public function getPdeNotaDebitoXPdeNotaDebitoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeNotaDebitosXPdeNotaDebitoPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeReciboImportes */ 	
	public function getPdeReciboImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboImporte::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboimporte = PdeReciboImporte::hidratarObjeto($fila);			
                $pdereciboimportes[] = $pdereciboimporte;
            }

            return $pdereciboimportes;
	}	
	

	/* Método getPdeReciboImportesBloque para MasInfo */ 	
	public function getPdeReciboImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboImportes Habilitados */ 	
	public function getPdeReciboImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboImporte */ 	
	public function getPdeReciboImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboImporte relacionadas */ 	
	public function deletePdeReciboImportes(){
            $obs = $this->getPdeReciboImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboImportesCmb() PdeReciboImporte relacionadas */ 	
	public function getPdeReciboImportesCmb(){
            $c = new Criterio();
            $c->add(PdeReciboImporte::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboImporte::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboImporte::getPdeReciboImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeReciboImagens */ 	
	public function getPdeReciboImagens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboImagen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboImagen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboImagen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboImagen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboImagen::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboImagen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboImagen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboimagens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboimagen = PdeReciboImagen::hidratarObjeto($fila);			
                $pdereciboimagens[] = $pdereciboimagen;
            }

            return $pdereciboimagens;
	}	
	

	/* Método getPdeReciboImagensBloque para MasInfo */ 	
	public function getPdeReciboImagensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboImagens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboImagens Habilitados */ 	
	public function getPdeReciboImagensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboImagens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboImagen */ 	
	public function getPdeReciboImagen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboImagens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboImagen relacionadas */ 	
	public function deletePdeReciboImagens(){
            $obs = $this->getPdeReciboImagens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboImagensCmb() PdeReciboImagen relacionadas */ 	
	public function getPdeReciboImagensCmb(){
            $c = new Criterio();
            $c->add(PdeReciboImagen::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboImagen::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboImagen::getPdeReciboImagensCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeReciboArchivos */ 	
	public function getPdeReciboArchivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboArchivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboArchivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboArchivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboArchivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboArchivo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboArchivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboArchivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboArchivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboarchivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboarchivo = PdeReciboArchivo::hidratarObjeto($fila);			
                $pdereciboarchivos[] = $pdereciboarchivo;
            }

            return $pdereciboarchivos;
	}	
	

	/* Método getPdeReciboArchivosBloque para MasInfo */ 	
	public function getPdeReciboArchivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboArchivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboArchivos Habilitados */ 	
	public function getPdeReciboArchivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboArchivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboArchivo */ 	
	public function getPdeReciboArchivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboArchivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboArchivo relacionadas */ 	
	public function deletePdeReciboArchivos(){
            $obs = $this->getPdeReciboArchivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboArchivosCmb() PdeReciboArchivo relacionadas */ 	
	public function getPdeReciboArchivosCmb(){
            $c = new Criterio();
            $c->add(PdeReciboArchivo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboArchivo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboArchivo::getPdeReciboArchivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeReciboEstados */ 	
	public function getPdeReciboEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboEstado::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboestado = PdeReciboEstado::hidratarObjeto($fila);			
                $pdereciboestados[] = $pdereciboestado;
            }

            return $pdereciboestados;
	}	
	

	/* Método getPdeReciboEstadosBloque para MasInfo */ 	
	public function getPdeReciboEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboEstados Habilitados */ 	
	public function getPdeReciboEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboEstado */ 	
	public function getPdeReciboEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboEstado relacionadas */ 	
	public function deletePdeReciboEstados(){
            $obs = $this->getPdeReciboEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboEstadosCmb() PdeReciboEstado relacionadas */ 	
	public function getPdeReciboEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeReciboEstado::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboEstado::getPdeReciboEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeReciboTipoEstados (Coleccion) relacionados a traves de PdeReciboEstado */ 	
	public function getPdeReciboTipoEstadosXPdeReciboEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeReciboTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboEstado::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeReciboEstado::GEN_TABLA, PdeReciboEstado::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, PdeReciboTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeReciboTipoEstado::getPdeReciboTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeReciboTipoEstados relacionados a traves de PdeReciboEstado */ 	
	public function getCantidadPdeReciboTipoEstadosXPdeReciboEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeReciboTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeReciboTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboEstado::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeReciboEstado::GEN_TABLA, PdeReciboEstado::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, PdeReciboTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeReciboTipoEstado::getPdeReciboTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeReciboTipoEstado (Objeto) relacionado a traves de PdeReciboEstado */ 	
	public function getPdeReciboTipoEstadoXPdeReciboEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeReciboTipoEstadosXPdeReciboEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeReciboItems */ 	
	public function getPdeReciboItems($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboItem::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboItem::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboItem::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboItem::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboItem::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboItem::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboItem::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboitems = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboitem = PdeReciboItem::hidratarObjeto($fila);			
                $pdereciboitems[] = $pdereciboitem;
            }

            return $pdereciboitems;
	}	
	

	/* Método getPdeReciboItemsBloque para MasInfo */ 	
	public function getPdeReciboItemsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboItems($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboItems Habilitados */ 	
	public function getPdeReciboItemsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboItems($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboItem */ 	
	public function getPdeReciboItem($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboItems($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboItem relacionadas */ 	
	public function deletePdeReciboItems(){
            $obs = $this->getPdeReciboItems();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboItemsCmb() PdeReciboItem relacionadas */ 	
	public function getPdeReciboItemsCmb(){
            $c = new Criterio();
            $c->add(PdeReciboItem::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboItem::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboItem::getPdeReciboItemsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralFpFormaPagos (Coleccion) relacionados a traves de PdeReciboItem */ 	
	public function getGralFpFormaPagosXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboItem::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(PdeReciboItem::GEN_TABLA, PdeReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralFpFormaPagos relacionados a traves de PdeReciboItem */ 	
	public function getCantidadGralFpFormaPagosXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralFpFormaPago::GEN_ATTR_ID);
            if($estado){
                $c->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboItem::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralFpFormaPago::GEN_TABLA);
            $c->addRealJoin(PdeReciboItem::GEN_TABLA, PdeReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralFpFormaPago (Objeto) relacionado a traves de PdeReciboItem */ 	
	public function getGralFpFormaPagoXPdeReciboItem($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralFpFormaPagosXPdeReciboItem($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeReciboItemCheques */ 	
	public function getPdeReciboItemCheques($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboItemCheque::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboItemCheque::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboItemCheque::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboItemCheque::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboItemCheque::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboItemCheque::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboItemCheque::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdereciboitemcheques = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdereciboitemcheque = PdeReciboItemCheque::hidratarObjeto($fila);			
                $pdereciboitemcheques[] = $pdereciboitemcheque;
            }

            return $pdereciboitemcheques;
	}	
	

	/* Método getPdeReciboItemChequesBloque para MasInfo */ 	
	public function getPdeReciboItemChequesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboItemCheques($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboItemCheques Habilitados */ 	
	public function getPdeReciboItemChequesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboItemCheques($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboItemCheque */ 	
	public function getPdeReciboItemCheque($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboItemCheques($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboItemCheque relacionadas */ 	
	public function deletePdeReciboItemCheques(){
            $obs = $this->getPdeReciboItemCheques();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboItemChequesCmb() PdeReciboItemCheque relacionadas */ 	
	public function getPdeReciboItemChequesCmb(){
            $c = new Criterio();
            $c->add(PdeReciboItemCheque::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboItemCheque::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboItemCheque::getPdeReciboItemChequesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeReciboItems (Coleccion) relacionados a traves de PdeReciboItemCheque */ 	
	public function getPdeReciboItemsXPdeReciboItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboItemCheque::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboItem::GEN_TABLA);
            $c->addRealJoin(PdeReciboItemCheque::GEN_TABLA, PdeReciboItemCheque::GEN_ATTR_PDE_RECIBO_ITEM_ID, PdeReciboItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeReciboItem::getPdeReciboItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeReciboItems relacionados a traves de PdeReciboItemCheque */ 	
	public function getCantidadPdeReciboItemsXPdeReciboItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeReciboItem::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeReciboItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboItemCheque::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboItemCheque::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboItem::GEN_TABLA);
            $c->addRealJoin(PdeReciboItemCheque::GEN_TABLA, PdeReciboItemCheque::GEN_ATTR_PDE_RECIBO_ITEM_ID, PdeReciboItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeReciboItem::getPdeReciboItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeReciboItem (Objeto) relacionado a traves de PdeReciboItemCheque */ 	
	public function getPdeReciboItemXPdeReciboItemCheque($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeReciboItemsXPdeReciboItemCheque($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeReciboPdeTributos */ 	
	public function getPdeReciboPdeTributos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeReciboPdeTributo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeReciboPdeTributo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeReciboPdeTributo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeReciboPdeTributo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeReciboPdeTributo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeReciboPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeReciboPdeTributo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeReciboPdeTributo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecibopdetributos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecibopdetributo = PdeReciboPdeTributo::hidratarObjeto($fila);			
                $pderecibopdetributos[] = $pderecibopdetributo;
            }

            return $pderecibopdetributos;
	}	
	

	/* Método getPdeReciboPdeTributosBloque para MasInfo */ 	
	public function getPdeReciboPdeTributosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeReciboPdeTributos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeReciboPdeTributos Habilitados */ 	
	public function getPdeReciboPdeTributosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeReciboPdeTributos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeReciboPdeTributo */ 	
	public function getPdeReciboPdeTributo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeReciboPdeTributos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeReciboPdeTributo relacionadas */ 	
	public function deletePdeReciboPdeTributos(){
            $obs = $this->getPdeReciboPdeTributos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeReciboPdeTributosCmb() PdeReciboPdeTributo relacionadas */ 	
	public function getPdeReciboPdeTributosCmb(){
            $c = new Criterio();
            $c->add(PdeReciboPdeTributo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeReciboPdeTributo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeReciboPdeTributo::getPdeReciboPdeTributosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTributos (Coleccion) relacionados a traves de PdeReciboPdeTributo */ 	
	public function getPdeTributosXPdeReciboPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboPdeTributo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeReciboPdeTributo::GEN_TABLA, PdeReciboPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTributos relacionados a traves de PdeReciboPdeTributo */ 	
	public function getCantidadPdeTributosXPdeReciboPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTributo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeReciboPdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeReciboPdeTributo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTributo::GEN_TABLA);
            $c->addRealJoin(PdeReciboPdeTributo::GEN_TABLA, PdeReciboPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID, PdeTributo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTributo::getPdeTributos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTributo (Objeto) relacionado a traves de PdeReciboPdeTributo */ 	
	public function getPdeTributoXPdeReciboPdeTributo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTributosXPdeReciboPdeTributo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCntbDiarioAsientoPdeRecibos */ 	
	public function getCntbDiarioAsientoPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CntbDiarioAsientoPdeRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CntbDiarioAsientoPdeRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CntbDiarioAsientoPdeRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CntbDiarioAsientoPdeRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cntbdiarioasientopderecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cntbdiarioasientopderecibo = CntbDiarioAsientoPdeRecibo::hidratarObjeto($fila);			
                $cntbdiarioasientopderecibos[] = $cntbdiarioasientopderecibo;
            }

            return $cntbdiarioasientopderecibos;
	}	
	

	/* Método getCntbDiarioAsientoPdeRecibosBloque para MasInfo */ 	
	public function getCntbDiarioAsientoPdeRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCntbDiarioAsientoPdeRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeRecibos Habilitados */ 	
	public function getCntbDiarioAsientoPdeRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCntbDiarioAsientoPdeRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCntbDiarioAsientoPdeRecibo */ 	
	public function getCntbDiarioAsientoPdeRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCntbDiarioAsientoPdeRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CntbDiarioAsientoPdeRecibo relacionadas */ 	
	public function deleteCntbDiarioAsientoPdeRecibos(){
            $obs = $this->getCntbDiarioAsientoPdeRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCntbDiarioAsientoPdeRecibosCmb() CntbDiarioAsientoPdeRecibo relacionadas */ 	
	public function getCntbDiarioAsientoPdeRecibosCmb(){
            $c = new Criterio();
            $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbDiarioAsientoPdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = CntbDiarioAsientoPdeRecibo::getCntbDiarioAsientoPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CntbPeriodos (Coleccion) relacionados a traves de CntbDiarioAsientoPdeRecibo */ 	
	public function getCntbPeriodosXCntbDiarioAsientoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeRecibo::GEN_TABLA, CntbDiarioAsientoPdeRecibo::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CntbPeriodos relacionados a traves de CntbDiarioAsientoPdeRecibo */ 	
	public function getCantidadCntbPeriodosXCntbDiarioAsientoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CntbPeriodo::GEN_ATTR_ID);
            if($estado){
                $c->add(CntbPeriodo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CntbDiarioAsientoPdeRecibo::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CntbPeriodo::GEN_TABLA);
            $c->addRealJoin(CntbDiarioAsientoPdeRecibo::GEN_TABLA, CntbDiarioAsientoPdeRecibo::GEN_ATTR_CNTB_PERIODO_ID, CntbPeriodo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CntbPeriodo::getCntbPeriodos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CntbPeriodo (Objeto) relacionado a traves de CntbDiarioAsientoPdeRecibo */ 	
	public function getCntbPeriodoXCntbDiarioAsientoPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCntbPeriodosXCntbDiarioAsientoPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(FndChqCheque::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(FndChqCheque::GEN_ATTR_PDE_RECIBO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna una coleccion de IDs de los PdeTributos asignados a PdeRecibo */ 	
	public function getPdeReciboPdeTributosId(){
            $ids = array();
            foreach($this->getPdeReciboPdeTributos() as $o){
            
                $ids[] = $o->getPdeTributoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeTributos asignados al PdeRecibo */ 	
	public function setPdeReciboPdeTributos($ids){
            $this->deletePdeReciboPdeTributos();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeReciboPdeTributo();
                    $o->setPdeTributoId($id);
                    $o->setPdeReciboId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeTributo en el alta de PdeRecibo */ 	
	public function getAltaMostrarBloqueRelacionPdeReciboPdeTributo(){
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

	/* Metodo que retorna el PdeTipoRecibo (Clave Foranea) */ 	
    public function getPdeTipoRecibo(){
        $o = new PdeTipoRecibo();
        $o->setId($this->getPdeTipoReciboId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoRecibo (Clave Foranea) en Array */ 	
    public function getPdeTipoReciboEnArray(&$arr_os){
        if($this->getPdeTipoReciboId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoReciboId()])){
                $o = $arr_os[$this->getPdeTipoReciboId()];
            }else{
                $o = PdeTipoRecibo::getOxId($this->getPdeTipoReciboId());
                if($o){
                    $arr_os[$this->getPdeTipoReciboId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoRecibo();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeTipoOrigenRecibo (Clave Foranea) */ 	
    public function getPdeTipoOrigenRecibo(){
        $o = new PdeTipoOrigenRecibo();
        $o->setId($this->getPdeTipoOrigenReciboId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoOrigenRecibo (Clave Foranea) en Array */ 	
    public function getPdeTipoOrigenReciboEnArray(&$arr_os){
        if($this->getPdeTipoOrigenReciboId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoOrigenReciboId()])){
                $o = $arr_os[$this->getPdeTipoOrigenReciboId()];
            }else{
                $o = PdeTipoOrigenRecibo::getOxId($this->getPdeTipoOrigenReciboId());
                if($o){
                    $arr_os[$this->getPdeTipoOrigenReciboId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoOrigenRecibo();
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

	/* Metodo que retorna el PdeReciboTipoEstado (Clave Foranea) */ 	
    public function getPdeReciboTipoEstado(){
        $o = new PdeReciboTipoEstado();
        $o->setId($this->getPdeReciboTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeReciboTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeReciboTipoEstadoEnArray(&$arr_os){
        if($this->getPdeReciboTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeReciboTipoEstadoId()])){
                $o = $arr_os[$this->getPdeReciboTipoEstadoId()];
            }else{
                $o = PdeReciboTipoEstado::getOxId($this->getPdeReciboTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeReciboTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeReciboTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeReciboCondicionPago (Clave Foranea) */ 	
    public function getPdeReciboCondicionPago(){
        $o = new PdeReciboCondicionPago();
        $o->setId($this->getPdeReciboCondicionPagoId());
        return $o;			
    }

	/* Metodo que retorna el PdeReciboCondicionPago (Clave Foranea) en Array */ 	
    public function getPdeReciboCondicionPagoEnArray(&$arr_os){
        if($this->getPdeReciboCondicionPagoId() != 'null'){
            if(isset($arr_os[$this->getPdeReciboCondicionPagoId()])){
                $o = $arr_os[$this->getPdeReciboCondicionPagoId()];
            }else{
                $o = PdeReciboCondicionPago::getOxId($this->getPdeReciboCondicionPagoId());
                if($o){
                    $arr_os[$this->getPdeReciboCondicionPagoId()] = $o;
                }
            }
        }else{
            $o = new PdeReciboCondicionPago();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeReciboTipoPago (Clave Foranea) */ 	
    public function getPdeReciboTipoPago(){
        $o = new PdeReciboTipoPago();
        $o->setId($this->getPdeReciboTipoPagoId());
        return $o;			
    }

	/* Metodo que retorna el PdeReciboTipoPago (Clave Foranea) en Array */ 	
    public function getPdeReciboTipoPagoEnArray(&$arr_os){
        if($this->getPdeReciboTipoPagoId() != 'null'){
            if(isset($arr_os[$this->getPdeReciboTipoPagoId()])){
                $o = $arr_os[$this->getPdeReciboTipoPagoId()];
            }else{
                $o = PdeReciboTipoPago::getOxId($this->getPdeReciboTipoPagoId());
                if($o){
                    $arr_os[$this->getPdeReciboTipoPagoId()] = $o;
                }
            }
        }else{
            $o = new PdeReciboTipoPago();
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

	/* Metodo que retorna el PdeOrdenPago (Clave Foranea) */ 	
    public function getPdeOrdenPago(){
        $o = new PdeOrdenPago();
        $o->setId($this->getPdeOrdenPagoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOrdenPago (Clave Foranea) en Array */ 	
    public function getPdeOrdenPagoEnArray(&$arr_os){
        if($this->getPdeOrdenPagoId() != 'null'){
            if(isset($arr_os[$this->getPdeOrdenPagoId()])){
                $o = $arr_os[$this->getPdeOrdenPagoId()];
            }else{
                $o = PdeOrdenPago::getOxId($this->getPdeOrdenPagoId());
                if($o){
                    $arr_os[$this->getPdeOrdenPagoId()] = $o;
                }
            }
        }else{
            $o = new PdeOrdenPago();
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
            		
        if($contexto_solicitante != PrvProveedor::GEN_CLASE){
            if($this->getPrvProveedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvProveedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvProveedor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeTipoRecibo::GEN_CLASE){
            if($this->getPdeTipoRecibo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoRecibo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoRecibo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeTipoOrigenRecibo::GEN_CLASE){
            if($this->getPdeTipoOrigenRecibo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoOrigenRecibo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoOrigenRecibo()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PdeReciboTipoEstado::GEN_CLASE){
            if($this->getPdeReciboTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeReciboTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeReciboTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeReciboCondicionPago::GEN_CLASE){
            if($this->getPdeReciboCondicionPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeReciboCondicionPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeReciboCondicionPago()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeReciboTipoPago::GEN_CLASE){
            if($this->getPdeReciboTipoPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeReciboTipoPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeReciboTipoPago()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PdeOrdenPago::GEN_CLASE){
            if($this->getPdeOrdenPago()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOrdenPago::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOrdenPago()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_recibo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_recibo';");
            
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

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_recibo_id' */ 	
	static function getOxPdeTipoReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_recibo_id' */ 	
	static function getOsxPdeTipoReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_origen_recibo_id' */ 	
	static function getOxPdeTipoOrigenReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ORIGEN_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_origen_recibo_id' */ 	
	static function getOsxPdeTipoOrigenReciboId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_ORIGEN_RECIBO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recibo_tipo_estado_id' */ 	
	static function getOxPdeReciboTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recibo_tipo_estado_id' */ 	
	static function getOsxPdeReciboTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recibo_condicion_pago_id' */ 	
	static function getOxPdeReciboCondicionPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_CONDICION_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recibo_condicion_pago_id' */ 	
	static function getOsxPdeReciboCondicionPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_CONDICION_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recibo_tipo_pago_id' */ 	
	static function getOxPdeReciboTipoPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_TIPO_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recibo_tipo_pago_id' */ 	
	static function getOsxPdeReciboTipoPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECIBO_TIPO_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_sucursal' */ 	
	static function getOxNumeroSucursal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_SUCURSAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_punto_venta' */ 	
	static function getOxNumeroPuntoVenta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_PUNTO_VENTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_recibo' */ 	
	static function getOxNumeroRecibo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_RECIBO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero_recibo_completo' */ 	
	static function getOxNumeroReciboCompleto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO_RECIBO_COMPLETO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cae' */ 	
	static function getOxCae($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CAE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_emision' */ 	
	static function getOxFechaEmision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_EMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'persona_descripcion' */ 	
	static function getOxPersonaDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERSONA_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anio' */ 	
	static function getOxAnio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_mes_id' */ 	
	static function getOxGralMesId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_MES_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cntb_diario_asiento_id' */ 	
	static function getOxCntbDiarioAsientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_orden_pago_id' */ 	
	static function getOxPdeOrdenPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_orden_pago_id' */ 	
	static function getOsxPdeOrdenPagoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_ORDEN_PAGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fnd_caja_id' */ 	
	static function getOxFndCajaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FND_CAJA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos(null, $criterio);
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

            $obs = self::getPdeRecibos($paginador, $criterio);
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

            $obs = self::getPdeRecibos($paginador, $criterio);
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
            $c->addTabla(PdeReciboImagen::GEN_TABLA);
            $c->addOrden(PdeReciboImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();
		
            $imagen_principal = $this->getPdeReciboImagen($c);
            if($imagen_principal){
		return $imagen_principal->getPathImagen($thumb);
            }
            return $this->getPathImagenNoImagen();
	}

	/* retorna la imagen principal */ 	
	public function getPdeReciboImagenPrincipal(){
            $c = new Criterio();
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla(PdeReciboImagen::GEN_TABLA);
            $c->addOrden(PdeReciboImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPdeReciboImagens(null, $c);
            foreach($imagens as $imagen){
                return $imagen;
            }
            return false;
	}

	/* retorna las imagenes secundarias (no incluye la principal) */ 	
	public function getPdeReciboImagensSecundarias($imagen_principal = false){
            $arr_imagens = array();
            if(!$imagen_principal){
            $imagen_principal = $this->getPdeReciboImagenPrincipal();
            }

            $c = new Criterio();
            if($imagen_principal){
                $c->add('id', $imagen_principal->getId(), Criterio::DISTINTO);
            }
            $c->add(PdeReciboImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(PdeReciboImagen::GEN_TABLA);
            $c->addOrden(PdeReciboImagen::GEN_ATTR_ORDEN, 'asc');
            $c->setCriterios();

            $imagens = $this->getPdeReciboImagens(null, $c);
            return $imagens;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_recibo_adm');
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
                $c->addTabla(PdeRecibo::GEN_TABLA);
                $c->addOrden(PdeRecibo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_recibos = PdeRecibo::getPdeRecibos(null, $c);

                $arr = array();
                foreach($pde_recibos as $pde_recibo){
                    $descripcion = $pde_recibo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>