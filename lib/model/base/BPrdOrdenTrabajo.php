<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrdOrdenTrabajo
{ 
	
	const SES_PAGINACION = 'adm_prdordentrabajo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prdordentrabajo_paginas_registros';
	const SES_CRITERIOS = 'adm_prdordentrabajo_criterios';
	
	const GEN_CLASE = 'PrdOrdenTrabajo';
	const GEN_TABLA = 'prd_orden_trabajo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrdOrdenTrabajo */ 
	const GEN_ATTR_ID = 'prd_orden_trabajo.id';
	const GEN_ATTR_DESCRIPCION = 'prd_orden_trabajo.descripcion';
	const GEN_ATTR_VTA_PRESUPUESTO_ID = 'prd_orden_trabajo.vta_presupuesto_id';
	const GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID = 'prd_orden_trabajo.vta_presupuesto_ins_insumo_id';
	const GEN_ATTR_CLI_CLIENTE_ID = 'prd_orden_trabajo.cli_cliente_id';
	const GEN_ATTR_PRD_TIPO_ORIGEN_ID = 'prd_orden_trabajo.prd_tipo_origen_id';
	const GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID = 'prd_orden_trabajo.prd_proceso_productivo_id';
	const GEN_ATTR_PRD_PRIORIDAD_ID = 'prd_orden_trabajo.prd_prioridad_id';
	const GEN_ATTR_INS_INSUMO_ID = 'prd_orden_trabajo.ins_insumo_id';
	const GEN_ATTR_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID = 'prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id';
	const GEN_ATTR_CODIGO = 'prd_orden_trabajo.codigo';
	const GEN_ATTR_CANTIDAD = 'prd_orden_trabajo.cantidad';
	const GEN_ATTR_FECHA = 'prd_orden_trabajo.fecha';
	const GEN_ATTR_OBSERVACION = 'prd_orden_trabajo.observacion';
	const GEN_ATTR_ORDEN = 'prd_orden_trabajo.orden';
	const GEN_ATTR_ESTADO = 'prd_orden_trabajo.estado';
	const GEN_ATTR_CREADO = 'prd_orden_trabajo.creado';
	const GEN_ATTR_CREADO_POR = 'prd_orden_trabajo.creado_por';
	const GEN_ATTR_MODIFICADO = 'prd_orden_trabajo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prd_orden_trabajo.modificado_por';

	/* Constantes de Atributos Min de BPrdOrdenTrabajo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_ID = 'vta_presupuesto_id';
	const GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID = 'vta_presupuesto_ins_insumo_id';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_PRD_TIPO_ORIGEN_ID = 'prd_tipo_origen_id';
	const GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID = 'prd_proceso_productivo_id';
	const GEN_ATTR_MIN_PRD_PRIORIDAD_ID = 'prd_prioridad_id';
	const GEN_ATTR_MIN_INS_INSUMO_ID = 'ins_insumo_id';
	const GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID = 'prd_orden_trabajo_tipo_estado_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CANTIDAD = 'cantidad';
	const GEN_ATTR_MIN_FECHA = 'fecha';
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
	

	/* Atributos de BPrdOrdenTrabajo */ 
	private $id;
	private $descripcion;
	private $vta_presupuesto_id;
	private $vta_presupuesto_ins_insumo_id;
	private $cli_cliente_id;
	private $prd_tipo_origen_id;
	private $prd_proceso_productivo_id;
	private $prd_prioridad_id;
	private $ins_insumo_id;
	private $prd_orden_trabajo_tipo_estado_id;
	private $codigo;
	private $cantidad;
	private $fecha;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrdOrdenTrabajo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getVtaPresupuestoId(){ if(isset($this->vta_presupuesto_id)){ return $this->vta_presupuesto_id; }else{ return 'null'; } }
	public function getVtaPresupuestoInsInsumoId(){ if(isset($this->vta_presupuesto_ins_insumo_id)){ return $this->vta_presupuesto_ins_insumo_id; }else{ return 'null'; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getPrdTipoOrigenId(){ if(isset($this->prd_tipo_origen_id)){ return $this->prd_tipo_origen_id; }else{ return 'null'; } }
	public function getPrdProcesoProductivoId(){ if(isset($this->prd_proceso_productivo_id)){ return $this->prd_proceso_productivo_id; }else{ return 'null'; } }
	public function getPrdPrioridadId(){ if(isset($this->prd_prioridad_id)){ return $this->prd_prioridad_id; }else{ return 'null'; } }
	public function getInsInsumoId(){ if(isset($this->ins_insumo_id)){ return $this->ins_insumo_id; }else{ return 'null'; } }
	public function getPrdOrdenTrabajoTipoEstadoId(){ if(isset($this->prd_orden_trabajo_tipo_estado_id)){ return $this->prd_orden_trabajo_tipo_estado_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCantidad(){ if(isset($this->cantidad)){ return $this->cantidad; }else{ return 0; } }
	public function getFecha(){ if(isset($this->fecha)){ return $this->fecha; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPrdOrdenTrabajo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_ID."
				, ".self::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_PRD_TIPO_ORIGEN_ID."
				, ".self::GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID."
				, ".self::GEN_ATTR_PRD_PRIORIDAD_ID."
				, ".self::GEN_ATTR_INS_INSUMO_ID."
				, ".self::GEN_ATTR_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CANTIDAD."
				, ".self::GEN_ATTR_FECHA."
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
				$this->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
				$this->setPrdTipoOrigenId($fila[self::GEN_ATTR_MIN_PRD_TIPO_ORIGEN_ID]);
				$this->setPrdProcesoProductivoId($fila[self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID]);
				$this->setPrdPrioridadId($fila[self::GEN_ATTR_MIN_PRD_PRIORIDAD_ID]);
				$this->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
				$this->setPrdOrdenTrabajoTipoEstadoId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
				$this->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
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
	public function setCliClienteId($v){ $this->cli_cliente_id = $v; }
	public function setPrdTipoOrigenId($v){ $this->prd_tipo_origen_id = $v; }
	public function setPrdProcesoProductivoId($v){ $this->prd_proceso_productivo_id = $v; }
	public function setPrdPrioridadId($v){ $this->prd_prioridad_id = $v; }
	public function setInsInsumoId($v){ $this->ins_insumo_id = $v; }
	public function setPrdOrdenTrabajoTipoEstadoId($v){ $this->prd_orden_trabajo_tipo_estado_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCantidad($v){ $this->cantidad = $v; }
	public function setFecha($v){ $this->fecha = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrdOrdenTrabajo();
            $o->setId($fila[PrdOrdenTrabajo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$o->setVtaPresupuestoInsInsumoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setPrdTipoOrigenId($fila[self::GEN_ATTR_MIN_PRD_TIPO_ORIGEN_ID]);
			$o->setPrdProcesoProductivoId($fila[self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID]);
			$o->setPrdPrioridadId($fila[self::GEN_ATTR_MIN_PRD_PRIORIDAD_ID]);
			$o->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$o->setPrdOrdenTrabajoTipoEstadoId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$o->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPrdOrdenTrabajo */ 	
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

	/* Cambia el estado de BPrdOrdenTrabajo */ 	
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

	/* Save de BPrdOrdenTrabajo */ 	
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_PRD_TIPO_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID."
						, ".self::GEN_ATTR_MIN_PRD_PRIORIDAD_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prd_orden_trabajo_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getVtaPresupuestoId()."
						, ".$this->getVtaPresupuestoInsInsumoId()."
						, ".$this->getCliClienteId()."
						, ".$this->getPrdTipoOrigenId()."
						, ".$this->getPrdProcesoProductivoId()."
						, ".$this->getPrdPrioridadId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPrdOrdenTrabajoTipoEstadoId()."
						, '".$this->getCodigo()."'
						, '".$this->getCantidad()."'
						, '".$this->getFecha()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prd_orden_trabajo_seq')";
            
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
                 
				 ".PrdOrdenTrabajo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID." = ".$this->getVtaPresupuestoInsInsumoId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_PRD_TIPO_ORIGEN_ID." = ".$this->getPrdTipoOrigenId()."
						, ".self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID." = ".$this->getPrdProcesoProductivoId()."
						, ".self::GEN_ATTR_MIN_PRD_PRIORIDAD_ID." = ".$this->getPrdPrioridadId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID." = ".$this->getPrdOrdenTrabajoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_PRD_TIPO_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID."
						, ".self::GEN_ATTR_MIN_PRD_PRIORIDAD_ID."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID."
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CANTIDAD."
						, ".self::GEN_ATTR_MIN_FECHA."
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
						, ".$this->getCliClienteId()."
						, ".$this->getPrdTipoOrigenId()."
						, ".$this->getPrdProcesoProductivoId()."
						, ".$this->getPrdPrioridadId()."
						, ".$this->getInsInsumoId()."
						, ".$this->getPrdOrdenTrabajoTipoEstadoId()."
						, '".$this->getCodigo()."'
						, '".$this->getCantidad()."'
						, '".$this->getFecha()."'
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
                     
				 ".PrdOrdenTrabajo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID." = ".$this->getVtaPresupuestoId()."
						, ".self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID." = ".$this->getVtaPresupuestoInsInsumoId()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_PRD_TIPO_ORIGEN_ID." = ".$this->getPrdTipoOrigenId()."
						, ".self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID." = ".$this->getPrdProcesoProductivoId()."
						, ".self::GEN_ATTR_MIN_PRD_PRIORIDAD_ID." = ".$this->getPrdPrioridadId()."
						, ".self::GEN_ATTR_MIN_INS_INSUMO_ID." = ".$this->getInsInsumoId()."
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID." = ".$this->getPrdOrdenTrabajoTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CANTIDAD." = '".$this->getCantidad()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
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
            $o = new PrdOrdenTrabajo();
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

	/* Delete de BPrdOrdenTrabajo */ 	
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
	
            // se elimina la coleccion de PrdOrdenTrabajoEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdOrdenTrabajoCiclos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoCiclo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoCiclos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrdOrdenTrabajo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrdOrdenTrabajos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrdOrdenTrabajo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prdordentrabajos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prdordentrabajo = new PrdOrdenTrabajo();
                    $prdordentrabajo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prdordentrabajo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$prdordentrabajo->setVtaPresupuestoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_ID]);
			$prdordentrabajo->setVtaPresupuestoInsInsumoId($fila[self::GEN_ATTR_MIN_VTA_PRESUPUESTO_INS_INSUMO_ID]);
			$prdordentrabajo->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$prdordentrabajo->setPrdTipoOrigenId($fila[self::GEN_ATTR_MIN_PRD_TIPO_ORIGEN_ID]);
			$prdordentrabajo->setPrdProcesoProductivoId($fila[self::GEN_ATTR_MIN_PRD_PROCESO_PRODUCTIVO_ID]);
			$prdordentrabajo->setPrdPrioridadId($fila[self::GEN_ATTR_MIN_PRD_PRIORIDAD_ID]);
			$prdordentrabajo->setInsInsumoId($fila[self::GEN_ATTR_MIN_INS_INSUMO_ID]);
			$prdordentrabajo->setPrdOrdenTrabajoTipoEstadoId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID]);
			$prdordentrabajo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$prdordentrabajo->setCantidad($fila[self::GEN_ATTR_MIN_CANTIDAD]);
			$prdordentrabajo->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$prdordentrabajo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prdordentrabajo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prdordentrabajo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prdordentrabajo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prdordentrabajo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prdordentrabajo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prdordentrabajo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prdordentrabajos[] = $prdordentrabajo;
		}
		
		return $prdordentrabajos;
	}	
	

	/* Método getPrdOrdenTrabajos Habilitados */ 	
	static function getPrdOrdenTrabajosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrdOrdenTrabajo::getPrdOrdenTrabajos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrdOrdenTrabajos para listado de Backend */ 	
	static function getPrdOrdenTrabajosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrdOrdenTrabajo::getPrdOrdenTrabajos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrdOrdenTrabajosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrdOrdenTrabajo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrdOrdenTrabajo::getPrdOrdenTrabajos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado para select */ 	
	static function getPrdOrdenTrabajosCmbF($paginador = null, $criterio = null){
            $col = PrdOrdenTrabajo::getPrdOrdenTrabajos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado por una coleccion de objetos foraneos de VtaPresupuesto */ 	
	static function getPrdOrdenTrabajosXVtaPresupuestos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado por una coleccion de objetos foraneos de VtaPresupuestoInsInsumo */ 	
	static function getPrdOrdenTrabajosXVtaPresupuestoInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaPresupuestoInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getPrdOrdenTrabajosXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado por una coleccion de objetos foraneos de PrdTipoOrigen */ 	
	static function getPrdOrdenTrabajosXPrdTipoOrigens($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_PRD_TIPO_ORIGEN_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdTipoOrigenId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado por una coleccion de objetos foraneos de PrdProcesoProductivo */ 	
	static function getPrdOrdenTrabajosXPrdProcesoProductivos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdProcesoProductivoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado por una coleccion de objetos foraneos de PrdPrioridad */ 	
	static function getPrdOrdenTrabajosXPrdPrioridads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_PRD_PRIORIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdPrioridadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado por una coleccion de objetos foraneos de InsInsumo */ 	
	static function getPrdOrdenTrabajosXInsInsumos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_INS_INSUMO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getInsInsumoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajos filtrado por una coleccion de objetos foraneos de PrdOrdenTrabajoTipoEstado */ 	
	static function getPrdOrdenTrabajosXPrdOrdenTrabajoTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajo::GEN_ATTR_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajo::getPrdOrdenTrabajos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdOrdenTrabajoTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'prd_orden_trabajo_adm.php';
            $url_gestion = 'prd_orden_trabajo_gestion.php';
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
	

	/* Metodo getPrdOrdenTrabajoEstados */ 	
	public function getPrdOrdenTrabajoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajoEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajoEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajoEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajoEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajoEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajoEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajoEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajoestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajoestado = PrdOrdenTrabajoEstado::hidratarObjeto($fila);			
                $prdordentrabajoestados[] = $prdordentrabajoestado;
            }

            return $prdordentrabajoestados;
	}	
	

	/* Método getPrdOrdenTrabajoEstadosBloque para MasInfo */ 	
	public function getPrdOrdenTrabajoEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajoEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoEstados Habilitados */ 	
	public function getPrdOrdenTrabajoEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajoEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoEstado */ 	
	public function getPrdOrdenTrabajoEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajoEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajoEstado relacionadas */ 	
	public function deletePrdOrdenTrabajoEstados(){
            $obs = $this->getPrdOrdenTrabajoEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajoEstadosCmb() PrdOrdenTrabajoEstado relacionadas */ 	
	public function getPrdOrdenTrabajoEstadosCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoEstado::getPrdOrdenTrabajoEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdOrdenTrabajoTipoEstados (Coleccion) relacionados a traves de PrdOrdenTrabajoEstado */ 	
	public function getPrdOrdenTrabajoTipoEstadosXPrdOrdenTrabajoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdOrdenTrabajoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoEstado::GEN_TABLA, PrdOrdenTrabajoEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID, PrdOrdenTrabajoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoTipoEstado::getPrdOrdenTrabajoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdOrdenTrabajoTipoEstados relacionados a traves de PrdOrdenTrabajoEstado */ 	
	public function getCantidadPrdOrdenTrabajoTipoEstadosXPrdOrdenTrabajoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdOrdenTrabajoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdOrdenTrabajoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoEstado::GEN_TABLA, PrdOrdenTrabajoEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID, PrdOrdenTrabajoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoTipoEstado::getPrdOrdenTrabajoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdOrdenTrabajoTipoEstado (Objeto) relacionado a traves de PrdOrdenTrabajoEstado */ 	
	public function getPrdOrdenTrabajoTipoEstadoXPrdOrdenTrabajoEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdOrdenTrabajoTipoEstadosXPrdOrdenTrabajoEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdOrdenTrabajoCiclos */ 	
	public function getPrdOrdenTrabajoCiclos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajoCiclo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajoCiclo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajoCiclo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajoCiclo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajoCiclo::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajoCiclo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajoCiclo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajoCiclo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajociclos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajociclo = PrdOrdenTrabajoCiclo::hidratarObjeto($fila);			
                $prdordentrabajociclos[] = $prdordentrabajociclo;
            }

            return $prdordentrabajociclos;
	}	
	

	/* Método getPrdOrdenTrabajoCiclosBloque para MasInfo */ 	
	public function getPrdOrdenTrabajoCiclosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajoCiclos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoCiclos Habilitados */ 	
	public function getPrdOrdenTrabajoCiclosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajoCiclos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoCiclo */ 	
	public function getPrdOrdenTrabajoCiclo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajoCiclos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajoCiclo relacionadas */ 	
	public function deletePrdOrdenTrabajoCiclos(){
            $obs = $this->getPrdOrdenTrabajoCiclos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajoCiclosCmb() PrdOrdenTrabajoCiclo relacionadas */ 	
	public function getPrdOrdenTrabajoCiclosCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoCiclo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoCiclo::getPrdOrdenTrabajoCiclosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdLineaProduccions (Coleccion) relacionados a traves de PrdOrdenTrabajoCiclo */ 	
	public function getPrdLineaProduccionsXPrdOrdenTrabajoCiclo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdLineaProduccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdLineaProduccion::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoCiclo::GEN_TABLA, PrdOrdenTrabajoCiclo::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, PrdLineaProduccion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdLineaProduccion::getPrdLineaProduccions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdLineaProduccions relacionados a traves de PrdOrdenTrabajoCiclo */ 	
	public function getCantidadPrdLineaProduccionsXPrdOrdenTrabajoCiclo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdLineaProduccion::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdLineaProduccion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdLineaProduccion::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoCiclo::GEN_TABLA, PrdOrdenTrabajoCiclo::GEN_ATTR_PRD_LINEA_PRODUCCION_ID, PrdLineaProduccion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdLineaProduccion::getPrdLineaProduccions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdLineaProduccion (Objeto) relacionado a traves de PrdOrdenTrabajoCiclo */ 	
	public function getPrdLineaProduccionXPrdOrdenTrabajoCiclo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdLineaProduccionsXPrdOrdenTrabajoCiclo($paginador, $criterio, $estado, $arr_ordens);
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

	/* Metodo que retorna el CliCliente (Clave Foranea) */ 	
    public function getCliCliente(){
        $o = new CliCliente();
        $o->setId($this->getCliClienteId());
        return $o;			
    }

	/* Metodo que retorna el CliCliente (Clave Foranea) en Array */ 	
    public function getCliClienteEnArray(&$arr_os){
        if($this->getCliClienteId() != 'null'){
            if(isset($arr_os[$this->getCliClienteId()])){
                $o = $arr_os[$this->getCliClienteId()];
            }else{
                $o = CliCliente::getOxId($this->getCliClienteId());
                if($o){
                    $arr_os[$this->getCliClienteId()] = $o;
                }
            }
        }else{
            $o = new CliCliente();
        }
        return $o;		
    }

	/* Metodo que retorna el PrdTipoOrigen (Clave Foranea) */ 	
    public function getPrdTipoOrigen(){
        $o = new PrdTipoOrigen();
        $o->setId($this->getPrdTipoOrigenId());
        return $o;			
    }

	/* Metodo que retorna el PrdTipoOrigen (Clave Foranea) en Array */ 	
    public function getPrdTipoOrigenEnArray(&$arr_os){
        if($this->getPrdTipoOrigenId() != 'null'){
            if(isset($arr_os[$this->getPrdTipoOrigenId()])){
                $o = $arr_os[$this->getPrdTipoOrigenId()];
            }else{
                $o = PrdTipoOrigen::getOxId($this->getPrdTipoOrigenId());
                if($o){
                    $arr_os[$this->getPrdTipoOrigenId()] = $o;
                }
            }
        }else{
            $o = new PrdTipoOrigen();
        }
        return $o;		
    }

	/* Metodo que retorna el PrdProcesoProductivo (Clave Foranea) */ 	
    public function getPrdProcesoProductivo(){
        $o = new PrdProcesoProductivo();
        $o->setId($this->getPrdProcesoProductivoId());
        return $o;			
    }

	/* Metodo que retorna el PrdProcesoProductivo (Clave Foranea) en Array */ 	
    public function getPrdProcesoProductivoEnArray(&$arr_os){
        if($this->getPrdProcesoProductivoId() != 'null'){
            if(isset($arr_os[$this->getPrdProcesoProductivoId()])){
                $o = $arr_os[$this->getPrdProcesoProductivoId()];
            }else{
                $o = PrdProcesoProductivo::getOxId($this->getPrdProcesoProductivoId());
                if($o){
                    $arr_os[$this->getPrdProcesoProductivoId()] = $o;
                }
            }
        }else{
            $o = new PrdProcesoProductivo();
        }
        return $o;		
    }

	/* Metodo que retorna el PrdPrioridad (Clave Foranea) */ 	
    public function getPrdPrioridad(){
        $o = new PrdPrioridad();
        $o->setId($this->getPrdPrioridadId());
        return $o;			
    }

	/* Metodo que retorna el PrdPrioridad (Clave Foranea) en Array */ 	
    public function getPrdPrioridadEnArray(&$arr_os){
        if($this->getPrdPrioridadId() != 'null'){
            if(isset($arr_os[$this->getPrdPrioridadId()])){
                $o = $arr_os[$this->getPrdPrioridadId()];
            }else{
                $o = PrdPrioridad::getOxId($this->getPrdPrioridadId());
                if($o){
                    $arr_os[$this->getPrdPrioridadId()] = $o;
                }
            }
        }else{
            $o = new PrdPrioridad();
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

	/* Metodo que retorna el PrdOrdenTrabajoTipoEstado (Clave Foranea) */ 	
    public function getPrdOrdenTrabajoTipoEstado(){
        $o = new PrdOrdenTrabajoTipoEstado();
        $o->setId($this->getPrdOrdenTrabajoTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PrdOrdenTrabajoTipoEstado (Clave Foranea) en Array */ 	
    public function getPrdOrdenTrabajoTipoEstadoEnArray(&$arr_os){
        if($this->getPrdOrdenTrabajoTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPrdOrdenTrabajoTipoEstadoId()])){
                $o = $arr_os[$this->getPrdOrdenTrabajoTipoEstadoId()];
            }else{
                $o = PrdOrdenTrabajoTipoEstado::getOxId($this->getPrdOrdenTrabajoTipoEstadoId());
                if($o){
                    $arr_os[$this->getPrdOrdenTrabajoTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PrdOrdenTrabajoTipoEstado();
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
            		
        if($contexto_solicitante != CliCliente::GEN_CLASE){
            if($this->getCliCliente()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCliente::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCliente()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrdTipoOrigen::GEN_CLASE){
            if($this->getPrdTipoOrigen()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdTipoOrigen::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdTipoOrigen()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrdProcesoProductivo::GEN_CLASE){
            if($this->getPrdProcesoProductivo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdProcesoProductivo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdProcesoProductivo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrdPrioridad::GEN_CLASE){
            if($this->getPrdPrioridad()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdPrioridad::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdPrioridad()->getDescripcion().'</strong>';
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
            		
        if($contexto_solicitante != PrdOrdenTrabajoTipoEstado::GEN_CLASE){
            if($this->getPrdOrdenTrabajoTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdOrdenTrabajoTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdOrdenTrabajoTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prd_orden_trabajo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prd_orden_trabajo';");
            
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

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_id' */ 	
	static function getOxVtaPresupuestoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_presupuesto_ins_insumo_id' */ 	
	static function getOxVtaPresupuestoInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_id' */ 	
	static function getOsxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_tipo_origen_id' */ 	
	static function getOxPrdTipoOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_TIPO_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_tipo_origen_id' */ 	
	static function getOsxPrdTipoOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_TIPO_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_proceso_productivo_id' */ 	
	static function getOxPrdProcesoProductivoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_proceso_productivo_id' */ 	
	static function getOsxPrdProcesoProductivoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PROCESO_PRODUCTIVO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_prioridad_id' */ 	
	static function getOxPrdPrioridadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PRIORIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_prioridad_id' */ 	
	static function getOsxPrdPrioridadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PRIORIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ins_insumo_id' */ 	
	static function getOxInsInsumoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_INS_INSUMO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_orden_trabajo_tipo_estado_id' */ 	
	static function getOxPrdOrdenTrabajoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_orden_trabajo_tipo_estado_id' */ 	
	static function getOsxPrdOrdenTrabajoTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_ORDEN_TRABAJO_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad' */ 	
	static function getOxCantidad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha' */ 	
	static function getOxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha' */ 	
	static function getOsxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos(null, $criterio);
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

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prd_orden_trabajo_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha' */ 	
	public function getFechaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFecha(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaDiferenciaDias();
        
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

	/* setea PrdOrdenTrabajoEstado actual del 'PrdOrdenTrabajo' */ 	
	public function setPrdOrdenTrabajoEstadoDesdeBackend($codigo, $observacion){
            return $this->setPrdOrdenTrabajoEstado($codigo, $observacion);
        }
        

	/* setea PrdOrdenTrabajoEstado actual del 'PrdOrdenTrabajo' */ 	
	public function setPrdOrdenTrabajoEstado($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los PrdOrdenTrabajoEstado del PrdOrdenTrabajo
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getPrdOrdenTrabajoEstados() as $prd_orden_trabajo_estado) {
                $prd_orden_trabajo_estado->setActual(0);
                $prd_orden_trabajo_estado->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo PrdOrdenTrabajoEstado del PrdOrdenTrabajo        
            // --------------------------------------------------------------------
            $prd_orden_trabajo_tipo_estado = PrdOrdenTrabajoTipoEstado::getOxCodigo($codigo);

            $prd_orden_trabajo_estado = new PrdOrdenTrabajoEstado();
            $prd_orden_trabajo_estado->setPrdOrdenTrabajoId($this->getId());
            $prd_orden_trabajo_estado->setPrdOrdenTrabajoTipoEstadoId($prd_orden_trabajo_tipo_estado->getId());
            $prd_orden_trabajo_estado->setInicial($inicial);
            $prd_orden_trabajo_estado->setActual(1);
            $prd_orden_trabajo_estado->setEstado(1);
            $prd_orden_trabajo_estado->setObservacion($observacion);
            $prd_orden_trabajo_estado->save();

            // --------------------------------------------------------------------
            // se actualiza el PrdOrdenTrabajoEstado en PrdOrdenTrabajo        
            // --------------------------------------------------------------------
            $this->setPrdOrdenTrabajoTipoEstadoId($prd_orden_trabajo_tipo_estado->getId());
            $this->saveDesdeProceso();

            return $prd_orden_trabajo_estado;
	}

	/* devuelve el PrdOrdenTrabajoEstado actual del 'PrdOrdenTrabajo' */ 	
	public function getPrdOrdenTrabajoEstadoActual(){
            
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_ID, $this->getId(), Criterio::IGUAL);
            $c->add(PrdOrdenTrabajoEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoEstado::GEN_TABLA);
            $c->setCriterios();

            $prd_orden_trabajo_estados = PrdOrdenTrabajoEstado::getPrdOrdenTrabajoEstados(null, $c);
            foreach ($prd_orden_trabajo_estados as $prd_orden_trabajo_estado) {
                return $prd_orden_trabajo_estado;
            }
            return false;
	}

	/* devuelve el PrdOrdenTrabajoTipoEstado potenciales para el 'PrdOrdenTrabajo' */ 	
	public function getPrdOrdenTrabajoTipoEstadosPotenciales(){
            $prd_orden_trabajo_tipo_estados = PrdOrdenTrabajoTipoEstado::getPrdOrdenTrabajoTipoEstados(null, null, true);
            return $prd_orden_trabajo_tipo_estados;
	}

	/* devuelve el PrdOrdenTrabajoTipoEstado en CMB potenciales para el 'PrdOrdenTrabajo' */ 	
	public function getPrdOrdenTrabajoTipoEstadosPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getPrdOrdenTrabajoTipoEstadosPotenciales() as $prd_orden_trabajo_tipo_estado) {
                $cont++;
                $arr[$cont]['cod'] = $prd_orden_trabajo_tipo_estado->getId();
                $arr[$cont]['descripcion'] = $prd_orden_trabajo_tipo_estado->getDescripcionParaSelect();
            }
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(PrdOrdenTrabajo::GEN_TABLA);
                $c->addOrden(PrdOrdenTrabajo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $prd_orden_trabajos = PrdOrdenTrabajo::getPrdOrdenTrabajos(null, $c);

                $arr = array();
                foreach($prd_orden_trabajos as $prd_orden_trabajo){
                    $descripcion = $prd_orden_trabajo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>