<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:46 hs */ 
class BGralSucursal
{ 
	
	const SES_PAGINACION = 'adm_gralsucursal_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_gralsucursal_paginas_registros';
	const SES_CRITERIOS = 'adm_gralsucursal_criterios';
	
	const GEN_CLASE = 'GralSucursal';
	const GEN_TABLA = 'gral_sucursal';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BGralSucursal */ 
	const GEN_ATTR_ID = 'gral_sucursal.id';
	const GEN_ATTR_DESCRIPCION = 'gral_sucursal.descripcion';
	const GEN_ATTR_GRAL_EMPRESA_ID = 'gral_sucursal.gral_empresa_id';
	const GEN_ATTR_GRAL_SUCURSAL_TIPO_ID = 'gral_sucursal.gral_sucursal_tipo_id';
	const GEN_ATTR_DOMICILIO = 'gral_sucursal.domicilio';
	const GEN_ATTR_TELEFONO = 'gral_sucursal.telefono';
	const GEN_ATTR_EMAIL = 'gral_sucursal.email';
	const GEN_ATTR_CODIGO_POSTAL = 'gral_sucursal.codigo_postal';
	const GEN_ATTR_GEO_LOCALIDAD_ID = 'gral_sucursal.geo_localidad_id';
	const GEN_ATTR_CODIGO = 'gral_sucursal.codigo';
	const GEN_ATTR_LATITUD = 'gral_sucursal.latitud';
	const GEN_ATTR_LONGITUD = 'gral_sucursal.longitud';
	const GEN_ATTR_COLOR = 'gral_sucursal.color';
	const GEN_ATTR_NUMERO = 'gral_sucursal.numero';
	const GEN_ATTR_OBSERVACION = 'gral_sucursal.observacion';
	const GEN_ATTR_ORDEN = 'gral_sucursal.orden';
	const GEN_ATTR_ESTADO = 'gral_sucursal.estado';
	const GEN_ATTR_CREADO = 'gral_sucursal.creado';
	const GEN_ATTR_CREADO_POR = 'gral_sucursal.creado_por';
	const GEN_ATTR_MODIFICADO = 'gral_sucursal.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'gral_sucursal.modificado_por';

	/* Constantes de Atributos Min de BGralSucursal */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GRAL_EMPRESA_ID = 'gral_empresa_id';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_TIPO_ID = 'gral_sucursal_tipo_id';
	const GEN_ATTR_MIN_DOMICILIO = 'domicilio';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_CODIGO_POSTAL = 'codigo_postal';
	const GEN_ATTR_MIN_GEO_LOCALIDAD_ID = 'geo_localidad_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_LATITUD = 'latitud';
	const GEN_ATTR_MIN_LONGITUD = 'longitud';
	const GEN_ATTR_MIN_COLOR = 'color';
	const GEN_ATTR_MIN_NUMERO = 'numero';
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
	

