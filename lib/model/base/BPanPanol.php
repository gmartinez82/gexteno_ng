<?php 
/* Clase Generada con Genoma v1.8.0.1 el 29/09/2024 20:47 hs */ 
class BPanPanol
{ 
	
	const SES_PAGINACION = 'adm_panpanol_paginas';
	const SES_PAGINACION_REGISTROS = 'adm_panpanol_paginas_registros';
	const SES_CRITERIOS = 'adm_panpanol_criterios';
	
	const GEN_CLASE = 'PanPanol';
	const GEN_TABLA = 'pan_panol';

	const GEN_CONTROL_ALCANCE = false;

	const GEN_CLASE_AUDITORIA = true;
	const GEN_CLASE_AUDITORIA_OBJ_BEFORE = true;
	const GEN_CLASE_AUDITORIA_OBJ_AFTER = true;
	

	/* Constantes de Atributos de BPanPanol */ 
	const GEN_ATTR_ID = 'pan_panol.id';
	const GEN_ATTR_DESCRIPCION = 'pan_panol.descripcion';
	const GEN_ATTR_PAN_TIPO_PANOL_ID = 'pan_panol.pan_tipo_panol_id';
	const GEN_ATTR_PDE_CENTRO_PEDIDO_ID = 'pan_panol.pde_centro_pedido_id';
	const GEN_ATTR_GEO_LOCALIDAD_ID = 'pan_panol.geo_localidad_id';
	const GEN_ATTR_DOMICILIO = 'pan_panol.domicilio';
	const GEN_ATTR_RESPONSABLE = 'pan_panol.responsable';
	const GEN_ATTR_TELEFONO = 'pan_panol.telefono';
	const GEN_ATTR_EMAIL = 'pan_panol.email';
	const GEN_ATTR_CODIGO = 'pan_panol.codigo';
	const GEN_ATTR_CODIGO_CORTO = 'pan_panol.codigo_corto';
	const GEN_ATTR_COLOR = 'pan_panol.color';
	const GEN_ATTR_OBSERVACION = 'pan_panol.observacion';
	const GEN_ATTR_ORDEN = 'pan_panol.orden';
	const GEN_ATTR_ESTADO = 'pan_panol.estado';
	const GEN_ATTR_CREADO = 'pan_panol.creado';
	const GEN_ATTR_CREADO_POR = 'pan_panol.creado_por';
	const GEN_ATTR_MODIFICADO = 'pan_panol.modificado';
	const GEN_ATTR_MODIFICADO_POR = 'pan_panol.modificado_por';

	/* Constantes de Atributos Min de BPanPanol */ 
	const GEN_ATTR_MIN_ID = 'id';
	const GEN_ATTR_MIN_DESCRIPCION = 'descripcion';
	const GEN_ATTR_MIN_PAN_TIPO_PANOL_ID = 'pan_tipo_panol_id';
	const GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID = 'pde_centro_pedido_id';
	const GEN_ATTR_MIN_GEO_LOCALIDAD_ID = 'geo_localidad_id';
	const GEN_ATTR_MIN_DOMICILIO = 'domicilio';
	const GEN_ATTR_MIN_RESPONSABLE = 'responsable';
	const GEN_ATTR_MIN_TELEFONO = 'telefono';
	const GEN_ATTR_MIN_EMAIL = 'email';
	const GEN_ATTR_MIN_CODIGO = 'codigo';
	const GEN_ATTR_MIN_CODIGO_CORTO = 'codigo_corto';
	const GEN_ATTR_MIN_COLOR = 'color';
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
	

	/* Atributos de BPanPanol */ 
	private $id;
	private $descripcion;
	private $pan_tipo_panol_id;
	private $pde_centro_pedido_id;
	private $geo_localidad_id;
	private $domicilio;
	private $responsable;
	private $telefono;
	private $email;
	private $codigo;
	private $codigo_corto;
	private $color;
	private $observacion;
	private $orden;
	private $estado;
	private $creado;
	private $creado_por;
	private $modificado;
	private $modificado_por;

	/* Getters de BPanPanol */ 
	public function getId(){ if(isset($this->id)){ return $this->id; }else{ return ''; } }
	public function getDescripcion(){ if(isset($this->descripcion)){ return $this->descripcion; }else{ return ''; } }
	public function getPanTipoPanolId(){ if(isset($this->pan_tipo_panol_id)){ return $this->pan_tipo_panol_id; }else{ return 'null'; } }
	public function getPdeCentroPedidoId(){ if(isset($this->pde_centro_pedido_id)){ return $this->pde_centro_pedido_id; }else{ return 'null'; } }
	public function getGeoLocalidadId(){ if(isset($this->geo_localidad_id)){ return $this->geo_localidad_id; }else{ return 'null'; } }
	public function getDomicilio(){ if(isset($this->domicilio)){ return $this->domicilio; }else{ return ''; } }
	public function getResponsable(){ if(isset($this->responsable)){ return $this->responsable; }else{ return ''; } }
	public function getTelefono(){ if(isset($this->telefono)){ return $this->telefono; }else{ return ''; } }
	public function getEmail(){ if(isset($this->email)){ return $this->email; }else{ return ''; } }
	public function getCodigo(){ if(isset($this->codigo)){ return $this->codigo; }else{ return ''; } }
	public function getCodigoCorto(){ if(isset($this->codigo_corto)){ return $this->codigo_corto; }else{ return ''; } }
	public function getColor(){ if(isset($this->color)){ return $this->color; }else{ return ''; } }
	public function getObservacion(){ if(isset($this->observacion)){ return $this->observacion; }else{ return ''; } }
	public function getOrden(){ if(isset($this->orden)){ return $this->orden; }else{ return 0; } }
	public function getEstado(){ if(isset($this->estado)){ return $this->estado; }else{ return 0; } }
	public function getCreado(){ if(isset($this->creado)){ return $this->creado; }else{ return ''; } }
	public function getCreadoPor(){ if(isset($this->creado_por)){ return $this->creado_por; }else{ return 'null'; } }
	public function getModificado(){ if(isset($this->modificado)){ return $this->modificado; }else{ return ''; } }
	public function getModificadoPor(){ if(isset($this->modificado_por)){ return $this->modificado_por; }else{ return 'null'; } }

