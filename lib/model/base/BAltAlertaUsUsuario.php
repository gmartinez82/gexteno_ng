<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BAltAlertaUsUsuario
{ 
	
	const SES_PAGINACION = 'adm_altalertaususuario_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_altalertaususuario_paginas_registros';
	const SES_CRITERIOS = 'adm_altalertaususuario_criterios';
	
	const GEN_CLASE = 'AltAlertaUsUsuario';
	const GEN_TABLA = 'alt_alerta_us_usuario';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_FRTN_VINCULO_UNO_ANCHO = '';
        const GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD = 20;
        const GEN_FRTN_VINCULO_CRITERIO_ORDEN = 'ASC';
        

	/* Constantes de Atributos de BAltAlertaUsUsuario */ 
	const GEN_ATTR_ID = 'alt_alerta_us_usuario.id';
	const GEN_ATTR_ALT_ALERTA_ID = 'alt_alerta_us_usuario.alt_alerta_id';
	const GEN_ATTR_US_USUARIO_ID = 'alt_alerta_us_usuario.us_usuario_id';
	const GEN_ATTR_OBSERVADO = 'alt_alerta_us_usuario.observado';
	const GEN_ATTR_LEIDO = 'alt_alerta_us_usuario.leido';
	const GEN_ATTR_DESTACADO = 'alt_alerta_us_usuario.destacado';
	const GEN_ATTR_AVISO_EMAIL = 'alt_alerta_us_usuario.aviso_email';
	const GEN_ATTR_AVISO_SMS = 'alt_alerta_us_usuario.aviso_sms';
	const GEN_ATTR_CREADO = 'alt_alerta_us_usuario.creado';
	const GEN_ATTR_CREADO_POR = 'alt_alerta_us_usuario.creado_por';

	/* Constantes de Atributos Min de BAltAlertaUsUsuario */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_ALT_ALERTA_ID = 'alt_alerta_id';
	const GEN_ATTR_MIN_US_USUARIO_ID = 'us_usuario_id';
	const GEN_ATTR_MIN_OBSERVADO = 'observado';
	const GEN_ATTR_MIN_LEIDO = 'leido';
	const GEN_ATTR_MIN_DESTACADO = 'destacado';
	const GEN_ATTR_MIN_AVISO_EMAIL = 'aviso_email';
	const GEN_ATTR_MIN_AVISO_SMS = 'aviso_sms';
	const GEN_ATTR_MIN_CREADO = 'creado';
	const GEN_ATTR_MIN_CREADO_POR = 'creado_por';
	
		
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
	

	/* Atributos de BAltAlertaUsUsuario */ 
	private $id;
	private $alt_alerta_id;
	private $us_usuario_id;
	private $observado;
	private $leido;
	private $destacado;
	private $aviso_email;
	private $aviso_sms;
	private $creado;
	private $creado_por;

	/* Getters de BAltAlertaUsUsuario */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getAltAlertaId(){ if(isset($this->alt_alerta_id)){ return $this->alt_alerta_id; }else{ return 'null'; } }
	public function getUsUsuarioId(){ if(isset($this->us_usuario_id)){ return $this->us_usuario_id; }else{ return 'null'; } }
	public function getObservado(){ if(isset($this->observado)){ return $this->observado; }else{ return 0; } }
	public function getLeido(){ if(isset($this->leido)){ return $this->leido; }else{ return 0; } }
	public function getDestacado(){ if(isset($this->destacado)){ return $this->destacado; }else{ return 0; } }
	public function getAvisoEmail(){ if(isset($this->aviso_email)){ return $this->aviso_email; }else{ return 0; } }
	public function getAvisoSms(){ if(isset($this->aviso_sms)){ return $this->aviso_sms; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }

	/* Setters de BAltAlertaUsUsuario */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_ALT_ALERTA_ID."
				, ".self::GEN_ATTR_US_USUARIO_ID."
				, ".self::GEN_ATTR_OBSERVADO."
				, ".self::GEN_ATTR_LEIDO."
				, ".self::GEN_ATTR_DESTACADO."
				, ".self::GEN_ATTR_AVISO_EMAIL."
				, ".self::GEN_ATTR_AVISO_SMS."
				, ".self::GEN_ATTR_CREADO."
				, ".self::GEN_ATTR_CREADO_POR."
			 FROM ".self::GEN_TABLA."
			 WHERE ". self::GEN_ATTR_ID." = ".$this->getId();

                $cons = new Consulta();
                $cons->setSQL($sql);
                $cons->execute();

                while($fila = pg_fetch_array($cons->getResultado())){
                    				$this->setAltAlertaId($fila[self::GEN_ATTR_MIN_ALT_ALERTA_ID]);
				$this->setUsUsuarioId($fila[self::GEN_ATTR_MIN_US_USUARIO_ID]);
				$this->setObservado($fila[self::GEN_ATTR_MIN_OBSERVADO]);
				$this->setLeido($fila[self::GEN_ATTR_MIN_LEIDO]);
				$this->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
				$this->setAvisoEmail($fila[self::GEN_ATTR_MIN_AVISO_EMAIL]);
				$this->setAvisoSms($fila[self::GEN_ATTR_MIN_AVISO_SMS]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
    
                }
            }
	}
	public function setAltAlertaId($v){ $this->alt_alerta_id = $v; }
	public function setUsUsuarioId($v){ $this->us_usuario_id = $v; }
	public function setObservado($v){ $this->observado = $v; }
	public function setLeido($v){ $this->leido = $v; }
	public function setDestacado($v){ $this->destacado = $v; }
	public function setAvisoEmail($v){ $this->aviso_email = $v; }
	public function setAvisoSms($v){ $this->aviso_sms = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new AltAlertaUsUsuario();
            $o->setId($fila[AltAlertaUsUsuario::GEN_ATTR_MIN_ID], false);
            
			$o->setAltAlertaId($fila[self::GEN_ATTR_MIN_ALT_ALERTA_ID]);
			$o->setUsUsuarioId($fila[self::GEN_ATTR_MIN_US_USUARIO_ID]);
			$o->setObservado($fila[self::GEN_ATTR_MIN_OBSERVADO]);
			$o->setLeido($fila[self::GEN_ATTR_MIN_LEIDO]);
			$o->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
			$o->setAvisoEmail($fila[self::GEN_ATTR_MIN_AVISO_EMAIL]);
			$o->setAvisoSms($fila[self::GEN_ATTR_MIN_AVISO_SMS]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
            return $o;
	}

	/* Control de BAltAlertaUsUsuario */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BAltAlertaUsUsuario */ 	
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

	/* Save de BAltAlertaUsUsuario */ 	
	public function save($array_datos_auditoria = false){
            $ejec = new Ejecucion();
            if(!isset($this->id)){
            
                if($array_datos_auditoria){
                    // ---------------------------------------------------------
                    // se toman datos desde el array de auditoria
                    // ---------------------------------------------------------
                    $this->creado = $array_datos_auditoria['creado'];
                    				
                    $this->creado_por = $array_datos_auditoria['creado_por'];
                                        
                }else{
                    // ---------------------------------------------------------
                    // se deducen datos de acuerdo al contexto
                    // ---------------------------------------------------------
                    $this->creado = Gral::getFechaHoraActual();
                    				
                    if(UsUsuario::autenticado()) $this->creado_por = UsUsuario::autenticado()->getId(); else $this->creado_por = 'null';
                    	
                }            
                    
                $sql = "
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_ALT_ALERTA_ID."
						, ".self::GEN_ATTR_MIN_US_USUARIO_ID."
						, ".self::GEN_ATTR_MIN_OBSERVADO."
						, ".self::GEN_ATTR_MIN_LEIDO."
						, ".self::GEN_ATTR_MIN_DESTACADO."
						, ".self::GEN_ATTR_MIN_AVISO_EMAIL."
						, ".self::GEN_ATTR_MIN_AVISO_SMS."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR.") VALUES  (
                nextval('alt_alerta_us_usuario_seq'), 
                ".$this->getAltAlertaId()."
						, ".$this->getUsUsuarioId()."
						, ".$this->getObservado()."
						, ".$this->getLeido()."
						, ".$this->getDestacado()."
						, ".$this->getAvisoEmail()."
						, ".$this->getAvisoSms()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
                    ) RETURNING currval('alt_alerta_us_usuario_seq')";
            
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
                    				
                                        
                }else{
                    // ---------------------------------------------------------
                    // se deducen datos de acuerdo al contexto
                    // ---------------------------------------------------------
                    				
                    	
                }            

                $sql = "
				 UPDATE 
                 
				 ".AltAlertaUsUsuario::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_ALT_ALERTA_ID." = ".$this->getAltAlertaId()."
						, ".self::GEN_ATTR_MIN_US_USUARIO_ID." = ".$this->getUsUsuarioId()."
						, ".self::GEN_ATTR_MIN_OBSERVADO." = ".$this->getObservado()."
						, ".self::GEN_ATTR_MIN_LEIDO." = ".$this->getLeido()."
						, ".self::GEN_ATTR_MIN_DESTACADO." = ".$this->getDestacado()."
						, ".self::GEN_ATTR_MIN_AVISO_EMAIL." = ".$this->getAvisoEmail()."
						, ".self::GEN_ATTR_MIN_AVISO_SMS." = ".$this->getAvisoSms()."
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
                    				
                    if(UsUsuario::autenticado()) $this->creado_por = UsUsuario::autenticado()->getId(); else $this->creado_por = 'null';
                    	
                }
                $sql = "
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_ALT_ALERTA_ID."
						, ".self::GEN_ATTR_MIN_US_USUARIO_ID."
						, ".self::GEN_ATTR_MIN_OBSERVADO."
						, ".self::GEN_ATTR_MIN_LEIDO."
						, ".self::GEN_ATTR_MIN_DESTACADO."
						, ".self::GEN_ATTR_MIN_AVISO_EMAIL."
						, ".self::GEN_ATTR_MIN_AVISO_SMS."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getAltAlertaId()."
						, ".$this->getUsUsuarioId()."
						, ".$this->getObservado()."
						, ".$this->getLeido()."
						, ".$this->getDestacado()."
						, ".$this->getAvisoEmail()."
						, ".$this->getAvisoSms()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
                    )";
		}else{
                    if(!$mantener_datos_creado){                
                        
                        
                    }
                    
                    $sql = "
				 UPDATE 
                     
				 ".AltAlertaUsUsuario::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_ALT_ALERTA_ID." = ".$this->getAltAlertaId()."
						, ".self::GEN_ATTR_MIN_US_USUARIO_ID." = ".$this->getUsUsuarioId()."
						, ".self::GEN_ATTR_MIN_OBSERVADO." = ".$this->getObservado()."
						, ".self::GEN_ATTR_MIN_LEIDO." = ".$this->getLeido()."
						, ".self::GEN_ATTR_MIN_DESTACADO." = ".$this->getDestacado()."
						, ".self::GEN_ATTR_MIN_AVISO_EMAIL." = ".$this->getAvisoEmail()."
						, ".self::GEN_ATTR_MIN_AVISO_SMS." = ".$this->getAvisoSms()."
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
            $o = new AltAlertaUsUsuario();
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

	/* Delete de BAltAlertaUsUsuario */ 	
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
	
	public function duplicarAltAlertaUsUsuario(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getAltAlertaUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = AltAlertaUsUsuario::setAplicarFiltrosDeAlcance($criterio);

                    if(is_array($arr_ordens)){
                        foreach($arr_ordens as $arr_orden){
                            $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                        }
                    }

	                            
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
	
		$altalertaususuarios = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $altalertaususuario = new AltAlertaUsUsuario();
                    $altalertaususuario->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $altalertaususuario->setAltAlertaId($fila[self::GEN_ATTR_MIN_ALT_ALERTA_ID]);
			$altalertaususuario->setUsUsuarioId($fila[self::GEN_ATTR_MIN_US_USUARIO_ID]);
			$altalertaususuario->setObservado($fila[self::GEN_ATTR_MIN_OBSERVADO]);
			$altalertaususuario->setLeido($fila[self::GEN_ATTR_MIN_LEIDO]);
			$altalertaususuario->setDestacado($fila[self::GEN_ATTR_MIN_DESTACADO]);
			$altalertaususuario->setAvisoEmail($fila[self::GEN_ATTR_MIN_AVISO_EMAIL]);
			$altalertaususuario->setAvisoSms($fila[self::GEN_ATTR_MIN_AVISO_SMS]);
			$altalertaususuario->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$altalertaususuario->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				

                    $altalertaususuarios[] = $altalertaususuario;
		}
		
		return $altalertaususuarios;
	}	
	

	/* Método getAltAlertaUsUsuarios Habilitados */ 	
	static function getAltAlertaUsUsuariosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return AltAlertaUsUsuario::getAltAlertaUsUsuarios($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getAltAlertaUsUsuarios para listado de Backend */ 	
	static function getAltAlertaUsUsuariosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return AltAlertaUsUsuario::getAltAlertaUsUsuarios($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getAltAlertaUsUsuariosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = AltAlertaUsUsuario::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = AltAlertaUsUsuario::getAltAlertaUsUsuarios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAltAlertaUsUsuarios filtrado para select */ 	
	static function getAltAlertaUsUsuariosCmbF($paginador = null, $criterio = null){
            $col = AltAlertaUsUsuario::getAltAlertaUsUsuarios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAltAlertaUsUsuarios filtrado por una coleccion de objetos foraneos de AltAlerta */ 	
	static function getAltAlertaUsUsuariosXAltAlertas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AltAlertaUsUsuario::GEN_ATTR_ALT_ALERTA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AltAlertaUsUsuario::GEN_TABLA);
            $c->addOrden(AltAlertaUsUsuario::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AltAlertaUsUsuario::getAltAlertaUsUsuarios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAltAlertaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAltAlertaUsUsuarios filtrado por una coleccion de objetos foraneos de UsUsuario */ 	
	static function getAltAlertaUsUsuariosXUsUsuarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AltAlertaUsUsuario::GEN_ATTR_US_USUARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AltAlertaUsUsuario::GEN_TABLA);
            $c->addOrden(AltAlertaUsUsuario::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AltAlertaUsUsuario::getAltAlertaUsUsuarios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getUsUsuarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'alt_alerta_us_usuario_adm.php';
            $url_gestion = 'alt_alerta_us_usuario_gestion.php';
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
                
            $criterio->add(AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlertaEnvioEmail::GEN_TABLA);
            $c->setCriterios();

            $os = AltAlertaEnvioEmail::getAltAlertaEnvioEmailsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AltAlertas (Coleccion) relacionados a traves de AltAlertaEnvioEmail */ 	
	public function getAltAlertasXAltAlertaEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AltAlerta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltAlertaEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addRealJoin(AltAlertaEnvioEmail::GEN_TABLA, AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_ID, AltAlerta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AltAlerta::getAltAlertas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AltAlertas relacionados a traves de AltAlertaEnvioEmail */ 	
	public function getCantidadAltAlertasXAltAlertaEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AltAlerta::GEN_ATTR_ID);
            if($estado){
                $c->add(AltAlerta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltAlertaEnvioEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addRealJoin(AltAlertaEnvioEmail::GEN_TABLA, AltAlertaEnvioEmail::GEN_ATTR_ALT_ALERTA_ID, AltAlerta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AltAlerta::getAltAlertas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AltAlerta (Objeto) relacionado a traves de AltAlertaEnvioEmail */ 	
	public function getAltAlertaXAltAlertaEnvioEmail($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAltAlertasXAltAlertaEnvioEmail($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el AltAlerta (Clave Foranea) */ 	
    public function getAltAlerta(){
        $o = new AltAlerta();
        $o->setId($this->getAltAlertaId());
        return $o;			
    }

	/* Metodo que retorna el AltAlerta (Clave Foranea) en Array */ 	
    public function getAltAlertaEnArray(&$arr_os){
        if($this->getAltAlertaId() != 'null'){
            if(isset($arr_os[$this->getAltAlertaId()])){
                $o = $arr_os[$this->getAltAlertaId()];
            }else{
                $o = AltAlerta::getOxId($this->getAltAlertaId());
                if($o){
                    $arr_os[$this->getAltAlertaId()] = $o;
                }
            }
        }else{
            $o = new AltAlerta();
        }
        return $o;		
    }

	/* Metodo que retorna el UsUsuario (Clave Foranea) */ 	
    public function getUsUsuario(){
        $o = new UsUsuario();
        $o->setId($this->getUsUsuarioId());
        return $o;			
    }

	/* Metodo que retorna el UsUsuario (Clave Foranea) en Array */ 	
    public function getUsUsuarioEnArray(&$arr_os){
        if($this->getUsUsuarioId() != 'null'){
            if(isset($arr_os[$this->getUsUsuarioId()])){
                $o = $arr_os[$this->getUsUsuarioId()];
            }else{
                $o = UsUsuario::getOxId($this->getUsUsuarioId());
                if($o){
                    $arr_os[$this->getUsUsuarioId()] = $o;
                }
            }
        }else{
            $o = new UsUsuario();
        }
        return $o;		
    }

	/* Metodo que retorna la HASH del objeto */ 	
    public function getHash(){
        return md5($this->getId().$this->getCreado());
    }

	/* Metodo que retorna la descripcion del objeto */ 	
    public function getDescripcion(){
        return $this->getId();
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

	/* Metodo que retorna la codigo del objeto */ 	
    public function getCodigo(){
        return $this->getId();			
    }

	/* Metodo que retorna un array con la descripcion extendida del objeto */ 	
    public function getArrDescripcionExtendidaParaBackend(){
        $array = array();            
        
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
            		
        if($contexto_solicitante != AltAlerta::GEN_CLASE){
            if($this->getAltAlerta()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AltAlerta::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAltAlerta()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != UsUsuario::GEN_CLASE){
            if($this->getUsUsuario()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(UsUsuario::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getUsUsuario()->getDescripcion().'</strong>';
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

	/* Metodo que retorna la cantidad total de registros */ 	
    static function getCantidadTotalDeRegistros(){
            $cons = new Consulta();
            
            //$cons->setSQL('SELECT count(id) cantidad FROM alt_alerta_us_usuario'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'alt_alerta_us_usuario';");
            
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

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
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

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'alt_alerta_id' */ 	
	static function getOxAltAlertaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_ALERTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'alt_alerta_id' */ 	
	static function getOsxAltAlertaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ALT_ALERTA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'us_usuario_id' */ 	
	static function getOxUsUsuarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_US_USUARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'us_usuario_id' */ 	
	static function getOsxUsUsuarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_US_USUARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observado' */ 	
	static function getOxObservado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'observado' */ 	
	static function getOsxObservado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'leido' */ 	
	static function getOxLeido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LEIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'leido' */ 	
	static function getOsxLeido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LEIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'destacado' */ 	
	static function getOxDestacado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESTACADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'destacado' */ 	
	static function getOsxDestacado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESTACADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'aviso_email' */ 	
	static function getOxAvisoEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AVISO_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'aviso_email' */ 	
	static function getOsxAvisoEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AVISO_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'aviso_sms' */ 	
	static function getOxAvisoSms($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AVISO_SMS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'aviso_sms' */ 	
	static function getOsxAvisoSms($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_AVISO_SMS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
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

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
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

            $obs = self::getAltAlertaUsUsuarios(null, $criterio);
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

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
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

            $obs = self::getAltAlertaUsUsuarios($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'alt_alerta_us_usuario_adm');
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
}
?>