	/* Atributos de BGralSucursal */ 
	private $id;
	private $descripcion;
	private $gral_empresa_id;
	private $gral_sucursal_tipo_id;
	private $domicilio;
	private $telefono;
	private $email;
	private $codigo_postal;
	private $geo_localidad_id;
	private $codigo;
	private $latitud;
	private $longitud;
	private $color;
	private $numero;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BGralSucursal */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGralEmpresaId(){ if(isset($this->gral_empresa_id)){ return $this->gral_empresa_id; }else{ return 'null'; } }
	public function getGralSucursalTipoId(){ if(isset($this->gral_sucursal_tipo_id)){ return $this->gral_sucursal_tipo_id; }else{ return 'null'; } }
	public function getDomicilio(){ if(isset($this->domicilio)){ return $this->domicilio; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getCodigoPostal(){ if(isset($this->codigo_postal)){ return $this->codigo_postal; }else{ return ''; } }
	public function getGeoLocalidadId(){ if(isset($this->geo_localidad_id)){ return $this->geo_localidad_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getLatitud(){ if(isset($this->latitud)){ return $this->latitud; }else{ return 0; } }
	public function getLongitud(){ if(isset($this->longitud)){ return $this->longitud; }else{ return 0; } }
	public function getColor(){ if(isset($this->color)){ return $this->color; }else{ return ''; } }
	public function getNumero(){ if(isset($this->numero)){ return $this->numero; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BGralSucursal */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GRAL_EMPRESA_ID."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_TIPO_ID."
				, ".self::GEN_ATTR_DOMICILIO."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_CODIGO_POSTAL."
				, ".self::GEN_ATTR_GEO_LOCALIDAD_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_LATITUD."
				, ".self::GEN_ATTR_LONGITUD."
				, ".self::GEN_ATTR_COLOR."
				, ".self::GEN_ATTR_NUMERO."
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
				$this->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
				$this->setGralSucursalTipoId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_TIPO_ID]);
				$this->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
				$this->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setLatitud($fila[self::GEN_ATTR_MIN_LATITUD]);
				$this->setLongitud($fila[self::GEN_ATTR_MIN_LONGITUD]);
				$this->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
				$this->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
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
	public function setGralEmpresaId($v){ $this->gral_empresa_id = $v; }
	public function setGralSucursalTipoId($v){ $this->gral_sucursal_tipo_id = $v; }
	public function setDomicilio($v){ $this->domicilio = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setCodigoPostal($v){ $this->codigo_postal = $v; }
	public function setGeoLocalidadId($v){ $this->geo_localidad_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setLatitud($v){ $this->latitud = $v; }
	public function setLongitud($v){ $this->longitud = $v; }
	public function setColor($v){ $this->color = $v; }
	public function setNumero($v){ $this->numero = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new GralSucursal();
            $o->setId($fila[GralSucursal::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$o->setGralSucursalTipoId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_TIPO_ID]);
			$o->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$o->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setLatitud($fila[self::GEN_ATTR_MIN_LATITUD]);
			$o->setLongitud($fila[self::GEN_ATTR_MIN_LONGITUD]);
			$o->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$o->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BGralSucursal */ 	
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

	/* Cambia el estado de BGralSucursal */ 	
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

	/* Save de BGralSucursal */ 	
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
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_TIPO_ID."
						, ".self::GEN_ATTR_MIN_DOMICILIO."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_LATITUD."
						, ".self::GEN_ATTR_MIN_LONGITUD."
						, ".self::GEN_ATTR_MIN_COLOR."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('gral_sucursal_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGralEmpresaId()."
						, ".$this->getGralSucursalTipoId()."
						, '".$this->getDomicilio()."'
						, '".$this->getTelefono()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigoPostal()."'
						, ".$this->getGeoLocalidadId()."
						, '".$this->getCodigo()."'
						, '".$this->getLatitud()."'
						, '".$this->getLongitud()."'
						, '".$this->getColor()."'
						, '".$this->getNumero()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('gral_sucursal_seq')";
            
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
                 
				 ".GralSucursal::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_TIPO_ID." = ".$this->getGralSucursalTipoId()."
						, ".self::GEN_ATTR_MIN_DOMICILIO." = '".$this->getDomicilio()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_LATITUD." = '".$this->getLatitud()."'
						, ".self::GEN_ATTR_MIN_LONGITUD." = '".$this->getLongitud()."'
						, ".self::GEN_ATTR_MIN_COLOR." = '".$this->getColor()."'
						, ".self::GEN_ATTR_MIN_NUMERO." = '".$this->getNumero()."'
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
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_TIPO_ID."
						, ".self::GEN_ATTR_MIN_DOMICILIO."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_LATITUD."
						, ".self::GEN_ATTR_MIN_LONGITUD."
						, ".self::GEN_ATTR_MIN_COLOR."
						, ".self::GEN_ATTR_MIN_NUMERO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getGralEmpresaId()."
						, ".$this->getGralSucursalTipoId()."
						, '".$this->getDomicilio()."'
						, '".$this->getTelefono()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigoPostal()."'
						, ".$this->getGeoLocalidadId()."
						, '".$this->getCodigo()."'
						, '".$this->getLatitud()."'
						, '".$this->getLongitud()."'
						, '".$this->getColor()."'
						, '".$this->getNumero()."'
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
                     
				 ".GralSucursal::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_EMPRESA_ID." = ".$this->getGralEmpresaId()."
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_TIPO_ID." = ".$this->getGralSucursalTipoId()."
						, ".self::GEN_ATTR_MIN_DOMICILIO." = '".$this->getDomicilio()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_LATITUD." = '".$this->getLatitud()."'
						, ".self::GEN_ATTR_MIN_LONGITUD." = '".$this->getLongitud()."'
						, ".self::GEN_ATTR_MIN_COLOR." = '".$this->getColor()."'
						, ".self::GEN_ATTR_MIN_NUMERO." = '".$this->getNumero()."'
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
            $o = new GralSucursal();
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

	/* Delete de BGralSucursal */ 	
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
	
            // se elimina la coleccion de GralSucursalValoracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalValoracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalValoracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalValoracionAgrupacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalValoracionAgrupacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalValoracionTipoItemGralSucursals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalValoracionTipoItemGralSucursal::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalValoracionTipoItemGralSucursals(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalVtaPuntoVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalVtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalVtaPuntoVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalCliClientes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalCliCliente::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalCliClientes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalGralCajas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalGralCaja::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalGralCajas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralSucursalPanPanols relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalPanPanol::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalPanPanols(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCentroCostoGralSucursals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCentroCostoGralSucursal::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCentroCostoGralSucursals(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaOrdenVentas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaOrdenVentas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteHabers relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteHabers(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjustes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjustes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CtrlSectors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CtrlSector::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCtrlSectors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PerPersonaGralSucursals relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PerPersonaGralSucursal::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPerPersonaGralSucursals(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarGralSucursal(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getGralSucursals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = GralSucursal::setAplicarFiltrosDeAlcance($criterio);

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
	
		$gralsucursals = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $gralsucursal = new GralSucursal();
                    $gralsucursal->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $gralsucursal->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$gralsucursal->setGralEmpresaId($fila[self::GEN_ATTR_MIN_GRAL_EMPRESA_ID]);
			$gralsucursal->setGralSucursalTipoId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_TIPO_ID]);
			$gralsucursal->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
			$gralsucursal->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$gralsucursal->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$gralsucursal->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$gralsucursal->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$gralsucursal->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$gralsucursal->setLatitud($fila[self::GEN_ATTR_MIN_LATITUD]);
			$gralsucursal->setLongitud($fila[self::GEN_ATTR_MIN_LONGITUD]);
			$gralsucursal->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$gralsucursal->setNumero($fila[self::GEN_ATTR_MIN_NUMERO]);
			$gralsucursal->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$gralsucursal->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$gralsucursal->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$gralsucursal->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$gralsucursal->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$gralsucursal->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$gralsucursal->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $gralsucursals[] = $gralsucursal;
		}
		
		return $gralsucursals;
	}	
	

	/* Método getGralSucursals Habilitados */ 	
	static function getGralSucursalsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return GralSucursal::getGralSucursals($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getGralSucursals para listado de Backend */ 	
	static function getGralSucursalsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return GralSucursal::getGralSucursals($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getGralSucursalsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = GralSucursal::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = GralSucursal::getGralSucursals($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGralSucursals filtrado para select */ 	
	static function getGralSucursalsCmbF($paginador = null, $criterio = null){
            $col = GralSucursal::getGralSucursals($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getGralSucursals filtrado por una coleccion de objetos foraneos de GralEmpresa */ 	
	static function getGralSucursalsXGralEmpresas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(GralSucursal::GEN_ATTR_GRAL_EMPRESA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addOrden(GralSucursal::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = GralSucursal::getGralSucursals($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralEmpresaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getGralSucursals filtrado por una coleccion de objetos foraneos de GralSucursalTipo */ 	
	static function getGralSucursalsXGralSucursalTipos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(GralSucursal::GEN_ATTR_GRAL_SUCURSAL_TIPO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addOrden(GralSucursal::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = GralSucursal::getGralSucursals($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalTipoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getGralSucursals filtrado por una coleccion de objetos foraneos de GeoLocalidad */ 	
	static function getGralSucursalsXGeoLocalidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(GralSucursal::GEN_ATTR_GEO_LOCALIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addOrden(GralSucursal::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = GralSucursal::getGralSucursals($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoLocalidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'gral_sucursal_adm.php';
            $url_gestion = 'gral_sucursal_gestion.php';
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
	

	/* Metodo getGralSucursalValoracions */ 	
	public function getGralSucursalValoracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalValoracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalValoracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalValoracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalValoracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalValoracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalValoracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalvaloracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalvaloracion = GralSucursalValoracion::hidratarObjeto($fila);			
                $gralsucursalvaloracions[] = $gralsucursalvaloracion;
            }

            return $gralsucursalvaloracions;
	}	
	

	/* Método getGralSucursalValoracionsBloque para MasInfo */ 	
	public function getGralSucursalValoracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalValoracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalValoracions Habilitados */ 	
	public function getGralSucursalValoracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalValoracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalValoracion */ 	
	public function getGralSucursalValoracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalValoracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalValoracion relacionadas */ 	
	public function deleteGralSucursalValoracions(){
            $obs = $this->getGralSucursalValoracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalValoracionsCmb() GralSucursalValoracion relacionadas */ 	
	public function getGralSucursalValoracionsCmb(){
            $c = new Criterio();
            $c->add(GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracion::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalValoracion::getGralSucursalValoracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursalValoracionAgrupacions (Coleccion) relacionados a traves de GralSucursalValoracion */ 	
	public function getGralSucursalValoracionAgrupacionsXGralSucursalValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracion::GEN_TABLA, GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_VALORACION_AGRUPACION_ID, GralSucursalValoracionAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursalValoracionAgrupacions relacionados a traves de GralSucursalValoracion */ 	
	public function getCantidadGralSucursalValoracionAgrupacionsXGralSucursalValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursalValoracionAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracion::GEN_TABLA, GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_VALORACION_AGRUPACION_ID, GralSucursalValoracionAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursalValoracionAgrupacion (Objeto) relacionado a traves de GralSucursalValoracion */ 	
	public function getGralSucursalValoracionAgrupacionXGralSucursalValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalValoracionAgrupacionsXGralSucursalValoracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalValoracionAgrupacions */ 	
	public function getGralSucursalValoracionAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalValoracionAgrupacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalValoracionAgrupacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalValoracionAgrupacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalValoracionAgrupacion::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalValoracionAgrupacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalvaloracionagrupacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalvaloracionagrupacion = GralSucursalValoracionAgrupacion::hidratarObjeto($fila);			
                $gralsucursalvaloracionagrupacions[] = $gralsucursalvaloracionagrupacion;
            }

            return $gralsucursalvaloracionagrupacions;
	}	
	

	/* Método getGralSucursalValoracionAgrupacionsBloque para MasInfo */ 	
	public function getGralSucursalValoracionAgrupacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalValoracionAgrupacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalValoracionAgrupacions Habilitados */ 	
	public function getGralSucursalValoracionAgrupacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalValoracionAgrupacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalValoracionAgrupacion */ 	
	public function getGralSucursalValoracionAgrupacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalValoracionAgrupacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalValoracionAgrupacion relacionadas */ 	
	public function deleteGralSucursalValoracionAgrupacions(){
            $obs = $this->getGralSucursalValoracionAgrupacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalValoracionAgrupacionsCmb() GralSucursalValoracionAgrupacion relacionadas */ 	
	public function getGralSucursalValoracionAgrupacionsCmb(){
            $c = new Criterio();
            $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionAgrupacion::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de GralSucursalValoracionAgrupacion */ 	
	public function getCliClientesXGralSucursalValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracionAgrupacion::GEN_TABLA, GralSucursalValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de GralSucursalValoracionAgrupacion */ 	
	public function getCantidadCliClientesXGralSucursalValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracionAgrupacion::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracionAgrupacion::GEN_TABLA, GralSucursalValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de GralSucursalValoracionAgrupacion */ 	
	public function getCliClienteXGralSucursalValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXGralSucursalValoracionAgrupacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalValoracionTipoItemGralSucursals */ 	
	public function getGralSucursalValoracionTipoItemGralSucursals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalValoracionTipoItemGralSucursal::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalValoracionTipoItemGralSucursal::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalValoracionTipoItemGralSucursal::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalValoracionTipoItemGralSucursal::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalvaloraciontipoitemgralsucursals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalvaloraciontipoitemgralsucursal = GralSucursalValoracionTipoItemGralSucursal::hidratarObjeto($fila);			
                $gralsucursalvaloraciontipoitemgralsucursals[] = $gralsucursalvaloraciontipoitemgralsucursal;
            }

            return $gralsucursalvaloraciontipoitemgralsucursals;
	}	
	

	/* Método getGralSucursalValoracionTipoItemGralSucursalsBloque para MasInfo */ 	
	public function getGralSucursalValoracionTipoItemGralSucursalsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalValoracionTipoItemGralSucursals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalValoracionTipoItemGralSucursals Habilitados */ 	
	public function getGralSucursalValoracionTipoItemGralSucursalsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalValoracionTipoItemGralSucursals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalValoracionTipoItemGralSucursal */ 	
	public function getGralSucursalValoracionTipoItemGralSucursal($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalValoracionTipoItemGralSucursals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalValoracionTipoItemGralSucursal relacionadas */ 	
	public function deleteGralSucursalValoracionTipoItemGralSucursals(){
            $obs = $this->getGralSucursalValoracionTipoItemGralSucursals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalValoracionTipoItemGralSucursalsCmb() GralSucursalValoracionTipoItemGralSucursal relacionadas */ 	
	public function getGralSucursalValoracionTipoItemGralSucursalsCmb(){
            $c = new Criterio();
            $c->add(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionTipoItemGralSucursal::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalValoracionTipoItemGralSucursal::getGralSucursalValoracionTipoItemGralSucursalsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursalValoracionTipoItems (Coleccion) relacionados a traves de GralSucursalValoracionTipoItemGralSucursal */ 	
	public function getGralSucursalValoracionTipoItemsXGralSucursalValoracionTipoItemGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursalValoracionTipoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionTipoItem::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracionTipoItemGralSucursal::GEN_TABLA, GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_GRAL_SUCURSAL_VALORACION_TIPO_ITEM_ID, GralSucursalValoracionTipoItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursalValoracionTipoItem::getGralSucursalValoracionTipoItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursalValoracionTipoItems relacionados a traves de GralSucursalValoracionTipoItemGralSucursal */ 	
	public function getCantidadGralSucursalValoracionTipoItemsXGralSucursalValoracionTipoItemGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursalValoracionTipoItem::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursalValoracionTipoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalValoracionTipoItem::GEN_TABLA);
            $c->addRealJoin(GralSucursalValoracionTipoItemGralSucursal::GEN_TABLA, GralSucursalValoracionTipoItemGralSucursal::GEN_ATTR_GRAL_SUCURSAL_VALORACION_TIPO_ITEM_ID, GralSucursalValoracionTipoItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursalValoracionTipoItem::getGralSucursalValoracionTipoItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursalValoracionTipoItem (Objeto) relacionado a traves de GralSucursalValoracionTipoItemGralSucursal */ 	
	public function getGralSucursalValoracionTipoItemXGralSucursalValoracionTipoItemGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalValoracionTipoItemsXGralSucursalValoracionTipoItemGralSucursal($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalVtaPuntoVentas */ 	
	public function getGralSucursalVtaPuntoVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalVtaPuntoVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalVtaPuntoVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalVtaPuntoVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalVtaPuntoVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalVtaPuntoVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalVtaPuntoVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalVtaPuntoVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalvtapuntoventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalvtapuntoventa = GralSucursalVtaPuntoVenta::hidratarObjeto($fila);			
                $gralsucursalvtapuntoventas[] = $gralsucursalvtapuntoventa;
            }

            return $gralsucursalvtapuntoventas;
	}	
	

	/* Método getGralSucursalVtaPuntoVentasBloque para MasInfo */ 	
	public function getGralSucursalVtaPuntoVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalVtaPuntoVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalVtaPuntoVentas Habilitados */ 	
	public function getGralSucursalVtaPuntoVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalVtaPuntoVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalVtaPuntoVenta */ 	
	public function getGralSucursalVtaPuntoVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalVtaPuntoVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalVtaPuntoVenta relacionadas */ 	
	public function deleteGralSucursalVtaPuntoVentas(){
            $obs = $this->getGralSucursalVtaPuntoVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalVtaPuntoVentasCmb() GralSucursalVtaPuntoVenta relacionadas */ 	
	public function getGralSucursalVtaPuntoVentasCmb(){
            $c = new Criterio();
            $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalVtaPuntoVenta::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalVtaPuntoVenta::getGralSucursalVtaPuntoVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPuntoVentas (Coleccion) relacionados a traves de GralSucursalVtaPuntoVenta */ 	
	public function getVtaPuntoVentasXGralSucursalVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->addRealJoin(GralSucursalVtaPuntoVenta::GEN_TABLA, GralSucursalVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, VtaPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPuntoVenta::getVtaPuntoVentas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPuntoVentas relacionados a traves de GralSucursalVtaPuntoVenta */ 	
	public function getCantidadVtaPuntoVentasXGralSucursalVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPuntoVenta::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalVtaPuntoVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPuntoVenta::GEN_TABLA);
            $c->addRealJoin(GralSucursalVtaPuntoVenta::GEN_TABLA, GralSucursalVtaPuntoVenta::GEN_ATTR_VTA_PUNTO_VENTA_ID, VtaPuntoVenta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPuntoVenta::getVtaPuntoVentas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPuntoVenta (Objeto) relacionado a traves de GralSucursalVtaPuntoVenta */ 	
	public function getVtaPuntoVentaXGralSucursalVtaPuntoVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPuntoVentasXGralSucursalVtaPuntoVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalCliClientes */ 	
	public function getGralSucursalCliClientes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalCliCliente::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalCliCliente::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalCliCliente::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalCliCliente::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalCliCliente::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalcliclientes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalclicliente = GralSucursalCliCliente::hidratarObjeto($fila);			
                $gralsucursalcliclientes[] = $gralsucursalclicliente;
            }

            return $gralsucursalcliclientes;
	}	
	

	/* Método getGralSucursalCliClientesBloque para MasInfo */ 	
	public function getGralSucursalCliClientesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalCliClientes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalCliClientes Habilitados */ 	
	public function getGralSucursalCliClientesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalCliClientes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalCliCliente */ 	
	public function getGralSucursalCliCliente($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalCliClientes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalCliCliente relacionadas */ 	
	public function deleteGralSucursalCliClientes(){
            $obs = $this->getGralSucursalCliClientes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalCliClientesCmb() GralSucursalCliCliente relacionadas */ 	
	public function getGralSucursalCliClientesCmb(){
            $c = new Criterio();
            $c->add(GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalCliCliente::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalCliCliente::getGralSucursalCliClientesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de GralSucursalCliCliente */ 	
	public function getCliClientesXGralSucursalCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de GralSucursalCliCliente */ 	
	public function getCantidadCliClientesXGralSucursalCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de GralSucursalCliCliente */ 	
	public function getCliClienteXGralSucursalCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXGralSucursalCliCliente($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalVtaVendedors */ 	
	public function getGralSucursalVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalVtaVendedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalVtaVendedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalVtaVendedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalVtaVendedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalVtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalVtaVendedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalVtaVendedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalvtavendedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalvtavendedor = GralSucursalVtaVendedor::hidratarObjeto($fila);			
                $gralsucursalvtavendedors[] = $gralsucursalvtavendedor;
            }

            return $gralsucursalvtavendedors;
	}	
	

	/* Método getGralSucursalVtaVendedorsBloque para MasInfo */ 	
	public function getGralSucursalVtaVendedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalVtaVendedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalVtaVendedors Habilitados */ 	
	public function getGralSucursalVtaVendedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalVtaVendedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalVtaVendedor */ 	
	public function getGralSucursalVtaVendedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalVtaVendedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalVtaVendedor relacionadas */ 	
	public function deleteGralSucursalVtaVendedors(){
            $obs = $this->getGralSucursalVtaVendedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalVtaVendedorsCmb() GralSucursalVtaVendedor relacionadas */ 	
	public function getGralSucursalVtaVendedorsCmb(){
            $c = new Criterio();
            $c->add(GralSucursalVtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalVtaVendedor::getGralSucursalVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedors (Coleccion) relacionados a traves de GralSucursalVtaVendedor */ 	
	public function getVtaVendedorsXGralSucursalVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalVtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(GralSucursalVtaVendedor::GEN_TABLA, GralSucursalVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedors relacionados a traves de GralSucursalVtaVendedor */ 	
	public function getCantidadVtaVendedorsXGralSucursalVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalVtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addRealJoin(GralSucursalVtaVendedor::GEN_TABLA, GralSucursalVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedor (Objeto) relacionado a traves de GralSucursalVtaVendedor */ 	
	public function getVtaVendedorXGralSucursalVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorsXGralSucursalVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(GralSucursalUsUsuario::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(GralSucursalUsUsuario::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalUsUsuario::getGralSucursalUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de GralSucursalUsUsuario */ 	
	public function getUsUsuariosXGralSucursalUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalUsUsuario::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(GralSucursalUsUsuario::GEN_TABLA, GralSucursalUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de GralSucursalUsUsuario */ 	
	public function getCantidadUsUsuariosXGralSucursalUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalUsUsuario::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(GralSucursalUsUsuario::GEN_TABLA, GralSucursalUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de GralSucursalUsUsuario */ 	
	public function getUsUsuarioXGralSucursalUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXGralSucursalUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalGralCajas */ 	
	public function getGralSucursalGralCajas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalGralCaja::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalGralCaja::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalGralCaja::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalGralCaja::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalGralCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalGralCaja::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalGralCaja::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalgralcajas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalgralcaja = GralSucursalGralCaja::hidratarObjeto($fila);			
                $gralsucursalgralcajas[] = $gralsucursalgralcaja;
            }

            return $gralsucursalgralcajas;
	}	
	

	/* Método getGralSucursalGralCajasBloque para MasInfo */ 	
	public function getGralSucursalGralCajasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalGralCajas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalGralCajas Habilitados */ 	
	public function getGralSucursalGralCajasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalGralCajas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalGralCaja */ 	
	public function getGralSucursalGralCaja($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalGralCajas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalGralCaja relacionadas */ 	
	public function deleteGralSucursalGralCajas(){
            $obs = $this->getGralSucursalGralCajas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalGralCajasCmb() GralSucursalGralCaja relacionadas */ 	
	public function getGralSucursalGralCajasCmb(){
            $c = new Criterio();
            $c->add(GralSucursalGralCaja::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalGralCaja::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalGralCaja::getGralSucursalGralCajasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralCajas (Coleccion) relacionados a traves de GralSucursalGralCaja */ 	
	public function getGralCajasXGralSucursalGralCaja($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalGralCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalGralCaja::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCaja::GEN_TABLA);
            $c->addRealJoin(GralSucursalGralCaja::GEN_TABLA, GralSucursalGralCaja::GEN_ATTR_GRAL_CAJA_ID, GralCaja::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCaja::getGralCajas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralCajas relacionados a traves de GralSucursalGralCaja */ 	
	public function getCantidadGralCajasXGralSucursalGralCaja($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralCaja::GEN_ATTR_ID);
            if($estado){
                $c->add(GralCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalGralCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalGralCaja::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCaja::GEN_TABLA);
            $c->addRealJoin(GralSucursalGralCaja::GEN_TABLA, GralSucursalGralCaja::GEN_ATTR_GRAL_CAJA_ID, GralCaja::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCaja::getGralCajas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralCaja (Objeto) relacionado a traves de GralSucursalGralCaja */ 	
	public function getGralCajaXGralSucursalGralCaja($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralCajasXGralSucursalGralCaja($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralSucursalPanPanols */ 	
	public function getGralSucursalPanPanols($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralSucursalPanPanol::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralSucursalPanPanol::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralSucursalPanPanol::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralSucursalPanPanol::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralSucursalPanPanol::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralSucursalPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralSucursalPanPanol::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralSucursalPanPanol::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralsucursalpanpanols = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralsucursalpanpanol = GralSucursalPanPanol::hidratarObjeto($fila);			
                $gralsucursalpanpanols[] = $gralsucursalpanpanol;
            }

            return $gralsucursalpanpanols;
	}	
	

	/* Método getGralSucursalPanPanolsBloque para MasInfo */ 	
	public function getGralSucursalPanPanolsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralSucursalPanPanols($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralSucursalPanPanols Habilitados */ 	
	public function getGralSucursalPanPanolsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralSucursalPanPanols($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralSucursalPanPanol */ 	
	public function getGralSucursalPanPanol($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralSucursalPanPanols($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralSucursalPanPanol relacionadas */ 	
	public function deleteGralSucursalPanPanols(){
            $obs = $this->getGralSucursalPanPanols();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralSucursalPanPanolsCmb() GralSucursalPanPanol relacionadas */ 	
	public function getGralSucursalPanPanolsCmb(){
            $c = new Criterio();
            $c->add(GralSucursalPanPanol::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalPanPanol::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalPanPanol::getGralSucursalPanPanolsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PanPanols (Coleccion) relacionados a traves de GralSucursalPanPanol */ 	
	public function getPanPanolsXGralSucursalPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalPanPanol::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addRealJoin(GralSucursalPanPanol::GEN_TABLA, GralSucursalPanPanol::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanPanol::getPanPanols($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PanPanols relacionados a traves de GralSucursalPanPanol */ 	
	public function getCantidadPanPanolsXGralSucursalPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PanPanol::GEN_ATTR_ID);
            if($estado){
                $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalPanPanol::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addRealJoin(GralSucursalPanPanol::GEN_TABLA, GralSucursalPanPanol::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PanPanol::getPanPanols($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PanPanol (Objeto) relacionado a traves de GralSucursalPanPanol */ 	
	public function getPanPanolXGralSucursalPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPanPanolsXGralSucursalPanPanol($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCentroCostoGralSucursals */ 	
	public function getGralCentroCostoGralSucursals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCentroCostoGralSucursal::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCentroCostoGralSucursal::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCentroCostoGralSucursal::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCentroCostoGralSucursal::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCentroCostoGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCentroCostoGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCentroCostoGralSucursal::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCentroCostoGralSucursal::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcentrocostogralsucursals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcentrocostogralsucursal = GralCentroCostoGralSucursal::hidratarObjeto($fila);			
                $gralcentrocostogralsucursals[] = $gralcentrocostogralsucursal;
            }

            return $gralcentrocostogralsucursals;
	}	
	

	/* Método getGralCentroCostoGralSucursalsBloque para MasInfo */ 	
	public function getGralCentroCostoGralSucursalsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCentroCostoGralSucursals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCentroCostoGralSucursals Habilitados */ 	
	public function getGralCentroCostoGralSucursalsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCentroCostoGralSucursals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCentroCostoGralSucursal */ 	
	public function getGralCentroCostoGralSucursal($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCentroCostoGralSucursals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCentroCostoGralSucursal relacionadas */ 	
	public function deleteGralCentroCostoGralSucursals(){
            $obs = $this->getGralCentroCostoGralSucursals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCentroCostoGralSucursalsCmb() GralCentroCostoGralSucursal relacionadas */ 	
	public function getGralCentroCostoGralSucursalsCmb(){
            $c = new Criterio();
            $c->add(GralCentroCostoGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCostoGralSucursal::GEN_TABLA);
            $c->setCriterios();

            $os = GralCentroCostoGralSucursal::getGralCentroCostoGralSucursalsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralCentroCostos (Coleccion) relacionados a traves de GralCentroCostoGralSucursal */ 	
	public function getGralCentroCostosXGralCentroCostoGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCostoGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCostoGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(GralCentroCostoGralSucursal::GEN_TABLA, GralCentroCostoGralSucursal::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralCentroCostos relacionados a traves de GralCentroCostoGralSucursal */ 	
	public function getCantidadGralCentroCostosXGralCentroCostoGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralCentroCosto::GEN_ATTR_ID);
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCostoGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCostoGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(GralCentroCostoGralSucursal::GEN_TABLA, GralCentroCostoGralSucursal::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralCentroCosto (Objeto) relacionado a traves de GralCentroCostoGralSucursal */ 	
	public function getGralCentroCostoXGralCentroCostoGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralCentroCostosXGralCentroCostoGralSucursal($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaVendedors */ 	
	public function getVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedor = VtaVendedor::hidratarObjeto($fila);			
                $vtavendedors[] = $vtavendedor;
            }

            return $vtavendedors;
	}	
	

	/* Método getVtaVendedorsBloque para MasInfo */ 	
	public function getVtaVendedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedors Habilitados */ 	
	public function getVtaVendedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedor */ 	
	public function getVtaVendedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedor relacionadas */ 	
	public function deleteVtaVendedors(){
            $obs = $this->getVtaVendedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorsCmb() VtaVendedor relacionadas */ 	
	public function getVtaVendedorsCmb(){
            $c = new Criterio();
            $c->add(VtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedor::getVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaTipoVendedors (Coleccion) relacionados a traves de VtaVendedor */ 	
	public function getVtaTipoVendedorsXVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaTipoVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_VTA_TIPO_VENDEDOR_ID, VtaTipoVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoVendedor::getVtaTipoVendedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaTipoVendedors relacionados a traves de VtaVendedor */ 	
	public function getCantidadVtaTipoVendedorsXVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaTipoVendedor::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaTipoVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaTipoVendedor::GEN_TABLA);
            $c->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_VTA_TIPO_VENDEDOR_ID, VtaTipoVendedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaTipoVendedor::getVtaTipoVendedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaTipoVendedor (Objeto) relacionado a traves de VtaVendedor */ 	
	public function getVtaTipoVendedorXVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaTipoVendedorsXVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestos */ 	
	public function getVtaPresupuestos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuesto::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuesto::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuesto::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuesto::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuesto::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuesto::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuesto = VtaPresupuesto::hidratarObjeto($fila);			
                $vtapresupuestos[] = $vtapresupuesto;
            }

            return $vtapresupuestos;
	}	
	

	/* Método getVtaPresupuestosBloque para MasInfo */ 	
	public function getVtaPresupuestosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestos Habilitados */ 	
	public function getVtaPresupuestosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuesto */ 	
	public function getVtaPresupuesto($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuesto relacionadas */ 	
	public function deleteVtaPresupuestos(){
            $obs = $this->getVtaPresupuestos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestosCmb() VtaPresupuesto relacionadas */ 	
	public function getVtaPresupuestosCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaPresupuesto */ 	
	public function getCliClientesXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaPresupuesto */ 	
	public function getCantidadCliClientesXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaPresupuesto */ 	
	public function getCliClienteXVtaPresupuesto($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaPresupuesto($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRecibos */ 	
	public function getVtaRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRecibo::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtarecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtarecibo = VtaRecibo::hidratarObjeto($fila);			
                $vtarecibos[] = $vtarecibo;
            }

            return $vtarecibos;
	}	
	

	/* Método getVtaRecibosBloque para MasInfo */ 	
	public function getVtaRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRecibos Habilitados */ 	
	public function getVtaRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRecibo */ 	
	public function getVtaRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRecibo relacionadas */ 	
	public function deleteVtaRecibos(){
            $obs = $this->getVtaRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRecibosCmb() VtaRecibo relacionadas */ 	
	public function getVtaRecibosCmb(){
            $c = new Criterio();
            $c->add(VtaRecibo::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRecibo::getVtaRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRecibo */ 	
	public function getCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRecibo */ 	
	public function getCantidadCliClientesXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRecibo::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRecibo */ 	
	public function getCliClienteXVtaRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaOrdenVentas */ 	
	public function getVtaOrdenVentas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaOrdenVenta::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaOrdenVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaOrdenVenta::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaordenventas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaordenventa = VtaOrdenVenta::hidratarObjeto($fila);			
                $vtaordenventas[] = $vtaordenventa;
            }

            return $vtaordenventas;
	}	
	

	/* Método getVtaOrdenVentasBloque para MasInfo */ 	
	public function getVtaOrdenVentasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaOrdenVentas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaOrdenVentas Habilitados */ 	
	public function getVtaOrdenVentasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaOrdenVentas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaOrdenVenta */ 	
	public function getVtaOrdenVenta($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaOrdenVentas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaOrdenVenta relacionadas */ 	
	public function deleteVtaOrdenVentas(){
            $obs = $this->getVtaOrdenVentas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaOrdenVentasCmb() VtaOrdenVenta relacionadas */ 	
	public function getVtaOrdenVentasCmb(){
            $c = new Criterio();
            $c->add(VtaOrdenVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->setCriterios();

            $os = VtaOrdenVenta::getVtaOrdenVentasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaOrdenVenta */ 	
	public function getCantidadVtaPresupuestosXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaOrdenVenta::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaOrdenVenta */ 	
	public function getVtaPresupuestoXVtaOrdenVenta($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaOrdenVenta($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitos */ 	
	public function getVtaRemitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemito::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremito = VtaRemito::hidratarObjeto($fila);			
                $vtaremitos[] = $vtaremito;
            }

            return $vtaremitos;
	}	
	

	/* Método getVtaRemitosBloque para MasInfo */ 	
	public function getVtaRemitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitos Habilitados */ 	
	public function getVtaRemitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemito */ 	
	public function getVtaRemito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemito relacionadas */ 	
	public function deleteVtaRemitos(){
            $obs = $this->getVtaRemitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitosCmb() VtaRemito relacionadas */ 	
	public function getVtaRemitosCmb(){
            $c = new Criterio();
            $c->add(VtaRemito::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemito::getVtaRemitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRemito */ 	
	public function getCliClientesXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRemito */ 	
	public function getCantidadCliClientesXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemito::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRemito */ 	
	public function getCliClienteXVtaRemito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRemito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaFacturas */ 	
	public function getVtaFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtafacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtafactura = VtaFactura::hidratarObjeto($fila);			
                $vtafacturas[] = $vtafactura;
            }

            return $vtafacturas;
	}	
	

	/* Método getVtaFacturasBloque para MasInfo */ 	
	public function getVtaFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaFacturas Habilitados */ 	
	public function getVtaFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaFactura */ 	
	public function getVtaFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaFactura relacionadas */ 	
	public function deleteVtaFacturas(){
            $obs = $this->getVtaFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaFacturasCmb() VtaFactura relacionadas */ 	
	public function getVtaFacturasCmb(){
            $c = new Criterio();
            $c->add(VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaFactura */ 	
	public function getCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaFactura */ 	
	public function getCantidadCliClientesXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaFactura */ 	
	public function getCliClienteXVtaFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteDebes */ 	
	public function getVtaAjusteDebes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteDebe::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteDebe::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteDebe::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustedebes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustedebe = VtaAjusteDebe::hidratarObjeto($fila);			
                $vtaajustedebes[] = $vtaajustedebe;
            }

            return $vtaajustedebes;
	}	
	

	/* Método getVtaAjusteDebesBloque para MasInfo */ 	
	public function getVtaAjusteDebesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteDebes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteDebes Habilitados */ 	
	public function getVtaAjusteDebesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteDebes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteDebe */ 	
	public function getVtaAjusteDebe($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteDebes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteDebe relacionadas */ 	
	public function deleteVtaAjusteDebes(){
            $obs = $this->getVtaAjusteDebes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteDebesCmb() VtaAjusteDebe relacionadas */ 	
	public function getVtaAjusteDebesCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteDebe */ 	
	public function getCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteDebe */ 	
	public function getCantidadCliClientesXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteDebe */ 	
	public function getCliClienteXVtaAjusteDebe($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteDebe($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaAjusteHabers */ 	
	public function getVtaAjusteHabers($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaAjusteHaber::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaAjusteHaber::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaAjusteHaber::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaAjusteHaber::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaAjusteHaber::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaajustehabers = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaajustehaber = VtaAjusteHaber::hidratarObjeto($fila);			
                $vtaajustehabers[] = $vtaajustehaber;
            }

            return $vtaajustehabers;
	}	
	

	/* Método getVtaAjusteHabersBloque para MasInfo */ 	
	public function getVtaAjusteHabersParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaAjusteHabers($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaAjusteHabers Habilitados */ 	
	public function getVtaAjusteHabersHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaAjusteHabers($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaAjusteHaber */ 	
	public function getVtaAjusteHaber($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaAjusteHabers($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaAjusteHaber relacionadas */ 	
	public function deleteVtaAjusteHabers(){
            $obs = $this->getVtaAjusteHabers();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaAjusteHabersCmb() VtaAjusteHaber relacionadas */ 	
	public function getVtaAjusteHabersCmb(){
            $c = new Criterio();
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteHaber::GEN_TABLA);
            $c->setCriterios();

            $os = VtaAjusteHaber::getVtaAjusteHabersCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaAjusteHaber */ 	
	public function getCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaAjusteHaber */ 	
	public function getCantidadCliClientesXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaAjusteHaber::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaAjusteHaber::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaAjusteHaber::GEN_TABLA, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaAjusteHaber */ 	
	public function getCliClienteXVtaAjusteHaber($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaAjusteHaber($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaRemitoAjustes */ 	
	public function getVtaRemitoAjustes($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaRemitoAjuste::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaRemitoAjuste::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaRemitoAjuste::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaRemitoAjuste::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtaremitoajustes = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtaremitoajuste = VtaRemitoAjuste::hidratarObjeto($fila);			
                $vtaremitoajustes[] = $vtaremitoajuste;
            }

            return $vtaremitoajustes;
	}	
	

	/* Método getVtaRemitoAjustesBloque para MasInfo */ 	
	public function getVtaRemitoAjustesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaRemitoAjustes Habilitados */ 	
	public function getVtaRemitoAjustesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaRemitoAjustes($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaRemitoAjuste */ 	
	public function getVtaRemitoAjuste($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaRemitoAjustes($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaRemitoAjuste relacionadas */ 	
	public function deleteVtaRemitoAjustes(){
            $obs = $this->getVtaRemitoAjustes();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaRemitoAjustesCmb() VtaRemitoAjuste relacionadas */ 	
	public function getVtaRemitoAjustesCmb(){
            $c = new Criterio();
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();

            $os = VtaRemitoAjuste::getVtaRemitoAjustesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaRemitoAjuste */ 	
	public function getCliClientesXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaRemitoAjuste */ 	
	public function getCantidadCliClientesXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaRemitoAjuste::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaRemitoAjuste */ 	
	public function getCliClienteXVtaRemitoAjuste($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaRemitoAjuste($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCtrlSectors */ 	
	public function getCtrlSectors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CtrlSector::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CtrlSector::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CtrlSector::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CtrlSector::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CtrlSector::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CtrlSector::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CtrlSector::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CtrlSector::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $ctrlsectors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $ctrlsector = CtrlSector::hidratarObjeto($fila);			
                $ctrlsectors[] = $ctrlsector;
            }

            return $ctrlsectors;
	}	
	

	/* Método getCtrlSectorsBloque para MasInfo */ 	
	public function getCtrlSectorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCtrlSectors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCtrlSectors Habilitados */ 	
	public function getCtrlSectorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCtrlSectors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCtrlSector */ 	
	public function getCtrlSector($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCtrlSectors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CtrlSector relacionadas */ 	
	public function deleteCtrlSectors(){
            $obs = $this->getCtrlSectors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCtrlSectorsCmb() CtrlSector relacionadas */ 	
	public function getCtrlSectorsCmb(){
            $c = new Criterio();
            $c->add(CtrlSector::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CtrlSector::GEN_TABLA);
            $c->setCriterios();

            $os = CtrlSector::getCtrlSectorsCmbF(null, $c);
            return $os;
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
                
            $criterio->add(PerPersona::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PerPersona::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PerPersona::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PerPersona::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getPerPersonaGralSucursals */ 	
	public function getPerPersonaGralSucursals($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PerPersonaGralSucursal::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PerPersonaGralSucursal::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PerPersonaGralSucursal::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PerPersonaGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PerPersonaGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PerPersonaGralSucursal::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PerPersonaGralSucursal::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $perpersonagralsucursals = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $perpersonagralsucursal = PerPersonaGralSucursal::hidratarObjeto($fila);			
                $perpersonagralsucursals[] = $perpersonagralsucursal;
            }

            return $perpersonagralsucursals;
	}	
	

	/* Método getPerPersonaGralSucursalsBloque para MasInfo */ 	
	public function getPerPersonaGralSucursalsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPerPersonaGralSucursals($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPerPersonaGralSucursals Habilitados */ 	
	public function getPerPersonaGralSucursalsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPerPersonaGralSucursals($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPerPersonaGralSucursal */ 	
	public function getPerPersonaGralSucursal($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPerPersonaGralSucursals($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PerPersonaGralSucursal relacionadas */ 	
	public function deletePerPersonaGralSucursals(){
            $obs = $this->getPerPersonaGralSucursals();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPerPersonaGralSucursalsCmb() PerPersonaGralSucursal relacionadas */ 	
	public function getPerPersonaGralSucursalsCmb(){
            $c = new Criterio();
            $c->add(PerPersonaGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersonaGralSucursal::GEN_TABLA);
            $c->setCriterios();

            $os = PerPersonaGralSucursal::getPerPersonaGralSucursalsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PerPersonas (Coleccion) relacionados a traves de PerPersonaGralSucursal */ 	
	public function getPerPersonasXPerPersonaGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersonaGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersonaGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addRealJoin(PerPersonaGralSucursal::GEN_TABLA, PerPersonaGralSucursal::GEN_ATTR_PER_PERSONA_ID, PerPersona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PerPersona::getPerPersonas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PerPersonas relacionados a traves de PerPersonaGralSucursal */ 	
	public function getCantidadPerPersonasXPerPersonaGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PerPersona::GEN_ATTR_ID);
            if($estado){
                $c->add(PerPersona::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PerPersonaGralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PerPersonaGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PerPersona::GEN_TABLA);
            $c->addRealJoin(PerPersonaGralSucursal::GEN_TABLA, PerPersonaGralSucursal::GEN_ATTR_PER_PERSONA_ID, PerPersona::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PerPersona::getPerPersonas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PerPersona (Objeto) relacionado a traves de PerPersonaGralSucursal */ 	
	public function getPerPersonaXPerPersonaGralSucursal($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPerPersonasXPerPersonaGralSucursal($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los GralSucursalValoracionTipoItems asignados a GralSucursal */ 	
	public function getGralSucursalValoracionTipoItemGralSucursalsId(){
            $ids = array();
            foreach($this->getGralSucursalValoracionTipoItemGralSucursals() as $o){
            
                $ids[] = $o->getGralSucursalValoracionTipoItemId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralSucursalValoracionTipoItems asignados al GralSucursal */ 	
	public function setGralSucursalValoracionTipoItemGralSucursals($ids){
            $this->deleteGralSucursalValoracionTipoItemGralSucursals();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalValoracionTipoItemGralSucursal();
                    $o->setGralSucursalValoracionTipoItemId($id);
                    $o->setGralSucursalId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralSucursalValoracionTipoItem en el alta de GralSucursal */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalValoracionTipoItemGralSucursal(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaPuntoVentas asignados a GralSucursal */ 	
	public function getGralSucursalVtaPuntoVentasId(){
            $ids = array();
            foreach($this->getGralSucursalVtaPuntoVentas() as $o){
            
                $ids[] = $o->getVtaPuntoVentaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaPuntoVentas asignados al GralSucursal */ 	
	public function setGralSucursalVtaPuntoVentas($ids){
            $this->deleteGralSucursalVtaPuntoVentas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalVtaPuntoVenta();
                    $o->setVtaPuntoVentaId($id);
                    $o->setGralSucursalId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaPuntoVenta en el alta de GralSucursal */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalVtaPuntoVenta(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliClientes asignados a GralSucursal */ 	
	public function getGralSucursalCliClientesId(){
            $ids = array();
            foreach($this->getGralSucursalCliClientes() as $o){
            
                $ids[] = $o->getCliClienteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliClientes asignados al GralSucursal */ 	
	public function setGralSucursalCliClientes($ids){
            $this->deleteGralSucursalCliClientes();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalCliCliente();
                    $o->setCliClienteId($id);
                    $o->setGralSucursalId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliCliente en el alta de GralSucursal */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalCliCliente(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaVendedors asignados a GralSucursal */ 	
	public function getGralSucursalVtaVendedorsId(){
            $ids = array();
            foreach($this->getGralSucursalVtaVendedors() as $o){
            
                $ids[] = $o->getVtaVendedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaVendedors asignados al GralSucursal */ 	
	public function setGralSucursalVtaVendedors($ids){
            $this->deleteGralSucursalVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalVtaVendedor();
                    $o->setVtaVendedorId($id);
                    $o->setGralSucursalId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaVendedor en el alta de GralSucursal */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los UsUsuarios asignados a GralSucursal */ 	
	public function getGralSucursalUsUsuariosId(){
            $ids = array();
            foreach($this->getGralSucursalUsUsuarios() as $o){
            
                $ids[] = $o->getUsUsuarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsUsuarios asignados al GralSucursal */ 	
	public function setGralSucursalUsUsuarios($ids){
            $this->deleteGralSucursalUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalUsUsuario();
                    $o->setUsUsuarioId($id);
                    $o->setGralSucursalId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsUsuario en el alta de GralSucursal */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralCajas asignados a GralSucursal */ 	
	public function getGralSucursalGralCajasId(){
            $ids = array();
            foreach($this->getGralSucursalGralCajas() as $o){
            
                $ids[] = $o->getGralCajaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralCajas asignados al GralSucursal */ 	
	public function setGralSucursalGralCajas($ids){
            $this->deleteGralSucursalGralCajas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalGralCaja();
                    $o->setGralCajaId($id);
                    $o->setGralSucursalId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralCaja en el alta de GralSucursal */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalGralCaja(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PanPanols asignados a GralSucursal */ 	
	public function getGralSucursalPanPanolsId(){
            $ids = array();
            foreach($this->getGralSucursalPanPanols() as $o){
            
                $ids[] = $o->getPanPanolId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PanPanols asignados al GralSucursal */ 	
	public function setGralSucursalPanPanols($ids){
            $this->deleteGralSucursalPanPanols();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalPanPanol();
                    $o->setPanPanolId($id);
                    $o->setGralSucursalId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PanPanol en el alta de GralSucursal */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalPanPanol(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralCentroCostos asignados a GralSucursal */ 	
	public function getGralCentroCostoGralSucursalsId(){
            $ids = array();
            foreach($this->getGralCentroCostoGralSucursals() as $o){
            
                $ids[] = $o->getGralCentroCostoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralCentroCostos asignados al GralSucursal */ 	
	public function setGralCentroCostoGralSucursals($ids){
            $this->deleteGralCentroCostoGralSucursals();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCentroCostoGralSucursal();
                    $o->setGralCentroCostoId($id);
                    $o->setGralSucursalId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralCentroCosto en el alta de GralSucursal */ 	
	public function getAltaMostrarBloqueRelacionGralCentroCostoGralSucursal(){
            return true;
	}
	

	/* Metodo que retorna el GralEmpresa (Clave Foranea) */ 	
    public function getGralEmpresa(){
        $o = new GralEmpresa();
        $o->setId($this->getGralEmpresaId());
        return $o;			
    }

	/* Metodo que retorna el GralEmpresa (Clave Foranea) en Array */ 	
    public function getGralEmpresaEnArray(&$arr_os){
        if($this->getGralEmpresaId() != 'null'){
            if(isset($arr_os[$this->getGralEmpresaId()])){
                $o = $arr_os[$this->getGralEmpresaId()];
            }else{
                $o = GralEmpresa::getOxId($this->getGralEmpresaId());
                if($o){
                    $arr_os[$this->getGralEmpresaId()] = $o;
                }
            }
        }else{
            $o = new GralEmpresa();
        }
        return $o;		
    }

	/* Metodo que retorna el GralSucursalTipo (Clave Foranea) */ 	
    public function getGralSucursalTipo(){
        $o = new GralSucursalTipo();
        $o->setId($this->getGralSucursalTipoId());
        return $o;			
    }

	/* Metodo que retorna el GralSucursalTipo (Clave Foranea) en Array */ 	
    public function getGralSucursalTipoEnArray(&$arr_os){
        if($this->getGralSucursalTipoId() != 'null'){
            if(isset($arr_os[$this->getGralSucursalTipoId()])){
                $o = $arr_os[$this->getGralSucursalTipoId()];
            }else{
                $o = GralSucursalTipo::getOxId($this->getGralSucursalTipoId());
                if($o){
                    $arr_os[$this->getGralSucursalTipoId()] = $o;
                }
            }
        }else{
            $o = new GralSucursalTipo();
        }
        return $o;		
    }

	/* Metodo que retorna el GeoLocalidad (Clave Foranea) */ 	
    public function getGeoLocalidad(){
        $o = new GeoLocalidad();
        $o->setId($this->getGeoLocalidadId());
        return $o;			
    }

	/* Metodo que retorna el GeoLocalidad (Clave Foranea) en Array */ 	
    public function getGeoLocalidadEnArray(&$arr_os){
        if($this->getGeoLocalidadId() != 'null'){
            if(isset($arr_os[$this->getGeoLocalidadId()])){
                $o = $arr_os[$this->getGeoLocalidadId()];
            }else{
                $o = GeoLocalidad::getOxId($this->getGeoLocalidadId());
                if($o){
                    $arr_os[$this->getGeoLocalidadId()] = $o;
                }
            }
        }else{
            $o = new GeoLocalidad();
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
            		
        if($contexto_solicitante != GralEmpresa::GEN_CLASE){
            if($this->getGralEmpresa()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralEmpresa::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralEmpresa()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralSucursalTipo::GEN_CLASE){
            if($this->getGralSucursalTipo()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralSucursalTipo::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralSucursalTipo()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GeoLocalidad::GEN_CLASE){
            if($this->getGeoLocalidad()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GeoLocalidad::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGeoLocalidad()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM gral_sucursal'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'gral_sucursal';");
            
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

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_empresa_id' */ 	
	static function getOxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_empresa_id' */ 	
	static function getOsxGralEmpresaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_EMPRESA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_tipo_id' */ 	
	static function getOxGralSucursalTipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_TIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_sucursal_tipo_id' */ 	
	static function getOsxGralSucursalTipoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_TIPO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio' */ 	
	static function getOxDomicilio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'domicilio' */ 	
	static function getOsxDomicilio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_postal' */ 	
	static function getOxCodigoPostal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_POSTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_postal' */ 	
	static function getOsxCodigoPostal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_POSTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_localidad_id' */ 	
	static function getOxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'geo_localidad_id' */ 	
	static function getOsxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'latitud' */ 	
	static function getOxLatitud($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LATITUD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'latitud' */ 	
	static function getOsxLatitud($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LATITUD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'longitud' */ 	
	static function getOxLongitud($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LONGITUD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'longitud' */ 	
	static function getOsxLongitud($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_LONGITUD, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'color' */ 	
	static function getOxColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'numero' */ 	
	static function getOxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'numero' */ 	
	static function getOsxNumero($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NUMERO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals(null, $criterio);
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

            $obs = self::getGralSucursals($paginador, $criterio);
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

            $obs = self::getGralSucursals($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'gral_sucursal_adm');
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
                $c->addTabla(GralSucursal::GEN_TABLA);
                $c->addOrden(GralSucursal::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $gral_sucursals = GralSucursal::getGralSucursals(null, $c);

                $arr = array();
                foreach($gral_sucursals as $gral_sucursal){
                    $descripcion = $gral_sucursal->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>