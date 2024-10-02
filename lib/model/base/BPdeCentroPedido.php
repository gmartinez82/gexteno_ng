<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPdeCentroPedido
{ 
	
	const SES_PAGINACION = 'adm_pdecentropedido_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_pdecentropedido_paginas_registros';
	const SES_CRITERIOS = 'adm_pdecentropedido_criterios';
	
	const GEN_CLASE = 'PdeCentroPedido';
	const GEN_TABLA = 'pde_centro_pedido';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPdeCentroPedido */ 
	const GEN_ATTR_ID = 'pde_centro_pedido.id';
	const GEN_ATTR_DESCRIPCION = 'pde_centro_pedido.descripcion';
	const GEN_ATTR_GEO_LOCALIDAD_ID = 'pde_centro_pedido.geo_localidad_id';
	const GEN_ATTR_RESPONSABLE = 'pde_centro_pedido.responsable';
	const GEN_ATTR_EMAIL = 'pde_centro_pedido.email';
	const GEN_ATTR_TELEFONO = 'pde_centro_pedido.telefono';
	const GEN_ATTR_DOMICILIO = 'pde_centro_pedido.domicilio';
	const GEN_ATTR_EMPRESA = 'pde_centro_pedido.empresa';
	const GEN_ATTR_URL_DOMINIO = 'pde_centro_pedido.url_dominio';
	const GEN_ATTR_EMAIL_PREFIJO = 'pde_centro_pedido.email_prefijo';
	const GEN_ATTR_CODIGO = 'pde_centro_pedido.codigo';
	const GEN_ATTR_OBSERVACION = 'pde_centro_pedido.observacion';
	const GEN_ATTR_ORDEN = 'pde_centro_pedido.orden';
	const GEN_ATTR_ESTADO = 'pde_centro_pedido.estado';
	const GEN_ATTR_CREADO = 'pde_centro_pedido.creado';
	const GEN_ATTR_CREADO_POR = 'pde_centro_pedido.creado_por';
	const GEN_ATTR_MODIFICADO = 'pde_centro_pedido.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pde_centro_pedido.modificado_por';

	/* Constantes de Atributos Min de BPdeCentroPedido */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GEO_LOCALIDAD_ID = 'geo_localidad_id';
	const GEN_ATTR_MIN_RESPONSABLE = 'responsable';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_DOMICILIO = 'domicilio';
	const GEN_ATTR_MIN_EMPRESA = 'empresa';
	const GEN_ATTR_MIN_URL_DOMINIO = 'url_dominio';
	const GEN_ATTR_MIN_EMAIL_PREFIJO = 'email_prefijo';
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
	

	/* Atributos de BPdeCentroPedido */ 
	private $id;
	private $descripcion;
	private $geo_localidad_id;
	private $responsable;
	private $email;
	private $telefono;
	private $domicilio;
	private $empresa;
	private $url_dominio;
	private $email_prefijo;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPdeCentroPedido */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGeoLocalidadId(){ if(isset($this->geo_localidad_id)){ return $this->geo_localidad_id; }else{ return 'null'; } }
	public function getResponsable(){ if(isset($this->responsable)){ return $this->responsable; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getDomicilio(){ if(isset($this->domicilio)){ return $this->domicilio; }else{ return ''; } }
	public function getEmpresa(){ if(isset($this->empresa)){ return $this->empresa; }else{ return ''; } }
	public function getUrlDominio(){ if(isset($this->url_dominio)){ return $this->url_dominio; }else{ return ''; } }
	public function getEmailPrefijo(){ if(isset($this->email_prefijo)){ return $this->email_prefijo; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPdeCentroPedido */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GEO_LOCALIDAD_ID."
				, ".self::GEN_ATTR_RESPONSABLE."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_DOMICILIO."
				, ".self::GEN_ATTR_EMPRESA."
				, ".self::GEN_ATTR_URL_DOMINIO."
				, ".self::GEN_ATTR_EMAIL_PREFIJO."
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
				$this->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
				$this->setResponsable($fila[self::GEN_ATTR_MIN_RESPONSABLE]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
				$this->setEmpresa($fila[self::GEN_ATTR_MIN_EMPRESA]);
				$this->setUrlDominio($fila[self::GEN_ATTR_MIN_URL_DOMINIO]);
				$this->setEmailPrefijo($fila[self::GEN_ATTR_MIN_EMAIL_PREFIJO]);
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
	public function setGeoLocalidadId($v){ $this->geo_localidad_id = $v; }
	public function setResponsable($v){ $this->responsable = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setDomicilio($v){ $this->domicilio = $v; }
	public function setEmpresa($v){ $this->empresa = $v; }
	public function setUrlDominio($v){ $this->url_dominio = $v; }
	public function setEmailPrefijo($v){ $this->email_prefijo = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PdeCentroPedido();
            $o->setId($fila[PdeCentroPedido::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$o->setResponsable($fila[self::GEN_ATTR_MIN_RESPONSABLE]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
			$o->setEmpresa($fila[self::GEN_ATTR_MIN_EMPRESA]);
			$o->setUrlDominio($fila[self::GEN_ATTR_MIN_URL_DOMINIO]);
			$o->setEmailPrefijo($fila[self::GEN_ATTR_MIN_EMAIL_PREFIJO]);
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

	/* Control de BPdeCentroPedido */ 	
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

	/* Cambia el estado de BPdeCentroPedido */ 	
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

	/* Save de BPdeCentroPedido */ 	
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
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_RESPONSABLE."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_DOMICILIO."
						, ".self::GEN_ATTR_MIN_EMPRESA."
						, ".self::GEN_ATTR_MIN_URL_DOMINIO."
						, ".self::GEN_ATTR_MIN_EMAIL_PREFIJO."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pde_centro_pedido_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGeoLocalidadId()."
						, '".$this->getResponsable()."'
						, '".$this->getEmail()."'
						, '".$this->getTelefono()."'
						, '".$this->getDomicilio()."'
						, '".$this->getEmpresa()."'
						, '".$this->getUrlDominio()."'
						, '".$this->getEmailPrefijo()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pde_centro_pedido_seq')";
            
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
                 
				 ".PdeCentroPedido::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_RESPONSABLE." = '".$this->getResponsable()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO." = '".$this->getDomicilio()."'
						, ".self::GEN_ATTR_MIN_EMPRESA." = '".$this->getEmpresa()."'
						, ".self::GEN_ATTR_MIN_URL_DOMINIO." = '".$this->getUrlDominio()."'
						, ".self::GEN_ATTR_MIN_EMAIL_PREFIJO." = '".$this->getEmailPrefijo()."'
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
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_RESPONSABLE."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_DOMICILIO."
						, ".self::GEN_ATTR_MIN_EMPRESA."
						, ".self::GEN_ATTR_MIN_URL_DOMINIO."
						, ".self::GEN_ATTR_MIN_EMAIL_PREFIJO."
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
						, ".$this->getGeoLocalidadId()."
						, '".$this->getResponsable()."'
						, '".$this->getEmail()."'
						, '".$this->getTelefono()."'
						, '".$this->getDomicilio()."'
						, '".$this->getEmpresa()."'
						, '".$this->getUrlDominio()."'
						, '".$this->getEmailPrefijo()."'
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
                     
				 ".PdeCentroPedido::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_RESPONSABLE." = '".$this->getResponsable()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO." = '".$this->getDomicilio()."'
						, ".self::GEN_ATTR_MIN_EMPRESA." = '".$this->getEmpresa()."'
						, ".self::GEN_ATTR_MIN_URL_DOMINIO." = '".$this->getUrlDominio()."'
						, ".self::GEN_ATTR_MIN_EMAIL_PREFIJO." = '".$this->getEmailPrefijo()."'
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
            $o = new PdeCentroPedido();
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

	/* Delete de BPdeCentroPedido */ 	
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
	
            // se elimina la coleccion de PanPanols relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPanPanols(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdePedidos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdePedidos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcAgrupacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcAgrupacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOcs relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOcs(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroPedidoUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroPedidoUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroPedidoUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroPedidoEmails relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroPedidoEmail::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroPedidoEmails(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroPedidoPrvProveedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroPedidoPrvProveedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroPedidoPrvProveedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroPedidoPdeCentroRecepcions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroPedidoPdeCentroRecepcion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroPedidoPdeCentroRecepcions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaCreditos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaCreditos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeNotaDebitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeNotaDebitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecibos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecibos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeOrdenPagos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeOrdenPagos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPdeCentroPedido(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPdeCentroPedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PdeCentroPedido::setAplicarFiltrosDeAlcance($criterio);

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
	
		$pdecentropedidos = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $pdecentropedido = new PdeCentroPedido();
                    $pdecentropedido->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $pdecentropedido->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$pdecentropedido->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$pdecentropedido->setResponsable($fila[self::GEN_ATTR_MIN_RESPONSABLE]);
			$pdecentropedido->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$pdecentropedido->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$pdecentropedido->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
			$pdecentropedido->setEmpresa($fila[self::GEN_ATTR_MIN_EMPRESA]);
			$pdecentropedido->setUrlDominio($fila[self::GEN_ATTR_MIN_URL_DOMINIO]);
			$pdecentropedido->setEmailPrefijo($fila[self::GEN_ATTR_MIN_EMAIL_PREFIJO]);
			$pdecentropedido->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$pdecentropedido->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$pdecentropedido->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$pdecentropedido->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$pdecentropedido->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$pdecentropedido->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$pdecentropedido->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$pdecentropedido->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $pdecentropedidos[] = $pdecentropedido;
		}
		
		return $pdecentropedidos;
	}	
	

	/* Método getPdeCentroPedidos Habilitados */ 	
	static function getPdeCentroPedidosHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PdeCentroPedido::getPdeCentroPedidos($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPdeCentroPedidos para listado de Backend */ 	
	static function getPdeCentroPedidosDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PdeCentroPedido::getPdeCentroPedidos($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPdeCentroPedidosCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PdeCentroPedido::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PdeCentroPedido::getPdeCentroPedidos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeCentroPedidos filtrado para select */ 	
	static function getPdeCentroPedidosCmbF($paginador = null, $criterio = null){
            $col = PdeCentroPedido::getPdeCentroPedidos($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPdeCentroPedidos filtrado por una coleccion de objetos foraneos de GeoLocalidad */ 	
	static function getPdeCentroPedidosXGeoLocalidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PdeCentroPedido::GEN_ATTR_GEO_LOCALIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PdeCentroPedido::GEN_TABLA);
            $c->addOrden(PdeCentroPedido::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PdeCentroPedido::getPdeCentroPedidos($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoLocalidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pde_centro_pedido_adm.php';
            $url_gestion = 'pde_centro_pedido_gestion.php';
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
                
            $criterio->add(PanPanol::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PanPanol::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PanPanol::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PanPanol::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getPdePedidos */ 	
	public function getPdePedidos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdePedido::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdePedido::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdePedido::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdePedido::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdePedido::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdePedido::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdepedidos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdepedido = PdePedido::hidratarObjeto($fila);			
                $pdepedidos[] = $pdepedido;
            }

            return $pdepedidos;
	}	
	

	/* Método getPdePedidosBloque para MasInfo */ 	
	public function getPdePedidosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdePedidos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdePedidos Habilitados */ 	
	public function getPdePedidosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdePedidos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdePedido */ 	
	public function getPdePedido($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdePedidos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdePedido relacionadas */ 	
	public function deletePdePedidos(){
            $obs = $this->getPdePedidos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdePedidosCmb() PdePedido relacionadas */ 	
	public function getPdePedidosCmb(){
            $c = new Criterio();
            $c->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->setCriterios();

            $os = PdePedido::getPdePedidosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de PdePedido */ 	
	public function getInsInsumosXPdePedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PdePedido::GEN_TABLA, PdePedido::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de PdePedido */ 	
	public function getCantidadInsInsumosXPdePedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(PdePedido::GEN_TABLA, PdePedido::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de PdePedido */ 	
	public function getInsInsumoXPdePedido($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXPdePedido($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcAgrupacions */ 	
	public function getPdeOcAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOcAgrupacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOcAgrupacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOcAgrupacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOcAgrupacion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOcAgrupacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocagrupacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeocagrupacion = PdeOcAgrupacion::hidratarObjeto($fila);			
                $pdeocagrupacions[] = $pdeocagrupacion;
            }

            return $pdeocagrupacions;
	}	
	

	/* Método getPdeOcAgrupacionsBloque para MasInfo */ 	
	public function getPdeOcAgrupacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcAgrupacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcAgrupacions Habilitados */ 	
	public function getPdeOcAgrupacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcAgrupacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOcAgrupacion */ 	
	public function getPdeOcAgrupacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcAgrupacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOcAgrupacion relacionadas */ 	
	public function deletePdeOcAgrupacions(){
            $obs = $this->getPdeOcAgrupacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcAgrupacionsCmb() PdeOcAgrupacion relacionadas */ 	
	public function getPdeOcAgrupacionsCmb(){
            $c = new Criterio();
            $c->add(PdeOcAgrupacion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcAgrupacion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOcAgrupacion::getPdeOcAgrupacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeOcTipoOrigens (Coleccion) relacionados a traves de PdeOcAgrupacion */ 	
	public function getPdeOcTipoOrigensXPdeOcAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeOcTipoOrigen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoOrigen::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacion::GEN_TABLA, PdeOcAgrupacion::GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID, PdeOcTipoOrigen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoOrigen::getPdeOcTipoOrigens($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeOcTipoOrigens relacionados a traves de PdeOcAgrupacion */ 	
	public function getCantidadPdeOcTipoOrigensXPdeOcAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeOcTipoOrigen::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeOcTipoOrigen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOcAgrupacion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOcTipoOrigen::GEN_TABLA);
            $c->addRealJoin(PdeOcAgrupacion::GEN_TABLA, PdeOcAgrupacion::GEN_ATTR_PDE_OC_TIPO_ORIGEN_ID, PdeOcTipoOrigen::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeOcTipoOrigen::getPdeOcTipoOrigens($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeOcTipoOrigen (Objeto) relacionado a traves de PdeOcAgrupacion */ 	
	public function getPdeOcTipoOrigenXPdeOcAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeOcTipoOrigensXPdeOcAgrupacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOcs */ 	
	public function getPdeOcs($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOc::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOc::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOc::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOc::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOc::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOc::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOc::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeocs = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeoc = PdeOc::hidratarObjeto($fila);			
                $pdeocs[] = $pdeoc;
            }

            return $pdeocs;
	}	
	

	/* Método getPdeOcsBloque para MasInfo */ 	
	public function getPdeOcsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOcs($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOcs Habilitados */ 	
	public function getPdeOcsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOcs($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOc */ 	
	public function getPdeOc($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOcs($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOc relacionadas */ 	
	public function deletePdeOcs(){
            $obs = $this->getPdeOcs();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOcsCmb() PdeOc relacionadas */ 	
	public function getPdeOcsCmb(){
            $c = new Criterio();
            $c->add(PdeOc::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOc::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOc::getPdeOcsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdePedidos (Coleccion) relacionados a traves de PdeOc */ 	
	public function getPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdePedidos relacionados a traves de PdeOc */ 	
	public function getCantidadPdePedidosXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdePedido::GEN_ATTR_ID);
            if($estado){
                $c->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOc::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdePedido::GEN_TABLA);
            $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdePedido::getPdePedidos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdePedido (Objeto) relacionado a traves de PdeOc */ 	
	public function getPdePedidoXPdeOc($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdePedidosXPdeOc($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PdeCentroPedidoUsUsuario::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedidoUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroPedidoUsUsuario::getPdeCentroPedidoUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de PdeCentroPedidoUsUsuario */ 	
	public function getUsUsuariosXPdeCentroPedidoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoUsUsuario::GEN_TABLA, PdeCentroPedidoUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de PdeCentroPedidoUsUsuario */ 	
	public function getCantidadUsUsuariosXPdeCentroPedidoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoUsUsuario::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoUsUsuario::GEN_TABLA, PdeCentroPedidoUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de PdeCentroPedidoUsUsuario */ 	
	public function getUsUsuarioXPdeCentroPedidoUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXPdeCentroPedidoUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCentroPedidoEmails */ 	
	public function getPdeCentroPedidoEmails($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroPedidoEmail::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroPedidoEmail::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroPedidoEmail::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeCentroPedidoEmail::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroPedidoEmail::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroPedidoEmail::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroPedidoEmail::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroPedidoEmail::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentropedidoemails = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentropedidoemail = PdeCentroPedidoEmail::hidratarObjeto($fila);			
                $pdecentropedidoemails[] = $pdecentropedidoemail;
            }

            return $pdecentropedidoemails;
	}	
	

	/* Método getPdeCentroPedidoEmailsBloque para MasInfo */ 	
	public function getPdeCentroPedidoEmailsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroPedidoEmails($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroPedidoEmails Habilitados */ 	
	public function getPdeCentroPedidoEmailsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroPedidoEmails($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroPedidoEmail */ 	
	public function getPdeCentroPedidoEmail($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroPedidoEmails($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroPedidoEmail relacionadas */ 	
	public function deletePdeCentroPedidoEmails(){
            $obs = $this->getPdeCentroPedidoEmails();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroPedidoEmailsCmb() PdeCentroPedidoEmail relacionadas */ 	
	public function getPdeCentroPedidoEmailsCmb(){
            $c = new Criterio();
            $c->add(PdeCentroPedidoEmail::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedidoEmail::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroPedidoEmail::getPdeCentroPedidoEmailsCmbF(null, $c);
            return $os;
	}

	/* Metodo getPdeCentroPedidoPrvProveedors */ 	
	public function getPdeCentroPedidoPrvProveedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroPedidoPrvProveedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroPedidoPrvProveedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroPedidoPrvProveedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroPedidoPrvProveedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentropedidoprvproveedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentropedidoprvproveedor = PdeCentroPedidoPrvProveedor::hidratarObjeto($fila);			
                $pdecentropedidoprvproveedors[] = $pdecentropedidoprvproveedor;
            }

            return $pdecentropedidoprvproveedors;
	}	
	

	/* Método getPdeCentroPedidoPrvProveedorsBloque para MasInfo */ 	
	public function getPdeCentroPedidoPrvProveedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroPedidoPrvProveedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroPedidoPrvProveedors Habilitados */ 	
	public function getPdeCentroPedidoPrvProveedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroPedidoPrvProveedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroPedidoPrvProveedor */ 	
	public function getPdeCentroPedidoPrvProveedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroPedidoPrvProveedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroPedidoPrvProveedor relacionadas */ 	
	public function deletePdeCentroPedidoPrvProveedors(){
            $obs = $this->getPdeCentroPedidoPrvProveedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroPedidoPrvProveedorsCmb() PdeCentroPedidoPrvProveedor relacionadas */ 	
	public function getPdeCentroPedidoPrvProveedorsCmb(){
            $c = new Criterio();
            $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedidoPrvProveedor::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroPedidoPrvProveedor::getPdeCentroPedidoPrvProveedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeCentroPedidoPrvProveedor */ 	
	public function getPrvProveedorsXPdeCentroPedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeCentroPedidoPrvProveedor */ 	
	public function getCantidadPrvProveedorsXPdeCentroPedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeCentroPedidoPrvProveedor */ 	
	public function getPrvProveedorXPdeCentroPedidoPrvProveedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeCentroPedidoPrvProveedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCentroPedidoPdeCentroRecepcions */ 	
	public function getPdeCentroPedidoPdeCentroRecepcions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroPedidoPdeCentroRecepcion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroPedidoPdeCentroRecepcion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroPedidoPdeCentroRecepcion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroPedidoPdeCentroRecepcion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentropedidopdecentrorecepcions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentropedidopdecentrorecepcion = PdeCentroPedidoPdeCentroRecepcion::hidratarObjeto($fila);			
                $pdecentropedidopdecentrorecepcions[] = $pdecentropedidopdecentrorecepcion;
            }

            return $pdecentropedidopdecentrorecepcions;
	}	
	

	/* Método getPdeCentroPedidoPdeCentroRecepcionsBloque para MasInfo */ 	
	public function getPdeCentroPedidoPdeCentroRecepcionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroPedidoPdeCentroRecepcions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroPedidoPdeCentroRecepcions Habilitados */ 	
	public function getPdeCentroPedidoPdeCentroRecepcionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroPedidoPdeCentroRecepcions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroPedidoPdeCentroRecepcion */ 	
	public function getPdeCentroPedidoPdeCentroRecepcion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroPedidoPdeCentroRecepcions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroPedidoPdeCentroRecepcion relacionadas */ 	
	public function deletePdeCentroPedidoPdeCentroRecepcions(){
            $obs = $this->getPdeCentroPedidoPdeCentroRecepcions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroPedidoPdeCentroRecepcionsCmb() PdeCentroPedidoPdeCentroRecepcion relacionadas */ 	
	public function getPdeCentroPedidoPdeCentroRecepcionsCmb(){
            $c = new Criterio();
            $c->add(PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroPedidoPdeCentroRecepcion::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroPedidoPdeCentroRecepcion::getPdeCentroPedidoPdeCentroRecepcionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeCentroRecepcions (Coleccion) relacionados a traves de PdeCentroPedidoPdeCentroRecepcion */ 	
	public function getPdeCentroRecepcionsXPdeCentroPedidoPdeCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoPdeCentroRecepcion::GEN_TABLA, PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, PdeCentroRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroRecepcion::getPdeCentroRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeCentroRecepcions relacionados a traves de PdeCentroPedidoPdeCentroRecepcion */ 	
	public function getCantidadPdeCentroRecepcionsXPdeCentroPedidoPdeCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeCentroRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeCentroPedidoPdeCentroRecepcion::GEN_TABLA, PdeCentroPedidoPdeCentroRecepcion::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, PdeCentroRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroRecepcion::getPdeCentroRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeCentroRecepcion (Objeto) relacionado a traves de PdeCentroPedidoPdeCentroRecepcion */ 	
	public function getPdeCentroRecepcionXPdeCentroPedidoPdeCentroRecepcion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeCentroRecepcionsXPdeCentroPedidoPdeCentroRecepcion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeFacturas */ 	
	public function getPdeFacturas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeFactura::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeFactura::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeFactura::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeFactura::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeFactura::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeFactura::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdefacturas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdefactura = PdeFactura::hidratarObjeto($fila);			
                $pdefacturas[] = $pdefactura;
            }

            return $pdefacturas;
	}	
	

	/* Método getPdeFacturasBloque para MasInfo */ 	
	public function getPdeFacturasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeFacturas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeFacturas Habilitados */ 	
	public function getPdeFacturasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeFacturas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeFactura */ 	
	public function getPdeFactura($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeFacturas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeFactura relacionadas */ 	
	public function deletePdeFacturas(){
            $obs = $this->getPdeFacturas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeFacturasCmb() PdeFactura relacionadas */ 	
	public function getPdeFacturasCmb(){
            $c = new Criterio();
            $c->add(PdeFactura::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeFactura::GEN_TABLA);
            $c->setCriterios();

            $os = PdeFactura::getPdeFacturasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeFactura */ 	
	public function getPrvProveedorsXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFactura::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeFactura */ 	
	public function getCantidadPrvProveedorsXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeFactura::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeFactura */ 	
	public function getPrvProveedorXPdeFactura($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeFactura($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaCreditos */ 	
	public function getPdeNotaCreditos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaCredito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaCredito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaCredito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaCredito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaCredito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaCredito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotacreditos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotacredito = PdeNotaCredito::hidratarObjeto($fila);			
                $pdenotacreditos[] = $pdenotacredito;
            }

            return $pdenotacreditos;
	}	
	

	/* Método getPdeNotaCreditosBloque para MasInfo */ 	
	public function getPdeNotaCreditosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaCreditos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaCreditos Habilitados */ 	
	public function getPdeNotaCreditosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaCreditos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaCredito */ 	
	public function getPdeNotaCredito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaCreditos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaCredito relacionadas */ 	
	public function deletePdeNotaCreditos(){
            $obs = $this->getPdeNotaCreditos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaCreditosCmb() PdeNotaCredito relacionadas */ 	
	public function getPdeNotaCreditosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaCredito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaCredito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaCredito::getPdeNotaCreditosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeNotaCredito */ 	
	public function getPrvProveedorsXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCredito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaCredito::GEN_TABLA, PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeNotaCredito */ 	
	public function getCantidadPrvProveedorsXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaCredito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaCredito::GEN_TABLA, PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeNotaCredito */ 	
	public function getPrvProveedorXPdeNotaCredito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeNotaCredito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeNotaDebitos */ 	
	public function getPdeNotaDebitos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeNotaDebito::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeNotaDebito::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeNotaDebito::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeNotaDebito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeNotaDebito::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeNotaDebito::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdenotadebitos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdenotadebito = PdeNotaDebito::hidratarObjeto($fila);			
                $pdenotadebitos[] = $pdenotadebito;
            }

            return $pdenotadebitos;
	}	
	

	/* Método getPdeNotaDebitosBloque para MasInfo */ 	
	public function getPdeNotaDebitosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeNotaDebitos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeNotaDebitos Habilitados */ 	
	public function getPdeNotaDebitosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeNotaDebitos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeNotaDebito */ 	
	public function getPdeNotaDebito($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeNotaDebitos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeNotaDebito relacionadas */ 	
	public function deletePdeNotaDebitos(){
            $obs = $this->getPdeNotaDebitos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeNotaDebitosCmb() PdeNotaDebito relacionadas */ 	
	public function getPdeNotaDebitosCmb(){
            $c = new Criterio();
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeNotaDebito::GEN_TABLA);
            $c->setCriterios();

            $os = PdeNotaDebito::getPdeNotaDebitosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeNotaDebito */ 	
	public function getPrvProveedorsXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeNotaDebito */ 	
	public function getCantidadPrvProveedorsXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeNotaDebito::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeNotaDebito::GEN_TABLA, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeNotaDebito */ 	
	public function getPrvProveedorXPdeNotaDebito($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeNotaDebito($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecibos */ 	
	public function getPdeRecibos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecibo::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecibo::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeRecibo::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecibo::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecibo::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecibo::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecibos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecibo = PdeRecibo::hidratarObjeto($fila);			
                $pderecibos[] = $pderecibo;
            }

            return $pderecibos;
	}	
	

	/* Método getPdeRecibosBloque para MasInfo */ 	
	public function getPdeRecibosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecibos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecibos Habilitados */ 	
	public function getPdeRecibosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecibos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecibo */ 	
	public function getPdeRecibo($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecibos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecibo relacionadas */ 	
	public function deletePdeRecibos(){
            $obs = $this->getPdeRecibos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecibosCmb() PdeRecibo relacionadas */ 	
	public function getPdeRecibosCmb(){
            $c = new Criterio();
            $c->add(PdeRecibo::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecibo::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecibo::getPdeRecibosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeRecibo */ 	
	public function getPrvProveedorsXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeRecibo */ 	
	public function getCantidadPrvProveedorsXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecibo::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeRecibo::GEN_TABLA, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeRecibo */ 	
	public function getPrvProveedorXPdeRecibo($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeRecibo($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeOrdenPagos */ 	
	public function getPdeOrdenPagos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeOrdenPago::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeOrdenPago::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(PdeOrdenPago::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeOrdenPago::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeOrdenPago::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeOrdenPago::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdeordenpagos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdeordenpago = PdeOrdenPago::hidratarObjeto($fila);			
                $pdeordenpagos[] = $pdeordenpago;
            }

            return $pdeordenpagos;
	}	
	

	/* Método getPdeOrdenPagosBloque para MasInfo */ 	
	public function getPdeOrdenPagosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeOrdenPagos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeOrdenPagos Habilitados */ 	
	public function getPdeOrdenPagosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeOrdenPagos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeOrdenPago */ 	
	public function getPdeOrdenPago($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeOrdenPagos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeOrdenPago relacionadas */ 	
	public function deletePdeOrdenPagos(){
            $obs = $this->getPdeOrdenPagos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeOrdenPagosCmb() PdeOrdenPago relacionadas */ 	
	public function getPdeOrdenPagosCmb(){
            $c = new Criterio();
            $c->add(PdeOrdenPago::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeOrdenPago::GEN_TABLA);
            $c->setCriterios();

            $os = PdeOrdenPago::getPdeOrdenPagosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PrvProveedors (Coleccion) relacionados a traves de PdeOrdenPago */ 	
	public function getPrvProveedorsXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPago::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PrvProveedors relacionados a traves de PdeOrdenPago */ 	
	public function getCantidadPrvProveedorsXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PrvProveedor::GEN_ATTR_ID);
            if($estado){
                $c->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeOrdenPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeOrdenPago::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PrvProveedor::getPrvProveedors($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PrvProveedor (Objeto) relacionado a traves de PdeOrdenPago */ 	
	public function getPrvProveedorXPdeOrdenPago($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPrvProveedorsXPdeOrdenPago($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los UsUsuarios asignados a PdeCentroPedido */ 	
	public function getPdeCentroPedidoUsUsuariosId(){
            $ids = array();
            foreach($this->getPdeCentroPedidoUsUsuarios() as $o){
            
                $ids[] = $o->getUsUsuarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsUsuarios asignados al PdeCentroPedido */ 	
	public function setPdeCentroPedidoUsUsuarios($ids){
            $this->deletePdeCentroPedidoUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeCentroPedidoUsUsuario();
                    $o->setUsUsuarioId($id);
                    $o->setPdeCentroPedidoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsUsuario en el alta de PdeCentroPedido */ 	
	public function getAltaMostrarBloqueRelacionPdeCentroPedidoUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PrvProveedors asignados a PdeCentroPedido */ 	
	public function getPdeCentroPedidoPrvProveedorsId(){
            $ids = array();
            foreach($this->getPdeCentroPedidoPrvProveedors() as $o){
            
                $ids[] = $o->getPrvProveedorId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PrvProveedors asignados al PdeCentroPedido */ 	
	public function setPdeCentroPedidoPrvProveedors($ids){
            $this->deletePdeCentroPedidoPrvProveedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeCentroPedidoPrvProveedor();
                    $o->setPrvProveedorId($id);
                    $o->setPdeCentroPedidoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PrvProveedor en el alta de PdeCentroPedido */ 	
	public function getAltaMostrarBloqueRelacionPdeCentroPedidoPrvProveedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeCentroRecepcions asignados a PdeCentroPedido */ 	
	public function getPdeCentroPedidoPdeCentroRecepcionsId(){
            $ids = array();
            foreach($this->getPdeCentroPedidoPdeCentroRecepcions() as $o){
            
                $ids[] = $o->getPdeCentroRecepcionId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeCentroRecepcions asignados al PdeCentroPedido */ 	
	public function setPdeCentroPedidoPdeCentroRecepcions($ids){
            $this->deletePdeCentroPedidoPdeCentroRecepcions();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeCentroPedidoPdeCentroRecepcion();
                    $o->setPdeCentroRecepcionId($id);
                    $o->setPdeCentroPedidoId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeCentroRecepcion en el alta de PdeCentroPedido */ 	
	public function getAltaMostrarBloqueRelacionPdeCentroPedidoPdeCentroRecepcion(){
            return true;
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pde_centro_pedido'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pde_centro_pedido';");
            
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

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_localidad_id' */ 	
	static function getOxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'responsable' */ 	
	static function getOxResponsable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RESPONSABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'responsable' */ 	
	static function getOsxResponsable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RESPONSABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio' */ 	
	static function getOxDomicilio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'empresa' */ 	
	static function getOxEmpresa($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMPRESA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'empresa' */ 	
	static function getOsxEmpresa($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMPRESA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'url_dominio' */ 	
	static function getOxUrlDominio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_URL_DOMINIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'url_dominio' */ 	
	static function getOsxUrlDominio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_URL_DOMINIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email_prefijo' */ 	
	static function getOxEmailPrefijo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL_PREFIJO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'email_prefijo' */ 	
	static function getOsxEmailPrefijo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL_PREFIJO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos(null, $criterio);
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

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
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

            $obs = self::getPdeCentroPedidos($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pde_centro_pedido_adm');
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
	public function getPdeCentroPedidoEmailsParaBloqueVinculo($palabra, $pagina){
            $c = new Criterio();

            $c->addInicioSubconsulta();
            $c->add(PdeCentroPedidoEmail::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $this->getId(), Criterio::IGUAL, false, '');
            $c->addFinSubconsulta();

            $c->addInicioSubconsulta();
            $c->add(PdeCentroPedidoEmail::GEN_ATTR_ID, '%'.$palabra.'%', Criterio::LIKE);
            
                $c->add(PdeCentroPedidoEmail::GEN_ATTR_DESCRIPCION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PdeCentroPedidoEmail::GEN_ATTR_CODIGO, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
                $c->add(PdeCentroPedidoEmail::GEN_ATTR_OBSERVACION, '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();

            $c->addTabla(PdeCentroPedidoEmail::GEN_TABLA);
            $c->addOrden('2');
            $c->setCriterios();

            $paginador = new Paginador(50, $pagina);

            $pde_centro_pedido_emails = PdeCentroPedidoEmail::getPdeCentroPedidoEmails($paginador, $c);

            $arr['COLECCION'] = $pde_centro_pedido_emails;
            $arr['PAGINADOR'] = $paginador;
            return $arr;
	}
	
            /**
             * Metodo que retorna una coleccion de descripciones unificada para usar en autosuggest
             */
            static function getArrDescripcionsUnificado(){
                $c = new Criterio();
                $c->addTabla(PdeCentroPedido::GEN_TABLA);
                $c->addOrden(PdeCentroPedido::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pde_centro_pedidos = PdeCentroPedido::getPdeCentroPedidos(null, $c);

                $arr = array();
                foreach($pde_centro_pedidos as $pde_centro_pedido){
                    $descripcion = $pde_centro_pedido->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>