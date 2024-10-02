<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaPresupuestoInsInsumo
{ 
	
	const SES_PAGINACION = 'adm_vtapresupuestoinsinsumo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtapresupuestoinsinsumo_paginas_registros';
	const SES_CRITERIOS = 'adm_vtapresupuestoinsinsumo_criterios';
	
	const GEN_CLASE = 'VtaPresupuestoInsInsumo';
	const GEN_TABLA = 'vta_presupuesto_ins_insumo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaPresupuestoInsInsumo */ 
	const GEN_ATTR_ID = 'vta_presupuesto_ins_insumo.id';
	const GEN_ATTR_DESCRIPCION = 'vta_presupuesto_ins_insumo.descripcion';
	const GEN_ATTR_VTA_PRESUPUESTO_ID = 'vta_presupuesto_ins_insumo.vta_presupuesto_id';
	const GEN_ATTR_INS_INSUMO_ID = 'vta_presupuesto_ins_insumo.ins_insumo_id';
	const GEN_ATTR_GRAL_TIPO_IVA_ID = 'vta_presupuesto_ins_insumo.gral_tipo_iva_id';
	const GEN_ATTR_INS_LISTA_PRECIO_ID = 'vta_presupuesto_ins_insumo.ins_lista_precio_id';
	const GEN_ATTR_IMPORTE_UNITARIO = 'vta_presupuesto_ins_insumo.importe_unitario';
	const GEN_ATTR_CANTIDAD = 'vta_presupuesto_ins_insumo.cantidad';
	const GEN_ATTR_DESCUENTO = 'vta_presupuesto_ins_insumo.descuento';
	const GEN_ATTR_CONFLICTO = 'vta_presupuesto_ins_insumo.conflicto';
	const GEN_ATTR_INS_INSUMO_COSTO_ID = 'vta_presupuesto_ins_insumo.ins_insumo_costo_id';
	const GEN_ATTR_IMPORTE_COSTO = 'vta_presupuesto_ins_insumo.importe_costo';
	const GEN_ATTR_VTA_POLITICA_DESCUENTO_ID = 'vta_presupuesto_ins_insumo.vta_politica_descuento_id';
	const GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID = 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id';
	const GEN_ATTR_PORCENTAJE_POLITICA_DESCUENTO = 'vta_presupuesto_ins_insumo.porcentaje_politica_descuento';
	const GEN_ATTR_IMPORTE_POLITICA_DESCUENTO = 'vta_presupuesto_ins_insumo.importe_politica_descuento';
	const GEN_ATTR_PORCENTAJE_COMISION = 'vta_presupuesto_ins_insumo.porcentaje_comision';
	const GEN_ATTR_IMPORTE_COMISION = 'vta_presupuesto_ins_insumo.importe_comision';
	const GEN_ATTR_INS_INSUMO_BULTO_ID = 'vta_presupuesto_ins_insumo.ins_insumo_bulto_id';
	const GEN_ATTR_CANTIDAD_BULTO = 'vta_presupuesto_ins_insumo.cantidad_bulto';
	const GEN_ATTR_IMPORTE_DESCUENTO_BULTO = 'vta_presupuesto_ins_insumo.importe_descuento_bulto';
	const GEN_ATTR_PORCENTAJE_DESCUENTO_BULTO = 'vta_presupuesto_ins_insumo.porcentaje_descuento_bulto';
	const GEN_ATTR_PROPORCION_IVA = 'vta_presupuesto_ins_insumo.proporcion_iva';
	const GEN_ATTR_CODIGO = 'vta_presupuesto_ins_insumo.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_presupuesto_ins_insumo.observacion';
	const GEN_ATTR_ORDEN = 'vta_presupuesto_ins_insumo.orden';
	const GEN_ATTR_ESTADO = 'vta_presupuesto_ins_insumo.estado';
	const GEN_ATTR_CREADO = 'vta_presupuesto_ins_insumo.creado';
	const GEN_ATTR_CREADO_POR = 'vta_presupuesto_ins_insumo.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_presupuesto_ins_insumo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_presupuesto_ins_insumo.modificado_por';

	/* Constantes de Atributos Min de BVtaPresupuestoInsInsumo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_ID = 'vta_presupuesto_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_ID = 'gral_tipo_iva_id';
	const GEN_ATTR_MIN_INS_LISTA_PRECIO_ID = 'ins_lista_precio_id';
	const GEN_ATTR_MIN_IMPORTE_UNITARIO = 'importe_unitario';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_DESCUENTO = 'descuento';
	const GEN_ATTR_MIN_CONFLICTO = 'conflicto';
	const GEN_ATTR_MIN_INS_INSUMO_COSTO_ID = 'ins_insumo_costo_id';
	const GEN_ATTR_MIN_IMPORTE_COSTO = 'importe_costo';
	const GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID = 'vta_politica_descuento_id';
	const GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID = 'vta_politica_descuento_rango_id';
	const GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO = 'porcentaje_politica_descuento';
	const GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO = 'importe_politica_descuento';
	const GEN_ATTR_MIN_PORCENTAJE_COMISION = 'porcentaje_comision';
	const GEN_ATTR_MIN_IMPORTE_COMISION = 'importe_comision';
	const GEN_ATTR_MIN_INS_INSUMO_BULTO_ID = 'ins_insumo_bulto_id';
	const GEN_ATTR_MIN_CANTIDAD_BULTO = 'cantidad_bulto';
	const GEN_ATTR_MIN_IMPORTE_DESCUENTO_BULTO = 'importe_descuento_bulto';
	const GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_BULTO = 'porcentaje_descuento_bulto';
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
	

	/* Atributos de BVtaPresupuestoInsInsumo */ 
	private $id;
	private $descripcion;
	private $vta_presupuesto_id;
	private $ins_insumo_id;
	private $gral_tipo_iva_id;
	private $ins_lista_precio_id;
	private $importe_unitario;
	private $cantidad;
	private $descuento;
	private $conflicto;
	private $ins_insumo_costo_id;
	private $importe_costo;
	private $vta_politica_descuento_id;
	private $vta_politica_descuento_rango_id;
	private $porcentaje_politica_descuento;
	private $importe_politica_descuento;
	private $porcentaje_comision;
	private $importe_comision;
	private $ins_insumo_bulto_id;
	private $cantidad_bulto;
	private $importe_descuento_bulto;
	private $porcentaje_descuento_bulto;
	private $proporcion_iva;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaPresupuestoInsInsumo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaPresupuestoId(){ if(isset($this->vta_presupuesto_id)){ return $this->vta_presupuesto_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getGralTipoIvaId(){ if(isset($this->gral_tipo_iva_id)){ return $this->gral_tipo_iva_id; }else{ return 'null'; } }
	public function getInsListaPrecioId(){ if(isset($this->ins_lista_precio_id)){ return $this->ins_lista_precio_id; }else{ return 'null'; } }
	public function getImporteUnitario(){ if(isset($this->importe_unitario)){ return $this->importe_unitario; }else{ return 0; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getDescuento(){ if(isset($this->descuento)){ return $this->descuento; }else{ return 0; } }
	public function getConflicto(){ if(isset($this->conflicto)){ return $this->conflicto; }else{ return 0; } }
	public function getInsInsumoCostoId(){ if(isset($this->ins_insumo_costo_id)){ return $this->ins_insumo_costo_id; }else{ return 'null'; } }
	public function getImporteCosto(){ if(isset($this->importe_costo)){ return $this->importe_costo; }else{ return 0; } }
	public function getVtaPoliticaDescuentoId(){ if(isset($this->vta_politica_descuento_id)){ return $this->vta_politica_descuento_id; }else{ return 'null'; } }
	public function getVtaPoliticaDescuentoRangoId(){ if(isset($this->vta_politica_descuento_rango_id)){ return $this->vta_politica_descuento_rango_id; }else{ return 'null'; } }
	public function getPorcentajePoliticaDescuento(){ if(isset($this->porcentaje_politica_descuento)){ return $this->porcentaje_politica_descuento; }else{ return 0; } }
	public function getImportePoliticaDescuento(){ if(isset($this->importe_politica_descuento)){ return $this->importe_politica_descuento; }else{ return 0; } }
	public function getPorcentajeComision(){ if(isset($this->porcentaje_comision)){ return $this->porcentaje_comision; }else{ return 0; } }
	public function getImporteComision(){ if(isset($this->importe_comision)){ return $this->importe_comision; }else{ return 0; } }
	public function getInsInsumoBultoId(){ if(isset($this->ins_insumo_bulto_id)){ return $this->ins_insumo_bulto_id; }else{ return 'null'; } }
	public function getCantidadBulto(){ if(isset($this->cantidad_bulto)){ return $this->cantidad_bulto; }else{ return 0; } }
	public function getImporteDescuentoBulto(){ if(isset($this->importe_descuento_bulto)){ return $this->importe_descuento_bulto; }else{ return 0; } }
	public function getPorcentajeDescuentoBulto(){ if(isset($this->porcentaje_descuento_bulto)){ return $this->porcentaje_descuento_bulto; }else{ return 0; } }
	public function getProporcionIva(){ if(isset($this->proporcion_iva)){ return $this->proporcion_iva; }else{ return 100; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaPresupuestoInsInsumo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_ID."
				, ".self::GEN_ATTR_INS_LISTA_PRECIO_ID."
				, ".self::GEN_ATTR_IMPORTE_UNITARIO."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_DESCUENTO."
				, ".self::GEN_ATTR_CONFLICTO."
				, ".self::GEN_ATTR_INS_INSUMO_COSTO_ID."
				, ".self::GEN_ATTR_IMPORTE_COSTO."
				, ".self::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID."
				, ".self::GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID."
				, ".self::GEN_ATTR_PORCENTAJE_POLITICA_DESCUENTO."
				, ".self::GEN_ATTR_IMPORTE_POLITICA_DESCUENTO."
				, ".self::GEN_ATTR_PORCENTAJE_COMISION."
				, ".self::GEN_ATTR_IMPORTE_COMISION."
				, ".self::GEN_ATTR_INS_INSUMO_BULTO_ID."
				, ".self::GEN_ATTR_CANTIDAD_BULTO."
				, ".self::GEN_ATTR_IMPORTE_DESCUENTO_BULTO."
				, ".self::GEN_ATTR_PORCENTAJE_DESCUENTO_BULTO."
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
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
				$this->setInsListaPrecioId($fila[self::GEN_ATTR_MIN_INS_LISTA_PRECIO_ID]);
				$this->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
				$this->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
				$this->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
				$this->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
				$this->setVtaPoliticaDescuentoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID]);
				$this->setVtaPoliticaDescuentoRangoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID]);
				$this->setPorcentajePoliticaDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO]);
				$this->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
				$this->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
				$this->setImporteComision($fila[self::GEN_ATTR_MIN_IMPORTE_COMISION]);
				$this->setInsInsumoBultoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID]);
				$this->setCantidadBulto($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTO]);
				$this->setImporteDescuentoBulto($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO_BULTO]);
				$this->setPorcentajeDescuentoBulto($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_BULTO]);
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
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setGralTipoIvaId($v){ $this->gral_tipo_iva_id = $v; }
	public function setInsListaPrecioId($v){ $this->ins_lista_precio_id = $v; }
	public function setImporteUnitario($v){ $this->importe_unitario = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setDescuento($v){ $this->descuento = $v; }
	public function setConflicto($v){ $this->conflicto = $v; }
	public function setInsInsumoCostoId($v){ $this->ins_insumo_costo_id = $v; }
	public function setImporteCosto($v){ $this->importe_costo = $v; }
	public function setVtaPoliticaDescuentoId($v){ $this->vta_politica_descuento_id = $v; }
	public function setVtaPoliticaDescuentoRangoId($v){ $this->vta_politica_descuento_rango_id = $v; }
	public function setPorcentajePoliticaDescuento($v){ $this->porcentaje_politica_descuento = $v; }
	public function setImportePoliticaDescuento($v){ $this->importe_politica_descuento = $v; }
	public function setPorcentajeComision($v){ $this->porcentaje_comision = $v; }
	public function setImporteComision($v){ $this->importe_comision = $v; }
	public function setInsInsumoBultoId($v){ $this->ins_insumo_bulto_id = $v; }
	public function setCantidadBulto($v){ $this->cantidad_bulto = $v; }
	public function setImporteDescuentoBulto($v){ $this->importe_descuento_bulto = $v; }
	public function setPorcentajeDescuentoBulto($v){ $this->porcentaje_descuento_bulto = $v; }
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
            $o = new VtaPresupuestoInsInsumo();
            $o->setId($fila[VtaPresupuestoInsInsumo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$o->setInsListaPrecioId($fila[self::GEN_ATTR_MIN_INS_LISTA_PRECIO_ID]);
			$o->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
			$o->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
			$o->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
			$o->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
			$o->setVtaPoliticaDescuentoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID]);
			$o->setVtaPoliticaDescuentoRangoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID]);
			$o->setPorcentajePoliticaDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO]);
			$o->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
			$o->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
			$o->setImporteComision($fila[self::GEN_ATTR_MIN_IMPORTE_COMISION]);
			$o->setInsInsumoBultoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID]);
			$o->setCantidadBulto($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTO]);
			$o->setImporteDescuentoBulto($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO_BULTO]);
			$o->setPorcentajeDescuentoBulto($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_BULTO]);
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

	/* Control de BVtaPresupuestoInsInsumo */ 	
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

	/* Cambia el estado de BVtaPresupuestoInsInsumo */ 	
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

	/* Save de BVtaPresupuestoInsInsumo */ 	
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
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_INS_LISTA_PRECIO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_DESCUENTO."
						, ".self::GEN_ATTR_MIN_CONFLICTO."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION."
						, ".self::GEN_ATTR_MIN_IMPORTE_COMISION."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO_BULTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_BULTO."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_presupuesto_ins_insumo_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getGralTipoIvaId()."
						, ".$this->getInsListaPrecioId()."
						, '".$this->getImporteUnitario()."'
						, '".$this->getCantidad()."'
						, '".$this->getDescuento()."'
						, ".$this->getConflicto()."
						, ".$this->getInsInsumoCostoId()."
						, '".$this->getImporteCosto()."'
						, ".$this->getVtaPoliticaDescuentoId()."
						, ".$this->getVtaPoliticaDescuentoRangoId()."
						, '".$this->getPorcentajePoliticaDescuento()."'
						, '".$this->getImportePoliticaDescuento()."'
						, '".$this->getPorcentajeComision()."'
						, '".$this->getImporteComision()."'
						, ".$this->getInsInsumoBultoId()."
						, ".$this->getCantidadBulto()."
						, '".$this->getImporteDescuentoBulto()."'
						, '".$this->getPorcentajeDescuentoBulto()."'
						, ".$this->getProporcionIva()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_presupuesto_ins_insumo_seq')";
            
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
                 
				 ".VtaPresupuestoInsInsumo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_INS_LISTA_PRECIO_ID." = ".$this->getInsListaPrecioId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO." = '".$this->getImporteUnitario()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_DESCUENTO." = '".$this->getDescuento()."'
						, ".self::GEN_ATTR_MIN_CONFLICTO." = ".$this->getConflicto()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID." = ".$this->getInsInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO." = '".$this->getImporteCosto()."'
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID." = ".$this->getVtaPoliticaDescuentoId()."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID." = ".$this->getVtaPoliticaDescuentoRangoId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO." = '".$this->getPorcentajePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO." = '".$this->getImportePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION." = '".$this->getPorcentajeComision()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_COMISION." = '".$this->getImporteComision()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID." = ".$this->getInsInsumoBultoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTO." = ".$this->getCantidadBulto()."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO_BULTO." = '".$this->getImporteDescuentoBulto()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_BULTO." = '".$this->getPorcentajeDescuentoBulto()."'
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
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_INS_LISTA_PRECIO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_DESCUENTO."
						, ".self::GEN_ATTR_MIN_CONFLICTO."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION."
						, ".self::GEN_ATTR_MIN_IMPORTE_COMISION."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTO."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO_BULTO."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_BULTO."
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
						, ".$this->getInsInsumoId()."
						, ".$this->getGralTipoIvaId()."
						, ".$this->getInsListaPrecioId()."
						, '".$this->getImporteUnitario()."'
						, '".$this->getCantidad()."'
						, '".$this->getDescuento()."'
						, ".$this->getConflicto()."
						, ".$this->getInsInsumoCostoId()."
						, '".$this->getImporteCosto()."'
						, ".$this->getVtaPoliticaDescuentoId()."
						, ".$this->getVtaPoliticaDescuentoRangoId()."
						, '".$this->getPorcentajePoliticaDescuento()."'
						, '".$this->getImportePoliticaDescuento()."'
						, '".$this->getPorcentajeComision()."'
						, '".$this->getImporteComision()."'
						, ".$this->getInsInsumoBultoId()."
						, ".$this->getCantidadBulto()."
						, '".$this->getImporteDescuentoBulto()."'
						, '".$this->getPorcentajeDescuentoBulto()."'
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
                     
				 ".VtaPresupuestoInsInsumo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_INS_LISTA_PRECIO_ID." = ".$this->getInsListaPrecioId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO." = '".$this->getImporteUnitario()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_DESCUENTO." = '".$this->getDescuento()."'
						, ".self::GEN_ATTR_MIN_CONFLICTO." = ".$this->getConflicto()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID." = ".$this->getInsInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO." = '".$this->getImporteCosto()."'
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID." = ".$this->getVtaPoliticaDescuentoId()."
						, ".self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID." = ".$this->getVtaPoliticaDescuentoRangoId()."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO." = '".$this->getPorcentajePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO." = '".$this->getImportePoliticaDescuento()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION." = '".$this->getPorcentajeComision()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_COMISION." = '".$this->getImporteComision()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID." = ".$this->getInsInsumoBultoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_BULTO." = ".$this->getCantidadBulto()."
						, ".self::GEN_ATTR_MIN_IMPORTE_DESCUENTO_BULTO." = '".$this->getImporteDescuentoBulto()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_BULTO." = '".$this->getPorcentajeDescuentoBulto()."'
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
            $o = new VtaPresupuestoInsInsumo();
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

	/* Delete de BVtaPresupuestoInsInsumo */ 	
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
	
            // se elimina la coleccion de VtaPresupuestoConflictos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoConflicto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoConflictos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoCancelacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoCancelacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoCancelacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdOrdenTrabajos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaPresupuestoInsInsumo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaPresupuestoInsInsumos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaPresupuestoInsInsumo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtapresupuestoinsinsumos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtapresupuestoinsinsumo = new VtaPresupuestoInsInsumo();
                    $vtapresupuestoinsinsumo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtapresupuestoinsinsumo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtapresupuestoinsinsumo->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$vtapresupuestoinsinsumo->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$vtapresupuestoinsinsumo->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$vtapresupuestoinsinsumo->setInsListaPrecioId($fila[self::GEN_ATTR_MIN_INS_LISTA_PRECIO_ID]);
			$vtapresupuestoinsinsumo->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
			$vtapresupuestoinsinsumo->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$vtapresupuestoinsinsumo->setDescuento($fila[self::GEN_ATTR_MIN_DESCUENTO]);
			$vtapresupuestoinsinsumo->setConflicto($fila[self::GEN_ATTR_MIN_CONFLICTO]);
			$vtapresupuestoinsinsumo->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
			$vtapresupuestoinsinsumo->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
			$vtapresupuestoinsinsumo->setVtaPoliticaDescuentoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_ID]);
			$vtapresupuestoinsinsumo->setVtaPoliticaDescuentoRangoId($fila[self::GEN_ATTR_MIN_VTA_POLITICA_DESCUENTO_RANGO_ID]);
			$vtapresupuestoinsinsumo->setPorcentajePoliticaDescuento($fila[self::GEN_ATTR_MIN_PORCENTAJE_POLITICA_DESCUENTO]);
			$vtapresupuestoinsinsumo->setImportePoliticaDescuento($fila[self::GEN_ATTR_MIN_IMPORTE_POLITICA_DESCUENTO]);
			$vtapresupuestoinsinsumo->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
			$vtapresupuestoinsinsumo->setImporteComision($fila[self::GEN_ATTR_MIN_IMPORTE_COMISION]);
			$vtapresupuestoinsinsumo->setInsInsumoBultoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_BULTO_ID]);
			$vtapresupuestoinsinsumo->setCantidadBulto($fila[self::GEN_ATTR_MIN_CANTIDAD_BULTO]);
			$vtapresupuestoinsinsumo->setImporteDescuentoBulto($fila[self::GEN_ATTR_MIN_IMPORTE_DESCUENTO_BULTO]);
			$vtapresupuestoinsinsumo->setPorcentajeDescuentoBulto($fila[self::GEN_ATTR_MIN_PORCENTAJE_DESCUENTO_BULTO]);
			$vtapresupuestoinsinsumo->setProporcionIva($fila[self::GEN_ATTR_MIN_PROPORCION_IVA]);
			$vtapresupuestoinsinsumo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtapresupuestoinsinsumo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtapresupuestoinsinsumo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtapresupuestoinsinsumo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtapresupuestoinsinsumo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtapresupuestoinsinsumo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtapresupuestoinsinsumo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtapresupuestoinsinsumo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtapresupuestoinsinsumos[] = $vtapresupuestoinsinsumo;
		}
		
		return $vtapresupuestoinsinsumos;
	}	
	

	/* Método getVtaPresupuestoInsInsumos Habilitados */ 	
	static function getVtaPresupuestoInsInsumosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaPresupuestoInsInsumos para listado de Backend */ 	
	static function getVtaPresupuestoInsInsumosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaPresupuestoInsInsumosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaPresupuestoInsInsumo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado para select */ 	
	static function getVtaPresupuestoInsInsumosCmbF($paginador = null, $criterio = null){
            $col = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado por una coleccion de objetos foraneos de VtaPresupuesto */ 	
	static function getVtaPresupuestoInsInsumosXVtaPresupuestos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getVtaPresupuestoInsInsumosXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado por una coleccion de objetos foraneos de GralTipoIva */ 	
	static function getVtaPresupuestoInsInsumosXGralTipoIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_GRAL_TIPO_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado por una coleccion de objetos foraneos de InsListaPrecio */ 	
	static function getVtaPresupuestoInsInsumosXInsListaPrecios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_LISTA_PRECIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsListaPrecioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado por una coleccion de objetos foraneos de InsInsumoCosto */ 	
	static function getVtaPresupuestoInsInsumosXInsInsumoCostos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_COSTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoCostoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado por una coleccion de objetos foraneos de VtaPoliticaDescuento */ 	
	static function getVtaPresupuestoInsInsumosXVtaPoliticaDescuentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPoliticaDescuentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado por una coleccion de objetos foraneos de VtaPoliticaDescuentoRango */ 	
	static function getVtaPresupuestoInsInsumosXVtaPoliticaDescuentoRangos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPoliticaDescuentoRangoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaPresupuestoInsInsumos filtrado por una coleccion de objetos foraneos de InsInsumoBulto */ 	
	static function getVtaPresupuestoInsInsumosXInsInsumoBultos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaPresupuestoInsInsumo::GEN_ATTR_INS_INSUMO_BULTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
            $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoBultoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_presupuesto_ins_insumo_adm.php';
            $url_gestion = 'vta_presupuesto_ins_insumo_gestion.php';
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
	

	/* Metodo getVtaPresupuestoConflictos */ 	
	public function getVtaPresupuestoConflictos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoConflicto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoConflicto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoConflicto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoConflicto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoConflicto::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoConflicto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoConflicto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoConflicto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestoconflictos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestoconflicto = VtaPresupuestoConflicto::hidratarObjeto($fila);			
                $vtapresupuestoconflictos[] = $vtapresupuestoconflicto;
            }

            return $vtapresupuestoconflictos;
	}	
	

	/* Método getVtaPresupuestoConflictosBloque para MasInfo */ 	
	public function getVtaPresupuestoConflictosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoConflictos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoConflictos Habilitados */ 	
	public function getVtaPresupuestoConflictosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoConflictos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoConflicto */ 	
	public function getVtaPresupuestoConflicto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoConflictos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoConflicto relacionadas */ 	
	public function deleteVtaPresupuestoConflictos(){
            $obs = $this->getVtaPresupuestoConflictos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoConflictosCmb() VtaPresupuestoConflicto relacionadas */ 	
	public function getVtaPresupuestoConflictosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoConflicto::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoConflicto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoConflicto::getVtaPresupuestoConflictosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de VtaPresupuestoConflicto */ 	
	public function getUsUsuariosXVtaPresupuestoConflicto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoConflicto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoConflicto::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoConflicto::GEN_TABLA, VtaPresupuestoConflicto::GEN_ATTR_US_USUARIO_RESOLUCION, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de VtaPresupuestoConflicto */ 	
	public function getCantidadUsUsuariosXVtaPresupuestoConflicto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoConflicto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoConflicto::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoConflicto::GEN_TABLA, VtaPresupuestoConflicto::GEN_ATTR_US_USUARIO_RESOLUCION, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de VtaPresupuestoConflicto */ 	
	public function getUsUsuarioXVtaPresupuestoConflicto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXVtaPresupuestoConflicto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoCancelacions */ 	
	public function getVtaPresupuestoCancelacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoCancelacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoCancelacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoCancelacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoCancelacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoCancelacion::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoCancelacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoCancelacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoCancelacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestocancelacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestocancelacion = VtaPresupuestoCancelacion::hidratarObjeto($fila);			
                $vtapresupuestocancelacions[] = $vtapresupuestocancelacion;
            }

            return $vtapresupuestocancelacions;
	}	
	

	/* Método getVtaPresupuestoCancelacionsBloque para MasInfo */ 	
	public function getVtaPresupuestoCancelacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoCancelacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoCancelacions Habilitados */ 	
	public function getVtaPresupuestoCancelacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoCancelacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoCancelacion */ 	
	public function getVtaPresupuestoCancelacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoCancelacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoCancelacion relacionadas */ 	
	public function deleteVtaPresupuestoCancelacions(){
            $obs = $this->getVtaPresupuestoCancelacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoCancelacionsCmb() VtaPresupuestoCancelacion relacionadas */ 	
	public function getVtaPresupuestoCancelacionsCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoCancelacion::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoCancelacion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoCancelacion::getVtaPresupuestoCancelacionsCmbF(null, $c);
            return $os;
	}

	/* Metodo getVtaOrdenVentas */ 	
	public function getVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventa = VtaOrdenVenta::hidratarObjeto($fila);			
                $vtaordenventas[] = $vtaordenventa;
            }

            return $vtaordenventas;
	}	
	

	/* Método getVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentas Habilitados */ 	
	public function getVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVenta */ 	
	public function getVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVenta relacionadas */ 	
	public function deleteVtaOrdenVentas(){
            $obs = $this->getVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentasCmb() VtaOrdenVenta relacionadas */ 	
	public function getVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaOrdenVenta */ 	
	public function getCantidadVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestoXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdOrdenTrabajos */ 	
	public function getPrdOrdenTrabajos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajo = PrdOrdenTrabajo::hidratarObjeto($fila);			
                $prdordentrabajos[] = $prdordentrabajo;
            }

            return $prdordentrabajos;
	}	
	

	/* Método getPrdOrdenTrabajosBloque para MasInfo */ 	
	public function getPrdOrdenTrabajosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajos Habilitados */ 	
	public function getPrdOrdenTrabajosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajo */ 	
	public function getPrdOrdenTrabajo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajo relacionadas */ 	
	public function deletePrdOrdenTrabajos(){
            $obs = $this->getPrdOrdenTrabajos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajosCmb() PrdOrdenTrabajo relacionadas */ 	
	public function getPrdOrdenTrabajosCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de PrdOrdenTrabajo */ 	
	public function getVtaPresupuestosXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajo::GEN_TABLA, PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de PrdOrdenTrabajo */ 	
	public function getCantidadVtaPresupuestosXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajo::GEN_TABLA, PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de PrdOrdenTrabajo */ 	
	public function getVtaPresupuestoXPrdOrdenTrabajo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXPrdOrdenTrabajo($paginador, $criterio, $estado, $arr_ordens);
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

	/* Metodo que retorna el InsListaPrecio (Clave Foranea) */ 	
    public function getInsListaPrecio(){
        $o = new InsListaPrecio();
        $o->setId($this->getInsListaPrecioId());
        return $o;			
    }

	/* Metodo que retorna el InsListaPrecio (Clave Foranea) en Array */ 	
    public function getInsListaPrecioEnArray(&$arr_os){
        if($this->getInsListaPrecioId() != 'null'){
            if(isset($arr_os[$this->getInsListaPrecioId()])){
                $o = $arr_os[$this->getInsListaPrecioId()];
            }else{
                $o = InsListaPrecio::getOxId($this->getInsListaPrecioId());
                if($o){
                    $arr_os[$this->getInsListaPrecioId()] = $o;
                }
            }
        }else{
            $o = new InsListaPrecio();
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
            		
        if($contexto_solicitante != InsListaPrecio::GEN_CLASE){
            if($this->getInsListaPrecio()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsListaPrecio::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsListaPrecio()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_presupuesto_ins_insumo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_presupuesto_ins_insumo';");
            
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

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_lista_precio_id' */ 	
	static function getOxInsListaPrecioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_LISTA_PRECIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_lista_precio_id' */ 	
	static function getOsxInsListaPrecioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_LISTA_PRECIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_unitario' */ 	
	static function getOxImporteUnitario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNITARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descuento' */ 	
	static function getOxDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'conflicto' */ 	
	static function getOxConflicto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CONFLICTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_costo_id' */ 	
	static function getOxInsInsumoCostoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_COSTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_costo' */ 	
	static function getOxImporteCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_politica_descuento_id' */ 	
	static function getOxVtaPoliticaDescuentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_politica_descuento_rango_id' */ 	
	static function getOxVtaPoliticaDescuentoRangoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_POLITICA_DESCUENTO_RANGO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_politica_descuento' */ 	
	static function getOxPorcentajePoliticaDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_POLITICA_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_politica_descuento' */ 	
	static function getOxImportePoliticaDescuento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_POLITICA_DESCUENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_comision' */ 	
	static function getOxPorcentajeComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_comision' */ 	
	static function getOxImporteComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_bulto_id' */ 	
	static function getOxInsInsumoBultoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_BULTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_bulto' */ 	
	static function getOxCantidadBulto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_BULTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_descuento_bulto' */ 	
	static function getOxImporteDescuentoBulto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_DESCUENTO_BULTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'importe_descuento_bulto' */ 	
	static function getOsxImporteDescuentoBulto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_DESCUENTO_BULTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_descuento_bulto' */ 	
	static function getOxPorcentajeDescuentoBulto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_DESCUENTO_BULTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_descuento_bulto' */ 	
	static function getOsxPorcentajeDescuentoBulto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_DESCUENTO_BULTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'proporcion_iva' */ 	
	static function getOxProporcionIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PROPORCION_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos(null, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
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

            $obs = self::getVtaPresupuestoInsInsumos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_presupuesto_ins_insumo_adm');
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
                $c->addTabla(VtaPresupuestoInsInsumo::GEN_TABLA);
                $c->addOrden(VtaPresupuestoInsInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_presupuesto_ins_insumos = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumos(null, $c);

                $arr = array();
                foreach($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
                    $descripcion = $vta_presupuesto_ins_insumo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>