<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaFacturaVtaOrdenVenta
{ 
	
	const SES_PAGINACION = 'adm_vtafacturavtaordenventa_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtafacturavtaordenventa_paginas_registros';
	const SES_CRITERIOS = 'adm_vtafacturavtaordenventa_criterios';
	
	const GEN_CLASE = 'VtaFacturaVtaOrdenVenta';
	const GEN_TABLA = 'vta_factura_vta_orden_venta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaFacturaVtaOrdenVenta */ 
	const GEN_ATTR_ID = 'vta_factura_vta_orden_venta.id';
	const GEN_ATTR_DESCRIPCION = 'vta_factura_vta_orden_venta.descripcion';
	const GEN_ATTR_VTA_FACTURA_ID = 'vta_factura_vta_orden_venta.vta_factura_id';
	const GEN_ATTR_VTA_ORDEN_VENTA_ID = 'vta_factura_vta_orden_venta.vta_orden_venta_id';
	const GEN_ATTR_INS_INSUMO_ID = 'vta_factura_vta_orden_venta.ins_insumo_id';
	const GEN_ATTR_INS_UNIDAD_MEDIDA_ID = 'vta_factura_vta_orden_venta.ins_unidad_medida_id';
	const GEN_ATTR_GRAL_TIPO_IVA_ID = 'vta_factura_vta_orden_venta.gral_tipo_iva_id';
	const GEN_ATTR_IMPORTE_UNITARIO = 'vta_factura_vta_orden_venta.importe_unitario';
	const GEN_ATTR_CANTIDAD = 'vta_factura_vta_orden_venta.cantidad';
	const GEN_ATTR_INS_INSUMO_COSTO_ID = 'vta_factura_vta_orden_venta.ins_insumo_costo_id';
	const GEN_ATTR_IMPORTE_COSTO = 'vta_factura_vta_orden_venta.importe_costo';
	const GEN_ATTR_PROPORCION_IVA = 'vta_factura_vta_orden_venta.proporcion_iva';
	const GEN_ATTR_CODIGO = 'vta_factura_vta_orden_venta.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_factura_vta_orden_venta.observacion';
	const GEN_ATTR_ORDEN = 'vta_factura_vta_orden_venta.orden';
	const GEN_ATTR_ESTADO = 'vta_factura_vta_orden_venta.estado';
	const GEN_ATTR_CREADO = 'vta_factura_vta_orden_venta.creado';
	const GEN_ATTR_CREADO_POR = 'vta_factura_vta_orden_venta.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_factura_vta_orden_venta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_factura_vta_orden_venta.modificado_por';

	/* Constantes de Atributos Min de BVtaFacturaVtaOrdenVenta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_FACTURA_ID = 'vta_factura_id';
	const GEN_ATTR_MIN_VTA_ORDEN_VENTA_ID = 'vta_orden_venta_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID = 'ins_unidad_medida_id';
	const GEN_ATTR_MIN_GRAL_TIPO_IVA_ID = 'gral_tipo_iva_id';
	const GEN_ATTR_MIN_IMPORTE_UNITARIO = 'importe_unitario';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_INS_INSUMO_COSTO_ID = 'ins_insumo_costo_id';
	const GEN_ATTR_MIN_IMPORTE_COSTO = 'importe_costo';
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
	

	/* Atributos de BVtaFacturaVtaOrdenVenta */ 
	private $id;
	private $descripcion;
	private $vta_factura_id;
	private $vta_orden_venta_id;
	private $ins_insumo_id;
	private $ins_unidad_medida_id;
	private $gral_tipo_iva_id;
	private $importe_unitario;
	private $cantidad;
	private $ins_insumo_costo_id;
	private $importe_costo;
	private $proporcion_iva;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaFacturaVtaOrdenVenta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaFacturaId(){ if(isset($this->vta_factura_id)){ return $this->vta_factura_id; }else{ return 'null'; } }
	public function getVtaOrdenVentaId(){ if(isset($this->vta_orden_venta_id)){ return $this->vta_orden_venta_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getInsUnidadMedidaId(){ if(isset($this->ins_unidad_medida_id)){ return $this->ins_unidad_medida_id; }else{ return 'null'; } }
	public function getGralTipoIvaId(){ if(isset($this->gral_tipo_iva_id)){ return $this->gral_tipo_iva_id; }else{ return 'null'; } }
	public function getImporteUnitario(){ if(isset($this->importe_unitario)){ return $this->importe_unitario; }else{ return 0; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getInsInsumoCostoId(){ if(isset($this->ins_insumo_costo_id)){ return $this->ins_insumo_costo_id; }else{ return 'null'; } }
	public function getImporteCosto(){ if(isset($this->importe_costo)){ return $this->importe_costo; }else{ return 0; } }
	public function getProporcionIva(){ if(isset($this->proporcion_iva)){ return $this->proporcion_iva; }else{ return 100; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaFacturaVtaOrdenVenta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_FACTURA_ID."
				, ".self::GEN_ATTR_VTA_ORDEN_VENTA_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_IVA_ID."
				, ".self::GEN_ATTR_IMPORTE_UNITARIO."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_INS_INSUMO_COSTO_ID."
				, ".self::GEN_ATTR_IMPORTE_COSTO."
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
				$this->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
				$this->setVtaOrdenVentaId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_ID]);
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
				$this->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
				$this->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
				$this->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
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
	public function setVtaFacturaId($v){ $this->vta_factura_id = $v; }
	public function setVtaOrdenVentaId($v){ $this->vta_orden_venta_id = $v; }
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setInsUnidadMedidaId($v){ $this->ins_unidad_medida_id = $v; }
	public function setGralTipoIvaId($v){ $this->gral_tipo_iva_id = $v; }
	public function setImporteUnitario($v){ $this->importe_unitario = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setInsInsumoCostoId($v){ $this->ins_insumo_costo_id = $v; }
	public function setImporteCosto($v){ $this->importe_costo = $v; }
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
            $o = new VtaFacturaVtaOrdenVenta();
            $o->setId($fila[VtaFacturaVtaOrdenVenta::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
			$o->setVtaOrdenVentaId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
			$o->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$o->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
			$o->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
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

	/* Control de BVtaFacturaVtaOrdenVenta */ 	
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

	/* Cambia el estado de BVtaFacturaVtaOrdenVenta */ 	
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

	/* Save de BVtaFacturaVtaOrdenVenta */ 	
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
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO."
						, ".self::GEN_ATTR_MIN_PROPORCION_IVA."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_factura_vta_orden_venta_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaFacturaId()."
						, ".$this->getVtaOrdenVentaId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getInsUnidadMedidaId()."
						, ".$this->getGralTipoIvaId()."
						, '".$this->getImporteUnitario()."'
						, '".$this->getCantidad()."'
						, ".$this->getInsInsumoCostoId()."
						, '".$this->getImporteCosto()."'
						, ".$this->getProporcionIva()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_factura_vta_orden_venta_seq')";
            
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
                 
				 ".VtaFacturaVtaOrdenVenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID." = ".$this->getVtaFacturaId()."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_ID." = ".$this->getVtaOrdenVentaId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID." = ".$this->getInsUnidadMedidaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO." = '".$this->getImporteUnitario()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID." = ".$this->getInsInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO." = '".$this->getImporteCosto()."'
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
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO."
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
						, ".$this->getVtaFacturaId()."
						, ".$this->getVtaOrdenVentaId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getInsUnidadMedidaId()."
						, ".$this->getGralTipoIvaId()."
						, '".$this->getImporteUnitario()."'
						, '".$this->getCantidad()."'
						, ".$this->getInsInsumoCostoId()."
						, '".$this->getImporteCosto()."'
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
                     
				 ".VtaFacturaVtaOrdenVenta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_FACTURA_ID." = ".$this->getVtaFacturaId()."
						, ".self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_ID." = ".$this->getVtaOrdenVentaId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID." = ".$this->getInsUnidadMedidaId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID." = ".$this->getGralTipoIvaId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNITARIO." = '".$this->getImporteUnitario()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID." = ".$this->getInsInsumoCostoId()."
						, ".self::GEN_ATTR_MIN_IMPORTE_COSTO." = '".$this->getImporteCosto()."'
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
            $o = new VtaFacturaVtaOrdenVenta();
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

	/* Delete de BVtaFacturaVtaOrdenVenta */ 	
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
	
            // se elimina la coleccion de VtaNotaCreditoVtaFacturaVtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaFacturaVtaOrdenVenta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaFacturaVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaFacturaVtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtafacturavtaordenventas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtafacturavtaordenventa = new VtaFacturaVtaOrdenVenta();
                    $vtafacturavtaordenventa->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtafacturavtaordenventa->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtafacturavtaordenventa->setVtaFacturaId($fila[self::GEN_ATTR_MIN_VTA_FACTURA_ID]);
			$vtafacturavtaordenventa->setVtaOrdenVentaId($fila[self::GEN_ATTR_MIN_VTA_ORDEN_VENTA_ID]);
			$vtafacturavtaordenventa->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$vtafacturavtaordenventa->setInsUnidadMedidaId($fila[self::GEN_ATTR_MIN_INS_UNIDAD_MEDIDA_ID]);
			$vtafacturavtaordenventa->setGralTipoIvaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_IVA_ID]);
			$vtafacturavtaordenventa->setImporteUnitario($fila[self::GEN_ATTR_MIN_IMPORTE_UNITARIO]);
			$vtafacturavtaordenventa->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$vtafacturavtaordenventa->setInsInsumoCostoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_COSTO_ID]);
			$vtafacturavtaordenventa->setImporteCosto($fila[self::GEN_ATTR_MIN_IMPORTE_COSTO]);
			$vtafacturavtaordenventa->setProporcionIva($fila[self::GEN_ATTR_MIN_PROPORCION_IVA]);
			$vtafacturavtaordenventa->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtafacturavtaordenventa->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtafacturavtaordenventa->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtafacturavtaordenventa->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtafacturavtaordenventa->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtafacturavtaordenventa->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtafacturavtaordenventa->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtafacturavtaordenventa->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtafacturavtaordenventas[] = $vtafacturavtaordenventa;
		}
		
		return $vtafacturavtaordenventas;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentas Habilitados */ 	
	static function getVtaFacturaVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaFacturaVtaOrdenVentas para listado de Backend */ 	
	static function getVtaFacturaVtaOrdenVentasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaFacturaVtaOrdenVentasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaFacturaVtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentas filtrado para select */ 	
	static function getVtaFacturaVtaOrdenVentasCmbF($paginador = null, $criterio = null){
            $col = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaFactura */ 	
	static function getVtaFacturaVtaOrdenVentasXVtaFacturas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaFacturaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentas filtrado por una coleccion de objetos foraneos de VtaOrdenVenta */ 	
	static function getVtaFacturaVtaOrdenVentasXVtaOrdenVentas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaOrdenVentaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentas filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getVtaFacturaVtaOrdenVentasXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentas filtrado por una coleccion de objetos foraneos de InsUnidadMedida */ 	
	static function getVtaFacturaVtaOrdenVentasXInsUnidadMedidas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsUnidadMedidaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentas filtrado por una coleccion de objetos foraneos de GralTipoIva */ 	
	static function getVtaFacturaVtaOrdenVentasXGralTipoIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaFacturaVtaOrdenVentas filtrado por una coleccion de objetos foraneos de InsInsumoCosto */ 	
	static function getVtaFacturaVtaOrdenVentasXInsInsumoCostos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_COSTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoCostoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_factura_vta_orden_venta_adm.php';
            $url_gestion = 'vta_factura_vta_orden_venta_gestion.php';
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
	

	/* Metodo getVtaNotaCreditoVtaFacturaVtaOrdenVentas */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaNotaCreditoVtaFacturaVtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaNotaCreditoVtaFacturaVtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtanotacreditovtafacturavtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtanotacreditovtafacturavtaordenventa = VtaNotaCreditoVtaFacturaVtaOrdenVenta::hidratarObjeto($fila);			
                $vtanotacreditovtafacturavtaordenventas[] = $vtanotacreditovtafacturavtaordenventa;
            }

            return $vtanotacreditovtafacturavtaordenventas;
	}	
	

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVentas Habilitados */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaNotaCreditoVtaFacturaVtaOrdenVenta relacionadas */ 	
	public function deleteVtaNotaCreditoVtaFacturaVtaOrdenVentas(){
            $obs = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb() VtaNotaCreditoVtaFacturaVtaOrdenVenta relacionadas */ 	
	public function getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaNotaCreditos (Coleccion) relacionados a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaNotaCreditos relacionados a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getCantidadVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaNotaCredito::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaNotaCredito::GEN_TABLA);
            $c->addRealJoin(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_NOTA_CREDITO_ID, VtaNotaCredito::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaNotaCredito (Objeto) relacionado a traves de VtaNotaCreditoVtaFacturaVtaOrdenVenta */ 	
	public function getVtaNotaCreditoXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaNotaCreditosXVtaNotaCreditoVtaFacturaVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el VtaFactura (Clave Foranea) */ 	
    public function getVtaFactura(){
        $o = new VtaFactura();
        $o->setId($this->getVtaFacturaId());
        return $o;			
    }

	/* Metodo que retorna el VtaFactura (Clave Foranea) en Array */ 	
    public function getVtaFacturaEnArray(&$arr_os){
        if($this->getVtaFacturaId() != 'null'){
            if(isset($arr_os[$this->getVtaFacturaId()])){
                $o = $arr_os[$this->getVtaFacturaId()];
            }else{
                $o = VtaFactura::getOxId($this->getVtaFacturaId());
                if($o){
                    $arr_os[$this->getVtaFacturaId()] = $o;
                }
            }
        }else{
            $o = new VtaFactura();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaOrdenVenta (Clave Foranea) */ 	
    public function getVtaOrdenVenta(){
        $o = new VtaOrdenVenta();
        $o->setId($this->getVtaOrdenVentaId());
        return $o;			
    }

	/* Metodo que retorna el VtaOrdenVenta (Clave Foranea) en Array */ 	
    public function getVtaOrdenVentaEnArray(&$arr_os){
        if($this->getVtaOrdenVentaId() != 'null'){
            if(isset($arr_os[$this->getVtaOrdenVentaId()])){
                $o = $arr_os[$this->getVtaOrdenVentaId()];
            }else{
                $o = VtaOrdenVenta::getOxId($this->getVtaOrdenVentaId());
                if($o){
                    $arr_os[$this->getVtaOrdenVentaId()] = $o;
                }
            }
        }else{
            $o = new VtaOrdenVenta();
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

	/* Metodo que retorna el InsUnidadMedida (Clave Foranea) */ 	
    public function getInsUnidadMedida(){
        $o = new InsUnidadMedida();
        $o->setId($this->getInsUnidadMedidaId());
        return $o;			
    }

	/* Metodo que retorna el InsUnidadMedida (Clave Foranea) en Array */ 	
    public function getInsUnidadMedidaEnArray(&$arr_os){
        if($this->getInsUnidadMedidaId() != 'null'){
            if(isset($arr_os[$this->getInsUnidadMedidaId()])){
                $o = $arr_os[$this->getInsUnidadMedidaId()];
            }else{
                $o = InsUnidadMedida::getOxId($this->getInsUnidadMedidaId());
                if($o){
                    $arr_os[$this->getInsUnidadMedidaId()] = $o;
                }
            }
        }else{
            $o = new InsUnidadMedida();
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
            		
        if($contexto_solicitante != VtaFactura::GEN_CLASE){
            if($this->getVtaFactura()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaFactura::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaFactura()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaOrdenVenta::GEN_CLASE){
            if($this->getVtaOrdenVenta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaOrdenVenta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaOrdenVenta()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != InsUnidadMedida::GEN_CLASE){
            if($this->getInsUnidadMedida()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsUnidadMedida::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsUnidadMedida()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != InsInsumoCosto::GEN_CLASE){
            if($this->getInsInsumoCosto()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsInsumoCosto::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsInsumoCosto()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_factura_vta_orden_venta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_factura_vta_orden_venta';");
            
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

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_factura_id' */ 	
	static function getOxVtaFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_factura_id' */ 	
	static function getOsxVtaFacturaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_FACTURA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_orden_venta_id' */ 	
	static function getOxVtaOrdenVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_ORDEN_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_orden_venta_id' */ 	
	static function getOsxVtaOrdenVentaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_ORDEN_VENTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_unidad_medida_id' */ 	
	static function getOxInsUnidadMedidaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_unidad_medida_id' */ 	
	static function getOsxInsUnidadMedidaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_iva_id' */ 	
	static function getOxGralTipoIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_unitario' */ 	
	static function getOxImporteUnitario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNITARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_costo_id' */ 	
	static function getOxInsInsumoCostoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_COSTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_costo' */ 	
	static function getOxImporteCosto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_COSTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'proporcion_iva' */ 	
	static function getOxProporcionIva($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PROPORCION_IVA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas(null, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
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

            $obs = self::getVtaFacturaVtaOrdenVentas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_factura_vta_orden_venta_adm');
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
                $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
                $c->addOrden(VtaFacturaVtaOrdenVenta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_factura_vta_orden_ventas = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas(null, $c);

                $arr = array();
                foreach($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta){
                    $descripcion = $vta_factura_vta_orden_venta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>