	/* Setters de BPanPanol */ 	
	public function setId($v, $db = true){
            $this->id = $v;

            if($db){
                $sql = "
			 SELECT 
				".self::GEN_ATTR_DESCRIPCION."
				, ".self::GEN_ATTR_PAN_TIPO_PANOL_ID."
				, ".self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID."
				, ".self::GEN_ATTR_GEO_LOCALIDAD_ID."
				, ".self::GEN_ATTR_DOMICILIO."
				, ".self::GEN_ATTR_RESPONSABLE."
				, ".self::GEN_ATTR_TELEFONO."
				, ".self::GEN_ATTR_EMAIL."
				, ".self::GEN_ATTR_CODIGO."
				, ".self::GEN_ATTR_CODIGO_CORTO."
				, ".self::GEN_ATTR_COLOR."
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
				$this->setPanTipoPanolId($fila[self::GEN_ATTR_MIN_PAN_TIPO_PANOL_ID]);
				$this->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
				$this->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
				$this->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
				$this->setResponsable($fila[self::GEN_ATTR_MIN_RESPONSABLE]);
				$this->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
				$this->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
				$this->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
				$this->setCodigoCorto($fila[self::GEN_ATTR_MIN_CODIGO_CORTO]);
				$this->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
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
	public function setPanTipoPanolId($v){ $this->pan_tipo_panol_id = $v; }
	public function setPdeCentroPedidoId($v){ $this->pde_centro_pedido_id = $v; }
	public function setGeoLocalidadId($v){ $this->geo_localidad_id = $v; }
	public function setDomicilio($v){ $this->domicilio = $v; }
	public function setResponsable($v){ $this->responsable = $v; }
	public function setTelefono($v){ $this->telefono = $v; }
	public function setEmail($v){ $this->email = $v; }
	public function setCodigo($v){ $this->codigo = $v; }
	public function setCodigoCorto($v){ $this->codigo_corto = $v; }
	public function setColor($v){ $this->color = $v; }
	public function setObservacion($v){ $this->observacion = $v; }
	public function setOrden($v){ $this->orden = $v; }
	public function setEstado($v){ $this->estado = $v; }
	public function setCreado($v){ $this->creado = $v; }
	public function setCreadoPor($v){ $this->creado_por = $v; }
	public function setModificado($v){ $this->modificado = $v; }
	public function setModificadoPor($v){ $this->modificado_por = $v; }
	
	public static function hidratarObjeto($fila){            
            $o = new PanPanol();
            $o->setId($fila[PanPanol::GEN_ATTR_MIN_ID], false);
            
			$o->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$o->setPanTipoPanolId($fila[self::GEN_ATTR_MIN_PAN_TIPO_PANOL_ID]);
			$o->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$o->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$o->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
			$o->setResponsable($fila[self::GEN_ATTR_MIN_RESPONSABLE]);
			$o->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$o->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$o->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$o->setCodigoCorto($fila[self::GEN_ATTR_MIN_CODIGO_CORTO]);
			$o->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$o->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$o->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$o->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$o->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$o->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$o->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$o->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
            return $o;
	}

	/* Control de BPanPanol */ 	
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

	/* Cambia el estado de BPanPanol */ 	
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

	/* Save de BPanPanol */ 	
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
						, ".self::GEN_ATTR_MIN_PAN_TIPO_PANOL_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_DOMICILIO."
						, ".self::GEN_ATTR_MIN_RESPONSABLE."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_CORTO."
						, ".self::GEN_ATTR_MIN_COLOR."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                nextval('pan_panol_seq'), 
                '".$this->getDescripcion()."'
						, ".$this->getPanTipoPanolId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getGeoLocalidadId()."
						, '".$this->getDomicilio()."'
						, '".$this->getResponsable()."'
						, '".$this->getTelefono()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoCorto()."'
						, '".$this->getColor()."'
						, '".$this->getObservacion()."'
						, ".$this->getOrden()."
						, ".$this->getEstado()."
						, '".$this->getCreado()."'
						, ".$this->getCreadoPor()."
						, '".$this->getModificado()."'
						, ".$this->getModificadoPor()."
                    ) RETURNING currval('pan_panol_seq')";
            
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
                 
				 ".PanPanol::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PAN_TIPO_PANOL_ID." = ".$this->getPanTipoPanolId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_DOMICILIO." = '".$this->getDomicilio()."'
						, ".self::GEN_ATTR_MIN_RESPONSABLE." = '".$this->getResponsable()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_CORTO." = '".$this->getCodigoCorto()."'
						, ".self::GEN_ATTR_MIN_COLOR." = '".$this->getColor()."'
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
						, ".self::GEN_ATTR_MIN_PAN_TIPO_PANOL_ID."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID."
						, ".self::GEN_ATTR_MIN_DOMICILIO."
						, ".self::GEN_ATTR_MIN_RESPONSABLE."
						, ".self::GEN_ATTR_MIN_TELEFONO."
						, ".self::GEN_ATTR_MIN_EMAIL."
						, ".self::GEN_ATTR_MIN_CODIGO."
						, ".self::GEN_ATTR_MIN_CODIGO_CORTO."
						, ".self::GEN_ATTR_MIN_COLOR."
						, ".self::GEN_ATTR_MIN_OBSERVACION."
						, ".self::GEN_ATTR_MIN_ORDEN."
						, ".self::GEN_ATTR_MIN_ESTADO."
						, ".self::GEN_ATTR_MIN_CREADO."
						, ".self::GEN_ATTR_MIN_CREADO_POR."
						, ".self::GEN_ATTR_MIN_MODIFICADO."
						, ".self::GEN_ATTR_MIN_MODIFICADO_POR.") VALUES  (
                ".$this->getId().", 
                '".$this->getDescripcion()."'
						, ".$this->getPanTipoPanolId()."
						, ".$this->getPdeCentroPedidoId()."
						, ".$this->getGeoLocalidadId()."
						, '".$this->getDomicilio()."'
						, '".$this->getResponsable()."'
						, '".$this->getTelefono()."'
						, '".$this->getEmail()."'
						, '".$this->getCodigo()."'
						, '".$this->getCodigoCorto()."'
						, '".$this->getColor()."'
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
                     
				 ".PanPanol::GEN_TABLA."
				 SET 
".self::GEN_ATTR_MIN_DESCRIPCION." = '".$this->getDescripcion()."'
						, ".self::GEN_ATTR_MIN_PAN_TIPO_PANOL_ID." = ".$this->getPanTipoPanolId()."
						, ".self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID." = ".$this->getPdeCentroPedidoId()."
						, ".self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID." = ".$this->getGeoLocalidadId()."
						, ".self::GEN_ATTR_MIN_DOMICILIO." = '".$this->getDomicilio()."'
						, ".self::GEN_ATTR_MIN_RESPONSABLE." = '".$this->getResponsable()."'
						, ".self::GEN_ATTR_MIN_TELEFONO." = '".$this->getTelefono()."'
						, ".self::GEN_ATTR_MIN_EMAIL." = '".$this->getEmail()."'
						, ".self::GEN_ATTR_MIN_CODIGO." = '".$this->getCodigo()."'
						, ".self::GEN_ATTR_MIN_CODIGO_CORTO." = '".$this->getCodigoCorto()."'
						, ".self::GEN_ATTR_MIN_COLOR." = '".$this->getColor()."'
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
            $o = new PanPanol();
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

	/* Delete de BPanPanol */ 	
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
	
            // se elimina la coleccion de GralSucursalPanPanols relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(GralSucursalPanPanol::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getGralSucursalPanPanols(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsInsumoPanPanols relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsInsumoPanPanols(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsStockTransformacions relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockTransformacion::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockTransformacions(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsStockTransformacionDestinos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockTransformacionDestino::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockTransformacionDestinos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PanPanolUsUsuarios relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PanPanolUsUsuario::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPanPanolUsUsuarios(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsStockMovimientos relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockMovimientos(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de InsStockResumens relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(InsStockResumen::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getInsStockResumens(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeRecepcionEstados relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeRecepcionEstado::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeRecepcionEstados(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de PdeCentroRecepcionPanPanols relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(PdeCentroRecepcionPanPanol::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getPdeCentroRecepcionPanPanols(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina la coleccion de VtaRemitoAjustes relacionados
            $c = new Criterio('COLECCION_DELETE_ALL');
            $c->addTabla(VtaRemitoAjuste::GEN_TABLA);
            $c->setCriterios();		
            foreach($this->getVtaRemitoAjustes(null, $c) as $o){
                    $o->deleteAll();
            }
            
            // se elimina el elemento actual
            $this->delete();
	
	}
	
