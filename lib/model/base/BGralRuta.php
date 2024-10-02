<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BGralRuta
{ 
	
	const SES_PAGINACION = 'adm_gralruta_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_gralruta_paginas_registros';
	const SES_CRITERIOS = 'adm_gralruta_criterios';
	
	const GEN_CLASE = 'GralRuta';
	const GEN_TABLA = 'gral_ruta';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGralRuta */ 
	const GEN_ATTR_ID = 'gral_ruta.id';
	const GEN_ATTR_DESCRIPCION = 'gral_ruta.descripcion';
	const GEN_ATTR_CODIGO = 'gral_ruta.codigo';
	const GEN_ATTR_OBSERVACION = 'gral_ruta.observacion';
	const GEN_ATTR_ORDEN = 'gral_ruta.orden';
	const GEN_ATTR_ESTADO = 'gral_ruta.estado';
	const GEN_ATTR_CREADO = 'gral_ruta.creado';
	const GEN_ATTR_CREADO_POR = 'gral_ruta.creado_por';
	const GEN_ATTR_MODIFICADO = 'gral_ruta.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'gral_ruta.modificado_por';

	/* Constantes de Atributos Min de BGralRuta */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
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
	

	/* Atributos de BGralRuta */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGralRuta */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGralRuta */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
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
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GralRuta();
            $o->setId($fila[GralRuta::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
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

	/* Control de BGralRuta */ 	
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

	/* Cambia el estado de BGralRuta */ 	
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

	/* Save de BGralRuta */ 	
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
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('gral_ruta_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('gral_ruta_seq')";
            
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
                 
				 ".GralRuta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
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
                     
				 ".GralRuta::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
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
            $o = new GralRuta();
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

	/* Delete de BGralRuta */ 	
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
	
            // se elimina la coleccion de GralRutaVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralRutaVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralRutaVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralRutaGeoLocalidads relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralRutaGeoLocalidad::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralRutaGeoLocalidads(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralRutaGeoLocalidadCliCentroRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralRutaGeoLocalidadCliCentroRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralRutaGralDias relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralRutaGralDia::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralRutaGralDias(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaHojaRutas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaHojaRuta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaHojaRutas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGralRuta(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGralRutas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GralRuta::setAplicarFiltrosDeAlcance($criterio);

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
	
		$gralrutas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $gralruta = new GralRuta();
                    $gralruta->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $gralruta->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$gralruta->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$gralruta->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$gralruta->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$gralruta->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$gralruta->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$gralruta->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$gralruta->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$gralruta->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $gralrutas[] = $gralruta;
		}
		
		return $gralrutas;
	}	
	

	/* Método getGralRutas Habilitados */ 	
	static function getGralRutasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GralRuta::getGralRutas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGralRutas para listado de Backend */ 	
	static function getGralRutasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GralRuta::getGralRutas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGralRutasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GralRuta::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GralRuta::getGralRutas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGralRutas filtrado para select */ 	
	static function getGralRutasCmbF($paginador = null, $criterio = null){
            $col = GralRuta::getGralRutas($paginador, $criterio);

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
            $url = 'gral_ruta_adm.php';
            $url_gestion = 'gral_ruta_gestion.php';
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
	

	/* Metodo getGralRutaVtaVendedors */ 	
	public function getGralRutaVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralRutaVtaVendedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralRutaVtaVendedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralRutaVtaVendedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralRutaVtaVendedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralRutaVtaVendedor::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralRutaVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralRutaVtaVendedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralRutaVtaVendedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralrutavtavendedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralrutavtavendedor = GralRutaVtaVendedor::hidratarObjeto($fila);			
                $gralrutavtavendedors[] = $gralrutavtavendedor;
            }

            return $gralrutavtavendedors;
	}	
	

	/* Método getGralRutaVtaVendedorsBloque para MasInfo */ 	
	public function getGralRutaVtaVendedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralRutaVtaVendedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralRutaVtaVendedors Habilitados */ 	
	public function getGralRutaVtaVendedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralRutaVtaVendedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralRutaVtaVendedor */ 	
	public function getGralRutaVtaVendedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralRutaVtaVendedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralRutaVtaVendedor relacionadas */ 	
	public function deleteGralRutaVtaVendedors(){
            $obs = $this->getGralRutaVtaVendedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralRutaVtaVendedorsCmb() GralRutaVtaVendedor relacionadas */ 	
	public function getGralRutaVtaVendedorsCmb(){
            $c = new Criterio();
            $c->add(GralRutaVtaVendedor::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRutaVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = GralRutaVtaVendedor::getGralRutaVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedors (Coleccion) relacionados a traves de GralRutaVtaVendedor */ 	
	public function getVtaVendedorsXGralRutaVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaVtaVendedor::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(GralRutaVtaVendedor::GEN_TABLA, GralRutaVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedors relacionados a traves de GralRutaVtaVendedor */ 	
	public function getCantidadVtaVendedorsXGralRutaVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaVtaVendedor::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(GralRutaVtaVendedor::GEN_TABLA, GralRutaVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedor (Objeto) relacionado a traves de GralRutaVtaVendedor */ 	
	public function getVtaVendedorXGralRutaVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorsXGralRutaVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralRutaGeoLocalidads */ 	
	public function getGralRutaGeoLocalidads($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralRutaGeoLocalidad::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralRutaGeoLocalidad::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralRutaGeoLocalidad::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralRutaGeoLocalidad::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralRutaGeoLocalidad::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralrutageolocalidads = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralrutageolocalidad = GralRutaGeoLocalidad::hidratarObjeto($fila);			
                $gralrutageolocalidads[] = $gralrutageolocalidad;
            }

            return $gralrutageolocalidads;
	}	
	

	/* Método getGralRutaGeoLocalidadsBloque para MasInfo */ 	
	public function getGralRutaGeoLocalidadsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralRutaGeoLocalidads($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralRutaGeoLocalidads Habilitados */ 	
	public function getGralRutaGeoLocalidadsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralRutaGeoLocalidads($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralRutaGeoLocalidad */ 	
	public function getGralRutaGeoLocalidad($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralRutaGeoLocalidads($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralRutaGeoLocalidad relacionadas */ 	
	public function deleteGralRutaGeoLocalidads(){
            $obs = $this->getGralRutaGeoLocalidads();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralRutaGeoLocalidadsCmb() GralRutaGeoLocalidad relacionadas */ 	
	public function getGralRutaGeoLocalidadsCmb(){
            $c = new Criterio();
            $c->add(GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRutaGeoLocalidad::GEN_TABLA);
            $c->setCriterios();

            $os = GralRutaGeoLocalidad::getGralRutaGeoLocalidadsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GeoLocalidads (Coleccion) relacionados a traves de GralRutaGeoLocalidad */ 	
	public function getGeoLocalidadsXGralRutaGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GeoLocalidad::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GeoLocalidad::getGeoLocalidads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GeoLocalidads relacionados a traves de GralRutaGeoLocalidad */ 	
	public function getCantidadGeoLocalidadsXGralRutaGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GeoLocalidad::GEN_ATTR_ID);
            if($estado){
                $c->add(GeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GeoLocalidad::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GeoLocalidad::getGeoLocalidads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GeoLocalidad (Objeto) relacionado a traves de GralRutaGeoLocalidad */ 	
	public function getGeoLocalidadXGralRutaGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGeoLocalidadsXGralRutaGeoLocalidad($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralRutaGeoLocalidadCliCentroRecepcions */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralRutaGeoLocalidadCliCentroRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralRutaGeoLocalidadCliCentroRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralrutageolocalidadclicentrorecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralrutageolocalidadclicentrorecepcion = GralRutaGeoLocalidadCliCentroRecepcion::hidratarObjeto($fila);			
                $gralrutageolocalidadclicentrorecepcions[] = $gralrutageolocalidadclicentrorecepcion;
            }

            return $gralrutageolocalidadclicentrorecepcions;
	}	
	

	/* Método getGralRutaGeoLocalidadCliCentroRecepcionsBloque para MasInfo */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralRutaGeoLocalidadCliCentroRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralRutaGeoLocalidadCliCentroRecepcions Habilitados */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralRutaGeoLocalidadCliCentroRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralRutaGeoLocalidadCliCentroRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralRutaGeoLocalidadCliCentroRecepcion relacionadas */ 	
	public function deleteGralRutaGeoLocalidadCliCentroRecepcions(){
            $obs = $this->getGralRutaGeoLocalidadCliCentroRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralRutaGeoLocalidadCliCentroRecepcionsCmb() GralRutaGeoLocalidadCliCentroRecepcion relacionadas */ 	
	public function getGralRutaGeoLocalidadCliCentroRecepcionsCmb(){
            $c = new Criterio();
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = GralRutaGeoLocalidadCliCentroRecepcion::getGralRutaGeoLocalidadCliCentroRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GeoLocalidads (Coleccion) relacionados a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getGeoLocalidadsXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GeoLocalidad::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA, GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GeoLocalidad::getGeoLocalidads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GeoLocalidads relacionados a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getCantidadGeoLocalidadsXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GeoLocalidad::GEN_ATTR_ID);
            if($estado){
                $c->add(GeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GeoLocalidad::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA, GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GeoLocalidad::getGeoLocalidads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GeoLocalidad (Objeto) relacionado a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getGeoLocalidadXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGeoLocalidadsXGralRutaGeoLocalidadCliCentroRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralRutaGralDias */ 	
	public function getGralRutaGralDias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralRutaGralDia::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralRutaGralDia::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralRutaGralDia::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralRutaGralDia::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralRutaGralDia::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralRutaGralDia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralRutaGralDia::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralRutaGralDia::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralrutagraldias = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralrutagraldia = GralRutaGralDia::hidratarObjeto($fila);			
                $gralrutagraldias[] = $gralrutagraldia;
            }

            return $gralrutagraldias;
	}	
	

	/* Método getGralRutaGralDiasBloque para MasInfo */ 	
	public function getGralRutaGralDiasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralRutaGralDias($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralRutaGralDias Habilitados */ 	
	public function getGralRutaGralDiasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralRutaGralDias($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralRutaGralDia */ 	
	public function getGralRutaGralDia($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralRutaGralDias($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralRutaGralDia relacionadas */ 	
	public function deleteGralRutaGralDias(){
            $obs = $this->getGralRutaGralDias();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralRutaGralDiasCmb() GralRutaGralDia relacionadas */ 	
	public function getGralRutaGralDiasCmb(){
            $c = new Criterio();
            $c->add(GralRutaGralDia::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRutaGralDia::GEN_TABLA);
            $c->setCriterios();

            $os = GralRutaGralDia::getGralRutaGralDiasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralDias (Coleccion) relacionados a traves de GralRutaGralDia */ 	
	public function getGralDiasXGralRutaGralDia($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralDia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGralDia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGralDia::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralDia::GEN_TABLA);
            $c->addRealJoin(GralRutaGralDia::GEN_TABLA, GralRutaGralDia::GEN_ATTR_GRAL_DIA_ID, GralDia::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralDia::getGralDias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralDias relacionados a traves de GralRutaGralDia */ 	
	public function getCantidadGralDiasXGralRutaGralDia($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralDia::GEN_ATTR_ID);
            if($estado){
                $c->add(GralDia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGralDia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGralDia::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralDia::GEN_TABLA);
            $c->addRealJoin(GralRutaGralDia::GEN_TABLA, GralRutaGralDia::GEN_ATTR_GRAL_DIA_ID, GralDia::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralDia::getGralDias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralDia (Objeto) relacionado a traves de GralRutaGralDia */ 	
	public function getGralDiaXGralRutaGralDia($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralDiasXGralRutaGralDia($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaHojaRutas */ 	
	public function getVtaHojaRutas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaHojaRuta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaHojaRuta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaHojaRuta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaHojaRuta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaHojaRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaHojaRuta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaHojaRuta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtahojarutas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtahojaruta = VtaHojaRuta::hidratarObjeto($fila);			
                $vtahojarutas[] = $vtahojaruta;
            }

            return $vtahojarutas;
	}	
	

	/* Método getVtaHojaRutasBloque para MasInfo */ 	
	public function getVtaHojaRutasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaHojaRutas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaHojaRutas Habilitados */ 	
	public function getVtaHojaRutasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaHojaRutas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaHojaRuta */ 	
	public function getVtaHojaRuta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaHojaRutas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaHojaRuta relacionadas */ 	
	public function deleteVtaHojaRutas(){
            $obs = $this->getVtaHojaRutas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaHojaRutasCmb() VtaHojaRuta relacionadas */ 	
	public function getVtaHojaRutasCmb(){
            $c = new Criterio();
            $c->add(VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaHojaRuta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaHojaRuta::getVtaHojaRutasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener OpeChofers (Coleccion) relacionados a traves de VtaHojaRuta */ 	
	public function getOpeChofersXVtaHojaRuta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(OpeChofer::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeChofer::GEN_TABLA);
            $c->addRealJoin(VtaHojaRuta::GEN_TABLA, VtaHojaRuta::GEN_ATTR_OPE_CHOFER_ID, OpeChofer::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeChofer::getOpeChofers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de OpeChofers relacionados a traves de VtaHojaRuta */ 	
	public function getCantidadOpeChofersXVtaHojaRuta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(OpeChofer::GEN_ATTR_ID);
            if($estado){
                $c->add(OpeChofer::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaHojaRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeChofer::GEN_TABLA);
            $c->addRealJoin(VtaHojaRuta::GEN_TABLA, VtaHojaRuta::GEN_ATTR_OPE_CHOFER_ID, OpeChofer::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeChofer::getOpeChofers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener OpeChofer (Objeto) relacionado a traves de VtaHojaRuta */ 	
	public function getOpeChoferXVtaHojaRuta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getOpeChofersXVtaHojaRuta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaVendedors asignados a GralRuta */ 	
	public function getGralRutaVtaVendedorsId(){
            $ids = array();
            foreach($this->getGralRutaVtaVendedors() as $o){
            
                $ids[] = $o->getVtaVendedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaVendedors asignados al GralRuta */ 	
	public function setGralRutaVtaVendedors($ids){
            $this->deleteGralRutaVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralRutaVtaVendedor();
                    $o->setVtaVendedorId($id);
                    $o->setGralRutaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaVendedor en el alta de GralRuta */ 	
	public function getAltaMostrarBloqueRelacionGralRutaVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GeoLocalidads asignados a GralRuta */ 	
	public function getGralRutaGeoLocalidadsId(){
            $ids = array();
            foreach($this->getGralRutaGeoLocalidads() as $o){
            
                $ids[] = $o->getGeoLocalidadId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GeoLocalidads asignados al GralRuta */ 	
	public function setGralRutaGeoLocalidads($ids){
            $this->deleteGralRutaGeoLocalidads();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralRutaGeoLocalidad();
                    $o->setGeoLocalidadId($id);
                    $o->setGralRutaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GeoLocalidad en el alta de GralRuta */ 	
	public function getAltaMostrarBloqueRelacionGralRutaGeoLocalidad(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralDias asignados a GralRuta */ 	
	public function getGralRutaGralDiasId(){
            $ids = array();
            foreach($this->getGralRutaGralDias() as $o){
            
                $ids[] = $o->getGralDiaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralDias asignados al GralRuta */ 	
	public function setGralRutaGralDias($ids){
            $this->deleteGralRutaGralDias();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralRutaGralDia();
                    $o->setGralDiaId($id);
                    $o->setGralRutaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralDia en el alta de GralRuta */ 	
	public function getAltaMostrarBloqueRelacionGralRutaGralDia(){
            return true;
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM gral_ruta'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'gral_ruta';");
            
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

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas(null, $criterio);
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

            $obs = self::getGralRutas($paginador, $criterio);
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

            $obs = self::getGralRutas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'gral_ruta_adm');
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
                $c->addTabla(GralRuta::GEN_TABLA);
                $c->addOrden(GralRuta::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $gral_rutas = GralRuta::getGralRutas(null, $c);

                $arr = array();
                foreach($gral_rutas as $gral_ruta){
                    $descripcion = $gral_ruta->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>