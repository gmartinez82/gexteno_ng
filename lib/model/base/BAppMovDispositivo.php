<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BAppMovDispositivo
{ 
	
	const SES_PAGINACION = 'adm_appmovdispositivo_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_appmovdispositivo_paginas_registros';
	const SES_CRITERIOS = 'adm_appmovdispositivo_criterios';
	
	const GEN_CLASE = 'AppMovDispositivo';
	const GEN_TABLA = 'app_mov_dispositivo';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BAppMovDispositivo */ 
	const GEN_ATTR_ID = 'app_mov_dispositivo.id';
	const GEN_ATTR_DESCRIPCION = 'app_mov_dispositivo.descripcion';
	const GEN_ATTR_CODIGO = 'app_mov_dispositivo.codigo';
	const GEN_ATTR_SO_DESCRIPCION = 'app_mov_dispositivo.so_descripcion';
	const GEN_ATTR_SO_VERSION = 'app_mov_dispositivo.so_version';
	const GEN_ATTR_MARCA = 'app_mov_dispositivo.marca';
	const GEN_ATTR_MODELO = 'app_mov_dispositivo.modelo';
	const GEN_ATTR_IMEI = 'app_mov_dispositivo.imei';
	const GEN_ATTR_TELEFONO_NRO = 'app_mov_dispositivo.telefono_nro';
	const GEN_ATTR_TITULAR_APELLIDO = 'app_mov_dispositivo.titular_apellido';
	const GEN_ATTR_TITULAR_NOMBRE = 'app_mov_dispositivo.titular_nombre';
	const GEN_ATTR_OBSERVACION = 'app_mov_dispositivo.observacion';
	const GEN_ATTR_ORDEN = 'app_mov_dispositivo.orden';
	const GEN_ATTR_ESTADO = 'app_mov_dispositivo.estado';
	const GEN_ATTR_CREADO = 'app_mov_dispositivo.creado';
	const GEN_ATTR_CREADO_POR = 'app_mov_dispositivo.creado_por';
	const GEN_ATTR_MODIFICADO = 'app_mov_dispositivo.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'app_mov_dispositivo.modificado_por';

	/* Constantes de Atributos Min de BAppMovDispositivo */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_SO_DESCRIPCION = 'so_descripcion';
	const GEN_ATTR_MIN_SO_VERSION = 'so_version';
	const GEN_ATTR_MIN_MARCA = 'marca';
	const GEN_ATTR_MIN_MODELO = 'modelo';
	const GEN_ATTR_MIN_IMEI = 'imei';
	const GEN_ATTR_MIN_TELEFONO_NRO = 'telefono_nro';
	const GEN_ATTR_MIN_TITULAR_APELLIDO = 'titular_apellido';
	const GEN_ATTR_MIN_TITULAR_NOMBRE = 'titular_nombre';
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
	

	/* Atributos de BAppMovDispositivo */ 
	private $id;
	private $descripcion;
	private $codigo;
	private $so_descripcion;
	private $so_version;
	private $marca;
	private $modelo;
	private $imei;
	private $telefono_nro;
	private $titular_apellido;
	private $titular_nombre;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BAppMovDispositivo */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getSoDescripcion(){ if(isset($this->so_descripcion)){ return $this->so_descripcion; }else{ return ''; } }
	public function getSoVersion(){ if(isset($this->so_version)){ return $this->so_version; }else{ return ''; } }
	public function getMarca(){ if(isset($this->marca)){ return $this->marca; }else{ return ''; } }
	public function getModelo(){ if(isset($this->modelo)){ return $this->modelo; }else{ return ''; } }
	public function getImei(){ if(isset($this->imei)){ return $this->imei; }else{ return ''; } }
	public function getTelefonoNro(){ if(isset($this->telefono_nro)){ return $this->telefono_nro; }else{ return ''; } }
	public function getTitularApellido(){ if(isset($this->titular_apellido)){ return $this->titular_apellido; }else{ return ''; } }
	public function getTitularNombre(){ if(isset($this->titular_nombre)){ return $this->titular_nombre; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BAppMovDispositivo */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_SO_DESCRIPCION."
				, ".self::GEN_ATTR_SO_VERSION."
				, ".self::GEN_ATTR_MARCA."
				, ".self::GEN_ATTR_MODELO."
				, ".self::GEN_ATTR_IMEI."
				, ".self::GEN_ATTR_TELEFONO_NRO."
				, ".self::GEN_ATTR_TITULAR_APELLIDO."
				, ".self::GEN_ATTR_TITULAR_NOMBRE."
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
				$this->setSoDescripcion($fila[self::GEN_ATTR_MIN_SO_DESCRIPCION]);
				$this->setSoVersion($fila[self::GEN_ATTR_MIN_SO_VERSION]);
				$this->setMarca($fila[self::GEN_ATTR_MIN_MARCA]);
				$this->setModelo($fila[self::GEN_ATTR_MIN_MODELO]);
				$this->setImei($fila[self::GEN_ATTR_MIN_IMEI]);
				$this->setTelefonoNro($fila[self::GEN_ATTR_MIN_TELEFONO_NRO]);
				$this->setTitularApellido($fila[self::GEN_ATTR_MIN_TITULAR_APELLIDO]);
				$this->setTitularNombre($fila[self::GEN_ATTR_MIN_TITULAR_NOMBRE]);
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
	public function setSoDescripcion($v){ $this->so_descripcion = $v; }
	public function setSoVersion($v){ $this->so_version = $v; }
	public function setMarca($v){ $this->marca = $v; }
	public function setModelo($v){ $this->modelo = $v; }
	public function setImei($v){ $this->imei = $v; }
	public function setTelefonoNro($v){ $this->telefono_nro = $v; }
	public function setTitularApellido($v){ $this->titular_apellido = $v; }
	public function setTitularNombre($v){ $this->titular_nombre = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new AppMovDispositivo();
            $o->setId($fila[AppMovDispositivo::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setSoDescripcion($fila[self::GEN_ATTR_MIN_SO_DESCRIPCION]);
			$o->setSoVersion($fila[self::GEN_ATTR_MIN_SO_VERSION]);
			$o->setMarca($fila[self::GEN_ATTR_MIN_MARCA]);
			$o->setModelo($fila[self::GEN_ATTR_MIN_MODELO]);
			$o->setImei($fila[self::GEN_ATTR_MIN_IMEI]);
			$o->setTelefonoNro($fila[self::GEN_ATTR_MIN_TELEFONO_NRO]);
			$o->setTitularApellido($fila[self::GEN_ATTR_MIN_TITULAR_APELLIDO]);
			$o->setTitularNombre($fila[self::GEN_ATTR_MIN_TITULAR_NOMBRE]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BAppMovDispositivo */ 	
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

	/* Cambia el estado de BAppMovDispositivo */ 	
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

	/* Save de BAppMovDispositivo */ 	
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
						, ".self::GEN_ATTR_MIN_SO_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_SO_VERSION."
						, ".self::GEN_ATTR_MIN_MARCA."
						, ".self::GEN_ATTR_MIN_MODELO."
						, ".self::GEN_ATTR_MIN_IMEI."
						, ".self::GEN_ATTR_MIN_TELEFONO_NRO."
						, ".self::GEN_ATTR_MIN_TITULAR_APELLIDO."
						, ".self::GEN_ATTR_MIN_TITULAR_NOMBRE."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('app_mov_dispositivo_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getCodigo()."'
						, '".$this->getSoDescripcion()."'
						, '".$this->getSoVersion()."'
						, '".$this->getMarca()."'
						, '".$this->getModelo()."'
						, '".$this->getImei()."'
						, '".$this->getTelefonoNro()."'
						, '".$this->getTitularApellido()."'
						, '".$this->getTitularNombre()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('app_mov_dispositivo_seq')";
            
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
                 
				 ".AppMovDispositivo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_SO_DESCRIPCION." = '".$this->getSoDescripcion()."'
						, ".self::GEN_ATTR_MIN_SO_VERSION." = '".$this->getSoVersion()."'
						, ".self::GEN_ATTR_MIN_MARCA." = '".$this->getMarca()."'
						, ".self::GEN_ATTR_MIN_MODELO." = '".$this->getModelo()."'
						, ".self::GEN_ATTR_MIN_IMEI." = '".$this->getImei()."'
						, ".self::GEN_ATTR_MIN_TELEFONO_NRO." = '".$this->getTelefonoNro()."'
						, ".self::GEN_ATTR_MIN_TITULAR_APELLIDO." = '".$this->getTitularApellido()."'
						, ".self::GEN_ATTR_MIN_TITULAR_NOMBRE." = '".$this->getTitularNombre()."'
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
						, ".self::GEN_ATTR_MIN_SO_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_SO_VERSION."
						, ".self::GEN_ATTR_MIN_MARCA."
						, ".self::GEN_ATTR_MIN_MODELO."
						, ".self::GEN_ATTR_MIN_IMEI."
						, ".self::GEN_ATTR_MIN_TELEFONO_NRO."
						, ".self::GEN_ATTR_MIN_TITULAR_APELLIDO."
						, ".self::GEN_ATTR_MIN_TITULAR_NOMBRE."
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
						, '".$this->getSoDescripcion()."'
						, '".$this->getSoVersion()."'
						, '".$this->getMarca()."'
						, '".$this->getModelo()."'
						, '".$this->getImei()."'
						, '".$this->getTelefonoNro()."'
						, '".$this->getTitularApellido()."'
						, '".$this->getTitularNombre()."'
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
                     
				 ".AppMovDispositivo::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_SO_DESCRIPCION." = '".$this->getSoDescripcion()."'
						, ".self::GEN_ATTR_MIN_SO_VERSION." = '".$this->getSoVersion()."'
						, ".self::GEN_ATTR_MIN_MARCA." = '".$this->getMarca()."'
						, ".self::GEN_ATTR_MIN_MODELO." = '".$this->getModelo()."'
						, ".self::GEN_ATTR_MIN_IMEI." = '".$this->getImei()."'
						, ".self::GEN_ATTR_MIN_TELEFONO_NRO." = '".$this->getTelefonoNro()."'
						, ".self::GEN_ATTR_MIN_TITULAR_APELLIDO." = '".$this->getTitularApellido()."'
						, ".self::GEN_ATTR_MIN_TITULAR_NOMBRE." = '".$this->getTitularNombre()."'
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
            $o = new AppMovDispositivo();
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

	/* Delete de BAppMovDispositivo */ 	
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
	
            // se elimina la coleccion de AppMovInstalacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AppMovInstalacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAppMovInstalacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AppMovActividads relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AppMovActividad::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAppMovActividads(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarAppMovDispositivo(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getAppMovDispositivos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = AppMovDispositivo::setAplicarFiltrosDeAlcance($criterio);

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
	
		$appmovdispositivos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $appmovdispositivo = new AppMovDispositivo();
                    $appmovdispositivo->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $appmovdispositivo->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$appmovdispositivo->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$appmovdispositivo->setSoDescripcion($fila[self::GEN_ATTR_MIN_SO_DESCRIPCION]);
			$appmovdispositivo->setSoVersion($fila[self::GEN_ATTR_MIN_SO_VERSION]);
			$appmovdispositivo->setMarca($fila[self::GEN_ATTR_MIN_MARCA]);
			$appmovdispositivo->setModelo($fila[self::GEN_ATTR_MIN_MODELO]);
			$appmovdispositivo->setImei($fila[self::GEN_ATTR_MIN_IMEI]);
			$appmovdispositivo->setTelefonoNro($fila[self::GEN_ATTR_MIN_TELEFONO_NRO]);
			$appmovdispositivo->setTitularApellido($fila[self::GEN_ATTR_MIN_TITULAR_APELLIDO]);
			$appmovdispositivo->setTitularNombre($fila[self::GEN_ATTR_MIN_TITULAR_NOMBRE]);
			$appmovdispositivo->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$appmovdispositivo->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$appmovdispositivo->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$appmovdispositivo->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$appmovdispositivo->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$appmovdispositivo->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$appmovdispositivo->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $appmovdispositivos[] = $appmovdispositivo;
		}
		
		return $appmovdispositivos;
	}	
	

	/* Método getAppMovDispositivos Habilitados */ 	
	static function getAppMovDispositivosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return AppMovDispositivo::getAppMovDispositivos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getAppMovDispositivos para listado de Backend */ 	
	static function getAppMovDispositivosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return AppMovDispositivo::getAppMovDispositivos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getAppMovDispositivosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = AppMovDispositivo::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = AppMovDispositivo::getAppMovDispositivos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getAppMovDispositivos filtrado para select */ 	
	static function getAppMovDispositivosCmbF($paginador = null, $criterio = null){
            $col = AppMovDispositivo::getAppMovDispositivos($paginador, $criterio);

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
            $url = 'app_mov_dispositivo_adm.php';
            $url_gestion = 'app_mov_dispositivo_gestion.php';
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
	

	/* Metodo getAppMovInstalacions */ 	
	public function getAppMovInstalacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AppMovInstalacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AppMovInstalacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AppMovInstalacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AppMovInstalacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AppMovInstalacion::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AppMovInstalacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AppMovInstalacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AppMovInstalacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $appmovinstalacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $appmovinstalacion = AppMovInstalacion::hidratarObjeto($fila);			
                $appmovinstalacions[] = $appmovinstalacion;
            }

            return $appmovinstalacions;
	}	
	

	/* Método getAppMovInstalacionsBloque para MasInfo */ 	
	public function getAppMovInstalacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAppMovInstalacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAppMovInstalacions Habilitados */ 	
	public function getAppMovInstalacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAppMovInstalacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAppMovInstalacion */ 	
	public function getAppMovInstalacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAppMovInstalacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AppMovInstalacion relacionadas */ 	
	public function deleteAppMovInstalacions(){
            $obs = $this->getAppMovInstalacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAppMovInstalacionsCmb() AppMovInstalacion relacionadas */ 	
	public function getAppMovInstalacionsCmb(){
            $c = new Criterio();
            $c->add(AppMovInstalacion::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovInstalacion::GEN_TABLA);
            $c->setCriterios();

            $os = AppMovInstalacion::getAppMovInstalacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AppMovModulos (Coleccion) relacionados a traves de AppMovInstalacion */ 	
	public function getAppMovModulosXAppMovInstalacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AppMovModulo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AppMovInstalacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AppMovInstalacion::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovModulo::GEN_TABLA);
            $c->addRealJoin(AppMovInstalacion::GEN_TABLA, AppMovInstalacion::GEN_ATTR_APP_MOV_MODULO_ID, AppMovModulo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AppMovModulo::getAppMovModulos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AppMovModulos relacionados a traves de AppMovInstalacion */ 	
	public function getCantidadAppMovModulosXAppMovInstalacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AppMovModulo::GEN_ATTR_ID);
            if($estado){
                $c->add(AppMovModulo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AppMovInstalacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AppMovInstalacion::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovModulo::GEN_TABLA);
            $c->addRealJoin(AppMovInstalacion::GEN_TABLA, AppMovInstalacion::GEN_ATTR_APP_MOV_MODULO_ID, AppMovModulo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AppMovModulo::getAppMovModulos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AppMovModulo (Objeto) relacionado a traves de AppMovInstalacion */ 	
	public function getAppMovModuloXAppMovInstalacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAppMovModulosXAppMovInstalacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAppMovActividads */ 	
	public function getAppMovActividads($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AppMovActividad::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AppMovActividad::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AppMovActividad::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(AppMovActividad::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AppMovActividad::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AppMovActividad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AppMovActividad::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AppMovActividad::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $appmovactividads = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $appmovactividad = AppMovActividad::hidratarObjeto($fila);			
                $appmovactividads[] = $appmovactividad;
            }

            return $appmovactividads;
	}	
	

	/* Método getAppMovActividadsBloque para MasInfo */ 	
	public function getAppMovActividadsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAppMovActividads($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAppMovActividads Habilitados */ 	
	public function getAppMovActividadsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAppMovActividads($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAppMovActividad */ 	
	public function getAppMovActividad($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAppMovActividads($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AppMovActividad relacionadas */ 	
	public function deleteAppMovActividads(){
            $obs = $this->getAppMovActividads();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAppMovActividadsCmb() AppMovActividad relacionadas */ 	
	public function getAppMovActividadsCmb(){
            $c = new Criterio();
            $c->add(AppMovActividad::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovActividad::GEN_TABLA);
            $c->setCriterios();

            $os = AppMovActividad::getAppMovActividadsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AppMovInstalacions (Coleccion) relacionados a traves de AppMovActividad */ 	
	public function getAppMovInstalacionsXAppMovActividad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AppMovInstalacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AppMovActividad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AppMovActividad::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovInstalacion::GEN_TABLA);
            $c->addRealJoin(AppMovActividad::GEN_TABLA, AppMovActividad::GEN_ATTR_APP_MOV_INSTALACION_ID, AppMovInstalacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AppMovInstalacion::getAppMovInstalacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AppMovInstalacions relacionados a traves de AppMovActividad */ 	
	public function getCantidadAppMovInstalacionsXAppMovActividad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AppMovInstalacion::GEN_ATTR_ID);
            if($estado){
                $c->add(AppMovInstalacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AppMovActividad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AppMovActividad::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovInstalacion::GEN_TABLA);
            $c->addRealJoin(AppMovActividad::GEN_TABLA, AppMovActividad::GEN_ATTR_APP_MOV_INSTALACION_ID, AppMovInstalacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AppMovInstalacion::getAppMovInstalacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AppMovInstalacion (Objeto) relacionado a traves de AppMovActividad */ 	
	public function getAppMovInstalacionXAppMovActividad($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAppMovInstalacionsXAppMovActividad($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM app_mov_dispositivo'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'app_mov_dispositivo';");
            
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

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'so_descripcion' */ 	
	static function getOxSoDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SO_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'so_descripcion' */ 	
	static function getOsxSoDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SO_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'so_version' */ 	
	static function getOxSoVersion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SO_VERSION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'so_version' */ 	
	static function getOsxSoVersion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SO_VERSION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'marca' */ 	
	static function getOxMarca($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MARCA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'marca' */ 	
	static function getOsxMarca($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MARCA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modelo' */ 	
	static function getOxModelo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODELO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'modelo' */ 	
	static function getOsxModelo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODELO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'imei' */ 	
	static function getOxImei($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMEI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'imei' */ 	
	static function getOsxImei($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IMEI, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono_nro' */ 	
	static function getOxTelefonoNro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO_NRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'telefono_nro' */ 	
	static function getOsxTelefonoNro($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO_NRO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'titular_apellido' */ 	
	static function getOxTitularApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TITULAR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'titular_apellido' */ 	
	static function getOsxTitularApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TITULAR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'titular_nombre' */ 	
	static function getOxTitularNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TITULAR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'titular_nombre' */ 	
	static function getOsxTitularNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TITULAR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos(null, $criterio);
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

            $obs = self::getAppMovDispositivos($paginador, $criterio);
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

            $obs = self::getAppMovDispositivos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'app_mov_dispositivo_adm');
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
                $c->addTabla(AppMovDispositivo::GEN_TABLA);
                $c->addOrden(AppMovDispositivo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $app_mov_dispositivos = AppMovDispositivo::getAppMovDispositivos(null, $c);

                $arr = array();
                foreach($app_mov_dispositivos as $app_mov_dispositivo){
                    $descripcion = $app_mov_dispositivo->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>