	public function duplicarPanPanol(){
            // duplicar el elemento
            
	}

	/* Metodo que retorna la coleccion principal de la clase */ 	
	static function getPanPanols($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
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
                    $criterio = PanPanol::setAplicarFiltrosDeAlcance($criterio);

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
	
		$panpanols = array();
		while($fila = pg_fetch_array($cons->getResultado())){
                    $panpanol = new PanPanol();
                    $panpanol->setId($fila[self::GEN_ATTR_MIN_ID], false);


                    $panpanol->setDescripcion($fila[self::GEN_ATTR_MIN_DESCRIPCION]);
			$panpanol->setPanTipoPanolId($fila[self::GEN_ATTR_MIN_PAN_TIPO_PANOL_ID]);
			$panpanol->setPdeCentroPedidoId($fila[self::GEN_ATTR_MIN_PDE_CENTRO_PEDIDO_ID]);
			$panpanol->setGeoLocalidadId($fila[self::GEN_ATTR_MIN_GEO_LOCALIDAD_ID]);
			$panpanol->setDomicilio($fila[self::GEN_ATTR_MIN_DOMICILIO]);
			$panpanol->setResponsable($fila[self::GEN_ATTR_MIN_RESPONSABLE]);
			$panpanol->setTelefono($fila[self::GEN_ATTR_MIN_TELEFONO]);
			$panpanol->setEmail($fila[self::GEN_ATTR_MIN_EMAIL]);
			$panpanol->setCodigo($fila[self::GEN_ATTR_MIN_CODIGO]);
			$panpanol->setCodigoCorto($fila[self::GEN_ATTR_MIN_CODIGO_CORTO]);
			$panpanol->setColor($fila[self::GEN_ATTR_MIN_COLOR]);
			$panpanol->setObservacion($fila[self::GEN_ATTR_MIN_OBSERVACION]);
			$panpanol->setOrden($fila[self::GEN_ATTR_MIN_ORDEN]);
			$panpanol->setEstado($fila[self::GEN_ATTR_MIN_ESTADO]);
			$panpanol->setCreado($fila[self::GEN_ATTR_MIN_CREADO]);
			$panpanol->setCreadoPor($fila[self::GEN_ATTR_MIN_CREADO_POR]);
			$panpanol->setModificado($fila[self::GEN_ATTR_MIN_MODIFICADO]);
			$panpanol->setModificadoPor($fila[self::GEN_ATTR_MIN_MODIFICADO_POR]);
				

                    $panpanols[] = $panpanol;
		}
		
		return $panpanols;
	}	
	

	/* Método getPanPanols Habilitados */ 	
	static function getPanPanolsHabilitados($paginador = null, $criterio = null, $arr_ordens = false){
            return PanPanol::getPanPanols($paginador, $criterio, true, $arr_ordens);
	}

	/* Método getPanPanols para listado de Backend */ 	
	static function getPanPanolsDesdeBackend($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            return PanPanol::getPanPanols($paginador, $criterio, $estado, $arr_ordens);
	}

