<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BAppMovActividad
{ 
	
	const SES_PAGINACION = 'adm_appmovactividad_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_appmovactividad_paginas_registros';
	const SES_CRITERIOS = 'adm_appmovactividad_criterios';
	
	const GEN_CLASE = 'AppMovActividad';
	const GEN_TABLA = 'app_mov_actividad';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BAppMovActividad */ 
	const GEN_ATTR_ID = 'app_mov_actividad.id';
	const GEN_ATTR_DESCRIPCION = 'app_mov_actividad.descripcion';
	const GEN_ATTR_APP_MOV_INSTALACION_ID = 'app_mov_actividad.app_mov_instalacion_id';
	const GEN_ATTR_APP_MOV_DISPOSITIVO_ID = 'app_mov_actividad.app_mov_dispositivo_id';
	const GEN_ATTR_APP_MOV_MODULO_ID = 'app_mov_actividad.app_mov_modulo_id';
	const GEN_ATTR_GEN_API_TOKEN_ID = 'app_mov_actividad.gen_api_token_id';
	const GEN_ATTR_METODO = 'app_mov_actividad.metodo';
	const GEN_ATTR_REGISTROS = 'app_mov_actividad.registros';
	const GEN_ATTR_CODIGO = 'app_mov_actividad.codigo';
	const GEN_ATTR_FECHA_ACTIVIDAD = 'app_mov_actividad.fecha_actividad';
	const GEN_ATTR_TOKEN = 'app_mov_actividad.token';
	const GEN_ATTR_RESPUESTA = 'app_mov_actividad.respuesta';
	const GEN_ATTR_OBSERVACION = 'app_mov_actividad.observacion';
	const GEN_ATTR_ORDEN = 'app_mov_actividad.orden';
	const GEN_ATTR_ESTADO = 'app_mov_actividad.estado';
	const GEN_ATTR_CREADO = 'app_mov_actividad.creado';
	const GEN_ATTR_CREADO_POR = 'app_mov_actividad.creado_por';
	const GEN_ATTR_MODIFICADO = 'app_mov_actividad.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'app_mov_actividad.modificado_por';

	/* Constantes de Atributos Min de BAppMovActividad */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_APP_MOV_INSTALACION_ID = 'app_mov_instalacion_id';
	const GEN_ATTR_MIN_APP_MOV_DISPOSITIVO_ID = 'app_mov_dispositivo_id';
	const GEN_ATTR_MIN_APP_MOV_MODULO_ID = 'app_mov_modulo_id';
	const GEN_ATTR_MIN_GEN_API_TOKEN_ID = 'gen_api_token_id';
	const GEN_ATTR_MIN_METODO = 'metodo';
	const GEN_ATTR_MIN_REGISTROS = 'registros';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_FECHA_ACTIVIDAD = 'fecha_actividad';
	const GEN_ATTR_MIN_TOKEN = 'token';
	const GEN_ATTR_MIN_RESPUESTA = 'respuesta';
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
	

	/* Atributos de BAppMovActividad */ 
	private $id;
	private $descripcion;
	private $app_mov_instalacion_id;
	private $app_mov_dispositivo_id;
	private $app_mov_modulo_id;
	private $gen_api_token_id;
	private $metodo;
	private $registros;
	private $codigo;
	private $fecha_actividad;
	private $token;
	private $respuesta;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BAppMovActividad */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getAppMovInstalacionId(){ if(isset($this->app_mov_instalacion_id)){ return $this->app_mov_instalacion_id; }else{ return 'null'; } }
	public function getAppMovDispositivoId(){ if(isset($this->app_mov_dispositivo_id)){ return $this->app_mov_dispositivo_id; }else{ return 'null'; } }
	public function getAppMovModuloId(){ if(isset($this->app_mov_modulo_id)){ return $this->app_mov_modulo_id; }else{ return 'null'; } }
	public function getGenApiTokenId(){ if(isset($this->gen_api_token_id)){ return $this->gen_api_token_id; }else{ return 'null'; } }
	public function getMetodo(){ if(isset($this->metodo)){ return $this->metodo; }else{ return ''; } }
	public function getRegistros(){ if(isset($this->registros)){ return $this->registros; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getFechaActividad(){ if(isset($this->fecha_actividad)){ return $this->fecha_actividad; }else{ return ''; } }
	public function getToken(){ if(isset($this->token)){ return $this->token; }else{ return ''; } }
	public function getRespuesta(){ if(isset($this->respuesta)){ return $this->respuesta; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BAppMovActividad */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_APP_MOV_INSTALACION_ID."
				, ".self::GEN_ATTR_APP_MOV_DISPOSITIVO_ID."
				, ".self::GEN_ATTR_APP_MOV_MODULO_ID."
				, ".self::GEN_ATTR_GEN_API_TOKEN_ID."
				, ".self::GEN_ATTR_METODO."
				, ".self::GEN_ATTR_REGISTROS."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_FECHA_ACTIVIDAD."
				, ".self::GEN_ATTR_TOKEN."
				, ".self::GEN_ATTR_RESPUESTA."
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
				$this->setAppMovInstalacionId($fila[self::GEN_ATTR_MIN_APP_MOV_INSTALACION_ID]);
				$this->setAppMovDispositivoId($fila[self::GEN_ATTR_MIN_APP_MOV_DISPOSITIVO_ID]);
				$this->setAppMovModuloId($fila[self::GEN_ATTR_MIN_APP_MOV_MODULO_ID]);
				$this->setGenApiTokenId($fila[self::GEN_ATTR_MIN_GEN_API_TOKEN_ID]);
				$this->setMetodo($fila[self::GEN_ATTR_MIN_METODO]);
				$this->setRegistros($fila[self::GEN_ATTR_MIN_REGISTROS]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setFechaActividad($fila[self::GEN_ATTR_MIN_FECHA_ACTIVIDAD]);
				$this->setToken($fila[self::GEN_ATTR_MIN_TOKEN]);
				$this->setRespuesta($fila[self::GEN_ATTR_MIN_RESPUESTA]);
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
	public function setAppMovInstalacionId($v){ $this->app_mov_instalacion_id = $v; }
	public function setAppMovDispositivoId($v){ $this->app_mov_dispositivo_id = $v; }
	public function setAppMovModuloId($v){ $this->app_mov_modulo_id = $v; }
	public function setGenApiTokenId($v){ $this->gen_api_token_id = $v; }
	public function setMetodo($v){ $this->metodo = $v; }
	public function setRegistros($v){ $this->registros = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setFechaActividad($v){ $this->fecha_actividad = $v; }
	public function setToken($v){ $this->token = $v; }
	public function setRespuesta($v){ $this->respuesta = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new AppMovActividad();
            $o->setId($fila[AppMovActividad::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setAppMovInstalacionId($fila[self::GEN_ATTR_MIN_APP_MOV_INSTALACION_ID]);
			$o->setAppMovDispositivoId($fila[self::GEN_ATTR_MIN_APP_MOV_DISPOSITIVO_ID]);
			$o->setAppMovModuloId($fila[self::GEN_ATTR_MIN_APP_MOV_MODULO_ID]);
			$o->setGenApiTokenId($fila[self::GEN_ATTR_MIN_GEN_API_TOKEN_ID]);
			$o->setMetodo($fila[self::GEN_ATTR_MIN_METODO]);
			$o->setRegistros($fila[self::GEN_ATTR_MIN_REGISTROS]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setFechaActividad($fila[self::GEN_ATTR_MIN_FECHA_ACTIVIDAD]);
			$o->setToken($fila[self::GEN_ATTR_MIN_TOKEN]);
			$o->setRespuesta($fila[self::GEN_ATTR_MIN_RESPUESTA]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BAppMovActividad */ 	
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

	/* Cambia el estado de BAppMovActividad */ 	
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

	/* Save de BAppMovActividad */ 	
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
						, ".self::GEN_ATTR_MIN_APP_MOV_INSTALACION_ID."
						, ".self::GEN_ATTR_MIN_APP_MOV_DISPOSITIVO_ID."
						, ".self::GEN_ATTR_MIN_APP_MOV_MODULO_ID."
						, ".self::GEN_ATTR_MIN_GEN_API_TOKEN_ID."
						, ".self::GEN_ATTR_MIN_METODO."
						, ".self::GEN_ATTR_MIN_REGISTROS."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_FECHA_ACTIVIDAD."
						, ".self::GEN_ATTR_MIN_TOKEN."
						, ".self::GEN_ATTR_MIN_RESPUESTA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('app_mov_actividad_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getAppMovInstalacionId()."
						, ".$this->getAppMovDispositivoId()."
						, ".$this->getAppMovModuloId()."
						, ".$this->getGenApiTokenId()."
						, '".$this->getMetodo()."'
						, '".$this->getRegistros()."'
						, '".$this->getCodigo()."'
						, '".$this->getFechaActividad()."'
						, '".$this->getToken()."'
						, '".$this->getRespuesta()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('app_mov_actividad_seq')";
            
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
                 
				 ".AppMovActividad::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_APP_MOV_INSTALACION_ID." = ".$this->getAppMovInstalacionId()."
						, ".self::GEN_ATTR_MIN_APP_MOV_DISPOSITIVO_ID." = ".$this->getAppMovDispositivoId()."
						, ".self::GEN_ATTR_MIN_APP_MOV_MODULO_ID." = ".$this->getAppMovModuloId()."
						, ".self::GEN_ATTR_MIN_GEN_API_TOKEN_ID." = ".$this->getGenApiTokenId()."
						, ".self::GEN_ATTR_MIN_METODO." = '".$this->getMetodo()."'
						, ".self::GEN_ATTR_MIN_REGISTROS." = '".$this->getRegistros()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_FECHA_ACTIVIDAD." = '".$this->getFechaActividad()."'
						, ".self::GEN_ATTR_MIN_TOKEN." = '".$this->getToken()."'
						, ".self::GEN_ATTR_MIN_RESPUESTA." = '".$this->getRespuesta()."'
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
						, ".self::GEN_ATTR_MIN_APP_MOV_INSTALACION_ID."
						, ".self::GEN_ATTR_MIN_APP_MOV_DISPOSITIVO_ID."
						, ".self::GEN_ATTR_MIN_APP_MOV_MODULO_ID."
						, ".self::GEN_ATTR_MIN_GEN_API_TOKEN_ID."
						, ".self::GEN_ATTR_MIN_METODO."
						, ".self::GEN_ATTR_MIN_REGISTROS."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_FECHA_ACTIVIDAD."
						, ".self::GEN_ATTR_MIN_TOKEN."
						, ".self::GEN_ATTR_MIN_RESPUESTA."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getAppMovInstalacionId()."
						, ".$this->getAppMovDispositivoId()."
						, ".$this->getAppMovModuloId()."
						, ".$this->getGenApiTokenId()."
						, '".$this->getMetodo()."'
						, '".$this->getRegistros()."'
						, '".$this->getCodigo()."'
						, '".$this->getFechaActividad()."'
						, '".$this->getToken()."'
						, '".$this->getRespuesta()."'
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
                     
				 ".AppMovActividad::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_APP_MOV_INSTALACION_ID." = ".$this->getAppMovInstalacionId()."
						, ".self::GEN_ATTR_MIN_APP_MOV_DISPOSITIVO_ID." = ".$this->getAppMovDispositivoId()."
						, ".self::GEN_ATTR_MIN_APP_MOV_MODULO_ID." = ".$this->getAppMovModuloId()."
						, ".self::GEN_ATTR_MIN_GEN_API_TOKEN_ID." = ".$this->getGenApiTokenId()."
						, ".self::GEN_ATTR_MIN_METODO." = '".$this->getMetodo()."'
						, ".self::GEN_ATTR_MIN_REGISTROS." = '".$this->getRegistros()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_FECHA_ACTIVIDAD." = '".$this->getFechaActividad()."'
						, ".self::GEN_ATTR_MIN_TOKEN." = '".$this->getToken()."'
						, ".self::GEN_ATTR_MIN_RESPUESTA." = '".$this->getRespuesta()."'
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
            $o = new AppMovActividad();
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

	/* Delete de BAppMovActividad */ 	
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
	
	public function duplicarAppMovActividad(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getAppMovActividads($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = AppMovActividad::setAplicarFiltrosDeAlcance($criterio);

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
	
		$appmovactividads = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $appmovactividad = new AppMovActividad();
                    $appmovactividad->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $appmovactividad->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$appmovactividad->setAppMovInstalacionId($fila[self::GEN_ATTR_MIN_APP_MOV_INSTALACION_ID]);
			$appmovactividad->setAppMovDispositivoId($fila[self::GEN_ATTR_MIN_APP_MOV_DISPOSITIVO_ID]);
			$appmovactividad->setAppMovModuloId($fila[self::GEN_ATTR_MIN_APP_MOV_MODULO_ID]);
			$appmovactividad->setGenApiTokenId($fila[self::GEN_ATTR_MIN_GEN_API_TOKEN_ID]);
			$appmovactividad->setMetodo($fila[self::GEN_ATTR_MIN_METODO]);
			$appmovactividad->setRegistros($fila[self::GEN_ATTR_MIN_REGISTROS]);
			$appmovactividad->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$appmovactividad->setFechaActividad($fila[self::GEN_ATTR_MIN_FECHA_ACTIVIDAD]);
			$appmovactividad->setToken($fila[self::GEN_ATTR_MIN_TOKEN]);
			$appmovactividad->setRespuesta($fila[self::GEN_ATTR_MIN_RESPUESTA]);
			$appmovactividad->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$appmovactividad->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$appmovactividad->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$appmovactividad->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$appmovactividad->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$appmovactividad->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$appmovactividad->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $appmovactividads[] = $appmovactividad;
		}
		
		return $appmovactividads;
	}	
	

	/* Método getAppMovActividads Habilitados */ 	
	static function getAppMovActividadsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return AppMovActividad::getAppMovActividads($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getAppMovActividads para listado de Backend */ 	
	static function getAppMovActividadsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return AppMovActividad::getAppMovActividads($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getAppMovActividadsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = AppMovActividad::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = AppMovActividad::getAppMovActividads($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAppMovActividads filtrado para select */ 	
	static function getAppMovActividadsCmbF($paginador = null, $criterio = null){
            $col = AppMovActividad::getAppMovActividads($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAppMovActividads filtrado por una coleccion de objetos foraneos de AppMovInstalacion */ 	
	static function getAppMovActividadsXAppMovInstalacions($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AppMovActividad::GEN_ATTR_APP_MOV_INSTALACION_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AppMovActividad::GEN_TABLA);
            $c->addOrden(AppMovActividad::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AppMovActividad::getAppMovActividads($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAppMovInstalacionId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAppMovActividads filtrado por una coleccion de objetos foraneos de AppMovDispositivo */ 	
	static function getAppMovActividadsXAppMovDispositivos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AppMovActividad::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AppMovActividad::GEN_TABLA);
            $c->addOrden(AppMovActividad::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AppMovActividad::getAppMovActividads($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAppMovDispositivoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAppMovActividads filtrado por una coleccion de objetos foraneos de AppMovModulo */ 	
	static function getAppMovActividadsXAppMovModulos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AppMovActividad::GEN_ATTR_APP_MOV_MODULO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AppMovActividad::GEN_TABLA);
            $c->addOrden(AppMovActividad::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AppMovActividad::getAppMovActividads($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getAppMovModuloId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getAppMovActividads filtrado por una coleccion de objetos foraneos de GenApiToken */ 	
	static function getAppMovActividadsXGenApiTokens($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(AppMovActividad::GEN_ATTR_GEN_API_TOKEN_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(AppMovActividad::GEN_TABLA);
            $c->addOrden(AppMovActividad::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = AppMovActividad::getAppMovActividads($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGenApiTokenId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'app_mov_actividad_adm.php';
            $url_gestion = 'app_mov_actividad_gestion.php';
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
	

	/* Metodo que retorna el AppMovInstalacion (Clave Foranea) */ 	
    public function getAppMovInstalacion(){
        $o = new AppMovInstalacion();
        $o->setId($this->getAppMovInstalacionId());
        return $o;			
    }

	/* Metodo que retorna el AppMovInstalacion (Clave Foranea) en Array */ 	
    public function getAppMovInstalacionEnArray(&$arr_os){
        if($this->getAppMovInstalacionId() != 'null'){
            if(isset($arr_os[$this->getAppMovInstalacionId()])){
                $o = $arr_os[$this->getAppMovInstalacionId()];
            }else{
                $o = AppMovInstalacion::getOxId($this->getAppMovInstalacionId());
                if($o){
                    $arr_os[$this->getAppMovInstalacionId()] = $o;
                }
            }
        }else{
            $o = new AppMovInstalacion();
        }
        return $o;		
    }

	/* Metodo que retorna el AppMovDispositivo (Clave Foranea) */ 	
    public function getAppMovDispositivo(){
        $o = new AppMovDispositivo();
        $o->setId($this->getAppMovDispositivoId());
        return $o;			
    }

	/* Metodo que retorna el AppMovDispositivo (Clave Foranea) en Array */ 	
    public function getAppMovDispositivoEnArray(&$arr_os){
        if($this->getAppMovDispositivoId() != 'null'){
            if(isset($arr_os[$this->getAppMovDispositivoId()])){
                $o = $arr_os[$this->getAppMovDispositivoId()];
            }else{
                $o = AppMovDispositivo::getOxId($this->getAppMovDispositivoId());
                if($o){
                    $arr_os[$this->getAppMovDispositivoId()] = $o;
                }
            }
        }else{
            $o = new AppMovDispositivo();
        }
        return $o;		
    }

	/* Metodo que retorna el AppMovModulo (Clave Foranea) */ 	
    public function getAppMovModulo(){
        $o = new AppMovModulo();
        $o->setId($this->getAppMovModuloId());
        return $o;			
    }

	/* Metodo que retorna el AppMovModulo (Clave Foranea) en Array */ 	
    public function getAppMovModuloEnArray(&$arr_os){
        if($this->getAppMovModuloId() != 'null'){
            if(isset($arr_os[$this->getAppMovModuloId()])){
                $o = $arr_os[$this->getAppMovModuloId()];
            }else{
                $o = AppMovModulo::getOxId($this->getAppMovModuloId());
                if($o){
                    $arr_os[$this->getAppMovModuloId()] = $o;
                }
            }
        }else{
            $o = new AppMovModulo();
        }
        return $o;		
    }

	/* Metodo que retorna el GenApiToken (Clave Foranea) */ 	
    public function getGenApiToken(){
        $o = new GenApiToken();
        $o->setId($this->getGenApiTokenId());
        return $o;			
    }

	/* Metodo que retorna el GenApiToken (Clave Foranea) en Array */ 	
    public function getGenApiTokenEnArray(&$arr_os){
        if($this->getGenApiTokenId() != 'null'){
            if(isset($arr_os[$this->getGenApiTokenId()])){
                $o = $arr_os[$this->getGenApiTokenId()];
            }else{
                $o = GenApiToken::getOxId($this->getGenApiTokenId());
                if($o){
                    $arr_os[$this->getGenApiTokenId()] = $o;
                }
            }
        }else{
            $o = new GenApiToken();
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
            		
        if($contexto_solicitante != AppMovInstalacion::GEN_CLASE){
            if($this->getAppMovInstalacion()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AppMovInstalacion::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAppMovInstalacion()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != AppMovDispositivo::GEN_CLASE){
            if($this->getAppMovDispositivo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AppMovDispositivo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAppMovDispositivo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != AppMovModulo::GEN_CLASE){
            if($this->getAppMovModulo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(AppMovModulo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getAppMovModulo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GenApiToken::GEN_CLASE){
            if($this->getGenApiToken()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GenApiToken::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGenApiToken()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM app_mov_actividad'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'app_mov_actividad';");
            
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

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'app_mov_instalacion_id' */ 	
	static function getOxAppMovInstalacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APP_MOV_INSTALACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'app_mov_instalacion_id' */ 	
	static function getOsxAppMovInstalacionId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APP_MOV_INSTALACION_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'app_mov_dispositivo_id' */ 	
	static function getOxAppMovDispositivoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'app_mov_dispositivo_id' */ 	
	static function getOsxAppMovDispositivoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'app_mov_modulo_id' */ 	
	static function getOxAppMovModuloId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APP_MOV_MODULO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'app_mov_modulo_id' */ 	
	static function getOsxAppMovModuloId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APP_MOV_MODULO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gen_api_token_id' */ 	
	static function getOxGenApiTokenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_API_TOKEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gen_api_token_id' */ 	
	static function getOsxGenApiTokenId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEN_API_TOKEN_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'metodo' */ 	
	static function getOxMetodo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_METODO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'metodo' */ 	
	static function getOsxMetodo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_METODO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'registros' */ 	
	static function getOxRegistros($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REGISTROS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'registros' */ 	
	static function getOsxRegistros($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_REGISTROS, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha_actividad' */ 	
	static function getOxFechaActividad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ACTIVIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha_actividad' */ 	
	static function getOsxFechaActividad($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA_ACTIVIDAD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'token' */ 	
	static function getOxToken($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TOKEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'token' */ 	
	static function getOsxToken($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TOKEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'respuesta' */ 	
	static function getOxRespuesta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RESPUESTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'respuesta' */ 	
	static function getOsxRespuesta($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RESPUESTA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads(null, $criterio);
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

            $obs = self::getAppMovActividads($paginador, $criterio);
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

            $obs = self::getAppMovActividads($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'app_mov_actividad_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha_actividad' */ 	
	public function getFechaActividadDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaActividad(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaActividadDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaActividadDiferenciaDias();
        
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
                $c->addTabla(AppMovActividad::GEN_TABLA);
                $c->addOrden(AppMovActividad::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $app_mov_actividads = AppMovActividad::getAppMovActividads(null, $c);

                $arr = array();
                foreach($app_mov_actividads as $app_mov_actividad){
                    $descripcion = $app_mov_actividad->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>