<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrdOrdenTrabajoOperacion
{ 
	
	const SES_PAGINACION = 'adm_prdordentrabajooperacion_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prdordentrabajooperacion_paginas_registros';
	const SES_CRITERIOS = 'adm_prdordentrabajooperacion_criterios';
	
	const GEN_CLASE = 'PrdOrdenTrabajoOperacion';
	const GEN_TABLA = 'prd_orden_trabajo_operacion';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrdOrdenTrabajoOperacion */ 
	const GEN_ATTR_ID = 'prd_orden_trabajo_operacion.id';
	const GEN_ATTR_DESCRIPCION = 'prd_orden_trabajo_operacion.descripcion';
	const GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID = 'prd_orden_trabajo_operacion.prd_orden_trabajo_ciclo_id';
	const GEN_ATTR_PRD_PARAM_OPERACION_ID = 'prd_orden_trabajo_operacion.prd_param_operacion_id';
	const GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID = 'prd_orden_trabajo_operacion.prd_orden_trabajo_operacion_tipo_estado_id';
	const GEN_ATTR_CANTIDAD_OPERARIOS = 'prd_orden_trabajo_operacion.cantidad_operarios';
	const GEN_ATTR_CANTIDAD_EQUIPOS = 'prd_orden_trabajo_operacion.cantidad_equipos';
	const GEN_ATTR_NUMERO = 'prd_orden_trabajo_operacion.numero';
	const GEN_ATTR_CODIGO = 'prd_orden_trabajo_operacion.codigo';
	const GEN_ATTR_OBSERVACION = 'prd_orden_trabajo_operacion.observacion';
	const GEN_ATTR_ORDEN = 'prd_orden_trabajo_operacion.orden';
	const GEN_ATTR_ESTADO = 'prd_orden_trabajo_operacion.estado';
	const GEN_ATTR_CREADO = 'prd_orden_trabajo_operacion.creado';
	const GEN_ATTR_CREADO_POR = 'prd_orden_trabajo_operacion.creado_por';
	const GEN_ATTR_MODIFICADO = 'prd_orden_trabajo_operacion.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prd_orden_trabajo_operacion.modificado_por';

	/* Constantes de Atributos Min de BPrdOrdenTrabajoOperacion */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_CICLO_ID = 'prd_orden_trabajo_ciclo_id';
	const GEN_ATTR_MIN_PRD_PARAM_OPERACION_ID = 'prd_param_operacion_id';
	const GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID = 'prd_orden_trabajo_operacion_tipo_estado_id';
	const GEN_ATTR_MIN_CANTIDAD_OPERARIOS = 'cantidad_operarios';
	const GEN_ATTR_MIN_CANTIDAD_EQUIPOS = 'cantidad_equipos';
	const GEN_ATTR_MIN_NUMERO = 'numero';
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
	

	/* Atributos de BPrdOrdenTrabajoOperacion */ 
	private $id;
	private $descripcion;
	private $prd_orden_trabajo_ciclo_id;
	private $prd_param_operacion_id;
	private $prd_orden_trabajo_operacion_tipo_estado_id;
	private $cantidad_operarios;
	private $cantidad_equipos;
	private $numero;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrdOrdenTrabajoOperacion */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPrdOrdenTrabajoCicloId(){ if(isset($this->prd_orden_trabajo_ciclo_id)){ return $this->prd_orden_trabajo_ciclo_id; }else{ return 'null'; } }
	public function getPrdParamOperacionId(){ if(isset($this->prd_param_operacion_id)){ return $this->prd_param_operacion_id; }else{ return 'null'; } }
	public function getPrdOrdenTrabajoOperacionTipoEstadoId(){ if(isset($this->prd_orden_trabajo_operacion_tipo_estado_id)){ return $this->prd_orden_trabajo_operacion_tipo_estado_id; }else{ return 'null'; } }
	public function getCantidadOperarios(){ if(isset($this->cantidad_operarios)){ return $this->cantidad_operarios; }else{ return 0; } }
	public function getCantidadEquipos(){ if(isset($this->cantidad_equipos)){ return $this->cantidad_equipos; }else{ return 0; } }
	public function getNumero(){ if(isset($this->numero)){ return $this->numero; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPrdOrdenTrabajoOperacion */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID."
				, ".self::GEN_ATTR_PRD_PARAM_OPERACION_ID."
				, ".self::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID."
				, ".self::GEN_ATTR_CANTIDAD_OPERARIOS."
				, ".self::GEN_ATTR_CANTIDAD_EQUIPOS."
				, ".self::GEN_ATTR_NUMERO."
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
				$this->setPrdOrdenTrabajoCicloId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_CICLO_ID]);
				$this->setPrdParamOperacionId($fila[self::GEN_ATTR_MIN_PRD_PARAM_OPERACION_ID]);
				$this->setPrdOrdenTrabajoOperacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID]);
				$this->setCantidadOperarios($fila[self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS]);
				$this->setCantidadEquipos($fila[self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS]);
				$this->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
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
	public function setPrdOrdenTrabajoCicloId($v){ $this->prd_orden_trabajo_ciclo_id = $v; }
	public function setPrdParamOperacionId($v){ $this->prd_param_operacion_id = $v; }
	public function setPrdOrdenTrabajoOperacionTipoEstadoId($v){ $this->prd_orden_trabajo_operacion_tipo_estado_id = $v; }
	public function setCantidadOperarios($v){ $this->cantidad_operarios = $v; }
	public function setCantidadEquipos($v){ $this->cantidad_equipos = $v; }
	public function setNumero($v){ $this->numero = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrdOrdenTrabajoOperacion();
            $o->setId($fila[PrdOrdenTrabajoOperacion::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPrdOrdenTrabajoCicloId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_CICLO_ID]);
			$o->setPrdParamOperacionId($fila[self::GEN_ATTR_MIN_PRD_PARAM_OPERACION_ID]);
			$o->setPrdOrdenTrabajoOperacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID]);
			$o->setCantidadOperarios($fila[self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS]);
			$o->setCantidadEquipos($fila[self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS]);
			$o->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
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

	/* Control de BPrdOrdenTrabajoOperacion */ 	
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

	/* Cambia el estado de BPrdOrdenTrabajoOperacion */ 	
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

	/* Save de BPrdOrdenTrabajoOperacion */ 	
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
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_CICLO_ID."
						, ".self::GEN_ATTR_MIN_PRD_PARAM_OPERACION_ID."
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS."
						, ".self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prd_orden_trabajo_operacion_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPrdOrdenTrabajoCicloId()."
						, ".$this->getPrdParamOperacionId()."
						, ".$this->getPrdOrdenTrabajoOperacionTipoEstadoId()."
						, ".$this->getCantidadOperarios()."
						, ".$this->getCantidadEquipos()."
						, ".$this->getNumero()."
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prd_orden_trabajo_operacion_seq')";
            
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
                 
				 ".PrdOrdenTrabajoOperacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_CICLO_ID." = ".$this->getPrdOrdenTrabajoCicloId()."
						, ".self::GEN_ATTR_MIN_PRD_PARAM_OPERACION_ID." = ".$this->getPrdParamOperacionId()."
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID." = ".$this->getPrdOrdenTrabajoOperacionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS." = ".$this->getCantidadOperarios()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS." = ".$this->getCantidadEquipos()."
						, ".self::GEN_ATTR_MIN_NUMERO." = ".$this->getNumero()."
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
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_CICLO_ID."
						, ".self::GEN_ATTR_MIN_PRD_PARAM_OPERACION_ID."
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS."
						, ".self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS."
						, ".self::GEN_ATTR_MIN_NUMERO."
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
						, ".$this->getPrdOrdenTrabajoCicloId()."
						, ".$this->getPrdParamOperacionId()."
						, ".$this->getPrdOrdenTrabajoOperacionTipoEstadoId()."
						, ".$this->getCantidadOperarios()."
						, ".$this->getCantidadEquipos()."
						, ".$this->getNumero()."
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
                     
				 ".PrdOrdenTrabajoOperacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_CICLO_ID." = ".$this->getPrdOrdenTrabajoCicloId()."
						, ".self::GEN_ATTR_MIN_PRD_PARAM_OPERACION_ID." = ".$this->getPrdParamOperacionId()."
						, ".self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID." = ".$this->getPrdOrdenTrabajoOperacionTipoEstadoId()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS." = ".$this->getCantidadOperarios()."
						, ".self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS." = ".$this->getCantidadEquipos()."
						, ".self::GEN_ATTR_MIN_NUMERO." = ".$this->getNumero()."
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
            $o = new PrdOrdenTrabajoOperacion();
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

	/* Delete de BPrdOrdenTrabajoOperacion */ 	
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
	
            // se elimina la coleccion de PrdOrdenTrabajoOperacionEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoOperacionEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoOperacionEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdOrdenTrabajoOperacionPrdEquipos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoOperacionPrdEquipos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdOrdenTrabajoOperacionOpeOperarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoOperacionOpeOperario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoOperacionOpeOperarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrdOrdenTrabajoOperacion(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrdOrdenTrabajoOperacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrdOrdenTrabajoOperacion::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prdordentrabajooperacions = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prdordentrabajooperacion = new PrdOrdenTrabajoOperacion();
                    $prdordentrabajooperacion->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prdordentrabajooperacion->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$prdordentrabajooperacion->setPrdOrdenTrabajoCicloId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_CICLO_ID]);
			$prdordentrabajooperacion->setPrdParamOperacionId($fila[self::GEN_ATTR_MIN_PRD_PARAM_OPERACION_ID]);
			$prdordentrabajooperacion->setPrdOrdenTrabajoOperacionTipoEstadoId($fila[self::GEN_ATTR_MIN_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID]);
			$prdordentrabajooperacion->setCantidadOperarios($fila[self::GEN_ATTR_MIN_CANTIDAD_OPERARIOS]);
			$prdordentrabajooperacion->setCantidadEquipos($fila[self::GEN_ATTR_MIN_CANTIDAD_EQUIPOS]);
			$prdordentrabajooperacion->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$prdordentrabajooperacion->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$prdordentrabajooperacion->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prdordentrabajooperacion->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prdordentrabajooperacion->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prdordentrabajooperacion->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prdordentrabajooperacion->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prdordentrabajooperacion->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prdordentrabajooperacion->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prdordentrabajooperacions[] = $prdordentrabajooperacion;
		}
		
		return $prdordentrabajooperacions;
	}	
	

	/* Método getPrdOrdenTrabajoOperacions Habilitados */ 	
	static function getPrdOrdenTrabajoOperacionsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrdOrdenTrabajoOperacions para listado de Backend */ 	
	static function getPrdOrdenTrabajoOperacionsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrdOrdenTrabajoOperacionsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrdOrdenTrabajoOperacion::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrdOrdenTrabajoOperacions filtrado para select */ 	
	static function getPrdOrdenTrabajoOperacionsCmbF($paginador = null, $criterio = null){
            $col = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrdOrdenTrabajoOperacions filtrado por una coleccion de objetos foraneos de PrdOrdenTrabajoCiclo */ 	
	static function getPrdOrdenTrabajoOperacionsXPrdOrdenTrabajoCiclos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdOrdenTrabajoCicloId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajoOperacions filtrado por una coleccion de objetos foraneos de PrdParamOperacion */ 	
	static function getPrdOrdenTrabajoOperacionsXPrdParamOperacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_PARAM_OPERACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdParamOperacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPrdOrdenTrabajoOperacions filtrado por una coleccion de objetos foraneos de PrdOrdenTrabajoOperacionTipoEstado */ 	
	static function getPrdOrdenTrabajoOperacionsXPrdOrdenTrabajoOperacionTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPrdOrdenTrabajoOperacionTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'prd_orden_trabajo_operacion_adm.php';
            $url_gestion = 'prd_orden_trabajo_operacion_gestion.php';
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
	

	/* Metodo getPrdOrdenTrabajoOperacionEstados */ 	
	public function getPrdOrdenTrabajoOperacionEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajoOperacionEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajoOperacionEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajoOperacionEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajoOperacionEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajooperacionestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajooperacionestado = PrdOrdenTrabajoOperacionEstado::hidratarObjeto($fila);			
                $prdordentrabajooperacionestados[] = $prdordentrabajooperacionestado;
            }

            return $prdordentrabajooperacionestados;
	}	
	

	/* Método getPrdOrdenTrabajoOperacionEstadosBloque para MasInfo */ 	
	public function getPrdOrdenTrabajoOperacionEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajoOperacionEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacionEstados Habilitados */ 	
	public function getPrdOrdenTrabajoOperacionEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajoOperacionEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacionEstado */ 	
	public function getPrdOrdenTrabajoOperacionEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajoOperacionEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajoOperacionEstado relacionadas */ 	
	public function deletePrdOrdenTrabajoOperacionEstados(){
            $obs = $this->getPrdOrdenTrabajoOperacionEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajoOperacionEstadosCmb() PrdOrdenTrabajoOperacionEstado relacionadas */ 	
	public function getPrdOrdenTrabajoOperacionEstadosCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacionEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacionEstado::getPrdOrdenTrabajoOperacionEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdOrdenTrabajoOperacionTipoEstados (Coleccion) relacionados a traves de PrdOrdenTrabajoOperacionEstado */ 	
	public function getPrdOrdenTrabajoOperacionTipoEstadosXPrdOrdenTrabajoOperacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionEstado::GEN_TABLA, PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdOrdenTrabajoOperacionTipoEstados relacionados a traves de PrdOrdenTrabajoOperacionEstado */ 	
	public function getCantidadPrdOrdenTrabajoOperacionTipoEstadosXPrdOrdenTrabajoOperacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionEstado::GEN_TABLA, PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdOrdenTrabajoOperacionTipoEstado (Objeto) relacionado a traves de PrdOrdenTrabajoOperacionEstado */ 	
	public function getPrdOrdenTrabajoOperacionTipoEstadoXPrdOrdenTrabajoOperacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdOrdenTrabajoOperacionTipoEstadosXPrdOrdenTrabajoOperacionEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdOrdenTrabajoOperacionPrdEquipos */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquipos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajoOperacionPrdEquipo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajoOperacionPrdEquipo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajooperacionprdequipos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajooperacionprdequipo = PrdOrdenTrabajoOperacionPrdEquipo::hidratarObjeto($fila);			
                $prdordentrabajooperacionprdequipos[] = $prdordentrabajooperacionprdequipo;
            }

            return $prdordentrabajooperacionprdequipos;
	}	
	

	/* Método getPrdOrdenTrabajoOperacionPrdEquiposBloque para MasInfo */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquiposParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajoOperacionPrdEquipos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacionPrdEquipos Habilitados */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquiposHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajoOperacionPrdEquipos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacionPrdEquipo */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquipo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajoOperacionPrdEquipos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajoOperacionPrdEquipo relacionadas */ 	
	public function deletePrdOrdenTrabajoOperacionPrdEquipos(){
            $obs = $this->getPrdOrdenTrabajoOperacionPrdEquipos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajoOperacionPrdEquiposCmb() PrdOrdenTrabajoOperacionPrdEquipo relacionadas */ 	
	public function getPrdOrdenTrabajoOperacionPrdEquiposCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacionPrdEquipo::getPrdOrdenTrabajoOperacionPrdEquiposCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdEquipos (Coleccion) relacionados a traves de PrdOrdenTrabajoOperacionPrdEquipo */ 	
	public function getPrdEquiposXPrdOrdenTrabajoOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdEquipo::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA, PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, PrdEquipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdEquipo::getPrdEquipos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdEquipos relacionados a traves de PrdOrdenTrabajoOperacionPrdEquipo */ 	
	public function getCantidadPrdEquiposXPrdOrdenTrabajoOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdEquipo::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdEquipo::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionPrdEquipo::GEN_TABLA, PrdOrdenTrabajoOperacionPrdEquipo::GEN_ATTR_PRD_EQUIPO_ID, PrdEquipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdEquipo::getPrdEquipos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdEquipo (Objeto) relacionado a traves de PrdOrdenTrabajoOperacionPrdEquipo */ 	
	public function getPrdEquipoXPrdOrdenTrabajoOperacionPrdEquipo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdEquiposXPrdOrdenTrabajoOperacionPrdEquipo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrdOrdenTrabajoOperacionOpeOperarios */ 	
	public function getPrdOrdenTrabajoOperacionOpeOperarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajoOperacionOpeOperario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajoOperacionOpeOperario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajoOperacionOpeOperario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajoOperacionOpeOperario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajooperacionopeoperarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajooperacionopeoperario = PrdOrdenTrabajoOperacionOpeOperario::hidratarObjeto($fila);			
                $prdordentrabajooperacionopeoperarios[] = $prdordentrabajooperacionopeoperario;
            }

            return $prdordentrabajooperacionopeoperarios;
	}	
	

	/* Método getPrdOrdenTrabajoOperacionOpeOperariosBloque para MasInfo */ 	
	public function getPrdOrdenTrabajoOperacionOpeOperariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajoOperacionOpeOperarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacionOpeOperarios Habilitados */ 	
	public function getPrdOrdenTrabajoOperacionOpeOperariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajoOperacionOpeOperarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacionOpeOperario */ 	
	public function getPrdOrdenTrabajoOperacionOpeOperario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajoOperacionOpeOperarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajoOperacionOpeOperario relacionadas */ 	
	public function deletePrdOrdenTrabajoOperacionOpeOperarios(){
            $obs = $this->getPrdOrdenTrabajoOperacionOpeOperarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajoOperacionOpeOperariosCmb() PrdOrdenTrabajoOperacionOpeOperario relacionadas */ 	
	public function getPrdOrdenTrabajoOperacionOpeOperariosCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacionOpeOperario::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacionOpeOperario::getPrdOrdenTrabajoOperacionOpeOperariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener OpeOperarios (Coleccion) relacionados a traves de PrdOrdenTrabajoOperacionOpeOperario */ 	
	public function getOpeOperariosXPrdOrdenTrabajoOperacionOpeOperario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(OpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeOperario::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionOpeOperario::GEN_TABLA, PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_OPE_OPERARIO_ID, OpeOperario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeOperario::getOpeOperarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de OpeOperarios relacionados a traves de PrdOrdenTrabajoOperacionOpeOperario */ 	
	public function getCantidadOpeOperariosXPrdOrdenTrabajoOperacionOpeOperario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(OpeOperario::GEN_ATTR_ID);
            if($estado){
                $c->add(OpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeOperario::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionOpeOperario::GEN_TABLA, PrdOrdenTrabajoOperacionOpeOperario::GEN_ATTR_OPE_OPERARIO_ID, OpeOperario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeOperario::getOpeOperarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener OpeOperario (Objeto) relacionado a traves de PrdOrdenTrabajoOperacionOpeOperario */ 	
	public function getOpeOperarioXPrdOrdenTrabajoOperacionOpeOperario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getOpeOperariosXPrdOrdenTrabajoOperacionOpeOperario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el PrdOrdenTrabajoCiclo (Clave Foranea) */ 	
    public function getPrdOrdenTrabajoCiclo(){
        $o = new PrdOrdenTrabajoCiclo();
        $o->setId($this->getPrdOrdenTrabajoCicloId());
        return $o;			
    }

	/* Metodo que retorna el PrdOrdenTrabajoCiclo (Clave Foranea) en Array */ 	
    public function getPrdOrdenTrabajoCicloEnArray(&$arr_os){
        if($this->getPrdOrdenTrabajoCicloId() != 'null'){
            if(isset($arr_os[$this->getPrdOrdenTrabajoCicloId()])){
                $o = $arr_os[$this->getPrdOrdenTrabajoCicloId()];
            }else{
                $o = PrdOrdenTrabajoCiclo::getOxId($this->getPrdOrdenTrabajoCicloId());
                if($o){
                    $arr_os[$this->getPrdOrdenTrabajoCicloId()] = $o;
                }
            }
        }else{
            $o = new PrdOrdenTrabajoCiclo();
        }
        return $o;		
    }

	/* Metodo que retorna el PrdParamOperacion (Clave Foranea) */ 	
    public function getPrdParamOperacion(){
        $o = new PrdParamOperacion();
        $o->setId($this->getPrdParamOperacionId());
        return $o;			
    }

	/* Metodo que retorna el PrdParamOperacion (Clave Foranea) en Array */ 	
    public function getPrdParamOperacionEnArray(&$arr_os){
        if($this->getPrdParamOperacionId() != 'null'){
            if(isset($arr_os[$this->getPrdParamOperacionId()])){
                $o = $arr_os[$this->getPrdParamOperacionId()];
            }else{
                $o = PrdParamOperacion::getOxId($this->getPrdParamOperacionId());
                if($o){
                    $arr_os[$this->getPrdParamOperacionId()] = $o;
                }
            }
        }else{
            $o = new PrdParamOperacion();
        }
        return $o;		
    }

	/* Metodo que retorna el PrdOrdenTrabajoOperacionTipoEstado (Clave Foranea) */ 	
    public function getPrdOrdenTrabajoOperacionTipoEstado(){
        $o = new PrdOrdenTrabajoOperacionTipoEstado();
        $o->setId($this->getPrdOrdenTrabajoOperacionTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PrdOrdenTrabajoOperacionTipoEstado (Clave Foranea) en Array */ 	
    public function getPrdOrdenTrabajoOperacionTipoEstadoEnArray(&$arr_os){
        if($this->getPrdOrdenTrabajoOperacionTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPrdOrdenTrabajoOperacionTipoEstadoId()])){
                $o = $arr_os[$this->getPrdOrdenTrabajoOperacionTipoEstadoId()];
            }else{
                $o = PrdOrdenTrabajoOperacionTipoEstado::getOxId($this->getPrdOrdenTrabajoOperacionTipoEstadoId());
                if($o){
                    $arr_os[$this->getPrdOrdenTrabajoOperacionTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PrdOrdenTrabajoOperacionTipoEstado();
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
            		
        if($contexto_solicitante != PrdOrdenTrabajoCiclo::GEN_CLASE){
            if($this->getPrdOrdenTrabajoCiclo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdOrdenTrabajoCiclo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdOrdenTrabajoCiclo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrdParamOperacion::GEN_CLASE){
            if($this->getPrdParamOperacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdParamOperacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdParamOperacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PrdOrdenTrabajoOperacionTipoEstado::GEN_CLASE){
            if($this->getPrdOrdenTrabajoOperacionTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PrdOrdenTrabajoOperacionTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPrdOrdenTrabajoOperacionTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prd_orden_trabajo_operacion'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prd_orden_trabajo_operacion';");
            
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

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_orden_trabajo_ciclo_id' */ 	
	static function getOxPrdOrdenTrabajoCicloId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_orden_trabajo_ciclo_id' */ 	
	static function getOsxPrdOrdenTrabajoCicloId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_param_operacion_id' */ 	
	static function getOxPrdParamOperacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PARAM_OPERACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_param_operacion_id' */ 	
	static function getOsxPrdParamOperacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_PARAM_OPERACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'prd_orden_trabajo_operacion_tipo_estado_id' */ 	
	static function getOxPrdOrdenTrabajoOperacionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'prd_orden_trabajo_operacion_tipo_estado_id' */ 	
	static function getOsxPrdOrdenTrabajoOperacionTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_operarios' */ 	
	static function getOxCantidadOperarios($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_OPERARIOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_operarios' */ 	
	static function getOsxCantidadOperarios($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_OPERARIOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cantidad_equipos' */ 	
	static function getOxCantidadEquipos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_EQUIPOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cantidad_equipos' */ 	
	static function getOsxCantidadEquipos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CANTIDAD_EQUIPOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero' */ 	
	static function getOxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero' */ 	
	static function getOsxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions(null, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacions($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prd_orden_trabajo_operacion_adm');
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

	/* setea PrdOrdenTrabajoOperacionEstado actual del 'PrdOrdenTrabajoOperacion' */ 	
	public function setPrdOrdenTrabajoOperacionEstadoDesdeBackend($codigo, $observacion){
            return $this->setPrdOrdenTrabajoOperacionEstado($codigo, $observacion);
        }
        

	/* setea PrdOrdenTrabajoOperacionEstado actual del 'PrdOrdenTrabajoOperacion' */ 	
	public function setPrdOrdenTrabajoOperacionEstado($codigo, $observacion){
            
            // --------------------------------------------------------------------
            // se actualizan los campos actual de todos los PrdOrdenTrabajoOperacionEstado del PrdOrdenTrabajoOperacion
            // --------------------------------------------------------------------
            $inicial = 1;
            foreach ($this->getPrdOrdenTrabajoOperacionEstados() as $prd_orden_trabajo_operacion_estado) {
                $prd_orden_trabajo_operacion_estado->setActual(0);
                $prd_orden_trabajo_operacion_estado->save();

                $inicial = 0;
            }

            // --------------------------------------------------------------------
            // se agrega el nuevo PrdOrdenTrabajoOperacionEstado del PrdOrdenTrabajoOperacion        
            // --------------------------------------------------------------------
            $prd_orden_trabajo_operacion_tipo_estado = PrdOrdenTrabajoOperacionTipoEstado::getOxCodigo($codigo);

            $prd_orden_trabajo_operacion_estado = new PrdOrdenTrabajoOperacionEstado();
            $prd_orden_trabajo_operacion_estado->setPrdOrdenTrabajoOperacionId($this->getId());
            $prd_orden_trabajo_operacion_estado->setPrdOrdenTrabajoOperacionTipoEstadoId($prd_orden_trabajo_operacion_tipo_estado->getId());
            $prd_orden_trabajo_operacion_estado->setInicial($inicial);
            $prd_orden_trabajo_operacion_estado->setActual(1);
            $prd_orden_trabajo_operacion_estado->setEstado(1);
            $prd_orden_trabajo_operacion_estado->setObservacion($observacion);
            $prd_orden_trabajo_operacion_estado->save();

            // --------------------------------------------------------------------
            // se actualiza el PrdOrdenTrabajoOperacionEstado en PrdOrdenTrabajoOperacion        
            // --------------------------------------------------------------------
            $this->setPrdOrdenTrabajoOperacionTipoEstadoId($prd_orden_trabajo_operacion_tipo_estado->getId());
            $this->saveDesdeProceso();

            return $prd_orden_trabajo_operacion_estado;
	}

	/* devuelve el PrdOrdenTrabajoOperacionEstado actual del 'PrdOrdenTrabajoOperacion' */ 	
	public function getPrdOrdenTrabajoOperacionEstadoActual(){
            
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, $this->getId(), Criterio::IGUAL);
            $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacionEstado::GEN_TABLA);
            $c->setCriterios();

            $prd_orden_trabajo_operacion_estados = PrdOrdenTrabajoOperacionEstado::getPrdOrdenTrabajoOperacionEstados(null, $c);
            foreach ($prd_orden_trabajo_operacion_estados as $prd_orden_trabajo_operacion_estado) {
                return $prd_orden_trabajo_operacion_estado;
            }
            return false;
	}

	/* devuelve el PrdOrdenTrabajoOperacionTipoEstado potenciales para el 'PrdOrdenTrabajoOperacion' */ 	
	public function getPrdOrdenTrabajoOperacionTipoEstadosPotenciales(){
            $prd_orden_trabajo_operacion_tipo_estados = PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstados(null, null, true);
            return $prd_orden_trabajo_operacion_tipo_estados;
	}

	/* devuelve el PrdOrdenTrabajoOperacionTipoEstado en CMB potenciales para el 'PrdOrdenTrabajoOperacion' */ 	
	public function getPrdOrdenTrabajoOperacionTipoEstadosPotencialesCmb(){
            $cont = 0;
            $arr = array();
            foreach ($this->getPrdOrdenTrabajoOperacionTipoEstadosPotenciales() as $prd_orden_trabajo_operacion_tipo_estado) {
                $cont++;
                $arr[$cont]['cod'] = $prd_orden_trabajo_operacion_tipo_estado->getId();
                $arr[$cont]['descripcion'] = $prd_orden_trabajo_operacion_tipo_estado->getDescripcionParaSelect();
            }
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
                $c->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $prd_orden_trabajo_operacions = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions(null, $c);

                $arr = array();
                foreach($prd_orden_trabajo_operacions as $prd_orden_trabajo_operacion){
                    $descripcion = $prd_orden_trabajo_operacion->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>