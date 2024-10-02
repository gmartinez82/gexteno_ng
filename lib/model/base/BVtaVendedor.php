<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BVtaVendedor
{ 
	
	const SES_PAGINACION = 'adm_vtavendedor_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_vtavendedor_paginas_registros';
	const SES_CRITERIOS = 'adm_vtavendedor_criterios';
	
	const GEN_CLASE = 'VtaVendedor';
	const GEN_TABLA = 'vta_vendedor';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BVtaVendedor */ 
	const GEN_ATTR_ID = 'vta_vendedor.id';
	const GEN_ATTR_DESCRIPCION = 'vta_vendedor.descripcion';
	const GEN_ATTR_GRAL_SUCURSAL_ID = 'vta_vendedor.gral_sucursal_id';
	const GEN_ATTR_APELLIDO = 'vta_vendedor.apellido';
	const GEN_ATTR_NOMBRE = 'vta_vendedor.nombre';
	const GEN_ATTR_VTA_TIPO_VENDEDOR_ID = 'vta_vendedor.vta_tipo_vendedor_id';
	const GEN_ATTR_EMAIL = 'vta_vendedor.email';
	const GEN_ATTR_TELEFONO = 'vta_vendedor.telefono';
	const GEN_ATTR_CELULAR = 'vta_vendedor.celular';
	const GEN_ATTR_PORCENTAJE_COMISION = 'vta_vendedor.porcentaje_comision';
	const GEN_ATTR_CODIGO = 'vta_vendedor.codigo';
	const GEN_ATTR_OBSERVACION = 'vta_vendedor.observacion';
	const GEN_ATTR_ORDEN = 'vta_vendedor.orden';
	const GEN_ATTR_ESTADO = 'vta_vendedor.estado';
	const GEN_ATTR_CREADO = 'vta_vendedor.creado';
	const GEN_ATTR_CREADO_POR = 'vta_vendedor.creado_por';
	const GEN_ATTR_MODIFICADO = 'vta_vendedor.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'vta_vendedor.modificado_por';

	/* Constantes de Atributos Min de BVtaVendedor */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_GRAL_SUCURSAL_ID = 'gral_sucursal_id';
	const GEN_ATTR_MIN_APELLIDO = 'apellido';
	const GEN_ATTR_MIN_NOMBRE = 'nombre';
	const GEN_ATTR_MIN_VTA_TIPO_VENDEDOR_ID = 'vta_tipo_vendedor_id';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_CELULAR = 'celular';
	const GEN_ATTR_MIN_PORCENTAJE_COMISION = 'porcentaje_comision';
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
	

	/* Atributos de BVtaVendedor */ 
	private $id;
	private $descripcion;
	private $gral_sucursal_id;
	private $apellido;
	private $nombre;
	private $vta_tipo_vendedor_id;
	private $email;
	private $telefono;
	private $celular;
	private $porcentaje_comision;
	private $codigo;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BVtaVendedor */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getGralSucursalId(){ if(isset($this->gral_sucursal_id)){ return $this->gral_sucursal_id; }else{ return 'null'; } }
	public function getApellido(){ if(isset($this->apellido)){ return $this->apellido; }else{ return ''; } }
	public function getNombre(){ if(isset($this->nombre)){ return $this->nombre; }else{ return ''; } }
	public function getVtaTipoVendedorId(){ if(isset($this->vta_tipo_vendedor_id)){ return $this->vta_tipo_vendedor_id; }else{ return 'null'; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getCelular(){ if(isset($this->celular)){ return $this->celular; }else{ return ''; } }
	public function getPorcentajeComision(){ if(isset($this->porcentaje_comision)){ return $this->porcentaje_comision; }else{ return 0; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 0; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 0; } }

	/* Setters de BVtaVendedor */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_GRAL_SUCURSAL_ID."
				, ".self::GEN_ATTR_APELLIDO."
				, ".self::GEN_ATTR_NOMBRE."
				, ".self::GEN_ATTR_VTA_TIPO_VENDEDOR_ID."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_CELULAR."
				, ".self::GEN_ATTR_PORCENTAJE_COMISION."
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
				$this->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
				$this->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
				$this->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
				$this->setVtaTipoVendedorId($fila[self::GEN_ATTR_MIN_VTA_TIPO_VENDEDOR_ID]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setCelular($fila[self::GEN_ATTR_MIN_CELULAR]);
				$this->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
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
	public function setGralSucursalId($v){ $this->gral_sucursal_id = $v; }
	public function setApellido($v){ $this->apellido = $v; }
	public function setNombre($v){ $this->nombre = $v; }
	public function setVtaTipoVendedorId($v){ $this->vta_tipo_vendedor_id = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setCelular($v){ $this->celular = $v; }
	public function setPorcentajeComision($v){ $this->porcentaje_comision = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new VtaVendedor();
            $o->setId($fila[VtaVendedor::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$o->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$o->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$o->setVtaTipoVendedorId($fila[self::GEN_ATTR_MIN_VTA_TIPO_VENDEDOR_ID]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setCelular($fila[self::GEN_ATTR_MIN_CELULAR]);
			$o->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
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

	/* Control de BVtaVendedor */ 	
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

	/* Cambia el estado de BVtaVendedor */ 	
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

	/* Save de BVtaVendedor */ 	
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_CELULAR."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('vta_vendedor_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getGralSucursalId()."
						, '".$this->getApellido()."'
						, '".$this->getNombre()."'
						, ".$this->getVtaTipoVendedorId()."
						, '".$this->getEmail()."'
						, '".$this->getTelefono()."'
						, '".$this->getCelular()."'
						, '".$this->getPorcentajeComision()."'
						, '".$this->getCodigo()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('vta_vendedor_seq')";
            
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
                 
				 ".VtaVendedor::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_VTA_TIPO_VENDEDOR_ID." = ".$this->getVtaTipoVendedorId()."
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_CELULAR." = '".$this->getCelular()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION." = '".$this->getPorcentajeComision()."'
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
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID."
						, ".self::GEN_ATTR_MIN_APELLIDO."
						, ".self::GEN_ATTR_MIN_NOMBRE."
						, ".self::GEN_ATTR_MIN_VTA_TIPO_VENDEDOR_ID."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_CELULAR."
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION."
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
						, ".$this->getGralSucursalId()."
						, '".$this->getApellido()."'
						, '".$this->getNombre()."'
						, ".$this->getVtaTipoVendedorId()."
						, '".$this->getEmail()."'
						, '".$this->getTelefono()."'
						, '".$this->getCelular()."'
						, '".$this->getPorcentajeComision()."'
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
                     
				 ".VtaVendedor::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID." = ".$this->getGralSucursalId()."
						, ".self::GEN_ATTR_MIN_APELLIDO." = '".$this->getApellido()."'
						, ".self::GEN_ATTR_MIN_NOMBRE." = '".$this->getNombre()."'
						, ".self::GEN_ATTR_MIN_VTA_TIPO_VENDEDOR_ID." = ".$this->getVtaTipoVendedorId()."
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_CELULAR." = '".$this->getCelular()."'
						, ".self::GEN_ATTR_MIN_PORCENTAJE_COMISION." = '".$this->getPorcentajeComision()."'
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
            $o = new VtaVendedor();
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

	/* Delete de BVtaVendedor */ 	
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
	
            // se elimina la coleccion de GralSucursalVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralRutaVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralRutaVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralRutaVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de GralCentroCostoVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralCentroCostoVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralCentroCostoVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de CliClienteVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(CliClienteVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getCliClienteVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorValoracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorValoracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorValoracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorValoracionAgrupacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorValoracionAgrupacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorValoracionTipoItemVtaVendedors relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorValoracionTipoItemVtaVendedors(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaPresupuestos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaPresupuestos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorInsTipoListaPrecios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorInsTipoListaPrecios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorGralEscenarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorGralEscenario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorGralEscenarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaVendedorDescuentos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaVendedorDescuento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaVendedorDescuentos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaFacturas relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaFacturas(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionVtaFacturaConfiguracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionVtaFacturaConfiguracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionVtaFacturaConfiguracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaComisionVtaAjusteDebeConfiguracions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaComisionVtaAjusteDebeConfiguracions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaAjusteDebes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaAjusteDebes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarVtaVendedor(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = VtaVendedor::setAplicarFiltrosDeAlcance($criterio);

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
	
		$vtavendedors = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $vtavendedor = new VtaVendedor();
                    $vtavendedor->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $vtavendedor->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$vtavendedor->setGralSucursalId($fila[self::GEN_ATTR_MIN_GRAL_SUCURSAL_ID]);
			$vtavendedor->setApellido($fila[self::GEN_ATTR_MIN_APELLIDO]);
			$vtavendedor->setNombre($fila[self::GEN_ATTR_MIN_NOMBRE]);
			$vtavendedor->setVtaTipoVendedorId($fila[self::GEN_ATTR_MIN_VTA_TIPO_VENDEDOR_ID]);
			$vtavendedor->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$vtavendedor->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$vtavendedor->setCelular($fila[self::GEN_ATTR_MIN_CELULAR]);
			$vtavendedor->setPorcentajeComision($fila[self::GEN_ATTR_MIN_PORCENTAJE_COMISION]);
			$vtavendedor->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$vtavendedor->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$vtavendedor->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$vtavendedor->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$vtavendedor->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$vtavendedor->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$vtavendedor->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$vtavendedor->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $vtavendedors[] = $vtavendedor;
		}
		
		return $vtavendedors;
	}	
	

	/* Método getVtaVendedors Habilitados */ 	
	static function getVtaVendedorsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return VtaVendedor::getVtaVendedors($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getVtaVendedors para listado de Backend */ 	
	static function getVtaVendedorsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return VtaVendedor::getVtaVendedors($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getVtaVendedorsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = VtaVendedor::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = VtaVendedor::getVtaVendedors($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaVendedors filtrado para select */ 	
	static function getVtaVendedorsCmbF($paginador = null, $criterio = null){
            $col = VtaVendedor::getVtaVendedors($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getVtaVendedors filtrado por una coleccion de objetos foraneos de GralSucursal */ 	
	static function getVtaVendedorsXGralSucursals($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addOrden(VtaVendedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaVendedor::getVtaVendedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGralSucursalId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getVtaVendedors filtrado por una coleccion de objetos foraneos de VtaTipoVendedor */ 	
	static function getVtaVendedorsXVtaTipoVendedors($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(VtaVendedor::GEN_ATTR_VTA_TIPO_VENDEDOR_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(VtaVendedor::GEN_TABLA);
            $c->addOrden(VtaVendedor::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = VtaVendedor::getVtaVendedors($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getVtaTipoVendedorId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'vta_vendedor_adm.php';
            $url_gestion = 'vta_vendedor_gestion.php';
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
                
            $criterio->add(GralSucursalVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(GralSucursalVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalVtaVendedor::getGralSucursalVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursals (Coleccion) relacionados a traves de GralSucursalVtaVendedor */ 	
	public function getGralSucursalsXGralSucursalVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalVtaVendedor::GEN_TABLA, GralSucursalVtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursals relacionados a traves de GralSucursalVtaVendedor */ 	
	public function getCantidadGralSucursalsXGralSucursalVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursal::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalVtaVendedor::GEN_TABLA, GralSucursalVtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursal (Objeto) relacionado a traves de GralSucursalVtaVendedor */ 	
	public function getGralSucursalXGralSucursalVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalsXGralSucursalVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(GralRutaVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(GralRutaVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRutaVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = GralRutaVtaVendedor::getGralRutaVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralRutas (Coleccion) relacionados a traves de GralRutaVtaVendedor */ 	
	public function getGralRutasXGralRutaVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRuta::GEN_TABLA);
            $c->addRealJoin(GralRutaVtaVendedor::GEN_TABLA, GralRutaVtaVendedor::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralRuta::getGralRutas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralRutas relacionados a traves de GralRutaVtaVendedor */ 	
	public function getCantidadGralRutasXGralRutaVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralRuta::GEN_ATTR_ID);
            if($estado){
                $c->add(GralRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralRutaVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralRutaVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralRuta::GEN_TABLA);
            $c->addRealJoin(GralRutaVtaVendedor::GEN_TABLA, GralRutaVtaVendedor::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralRuta::getGralRutas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralRuta (Objeto) relacionado a traves de GralRutaVtaVendedor */ 	
	public function getGralRutaXGralRutaVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralRutasXGralRutaVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getGralCentroCostoVtaVendedors */ 	
	public function getGralCentroCostoVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(GralCentroCostoVtaVendedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(GralCentroCostoVtaVendedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(GralCentroCostoVtaVendedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(GralCentroCostoVtaVendedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(GralCentroCostoVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(GralCentroCostoVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(GralCentroCostoVtaVendedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".GralCentroCostoVtaVendedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $gralcentrocostovtavendedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $gralcentrocostovtavendedor = GralCentroCostoVtaVendedor::hidratarObjeto($fila);			
                $gralcentrocostovtavendedors[] = $gralcentrocostovtavendedor;
            }

            return $gralcentrocostovtavendedors;
	}	
	

	/* Método getGralCentroCostoVtaVendedorsBloque para MasInfo */ 	
	public function getGralCentroCostoVtaVendedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getGralCentroCostoVtaVendedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getGralCentroCostoVtaVendedors Habilitados */ 	
	public function getGralCentroCostoVtaVendedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getGralCentroCostoVtaVendedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getGralCentroCostoVtaVendedor */ 	
	public function getGralCentroCostoVtaVendedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getGralCentroCostoVtaVendedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de GralCentroCostoVtaVendedor relacionadas */ 	
	public function deleteGralCentroCostoVtaVendedors(){
            $obs = $this->getGralCentroCostoVtaVendedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getGralCentroCostoVtaVendedorsCmb() GralCentroCostoVtaVendedor relacionadas */ 	
	public function getGralCentroCostoVtaVendedorsCmb(){
            $c = new Criterio();
            $c->add(GralCentroCostoVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCostoVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = GralCentroCostoVtaVendedor::getGralCentroCostoVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralCentroCostos (Coleccion) relacionados a traves de GralCentroCostoVtaVendedor */ 	
	public function getGralCentroCostosXGralCentroCostoVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCostoVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCostoVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(GralCentroCostoVtaVendedor::GEN_TABLA, GralCentroCostoVtaVendedor::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralCentroCostos relacionados a traves de GralCentroCostoVtaVendedor */ 	
	public function getCantidadGralCentroCostosXGralCentroCostoVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralCentroCosto::GEN_ATTR_ID);
            if($estado){
                $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralCentroCostoVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralCentroCostoVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralCentroCosto::GEN_TABLA);
            $c->addRealJoin(GralCentroCostoVtaVendedor::GEN_TABLA, GralCentroCostoVtaVendedor::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralCentroCosto::getGralCentroCostos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralCentroCosto (Objeto) relacionado a traves de GralCentroCostoVtaVendedor */ 	
	public function getGralCentroCostoXGralCentroCostoVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralCentroCostosXGralCentroCostoVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getCliClienteVtaVendedors */ 	
	public function getCliClienteVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(CliClienteVtaVendedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(CliClienteVtaVendedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(CliClienteVtaVendedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(CliClienteVtaVendedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".CliClienteVtaVendedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $cliclientevtavendedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $cliclientevtavendedor = CliClienteVtaVendedor::hidratarObjeto($fila);			
                $cliclientevtavendedors[] = $cliclientevtavendedor;
            }

            return $cliclientevtavendedors;
	}	
	

	/* Método getCliClienteVtaVendedorsBloque para MasInfo */ 	
	public function getCliClienteVtaVendedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getCliClienteVtaVendedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getCliClienteVtaVendedors Habilitados */ 	
	public function getCliClienteVtaVendedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getCliClienteVtaVendedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getCliClienteVtaVendedor */ 	
	public function getCliClienteVtaVendedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getCliClienteVtaVendedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de CliClienteVtaVendedor relacionadas */ 	
	public function deleteCliClienteVtaVendedors(){
            $obs = $this->getCliClienteVtaVendedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getCliClienteVtaVendedorsCmb() CliClienteVtaVendedor relacionadas */ 	
	public function getCliClienteVtaVendedorsCmb(){
            $c = new Criterio();
            $c->add(CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliClienteVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = CliClienteVtaVendedor::getCliClienteVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de CliClienteVtaVendedor */ 	
	public function getCliClientesXCliClienteVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de CliClienteVtaVendedor */ 	
	public function getCantidadCliClientesXCliClienteVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de CliClienteVtaVendedor */ 	
	public function getCliClienteXCliClienteVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXCliClienteVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
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
                
            $criterio->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorValoracion::getVtaVendedorValoracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedorValoracionAgrupacions (Coleccion) relacionados a traves de VtaVendedorValoracion */ 	
	public function getVtaVendedorValoracionAgrupacionsXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracion::GEN_TABLA, VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, VtaVendedorValoracionAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedorValoracionAgrupacions relacionados a traves de VtaVendedorValoracion */ 	
	public function getCantidadVtaVendedorValoracionAgrupacionsXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedorValoracionAgrupacion::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracion::GEN_TABLA, VtaVendedorValoracion::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, VtaVendedorValoracionAgrupacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedorValoracionAgrupacion (Objeto) relacionado a traves de VtaVendedorValoracion */ 	
	public function getVtaVendedorValoracionAgrupacionXVtaVendedorValoracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorValoracionAgrupacionsXVtaVendedorValoracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaVendedorValoracionAgrupacions */ 	
	public function getVtaVendedorValoracionAgrupacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorValoracionAgrupacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorValoracionAgrupacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorValoracionAgrupacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorValoracionAgrupacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorvaloracionagrupacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorvaloracionagrupacion = VtaVendedorValoracionAgrupacion::hidratarObjeto($fila);			
                $vtavendedorvaloracionagrupacions[] = $vtavendedorvaloracionagrupacion;
            }

            return $vtavendedorvaloracionagrupacions;
	}	
	

	/* Método getVtaVendedorValoracionAgrupacionsBloque para MasInfo */ 	
	public function getVtaVendedorValoracionAgrupacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorValoracionAgrupacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorValoracionAgrupacions Habilitados */ 	
	public function getVtaVendedorValoracionAgrupacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorValoracionAgrupacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorValoracionAgrupacion */ 	
	public function getVtaVendedorValoracionAgrupacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorValoracionAgrupacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorValoracionAgrupacion relacionadas */ 	
	public function deleteVtaVendedorValoracionAgrupacions(){
            $obs = $this->getVtaVendedorValoracionAgrupacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorValoracionAgrupacionsCmb() VtaVendedorValoracionAgrupacion relacionadas */ 	
	public function getVtaVendedorValoracionAgrupacionsCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionAgrupacion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener CliClientes (Coleccion) relacionados a traves de VtaVendedorValoracionAgrupacion */ 	
	public function getCliClientesXVtaVendedorValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracionAgrupacion::GEN_TABLA, VtaVendedorValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de CliClientes relacionados a traves de VtaVendedorValoracionAgrupacion */ 	
	public function getCantidadCliClientesXVtaVendedorValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(CliCliente::GEN_ATTR_ID);
            if($estado){
                $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracionAgrupacion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(CliCliente::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracionAgrupacion::GEN_TABLA, VtaVendedorValoracionAgrupacion::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = CliCliente::getCliClientes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener CliCliente (Objeto) relacionado a traves de VtaVendedorValoracionAgrupacion */ 	
	public function getCliClienteXVtaVendedorValoracionAgrupacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getCliClientesXVtaVendedorValoracionAgrupacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaVendedorValoracionTipoItemVtaVendedors */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedors($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorValoracionTipoItemVtaVendedor::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorValoracionTipoItemVtaVendedor::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorvaloraciontipoitemvtavendedors = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorvaloraciontipoitemvtavendedor = VtaVendedorValoracionTipoItemVtaVendedor::hidratarObjeto($fila);			
                $vtavendedorvaloraciontipoitemvtavendedors[] = $vtavendedorvaloraciontipoitemvtavendedor;
            }

            return $vtavendedorvaloraciontipoitemvtavendedors;
	}	
	

	/* Método getVtaVendedorValoracionTipoItemVtaVendedorsBloque para MasInfo */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedorsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorValoracionTipoItemVtaVendedors($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorValoracionTipoItemVtaVendedors Habilitados */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedorsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorValoracionTipoItemVtaVendedors($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorValoracionTipoItemVtaVendedor */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedor($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorValoracionTipoItemVtaVendedors($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorValoracionTipoItemVtaVendedor relacionadas */ 	
	public function deleteVtaVendedorValoracionTipoItemVtaVendedors(){
            $obs = $this->getVtaVendedorValoracionTipoItemVtaVendedors();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorValoracionTipoItemVtaVendedorsCmb() VtaVendedorValoracionTipoItemVtaVendedor relacionadas */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedorsCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorValoracionTipoItemVtaVendedor::getVtaVendedorValoracionTipoItemVtaVendedorsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaVendedorValoracionTipoItems (Coleccion) relacionados a traves de VtaVendedorValoracionTipoItemVtaVendedor */ 	
	public function getVtaVendedorValoracionTipoItemsXVtaVendedorValoracionTipoItemVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaVendedorValoracionTipoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionTipoItem::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA, VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, VtaVendedorValoracionTipoItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaVendedorValoracionTipoItems relacionados a traves de VtaVendedorValoracionTipoItemVtaVendedor */ 	
	public function getCantidadVtaVendedorValoracionTipoItemsXVtaVendedorValoracionTipoItemVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaVendedorValoracionTipoItem::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaVendedorValoracionTipoItem::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorValoracionTipoItem::GEN_TABLA);
            $c->addRealJoin(VtaVendedorValoracionTipoItemVtaVendedor::GEN_TABLA, VtaVendedorValoracionTipoItemVtaVendedor::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, VtaVendedorValoracionTipoItem::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItems($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaVendedorValoracionTipoItem (Objeto) relacionado a traves de VtaVendedorValoracionTipoItemVtaVendedor */ 	
	public function getVtaVendedorValoracionTipoItemXVtaVendedorValoracionTipoItemVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaVendedorValoracionTipoItemsXVtaVendedorValoracionTipoItemVtaVendedor($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
                
            $criterio->add(VtaVendedorUsUsuario::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaVendedorUsUsuario::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorUsUsuario::getVtaVendedorUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de VtaVendedorUsUsuario */ 	
	public function getUsUsuariosXVtaVendedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorUsUsuario::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(VtaVendedorUsUsuario::GEN_TABLA, VtaVendedorUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de VtaVendedorUsUsuario */ 	
	public function getCantidadUsUsuariosXVtaVendedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorUsUsuario::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(VtaVendedorUsUsuario::GEN_TABLA, VtaVendedorUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de VtaVendedorUsUsuario */ 	
	public function getUsUsuarioXVtaVendedorUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXVtaVendedorUsUsuario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaVendedorInsTipoListaPrecios */ 	
	public function getVtaVendedorInsTipoListaPrecios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorInsTipoListaPrecio::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorInsTipoListaPrecio::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorInsTipoListaPrecio::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorInsTipoListaPrecio::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorinstipolistaprecios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorinstipolistaprecio = VtaVendedorInsTipoListaPrecio::hidratarObjeto($fila);			
                $vtavendedorinstipolistaprecios[] = $vtavendedorinstipolistaprecio;
            }

            return $vtavendedorinstipolistaprecios;
	}	
	

	/* Método getVtaVendedorInsTipoListaPreciosBloque para MasInfo */ 	
	public function getVtaVendedorInsTipoListaPreciosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorInsTipoListaPrecios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorInsTipoListaPrecios Habilitados */ 	
	public function getVtaVendedorInsTipoListaPreciosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorInsTipoListaPrecios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorInsTipoListaPrecio */ 	
	public function getVtaVendedorInsTipoListaPrecio($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorInsTipoListaPrecios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorInsTipoListaPrecio relacionadas */ 	
	public function deleteVtaVendedorInsTipoListaPrecios(){
            $obs = $this->getVtaVendedorInsTipoListaPrecios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorInsTipoListaPreciosCmb() VtaVendedorInsTipoListaPrecio relacionadas */ 	
	public function getVtaVendedorInsTipoListaPreciosCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorInsTipoListaPrecio::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorInsTipoListaPrecio::getVtaVendedorInsTipoListaPreciosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsTipoListaPrecios (Coleccion) relacionados a traves de VtaVendedorInsTipoListaPrecio */ 	
	public function getInsTipoListaPreciosXVtaVendedorInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(VtaVendedorInsTipoListaPrecio::GEN_TABLA, VtaVendedorInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsTipoListaPrecios relacionados a traves de VtaVendedorInsTipoListaPrecio */ 	
	public function getCantidadInsTipoListaPreciosXVtaVendedorInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsTipoListaPrecio::GEN_ATTR_ID);
            if($estado){
                $c->add(InsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorInsTipoListaPrecio::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsTipoListaPrecio::GEN_TABLA);
            $c->addRealJoin(VtaVendedorInsTipoListaPrecio::GEN_TABLA, VtaVendedorInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, InsTipoListaPrecio::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsTipoListaPrecio (Objeto) relacionado a traves de VtaVendedorInsTipoListaPrecio */ 	
	public function getInsTipoListaPrecioXVtaVendedorInsTipoListaPrecio($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsTipoListaPreciosXVtaVendedorInsTipoListaPrecio($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaVendedorGralEscenarios */ 	
	public function getVtaVendedorGralEscenarios($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorGralEscenario::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorGralEscenario::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorGralEscenario::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorGralEscenario::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorGralEscenario::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorGralEscenario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorGralEscenario::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorGralEscenario::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedorgralescenarios = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedorgralescenario = VtaVendedorGralEscenario::hidratarObjeto($fila);			
                $vtavendedorgralescenarios[] = $vtavendedorgralescenario;
            }

            return $vtavendedorgralescenarios;
	}	
	

	/* Método getVtaVendedorGralEscenariosBloque para MasInfo */ 	
	public function getVtaVendedorGralEscenariosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorGralEscenarios($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorGralEscenarios Habilitados */ 	
	public function getVtaVendedorGralEscenariosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorGralEscenarios($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorGralEscenario */ 	
	public function getVtaVendedorGralEscenario($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorGralEscenarios($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorGralEscenario relacionadas */ 	
	public function deleteVtaVendedorGralEscenarios(){
            $obs = $this->getVtaVendedorGralEscenarios();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorGralEscenariosCmb() VtaVendedorGralEscenario relacionadas */ 	
	public function getVtaVendedorGralEscenariosCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorGralEscenario::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorGralEscenario::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorGralEscenario::getVtaVendedorGralEscenariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralEscenarios (Coleccion) relacionados a traves de VtaVendedorGralEscenario */ 	
	public function getGralEscenariosXVtaVendedorGralEscenario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralEscenario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorGralEscenario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorGralEscenario::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEscenario::GEN_TABLA);
            $c->addRealJoin(VtaVendedorGralEscenario::GEN_TABLA, VtaVendedorGralEscenario::GEN_ATTR_GRAL_ESCENARIO_ID, GralEscenario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEscenario::getGralEscenarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralEscenarios relacionados a traves de VtaVendedorGralEscenario */ 	
	public function getCantidadGralEscenariosXVtaVendedorGralEscenario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralEscenario::GEN_ATTR_ID);
            if($estado){
                $c->add(GralEscenario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorGralEscenario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorGralEscenario::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralEscenario::GEN_TABLA);
            $c->addRealJoin(VtaVendedorGralEscenario::GEN_TABLA, VtaVendedorGralEscenario::GEN_ATTR_GRAL_ESCENARIO_ID, GralEscenario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralEscenario::getGralEscenarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralEscenario (Objeto) relacionado a traves de VtaVendedorGralEscenario */ 	
	public function getGralEscenarioXVtaVendedorGralEscenario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralEscenariosXVtaVendedorGralEscenario($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaVendedorDescuentos */ 	
	public function getVtaVendedorDescuentos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaVendedorDescuento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaVendedorDescuento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaVendedorDescuento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaVendedorDescuento::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaVendedorDescuento::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaVendedorDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaVendedorDescuento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaVendedorDescuento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtavendedordescuentos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtavendedordescuento = VtaVendedorDescuento::hidratarObjeto($fila);			
                $vtavendedordescuentos[] = $vtavendedordescuento;
            }

            return $vtavendedordescuentos;
	}	
	

	/* Método getVtaVendedorDescuentosBloque para MasInfo */ 	
	public function getVtaVendedorDescuentosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaVendedorDescuentos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaVendedorDescuentos Habilitados */ 	
	public function getVtaVendedorDescuentosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaVendedorDescuentos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaVendedorDescuento */ 	
	public function getVtaVendedorDescuento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaVendedorDescuentos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaVendedorDescuento relacionadas */ 	
	public function deleteVtaVendedorDescuentos(){
            $obs = $this->getVtaVendedorDescuentos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaVendedorDescuentosCmb() VtaVendedorDescuento relacionadas */ 	
	public function getVtaVendedorDescuentosCmb(){
            $c = new Criterio();
            $c->add(VtaVendedorDescuento::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorDescuento::GEN_TABLA);
            $c->setCriterios();

            $os = VtaVendedorDescuento::getVtaVendedorDescuentosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsEtiquetas (Coleccion) relacionados a traves de VtaVendedorDescuento */ 	
	public function getInsEtiquetasXVtaVendedorDescuento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsEtiqueta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorDescuento::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsEtiqueta::GEN_TABLA);
            $c->addRealJoin(VtaVendedorDescuento::GEN_TABLA, VtaVendedorDescuento::GEN_ATTR_INS_ETIQUETA_ID, InsEtiqueta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsEtiqueta::getInsEtiquetas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsEtiquetas relacionados a traves de VtaVendedorDescuento */ 	
	public function getCantidadInsEtiquetasXVtaVendedorDescuento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsEtiqueta::GEN_ATTR_ID);
            if($estado){
                $c->add(InsEtiqueta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaVendedorDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaVendedorDescuento::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsEtiqueta::GEN_TABLA);
            $c->addRealJoin(VtaVendedorDescuento::GEN_TABLA, VtaVendedorDescuento::GEN_ATTR_INS_ETIQUETA_ID, InsEtiqueta::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsEtiqueta::getInsEtiquetas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsEtiqueta (Objeto) relacionado a traves de VtaVendedorDescuento */ 	
	public function getInsEtiquetaXVtaVendedorDescuento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsEtiquetasXVtaVendedorDescuento($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getVtaComisions */ 	
	public function getVtaComisions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComision::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComision::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComision::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComision::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComision::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComision::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomision = VtaComision::hidratarObjeto($fila);			
                $vtacomisions[] = $vtacomision;
            }

            return $vtacomisions;
	}	
	

	/* Método getVtaComisionsBloque para MasInfo */ 	
	public function getVtaComisionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisions Habilitados */ 	
	public function getVtaComisionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComision */ 	
	public function getVtaComision($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComision relacionadas */ 	
	public function deleteVtaComisions(){
            $obs = $this->getVtaComisions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionsCmb() VtaComision relacionadas */ 	
	public function getVtaComisionsCmb(){
            $c = new Criterio();
            $c->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComision::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComision::getVtaComisionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaPreventistas (Coleccion) relacionados a traves de VtaComision */ 	
	public function getVtaPreventistasXVtaComision($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPreventista::GEN_TABLA);
            $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_VTA_PREVENTISTA_ID, VtaPreventista::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPreventista::getVtaPreventistas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaPreventistas relacionados a traves de VtaComision */ 	
	public function getCantidadVtaPreventistasXVtaComision($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaPreventista::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaPreventista::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComision::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPreventista::GEN_TABLA);
            $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_VTA_PREVENTISTA_ID, VtaPreventista::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaPreventista::getVtaPreventistas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaPreventista (Objeto) relacionado a traves de VtaComision */ 	
	public function getVtaPreventistaXVtaComision($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaPreventistasXVtaComision($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionVtaFacturaConfiguracions */ 	
	public function getVtaComisionVtaFacturaConfiguracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionVtaFacturaConfiguracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionVtaFacturaConfiguracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionVtaFacturaConfiguracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionVtaFacturaConfiguracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionvtafacturaconfiguracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionvtafacturaconfiguracion = VtaComisionVtaFacturaConfiguracion::hidratarObjeto($fila);			
                $vtacomisionvtafacturaconfiguracions[] = $vtacomisionvtafacturaconfiguracion;
            }

            return $vtacomisionvtafacturaconfiguracions;
	}	
	

	/* Método getVtaComisionVtaFacturaConfiguracionsBloque para MasInfo */ 	
	public function getVtaComisionVtaFacturaConfiguracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionVtaFacturaConfiguracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionVtaFacturaConfiguracions Habilitados */ 	
	public function getVtaComisionVtaFacturaConfiguracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionVtaFacturaConfiguracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionVtaFacturaConfiguracion */ 	
	public function getVtaComisionVtaFacturaConfiguracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionVtaFacturaConfiguracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionVtaFacturaConfiguracion relacionadas */ 	
	public function deleteVtaComisionVtaFacturaConfiguracions(){
            $obs = $this->getVtaComisionVtaFacturaConfiguracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionVtaFacturaConfiguracionsCmb() VtaComisionVtaFacturaConfiguracion relacionadas */ 	
	public function getVtaComisionVtaFacturaConfiguracionsCmb(){
            $c = new Criterio();
            $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionVtaFacturaConfiguracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionVtaFacturaConfiguracion::getVtaComisionVtaFacturaConfiguracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaFacturas (Coleccion) relacionados a traves de VtaComisionVtaFacturaConfiguracion */ 	
	public function getVtaFacturasXVtaComisionVtaFacturaConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaFacturaConfiguracion::GEN_TABLA, VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaFacturas relacionados a traves de VtaComisionVtaFacturaConfiguracion */ 	
	public function getCantidadVtaFacturasXVtaComisionVtaFacturaConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaFactura::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFactura::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaFacturaConfiguracion::GEN_TABLA, VtaComisionVtaFacturaConfiguracion::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaFactura::getVtaFacturas($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaFactura (Objeto) relacionado a traves de VtaComisionVtaFacturaConfiguracion */ 	
	public function getVtaFacturaXVtaComisionVtaFacturaConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaFacturasXVtaComisionVtaFacturaConfiguracion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getVtaComisionVtaAjusteDebeConfiguracions */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(VtaComisionVtaAjusteDebeConfiguracion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(VtaComisionVtaAjusteDebeConfiguracion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $vtacomisionvtaajustedebeconfiguracions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $vtacomisionvtaajustedebeconfiguracion = VtaComisionVtaAjusteDebeConfiguracion::hidratarObjeto($fila);			
                $vtacomisionvtaajustedebeconfiguracions[] = $vtacomisionvtaajustedebeconfiguracion;
            }

            return $vtacomisionvtaajustedebeconfiguracions;
	}	
	

	/* Método getVtaComisionVtaAjusteDebeConfiguracionsBloque para MasInfo */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getVtaComisionVtaAjusteDebeConfiguracions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getVtaComisionVtaAjusteDebeConfiguracions Habilitados */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getVtaComisionVtaAjusteDebeConfiguracions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getVtaComisionVtaAjusteDebeConfiguracion */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getVtaComisionVtaAjusteDebeConfiguracions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de VtaComisionVtaAjusteDebeConfiguracion relacionadas */ 	
	public function deleteVtaComisionVtaAjusteDebeConfiguracions(){
            $obs = $this->getVtaComisionVtaAjusteDebeConfiguracions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getVtaComisionVtaAjusteDebeConfiguracionsCmb() VtaComisionVtaAjusteDebeConfiguracion relacionadas */ 	
	public function getVtaComisionVtaAjusteDebeConfiguracionsCmb(){
            $c = new Criterio();
            $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA);
            $c->setCriterios();

            $os = VtaComisionVtaAjusteDebeConfiguracion::getVtaComisionVtaAjusteDebeConfiguracionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener VtaAjusteDebes (Coleccion) relacionados a traves de VtaComisionVtaAjusteDebeConfiguracion */ 	
	public function getVtaAjusteDebesXVtaComisionVtaAjusteDebeConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA, VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de VtaAjusteDebes relacionados a traves de VtaComisionVtaAjusteDebeConfiguracion */ 	
	public function getCantidadVtaAjusteDebesXVtaComisionVtaAjusteDebeConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(VtaAjusteDebe::GEN_ATTR_ID);
            if($estado){
                $c->add(VtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addRealJoin(VtaComisionVtaAjusteDebeConfiguracion::GEN_TABLA, VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = VtaAjusteDebe::getVtaAjusteDebes($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener VtaAjusteDebe (Objeto) relacionado a traves de VtaComisionVtaAjusteDebeConfiguracion */ 	
	public function getVtaAjusteDebeXVtaComisionVtaAjusteDebeConfiguracion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getVtaAjusteDebesXVtaComisionVtaAjusteDebeConfiguracion($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaAjusteDebe::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaAjusteDebe::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna una coleccion de IDs de los GralSucursals asignados a VtaVendedor */ 	
	public function getGralSucursalVtaVendedorsId(){
            $ids = array();
            foreach($this->getGralSucursalVtaVendedors() as $o){
            
                $ids[] = $o->getGralSucursalId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralSucursals asignados al VtaVendedor */ 	
	public function setGralSucursalVtaVendedors($ids){
            $this->deleteGralSucursalVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalVtaVendedor();
                    $o->setGralSucursalId($id);
                    $o->setVtaVendedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralSucursal en el alta de VtaVendedor */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralRutas asignados a VtaVendedor */ 	
	public function getGralRutaVtaVendedorsId(){
            $ids = array();
            foreach($this->getGralRutaVtaVendedors() as $o){
            
                $ids[] = $o->getGralRutaId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralRutas asignados al VtaVendedor */ 	
	public function setGralRutaVtaVendedors($ids){
            $this->deleteGralRutaVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralRutaVtaVendedor();
                    $o->setGralRutaId($id);
                    $o->setVtaVendedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralRuta en el alta de VtaVendedor */ 	
	public function getAltaMostrarBloqueRelacionGralRutaVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralCentroCostos asignados a VtaVendedor */ 	
	public function getGralCentroCostoVtaVendedorsId(){
            $ids = array();
            foreach($this->getGralCentroCostoVtaVendedors() as $o){
            
                $ids[] = $o->getGralCentroCostoId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralCentroCostos asignados al VtaVendedor */ 	
	public function setGralCentroCostoVtaVendedors($ids){
            $this->deleteGralCentroCostoVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralCentroCostoVtaVendedor();
                    $o->setGralCentroCostoId($id);
                    $o->setVtaVendedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralCentroCosto en el alta de VtaVendedor */ 	
	public function getAltaMostrarBloqueRelacionGralCentroCostoVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los CliClientes asignados a VtaVendedor */ 	
	public function getCliClienteVtaVendedorsId(){
            $ids = array();
            foreach($this->getCliClienteVtaVendedors() as $o){
            
                $ids[] = $o->getCliClienteId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos CliClientes asignados al VtaVendedor */ 	
	public function setCliClienteVtaVendedors($ids){
            $this->deleteCliClienteVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new CliClienteVtaVendedor();
                    $o->setCliClienteId($id);
                    $o->setVtaVendedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion CliCliente en el alta de VtaVendedor */ 	
	public function getAltaMostrarBloqueRelacionCliClienteVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los VtaVendedorValoracionTipoItems asignados a VtaVendedor */ 	
	public function getVtaVendedorValoracionTipoItemVtaVendedorsId(){
            $ids = array();
            foreach($this->getVtaVendedorValoracionTipoItemVtaVendedors() as $o){
            
                $ids[] = $o->getVtaVendedorValoracionTipoItemId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos VtaVendedorValoracionTipoItems asignados al VtaVendedor */ 	
	public function setVtaVendedorValoracionTipoItemVtaVendedors($ids){
            $this->deleteVtaVendedorValoracionTipoItemVtaVendedors();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaVendedorValoracionTipoItemVtaVendedor();
                    $o->setVtaVendedorValoracionTipoItemId($id);
                    $o->setVtaVendedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion VtaVendedorValoracionTipoItem en el alta de VtaVendedor */ 	
	public function getAltaMostrarBloqueRelacionVtaVendedorValoracionTipoItemVtaVendedor(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los UsUsuarios asignados a VtaVendedor */ 	
	public function getVtaVendedorUsUsuariosId(){
            $ids = array();
            foreach($this->getVtaVendedorUsUsuarios() as $o){
            
                $ids[] = $o->getUsUsuarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsUsuarios asignados al VtaVendedor */ 	
	public function setVtaVendedorUsUsuarios($ids){
            $this->deleteVtaVendedorUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaVendedorUsUsuario();
                    $o->setUsUsuarioId($id);
                    $o->setVtaVendedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsUsuario en el alta de VtaVendedor */ 	
	public function getAltaMostrarBloqueRelacionVtaVendedorUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los InsTipoListaPrecios asignados a VtaVendedor */ 	
	public function getVtaVendedorInsTipoListaPreciosId(){
            $ids = array();
            foreach($this->getVtaVendedorInsTipoListaPrecios() as $o){
            
                $ids[] = $o->getInsTipoListaPrecioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos InsTipoListaPrecios asignados al VtaVendedor */ 	
	public function setVtaVendedorInsTipoListaPrecios($ids){
            $this->deleteVtaVendedorInsTipoListaPrecios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaVendedorInsTipoListaPrecio();
                    $o->setInsTipoListaPrecioId($id);
                    $o->setVtaVendedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion InsTipoListaPrecio en el alta de VtaVendedor */ 	
	public function getAltaMostrarBloqueRelacionVtaVendedorInsTipoListaPrecio(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los GralEscenarios asignados a VtaVendedor */ 	
	public function getVtaVendedorGralEscenariosId(){
            $ids = array();
            foreach($this->getVtaVendedorGralEscenarios() as $o){
            
                $ids[] = $o->getGralEscenarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralEscenarios asignados al VtaVendedor */ 	
	public function setVtaVendedorGralEscenarios($ids){
            $this->deleteVtaVendedorGralEscenarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new VtaVendedorGralEscenario();
                    $o->setGralEscenarioId($id);
                    $o->setVtaVendedorId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralEscenario en el alta de VtaVendedor */ 	
	public function getAltaMostrarBloqueRelacionVtaVendedorGralEscenario(){
            return true;
	}
	

	/* Metodo que retorna el GralSucursal (Clave Foranea) */ 	
    public function getGralSucursal(){
        $o = new GralSucursal();
        $o->setId($this->getGralSucursalId());
        return $o;			
    }

	/* Metodo que retorna el GralSucursal (Clave Foranea) en Array */ 	
    public function getGralSucursalEnArray(&$arr_os){
        if($this->getGralSucursalId() != 'null'){
            if(isset($arr_os[$this->getGralSucursalId()])){
                $o = $arr_os[$this->getGralSucursalId()];
            }else{
                $o = GralSucursal::getOxId($this->getGralSucursalId());
                if($o){
                    $arr_os[$this->getGralSucursalId()] = $o;
                }
            }
        }else{
            $o = new GralSucursal();
        }
        return $o;		
    }

	/* Metodo que retorna el VtaTipoVendedor (Clave Foranea) */ 	
    public function getVtaTipoVendedor(){
        $o = new VtaTipoVendedor();
        $o->setId($this->getVtaTipoVendedorId());
        return $o;			
    }

	/* Metodo que retorna el VtaTipoVendedor (Clave Foranea) en Array */ 	
    public function getVtaTipoVendedorEnArray(&$arr_os){
        if($this->getVtaTipoVendedorId() != 'null'){
            if(isset($arr_os[$this->getVtaTipoVendedorId()])){
                $o = $arr_os[$this->getVtaTipoVendedorId()];
            }else{
                $o = VtaTipoVendedor::getOxId($this->getVtaTipoVendedorId());
                if($o){
                    $arr_os[$this->getVtaTipoVendedorId()] = $o;
                }
            }
        }else{
            $o = new VtaTipoVendedor();
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
            		
        if($contexto_solicitante != GralSucursal::GEN_CLASE){
            if($this->getGralSucursal()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(GralSucursal::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getGralSucursal()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != VtaTipoVendedor::GEN_CLASE){
            if($this->getVtaTipoVendedor()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(VtaTipoVendedor::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getVtaTipoVendedor()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM vta_vendedor'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'vta_vendedor';");
            
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

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'gral_sucursal_id' */ 	
	static function getOxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'gral_sucursal_id' */ 	
	static function getOsxGralSucursalId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GRAL_SUCURSAL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'apellido' */ 	
	static function getOxApellido($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_APELLIDO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'nombre' */ 	
	static function getOxNombre($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_NOMBRE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'vta_tipo_vendedor_id' */ 	
	static function getOxVtaTipoVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'vta_tipo_vendedor_id' */ 	
	static function getOsxVtaTipoVendedorId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_VTA_TIPO_VENDEDOR_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'celular' */ 	
	static function getOxCelular($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CELULAR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'porcentaje_comision' */ 	
	static function getOxPorcentajeComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'porcentaje_comision' */ 	
	static function getOsxPorcentajeComision($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PORCENTAJE_COMISION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors(null, $criterio);
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

            $obs = self::getVtaVendedors($paginador, $criterio);
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

            $obs = self::getVtaVendedors($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'vta_vendedor_adm');
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
                $c->addTabla(VtaVendedor::GEN_TABLA);
                $c->addOrden(VtaVendedor::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $vta_vendedors = VtaVendedor::getVtaVendedors(null, $c);

                $arr = array();
                foreach($vta_vendedors as $vta_vendedor){
                    $descripcion = $vta_vendedor->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>