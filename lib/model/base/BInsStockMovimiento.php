<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BInsStockMovimiento
{ 
	
	const SES_PAGINACION = 'adm_insstockmovimiento_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_insstockmovimiento_paginas_registros';
	const SES_CRITERIOS = 'adm_insstockmovimiento_criterios';
	
	const GEN_CLASE = 'InsStockMovimiento';
	const GEN_TABLA = 'ins_stock_movimiento';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BInsStockMovimiento */ 
	const GEN_ATTR_ID = 'ins_stock_movimiento.id';
	const GEN_ATTR_DESCRIPCION = 'ins_stock_movimiento.descripcion';
	const GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID = 'ins_stock_movimiento.ins_stock_tipo_movimiento_id';
	const GEN_ATTR_INS_INSUMO_ID = 'ins_stock_movimiento.ins_insumo_id';
	const GEN_ATTR_PDI_PEDIDO_ID = 'ins_stock_movimiento.pdi_pedido_id';
	const GEN_ATTR_PAN_PANOL_ID = 'ins_stock_movimiento.pan_panol_id';
	const GEN_ATTR_CODIGO = 'ins_stock_movimiento.codigo';
	const GEN_ATTR_CANTIDAD = 'ins_stock_movimiento.cantidad';
	const GEN_ATTR_CANTIDAD_REAL = 'ins_stock_movimiento.cantidad_real';
	const GEN_ATTR_CANTIDAD_COMPROMETIDA = 'ins_stock_movimiento.cantidad_comprometida';
	const GEN_ATTR_CANTIDAD_PASIVO = 'ins_stock_movimiento.cantidad_pasivo';
	const GEN_ATTR_FECHAHORA = 'ins_stock_movimiento.fechahora';
	const GEN_ATTR_VTA_REMITO_ID = 'ins_stock_movimiento.vta_remito_id';
	const GEN_ATTR_PDE_RECEPCION_ID = 'ins_stock_movimiento.pde_recepcion_id';
	const GEN_ATTR_INS_STOCK_TRANSFORMACION_ID = 'ins_stock_movimiento.ins_stock_transformacion_id';
	const GEN_ATTR_OBSERVACION = 'ins_stock_movimiento.observacion';
	const GEN_ATTR_ORDEN = 'ins_stock_movimiento.orden';
	const GEN_ATTR_ESTADO = 'ins_stock_movimiento.estado';
	const GEN_ATTR_CREADO = 'ins_stock_movimiento.creado';
	const GEN_ATTR_CREADO_POR = 'ins_stock_movimiento.creado_por';
	const GEN_ATTR_MODIFICADO = 'ins_stock_movimiento.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'ins_stock_movimiento.modificado_por';

	/* Constantes de Atributos Min de BInsStockMovimiento */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_INS_STOCK_TIPO_MOVIMIENTO_ID = 'ins_stock_tipo_movimiento_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_PDI_PEDIDO_ID = 'pdi_pedido_id';
	const GEN_ATTR_MIN_PAN_PANOL_ID = 'pan_panol_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_CANTIDAD_REAL = 'cantidad_real';
	const GEN_ATTR_MIN_CANTIDAD_COMPROMETIDA = 'cantidad_comprometida';
	const GEN_ATTR_MIN_CANTIDAD_PASIVO = 'cantidad_pasivo';
	const GEN_ATTR_MIN_FECHAHORA = 'fechahora';
	const GEN_ATTR_MIN_VTA_REMITO_ID = 'vta_remito_id';
	const GEN_ATTR_MIN_PDE_RECEPCION_ID = 'pde_recepcion_id';
	const GEN_ATTR_MIN_INS_STOCK_TRANSFORMACION_ID = 'ins_stock_transformacion_id';
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
	

	/* Atributos de BInsStockMovimiento */ 
	private $id;
	private $descripcion;
	private $ins_stock_tipo_movimiento_id;
	private $ins_insumo_id;
	private $pdi_pedido_id;
	private $pan_panol_id;
	private $codigo;
	private $cantidad;
	private $cantidad_real;
	private $cantidad_comprometida;
	private $cantidad_pasivo;
	private $fechahora;
	private $vta_remito_id;
	private $pde_recepcion_id;
	private $ins_stock_transformacion_id;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BInsStockMovimiento */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getInsStockTipoMovimientoId(){ if(isset($this->ins_stock_tipo_movimiento_id)){ return $this->ins_stock_tipo_movimiento_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getPdiPedidoId(){ if(isset($this->pdi_pedido_id)){ return $this->pdi_pedido_id; }else{ return 'null'; } }
	public function getPanPanolId(){ if(isset($this->pan_panol_id)){ return $this->pan_panol_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getCantidadReal(){ if(isset($this->cantidad_real)){ return $this->cantidad_real; }else{ return 0; } }
	public function getCantidadComprometida(){ if(isset($this->cantidad_comprometida)){ return $this->cantidad_comprometida; }else{ return 0; } }
	public function getCantidadPasivo(){ if(isset($this->cantidad_pasivo)){ return $this->cantidad_pasivo; }else{ return 0; } }
	public function getFechahora(){ if(isset($this->fechahora)){ return $this->fechahora; }else{ return ''; } }
	public function getVtaRemitoId(){ if(isset($this->vta_remito_id)){ return $this->vta_remito_id; }else{ return 'null'; } }
	public function getPdeRecepcionId(){ if(isset($this->pde_recepcion_id)){ return $this->pde_recepcion_id; }else{ return 'null'; } }
	public function getInsStockTransformacionId(){ if(isset($this->ins_stock_transformacion_id)){ return $this->ins_stock_transformacion_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BInsStockMovimiento */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_PDI_PEDIDO_ID."
				, ".self::GEN_ATTR_PAN_PANOL_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_CANTIDAD_REAL."
				, ".self::GEN_ATTR_CANTIDAD_COMPROMETIDA."
				, ".self::GEN_ATTR_CANTIDAD_PASIVO."
				, ".self::GEN_ATTR_FECHAHORA."
				, ".self::GEN_ATTR_VTA_REMITO_ID."
				, ".self::GEN_ATTR_PDE_RECEPCION_ID."
				, ".self::GEN_ATTR_INS_STOCK_TRANSFORMACION_ID."
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
				$this->setInsStockTipoMovimientoId($fila[self::GEN_ATTR_MIN_INS_STOCK_TIPO_MOVIMIENTO_ID]);
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setPdiPedidoId($fila[self::GEN_ATTR_MIN_PDI_PEDIDO_ID]);
				$this->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setCantidadReal($fila[self::GEN_ATTR_MIN_CANTIDAD_REAL]);
				$this->setCantidadComprometida($fila[self::GEN_ATTR_MIN_CANTIDAD_COMPROMETIDA]);
				$this->setCantidadPasivo($fila[self::GEN_ATTR_MIN_CANTIDAD_PASIVO]);
				$this->setFechahora($fila[self::GEN_ATTR_MIN_FECHAHORA]);
				$this->setVtaRemitoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_ID]);
				$this->setPdeRecepcionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_ID]);
				$this->setInsStockTransformacionId($fila[self::GEN_ATTR_MIN_INS_STOCK_TRANSFORMACION_ID]);
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
	public function setInsStockTipoMovimientoId($v){ $this->ins_stock_tipo_movimiento_id = $v; }
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setPdiPedidoId($v){ $this->pdi_pedido_id = $v; }
	public function setPanPanolId($v){ $this->pan_panol_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setCantidadReal($v){ $this->cantidad_real = $v; }
	public function setCantidadComprometida($v){ $this->cantidad_comprometida = $v; }
	public function setCantidadPasivo($v){ $this->cantidad_pasivo = $v; }
	public function setFechahora($v){ $this->fechahora = $v; }
	public function setVtaRemitoId($v){ $this->vta_remito_id = $v; }
	public function setPdeRecepcionId($v){ $this->pde_recepcion_id = $v; }
	public function setInsStockTransformacionId($v){ $this->ins_stock_transformacion_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new InsStockMovimiento();
            $o->setId($fila[InsStockMovimiento::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setInsStockTipoMovimientoId($fila[self::GEN_ATTR_MIN_INS_STOCK_TIPO_MOVIMIENTO_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setPdiPedidoId($fila[self::GEN_ATTR_MIN_PDI_PEDIDO_ID]);
			$o->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setCantidadReal($fila[self::GEN_ATTR_MIN_CANTIDAD_REAL]);
			$o->setCantidadComprometida($fila[self::GEN_ATTR_MIN_CANTIDAD_COMPROMETIDA]);
			$o->setCantidadPasivo($fila[self::GEN_ATTR_MIN_CANTIDAD_PASIVO]);
			$o->setFechahora($fila[self::GEN_ATTR_MIN_FECHAHORA]);
			$o->setVtaRemitoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_ID]);
			$o->setPdeRecepcionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_ID]);
			$o->setInsStockTransformacionId($fila[self::GEN_ATTR_MIN_INS_STOCK_TRANSFORMACION_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BInsStockMovimiento */ 	
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

	/* Cambia el estado de BInsStockMovimiento */ 	
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

	/* Save de BInsStockMovimiento */ 	
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
						, ".self::GEN_ATTR_MIN_INS_STOCK_TIPO_MOVIMIENTO_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PDI_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_CANTIDAD_REAL."
						, ".self::GEN_ATTR_MIN_CANTIDAD_COMPROMETIDA."
						, ".self::GEN_ATTR_MIN_CANTIDAD_PASIVO."
						, ".self::GEN_ATTR_MIN_FECHAHORA."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_INS_STOCK_TRANSFORMACION_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('ins_stock_movimiento_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getInsStockTipoMovimientoId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPdiPedidoId()."
						, ".$this->getPanPanolId()."
						, '".$this->getCodigo()."'
						, '".$this->getCantidad()."'
						, '".$this->getCantidadReal()."'
						, '".$this->getCantidadComprometida()."'
						, '".$this->getCantidadPasivo()."'
						, '".$this->getFechahora()."'
						, ".$this->getVtaRemitoId()."
						, ".$this->getPdeRecepcionId()."
						, ".$this->getInsStockTransformacionId()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('ins_stock_movimiento_seq')";
            
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
                 
				 ".InsStockMovimiento::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_INS_STOCK_TIPO_MOVIMIENTO_ID." = ".$this->getInsStockTipoMovimientoId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PDI_PEDIDO_ID." = ".$this->getPdiPedidoId()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID." = ".$this->getPanPanolId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_REAL." = '".$this->getCantidadReal()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_COMPROMETIDA." = '".$this->getCantidadComprometida()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_PASIVO." = '".$this->getCantidadPasivo()."'
						, ".self::GEN_ATTR_MIN_FECHAHORA." = '".$this->getFechahora()."'
						, ".self::GEN_ATTR_MIN_VTA_REMITO_ID." = ".$this->getVtaRemitoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_ID." = ".$this->getPdeRecepcionId()."
						, ".self::GEN_ATTR_MIN_INS_STOCK_TRANSFORMACION_ID." = ".$this->getInsStockTransformacionId()."
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
						, ".self::GEN_ATTR_MIN_INS_STOCK_TIPO_MOVIMIENTO_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PDI_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_CANTIDAD_REAL."
						, ".self::GEN_ATTR_MIN_CANTIDAD_COMPROMETIDA."
						, ".self::GEN_ATTR_MIN_CANTIDAD_PASIVO."
						, ".self::GEN_ATTR_MIN_FECHAHORA."
						, ".self::GEN_ATTR_MIN_VTA_REMITO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_INS_STOCK_TRANSFORMACION_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getInsStockTipoMovimientoId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPdiPedidoId()."
						, ".$this->getPanPanolId()."
						, '".$this->getCodigo()."'
						, '".$this->getCantidad()."'
						, '".$this->getCantidadReal()."'
						, '".$this->getCantidadComprometida()."'
						, '".$this->getCantidadPasivo()."'
						, '".$this->getFechahora()."'
						, ".$this->getVtaRemitoId()."
						, ".$this->getPdeRecepcionId()."
						, ".$this->getInsStockTransformacionId()."
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
                     
				 ".InsStockMovimiento::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_INS_STOCK_TIPO_MOVIMIENTO_ID." = ".$this->getInsStockTipoMovimientoId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PDI_PEDIDO_ID." = ".$this->getPdiPedidoId()."
						, ".self::GEN_ATTR_MIN_PAN_PANOL_ID." = ".$this->getPanPanolId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_REAL." = '".$this->getCantidadReal()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_COMPROMETIDA." = '".$this->getCantidadComprometida()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD_PASIVO." = '".$this->getCantidadPasivo()."'
						, ".self::GEN_ATTR_MIN_FECHAHORA." = '".$this->getFechahora()."'
						, ".self::GEN_ATTR_MIN_VTA_REMITO_ID." = ".$this->getVtaRemitoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_ID." = ".$this->getPdeRecepcionId()."
						, ".self::GEN_ATTR_MIN_INS_STOCK_TRANSFORMACION_ID." = ".$this->getInsStockTransformacionId()."
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
            $o = new InsStockMovimiento();
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

	/* Delete de BInsStockMovimiento */ 	
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
	
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarInsStockMovimiento(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getInsStockMovimientos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = InsStockMovimiento::setAplicarFiltrosDeAlcance($criterio);

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
	
		$insstockmovimientos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $insstockmovimiento = new InsStockMovimiento();
                    $insstockmovimiento->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $insstockmovimiento->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$insstockmovimiento->setInsStockTipoMovimientoId($fila[self::GEN_ATTR_MIN_INS_STOCK_TIPO_MOVIMIENTO_ID]);
			$insstockmovimiento->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$insstockmovimiento->setPdiPedidoId($fila[self::GEN_ATTR_MIN_PDI_PEDIDO_ID]);
			$insstockmovimiento->setPanPanolId($fila[self::GEN_ATTR_MIN_PAN_PANOL_ID]);
			$insstockmovimiento->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$insstockmovimiento->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$insstockmovimiento->setCantidadReal($fila[self::GEN_ATTR_MIN_CANTIDAD_REAL]);
			$insstockmovimiento->setCantidadComprometida($fila[self::GEN_ATTR_MIN_CANTIDAD_COMPROMETIDA]);
			$insstockmovimiento->setCantidadPasivo($fila[self::GEN_ATTR_MIN_CANTIDAD_PASIVO]);
			$insstockmovimiento->setFechahora($fila[self::GEN_ATTR_MIN_FECHAHORA]);
			$insstockmovimiento->setVtaRemitoId($fila[self::GEN_ATTR_MIN_VTA_REMITO_ID]);
			$insstockmovimiento->setPdeRecepcionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_ID]);
			$insstockmovimiento->setInsStockTransformacionId($fila[self::GEN_ATTR_MIN_INS_STOCK_TRANSFORMACION_ID]);
			$insstockmovimiento->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$insstockmovimiento->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$insstockmovimiento->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$insstockmovimiento->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$insstockmovimiento->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$insstockmovimiento->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$insstockmovimiento->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $insstockmovimientos[] = $insstockmovimiento;
		}
		
		return $insstockmovimientos;
	}	
	

	/* Método getInsStockMovimientos Habilitados */ 	
	static function getInsStockMovimientosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return InsStockMovimiento::getInsStockMovimientos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getInsStockMovimientos para listado de Backend */ 	
	static function getInsStockMovimientosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return InsStockMovimiento::getInsStockMovimientos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getInsStockMovimientosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = InsStockMovimiento::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = InsStockMovimiento::getInsStockMovimientos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsStockMovimientos filtrado para select */ 	
	static function getInsStockMovimientosCmbF($paginador = null, $criterio = null){
            $col = InsStockMovimiento::getInsStockMovimientos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getInsStockMovimientos filtrado por una coleccion de objetos foraneos de InsStockTipoMovimiento */ 	
	static function getInsStockMovimientosXInsStockTipoMovimientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsStockMovimiento::getInsStockMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsStockTipoMovimientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsStockMovimientos filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getInsStockMovimientosXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsStockMovimiento::getInsStockMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsStockMovimientos filtrado por una coleccion de objetos foraneos de PdiPedido */ 	
	static function getInsStockMovimientosXPdiPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_PDI_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsStockMovimiento::getInsStockMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdiPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsStockMovimientos filtrado por una coleccion de objetos foraneos de PanPanol */ 	
	static function getInsStockMovimientosXPanPanols($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsStockMovimiento::getInsStockMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanPanolId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsStockMovimientos filtrado por una coleccion de objetos foraneos de VtaRemito */ 	
	static function getInsStockMovimientosXVtaRemitos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_VTA_REMITO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsStockMovimiento::getInsStockMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaRemitoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsStockMovimientos filtrado por una coleccion de objetos foraneos de PdeRecepcion */ 	
	static function getInsStockMovimientosXPdeRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_PDE_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsStockMovimiento::getInsStockMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getInsStockMovimientos filtrado por una coleccion de objetos foraneos de InsStockTransformacion */ 	
	static function getInsStockMovimientosXInsStockTransformacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_INS_STOCK_TRANSFORMACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = InsStockMovimiento::getInsStockMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsStockTransformacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'ins_stock_movimiento_adm.php';
            $url_gestion = 'ins_stock_movimiento_gestion.php';
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
	

	/* Metodo que retorna el InsStockTipoMovimiento (Clave Foranea) */ 	
    public function getInsStockTipoMovimiento(){
        $o = new InsStockTipoMovimiento();
        $o->setId($this->getInsStockTipoMovimientoId());
        return $o;			
    }

	/* Metodo que retorna el InsStockTipoMovimiento (Clave Foranea) en Array */ 	
    public function getInsStockTipoMovimientoEnArray(&$arr_os){
        if($this->getInsStockTipoMovimientoId() != 'null'){
            if(isset($arr_os[$this->getInsStockTipoMovimientoId()])){
                $o = $arr_os[$this->getInsStockTipoMovimientoId()];
            }else{
                $o = InsStockTipoMovimiento::getOxId($this->getInsStockTipoMovimientoId());
                if($o){
                    $arr_os[$this->getInsStockTipoMovimientoId()] = $o;
                }
            }
        }else{
            $o = new InsStockTipoMovimiento();
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

	/* Metodo que retorna el PdiPedido (Clave Foranea) */ 	
    public function getPdiPedido(){
        $o = new PdiPedido();
        $o->setId($this->getPdiPedidoId());
        return $o;			
    }

	/* Metodo que retorna el PdiPedido (Clave Foranea) en Array */ 	
    public function getPdiPedidoEnArray(&$arr_os){
        if($this->getPdiPedidoId() != 'null'){
            if(isset($arr_os[$this->getPdiPedidoId()])){
                $o = $arr_os[$this->getPdiPedidoId()];
            }else{
                $o = PdiPedido::getOxId($this->getPdiPedidoId());
                if($o){
                    $arr_os[$this->getPdiPedidoId()] = $o;
                }
            }
        }else{
            $o = new PdiPedido();
        }
        return $o;		
    }

	/* Metodo que retorna el PanPanol (Clave Foranea) */ 	
    public function getPanPanol(){
        $o = new PanPanol();
        $o->setId($this->getPanPanolId());
        return $o;			
    }

	/* Metodo que retorna el PanPanol (Clave Foranea) en Array */ 	
    public function getPanPanolEnArray(&$arr_os){
        if($this->getPanPanolId() != 'null'){
            if(isset($arr_os[$this->getPanPanolId()])){
                $o = $arr_os[$this->getPanPanolId()];
            }else{
                $o = PanPanol::getOxId($this->getPanPanolId());
                if($o){
                    $arr_os[$this->getPanPanolId()] = $o;
                }
            }
        }else{
            $o = new PanPanol();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaRemito (Clave Foranea) */ 	
    public function getVtaRemito(){
        $o = new VtaRemito();
        $o->setId($this->getVtaRemitoId());
        return $o;			
    }

	/* Metodo que retorna el VtaRemito (Clave Foranea) en Array */ 	
    public function getVtaRemitoEnArray(&$arr_os){
        if($this->getVtaRemitoId() != 'null'){
            if(isset($arr_os[$this->getVtaRemitoId()])){
                $o = $arr_os[$this->getVtaRemitoId()];
            }else{
                $o = VtaRemito::getOxId($this->getVtaRemitoId());
                if($o){
                    $arr_os[$this->getVtaRemitoId()] = $o;
                }
            }
        }else{
            $o = new VtaRemito();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeRecepcion (Clave Foranea) */ 	
    public function getPdeRecepcion(){
        $o = new PdeRecepcion();
        $o->setId($this->getPdeRecepcionId());
        return $o;			
    }

	/* Metodo que retorna el PdeRecepcion (Clave Foranea) en Array */ 	
    public function getPdeRecepcionEnArray(&$arr_os){
        if($this->getPdeRecepcionId() != 'null'){
            if(isset($arr_os[$this->getPdeRecepcionId()])){
                $o = $arr_os[$this->getPdeRecepcionId()];
            }else{
                $o = PdeRecepcion::getOxId($this->getPdeRecepcionId());
                if($o){
                    $arr_os[$this->getPdeRecepcionId()] = $o;
                }
            }
        }else{
            $o = new PdeRecepcion();
        }
        return $o;		
    }

	/* Metodo que retorna el InsStockTransformacion (Clave Foranea) */ 	
    public function getInsStockTransformacion(){
        $o = new InsStockTransformacion();
        $o->setId($this->getInsStockTransformacionId());
        return $o;			
    }

	/* Metodo que retorna el InsStockTransformacion (Clave Foranea) en Array */ 	
    public function getInsStockTransformacionEnArray(&$arr_os){
        if($this->getInsStockTransformacionId() != 'null'){
            if(isset($arr_os[$this->getInsStockTransformacionId()])){
                $o = $arr_os[$this->getInsStockTransformacionId()];
            }else{
                $o = InsStockTransformacion::getOxId($this->getInsStockTransformacionId());
                if($o){
                    $arr_os[$this->getInsStockTransformacionId()] = $o;
                }
            }
        }else{
            $o = new InsStockTransformacion();
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
            		
        if($contexto_solicitante != InsStockTipoMovimiento::GEN_CLASE){
            if($this->getInsStockTipoMovimiento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsStockTipoMovimiento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsStockTipoMovimiento()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PdiPedido::GEN_CLASE){
            if($this->getPdiPedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdiPedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdiPedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PanPanol::GEN_CLASE){
            if($this->getPanPanol()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanPanol::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanPanol()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaRemito::GEN_CLASE){
            if($this->getVtaRemito()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaRemito::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaRemito()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeRecepcion::GEN_CLASE){
            if($this->getPdeRecepcion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeRecepcion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeRecepcion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != InsStockTransformacion::GEN_CLASE){
            if($this->getInsStockTransformacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(InsStockTransformacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getInsStockTransformacion()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM ins_stock_movimiento'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'ins_stock_movimiento';");
            
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

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_stock_tipo_movimiento_id' */ 	
	static function getOxInsStockTipoMovimientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_stock_tipo_movimiento_id' */ 	
	static function getOsxInsStockTipoMovimientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pdi_pedido_id' */ 	
	static function getOxPdiPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDI_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pdi_pedido_id' */ 	
	static function getOsxPdiPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDI_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_panol_id' */ 	
	static function getOxPanPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_panol_id' */ 	
	static function getOsxPanPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_real' */ 	
	static function getOxCantidadReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_real' */ 	
	static function getOsxCantidadReal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_REAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_comprometida' */ 	
	static function getOxCantidadComprometida($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_COMPROMETIDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_comprometida' */ 	
	static function getOsxCantidadComprometida($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_COMPROMETIDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_pasivo' */ 	
	static function getOxCantidadPasivo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_PASIVO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_pasivo' */ 	
	static function getOsxCantidadPasivo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_PASIVO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fechahora' */ 	
	static function getOxFechahora($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHAHORA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fechahora' */ 	
	static function getOsxFechahora($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHAHORA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_remito_id' */ 	
	static function getOxVtaRemitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_remito_id' */ 	
	static function getOsxVtaRemitoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_REMITO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recepcion_id' */ 	
	static function getOxPdeRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recepcion_id' */ 	
	static function getOsxPdeRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_stock_transformacion_id' */ 	
	static function getOxInsStockTransformacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_STOCK_TRANSFORMACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ins_stock_transformacion_id' */ 	
	static function getOsxInsStockTransformacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_STOCK_TRANSFORMACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos(null, $criterio);
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

            $obs = self::getInsStockMovimientos($paginador, $criterio);
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

            $obs = self::getInsStockMovimientos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'ins_stock_movimiento_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fechahora' */ 	
	public function getFechahoraDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechahora(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechahoraDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechahoraDiferenciaDias();
        
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
                $c->addTabla(InsStockMovimiento::GEN_TABLA);
                $c->addOrden(InsStockMovimiento::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);

                $arr = array();
                foreach($ins_stock_movimientos as $ins_stock_movimiento){
                    $descripcion = $ins_stock_movimiento->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>