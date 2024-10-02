<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BCliClienteTipoEstadoCobro
{ 
	
	const SES_PAGINACION = 'adm_cliclientetipoestadocobro_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_cliclientetipoestadocobro_paginas_registros';
	const SES_CRITERIOS = 'adm_cliclientetipoestadocobro_criterios';
	
	const GEN_CLASE = 'CliClienteTipoEstadoCobro';
	const GEN_TABLA = 'cli_cliente_tipo_estado_cobro';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BCliClienteTipoEstadoCobro */ 
	const GEN_ATTR_ID = 'cli_cliente_tipo_estado_cobro.id';
	const GEN_ATTR_DESCRIPCION = 'cli_cliente_tipo_estado_cobro.descripcion';
	const GEN_ATTR_DESCRIPCION_CORTA = 'cli_cliente_tipo_estado_cobro.descripcion_corta';
	const GEN_ATTR_DESCRIPCION_PUBLICA = 'cli_cliente_tipo_estado_cobro.descripcion_publica';
	const GEN_ATTR_LEYENDA = 'cli_cliente_tipo_estado_cobro.leyenda';
	const GEN_ATTR_ACTIVO = 'cli_cliente_tipo_estado_cobro.activo';
	const GEN_ATTR_TERMINAL = 'cli_cliente_tipo_estado_cobro.terminal';
	const GEN_ATTR_ANULADO = 'cli_cliente_tipo_estado_cobro.anulado';
	const GEN_ATTR_GESTIONABLE = 'cli_cliente_tipo_estado_cobro.gestionable';
	const GEN_ATTR_BLOQUEADO = 'cli_cliente_tipo_estado_cobro.bloqueado';
	const GEN_ATTR_ANOMALIA = 'cli_cliente_tipo_estado_cobro.anomalia';
	const GEN_ATTR_COLOR = 'cli_cliente_tipo_estado_cobro.color';
	const GEN_ATTR_COLOR_SECUNDARIO = 'cli_cliente_tipo_estado_cobro.color_secundario';
	const GEN_ATTR_CODIGO = 'cli_cliente_tipo_estado_cobro.codigo';
	const GEN_ATTR_OBSERVACION = 'cli_cliente_tipo_estado_cobro.observacion';
	const GEN_ATTR_ORDEN = 'cli_cliente_tipo_estado_cobro.orden';
	const GEN_ATTR_ESTADO = 'cli_cliente_tipo_estado_cobro.estado';
	const GEN_ATTR_CREADO = 'cli_cliente_tipo_estado_cobro.creado';
	const GEN_ATTR_CREADO_POR = 'cli_cliente_tipo_estado_cobro.creado_por';
	const GEN_ATTR_MODIFICADO = 'cli_cliente_tipo_estado_cobro.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'cli_cliente_tipo_estado_cobro.modificado_por';

	/* Constantes de Atributos Min de BCliClienteTipoEstadoCobro */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_DESCRIPCION_CORTA = 'descripcion_corta';
	const GEN_ATTR_MIN_DESCRIPCION_PUBLICA = 'descripcion_publica';
	const GEN_ATTR_MIN_LEYENDA = 'leyenda';
	const GEN_ATTR_MIN_ACTIVO = 'activo';
	const GEN_ATTR_MIN_TERMINAL = 'terminal';
	const GEN_ATTR_MIN_ANULADO = 'anulado';
	const GEN_ATTR_MIN_GESTIONABLE = 'gestionable';
	const GEN_ATTR_MIN_BLOQUEADO = 'bloqueado';
	const GEN_ATTR_MIN_ANOMALIA = 'anomalia';
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
	

	/* Atributos de BCliClienteTipoEstadoCobro */ 
	private $id;
	private $descripcion;
	private $descripcion_corta;
	private $descripcion_publica;
	private $leyenda;
	private $activo;
	private $terminal;
	private $anulado;
	private $gestionable;
	private $bloqueado;
	private $anomalia;
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

	/* Getters de BCliClienteTipoEstadoCobro */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getDescripcionCorta(){ if(isset($this->descripcion_corta)){ return $this->descripcion_corta; }else{ return ''; } }
	public function getDescripcionPublica(){ if(isset($this->descripcion_publica)){ return $this->descripcion_publica; }else{ return ''; } }
	public function getLeyenda(){ if(isset($this->leyenda)){ return $this->leyenda; }else{ return ''; } }
	public function getActivo(){ if(isset($this->activo)){ return $this->activo; }else{ return 0; } }
	public function getTerminal(){ if(isset($this->terminal)){ return $this->terminal; }else{ return 0; } }
	public function getAnulado(){ if(isset($this->anulado)){ return $this->anulado; }else{ return 0; } }
	public function getGestionable(){ if(isset($this->gestionable)){ return $this->gestionable; }else{ return 0; } }
	public function getBloqueado(){ if(isset($this->bloqueado)){ return $this->bloqueado; }else{ return 0; } }
	public function getAnomalia(){ if(isset($this->anomalia)){ return $this->anomalia; }else{ return 0; } }
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

	/* Setters de BCliClienteTipoEstadoCobro */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_DESCRIPCION_CORTA."
				, ".self::GEN_ATTR_DESCRIPCION_PUBLICA."
				, ".self::GEN_ATTR_LEYENDA."
				, ".self::GEN_ATTR_ACTIVO."
				, ".self::GEN_ATTR_TERMINAL."
				, ".self::GEN_ATTR_ANULADO."
				, ".self::GEN_ATTR_GESTIONABLE."
				, ".self::GEN_ATTR_BLOQUEADO."
				, ".self::GEN_ATTR_ANOMALIA."
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
				$this->setDescripcionPublica($fila[self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA]);
				$this->setLeyenda($fila[self::GEN_ATTR_MIN_LEYENDA]);
				$this->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
				$this->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
				$this->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
				$this->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
				$this->setBloqueado($fila[self::GEN_ATTR_MIN_BLOQUEADO]);
				$this->setAnomalia($fila[self::GEN_ATTR_MIN_ANOMALIA]);
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
	public function setDescripcionPublica($v){ $this->descripcion_publica = $v; }
	public function setLeyenda($v){ $this->leyenda = $v; }
	public function setActivo($v){ $this->activo = $v; }
	public function setTerminal($v){ $this->terminal = $v; }
	public function setAnulado($v){ $this->anulado = $v; }
	public function setGestionable($v){ $this->gestionable = $v; }
	public function setBloqueado($v){ $this->bloqueado = $v; }
	public function setAnomalia($v){ $this->anomalia = $v; }
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
            $o = new CliClienteTipoEstadoCobro();
            $o->setId($fila[CliClienteTipoEstadoCobro::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$o->setDescripcionPublica($fila[self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA]);
			$o->setLeyenda($fila[self::GEN_ATTR_MIN_LEYENDA]);
			$o->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
			$o->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
			$o->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
			$o->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
			$o->setBloqueado($fila[self::GEN_ATTR_MIN_BLOQUEADO]);
			$o->setAnomalia($fila[self::GEN_ATTR_MIN_ANOMALIA]);
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

	/* Control de BCliClienteTipoEstadoCobro */ 	
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

	/* Cambia el estado de BCliClienteTipoEstadoCobro */ 	
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

	/* Save de BCliClienteTipoEstadoCobro */ 	
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA."
						, ".self::GEN_ATTR_MIN_LEYENDA."
						, ".self::GEN_ATTR_MIN_ACTIVO."
						, ".self::GEN_ATTR_MIN_TERMINAL."
						, ".self::GEN_ATTR_MIN_ANULADO."
						, ".self::GEN_ATTR_MIN_GESTIONABLE."
						, ".self::GEN_ATTR_MIN_BLOQUEADO."
						, ".self::GEN_ATTR_MIN_ANOMALIA."
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
                nextval('cli_cliente_tipo_estado_cobro_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getDescripcionCorta()."'
						, '".$this->getDescripcionPublica()."'
						, '".$this->getLeyenda()."'
						, ".$this->getActivo()."
						, ".$this->getTerminal()."
						, ".$this->getAnulado()."
						, ".$this->getGestionable()."
						, ".$this->getBloqueado()."
						, ".$this->getAnomalia()."
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
                    ) RETURNING currval('cli_cliente_tipo_estado_cobro_seq')";
            
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
                 
				 ".CliClienteTipoEstadoCobro::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA." = '".$this->getDescripcionPublica()."'
						, ".self::GEN_ATTR_MIN_LEYENDA." = '".$this->getLeyenda()."'
						, ".self::GEN_ATTR_MIN_ACTIVO." = ".$this->getActivo()."
						, ".self::GEN_ATTR_MIN_TERMINAL." = ".$this->getTerminal()."
						, ".self::GEN_ATTR_MIN_ANULADO." = ".$this->getAnulado()."
						, ".self::GEN_ATTR_MIN_GESTIONABLE." = ".$this->getGestionable()."
						, ".self::GEN_ATTR_MIN_BLOQUEADO." = ".$this->getBloqueado()."
						, ".self::GEN_ATTR_MIN_ANOMALIA." = ".$this->getAnomalia()."
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
						, ".self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA."
						, ".self::GEN_ATTR_MIN_LEYENDA."
						, ".self::GEN_ATTR_MIN_ACTIVO."
						, ".self::GEN_ATTR_MIN_TERMINAL."
						, ".self::GEN_ATTR_MIN_ANULADO."
						, ".self::GEN_ATTR_MIN_GESTIONABLE."
						, ".self::GEN_ATTR_MIN_BLOQUEADO."
						, ".self::GEN_ATTR_MIN_ANOMALIA."
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
						, '".$this->getDescripcionPublica()."'
						, '".$this->getLeyenda()."'
						, ".$this->getActivo()."
						, ".$this->getTerminal()."
						, ".$this->getAnulado()."
						, ".$this->getGestionable()."
						, ".$this->getBloqueado()."
						, ".$this->getAnomalia()."
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
                     
				 ".CliClienteTipoEstadoCobro::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_CORTA." = '".$this->getDescripcionCorta()."'
						, ".self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA." = '".$this->getDescripcionPublica()."'
						, ".self::GEN_ATTR_MIN_LEYENDA." = '".$this->getLeyenda()."'
						, ".self::GEN_ATTR_MIN_ACTIVO." = ".$this->getActivo()."
						, ".self::GEN_ATTR_MIN_TERMINAL." = ".$this->getTerminal()."
						, ".self::GEN_ATTR_MIN_ANULADO." = ".$this->getAnulado()."
						, ".self::GEN_ATTR_MIN_GESTIONABLE." = ".$this->getGestionable()."
						, ".self::GEN_ATTR_MIN_BLOQUEADO." = ".$this->getBloqueado()."
						, ".self::GEN_ATTR_MIN_ANOMALIA." = ".$this->getAnomalia()."
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
            $o = new CliClienteTipoEstadoCobro();
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

	/* Delete de BCliClienteTipoEstadoCobro */ 	
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
	
            // se elimina la coleccion de CliClientes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClientes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteEstadoCobros relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteEstadoCobro::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteEstadoCobros(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarCliClienteTipoEstadoCobro(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getCliClienteTipoEstadoCobros($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = CliClienteTipoEstadoCobro::setAplicarFiltrosDeAlcance($criterio);

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
	
		$cliclientetipoestadocobros = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $cliclientetipoestadocobro = new CliClienteTipoEstadoCobro();
                    $cliclientetipoestadocobro->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $cliclientetipoestadocobro->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$cliclientetipoestadocobro->setDescripcionCorta($fila[self::GEN_ATTR_MIN_DESCRIPCION_CORTA]);
			$cliclientetipoestadocobro->setDescripcionPublica($fila[self::GEN_ATTR_MIN_DESCRIPCION_PUBLICA]);
			$cliclientetipoestadocobro->setLeyenda($fila[self::GEN_ATTR_MIN_LEYENDA]);
			$cliclientetipoestadocobro->setActivo($fila[self::GEN_ATTR_MIN_ACTIVO]);
			$cliclientetipoestadocobro->setTerminal($fila[self::GEN_ATTR_MIN_TERMINAL]);
			$cliclientetipoestadocobro->setAnulado($fila[self::GEN_ATTR_MIN_ANULADO]);
			$cliclientetipoestadocobro->setGestionable($fila[self::GEN_ATTR_MIN_GESTIONABLE]);
			$cliclientetipoestadocobro->setBloqueado($fila[self::GEN_ATTR_MIN_BLOQUEADO]);
			$cliclientetipoestadocobro->setAnomalia($fila[self::GEN_ATTR_MIN_ANOMALIA]);
			$cliclientetipoestadocobro->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$cliclientetipoestadocobro->setColorSecundario($fila[self::GEN_ATTR_MIN_COLOR_SECUNDARIO]);
			$cliclientetipoestadocobro->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$cliclientetipoestadocobro->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$cliclientetipoestadocobro->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$cliclientetipoestadocobro->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$cliclientetipoestadocobro->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$cliclientetipoestadocobro->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$cliclientetipoestadocobro->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$cliclientetipoestadocobro->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $cliclientetipoestadocobros[] = $cliclientetipoestadocobro;
		}
		
		return $cliclientetipoestadocobros;
	}	
	

	/* Método getCliClienteTipoEstadoCobros Habilitados */ 	
	static function getCliClienteTipoEstadoCobrosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return CliClienteTipoEstadoCobro::getCliClienteTipoEstadoCobros($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getCliClienteTipoEstadoCobros para listado de Backend */ 	
	static function getCliClienteTipoEstadoCobrosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return CliClienteTipoEstadoCobro::getCliClienteTipoEstadoCobros($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getCliClienteTipoEstadoCobrosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = CliClienteTipoEstadoCobro::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = CliClienteTipoEstadoCobro::getCliClienteTipoEstadoCobros($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClienteTipoEstadoCobros filtrado para select */ 	
	static function getCliClienteTipoEstadoCobrosCmbF($paginador = null, $criterio = null){
            $col = CliClienteTipoEstadoCobro::getCliClienteTipoEstadoCobros($paginador, $criterio);

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
            $url = 'cli_cliente_tipo_estado_cobro_adm.php';
            $url_gestion = 'cli_cliente_tipo_estado_cobro_gestion.php';
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
	

	/* Metodo getCliClientes */ 	
	public function getCliClientes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCliente::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCliente::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCliente::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCliente::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCliente::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCliente::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicliente = CliCliente::hidratarObjeto($fila);			
                $cliclientes[] = $clicliente;
            }

            return $cliclientes;
	}	
	

	/* Método getCliClientesBloque para MasInfo */ 	
	public function getCliClientesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClientes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClientes Habilitados */ 	
	public function getCliClientesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClientes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCliente */ 	
	public function getCliCliente($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClientes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCliente relacionadas */ 	
	public function deleteCliClientes(){
            $obs = $this->getCliClientes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClientesCmb() CliCliente relacionadas */ 	
	public function getCliClientesCmb(){
            $c = new Criterio();
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->setCriterios();

            $os = CliCliente::getCliClientesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoPersonerias (Coleccion) relacionados a traves de CliCliente */ 	
	public function getGralTipoPersoneriasXCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoPersoneria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoPersoneria::GEN_TABLA);
            $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, GralTipoPersoneria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoPersonerias relacionados a traves de CliCliente */ 	
	public function getCantidadGralTipoPersoneriasXCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoPersoneria::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoPersoneria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoPersoneria::GEN_TABLA);
            $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, GralTipoPersoneria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoPersoneria (Objeto) relacionado a traves de CliCliente */ 	
	public function getGralTipoPersoneriaXCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoPersoneriasXCliCliente($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteEstadoCobros */ 	
	public function getCliClienteEstadoCobros($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteEstadoCobro::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteEstadoCobro::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteEstadoCobro::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteEstadoCobro::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteEstadoCobro::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteEstadoCobro::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclienteestadocobros = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclienteestadocobro = CliClienteEstadoCobro::hidratarObjeto($fila);			
                $cliclienteestadocobros[] = $cliclienteestadocobro;
            }

            return $cliclienteestadocobros;
	}	
	

	/* Método getCliClienteEstadoCobrosBloque para MasInfo */ 	
	public function getCliClienteEstadoCobrosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteEstadoCobros($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteEstadoCobros Habilitados */ 	
	public function getCliClienteEstadoCobrosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteEstadoCobros($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteEstadoCobro */ 	
	public function getCliClienteEstadoCobro($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteEstadoCobros($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteEstadoCobro relacionadas */ 	
	public function deleteCliClienteEstadoCobros(){
            $obs = $this->getCliClienteEstadoCobros();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteEstadoCobrosCmb() CliClienteEstadoCobro relacionadas */ 	
	public function getCliClienteEstadoCobrosCmb(){
            $c = new Criterio();
            $c->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteEstadoCobro::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteEstadoCobro::getCliClienteEstadoCobrosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteEstadoCobro */ 	
	public function getCliClientesXCliClienteEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoCobro::GEN_TABLA, CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteEstadoCobro */ 	
	public function getCantidadCliClientesXCliClienteEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteEstadoCobro::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_COBRO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteEstadoCobro::GEN_TABLA, CliClienteEstadoCobro::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteEstadoCobro */ 	
	public function getCliClienteXCliClienteEstadoCobro($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteEstadoCobro($paginador, $criterio, $estado, $arr_ordens);
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM cli_cliente_tipo_estado_cobro'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'cli_cliente_tipo_estado_cobro';");
            
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

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_corta' */ 	
	static function getOxDescripcionCorta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_CORTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion_publica' */ 	
	static function getOxDescripcionPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'descripcion_publica' */ 	
	static function getOsxDescripcionPublica($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION_PUBLICA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'leyenda' */ 	
	static function getOxLeyenda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LEYENDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'leyenda' */ 	
	static function getOsxLeyenda($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LEYENDA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'activo' */ 	
	static function getOxActivo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTIVO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'terminal' */ 	
	static function getOxTerminal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TERMINAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anulado' */ 	
	static function getOxAnulado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANULADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gestionable' */ 	
	static function getOxGestionable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GESTIONABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'bloqueado' */ 	
	static function getOxBloqueado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_BLOQUEADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'bloqueado' */ 	
	static function getOsxBloqueado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_BLOQUEADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'anomalia' */ 	
	static function getOxAnomalia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANOMALIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'anomalia' */ 	
	static function getOsxAnomalia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ANOMALIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'color' */ 	
	static function getOxColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'color_secundario' */ 	
	static function getOxColorSecundario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR_SECUNDARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros(null, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
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

            $obs = self::getCliClienteTipoEstadoCobros($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'cli_cliente_tipo_estado_cobro_adm');
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
                $c->addTabla(CliClienteTipoEstadoCobro::GEN_TABLA);
                $c->addOrden(CliClienteTipoEstadoCobro::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $cli_cliente_tipo_estado_cobros = CliClienteTipoEstadoCobro::getCliClienteTipoEstadoCobros(null, $c);

                $arr = array();
                foreach($cli_cliente_tipo_estado_cobros as $cli_cliente_tipo_estado_cobro){
                    $descripcion = $cli_cliente_tipo_estado_cobro->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>