<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BUsUsuario
{ 
	
	const SES_PAGINACION = 'adm_ususuario_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_ususuario_paginas_registros';
	const SES_CRITERIOS = 'adm_ususuario_criterios';
	
	const GEN_CLASE = 'UsUsuario';
	const GEN_TABLA = 'us_usuario';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BUsUsuario */ 
	const GEN_ATTR_ID = 'us_usuario.id';
	const GEN_ATTR_GRAL_LENGUAJE_ID = 'us_usuario.gral_lenguaje_id';
	const GEN_ATTR_DESCRIPCION = 'us_usuario.descripcion';
	const GEN_ATTR_APELLIDO = 'us_usuario.apellido';
	const GEN_ATTR_NOMBRE = 'us_usuario.nombre';
	const GEN_ATTR_USUARIO = 'us_usuario.usuario';
	const GEN_ATTR_CODIGO = 'us_usuario.codigo';
	const GEN_ATTR_HASH = 'us_usuario.hash';
	const GEN_ATTR_EMAIL = 'us_usuario.email';
	const GEN_ATTR_TELEFONO = 'us_usuario.telefono';
	const GEN_ATTR_CELULAR = 'us_usuario.celular';
	const GEN_ATTR_ABSOLUTO = 'us_usuario.absoluto';
	const GEN_ATTR_OBSERVACION = 'us_usuario.observacion';
	const GEN_ATTR_ORDEN = 'us_usuario.orden';
	const GEN_ATTR_ACTIVADO = 'us_usuario.activado';
	const GEN_ATTR_ESTADO = 'us_usuario.estado';
	const GEN_ATTR_CREADO = 'us_usuario.creado';
	const GEN_ATTR_CREADO_POR = 'us_usuario.creado_por';
	const GEN_ATTR_MODIFICADO = 'us_usuario.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'us_usuario.modificado_por';

	/* Constantes de Atributos Min de BUsUsuario */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_GRAL_LENGUAJE_ID = 'gral_lenguaje_id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_APELLIDO = 'apellido';
	const GEN_ATTR_MIN_NOMBRE = 'nombre';
	const GEN_ATTR_MIN_USUARIO = 'usuario';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_HASH = 'hash';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_CELULAR = 'celular';
	const GEN_ATTR_MIN_ABSOLUTO = 'absoluto';
	const GEN_ATTR_MIN_OBSERVACION = 'observacion';
	const GEN_ATTR_MIN_ORDEN = 'orden';
	const GEN_ATTR_MIN_ACTIVADO = 'activado';
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
	

	/* Atributos de BUsUsuario */ 
	private $id;
	private $gral_lenguaje_id;
	private $descripcion;
	private $apellido;
	private $nombre;
	private $usuario;
	private $codigo;
	private $hash;
	private $email;
	private $telefono;
	private $celular;
	private $absoluto;
	private $observacion;
	private $orden;
	private $activado;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BUsUsuario */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getGralLenguajeId(){ if(isset($this->gral_lenguaje_id)){ return $this->gral_lenguaje_id; }else{ return 'null'; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getApellido(){ if(isset($this->apellido)){ return $this->apellido; }else{ return ''; } }
	public function getNombre(){ if(isset($this->nombre)){ return $this->nombre; }else{ return ''; } }
	public function getUsuario(){ if(isset($this->usuario)){ return $this->usuario; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getHash(){ if(isset($this->hash)){ return $this->hash; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getCelular(){ if(isset($this->celular)){ return $this->celular; }else{ return ''; } }
	public function getAbsoluto(){ if(isset($this->absoluto)){ return $this->absoluto; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getActivado(){ if(isset($this->activado)){ return $this->activado; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BUsUsuario */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_GRAL_LENGUAJE_ID."
				, ".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_APELLIDO."
				, ".self::GEN_ATTR_NOMBRE."
				, ".self::GEN_ATTR_USUARIO."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_HASH."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_CELULAR."
				, ".self::GEN_ATTR_ABSOLUTO."
				, ".self::GEN_ATTR_OBSERVACION."
				, ".self::GEN_ATTR_ORDEN."
				, ".self::GEN_ATTR_ACTIVADO."
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
                    				$this->setGralLenguajeId($fila[self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID]);
				$this->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
				$this->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
				$this->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
				$this->setUsuario($fila[self::GEN_ATTR_MIN_USUARIO]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setHash($fila[self::GEN_ATTR_MIN_HASH]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setCelular($fila[self::GEN_ATTR_MIN_CELULAR]);
				$this->setAbsoluto($fila[self::GEN_ATTR_MIN_ABSOLUTO]);
				$this->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
				$this->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
				$this->setActivado($fila[self::GEN_ATTR_MIN_ACTIVADO]);
				$this->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
				$this->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
				$this->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
				$this->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
				$this->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
    
                }
            }
	}
	public function setGralLenguajeId($v){ $this->gral_lenguaje_id = $v; }
	public function setDescripcion($v){ $this->descripcion = $v; }
	public function setApellido($v){ $this->apellido = $v; }
	public function setNombre($v){ $this->nombre = $v; }
	public function setUsuario($v){ $this->usuario = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setHash($v){ $this->hash = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setCelular($v){ $this->celular = $v; }
	public function setAbsoluto($v){ $this->absoluto = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setActivado($v){ $this->activado = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new UsUsuario();
            $o->setId($fila[UsUsuario::GEN_ATTR_MIN_ID], false);
            
			$o->setGralLenguajeId($fila[self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID]);
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$o->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$o->setUsuario($fila[self::GEN_ATTR_MIN_USUARIO]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setHash($fila[self::GEN_ATTR_MIN_HASH]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setCelular($fila[self::GEN_ATTR_MIN_CELULAR]);
			$o->setAbsoluto($fila[self::GEN_ATTR_MIN_ABSOLUTO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setActivado($fila[self::GEN_ATTR_MIN_ACTIVADO]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BUsUsuario */ 	
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

	/* Cambia el estado de BUsUsuario */ 	
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

	/* Save de BUsUsuario */ 	
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_USUARIO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_HASH."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_CELULAR."
						, ".self::GEN_ATTR_MIN_ABSOLUTO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ACTIVADO."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('us_usuario_seq'), 
                ".$this->getGralLenguajeId()."
						, '".$this->getDescripcion()."'
						, '".$this->getApellido()."'
						, '".$this->getNombre()."'
						, '".$this->getUsuario()."'
						, '".$this->getCodigo()."'
						, '".$this->getHash()."'
						, '".$this->getEmail()."'
						, '".$this->getTelefono()."'
						, '".$this->getCelular()."'
						, ".$this->getAbsoluto()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getActivado()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('us_usuario_seq')";
            
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
                 
				 ".UsUsuario::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID." = ".$this->getGralLenguajeId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_USUARIO." = '".$this->getUsuario()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_HASH." = '".$this->getHash()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_CELULAR." = '".$this->getCelular()."'
						, ".self::GEN_ATTR_MIN_ABSOLUTO." = ".$this->getAbsoluto()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_ORDEN." = ".$this->getOrden()."
						, ".self::GEN_ATTR_MIN_ACTIVADO." = ".$this->getActivado()."
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
				 INSERT INTO ".self::GEN_TABLA." (".self::GEN_ATTR_MIN_ID.", ".self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID."
						, ".self::GEN_ATTR_MIN_DESCRIPCION."
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_USUARIO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_HASH."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_CELULAR."
						, ".self::GEN_ATTR_MIN_ABSOLUTO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ACTIVADO."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                ".$this->getGralLenguajeId()."
						, '".$this->getDescripcion()."'
						, '".$this->getApellido()."'
						, '".$this->getNombre()."'
						, '".$this->getUsuario()."'
						, '".$this->getCodigo()."'
						, '".$this->getHash()."'
						, '".$this->getEmail()."'
						, '".$this->getTelefono()."'
						, '".$this->getCelular()."'
						, ".$this->getAbsoluto()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getActivado()."
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
                     
				 ".UsUsuario::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID." = ".$this->getGralLenguajeId()."
						, ".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_USUARIO." = '".$this->getUsuario()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_HASH." = '".$this->getHash()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_CELULAR." = '".$this->getCelular()."'
						, ".self::GEN_ATTR_MIN_ABSOLUTO." = ".$this->getAbsoluto()."
						, ".self::GEN_ATTR_MIN_OBSERVACION." = '".$this->getObservacion()."'
						, ".self::GEN_ATTR_MIN_ORDEN." = ".$this->getOrden()."
						, ".self::GEN_ATTR_MIN_ACTIVADO." = ".$this->getActivado()."
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
            $o = new UsUsuario();
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

	/* Delete de BUsUsuario */ 	
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
	
            // se elimina la coleccion de UsAgrupados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsAgrupado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsAgrupados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de UsAcreditados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsAcreditado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsAcreditados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de UsUsuarioDatos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsUsuarioDato::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsUsuarioDatos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de UsUsuarioAuditorias relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsUsuarioAuditoria::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsUsuarioAuditorias(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de UsMensajes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsMensaje::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsMensajes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de UsMemos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsMemo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsMemos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de UsClaves relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsClave::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsClaves(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de UsLogins relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsLogin::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsLogins(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de UsNavegacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(UsNavegacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getUsNavegacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralZonaUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralZonaUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralZonaUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCentroCostoUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCentroCostoUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCentroCostoUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PrvProveedorUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PrvProveedorUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPrvProveedorUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PanPanolUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PanPanolUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPanPanolUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdiPedidoDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdiPedidoDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdiPedidoDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidoDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedidoDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidoDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCotizacionDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCotizacionDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCotizacionDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcionDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcionDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcionDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroRecepcionUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroRecepcionUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroRecepcionUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroPedidoUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroPedidoUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroPedidoUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcReclamoDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcReclamoDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcReclamoDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de NovNovedadDestinatarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(NovNovedadDestinatario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getNovNovedadDestinatarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de NovNovedadObservados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(NovNovedadObservado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getNovNovedadObservados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de NovNovedadLeidos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(NovNovedadLeido::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getNovNovedadLeidos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AltAlertaUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AltAlertaUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAltAlertaUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AltControlUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AltControlUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAltControlUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de FndCajeroUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(FndCajeroUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getFndCajeroUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de AppMovInstalacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(AppMovInstalacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getAppMovInstalacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de OpeChoferUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(OpeChoferUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getOpeChoferUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoMensajes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoMensaje::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoMensajes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonaUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersonaUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonaUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PlnJornadaUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PlnJornadaUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPlnJornadaUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de OpeOperarioUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(OpeOperarioUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getOpeOperarioUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarUsUsuario(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = UsUsuario::setAplicarFiltrosDeAlcance($criterio);

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
	
		$ususuarios = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $ususuario = new UsUsuario();
                    $ususuario->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $ususuario->setGralLenguajeId($fila[self::GEN_ATTR_MIN_GRAL_LENGUAJE_ID]);
			$ususuario->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$ususuario->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$ususuario->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$ususuario->setUsuario($fila[self::GEN_ATTR_MIN_USUARIO]);
			$ususuario->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$ususuario->setHash($fila[self::GEN_ATTR_MIN_HASH]);
			$ususuario->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$ususuario->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$ususuario->setCelular($fila[self::GEN_ATTR_MIN_CELULAR]);
			$ususuario->setAbsoluto($fila[self::GEN_ATTR_MIN_ABSOLUTO]);
			$ususuario->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$ususuario->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$ususuario->setActivado($fila[self::GEN_ATTR_MIN_ACTIVADO]);
			$ususuario->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$ususuario->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$ususuario->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$ususuario->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$ususuario->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $ususuarios[] = $ususuario;
		}
		
		return $ususuarios;
	}	
	

	/* Método getUsUsuarios Habilitados */ 	
	static function getUsUsuariosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return UsUsuario::getUsUsuarios($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getUsUsuarios para listado de Backend */ 	
	static function getUsUsuariosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return UsUsuario::getUsUsuarios($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getUsUsuariosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = UsUsuario::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = UsUsuario::getUsUsuarios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getUsUsuarios filtrado para select */ 	
	static function getUsUsuariosCmbF($paginador = null, $criterio = null){
            $col = UsUsuario::getUsUsuarios($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getUsUsuarios filtrado por una coleccion de objetos foraneos de GralLenguaje */ 	
	static function getUsUsuariosXGralLenguajes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(UsUsuario::GEN_ATTR_GRAL_LENGUAJE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addOrden(UsUsuario::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = UsUsuario::getUsUsuarios($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralLenguajeId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'us_usuario_adm.php';
            $url_gestion = 'us_usuario_gestion.php';
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
	

	/* Metodo getUsAgrupados */ 	
	public function getUsAgrupados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsAgrupado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsAgrupado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsAgrupado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsAgrupado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsAgrupado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsAgrupado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsAgrupado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $usagrupados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $usagrupado = UsAgrupado::hidratarObjeto($fila);			
                $usagrupados[] = $usagrupado;
            }

            return $usagrupados;
	}	
	

	/* Método getUsAgrupadosBloque para MasInfo */ 	
	public function getUsAgrupadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsAgrupados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsAgrupados Habilitados */ 	
	public function getUsAgrupadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsAgrupados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsAgrupado */ 	
	public function getUsAgrupado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsAgrupados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsAgrupado relacionadas */ 	
	public function deleteUsAgrupados(){
            $obs = $this->getUsAgrupados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsAgrupadosCmb() UsAgrupado relacionadas */ 	
	public function getUsAgrupadosCmb(){
            $c = new Criterio();
            $c->add(UsAgrupado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsAgrupado::GEN_TABLA);
            $c->setCriterios();

            $os = UsAgrupado::getUsAgrupadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsGrupos (Coleccion) relacionados a traves de UsAgrupado */ 	
	public function getUsGruposXUsAgrupado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsGrupo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(UsAgrupado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(UsAgrupado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsGrupo::GEN_TABLA);
            $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_GRUPO_ID, UsGrupo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsGrupo::getUsGrupos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsGrupos relacionados a traves de UsAgrupado */ 	
	public function getCantidadUsGruposXUsAgrupado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsGrupo::GEN_ATTR_ID);
            if($estado){
                $c->add(UsGrupo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(UsAgrupado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(UsAgrupado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsGrupo::GEN_TABLA);
            $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_GRUPO_ID, UsGrupo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsGrupo::getUsGrupos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsGrupo (Objeto) relacionado a traves de UsAgrupado */ 	
	public function getUsGrupoXUsAgrupado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsGruposXUsAgrupado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getUsAcreditados */ 	
	public function getUsAcreditados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsAcreditado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsAcreditado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsAcreditado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsAcreditado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsAcreditado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsAcreditado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsAcreditado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $usacreditados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $usacreditado = UsAcreditado::hidratarObjeto($fila);			
                $usacreditados[] = $usacreditado;
            }

            return $usacreditados;
	}	
	

	/* Método getUsAcreditadosBloque para MasInfo */ 	
	public function getUsAcreditadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsAcreditados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsAcreditados Habilitados */ 	
	public function getUsAcreditadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsAcreditados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsAcreditado */ 	
	public function getUsAcreditado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsAcreditados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsAcreditado relacionadas */ 	
	public function deleteUsAcreditados(){
            $obs = $this->getUsAcreditados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsAcreditadosCmb() UsAcreditado relacionadas */ 	
	public function getUsAcreditadosCmb(){
            $c = new Criterio();
            $c->add(UsAcreditado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsAcreditado::GEN_TABLA);
            $c->setCriterios();

            $os = UsAcreditado::getUsAcreditadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsCredencials (Coleccion) relacionados a traves de UsAcreditado */ 	
	public function getUsCredencialsXUsAcreditado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsCredencial::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(UsAcreditado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(UsAcreditado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsCredencial::GEN_TABLA);
            $c->addRealJoin(UsAcreditado::GEN_TABLA, UsAcreditado::GEN_ATTR_US_CREDENCIAL_ID, UsCredencial::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsCredencial::getUsCredencials($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsCredencials relacionados a traves de UsAcreditado */ 	
	public function getCantidadUsCredencialsXUsAcreditado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsCredencial::GEN_ATTR_ID);
            if($estado){
                $c->add(UsCredencial::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(UsAcreditado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(UsAcreditado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsCredencial::GEN_TABLA);
            $c->addRealJoin(UsAcreditado::GEN_TABLA, UsAcreditado::GEN_ATTR_US_CREDENCIAL_ID, UsCredencial::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsCredencial::getUsCredencials($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsCredencial (Objeto) relacionado a traves de UsAcreditado */ 	
	public function getUsCredencialXUsAcreditado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsCredencialsXUsAcreditado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getUsUsuarioDatos */ 	
	public function getUsUsuarioDatos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsUsuarioDato::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsUsuarioDato::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsUsuarioDato::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(UsUsuarioDato::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsUsuarioDato::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsUsuarioDato::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsUsuarioDato::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsUsuarioDato::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ususuariodatos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ususuariodato = UsUsuarioDato::hidratarObjeto($fila);			
                $ususuariodatos[] = $ususuariodato;
            }

            return $ususuariodatos;
	}	
	

	/* Método getUsUsuarioDatosBloque para MasInfo */ 	
	public function getUsUsuarioDatosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsUsuarioDatos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsUsuarioDatos Habilitados */ 	
	public function getUsUsuarioDatosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsUsuarioDatos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsUsuarioDato */ 	
	public function getUsUsuarioDato($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsUsuarioDatos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsUsuarioDato relacionadas */ 	
	public function deleteUsUsuarioDatos(){
            $obs = $this->getUsUsuarioDatos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsUsuarioDatosCmb() UsUsuarioDato relacionadas */ 	
	public function getUsUsuarioDatosCmb(){
            $c = new Criterio();
            $c->add(UsUsuarioDato::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuarioDato::GEN_TABLA);
            $c->setCriterios();

            $os = UsUsuarioDato::getUsUsuarioDatosCmbF(null, $c);
            return $os;
	}

	/* Metodo getUsUsuarioAuditorias */ 	
	public function getUsUsuarioAuditorias($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsUsuarioAuditoria::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsUsuarioAuditoria::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsUsuarioAuditoria::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(UsUsuarioAuditoria::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsUsuarioAuditoria::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsUsuarioAuditoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsUsuarioAuditoria::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsUsuarioAuditoria::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ususuarioauditorias = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ususuarioauditoria = UsUsuarioAuditoria::hidratarObjeto($fila);			
                $ususuarioauditorias[] = $ususuarioauditoria;
            }

            return $ususuarioauditorias;
	}	
	

	/* Método getUsUsuarioAuditoriasBloque para MasInfo */ 	
	public function getUsUsuarioAuditoriasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsUsuarioAuditorias($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsUsuarioAuditorias Habilitados */ 	
	public function getUsUsuarioAuditoriasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsUsuarioAuditorias($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsUsuarioAuditoria */ 	
	public function getUsUsuarioAuditoria($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsUsuarioAuditorias($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsUsuarioAuditoria relacionadas */ 	
	public function deleteUsUsuarioAuditorias(){
            $obs = $this->getUsUsuarioAuditorias();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsUsuarioAuditoriasCmb() UsUsuarioAuditoria relacionadas */ 	
	public function getUsUsuarioAuditoriasCmb(){
            $c = new Criterio();
            $c->add(UsUsuarioAuditoria::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuarioAuditoria::GEN_TABLA);
            $c->setCriterios();

            $os = UsUsuarioAuditoria::getUsUsuarioAuditoriasCmbF(null, $c);
            return $os;
	}

	/* Metodo getUsMensajes */ 	
	public function getUsMensajes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsMensaje::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsMensaje::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsMensaje::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(UsMensaje::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsMensaje::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsMensaje::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsMensaje::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $usmensajes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $usmensaje = UsMensaje::hidratarObjeto($fila);			
                $usmensajes[] = $usmensaje;
            }

            return $usmensajes;
	}	
	

	/* Método getUsMensajesBloque para MasInfo */ 	
	public function getUsMensajesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsMensajes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsMensajes Habilitados */ 	
	public function getUsMensajesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsMensajes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsMensaje */ 	
	public function getUsMensaje($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsMensajes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsMensaje relacionadas */ 	
	public function deleteUsMensajes(){
            $obs = $this->getUsMensajes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsMensajesCmb() UsMensaje relacionadas */ 	
	public function getUsMensajesCmb(){
            $c = new Criterio();
            $c->add(UsMensaje::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsMensaje::GEN_TABLA);
            $c->setCriterios();

            $os = UsMensaje::getUsMensajesCmbF(null, $c);
            return $os;
	}

	/* Metodo getUsMemos */ 	
	public function getUsMemos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsMemo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsMemo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsMemo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(UsMemo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsMemo::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsMemo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsMemo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsMemo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $usmemos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $usmemo = UsMemo::hidratarObjeto($fila);			
                $usmemos[] = $usmemo;
            }

            return $usmemos;
	}	
	

	/* Método getUsMemosBloque para MasInfo */ 	
	public function getUsMemosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsMemos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsMemos Habilitados */ 	
	public function getUsMemosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsMemos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsMemo */ 	
	public function getUsMemo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsMemos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsMemo relacionadas */ 	
	public function deleteUsMemos(){
            $obs = $this->getUsMemos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsMemosCmb() UsMemo relacionadas */ 	
	public function getUsMemosCmb(){
            $c = new Criterio();
            $c->add(UsMemo::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsMemo::GEN_TABLA);
            $c->setCriterios();

            $os = UsMemo::getUsMemosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsMemoTipoEstados (Coleccion) relacionados a traves de UsMemo */ 	
	public function getUsMemoTipoEstadosXUsMemo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsMemoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(UsMemo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(UsMemo::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsMemoTipoEstado::GEN_TABLA);
            $c->addRealJoin(UsMemo::GEN_TABLA, UsMemo::GEN_ATTR_US_MEMO_TIPO_ESTADO_ID, UsMemoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsMemoTipoEstado::getUsMemoTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsMemoTipoEstados relacionados a traves de UsMemo */ 	
	public function getCantidadUsMemoTipoEstadosXUsMemo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsMemoTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(UsMemoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(UsMemo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(UsMemo::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsMemoTipoEstado::GEN_TABLA);
            $c->addRealJoin(UsMemo::GEN_TABLA, UsMemo::GEN_ATTR_US_MEMO_TIPO_ESTADO_ID, UsMemoTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsMemoTipoEstado::getUsMemoTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsMemoTipoEstado (Objeto) relacionado a traves de UsMemo */ 	
	public function getUsMemoTipoEstadoXUsMemo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsMemoTipoEstadosXUsMemo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getUsClaves */ 	
	public function getUsClaves($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsClave::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsClave::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsClave::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsClave::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsClave::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsClave::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $usclaves = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $usclave = UsClave::hidratarObjeto($fila);			
                $usclaves[] = $usclave;
            }

            return $usclaves;
	}	
	

	/* Método getUsClavesBloque para MasInfo */ 	
	public function getUsClavesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsClaves($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsClaves Habilitados */ 	
	public function getUsClavesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsClaves($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsClave */ 	
	public function getUsClave($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsClaves($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsClave relacionadas */ 	
	public function deleteUsClaves(){
            $obs = $this->getUsClaves();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsClavesCmb() UsClave relacionadas */ 	
	public function getUsClavesCmb(){
            $c = new Criterio();
            $c->add(UsClave::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsClave::GEN_TABLA);
            $c->setCriterios();

            $os = UsClave::getUsClavesCmbF(null, $c);
            return $os;
	}

	/* Metodo getUsLogins */ 	
	public function getUsLogins($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsLogin::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsLogin::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsLogin::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(UsLogin::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsLogin::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsLogin::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsLogin::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsLogin::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $uslogins = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $uslogin = UsLogin::hidratarObjeto($fila);			
                $uslogins[] = $uslogin;
            }

            return $uslogins;
	}	
	

	/* Método getUsLoginsBloque para MasInfo */ 	
	public function getUsLoginsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsLogins($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsLogins Habilitados */ 	
	public function getUsLoginsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsLogins($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsLogin */ 	
	public function getUsLogin($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsLogins($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsLogin relacionadas */ 	
	public function deleteUsLogins(){
            $obs = $this->getUsLogins();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsLoginsCmb() UsLogin relacionadas */ 	
	public function getUsLoginsCmb(){
            $c = new Criterio();
            $c->add(UsLogin::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsLogin::GEN_TABLA);
            $c->setCriterios();

            $os = UsLogin::getUsLoginsCmbF(null, $c);
            return $os;
	}

	/* Metodo getUsNavegacions */ 	
	public function getUsNavegacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(UsNavegacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(UsNavegacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(UsNavegacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(UsNavegacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(UsNavegacion::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(UsNavegacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(UsNavegacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".UsNavegacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $usnavegacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $usnavegacion = UsNavegacion::hidratarObjeto($fila);			
                $usnavegacions[] = $usnavegacion;
            }

            return $usnavegacions;
	}	
	

	/* Método getUsNavegacionsBloque para MasInfo */ 	
	public function getUsNavegacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getUsNavegacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getUsNavegacions Habilitados */ 	
	public function getUsNavegacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getUsNavegacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getUsNavegacion */ 	
	public function getUsNavegacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getUsNavegacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de UsNavegacion relacionadas */ 	
	public function deleteUsNavegacions(){
            $obs = $this->getUsNavegacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getUsNavegacionsCmb() UsNavegacion relacionadas */ 	
	public function getUsNavegacionsCmb(){
            $c = new Criterio();
            $c->add(UsNavegacion::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsNavegacion::GEN_TABLA);
            $c->setCriterios();

            $os = UsNavegacion::getUsNavegacionsCmbF(null, $c);
            return $os;
	}

	/* Metodo getGralSucursalUsUsuarios */ 	
	public function getGralSucursalUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalUsUsuario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalususuario = GralSucursalUsUsuario::hidratarObjeto($fila);			
                $gralsucursalususuarios[] = $gralsucursalususuario;
            }

            return $gralsucursalususuarios;
	}	
	

	/* Método getGralSucursalUsUsuariosBloque para MasInfo */ 	
	public function getGralSucursalUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalUsUsuarios Habilitados */ 	
	public function getGralSucursalUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalUsUsuario */ 	
	public function getGralSucursalUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalUsUsuario relacionadas */ 	
	public function deleteGralSucursalUsUsuarios(){
            $obs = $this->getGralSucursalUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalUsUsuariosCmb() GralSucursalUsUsuario relacionadas */ 	
	public function getGralSucursalUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(GralSucursalUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalUsUsuario::getGralSucursalUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursals (Coleccion) relacionados a traves de GralSucursalUsUsuario */ 	
	public function getGralSucursalsXGralSucursalUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalUsUsuario::GEN_TABLA, GralSucursalUsUsuario::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursals relacionados a traves de GralSucursalUsUsuario */ 	
	public function getCantidadGralSucursalsXGralSucursalUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursal::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalUsUsuario::GEN_TABLA, GralSucursalUsUsuario::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursal (Objeto) relacionado a traves de GralSucursalUsUsuario */ 	
	public function getGralSucursalXGralSucursalUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalsXGralSucursalUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralZonaUsUsuarios */ 	
	public function getGralZonaUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralZonaUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralZonaUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralZonaUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralZonaUsUsuario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralZonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralZonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralZonaUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralZonaUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralzonaususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralzonaususuario = GralZonaUsUsuario::hidratarObjeto($fila);			
                $gralzonaususuarios[] = $gralzonaususuario;
            }

            return $gralzonaususuarios;
	}	
	

	/* Método getGralZonaUsUsuariosBloque para MasInfo */ 	
	public function getGralZonaUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralZonaUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralZonaUsUsuarios Habilitados */ 	
	public function getGralZonaUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralZonaUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralZonaUsUsuario */ 	
	public function getGralZonaUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralZonaUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralZonaUsUsuario relacionadas */ 	
	public function deleteGralZonaUsUsuarios(){
            $obs = $this->getGralZonaUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralZonaUsUsuariosCmb() GralZonaUsUsuario relacionadas */ 	
	public function getGralZonaUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(GralZonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralZonaUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = GralZonaUsUsuario::getGralZonaUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralZonas (Coleccion) relacionados a traves de GralZonaUsUsuario */ 	
	public function getGralZonasXGralZonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralZona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralZonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralZonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralZona::GEN_TABLA);
            $c->addRealJoin(GralZonaUsUsuario::GEN_TABLA, GralZonaUsUsuario::GEN_ATTR_GRAL_ZONA_ID, GralZona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralZona::getGralZonas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralZonas relacionados a traves de GralZonaUsUsuario */ 	
	public function getCantidadGralZonasXGralZonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralZona::GEN_ATTR_ID);
            if($estado){
                $c->add(GralZona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralZonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralZonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralZona::GEN_TABLA);
            $c->addRealJoin(GralZonaUsUsuario::GEN_TABLA, GralZonaUsUsuario::GEN_ATTR_GRAL_ZONA_ID, GralZona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralZona::getGralZonas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralZona (Objeto) relacionado a traves de GralZonaUsUsuario */ 	
	public function getGralZonaXGralZonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralZonasXGralZonaUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCentroCostoUsUsuarios */ 	
	public function getGralCentroCostoUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCentroCostoUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCentroCostoUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCentroCostoUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCentroCostoUsUsuario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCentroCostoUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCentroCostoUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCentroCostoUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCentroCostoUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcentrocostoususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcentrocostoususuario = GralCentroCostoUsUsuario::hidratarObjeto($fila);			
                $gralcentrocostoususuarios[] = $gralcentrocostoususuario;
            }

            return $gralcentrocostoususuarios;
	}	
	

	/* Método getGralCentroCostoUsUsuariosBloque para MasInfo */ 	
	public function getGralCentroCostoUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCentroCostoUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCentroCostoUsUsuarios Habilitados */ 	
	public function getGralCentroCostoUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCentroCostoUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCentroCostoUsUsuario */ 	
	public function getGralCentroCostoUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCentroCostoUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCentroCostoUsUsuario relacionadas */ 	
	public function deleteGralCentroCostoUsUsuarios(){
            $obs = $this->getGralCentroCostoUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCentroCostoUsUsuariosCmb() GralCentroCostoUsUsuario relacionadas */ 	
	public function getGralCentroCostoUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(GralCentroCostoUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCostoUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = GralCentroCostoUsUsuario::getGralCentroCostoUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralCentroCostos (Coleccion) relacionados a traves de GralCentroCostoUsUsuario */ 	
	public function getGralCentroCostosXGralCentroCostoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCostoUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCostoUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(GralCentroCostoUsUsuario::GEN_TABLA, GralCentroCostoUsUsuario::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralCentroCostos relacionados a traves de GralCentroCostoUsUsuario */ 	
	public function getCantidadGralCentroCostosXGralCentroCostoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralCentroCosto::GEN_ATTR_ID);
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCostoUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCostoUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(GralCentroCostoUsUsuario::GEN_TABLA, GralCentroCostoUsUsuario::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralCentroCosto (Objeto) relacionado a traves de GralCentroCostoUsUsuario */ 	
	public function getGralCentroCostoXGralCentroCostoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralCentroCostosXGralCentroCostoUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPrvProveedorUsUsuarios */ 	
	public function getPrvProveedorUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PrvProveedorUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PrvProveedorUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PrvProveedorUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PrvProveedorUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PrvProveedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PrvProveedorUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PrvProveedorUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $prvproveedorususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $prvproveedorususuario = PrvProveedorUsUsuario::hidratarObjeto($fila);			
                $prvproveedorususuarios[] = $prvproveedorususuario;
            }

            return $prvproveedorususuarios;
	}	
	

	/* Método getPrvProveedorUsUsuariosBloque para MasInfo */ 	
	public function getPrvProveedorUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPrvProveedorUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPrvProveedorUsUsuarios Habilitados */ 	
	public function getPrvProveedorUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPrvProveedorUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPrvProveedorUsUsuario */ 	
	public function getPrvProveedorUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPrvProveedorUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PrvProveedorUsUsuario relacionadas */ 	
	public function deletePrvProveedorUsUsuarios(){
            $obs = $this->getPrvProveedorUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPrvProveedorUsUsuariosCmb() PrvProveedorUsUsuario relacionadas */ 	
	public function getPrvProveedorUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(PrvProveedorUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedorUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PrvProveedorUsUsuario::getPrvProveedorUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PrvProveedorUsUsuario */ 	
	public function getPrvProveedorsXPrvProveedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvProveedorUsUsuario::GEN_TABLA, PrvProveedorUsUsuario::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PrvProveedorUsUsuario */ 	
	public function getCantidadPrvProveedorsXPrvProveedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PrvProveedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PrvProveedorUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvProveedorUsUsuario::GEN_TABLA, PrvProveedorUsUsuario::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PrvProveedorUsUsuario */ 	
	public function getPrvProveedorXPrvProveedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPrvProveedorUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPanPanolUsUsuarios */ 	
	public function getPanPanolUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PanPanolUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PanPanolUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PanPanolUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PanPanolUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PanPanolUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PanPanolUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PanPanolUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $panpanolususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $panpanolususuario = PanPanolUsUsuario::hidratarObjeto($fila);			
                $panpanolususuarios[] = $panpanolususuario;
            }

            return $panpanolususuarios;
	}	
	

	/* Método getPanPanolUsUsuariosBloque para MasInfo */ 	
	public function getPanPanolUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPanPanolUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPanPanolUsUsuarios Habilitados */ 	
	public function getPanPanolUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPanPanolUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPanPanolUsUsuario */ 	
	public function getPanPanolUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPanPanolUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PanPanolUsUsuario relacionadas */ 	
	public function deletePanPanolUsUsuarios(){
            $obs = $this->getPanPanolUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPanPanolUsUsuariosCmb() PanPanolUsUsuario relacionadas */ 	
	public function getPanPanolUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(PanPanolUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanolUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PanPanolUsUsuario::getPanPanolUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PanPanols (Coleccion) relacionados a traves de PanPanolUsUsuario */ 	
	public function getPanPanolsXPanPanolUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PanPanolUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PanPanolUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addRealJoin(PanPanolUsUsuario::GEN_TABLA, PanPanolUsUsuario::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanPanol::getPanPanols($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PanPanols relacionados a traves de PanPanolUsUsuario */ 	
	public function getCantidadPanPanolsXPanPanolUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PanPanol::GEN_ATTR_ID);
            if($estado){
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PanPanolUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PanPanolUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addRealJoin(PanPanolUsUsuario::GEN_TABLA, PanPanolUsUsuario::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanPanol::getPanPanols($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PanPanol (Objeto) relacionado a traves de PanPanolUsUsuario */ 	
	public function getPanPanolXPanPanolUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPanPanolsXPanPanolUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaVendedorUsUsuarios */ 	
	public function getVtaVendedorUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorUsUsuario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorususuario = VtaVendedorUsUsuario::hidratarObjeto($fila);			
                $vtavendedorususuarios[] = $vtavendedorususuario;
            }

            return $vtavendedorususuarios;
	}	
	

	/* Método getVtaVendedorUsUsuariosBloque para MasInfo */ 	
	public function getVtaVendedorUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorUsUsuarios Habilitados */ 	
	public function getVtaVendedorUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorUsUsuario */ 	
	public function getVtaVendedorUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorUsUsuario relacionadas */ 	
	public function deleteVtaVendedorUsUsuarios(){
            $obs = $this->getVtaVendedorUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorUsUsuariosCmb() VtaVendedorUsUsuario relacionadas */ 	
	public function getVtaVendedorUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorUsUsuario::getVtaVendedorUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedors (Coleccion) relacionados a traves de VtaVendedorUsUsuario */ 	
	public function getVtaVendedorsXVtaVendedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedorUsUsuario::GEN_TABLA, VtaVendedorUsUsuario::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedors relacionados a traves de VtaVendedorUsUsuario */ 	
	public function getCantidadVtaVendedorsXVtaVendedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedorUsUsuario::GEN_TABLA, VtaVendedorUsUsuario::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedor (Objeto) relacionado a traves de VtaVendedorUsUsuario */ 	
	public function getVtaVendedorXVtaVendedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorsXVtaVendedorUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdiPedidoDestinatarios */ 	
	public function getPdiPedidoDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdiPedidoDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdiPedidoDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdiPedidoDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdiPedidoDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdiPedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdiPedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdiPedidoDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdiPedidoDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdipedidodestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdipedidodestinatario = PdiPedidoDestinatario::hidratarObjeto($fila);			
                $pdipedidodestinatarios[] = $pdipedidodestinatario;
            }

            return $pdipedidodestinatarios;
	}	
	

	/* Método getPdiPedidoDestinatariosBloque para MasInfo */ 	
	public function getPdiPedidoDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdiPedidoDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdiPedidoDestinatarios Habilitados */ 	
	public function getPdiPedidoDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdiPedidoDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdiPedidoDestinatario */ 	
	public function getPdiPedidoDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdiPedidoDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdiPedidoDestinatario relacionadas */ 	
	public function deletePdiPedidoDestinatarios(){
            $obs = $this->getPdiPedidoDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdiPedidoDestinatariosCmb() PdiPedidoDestinatario relacionadas */ 	
	public function getPdiPedidoDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdiPedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedidoDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdiPedidoDestinatario::getPdiPedidoDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdiPedidos (Coleccion) relacionados a traves de PdiPedidoDestinatario */ 	
	public function getPdiPedidosXPdiPedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedido::GEN_TABLA);
            $c->addRealJoin(PdiPedidoDestinatario::GEN_TABLA, PdiPedidoDestinatario::GEN_ATTR_PDI_PEDIDO_ID, PdiPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdiPedido::getPdiPedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdiPedidos relacionados a traves de PdiPedidoDestinatario */ 	
	public function getCantidadPdiPedidosXPdiPedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdiPedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdiPedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdiPedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdiPedido::GEN_TABLA);
            $c->addRealJoin(PdiPedidoDestinatario::GEN_TABLA, PdiPedidoDestinatario::GEN_ATTR_PDI_PEDIDO_ID, PdiPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdiPedido::getPdiPedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdiPedido (Objeto) relacionado a traves de PdiPedidoDestinatario */ 	
	public function getPdiPedidoXPdiPedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdiPedidosXPdiPedidoDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdePedidoDestinatarios */ 	
	public function getPdePedidoDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedidoDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedidoDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedidoDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdePedidoDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedidoDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidodestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedidodestinatario = PdePedidoDestinatario::hidratarObjeto($fila);			
                $pdepedidodestinatarios[] = $pdepedidodestinatario;
            }

            return $pdepedidodestinatarios;
	}	
	

	/* Método getPdePedidoDestinatariosBloque para MasInfo */ 	
	public function getPdePedidoDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidoDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidoDestinatarios Habilitados */ 	
	public function getPdePedidoDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidoDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedidoDestinatario */ 	
	public function getPdePedidoDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidoDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedidoDestinatario relacionadas */ 	
	public function deletePdePedidoDestinatarios(){
            $obs = $this->getPdePedidoDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidoDestinatariosCmb() PdePedidoDestinatario relacionadas */ 	
	public function getPdePedidoDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedidoDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedidoDestinatario::getPdePedidoDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdePedidoDestinatario */ 	
	public function getPdePedidosXPdePedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdePedidoDestinatario::GEN_TABLA, PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdePedidoDestinatario */ 	
	public function getCantidadPdePedidosXPdePedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedidoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdePedidoDestinatario::GEN_TABLA, PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdePedidoDestinatario */ 	
	public function getPdePedidoXPdePedidoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdePedidoDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCotizacionDestinatarios */ 	
	public function getPdeCotizacionDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCotizacionDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCotizacionDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCotizacionDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeCotizacionDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCotizacionDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCotizacionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCotizacionDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCotizacionDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecotizaciondestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecotizaciondestinatario = PdeCotizacionDestinatario::hidratarObjeto($fila);			
                $pdecotizaciondestinatarios[] = $pdecotizaciondestinatario;
            }

            return $pdecotizaciondestinatarios;
	}	
	

	/* Método getPdeCotizacionDestinatariosBloque para MasInfo */ 	
	public function getPdeCotizacionDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCotizacionDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCotizacionDestinatarios Habilitados */ 	
	public function getPdeCotizacionDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCotizacionDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCotizacionDestinatario */ 	
	public function getPdeCotizacionDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCotizacionDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCotizacionDestinatario relacionadas */ 	
	public function deletePdeCotizacionDestinatarios(){
            $obs = $this->getPdeCotizacionDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCotizacionDestinatariosCmb() PdeCotizacionDestinatario relacionadas */ 	
	public function getPdeCotizacionDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdeCotizacionDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCotizacionDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCotizacionDestinatario::getPdeCotizacionDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeCotizacions (Coleccion) relacionados a traves de PdeCotizacionDestinatario */ 	
	public function getPdeCotizacionsXPdeCotizacionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCotizacionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCotizacionDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->addRealJoin(PdeCotizacionDestinatario::GEN_TABLA, PdeCotizacionDestinatario::GEN_ATTR_PDE_COTIZACION_ID, PdeCotizacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCotizacion::getPdeCotizacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeCotizacions relacionados a traves de PdeCotizacionDestinatario */ 	
	public function getCantidadPdeCotizacionsXPdeCotizacionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeCotizacion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeCotizacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCotizacionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCotizacionDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCotizacion::GEN_TABLA);
            $c->addRealJoin(PdeCotizacionDestinatario::GEN_TABLA, PdeCotizacionDestinatario::GEN_ATTR_PDE_COTIZACION_ID, PdeCotizacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCotizacion::getPdeCotizacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeCotizacion (Objeto) relacionado a traves de PdeCotizacionDestinatario */ 	
	public function getPdeCotizacionXPdeCotizacionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeCotizacionsXPdeCotizacionDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcDestinatarios */ 	
	public function getPdeOcDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocdestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocdestinatario = PdeOcDestinatario::hidratarObjeto($fila);			
                $pdeocdestinatarios[] = $pdeocdestinatario;
            }

            return $pdeocdestinatarios;
	}	
	

	/* Método getPdeOcDestinatariosBloque para MasInfo */ 	
	public function getPdeOcDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcDestinatarios Habilitados */ 	
	public function getPdeOcDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcDestinatario */ 	
	public function getPdeOcDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcDestinatario relacionadas */ 	
	public function deletePdeOcDestinatarios(){
            $obs = $this->getPdeOcDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcDestinatariosCmb() PdeOcDestinatario relacionadas */ 	
	public function getPdeOcDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcDestinatario::getPdeOcDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcs (Coleccion) relacionados a traves de PdeOcDestinatario */ 	
	public function getPdeOcsXPdeOcDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addRealJoin(PdeOcDestinatario::GEN_TABLA, PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOc::getPdeOcs($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcs relacionados a traves de PdeOcDestinatario */ 	
	public function getCantidadPdeOcsXPdeOcDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOc::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->addRealJoin(PdeOcDestinatario::GEN_TABLA, PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOc::getPdeOcs($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOc (Objeto) relacionado a traves de PdeOcDestinatario */ 	
	public function getPdeOcXPdeOcDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcsXPdeOcDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcionDestinatarios */ 	
	public function getPdeRecepcionDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcionDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcionDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcionDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecepcionDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcionDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcionDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepciondestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepciondestinatario = PdeRecepcionDestinatario::hidratarObjeto($fila);			
                $pderecepciondestinatarios[] = $pderecepciondestinatario;
            }

            return $pderecepciondestinatarios;
	}	
	

	/* Método getPdeRecepcionDestinatariosBloque para MasInfo */ 	
	public function getPdeRecepcionDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcionDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcionDestinatarios Habilitados */ 	
	public function getPdeRecepcionDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcionDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcionDestinatario */ 	
	public function getPdeRecepcionDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcionDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcionDestinatario relacionadas */ 	
	public function deletePdeRecepcionDestinatarios(){
            $obs = $this->getPdeRecepcionDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionDestinatariosCmb() PdeRecepcionDestinatario relacionadas */ 	
	public function getPdeRecepcionDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcionDestinatario::getPdeRecepcionDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecepcions (Coleccion) relacionados a traves de PdeRecepcionDestinatario */ 	
	public function getPdeRecepcionsXPdeRecepcionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionDestinatario::GEN_TABLA, PdeRecepcionDestinatario::GEN_ATTR_PDE_RECEPCION_ID, PdeRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecepcions relacionados a traves de PdeRecepcionDestinatario */ 	
	public function getCantidadPdeRecepcionsXPdeRecepcionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionDestinatario::GEN_TABLA, PdeRecepcionDestinatario::GEN_ATTR_PDE_RECEPCION_ID, PdeRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecepcion (Objeto) relacionado a traves de PdeRecepcionDestinatario */ 	
	public function getPdeRecepcionXPdeRecepcionDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecepcionsXPdeRecepcionDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCentroRecepcionUsUsuarios */ 	
	public function getPdeCentroRecepcionUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroRecepcionUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroRecepcionUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroRecepcionUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroRecepcionUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentrorecepcionususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentrorecepcionususuario = PdeCentroRecepcionUsUsuario::hidratarObjeto($fila);			
                $pdecentrorecepcionususuarios[] = $pdecentrorecepcionususuario;
            }

            return $pdecentrorecepcionususuarios;
	}	
	

	/* Método getPdeCentroRecepcionUsUsuariosBloque para MasInfo */ 	
	public function getPdeCentroRecepcionUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroRecepcionUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroRecepcionUsUsuarios Habilitados */ 	
	public function getPdeCentroRecepcionUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroRecepcionUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroRecepcionUsUsuario */ 	
	public function getPdeCentroRecepcionUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroRecepcionUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroRecepcionUsUsuario relacionadas */ 	
	public function deletePdeCentroRecepcionUsUsuarios(){
            $obs = $this->getPdeCentroRecepcionUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroRecepcionUsUsuariosCmb() PdeCentroRecepcionUsUsuario relacionadas */ 	
	public function getPdeCentroRecepcionUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcionUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroRecepcionUsUsuario::getPdeCentroRecepcionUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeCentroRecepcions (Coleccion) relacionados a traves de PdeCentroRecepcionUsUsuario */ 	
	public function getPdeCentroRecepcionsXPdeCentroRecepcionUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeCentroRecepcionUsUsuario::GEN_TABLA, PdeCentroRecepcionUsUsuario::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, PdeCentroRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroRecepcion::getPdeCentroRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeCentroRecepcions relacionados a traves de PdeCentroRecepcionUsUsuario */ 	
	public function getCantidadPdeCentroRecepcionsXPdeCentroRecepcionUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeCentroRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeCentroRecepcionUsUsuario::GEN_TABLA, PdeCentroRecepcionUsUsuario::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, PdeCentroRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroRecepcion::getPdeCentroRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeCentroRecepcion (Objeto) relacionado a traves de PdeCentroRecepcionUsUsuario */ 	
	public function getPdeCentroRecepcionXPdeCentroRecepcionUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeCentroRecepcionsXPdeCentroRecepcionUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCentroPedidoUsUsuarios */ 	
	public function getPdeCentroPedidoUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroPedidoUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroPedidoUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroPedidoUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroPedidoUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroPedidoUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroPedidoUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroPedidoUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentropedidoususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentropedidoususuario = PdeCentroPedidoUsUsuario::hidratarObjeto($fila);			
                $pdecentropedidoususuarios[] = $pdecentropedidoususuario;
            }

            return $pdecentropedidoususuarios;
	}	
	

	/* Método getPdeCentroPedidoUsUsuariosBloque para MasInfo */ 	
	public function getPdeCentroPedidoUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroPedidoUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroPedidoUsUsuarios Habilitados */ 	
	public function getPdeCentroPedidoUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroPedidoUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroPedidoUsUsuario */ 	
	public function getPdeCentroPedidoUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroPedidoUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroPedidoUsUsuario relacionadas */ 	
	public function deletePdeCentroPedidoUsUsuarios(){
            $obs = $this->getPdeCentroPedidoUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroPedidoUsUsuariosCmb() PdeCentroPedidoUsUsuario relacionadas */ 	
	public function getPdeCentroPedidoUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedidoUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroPedidoUsUsuario::getPdeCentroPedidoUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeCentroPedidos (Coleccion) relacionados a traves de PdeCentroPedidoUsUsuario */ 	
	public function getPdeCentroPedidosXPdeCentroPedidoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoUsUsuario::GEN_TABLA, PdeCentroPedidoUsUsuario::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, PdeCentroPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroPedido::getPdeCentroPedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeCentroPedidos relacionados a traves de PdeCentroPedidoUsUsuario */ 	
	public function getCantidadPdeCentroPedidosXPdeCentroPedidoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeCentroPedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeCentroPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoUsUsuario::GEN_TABLA, PdeCentroPedidoUsUsuario::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, PdeCentroPedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroPedido::getPdeCentroPedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeCentroPedido (Objeto) relacionado a traves de PdeCentroPedidoUsUsuario */ 	
	public function getPdeCentroPedidoXPdeCentroPedidoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeCentroPedidosXPdeCentroPedidoUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcReclamoDestinatarios */ 	
	public function getPdeOcReclamoDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcReclamoDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcReclamoDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcReclamoDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcReclamoDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcReclamoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcReclamoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcReclamoDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcReclamoDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocreclamodestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocreclamodestinatario = PdeOcReclamoDestinatario::hidratarObjeto($fila);			
                $pdeocreclamodestinatarios[] = $pdeocreclamodestinatario;
            }

            return $pdeocreclamodestinatarios;
	}	
	

	/* Método getPdeOcReclamoDestinatariosBloque para MasInfo */ 	
	public function getPdeOcReclamoDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcReclamoDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcReclamoDestinatarios Habilitados */ 	
	public function getPdeOcReclamoDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcReclamoDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcReclamoDestinatario */ 	
	public function getPdeOcReclamoDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcReclamoDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcReclamoDestinatario relacionadas */ 	
	public function deletePdeOcReclamoDestinatarios(){
            $obs = $this->getPdeOcReclamoDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcReclamoDestinatariosCmb() PdeOcReclamoDestinatario relacionadas */ 	
	public function getPdeOcReclamoDestinatariosCmb(){
            $c = new Criterio();
            $c->add(PdeOcReclamoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcReclamoDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcReclamoDestinatario::getPdeOcReclamoDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcReclamos (Coleccion) relacionados a traves de PdeOcReclamoDestinatario */ 	
	public function getPdeOcReclamosXPdeOcReclamoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcReclamo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcReclamoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcReclamoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcReclamo::GEN_TABLA);
            $c->addRealJoin(PdeOcReclamoDestinatario::GEN_TABLA, PdeOcReclamoDestinatario::GEN_ATTR_PDE_OC_RECLAMO_ID, PdeOcReclamo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcReclamo::getPdeOcReclamos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcReclamos relacionados a traves de PdeOcReclamoDestinatario */ 	
	public function getCantidadPdeOcReclamosXPdeOcReclamoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcReclamo::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcReclamo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcReclamoDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcReclamoDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcReclamo::GEN_TABLA);
            $c->addRealJoin(PdeOcReclamoDestinatario::GEN_TABLA, PdeOcReclamoDestinatario::GEN_ATTR_PDE_OC_RECLAMO_ID, PdeOcReclamo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcReclamo::getPdeOcReclamos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcReclamo (Objeto) relacionado a traves de PdeOcReclamoDestinatario */ 	
	public function getPdeOcReclamoXPdeOcReclamoDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcReclamosXPdeOcReclamoDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getNovNovedadDestinatarios */ 	
	public function getNovNovedadDestinatarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(NovNovedadDestinatario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(NovNovedadDestinatario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(NovNovedadDestinatario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(NovNovedadDestinatario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(NovNovedadDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(NovNovedadDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(NovNovedadDestinatario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".NovNovedadDestinatario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $novnovedaddestinatarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $novnovedaddestinatario = NovNovedadDestinatario::hidratarObjeto($fila);			
                $novnovedaddestinatarios[] = $novnovedaddestinatario;
            }

            return $novnovedaddestinatarios;
	}	
	

	/* Método getNovNovedadDestinatariosBloque para MasInfo */ 	
	public function getNovNovedadDestinatariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getNovNovedadDestinatarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getNovNovedadDestinatarios Habilitados */ 	
	public function getNovNovedadDestinatariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getNovNovedadDestinatarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getNovNovedadDestinatario */ 	
	public function getNovNovedadDestinatario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getNovNovedadDestinatarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de NovNovedadDestinatario relacionadas */ 	
	public function deleteNovNovedadDestinatarios(){
            $obs = $this->getNovNovedadDestinatarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getNovNovedadDestinatariosCmb() NovNovedadDestinatario relacionadas */ 	
	public function getNovNovedadDestinatariosCmb(){
            $c = new Criterio();
            $c->add(NovNovedadDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedadDestinatario::GEN_TABLA);
            $c->setCriterios();

            $os = NovNovedadDestinatario::getNovNovedadDestinatariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener NovNovedads (Coleccion) relacionados a traves de NovNovedadDestinatario */ 	
	public function getNovNovedadsXNovNovedadDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(NovNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NovNovedadDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NovNovedadDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedad::GEN_TABLA);
            $c->addRealJoin(NovNovedadDestinatario::GEN_TABLA, NovNovedadDestinatario::GEN_ATTR_NOV_NOVEDAD_ID, NovNovedad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NovNovedad::getNovNovedads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de NovNovedads relacionados a traves de NovNovedadDestinatario */ 	
	public function getCantidadNovNovedadsXNovNovedadDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(NovNovedad::GEN_ATTR_ID);
            if($estado){
                $c->add(NovNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NovNovedadDestinatario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NovNovedadDestinatario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedad::GEN_TABLA);
            $c->addRealJoin(NovNovedadDestinatario::GEN_TABLA, NovNovedadDestinatario::GEN_ATTR_NOV_NOVEDAD_ID, NovNovedad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NovNovedad::getNovNovedads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener NovNovedad (Objeto) relacionado a traves de NovNovedadDestinatario */ 	
	public function getNovNovedadXNovNovedadDestinatario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getNovNovedadsXNovNovedadDestinatario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getNovNovedadObservados */ 	
	public function getNovNovedadObservados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(NovNovedadObservado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(NovNovedadObservado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(NovNovedadObservado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(NovNovedadObservado::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(NovNovedadObservado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(NovNovedadObservado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(NovNovedadObservado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".NovNovedadObservado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $novnovedadobservados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $novnovedadobservado = NovNovedadObservado::hidratarObjeto($fila);			
                $novnovedadobservados[] = $novnovedadobservado;
            }

            return $novnovedadobservados;
	}	
	

	/* Método getNovNovedadObservadosBloque para MasInfo */ 	
	public function getNovNovedadObservadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getNovNovedadObservados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getNovNovedadObservados Habilitados */ 	
	public function getNovNovedadObservadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getNovNovedadObservados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getNovNovedadObservado */ 	
	public function getNovNovedadObservado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getNovNovedadObservados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de NovNovedadObservado relacionadas */ 	
	public function deleteNovNovedadObservados(){
            $obs = $this->getNovNovedadObservados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getNovNovedadObservadosCmb() NovNovedadObservado relacionadas */ 	
	public function getNovNovedadObservadosCmb(){
            $c = new Criterio();
            $c->add(NovNovedadObservado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedadObservado::GEN_TABLA);
            $c->setCriterios();

            $os = NovNovedadObservado::getNovNovedadObservadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener NovNovedads (Coleccion) relacionados a traves de NovNovedadObservado */ 	
	public function getNovNovedadsXNovNovedadObservado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(NovNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NovNovedadObservado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NovNovedadObservado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedad::GEN_TABLA);
            $c->addRealJoin(NovNovedadObservado::GEN_TABLA, NovNovedadObservado::GEN_ATTR_NOV_NOVEDAD_ID, NovNovedad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NovNovedad::getNovNovedads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de NovNovedads relacionados a traves de NovNovedadObservado */ 	
	public function getCantidadNovNovedadsXNovNovedadObservado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(NovNovedad::GEN_ATTR_ID);
            if($estado){
                $c->add(NovNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NovNovedadObservado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NovNovedadObservado::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedad::GEN_TABLA);
            $c->addRealJoin(NovNovedadObservado::GEN_TABLA, NovNovedadObservado::GEN_ATTR_NOV_NOVEDAD_ID, NovNovedad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NovNovedad::getNovNovedads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener NovNovedad (Objeto) relacionado a traves de NovNovedadObservado */ 	
	public function getNovNovedadXNovNovedadObservado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getNovNovedadsXNovNovedadObservado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getNovNovedadLeidos */ 	
	public function getNovNovedadLeidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(NovNovedadLeido::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(NovNovedadLeido::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(NovNovedadLeido::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(NovNovedadLeido::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(NovNovedadLeido::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(NovNovedadLeido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(NovNovedadLeido::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".NovNovedadLeido::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $novnovedadleidos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $novnovedadleido = NovNovedadLeido::hidratarObjeto($fila);			
                $novnovedadleidos[] = $novnovedadleido;
            }

            return $novnovedadleidos;
	}	
	

	/* Método getNovNovedadLeidosBloque para MasInfo */ 	
	public function getNovNovedadLeidosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getNovNovedadLeidos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getNovNovedadLeidos Habilitados */ 	
	public function getNovNovedadLeidosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getNovNovedadLeidos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getNovNovedadLeido */ 	
	public function getNovNovedadLeido($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getNovNovedadLeidos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de NovNovedadLeido relacionadas */ 	
	public function deleteNovNovedadLeidos(){
            $obs = $this->getNovNovedadLeidos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getNovNovedadLeidosCmb() NovNovedadLeido relacionadas */ 	
	public function getNovNovedadLeidosCmb(){
            $c = new Criterio();
            $c->add(NovNovedadLeido::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedadLeido::GEN_TABLA);
            $c->setCriterios();

            $os = NovNovedadLeido::getNovNovedadLeidosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener NovNovedads (Coleccion) relacionados a traves de NovNovedadLeido */ 	
	public function getNovNovedadsXNovNovedadLeido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(NovNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NovNovedadLeido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NovNovedadLeido::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedad::GEN_TABLA);
            $c->addRealJoin(NovNovedadLeido::GEN_TABLA, NovNovedadLeido::GEN_ATTR_NOV_NOVEDAD_ID, NovNovedad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NovNovedad::getNovNovedads($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de NovNovedads relacionados a traves de NovNovedadLeido */ 	
	public function getCantidadNovNovedadsXNovNovedadLeido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(NovNovedad::GEN_ATTR_ID);
            if($estado){
                $c->add(NovNovedad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(NovNovedadLeido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(NovNovedadLeido::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(NovNovedad::GEN_TABLA);
            $c->addRealJoin(NovNovedadLeido::GEN_TABLA, NovNovedadLeido::GEN_ATTR_NOV_NOVEDAD_ID, NovNovedad::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = NovNovedad::getNovNovedads($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener NovNovedad (Objeto) relacionado a traves de NovNovedadLeido */ 	
	public function getNovNovedadXNovNovedadLeido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getNovNovedadsXNovNovedadLeido($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(AltAlertaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AltAlertaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlertaUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = AltAlertaUsUsuario::getAltAlertaUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AltAlertas (Coleccion) relacionados a traves de AltAlertaUsUsuario */ 	
	public function getAltAlertasXAltAlertaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AltAlerta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltAlertaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltAlertaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addRealJoin(AltAlertaUsUsuario::GEN_TABLA, AltAlertaUsUsuario::GEN_ATTR_ALT_ALERTA_ID, AltAlerta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AltAlerta::getAltAlertas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AltAlertas relacionados a traves de AltAlertaUsUsuario */ 	
	public function getCantidadAltAlertasXAltAlertaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AltAlerta::GEN_ATTR_ID);
            if($estado){
                $c->add(AltAlerta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltAlertaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltAlertaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltAlerta::GEN_TABLA);
            $c->addRealJoin(AltAlertaUsUsuario::GEN_TABLA, AltAlertaUsUsuario::GEN_ATTR_ALT_ALERTA_ID, AltAlerta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AltAlerta::getAltAlertas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AltAlerta (Objeto) relacionado a traves de AltAlertaUsUsuario */ 	
	public function getAltAlertaXAltAlertaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAltAlertasXAltAlertaUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getAltControlUsUsuarios */ 	
	public function getAltControlUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(AltControlUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(AltControlUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(AltControlUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(AltControlUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(AltControlUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(AltControlUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".AltControlUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $altcontrolususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $altcontrolususuario = AltControlUsUsuario::hidratarObjeto($fila);			
                $altcontrolususuarios[] = $altcontrolususuario;
            }

            return $altcontrolususuarios;
	}	
	

	/* Método getAltControlUsUsuariosBloque para MasInfo */ 	
	public function getAltControlUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getAltControlUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getAltControlUsUsuarios Habilitados */ 	
	public function getAltControlUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getAltControlUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getAltControlUsUsuario */ 	
	public function getAltControlUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getAltControlUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de AltControlUsUsuario relacionadas */ 	
	public function deleteAltControlUsUsuarios(){
            $obs = $this->getAltControlUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getAltControlUsUsuariosCmb() AltControlUsUsuario relacionadas */ 	
	public function getAltControlUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(AltControlUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltControlUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = AltControlUsUsuario::getAltControlUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AltControls (Coleccion) relacionados a traves de AltControlUsUsuario */ 	
	public function getAltControlsXAltControlUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AltControl::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltControlUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltControlUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltControl::GEN_TABLA);
            $c->addRealJoin(AltControlUsUsuario::GEN_TABLA, AltControlUsUsuario::GEN_ATTR_ALT_CONTROL_ID, AltControl::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AltControl::getAltControls($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AltControls relacionados a traves de AltControlUsUsuario */ 	
	public function getCantidadAltControlsXAltControlUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AltControl::GEN_ATTR_ID);
            if($estado){
                $c->add(AltControl::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AltControlUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AltControlUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AltControl::GEN_TABLA);
            $c->addRealJoin(AltControlUsUsuario::GEN_TABLA, AltControlUsUsuario::GEN_ATTR_ALT_CONTROL_ID, AltControl::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AltControl::getAltControls($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AltControl (Objeto) relacionado a traves de AltControlUsUsuario */ 	
	public function getAltControlXAltControlUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAltControlsXAltControlUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getFndCajeroUsUsuarios */ 	
	public function getFndCajeroUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(FndCajeroUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(FndCajeroUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(FndCajeroUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(FndCajeroUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(FndCajeroUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(FndCajeroUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".FndCajeroUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $fndcajeroususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $fndcajeroususuario = FndCajeroUsUsuario::hidratarObjeto($fila);			
                $fndcajeroususuarios[] = $fndcajeroususuario;
            }

            return $fndcajeroususuarios;
	}	
	

	/* Método getFndCajeroUsUsuariosBloque para MasInfo */ 	
	public function getFndCajeroUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getFndCajeroUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getFndCajeroUsUsuarios Habilitados */ 	
	public function getFndCajeroUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getFndCajeroUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getFndCajeroUsUsuario */ 	
	public function getFndCajeroUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getFndCajeroUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de FndCajeroUsUsuario relacionadas */ 	
	public function deleteFndCajeroUsUsuarios(){
            $obs = $this->getFndCajeroUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getFndCajeroUsUsuariosCmb() FndCajeroUsUsuario relacionadas */ 	
	public function getFndCajeroUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(FndCajeroUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajeroUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = FndCajeroUsUsuario::getFndCajeroUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener FndCajeros (Coleccion) relacionados a traves de FndCajeroUsUsuario */ 	
	public function getFndCajerosXFndCajeroUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(FndCajero::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajeroUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajeroUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajero::GEN_TABLA);
            $c->addRealJoin(FndCajeroUsUsuario::GEN_TABLA, FndCajeroUsUsuario::GEN_ATTR_FND_CAJERO_ID, FndCajero::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajero::getFndCajeros($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de FndCajeros relacionados a traves de FndCajeroUsUsuario */ 	
	public function getCantidadFndCajerosXFndCajeroUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(FndCajero::GEN_ATTR_ID);
            if($estado){
                $c->add(FndCajero::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(FndCajeroUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(FndCajeroUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(FndCajero::GEN_TABLA);
            $c->addRealJoin(FndCajeroUsUsuario::GEN_TABLA, FndCajeroUsUsuario::GEN_ATTR_FND_CAJERO_ID, FndCajero::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = FndCajero::getFndCajeros($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener FndCajero (Objeto) relacionado a traves de FndCajeroUsUsuario */ 	
	public function getFndCajeroXFndCajeroUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getFndCajerosXFndCajeroUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(AppMovInstalacion::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(AppMovInstalacion::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovInstalacion::GEN_TABLA);
            $c->setCriterios();

            $os = AppMovInstalacion::getAppMovInstalacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener AppMovDispositivos (Coleccion) relacionados a traves de AppMovInstalacion */ 	
	public function getAppMovDispositivosXAppMovInstalacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(AppMovDispositivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AppMovInstalacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AppMovInstalacion::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovDispositivo::GEN_TABLA);
            $c->addRealJoin(AppMovInstalacion::GEN_TABLA, AppMovInstalacion::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, AppMovDispositivo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AppMovDispositivo::getAppMovDispositivos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de AppMovDispositivos relacionados a traves de AppMovInstalacion */ 	
	public function getCantidadAppMovDispositivosXAppMovInstalacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(AppMovDispositivo::GEN_ATTR_ID);
            if($estado){
                $c->add(AppMovDispositivo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(AppMovInstalacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(AppMovInstalacion::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(AppMovDispositivo::GEN_TABLA);
            $c->addRealJoin(AppMovInstalacion::GEN_TABLA, AppMovInstalacion::GEN_ATTR_APP_MOV_DISPOSITIVO_ID, AppMovDispositivo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = AppMovDispositivo::getAppMovDispositivos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener AppMovDispositivo (Objeto) relacionado a traves de AppMovInstalacion */ 	
	public function getAppMovDispositivoXAppMovInstalacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getAppMovDispositivosXAppMovInstalacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getOpeChoferUsUsuarios */ 	
	public function getOpeChoferUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(OpeChoferUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(OpeChoferUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(OpeChoferUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(OpeChoferUsUsuario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(OpeChoferUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(OpeChoferUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(OpeChoferUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".OpeChoferUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $opechoferususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $opechoferususuario = OpeChoferUsUsuario::hidratarObjeto($fila);			
                $opechoferususuarios[] = $opechoferususuario;
            }

            return $opechoferususuarios;
	}	
	

	/* Método getOpeChoferUsUsuariosBloque para MasInfo */ 	
	public function getOpeChoferUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getOpeChoferUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getOpeChoferUsUsuarios Habilitados */ 	
	public function getOpeChoferUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getOpeChoferUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getOpeChoferUsUsuario */ 	
	public function getOpeChoferUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getOpeChoferUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de OpeChoferUsUsuario relacionadas */ 	
	public function deleteOpeChoferUsUsuarios(){
            $obs = $this->getOpeChoferUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getOpeChoferUsUsuariosCmb() OpeChoferUsUsuario relacionadas */ 	
	public function getOpeChoferUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(OpeChoferUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeChoferUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = OpeChoferUsUsuario::getOpeChoferUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener OpeChofers (Coleccion) relacionados a traves de OpeChoferUsUsuario */ 	
	public function getOpeChofersXOpeChoferUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(OpeChofer::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OpeChoferUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OpeChoferUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeChofer::GEN_TABLA);
            $c->addRealJoin(OpeChoferUsUsuario::GEN_TABLA, OpeChoferUsUsuario::GEN_ATTR_OPE_CHOFER_ID, OpeChofer::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeChofer::getOpeChofers($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de OpeChofers relacionados a traves de OpeChoferUsUsuario */ 	
	public function getCantidadOpeChofersXOpeChoferUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(OpeChofer::GEN_ATTR_ID);
            if($estado){
                $c->add(OpeChofer::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OpeChoferUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OpeChoferUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeChofer::GEN_TABLA);
            $c->addRealJoin(OpeChoferUsUsuario::GEN_TABLA, OpeChoferUsUsuario::GEN_ATTR_OPE_CHOFER_ID, OpeChofer::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeChofer::getOpeChofers($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener OpeChofer (Objeto) relacionado a traves de OpeChoferUsUsuario */ 	
	public function getOpeChoferXOpeChoferUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getOpeChofersXOpeChoferUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoMensajes */ 	
	public function getVtaPresupuestoMensajes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoMensaje::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoMensaje::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoMensaje::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoMensaje::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoMensaje::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoMensaje::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoMensaje::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestomensajes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestomensaje = VtaPresupuestoMensaje::hidratarObjeto($fila);			
                $vtapresupuestomensajes[] = $vtapresupuestomensaje;
            }

            return $vtapresupuestomensajes;
	}	
	

	/* Método getVtaPresupuestoMensajesBloque para MasInfo */ 	
	public function getVtaPresupuestoMensajesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoMensajes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoMensajes Habilitados */ 	
	public function getVtaPresupuestoMensajesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoMensajes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoMensaje */ 	
	public function getVtaPresupuestoMensaje($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoMensajes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoMensaje relacionadas */ 	
	public function deleteVtaPresupuestoMensajes(){
            $obs = $this->getVtaPresupuestoMensajes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoMensajesCmb() VtaPresupuestoMensaje relacionadas */ 	
	public function getVtaPresupuestoMensajesCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoMensaje::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoMensaje::getVtaPresupuestoMensajesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaPresupuestoMensaje */ 	
	public function getVtaPresupuestosXVtaPresupuestoMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoMensaje::GEN_TABLA, VtaPresupuestoMensaje::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaPresupuestoMensaje */ 	
	public function getCantidadVtaPresupuestosXVtaPresupuestoMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoMensaje::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoMensaje::GEN_TABLA, VtaPresupuestoMensaje::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaPresupuestoMensaje */ 	
	public function getVtaPresupuestoXVtaPresupuestoMensaje($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaPresupuestoMensaje($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPerPersonaUsUsuarios */ 	
	public function getPerPersonaUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersonaUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersonaUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersonaUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersonaUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersonaUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonaususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersonaususuario = PerPersonaUsUsuario::hidratarObjeto($fila);			
                $perpersonaususuarios[] = $perpersonaususuario;
            }

            return $perpersonaususuarios;
	}	
	

	/* Método getPerPersonaUsUsuariosBloque para MasInfo */ 	
	public function getPerPersonaUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonaUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonaUsUsuarios Habilitados */ 	
	public function getPerPersonaUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonaUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersonaUsUsuario */ 	
	public function getPerPersonaUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonaUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersonaUsUsuario relacionadas */ 	
	public function deletePerPersonaUsUsuarios(){
            $obs = $this->getPerPersonaUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonaUsUsuariosCmb() PerPersonaUsUsuario relacionadas */ 	
	public function getPerPersonaUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(PerPersonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersonaUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersonaUsUsuario::getPerPersonaUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PerPersonas (Coleccion) relacionados a traves de PerPersonaUsUsuario */ 	
	public function getPerPersonasXPerPersonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addRealJoin(PerPersonaUsUsuario::GEN_TABLA, PerPersonaUsUsuario::GEN_ATTR_PER_PERSONA_ID, PerPersona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PerPersona::getPerPersonas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PerPersonas relacionados a traves de PerPersonaUsUsuario */ 	
	public function getCantidadPerPersonasXPerPersonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PerPersona::GEN_ATTR_ID);
            if($estado){
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersonaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersonaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addRealJoin(PerPersonaUsUsuario::GEN_TABLA, PerPersonaUsUsuario::GEN_ATTR_PER_PERSONA_ID, PerPersona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PerPersona::getPerPersonas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PerPersona (Objeto) relacionado a traves de PerPersonaUsUsuario */ 	
	public function getPerPersonaXPerPersonaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPerPersonasXPerPersonaUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPlnJornadaUsUsuarios */ 	
	public function getPlnJornadaUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PlnJornadaUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PlnJornadaUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PlnJornadaUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PlnJornadaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PlnJornadaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PlnJornadaUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PlnJornadaUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $plnjornadaususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $plnjornadaususuario = PlnJornadaUsUsuario::hidratarObjeto($fila);			
                $plnjornadaususuarios[] = $plnjornadaususuario;
            }

            return $plnjornadaususuarios;
	}	
	

	/* Método getPlnJornadaUsUsuariosBloque para MasInfo */ 	
	public function getPlnJornadaUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPlnJornadaUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPlnJornadaUsUsuarios Habilitados */ 	
	public function getPlnJornadaUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPlnJornadaUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPlnJornadaUsUsuario */ 	
	public function getPlnJornadaUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPlnJornadaUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PlnJornadaUsUsuario relacionadas */ 	
	public function deletePlnJornadaUsUsuarios(){
            $obs = $this->getPlnJornadaUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPlnJornadaUsUsuariosCmb() PlnJornadaUsUsuario relacionadas */ 	
	public function getPlnJornadaUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(PlnJornadaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PlnJornadaUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PlnJornadaUsUsuario::getPlnJornadaUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PlnJornadas (Coleccion) relacionados a traves de PlnJornadaUsUsuario */ 	
	public function getPlnJornadasXPlnJornadaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PlnJornada::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PlnJornadaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PlnJornadaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PlnJornada::GEN_TABLA);
            $c->addRealJoin(PlnJornadaUsUsuario::GEN_TABLA, PlnJornadaUsUsuario::GEN_ATTR_PLN_JORNADA_ID, PlnJornada::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PlnJornada::getPlnJornadas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PlnJornadas relacionados a traves de PlnJornadaUsUsuario */ 	
	public function getCantidadPlnJornadasXPlnJornadaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PlnJornada::GEN_ATTR_ID);
            if($estado){
                $c->add(PlnJornada::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PlnJornadaUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PlnJornadaUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PlnJornada::GEN_TABLA);
            $c->addRealJoin(PlnJornadaUsUsuario::GEN_TABLA, PlnJornadaUsUsuario::GEN_ATTR_PLN_JORNADA_ID, PlnJornada::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PlnJornada::getPlnJornadas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PlnJornada (Objeto) relacionado a traves de PlnJornadaUsUsuario */ 	
	public function getPlnJornadaXPlnJornadaUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPlnJornadasXPlnJornadaUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getOpeOperarioUsUsuarios */ 	
	public function getOpeOperarioUsUsuarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(OpeOperarioUsUsuario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(OpeOperarioUsUsuario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(OpeOperarioUsUsuario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(OpeOperarioUsUsuario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(OpeOperarioUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(OpeOperarioUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(OpeOperarioUsUsuario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".OpeOperarioUsUsuario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $opeoperarioususuarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $opeoperarioususuario = OpeOperarioUsUsuario::hidratarObjeto($fila);			
                $opeoperarioususuarios[] = $opeoperarioususuario;
            }

            return $opeoperarioususuarios;
	}	
	

	/* Método getOpeOperarioUsUsuariosBloque para MasInfo */ 	
	public function getOpeOperarioUsUsuariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getOpeOperarioUsUsuarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getOpeOperarioUsUsuarios Habilitados */ 	
	public function getOpeOperarioUsUsuariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getOpeOperarioUsUsuarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getOpeOperarioUsUsuario */ 	
	public function getOpeOperarioUsUsuario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getOpeOperarioUsUsuarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de OpeOperarioUsUsuario relacionadas */ 	
	public function deleteOpeOperarioUsUsuarios(){
            $obs = $this->getOpeOperarioUsUsuarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getOpeOperarioUsUsuariosCmb() OpeOperarioUsUsuario relacionadas */ 	
	public function getOpeOperarioUsUsuariosCmb(){
            $c = new Criterio();
            $c->add(OpeOperarioUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeOperarioUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = OpeOperarioUsUsuario::getOpeOperarioUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener OpeOperarios (Coleccion) relacionados a traves de OpeOperarioUsUsuario */ 	
	public function getOpeOperariosXOpeOperarioUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(OpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OpeOperarioUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OpeOperarioUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeOperario::GEN_TABLA);
            $c->addRealJoin(OpeOperarioUsUsuario::GEN_TABLA, OpeOperarioUsUsuario::GEN_ATTR_OPE_OPERARIO_ID, OpeOperario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeOperario::getOpeOperarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de OpeOperarios relacionados a traves de OpeOperarioUsUsuario */ 	
	public function getCantidadOpeOperariosXOpeOperarioUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(OpeOperario::GEN_ATTR_ID);
            if($estado){
                $c->add(OpeOperario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(OpeOperarioUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(OpeOperarioUsUsuario::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(OpeOperario::GEN_TABLA);
            $c->addRealJoin(OpeOperarioUsUsuario::GEN_TABLA, OpeOperarioUsUsuario::GEN_ATTR_OPE_OPERARIO_ID, OpeOperario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = OpeOperario::getOpeOperarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener OpeOperario (Objeto) relacionado a traves de OpeOperarioUsUsuario */ 	
	public function getOpeOperarioXOpeOperarioUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getOpeOperariosXOpeOperarioUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los UsGrupos asignados a UsUsuario */ 	
	public function getUsAgrupadosId(){
            $ids = array();
            foreach($this->getUsAgrupados() as $o){
            
                $ids[] = $o->getUsGrupoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsGrupos asignados al UsUsuario */ 	
	public function setUsAgrupados($ids){
            $this->deleteUsAgrupados();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new UsAgrupado();
                    $o->setUsGrupoId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsGrupo en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionUsAgrupado(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los UsCredencials asignados a UsUsuario */ 	
	public function getUsAcreditadosId(){
            $ids = array();
            foreach($this->getUsAcreditados() as $o){
            
                $ids[] = $o->getUsCredencialId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsCredencials asignados al UsUsuario */ 	
	public function setUsAcreditados($ids){
            $this->deleteUsAcreditados();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new UsAcreditado();
                    $o->setUsCredencialId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsCredencial en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionUsAcreditado(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralSucursals asignados a UsUsuario */ 	
	public function getGralSucursalUsUsuariosId(){
            $ids = array();
            foreach($this->getGralSucursalUsUsuarios() as $o){
            
                $ids[] = $o->getGralSucursalId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralSucursals asignados al UsUsuario */ 	
	public function setGralSucursalUsUsuarios($ids){
            $this->deleteGralSucursalUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalUsUsuario();
                    $o->setGralSucursalId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralSucursal en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralZonas asignados a UsUsuario */ 	
	public function getGralZonaUsUsuariosId(){
            $ids = array();
            foreach($this->getGralZonaUsUsuarios() as $o){
            
                $ids[] = $o->getGralZonaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralZonas asignados al UsUsuario */ 	
	public function setGralZonaUsUsuarios($ids){
            $this->deleteGralZonaUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralZonaUsUsuario();
                    $o->setGralZonaId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralZona en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionGralZonaUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralCentroCostos asignados a UsUsuario */ 	
	public function getGralCentroCostoUsUsuariosId(){
            $ids = array();
            foreach($this->getGralCentroCostoUsUsuarios() as $o){
            
                $ids[] = $o->getGralCentroCostoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralCentroCostos asignados al UsUsuario */ 	
	public function setGralCentroCostoUsUsuarios($ids){
            $this->deleteGralCentroCostoUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCentroCostoUsUsuario();
                    $o->setGralCentroCostoId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralCentroCosto en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionGralCentroCostoUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PrvProveedors asignados a UsUsuario */ 	
	public function getPrvProveedorUsUsuariosId(){
            $ids = array();
            foreach($this->getPrvProveedorUsUsuarios() as $o){
            
                $ids[] = $o->getPrvProveedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PrvProveedors asignados al UsUsuario */ 	
	public function setPrvProveedorUsUsuarios($ids){
            $this->deletePrvProveedorUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PrvProveedorUsUsuario();
                    $o->setPrvProveedorId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PrvProveedor en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionPrvProveedorUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PanPanols asignados a UsUsuario */ 	
	public function getPanPanolUsUsuariosId(){
            $ids = array();
            foreach($this->getPanPanolUsUsuarios() as $o){
            
                $ids[] = $o->getPanPanolId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PanPanols asignados al UsUsuario */ 	
	public function setPanPanolUsUsuarios($ids){
            $this->deletePanPanolUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PanPanolUsUsuario();
                    $o->setPanPanolId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PanPanol en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionPanPanolUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaVendedors asignados a UsUsuario */ 	
	public function getVtaVendedorUsUsuariosId(){
            $ids = array();
            foreach($this->getVtaVendedorUsUsuarios() as $o){
            
                $ids[] = $o->getVtaVendedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaVendedors asignados al UsUsuario */ 	
	public function setVtaVendedorUsUsuarios($ids){
            $this->deleteVtaVendedorUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaVendedorUsUsuario();
                    $o->setVtaVendedorId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaVendedor en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionVtaVendedorUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeCentroRecepcions asignados a UsUsuario */ 	
	public function getPdeCentroRecepcionUsUsuariosId(){
            $ids = array();
            foreach($this->getPdeCentroRecepcionUsUsuarios() as $o){
            
                $ids[] = $o->getPdeCentroRecepcionId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeCentroRecepcions asignados al UsUsuario */ 	
	public function setPdeCentroRecepcionUsUsuarios($ids){
            $this->deletePdeCentroRecepcionUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeCentroRecepcionUsUsuario();
                    $o->setPdeCentroRecepcionId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeCentroRecepcion en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionPdeCentroRecepcionUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeCentroPedidos asignados a UsUsuario */ 	
	public function getPdeCentroPedidoUsUsuariosId(){
            $ids = array();
            foreach($this->getPdeCentroPedidoUsUsuarios() as $o){
            
                $ids[] = $o->getPdeCentroPedidoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeCentroPedidos asignados al UsUsuario */ 	
	public function setPdeCentroPedidoUsUsuarios($ids){
            $this->deletePdeCentroPedidoUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeCentroPedidoUsUsuario();
                    $o->setPdeCentroPedidoId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeCentroPedido en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionPdeCentroPedidoUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los NovNovedads asignados a UsUsuario */ 	
	public function getNovNovedadDestinatariosId(){
            $ids = array();
            foreach($this->getNovNovedadDestinatarios() as $o){
            
                $ids[] = $o->getNovNovedadId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos NovNovedads asignados al UsUsuario */ 	
	public function setNovNovedadDestinatarios($ids){
            $this->deleteNovNovedadDestinatarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new NovNovedadDestinatario();
                    $o->setNovNovedadId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion NovNovedad en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionNovNovedadDestinatario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los AltAlertas asignados a UsUsuario */ 	
	public function getAltAlertaUsUsuariosId(){
            $ids = array();
            foreach($this->getAltAlertaUsUsuarios() as $o){
            
                $ids[] = $o->getAltAlertaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos AltAlertas asignados al UsUsuario */ 	
	public function setAltAlertaUsUsuarios($ids){
            $this->deleteAltAlertaUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new AltAlertaUsUsuario();
                    $o->setAltAlertaId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion AltAlerta en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionAltAlertaUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los AltControls asignados a UsUsuario */ 	
	public function getAltControlUsUsuariosId(){
            $ids = array();
            foreach($this->getAltControlUsUsuarios() as $o){
            
                $ids[] = $o->getAltControlId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos AltControls asignados al UsUsuario */ 	
	public function setAltControlUsUsuarios($ids){
            $this->deleteAltControlUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new AltControlUsUsuario();
                    $o->setAltControlId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion AltControl en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionAltControlUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los FndCajeros asignados a UsUsuario */ 	
	public function getFndCajeroUsUsuariosId(){
            $ids = array();
            foreach($this->getFndCajeroUsUsuarios() as $o){
            
                $ids[] = $o->getFndCajeroId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos FndCajeros asignados al UsUsuario */ 	
	public function setFndCajeroUsUsuarios($ids){
            $this->deleteFndCajeroUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new FndCajeroUsUsuario();
                    $o->setFndCajeroId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion FndCajero en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionFndCajeroUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los OpeChofers asignados a UsUsuario */ 	
	public function getOpeChoferUsUsuariosId(){
            $ids = array();
            foreach($this->getOpeChoferUsUsuarios() as $o){
            
                $ids[] = $o->getOpeChoferId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos OpeChofers asignados al UsUsuario */ 	
	public function setOpeChoferUsUsuarios($ids){
            $this->deleteOpeChoferUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new OpeChoferUsUsuario();
                    $o->setOpeChoferId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion OpeChofer en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionOpeChoferUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PerPersonas asignados a UsUsuario */ 	
	public function getPerPersonaUsUsuariosId(){
            $ids = array();
            foreach($this->getPerPersonaUsUsuarios() as $o){
            
                $ids[] = $o->getPerPersonaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PerPersonas asignados al UsUsuario */ 	
	public function setPerPersonaUsUsuarios($ids){
            $this->deletePerPersonaUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PerPersonaUsUsuario();
                    $o->setPerPersonaId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PerPersona en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionPerPersonaUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PlnJornadas asignados a UsUsuario */ 	
	public function getPlnJornadaUsUsuariosId(){
            $ids = array();
            foreach($this->getPlnJornadaUsUsuarios() as $o){
            
                $ids[] = $o->getPlnJornadaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PlnJornadas asignados al UsUsuario */ 	
	public function setPlnJornadaUsUsuarios($ids){
            $this->deletePlnJornadaUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PlnJornadaUsUsuario();
                    $o->setPlnJornadaId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PlnJornada en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionPlnJornadaUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los OpeOperarios asignados a UsUsuario */ 	
	public function getOpeOperarioUsUsuariosId(){
            $ids = array();
            foreach($this->getOpeOperarioUsUsuarios() as $o){
            
                $ids[] = $o->getOpeOperarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos OpeOperarios asignados al UsUsuario */ 	
	public function setOpeOperarioUsUsuarios($ids){
            $this->deleteOpeOperarioUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new OpeOperarioUsUsuario();
                    $o->setOpeOperarioId($id);
                    $o->setUsUsuarioId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion OpeOperario en el alta de UsUsuario */ 	
	public function getAltaMostrarBloqueRelacionOpeOperarioUsUsuario(){
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM us_usuario'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'us_usuario';");
            
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

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_lenguaje_id' */ 	
	static function getOxGralLenguajeId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_LENGUAJE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'apellido' */ 	
	static function getOxApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'apellido' */ 	
	static function getOsxApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nombre' */ 	
	static function getOxNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'nombre' */ 	
	static function getOsxNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'usuario' */ 	
	static function getOxUsuario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_USUARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'usuario' */ 	
	static function getOsxUsuario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_USUARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'hash' */ 	
	static function getOxHash($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HASH, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'hash' */ 	
	static function getOsxHash($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_HASH, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'email' */ 	
	static function getOsxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'telefono' */ 	
	static function getOsxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'celular' */ 	
	static function getOxCelular($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CELULAR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'celular' */ 	
	static function getOsxCelular($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CELULAR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'absoluto' */ 	
	static function getOxAbsoluto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ABSOLUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'absoluto' */ 	
	static function getOsxAbsoluto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ABSOLUTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'activado' */ 	
	static function getOxActivado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTIVADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'activado' */ 	
	static function getOsxActivado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ACTIVADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios(null, $criterio);
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

            $obs = self::getUsUsuarios($paginador, $criterio);
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

            $obs = self::getUsUsuarios($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'us_usuario_adm');
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
	public function getUsUsuarioDatosParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(UsUsuarioDato::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(UsUsuarioDato::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(UsUsuarioDato::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(UsUsuarioDato::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $us_usuario_datos = UsUsuarioDato::getUsUsuarioDatos($paginador, $c);

            $arr['COLECCION'] = $us_usuario_datos;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}

	/* retorna coleccion para mostrar en bloque vinculos 'modificado_por' */ 	
	public function getUsMensajesParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(UsMensaje::GEN_ATTR_US_USUARIO_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(UsMensaje::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(UsMensaje::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(UsMensaje::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(UsMensaje::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(UsMensaje::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $us_mensajes = UsMensaje::getUsMensajes($paginador, $c);

            $arr['COLECCION'] = $us_mensajes;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(UsUsuario::GEN_TABLA);
                $c->addOrden(UsUsuario::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $us_usuarios = UsUsuario::getUsUsuarios(null, $c);

                $arr = array();
                foreach($us_usuarios as $us_usuario){
                    $descripcion = $us_usuario->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>