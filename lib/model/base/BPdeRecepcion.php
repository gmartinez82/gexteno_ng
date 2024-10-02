<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeRecepcion
{ 
	
	const SES_PAGINACION = 'adm_pderecepcion_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pderecepcion_paginas_registros';
	const SES_CRITERIOS = 'adm_pderecepcion_criterios';
	
	const GEN_CLASE = 'PdeRecepcion';
	const GEN_TABLA = 'pde_recepcion';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeRecepcion */ 
	const GEN_ATTR_ID = 'pde_recepcion.id';
	const GEN_ATTR_DESCRIPCION = 'pde_recepcion.descripcion';
	const GEN_ATTR_CODIGO = 'pde_recepcion.codigo';
	const GEN_ATTR_NRO_COMPROBANTE = 'pde_recepcion.nro_comprobante';
	const GEN_ATTR_PDE_TIPO_RECEPCION_ID = 'pde_recepcion.pde_tipo_recepcion_id';
	const GEN_ATTR_PDE_CENTRO_RECEPCION_ID = 'pde_recepcion.pde_centro_recepcion_id';
	const GEN_ATTR_PRV_PROVEEDOR_ID = 'pde_recepcion.prv_proveedor_id';
	const GEN_ATTR_PDE_PEDIDO_ID = 'pde_recepcion.pde_pedido_id';
	const GEN_ATTR_PDE_OC_ID = 'pde_recepcion.pde_oc_id';
	const GEN_ATTR_INS_INSUMO_ID = 'pde_recepcion.ins_insumo_id';
	const GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID = 'pde_recepcion.pde_recepcion_tipo_estado_id';
	const GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID = 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id';
	const GEN_ATTR_CANTIDAD = 'pde_recepcion.cantidad';
	const GEN_ATTR_FECHA_ENTREGA = 'pde_recepcion.fecha_entrega';
	const GEN_ATTR_IMPORTE_UNIDAD = 'pde_recepcion.importe_unidad';
	const GEN_ATTR_IMPORTE_TOTAL = 'pde_recepcion.importe_total';
	const GEN_ATTR_VENCIMIENTO = 'pde_recepcion.vencimiento';
	const GEN_ATTR_PDE_RECEPCION_AGRUPACION_ID = 'pde_recepcion.pde_recepcion_agrupacion_id';
	const GEN_ATTR_OBSERVACION = 'pde_recepcion.observacion';
	const GEN_ATTR_ORDEN = 'pde_recepcion.orden';
	const GEN_ATTR_ESTADO = 'pde_recepcion.estado';
	const GEN_ATTR_CREADO = 'pde_recepcion.creado';
	const GEN_ATTR_CREADO_POR = 'pde_recepcion.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_recepcion.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_recepcion.modificado_por';

	/* Constantes de Atributos Min de BPdeRecepcion */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_NRO_COMPROBANTE = 'nro_comprobante';
	const GEN_ATTR_MIN_PDE_TIPO_RECEPCION_ID = 'pde_tipo_recepcion_id';
	const GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID = 'pde_centro_recepcion_id';
	const GEN_ATTR_MIN_PRV_PROVEEDOR_ID = 'prv_proveedor_id';
	const GEN_ATTR_MIN_PDE_PEDIDO_ID = 'pde_pedido_id';
	const GEN_ATTR_MIN_PDE_OC_ID = 'pde_oc_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID = 'pde_recepcion_tipo_estado_id';
	const GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID = 'pde_recepcion_tipo_estado_facturacion_id';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_FECHA_ENTREGA = 'fecha_entrega';
	const GEN_ATTR_MIN_IMPORTE_UNIDAD = 'importe_unidad';
	const GEN_ATTR_MIN_IMPORTE_TOTAL = 'importe_total';
	const GEN_ATTR_MIN_VENCIMIENTO = 'vencimiento';
	const GEN_ATTR_MIN_PDE_RECEPCION_AGRUPACION_ID = 'pde_recepcion_agrupacion_id';
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
	

	/* Atributos de BPdeRecepcion */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $nro_comprobante;
	private $pde_tipo_recepcion_id;
	private $pde_centro_recepcion_id;
	private $prv_proveedor_id;
	private $pde_pedido_id;
	private $pde_oc_id;
	private $ins_insumo_id;
	private $pde_recepcion_tipo_estado_id;
	private $pde_recepcion_tipo_estado_facturacion_id;
	private $cantidad;
	private $fecha_entrega;
	private $importe_unidad;
	private $importe_total;
	private $vencimiento;
	private $pde_recepcion_agrupacion_id;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeRecepcion */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getNroComprobante(){ if(isset($this->nro_comprobante)){ return $this->nro_comprobante; }else{ return ''; } }
	public function getPdeTipoRecepcionId(){ if(isset($this->pde_tipo_recepcion_id)){ return $this->pde_tipo_recepcion_id; }else{ return 'null'; } }
	public function getPdeCentroRecepcionId(){ if(isset($this->pde_centro_recepcion_id)){ return $this->pde_centro_recepcion_id; }else{ return 'null'; } }
	public function getPrvProveedorId(){ if(isset($this->prv_proveedor_id)){ return $this->prv_proveedor_id; }else{ return 'null'; } }
	public function getPdePedidoId(){ if(isset($this->pde_pedido_id)){ return $this->pde_pedido_id; }else{ return 'null'; } }
	public function getPdeOcId(){ if(isset($this->pde_oc_id)){ return $this->pde_oc_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getPdeRecepcionTipoEstadoId(){ if(isset($this->pde_recepcion_tipo_estado_id)){ return $this->pde_recepcion_tipo_estado_id; }else{ return 'null'; } }
	public function getPdeRecepcionTipoEstadoFacturacionId(){ if(isset($this->pde_recepcion_tipo_estado_facturacion_id)){ return $this->pde_recepcion_tipo_estado_facturacion_id; }else{ return 'null'; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getFechaEntrega(){ if(isset($this->fecha_entrega)){ return $this->fecha_entrega; }else{ return ''; } }
	public function getImporteUnidad(){ if(isset($this->importe_unidad)){ return $this->importe_unidad; }else{ return 0; } }
	public function getImporteTotal(){ if(isset($this->importe_total)){ return $this->importe_total; }else{ return 0; } }
	public function getVencimiento(){ if(isset($this->vencimiento)){ return $this->vencimiento; }else{ return ''; } }
	public function getPdeRecepcionAgrupacionId(){ if(isset($this->pde_recepcion_agrupacion_id)){ return $this->pde_recepcion_agrupacion_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPdeRecepcion */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_NRO_COMPROBANTE."
				, ".self::GEN_ATTR_PDE_TIPO_RECEPCION_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_RECEPCION_ID."
				, ".self::GEN_ATTR_PRV_PROVEEDOR_ID."
				, ".self::GEN_ATTR_PDE_PEDIDO_ID."
				, ".self::GEN_ATTR_PDE_OC_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_FECHA_ENTREGA."
				, ".self::GEN_ATTR_IMPORTE_UNIDAD."
				, ".self::GEN_ATTR_IMPORTE_TOTAL."
				, ".self::GEN_ATTR_VENCIMIENTO."
				, ".self::GEN_ATTR_PDE_RECEPCION_AGRUPACION_ID."
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
				$this->setNroComprobante($fila[self::GEN_ATTR_MIN_NRO_COMPROBANTE]);
				$this->setPdeTipoRecepcionId($fila[self::GEN_ATTR_MIN_PDE_TIPO_RECEPCION_ID]);
				$this->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
				$this->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
				$this->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
				$this->setPdeOcId($fila[self::GEN_ATTR_MIN_PDE_OC_ID]);
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setPdeRecepcionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID]);
				$this->setPdeRecepcionTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
				$this->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
				$this->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
				$this->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
				$this->setPdeRecepcionAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_AGRUPACION_ID]);
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
	public function setNroComprobante($v){ $this->nro_comprobante = $v; }
	public function setPdeTipoRecepcionId($v){ $this->pde_tipo_recepcion_id = $v; }
	public function setPdeCentroRecepcionId($v){ $this->pde_centro_recepcion_id = $v; }
	public function setPrvProveedorId($v){ $this->prv_proveedor_id = $v; }
	public function setPdePedidoId($v){ $this->pde_pedido_id = $v; }
	public function setPdeOcId($v){ $this->pde_oc_id = $v; }
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setPdeRecepcionTipoEstadoId($v){ $this->pde_recepcion_tipo_estado_id = $v; }
	public function setPdeRecepcionTipoEstadoFacturacionId($v){ $this->pde_recepcion_tipo_estado_facturacion_id = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setFechaEntrega($v){ $this->fecha_entrega = $v; }
	public function setImporteUnidad($v){ $this->importe_unidad = $v; }
	public function setImporteTotal($v){ $this->importe_total = $v; }
	public function setVencimiento($v){ $this->vencimiento = $v; }
	public function setPdeRecepcionAgrupacionId($v){ $this->pde_recepcion_agrupacion_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeRecepcion();
            $o->setId($fila[PdeRecepcion::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setNroComprobante($fila[self::GEN_ATTR_MIN_NRO_COMPROBANTE]);
			$o->setPdeTipoRecepcionId($fila[self::GEN_ATTR_MIN_PDE_TIPO_RECEPCION_ID]);
			$o->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
			$o->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$o->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
			$o->setPdeOcId($fila[self::GEN_ATTR_MIN_PDE_OC_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setPdeRecepcionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID]);
			$o->setPdeRecepcionTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
			$o->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
			$o->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
			$o->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
			$o->setPdeRecepcionAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_AGRUPACION_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPdeRecepcion */ 	
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

	/* Cambia el estado de BPdeRecepcion */ 	
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

	/* Save de BPdeRecepcion */ 	
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
						, ".self::GEN_ATTR_MIN_NRO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_AGRUPACION_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_recepcion_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getNroComprobante()."'
						, ".$this->getPdeTipoRecepcionId()."
						, ".$this->getPdeCentroRecepcionId()."
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdePedidoId()."
						, ".$this->getPdeOcId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPdeRecepcionTipoEstadoId()."
						, ".$this->getPdeRecepcionTipoEstadoFacturacionId()."
						, '".$this->getCantidad()."'
						, '".$this->getFechaEntrega()."'
						, '".$this->getImporteUnidad()."'
						, '".$this->getImporteTotal()."'
						, '".$this->getVencimiento()."'
						, ".$this->getPdeRecepcionAgrupacionId()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_recepcion_seq')";
            
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
                 
				 ".PdeRecepcion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_NRO_COMPROBANTE." = '".$this->getNroComprobante()."'
						, ".self::GEN_ATTR_MIN_PDE_TIPO_RECEPCION_ID." = ".$this->getPdeTipoRecepcionId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID." = ".$this->getPdeCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID." = ".$this->getPdePedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_ID." = ".$this->getPdeOcId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID." = ".$this->getPdeRecepcionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID." = ".$this->getPdeRecepcionTipoEstadoFacturacionId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA." = '".$this->getFechaEntrega()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD." = '".$this->getImporteUnidad()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL." = '".$this->getImporteTotal()."'
						, ".self::GEN_ATTR_MIN_VENCIMIENTO." = '".$this->getVencimiento()."'
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_AGRUPACION_ID." = ".$this->getPdeRecepcionAgrupacionId()."
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
						, ".self::GEN_ATTR_MIN_NRO_COMPROBANTE."
						, ".self::GEN_ATTR_MIN_PDE_TIPO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_PDE_OC_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA."
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD."
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL."
						, ".self::GEN_ATTR_MIN_VENCIMIENTO."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_AGRUPACION_ID."
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
						, '".$this->getNroComprobante()."'
						, ".$this->getPdeTipoRecepcionId()."
						, ".$this->getPdeCentroRecepcionId()."
						, ".$this->getPrvProveedorId()."
						, ".$this->getPdePedidoId()."
						, ".$this->getPdeOcId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPdeRecepcionTipoEstadoId()."
						, ".$this->getPdeRecepcionTipoEstadoFacturacionId()."
						, '".$this->getCantidad()."'
						, '".$this->getFechaEntrega()."'
						, '".$this->getImporteUnidad()."'
						, '".$this->getImporteTotal()."'
						, '".$this->getVencimiento()."'
						, ".$this->getPdeRecepcionAgrupacionId()."
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
                     
				 ".PdeRecepcion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_NRO_COMPROBANTE." = '".$this->getNroComprobante()."'
						, ".self::GEN_ATTR_MIN_PDE_TIPO_RECEPCION_ID." = ".$this->getPdeTipoRecepcionId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID." = ".$this->getPdeCentroRecepcionId()."
						, ".self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID." = ".$this->getPrvProveedorId()."
						, ".self::GEN_ATTR_MIN_PDE_PEDIDO_ID." = ".$this->getPdePedidoId()."
						, ".self::GEN_ATTR_MIN_PDE_OC_ID." = ".$this->getPdeOcId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID." = ".$this->getPdeRecepcionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID." = ".$this->getPdeRecepcionTipoEstadoFacturacionId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_FECHA_ENTREGA." = '".$this->getFechaEntrega()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_UNIDAD." = '".$this->getImporteUnidad()."'
						, ".self::GEN_ATTR_MIN_IMPORTE_TOTAL." = '".$this->getImporteTotal()."'
						, ".self::GEN_ATTR_MIN_VENCIMIENTO." = '".$this->getVencimiento()."'
						, ".self::GEN_ATTR_MIN_PDE_RECEPCION_AGRUPACION_ID." = ".$this->getPdeRecepcionAgrupacionId()."
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
            $o = new PdeRecepcion();
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

	/* Delete de BPdeRecepcion */ 	
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
	
            // se elimina la coleccion de InsStockMovimientos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockMovimientos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcionEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcionEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcionEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcionEstadoFacturacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcionEstadoFacturacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcionEstadoFacturacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcionDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcionDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcionDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturaPdeRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturaPdeRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdeRecepcion(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeRecepcion::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pderecepcions = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pderecepcion = new PdeRecepcion();
                    $pderecepcion->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pderecepcion->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pderecepcion->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pderecepcion->setNroComprobante($fila[self::GEN_ATTR_MIN_NRO_COMPROBANTE]);
			$pderecepcion->setPdeTipoRecepcionId($fila[self::GEN_ATTR_MIN_PDE_TIPO_RECEPCION_ID]);
			$pderecepcion->setPdeCentroRecepcionId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_RECEPCION_ID]);
			$pderecepcion->setPrvProveedorId($fila[self::GEN_ATTR_MIN_PRV_PROVEEDOR_ID]);
			$pderecepcion->setPdePedidoId($fila[self::GEN_ATTR_MIN_PDE_PEDIDO_ID]);
			$pderecepcion->setPdeOcId($fila[self::GEN_ATTR_MIN_PDE_OC_ID]);
			$pderecepcion->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$pderecepcion->setPdeRecepcionTipoEstadoId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_ID]);
			$pderecepcion->setPdeRecepcionTipoEstadoFacturacionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID]);
			$pderecepcion->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$pderecepcion->setFechaEntrega($fila[self::GEN_ATTR_MIN_FECHA_ENTREGA]);
			$pderecepcion->setImporteUnidad($fila[self::GEN_ATTR_MIN_IMPORTE_UNIDAD]);
			$pderecepcion->setImporteTotal($fila[self::GEN_ATTR_MIN_IMPORTE_TOTAL]);
			$pderecepcion->setVencimiento($fila[self::GEN_ATTR_MIN_VENCIMIENTO]);
			$pderecepcion->setPdeRecepcionAgrupacionId($fila[self::GEN_ATTR_MIN_PDE_RECEPCION_AGRUPACION_ID]);
			$pderecepcion->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pderecepcion->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pderecepcion->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pderecepcion->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pderecepcion->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pderecepcion->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pderecepcion->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pderecepcions[] = $pderecepcion;
		}
		
		return $pderecepcions;
	}	
	

	/* Método getPdeRecepcions Habilitados */ 	
	static function getPdeRecepcionsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeRecepcion::getPdeRecepcions($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeRecepcions para listado de Backend */ 	
	static function getPdeRecepcionsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeRecepcion::getPdeRecepcions($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeRecepcionsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeRecepcion::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeRecepcion::getPdeRecepcions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeRecepcions filtrado para select */ 	
	static function getPdeRecepcionsCmbF($paginador = null, $criterio = null){
            $col = PdeRecepcion::getPdeRecepcions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de PdeTipoRecepcion */ 	
	static function getPdeRecepcionsXPdeTipoRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_TIPO_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeTipoRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de PdeCentroRecepcion */ 	
	static function getPdeRecepcionsXPdeCentroRecepcions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroRecepcionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de PrvProveedor */ 	
	static function getPdeRecepcionsXPrvProveedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PRV_PROVEEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrvProveedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de PdePedido */ 	
	static function getPdeRecepcionsXPdePedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdePedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de PdeOc */ 	
	static function getPdeRecepcionsXPdeOcs($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_OC_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeOcId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getPdeRecepcionsXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de PdeRecepcionTipoEstado */ 	
	static function getPdeRecepcionsXPdeRecepcionTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeRecepcionTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de PdeRecepcionTipoEstadoFacturacion */ 	
	static function getPdeRecepcionsXPdeRecepcionTipoEstadoFacturacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeRecepcionTipoEstadoFacturacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPdeRecepcions filtrado por una coleccion de objetos foraneos de PdeRecepcionAgrupacion */ 	
	static function getPdeRecepcionsXPdeRecepcionAgrupacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeRecepcion::GEN_ATTR_PDE_RECEPCION_AGRUPACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeRecepcion::getPdeRecepcions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeRecepcionAgrupacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_recepcion_adm.php';
            $url_gestion = 'pde_recepcion_gestion.php';
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
	

	/* Metodo getInsStockMovimientos */ 	
	public function getInsStockMovimientos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockMovimiento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockMovimiento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockMovimiento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockMovimiento::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockMovimiento::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockMovimiento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockMovimiento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstockmovimientos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstockmovimiento = InsStockMovimiento::hidratarObjeto($fila);			
                $insstockmovimientos[] = $insstockmovimiento;
            }

            return $insstockmovimientos;
	}	
	

	/* Método getInsStockMovimientosBloque para MasInfo */ 	
	public function getInsStockMovimientosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockMovimientos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockMovimientos Habilitados */ 	
	public function getInsStockMovimientosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockMovimientos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockMovimiento */ 	
	public function getInsStockMovimiento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockMovimientos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockMovimiento relacionadas */ 	
	public function deleteInsStockMovimientos(){
            $obs = $this->getInsStockMovimientos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockMovimientosCmb() InsStockMovimiento relacionadas */ 	
	public function getInsStockMovimientosCmb(){
            $c = new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockMovimiento::getInsStockMovimientosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsStockTipoMovimientos (Coleccion) relacionados a traves de InsStockMovimiento */ 	
	public function getInsStockTipoMovimientosXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockMovimiento::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
            $c->addRealJoin(InsStockMovimiento::GEN_TABLA, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, InsStockTipoMovimiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTipoMovimiento::getInsStockTipoMovimientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsStockTipoMovimientos relacionados a traves de InsStockMovimiento */ 	
	public function getCantidadInsStockTipoMovimientosXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsStockTipoMovimiento::GEN_ATTR_ID);
            if($estado){
                $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockMovimiento::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
            $c->addRealJoin(InsStockMovimiento::GEN_TABLA, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, InsStockTipoMovimiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTipoMovimiento::getInsStockTipoMovimientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsStockTipoMovimiento (Objeto) relacionado a traves de InsStockMovimiento */ 	
	public function getInsStockTipoMovimientoXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsStockTipoMovimientosXInsStockMovimiento($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcionEstados */ 	
	public function getPdeRecepcionEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcionEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcionEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcionEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcionEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcionEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepcionestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepcionestado = PdeRecepcionEstado::hidratarObjeto($fila);			
                $pderecepcionestados[] = $pderecepcionestado;
            }

            return $pderecepcionestados;
	}	
	

	/* Método getPdeRecepcionEstadosBloque para MasInfo */ 	
	public function getPdeRecepcionEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcionEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcionEstados Habilitados */ 	
	public function getPdeRecepcionEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcionEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcionEstado */ 	
	public function getPdeRecepcionEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcionEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcionEstado relacionadas */ 	
	public function deletePdeRecepcionEstados(){
            $obs = $this->getPdeRecepcionEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionEstadosCmb() PdeRecepcionEstado relacionadas */ 	
	public function getPdeRecepcionEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcionEstado::getPdeRecepcionEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecepcionTipoEstados (Coleccion) relacionados a traves de PdeRecepcionEstado */ 	
	public function getPdeRecepcionTipoEstadosXPdeRecepcionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecepcionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionEstado::GEN_TABLA, PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID, PdeRecepcionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcionTipoEstado::getPdeRecepcionTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecepcionTipoEstados relacionados a traves de PdeRecepcionEstado */ 	
	public function getCantidadPdeRecepcionTipoEstadosXPdeRecepcionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecepcionTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecepcionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionEstado::GEN_TABLA, PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID, PdeRecepcionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcionTipoEstado::getPdeRecepcionTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecepcionTipoEstado (Objeto) relacionado a traves de PdeRecepcionEstado */ 	
	public function getPdeRecepcionTipoEstadoXPdeRecepcionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecepcionTipoEstadosXPdeRecepcionEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcionEstadoFacturacions */ 	
	public function getPdeRecepcionEstadoFacturacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcionEstadoFacturacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcionEstadoFacturacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcionEstadoFacturacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecepcionEstadoFacturacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcionEstadoFacturacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepcionestadofacturacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepcionestadofacturacion = PdeRecepcionEstadoFacturacion::hidratarObjeto($fila);			
                $pderecepcionestadofacturacions[] = $pderecepcionestadofacturacion;
            }

            return $pderecepcionestadofacturacions;
	}	
	

	/* Método getPdeRecepcionEstadoFacturacionsBloque para MasInfo */ 	
	public function getPdeRecepcionEstadoFacturacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcionEstadoFacturacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcionEstadoFacturacions Habilitados */ 	
	public function getPdeRecepcionEstadoFacturacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcionEstadoFacturacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcionEstadoFacturacion */ 	
	public function getPdeRecepcionEstadoFacturacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcionEstadoFacturacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcionEstadoFacturacion relacionadas */ 	
	public function deletePdeRecepcionEstadoFacturacions(){
            $obs = $this->getPdeRecepcionEstadoFacturacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionEstadoFacturacionsCmb() PdeRecepcionEstadoFacturacion relacionadas */ 	
	public function getPdeRecepcionEstadoFacturacionsCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionEstadoFacturacion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcionEstadoFacturacion::getPdeRecepcionEstadoFacturacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecepcionTipoEstadoFacturacions (Coleccion) relacionados a traves de PdeRecepcionEstadoFacturacion */ 	
	public function getPdeRecepcionTipoEstadoFacturacionsXPdeRecepcionEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecepcionTipoEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionTipoEstadoFacturacion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionEstadoFacturacion::GEN_TABLA, PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID, PdeRecepcionTipoEstadoFacturacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcionTipoEstadoFacturacion::getPdeRecepcionTipoEstadoFacturacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecepcionTipoEstadoFacturacions relacionados a traves de PdeRecepcionEstadoFacturacion */ 	
	public function getCantidadPdeRecepcionTipoEstadoFacturacionsXPdeRecepcionEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecepcionTipoEstadoFacturacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecepcionTipoEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionTipoEstadoFacturacion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionEstadoFacturacion::GEN_TABLA, PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID, PdeRecepcionTipoEstadoFacturacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcionTipoEstadoFacturacion::getPdeRecepcionTipoEstadoFacturacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecepcionTipoEstadoFacturacion (Objeto) relacionado a traves de PdeRecepcionEstadoFacturacion */ 	
	public function getPdeRecepcionTipoEstadoFacturacionXPdeRecepcionEstadoFacturacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecepcionTipoEstadoFacturacionsXPdeRecepcionEstadoFacturacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcionDestinatarios */ 	
	public function getPdeRecepcionDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcionDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcionDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcionDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecepcionDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcionDestinatario::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcionDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcionDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepciondestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepciondestinatario = PdeRecepcionDestinatario::hidratarObjeto($fila);			
                $pderecepciondestinatarios[] = $pderecepciondestinatario;
            }

            return $pderecepciondestinatarios;
	}	
	

	/* Método getPdeRecepcionDestinatariosBloque para MasInfo */ 	
	public function getPdeRecepcionDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcionDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcionDestinatarios Habilitados */ 	
	public function getPdeRecepcionDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcionDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcionDestinatario */ 	
	public function getPdeRecepcionDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcionDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcionDestinatario relacionadas */ 	
	public function deletePdeRecepcionDestinatarios(){
            $obs = $this->getPdeRecepcionDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionDestinatariosCmb() PdeRecepcionDestinatario relacionadas */ 	
	public function getPdeRecepcionDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcionDestinatario::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcionDestinatario::getPdeRecepcionDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de PdeRecepcionDestinatario */ 	
	public function getUsUsuariosXPdeRecepcionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionDestinatario::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionDestinatario::GEN_TABLA, PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de PdeRecepcionDestinatario */ 	
	public function getCantidadUsUsuariosXPdeRecepcionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionDestinatario::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionDestinatario::GEN_TABLA, PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de PdeRecepcionDestinatario */ 	
	public function getUsUsuarioXPdeRecepcionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXPdeRecepcionDestinatario($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeFacturaPdeRecepcion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFacturaPdeRecepcion::getPdeFacturaPdeRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeFacturas (Coleccion) relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeFacturasXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeFacturas relacionados a traves de PdeFacturaPdeRecepcion */ 	
	public function getCantidadPdeFacturasXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFacturaPdeRecepcion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->addRealJoin(PdeFacturaPdeRecepcion::GEN_TABLA, PdeFacturaPdeRecepcion::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeFactura (Objeto) relacionado a traves de PdeFacturaPdeRecepcion */ 	
	public function getPdeFacturaXPdeFacturaPdeRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeFacturasXPdeFacturaPdeRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el PdeTipoRecepcion (Clave Foranea) */ 	
    public function getPdeTipoRecepcion(){
        $o = new PdeTipoRecepcion();
        $o->setId($this->getPdeTipoRecepcionId());
        return $o;			
    }

	/* Metodo que retorna el PdeTipoRecepcion (Clave Foranea) en Array */ 	
    public function getPdeTipoRecepcionEnArray(&$arr_os){
        if($this->getPdeTipoRecepcionId() != 'null'){
            if(isset($arr_os[$this->getPdeTipoRecepcionId()])){
                $o = $arr_os[$this->getPdeTipoRecepcionId()];
            }else{
                $o = PdeTipoRecepcion::getOxId($this->getPdeTipoRecepcionId());
                if($o){
                    $arr_os[$this->getPdeTipoRecepcionId()] = $o;
                }
            }
        }else{
            $o = new PdeTipoRecepcion();
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

	/* Metodo que retorna el PdeOc (Clave Foranea) */ 	
    public function getPdeOc(){
        $o = new PdeOc();
        $o->setId($this->getPdeOcId());
        return $o;			
    }

	/* Metodo que retorna el PdeOc (Clave Foranea) en Array */ 	
    public function getPdeOcEnArray(&$arr_os){
        if($this->getPdeOcId() != 'null'){
            if(isset($arr_os[$this->getPdeOcId()])){
                $o = $arr_os[$this->getPdeOcId()];
            }else{
                $o = PdeOc::getOxId($this->getPdeOcId());
                if($o){
                    $arr_os[$this->getPdeOcId()] = $o;
                }
            }
        }else{
            $o = new PdeOc();
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

	/* Metodo que retorna el PdeRecepcionTipoEstado (Clave Foranea) */ 	
    public function getPdeRecepcionTipoEstado(){
        $o = new PdeRecepcionTipoEstado();
        $o->setId($this->getPdeRecepcionTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PdeRecepcionTipoEstado (Clave Foranea) en Array */ 	
    public function getPdeRecepcionTipoEstadoEnArray(&$arr_os){
        if($this->getPdeRecepcionTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPdeRecepcionTipoEstadoId()])){
                $o = $arr_os[$this->getPdeRecepcionTipoEstadoId()];
            }else{
                $o = PdeRecepcionTipoEstado::getOxId($this->getPdeRecepcionTipoEstadoId());
                if($o){
                    $arr_os[$this->getPdeRecepcionTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PdeRecepcionTipoEstado();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeRecepcionTipoEstadoFacturacion (Clave Foranea) */ 	
    public function getPdeRecepcionTipoEstadoFacturacion(){
        $o = new PdeRecepcionTipoEstadoFacturacion();
        $o->setId($this->getPdeRecepcionTipoEstadoFacturacionId());
        return $o;			
    }

	/* Metodo que retorna el PdeRecepcionTipoEstadoFacturacion (Clave Foranea) en Array */ 	
    public function getPdeRecepcionTipoEstadoFacturacionEnArray(&$arr_os){
        if($this->getPdeRecepcionTipoEstadoFacturacionId() != 'null'){
            if(isset($arr_os[$this->getPdeRecepcionTipoEstadoFacturacionId()])){
                $o = $arr_os[$this->getPdeRecepcionTipoEstadoFacturacionId()];
            }else{
                $o = PdeRecepcionTipoEstadoFacturacion::getOxId($this->getPdeRecepcionTipoEstadoFacturacionId());
                if($o){
                    $arr_os[$this->getPdeRecepcionTipoEstadoFacturacionId()] = $o;
                }
            }
        }else{
            $o = new PdeRecepcionTipoEstadoFacturacion();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeRecepcionAgrupacion (Clave Foranea) */ 	
    public function getPdeRecepcionAgrupacion(){
        $o = new PdeRecepcionAgrupacion();
        $o->setId($this->getPdeRecepcionAgrupacionId());
        return $o;			
    }

	/* Metodo que retorna el PdeRecepcionAgrupacion (Clave Foranea) en Array */ 	
    public function getPdeRecepcionAgrupacionEnArray(&$arr_os){
        if($this->getPdeRecepcionAgrupacionId() != 'null'){
            if(isset($arr_os[$this->getPdeRecepcionAgrupacionId()])){
                $o = $arr_os[$this->getPdeRecepcionAgrupacionId()];
            }else{
                $o = PdeRecepcionAgrupacion::getOxId($this->getPdeRecepcionAgrupacionId());
                if($o){
                    $arr_os[$this->getPdeRecepcionAgrupacionId()] = $o;
                }
            }
        }else{
            $o = new PdeRecepcionAgrupacion();
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
            		
        if($contexto_solicitante != PdeTipoRecepcion::GEN_CLASE){
            if($this->getPdeTipoRecepcion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeTipoRecepcion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeTipoRecepcion()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PrvProveedor::GEN_CLASE){
            if($this->getPrvProveedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrvProveedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrvProveedor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdePedido::GEN_CLASE){
            if($this->getPdePedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdePedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdePedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeOc::GEN_CLASE){
            if($this->getPdeOc()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeOc::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeOc()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PdeRecepcionTipoEstado::GEN_CLASE){
            if($this->getPdeRecepcionTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeRecepcionTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeRecepcionTipoEstado()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeRecepcionTipoEstadoFacturacion::GEN_CLASE){
            if($this->getPdeRecepcionTipoEstadoFacturacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeRecepcionTipoEstadoFacturacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeRecepcionTipoEstadoFacturacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeRecepcionAgrupacion::GEN_CLASE){
            if($this->getPdeRecepcionAgrupacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeRecepcionAgrupacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeRecepcionAgrupacion()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_recepcion'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_recepcion';");
            
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

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nro_comprobante' */ 	
	static function getOxNroComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NRO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nro_comprobante' */ 	
	static function getOsxNroComprobante($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NRO_COMPROBANTE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_tipo_recepcion_id' */ 	
	static function getOxPdeTipoRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_tipo_recepcion_id' */ 	
	static function getOsxPdeTipoRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_TIPO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_recepcion_id' */ 	
	static function getOxPdeCentroRecepcionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prv_proveedor_id' */ 	
	static function getOxPrvProveedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRV_PROVEEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_pedido_id' */ 	
	static function getOxPdePedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_oc_id' */ 	
	static function getOxPdeOcId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_oc_id' */ 	
	static function getOsxPdeOcId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_OC_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recepcion_tipo_estado_id' */ 	
	static function getOxPdeRecepcionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recepcion_tipo_estado_id' */ 	
	static function getOsxPdeRecepcionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recepcion_tipo_estado_facturacion_id' */ 	
	static function getOxPdeRecepcionTipoEstadoFacturacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recepcion_tipo_estado_facturacion_id' */ 	
	static function getOsxPdeRecepcionTipoEstadoFacturacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_entrega' */ 	
	static function getOxFechaEntrega($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ENTREGA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_unidad' */ 	
	static function getOxImporteUnidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_UNIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'importe_total' */ 	
	static function getOxImporteTotal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMPORTE_TOTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vencimiento' */ 	
	static function getOxVencimiento($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VENCIMIENTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_recepcion_agrupacion_id' */ 	
	static function getOxPdeRecepcionAgrupacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_AGRUPACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_recepcion_agrupacion_id' */ 	
	static function getOsxPdeRecepcionAgrupacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_RECEPCION_AGRUPACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions(null, $criterio);
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

            $obs = self::getPdeRecepcions($paginador, $criterio);
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

            $obs = self::getPdeRecepcions($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_recepcion_adm');
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
            $criterio->addTabla(PdeRecepcion::GEN_TABLA);
            $criterio->setCriteriosInicial();

            $paginador = new Paginador(self::getSesPagCantidad(), self::getSesPag());
            $os = self::getPdeRecepcions($paginador, $criterio);

            $total = 0;
            foreach($os as $o){
                $total+= $o->getImporteUnidad();
            }
            return $total;
	}

	/* retorna el total de acuerdo a criterio y paginador activos 'importe_total' */ 	
	static function getImporteTotalAdmTotal(){
            $criterio = new Criterio(self::SES_CRITERIOS);
            $criterio->addTabla(PdeRecepcion::GEN_TABLA);
            $criterio->setCriteriosInicial();

            $paginador = new Paginador(self::getSesPagCantidad(), self::getSesPag());
            $os = self::getPdeRecepcions($paginador, $criterio);

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
                $c->addTabla(PdeRecepcion::GEN_TABLA);
                $c->addOrden(PdeRecepcion::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_recepcions = PdeRecepcion::getPdeRecepcions(null, $c);

                $arr = array();
                foreach($pde_recepcions as $pde_recepcion){
                    $descripcion = $pde_recepcion->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>