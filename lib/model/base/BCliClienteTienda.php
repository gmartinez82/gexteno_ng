<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BCliClienteTienda
{ 
	
	const SES_PAGINACION = 'adm_cliclientetienda_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_cliclientetienda_paginas_registros';
	const SES_CRITERIOS = 'adm_cliclientetienda_criterios';
	
	const GEN_CLASE = 'CliClienteTienda';
	const GEN_TABLA = 'cli_cliente_tienda';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BCliClienteTienda */ 
	const GEN_ATTR_ID = 'cli_cliente_tienda.id';
	const GEN_ATTR_DESCRIPCION = 'cli_cliente_tienda.descripcion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'cli_cliente_tienda.cli_cliente_id';
	const GEN_ATTR_CLI_CENTRO_PEDIDO_ID = 'cli_cliente_tienda.cli_centro_pedido_id';
	const GEN_ATTR_GRAL_TIPO_PERSONERIA_ID = 'cli_cliente_tienda.gral_tipo_personeria_id';
	const GEN_ATTR_GRAL_CONDICION_IVA_ID = 'cli_cliente_tienda.gral_condicion_iva_id';
	const GEN_ATTR_NOMBRE = 'cli_cliente_tienda.nombre';
	const GEN_ATTR_APELLIDO = 'cli_cliente_tienda.apellido';
	const GEN_ATTR_RAZON_SOCIAL = 'cli_cliente_tienda.razon_social';
	const GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID = 'cli_cliente_tienda.gral_tipo_documento_id';
	const GEN_ATTR_CUIT = 'cli_cliente_tienda.cuit';
	const GEN_ATTR_DOMICILIO_LEGAL = 'cli_cliente_tienda.domicilio_legal';
	const GEN_ATTR_TELEFONO = 'cli_cliente_tienda.telefono';
	const GEN_ATTR_TELEFONO_WHATSAPP = 'cli_cliente_tienda.telefono_whatsapp';
	const GEN_ATTR_EMAIL = 'cli_cliente_tienda.email';
	const GEN_ATTR_CODIGO_POSTAL = 'cli_cliente_tienda.codigo_postal';
	const GEN_ATTR_GEO_LOCALIDAD_ID = 'cli_cliente_tienda.geo_localidad_id';
	const GEN_ATTR_CODIGO = 'cli_cliente_tienda.codigo';
	const GEN_ATTR_USUARIO = 'cli_cliente_tienda.usuario';
	const GEN_ATTR_VERIFICAR = 'cli_cliente_tienda.verificar';
	const GEN_ATTR_OBSERVACION = 'cli_cliente_tienda.observacion';
	const GEN_ATTR_ORDEN = 'cli_cliente_tienda.orden';
	const GEN_ATTR_ESTADO = 'cli_cliente_tienda.estado';
	const GEN_ATTR_CREADO = 'cli_cliente_tienda.creado';
	const GEN_ATTR_CREADO_POR = 'cli_cliente_tienda.creado_por';
	const GEN_ATTR_MODIFICADO = 'cli_cliente_tienda.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'cli_cliente_tienda.modificado_por';

	/* Constantes de Atributos Min de BCliClienteTienda */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_CLI_CENTRO_PEDIDO_ID = 'cli_centro_pedido_id';
	const GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID = 'gral_tipo_personeria_id';
	const GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID = 'gral_condicion_iva_id';
	const GEN_ATTR_MIN_NOMBRE = 'nombre';
	const GEN_ATTR_MIN_APELLIDO = 'apellido';
	const GEN_ATTR_MIN_RAZON_SOCIAL = 'razon_social';
	const GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID = 'gral_tipo_documento_id';
	const GEN_ATTR_MIN_CUIT = 'cuit';
	const GEN_ATTR_MIN_DOMICILIO_LEGAL = 'domicilio_legal';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_TELEFONO_WHATSAPP = 'telefono_whatsapp';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_CODIGO_POSTAL = 'codigo_postal';
	const GEN_ATTR_MIN_GEO_LOCALIDAD_ID = 'geo_localidad_id';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_USUARIO = 'usuario';
	const GEN_ATTR_MIN_VERIFICAR = 'verificar';
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
	

	/* Atributos de BCliClienteTienda */ 
	private $id;
	private $descripcion;
	private $cli_cliente_id;
	private $cli_centro_pedido_id;
	private $gral_tipo_personeria_id;
	private $gral_condicion_iva_id;
	private $nombre;
	private $apellido;
	private $razon_social;
	private $gral_tipo_documento_id;
	private $cuit;
	private $domicilio_legal;
	private $telefono;
	private $telefono_whatsapp;
	private $email;
	private $codigo_postal;
	private $geo_localidad_id;
	private $codigo;
	private $usuario;
	private $verificar;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BCliClienteTienda */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getCliCentroPedidoId(){ if(isset($this->cli_centro_pedido_id)){ return $this->cli_centro_pedido_id; }else{ return 'null'; } }
	public function getGralTipoPersoneriaId(){ if(isset($this->gral_tipo_personeria_id)){ return $this->gral_tipo_personeria_id; }else{ return 'null'; } }
	public function getGralCondicionIvaId(){ if(isset($this->gral_condicion_iva_id)){ return $this->gral_condicion_iva_id; }else{ return 'null'; } }
	public function getNombre(){ if(isset($this->nombre)){ return $this->nombre; }else{ return ''; } }
	public function getApellido(){ if(isset($this->apellido)){ return $this->apellido; }else{ return ''; } }
	public function getRazonSocial(){ if(isset($this->razon_social)){ return $this->razon_social; }else{ return ''; } }
	public function getGralTipoDocumentoId(){ if(isset($this->gral_tipo_documento_id)){ return $this->gral_tipo_documento_id; }else{ return 'null'; } }
	public function getCuit(){ if(isset($this->cuit)){ return $this->cuit; }else{ return ''; } }
	public function getDomicilioLegal(){ if(isset($this->domicilio_legal)){ return $this->domicilio_legal; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getTelefonoWhatsapp(){ if(isset($this->telefono_whatsapp)){ return $this->telefono_whatsapp; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getCodigoPostal(){ if(isset($this->codigo_postal)){ return $this->codigo_postal; }else{ return ''; } }
	public function getGeoLocalidadId(){ if(isset($this->geo_localidad_id)){ return $this->geo_localidad_id; }else{ return 'null'; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getUsuario(){ if(isset($this->usuario)){ return $this->usuario; }else{ return ''; } }
	public function getVerificar(){ if(isset($this->verificar)){ return $this->verificar; }else{ return 0; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BCliClienteTienda */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_CLI_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID."
				, ".self::GEN_ATTR_GRAL_CONDICION_IVA_ID."
				, ".self::GEN_ATTR_NOMBRE."
				, ".self::GEN_ATTR_APELLIDO."
				, ".self::GEN_ATTR_RAZON_SOCIAL."
				, ".self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID."
				, ".self::GEN_ATTR_CUIT."
				, ".self::GEN_ATTR_DOMICILIO_LEGAL."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_TELEFONO_WHATSAPP."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_CODIGO_POSTAL."
				, ".self::GEN_ATTR_GEO_LOCALIDAD_ID."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_USUARIO."
				, ".self::GEN_ATTR_VERIFICAR."
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
				$this->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
				$this->setCliCentroPedidoId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_PEDIDO_ID]);
				$this->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
				$this->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
				$this->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
				$this->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
				$this->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
				$this->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
				$this->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
				$this->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setTelefonoWhatsapp($fila[self::GEN_ATTR_MIN_TELEFONO_WHATSAPP]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
				$this->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setUsuario($fila[self::GEN_ATTR_MIN_USUARIO]);
				$this->setVerificar($fila[self::GEN_ATTR_MIN_VERIFICAR]);
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
	public function setCliClienteId($v){ $this->cli_cliente_id = $v; }
	public function setCliCentroPedidoId($v){ $this->cli_centro_pedido_id = $v; }
	public function setGralTipoPersoneriaId($v){ $this->gral_tipo_personeria_id = $v; }
	public function setGralCondicionIvaId($v){ $this->gral_condicion_iva_id = $v; }
	public function setNombre($v){ $this->nombre = $v; }
	public function setApellido($v){ $this->apellido = $v; }
	public function setRazonSocial($v){ $this->razon_social = $v; }
	public function setGralTipoDocumentoId($v){ $this->gral_tipo_documento_id = $v; }
	public function setCuit($v){ $this->cuit = $v; }
	public function setDomicilioLegal($v){ $this->domicilio_legal = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setTelefonoWhatsapp($v){ $this->telefono_whatsapp = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setCodigoPostal($v){ $this->codigo_postal = $v; }
	public function setGeoLocalidadId($v){ $this->geo_localidad_id = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setUsuario($v){ $this->usuario = $v; }
	public function setVerificar($v){ $this->verificar = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new CliClienteTienda();
            $o->setId($fila[CliClienteTienda::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setCliCentroPedidoId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_PEDIDO_ID]);
			$o->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$o->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$o->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$o->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$o->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$o->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$o->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$o->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setTelefonoWhatsapp($fila[self::GEN_ATTR_MIN_TELEFONO_WHATSAPP]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$o->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setUsuario($fila[self::GEN_ATTR_MIN_USUARIO]);
			$o->setVerificar($fila[self::GEN_ATTR_MIN_VERIFICAR]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BCliClienteTienda */ 	
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

	/* Cambia el estado de BCliClienteTienda */ 	
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

	/* Save de BCliClienteTienda */ 	
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_TELEFONO_WHATSAPP."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_USUARIO."
						, ".self::GEN_ATTR_MIN_VERIFICAR."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('cli_cliente_tienda_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getCliCentroPedidoId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralCondicionIvaId()."
						, '".$this->getNombre()."'
						, '".$this->getApellido()."'
						, '".$this->getRazonSocial()."'
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getCuit()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getTelefono()."'
						, '".$this->getTelefonoWhatsapp()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigoPostal()."'
						, ".$this->getGeoLocalidadId()."
						, '".$this->getCodigo()."'
						, '".$this->getUsuario()."'
						, ".$this->getVerificar()."
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('cli_cliente_tienda_seq')";
            
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
                 
				 ".CliClienteTienda::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_PEDIDO_ID." = ".$this->getCliCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_TELEFONO_WHATSAPP." = '".$this->getTelefonoWhatsapp()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_USUARIO." = '".$this->getUsuario()."'
						, ".self::GEN_ATTR_MIN_VERIFICAR." = ".$this->getVerificar()."
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
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID."
						, ".self::GEN_ATTR_MIN_CUIT."
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_TELEFONO_WHATSAPP."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_USUARIO."
						, ".self::GEN_ATTR_MIN_VERIFICAR."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getCliClienteId()."
						, ".$this->getCliCentroPedidoId()."
						, ".$this->getGralTipoPersoneriaId()."
						, ".$this->getGralCondicionIvaId()."
						, '".$this->getNombre()."'
						, '".$this->getApellido()."'
						, '".$this->getRazonSocial()."'
						, ".$this->getGralTipoDocumentoId()."
						, '".$this->getCuit()."'
						, '".$this->getDomicilioLegal()."'
						, '".$this->getTelefono()."'
						, '".$this->getTelefonoWhatsapp()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigoPostal()."'
						, ".$this->getGeoLocalidadId()."
						, '".$this->getCodigo()."'
						, '".$this->getUsuario()."'
						, ".$this->getVerificar()."
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
                     
				 ".CliClienteTienda::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_CLI_CENTRO_PEDIDO_ID." = ".$this->getCliCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID." = ".$this->getGralTipoPersoneriaId()."
						, ".self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID." = ".$this->getGralCondicionIvaId()."
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_RAZON_SOCIAL." = '".$this->getRazonSocial()."'
						, ".self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID." = ".$this->getGralTipoDocumentoId()."
						, ".self::GEN_ATTR_MIN_CUIT." = '".$this->getCuit()."'
						, ".self::GEN_ATTR_MIN_DOMICILIO_LEGAL." = '".$this->getDomicilioLegal()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_TELEFONO_WHATSAPP." = '".$this->getTelefonoWhatsapp()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO_POSTAL." = '".$this->getCodigoPostal()."'
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_USUARIO." = '".$this->getUsuario()."'
						, ".self::GEN_ATTR_MIN_VERIFICAR." = ".$this->getVerificar()."
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
            $o = new CliClienteTienda();
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

	/* Delete de BCliClienteTienda */ 	
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
	
            // se elimina la coleccion de CliClienteTiendaClaves relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTiendaClave::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendaClaves(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendaLogins relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTiendaLogin::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendaLogins(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteTiendaNavegacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteTiendaNavegacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteTiendaNavegacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoCliClienteTiendas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoCliClienteTienda::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoCliClienteTiendas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoMensajes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoMensaje::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoMensajes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestoValoracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuestoValoracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestoValoracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de TndTiendaBusquedas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(TndTiendaBusqueda::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getTndTiendaBusquedas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarCliClienteTienda(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getCliClienteTiendas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = CliClienteTienda::setAplicarFiltrosDeAlcance($criterio);

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
	
		$cliclientetiendas = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $cliclientetienda = new CliClienteTienda();
                    $cliclientetienda->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $cliclientetienda->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$cliclientetienda->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$cliclientetienda->setCliCentroPedidoId($fila[self::GEN_ATTR_MIN_CLI_CENTRO_PEDIDO_ID]);
			$cliclientetienda->setGralTipoPersoneriaId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_PERSONERIA_ID]);
			$cliclientetienda->setGralCondicionIvaId($fila[self::GEN_ATTR_MIN_GRAL_CONDICION_IVA_ID]);
			$cliclientetienda->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$cliclientetienda->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$cliclientetienda->setRazonSocial($fila[self::GEN_ATTR_MIN_RAZON_SOCIAL]);
			$cliclientetienda->setGralTipoDocumentoId($fila[self::GEN_ATTR_MIN_GRAL_TIPO_DOCUMENTO_ID]);
			$cliclientetienda->setCuit($fila[self::GEN_ATTR_MIN_CUIT]);
			$cliclientetienda->setDomicilioLegal($fila[self::GEN_ATTR_MIN_DOMICILIO_LEGAL]);
			$cliclientetienda->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$cliclientetienda->setTelefonoWhatsapp($fila[self::GEN_ATTR_MIN_TELEFONO_WHATSAPP]);
			$cliclientetienda->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$cliclientetienda->setCodigoPostal($fila[self::GEN_ATTR_MIN_CODIGO_POSTAL]);
			$cliclientetienda->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$cliclientetienda->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$cliclientetienda->setUsuario($fila[self::GEN_ATTR_MIN_USUARIO]);
			$cliclientetienda->setVerificar($fila[self::GEN_ATTR_MIN_VERIFICAR]);
			$cliclientetienda->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$cliclientetienda->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$cliclientetienda->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$cliclientetienda->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$cliclientetienda->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$cliclientetienda->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$cliclientetienda->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $cliclientetiendas[] = $cliclientetienda;
		}
		
		return $cliclientetiendas;
	}	
	

	/* Método getCliClienteTiendas Habilitados */ 	
	static function getCliClienteTiendasHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return CliClienteTienda::getCliClienteTiendas($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getCliClienteTiendas para listado de Backend */ 	
	static function getCliClienteTiendasDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return CliClienteTienda::getCliClienteTiendas($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getCliClienteTiendasCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = CliClienteTienda::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = CliClienteTienda::getCliClienteTiendas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClienteTiendas filtrado para select */ 	
	static function getCliClienteTiendasCmbF($paginador = null, $criterio = null){
            $col = CliClienteTienda::getCliClienteTiendas($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getCliClienteTiendas filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getCliClienteTiendasXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addOrden(CliClienteTienda::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliClienteTienda::getCliClienteTiendas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClienteTiendas filtrado por una coleccion de objetos foraneos de CliCentroPedido */ 	
	static function getCliClienteTiendasXCliCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_CLI_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addOrden(CliClienteTienda::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliClienteTienda::getCliClienteTiendas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClienteTiendas filtrado por una coleccion de objetos foraneos de GralTipoPersoneria */ 	
	static function getCliClienteTiendasXGralTipoPersonerias($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addOrden(CliClienteTienda::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliClienteTienda::getCliClienteTiendas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoPersoneriaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClienteTiendas filtrado por una coleccion de objetos foraneos de GralCondicionIva */ 	
	static function getCliClienteTiendasXGralCondicionIvas($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_CONDICION_IVA_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addOrden(CliClienteTienda::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliClienteTienda::getCliClienteTiendas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralCondicionIvaId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClienteTiendas filtrado por una coleccion de objetos foraneos de GralTipoDocumento */ 	
	static function getCliClienteTiendasXGralTipoDocumentos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addOrden(CliClienteTienda::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliClienteTienda::getCliClienteTiendas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralTipoDocumentoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getCliClienteTiendas filtrado por una coleccion de objetos foraneos de GeoLocalidad */ 	
	static function getCliClienteTiendasXGeoLocalidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(CliClienteTienda::GEN_ATTR_GEO_LOCALIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(CliClienteTienda::GEN_TABLA);
            $c->addOrden(CliClienteTienda::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = CliClienteTienda::getCliClienteTiendas($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoLocalidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'cli_cliente_tienda_adm.php';
            $url_gestion = 'cli_cliente_tienda_gestion.php';
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
	

	/* Metodo getCliClienteTiendaClaves */ 	
	public function getCliClienteTiendaClaves($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTiendaClave::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTiendaClave::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTiendaClave::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTiendaClave::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendaclaves = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetiendaclave = CliClienteTiendaClave::hidratarObjeto($fila);			
                $cliclientetiendaclaves[] = $cliclientetiendaclave;
            }

            return $cliclientetiendaclaves;
	}	
	

	/* Método getCliClienteTiendaClavesBloque para MasInfo */ 	
	public function getCliClienteTiendaClavesParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendaClaves($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendaClaves Habilitados */ 	
	public function getCliClienteTiendaClavesHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendaClaves($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTiendaClave */ 	
	public function getCliClienteTiendaClave($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendaClaves($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTiendaClave relacionadas */ 	
	public function deleteCliClienteTiendaClaves(){
            $obs = $this->getCliClienteTiendaClaves();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendaClavesCmb() CliClienteTiendaClave relacionadas */ 	
	public function getCliClienteTiendaClavesCmb(){
            $c = new Criterio();
            $c->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTiendaClave::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTiendaClave::getCliClienteTiendaClavesCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteTiendaClave */ 	
	public function getCliClientesXCliClienteTiendaClave($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaClave::GEN_TABLA, CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteTiendaClave */ 	
	public function getCantidadCliClientesXCliClienteTiendaClave($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaClave::GEN_TABLA, CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteTiendaClave */ 	
	public function getCliClienteXCliClienteTiendaClave($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteTiendaClave($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteTiendaLogins */ 	
	public function getCliClienteTiendaLogins($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTiendaLogin::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTiendaLogin::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTiendaLogin::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteTiendaLogin::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTiendaLogin::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTiendaLogin::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTiendaLogin::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendalogins = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetiendalogin = CliClienteTiendaLogin::hidratarObjeto($fila);			
                $cliclientetiendalogins[] = $cliclientetiendalogin;
            }

            return $cliclientetiendalogins;
	}	
	

	/* Método getCliClienteTiendaLoginsBloque para MasInfo */ 	
	public function getCliClienteTiendaLoginsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendaLogins($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendaLogins Habilitados */ 	
	public function getCliClienteTiendaLoginsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendaLogins($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTiendaLogin */ 	
	public function getCliClienteTiendaLogin($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendaLogins($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTiendaLogin relacionadas */ 	
	public function deleteCliClienteTiendaLogins(){
            $obs = $this->getCliClienteTiendaLogins();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendaLoginsCmb() CliClienteTiendaLogin relacionadas */ 	
	public function getCliClienteTiendaLoginsCmb(){
            $c = new Criterio();
            $c->add(CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTiendaLogin::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTiendaLogin::getCliClienteTiendaLoginsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteTiendaLogin */ 	
	public function getCliClientesXCliClienteTiendaLogin($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaLogin::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaLogin::GEN_TABLA, CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteTiendaLogin */ 	
	public function getCantidadCliClientesXCliClienteTiendaLogin($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaLogin::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaLogin::GEN_TABLA, CliClienteTiendaLogin::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteTiendaLogin */ 	
	public function getCliClienteXCliClienteTiendaLogin($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteTiendaLogin($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteTiendaNavegacions */ 	
	public function getCliClienteTiendaNavegacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteTiendaNavegacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteTiendaNavegacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteTiendaNavegacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteTiendaNavegacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteTiendaNavegacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteTiendaNavegacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteTiendaNavegacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientetiendanavegacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientetiendanavegacion = CliClienteTiendaNavegacion::hidratarObjeto($fila);			
                $cliclientetiendanavegacions[] = $cliclientetiendanavegacion;
            }

            return $cliclientetiendanavegacions;
	}	
	

	/* Método getCliClienteTiendaNavegacionsBloque para MasInfo */ 	
	public function getCliClienteTiendaNavegacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteTiendaNavegacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteTiendaNavegacions Habilitados */ 	
	public function getCliClienteTiendaNavegacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteTiendaNavegacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteTiendaNavegacion */ 	
	public function getCliClienteTiendaNavegacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteTiendaNavegacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteTiendaNavegacion relacionadas */ 	
	public function deleteCliClienteTiendaNavegacions(){
            $obs = $this->getCliClienteTiendaNavegacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteTiendaNavegacionsCmb() CliClienteTiendaNavegacion relacionadas */ 	
	public function getCliClienteTiendaNavegacionsCmb(){
            $c = new Criterio();
            $c->add(CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteTiendaNavegacion::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteTiendaNavegacion::getCliClienteTiendaNavegacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteTiendaNavegacion */ 	
	public function getCliClientesXCliClienteTiendaNavegacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaNavegacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaNavegacion::GEN_TABLA, CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteTiendaNavegacion */ 	
	public function getCantidadCliClientesXCliClienteTiendaNavegacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteTiendaNavegacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteTiendaNavegacion::GEN_TABLA, CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteTiendaNavegacion */ 	
	public function getCliClienteXCliClienteTiendaNavegacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteTiendaNavegacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaPresupuestoCliClienteTiendas */ 	
	public function getVtaPresupuestoCliClienteTiendas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoCliClienteTienda::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoCliClienteTienda::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoCliClienteTienda::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoCliClienteTienda::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoCliClienteTienda::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestocliclientetiendas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestocliclientetienda = VtaPresupuestoCliClienteTienda::hidratarObjeto($fila);			
                $vtapresupuestocliclientetiendas[] = $vtapresupuestocliclientetienda;
            }

            return $vtapresupuestocliclientetiendas;
	}	
	

	/* Método getVtaPresupuestoCliClienteTiendasBloque para MasInfo */ 	
	public function getVtaPresupuestoCliClienteTiendasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoCliClienteTiendas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoCliClienteTiendas Habilitados */ 	
	public function getVtaPresupuestoCliClienteTiendasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoCliClienteTiendas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoCliClienteTienda */ 	
	public function getVtaPresupuestoCliClienteTienda($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoCliClienteTiendas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoCliClienteTienda relacionadas */ 	
	public function deleteVtaPresupuestoCliClienteTiendas(){
            $obs = $this->getVtaPresupuestoCliClienteTiendas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoCliClienteTiendasCmb() VtaPresupuestoCliClienteTienda relacionadas */ 	
	public function getVtaPresupuestoCliClienteTiendasCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoCliClienteTienda::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoCliClienteTienda::getVtaPresupuestoCliClienteTiendasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaPresupuestoCliClienteTienda */ 	
	public function getVtaPresupuestosXVtaPresupuestoCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoCliClienteTienda::GEN_TABLA, VtaPresupuestoCliClienteTienda::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaPresupuestoCliClienteTienda */ 	
	public function getCantidadVtaPresupuestosXVtaPresupuestoCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoCliClienteTienda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoCliClienteTienda::GEN_TABLA, VtaPresupuestoCliClienteTienda::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaPresupuestoCliClienteTienda */ 	
	public function getVtaPresupuestoXVtaPresupuestoCliClienteTienda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaPresupuestoCliClienteTienda($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaPresupuestoMensaje::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuestoMensaje::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaPresupuestoValoracions */ 	
	public function getVtaPresupuestoValoracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaPresupuestoValoracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaPresupuestoValoracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaPresupuestoValoracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaPresupuestoValoracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaPresupuestoValoracion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaPresupuestoValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaPresupuestoValoracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaPresupuestoValoracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtapresupuestovaloracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtapresupuestovaloracion = VtaPresupuestoValoracion::hidratarObjeto($fila);			
                $vtapresupuestovaloracions[] = $vtapresupuestovaloracion;
            }

            return $vtapresupuestovaloracions;
	}	
	

	/* Método getVtaPresupuestoValoracionsBloque para MasInfo */ 	
	public function getVtaPresupuestoValoracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaPresupuestoValoracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaPresupuestoValoracions Habilitados */ 	
	public function getVtaPresupuestoValoracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaPresupuestoValoracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaPresupuestoValoracion */ 	
	public function getVtaPresupuestoValoracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaPresupuestoValoracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaPresupuestoValoracion relacionadas */ 	
	public function deleteVtaPresupuestoValoracions(){
            $obs = $this->getVtaPresupuestoValoracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaPresupuestoValoracionsCmb() VtaPresupuestoValoracion relacionadas */ 	
	public function getVtaPresupuestoValoracionsCmb(){
            $c = new Criterio();
            $c->add(VtaPresupuestoValoracion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuestoValoracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaPresupuestoValoracion::getVtaPresupuestoValoracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPresupuestos (Coleccion) relacionados a traves de VtaPresupuestoValoracion */ 	
	public function getVtaPresupuestosXVtaPresupuestoValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoValoracion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoValoracion::GEN_TABLA, VtaPresupuestoValoracion::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPresupuestos relacionados a traves de VtaPresupuestoValoracion */ 	
	public function getCantidadVtaPresupuestosXVtaPresupuestoValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPresupuesto::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPresupuesto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaPresupuestoValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaPresupuestoValoracion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoValoracion::GEN_TABLA, VtaPresupuestoValoracion::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPresupuesto::getVtaPresupuestos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPresupuesto (Objeto) relacionado a traves de VtaPresupuestoValoracion */ 	
	public function getVtaPresupuestoXVtaPresupuestoValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPresupuestosXVtaPresupuestoValoracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getTndTiendaBusquedas */ 	
	public function getTndTiendaBusquedas($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(TndTiendaBusqueda::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(TndTiendaBusqueda::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(TndTiendaBusqueda::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(TndTiendaBusqueda::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(TndTiendaBusqueda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(TndTiendaBusqueda::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".TndTiendaBusqueda::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $tndtiendabusquedas = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $tndtiendabusqueda = TndTiendaBusqueda::hidratarObjeto($fila);			
                $tndtiendabusquedas[] = $tndtiendabusqueda;
            }

            return $tndtiendabusquedas;
	}	
	

	/* Método getTndTiendaBusquedasBloque para MasInfo */ 	
	public function getTndTiendaBusquedasParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getTndTiendaBusquedas($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getTndTiendaBusquedas Habilitados */ 	
	public function getTndTiendaBusquedasHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getTndTiendaBusquedas($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getTndTiendaBusqueda */ 	
	public function getTndTiendaBusqueda($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getTndTiendaBusquedas($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de TndTiendaBusqueda relacionadas */ 	
	public function deleteTndTiendaBusquedas(){
            $obs = $this->getTndTiendaBusquedas();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getTndTiendaBusquedasCmb() TndTiendaBusqueda relacionadas */ 	
	public function getTndTiendaBusquedasCmb(){
            $c = new Criterio();
            $c->add(TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(TndTiendaBusqueda::GEN_TABLA);
            $c->setCriterios();

            $os = TndTiendaBusqueda::getTndTiendaBusquedasCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de TndTiendaBusqueda */ 	
	public function getCliClientesXTndTiendaBusqueda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(TndTiendaBusqueda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(TndTiendaBusqueda::GEN_TABLA, TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de TndTiendaBusqueda */ 	
	public function getCantidadCliClientesXTndTiendaBusqueda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(TndTiendaBusqueda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(TndTiendaBusqueda::GEN_TABLA, TndTiendaBusqueda::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de TndTiendaBusqueda */ 	
	public function getCliClienteXTndTiendaBusqueda($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXTndTiendaBusqueda($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna una coleccion de IDs de los VtaPresupuestos asignados a CliClienteTienda */ 	
	public function getVtaPresupuestoCliClienteTiendasId(){
            $ids = array();
            foreach($this->getVtaPresupuestoCliClienteTiendas() as $o){
            
                $ids[] = $o->getVtaPresupuestoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaPresupuestos asignados al CliClienteTienda */ 	
	public function setVtaPresupuestoCliClienteTiendas($ids){
            $this->deleteVtaPresupuestoCliClienteTiendas();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaPresupuestoCliClienteTienda();
                    $o->setVtaPresupuestoId($id);
                    $o->setCliClienteTiendaId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaPresupuesto en el alta de CliClienteTienda */ 	
	public function getAltaMostrarBloqueRelacionVtaPresupuestoCliClienteTienda(){
            return true;
	}
	

	/* Metodo que retorna el CliCliente (Clave Foranea) */ 	
    public function getCliCliente(){
        $o = new CliCliente();
        $o->setId($this->getCliClienteId());
        return $o;			
    }

	/* Metodo que retorna el CliCliente (Clave Foranea) en Array */ 	
    public function getCliClienteEnArray(&$arr_os){
        if($this->getCliClienteId() != 'null'){
            if(isset($arr_os[$this->getCliClienteId()])){
                $o = $arr_os[$this->getCliClienteId()];
            }else{
                $o = CliCliente::getOxId($this->getCliClienteId());
                if($o){
                    $arr_os[$this->getCliClienteId()] = $o;
                }
            }
        }else{
            $o = new CliCliente();
        }
        return $o;		
    }

	/* Metodo que retorna el CliCentroPedido (Clave Foranea) */ 	
    public function getCliCentroPedido(){
        $o = new CliCentroPedido();
        $o->setId($this->getCliCentroPedidoId());
        return $o;			
    }

	/* Metodo que retorna el CliCentroPedido (Clave Foranea) en Array */ 	
    public function getCliCentroPedidoEnArray(&$arr_os){
        if($this->getCliCentroPedidoId() != 'null'){
            if(isset($arr_os[$this->getCliCentroPedidoId()])){
                $o = $arr_os[$this->getCliCentroPedidoId()];
            }else{
                $o = CliCentroPedido::getOxId($this->getCliCentroPedidoId());
                if($o){
                    $arr_os[$this->getCliCentroPedidoId()] = $o;
                }
            }
        }else{
            $o = new CliCentroPedido();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoPersoneria (Clave Foranea) */ 	
    public function getGralTipoPersoneria(){
        $o = new GralTipoPersoneria();
        $o->setId($this->getGralTipoPersoneriaId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoPersoneria (Clave Foranea) en Array */ 	
    public function getGralTipoPersoneriaEnArray(&$arr_os){
        if($this->getGralTipoPersoneriaId() != 'null'){
            if(isset($arr_os[$this->getGralTipoPersoneriaId()])){
                $o = $arr_os[$this->getGralTipoPersoneriaId()];
            }else{
                $o = GralTipoPersoneria::getOxId($this->getGralTipoPersoneriaId());
                if($o){
                    $arr_os[$this->getGralTipoPersoneriaId()] = $o;
                }
            }
        }else{
            $o = new GralTipoPersoneria();
        }
        return $o;		
    }

	/* Metodo que retorna el GralCondicionIva (Clave Foranea) */ 	
    public function getGralCondicionIva(){
        $o = new GralCondicionIva();
        $o->setId($this->getGralCondicionIvaId());
        return $o;			
    }

	/* Metodo que retorna el GralCondicionIva (Clave Foranea) en Array */ 	
    public function getGralCondicionIvaEnArray(&$arr_os){
        if($this->getGralCondicionIvaId() != 'null'){
            if(isset($arr_os[$this->getGralCondicionIvaId()])){
                $o = $arr_os[$this->getGralCondicionIvaId()];
            }else{
                $o = GralCondicionIva::getOxId($this->getGralCondicionIvaId());
                if($o){
                    $arr_os[$this->getGralCondicionIvaId()] = $o;
                }
            }
        }else{
            $o = new GralCondicionIva();
        }
        return $o;		
    }

	/* Metodo que retorna el GralTipoDocumento (Clave Foranea) */ 	
    public function getGralTipoDocumento(){
        $o = new GralTipoDocumento();
        $o->setId($this->getGralTipoDocumentoId());
        return $o;			
    }

	/* Metodo que retorna el GralTipoDocumento (Clave Foranea) en Array */ 	
    public function getGralTipoDocumentoEnArray(&$arr_os){
        if($this->getGralTipoDocumentoId() != 'null'){
            if(isset($arr_os[$this->getGralTipoDocumentoId()])){
                $o = $arr_os[$this->getGralTipoDocumentoId()];
            }else{
                $o = GralTipoDocumento::getOxId($this->getGralTipoDocumentoId());
                if($o){
                    $arr_os[$this->getGralTipoDocumentoId()] = $o;
                }
            }
        }else{
            $o = new GralTipoDocumento();
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
            		
        if($contexto_solicitante != CliCliente::GEN_CLASE){
            if($this->getCliCliente()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCliente::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCliente()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliCentroPedido::GEN_CLASE){
            if($this->getCliCentroPedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCentroPedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCentroPedido()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoPersoneria::GEN_CLASE){
            if($this->getGralTipoPersoneria()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoPersoneria::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoPersoneria()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralCondicionIva::GEN_CLASE){
            if($this->getGralCondicionIva()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralCondicionIva::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralCondicionIva()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != GralTipoDocumento::GEN_CLASE){
            if($this->getGralTipoDocumento()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralTipoDocumento::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralTipoDocumento()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM cli_cliente_tienda'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'cli_cliente_tienda';");
            
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

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_cliente_id' */ 	
	static function getOsxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_centro_pedido_id' */ 	
	static function getOxCliCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cli_centro_pedido_id' */ 	
	static function getOsxCliCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_personeria_id' */ 	
	static function getOsxGralTipoPersoneriaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_condicion_iva_id' */ 	
	static function getOsxGralCondicionIvaId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_CONDICION_IVA_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nombre' */ 	
	static function getOxNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'apellido' */ 	
	static function getOxApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'razon_social' */ 	
	static function getOxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'razon_social' */ 	
	static function getOsxRazonSocial($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RAZON_SOCIAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_tipo_documento_id' */ 	
	static function getOsxGralTipoDocumentoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cuit' */ 	
	static function getOxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'cuit' */ 	
	static function getOsxCuit($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CUIT, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio_legal' */ 	
	static function getOxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'domicilio_legal' */ 	
	static function getOsxDomicilioLegal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO_LEGAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono_whatsapp' */ 	
	static function getOxTelefonoWhatsapp($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO_WHATSAPP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'telefono_whatsapp' */ 	
	static function getOsxTelefonoWhatsapp($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO_WHATSAPP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_postal' */ 	
	static function getOxCodigoPostal($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_POSTAL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_localidad_id' */ 	
	static function getOxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'usuario' */ 	
	static function getOxUsuario($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_USUARIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'verificar' */ 	
	static function getOxVerificar($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VERIFICAR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'verificar' */ 	
	static function getOsxVerificar($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VERIFICAR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas(null, $criterio);
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

            $obs = self::getCliClienteTiendas($paginador, $criterio);
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

            $obs = self::getCliClienteTiendas($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'cli_cliente_tienda_adm');
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
                $c->addTabla(CliClienteTienda::GEN_TABLA);
                $c->addOrden(CliClienteTienda::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $cli_cliente_tiendas = CliClienteTienda::getCliClienteTiendas(null, $c);

                $arr = array();
                foreach($cli_cliente_tiendas as $cli_cliente_tienda){
                    $descripcion = $cli_cliente_tienda->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>