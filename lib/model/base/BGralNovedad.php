<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BGralNovedad
{ 
	
	const SES_PAGINACION = 'adm_gralnovedad_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_gralnovedad_paginas_registros';
	const SES_CRITERIOS = 'adm_gralnovedad_criterios';
	
	const GEN_CLASE = 'GralNovedad';
	const GEN_TABLA = 'gral_novedad';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGralNovedad */ 
	const GEN_ATTR_ID = 'gral_novedad.id';
	const GEN_ATTR_DESCRIPCION = 'gral_novedad.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'gral_novedad.descripcion_corta';
	const GEN_ATTR_CODIGO = 'gral_novedad.codigo';
	const GEN_ATTR_LABORAL = 'gral_novedad.laboral';
	const GEN_ATTR_PLANIFICABLE = 'gral_novedad.planificable';
	const GEN_ATTR_REQUIERE_MOVIMIENTOS = 'gral_novedad.requiere_movimientos';
	const GEN_ATTR_PERMITE_CONFIRMACION = 'gral_novedad.permite_confirmacion';
	const GEN_ATTR_HORAS = 'gral_novedad.horas';
	const GEN_ATTR_CODIGO_COLOR = 'gral_novedad.codigo_color';
	const GEN_ATTR_OBSERVACION = 'gral_novedad.observacion';
	const GEN_ATTR_ORDEN = 'gral_novedad.orden';
	const GEN_ATTR_ESTADO = 'gral_novedad.estado';
	const GEN_ATTR_CREADO = 'gral_novedad.creado';
	const GEN_ATTR_CREADO_POR = 'gral_novedad.creado_por';
	const GEN_ATTR_MODIFICADO = 'gral_novedad.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'gral_novedad.modificado_por';

	/* Constantes de Atributos Min de BGralNovedad */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_LABORAL = 'laboral';
	const GEN_ATTR_MIN_PLANIFICABLE = 'planificable';
	const GEN_ATTR_MIN_REQUIERE_MOVIMIENTOS = 'requiere_movimientos';
	const GEN_ATTR_MIN_PERMITE_CONFIRMACION = 'permite_confirmacion';
	const GEN_ATTR_MIN_HORAS = 'horas';
	const GEN_ATTR_MIN_CODIGO_COLOR = 'codigo_color';
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
	

	/* Atributos de BGralNovedad */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $codigo;
	private $laboral;
	private $planificable;
	private $requiere_movimientos;
	private $permite_confirmacion;
	private $horas;
	private $codigo_color;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGralNovedad */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getLaboral(){ if(isset($this->laboral)){ return $this->laboral; }else{ return 0; } }
	public function getPlanificable(){ if(isset($this->planificable)){ return $this->planificable; }else{ return 0; } }
	public function getRequiereMovimientos(){ if(isset($this->requiere_movimientos)){ return $this->requiere_movimientos; }else{ return 0; } }
	public function getPermiteConfirmacion(){ if(isset($this->permite_confirmacion)){ return $this->permite_confirmacion; }else{ return 0; } }
	public function getHoras(){ if(isset($this->horas)){ return $this->horas; }else{ return ''; } }
	public function getCodigoColor(){ if(isset($this->codigo_color)){ return $this->codigo_color; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGralNovedad */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_LABORAL."
				, ".self::GEN_ATTR_PLANIFICABLE."
				, ".self::GEN_ATTR_REQUIERE_MOVIMIENTOS."
				, ".self::GEN_ATTR_PERMITE_CONFIRMACION."
				, ".self::GEN_ATTR_HORAS."
				, ".self::GEN_ATTR_CODIGO_COLOR."
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
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setLaboral($fila[self::GEN_ATTR_MIN_LABORAL]);
				$this->setPlanificable($fila[self::GEN_ATTR_MIN_PLANIFICABLE]);
				$this->setRequiereMovimientos($fila[self::GEN_ATTR_MIN_REQUIERE_MOVIMIENTOS]);
				$this->setPermiteConfirmacion($fila[self::GEN_ATTR_MIN_PERMITE_CONFIRMACION]);
				$this->setHoras($fila[self::GEN_ATTR_MIN_HORAS]);
				$this->setCodigoColor($fila[self::GEN_ATTR_MIN_CODIGO_COLOR]);
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
	public function setCodigo($v){ $this->codigo = $v; }
	public function setLaboral($v){ $this->laboral = $v; }
	public function setPlanificable($v){ $this->planificable = $v; }
	public function setRequiereMovimientos($v){ $this->requiere_movimientos = $v; }
	public function setPermiteConfirmacion($v){ $this->permite_confirmacion = $v; }
	public function setHoras($v){ $this->horas = $v; }
	public function setCodigoColor($v){ $this->codigo_color = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GralNovedad();
            $o->setId($fila[GralNovedad::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setLaboral($fila[self::GEN_ATTR_MIN_LABORAL]);
			$o->setPlanificable($fila[self::GEN_ATTR_MIN_PLANIFICABLE]);
			$o->setRequiereMovimientos($fila[self::GEN_ATTR_MIN_REQUIERE_MOVIMIENTOS]);
			$o->setPermiteConfirmacion($fila[self::GEN_ATTR_MIN_PERMITE_CONFIRMACION]);
			$o->setHoras($fila[self::GEN_ATTR_MIN_HORAS]);
			$o->setCodigoColor($fila[self::GEN_ATTR_MIN_CODIGO_COLOR]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGralNovedad */ 	
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

	/* Cambia el estado de BGralNovedad */ 	
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

	/* Save de BGralNovedad */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_LABORAL."
						, ".self::GEN_ATTR_MIN_PLANIFICABLE."
						, ".self::GEN_ATTR_MIN_REQUIERE_MOVIMIENTOS."
						, ".self::GEN_ATTR_MIN_PERMITE_CONFIRMACION."
						, ".self::GEN_ATTR_MIN_HORAS."
						, ".self::GEN_ATTR_MIN_CODIGO_COLOR."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('gral_novedad_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, '".$this->getCodigo()."'
						, ".$this->getLaboral()."
						, ".$this->getPlanificable()."
						, ".$this->getRequiereMovimientos()."
						, ".$this->getPermiteConfirmacion()."
						, '".$this->getHoras()."'
						, '".$this->getCodigoColor()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('gral_novedad_seq')";
            
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
                 
				 ".GralNovedad::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_LABORAL." = ".$this->getLaboral()."
						, ".self::GEN_ATTR_MIN_PLANIFICABLE." = ".$this->getPlanificable()."
						, ".self::GEN_ATTR_MIN_REQUIERE_MOVIMIENTOS." = ".$this->getRequiereMovimientos()."
						, ".self::GEN_ATTR_MIN_PERMITE_CONFIRMACION." = ".$this->getPermiteConfirmacion()."
						, ".self::GEN_ATTR_MIN_HORAS." = '".$this->getHoras()."'
						, ".self::GEN_ATTR_MIN_CODIGO_COLOR." = '".$this->getCodigoColor()."'
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_LABORAL."
						, ".self::GEN_ATTR_MIN_PLANIFICABLE."
						, ".self::GEN_ATTR_MIN_REQUIERE_MOVIMIENTOS."
						, ".self::GEN_ATTR_MIN_PERMITE_CONFIRMACION."
						, ".self::GEN_ATTR_MIN_HORAS."
						, ".self::GEN_ATTR_MIN_CODIGO_COLOR."
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
						, '".$this->getCodigo()."'
						, ".$this->getLaboral()."
						, ".$this->getPlanificable()."
						, ".$this->getRequiereMovimientos()."
						, ".$this->getPermiteConfirmacion()."
						, '".$this->getHoras()."'
						, '".$this->getCodigoColor()."'
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
                     
				 ".GralNovedad::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_LABORAL." = ".$this->getLaboral()."
						, ".self::GEN_ATTR_MIN_PLANIFICABLE." = ".$this->getPlanificable()."
						, ".self::GEN_ATTR_MIN_REQUIERE_MOVIMIENTOS." = ".$this->getRequiereMovimientos()."
						, ".self::GEN_ATTR_MIN_PERMITE_CONFIRMACION." = ".$this->getPermiteConfirmacion()."
						, ".self::GEN_ATTR_MIN_HORAS." = '".$this->getHoras()."'
						, ".self::GEN_ATTR_MIN_CODIGO_COLOR." = '".$this->getCodigoColor()."'
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
            $o = new GralNovedad();
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

	/* Delete de BGralNovedad */ 	
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
	
            // se elimina la coleccion de GralNovedadMotivos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralNovedadMotivo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralNovedadMotivos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerMovPlanificacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerMovPlanificacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerMovPlanificacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PlnJornadas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PlnJornada::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPlnJornadas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PlnTurnoNovedads relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PlnTurnoNovedad::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPlnTurnoNovedads(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGralNovedad(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGralNovedads($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GralNovedad::setAplicarFiltrosDeAlcance($criterio);

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
	
		$gralnovedads = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $gralnovedad = new GralNovedad();
                    $gralnovedad->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $gralnovedad->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$gralnovedad->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$gralnovedad->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$gralnovedad->setLaboral($fila[self::GEN_ATTR_MIN_LABORAL]);
			$gralnovedad->setPlanificable($fila[self::GEN_ATTR_MIN_PLANIFICABLE]);
			$gralnovedad->setRequiereMovimientos($fila[self::GEN_ATTR_MIN_REQUIERE_MOVIMIENTOS]);
			$gralnovedad->setPermiteConfirmacion($fila[self::GEN_ATTR_MIN_PERMITE_CONFIRMACION]);
			$gralnovedad->setHoras($fila[self::GEN_ATTR_MIN_HORAS]);
			$gralnovedad->setCodigoColor($fila[self::GEN_ATTR_MIN_CODIGO_COLOR]);
			$gralnovedad->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$gralnovedad->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$gralnovedad->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$gralnovedad->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$gralnovedad->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$gralnovedad->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$gralnovedad->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $gralnovedads[] = $gralnovedad;
		}
		
		return $gralnovedads;
	}	
	

	/* Método getGralNovedads Habilitados */ 	
	static function getGralNovedadsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GralNovedad::getGralNovedads($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGralNovedads para listado de Backend */ 	
	static function getGralNovedadsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GralNovedad::getGralNovedads($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGralNovedadsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GralNovedad::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GralNovedad::getGralNovedads($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGralNovedads filtrado para select */ 	
	static function getGralNovedadsCmbF($paginador = null, $criterio = null){
            $col = GralNovedad::getGralNovedads($paginador, $criterio);

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
            $url = 'gral_novedad_adm.php';
            $url_gestion = 'gral_novedad_gestion.php';
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
	

	/* Metodo getGralNovedadMotivos */ 	
	public function getGralNovedadMotivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralNovedadMotivo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralNovedadMotivo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralNovedadMotivo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralNovedadMotivo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralNovedadMotivo::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralNovedadMotivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralNovedadMotivo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralNovedadMotivo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralnovedadmotivos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralnovedadmotivo = GralNovedadMotivo::hidratarObjeto($fila);			
                $gralnovedadmotivos[] = $gralnovedadmotivo;
            }

            return $gralnovedadmotivos;
	}	
	

	/* Método getGralNovedadMotivosBloque para MasInfo */ 	
	public function getGralNovedadMotivosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralNovedadMotivos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralNovedadMotivos Habilitados */ 	
	public function getGralNovedadMotivosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralNovedadMotivos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralNovedadMotivo */ 	
	public function getGralNovedadMotivo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralNovedadMotivos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralNovedadMotivo relacionadas */ 	
	public function deleteGralNovedadMotivos(){
            $obs = $this->getGralNovedadMotivos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralNovedadMotivosCmb() GralNovedadMotivo relacionadas */ 	
	public function getGralNovedadMotivosCmb(){
            $c = new Criterio();
            $c->add(GralNovedadMotivo::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralNovedadMotivo::GEN_TABLA);
            $c->setCriterios();

            $os = GralNovedadMotivo::getGralNovedadMotivosCmbF(null, $c);
            return $os;
	}

	/* Metodo getPerMovPlanificacions */ 	
	public function getPerMovPlanificacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerMovPlanificacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerMovPlanificacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerMovPlanificacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PerMovPlanificacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerMovPlanificacion::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerMovPlanificacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $permovplanificacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $permovplanificacion = PerMovPlanificacion::hidratarObjeto($fila);			
                $permovplanificacions[] = $permovplanificacion;
            }

            return $permovplanificacions;
	}	
	

	/* Método getPerMovPlanificacionsBloque para MasInfo */ 	
	public function getPerMovPlanificacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerMovPlanificacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerMovPlanificacions Habilitados */ 	
	public function getPerMovPlanificacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerMovPlanificacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerMovPlanificacion */ 	
	public function getPerMovPlanificacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerMovPlanificacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerMovPlanificacion relacionadas */ 	
	public function deletePerMovPlanificacions(){
            $obs = $this->getPerMovPlanificacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerMovPlanificacionsCmb() PerMovPlanificacion relacionadas */ 	
	public function getPerMovPlanificacionsCmb(){
            $c = new Criterio();
            $c->add(PerMovPlanificacion::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerMovPlanificacion::GEN_TABLA);
            $c->setCriterios();

            $os = PerMovPlanificacion::getPerMovPlanificacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PerPersonas (Coleccion) relacionados a traves de PerMovPlanificacion */ 	
	public function getPerPersonasXPerMovPlanificacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerMovPlanificacion::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addRealJoin(PerMovPlanificacion::GEN_TABLA, PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, PerPersona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PerPersona::getPerPersonas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PerPersonas relacionados a traves de PerMovPlanificacion */ 	
	public function getCantidadPerPersonasXPerMovPlanificacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PerPersona::GEN_ATTR_ID);
            if($estado){
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerMovPlanificacion::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addRealJoin(PerMovPlanificacion::GEN_TABLA, PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, PerPersona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PerPersona::getPerPersonas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PerPersona (Objeto) relacionado a traves de PerMovPlanificacion */ 	
	public function getPerPersonaXPerMovPlanificacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPerPersonasXPerMovPlanificacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPlnJornadas */ 	
	public function getPlnJornadas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PlnJornada::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PlnJornada::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PlnJornada::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PlnJornada::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PlnJornada::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PlnJornada::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PlnJornada::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PlnJornada::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $plnjornadas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $plnjornada = PlnJornada::hidratarObjeto($fila);			
                $plnjornadas[] = $plnjornada;
            }

            return $plnjornadas;
	}	
	

	/* Método getPlnJornadasBloque para MasInfo */ 	
	public function getPlnJornadasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPlnJornadas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPlnJornadas Habilitados */ 	
	public function getPlnJornadasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPlnJornadas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPlnJornada */ 	
	public function getPlnJornada($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPlnJornadas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PlnJornada relacionadas */ 	
	public function deletePlnJornadas(){
            $obs = $this->getPlnJornadas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPlnJornadasCmb() PlnJornada relacionadas */ 	
	public function getPlnJornadasCmb(){
            $c = new Criterio();
            $c->add(PlnJornada::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PlnJornada::GEN_TABLA);
            $c->setCriterios();

            $os = PlnJornada::getPlnJornadasCmbF(null, $c);
            return $os;
	}

	/* Metodo getPlnTurnoNovedads */ 	
	public function getPlnTurnoNovedads($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PlnTurnoNovedad::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PlnTurnoNovedad::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PlnTurnoNovedad::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PlnTurnoNovedad::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PlnTurnoNovedad::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PlnTurnoNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PlnTurnoNovedad::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PlnTurnoNovedad::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $plnturnonovedads = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $plnturnonovedad = PlnTurnoNovedad::hidratarObjeto($fila);			
                $plnturnonovedads[] = $plnturnonovedad;
            }

            return $plnturnonovedads;
	}	
	

	/* Método getPlnTurnoNovedadsBloque para MasInfo */ 	
	public function getPlnTurnoNovedadsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPlnTurnoNovedads($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPlnTurnoNovedads Habilitados */ 	
	public function getPlnTurnoNovedadsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPlnTurnoNovedads($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPlnTurnoNovedad */ 	
	public function getPlnTurnoNovedad($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPlnTurnoNovedads($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PlnTurnoNovedad relacionadas */ 	
	public function deletePlnTurnoNovedads(){
            $obs = $this->getPlnTurnoNovedads();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPlnTurnoNovedadsCmb() PlnTurnoNovedad relacionadas */ 	
	public function getPlnTurnoNovedadsCmb(){
            $c = new Criterio();
            $c->add(PlnTurnoNovedad::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PlnTurnoNovedad::GEN_TABLA);
            $c->setCriterios();

            $os = PlnTurnoNovedad::getPlnTurnoNovedadsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PlnTurnos (Coleccion) relacionados a traves de PlnTurnoNovedad */ 	
	public function getPlnTurnosXPlnTurnoNovedad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PlnTurno::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PlnTurnoNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PlnTurnoNovedad::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PlnTurno::GEN_TABLA);
            $c->addRealJoin(PlnTurnoNovedad::GEN_TABLA, PlnTurnoNovedad::GEN_ATTR_PLN_TURNO_ID, PlnTurno::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PlnTurno::getPlnTurnos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PlnTurnos relacionados a traves de PlnTurnoNovedad */ 	
	public function getCantidadPlnTurnosXPlnTurnoNovedad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PlnTurno::GEN_ATTR_ID);
            if($estado){
                $c->add(PlnTurno::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PlnTurnoNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PlnTurnoNovedad::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PlnTurno::GEN_TABLA);
            $c->addRealJoin(PlnTurnoNovedad::GEN_TABLA, PlnTurnoNovedad::GEN_ATTR_PLN_TURNO_ID, PlnTurno::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PlnTurno::getPlnTurnos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PlnTurno (Objeto) relacionado a traves de PlnTurnoNovedad */ 	
	public function getPlnTurnoXPlnTurnoNovedad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPlnTurnosXPlnTurnoNovedad($paginador, $criterio, $estado, $arr_ordens);
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM gral_novedad'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'gral_novedad';");
            
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

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'laboral' */ 	
	static function getOxLaboral($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LABORAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'laboral' */ 	
	static function getOsxLaboral($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LABORAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'planificable' */ 	
	static function getOxPlanificable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PLANIFICABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'planificable' */ 	
	static function getOsxPlanificable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PLANIFICABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'requiere_movimientos' */ 	
	static function getOxRequiereMovimientos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_MOVIMIENTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'requiere_movimientos' */ 	
	static function getOsxRequiereMovimientos($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REQUIERE_MOVIMIENTOS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'permite_confirmacion' */ 	
	static function getOxPermiteConfirmacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERMITE_CONFIRMACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'permite_confirmacion' */ 	
	static function getOsxPermiteConfirmacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PERMITE_CONFIRMACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'horas' */ 	
	static function getOxHoras($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HORAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'horas' */ 	
	static function getOsxHoras($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HORAS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_color' */ 	
	static function getOxCodigoColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_color' */ 	
	static function getOsxCodigoColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads(null, $criterio);
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

            $obs = self::getGralNovedads($paginador, $criterio);
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

            $obs = self::getGralNovedads($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'gral_novedad_adm');
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

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getGralNovedadMotivosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(GralNovedadMotivo::GEN_ATTR_GRAL_NOVEDAD_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(GralNovedadMotivo::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(GralNovedadMotivo::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(GralNovedadMotivo::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(GralNovedadMotivo::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(GralNovedadMotivo::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $gral_novedad_motivos = GralNovedadMotivo::getGralNovedadMotivos($paginador, $c);

            $arr['COLECCION'] = $gral_novedad_motivos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(GralNovedad::GEN_TABLA);
                $c->addOrden(GralNovedad::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $gral_novedads = GralNovedad::getGralNovedads(null, $c);

                $arr = array();
                foreach($gral_novedads as $gral_novedad){
                    $descripcion = $gral_novedad->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>