<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeOc
{ 
	
	const SES_PAGINACION = 'adm_pdeoc_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdeoc_paginas_registros';
	const SES_CRITERIOS = 'adm_pdeoc_criterios';
	
	const GEN_CLASE = 'PdeOc';
	const GEN_TABLA = 'pde_oc';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeOc */ 
	const GEN_ATTR_ID = 'pde_oc.id';
	const GEN_ATTR_DESCRIPCION = 'pde_oc.descripcion';
	const GEN_ATTR_CODIGO = 'pde_oc.codigo';
	const GEN_ATTR_PDE_PEDIDO_ID = 'pde_oc.pde_pedido_id';
	const GEN_ATTR_PDE_COTIZACION_ID = 'pde_oc.pde_cotizacion_id';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'pde_oc.prv_proveedor_id';
	const GEN_ATTR_INS_INSUMO_ID = 'pde_oc.ins_insumo_id';
	const GEN_ATTR_PDE_OC_AGRUPACION_ID = 'pde_oc.pde_oc_agrupacion_id';
	const GEN_ATTR_PDE_CENTRO_PEDIDO_ID = 'pde_oc.pde_centro_pedido_id';
	const GEN_ATTR_PDE_CENTRO_RECEPCION_ID = 'pde_oc.pde_centro_recepcion_id';
	const GEN_ATTR_PDE_OC_TIPO_ESTADO_ID = 'pde_oc.pde_oc_tipo_estado_id';
	const GEN_ATTR_PDE_OC_TIPO_ESTADO_RECEPCION_ID = 'pde_oc.pde_oc_tipo_estado_recepcion_id';
	const GEN_ATTR_PDE_OC_TIPO_ESTADO_FACTURACION_ID = 'pde_oc.pde_oc_tipo_estado_facturacion_id';
	const GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID = 'pde_oc.pde_oc_tipo_origen_id';
	const GEN_ATTR_CANTIDAD = 'pde_oc.cantidad';
	const GEN_ATTR_FECHA_ENTREGA = 'pde_oc.fecha_entrega';
	const GEN_ATTR_IMPORTE_UNIDAD = 'pde_oc.importe_unidad';
	const GEN_ATTR_IMPORTE_TOTAL = 'pde_oc.importe_total';
	const GEN_ATTR_VENCIMIENTO = 'pde_oc.vencimiento';
	const GEN_ATTR_PRV_INSUMO_ID = 'pde_oc.prv_insumo_id';
	const GEN_ATTR_PRV_INSUMO_COSTO_ID = 'pde_oc.prv_insumo_costo_id';
	const GEN_ATTR_IMPORTE_ESPERADO = 'pde_oc.importe_esperado';
	const GEN_ATTR_AFECTA_COSTO = 'pde_oc.afecta_costo';
	const GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID = 'pde_oc.prv_descuento_financiero_id';
	const GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID = 'pde_oc.prv_descuento_comercial_id';
	const GEN_ATTR_NOTA_PUBLICA = 'pde_oc.nota_publica';
	const GEN_ATTR_NOTA_INTERNA = 'pde_oc.nota_interna';
	const GEN_ATTR_GRAL_TIPO_IVA_ID = 'pde_oc.gral_tipo_iva_id';
	const GEN_ATTR_IVA_INCLUIDO = 'pde_oc.iva_incluido';
	const GEN_ATTR_OBSERVACION = 'pde_oc.observacion';
	const GEN_ATTR_ORDEN = 'pde_oc.orden';
	const GEN_ATTR_ESTADO = 'pde_oc.estado';
	const GEN_ATTR_CREADO = 'pde_oc.creado';
	const GEN_ATTR_CREADO_POR = 'pde_oc.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_oc.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_oc.modificado_por';

	/* Constantes de Atributos Min de BPdeOc */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_PDE_PEDIDO_ID = 'pde_pedido_id';
	const GEN_ATTR_MIN_PDE_COTIZACION_ID = 'pde_cotizacion_id';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID = 'pde_oc_agrupacion_id';
	const GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID = 'pde_centro_pedido_id';
	const GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID = 'pde_centro_recepcion_id';
	const GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_ID = 'pde_oc_tipo_estado_id';
	const GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_RECEPCION_ID = 'pde_oc_tipo_estado_recepcion_id';
	const GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_FACTURACION_ID = 'pde_oc_tipo_estado_facturacion_id';
	const GEN_ATTR_MIN_PDE_OC_TIPO_ORIGEN_ID = 'pde_oc_tipo_origen_id';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_FECHA_ENTREGA = 'fecha_entrega';
	const GEN_ATTR_MIN_IMPORTE_UNIDAD = 'importe_unidad';
	const GEN_ATTR_MIN_IMPORTE_TOTAL = 'importe_total';
	const GEN_ATTR_MIN_VENCIMIENTO = 'vencimiento';
	const GEN_ATTR_MIN_PRV_INSUMO_ID = 'prv_insumo_id';
	const GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID = 'prv_insumo_costo_id';
	const GEN_ATTR_MIN_IMPORTE_ESPERADO = 'importe_esperado';
	const GEN_ATTR_MIN_AFECTA_COSTO = 'afecta_costo';
	const GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID = 'prv_descuento_financiero_id';
	const GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID = 'prv_descuento_comercial_id';
	const GEN_ATTR_MIN_NOTA_PUBLICA = 'nota_publica';
	const GEN_ATTR_MIN_NOTA_INTERNA = 'nota_interna';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_ID = 'gral_tipo_iva_id';
	const GEN_ATTR_MIN_IVA_INCLUIDO = 'iva_incluido';
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
	

	/* Atributos de BPdeOc */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $pde_pedido_id;
	private $pde_cotizacion_id;
	private $prv_proveedor_id;
	private $ins_insumo_id;
	private $pde_oc_agrupacion_id;
	private $pde_centro_pedido_id;
	private $pde_centro_recepcion_id;
	private $pde_oc_tipo_estado_id;
	private $pde_oc_tipo_estado_recepcion_id;
	private $pde_oc_tipo_estado_facturacion_id;
	private $pde_oc_tipo_origen_id;
	private $cantidad;
	private $fecha_entrega;
	private $importe_unidad;
	private $importe_total;
	private $vencimiento;
	private $prv_insumo_id;
	private $prv_insumo_costo_id;
	private $importe_esperado;
	private $afecta_costo;
	private $prv_descuento_financiero_id;
	private $prv_descuento_comercial_id;
	private $nota_publica;
	private $nota_interna;
	private $gral_tipo_iva_id;
	private $iva_incluido;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeOc */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getPdePedidoId(){ if(isset($this->pde_pedido_id)){ return $this->pde_pedido_id; }else{ return 'null'; } }
	public function getPdeCotizacionId(){ if(isset($this->pde_cotizacion_id)){ return $this->pde_cotizacion_id; }else{ return 'null'; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getPdeOcAgrupacionId(){ if(isset($this->pde_oc_agrupacion_id)){ return $this->pde_oc_agrupacion_id; }else{ return 'null'; } }
	public function getPdeCentroPedidoId(){ if(isset($this->pde_centro_pedido_id)){ return $this->pde_centro_pedido_id; }else{ return 'null'; } }
	public function getPdeCentroRecepcionId(){ if(isset($this->pde_centro_recepcion_id)){ return $this->pde_centro_recepcion_id; }else{ return 'null'; } }
	public function getPdeOcTipoEstadoId(){ if(isset($this->pde_oc_tipo_estado_id)){ return $this->pde_oc_tipo_estado_id; }else{ return 'null'; } }
	public function getPdeOcTipoEstadoRecepcionId(){ if(isset($this->pde_oc_tipo_estado_recepcion_id)){ return $this->pde_oc_tipo_estado_recepcion_id; }else{ return 'null'; } }
	public function getPdeOcTipoEstadoFacturacionId(){ if(isset($this->pde_oc_tipo_estado_facturacion_id)){ return $this->pde_oc_tipo_estado_facturacion_id; }else{ return 'null'; } }
	public function getPdeOcTipoOrigenId(){ if(isset($this->pde_oc_tipo_origen_id)){ return $this->pde_oc_tipo_origen_id; }else{ return 'null'; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getFechaEntrega(){ if(isset($this->fecha_entrega)){ return $this->fecha_entrega; }else{ return ''; } }
	public function getImporteUnidad(){ if(isset($this->importe_unidad)){ return $this->importe_unidad; }else{ return 0; } }
	public function getImporteTotal(){ if(isset($this->importe_total)){ return $this->importe_total; }else{ return 0; } }
	public function getVencimiento(){ if(isset($this->vencimiento)){ return $this->vencimiento; }else{ return ''; } }
	public function getPrvInsumoId(){ if(isset($this->prv_insumo_id)){ return $this->prv_insumo_id; }else{ return 'null'; } }
	public function getPrvInsumoCostoId(){ if(isset($this->prv_insumo_costo_id)){ return $this->prv_insumo_costo_id; }else{ return 'null'; } }
	public function getImporteEsperado(){ if(isset($this->importe_esperado)){ return $this->importe_esperado; }else{ return 0; } }
	public function getAfectaCosto(){ if(isset($this->afecta_costo)){ return $this->afecta_costo; }else{ return 0; } }
	public function getPrvDescuentoFinancieroId(){ if(isset($this->prv_descuento_financiero_id)){ return $this->prv_descuento_financiero_id; }else{ return 'null'; } }
	public function getPrvDescuentoComercialId(){ if(isset($this->prv_descuento_comercial_id)){ return $this->prv_descuento_comercial_id; }else{ return 'null'; } }
	public function getNotaPublica(){ if(isset($this->nota_publica)){ return $this->nota_publica; }else{ return ''; } }
	public function getNotaInterna(){ if(isset($this->nota_interna)){ return $this->nota_interna; }else{ return ''; } }
	public function getGralTipoIvaId(){ if(isset($this->gral_tipo_iva_id)){ return $this->gral_tipo_iva_id; }else{ return 'null'; } }
	public function getIvaIncluido(){ if(isset($this->iva_incluido)){ return $this->iva_incluido; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPdeOc */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_PDE_PEDIDO_ID."
				, ".self::GEN_ATTR_PDE_COTIZACION_ID."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_PDE_OC_AGRUPACION_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_RECEPCION_ID."
				, ".self::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_PDE_OC_TIPO_ESTADO_RECEPCION_ID."
				, ".self::GEN_ATTR_PDE_OC_TIPO_ESTADO_FACTURACION_ID."
				, ".self::GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_FECHA_ENTREGA."
				, ".self::GEN_ATTR_IMPORTE_UNIDAD."
				, ".self::GEN_ATTR_IMPORTE_TOTAL."
				, ".self::GEN_ATTR_VENCIMIENTO."
				, ".self::GEN_ATTR_PRV_INSUMO_ID."
				, ".self::GEN_ATTR_PRV_INSUMO_COSTO_ID."
				, ".self::GEN_ATTR_IMPORTE_ESPERADO."
				, ".self::GEN_ATTR_AFECTA_COSTO."
				, ".self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID."
				, ".self::GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID."
				, ".self::GEN_ATTR_NOTA_PUBLICA."
				, ".self::GEN_ATTR_NOTA_INTERNA."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_ID."
				, ".self::GEN_ATTR_IVA_INCLUIDO."
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
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
				$this->setPdeCotizacionId($fila[self::GEN_ATTR_MIN_PDE_COTIZACION_ID]);
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setPdeOcAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID]);
				$this->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
				$this->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
				$this->setPdeOcTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_ID]);
				$this->setPdeOcTipoEstadoRecepcionId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_RECEPCION_ID]);
				$this->setPdeOcTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_FACTURACION_ID]);
				$this->setPdeOcTipoOrigenId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ORIGEN_ID]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
				$this->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
				$this->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
				$this->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
				$this->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
				$this->setPrvInsumoCostoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID]);
				$this->setImporteEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_ESPERADO]);
				$this->setAfectaCosto($fila[self::GEN_ATTR_MIN_AFECTA_COSTO]);
				$this->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
				$this->setPrvDescuentoComercialId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID]);
				$this->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
				$this->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
				$this->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
				$this->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
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
	public function setCodigo($v){ $this->codigo = $v; }
	public function setPdePedidoId($v){ $this->pde_pedido_id = $v; }
	public function setPdeCotizacionId($v){ $this->pde_cotizacion_id = $v; }
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setPdeOcAgrupacionId($v){ $this->pde_oc_agrupacion_id = $v; }
	public function setPdeCentroPedidoId($v){ $this->pde_centro_pedido_id = $v; }
	public function setPdeCentroRecepcionId($v){ $this->pde_centro_recepcion_id = $v; }
	public function setPdeOcTipoEstadoId($v){ $this->pde_oc_tipo_estado_id = $v; }
	public function setPdeOcTipoEstadoRecepcionId($v){ $this->pde_oc_tipo_estado_recepcion_id = $v; }
	public function setPdeOcTipoEstadoFacturacionId($v){ $this->pde_oc_tipo_estado_facturacion_id = $v; }
	public function setPdeOcTipoOrigenId($v){ $this->pde_oc_tipo_origen_id = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setFechaEntrega($v){ $this->fecha_entrega = $v; }
	public function setImporteUnidad($v){ $this->importe_unidad = $v; }
	public function setImporteTotal($v){ $this->importe_total = $v; }
	public function setVencimiento($v){ $this->vencimiento = $v; }
	public function setPrvInsumoId($v){ $this->prv_insumo_id = $v; }
	public function setPrvInsumoCostoId($v){ $this->prv_insumo_costo_id = $v; }
	public function setImporteEsperado($v){ $this->importe_esperado = $v; }
	public function setAfectaCosto($v){ $this->afecta_costo = $v; }
	public function setPrvDescuentoFinancieroId($v){ $this->prv_descuento_financiero_id = $v; }
	public function setPrvDescuentoComercialId($v){ $this->prv_descuento_comercial_id = $v; }
	public function setNotaPublica($v){ $this->nota_publica = $v; }
	public function setNotaInterna($v){ $this->nota_interna = $v; }
	public function setGralTipoIvaId($v){ $this->gral_tipo_iva_id = $v; }
	public function setIvaIncluido($v){ $this->iva_incluido = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeOc();
            $o->setId($fila[PdeOc::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
			$o->setPdeCotizacionId($fila[self::GEN_ATTR_MIN_PDE_COTIZACION_ID]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setPdeOcAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID]);
			$o->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$o->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
			$o->setPdeOcTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_ID]);
			$o->setPdeOcTipoEstadoRecepcionId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_RECEPCION_ID]);
			$o->setPdeOcTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_FACTURACION_ID]);
			$o->setPdeOcTipoOrigenId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ORIGEN_ID]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
			$o->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
			$o->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
			$o->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
			$o->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
			$o->setPrvInsumoCostoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID]);
			$o->setImporteEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_ESPERADO]);
			$o->setAfectaCosto($fila[self::GEN_ATTR_MIN_AFECTA_COSTO]);
			$o->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
			$o->setPrvDescuentoComercialId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID]);
			$o->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$o->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$o->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$o->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdeOc */ 	
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

	/* Cambia el estado de BPdeOc */ 	
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

	/* Save de BPdeOc */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_COTIZACION_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_FACTURACION_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_ESPERADO."
						, ".self::GEN_ATTR_MIN_AFECTA_COSTO."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_oc_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getPdePedidoId()."
						, ".$this->getPdeCotizacionId()."
						, ".$this->getPrvProveedorId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPdeOcAgrupacionId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getPdeCentroRecepcionId()."
						, ".$this->getPdeOcTipoEstadoId()."
						, ".$this->getPdeOcTipoEstadoRecepcionId()."
						, ".$this->getPdeOcTipoEstadoFacturacionId()."
						, ".$this->getPdeOcTipoOrigenId()."
						, '".$this->getCantidad()."'
						, '".$this->getFechaEntrega()."'
						, '".$this->getImporteUnidad()."'
						, '".$this->getImporteTotal()."'
						, '".$this->getVencimiento()."'
						, ".$this->getPrvInsumoId()."
						, ".$this->getPrvInsumoCostoId()."
						, '".$this->getImporteEsperado()."'
						, ".$this->getAfectaCosto()."
						, ".$this->getPrvDescuentoFinancieroId()."
						, ".$this->getPrvDescuentoComercialId()."
						, '".$this->getNotaPublica()."'
						, '".$this->getNotaInterna()."'
						, ".$this->getGralTipoIvaId()."
						, ".$this->getIvaIncluido()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_oc_seq')";
            
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
                 
				 ".PdeOc::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID." = ".$this->getPdePedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_COTIZACION_ID." = ".$this->getPdeCotizacionId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID." = ".$this->getPdeOcAgrupacionId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID." = ".$this->getPdeCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_ID." = ".$this->getPdeOcTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_RECEPCION_ID." = ".$this->getPdeOcTipoEstadoRecepcionId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_FACTURACION_ID." = ".$this->getPdeOcTipoEstadoFacturacionId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ORIGEN_ID." = ".$this->getPdeOcTipoOrigenId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA." = '".$this->getFechaEntrega()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD." = '".$this->getImporteUnidad()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL." = '".$this->getImporteTotal()."'
						, ".self::GEN_ATTR_MIN_VENCIMIENTO." = '".$this->getVencimiento()."'
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_ID." = ".$this->getPrvInsumoId()."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID." = ".$this->getPrvInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_ESPERADO." = '".$this->getImporteEsperado()."'
						, ".self::GEN_ATTR_MIN_AFECTA_COSTO." = ".$this->getAfectaCosto()."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID." = ".$this->getPrvDescuentoFinancieroId()."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID." = ".$this->getPrvDescuentoComercialId()."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO." = ".$this->getIvaIncluido()."
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_COTIZACION_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_FACTURACION_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_ESPERADO."
						, ".self::GEN_ATTR_MIN_AFECTA_COSTO."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA."
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getPdePedidoId()."
						, ".$this->getPdeCotizacionId()."
						, ".$this->getPrvProveedorId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPdeOcAgrupacionId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getPdeCentroRecepcionId()."
						, ".$this->getPdeOcTipoEstadoId()."
						, ".$this->getPdeOcTipoEstadoRecepcionId()."
						, ".$this->getPdeOcTipoEstadoFacturacionId()."
						, ".$this->getPdeOcTipoOrigenId()."
						, '".$this->getCantidad()."'
						, '".$this->getFechaEntrega()."'
						, '".$this->getImporteUnidad()."'
						, '".$this->getImporteTotal()."'
						, '".$this->getVencimiento()."'
						, ".$this->getPrvInsumoId()."
						, ".$this->getPrvInsumoCostoId()."
						, '".$this->getImporteEsperado()."'
						, ".$this->getAfectaCosto()."
						, ".$this->getPrvDescuentoFinancieroId()."
						, ".$this->getPrvDescuentoComercialId()."
						, '".$this->getNotaPublica()."'
						, '".$this->getNotaInterna()."'
						, ".$this->getGralTipoIvaId()."
						, ".$this->getIvaIncluido()."
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
                     
				 ".PdeOc::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID." = ".$this->getPdePedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_COTIZACION_ID." = ".$this->getPdeCotizacionId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID." = ".$this->getPdeOcAgrupacionId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID." = ".$this->getPdeCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_ID." = ".$this->getPdeOcTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_RECEPCION_ID." = ".$this->getPdeOcTipoEstadoRecepcionId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_FACTURACION_ID." = ".$this->getPdeOcTipoEstadoFacturacionId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_TIPO_ORIGEN_ID." = ".$this->getPdeOcTipoOrigenId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA." = '".$this->getFechaEntrega()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD." = '".$this->getImporteUnidad()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL." = '".$this->getImporteTotal()."'
						, ".self::GEN_ATTR_MIN_VENCIMIENTO." = '".$this->getVencimiento()."'
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_ID." = ".$this->getPrvInsumoId()."
						, ".self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID." = ".$this->getPrvInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_ESPERADO." = '".$this->getImporteEsperado()."'
						, ".self::GEN_ATTR_MIN_AFECTA_COSTO." = ".$this->getAfectaCosto()."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID." = ".$this->getPrvDescuentoFinancieroId()."
						, ".self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID." = ".$this->getPrvDescuentoComercialId()."
						, ".self::GEN_ATTR_MIN_NOTA_PUBLICA." = '".$this->getNotaPublica()."'
						, ".self::GEN_ATTR_MIN_NOTA_INTERNA." = '".$this->getNotaInterna()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_IVA_INCLUIDO." = ".$this->getIvaIncluido()."
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
            $o = new PdeOc();
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

	/* Delete de BPdeOc */ 	
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
	
            // se elimina la coleccion de PdeOcImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcEstadoRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcEstadoRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcEstadoRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcEstadoFacturacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcEstadoFacturacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcEstadoFacturacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcEnviados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcEnviado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcEnviados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcEnvioEmails relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcEnvioEmail::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcEnvioEmails(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcReclamos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcReclamo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcReclamos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdeOc(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeOc::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdeocs = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdeoc = new PdeOc();
                    $pdeoc->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdeoc->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdeoc->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdeoc->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
			$pdeoc->setPdeCotizacionId($fila[self::GEN_ATTR_MIN_PDE_COTIZACION_ID]);
			$pdeoc->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$pdeoc->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$pdeoc->setPdeOcAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_OC_AGRUPACION_ID]);
			$pdeoc->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$pdeoc->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
			$pdeoc->setPdeOcTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_ID]);
			$pdeoc->setPdeOcTipoEstadoRecepcionId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_RECEPCION_ID]);
			$pdeoc->setPdeOcTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ESTADO_FACTURACION_ID]);
			$pdeoc->setPdeOcTipoOrigenId($fila[self::GEN_ATTR_MIN_PDE_OC_TIPO_ORIGEN_ID]);
			$pdeoc->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$pdeoc->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
			$pdeoc->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
			$pdeoc->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
			$pdeoc->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
			$pdeoc->setPrvInsumoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_ID]);
			$pdeoc->setPrvInsumoCostoId($fila[self::GEN_ATTR_MIN_PRV_INSUMO_COSTO_ID]);
			$pdeoc->setImporteEsperado($fila[self::GEN_ATTR_MIN_IMPORTE_ESPERADO]);
			$pdeoc->setAfectaCosto($fila[self::GEN_ATTR_MIN_AFECTA_COSTO]);
			$pdeoc->setPrvDescuentoFinancieroId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_FINANCIERO_ID]);
			$pdeoc->setPrvDescuentoComercialId($fila[self::GEN_ATTR_MIN_PRV_DESCUENTO_COMERCIAL_ID]);
			$pdeoc->setNotaPublica($fila[self::GEN_ATTR_MIN_NOTA_PUBLICA]);
			$pdeoc->setNotaInterna($fila[self::GEN_ATTR_MIN_NOTA_INTERNA]);
			$pdeoc->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$pdeoc->setIvaIncluido($fila[self::GEN_ATTR_MIN_IVA_INCLUIDO]);
			$pdeoc->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdeoc->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdeoc->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdeoc->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdeoc->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdeoc->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdeoc->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdeocs[] = $pdeoc;
		}
		
		return $pdeocs;
	}	
	

	/* Método getPdeOcs Habilitados */ 	
	static function getPdeOcsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeOc::getPdeOcs($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeOcs para listado de Backend */ 	
	static function getPdeOcsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeOc::getPdeOcs($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeOcsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeOc::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeOc::getPdeOcs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOcs filtrado para select */ 	
	static function getPdeOcsCmbF($paginador = null, $criterio = null){
            $col = PdeOc::getPdeOcs($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdePedido */ 	
	static function getPdeOcsXPdePedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdePedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdeCotizacion */ 	
	static function getPdeOcsXPdeCotizacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_COTIZACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCotizacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPdeOcsXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getPdeOcsXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdeOcAgrupacion */ 	
	static function getPdeOcsXPdeOcAgrupacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_OC_AGRUPACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOcAgrupacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdeCentroPedido */ 	
	static function getPdeOcsXPdeCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdeCentroRecepcion */ 	
	static function getPdeOcsXPdeCentroRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdeOcTipoEstado */ 	
	static function getPdeOcsXPdeOcTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOcTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdeOcTipoEstadoRecepcion */ 	
	static function getPdeOcsXPdeOcTipoEstadoRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_OC_TIPO_ESTADO_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOcTipoEstadoRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdeOcTipoEstadoFacturacion */ 	
	static function getPdeOcsXPdeOcTipoEstadoFacturacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_OC_TIPO_ESTADO_FACTURACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOcTipoEstadoFacturacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PdeOcTipoOrigen */ 	
	static function getPdeOcsXPdeOcTipoOrigens($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOcTipoOrigenId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PrvInsumo */ 	
	static function getPdeOcsXPrvInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PRV_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PrvInsumoCosto */ 	
	static function getPdeOcsXPrvInsumoCostos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PRV_INSUMO_COSTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvInsumoCostoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PrvDescuentoFinanciero */ 	
	static function getPdeOcsXPrvDescuentoFinancieros($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvDescuentoFinancieroId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de PrvDescuentoComercial */ 	
	static function getPdeOcsXPrvDescuentoComercials($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvDescuentoComercialId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeOcs filtrado por una coleccion de objetos foraneos de GralTipoIva */ 	
	static function getPdeOcsXGralTipoIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeOc::getPdeOcs($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_oc_adm.php';
            $url_gestion = 'pde_oc_gestion.php';
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
	

	/* Metodo getPdeOcImportes */ 	
	public function getPdeOcImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcImporte::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocimporte = PdeOcImporte::hidratarObjeto($fila);			
                $pdeocimportes[] = $pdeocimporte;
            }

            return $pdeocimportes;
	}	
	

	/* Método getPdeOcImportesBloque para MasInfo */ 	
	public function getPdeOcImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcImportes Habilitados */ 	
	public function getPdeOcImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcImporte */ 	
	public function getPdeOcImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcImporte relacionadas */ 	
	public function deletePdeOcImportes(){
            $obs = $this->getPdeOcImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcImportesCmb() PdeOcImporte relacionadas */ 	
	public function getPdeOcImportesCmb(){
            $c = new Criterio();
            $c->add(PdeOcImporte::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcImporte::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcImporte::getPdeOcImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeOcEstados */ 	
	public function getPdeOcEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcEstado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocestado = PdeOcEstado::hidratarObjeto($fila);			
                $pdeocestados[] = $pdeocestado;
            }

            return $pdeocestados;
	}	
	

	/* Método getPdeOcEstadosBloque para MasInfo */ 	
	public function getPdeOcEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcEstados Habilitados */ 	
	public function getPdeOcEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcEstado */ 	
	public function getPdeOcEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcEstado relacionadas */ 	
	public function deletePdeOcEstados(){
            $obs = $this->getPdeOcEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcEstadosCmb() PdeOcEstado relacionadas */ 	
	public function getPdeOcEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeOcEstado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcEstado::getPdeOcEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcTipoEstados (Coleccion) relacionados a traves de PdeOcEstado */ 	
	public function getPdeOcTipoEstadosXPdeOcEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcEstado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeOcEstado::GEN_TABLA, PdeOcEstado::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID, PdeOcTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoEstado::getPdeOcTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcTipoEstados relacionados a traves de PdeOcEstado */ 	
	public function getCantidadPdeOcTipoEstadosXPdeOcEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcEstado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeOcEstado::GEN_TABLA, PdeOcEstado::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID, PdeOcTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoEstado::getPdeOcTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcTipoEstado (Objeto) relacionado a traves de PdeOcEstado */ 	
	public function getPdeOcTipoEstadoXPdeOcEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcTipoEstadosXPdeOcEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcEstadoRecepcions */ 	
	public function getPdeOcEstadoRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcEstadoRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcEstadoRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcEstadoRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcEstadoRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcEstadoRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcEstadoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcEstadoRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcEstadoRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocestadorecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocestadorecepcion = PdeOcEstadoRecepcion::hidratarObjeto($fila);			
                $pdeocestadorecepcions[] = $pdeocestadorecepcion;
            }

            return $pdeocestadorecepcions;
	}	
	

	/* Método getPdeOcEstadoRecepcionsBloque para MasInfo */ 	
	public function getPdeOcEstadoRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcEstadoRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcEstadoRecepcions Habilitados */ 	
	public function getPdeOcEstadoRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcEstadoRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcEstadoRecepcion */ 	
	public function getPdeOcEstadoRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcEstadoRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcEstadoRecepcion relacionadas */ 	
	public function deletePdeOcEstadoRecepcions(){
            $obs = $this->getPdeOcEstadoRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcEstadoRecepcionsCmb() PdeOcEstadoRecepcion relacionadas */ 	
	public function getPdeOcEstadoRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeOcEstadoRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcEstadoRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcEstadoRecepcion::getPdeOcEstadoRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcTipoEstadoRecepcions (Coleccion) relacionados a traves de PdeOcEstadoRecepcion */ 	
	public function getPdeOcTipoEstadoRecepcionsXPdeOcEstadoRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcTipoEstadoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcEstadoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcEstadoRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoEstadoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeOcEstadoRecepcion::GEN_TABLA, PdeOcEstadoRecepcion::GEN_ATTR_PDE_OC_TIPO_ESTADO_RECEPCION_ID, PdeOcTipoEstadoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoEstadoRecepcion::getPdeOcTipoEstadoRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcTipoEstadoRecepcions relacionados a traves de PdeOcEstadoRecepcion */ 	
	public function getCantidadPdeOcTipoEstadoRecepcionsXPdeOcEstadoRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcTipoEstadoRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcTipoEstadoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcEstadoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcEstadoRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoEstadoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeOcEstadoRecepcion::GEN_TABLA, PdeOcEstadoRecepcion::GEN_ATTR_PDE_OC_TIPO_ESTADO_RECEPCION_ID, PdeOcTipoEstadoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoEstadoRecepcion::getPdeOcTipoEstadoRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcTipoEstadoRecepcion (Objeto) relacionado a traves de PdeOcEstadoRecepcion */ 	
	public function getPdeOcTipoEstadoRecepcionXPdeOcEstadoRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcTipoEstadoRecepcionsXPdeOcEstadoRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcEstadoFacturacions */ 	
	public function getPdeOcEstadoFacturacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcEstadoFacturacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcEstadoFacturacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcEstadoFacturacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcEstadoFacturacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcEstadoFacturacion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcEstadoFacturacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcEstadoFacturacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocestadofacturacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocestadofacturacion = PdeOcEstadoFacturacion::hidratarObjeto($fila);			
                $pdeocestadofacturacions[] = $pdeocestadofacturacion;
            }

            return $pdeocestadofacturacions;
	}	
	

	/* Método getPdeOcEstadoFacturacionsBloque para MasInfo */ 	
	public function getPdeOcEstadoFacturacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcEstadoFacturacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcEstadoFacturacions Habilitados */ 	
	public function getPdeOcEstadoFacturacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcEstadoFacturacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcEstadoFacturacion */ 	
	public function getPdeOcEstadoFacturacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcEstadoFacturacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcEstadoFacturacion relacionadas */ 	
	public function deletePdeOcEstadoFacturacions(){
            $obs = $this->getPdeOcEstadoFacturacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcEstadoFacturacionsCmb() PdeOcEstadoFacturacion relacionadas */ 	
	public function getPdeOcEstadoFacturacionsCmb(){
            $c = new Criterio();
            $c->add(PdeOcEstadoFacturacion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcEstadoFacturacion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcEstadoFacturacion::getPdeOcEstadoFacturacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcTipoEstadoFacturacions (Coleccion) relacionados a traves de PdeOcEstadoFacturacion */ 	
	public function getPdeOcTipoEstadoFacturacionsXPdeOcEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcTipoEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcEstadoFacturacion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoEstadoFacturacion::GEN_TABLA);
            $c->addRealJoin(PdeOcEstadoFacturacion::GEN_TABLA, PdeOcEstadoFacturacion::GEN_ATTR_PDE_OC_TIPO_ESTADO_FACTURACION_ID, PdeOcTipoEstadoFacturacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoEstadoFacturacion::getPdeOcTipoEstadoFacturacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcTipoEstadoFacturacions relacionados a traves de PdeOcEstadoFacturacion */ 	
	public function getCantidadPdeOcTipoEstadoFacturacionsXPdeOcEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcTipoEstadoFacturacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcTipoEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcEstadoFacturacion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoEstadoFacturacion::GEN_TABLA);
            $c->addRealJoin(PdeOcEstadoFacturacion::GEN_TABLA, PdeOcEstadoFacturacion::GEN_ATTR_PDE_OC_TIPO_ESTADO_FACTURACION_ID, PdeOcTipoEstadoFacturacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoEstadoFacturacion::getPdeOcTipoEstadoFacturacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcTipoEstadoFacturacion (Objeto) relacionado a traves de PdeOcEstadoFacturacion */ 	
	public function getPdeOcTipoEstadoFacturacionXPdeOcEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcTipoEstadoFacturacionsXPdeOcEstadoFacturacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcEnviados */ 	
	public function getPdeOcEnviados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcEnviado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcEnviado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcEnviado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcEnviado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcEnviado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcEnviado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcEnviado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcEnviado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocenviados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocenviado = PdeOcEnviado::hidratarObjeto($fila);			
                $pdeocenviados[] = $pdeocenviado;
            }

            return $pdeocenviados;
	}	
	

	/* Método getPdeOcEnviadosBloque para MasInfo */ 	
	public function getPdeOcEnviadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcEnviados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcEnviados Habilitados */ 	
	public function getPdeOcEnviadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcEnviados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcEnviado */ 	
	public function getPdeOcEnviado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcEnviados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcEnviado relacionadas */ 	
	public function deletePdeOcEnviados(){
            $obs = $this->getPdeOcEnviados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcEnviadosCmb() PdeOcEnviado relacionadas */ 	
	public function getPdeOcEnviadosCmb(){
            $c = new Criterio();
            $c->add(PdeOcEnviado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcEnviado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcEnviado::getPdeOcEnviadosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeOcDestinatarios */ 	
	public function getPdeOcDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocdestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocdestinatario = PdeOcDestinatario::hidratarObjeto($fila);			
                $pdeocdestinatarios[] = $pdeocdestinatario;
            }

            return $pdeocdestinatarios;
	}	
	

	/* Método getPdeOcDestinatariosBloque para MasInfo */ 	
	public function getPdeOcDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcDestinatarios Habilitados */ 	
	public function getPdeOcDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcDestinatario */ 	
	public function getPdeOcDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcDestinatario relacionadas */ 	
	public function deletePdeOcDestinatarios(){
            $obs = $this->getPdeOcDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcDestinatariosCmb() PdeOcDestinatario relacionadas */ 	
	public function getPdeOcDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcDestinatario::getPdeOcDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de PdeOcDestinatario */ 	
	public function getUsUsuariosXPdeOcDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PdeOcDestinatario::GEN_TABLA, PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de PdeOcDestinatario */ 	
	public function getCantidadUsUsuariosXPdeOcDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PdeOcDestinatario::GEN_TABLA, PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de PdeOcDestinatario */ 	
	public function getUsUsuarioXPdeOcDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXPdeOcDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcEnvioEmails */ 	
	public function getPdeOcEnvioEmails($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcEnvioEmail::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcEnvioEmail::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcEnvioEmail::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcEnvioEmail::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcEnvioEmail::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcEnvioEmail::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcEnvioEmail::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocenvioemails = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocenvioemail = PdeOcEnvioEmail::hidratarObjeto($fila);			
                $pdeocenvioemails[] = $pdeocenvioemail;
            }

            return $pdeocenvioemails;
	}	
	

	/* Método getPdeOcEnvioEmailsBloque para MasInfo */ 	
	public function getPdeOcEnvioEmailsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcEnvioEmails($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcEnvioEmails Habilitados */ 	
	public function getPdeOcEnvioEmailsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcEnvioEmails($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcEnvioEmail */ 	
	public function getPdeOcEnvioEmail($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcEnvioEmails($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcEnvioEmail relacionadas */ 	
	public function deletePdeOcEnvioEmails(){
            $obs = $this->getPdeOcEnvioEmails();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcEnvioEmailsCmb() PdeOcEnvioEmail relacionadas */ 	
	public function getPdeOcEnvioEmailsCmb(){
            $c = new Criterio();
            $c->add(PdeOcEnvioEmail::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcEnvioEmail::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcEnvioEmail::getPdeOcEnvioEmailsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcDestinatarios (Coleccion) relacionados a traves de PdeOcEnvioEmail */ 	
	public function getPdeOcDestinatariosXPdeOcEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcEnvioEmail::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcDestinatario::GEN_TABLA);
            $c->addRealJoin(PdeOcEnvioEmail::GEN_TABLA, PdeOcEnvioEmail::GEN_ATTR_PDE_OC_DESTINATARIO_ID, PdeOcDestinatario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcDestinatario::getPdeOcDestinatarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcDestinatarios relacionados a traves de PdeOcEnvioEmail */ 	
	public function getCantidadPdeOcDestinatariosXPdeOcEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcDestinatario::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcEnvioEmail::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcDestinatario::GEN_TABLA);
            $c->addRealJoin(PdeOcEnvioEmail::GEN_TABLA, PdeOcEnvioEmail::GEN_ATTR_PDE_OC_DESTINATARIO_ID, PdeOcDestinatario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcDestinatario::getPdeOcDestinatarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcDestinatario (Objeto) relacionado a traves de PdeOcEnvioEmail */ 	
	public function getPdeOcDestinatarioXPdeOcEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcDestinatariosXPdeOcEnvioEmail($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcions */ 	
	public function getPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepcion = PdeRecepcion::hidratarObjeto($fila);			
                $pderecepcions[] = $pderecepcion;
            }

            return $pderecepcions;
	}	
	

	/* Método getPdeRecepcionsBloque para MasInfo */ 	
	public function getPdeRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcions Habilitados */ 	
	public function getPdeRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcion */ 	
	public function getPdeRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcion relacionadas */ 	
	public function deletePdeRecepcions(){
            $obs = $this->getPdeRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionsCmb() PdeRecepcion relacionadas */ 	
	public function getPdeRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeTipoRecepcions (Coleccion) relacionados a traves de PdeRecepcion */ 	
	public function getPdeTipoRecepcionsXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcion::GEN_TABLA, PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeTipoRecepcions relacionados a traves de PdeRecepcion */ 	
	public function getCantidadPdeTipoRecepcionsXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeTipoRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeTipoRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeTipoRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcion::GEN_TABLA, PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, PdeTipoRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeTipoRecepcion::getPdeTipoRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeTipoRecepcion (Objeto) relacionado a traves de PdeRecepcion */ 	
	public function getPdeTipoRecepcionXPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeTipoRecepcionsXPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcReclamos */ 	
	public function getPdeOcReclamos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcReclamo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcReclamo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcReclamo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcReclamo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcReclamo::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcReclamo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcReclamo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcReclamo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocreclamos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocreclamo = PdeOcReclamo::hidratarObjeto($fila);			
                $pdeocreclamos[] = $pdeocreclamo;
            }

            return $pdeocreclamos;
	}	
	

	/* Método getPdeOcReclamosBloque para MasInfo */ 	
	public function getPdeOcReclamosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcReclamos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcReclamos Habilitados */ 	
	public function getPdeOcReclamosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcReclamos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcReclamo */ 	
	public function getPdeOcReclamo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcReclamos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcReclamo relacionadas */ 	
	public function deletePdeOcReclamos(){
            $obs = $this->getPdeOcReclamos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcReclamosCmb() PdeOcReclamo relacionadas */ 	
	public function getPdeOcReclamosCmb(){
            $c = new Criterio();
            $c->add(PdeOcReclamo::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcReclamo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcReclamo::getPdeOcReclamosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeOcReclamo */ 	
	public function getPrvProveedorsXPdeOcReclamo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcReclamo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcReclamo::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeOcReclamo::GEN_TABLA, PdeOcReclamo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeOcReclamo */ 	
	public function getCantidadPrvProveedorsXPdeOcReclamo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcReclamo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcReclamo::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeOcReclamo::GEN_TABLA, PdeOcReclamo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeOcReclamo */ 	
	public function getPrvProveedorXPdeOcReclamo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeOcReclamo($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeFacturaPdeOc::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeFacturaPdeOc::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeOc::getPdeFacturaPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeOc */ 	
	public function getPdeFacturasXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeOc */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeOc::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeOc::GEN_TABLA, PdeFacturaPdeOc::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeOc */ 	
	public function getPdeFacturaXPdeFacturaPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeOc($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el PdePedido (Clave Foranea) */ 	
    public function getPdePedido(){
        $o = new PdePedido();
        $o->setId($this->getPdePedidoId());
        return $o;			
    }

	/* Metodo que retorna el PdePedido (Clave Foranea) en Array */ 	
    public function getPdePedidoEnArray(&$arr_os){
        if($this->getPdePedidoId() != 'null'){
            if(isset($arr_os[$this->getPdePedidoId()])){
                $o = $arr_os[$this->getPdePedidoId()];
            }else{
                $o = PdePedido::getOxId($this->getPdePedidoId());
                if($o){
                    $arr_os[$this->getPdePedidoId()] = $o;
                }
            }
        }else{
            $o = new PdePedido();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeCotizacion (Clave Foranea) */ 	
    public function getPdeCotizacion(){
        $o = new PdeCotizacion();
        $o->setId($this->getPdeCotizacionId());
        return $o;			
    }

	/* Metodo que retorna el PdeCotizacion (Clave Foranea) en Array */ 	
    public function getPdeCotizacionEnArray(&$arr_os){
        if($this->getPdeCotizacionId() != 'null'){
            if(isset($arr_os[$this->getPdeCotizacionId()])){
                $o = $arr_os[$this->getPdeCotizacionId()];
            }else{
                $o = PdeCotizacion::getOxId($this->getPdeCotizacionId());
                if($o){
                    $arr_os[$this->getPdeCotizacionId()] = $o;
                }
            }
        }else{
            $o = new PdeCotizacion();
        }
        return $o;		
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

	/* Metodo que retorna el InsInsumo (Clave Foranea) */ 	
    public function getInsInsumo(){
        $o = new InsInsumo();
        $o->setId($this->getInsInsumoId());
        return $o;			
    }

	/* Metodo que retorna el InsInsumo (Clave Foranea) en Array */ 	
    public function getInsInsumoEnArray(&$arr_os){
        if($this->getInsInsumoId() != 'null'){
            if(isset($arr_os[$this->getInsInsumoId()])){
                $o = $arr_os[$this->getInsInsumoId()];
            }else{
                $o = InsInsumo::getOxId($this->getInsInsumoId());
                if($o){
                    $arr_os[$this->getInsInsumoId()] = $o;
                }
            }
        }else{
            $o = new InsInsumo();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOcAgrupacion (Clave Foranea) */ 	
    public function getPdeOcAgrupacion(){
        $o = new PdeOcAgrupacion();
        $o->setId($this->getPdeOcAgrupacionId());
        return $o;			
    }

	/* Metodo que retorna el PdeOcAgrupacion (Clave Foranea) en Array */ 	
    public function getPdeOcAgrupacionEnArray(&$arr_os){
        if($this->getPdeOcAgrupacionId() != 'null'){
            if(isset($arr_os[$this->getPdeOcAgrupacionId()])){
                $o = $arr_os[$this->getPdeOcAgrupacionId()];
            }else{
                $o = PdeOcAgrupacion::getOxId($this->getPdeOcAgrupacionId());
                if($o){
                    $arr_os[$this->getPdeOcAgrupacionId()] = $o;
                }
            }
        }else{
            $o = new PdeOcAgrupacion();
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

	/* Metodo que retorna el PdeCentroRecepcion (Clave Foranea) */ 	
    public function getPdeCentroRecepcion(){
        $o = new PdeCentroRecepcion();
        $o->setId($this->getPdeCentroRecepcionId());
        return $o;			
    }

	/* Metodo que retorna el PdeCentroRecepcion (Clave Foranea) en Array */ 	
    public function getPdeCentroRecepcionEnArray(&$arr_os){
        if($this->getPdeCentroRecepcionId() != 'null'){
            if(isset($arr_os[$this->getPdeCentroRecepcionId()])){
                $o = $arr_os[$this->getPdeCentroRecepcionId()];
            }else{
                $o = PdeCentroRecepcion::getOxId($this->getPdeCentroRecepcionId());
                if($o){
                    $arr_os[$this->getPdeCentroRecepcionId()] = $o;
                }
            }
        }else{
            $o = new PdeCentroRecepcion();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOcTipoEstado (Clave Foranea) */ 	
    public function getPdeOcTipoEstado(){
        $o = new PdeOcTipoEstado();
        $o->setId($this->getPdeOcTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeOcTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeOcTipoEstadoEnArray(&$arr_os){
        if($this->getPdeOcTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeOcTipoEstadoId()])){
                $o = $arr_os[$this->getPdeOcTipoEstadoId()];
            }else{
                $o = PdeOcTipoEstado::getOxId($this->getPdeOcTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeOcTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeOcTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOcTipoEstadoRecepcion (Clave Foranea) */ 	
    public function getPdeOcTipoEstadoRecepcion(){
        $o = new PdeOcTipoEstadoRecepcion();
        $o->setId($this->getPdeOcTipoEstadoRecepcionId());
        return $o;			
    }

	/* Metodo que retorna el PdeOcTipoEstadoRecepcion (Clave Foranea) en Array */ 	
    public function getPdeOcTipoEstadoRecepcionEnArray(&$arr_os){
        if($this->getPdeOcTipoEstadoRecepcionId() != 'null'){
            if(isset($arr_os[$this->getPdeOcTipoEstadoRecepcionId()])){
                $o = $arr_os[$this->getPdeOcTipoEstadoRecepcionId()];
            }else{
                $o = PdeOcTipoEstadoRecepcion::getOxId($this->getPdeOcTipoEstadoRecepcionId());
                if($o){
                    $arr_os[$this->getPdeOcTipoEstadoRecepcionId()] = $o;
                }
            }
        }else{
            $o = new PdeOcTipoEstadoRecepcion();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOcTipoEstadoFacturacion (Clave Foranea) */ 	
    public function getPdeOcTipoEstadoFacturacion(){
        $o = new PdeOcTipoEstadoFacturacion();
        $o->setId($this->getPdeOcTipoEstadoFacturacionId());
        return $o;			
    }

	/* Metodo que retorna el PdeOcTipoEstadoFacturacion (Clave Foranea) en Array */ 	
    public function getPdeOcTipoEstadoFacturacionEnArray(&$arr_os){
        if($this->getPdeOcTipoEstadoFacturacionId() != 'null'){
            if(isset($arr_os[$this->getPdeOcTipoEstadoFacturacionId()])){
                $o = $arr_os[$this->getPdeOcTipoEstadoFacturacionId()];
            }else{
                $o = PdeOcTipoEstadoFacturacion::getOxId($this->getPdeOcTipoEstadoFacturacionId());
                if($o){
                    $arr_os[$this->getPdeOcTipoEstadoFacturacionId()] = $o;
                }
            }
        }else{
            $o = new PdeOcTipoEstadoFacturacion();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeOcTipoOrigen (Clave Foranea) */ 	
    public function getPdeOcTipoOrigen(){
        $o = new PdeOcTipoOrigen();
        $o->setId($this->getPdeOcTipoOrigenId());
        return $o;			
    }

	/* Metodo que retorna el PdeOcTipoOrigen (Clave Foranea) en Array */ 	
    public function getPdeOcTipoOrigenEnArray(&$arr_os){
        if($this->getPdeOcTipoOrigenId() != 'null'){
            if(isset($arr_os[$this->getPdeOcTipoOrigenId()])){
                $o = $arr_os[$this->getPdeOcTipoOrigenId()];
            }else{
                $o = PdeOcTipoOrigen::getOxId($this->getPdeOcTipoOrigenId());
                if($o){
                    $arr_os[$this->getPdeOcTipoOrigenId()] = $o;
                }
            }
        }else{
            $o = new PdeOcTipoOrigen();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvInsumo (Clave Foranea) */ 	
    public function getPrvInsumo(){
        $o = new PrvInsumo();
        $o->setId($this->getPrvInsumoId());
        return $o;			
    }

	/* Metodo que retorna el PrvInsumo (Clave Foranea) en Array */ 	
    public function getPrvInsumoEnArray(&$arr_os){
        if($this->getPrvInsumoId() != 'null'){
            if(isset($arr_os[$this->getPrvInsumoId()])){
                $o = $arr_os[$this->getPrvInsumoId()];
            }else{
                $o = PrvInsumo::getOxId($this->getPrvInsumoId());
                if($o){
                    $arr_os[$this->getPrvInsumoId()] = $o;
                }
            }
        }else{
            $o = new PrvInsumo();
        }
        return $o;		
    }

	/* Metodo que retorna el PrvInsumoCosto (Clave Foranea) */ 	
    public function getPrvInsumoCosto(){
        $o = new PrvInsumoCosto();
        $o->setId($this->getPrvInsumoCostoId());
        return $o;			
    }

	/* Metodo que retorna el PrvInsumoCosto (Clave Foranea) en Array */ 	
    public function getPrvInsumoCostoEnArray(&$arr_os){
        if($this->getPrvInsumoCostoId() != 'null'){
            if(isset($arr_os[$this->getPrvInsumoCostoId()])){
                $o = $arr_os[$this->getPrvInsumoCostoId()];
            }else{
                $o = PrvInsumoCosto::getOxId($this->getPrvInsumoCostoId());
                if($o){
                    $arr_os[$this->getPrvInsumoCostoId()] = $o;
                }
            }
        }else{
            $o = new PrvInsumoCosto();
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

	/* Metodo que retorna el PrvDescuentoComercial (Clave Foranea) */ 	
    public function getPrvDescuentoComercial(){
        $o = new PrvDescuentoComercial();
        $o->setId($this->getPrvDescuentoComercialId());
        return $o;			
    }

	/* Metodo que retorna el PrvDescuentoComercial (Clave Foranea) en Array */ 	
    public function getPrvDescuentoComercialEnArray(&$arr_os){
        if($this->getPrvDescuentoComercialId() != 'null'){
            if(isset($arr_os[$this->getPrvDescuentoComercialId()])){
                $o = $arr_os[$this->getPrvDescuentoComercialId()];
            }else{
                $o = PrvDescuentoComercial::getOxId($this->getPrvDescuentoComercialId());
                if($o){
                    $arr_os[$this->getPrvDescuentoComercialId()] = $o;
                }
            }
        }else{
            $o = new PrvDescuentoComercial();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoIva (Clave Foranea) */ 	
    public function getGralTipoIva(){
        $o = new GralTipoIva();
        $o->setId($this->getGralTipoIvaId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoIva (Clave Foranea) en Array */ 	
    public function getGralTipoIvaEnArray(&$arr_os){
        if($this->getGralTipoIvaId() != 'null'){
            if(isset($arr_os[$this->getGralTipoIvaId()])){
                $o = $arr_os[$this->getGralTipoIvaId()];
            }else{
                $o = GralTipoIva::getOxId($this->getGralTipoIvaId());
                if($o){
                    $arr_os[$this->getGralTipoIvaId()] = $o;
                }
            }
        }else{
            $o = new GralTipoIva();
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
            		
        if($contexto_solicitante != PdePedido::GEN_CLASE){
            if($this->getPdePedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdePedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdePedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeCotizacion::GEN_CLASE){
            if($this->getPdeCotizacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeCotizacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeCotizacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvProveedor::GEN_CLASE){
            if($this->getPrvProveedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvProveedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvProveedor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsInsumo::GEN_CLASE){
            if($this->getInsInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOcAgrupacion::GEN_CLASE){
            if($this->getPdeOcAgrupacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOcAgrupacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOcAgrupacion()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PdeCentroRecepcion::GEN_CLASE){
            if($this->getPdeCentroRecepcion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeCentroRecepcion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeCentroRecepcion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOcTipoEstado::GEN_CLASE){
            if($this->getPdeOcTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOcTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOcTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOcTipoEstadoRecepcion::GEN_CLASE){
            if($this->getPdeOcTipoEstadoRecepcion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOcTipoEstadoRecepcion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOcTipoEstadoRecepcion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOcTipoEstadoFacturacion::GEN_CLASE){
            if($this->getPdeOcTipoEstadoFacturacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOcTipoEstadoFacturacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOcTipoEstadoFacturacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOcTipoOrigen::GEN_CLASE){
            if($this->getPdeOcTipoOrigen()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOcTipoOrigen::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOcTipoOrigen()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvInsumo::GEN_CLASE){
            if($this->getPrvInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvInsumo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrvInsumoCosto::GEN_CLASE){
            if($this->getPrvInsumoCosto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvInsumoCosto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvInsumoCosto()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PrvDescuentoComercial::GEN_CLASE){
            if($this->getPrvDescuentoComercial()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvDescuentoComercial::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvDescuentoComercial()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoIva::GEN_CLASE){
            if($this->getGralTipoIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoIva()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_oc'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_oc';");
            
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

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_pedido_id' */ 	
	static function getOxPdePedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_pedido_id' */ 	
	static function getOsxPdePedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_cotizacion_id' */ 	
	static function getOxPdeCotizacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_COTIZACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_cotizacion_id' */ 	
	static function getOsxPdeCotizacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_COTIZACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_insumo_id' */ 	
	static function getOsxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_oc_agrupacion_id' */ 	
	static function getOxPdeOcAgrupacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_AGRUPACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_oc_agrupacion_id' */ 	
	static function getOsxPdeOcAgrupacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_AGRUPACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_recepcion_id' */ 	
	static function getOxPdeCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_centro_recepcion_id' */ 	
	static function getOsxPdeCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_oc_tipo_estado_id' */ 	
	static function getOxPdeOcTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_oc_tipo_estado_id' */ 	
	static function getOsxPdeOcTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_oc_tipo_estado_recepcion_id' */ 	
	static function getOxPdeOcTipoEstadoRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_TIPO_ESTADO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_oc_tipo_estado_recepcion_id' */ 	
	static function getOsxPdeOcTipoEstadoRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_TIPO_ESTADO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_oc_tipo_estado_facturacion_id' */ 	
	static function getOxPdeOcTipoEstadoFacturacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_TIPO_ESTADO_FACTURACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_oc_tipo_estado_facturacion_id' */ 	
	static function getOsxPdeOcTipoEstadoFacturacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_TIPO_ESTADO_FACTURACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_oc_tipo_origen_id' */ 	
	static function getOxPdeOcTipoOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_oc_tipo_origen_id' */ 	
	static function getOsxPdeOcTipoOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad' */ 	
	static function getOsxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_entrega' */ 	
	static function getOxFechaEntrega($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ENTREGA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_unidad' */ 	
	static function getOxImporteUnidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_unidad' */ 	
	static function getOsxImporteUnidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_total' */ 	
	static function getOxImporteTotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vencimiento' */ 	
	static function getOxVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vencimiento' */ 	
	static function getOsxVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_insumo_id' */ 	
	static function getOxPrvInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_insumo_id' */ 	
	static function getOsxPrvInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_insumo_costo_id' */ 	
	static function getOxPrvInsumoCostoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_COSTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_insumo_costo_id' */ 	
	static function getOsxPrvInsumoCostoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_INSUMO_COSTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_esperado' */ 	
	static function getOxImporteEsperado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_ESPERADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_esperado' */ 	
	static function getOsxImporteEsperado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_ESPERADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'afecta_costo' */ 	
	static function getOxAfectaCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFECTA_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'afecta_costo' */ 	
	static function getOsxAfectaCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AFECTA_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_descuento_financiero_id' */ 	
	static function getOxPrvDescuentoFinancieroId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_FINANCIERO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_descuento_comercial_id' */ 	
	static function getOxPrvDescuentoComercialId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prv_descuento_comercial_id' */ 	
	static function getOsxPrvDescuentoComercialId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_DESCUENTO_COMERCIAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_publica' */ 	
	static function getOxNotaPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nota_interna' */ 	
	static function getOxNotaInterna($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOTA_INTERNA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOsxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'iva_incluido' */ 	
	static function getOxIvaIncluido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_INCLUIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'iva_incluido' */ 	
	static function getOsxIvaIncluido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IVA_INCLUIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs(null, $criterio);
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

            $obs = self::getPdeOcs($paginador, $criterio);
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

            $obs = self::getPdeOcs($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_oc_adm');
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

	/* retorna el total de acuerdo a criterio y paginador activos 'importe_unidad' */ 	
	static function getImporteUnidadAdmTotal(){
            $criterio = new Criterio(self::SES_CRITERIOS);
            $criterio->addTabla(PdeOc::GEN_TABLA);
            $criterio->setCriteriosInicial();

            $paginador = new Paginador(self::getSesPagCantidad(), self::getSesPag());
            $os = self::getPdeOcs($paginador, $criterio);

            $total = 0;
            foreach($os as $o){
                $total+= $o->getImporteUnidad();
            }
            return $total;
	}

	/* retorna el total de acuerdo a criterio y paginador activos 'importe_total' */ 	
	static function getImporteTotalAdmTotal(){
            $criterio = new Criterio(self::SES_CRITERIOS);
            $criterio->addTabla(PdeOc::GEN_TABLA);
            $criterio->setCriteriosInicial();

            $paginador = new Paginador(self::getSesPagCantidad(), self::getSesPag());
            $os = self::getPdeOcs($paginador, $criterio);

            $total = 0;
            foreach($os as $o){
                $total+= $o->getImporteTotal();
            }
            return $total;
	}

	/* Metodos anexos a manejo de fechas (date y datetime) 'vencimiento' */ 	
	public function getVencimientoDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getVencimiento(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getVencimientoDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getVencimientoDiferenciaDias();
        
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
                $c->addTabla(PdeOc::GEN_TABLA);
                $c->addOrden(PdeOc::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_ocs = PdeOc::getPdeOcs(null, $c);

                $arr = array();
                foreach($pde_ocs as $pde_oc){
                    $descripcion = $pde_oc->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>