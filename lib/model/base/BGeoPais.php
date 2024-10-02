<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BGeoPais
{ 
	
	const SES_PAGINACION = 'adm_geopais_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_geopais_paginas_registros';
	const SES_CRITERIOS = 'adm_geopais_criterios';
	
	const GEN_CLASE = 'GeoPais';
	const GEN_TABLA = 'geo_pais';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGeoPais */ 
	const GEN_ATTR_ID = 'geo_pais.id';
	const GEN_ATTR_DESCRIPCION = 'geo_pais.descripcion';
	const GEN_ATTR_GRAL_LENGUAJE_ID = 'geo_pais.gral_lenguaje_id';
	const GEN_ATTR_CODIGO = 'geo_pais.codigo';
	const GEN_ATTR_CODIGO_ALPHA_2 = 'geo_pais.codigo_alpha_2';
	const GEN_ATTR_CODIGO_ALPHA_3 = 'geo_pais.codigo_alpha_3';
	const GEN_ATTR_CODIGO_TELEFONICO = 'geo_pais.codigo_telefonico';
	const GEN_ATTR_OBSERVACION = 'geo_pais.observacion';
	const GEN_ATTR_ORDEN = 'geo_pais.orden';
	const GEN_ATTR_ESTADO = 'geo_pais.estado';
	const GEN_ATTR_CREADO = 'geo_pais.creado';
	const GEN_ATTR_CREADO_POR = 'geo_pais.creado_por';
	const GEN_ATTR_MODIFICADO = 'geo_pais.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'geo_pais.modificado_por';

	/* Constantes de Atributos Min de BGeoPais */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GRAL_LENGUAJE_ID = 'gral_lenguaje_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_ALPHA_2 = 'codigo_alpha_2';
	const GEN_ATTR_MIN_CODIGO_ALPHA_3 = 'codigo_alpha_3';
	const GEN_ATTR_MIN_CODIGO_TELEFONICO = 'codigo_telefonico';
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
	

	/* Atributos de BGeoPais */ 
	private $id;
	private $descripcion;
	private $gral_lenguaje_id;
	private $codigo;
	private $codigo_alpha_2;
	private $codigo_alpha_3;
	private $codigo_telefonico;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGeoPais */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGralLenguajeId(){ if(isset($this->gral_lenguaje_id)){ return $this->gral_lenguaje_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoAlpha2(){ if(isset($this->codigo_alpha_2)){ return $this->codigo_alpha_2; }else{ return ''; } }
	public function getCodigoAlpha3(){ if(isset($this->codigo_alpha_3)){ return $this->codigo_alpha_3; }else{ return ''; } }
	public function getCodigoTelefonico(){ if(isset($this->codigo_telefonico)){ return $this->codigo_telefonico; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGeoPais */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GRAL_LENGUAJE_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_ALPHA_2."
				, ".self::GEN_ATTR_CODIGO_ALPHA_3."
				, ".self::GEN_ATTR_CODIGO_TELEFONICO."
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
				$this->setGralLenguajeId($fila[self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoAlpha2($fila[self::GEN_ATTR_MIN_CODIGO_ALPHA_2]);
				$this->setCodigoAlpha3($fila[self::GEN_ATTR_MIN_CODIGO_ALPHA_3]);
				$this->setCodigoTelefonico($fila[self::GEN_ATTR_MIN_CODIGO_TELEFONICO]);
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
	public function setGralLenguajeId($v){ $this->gral_lenguaje_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoAlpha2($v){ $this->codigo_alpha_2 = $v; }
	public function setCodigoAlpha3($v){ $this->codigo_alpha_3 = $v; }
	public function setCodigoTelefonico($v){ $this->codigo_telefonico = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GeoPais();
            $o->setId($fila[GeoPais::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGralLenguajeId($fila[self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoAlpha2($fila[self::GEN_ATTR_MIN_CODIGO_ALPHA_2]);
			$o->setCodigoAlpha3($fila[self::GEN_ATTR_MIN_CODIGO_ALPHA_3]);
			$o->setCodigoTelefonico($fila[self::GEN_ATTR_MIN_CODIGO_TELEFONICO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGeoPais */ 	
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

	/* Cambia el estado de BGeoPais */ 	
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

	/* Save de BGeoPais */ 	
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
						, ".self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_ALPHA_2."
						, ".self::GEN_ATTR_MIN_CODIGO_ALPHA_3."
						, ".self::GEN_ATTR_MIN_CODIGO_TELEFONICO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('geo_pais_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGralLenguajeId()."
						, '".$this->getCodigo()."'
						, '".$this->getCodigoAlpha2()."'
						, '".$this->getCodigoAlpha3()."'
						, '".$this->getCodigoTelefonico()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('geo_pais_seq')";
            
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
                 
				 ".GeoPais::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID." = ".$this->getGralLenguajeId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_ALPHA_2." = '".$this->getCodigoAlpha2()."'
						, ".self::GEN_ATTR_MIN_CODIGO_ALPHA_3." = '".$this->getCodigoAlpha3()."'
						, ".self::GEN_ATTR_MIN_CODIGO_TELEFONICO." = '".$this->getCodigoTelefonico()."'
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
						, ".self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_ALPHA_2."
						, ".self::GEN_ATTR_MIN_CODIGO_ALPHA_3."
						, ".self::GEN_ATTR_MIN_CODIGO_TELEFONICO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getGralLenguajeId()."
						, '".$this->getCodigo()."'
						, '".$this->getCodigoAlpha2()."'
						, '".$this->getCodigoAlpha3()."'
						, '".$this->getCodigoTelefonico()."'
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
                     
				 ".GeoPais::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID." = ".$this->getGralLenguajeId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_ALPHA_2." = '".$this->getCodigoAlpha2()."'
						, ".self::GEN_ATTR_MIN_CODIGO_ALPHA_3." = '".$this->getCodigoAlpha3()."'
						, ".self::GEN_ATTR_MIN_CODIGO_TELEFONICO." = '".$this->getCodigoTelefonico()."'
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
            $o = new GeoPais();
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

	/* Delete de BGeoPais */ 	
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
	
            // se elimina la coleccion de GeoProvincias relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GeoProvincia::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGeoProvincias(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvTelefonos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvTelefono::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvTelefonos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliTelefonos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliTelefono::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliTelefonos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuParamGeoPaisGeoPaiss relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuParamGeoPaisGeoPais::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuParamGeoPaisGeoPaiss(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGeoPais(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGeoPaiss($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GeoPais::setAplicarFiltrosDeAlcance($criterio);

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
	
		$geopaiss = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $geopais = new GeoPais();
                    $geopais->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $geopais->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$geopais->setGralLenguajeId($fila[self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID]);
			$geopais->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$geopais->setCodigoAlpha2($fila[self::GEN_ATTR_MIN_CODIGO_ALPHA_2]);
			$geopais->setCodigoAlpha3($fila[self::GEN_ATTR_MIN_CODIGO_ALPHA_3]);
			$geopais->setCodigoTelefonico($fila[self::GEN_ATTR_MIN_CODIGO_TELEFONICO]);
			$geopais->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$geopais->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$geopais->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$geopais->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$geopais->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$geopais->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$geopais->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $geopaiss[] = $geopais;
		}
		
		return $geopaiss;
	}	
	

	/* Método getGeoPaiss Habilitados */ 	
	static function getGeoPaissHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GeoPais::getGeoPaiss($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGeoPaiss para listado de Backend */ 	
	static function getGeoPaissDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GeoPais::getGeoPaiss($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGeoPaissCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GeoPais::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GeoPais::getGeoPaiss($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGeoPaiss filtrado para select */ 	
	static function getGeoPaissCmbF($paginador = null, $criterio = null){
            $col = GeoPais::getGeoPaiss($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGeoPaiss filtrado por una coleccion de objetos foraneos de GralLenguaje */ 	
	static function getGeoPaissXGralLenguajes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(GeoPais::GEN_ATTR_GRAL_LENGUAJE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(GeoPais::GEN_TABLA);
            $c->addOrden(GeoPais::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = GeoPais::getGeoPaiss($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralLenguajeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'geo_pais_adm.php';
            $url_gestion = 'geo_pais_gestion.php';
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
	

	/* Metodo getGeoProvincias */ 	
	public function getGeoProvincias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GeoProvincia::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GeoProvincia::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GeoProvincia::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GeoProvincia::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GeoProvincia::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GeoProvincia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GeoProvincia::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GeoProvincia::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $geoprovincias = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $geoprovincia = GeoProvincia::hidratarObjeto($fila);			
                $geoprovincias[] = $geoprovincia;
            }

            return $geoprovincias;
	}	
	

	/* Método getGeoProvinciasBloque para MasInfo */ 	
	public function getGeoProvinciasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGeoProvincias($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGeoProvincias Habilitados */ 	
	public function getGeoProvinciasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGeoProvincias($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGeoProvincia */ 	
	public function getGeoProvincia($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGeoProvincias($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GeoProvincia relacionadas */ 	
	public function deleteGeoProvincias(){
            $obs = $this->getGeoProvincias();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGeoProvinciasCmb() GeoProvincia relacionadas */ 	
	public function getGeoProvinciasCmb(){
            $c = new Criterio();
            $c->add(GeoProvincia::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GeoProvincia::GEN_TABLA);
            $c->setCriterios();

            $os = GeoProvincia::getGeoProvinciasCmbF(null, $c);
            return $os;
	}

	/* Metodo getPrvTelefonos */ 	
	public function getPrvTelefonos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvTelefono::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvTelefono::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvTelefono::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvTelefono::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvTelefono::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvTelefono::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvTelefono::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvtelefonos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvtelefono = PrvTelefono::hidratarObjeto($fila);			
                $prvtelefonos[] = $prvtelefono;
            }

            return $prvtelefonos;
	}	
	

	/* Método getPrvTelefonosBloque para MasInfo */ 	
	public function getPrvTelefonosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvTelefonos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvTelefonos Habilitados */ 	
	public function getPrvTelefonosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvTelefonos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvTelefono */ 	
	public function getPrvTelefono($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvTelefonos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvTelefono relacionadas */ 	
	public function deletePrvTelefonos(){
            $obs = $this->getPrvTelefonos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvTelefonosCmb() PrvTelefono relacionadas */ 	
	public function getPrvTelefonosCmb(){
            $c = new Criterio();
            $c->add(PrvTelefono::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvTelefono::GEN_TABLA);
            $c->setCriterios();

            $os = PrvTelefono::getPrvTelefonosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PrvTelefono */ 	
	public function getPrvProveedorsXPrvTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvTelefono::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvTelefono::GEN_TABLA, PrvTelefono::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PrvTelefono */ 	
	public function getCantidadPrvProveedorsXPrvTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvTelefono::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvTelefono::GEN_TABLA, PrvTelefono::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PrvTelefono */ 	
	public function getPrvProveedorXPrvTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPrvTelefono($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliTelefonos */ 	
	public function getCliTelefonos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliTelefono::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliTelefono::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliTelefono::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliTelefono::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliTelefono::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliTelefono::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliTelefono::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clitelefonos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clitelefono = CliTelefono::hidratarObjeto($fila);			
                $clitelefonos[] = $clitelefono;
            }

            return $clitelefonos;
	}	
	

	/* Método getCliTelefonosBloque para MasInfo */ 	
	public function getCliTelefonosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliTelefonos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliTelefonos Habilitados */ 	
	public function getCliTelefonosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliTelefonos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliTelefono */ 	
	public function getCliTelefono($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliTelefonos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliTelefono relacionadas */ 	
	public function deleteCliTelefonos(){
            $obs = $this->getCliTelefonos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliTelefonosCmb() CliTelefono relacionadas */ 	
	public function getCliTelefonosCmb(){
            $c = new Criterio();
            $c->add(CliTelefono::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliTelefono::GEN_TABLA);
            $c->setCriterios();

            $os = CliTelefono::getCliTelefonosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliTelefono */ 	
	public function getCliClientesXCliTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliTelefono::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliTelefono::GEN_TABLA, CliTelefono::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliTelefono */ 	
	public function getCantidadCliClientesXCliTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliTelefono::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliTelefono::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliTelefono::GEN_TABLA, CliTelefono::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliTelefono */ 	
	public function getCliClienteXCliTelefono($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliTelefono($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuParamGeoPaisGeoPaiss */ 	
	public function getEkuParamGeoPaisGeoPaiss($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuParamGeoPaisGeoPais::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuParamGeoPaisGeoPais::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuParamGeoPaisGeoPais::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuParamGeoPaisGeoPais::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuParamGeoPaisGeoPais::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuParamGeoPaisGeoPais::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuParamGeoPaisGeoPais::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuparamgeopaisgeopaiss = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuparamgeopaisgeopais = EkuParamGeoPaisGeoPais::hidratarObjeto($fila);			
                $ekuparamgeopaisgeopaiss[] = $ekuparamgeopaisgeopais;
            }

            return $ekuparamgeopaisgeopaiss;
	}	
	

	/* Método getEkuParamGeoPaisGeoPaissBloque para MasInfo */ 	
	public function getEkuParamGeoPaisGeoPaissParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuParamGeoPaisGeoPaiss($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuParamGeoPaisGeoPaiss Habilitados */ 	
	public function getEkuParamGeoPaisGeoPaissHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuParamGeoPaisGeoPaiss($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuParamGeoPaisGeoPais */ 	
	public function getEkuParamGeoPaisGeoPais($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuParamGeoPaisGeoPaiss($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuParamGeoPaisGeoPais relacionadas */ 	
	public function deleteEkuParamGeoPaisGeoPaiss(){
            $obs = $this->getEkuParamGeoPaisGeoPaiss();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuParamGeoPaisGeoPaissCmb() EkuParamGeoPaisGeoPais relacionadas */ 	
	public function getEkuParamGeoPaisGeoPaissCmb(){
            $c = new Criterio();
            $c->add(EkuParamGeoPaisGeoPais::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamGeoPaisGeoPais::GEN_TABLA);
            $c->setCriterios();

            $os = EkuParamGeoPaisGeoPais::getEkuParamGeoPaisGeoPaissCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuParamGeoPaiss (Coleccion) relacionados a traves de EkuParamGeoPaisGeoPais */ 	
	public function getEkuParamGeoPaissXEkuParamGeoPaisGeoPais($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuParamGeoPais::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamGeoPaisGeoPais::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamGeoPaisGeoPais::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamGeoPais::GEN_TABLA);
            $c->addRealJoin(EkuParamGeoPaisGeoPais::GEN_TABLA, EkuParamGeoPaisGeoPais::GEN_ATTR_EKU_PARAM_GEO_PAIS_ID, EkuParamGeoPais::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamGeoPais::getEkuParamGeoPaiss($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuParamGeoPaiss relacionados a traves de EkuParamGeoPaisGeoPais */ 	
	public function getCantidadEkuParamGeoPaissXEkuParamGeoPaisGeoPais($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuParamGeoPais::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuParamGeoPais::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamGeoPaisGeoPais::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamGeoPaisGeoPais::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamGeoPais::GEN_TABLA);
            $c->addRealJoin(EkuParamGeoPaisGeoPais::GEN_TABLA, EkuParamGeoPaisGeoPais::GEN_ATTR_EKU_PARAM_GEO_PAIS_ID, EkuParamGeoPais::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamGeoPais::getEkuParamGeoPaiss($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuParamGeoPais (Objeto) relacionado a traves de EkuParamGeoPaisGeoPais */ 	
	public function getEkuParamGeoPaisXEkuParamGeoPaisGeoPais($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuParamGeoPaissXEkuParamGeoPaisGeoPais($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los EkuParamGeoPaiss asignados a GeoPais */ 	
	public function getEkuParamGeoPaisGeoPaissId(){
            $ids = array();
            foreach($this->getEkuParamGeoPaisGeoPaiss() as $o){
            
                $ids[] = $o->getEkuParamGeoPaisId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuParamGeoPaiss asignados al GeoPais */ 	
	public function setEkuParamGeoPaisGeoPaiss($ids){
            $this->deleteEkuParamGeoPaisGeoPaiss();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuParamGeoPaisGeoPais();
                    $o->setEkuParamGeoPaisId($id);
                    $o->setGeoPaisId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuParamGeoPais en el alta de GeoPais */ 	
	public function getAltaMostrarBloqueRelacionEkuParamGeoPaisGeoPais(){
            return true;
	}
	

	/* Metodo que retorna el GralLenguaje (Clave Foranea) */ 	
    public function getGralLenguaje(){
        $o = new GralLenguaje();
        $o->setId($this->getGralLenguajeId());
        return $o;			
    }

	/* Metodo que retorna el GralLenguaje (Clave Foranea) en Array */ 	
    public function getGralLenguajeEnArray(&$arr_os){
        if($this->getGralLenguajeId() != 'null'){
            if(isset($arr_os[$this->getGralLenguajeId()])){
                $o = $arr_os[$this->getGralLenguajeId()];
            }else{
                $o = GralLenguaje::getOxId($this->getGralLenguajeId());
                if($o){
                    $arr_os[$this->getGralLenguajeId()] = $o;
                }
            }
        }else{
            $o = new GralLenguaje();
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
            		
        if($contexto_solicitante != GralLenguaje::GEN_CLASE){
            if($this->getGralLenguaje()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralLenguaje::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralLenguaje()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM geo_pais'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'geo_pais';");
            
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

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_lenguaje_id' */ 	
	static function getOxGralLenguajeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_LENGUAJE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_lenguaje_id' */ 	
	static function getOsxGralLenguajeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_LENGUAJE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_alpha_2' */ 	
	static function getOxCodigoAlpha2($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_ALPHA_2, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_alpha_2' */ 	
	static function getOsxCodigoAlpha2($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_ALPHA_2, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_alpha_3' */ 	
	static function getOxCodigoAlpha3($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_ALPHA_3, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_alpha_3' */ 	
	static function getOsxCodigoAlpha3($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_ALPHA_3, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_telefonico' */ 	
	static function getOxCodigoTelefonico($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_TELEFONICO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_telefonico' */ 	
	static function getOsxCodigoTelefonico($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_TELEFONICO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss(null, $criterio);
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

            $obs = self::getGeoPaiss($paginador, $criterio);
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

            $obs = self::getGeoPaiss($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'geo_pais_adm');
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
	public function getGeoProvinciasParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(GeoProvincia::GEN_ATTR_GEO_PAIS_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(GeoProvincia::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(GeoProvincia::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(GeoProvincia::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(GeoProvincia::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(GeoProvincia::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $geo_provincias = GeoProvincia::getGeoProvincias($paginador, $c);

            $arr['COLECCION'] = $geo_provincias;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(GeoPais::GEN_TABLA);
                $c->addOrden(GeoPais::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $geo_paiss = GeoPais::getGeoPaiss(null, $c);

                $arr = array();
                foreach($geo_paiss as $geo_pais){
                    $descripcion = $geo_pais->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>