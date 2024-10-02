<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPrdOrdenTrabajoOperacionTipoEstado
{ 
	
	const SES_PAGINACION = 'adm_prdordentrabajooperaciontipoestado_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_prdordentrabajooperaciontipoestado_paginas_registros';
	const SES_CRITERIOS = 'adm_prdordentrabajooperaciontipoestado_criterios';
	
	const GEN_CLASE = 'PrdOrdenTrabajoOperacionTipoEstado';
	const GEN_TABLA = 'prd_orden_trabajo_operacion_tipo_estado';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPrdOrdenTrabajoOperacionTipoEstado */ 
	const GEN_ATTR_ID = 'prd_orden_trabajo_operacion_tipo_estado.id';
	const GEN_ATTR_DESCRIPCION = 'prd_orden_trabajo_operacion_tipo_estado.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'prd_orden_trabajo_operacion_tipo_estado.descripcion_corta';
	const GEN_ATTR_ACTIVO = 'prd_orden_trabajo_operacion_tipo_estado.activo';
	const GEN_ATTR_TERMINAL = 'prd_orden_trabajo_operacion_tipo_estado.terminal';
	const GEN_ATTR_ANULADO = 'prd_orden_trabajo_operacion_tipo_estado.anulado';
	const GEN_ATTR_GESTIONABLE = 'prd_orden_trabajo_operacion_tipo_estado.gestionable';
	const GEN_ATTR_COLOR = 'prd_orden_trabajo_operacion_tipo_estado.color';
	const GEN_ATTR_COLOR_SECUNDARIO = 'prd_orden_trabajo_operacion_tipo_estado.color_secundario';
	const GEN_ATTR_CODIGO = 'prd_orden_trabajo_operacion_tipo_estado.codigo';
	const GEN_ATTR_OBSERVACION = 'prd_orden_trabajo_operacion_tipo_estado.observacion';
	const GEN_ATTR_ORDEN = 'prd_orden_trabajo_operacion_tipo_estado.orden';
	const GEN_ATTR_ESTADO = 'prd_orden_trabajo_operacion_tipo_estado.estado';
	const GEN_ATTR_CREADO = 'prd_orden_trabajo_operacion_tipo_estado.creado';
	const GEN_ATTR_CREADO_POR = 'prd_orden_trabajo_operacion_tipo_estado.creado_por';
	const GEN_ATTR_MODIFICADO = 'prd_orden_trabajo_operacion_tipo_estado.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'prd_orden_trabajo_operacion_tipo_estado.modificado_por';

	/* Constantes de Atributos Min de BPrdOrdenTrabajoOperacionTipoEstado */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_ACTIVO = 'activo';
	const GEN_ATTR_MIN_TERMINAL = 'terminal';
	const GEN_ATTR_MIN_ANULADO = 'anulado';
	const GEN_ATTR_MIN_GESTIONABLE = 'gestionable';
	const GEN_ATTR_MIN_COLOR = 'color';
	const GEN_ATTR_MIN_COLOR_SECUNDARIO = 'color_secundario';
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
	

	/* Atributos de BPrdOrdenTrabajoOperacionTipoEstado */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $activo;
	private $terminal;
	private $anulado;
	private $gestionable;
	private $color;
	private $color_secundario;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPrdOrdenTrabajoOperacionTipoEstado */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getActivo(){ if(isset($this->activo)){ return $this->activo; }else{ return 0; } }
	public function getTerminal(){ if(isset($this->terminal)){ return $this->terminal; }else{ return 0; } }
	public function getAnulado(){ if(isset($this->anulado)){ return $this->anulado; }else{ return 0; } }
	public function getGestionable(){ if(isset($this->gestionable)){ return $this->gestionable; }else{ return 0; } }
	public function getColor(){ if(isset($this->color)){ return $this->color; }else{ return ''; } }
	public function getColorSecundario(){ if(isset($this->color_secundario)){ return $this->color_secundario; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPrdOrdenTrabajoOperacionTipoEstado */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_ACTIVO."
				, ".self::GEN_ATTR_TERMINAL."
				, ".self::GEN_ATTR_ANULADO."
				, ".self::GEN_ATTR_GESTIONABLE."
				, ".self::GEN_ATTR_COLOR."
				, ".self::GEN_ATTR_COLOR_SECUNDARIO."
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
				$this->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
				$this->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
				$this->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
				$this->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
				$this->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
				$this->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
				$this->setColorSecundario($fila[self::GEN_ATTR_MIN_COLOR_SECUNDARIO]);
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
	public function setDescripcionCorta($v){ $this->descripcion_corta = $v; }
	public function setActivo($v){ $this->activo = $v; }
	public function setTerminal($v){ $this->terminal = $v; }
	public function setAnulado($v){ $this->anulado = $v; }
	public function setGestionable($v){ $this->gestionable = $v; }
	public function setColor($v){ $this->color = $v; }
	public function setColorSecundario($v){ $this->color_secundario = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PrdOrdenTrabajoOperacionTipoEstado();
            $o->setId($fila[PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
			$o->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
			$o->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
			$o->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
			$o->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$o->setColorSecundario($fila[self::GEN_ATTR_MIN_COLOR_SECUNDARIO]);
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

	/* Control de BPrdOrdenTrabajoOperacionTipoEstado */ 	
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

	/* Cambia el estado de BPrdOrdenTrabajoOperacionTipoEstado */ 	
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

	/* Save de BPrdOrdenTrabajoOperacionTipoEstado */ 	
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_ACTIVO."
						, ".self::GEN_ATTR_MIN_TERMINAL."
						, ".self::GEN_ATTR_MIN_ANULADO."
						, ".self::GEN_ATTR_MIN_GESTIONABLE."
						, ".self::GEN_ATTR_MIN_COLOR."
						, ".self::GEN_ATTR_MIN_COLOR_SECUNDARIO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('prd_orden_trabajo_operacion_tipo_estado_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, ".$this->getActivo()."
						, ".$this->getTerminal()."
						, ".$this->getAnulado()."
						, ".$this->getGestionable()."
						, '".$this->getColor()."'
						, '".$this->getColorSecundario()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('prd_orden_trabajo_operacion_tipo_estado_seq')";
            
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
                 
				 ".PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_ACTIVO." = ".$this->getActivo()."
						, ".self::GEN_ATTR_MIN_TERMINAL." = ".$this->getTerminal()."
						, ".self::GEN_ATTR_MIN_ANULADO." = ".$this->getAnulado()."
						, ".self::GEN_ATTR_MIN_GESTIONABLE." = ".$this->getGestionable()."
						, ".self::GEN_ATTR_MIN_COLOR." = '".$this->getColor()."'
						, ".self::GEN_ATTR_MIN_COLOR_SECUNDARIO." = '".$this->getColorSecundario()."'
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA."
						, ".self::GEN_ATTR_MIN_ACTIVO."
						, ".self::GEN_ATTR_MIN_TERMINAL."
						, ".self::GEN_ATTR_MIN_ANULADO."
						, ".self::GEN_ATTR_MIN_GESTIONABLE."
						, ".self::GEN_ATTR_MIN_COLOR."
						, ".self::GEN_ATTR_MIN_COLOR_SECUNDARIO."
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
						, '".$this->getDescripcionCorta()."'
						, ".$this->getActivo()."
						, ".$this->getTerminal()."
						, ".$this->getAnulado()."
						, ".$this->getGestionable()."
						, '".$this->getColor()."'
						, '".$this->getColorSecundario()."'
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
                     
				 ".PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_ACTIVO." = ".$this->getActivo()."
						, ".self::GEN_ATTR_MIN_TERMINAL." = ".$this->getTerminal()."
						, ".self::GEN_ATTR_MIN_ANULADO." = ".$this->getAnulado()."
						, ".self::GEN_ATTR_MIN_GESTIONABLE." = ".$this->getGestionable()."
						, ".self::GEN_ATTR_MIN_COLOR." = '".$this->getColor()."'
						, ".self::GEN_ATTR_MIN_COLOR_SECUNDARIO." = '".$this->getColorSecundario()."'
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
            $o = new PrdOrdenTrabajoOperacionTipoEstado();
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

	/* Delete de BPrdOrdenTrabajoOperacionTipoEstado */ 	
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
	
            // se elimina la coleccion de PrdOrdenTrabajoOperacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoOperacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrdOrdenTrabajoOperacionEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrdOrdenTrabajoOperacionEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrdOrdenTrabajoOperacionEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPrdOrdenTrabajoOperacionTipoEstado(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPrdOrdenTrabajoOperacionTipoEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PrdOrdenTrabajoOperacionTipoEstado::setAplicarFiltrosDeAlcance($criterio);

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
	
		$prdordentrabajooperaciontipoestados = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $prdordentrabajooperaciontipoestado = new PrdOrdenTrabajoOperacionTipoEstado();
                    $prdordentrabajooperaciontipoestado->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $prdordentrabajooperaciontipoestado->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$prdordentrabajooperaciontipoestado->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$prdordentrabajooperaciontipoestado->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
			$prdordentrabajooperaciontipoestado->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
			$prdordentrabajooperaciontipoestado->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
			$prdordentrabajooperaciontipoestado->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
			$prdordentrabajooperaciontipoestado->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$prdordentrabajooperaciontipoestado->setColorSecundario($fila[self::GEN_ATTR_MIN_COLOR_SECUNDARIO]);
			$prdordentrabajooperaciontipoestado->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$prdordentrabajooperaciontipoestado->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$prdordentrabajooperaciontipoestado->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$prdordentrabajooperaciontipoestado->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$prdordentrabajooperaciontipoestado->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$prdordentrabajooperaciontipoestado->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$prdordentrabajooperaciontipoestado->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$prdordentrabajooperaciontipoestado->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $prdordentrabajooperaciontipoestados[] = $prdordentrabajooperaciontipoestado;
		}
		
		return $prdordentrabajooperaciontipoestados;
	}	
	

	/* Método getPrdOrdenTrabajoOperacionTipoEstados Habilitados */ 	
	static function getPrdOrdenTrabajoOperacionTipoEstadosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPrdOrdenTrabajoOperacionTipoEstados para listado de Backend */ 	
	static function getPrdOrdenTrabajoOperacionTipoEstadosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPrdOrdenTrabajoOperacionTipoEstadosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PrdOrdenTrabajoOperacionTipoEstado::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPrdOrdenTrabajoOperacionTipoEstados filtrado para select */ 	
	static function getPrdOrdenTrabajoOperacionTipoEstadosCmbF($paginador = null, $criterio = null){
            $col = PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'prd_orden_trabajo_operacion_tipo_estado_adm.php';
            $url_gestion = 'prd_orden_trabajo_operacion_tipo_estado_gestion.php';
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
	

	/* Metodo getPrdOrdenTrabajoOperacions */ 	
	public function getPrdOrdenTrabajoOperacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrdOrdenTrabajoOperacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrdOrdenTrabajoOperacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrdOrdenTrabajoOperacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prdordentrabajooperacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prdordentrabajooperacion = PrdOrdenTrabajoOperacion::hidratarObjeto($fila);			
                $prdordentrabajooperacions[] = $prdordentrabajooperacion;
            }

            return $prdordentrabajooperacions;
	}	
	

	/* Método getPrdOrdenTrabajoOperacionsBloque para MasInfo */ 	
	public function getPrdOrdenTrabajoOperacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrdOrdenTrabajoOperacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacions Habilitados */ 	
	public function getPrdOrdenTrabajoOperacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrdOrdenTrabajoOperacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrdOrdenTrabajoOperacion */ 	
	public function getPrdOrdenTrabajoOperacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrdOrdenTrabajoOperacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrdOrdenTrabajoOperacion relacionadas */ 	
	public function deletePrdOrdenTrabajoOperacions(){
            $obs = $this->getPrdOrdenTrabajoOperacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrdOrdenTrabajoOperacionsCmb() PrdOrdenTrabajoOperacion relacionadas */ 	
	public function getPrdOrdenTrabajoOperacionsCmb(){
            $c = new Criterio();
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdOrdenTrabajoCiclos (Coleccion) relacionados a traves de PrdOrdenTrabajoOperacion */ 	
	public function getPrdOrdenTrabajoCiclosXPrdOrdenTrabajoOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoCiclo::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacion::GEN_TABLA, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, PrdOrdenTrabajoCiclo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoCiclo::getPrdOrdenTrabajoCiclos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdOrdenTrabajoCiclos relacionados a traves de PrdOrdenTrabajoOperacion */ 	
	public function getCantidadPrdOrdenTrabajoCiclosXPrdOrdenTrabajoOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdOrdenTrabajoCiclo::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdOrdenTrabajoCiclo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoCiclo::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacion::GEN_TABLA, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, PrdOrdenTrabajoCiclo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoCiclo::getPrdOrdenTrabajoCiclos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdOrdenTrabajoCiclo (Objeto) relacionado a traves de PrdOrdenTrabajoOperacion */ 	
	public function getPrdOrdenTrabajoCicloXPrdOrdenTrabajoOperacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdOrdenTrabajoCiclosXPrdOrdenTrabajoOperacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacionEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacionEstado::getPrdOrdenTrabajoOperacionEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrdOrdenTrabajoOperacions (Coleccion) relacionados a traves de PrdOrdenTrabajoOperacionEstado */ 	
	public function getPrdOrdenTrabajoOperacionsXPrdOrdenTrabajoOperacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionEstado::GEN_TABLA, PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrdOrdenTrabajoOperacions relacionados a traves de PrdOrdenTrabajoOperacionEstado */ 	
	public function getCantidadPrdOrdenTrabajoOperacionsXPrdOrdenTrabajoOperacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrdOrdenTrabajoOperacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
            $c->addRealJoin(PrdOrdenTrabajoOperacionEstado::GEN_TABLA, PrdOrdenTrabajoOperacionEstado::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrdOrdenTrabajoOperacion (Objeto) relacionado a traves de PrdOrdenTrabajoOperacionEstado */ 	
	public function getPrdOrdenTrabajoOperacionXPrdOrdenTrabajoOperacionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrdOrdenTrabajoOperacionsXPrdOrdenTrabajoOperacionEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM prd_orden_trabajo_operacion_tipo_estado'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'prd_orden_trabajo_operacion_tipo_estado';");
            
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_corta' */ 	
	static function getOsxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'activo' */ 	
	static function getOxActivo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTIVO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'activo' */ 	
	static function getOsxActivo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTIVO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'terminal' */ 	
	static function getOxTerminal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TERMINAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'terminal' */ 	
	static function getOsxTerminal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TERMINAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anulado' */ 	
	static function getOxAnulado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANULADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'anulado' */ 	
	static function getOsxAnulado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANULADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gestionable' */ 	
	static function getOxGestionable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GESTIONABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gestionable' */ 	
	static function getOsxGestionable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GESTIONABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'color' */ 	
	static function getOxColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'color' */ 	
	static function getOsxColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'color_secundario' */ 	
	static function getOxColorSecundario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR_SECUNDARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'color_secundario' */ 	
	static function getOsxColorSecundario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR_SECUNDARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados(null, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
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

            $obs = self::getPrdOrdenTrabajoOperacionTipoEstados($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'prd_orden_trabajo_operacion_tipo_estado_adm');
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
                $c->addTabla(PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA);
                $c->addOrden(PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $prd_orden_trabajo_operacion_tipo_estados = PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstados(null, $c);

                $arr = array();
                foreach($prd_orden_trabajo_operacion_tipo_estados as $prd_orden_trabajo_operacion_tipo_estado){
                    $descripcion = $prd_orden_trabajo_operacion_tipo_estado->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>