<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BAltAlerta
{ 
	
	const SES_PAGINACION = 'adm_altalerta_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_altalerta_paginas_registros';
	const SES_CRITERIOS = 'adm_altalerta_criterios';
	
	const GEN_CLASE = 'AltAlerta';
	const GEN_TABLA = 'alt_alerta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BAltAlerta */ 
	const GEN_ATTR_ID = 'alt_alerta.id';
	const GEN_ATTR_ALT_MODULO_ID = 'alt_alerta.alt_modulo_id';
	const GEN_ATTR_ALT_TIPO_ID = 'alt_alerta.alt_tipo_id';
	const GEN_ATTR_ALT_NIVEL_ID = 'alt_alerta.alt_nivel_id';
	const GEN_ATTR_ALT_ORIGEN_ID = 'alt_alerta.alt_origen_id';
	const GEN_ATTR_ALT_CONTROL_ID = 'alt_alerta.alt_control_id';
	const GEN_ATTR_DESCRIPCION = 'alt_alerta.descripcion';
	const GEN_ATTR_CODIGO = 'alt_alerta.codigo';
	const GEN_ATTR_REFERENCIA = 'alt_alerta.referencia';
	const GEN_ATTR_URL_REDIRECCION = 'alt_alerta.url_redireccion';
	const GEN_ATTR_OBSERVACION = 'alt_alerta.observacion';
	const GEN_ATTR_ORDEN = 'alt_alerta.orden';
	const GEN_ATTR_ESTADO = 'alt_alerta.estado';
	const GEN_ATTR_CREADO = 'alt_alerta.creado';
	const GEN_ATTR_CREADO_POR = 'alt_alerta.creado_por';
	const GEN_ATTR_MODIFICADO = 'alt_alerta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'alt_alerta.modificado_por';

	/* Constantes de Atributos Min de BAltAlerta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_ALT_MODULO_ID = 'alt_modulo_id';
	const GEN_ATTR_MIN_ALT_TIPO_ID = 'alt_tipo_id';
	const GEN_ATTR_MIN_ALT_NIVEL_ID = 'alt_nivel_id';
	const GEN_ATTR_MIN_ALT_ORIGEN_ID = 'alt_origen_id';
	const GEN_ATTR_MIN_ALT_CONTROL_ID = 'alt_control_id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_REFERENCIA = 'referencia';
	const GEN_ATTR_MIN_URL_REDIRECCION = 'url_redireccion';
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
	

	/* Atributos de BAltAlerta */ 
	private $id;
	private $alt_modulo_id;
	private $alt_tipo_id;
	private $alt_nivel_id;
	private $alt_origen_id;
	private $alt_control_id;
	private $descripcion;
	private $codigo;
	private $referencia;
	private $url_redireccion;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BAltAlerta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getAltModuloId(){ if(isset($this->alt_modulo_id)){ return $this->alt_modulo_id; }else{ return 'null'; } }
	public function getAltTipoId(){ if(isset($this->alt_tipo_id)){ return $this->alt_tipo_id; }else{ return 'null'; } }
	public function getAltNivelId(){ if(isset($this->alt_nivel_id)){ return $this->alt_nivel_id; }else{ return 'null'; } }
	public function getAltOrigenId(){ if(isset($this->alt_origen_id)){ return $this->alt_origen_id; }else{ return 'null'; } }
	public function getAltControlId(){ if(isset($this->alt_control_id)){ return $this->alt_control_id; }else{ return 'null'; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getReferencia(){ if(isset($this->referencia)){ return $this->referencia; }else{ return 'null'; } }
	public function getUrlRedireccion(){ if(isset($this->url_redireccion)){ return $this->url_redireccion; }else{ return 'null'; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BAltAlerta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_ALT_MODULO_ID."
				, ".self::GEN_ATTR_ALT_TIPO_ID."
				, ".self::GEN_ATTR_ALT_NIVEL_ID."
				, ".self::GEN_ATTR_ALT_ORIGEN_ID."
				, ".self::GEN_ATTR_ALT_CONTROL_ID."
				, ".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_REFERENCIA."
				, ".self::GEN_ATTR_URL_REDIRECCION."
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
                    				$this->setAltModuloId($fila[self::GEN_ATTR_MIN_ALT_MODULO_ID]);
				$this->setAltTipoId($fila[self::GEN_ATTR_MIN_ALT_TIPO_ID]);
				$this->setAltNivelId($fila[self::GEN_ATTR_MIN_ALT_NIVEL_ID]);
				$this->setAltOrigenId($fila[self::GEN_ATTR_MIN_ALT_ORIGEN_ID]);
				$this->setAltControlId($fila[self::GEN_ATTR_MIN_ALT_CONTROL_ID]);
				$this->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setReferencia($fila[self::GEN_ATTR_MIN_REFERENCIA]);
				$this->setUrlRedireccion($fila[self::GEN_ATTR_MIN_URL_REDIRECCION]);
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
	public function setAltModuloId($v){ $this->alt_modulo_id = $v; }
	public function setAltTipoId($v){ $this->alt_tipo_id = $v; }
	public function setAltNivelId($v){ $this->alt_nivel_id = $v; }
	public function setAltOrigenId($v){ $this->alt_origen_id = $v; }
	public function setAltControlId($v){ $this->alt_control_id = $v; }
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setReferencia($v){ $this->referencia = $v; }
	public function setUrlRedireccion($v){ $this->url_redireccion = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new AltAlerta();
            $o->setId($fila[AltAlerta::GEN_ATTR_MIN_ID], false);
            
			$o->setAltModuloId($fila[self::GEN_ATTR_MIN_ALT_MODULO_ID]);
			$o->setAltTipoId($fila[self::GEN_ATTR_MIN_ALT_TIPO_ID]);
			$o->setAltNivelId($fila[self::GEN_ATTR_MIN_ALT_NIVEL_ID]);
			$o->setAltOrigenId($fila[self::GEN_ATTR_MIN_ALT_ORIGEN_ID]);
			$o->setAltControlId($fila[self::GEN_ATTR_MIN_ALT_CONTROL_ID]);
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setReferencia($fila[self::GEN_ATTR_MIN_REFERENCIA]);
			$o->setUrlRedireccion($fila[self::GEN_ATTR_MIN_URL_REDIRECCION]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BAltAlerta */ 	
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

	/* Cambia el estado de BAltAlerta */ 	
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

	/* Save de BAltAlerta */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_ALT_MODULO_ID."
						, ".self::GEN_ATTR_MIN_ALT_TIPO_ID."
						, ".self::GEN_ATTR_MIN_ALT_NIVEL_ID."
						, ".self::GEN_ATTR_MIN_ALT_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_ALT_CONTROL_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_REFERENCIA."
						, ".self::GEN_ATTR_MIN_URL_REDIRECCION."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('alt_alerta_seq'), 
                ".$this->getAltModuloId()."
						, ".$this->getAltTipoId()."
						, ".$this->getAltNivelId()."
						, ".$this->getAltOrigenId()."
						, ".$this->getAltControlId()."
						, '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getReferencia()."
						, ".$this->getUrlRedireccion()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('alt_alerta_seq')";
            
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
                 
				 ".AltAlerta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_ALT_MODULO_ID." = ".$this->getAltModuloId()."
						, ".self::GEN_ATTR_MIN_ALT_TIPO_ID." = ".$this->getAltTipoId()."
						, ".self::GEN_ATTR_MIN_ALT_NIVEL_ID." = ".$this->getAltNivelId()."
						, ".self::GEN_ATTR_MIN_ALT_ORIGEN_ID." = ".$this->getAltOrigenId()."
						, ".self::GEN_ATTR_MIN_ALT_CONTROL_ID." = ".$this->getAltControlId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_REFERENCIA." = ".$this->getReferencia()."
						, ".self::GEN_ATTR_MIN_URL_REDIRECCION." = ".$this->getUrlRedireccion()."
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_ALT_MODULO_ID."
						, ".self::GEN_ATTR_MIN_ALT_TIPO_ID."
						, ".self::GEN_ATTR_MIN_ALT_NIVEL_ID."
						, ".self::GEN_ATTR_MIN_ALT_ORIGEN_ID."
						, ".self::GEN_ATTR_MIN_ALT_CONTROL_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_REFERENCIA."
						, ".self::GEN_ATTR_MIN_URL_REDIRECCION."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getAltModuloId()."
						, ".$this->getAltTipoId()."
						, ".$this->getAltNivelId()."
						, ".$this->getAltOrigenId()."
						, ".$this->getAltControlId()."
						, '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, ".$this->getReferencia()."
						, ".$this->getUrlRedireccion()."
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
                     
				 ".AltAlerta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_ALT_MODULO_ID." = ".$this->getAltModuloId()."
						, ".self::GEN_ATTR_MIN_ALT_TIPO_ID." = ".$this->getAltTipoId()."
						, ".self::GEN_ATTR_MIN_ALT_NIVEL_ID." = ".$this->getAltNivelId()."
						, ".self::GEN_ATTR_MIN_ALT_ORIGEN_ID." = ".$this->getAltOrigenId()."
						, ".self::GEN_ATTR_MIN_ALT_CONTROL_ID." = ".$this->getAltControlId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_REFERENCIA." = ".$this->getReferencia()."
						, ".self::GEN_ATTR_MIN_URL_REDIRECCION." = ".$this->getUrlRedireccion()."
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
            $o = new AltAlerta();
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

	/* Delete de BAltAlerta */ 	
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
	
            // se elimina la coleccion de AltAlertaUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AltAlertaUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAltAlertaUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AltAlertaEnvioEmails relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AltAlertaEnvioEmail::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAltAlertaEnvioEmails(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarAltAlerta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getAltAlertas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = AltAlerta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$altalertas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $altalerta = new AltAlerta();
                    $altalerta->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $altalerta->setAltModuloId($fila[self::GEN_ATTR_MIN_ALT_MODULO_ID]);
			$altalerta->setAltTipoId($fila[self::GEN_ATTR_MIN_ALT_TIPO_ID]);
			$altalerta->setAltNivelId($fila[self::GEN_ATTR_MIN_ALT_NIVEL_ID]);
			$altalerta->setAltOrigenId($fila[self::GEN_ATTR_MIN_ALT_ORIGEN_ID]);
			$altalerta->setAltControlId($fila[self::GEN_ATTR_MIN_ALT_CONTROL_ID]);
			$altalerta->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$altalerta->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$altalerta->setReferencia($fila[self::GEN_ATTR_MIN_REFERENCIA]);
			$altalerta->setUrlRedireccion($fila[self::GEN_ATTR_MIN_URL_REDIRECCION]);
			$altalerta->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$altalerta->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$altalerta->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$altalerta->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$altalerta->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$altalerta->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$altalerta->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $altalertas[] = $altalerta;
		}
		
		return $altalertas;
	}	
	

	/* Método getAltAlertas Habilitados */ 	
	static function getAltAlertasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return AltAlerta::getAltAlertas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getAltAlertas para listado de Backend */ 	
	static function getAltAlertasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return AltAlerta::getAltAlertas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getAltAlertasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = AltAlerta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = AltAlerta::getAltAlertas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAltAlertas filtrado para select */ 	
	static function getAltAlertasCmbF($paginador = null, $criterio = null){
            $col = AltAlerta::getAltAlertas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAltAlertas filtrado por una coleccion de objetos foraneos de AltModulo */ 	
	static function getAltAlertasXAltModulos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AltAlerta::GEN_ATTR_ALT_MODULO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addOrden(AltAlerta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AltAlerta::getAltAlertas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAltModuloId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAltAlertas filtrado por una coleccion de objetos foraneos de AltTipo */ 	
	static function getAltAlertasXAltTipos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AltAlerta::GEN_ATTR_ALT_TIPO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addOrden(AltAlerta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AltAlerta::getAltAlertas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAltTipoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAltAlertas filtrado por una coleccion de objetos foraneos de AltNivel */ 	
	static function getAltAlertasXAltNivels($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AltAlerta::GEN_ATTR_ALT_NIVEL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addOrden(AltAlerta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AltAlerta::getAltAlertas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAltNivelId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAltAlertas filtrado por una coleccion de objetos foraneos de AltOrigen */ 	
	static function getAltAlertasXAltOrigens($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AltAlerta::GEN_ATTR_ALT_ORIGEN_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addOrden(AltAlerta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AltAlerta::getAltAlertas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAltOrigenId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAltAlertas filtrado por una coleccion de objetos foraneos de AltControl */ 	
	static function getAltAlertasXAltControls($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AltAlerta::GEN_ATTR_ALT_CONTROL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addOrden(AltAlerta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AltAlerta::getAltAlertas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAltControlId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'alt_alerta_adm.php';
            $url_gestion = 'alt_alerta_gestion.php';
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
	

	/* Metodo getAltAlertaUsUsuarios */ 	
	public function getAltAlertaUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AltAlertaUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AltAlertaUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AltAlertaUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AltAlertaUsUsuario::GEN_ATTR_ALT_ALERTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AltAlertaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AltAlertaUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AltAlertaUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $altalertaususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $altalertaususuario = AltAlertaUsUsuario::hidratarObjeto($fila);			
                $altalertaususuarios[] = $altalertaususuario;
            }

            return $altalertaususuarios;
	}	
	

	/* Método getAltAlertaUsUsuariosBloque para MasInfo */ 	
	public function getAltAlertaUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAltAlertaUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAltAlertaUsUsuarios Habilitados */ 	
	public function getAltAlertaUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAltAlertaUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAltAlertaUsUsuario */ 	
	public function getAltAlertaUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAltAlertaUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AltAlertaUsUsuario relacionadas */ 	
	public function deleteAltAlertaUsUsuarios(){
            $obs = $this->getAltAlertaUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAltAlertaUsUsuariosCmb() AltAlertaUsUsuario relacionadas */ 	
	public function getAltAlertaUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(AltAlertaUsUsuario::GEN_ATTR_ALT_ALERTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlertaUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = AltAlertaUsUsuario::getAltAlertaUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de AltAlertaUsUsuario */ 	
	public function getUsUsuariosXAltAlertaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltAlertaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltAlertaUsUsuario::GEN_ATTR_ALT_ALERTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(AltAlertaUsUsuario::GEN_TABLA, AltAlertaUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de AltAlertaUsUsuario */ 	
	public function getCantidadUsUsuariosXAltAlertaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltAlertaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltAlertaUsUsuario::GEN_ATTR_ALT_ALERTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(AltAlertaUsUsuario::GEN_TABLA, AltAlertaUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de AltAlertaUsUsuario */ 	
	public function getUsUsuarioXAltAlertaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXAltAlertaUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAltAlertaEnvioEmails */ 	
	public function getAltAlertaEnvioEmails($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AltAlertaEnvioEmail::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AltAlertaEnvioEmail::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AltAlertaEnvioEmail::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AltAlertaEnvioEmail::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AltAlertaEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AltAlertaEnvioEmail::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AltAlertaEnvioEmail::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $altalertaenvioemails = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $altalertaenvioemail = AltAlertaEnvioEmail::hidratarObjeto($fila);			
                $altalertaenvioemails[] = $altalertaenvioemail;
            }

            return $altalertaenvioemails;
	}	
	

	/* Método getAltAlertaEnvioEmailsBloque para MasInfo */ 	
	public function getAltAlertaEnvioEmailsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAltAlertaEnvioEmails($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAltAlertaEnvioEmails Habilitados */ 	
	public function getAltAlertaEnvioEmailsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAltAlertaEnvioEmails($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAltAlertaEnvioEmail */ 	
	public function getAltAlertaEnvioEmail($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAltAlertaEnvioEmails($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AltAlertaEnvioEmail relacionadas */ 	
	public function deleteAltAlertaEnvioEmails(){
            $obs = $this->getAltAlertaEnvioEmails();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAltAlertaEnvioEmailsCmb() AltAlertaEnvioEmail relacionadas */ 	
	public function getAltAlertaEnvioEmailsCmb(){
            $c = new Criterio();
            $c->add(AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlertaEnvioEmail::GEN_TABLA);
            $c->setCriterios();

            $os = AltAlertaEnvioEmail::getAltAlertaEnvioEmailsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AltAlertaUsUsuarios (Coleccion) relacionados a traves de AltAlertaEnvioEmail */ 	
	public function getAltAlertaUsUsuariosXAltAlertaEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AltAlertaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltAlertaEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlertaUsUsuario::GEN_TABLA);
            $c->addRealJoin(AltAlertaEnvioEmail::GEN_TABLA, AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_US_USUARIO_ID, AltAlertaUsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AltAlertaUsUsuario::getAltAlertaUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AltAlertaUsUsuarios relacionados a traves de AltAlertaEnvioEmail */ 	
	public function getCantidadAltAlertaUsUsuariosXAltAlertaEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AltAlertaUsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(AltAlertaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltAlertaEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlertaUsUsuario::GEN_TABLA);
            $c->addRealJoin(AltAlertaEnvioEmail::GEN_TABLA, AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_US_USUARIO_ID, AltAlertaUsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AltAlertaUsUsuario::getAltAlertaUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AltAlertaUsUsuario (Objeto) relacionado a traves de AltAlertaEnvioEmail */ 	
	public function getAltAlertaUsUsuarioXAltAlertaEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAltAlertaUsUsuariosXAltAlertaEnvioEmail($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los UsUsuarios asignados a AltAlerta */ 	
	public function getAltAlertaUsUsuariosId(){
            $ids = array();
            foreach($this->getAltAlertaUsUsuarios() as $o){
            
                $ids[] = $o->getUsUsuarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsUsuarios asignados al AltAlerta */ 	
	public function setAltAlertaUsUsuarios($ids){
            $this->deleteAltAlertaUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new AltAlertaUsUsuario();
                    $o->setUsUsuarioId($id);
                    $o->setAltAlertaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsUsuario en el alta de AltAlerta */ 	
	public function getAltaMostrarBloqueRelacionAltAlertaUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna el AltModulo (Clave Foranea) */ 	
    public function getAltModulo(){
        $o = new AltModulo();
        $o->setId($this->getAltModuloId());
        return $o;			
    }

	/* Metodo que retorna el AltModulo (Clave Foranea) en Array */ 	
    public function getAltModuloEnArray(&$arr_os){
        if($this->getAltModuloId() != 'null'){
            if(isset($arr_os[$this->getAltModuloId()])){
                $o = $arr_os[$this->getAltModuloId()];
            }else{
                $o = AltModulo::getOxId($this->getAltModuloId());
                if($o){
                    $arr_os[$this->getAltModuloId()] = $o;
                }
            }
        }else{
            $o = new AltModulo();
        }
        return $o;		
    }

	/* Metodo que retorna el AltTipo (Clave Foranea) */ 	
    public function getAltTipo(){
        $o = new AltTipo();
        $o->setId($this->getAltTipoId());
        return $o;			
    }

	/* Metodo que retorna el AltTipo (Clave Foranea) en Array */ 	
    public function getAltTipoEnArray(&$arr_os){
        if($this->getAltTipoId() != 'null'){
            if(isset($arr_os[$this->getAltTipoId()])){
                $o = $arr_os[$this->getAltTipoId()];
            }else{
                $o = AltTipo::getOxId($this->getAltTipoId());
                if($o){
                    $arr_os[$this->getAltTipoId()] = $o;
                }
            }
        }else{
            $o = new AltTipo();
        }
        return $o;		
    }

	/* Metodo que retorna el AltNivel (Clave Foranea) */ 	
    public function getAltNivel(){
        $o = new AltNivel();
        $o->setId($this->getAltNivelId());
        return $o;			
    }

	/* Metodo que retorna el AltNivel (Clave Foranea) en Array */ 	
    public function getAltNivelEnArray(&$arr_os){
        if($this->getAltNivelId() != 'null'){
            if(isset($arr_os[$this->getAltNivelId()])){
                $o = $arr_os[$this->getAltNivelId()];
            }else{
                $o = AltNivel::getOxId($this->getAltNivelId());
                if($o){
                    $arr_os[$this->getAltNivelId()] = $o;
                }
            }
        }else{
            $o = new AltNivel();
        }
        return $o;		
    }

	/* Metodo que retorna el AltOrigen (Clave Foranea) */ 	
    public function getAltOrigen(){
        $o = new AltOrigen();
        $o->setId($this->getAltOrigenId());
        return $o;			
    }

	/* Metodo que retorna el AltOrigen (Clave Foranea) en Array */ 	
    public function getAltOrigenEnArray(&$arr_os){
        if($this->getAltOrigenId() != 'null'){
            if(isset($arr_os[$this->getAltOrigenId()])){
                $o = $arr_os[$this->getAltOrigenId()];
            }else{
                $o = AltOrigen::getOxId($this->getAltOrigenId());
                if($o){
                    $arr_os[$this->getAltOrigenId()] = $o;
                }
            }
        }else{
            $o = new AltOrigen();
        }
        return $o;		
    }

	/* Metodo que retorna el AltControl (Clave Foranea) */ 	
    public function getAltControl(){
        $o = new AltControl();
        $o->setId($this->getAltControlId());
        return $o;			
    }

	/* Metodo que retorna el AltControl (Clave Foranea) en Array */ 	
    public function getAltControlEnArray(&$arr_os){
        if($this->getAltControlId() != 'null'){
            if(isset($arr_os[$this->getAltControlId()])){
                $o = $arr_os[$this->getAltControlId()];
            }else{
                $o = AltControl::getOxId($this->getAltControlId());
                if($o){
                    $arr_os[$this->getAltControlId()] = $o;
                }
            }
        }else{
            $o = new AltControl();
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
            		
        if($contexto_solicitante != AltModulo::GEN_CLASE){
            if($this->getAltModulo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AltModulo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAltModulo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != AltTipo::GEN_CLASE){
            if($this->getAltTipo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AltTipo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAltTipo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != AltNivel::GEN_CLASE){
            if($this->getAltNivel()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AltNivel::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAltNivel()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != AltOrigen::GEN_CLASE){
            if($this->getAltOrigen()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AltOrigen::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAltOrigen()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != AltControl::GEN_CLASE){
            if($this->getAltControl()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AltControl::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAltControl()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM alt_alerta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'alt_alerta';");
            
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

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alt_modulo_id' */ 	
	static function getOxAltModuloId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_MODULO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alt_modulo_id' */ 	
	static function getOsxAltModuloId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_MODULO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alt_tipo_id' */ 	
	static function getOxAltTipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_TIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alt_tipo_id' */ 	
	static function getOsxAltTipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_TIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alt_nivel_id' */ 	
	static function getOxAltNivelId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_NIVEL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alt_nivel_id' */ 	
	static function getOsxAltNivelId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_NIVEL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alt_origen_id' */ 	
	static function getOxAltOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alt_origen_id' */ 	
	static function getOsxAltOrigenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_ORIGEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alt_control_id' */ 	
	static function getOxAltControlId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_CONTROL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alt_control_id' */ 	
	static function getOsxAltControlId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_CONTROL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'referencia' */ 	
	static function getOxReferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'referencia' */ 	
	static function getOsxReferencia($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REFERENCIA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'url_redireccion' */ 	
	static function getOxUrlRedireccion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_URL_REDIRECCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'url_redireccion' */ 	
	static function getOsxUrlRedireccion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_URL_REDIRECCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas(null, $criterio);
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

            $obs = self::getAltAlertas($paginador, $criterio);
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

            $obs = self::getAltAlertas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'alt_alerta_adm');
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
                $c->addTabla(AltAlerta::GEN_TABLA);
                $c->addOrden(AltAlerta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $alt_alertas = AltAlerta::getAltAlertas(null, $c);

                $arr = array();
                foreach($alt_alertas as $alt_alerta){
                    $descripcion = $alt_alerta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>