	/* Método coleccion principal de la clase para select */ 	
	static function getPanPanolsCmb($estado = true){
            $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
            $criterio = new Criterio();
            
                if($estado) { 
                    $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }
            $criterio->addTabla(self::GEN_TABLA);
            $criterio = PanPanol::setAplicarFiltrosDeAlcance($criterio);            
            $criterio->addOrden('2');
            $criterio->setCriterios();

            $col = PanPanol::getPanPanols($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPanPanols filtrado para select */ 	
	static function getPanPanolsCmbF($paginador = null, $criterio = null){
            $col = PanPanol::getPanPanols($paginador, $criterio);

            $cont = 0;
            $arr = array();
            foreach($col as $o){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
            }
            return $arr;
	}	
	

	/* Método getPanPanols filtrado por una coleccion de objetos foraneos de PanTipoPanol */ 	
	static function getPanPanolsXPanTipoPanols($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PanPanol::GEN_ATTR_PAN_TIPO_PANOL_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addOrden(PanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PanPanol::getPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPanTipoPanolId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPanPanols filtrado por una coleccion de objetos foraneos de PdeCentroPedido */ 	
	static function getPanPanolsXPdeCentroPedidos($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PanPanol::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addOrden(PanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PanPanol::getPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getPdeCentroPedidoId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Método getPanPanols filtrado por una coleccion de objetos foraneos de GeoLocalidad */ 	
	static function getPanPanolsXGeoLocalidads($os_foraneas){
            $os_con_indice = array();
            $arr_ids = array();
            
            foreach($os_foraneas as $o_foranea){
                $arr_ids[] = $o_foranea->getId();
            }

            $c= new Criterio();
            $c->add(PanPanol::GEN_ATTR_GEO_LOCALIDAD_ID, $arr_ids, Criterio::IN_ARRAY);
            $c->addTabla(PanPanol::GEN_TABLA);
            $c->addOrden(PanPanol::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = null;

            $os = PanPanol::getPanPanols($p, $c);
            foreach($os as $o){
                $os_con_indice[$o->getGeoLocalidadId()] = $o;
            }
            return $os_con_indice;
	}	
	

	/* Metodo getInfoBtnVolver */ 	
	static function getInfoBtnVolver($indice = false){
            $url = 'pan_panol_adm.php';
            $url_gestion = 'pan_panol_gestion.php';
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
                
            $criterio->add(GralSucursalPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(GralSucursalPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursalPanPanol::GEN_TABLA);
            $c->setCriterios();

            $os = GralSucursalPanPanol::getGralSucursalPanPanolsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener GralSucursals (Coleccion) relacionados a traves de GralSucursalPanPanol */ 	
	public function getGralSucursalsXGralSucursalPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalPanPanol::GEN_TABLA, GralSucursalPanPanol::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de GralSucursals relacionados a traves de GralSucursalPanPanol */ 	
	public function getCantidadGralSucursalsXGralSucursalPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(GralSucursal::GEN_ATTR_ID);
            if($estado){
                $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(GralSucursalPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(GralSucursalPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(GralSucursal::GEN_TABLA);
            $c->addRealJoin(GralSucursalPanPanol::GEN_TABLA, GralSucursalPanPanol::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = GralSucursal::getGralSucursals($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener GralSucursal (Objeto) relacionado a traves de GralSucursalPanPanol */ 	
	public function getGralSucursalXGralSucursalPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getGralSucursalsXGralSucursalPanPanol($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsInsumoPanPanols */ 	
	public function getInsInsumoPanPanols($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsInsumoPanPanol::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsInsumoPanPanol::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsInsumoPanPanol::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsInsumoPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsInsumoPanPanol::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsInsumoPanPanol::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insinsumopanpanols = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insinsumopanpanol = InsInsumoPanPanol::hidratarObjeto($fila);			
                $insinsumopanpanols[] = $insinsumopanpanol;
            }

            return $insinsumopanpanols;
	}	
	

	/* Método getInsInsumoPanPanolsBloque para MasInfo */ 	
	public function getInsInsumoPanPanolsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsInsumoPanPanols($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsInsumoPanPanols Habilitados */ 	
	public function getInsInsumoPanPanolsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsInsumoPanPanols($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsInsumoPanPanol */ 	
	public function getInsInsumoPanPanol($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsInsumoPanPanols($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsInsumoPanPanol relacionadas */ 	
	public function deleteInsInsumoPanPanols(){
            $obs = $this->getInsInsumoPanPanols();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsInsumoPanPanolsCmb() InsInsumoPanPanol relacionadas */ 	
	public function getInsInsumoPanPanolsCmb(){
            $c = new Criterio();
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
            $c->setCriterios();

            $os = InsInsumoPanPanol::getInsInsumoPanPanolsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsInsumoPanPanol */ 	
	public function getInsInsumosXInsInsumoPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoPanPanol::GEN_TABLA, InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsInsumoPanPanol */ 	
	public function getCantidadInsInsumosXInsInsumoPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsInsumoPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsInsumoPanPanol::GEN_TABLA, InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsInsumoPanPanol */ 	
	public function getInsInsumoXInsInsumoPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsInsumoPanPanol($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsStockTransformacions */ 	
	public function getInsStockTransformacions($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockTransformacion::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockTransformacion::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockTransformacion::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockTransformacion::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockTransformacion::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockTransformacion::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockTransformacion::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstocktransformacions = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstocktransformacion = InsStockTransformacion::hidratarObjeto($fila);			
                $insstocktransformacions[] = $insstocktransformacion;
            }

            return $insstocktransformacions;
	}	
	

	/* Método getInsStockTransformacionsBloque para MasInfo */ 	
	public function getInsStockTransformacionsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockTransformacions($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockTransformacions Habilitados */ 	
	public function getInsStockTransformacionsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockTransformacions($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockTransformacion */ 	
	public function getInsStockTransformacion($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockTransformacions($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockTransformacion relacionadas */ 	
	public function deleteInsStockTransformacions(){
            $obs = $this->getInsStockTransformacions();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockTransformacionsCmb() InsStockTransformacion relacionadas */ 	
	public function getInsStockTransformacionsCmb(){
            $c = new Criterio();
            $c->add(InsStockTransformacion::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTransformacion::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockTransformacion::getInsStockTransformacionsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsInsumos (Coleccion) relacionados a traves de InsStockTransformacion */ 	
	public function getInsInsumosXInsStockTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockTransformacion::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsStockTransformacion::GEN_TABLA, InsStockTransformacion::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsInsumos relacionados a traves de InsStockTransformacion */ 	
	public function getCantidadInsInsumosXInsStockTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsInsumo::GEN_ATTR_ID);
            if($estado){
                $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockTransformacion::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsStockTransformacion::GEN_TABLA, InsStockTransformacion::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsInsumo::getInsInsumos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsInsumo (Objeto) relacionado a traves de InsStockTransformacion */ 	
	public function getInsInsumoXInsStockTransformacion($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsInsumosXInsStockTransformacion($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsStockTransformacionDestinos */ 	
	public function getInsStockTransformacionDestinos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockTransformacionDestino::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockTransformacionDestino::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockTransformacionDestino::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockTransformacionDestino::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockTransformacionDestino::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockTransformacionDestino::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockTransformacionDestino::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockTransformacionDestino::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstocktransformaciondestinos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstocktransformaciondestino = InsStockTransformacionDestino::hidratarObjeto($fila);			
                $insstocktransformaciondestinos[] = $insstocktransformaciondestino;
            }

            return $insstocktransformaciondestinos;
	}	
	

	/* Método getInsStockTransformacionDestinosBloque para MasInfo */ 	
	public function getInsStockTransformacionDestinosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockTransformacionDestinos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockTransformacionDestinos Habilitados */ 	
	public function getInsStockTransformacionDestinosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockTransformacionDestinos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockTransformacionDestino */ 	
	public function getInsStockTransformacionDestino($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockTransformacionDestinos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockTransformacionDestino relacionadas */ 	
	public function deleteInsStockTransformacionDestinos(){
            $obs = $this->getInsStockTransformacionDestinos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockTransformacionDestinosCmb() InsStockTransformacionDestino relacionadas */ 	
	public function getInsStockTransformacionDestinosCmb(){
            $c = new Criterio();
            $c->add(InsStockTransformacionDestino::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTransformacionDestino::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockTransformacionDestino::getInsStockTransformacionDestinosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsStockTransformacions (Coleccion) relacionados a traves de InsStockTransformacionDestino */ 	
	public function getInsStockTransformacionsXInsStockTransformacionDestino($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockTransformacionDestino::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockTransformacionDestino::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTransformacion::GEN_TABLA);
            $c->addRealJoin(InsStockTransformacionDestino::GEN_TABLA, InsStockTransformacionDestino::GEN_ATTR_INS_STOCK_TRANSFORMACION_ID, InsStockTransformacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTransformacion::getInsStockTransformacions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsStockTransformacions relacionados a traves de InsStockTransformacionDestino */ 	
	public function getCantidadInsStockTransformacionsXInsStockTransformacionDestino($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsStockTransformacion::GEN_ATTR_ID);
            if($estado){
                $c->add(InsStockTransformacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockTransformacionDestino::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockTransformacionDestino::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTransformacion::GEN_TABLA);
            $c->addRealJoin(InsStockTransformacionDestino::GEN_TABLA, InsStockTransformacionDestino::GEN_ATTR_INS_STOCK_TRANSFORMACION_ID, InsStockTransformacion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTransformacion::getInsStockTransformacions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsStockTransformacion (Objeto) relacionado a traves de InsStockTransformacionDestino */ 	
	public function getInsStockTransformacionXInsStockTransformacionDestino($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsStockTransformacionsXInsStockTransformacionDestino($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(PanPanolUsUsuario::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(PanPanolUsUsuario::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PanPanolUsUsuario::GEN_TABLA);
            $c->setCriterios();

            $os = PanPanolUsUsuario::getPanPanolUsUsuariosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener UsUsuarios (Coleccion) relacionados a traves de PanPanolUsUsuario */ 	
	public function getUsUsuariosXPanPanolUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PanPanolUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PanPanolUsUsuario::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PanPanolUsUsuario::GEN_TABLA, PanPanolUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de UsUsuarios relacionados a traves de PanPanolUsUsuario */ 	
	public function getCantidadUsUsuariosXPanPanolUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(UsUsuario::GEN_ATTR_ID);
            if($estado){
                $c->add(UsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PanPanolUsUsuario::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PanPanolUsUsuario::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PanPanolUsUsuario::GEN_TABLA, PanPanolUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = UsUsuario::getUsUsuarios($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener UsUsuario (Objeto) relacionado a traves de PanPanolUsUsuario */ 	
	public function getUsUsuarioXPanPanolUsUsuario($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getUsUsuariosXPanPanolUsUsuario($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaRemito::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRemito::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRemito::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRemito::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo getInsStockMovimientos */ 	
	public function getInsStockMovimientos($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockMovimiento::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockMovimiento::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockMovimiento::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockMovimiento::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockMovimiento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockMovimiento::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstockmovimientos = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstockmovimiento = InsStockMovimiento::hidratarObjeto($fila);			
                $insstockmovimientos[] = $insstockmovimiento;
            }

            return $insstockmovimientos;
	}	
	

	/* Método getInsStockMovimientosBloque para MasInfo */ 	
	public function getInsStockMovimientosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockMovimientos($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockMovimientos Habilitados */ 	
	public function getInsStockMovimientosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockMovimientos($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockMovimiento */ 	
	public function getInsStockMovimiento($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockMovimientos($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockMovimiento relacionadas */ 	
	public function deleteInsStockMovimientos(){
            $obs = $this->getInsStockMovimientos();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockMovimientosCmb() InsStockMovimiento relacionadas */ 	
	public function getInsStockMovimientosCmb(){
            $c = new Criterio();
            $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockMovimiento::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockMovimiento::getInsStockMovimientosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsStockTipoMovimientos (Coleccion) relacionados a traves de InsStockMovimiento */ 	
	public function getInsStockTipoMovimientosXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
            $c->addRealJoin(InsStockMovimiento::GEN_TABLA, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, InsStockTipoMovimiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTipoMovimiento::getInsStockTipoMovimientos($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsStockTipoMovimientos relacionados a traves de InsStockMovimiento */ 	
	public function getCantidadInsStockTipoMovimientosXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsStockTipoMovimiento::GEN_ATTR_ID);
            if($estado){
                $c->add(InsStockTipoMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockTipoMovimiento::GEN_TABLA);
            $c->addRealJoin(InsStockMovimiento::GEN_TABLA, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, InsStockTipoMovimiento::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockTipoMovimiento::getInsStockTipoMovimientos($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsStockTipoMovimiento (Objeto) relacionado a traves de InsStockMovimiento */ 	
	public function getInsStockTipoMovimientoXInsStockMovimiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsStockTipoMovimientosXInsStockMovimiento($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getInsStockResumens */ 	
	public function getInsStockResumens($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(InsStockResumen::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(InsStockResumen::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		
                //$criterio->addOrden(InsStockResumen::GEN_ATTR_ORDEN, 'asc');                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(InsStockResumen::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(InsStockResumen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(InsStockResumen::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".InsStockResumen::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $insstockresumens = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $insstockresumen = InsStockResumen::hidratarObjeto($fila);			
                $insstockresumens[] = $insstockresumen;
            }

            return $insstockresumens;
	}	
	

	/* Método getInsStockResumensBloque para MasInfo */ 	
	public function getInsStockResumensParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getInsStockResumens($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getInsStockResumens Habilitados */ 	
	public function getInsStockResumensHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getInsStockResumens($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getInsStockResumen */ 	
	public function getInsStockResumen($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getInsStockResumens($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de InsStockResumen relacionadas */ 	
	public function deleteInsStockResumens(){
            $obs = $this->getInsStockResumens();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getInsStockResumensCmb() InsStockResumen relacionadas */ 	
	public function getInsStockResumensCmb(){
            $c = new Criterio();
            $c->add(InsStockResumen::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockResumen::GEN_TABLA);
            $c->setCriterios();

            $os = InsStockResumen::getInsStockResumensCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener InsStockResumenTipoEstados (Coleccion) relacionados a traves de InsStockResumen */ 	
	public function getInsStockResumenTipoEstadosXInsStockResumen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(InsStockResumenTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockResumen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockResumen::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockResumenTipoEstado::GEN_TABLA);
            $c->addRealJoin(InsStockResumen::GEN_TABLA, InsStockResumen::GEN_ATTR_INS_STOCK_RESUMEN_TIPO_ESTADO_ID, InsStockResumenTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockResumenTipoEstado::getInsStockResumenTipoEstados($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de InsStockResumenTipoEstados relacionados a traves de InsStockResumen */ 	
	public function getCantidadInsStockResumenTipoEstadosXInsStockResumen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(InsStockResumenTipoEstado::GEN_ATTR_ID);
            if($estado){
                $c->add(InsStockResumenTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(InsStockResumen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(InsStockResumen::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(InsStockResumenTipoEstado::GEN_TABLA);
            $c->addRealJoin(InsStockResumen::GEN_TABLA, InsStockResumen::GEN_ATTR_INS_STOCK_RESUMEN_TIPO_ESTADO_ID, InsStockResumenTipoEstado::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = InsStockResumenTipoEstado::getInsStockResumenTipoEstados($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener InsStockResumenTipoEstado (Objeto) relacionado a traves de InsStockResumen */ 	
	public function getInsStockResumenTipoEstadoXInsStockResumen($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getInsStockResumenTipoEstadosXInsStockResumen($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeRecepcionEstados */ 	
	public function getPdeRecepcionEstados($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeRecepcionEstado::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeRecepcionEstado::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeRecepcionEstado::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeRecepcionEstado::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeRecepcionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeRecepcionEstado::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeRecepcionEstado::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pderecepcionestados = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pderecepcionestado = PdeRecepcionEstado::hidratarObjeto($fila);			
                $pderecepcionestados[] = $pderecepcionestado;
            }

            return $pderecepcionestados;
	}	
	

	/* Método getPdeRecepcionEstadosBloque para MasInfo */ 	
	public function getPdeRecepcionEstadosParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeRecepcionEstados($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeRecepcionEstados Habilitados */ 	
	public function getPdeRecepcionEstadosHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeRecepcionEstados($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeRecepcionEstado */ 	
	public function getPdeRecepcionEstado($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeRecepcionEstados($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeRecepcionEstado relacionadas */ 	
	public function deletePdeRecepcionEstados(){
            $obs = $this->getPdeRecepcionEstados();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeRecepcionEstadosCmb() PdeRecepcionEstado relacionadas */ 	
	public function getPdeRecepcionEstadosCmb(){
            $c = new Criterio();
            $c->add(PdeRecepcionEstado::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcionEstado::GEN_TABLA);
            $c->setCriterios();

            $os = PdeRecepcionEstado::getPdeRecepcionEstadosCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeRecepcions (Coleccion) relacionados a traves de PdeRecepcionEstado */ 	
	public function getPdeRecepcionsXPdeRecepcionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionEstado::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionEstado::GEN_TABLA, PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_ID, PdeRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeRecepcions relacionados a traves de PdeRecepcionEstado */ 	
	public function getCantidadPdeRecepcionsXPdeRecepcionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeRecepcionEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeRecepcionEstado::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeRecepcionEstado::GEN_TABLA, PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_ID, PdeRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeRecepcion::getPdeRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeRecepcion (Objeto) relacionado a traves de PdeRecepcionEstado */ 	
	public function getPdeRecepcionXPdeRecepcionEstado($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeRecepcionsXPdeRecepcionEstado($paginador, $criterio, $estado, $arr_ordens);
            foreach($os as $o){
                return $o;
            }

            return false;	
	}

	/* Metodo getPdeCentroRecepcionPanPanols */ 	
	public function getPdeCentroRecepcionPanPanols($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(PdeCentroRecepcionPanPanol::getCantidadTotalDeRegistros(), 1);
            }
            if(is_null($criterio)){
                //$criterio = new Criterio(PdeCentroRecepcionPanPanol::SES_CRITERIOS);
                $criterio = new Criterio();
                $criterio->addTabla(PdeCentroRecepcionPanPanol::GEN_TABLA);

                if(is_array($arr_ordens)){
                    foreach($arr_ordens as $arr_orden){
                        $criterio->addOrden($arr_orden['campo'], $arr_orden['orden']);
                    }
                }

		                            
                $criterio->addOrden('1', 'asc');			
                $criterio->setCriterios();
            }
                
            $criterio->add(PdeCentroRecepcionPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            if(!is_null($estado)){
                if($estado){
                    $criterio->add(PdeCentroRecepcionPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                }else{
                    $criterio->add(PdeCentroRecepcionPanPanol::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);			
                }
            }

            $criterio->setCriterios();

            $cons = new Consulta();
            $sql = "SELECT ".$criterio->getDistinct()." ".PdeCentroRecepcionPanPanol::GEN_TABLA.".* FROM ".$criterio->getTablas().$criterio->getWhere().$criterio->getOrden();

            $cons->setSql($sql);
            $cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
            $cons->execute();
            
            //Gral::echoSqlSentence($cons->getSql());

            $paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */

            $pdecentrorecepcionpanpanols = array();
            while($fila = pg_fetch_array($cons->getResultado())){
                $pdecentrorecepcionpanpanol = PdeCentroRecepcionPanPanol::hidratarObjeto($fila);			
                $pdecentrorecepcionpanpanols[] = $pdecentrorecepcionpanpanol;
            }

            return $pdecentrorecepcionpanpanols;
	}	
	

	/* Método getPdeCentroRecepcionPanPanolsBloque para MasInfo */ 	
	public function getPdeCentroRecepcionPanPanolsParaBloqueMasInfo($paginador = null, $criterio = null, $estado = null){
            // inicializacion de variables
            if(is_null($paginador)){
                $paginador = new Paginador(50, 1);
            }

            $os = $this->getPdeCentroRecepcionPanPanols($paginador, $criterio, $estado);
            return $os;
		
	}

	/* Método getPdeCentroRecepcionPanPanols Habilitados */ 	
	public function getPdeCentroRecepcionPanPanolsHabilitados($paginador = null, $criterio = null, $estado = null){

            $os = $this->getPdeCentroRecepcionPanPanols($paginador, $criterio, true);
            return $os;
		
	}

	/* Método getPdeCentroRecepcionPanPanol */ 	
	public function getPdeCentroRecepcionPanPanol($criterio = null){
            $paginador = new Paginador(1, 1);
            $os = $this->getPdeCentroRecepcionPanPanols($paginador, $criterio);
            foreach($os as $o){
                return $o;
            }
            return false;
	}
	

	/* Delete de PdeCentroRecepcionPanPanol relacionadas */ 	
	public function deletePdeCentroRecepcionPanPanols(){
            $obs = $this->getPdeCentroRecepcionPanPanols();
            foreach($obs as $o){
                $o->delete();
            }
            return true;
	}

	/* Metodos getPdeCentroRecepcionPanPanolsCmb() PdeCentroRecepcionPanPanol relacionadas */ 	
	public function getPdeCentroRecepcionPanPanolsCmb(){
            $c = new Criterio();
            $c->add(PdeCentroRecepcionPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcionPanPanol::GEN_TABLA);
            $c->setCriterios();

            $os = PdeCentroRecepcionPanPanol::getPdeCentroRecepcionPanPanolsCmbF(null, $c);
            return $os;
	}

	/* Getter para obtener PdeCentroRecepcions (Coleccion) relacionados a traves de PdeCentroRecepcionPanPanol */ 	
	public function getPdeCentroRecepcionsXPdeCentroRecepcionPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            if($estado){
                $c->add(PdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroRecepcionPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroRecepcionPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeCentroRecepcionPanPanol::GEN_TABLA, PdeCentroRecepcionPanPanol::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, PdeCentroRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroRecepcion::getPdeCentroRecepcions($paginador, $c);
            return $os;
	}

	/* Getter para obtener la cantidad de PdeCentroRecepcions relacionados a traves de PdeCentroRecepcionPanPanol */ 	
	public function getCantidadPdeCentroRecepcionsXPdeCentroRecepcionPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $c = new Criterio();
            $c->addSelect(PdeCentroRecepcion::GEN_ATTR_ID);
            if($estado){
                $c->add(PdeCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $c->add(PdeCentroRecepcionPanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            }
            $c->add(PdeCentroRecepcionPanPanol::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
            $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
            $c->addRealJoin(PdeCentroRecepcionPanPanol::GEN_TABLA, PdeCentroRecepcionPanPanol::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, PdeCentroRecepcion::GEN_ATTR_ID);
            $c->addOrden(2);
            $c->setCriterios();

            $os = PdeCentroRecepcion::getPdeCentroRecepcions($paginador, $c);
            $cantidad = count($os);
            return $cantidad;
	}

	/* Getter para obtener PdeCentroRecepcion (Objeto) relacionado a traves de PdeCentroRecepcionPanPanol */ 	
	public function getPdeCentroRecepcionXPdeCentroRecepcionPanPanol($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
            $os = $this->getPdeCentroRecepcionsXPdeCentroRecepcionPanPanol($paginador, $criterio, $estado, $arr_ordens);
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
                
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRemitoAjuste::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRemitoAjuste::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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
            $c->add(VtaRemitoAjuste::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
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

	/* Metodo que retorna una coleccion de IDs de los GralSucursals asignados a PanPanol */ 	
	public function getGralSucursalPanPanolsId(){
            $ids = array();
            foreach($this->getGralSucursalPanPanols() as $o){
            
                $ids[] = $o->getGralSucursalId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos GralSucursals asignados al PanPanol */ 	
	public function setGralSucursalPanPanols($ids){
            $this->deleteGralSucursalPanPanols();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new GralSucursalPanPanol();
                    $o->setGralSucursalId($id);
                    $o->setPanPanolId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion GralSucursal en el alta de PanPanol */ 	
	public function getAltaMostrarBloqueRelacionGralSucursalPanPanol(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los UsUsuarios asignados a PanPanol */ 	
	public function getPanPanolUsUsuariosId(){
            $ids = array();
            foreach($this->getPanPanolUsUsuarios() as $o){
            
                $ids[] = $o->getUsUsuarioId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos UsUsuarios asignados al PanPanol */ 	
	public function setPanPanolUsUsuarios($ids){
            $this->deletePanPanolUsUsuarios();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PanPanolUsUsuario();
                    $o->setUsUsuarioId($id);
                    $o->setPanPanolId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion UsUsuario en el alta de PanPanol */ 	
	public function getAltaMostrarBloqueRelacionPanPanolUsUsuario(){
            return true;
	}
	

	/* Metodo que retorna una coleccion de IDs de los PdeCentroRecepcions asignados a PanPanol */ 	
	public function getPdeCentroRecepcionPanPanolsId(){
            $ids = array();
            foreach($this->getPdeCentroRecepcionPanPanols() as $o){
            
                $ids[] = $o->getPdeCentroRecepcionId();
            
            }
            return $ids;
	}
	

	/* Método setea nuevos PdeCentroRecepcions asignados al PanPanol */ 	
	public function setPdeCentroRecepcionPanPanols($ids){
            $this->deletePdeCentroRecepcionPanPanols();
            if($ids){
                foreach($ids as $id => $v){
                    $o = new PdeCentroRecepcionPanPanol();
                    $o->setPdeCentroRecepcionId($id);
                    $o->setPanPanolId($this->getId());
                    $o->save();
                }
            }
            return true;
	}
	

	/* Método que indica si debe mostrarse o no el bloque de relacion PdeCentroRecepcion en el alta de PanPanol */ 	
	public function getAltaMostrarBloqueRelacionPdeCentroRecepcionPanPanol(){
            return true;
	}
	

	/* Metodo que retorna el PanTipoPanol (Clave Foranea) */ 	
    public function getPanTipoPanol(){
        $o = new PanTipoPanol();
        $o->setId($this->getPanTipoPanolId());
        return $o;			
    }

	/* Metodo que retorna el PanTipoPanol (Clave Foranea) en Array */ 	
    public function getPanTipoPanolEnArray(&$arr_os){
        if($this->getPanTipoPanolId() != 'null'){
            if(isset($arr_os[$this->getPanTipoPanolId()])){
                $o = $arr_os[$this->getPanTipoPanolId()];
            }else{
                $o = PanTipoPanol::getOxId($this->getPanTipoPanolId());
                if($o){
                    $arr_os[$this->getPanTipoPanolId()] = $o;
                }
            }
        }else{
            $o = new PanTipoPanol();
        }
        return $o;		
    }

	/* Metodo que retorna el PdeCentroPedido (Clave Foranea) */ 	
    public function getPdeCentroPedido(){
        $o = new PdeCentroPedido();
        $o->setId($this->getPdeCentroPedidoId());
        return $o;			
    }

	/* Metodo que retorna el PdeCentroPedido (Clave Foranea) en Array */ 	
    public function getPdeCentroPedidoEnArray(&$arr_os){
        if($this->getPdeCentroPedidoId() != 'null'){
            if(isset($arr_os[$this->getPdeCentroPedidoId()])){
                $o = $arr_os[$this->getPdeCentroPedidoId()];
            }else{
                $o = PdeCentroPedido::getOxId($this->getPdeCentroPedidoId());
                if($o){
                    $arr_os[$this->getPdeCentroPedidoId()] = $o;
                }
            }
        }else{
            $o = new PdeCentroPedido();
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
            		
        if($contexto_solicitante != PanTipoPanol::GEN_CLASE){
            if($this->getPanTipoPanol()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PanTipoPanol::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPanTipoPanol()->getDescripcion().'</strong>';
                $descripcion.= ' - ';
            }
        }
            		
        if($contexto_solicitante != PdeCentroPedido::GEN_CLASE){
            if($this->getPdeCentroPedido()->getDescripcion() != ''){
                $descripcion.= Lang::_lang(PdeCentroPedido::GEN_CLASE, true).':';
                $descripcion.= '<strong>'.$this->getPdeCentroPedido()->getDescripcion().'</strong>';
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
            
            //$cons->setSQL('SELECT count(id) cantidad FROM pan_panol'); // modificado por reltuples
            $cons->setSQL("SELECT reltuples AS cantidad FROM pg_class WHERE relname = 'pan_panol';");
            
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

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'descripcion' */ 	
	static function getOxDescripcion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DESCRIPCION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pan_tipo_panol_id' */ 	
	static function getOxPanTipoPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_TIPO_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pan_tipo_panol_id' */ 	
	static function getOsxPanTipoPanolId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PAN_TIPO_PANOL_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'pde_centro_pedido_id' */ 	
	static function getOsxPdeCentroPedidoId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'geo_localidad_id' */ 	
	static function getOxGeoLocalidadId($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_GEO_LOCALIDAD_ID, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'domicilio' */ 	
	static function getOxDomicilio($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_DOMICILIO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'responsable' */ 	
	static function getOxResponsable($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_RESPONSABLE, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'telefono' */ 	
	static function getOxTelefono($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_TELEFONO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'email' */ 	
	static function getOxEmail($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_EMAIL, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo' */ 	
	static function getOxCodigo($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'codigo_corto' */ 	
	static function getOxCodigoCorto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_CORTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
            foreach($obs as $o){
                    return $o;
            }
            return false;
	}

	/* retorna una coleccion de objetos de acuerdo al 'codigo_corto' */ 	
	static function getOsxCodigoCorto($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CODIGO_CORTO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'color' */ 	
	static function getOxColor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_COLOR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'observacion' */ 	
	static function getOxObservacion($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_OBSERVACION, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'orden' */ 	
	static function getOxOrden($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ORDEN, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'estado' */ 	
	static function getOxEstado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_ESTADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado' */ 	
	static function getOxCreado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'creado_por' */ 	
	static function getOxCreadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_CREADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado' */ 	
	static function getOxModificado($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
            return $obs;
	}

	/* retorna un objeto de acuerdo al 'modificado_por' */ 	
	static function getOxModificadoPor($valor){
            $criterio = new Criterio();
            $criterio->add(self::GEN_ATTR_MODIFICADO_POR, $valor, Criterio::IGUAL);
            $criterio->addTabla(self::GEN_TABLA);
            $criterio->setCriterios();

            $paginador = new Paginador(1,1);

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols(null, $criterio);
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

            $obs = self::getPanPanols($paginador, $criterio);
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

            $obs = self::getPanPanols($paginador, $criterio);
            return $obs;
	}

	/* metodos static general por clase para el menu contextual */ 	
	static function getFiltrosArrGral($archivo = ''){
            if(trim($archivo) == ''){
                $arr = array('clase' => self::GEN_CLASE, 'tabla' => self::GEN_TABLA, 'archivo' => 'pan_panol_adm');
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
                $c->addTabla(PanPanol::GEN_TABLA);
                $c->addOrden(PanPanol::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                $c->setCriterios();

                $pan_panols = PanPanol::getPanPanols(null, $c);

                $arr = array();
                foreach($pan_panols as $pan_panol){
                    $descripcion = $pan_panol->getDescripcion();
                    $descripcion = trim($descripcion);
                    //$descripcion = strtoupper($descripcion);

                    $arr[$descripcion] = $descripcion;
                }

                return $arr;
            }
        
}
?>