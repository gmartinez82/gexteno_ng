<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPerMovMovimiento
{ 
	
	const SES_PAGINACION = 'adm_permovmovimiento_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_permovmovimiento_paginas_registros';
	const SES_CRITERIOS = 'adm_permovmovimiento_criterios';
	
	const GEN_CLASE = 'PerMovMovimiento';
	const GEN_TABLA = 'per_mov_movimiento';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPerMovMovimiento */ 
	const GEN_ATTR_ID = 'per_mov_movimiento.id';
	const GEN_ATTR_DESCRIPCION = 'per_mov_movimiento.descripcion';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'per_mov_movimiento.gral_empresa_id';
	const GEN_ATTR_PER_PERSONA_ID = 'per_mov_movimiento.per_persona_id';
	const GEN_ATTR_CODIGO = 'per_mov_movimiento.codigo';
	const GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID = 'per_mov_movimiento.per_mov_tipo_movimiento_id';
	const GEN_ATTR_FECHAHORA = 'per_mov_movimiento.fechahora';
	const GEN_ATTR_CTRL_SECTOR_ID = 'per_mov_movimiento.ctrl_sector_id';
	const GEN_ATTR_CTRL_EQUIPO_ID = 'per_mov_movimiento.ctrl_equipo_id';
	const GEN_ATTR_PER_MOV_TIPO_ESTADO_ID = 'per_mov_movimiento.per_mov_tipo_estado_id';
	const GEN_ATTR_OBSERVACION = 'per_mov_movimiento.observacion';
	const GEN_ATTR_ORDEN = 'per_mov_movimiento.orden';
	const GEN_ATTR_ESTADO = 'per_mov_movimiento.estado';
	const GEN_ATTR_CREADO = 'per_mov_movimiento.creado';
	const GEN_ATTR_CREADO_POR = 'per_mov_movimiento.creado_por';
	const GEN_ATTR_MODIFICADO = 'per_mov_movimiento.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'per_mov_movimiento.modificado_por';

	/* Constantes de Atributos Min de BPerMovMovimiento */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_PER_PERSONA_ID = 'per_persona_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_PER_MOV_TIPO_MOVIMIENTO_ID = 'per_mov_tipo_movimiento_id';
	const GEN_ATTR_MIN_FECHAHORA = 'fechahora';
	const GEN_ATTR_MIN_CTRL_SECTOR_ID = 'ctrl_sector_id';
	const GEN_ATTR_MIN_CTRL_EQUIPO_ID = 'ctrl_equipo_id';
	const GEN_ATTR_MIN_PER_MOV_TIPO_ESTADO_ID = 'per_mov_tipo_estado_id';
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
	

	/* Atributos de BPerMovMovimiento */ 
	private $id;
	private $descripcion;
	private $gral_empresa_id;
	private $per_persona_id;
	private $codigo;
	private $per_mov_tipo_movimiento_id;
	private $fechahora;
	private $ctrl_sector_id;
	private $ctrl_equipo_id;
	private $per_mov_tipo_estado_id;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPerMovMovimiento */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getPerPersonaId(){ if(isset($this->per_persona_id)){ return $this->per_persona_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getPerMovTipoMovimientoId(){ if(isset($this->per_mov_tipo_movimiento_id)){ return $this->per_mov_tipo_movimiento_id; }else{ return 'null'; } }
	public function getFechahora(){ if(isset($this->fechahora)){ return $this->fechahora; }else{ return ''; } }
	public function getCtrlSectorId(){ if(isset($this->ctrl_sector_id)){ return $this->ctrl_sector_id; }else{ return 'null'; } }
	public function getCtrlEquipoId(){ if(isset($this->ctrl_equipo_id)){ return $this->ctrl_equipo_id; }else{ return 'null'; } }
	public function getPerMovTipoEstadoId(){ if(isset($this->per_mov_tipo_estado_id)){ return $this->per_mov_tipo_estado_id; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPerMovMovimiento */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_PER_PERSONA_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID."
				, ".self::GEN_ATTR_FECHAHORA."
				, ".self::GEN_ATTR_CTRL_SECTOR_ID."
				, ".self::GEN_ATTR_CTRL_EQUIPO_ID."
				, ".self::GEN_ATTR_PER_MOV_TIPO_ESTADO_ID."
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
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setPerMovTipoMovimientoId($fila[self::GEN_ATTR_MIN_PER_MOV_TIPO_MOVIMIENTO_ID]);
				$this->setFechahora($fila[self::GEN_ATTR_MIN_FECHAHORA]);
				$this->setCtrlSectorId($fila[self::GEN_ATTR_MIN_CTRL_SECTOR_ID]);
				$this->setCtrlEquipoId($fila[self::GEN_ATTR_MIN_CTRL_EQUIPO_ID]);
				$this->setPerMovTipoEstadoId($fila[self::GEN_ATTR_MIN_PER_MOV_TIPO_ESTADO_ID]);
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
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setPerPersonaId($v){ $this->per_persona_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setPerMovTipoMovimientoId($v){ $this->per_mov_tipo_movimiento_id = $v; }
	public function setFechahora($v){ $this->fechahora = $v; }
	public function setCtrlSectorId($v){ $this->ctrl_sector_id = $v; }
	public function setCtrlEquipoId($v){ $this->ctrl_equipo_id = $v; }
	public function setPerMovTipoEstadoId($v){ $this->per_mov_tipo_estado_id = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PerMovMovimiento();
            $o->setId($fila[PerMovMovimiento::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setPerMovTipoMovimientoId($fila[self::GEN_ATTR_MIN_PER_MOV_TIPO_MOVIMIENTO_ID]);
			$o->setFechahora($fila[self::GEN_ATTR_MIN_FECHAHORA]);
			$o->setCtrlSectorId($fila[self::GEN_ATTR_MIN_CTRL_SECTOR_ID]);
			$o->setCtrlEquipoId($fila[self::GEN_ATTR_MIN_CTRL_EQUIPO_ID]);
			$o->setPerMovTipoEstadoId($fila[self::GEN_ATTR_MIN_PER_MOV_TIPO_ESTADO_ID]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPerMovMovimiento */ 	
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

	/* Cambia el estado de BPerMovMovimiento */ 	
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

	/* Save de BPerMovMovimiento */ 	
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
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PER_PERSONA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_PER_MOV_TIPO_MOVIMIENTO_ID."
						, ".self::GEN_ATTR_MIN_FECHAHORA."
						, ".self::GEN_ATTR_MIN_CTRL_SECTOR_ID."
						, ".self::GEN_ATTR_MIN_CTRL_EQUIPO_ID."
						, ".self::GEN_ATTR_MIN_PER_MOV_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('per_mov_movimiento_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGralEmpresaId()."
						, ".$this->getPerPersonaId()."
						, '".$this->getCodigo()."'
						, ".$this->getPerMovTipoMovimientoId()."
						, '".$this->getFechahora()."'
						, ".$this->getCtrlSectorId()."
						, ".$this->getCtrlEquipoId()."
						, ".$this->getPerMovTipoEstadoId()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('per_mov_movimiento_seq')";
            
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
                 
				 ".PerMovMovimiento::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PER_PERSONA_ID." = ".$this->getPerPersonaId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PER_MOV_TIPO_MOVIMIENTO_ID." = ".$this->getPerMovTipoMovimientoId()."
						, ".self::GEN_ATTR_MIN_FECHAHORA." = '".$this->getFechahora()."'
						, ".self::GEN_ATTR_MIN_CTRL_SECTOR_ID." = ".$this->getCtrlSectorId()."
						, ".self::GEN_ATTR_MIN_CTRL_EQUIPO_ID." = ".$this->getCtrlEquipoId()."
						, ".self::GEN_ATTR_MIN_PER_MOV_TIPO_ESTADO_ID." = ".$this->getPerMovTipoEstadoId()."
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
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_PER_PERSONA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_PER_MOV_TIPO_MOVIMIENTO_ID."
						, ".self::GEN_ATTR_MIN_FECHAHORA."
						, ".self::GEN_ATTR_MIN_CTRL_SECTOR_ID."
						, ".self::GEN_ATTR_MIN_CTRL_EQUIPO_ID."
						, ".self::GEN_ATTR_MIN_PER_MOV_TIPO_ESTADO_ID."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getGralEmpresaId()."
						, ".$this->getPerPersonaId()."
						, '".$this->getCodigo()."'
						, ".$this->getPerMovTipoMovimientoId()."
						, '".$this->getFechahora()."'
						, ".$this->getCtrlSectorId()."
						, ".$this->getCtrlEquipoId()."
						, ".$this->getPerMovTipoEstadoId()."
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
                     
				 ".PerMovMovimiento::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_PER_PERSONA_ID." = ".$this->getPerPersonaId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_PER_MOV_TIPO_MOVIMIENTO_ID." = ".$this->getPerMovTipoMovimientoId()."
						, ".self::GEN_ATTR_MIN_FECHAHORA." = '".$this->getFechahora()."'
						, ".self::GEN_ATTR_MIN_CTRL_SECTOR_ID." = ".$this->getCtrlSectorId()."
						, ".self::GEN_ATTR_MIN_CTRL_EQUIPO_ID." = ".$this->getCtrlEquipoId()."
						, ".self::GEN_ATTR_MIN_PER_MOV_TIPO_ESTADO_ID." = ".$this->getPerMovTipoEstadoId()."
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
            $o = new PerMovMovimiento();
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

	/* Delete de BPerMovMovimiento */ 	
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
	
	public function duplicarPerMovMovimiento(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPerMovMovimientos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PerMovMovimiento::setAplicarFiltrosDeAlcance($criterio);

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
	
		$permovmovimientos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $permovmovimiento = new PerMovMovimiento();
                    $permovmovimiento->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $permovmovimiento->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$permovmovimiento->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$permovmovimiento->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
			$permovmovimiento->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$permovmovimiento->setPerMovTipoMovimientoId($fila[self::GEN_ATTR_MIN_PER_MOV_TIPO_MOVIMIENTO_ID]);
			$permovmovimiento->setFechahora($fila[self::GEN_ATTR_MIN_FECHAHORA]);
			$permovmovimiento->setCtrlSectorId($fila[self::GEN_ATTR_MIN_CTRL_SECTOR_ID]);
			$permovmovimiento->setCtrlEquipoId($fila[self::GEN_ATTR_MIN_CTRL_EQUIPO_ID]);
			$permovmovimiento->setPerMovTipoEstadoId($fila[self::GEN_ATTR_MIN_PER_MOV_TIPO_ESTADO_ID]);
			$permovmovimiento->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$permovmovimiento->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$permovmovimiento->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$permovmovimiento->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$permovmovimiento->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$permovmovimiento->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$permovmovimiento->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $permovmovimientos[] = $permovmovimiento;
		}
		
		return $permovmovimientos;
	}	
	

	/* Método getPerMovMovimientos Habilitados */ 	
	static function getPerMovMovimientosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PerMovMovimiento::getPerMovMovimientos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPerMovMovimientos para listado de Backend */ 	
	static function getPerMovMovimientosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PerMovMovimiento::getPerMovMovimientos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPerMovMovimientosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PerMovMovimiento::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PerMovMovimiento::getPerMovMovimientos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPerMovMovimientos filtrado para select */ 	
	static function getPerMovMovimientosCmbF($paginador = null, $criterio = null){
            $col = PerMovMovimiento::getPerMovMovimientos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPerMovMovimientos filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getPerMovMovimientosXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerMovMovimientos filtrado por una coleccion de objetos foraneos de PerPersona */ 	
	static function getPerMovMovimientosXPerPersonas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_PER_PERSONA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPerPersonaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerMovMovimientos filtrado por una coleccion de objetos foraneos de PerMovTipoMovimiento */ 	
	static function getPerMovMovimientosXPerMovTipoMovimientos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPerMovTipoMovimientoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerMovMovimientos filtrado por una coleccion de objetos foraneos de CtrlSector */ 	
	static function getPerMovMovimientosXCtrlSectors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_CTRL_SECTOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCtrlSectorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerMovMovimientos filtrado por una coleccion de objetos foraneos de CtrlEquipo */ 	
	static function getPerMovMovimientosXCtrlEquipos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_CTRL_EQUIPO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCtrlEquipoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerMovMovimientos filtrado por una coleccion de objetos foraneos de PerMovTipoEstado */ 	
	static function getPerMovMovimientosXPerMovTipoEstados($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerMovMovimiento::GEN_ATTR_PER_MOV_TIPO_ESTADO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerMovMovimiento::GEN_TABLA);
            $c->addOrden(PerMovMovimiento::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerMovMovimiento::getPerMovMovimientos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPerMovTipoEstadoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'per_mov_movimiento_adm.php';
            $url_gestion = 'per_mov_movimiento_gestion.php';
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

	/* Metodo que retorna el PerPersona (Clave Foranea) */ 	
    public function getPerPersona(){
        $o = new PerPersona();
        $o->setId($this->getPerPersonaId());
        return $o;			
    }

	/* Metodo que retorna el PerPersona (Clave Foranea) en Array */ 	
    public function getPerPersonaEnArray(&$arr_os){
        if($this->getPerPersonaId() != 'null'){
            if(isset($arr_os[$this->getPerPersonaId()])){
                $o = $arr_os[$this->getPerPersonaId()];
            }else{
                $o = PerPersona::getOxId($this->getPerPersonaId());
                if($o){
                    $arr_os[$this->getPerPersonaId()] = $o;
                }
            }
        }else{
            $o = new PerPersona();
        }
        return $o;		
    }

	/* Metodo que retorna el PerMovTipoMovimiento (Clave Foranea) */ 	
    public function getPerMovTipoMovimiento(){
        $o = new PerMovTipoMovimiento();
        $o->setId($this->getPerMovTipoMovimientoId());
        return $o;			
    }

	/* Metodo que retorna el PerMovTipoMovimiento (Clave Foranea) en Array */ 	
    public function getPerMovTipoMovimientoEnArray(&$arr_os){
        if($this->getPerMovTipoMovimientoId() != 'null'){
            if(isset($arr_os[$this->getPerMovTipoMovimientoId()])){
                $o = $arr_os[$this->getPerMovTipoMovimientoId()];
            }else{
                $o = PerMovTipoMovimiento::getOxId($this->getPerMovTipoMovimientoId());
                if($o){
                    $arr_os[$this->getPerMovTipoMovimientoId()] = $o;
                }
            }
        }else{
            $o = new PerMovTipoMovimiento();
        }
        return $o;		
    }

	/* Metodo que retorna el CtrlSector (Clave Foranea) */ 	
    public function getCtrlSector(){
        $o = new CtrlSector();
        $o->setId($this->getCtrlSectorId());
        return $o;			
    }

	/* Metodo que retorna el CtrlSector (Clave Foranea) en Array */ 	
    public function getCtrlSectorEnArray(&$arr_os){
        if($this->getCtrlSectorId() != 'null'){
            if(isset($arr_os[$this->getCtrlSectorId()])){
                $o = $arr_os[$this->getCtrlSectorId()];
            }else{
                $o = CtrlSector::getOxId($this->getCtrlSectorId());
                if($o){
                    $arr_os[$this->getCtrlSectorId()] = $o;
                }
            }
        }else{
            $o = new CtrlSector();
        }
        return $o;		
    }

	/* Metodo que retorna el CtrlEquipo (Clave Foranea) */ 	
    public function getCtrlEquipo(){
        $o = new CtrlEquipo();
        $o->setId($this->getCtrlEquipoId());
        return $o;			
    }

	/* Metodo que retorna el CtrlEquipo (Clave Foranea) en Array */ 	
    public function getCtrlEquipoEnArray(&$arr_os){
        if($this->getCtrlEquipoId() != 'null'){
            if(isset($arr_os[$this->getCtrlEquipoId()])){
                $o = $arr_os[$this->getCtrlEquipoId()];
            }else{
                $o = CtrlEquipo::getOxId($this->getCtrlEquipoId());
                if($o){
                    $arr_os[$this->getCtrlEquipoId()] = $o;
                }
            }
        }else{
            $o = new CtrlEquipo();
        }
        return $o;		
    }

	/* Metodo que retorna el PerMovTipoEstado (Clave Foranea) */ 	
    public function getPerMovTipoEstado(){
        $o = new PerMovTipoEstado();
        $o->setId($this->getPerMovTipoEstadoId());
        return $o;			
    }

	/* Metodo que retorna el PerMovTipoEstado (Clave Foranea) en Array */ 	
    public function getPerMovTipoEstadoEnArray(&$arr_os){
        if($this->getPerMovTipoEstadoId() != 'null'){
            if(isset($arr_os[$this->getPerMovTipoEstadoId()])){
                $o = $arr_os[$this->getPerMovTipoEstadoId()];
            }else{
                $o = PerMovTipoEstado::getOxId($this->getPerMovTipoEstadoId());
                if($o){
                    $arr_os[$this->getPerMovTipoEstadoId()] = $o;
                }
            }
        }else{
            $o = new PerMovTipoEstado();
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
            		
        if($contexto_solicitante != GralEmpresa::GEN_CLASE){
            if($this->getGralEmpresa()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresa::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresa()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PerPersona::GEN_CLASE){
            if($this->getPerPersona()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PerPersona::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPerPersona()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PerMovTipoMovimiento::GEN_CLASE){
            if($this->getPerMovTipoMovimiento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PerMovTipoMovimiento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPerMovTipoMovimiento()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CtrlSector::GEN_CLASE){
            if($this->getCtrlSector()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CtrlSector::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCtrlSector()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CtrlEquipo::GEN_CLASE){
            if($this->getCtrlEquipo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CtrlEquipo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCtrlEquipo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PerMovTipoEstado::GEN_CLASE){
            if($this->getPerMovTipoEstado()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PerMovTipoEstado::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPerMovTipoEstado()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM per_mov_movimiento'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'per_mov_movimiento';");
            
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

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'per_persona_id' */ 	
	static function getOxPerPersonaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_PERSONA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'per_persona_id' */ 	
	static function getOsxPerPersonaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_PERSONA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'per_mov_tipo_movimiento_id' */ 	
	static function getOxPerMovTipoMovimientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'per_mov_tipo_movimiento_id' */ 	
	static function getOsxPerMovTipoMovimientoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_MOV_TIPO_MOVIMIENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fechahora' */ 	
	static function getOxFechahora($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHAHORA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ctrl_sector_id' */ 	
	static function getOxCtrlSectorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CTRL_SECTOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ctrl_sector_id' */ 	
	static function getOsxCtrlSectorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CTRL_SECTOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ctrl_equipo_id' */ 	
	static function getOxCtrlEquipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CTRL_EQUIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ctrl_equipo_id' */ 	
	static function getOsxCtrlEquipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CTRL_EQUIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'per_mov_tipo_estado_id' */ 	
	static function getOxPerMovTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_MOV_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'per_mov_tipo_estado_id' */ 	
	static function getOsxPerMovTipoEstadoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_MOV_TIPO_ESTADO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos(null, $criterio);
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

            $obs = self::getPerMovMovimientos($paginador, $criterio);
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

            $obs = self::getPerMovMovimientos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'per_mov_movimiento_adm');
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
                $c->addTabla(PerMovMovimiento::GEN_TABLA);
                $c->addOrden(PerMovMovimiento::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $per_mov_movimientos = PerMovMovimiento::getPerMovMovimientos(null, $c);

                $arr = array();
                foreach($per_mov_movimientos as $per_mov_movimiento){
                    $descripcion = $per_mov_movimiento->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>