<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaVendedorValoracionAgrupacion
{ 
	
	const SES_PAGINACION = 'adm_vtavendedorvaloracionagrupacion_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtavendedorvaloracionagrupacion_paginas_registros';
	const SES_CRITERIOS = 'adm_vtavendedorvaloracionagrupacion_criterios';
	
	const GEN_CLASE = 'VtaVendedorValoracionAgrupacion';
	const GEN_TABLA = 'vta_vendedor_valoracion_agrupacion';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaVendedorValoracionAgrupacion */ 
	const GEN_ATTR_ID = 'vta_vendedor_valoracion_agrupacion.id';
	const GEN_ATTR_DESCRIPCION = 'vta_vendedor_valoracion_agrupacion.descripcion';
	const GEN_ATTR_APELLIDO = 'vta_vendedor_valoracion_agrupacion.apellido';
	const GEN_ATTR_NOMBRE = 'vta_vendedor_valoracion_agrupacion.nombre';
	const GEN_ATTR_EMAIL = 'vta_vendedor_valoracion_agrupacion.email';
	const GEN_ATTR_TELEFONO = 'vta_vendedor_valoracion_agrupacion.telefono';
	const GEN_ATTR_FECHA = 'vta_vendedor_valoracion_agrupacion.fecha';
	const GEN_ATTR_VTA_VENDEDOR_ID = 'vta_vendedor_valoracion_agrupacion.vta_vendedor_id';
	const GEN_ATTR_VALORACION = 'vta_vendedor_valoracion_agrupacion.valoracion';
	const GEN_ATTR_CLI_CLIENTE_ID = 'vta_vendedor_valoracion_agrupacion.cli_cliente_id';
	const GEN_ATTR_SESSION = 'vta_vendedor_valoracion_agrupacion.session';
	const GEN_ATTR_NAVEGADOR = 'vta_vendedor_valoracion_agrupacion.navegador';
	const GEN_ATTR_IP = 'vta_vendedor_valoracion_agrupacion.ip';
	const GEN_ATTR_OBSERVACION = 'vta_vendedor_valoracion_agrupacion.observacion';
	const GEN_ATTR_ORDEN = 'vta_vendedor_valoracion_agrupacion.orden';
	const GEN_ATTR_ESTADO = 'vta_vendedor_valoracion_agrupacion.estado';
	const GEN_ATTR_CREADO = 'vta_vendedor_valoracion_agrupacion.creado';
	const GEN_ATTR_CREADO_POR = 'vta_vendedor_valoracion_agrupacion.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_vendedor_valoracion_agrupacion.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_vendedor_valoracion_agrupacion.modificado_por';

	/* Constantes de Atributos Min de BVtaVendedorValoracionAgrupacion */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_APELLIDO = 'apellido';
	const GEN_ATTR_MIN_NOMBRE = 'nombre';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_FECHA = 'fecha';
	const GEN_ATTR_MIN_VTA_VENDEDOR_ID = 'vta_vendedor_id';
	const GEN_ATTR_MIN_VALORACION = 'valoracion';
	const GEN_ATTR_MIN_CLI_CLIENTE_ID = 'cli_cliente_id';
	const GEN_ATTR_MIN_SESSION = 'session';
	const GEN_ATTR_MIN_NAVEGADOR = 'navegador';
	const GEN_ATTR_MIN_IP = 'ip';
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
	

	/* Atributos de BVtaVendedorValoracionAgrupacion */ 
	private $id;
	private $descripcion;
	private $apellido;
	private $nombre;
	private $email;
	private $telefono;
	private $fecha;
	private $vta_vendedor_id;
	private $valoracion;
	private $cli_cliente_id;
	private $session;
	private $navegador;
	private $ip;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaVendedorValoracionAgrupacion */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getApellido(){ if(isset($this->apellido)){ return $this->apellido; }else{ return ''; } }
	public function getNombre(){ if(isset($this->nombre)){ return $this->nombre; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getFecha(){ if(isset($this->fecha)){ return $this->fecha; }else{ return ''; } }
	public function getVtaVendedorId(){ if(isset($this->vta_vendedor_id)){ return $this->vta_vendedor_id; }else{ return 'null'; } }
	public function getValoracion(){ if(isset($this->valoracion)){ return $this->valoracion; }else{ return 0; } }
	public function getCliClienteId(){ if(isset($this->cli_cliente_id)){ return $this->cli_cliente_id; }else{ return 'null'; } }
	public function getSession(){ if(isset($this->session)){ return $this->session; }else{ return ''; } }
	public function getNavegador(){ if(isset($this->navegador)){ return $this->navegador; }else{ return ''; } }
	public function getIp(){ if(isset($this->ip)){ return $this->ip; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaVendedorValoracionAgrupacion */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_APELLIDO."
				, ".self::GEN_ATTR_NOMBRE."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_FECHA."
				, ".self::GEN_ATTR_VTA_VENDEDOR_ID."
				, ".self::GEN_ATTR_VALORACION."
				, ".self::GEN_ATTR_CLI_CLIENTE_ID."
				, ".self::GEN_ATTR_SESSION."
				, ".self::GEN_ATTR_NAVEGADOR."
				, ".self::GEN_ATTR_IP."
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
				$this->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
				$this->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
				$this->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
				$this->setValoracion($fila[self::GEN_ATTR_MIN_VALORACION]);
				$this->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
				$this->setSession($fila[self::GEN_ATTR_MIN_SESSION]);
				$this->setNavegador($fila[self::GEN_ATTR_MIN_NAVEGADOR]);
				$this->setIp($fila[self::GEN_ATTR_MIN_IP]);
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
	public function setApellido($v){ $this->apellido = $v; }
	public function setNombre($v){ $this->nombre = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setFecha($v){ $this->fecha = $v; }
	public function setVtaVendedorId($v){ $this->vta_vendedor_id = $v; }
	public function setValoracion($v){ $this->valoracion = $v; }
	public function setCliClienteId($v){ $this->cli_cliente_id = $v; }
	public function setSession($v){ $this->session = $v; }
	public function setNavegador($v){ $this->navegador = $v; }
	public function setIp($v){ $this->ip = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaVendedorValoracionAgrupacion();
            $o->setId($fila[VtaVendedorValoracionAgrupacion::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$o->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$o->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$o->setValoracion($fila[self::GEN_ATTR_MIN_VALORACION]);
			$o->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$o->setSession($fila[self::GEN_ATTR_MIN_SESSION]);
			$o->setNavegador($fila[self::GEN_ATTR_MIN_NAVEGADOR]);
			$o->setIp($fila[self::GEN_ATTR_MIN_IP]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BVtaVendedorValoracionAgrupacion */ 	
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
            
            
            $this->error = $error;
            return $error;
	}

	/* Cambia el estado de BVtaVendedorValoracionAgrupacion */ 	
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

	/* Save de BVtaVendedorValoracionAgrupacion */ 	
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
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_VALORACION."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_SESSION."
						, ".self::GEN_ATTR_MIN_NAVEGADOR."
						, ".self::GEN_ATTR_MIN_IP."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_vendedor_valoracion_agrupacion_seq'), 
                '".$this->getDescripcion()."'
						, '".$this->getApellido()."'
						, '".$this->getNombre()."'
						, '".$this->getEmail()."'
						, '".$this->getTelefono()."'
						, '".$this->getFecha()."'
						, ".$this->getVtaVendedorId()."
						, ".$this->getValoracion()."
						, ".$this->getCliClienteId()."
						, '".$this->getSession()."'
						, '".$this->getNavegador()."'
						, '".$this->getIp()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_vendedor_valoracion_agrupacion_seq')";
            
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
                 
				 ".VtaVendedorValoracionAgrupacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID." = ".$this->getVtaVendedorId()."
						, ".self::GEN_ATTR_MIN_VALORACION." = ".$this->getValoracion()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_SESSION." = '".$this->getSession()."'
						, ".self::GEN_ATTR_MIN_NAVEGADOR." = '".$this->getNavegador()."'
						, ".self::GEN_ATTR_MIN_IP." = '".$this->getIp()."'
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
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_FECHA."
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_VALORACION."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID."
						, ".self::GEN_ATTR_MIN_SESSION."
						, ".self::GEN_ATTR_MIN_NAVEGADOR."
						, ".self::GEN_ATTR_MIN_IP."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, '".$this->getApellido()."'
						, '".$this->getNombre()."'
						, '".$this->getEmail()."'
						, '".$this->getTelefono()."'
						, '".$this->getFecha()."'
						, ".$this->getVtaVendedorId()."
						, ".$this->getValoracion()."
						, ".$this->getCliClienteId()."
						, '".$this->getSession()."'
						, '".$this->getNavegador()."'
						, '".$this->getIp()."'
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
                     
				 ".VtaVendedorValoracionAgrupacion::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_FECHA." = '".$this->getFecha()."'
						, ".self::GEN_ATTR_MIN_VTA_VENDEDOR_ID." = ".$this->getVtaVendedorId()."
						, ".self::GEN_ATTR_MIN_VALORACION." = ".$this->getValoracion()."
						, ".self::GEN_ATTR_MIN_CLI_CLIENTE_ID." = ".$this->getCliClienteId()."
						, ".self::GEN_ATTR_MIN_SESSION." = '".$this->getSession()."'
						, ".self::GEN_ATTR_MIN_NAVEGADOR." = '".$this->getNavegador()."'
						, ".self::GEN_ATTR_MIN_IP." = '".$this->getIp()."'
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
            $o = new VtaVendedorValoracionAgrupacion();
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

	/* Delete de BVtaVendedorValoracionAgrupacion */ 	
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
	
            // se elimina la coleccion de VtaVendedorValoracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorValoracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorValoracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaVendedorValoracionAgrupacion(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaVendedorValoracionAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaVendedorValoracionAgrupacion::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtavendedorvaloracionagrupacions = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtavendedorvaloracionagrupacion = new VtaVendedorValoracionAgrupacion();
                    $vtavendedorvaloracionagrupacion->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtavendedorvaloracionagrupacion->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtavendedorvaloracionagrupacion->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$vtavendedorvaloracionagrupacion->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$vtavendedorvaloracionagrupacion->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$vtavendedorvaloracionagrupacion->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$vtavendedorvaloracionagrupacion->setFecha($fila[self::GEN_ATTR_MIN_FECHA]);
			$vtavendedorvaloracionagrupacion->setVtaVendedorId($fila[self::GEN_ATTR_MIN_VTA_VENDEDOR_ID]);
			$vtavendedorvaloracionagrupacion->setValoracion($fila[self::GEN_ATTR_MIN_VALORACION]);
			$vtavendedorvaloracionagrupacion->setCliClienteId($fila[self::GEN_ATTR_MIN_CLI_CLIENTE_ID]);
			$vtavendedorvaloracionagrupacion->setSession($fila[self::GEN_ATTR_MIN_SESSION]);
			$vtavendedorvaloracionagrupacion->setNavegador($fila[self::GEN_ATTR_MIN_NAVEGADOR]);
			$vtavendedorvaloracionagrupacion->setIp($fila[self::GEN_ATTR_MIN_IP]);
			$vtavendedorvaloracionagrupacion->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtavendedorvaloracionagrupacion->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtavendedorvaloracionagrupacion->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtavendedorvaloracionagrupacion->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtavendedorvaloracionagrupacion->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtavendedorvaloracionagrupacion->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtavendedorvaloracionagrupacion->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtavendedorvaloracionagrupacions[] = $vtavendedorvaloracionagrupacion;
		}
		
		return $vtavendedorvaloracionagrupacions;
	}	
	

	/* Método getVtaVendedorValoracionAgrupacions Habilitados */ 	
	static function getVtaVendedorValoracionAgrupacionsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaVendedorValoracionAgrupacions para listado de Backend */ 	
	static function getVtaVendedorValoracionAgrupacionsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaVendedorValoracionAgrupacionsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaVendedorValoracionAgrupacion::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaVendedorValoracionAgrupacions filtrado para select */ 	
	static function getVtaVendedorValoracionAgrupacionsCmbF($paginador = null, $criterio = null){
            $col = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaVendedorValoracionAgrupacions filtrado por una coleccion de objetos foraneos de VtaVendedor */ 	
	static function getVtaVendedorValoracionAgrupacionsXVtaVendedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_VTA_VENDEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->addOrden(VtaVendedorValoracionAgrupacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaVendedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaVendedorValoracionAgrupacions filtrado por una coleccion de objetos foraneos de CliCliente */ 	
	static function getVtaVendedorValoracionAgrupacionsXCliClientes($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->addOrden(VtaVendedorValoracionAgrupacion::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getCliClienteId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_vendedor_valoracion_agrupacion_adm.php';
            $url_gestion = 'vta_vendedor_valoracion_agrupacion_gestion.php';
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
	

	/* Metodo getVtaVendedorValoracions */ 	
	public function getVtaVendedorValoracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorValoracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorValoracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorValoracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorValoracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorValoracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorvaloracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorvaloracion = VtaVendedorValoracion::hidratarObjeto($fila);			
                $vtavendedorvaloracions[] = $vtavendedorvaloracion;
            }

            return $vtavendedorvaloracions;
	}	
	

	/* Método getVtaVendedorValoracionsBloque para MasInfo */ 	
	public function getVtaVendedorValoracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorValoracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorValoracions Habilitados */ 	
	public function getVtaVendedorValoracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorValoracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorValoracion */ 	
	public function getVtaVendedorValoracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorValoracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorValoracion relacionadas */ 	
	public function deleteVtaVendedorValoracions(){
            $obs = $this->getVtaVendedorValoracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorValoracionsCmb() VtaVendedorValoracion relacionadas */ 	
	public function getVtaVendedorValoracionsCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorValoracion::getVtaVendedorValoracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedorValoracionTipoItems (Coleccion) relacionados a traves de VtaVendedorValoracion */ 	
	public function getVtaVendedorValoracionTipoItemsXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedorValoracionTipoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionTipoItem::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracion::GEN_TABLA, VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, VtaVendedorValoracionTipoItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedorValoracionTipoItems relacionados a traves de VtaVendedorValoracion */ 	
	public function getCantidadVtaVendedorValoracionTipoItemsXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedorValoracionTipoItem::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedorValoracionTipoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionTipoItem::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracion::GEN_TABLA, VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, VtaVendedorValoracionTipoItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedorValoracionTipoItem (Objeto) relacionado a traves de VtaVendedorValoracion */ 	
	public function getVtaVendedorValoracionTipoItemXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorValoracionTipoItemsXVtaVendedorValoracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo que retorna el VtaVendedor (Clave Foranea) */ 	
    public function getVtaVendedor(){
        $o = new VtaVendedor();
        $o->setId($this->getVtaVendedorId());
        return $o;			
    }

	/* Metodo que retorna el VtaVendedor (Clave Foranea) en Array */ 	
    public function getVtaVendedorEnArray(&$arr_os){
        if($this->getVtaVendedorId() != 'null'){
            if(isset($arr_os[$this->getVtaVendedorId()])){
                $o = $arr_os[$this->getVtaVendedorId()];
            }else{
                $o = VtaVendedor::getOxId($this->getVtaVendedorId());
                if($o){
                    $arr_os[$this->getVtaVendedorId()] = $o;
                }
            }
        }else{
            $o = new VtaVendedor();
        }
        return $o;		
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

	/* Metodo que retorna la codigo del objeto */ 	
    public function getCodigo(){
        return $this->getId();			
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
            		
        if($contexto_solicitante != VtaVendedor::GEN_CLASE){
            if($this->getVtaVendedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaVendedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaVendedor()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != CliCliente::GEN_CLASE){
            if($this->getCliCliente()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(CliCliente::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getCliCliente()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_vendedor_valoracion_agrupacion'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_vendedor_valoracion_agrupacion';");
            
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

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'apellido' */ 	
	static function getOxApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nombre' */ 	
	static function getOxNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'fecha' */ 	
	static function getOxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'fecha' */ 	
	static function getOsxFecha($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_FECHA, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_vendedor_id' */ 	
	static function getOxVtaVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_vendedor_id' */ 	
	static function getOsxVtaVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'valoracion' */ 	
	static function getOxValoracion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VALORACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'valoracion' */ 	
	static function getOsxValoracion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VALORACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'cli_cliente_id' */ 	
	static function getOxCliClienteId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CLI_CLIENTE_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'session' */ 	
	static function getOxSession($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SESSION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'session' */ 	
	static function getOsxSession($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_SESSION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'navegador' */ 	
	static function getOxNavegador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NAVEGADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'navegador' */ 	
	static function getOsxNavegador($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NAVEGADOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'ip' */ 	
	static function getOxIp($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'ip' */ 	
	static function getOsxIp($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_IP, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions(null, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
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

            $obs = self::getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_vendedor_valoracion_agrupacion_adm');
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

	/* Metodos anexos a manejo de fechas (date y datetime) 'fecha' */ 	
	public function getFechaDiferenciaDias($fecha_hasta = false){
            if(!$fecha_hasta){
                $fecha_hasta = date('Y-m-d');
            }
            $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFecha(), $fecha_hasta);
        return $fecha_hace;
	}
	
	public function getFechaDiferenciaDiasDescripcion(){
            $fecha_hace = $this->getFechaDiferenciaDias();
        
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
                $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
                $c->addOrden(VtaVendedorValoracionAgrupacion::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_vendedor_valoracion_agrupacions = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions(null, $c);

                $arr = array();
                foreach($vta_vendedor_valoracion_agrupacions as $vta_vendedor_valoracion_agrupacion){
                    $descripcion = $vta_vendedor_valoracion_agrupacion->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>