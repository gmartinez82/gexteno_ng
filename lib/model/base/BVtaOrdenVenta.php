<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaOrdenVenta
{ 
	
	const SES_PAGINACION = 'adm_vtaordenventa_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtaordenventa_paginas_registros';
	const SES_CRITERIOS = 'adm_vtaordenventa_criterios';
	
	const GEN_CLASE = 'VtaOrdenVenta';
	const GEN_TABLA = 'vta_orden_venta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaOrdenVenta */ 
	const GEN_ATTR_ID = 'vta_orden_venta.id';
	const GEN_ATTR_DESCRIPCION = 'vta_orden_venta.descripcion';
	const GEN_ATTR_VTA_PRESUPUESTO_ID = 'vta_orden_venta.vta_presupuesto_id';
	const GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID = 'vta_orden_venta.vta_presupuesto_ins_insumo_id';
	const GEN_ATTR_INS_INSUMO_ID = 'vta_orden_venta.ins_insumo_id';
	const GEN_ATTR_GRAL_TIPO_IVA_ID = 'vta_orden_venta.gral_tipo_iva_id';
	const GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID = 'vta_orden_venta.ins_tipo_lista_precio_id';
	const GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID = 'vta_orden_venta.vta_orden_venta_tipo_estado_id';
	const GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID = 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id';
	const GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID = 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id';
	const GEN_ATTR_IMPORTE_UNITARIO = 'vta_orden_venta.importe_unitario';
	const GEN_ATTR_CANTIDAD = 'vta_orden_venta.cantidad';
	const GEN_ATTR_DESCUENTO = 'vta_orden_venta.descuento';
	const GEN_ATTR_INS_INSUMO_COSTO_ID = 'vta_orden_venta.ins_insumo_costo_id';
	const GEN_ATTR_IMPORTE_COSTO = 'vta_orden_venta.importe_costo';
	const GEN_ATTR_VTA_POLITICA_DESCUENTO_ID = 'vta_orden_venta.vta_politica_descuento_id';
	const GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID = 'vta_orden_venta.vta_politica_descuento_rango_id';
	const GEN_ATTR_PORCENTAJE_POLITICA_DESCUENTO = 'vta_orden_venta.porcentaje_politica_descuento';
	const GEN_ATTR_IMPORTE_POLITICA_DESCUENTO = 'vta_orden_venta.importe_politica_descuento';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'vta_orden_venta.gral_sucursal_id';
	const GEN_ATTR_INCLUYE_LOGISTICA = 'vta_orden_venta.incluye_logistica';
	const GEN_ATTR_PORCENTAJE_COMISION = 'vta_orden_venta.porcentaje_comision';
	const GEN_ATTR_IMPORTE_COMISION = 'vta_orden_venta.importe_comision';
	const GEN_ATTR_PORCENTAJE_LOGISTICA = 'vta_orden_venta.porcentaje_logistica';
	const GEN_ATTR_IMPORTE_LOGISTICA = 'vta_orden_venta.importe_logistica';
	const GEN_ATTR_INS_INSUMO_BULTO_ID = 'vta_orden_venta.ins_insumo_bulto_id';
	const GEN_ATTR_CANTIDAD_BULTO = 'vta_orden_venta.cantidad_bulto';
	const GEN_ATTR_IMPORTE_DESCUENTO = 'vta_orden_venta.importe_descuento';
	const GEN_ATTR_IMPORTE_RECARGO = 'vta_orden_venta.importe_recargo';
	const GEN_ATTR_IMPORTE = 'vta_orden_venta.importe';
	const GEN_ATTR_CONFLICTO = 'vta_orden_venta.conflicto';
	const GEN_ATTR_PORCENTAJE = 'vta_orden_venta.porcentaje';
	const GEN_ATTR_PROPORCION_IVA = 'vta_orden_venta.proporcion_iva';
	const GEN_ATTR_CODIGO = 'vta_orden_venta.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_orden_venta.observacion';
	const GEN_ATTR_ORDEN = 'vta_orden_venta.orden';
	const GEN_ATTR_ESTADO = 'vta_orden_venta.estado';
	const GEN_ATTR_CREADO = 'vta_orden_venta.creado';
	const GEN_ATTR_CREADO_POR = 'vta_orden_venta.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_orden_venta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_orden_venta.modificado_por';

	/* Constantes de Atributos Min de BVtaOrdenVenta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_ID = 'vta_presupuesto_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID = 'vta_presupuesto_ins_insumo_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_ID = 'gral_tipo_iva_id';
	const GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID = 'ins_tipo_lista_precio_id';
	const GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_ID = 'vta_orden_venta_tipo_estado_id';
	const GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID = 'vta_orden_venta_tipo_estado_facturacion_id';
	const GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID = 'vta_orden_venta_tipo_estado_remision_id';
	const GEN_ATTR_MIN_IMPORTE_UNITARIO = 'importe_unitario';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_DESCUENTO = 'descuento';
	const GEN_ATTR_MIN_INS_INSUMO_COSTO_ID = 'ins_insumo_costo_id';
	const GEN_ATTR_MIN_IMPORTE_COSTO = 'importe_costo';
	const GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID = 'vta_politica_descuento_id';
	const GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID = 'vta_politica_descuento_rango_id';
	const GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO = 'porcentaje_politica_descuento';
	const GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO = 'importe_politica_descuento';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_INCLUYE_LOGISTICA = 'incluye_logistica';
	const GEN_ATTR_MIN_PORCENTAJE_COMISION = 'porcentaje_comision';
	const GEN_ATTR_MIN_IMPORTE_COMISION = 'importe_comision';
	const GEN_ATTR_MIN_PORCENTAJE_LOGISTICA = 'porcentaje_logistica';
	const GEN_ATTR_MIN_IMPORTE_LOGISTICA = 'importe_logistica';
	const GEN_ATTR_MIN_INS_INSUMO_BULTO_ID = 'ins_insumo_bulto_id';
	const GEN_ATTR_MIN_CANTIDAD_BULTO = 'cantidad_bulto';
	const GEN_ATTR_MIN_IMPORTE_DESCUENTO = 'importe_descuento';
	const GEN_ATTR_MIN_IMPORTE_RECARGO = 'importe_recargo';
	const GEN_ATTR_MIN_IMPORTE = 'importe';
	const GEN_ATTR_MIN_CONFLICTO = 'conflicto';
	const GEN_ATTR_MIN_PORCENTAJE = 'porcentaje';
	const GEN_ATTR_MIN_PROPORCION_IVA = 'proporcion_iva';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
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
	

	/* Atributos de BVtaOrdenVenta */ 
	private $id;
	private $descripcion;
	private $vta_presupuesto_id;
	private $vta_presupuesto_ins_insumo_id;
	private $ins_insumo_id;
	private $gral_tipo_iva_id;
	private $ins_tipo_lista_precio_id;
	private $vta_orden_venta_tipo_estado_id;
	private $vta_orden_venta_tipo_estado_facturacion_id;
	private $vta_orden_venta_tipo_estado_remision_id;
	private $importe_unitario;
	private $cantidad;
	private $descuento;
	private $ins_insumo_costo_id;
	private $importe_costo;
	private $vta_politica_descuento_id;
	private $vta_politica_descuento_rango_id;
	private $porcentaje_politica_descuento;
	private $importe_politica_descuento;
	private $gral_sucursal_id;
	private $incluye_logistica;
	private $porcentaje_comision;
	private $importe_comision;
	private $porcentaje_logistica;
	private $importe_logistica;
	private $ins_insumo_bulto_id;
	private $cantidad_bulto;
	private $importe_descuento;
	private $importe_recargo;
	private $importe;
	private $conflicto;
	private $porcentaje;
	private $proporcion_iva;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaOrdenVenta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaPresupuestoId(){ if(isset($this->vta_presupuesto_id)){ return $this->vta_presupuesto_id; }else{ return 'null'; } }
	public function getVtaPresupuestoInsInsumoId(){ if(isset($this->vta_presupuesto_ins_insumo_id)){ return $this->vta_presupuesto_ins_insumo_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getGralTipoIvaId(){ if(isset($this->gral_tipo_iva_id)){ return $this->gral_tipo_iva_id; }else{ return 'null'; } }
	public function getInsTipoListaPrecioId(){ if(isset($this->ins_tipo_lista_precio_id)){ return $this->ins_tipo_lista_precio_id; }else{ return 'null'; } }
	public function getVtaOrdenVentaTipoEstadoId(){ if(isset($this->vta_orden_venta_tipo_estado_id)){ return $this->vta_orden_venta_tipo_estado_id; }else{ return 'null'; } }
	public function getVtaOrdenVentaTipoEstadoFacturacionId(){ if(isset($this->vta_orden_venta_tipo_estado_facturacion_id)){ return $this->vta_orden_venta_tipo_estado_facturacion_id; }else{ return 'null'; } }
	public function getVtaOrdenVentaTipoEstadoRemisionId(){ if(isset($this->vta_orden_venta_tipo_estado_remision_id)){ return $this->vta_orden_venta_tipo_estado_remision_id; }else{ return 'null'; } }
	public function getImporteUnitario(){ if(isset($this->importe_unitario)){ return $this->importe_unitario; }else{ return 0; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getDescuento(){ if(isset($this->descuento)){ return $this->descuento; }else{ return 0; } }
	public function getInsInsumoCostoId(){ if(isset($this->ins_insumo_costo_id)){ return $this->ins_insumo_costo_id; }else{ return 'null'; } }
	public function getImporteCosto(){ if(isset($this->importe_costo)){ return $this->importe_costo; }else{ return 0; } }
	public function getVtaPoliticaDescuentoId(){ if(isset($this->vta_politica_descuento_id)){ return $this->vta_politica_descuento_id; }else{ return 'null'; } }
	public function getVtaPoliticaDescuentoRangoId(){ if(isset($this->vta_politica_descuento_rango_id)){ return $this->vta_politica_descuento_rango_id; }else{ return 'null'; } }
	public function getPorcentajePoliticaDescuento(){ if(isset($this->porcentaje_politica_descuento)){ return $this->porcentaje_politica_descuento; }else{ return 0; } }
	public function getImportePoliticaDescuento(){ if(isset($this->importe_politica_descuento)){ return $this->importe_politica_descuento; }else{ return 0; } }
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getIncluyeLogistica(){ if(isset($this->incluye_logistica)){ return $this->incluye_logistica; }else{ return 0; } }
	public function getPorcentajeComision(){ if(isset($this->porcentaje_comision)){ return $this->porcentaje_comision; }else{ return 0; } }
	public function getImporteComision(){ if(isset($this->importe_comision)){ return $this->importe_comision; }else{ return 0; } }
	public function getPorcentajeLogistica(){ if(isset($this->porcentaje_logistica)){ return $this->porcentaje_logistica; }else{ return 0; } }
	public function getImporteLogistica(){ if(isset($this->importe_logistica)){ return $this->importe_logistica; }else{ return 0; } }
	public function getInsInsumoBultoId(){ if(isset($this->ins_insumo_bulto_id)){ return $this->ins_insumo_bulto_id; }else{ return 'null'; } }
	public function getCantidadBulto(){ if(isset($this->cantidad_bulto)){ return $this->cantidad_bulto; }else{ return 0; } }
	public function getImporteDescuento(){ if(isset($this->importe_descuento)){ return $this->importe_descuento; }else{ return 0; } }
	public function getImporteRecargo(){ if(isset($this->importe_recargo)){ return $this->importe_recargo; }else{ return 0; } }
	public function getImporte(){ if(isset($this->importe)){ return $this->importe; }else{ return 0; } }
	public function getConflicto(){ if(isset($this->conflicto)){ return $this->conflicto; }else{ return 0; } }
	public function getPorcentaje(){ if(isset($this->porcentaje)){ return $this->porcentaje; }else{ return 'null'; } }
	public function getProporcionIva(){ if(isset($this->proporcion_iva)){ return $this->proporcion_iva; }else{ return 100; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaOrdenVenta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_ID."
				, ".self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID."
				, ".self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID."
				, ".self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID."
				, ".self::GEN_ATTR_IMPORTE_UNITARIO."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_DESCUENTO."
				, ".self::GEN_ATTR_INS_INSUMO_COSTO_ID."
				, ".self::GEN_ATTR_IMPORTE_COSTO."
				, ".self::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID."
				, ".self::GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID."
				, ".self::GEN_ATTR_PORCENTAJE_POLITICA_DESCUENTO."
				, ".self::GEN_ATTR_IMPORTE_POLITICA_DESCUENTO."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_INCLUYE_LOGISTICA."
				, ".self::GEN_ATTR_PORCENTAJE_COMISION."
				, ".self::GEN_ATTR_IMPORTE_COMISION."
				, ".self::GEN_ATTR_PORCENTAJE_LOGISTICA."
				, ".self::GEN_ATTR_IMPORTE_LOGISTICA."
				, ".self::GEN_ATTR_INS_INSUMO_BULTO_ID."
				, ".self::GEN_ATTR_CANTIDAD_BULTO."
				, ".self::GEN_ATTR_IMPORTE_DESCUENTO."
				, ".self::GEN_ATTR_IMPORTE_RECARGO."
				, ".self::GEN_ATTR_IMPORTE."
				, ".self::GEN_ATTR_CONFLICTO."
				, ".self::GEN_ATTR_PORCENTAJE."
				, ".self::GEN_ATTR_PROPORCION_IVA."
				, ".self::GEN_ATTR_CODIGO."
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
				$this->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
				$this->setVtaPresupuestoInsInsumoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID]);
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
				$this->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
				$this->setVtaOrdenVentaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_ID]);
				$this->setVtaOrdenVentaTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID]);
				$this->setVtaOrdenVentaTipoEstadoRemisionId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID]);
				$this->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
				$this->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
				$this->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
				$this->setVtaPoliticaDescuentoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID]);
				$this->setVtaPoliticaDescuentoRangoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID]);
				$this->setPorcentajePoliticaDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO]);
				$this->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
				$this->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
				$this->setImporteComision($fila[self::GEN_ATTR_MIN_IMPORTE_COMISION]);
				$this->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
				$this->setImporteLogistica($fila[self::GEN_ATTR_MIN_IMPORTE_LOGISTICA]);
				$this->setInsInsumoBultoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID]);
				$this->setCantidadBulto($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTO]);
				$this->setImporteDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO]);
				$this->setImporteRecargo($fila[self::GEN_ATTR_MIN_IMPORTE_RECARGO]);
				$this->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
				$this->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
				$this->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
				$this->setProporcionIva($fila[self::GEN_ATTR_MIN_PROPORCION_IVA]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
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
	public function setVtaPresupuestoId($v){ $this->vta_presupuesto_id = $v; }
	public function setVtaPresupuestoInsInsumoId($v){ $this->vta_presupuesto_ins_insumo_id = $v; }
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setGralTipoIvaId($v){ $this->gral_tipo_iva_id = $v; }
	public function setInsTipoListaPrecioId($v){ $this->ins_tipo_lista_precio_id = $v; }
	public function setVtaOrdenVentaTipoEstadoId($v){ $this->vta_orden_venta_tipo_estado_id = $v; }
	public function setVtaOrdenVentaTipoEstadoFacturacionId($v){ $this->vta_orden_venta_tipo_estado_facturacion_id = $v; }
	public function setVtaOrdenVentaTipoEstadoRemisionId($v){ $this->vta_orden_venta_tipo_estado_remision_id = $v; }
	public function setImporteUnitario($v){ $this->importe_unitario = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setDescuento($v){ $this->descuento = $v; }
	public function setInsInsumoCostoId($v){ $this->ins_insumo_costo_id = $v; }
	public function setImporteCosto($v){ $this->importe_costo = $v; }
	public function setVtaPoliticaDescuentoId($v){ $this->vta_politica_descuento_id = $v; }
	public function setVtaPoliticaDescuentoRangoId($v){ $this->vta_politica_descuento_rango_id = $v; }
	public function setPorcentajePoliticaDescuento($v){ $this->porcentaje_politica_descuento = $v; }
	public function setImportePoliticaDescuento($v){ $this->importe_politica_descuento = $v; }
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setIncluyeLogistica($v){ $this->incluye_logistica = $v; }
	public function setPorcentajeComision($v){ $this->porcentaje_comision = $v; }
	public function setImporteComision($v){ $this->importe_comision = $v; }
	public function setPorcentajeLogistica($v){ $this->porcentaje_logistica = $v; }
	public function setImporteLogistica($v){ $this->importe_logistica = $v; }
	public function setInsInsumoBultoId($v){ $this->ins_insumo_bulto_id = $v; }
	public function setCantidadBulto($v){ $this->cantidad_bulto = $v; }
	public function setImporteDescuento($v){ $this->importe_descuento = $v; }
	public function setImporteRecargo($v){ $this->importe_recargo = $v; }
	public function setImporte($v){ $this->importe = $v; }
	public function setConflicto($v){ $this->conflicto = $v; }
	public function setPorcentaje($v){ $this->porcentaje = $v; }
	public function setProporcionIva($v){ $this->proporcion_iva = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaOrdenVenta();
            $o->setId($fila[VtaOrdenVenta::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$o->setVtaPresupuestoInsInsumoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$o->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
			$o->setVtaOrdenVentaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_ID]);
			$o->setVtaOrdenVentaTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID]);
			$o->setVtaOrdenVentaTipoEstadoRemisionId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID]);
			$o->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
			$o->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
			$o->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
			$o->setVtaPoliticaDescuentoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID]);
			$o->setVtaPoliticaDescuentoRangoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID]);
			$o->setPorcentajePoliticaDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO]);
			$o->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
			$o->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
			$o->setImporteComision($fila[self::GEN_ATTR_MIN_IMPORTE_COMISION]);
			$o->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
			$o->setImporteLogistica($fila[self::GEN_ATTR_MIN_IMPORTE_LOGISTICA]);
			$o->setInsInsumoBultoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID]);
			$o->setCantidadBulto($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTO]);
			$o->setImporteDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO]);
			$o->setImporteRecargo($fila[self::GEN_ATTR_MIN_IMPORTE_RECARGO]);
			$o->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
			$o->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
			$o->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
			$o->setProporcionIva($fila[self::GEN_ATTR_MIN_PROPORCION_IVA]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaOrdenVenta */ 	
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

	/* Cambia el estado de BVtaOrdenVenta */ 	
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

	/* Save de BVtaOrdenVenta */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_DESCUENTO."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION."
						, ".self::GEN_ATTR_MIN_IMPORTE_COMISION."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_IMPORTE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_RECARGO."
						, ".self::GEN_ATTR_MIN_IMPORTE."
						, ".self::GEN_ATTR_MIN_CONFLICTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_orden_venta_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getVtaPresupuestoInsInsumoId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getGralTipoIvaId()."
						, ".$this->getInsTipoListaPrecioId()."
						, ".$this->getVtaOrdenVentaTipoEstadoId()."
						, ".$this->getVtaOrdenVentaTipoEstadoFacturacionId()."
						, ".$this->getVtaOrdenVentaTipoEstadoRemisionId()."
						, '".$this->getImporteUnitario()."'
						, '".$this->getCantidad()."'
						, '".$this->getDescuento()."'
						, ".$this->getInsInsumoCostoId()."
						, '".$this->getImporteCosto()."'
						, ".$this->getVtaPoliticaDescuentoId()."
						, ".$this->getVtaPoliticaDescuentoRangoId()."
						, '".$this->getPorcentajePoliticaDescuento()."'
						, '".$this->getImportePoliticaDescuento()."'
						, ".$this->getGralSucursalId()."
						, ".$this->getIncluyeLogistica()."
						, '".$this->getPorcentajeComision()."'
						, '".$this->getImporteComision()."'
						, '".$this->getPorcentajeLogistica()."'
						, '".$this->getImporteLogistica()."'
						, ".$this->getInsInsumoBultoId()."
						, ".$this->getCantidadBulto()."
						, '".$this->getImporteDescuento()."'
						, '".$this->getImporteRecargo()."'
						, '".$this->getImporte()."'
						, ".$this->getConflicto()."
						, ".$this->getPorcentaje()."
						, ".$this->getProporcionIva()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_orden_venta_seq')";
            
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
                 
				 ".VtaOrdenVenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID." = ".$this->getVtaPresupuestoInsInsumoId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID." = ".$this->getInsTipoListaPrecioId()."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_ID." = ".$this->getVtaOrdenVentaTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID." = ".$this->getVtaOrdenVentaTipoEstadoFacturacionId()."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID." = ".$this->getVtaOrdenVentaTipoEstadoRemisionId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO." = '".$this->getImporteUnitario()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_DESCUENTO." = '".$this->getDescuento()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID." = ".$this->getInsInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO." = '".$this->getImporteCosto()."'
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID." = ".$this->getVtaPoliticaDescuentoId()."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID." = ".$this->getVtaPoliticaDescuentoRangoId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO." = '".$this->getPorcentajePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO." = '".$this->getImportePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA." = ".$this->getIncluyeLogistica()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION." = '".$this->getPorcentajeComision()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_COMISION." = '".$this->getImporteComision()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA." = '".$this->getPorcentajeLogistica()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_LOGISTICA." = '".$this->getImporteLogistica()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID." = ".$this->getInsInsumoBultoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTO." = ".$this->getCantidadBulto()."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO." = '".$this->getImporteDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_RECARGO." = '".$this->getImporteRecargo()."'
						, ".self::GEN_ATTR_MIN_IMPORTE." = '".$this->getImporte()."'
						, ".self::GEN_ATTR_MIN_CONFLICTO." = ".$this->getConflicto()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE." = ".$this->getPorcentaje()."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA." = ".$this->getProporcionIva()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_DESCUENTO."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION."
						, ".self::GEN_ATTR_MIN_IMPORTE_COMISION."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_IMPORTE_LOGISTICA."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_RECARGO."
						, ".self::GEN_ATTR_MIN_IMPORTE."
						, ".self::GEN_ATTR_MIN_CONFLICTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getVtaPresupuestoInsInsumoId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getGralTipoIvaId()."
						, ".$this->getInsTipoListaPrecioId()."
						, ".$this->getVtaOrdenVentaTipoEstadoId()."
						, ".$this->getVtaOrdenVentaTipoEstadoFacturacionId()."
						, ".$this->getVtaOrdenVentaTipoEstadoRemisionId()."
						, '".$this->getImporteUnitario()."'
						, '".$this->getCantidad()."'
						, '".$this->getDescuento()."'
						, ".$this->getInsInsumoCostoId()."
						, '".$this->getImporteCosto()."'
						, ".$this->getVtaPoliticaDescuentoId()."
						, ".$this->getVtaPoliticaDescuentoRangoId()."
						, '".$this->getPorcentajePoliticaDescuento()."'
						, '".$this->getImportePoliticaDescuento()."'
						, ".$this->getGralSucursalId()."
						, ".$this->getIncluyeLogistica()."
						, '".$this->getPorcentajeComision()."'
						, '".$this->getImporteComision()."'
						, '".$this->getPorcentajeLogistica()."'
						, '".$this->getImporteLogistica()."'
						, ".$this->getInsInsumoBultoId()."
						, ".$this->getCantidadBulto()."
						, '".$this->getImporteDescuento()."'
						, '".$this->getImporteRecargo()."'
						, '".$this->getImporte()."'
						, ".$this->getConflicto()."
						, ".$this->getPorcentaje()."
						, ".$this->getProporcionIva()."
						, '".$this->getCodigo()."'
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
                     
				 ".VtaOrdenVenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID." = ".$this->getVtaPresupuestoInsInsumoId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID." = ".$this->getInsTipoListaPrecioId()."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_ID." = ".$this->getVtaOrdenVentaTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID." = ".$this->getVtaOrdenVentaTipoEstadoFacturacionId()."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID." = ".$this->getVtaOrdenVentaTipoEstadoRemisionId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO." = '".$this->getImporteUnitario()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_DESCUENTO." = '".$this->getDescuento()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID." = ".$this->getInsInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO." = '".$this->getImporteCosto()."'
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID." = ".$this->getVtaPoliticaDescuentoId()."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID." = ".$this->getVtaPoliticaDescuentoRangoId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO." = '".$this->getPorcentajePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO." = '".$this->getImportePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_INCLUYE_LOGISTICA." = ".$this->getIncluyeLogistica()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION." = '".$this->getPorcentajeComision()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_COMISION." = '".$this->getImporteComision()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA." = '".$this->getPorcentajeLogistica()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_LOGISTICA." = '".$this->getImporteLogistica()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID." = ".$this->getInsInsumoBultoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTO." = ".$this->getCantidadBulto()."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO." = '".$this->getImporteDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_RECARGO." = '".$this->getImporteRecargo()."'
						, ".self::GEN_ATTR_MIN_IMPORTE." = '".$this->getImporte()."'
						, ".self::GEN_ATTR_MIN_CONFLICTO." = ".$this->getConflicto()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE." = ".$this->getPorcentaje()."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA." = ".$this->getProporcionIva()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
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
            $o = new VtaOrdenVenta();
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

	/* Delete de BVtaOrdenVenta */ 	
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
	
            // se elimina la coleccion de VtaOrdenVentaImportes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaImporte::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaImportes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaConflictos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaConflicto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaConflictos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaEstadoFacturacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaEstadoFacturacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaEstadoFacturacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaEstadoRemisions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaEstadoRemision::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaEstadoRemisions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaEstadoCobros relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaEstadoCobro::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaEstadoCobros(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaVtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaVtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebeVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebeVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaVtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentaVtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentaVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjusteVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjusteVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaOrdenVenta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtaordenventas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtaordenventa = new VtaOrdenVenta();
                    $vtaordenventa->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtaordenventa->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtaordenventa->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$vtaordenventa->setVtaPresupuestoInsInsumoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID]);
			$vtaordenventa->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$vtaordenventa->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$vtaordenventa->setInsTipoListaPrecioId($fila[self::GEN_ATTR_MIN_INS_TIPO_LISTA_PRECIO_ID]);
			$vtaordenventa->setVtaOrdenVentaTipoEstadoId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_ID]);
			$vtaordenventa->setVtaOrdenVentaTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID]);
			$vtaordenventa->setVtaOrdenVentaTipoEstadoRemisionId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID]);
			$vtaordenventa->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
			$vtaordenventa->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$vtaordenventa->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
			$vtaordenventa->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
			$vtaordenventa->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
			$vtaordenventa->setVtaPoliticaDescuentoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID]);
			$vtaordenventa->setVtaPoliticaDescuentoRangoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID]);
			$vtaordenventa->setPorcentajePoliticaDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO]);
			$vtaordenventa->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
			$vtaordenventa->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$vtaordenventa->setIncluyeLogistica($fila[self::GEN_ATTR_MIN_INCLUYE_LOGISTICA]);
			$vtaordenventa->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
			$vtaordenventa->setImporteComision($fila[self::GEN_ATTR_MIN_IMPORTE_COMISION]);
			$vtaordenventa->setPorcentajeLogistica($fila[self::GEN_ATTR_MIN_PORCENTAJE_LOGISTICA]);
			$vtaordenventa->setImporteLogistica($fila[self::GEN_ATTR_MIN_IMPORTE_LOGISTICA]);
			$vtaordenventa->setInsInsumoBultoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID]);
			$vtaordenventa->setCantidadBulto($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTO]);
			$vtaordenventa->setImporteDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO]);
			$vtaordenventa->setImporteRecargo($fila[self::GEN_ATTR_MIN_IMPORTE_RECARGO]);
			$vtaordenventa->setImporte($fila[self::GEN_ATTR_MIN_IMPORTE]);
			$vtaordenventa->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
			$vtaordenventa->setPorcentaje($fila[self::GEN_ATTR_MIN_PORCENTAJE]);
			$vtaordenventa->setProporcionIva($fila[self::GEN_ATTR_MIN_PROPORCION_IVA]);
			$vtaordenventa->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtaordenventa->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtaordenventa->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtaordenventa->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtaordenventa->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtaordenventa->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtaordenventa->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtaordenventa->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtaordenventas[] = $vtaordenventa;
		}
		
		return $vtaordenventas;
	}	
	

	/* Método getVtaOrdenVentas Habilitados */ 	
	static function getVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaOrdenVenta::getVtaOrdenVentas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaOrdenVentas para listado de Backend */ 	
	static function getVtaOrdenVentasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaOrdenVenta::getVtaOrdenVentas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaOrdenVentasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaOrdenVenta::getVtaOrdenVentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaOrdenVentas filtrado para select */ 	
	static function getVtaOrdenVentasCmbF($paginador = null, $criterio = null){
            $col = VtaOrdenVenta::getVtaOrdenVentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaPresupuesto */ 	
	static function getVtaOrdenVentasXVtaPresupuestos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaPresupuestoInsInsumo */ 	
	static function getVtaOrdenVentasXVtaPresupuestoInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getVtaOrdenVentasXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de GralTipoIva */ 	
	static function getVtaOrdenVentasXGralTipoIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de InsTipoListaPrecio */ 	
	static function getVtaOrdenVentasXInsTipoListaPrecios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsTipoListaPrecioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaOrdenVentaTipoEstado */ 	
	static function getVtaOrdenVentasXVtaOrdenVentaTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaOrdenVentaTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaOrdenVentaTipoEstadoFacturacion */ 	
	static function getVtaOrdenVentasXVtaOrdenVentaTipoEstadoFacturacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaOrdenVentaTipoEstadoFacturacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaOrdenVentaTipoEstadoRemision */ 	
	static function getVtaOrdenVentasXVtaOrdenVentaTipoEstadoRemisions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaOrdenVentaTipoEstadoRemisionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de InsInsumoCosto */ 	
	static function getVtaOrdenVentasXInsInsumoCostos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_INSUMO_COSTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoCostoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaPoliticaDescuento */ 	
	static function getVtaOrdenVentasXVtaPoliticaDescuentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPoliticaDescuentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaPoliticaDescuentoRango */ 	
	static function getVtaOrdenVentasXVtaPoliticaDescuentoRangos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPoliticaDescuentoRangoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getVtaOrdenVentasXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaOrdenVentas filtrado por una coleccion de objetos foraneos de InsInsumoBulto */ 	
	static function getVtaOrdenVentasXInsInsumoBultos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_INS_INSUMO_BULTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoBultoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_orden_venta_adm.php';
            $url_gestion = 'vta_orden_venta_gestion.php';
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
	

	/* Metodo getVtaOrdenVentaImportes */ 	
	public function getVtaOrdenVentaImportes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaImporte::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaImporte::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaImporte::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaImporte::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaImporte::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaImporte::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaImporte::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaImporte::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventaimportes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventaimporte = VtaOrdenVentaImporte::hidratarObjeto($fila);			
                $vtaordenventaimportes[] = $vtaordenventaimporte;
            }

            return $vtaordenventaimportes;
	}	
	

	/* Método getVtaOrdenVentaImportesBloque para MasInfo */ 	
	public function getVtaOrdenVentaImportesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaImportes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaImportes Habilitados */ 	
	public function getVtaOrdenVentaImportesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaImportes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaImporte */ 	
	public function getVtaOrdenVentaImporte($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaImportes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaImporte relacionadas */ 	
	public function deleteVtaOrdenVentaImportes(){
            $obs = $this->getVtaOrdenVentaImportes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaImportesCmb() VtaOrdenVentaImporte relacionadas */ 	
	public function getVtaOrdenVentaImportesCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaImporte::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaImporte::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaImporte::getVtaOrdenVentaImportesCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaOrdenVentaConflictos */ 	
	public function getVtaOrdenVentaConflictos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaConflicto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaConflicto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaConflicto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaConflicto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaConflicto::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaConflicto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaConflicto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaConflicto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventaconflictos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventaconflicto = VtaOrdenVentaConflicto::hidratarObjeto($fila);			
                $vtaordenventaconflictos[] = $vtaordenventaconflicto;
            }

            return $vtaordenventaconflictos;
	}	
	

	/* Método getVtaOrdenVentaConflictosBloque para MasInfo */ 	
	public function getVtaOrdenVentaConflictosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaConflictos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaConflictos Habilitados */ 	
	public function getVtaOrdenVentaConflictosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaConflictos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaConflicto */ 	
	public function getVtaOrdenVentaConflicto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaConflictos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaConflicto relacionadas */ 	
	public function deleteVtaOrdenVentaConflictos(){
            $obs = $this->getVtaOrdenVentaConflictos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaConflictosCmb() VtaOrdenVentaConflicto relacionadas */ 	
	public function getVtaOrdenVentaConflictosCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaConflicto::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaConflicto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaConflicto::getVtaOrdenVentaConflictosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de VtaOrdenVentaConflicto */ 	
	public function getUsUsuariosXVtaOrdenVentaConflicto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaConflicto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaConflicto::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaConflicto::GEN_TABLA, VtaOrdenVentaConflicto::GEN_ATTR_US_USUARIO_RESOLUCION, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de VtaOrdenVentaConflicto */ 	
	public function getCantidadUsUsuariosXVtaOrdenVentaConflicto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaConflicto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaConflicto::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaConflicto::GEN_TABLA, VtaOrdenVentaConflicto::GEN_ATTR_US_USUARIO_RESOLUCION, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de VtaOrdenVentaConflicto */ 	
	public function getUsUsuarioXVtaOrdenVentaConflicto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXVtaOrdenVentaConflicto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentaEstados */ 	
	public function getVtaOrdenVentaEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaEstado::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventaestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventaestado = VtaOrdenVentaEstado::hidratarObjeto($fila);			
                $vtaordenventaestados[] = $vtaordenventaestado;
            }

            return $vtaordenventaestados;
	}	
	

	/* Método getVtaOrdenVentaEstadosBloque para MasInfo */ 	
	public function getVtaOrdenVentaEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaEstados Habilitados */ 	
	public function getVtaOrdenVentaEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaEstado */ 	
	public function getVtaOrdenVentaEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaEstado relacionadas */ 	
	public function deleteVtaOrdenVentaEstados(){
            $obs = $this->getVtaOrdenVentaEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaEstadosCmb() VtaOrdenVentaEstado relacionadas */ 	
	public function getVtaOrdenVentaEstadosCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaEstado::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaEstado::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaEstado::getVtaOrdenVentaEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentaTipoEstados (Coleccion) relacionados a traves de VtaOrdenVentaEstado */ 	
	public function getVtaOrdenVentaTipoEstadosXVtaOrdenVentaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaEstado::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaEstado::GEN_TABLA, VtaOrdenVentaEstado::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, VtaOrdenVentaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVentaTipoEstado::getVtaOrdenVentaTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentaTipoEstados relacionados a traves de VtaOrdenVentaEstado */ 	
	public function getCantidadVtaOrdenVentaTipoEstadosXVtaOrdenVentaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVentaTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaEstado::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaTipoEstado::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaEstado::GEN_TABLA, VtaOrdenVentaEstado::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, VtaOrdenVentaTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVentaTipoEstado::getVtaOrdenVentaTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVentaTipoEstado (Objeto) relacionado a traves de VtaOrdenVentaEstado */ 	
	public function getVtaOrdenVentaTipoEstadoXVtaOrdenVentaEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentaTipoEstadosXVtaOrdenVentaEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentaEstadoFacturacions */ 	
	public function getVtaOrdenVentaEstadoFacturacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaEstadoFacturacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaEstadoFacturacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaEstadoFacturacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaEstadoFacturacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventaestadofacturacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventaestadofacturacion = VtaOrdenVentaEstadoFacturacion::hidratarObjeto($fila);			
                $vtaordenventaestadofacturacions[] = $vtaordenventaestadofacturacion;
            }

            return $vtaordenventaestadofacturacions;
	}	
	

	/* Método getVtaOrdenVentaEstadoFacturacionsBloque para MasInfo */ 	
	public function getVtaOrdenVentaEstadoFacturacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaEstadoFacturacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaEstadoFacturacions Habilitados */ 	
	public function getVtaOrdenVentaEstadoFacturacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaEstadoFacturacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaEstadoFacturacion */ 	
	public function getVtaOrdenVentaEstadoFacturacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaEstadoFacturacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaEstadoFacturacion relacionadas */ 	
	public function deleteVtaOrdenVentaEstadoFacturacions(){
            $obs = $this->getVtaOrdenVentaEstadoFacturacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaEstadoFacturacionsCmb() VtaOrdenVentaEstadoFacturacion relacionadas */ 	
	public function getVtaOrdenVentaEstadoFacturacionsCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaEstadoFacturacion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaEstadoFacturacion::getVtaOrdenVentaEstadoFacturacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentaTipoEstadoFacturacions (Coleccion) relacionados a traves de VtaOrdenVentaEstadoFacturacion */ 	
	public function getVtaOrdenVentaTipoEstadoFacturacionsXVtaOrdenVentaEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaEstadoFacturacion::GEN_TABLA, VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVentaTipoEstadoFacturacion::getVtaOrdenVentaTipoEstadoFacturacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentaTipoEstadoFacturacions relacionados a traves de VtaOrdenVentaEstadoFacturacion */ 	
	public function getCantidadVtaOrdenVentaTipoEstadoFacturacionsXVtaOrdenVentaEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaEstadoFacturacion::GEN_TABLA, VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVentaTipoEstadoFacturacion::getVtaOrdenVentaTipoEstadoFacturacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVentaTipoEstadoFacturacion (Objeto) relacionado a traves de VtaOrdenVentaEstadoFacturacion */ 	
	public function getVtaOrdenVentaTipoEstadoFacturacionXVtaOrdenVentaEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentaTipoEstadoFacturacionsXVtaOrdenVentaEstadoFacturacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentaEstadoRemisions */ 	
	public function getVtaOrdenVentaEstadoRemisions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaEstadoRemision::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaEstadoRemision::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaEstadoRemision::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaEstadoRemision::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaEstadoRemision::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventaestadoremisions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventaestadoremision = VtaOrdenVentaEstadoRemision::hidratarObjeto($fila);			
                $vtaordenventaestadoremisions[] = $vtaordenventaestadoremision;
            }

            return $vtaordenventaestadoremisions;
	}	
	

	/* Método getVtaOrdenVentaEstadoRemisionsBloque para MasInfo */ 	
	public function getVtaOrdenVentaEstadoRemisionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaEstadoRemisions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaEstadoRemisions Habilitados */ 	
	public function getVtaOrdenVentaEstadoRemisionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaEstadoRemisions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaEstadoRemision */ 	
	public function getVtaOrdenVentaEstadoRemision($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaEstadoRemisions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaEstadoRemision relacionadas */ 	
	public function deleteVtaOrdenVentaEstadoRemisions(){
            $obs = $this->getVtaOrdenVentaEstadoRemisions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaEstadoRemisionsCmb() VtaOrdenVentaEstadoRemision relacionadas */ 	
	public function getVtaOrdenVentaEstadoRemisionsCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaEstadoRemision::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaEstadoRemision::getVtaOrdenVentaEstadoRemisionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentaTipoEstadoRemisions (Coleccion) relacionados a traves de VtaOrdenVentaEstadoRemision */ 	
	public function getVtaOrdenVentaTipoEstadoRemisionsXVtaOrdenVentaEstadoRemision($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaTipoEstadoRemision::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaEstadoRemision::GEN_TABLA, VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID, VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVentaTipoEstadoRemision::getVtaOrdenVentaTipoEstadoRemisions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentaTipoEstadoRemisions relacionados a traves de VtaOrdenVentaEstadoRemision */ 	
	public function getCantidadVtaOrdenVentaTipoEstadoRemisionsXVtaOrdenVentaEstadoRemision($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaTipoEstadoRemision::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaEstadoRemision::GEN_TABLA, VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID, VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVentaTipoEstadoRemision::getVtaOrdenVentaTipoEstadoRemisions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVentaTipoEstadoRemision (Objeto) relacionado a traves de VtaOrdenVentaEstadoRemision */ 	
	public function getVtaOrdenVentaTipoEstadoRemisionXVtaOrdenVentaEstadoRemision($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentaTipoEstadoRemisionsXVtaOrdenVentaEstadoRemision($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentaEstadoCobros */ 	
	public function getVtaOrdenVentaEstadoCobros($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVentaEstadoCobro::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVentaEstadoCobro::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVentaEstadoCobro::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVentaEstadoCobro::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVentaEstadoCobro::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVentaEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVentaEstadoCobro::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVentaEstadoCobro::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventaestadocobros = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventaestadocobro = VtaOrdenVentaEstadoCobro::hidratarObjeto($fila);			
                $vtaordenventaestadocobros[] = $vtaordenventaestadocobro;
            }

            return $vtaordenventaestadocobros;
	}	
	

	/* Método getVtaOrdenVentaEstadoCobrosBloque para MasInfo */ 	
	public function getVtaOrdenVentaEstadoCobrosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentaEstadoCobros($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentaEstadoCobros Habilitados */ 	
	public function getVtaOrdenVentaEstadoCobrosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentaEstadoCobros($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVentaEstadoCobro */ 	
	public function getVtaOrdenVentaEstadoCobro($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentaEstadoCobros($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVentaEstadoCobro relacionadas */ 	
	public function deleteVtaOrdenVentaEstadoCobros(){
            $obs = $this->getVtaOrdenVentaEstadoCobros();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentaEstadoCobrosCmb() VtaOrdenVentaEstadoCobro relacionadas */ 	
	public function getVtaOrdenVentaEstadoCobrosCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVentaEstadoCobro::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaEstadoCobro::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaEstadoCobro::getVtaOrdenVentaEstadoCobrosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaOrdenVentaTipoEstadoCobros (Coleccion) relacionados a traves de VtaOrdenVentaEstadoCobro */ 	
	public function getVtaOrdenVentaTipoEstadoCobrosXVtaOrdenVentaEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaOrdenVentaTipoEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaEstadoCobro::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaTipoEstadoCobro::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaEstadoCobro::GEN_TABLA, VtaOrdenVentaEstadoCobro::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_ID, VtaOrdenVentaTipoEstadoCobro::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVentaTipoEstadoCobro::getVtaOrdenVentaTipoEstadoCobros($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaOrdenVentaTipoEstadoCobros relacionados a traves de VtaOrdenVentaEstadoCobro */ 	
	public function getCantidadVtaOrdenVentaTipoEstadoCobrosXVtaOrdenVentaEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaOrdenVentaTipoEstadoCobro::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaOrdenVentaTipoEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaEstadoCobro::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaTipoEstadoCobro::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaEstadoCobro::GEN_TABLA, VtaOrdenVentaEstadoCobro::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_ID, VtaOrdenVentaTipoEstadoCobro::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaOrdenVentaTipoEstadoCobro::getVtaOrdenVentaTipoEstadoCobros($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaOrdenVentaTipoEstadoCobro (Objeto) relacionado a traves de VtaOrdenVentaEstadoCobro */ 	
	public function getVtaOrdenVentaTipoEstadoCobroXVtaOrdenVentaEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaOrdenVentaTipoEstadoCobrosXVtaOrdenVentaEstadoCobro($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaVtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaVtaRecibo::getVtaOrdenVentaVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRecibos (Coleccion) relacionados a traves de VtaOrdenVentaVtaRecibo */ 	
	public function getVtaRecibosXVtaOrdenVentaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaRecibo::GEN_TABLA, VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRecibos relacionados a traves de VtaOrdenVentaVtaRecibo */ 	
	public function getCantidadVtaRecibosXVtaOrdenVentaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRecibo::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaRecibo::GEN_TABLA, VtaOrdenVentaVtaRecibo::GEN_ATTR_VTA_RECIBO_ID, VtaRecibo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRecibo (Objeto) relacionado a traves de VtaOrdenVentaVtaRecibo */ 	
	public function getVtaReciboXVtaOrdenVentaVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRecibosXVtaOrdenVentaVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoVtaOrdenVentas */ 	
	public function getVtaRemitoVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitovtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitovtaordenventa = VtaRemitoVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaremitovtaordenventas[] = $vtaremitovtaordenventa;
            }

            return $vtaremitovtaordenventas;
	}	
	

	/* Método getVtaRemitoVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaRemitoVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoVtaOrdenVentas Habilitados */ 	
	public function getVtaRemitoVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoVtaOrdenVenta */ 	
	public function getVtaRemitoVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoVtaOrdenVenta relacionadas */ 	
	public function deleteVtaRemitoVtaOrdenVentas(){
            $obs = $this->getVtaRemitoVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoVtaOrdenVentasCmb() VtaRemitoVtaOrdenVenta relacionadas */ 	
	public function getVtaRemitoVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoVtaOrdenVenta::getVtaRemitoVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitos (Coleccion) relacionados a traves de VtaRemitoVtaOrdenVenta */ 	
	public function getVtaRemitosXVtaRemitoVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(VtaRemitoVtaOrdenVenta::GEN_TABLA, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitos relacionados a traves de VtaRemitoVtaOrdenVenta */ 	
	public function getCantidadVtaRemitosXVtaRemitoVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(VtaRemitoVtaOrdenVenta::GEN_TABLA, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID, VtaRemito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemito (Objeto) relacionado a traves de VtaRemitoVtaOrdenVenta */ 	
	public function getVtaRemitoXVtaRemitoVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitosXVtaRemitoVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaFacturasXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaFacturaVtaOrdenVenta */ 	
	public function getVtaFacturaXVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebeVtaOrdenVenta::getVtaAjusteDebeVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getCantidadVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaAjusteDebeVtaOrdenVenta */ 	
	public function getVtaAjusteDebeXVtaAjusteDebeVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaAjusteDebeVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaVtaAjusteDebe::getVtaOrdenVentaVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaOrdenVentaVtaAjusteDebe */ 	
	public function getVtaAjusteDebesXVtaOrdenVentaVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA, VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaOrdenVentaVtaAjusteDebe */ 	
	public function getCantidadVtaAjusteDebesXVtaOrdenVentaVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaAjusteDebe::GEN_TABLA, VtaOrdenVentaVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaOrdenVentaVtaAjusteDebe */ 	
	public function getVtaAjusteDebeXVtaOrdenVentaVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaOrdenVentaVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVentaVtaAjusteHaber::getVtaOrdenVentaVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteHabers (Coleccion) relacionados a traves de VtaOrdenVentaVtaAjusteHaber */ 	
	public function getVtaAjusteHabersXVtaOrdenVentaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA, VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteHabers relacionados a traves de VtaOrdenVentaVtaAjusteHaber */ 	
	public function getCantidadVtaAjusteHabersXVtaOrdenVentaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteHaber::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaVtaAjusteHaber::GEN_TABLA, VtaOrdenVentaVtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_ID, VtaAjusteHaber::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteHaber (Objeto) relacionado a traves de VtaOrdenVentaVtaAjusteHaber */ 	
	public function getVtaAjusteHaberXVtaOrdenVentaVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteHabersXVtaOrdenVentaVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoAjusteVtaOrdenVentas */ 	
	public function getVtaRemitoAjusteVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjusteVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjusteVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajustevtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajustevtaordenventa = VtaRemitoAjusteVtaOrdenVenta::hidratarObjeto($fila);			
                $vtaremitoajustevtaordenventas[] = $vtaremitoajustevtaordenventa;
            }

            return $vtaremitoajustevtaordenventas;
	}	
	

	/* Método getVtaRemitoAjusteVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteVtaOrdenVentas Habilitados */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaRemitoAjusteVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjusteVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjusteVtaOrdenVenta relacionadas */ 	
	public function deleteVtaRemitoAjusteVtaOrdenVentas(){
            $obs = $this->getVtaRemitoAjusteVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjusteVtaOrdenVentasCmb() VtaRemitoAjusteVtaOrdenVenta relacionadas */ 	
	public function getVtaRemitoAjusteVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjusteVtaOrdenVenta::getVtaRemitoAjusteVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaRemitoAjustes (Coleccion) relacionados a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaRemitoAjustesXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA, VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, VtaRemitoAjuste::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaRemitoAjustes relacionados a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getCantidadVtaRemitoAjustesXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaRemitoAjuste::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA, VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, VtaRemitoAjuste::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaRemitoAjuste (Objeto) relacionado a traves de VtaRemitoAjusteVtaOrdenVenta */ 	
	public function getVtaRemitoAjusteXVtaRemitoAjusteVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaRemitoAjustesXVtaRemitoAjusteVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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

	/* Metodo que retorna el VtaPresupuestoInsInsumo (Clave Foranea) */ 	
    public function getVtaPresupuestoInsInsumo(){
        $o = new VtaPresupuestoInsInsumo();
        $o->setId($this->getVtaPresupuestoInsInsumoId());
        return $o;			
    }

	/* Metodo que retorna el VtaPresupuestoInsInsumo (Clave Foranea) en Array */ 	
    public function getVtaPresupuestoInsInsumoEnArray(&$arr_os){
        if($this->getVtaPresupuestoInsInsumoId() != 'null'){
            if(isset($arr_os[$this->getVtaPresupuestoInsInsumoId()])){
                $o = $arr_os[$this->getVtaPresupuestoInsInsumoId()];
            }else{
                $o = VtaPresupuestoInsInsumo::getOxId($this->getVtaPresupuestoInsInsumoId());
                if($o){
                    $arr_os[$this->getVtaPresupuestoInsInsumoId()] = $o;
                }
            }
        }else{
            $o = new VtaPresupuestoInsInsumo();
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

	/* Metodo que retorna el InsTipoListaPrecio (Clave Foranea) */ 	
    public function getInsTipoListaPrecio(){
        $o = new InsTipoListaPrecio();
        $o->setId($this->getInsTipoListaPrecioId());
        return $o;			
    }

	/* Metodo que retorna el InsTipoListaPrecio (Clave Foranea) en Array */ 	
    public function getInsTipoListaPrecioEnArray(&$arr_os){
        if($this->getInsTipoListaPrecioId() != 'null'){
            if(isset($arr_os[$this->getInsTipoListaPrecioId()])){
                $o = $arr_os[$this->getInsTipoListaPrecioId()];
            }else{
                $o = InsTipoListaPrecio::getOxId($this->getInsTipoListaPrecioId());
                if($o){
                    $arr_os[$this->getInsTipoListaPrecioId()] = $o;
                }
            }
        }else{
            $o = new InsTipoListaPrecio();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaOrdenVentaTipoEstado (Clave Foranea) */ 	
    public function getVtaOrdenVentaTipoEstado(){
        $o = new VtaOrdenVentaTipoEstado();
        $o->setId($this->getVtaOrdenVentaTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el VtaOrdenVentaTipoEstado (Clave Foranea) en Array */ 	
    public function getVtaOrdenVentaTipoEstadoEnArray(&$arr_os){
        if($this->getVtaOrdenVentaTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getVtaOrdenVentaTipoEstadoId()])){
                $o = $arr_os[$this->getVtaOrdenVentaTipoEstadoId()];
            }else{
                $o = VtaOrdenVentaTipoEstado::getOxId($this->getVtaOrdenVentaTipoEstadoId());
                if($o){
                    $arr_os[$this->getVtaOrdenVentaTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new VtaOrdenVentaTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaOrdenVentaTipoEstadoFacturacion (Clave Foranea) */ 	
    public function getVtaOrdenVentaTipoEstadoFacturacion(){
        $o = new VtaOrdenVentaTipoEstadoFacturacion();
        $o->setId($this->getVtaOrdenVentaTipoEstadoFacturacionId());
        return $o;			
    }

	/* Metodo que retorna el VtaOrdenVentaTipoEstadoFacturacion (Clave Foranea) en Array */ 	
    public function getVtaOrdenVentaTipoEstadoFacturacionEnArray(&$arr_os){
        if($this->getVtaOrdenVentaTipoEstadoFacturacionId() != 'null'){
            if(isset($arr_os[$this->getVtaOrdenVentaTipoEstadoFacturacionId()])){
                $o = $arr_os[$this->getVtaOrdenVentaTipoEstadoFacturacionId()];
            }else{
                $o = VtaOrdenVentaTipoEstadoFacturacion::getOxId($this->getVtaOrdenVentaTipoEstadoFacturacionId());
                if($o){
                    $arr_os[$this->getVtaOrdenVentaTipoEstadoFacturacionId()] = $o;
                }
            }
        }else{
            $o = new VtaOrdenVentaTipoEstadoFacturacion();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaOrdenVentaTipoEstadoRemision (Clave Foranea) */ 	
    public function getVtaOrdenVentaTipoEstadoRemision(){
        $o = new VtaOrdenVentaTipoEstadoRemision();
        $o->setId($this->getVtaOrdenVentaTipoEstadoRemisionId());
        return $o;			
    }

	/* Metodo que retorna el VtaOrdenVentaTipoEstadoRemision (Clave Foranea) en Array */ 	
    public function getVtaOrdenVentaTipoEstadoRemisionEnArray(&$arr_os){
        if($this->getVtaOrdenVentaTipoEstadoRemisionId() != 'null'){
            if(isset($arr_os[$this->getVtaOrdenVentaTipoEstadoRemisionId()])){
                $o = $arr_os[$this->getVtaOrdenVentaTipoEstadoRemisionId()];
            }else{
                $o = VtaOrdenVentaTipoEstadoRemision::getOxId($this->getVtaOrdenVentaTipoEstadoRemisionId());
                if($o){
                    $arr_os[$this->getVtaOrdenVentaTipoEstadoRemisionId()] = $o;
                }
            }
        }else{
            $o = new VtaOrdenVentaTipoEstadoRemision();
        }
        return $o;		
    }

	/* Metodo que retorna el InsInsumoCosto (Clave Foranea) */ 	
    public function getInsInsumoCosto(){
        $o = new InsInsumoCosto();
        $o->setId($this->getInsInsumoCostoId());
        return $o;			
    }

	/* Metodo que retorna el InsInsumoCosto (Clave Foranea) en Array */ 	
    public function getInsInsumoCostoEnArray(&$arr_os){
        if($this->getInsInsumoCostoId() != 'null'){
            if(isset($arr_os[$this->getInsInsumoCostoId()])){
                $o = $arr_os[$this->getInsInsumoCostoId()];
            }else{
                $o = InsInsumoCosto::getOxId($this->getInsInsumoCostoId());
                if($o){
                    $arr_os[$this->getInsInsumoCostoId()] = $o;
                }
            }
        }else{
            $o = new InsInsumoCosto();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPoliticaDescuento (Clave Foranea) */ 	
    public function getVtaPoliticaDescuento(){
        $o = new VtaPoliticaDescuento();
        $o->setId($this->getVtaPoliticaDescuentoId());
        return $o;			
    }

	/* Metodo que retorna el VtaPoliticaDescuento (Clave Foranea) en Array */ 	
    public function getVtaPoliticaDescuentoEnArray(&$arr_os){
        if($this->getVtaPoliticaDescuentoId() != 'null'){
            if(isset($arr_os[$this->getVtaPoliticaDescuentoId()])){
                $o = $arr_os[$this->getVtaPoliticaDescuentoId()];
            }else{
                $o = VtaPoliticaDescuento::getOxId($this->getVtaPoliticaDescuentoId());
                if($o){
                    $arr_os[$this->getVtaPoliticaDescuentoId()] = $o;
                }
            }
        }else{
            $o = new VtaPoliticaDescuento();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaPoliticaDescuentoRango (Clave Foranea) */ 	
    public function getVtaPoliticaDescuentoRango(){
        $o = new VtaPoliticaDescuentoRango();
        $o->setId($this->getVtaPoliticaDescuentoRangoId());
        return $o;			
    }

	/* Metodo que retorna el VtaPoliticaDescuentoRango (Clave Foranea) en Array */ 	
    public function getVtaPoliticaDescuentoRangoEnArray(&$arr_os){
        if($this->getVtaPoliticaDescuentoRangoId() != 'null'){
            if(isset($arr_os[$this->getVtaPoliticaDescuentoRangoId()])){
                $o = $arr_os[$this->getVtaPoliticaDescuentoRangoId()];
            }else{
                $o = VtaPoliticaDescuentoRango::getOxId($this->getVtaPoliticaDescuentoRangoId());
                if($o){
                    $arr_os[$this->getVtaPoliticaDescuentoRangoId()] = $o;
                }
            }
        }else{
            $o = new VtaPoliticaDescuentoRango();
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

	/* Metodo que retorna el InsInsumoBulto (Clave Foranea) */ 	
    public function getInsInsumoBulto(){
        $o = new InsInsumoBulto();
        $o->setId($this->getInsInsumoBultoId());
        return $o;			
    }

	/* Metodo que retorna el InsInsumoBulto (Clave Foranea) en Array */ 	
    public function getInsInsumoBultoEnArray(&$arr_os){
        if($this->getInsInsumoBultoId() != 'null'){
            if(isset($arr_os[$this->getInsInsumoBultoId()])){
                $o = $arr_os[$this->getInsInsumoBultoId()];
            }else{
                $o = InsInsumoBulto::getOxId($this->getInsInsumoBultoId());
                if($o){
                    $arr_os[$this->getInsInsumoBultoId()] = $o;
                }
            }
        }else{
            $o = new InsInsumoBulto();
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
            		
        if($contexto_solicitante != VtaPresupuesto::GEN_CLASE){
            if($this->getVtaPresupuesto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuesto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuesto()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPresupuestoInsInsumo::GEN_CLASE){
            if($this->getVtaPresupuestoInsInsumo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPresupuestoInsInsumo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPresupuestoInsInsumo()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != GralTipoIva::GEN_CLASE){
            if($this->getGralTipoIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsTipoListaPrecio::GEN_CLASE){
            if($this->getInsTipoListaPrecio()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsTipoListaPrecio::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsTipoListaPrecio()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaOrdenVentaTipoEstado::GEN_CLASE){
            if($this->getVtaOrdenVentaTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaOrdenVentaTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaOrdenVentaTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaOrdenVentaTipoEstadoFacturacion::GEN_CLASE){
            if($this->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaOrdenVentaTipoEstadoFacturacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaOrdenVentaTipoEstadoRemision::GEN_CLASE){
            if($this->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaOrdenVentaTipoEstadoRemision::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsInsumoCosto::GEN_CLASE){
            if($this->getInsInsumoCosto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsInsumoCosto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsInsumoCosto()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPoliticaDescuento::GEN_CLASE){
            if($this->getVtaPoliticaDescuento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPoliticaDescuento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPoliticaDescuento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaPoliticaDescuentoRango::GEN_CLASE){
            if($this->getVtaPoliticaDescuentoRango()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaPoliticaDescuentoRango::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaPoliticaDescuentoRango()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != InsInsumoBulto::GEN_CLASE){
            if($this->getInsInsumoBulto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsInsumoBulto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsInsumoBulto()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_orden_venta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_orden_venta';");
            
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

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_ins_insumo_id' */ 	
	static function getOxVtaPresupuestoInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_presupuesto_ins_insumo_id' */ 	
	static function getOsxVtaPresupuestoInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_tipo_lista_precio_id' */ 	
	static function getOxInsTipoListaPrecioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_tipo_lista_precio_id' */ 	
	static function getOsxInsTipoListaPrecioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_orden_venta_tipo_estado_id' */ 	
	static function getOxVtaOrdenVentaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_orden_venta_tipo_estado_id' */ 	
	static function getOsxVtaOrdenVentaTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_orden_venta_tipo_estado_facturacion_id' */ 	
	static function getOxVtaOrdenVentaTipoEstadoFacturacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_orden_venta_tipo_estado_facturacion_id' */ 	
	static function getOsxVtaOrdenVentaTipoEstadoFacturacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_orden_venta_tipo_estado_remision_id' */ 	
	static function getOxVtaOrdenVentaTipoEstadoRemisionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_orden_venta_tipo_estado_remision_id' */ 	
	static function getOsxVtaOrdenVentaTipoEstadoRemisionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_unitario' */ 	
	static function getOxImporteUnitario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNITARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_unitario' */ 	
	static function getOsxImporteUnitario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNITARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descuento' */ 	
	static function getOxDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descuento' */ 	
	static function getOsxDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_costo_id' */ 	
	static function getOxInsInsumoCostoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_COSTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_insumo_costo_id' */ 	
	static function getOsxInsInsumoCostoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_COSTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_costo' */ 	
	static function getOxImporteCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_costo' */ 	
	static function getOsxImporteCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_politica_descuento_id' */ 	
	static function getOxVtaPoliticaDescuentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_politica_descuento_id' */ 	
	static function getOsxVtaPoliticaDescuentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_politica_descuento_rango_id' */ 	
	static function getOxVtaPoliticaDescuentoRangoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_politica_descuento_rango_id' */ 	
	static function getOsxVtaPoliticaDescuentoRangoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_politica_descuento' */ 	
	static function getOxPorcentajePoliticaDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_POLITICA_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_politica_descuento' */ 	
	static function getOsxPorcentajePoliticaDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_POLITICA_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_politica_descuento' */ 	
	static function getOxImportePoliticaDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_POLITICA_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_politica_descuento' */ 	
	static function getOsxImportePoliticaDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_POLITICA_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'incluye_logistica' */ 	
	static function getOxIncluyeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INCLUYE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'incluye_logistica' */ 	
	static function getOsxIncluyeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INCLUYE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_comision' */ 	
	static function getOxPorcentajeComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_comision' */ 	
	static function getOsxPorcentajeComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_comision' */ 	
	static function getOxImporteComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_comision' */ 	
	static function getOsxImporteComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_logistica' */ 	
	static function getOxPorcentajeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_logistica' */ 	
	static function getOsxPorcentajeLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_logistica' */ 	
	static function getOxImporteLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_logistica' */ 	
	static function getOsxImporteLogistica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_LOGISTICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_bulto_id' */ 	
	static function getOxInsInsumoBultoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_BULTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_insumo_bulto_id' */ 	
	static function getOsxInsInsumoBultoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_BULTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_bulto' */ 	
	static function getOxCantidadBulto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_BULTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_bulto' */ 	
	static function getOsxCantidadBulto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_BULTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_descuento' */ 	
	static function getOxImporteDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_descuento' */ 	
	static function getOsxImporteDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_recargo' */ 	
	static function getOxImporteRecargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_RECARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_recargo' */ 	
	static function getOsxImporteRecargo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_RECARGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe' */ 	
	static function getOxImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe' */ 	
	static function getOsxImporte($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'conflicto' */ 	
	static function getOxConflicto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONFLICTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'conflicto' */ 	
	static function getOsxConflicto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONFLICTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje' */ 	
	static function getOxPorcentaje($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'proporcion_iva' */ 	
	static function getOxProporcionIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PROPORCION_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'proporcion_iva' */ 	
	static function getOsxProporcionIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PROPORCION_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas(null, $criterio);
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

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaOrdenVentas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_orden_venta_adm');
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
                $c->addTabla(VtaOrdenVenta::GEN_TABLA);
                $c->addOrden(VtaOrdenVenta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);

                $arr = array();
                foreach($vta_orden_ventas as $vta_orden_venta){
                    $descripcion = $vta_orden_venta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>