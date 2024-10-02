<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BGeoLocalidad
{ 
	
	const SES_PAGINACION = 'adm_geolocalidad_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_geolocalidad_paginas_registros';
	const SES_CRITERIOS = 'adm_geolocalidad_criterios';
	
	const GEN_CLASE = 'GeoLocalidad';
	const GEN_TABLA = 'geo_localidad';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGeoLocalidad */ 
	const GEN_ATTR_ID = 'geo_localidad.id';
	const GEN_ATTR_DESCRIPCION = 'geo_localidad.descripcion';
	const GEN_ATTR_GEO_PROVINCIA_ID = 'geo_localidad.geo_provincia_id';
	const GEN_ATTR_CODIGO = 'geo_localidad.codigo';
	const GEN_ATTR_CODIGO_EKU = 'geo_localidad.codigo_eku';
	const GEN_ATTR_CODIGO_DISTRITO_EKU = 'geo_localidad.codigo_distrito_eku';
	const GEN_ATTR_OBSERVACION = 'geo_localidad.observacion';
	const GEN_ATTR_ORDEN = 'geo_localidad.orden';
	const GEN_ATTR_ESTADO = 'geo_localidad.estado';
	const GEN_ATTR_CREADO = 'geo_localidad.creado';
	const GEN_ATTR_CREADO_POR = 'geo_localidad.creado_por';
	const GEN_ATTR_MODIFICADO = 'geo_localidad.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'geo_localidad.modificado_por';

	/* Constantes de Atributos Min de BGeoLocalidad */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GEO_PROVINCIA_ID = 'geo_provincia_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_EKU = 'codigo_eku';
	const GEN_ATTR_MIN_CODIGO_DISTRITO_EKU = 'codigo_distrito_eku';
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
	

	/* Atributos de BGeoLocalidad */ 
	private $id;
	private $descripcion;
	private $geo_provincia_id;
	private $codigo;
	private $codigo_eku;
	private $codigo_distrito_eku;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGeoLocalidad */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGeoProvinciaId(){ if(isset($this->geo_provincia_id)){ return $this->geo_provincia_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoEku(){ if(isset($this->codigo_eku)){ return $this->codigo_eku; }else{ return ''; } }
	public function getCodigoDistritoEku(){ if(isset($this->codigo_distrito_eku)){ return $this->codigo_distrito_eku; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGeoLocalidad */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GEO_PROVINCIA_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_EKU."
				, ".self::GEN_ATTR_CODIGO_DISTRITO_EKU."
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
				$this->setGeoProvinciaId($fila[self::GEN_ATTR_MIN_GEO_PROVINCIA_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoEku($fila[self::GEN_ATTR_MIN_CODIGO_EKU]);
				$this->setCodigoDistritoEku($fila[self::GEN_ATTR_MIN_CODIGO_DISTRITO_EKU]);
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
	public function setGeoProvinciaId($v){ $this->geo_provincia_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoEku($v){ $this->codigo_eku = $v; }
	public function setCodigoDistritoEku($v){ $this->codigo_distrito_eku = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GeoLocalidad();
            $o->setId($fila[GeoLocalidad::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGeoProvinciaId($fila[self::GEN_ATTR_MIN_GEO_PROVINCIA_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoEku($fila[self::GEN_ATTR_MIN_CODIGO_EKU]);
			$o->setCodigoDistritoEku($fila[self::GEN_ATTR_MIN_CODIGO_DISTRITO_EKU]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGeoLocalidad */ 	
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

	/* Cambia el estado de BGeoLocalidad */ 	
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

	/* Save de BGeoLocalidad */ 	
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
						, ".self::GEN_ATTR_MIN_GEO_PROVINCIA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_EKU."
						, ".self::GEN_ATTR_MIN_CODIGO_DISTRITO_EKU."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('geo_localidad_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGeoProvinciaId()."
						, '".$this->getCodigo()."'
						, '".$this->getCodigoEku()."'
						, '".$this->getCodigoDistritoEku()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('geo_localidad_seq')";
            
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
                 
				 ".GeoLocalidad::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GEO_PROVINCIA_ID." = ".$this->getGeoProvinciaId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_EKU." = '".$this->getCodigoEku()."'
						, ".self::GEN_ATTR_MIN_CODIGO_DISTRITO_EKU." = '".$this->getCodigoDistritoEku()."'
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
						, ".self::GEN_ATTR_MIN_GEO_PROVINCIA_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_EKU."
						, ".self::GEN_ATTR_MIN_CODIGO_DISTRITO_EKU."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getGeoProvinciaId()."
						, '".$this->getCodigo()."'
						, '".$this->getCodigoEku()."'
						, '".$this->getCodigoDistritoEku()."'
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
                     
				 ".GeoLocalidad::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GEO_PROVINCIA_ID." = ".$this->getGeoProvinciaId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_EKU." = '".$this->getCodigoEku()."'
						, ".self::GEN_ATTR_MIN_CODIGO_DISTRITO_EKU." = '".$this->getCodigoDistritoEku()."'
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
            $o = new GeoLocalidad();
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

	/* Delete de BGeoLocalidad */ 	
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
	
            // se elimina la coleccion de GralEmpresas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralEmpresas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursals(null, $c) as $o){
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
            
            // se elimina la coleccion de GralCentroCostos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCentroCostos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PanPanols relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPanPanols(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClientes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClientes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCentroRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCentroRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliCentroPedidos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliCentroPedido::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliCentroPedidos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaCompradors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComprador::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaCompradors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPuntoVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPuntoVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroPedidos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroPedidos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de EkuParamGeoCiudadGeoLocalidads relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(EkuParamGeoCiudadGeoLocalidad::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getEkuParamGeoCiudadGeoLocalidads(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGeoLocalidad(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGeoLocalidads($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GeoLocalidad::setAplicarFiltrosDeAlcance($criterio);

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
	
		$geolocalidads = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $geolocalidad = new GeoLocalidad();
                    $geolocalidad->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $geolocalidad->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$geolocalidad->setGeoProvinciaId($fila[self::GEN_ATTR_MIN_GEO_PROVINCIA_ID]);
			$geolocalidad->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$geolocalidad->setCodigoEku($fila[self::GEN_ATTR_MIN_CODIGO_EKU]);
			$geolocalidad->setCodigoDistritoEku($fila[self::GEN_ATTR_MIN_CODIGO_DISTRITO_EKU]);
			$geolocalidad->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$geolocalidad->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$geolocalidad->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$geolocalidad->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$geolocalidad->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$geolocalidad->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$geolocalidad->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $geolocalidads[] = $geolocalidad;
		}
		
		return $geolocalidads;
	}	
	

	/* Método getGeoLocalidads Habilitados */ 	
	static function getGeoLocalidadsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GeoLocalidad::getGeoLocalidads($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGeoLocalidads para listado de Backend */ 	
	static function getGeoLocalidadsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GeoLocalidad::getGeoLocalidads($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGeoLocalidadsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GeoLocalidad::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GeoLocalidad::getGeoLocalidads($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGeoLocalidads filtrado para select */ 	
	static function getGeoLocalidadsCmbF($paginador = null, $criterio = null){
            $col = GeoLocalidad::getGeoLocalidads($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGeoLocalidads filtrado por una coleccion de objetos foraneos de GeoProvincia */ 	
	static function getGeoLocalidadsXGeoProvincias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(GeoLocalidad::GEN_ATTR_GEO_PROVINCIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(GeoLocalidad::GEN_TABLA);
            $c->addOrden(GeoLocalidad::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = GeoLocalidad::getGeoLocalidads($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoProvinciaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'geo_localidad_adm.php';
            $url_gestion = 'geo_localidad_gestion.php';
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
	

	/* Metodo getGralEmpresas */ 	
	public function getGralEmpresas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralEmpresa::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralEmpresa::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralEmpresa::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralEmpresa::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralEmpresa::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralEmpresa::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralEmpresa::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralempresas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralempresa = GralEmpresa::hidratarObjeto($fila);			
                $gralempresas[] = $gralempresa;
            }

            return $gralempresas;
	}	
	

	/* Método getGralEmpresasBloque para MasInfo */ 	
	public function getGralEmpresasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralEmpresas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralEmpresas Habilitados */ 	
	public function getGralEmpresasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralEmpresas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralEmpresa */ 	
	public function getGralEmpresa($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralEmpresas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralEmpresa relacionadas */ 	
	public function deleteGralEmpresas(){
            $obs = $this->getGralEmpresas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralEmpresasCmb() GralEmpresa relacionadas */ 	
	public function getGralEmpresasCmb(){
            $c = new Criterio();
            $c->add(GralEmpresa::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralTipoPersonerias (Coleccion) relacionados a traves de GralEmpresa */ 	
	public function getGralTipoPersoneriasXGralEmpresa($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralTipoPersoneria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralEmpresa::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoPersoneria::GEN_TABLA);
            $c->addRealJoin(GralEmpresa::GEN_TABLA, GralEmpresa::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, GralTipoPersoneria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralTipoPersonerias relacionados a traves de GralEmpresa */ 	
	public function getCantidadGralTipoPersoneriasXGralEmpresa($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralTipoPersoneria::GEN_ATTR_ID);
            if($estado){
                $c->add(GralTipoPersoneria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralEmpresa::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralTipoPersoneria::GEN_TABLA);
            $c->addRealJoin(GralEmpresa::GEN_TABLA, GralEmpresa::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, GralTipoPersoneria::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralTipoPersoneria (Objeto) relacionado a traves de GralEmpresa */ 	
	public function getGralTipoPersoneriaXGralEmpresa($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralTipoPersoneriasXGralEmpresa($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursals */ 	
	public function getGralSucursals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursal::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursal::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursal::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursal::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursal::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursal::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursal::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursal = GralSucursal::hidratarObjeto($fila);			
                $gralsucursals[] = $gralsucursal;
            }

            return $gralsucursals;
	}	
	

	/* Método getGralSucursalsBloque para MasInfo */ 	
	public function getGralSucursalsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursals Habilitados */ 	
	public function getGralSucursalsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursal */ 	
	public function getGralSucursal($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursal relacionadas */ 	
	public function deleteGralSucursals(){
            $obs = $this->getGralSucursals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalsCmb() GralSucursal relacionadas */ 	
	public function getGralSucursalsCmb(){
            $c = new Criterio();
            $c->add(GralSucursal::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursalsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralEmpresas (Coleccion) relacionados a traves de GralSucursal */ 	
	public function getGralEmpresasXGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursal::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralEmpresas relacionados a traves de GralSucursal */ 	
	public function getCantidadGralEmpresasXGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralEmpresa::GEN_ATTR_ID);
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursal::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralEmpresa (Objeto) relacionado a traves de GralSucursal */ 	
	public function getGralEmpresaXGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralEmpresasXGralSucursal($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRutaGeoLocalidad::GEN_TABLA);
            $c->setCriterios();

            $os = GralRutaGeoLocalidad::getGralRutaGeoLocalidadsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralRutas (Coleccion) relacionados a traves de GralRutaGeoLocalidad */ 	
	public function getGralRutasXGralRutaGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRuta::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralRuta::getGralRutas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralRutas relacionados a traves de GralRutaGeoLocalidad */ 	
	public function getCantidadGralRutasXGralRutaGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralRuta::GEN_ATTR_ID);
            if($estado){
                $c->add(GralRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRuta::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralRuta::getGralRutas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralRuta (Objeto) relacionado a traves de GralRutaGeoLocalidad */ 	
	public function getGralRutaXGralRutaGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralRutasXGralRutaGeoLocalidad($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = GralRutaGeoLocalidadCliCentroRecepcion::getGralRutaGeoLocalidadCliCentroRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralRutas (Coleccion) relacionados a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getGralRutasXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRuta::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA, GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralRuta::getGralRutas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralRutas relacionados a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getCantidadGralRutasXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralRuta::GEN_ATTR_ID);
            if($estado){
                $c->add(GralRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRuta::GEN_TABLA);
            $c->addRealJoin(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA, GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralRuta::getGralRutas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralRuta (Objeto) relacionado a traves de GralRutaGeoLocalidadCliCentroRecepcion */ 	
	public function getGralRutaXGralRutaGeoLocalidadCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralRutasXGralRutaGeoLocalidadCliCentroRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCentroCostos */ 	
	public function getGralCentroCostos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCentroCosto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCentroCosto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCentroCosto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCentroCosto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCentroCosto::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCentroCosto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCentroCosto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcentrocostos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcentrocosto = GralCentroCosto::hidratarObjeto($fila);			
                $gralcentrocostos[] = $gralcentrocosto;
            }

            return $gralcentrocostos;
	}	
	

	/* Método getGralCentroCostosBloque para MasInfo */ 	
	public function getGralCentroCostosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCentroCostos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCentroCostos Habilitados */ 	
	public function getGralCentroCostosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCentroCostos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCentroCosto */ 	
	public function getGralCentroCosto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCentroCostos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCentroCosto relacionadas */ 	
	public function deleteGralCentroCostos(){
            $obs = $this->getGralCentroCostos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCentroCostosCmb() GralCentroCosto relacionadas */ 	
	public function getGralCentroCostosCmb(){
            $c = new Criterio();
            $c->add(GralCentroCosto::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralEmpresas (Coleccion) relacionados a traves de GralCentroCosto */ 	
	public function getGralEmpresasXGralCentroCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCosto::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(GralCentroCosto::GEN_TABLA, GralCentroCosto::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralEmpresas relacionados a traves de GralCentroCosto */ 	
	public function getCantidadGralEmpresasXGralCentroCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralEmpresa::GEN_ATTR_ID);
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCosto::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(GralCentroCosto::GEN_TABLA, GralCentroCosto::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralEmpresa (Objeto) relacionado a traves de GralCentroCosto */ 	
	public function getGralEmpresaXGralCentroCosto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralEmpresasXGralCentroCosto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvProveedors */ 	
	public function getPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PrvProveedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvProveedor::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvproveedor = PrvProveedor::hidratarObjeto($fila);			
                $prvproveedors[] = $prvproveedor;
            }

            return $prvproveedors;
	}	
	

	/* Método getPrvProveedorsBloque para MasInfo */ 	
	public function getPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvProveedors Habilitados */ 	
	public function getPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvProveedor */ 	
	public function getPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvProveedor relacionadas */ 	
	public function deletePrvProveedors(){
            $obs = $this->getPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvProveedorsCmb() PrvProveedor relacionadas */ 	
	public function getPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(PrvProveedor::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvTipos (Coleccion) relacionados a traves de PrvProveedor */ 	
	public function getPrvTiposXPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedor::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvTipo::GEN_TABLA);
            $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_PRV_TIPO_ID, PrvTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvTipo::getPrvTipos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvTipos relacionados a traves de PrvProveedor */ 	
	public function getCantidadPrvTiposXPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvTipo::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvTipo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedor::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvTipo::GEN_TABLA);
            $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_PRV_TIPO_ID, PrvTipo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvTipo::getPrvTipos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvTipo (Objeto) relacionado a traves de PrvProveedor */ 	
	public function getPrvTipoXPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvTiposXPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPanPanols */ 	
	public function getPanPanols($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PanPanol::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PanPanol::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PanPanol::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PanPanol::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PanPanol::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PanPanol::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PanPanol::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $panpanols = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $panpanol = PanPanol::hidratarObjeto($fila);			
                $panpanols[] = $panpanol;
            }

            return $panpanols;
	}	
	

	/* Método getPanPanolsBloque para MasInfo */ 	
	public function getPanPanolsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPanPanols($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPanPanols Habilitados */ 	
	public function getPanPanolsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPanPanols($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPanPanol */ 	
	public function getPanPanol($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPanPanols($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PanPanol relacionadas */ 	
	public function deletePanPanols(){
            $obs = $this->getPanPanols();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPanPanolsCmb() PanPanol relacionadas */ 	
	public function getPanPanolsCmb(){
            $c = new Criterio();
            $c->add(PanPanol::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->setCriterios();

            $os = PanPanol::getPanPanolsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PanTipoPanols (Coleccion) relacionados a traves de PanPanol */ 	
	public function getPanTipoPanolsXPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PanTipoPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PanPanol::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanTipoPanol::GEN_TABLA);
            $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_PAN_TIPO_PANOL_ID, PanTipoPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanTipoPanol::getPanTipoPanols($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PanTipoPanols relacionados a traves de PanPanol */ 	
	public function getCantidadPanTipoPanolsXPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PanTipoPanol::GEN_ATTR_ID);
            if($estado){
                $c->add(PanTipoPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PanPanol::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanTipoPanol::GEN_TABLA);
            $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_PAN_TIPO_PANOL_ID, PanTipoPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanTipoPanol::getPanTipoPanols($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PanTipoPanol (Objeto) relacionado a traves de PanPanol */ 	
	public function getPanTipoPanolXPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPanTipoPanolsXPanPanol($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getCliCentroRecepcions */ 	
	public function getCliCentroRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCentroRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCentroRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCentroRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCentroRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCentroRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCentroRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicentrorecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicentrorecepcion = CliCentroRecepcion::hidratarObjeto($fila);			
                $clicentrorecepcions[] = $clicentrorecepcion;
            }

            return $clicentrorecepcions;
	}	
	

	/* Método getCliCentroRecepcionsBloque para MasInfo */ 	
	public function getCliCentroRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCentroRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCentroRecepcions Habilitados */ 	
	public function getCliCentroRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCentroRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCentroRecepcion */ 	
	public function getCliCentroRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCentroRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCentroRecepcion relacionadas */ 	
	public function deleteCliCentroRecepcions(){
            $obs = $this->getCliCentroRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCentroRecepcionsCmb() CliCentroRecepcion relacionadas */ 	
	public function getCliCentroRecepcionsCmb(){
            $c = new Criterio();
            $c->add(CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCentroRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = CliCentroRecepcion::getCliCentroRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliCentroRecepcion */ 	
	public function getCliClientesXCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliCentroRecepcion */ 	
	public function getCantidadCliClientesXCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliCentroRecepcion */ 	
	public function getCliClienteXCliCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliCentroRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliCentroPedidos */ 	
	public function getCliCentroPedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliCentroPedido::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliCentroPedido::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliCentroPedido::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliCentroPedido::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliCentroPedido::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliCentroPedido::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliCentroPedido::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $clicentropedidos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $clicentropedido = CliCentroPedido::hidratarObjeto($fila);			
                $clicentropedidos[] = $clicentropedido;
            }

            return $clicentropedidos;
	}	
	

	/* Método getCliCentroPedidosBloque para MasInfo */ 	
	public function getCliCentroPedidosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliCentroPedidos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliCentroPedidos Habilitados */ 	
	public function getCliCentroPedidosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliCentroPedidos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliCentroPedido */ 	
	public function getCliCentroPedido($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliCentroPedidos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliCentroPedido relacionadas */ 	
	public function deleteCliCentroPedidos(){
            $obs = $this->getCliCentroPedidos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliCentroPedidosCmb() CliCentroPedido relacionadas */ 	
	public function getCliCentroPedidosCmb(){
            $c = new Criterio();
            $c->add(CliCentroPedido::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCentroPedido::GEN_TABLA);
            $c->setCriterios();

            $os = CliCentroPedido::getCliCentroPedidosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliCentroPedido */ 	
	public function getCliClientesXCliCentroPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCentroPedido::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliCentroPedido::GEN_TABLA, CliCentroPedido::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliCentroPedido */ 	
	public function getCantidadCliClientesXCliCentroPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliCentroPedido::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliCentroPedido::GEN_TABLA, CliCentroPedido::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliCentroPedido */ 	
	public function getCliClienteXCliCentroPedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliCentroPedido($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaCompradors */ 	
	public function getVtaCompradors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComprador::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComprador::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComprador::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComprador::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComprador::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComprador::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComprador::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacompradors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomprador = VtaComprador::hidratarObjeto($fila);			
                $vtacompradors[] = $vtacomprador;
            }

            return $vtacompradors;
	}	
	

	/* Método getVtaCompradorsBloque para MasInfo */ 	
	public function getVtaCompradorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaCompradors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaCompradors Habilitados */ 	
	public function getVtaCompradorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaCompradors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComprador */ 	
	public function getVtaComprador($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaCompradors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComprador relacionadas */ 	
	public function deleteVtaCompradors(){
            $obs = $this->getVtaCompradors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaCompradorsCmb() VtaComprador relacionadas */ 	
	public function getVtaCompradorsCmb(){
            $c = new Criterio();
            $c->add(VtaComprador::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComprador::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComprador::getVtaCompradorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoCompradors (Coleccion) relacionados a traves de VtaComprador */ 	
	public function getVtaTipoCompradorsXVtaComprador($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComprador::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoComprador::GEN_TABLA);
            $c->addRealJoin(VtaComprador::GEN_TABLA, VtaComprador::GEN_ATTR_VTA_TIPO_COMPRADOR_ID, VtaTipoComprador::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoComprador::getVtaTipoCompradors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoCompradors relacionados a traves de VtaComprador */ 	
	public function getCantidadVtaTipoCompradorsXVtaComprador($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoComprador::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComprador::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComprador::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoComprador::GEN_TABLA);
            $c->addRealJoin(VtaComprador::GEN_TABLA, VtaComprador::GEN_ATTR_VTA_TIPO_COMPRADOR_ID, VtaTipoComprador::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoComprador::getVtaTipoCompradors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoComprador (Objeto) relacionado a traves de VtaComprador */ 	
	public function getVtaTipoCompradorXVtaComprador($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoCompradorsXVtaComprador($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPuntoVentas */ 	
	public function getVtaPuntoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPuntoVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPuntoVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPuntoVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPuntoVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPuntoVenta::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPuntoVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPuntoVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapuntoventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapuntoventa = VtaPuntoVenta::hidratarObjeto($fila);			
                $vtapuntoventas[] = $vtapuntoventa;
            }

            return $vtapuntoventas;
	}	
	

	/* Método getVtaPuntoVentasBloque para MasInfo */ 	
	public function getVtaPuntoVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPuntoVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPuntoVentas Habilitados */ 	
	public function getVtaPuntoVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPuntoVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPuntoVenta */ 	
	public function getVtaPuntoVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPuntoVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPuntoVenta relacionadas */ 	
	public function deleteVtaPuntoVentas(){
            $obs = $this->getVtaPuntoVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPuntoVentasCmb() VtaPuntoVenta relacionadas */ 	
	public function getVtaPuntoVentasCmb(){
            $c = new Criterio();
            $c->add(VtaPuntoVenta::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPuntoVenta::getVtaPuntoVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoPuntoVentas (Coleccion) relacionados a traves de VtaPuntoVenta */ 	
	public function getVtaTipoPuntoVentasXVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPuntoVenta::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoPuntoVenta::GEN_TABLA);
            $c->addRealJoin(VtaPuntoVenta::GEN_TABLA, VtaPuntoVenta::GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID, VtaTipoPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoPuntoVenta::getVtaTipoPuntoVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoPuntoVentas relacionados a traves de VtaPuntoVenta */ 	
	public function getCantidadVtaTipoPuntoVentasXVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoPuntoVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPuntoVenta::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoPuntoVenta::GEN_TABLA);
            $c->addRealJoin(VtaPuntoVenta::GEN_TABLA, VtaPuntoVenta::GEN_ATTR_VTA_TIPO_PUNTO_VENTA_ID, VtaTipoPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoPuntoVenta::getVtaTipoPuntoVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoPuntoVenta (Objeto) relacionado a traves de VtaPuntoVenta */ 	
	public function getVtaTipoPuntoVentaXVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoPuntoVentasXVtaPuntoVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCentroRecepcions */ 	
	public function getPdeCentroRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeCentroRecepcion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentrorecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentrorecepcion = PdeCentroRecepcion::hidratarObjeto($fila);			
                $pdecentrorecepcions[] = $pdecentrorecepcion;
            }

            return $pdecentrorecepcions;
	}	
	

	/* Método getPdeCentroRecepcionsBloque para MasInfo */ 	
	public function getPdeCentroRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroRecepcions Habilitados */ 	
	public function getPdeCentroRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroRecepcion */ 	
	public function getPdeCentroRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroRecepcion relacionadas */ 	
	public function deletePdeCentroRecepcions(){
            $obs = $this->getPdeCentroRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroRecepcionsCmb() PdeCentroRecepcion relacionadas */ 	
	public function getPdeCentroRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroRecepcion::getPdeCentroRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeCentroPedidos */ 	
	public function getPdeCentroPedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroPedido::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroPedido::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroPedido::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeCentroPedido::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroPedido::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroPedido::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroPedido::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentropedidos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentropedido = PdeCentroPedido::hidratarObjeto($fila);			
                $pdecentropedidos[] = $pdecentropedido;
            }

            return $pdecentropedidos;
	}	
	

	/* Método getPdeCentroPedidosBloque para MasInfo */ 	
	public function getPdeCentroPedidosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroPedidos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroPedidos Habilitados */ 	
	public function getPdeCentroPedidosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroPedidos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroPedido */ 	
	public function getPdeCentroPedido($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroPedidos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroPedido relacionadas */ 	
	public function deletePdeCentroPedidos(){
            $obs = $this->getPdeCentroPedidos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroPedidosCmb() PdeCentroPedido relacionadas */ 	
	public function getPdeCentroPedidosCmb(){
            $c = new Criterio();
            $c->add(PdeCentroPedido::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroPedido::getPdeCentroPedidosCmbF(null, $c);
            return $os;
	}

	/* Metodo getCliClienteTiendas */ 	
	public function getCliClienteTiendas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTienda::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTienda::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTienda::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteTienda::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTienda::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTienda::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTienda::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetienda = CliClienteTienda::hidratarObjeto($fila);			
                $cliclientetiendas[] = $cliclientetienda;
            }

            return $cliclientetiendas;
	}	
	

	/* Método getCliClienteTiendasBloque para MasInfo */ 	
	public function getCliClienteTiendasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendas Habilitados */ 	
	public function getCliClienteTiendasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTienda */ 	
	public function getCliClienteTienda($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTienda relacionadas */ 	
	public function deleteCliClienteTiendas(){
            $obs = $this->getCliClienteTiendas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendasCmb() CliClienteTienda relacionadas */ 	
	public function getCliClienteTiendasCmb(){
            $c = new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTienda::getCliClienteTiendasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteTienda */ 	
	public function getCliClientesXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTienda::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteTienda */ 	
	public function getCantidadCliClientesXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTienda::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteTienda */ 	
	public function getCliClienteXCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteTienda($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getEkuParamGeoCiudadGeoLocalidads */ 	
	public function getEkuParamGeoCiudadGeoLocalidads($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(EkuParamGeoCiudadGeoLocalidad::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(EkuParamGeoCiudadGeoLocalidad::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(EkuParamGeoCiudadGeoLocalidad::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".EkuParamGeoCiudadGeoLocalidad::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ekuparamgeociudadgeolocalidads = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ekuparamgeociudadgeolocalidad = EkuParamGeoCiudadGeoLocalidad::hidratarObjeto($fila);			
                $ekuparamgeociudadgeolocalidads[] = $ekuparamgeociudadgeolocalidad;
            }

            return $ekuparamgeociudadgeolocalidads;
	}	
	

	/* Método getEkuParamGeoCiudadGeoLocalidadsBloque para MasInfo */ 	
	public function getEkuParamGeoCiudadGeoLocalidadsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getEkuParamGeoCiudadGeoLocalidads($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getEkuParamGeoCiudadGeoLocalidads Habilitados */ 	
	public function getEkuParamGeoCiudadGeoLocalidadsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getEkuParamGeoCiudadGeoLocalidads($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getEkuParamGeoCiudadGeoLocalidad */ 	
	public function getEkuParamGeoCiudadGeoLocalidad($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getEkuParamGeoCiudadGeoLocalidads($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de EkuParamGeoCiudadGeoLocalidad relacionadas */ 	
	public function deleteEkuParamGeoCiudadGeoLocalidads(){
            $obs = $this->getEkuParamGeoCiudadGeoLocalidads();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getEkuParamGeoCiudadGeoLocalidadsCmb() EkuParamGeoCiudadGeoLocalidad relacionadas */ 	
	public function getEkuParamGeoCiudadGeoLocalidadsCmb(){
            $c = new Criterio();
            $c->add(EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamGeoCiudadGeoLocalidad::GEN_TABLA);
            $c->setCriterios();

            $os = EkuParamGeoCiudadGeoLocalidad::getEkuParamGeoCiudadGeoLocalidadsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener EkuParamGeoCiudads (Coleccion) relacionados a traves de EkuParamGeoCiudadGeoLocalidad */ 	
	public function getEkuParamGeoCiudadsXEkuParamGeoCiudadGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(EkuParamGeoCiudad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamGeoCiudad::GEN_TABLA);
            $c->addRealJoin(EkuParamGeoCiudadGeoLocalidad::GEN_TABLA, EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_EKU_PARAM_GEO_CIUDAD_ID, EkuParamGeoCiudad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamGeoCiudad::getEkuParamGeoCiudads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de EkuParamGeoCiudads relacionados a traves de EkuParamGeoCiudadGeoLocalidad */ 	
	public function getCantidadEkuParamGeoCiudadsXEkuParamGeoCiudadGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(EkuParamGeoCiudad::GEN_ATTR_ID);
            if($estado){
                $c->add(EkuParamGeoCiudad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(EkuParamGeoCiudad::GEN_TABLA);
            $c->addRealJoin(EkuParamGeoCiudadGeoLocalidad::GEN_TABLA, EkuParamGeoCiudadGeoLocalidad::GEN_ATTR_EKU_PARAM_GEO_CIUDAD_ID, EkuParamGeoCiudad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = EkuParamGeoCiudad::getEkuParamGeoCiudads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener EkuParamGeoCiudad (Objeto) relacionado a traves de EkuParamGeoCiudadGeoLocalidad */ 	
	public function getEkuParamGeoCiudadXEkuParamGeoCiudadGeoLocalidad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getEkuParamGeoCiudadsXEkuParamGeoCiudadGeoLocalidad($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPerPersonas */ 	
	public function getPerPersonas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersona::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersona::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersona::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PerPersona::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersona::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersona::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersona::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersona = PerPersona::hidratarObjeto($fila);			
                $perpersonas[] = $perpersona;
            }

            return $perpersonas;
	}	
	

	/* Método getPerPersonasBloque para MasInfo */ 	
	public function getPerPersonasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonas Habilitados */ 	
	public function getPerPersonasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersona */ 	
	public function getPerPersona($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersona relacionadas */ 	
	public function deletePerPersonas(){
            $obs = $this->getPerPersonas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonasCmb() PerPersona relacionadas */ 	
	public function getPerPersonasCmb(){
            $c = new Criterio();
            $c->add(PerPersona::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersona::getPerPersonasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralEmpresas (Coleccion) relacionados a traves de PerPersona */ 	
	public function getGralEmpresasXPerPersona($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersona::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(PerPersona::GEN_TABLA, PerPersona::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralEmpresas relacionados a traves de PerPersona */ 	
	public function getCantidadGralEmpresasXPerPersona($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralEmpresa::GEN_ATTR_ID);
            if($estado){
                $c->add(GralEmpresa::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersona::GEN_ATTR_GEO_LOCALIDAD_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEmpresa::GEN_TABLA);
            $c->addRealJoin(PerPersona::GEN_TABLA, PerPersona::GEN_ATTR_GRAL_EMPRESA_ID, GralEmpresa::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEmpresa::getGralEmpresas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralEmpresa (Objeto) relacionado a traves de PerPersona */ 	
	public function getGralEmpresaXPerPersona($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralEmpresasXPerPersona($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los GralRutas asignados a GeoLocalidad */ 	
	public function getGralRutaGeoLocalidadsId(){
            $ids = array();
            foreach($this->getGralRutaGeoLocalidads() as $o){
            
                $ids[] = $o->getGralRutaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralRutas asignados al GeoLocalidad */ 	
	public function setGralRutaGeoLocalidads($ids){
            $this->deleteGralRutaGeoLocalidads();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralRutaGeoLocalidad();
                    $o->setGralRutaId($id);
                    $o->setGeoLocalidadId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralRuta en el alta de GeoLocalidad */ 	
	public function getAltaMostrarBloqueRelacionGralRutaGeoLocalidad(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los EkuParamGeoCiudads asignados a GeoLocalidad */ 	
	public function getEkuParamGeoCiudadGeoLocalidadsId(){
            $ids = array();
            foreach($this->getEkuParamGeoCiudadGeoLocalidads() as $o){
            
                $ids[] = $o->getEkuParamGeoCiudadId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos EkuParamGeoCiudads asignados al GeoLocalidad */ 	
	public function setEkuParamGeoCiudadGeoLocalidads($ids){
            $this->deleteEkuParamGeoCiudadGeoLocalidads();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new EkuParamGeoCiudadGeoLocalidad();
                    $o->setEkuParamGeoCiudadId($id);
                    $o->setGeoLocalidadId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion EkuParamGeoCiudad en el alta de GeoLocalidad */ 	
	public function getAltaMostrarBloqueRelacionEkuParamGeoCiudadGeoLocalidad(){
            return true;
	}
	

	/* Metodo que retorna el GeoProvincia (Clave Foranea) */ 	
    public function getGeoProvincia(){
        $o = new GeoProvincia();
        $o->setId($this->getGeoProvinciaId());
        return $o;			
    }

	/* Metodo que retorna el GeoProvincia (Clave Foranea) en Array */ 	
    public function getGeoProvinciaEnArray(&$arr_os){
        if($this->getGeoProvinciaId() != 'null'){
            if(isset($arr_os[$this->getGeoProvinciaId()])){
                $o = $arr_os[$this->getGeoProvinciaId()];
            }else{
                $o = GeoProvincia::getOxId($this->getGeoProvinciaId());
                if($o){
                    $arr_os[$this->getGeoProvinciaId()] = $o;
                }
            }
        }else{
            $o = new GeoProvincia();
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
            		
        if($contexto_solicitante != GeoProvincia::GEN_CLASE){
            if($this->getGeoProvincia()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GeoProvincia::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGeoProvincia()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM geo_localidad'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'geo_localidad';");
            
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

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_provincia_id' */ 	
	static function getOxGeoProvinciaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_PROVINCIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'geo_provincia_id' */ 	
	static function getOsxGeoProvinciaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_PROVINCIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_eku' */ 	
	static function getOxCodigoEku($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_EKU, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_eku' */ 	
	static function getOsxCodigoEku($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_EKU, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_distrito_eku' */ 	
	static function getOxCodigoDistritoEku($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_DISTRITO_EKU, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_distrito_eku' */ 	
	static function getOsxCodigoDistritoEku($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_DISTRITO_EKU, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads(null, $criterio);
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

            $obs = self::getGeoLocalidads($paginador, $criterio);
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

            $obs = self::getGeoLocalidads($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'geo_localidad_adm');
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
                $c->addTabla(GeoLocalidad::GEN_TABLA);
                $c->addOrden(GeoLocalidad::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $geo_localidads = GeoLocalidad::getGeoLocalidads(null, $c);

                $arr = array();
                foreach($geo_localidads as $geo_localidad){
                    $descripcion = $geo_localidad->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>