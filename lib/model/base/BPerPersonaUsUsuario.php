<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPerPersonaUsUsuario
{ 
	
	const SES_PAGINACION = 'adm_perpersonaususuario_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_perpersonaususuario_paginas_registros';
	const SES_CRITERIOS = 'adm_perpersonaususuario_criterios';
	
	const GEN_CLASE = 'PerPersonaUsUsuario';
	const GEN_TABLA = 'per_persona_us_usuario';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	
	
        const GEN_FRTN_VINCULO_UNO_ANCHO = '';
        const GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD = 20;
        const GEN_FRTN_VINCULO_CRITERIO_ORDEN = 'ASC';
        

	/* Constantes de Atributos de BPerPersonaUsUsuario */ 
	const GEN_ATTR_ID = 'per_persona_us_usuario.id';
	const GEN_ATTR_PER_PERSONA_ID = 'per_persona_us_usuario.per_persona_id';
	const GEN_ATTR_US_USUARIO_ID = 'per_persona_us_usuario.us_usuario_id';
	const GEN_ATTR_CREADO = 'per_persona_us_usuario.creado';
	const GEN_ATTR_CREADO_POR = 'per_persona_us_usuario.creado_por';
	const GEN_ATTR_MODIFICADO = 'per_persona_us_usuario.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'per_persona_us_usuario.modificado_por';

	/* Constantes de Atributos Min de BPerPersonaUsUsuario */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_PER_PERSONA_ID = 'per_persona_id';
	const GEN_ATTR_MIN_US_USUARIO_ID = 'us_usuario_id';
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
	

	/* Atributos de BPerPersonaUsUsuario */ 
	private $id;
	private $per_persona_id;
	private $us_usuario_id;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPerPersonaUsUsuario */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getPerPersonaId(){ if(isset($this->per_persona_id)){ return $this->per_persona_id; }else{ return 'null'; } }
	public function getUsUsuarioId(){ if(isset($this->us_usuario_id)){ return $this->us_usuario_id; }else{ return 'null'; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BPerPersonaUsUsuario */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_PER_PERSONA_ID."
				, ".self::GEN_ATTR_US_USUARIO_ID."
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
                    				$this->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
				$this->setUsUsuarioId($fila[self::GEN_ATTR_MIN_US_USUARIO_ID]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setPerPersonaId($v){ $this->per_persona_id = $v; }
	public function setUsUsuarioId($v){ $this->us_usuario_id = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PerPersonaUsUsuario();
            $o->setId($fila[PerPersonaUsUsuario::GEN_ATTR_MIN_ID], false);
            
			$o->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
			$o->setUsUsuarioId($fila[self::GEN_ATTR_MIN_US_USUARIO_ID]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPerPersonaUsUsuario */ 	
	public function control(){
            $error = new DbError();
        
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BPerPersonaUsUsuario */ 	
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

	/* Save de BPerPersonaUsUsuario */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_PER_PERSONA_ID."
						, ".self::GEN_ATTR_MIN_US_USUARIO_ID."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('per_persona_us_usuario_seq'), 
                ".$this->getPerPersonaId()."
						, ".$this->getUsUsuarioId()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('per_persona_us_usuario_seq')";
            
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
                 
				 ".PerPersonaUsUsuario::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_PER_PERSONA_ID." = ".$this->getPerPersonaId()."
						, ".self::GEN_ATTR_MIN_US_USUARIO_ID." = ".$this->getUsUsuarioId()."
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_PER_PERSONA_ID."
						, ".self::GEN_ATTR_MIN_US_USUARIO_ID."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getPerPersonaId()."
						, ".$this->getUsUsuarioId()."
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
                     
				 ".PerPersonaUsUsuario::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_PER_PERSONA_ID." = ".$this->getPerPersonaId()."
						, ".self::GEN_ATTR_MIN_US_USUARIO_ID." = ".$this->getUsUsuarioId()."
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
            $o = new PerPersonaUsUsuario();
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

	/* Delete de BPerPersonaUsUsuario */ 	
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
	
	public function duplicarPerPersonaUsUsuario(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPerPersonaUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PerPersonaUsUsuario::setAplicarFiltrosDeAlcance($criterio);

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
	
		$perpersonaususuarios = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $perpersonaususuario = new PerPersonaUsUsuario();
                    $perpersonaususuario->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $perpersonaususuario->setPerPersonaId($fila[self::GEN_ATTR_MIN_PER_PERSONA_ID]);
			$perpersonaususuario->setUsUsuarioId($fila[self::GEN_ATTR_MIN_US_USUARIO_ID]);
			$perpersonaususuario->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$perpersonaususuario->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$perpersonaususuario->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$perpersonaususuario->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $perpersonaususuarios[] = $perpersonaususuario;
		}
		
		return $perpersonaususuarios;
	}	
	

	/* Método getPerPersonaUsUsuarios Habilitados */ 	
	static function getPerPersonaUsUsuariosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PerPersonaUsUsuario::getPerPersonaUsUsuarios($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPerPersonaUsUsuarios para listado de Backend */ 	
	static function getPerPersonaUsUsuariosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PerPersonaUsUsuario::getPerPersonaUsUsuarios($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPerPersonaUsUsuariosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PerPersonaUsUsuario::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PerPersonaUsUsuario::getPerPersonaUsUsuarios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPerPersonaUsUsuarios filtrado para select */ 	
	static function getPerPersonaUsUsuariosCmbF($paginador = null, $criterio = null){
            $col = PerPersonaUsUsuario::getPerPersonaUsUsuarios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPerPersonaUsUsuarios filtrado por una coleccion de objetos foraneos de PerPersona */ 	
	static function getPerPersonaUsUsuariosXPerPersonas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerPersonaUsUsuario::GEN_ATTR_PER_PERSONA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerPersonaUsUsuario::GEN_TABLA);
            $c->addOrden(PerPersonaUsUsuario::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerPersonaUsUsuario::getPerPersonaUsUsuarios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPerPersonaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPerPersonaUsUsuarios filtrado por una coleccion de objetos foraneos de UsUsuario */ 	
	static function getPerPersonaUsUsuariosXUsUsuarios($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PerPersonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PerPersonaUsUsuario::GEN_TABLA);
            $c->addOrden(PerPersonaUsUsuario::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PerPersonaUsUsuario::getPerPersonaUsUsuarios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getUsUsuarioId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'per_persona_us_usuario_adm.php';
            $url_gestion = 'per_persona_us_usuario_gestion.php';
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
            		
        if($contexto_solicitante != PerPersona::GEN_CLASE){
            if($this->getPerPersona()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PerPersona::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPerPersona()->getDescripcion().'</strong>';
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

	/* Metodo que retorna la descripcion del usuario ultimo modificador del registro */ 	
    public function getModificadoPorDescripcion(){
        $o = UsUsuario::getOxId($this->getModificadoPor());
        if($o) return $o->getDescripcion();

        return '-';
    }

	/* Metodo que retorna la cantidad total de registros */ 	
    static function getCantidadTotalDeRegistros(){
            $cons = new Consulta();
            
            //$cons->setSQL('SELECT count(id) cantidad FROM per_persona_us_usuario'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'per_persona_us_usuario';");
            
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

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'per_persona_id' */ 	
	static function getOxPerPersonaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PER_PERSONA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'us_usuario_id' */ 	
	static function getOxUsUsuarioId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_US_USUARIO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios(null, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
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

            $obs = self::getPerPersonaUsUsuarios($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'per_persona_us_usuario_adm');
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
}
?>